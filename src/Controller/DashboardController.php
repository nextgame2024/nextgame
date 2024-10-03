<?php

namespace App\Controller;

use App\Entity\DaysOff;
use App\Entity\Table;
use DateTime;
use App\Entity\User;
use App\Entity\Teams;
use App\Entity\Tournament;
use App\Entity\TournamentType;
use App\Form\UserExtraInfoType;
use App\Form\TournamentFormType;
use App\Repository\UserRepository;
use App\Repository\TeamsRepository;
use App\Repository\DaysOffRepository;
use App\Entity\TournamentRegistration;
use App\Repository\GamesRepository;
use App\Repository\ParametersRepository;
use App\Repository\TableRepository;
use App\Repository\TeamsNamesRepository;
use App\Repository\TournamentRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserProfileRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TournamentRegistrationRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(UserRepository $posts): Response
    {
        // dd($posts->findAll());
        return $this->render('dashboard/index.html.twig', [
            'posts' => 'posts',
        ]);
    }

    // Registration Section ------------------------------------------------
    #[Route('/dashboard/registration', name: 'app_dashboard_registration')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function dashboardRegistration(
        Request $request,
        UserRepository $userRepository,
        UserProfileRepository $userProfile,
        TournamentRegistrationRepository $tournamentRegistration,
        TeamsRepository $teamsRepository
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $sortBy = $request->query->get('sort_by', 'team_name');
        $order = $request->query->get('order', 'ASC');
        $searchBy = $request->query->get('search_by', null);
        $searchValue = $request->query->get('search_value', null);
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $location = $getCurrentLocation->getId();
        $offset = ($page - 1) * $limit;

        $paginator = $tournamentRegistration->findByTournamentRegistration(
            $location,
            $limit,
            $offset,
            $sortBy,
            $order,
            $searchBy,
            $searchValue
        );
        $totalItems = $tournamentRegistration->countByTournamentRegistration(
            $location,
            $limit,
            $offset,
            $sortBy,
            $order,
            $searchBy,
            $searchValue
        );
        $totalPages = ceil($totalItems / $limit);

        foreach ($paginator as &$tournament) {
            $teams = $teamsRepository->findTeamByUserTorneoId(
                $tournament['tournament_id'],
                $tournament['div_id']
            );

            $tournament['teams'] = $teams;
        }

        return $this->render('dashboard/tournament_registration.html.twig', [
            'tournament_registration' => $paginator,
            'current_page' => $page,
            'total_pages' => $totalPages,
            'sort_by' => $sortBy,
            'order' => $order,
            'search_by' => $searchBy,
            'search_value' => $searchValue,
        ]);
    }


    #[Route('/dashboard/registration/status/{id}', name: 'app_dashboard_registration_status', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function changeRegistrationStatus(
        int $id,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        TournamentRegistrationRepository $tournamentRegistrationRepository
    ): Response {
        $registration = $tournamentRegistrationRepository->find($id);

        if (!$registration) {
            throw $this->createNotFoundException('Registration not found');
        }
        $status = $registration->getStatus() == 'Registered' ? 'Open' : 'Registered';
        $registration->setStatus($status);
        $entityManager->flush();

        $this->addFlash('success', 'Tournament registration has been successfully registered.');

        return $this->redirectToRoute('app_dashboard_registration');
    }

    #[Route('/dashboard/registration/tournament/{id}', name: 'app_dashboard_registration_user', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function userRegistration(
        int $id,
        Request $request,
        TournamentRepository $tournamentRepository,
        UserProfileRepository $userProfile,
        EntityManagerInterface $entityManager,
        TournamentRegistrationRepository $tournamentRegistrationRepository,
        TeamsRepository $teamsRepository,
        TeamsNamesRepository $teamsNamesRepository
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());

        $tournamentId = $request->request->get('tournament_id');
        $players = $request->request->get('players');
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $userProfile = $currentUser->getUserProfile();
        $getDiv = $userProfile->getDivision();

        if (!$getDiv) {
            $this->addFlash('danger', 'The player has not yet been assigned a Division.');
            return $this->redirectToRoute('app_dashboard_tournament');
        }

        $location = $getCurrentLocation->getId();
        $tournament = $tournamentRepository->find($tournamentId);

        $getTeamId = $tournamentRegistrationRepository->findTeamByTorneoIdAndDivisionId($tournamentId, $getDiv->getId(), $players);

        $getTeamName = $teamsNamesRepository->find($getTeamId);

        $newTeam = new Teams();
        $newTeam->setTorneo($tournament);
        $newTeam->setName($getTeamName->getName());
        $newTeam->setDivision($getDiv);
        $entityManager->persist($newTeam);
        $entityManager->flush();

        $team = $teamsRepository->find($getTeamId);

        if (!$tournamentId || !$userProfile || !$location) {
            $this->addFlash('danger', 'Invalid data provided.');
            return $this->redirectToRoute('app_dashboard_tournament');
        }

        $registration = new TournamentRegistration();
        $registration->setTorneo($tournament);
        $registration->setUserProfile($userProfile);
        $registration->setLocation($getCurrentLocation);
        $registration->setStatus('Registered');
        $registration->setTeam($team);
        $entityManager->persist($registration);
        $entityManager->flush();

        $this->addFlash('success', 'Tournament registration has been successfully registered.');
        return $this->redirectToRoute('app_dashboard_tournament');
    }

    #[Route('/dashboard/tournament/create-games/{id}', name: 'app_dashboard_create_games', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createGames(
        Request $request,
        EntityManagerInterface $entityManager,
        TournamentRepository $tournamentRepository,
        UserProfileRepository $userProfile,
        TournamentRegistrationRepository $tournamentRegistrationRepository,
        DaysOffRepository $daysOff,
        DaysOff $daysOffEntity,
        Table $tableEntity,
        TableRepository $tableRepository,
        GamesRepository $gamesRepository,
        ParametersRepository $parametersRepository
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $location = $getCurrentLocation->getId();
        $tournamentId = $request->request->get('tournament_id');
        $tournament = $tournamentRepository->findTournamentById($tournamentId);
        $tournamentType = $tournament->getTournamentType();
        $tournamentTypeId = $tournamentType->getid();
        $validateTeams = $tournamentRegistrationRepository->validateTeamConformation($tournamentId, $tournamentTypeId);

        if (!$validateTeams) {
            $this->addFlash('danger', 'Please check the number of players and teams to ensure they meet the required specifications.');
            return $this->redirectToRoute('app_dashboard_tournament');
        }

        $getGames = $tournamentRegistrationRepository->getGamesByTournamentTypeAndDivision($tournamentId);
        $getDaysOff = $daysOff->findDaysOffByLocationId($location);
        $getNumberOfTeams = $tournamentRegistrationRepository->getNumberOfTeamsAndDivision($tournamentId, $location);
        $getTeamIds = $tournamentRegistrationRepository->getTeamIds($tournamentId, 1);
        $tables = $tableRepository->findTablesByLocationId($location);
        $cycles_number = $parametersRepository->findParameterByNumberAndLocationId($location, 1);

        foreach ($getNumberOfTeams as $team) {
            $gamesByDivision[] = $this->organiseTeamsRounds($team['numberOfTeams'], $team['divisionId'], $getTeamIds);
        }
        $daysOff = [];
        foreach ($getDaysOff as $daysOffEntity) {
            $daysOff[] = $daysOffEntity->getDate();
        }
        $idTables = [];
        foreach ($tables as $tableEntity) {
            $idTables[] = $tableEntity->getId();
        }
        $mergedGamesByDivisionAndDate = [];
        $gamesByDivisionAndDate = $this->assignDates($gamesByDivision, $tournament->getStartDay(), $daysOff);
        //------------------------
        if ($cycles_number[0]->getValue() > 1) {
            $maxDates = [];
            foreach ($gamesByDivisionAndDate as $subArray) {
                $maxDate = null;
                foreach ($subArray as $innerArray) {
                    if (isset($innerArray[6]) && preg_match('/\d{4}-\d{2}-\d{2}/', $innerArray[6])) {
                        $date = $innerArray[6];
                        if ($maxDate === null || $date > $maxDate) {
                            $maxDate = $date;
                        }
                    }
                }
                if ($maxDate !== null) {
                    $maxDates[] = $maxDate;
                }
            }
            $gamesByDivisionAndDateCycles = [];
            foreach ($maxDates as $index => $dates) {
                $newDate = \DateTime::createFromFormat('Y-m-d', $dates);
                $filteredGamesByDivisionAndDate = $this->filterArrayByPosition($gamesByDivisionAndDate, $index);
                array_push($gamesByDivisionAndDateCycles, $this->assignDates($filteredGamesByDivisionAndDate, $newDate, $daysOff));
            }
            $gamesByDivisionAndDateCycles = $this->removeExtraPositions($gamesByDivisionAndDateCycles);
            $mergedGamesByDivisionAndDate = $this->mergeArrays($gamesByDivisionAndDate, $gamesByDivisionAndDateCycles);
        }
        //------------------------
        $newGames = [];
        $lastAssignedTable = [];
        $assignedTableIndex = 0;
        foreach ($mergedGamesByDivisionAndDate as $position => &$rounds) {
            foreach ($rounds as &$round) {
                $roundName = $round[0];
                $date = $round[6];
                // Initialize if no tables have been assigned for this date yet
                if (!isset($lastAssignedTable[$date])) {
                    $lastAssignedTable[$date] = $assignedTableIndex;
                }
                // Assign the next consecutive table from the $tables array
                $round[] = $idTables[$lastAssignedTable[$date]];
                $lastAssignedTable[$date]++;
                if ($lastAssignedTable[$date] >= count($idTables)) {
                    $lastAssignedTable[$date] = 0;
                }
            }
        }
        foreach ($mergedGamesByDivisionAndDate as $gameDivision) {
            foreach ($gameDivision as $game) {
                $getRoundAndGames = array_filter($getGames, function ($item) use ($game) {
                    return (
                        $item['team_id_1'] == $game[4] && $item['team_id_2'] == $game[5]
                        || $item['team_id_1'] == $game[5] && $item['team_id_2'] == $game[4]
                    ) && $item['division_id'] == $game[1];
                });
                $getRoundAndGames = array_values($getRoundAndGames);
                // dd($getRoundAndGames);
                if (!empty($getRoundAndGames)) {
                    foreach ($getRoundAndGames as &$gameRecord) {
                        $gameRecord['round'] = $game[0];
                        $gameRecord['game_date'] = $game[6];
                        $gameRecord['table'] = $game[7];
                        $gameRecord['players'] = $tournament->getPlayers();
                        if ($tournament->getPlayers() == 2) {
                            $gameRecord['team_id_1_doubles_1'] = $getRoundAndGames[0]['user_profile_id_team_1'];
                            $gameRecord['team_id_1_doubles_2'] = $getRoundAndGames[2]['user_profile_id_team_1'];
                            $gameRecord['team_id_2_doubles_1'] = $getRoundAndGames[0]['user_profile_id_team_2'];
                            $gameRecord['team_id_2_doubles_2'] = $getRoundAndGames[1]['user_profile_id_team_2'];
                        }
                        if ($tournament->getPlayers() == 3) {
                            $gameRecord['team_id_1_doubles_1'] = $getRoundAndGames[0]['user_profile_id_team_1'];
                            $gameRecord['team_id_1_doubles_2'] = $getRoundAndGames[3]['user_profile_id_team_1'];
                            $gameRecord['team_id_2_doubles_1'] = $getRoundAndGames[0]['user_profile_id_team_2'];
                            $gameRecord['team_id_2_doubles_2'] = $getRoundAndGames[1]['user_profile_id_team_2'];

                            $gameRecord['team_id_1_doubles_3'] = $getRoundAndGames[6]['user_profile_id_team_1'];
                            $gameRecord['team_id_1_doubles_4'] = $getRoundAndGames[0]['user_profile_id_team_1'];
                            $gameRecord['team_id_2_doubles_3'] = $getRoundAndGames[2]['user_profile_id_team_2'];
                            $gameRecord['team_id_2_doubles_4'] = $getRoundAndGames[0]['user_profile_id_team_2'];
                        }
                    }
                    $newGames[] = $getRoundAndGames;
                }
            }
        }
        // dd($newGames);
        $storedGames = $gamesRepository->createGamesByTournamentType($newGames);

        if ($storedGames) {
            $tournamentDetails = $tournamentRepository->find($tournamentId);

            if (!$tournamentDetails) {
                throw $this->createNotFoundException('Tournament not found');
            }
            $status = 'Games created';
            $tournamentDetails->setStatus($status);
            $entityManager->flush();
            $this->addFlash('success', 'Games have been successfully created.');
        } else {
            $this->addFlash('danger', 'The player has not yet been assigned a Division.');
        }
        return $this->redirectToRoute('app_dashboard_tournament');
    }

    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function filterArrayByPosition(array $array, int $position): array
    {
        if (isset($array[$position])) {
            return [$array[$position]];
        }
        return [];
    }

    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function removeExtraPositions(array $array): array
    {
        $result = [];

        foreach ($array as $item) {
            if (isset($item[0]) && is_array($item[0])) {
                $result[] = $item[0];
            }
        }
        return $result;
    }

    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function mergeArrays(array $array1, array $array2): array
    {
        $result = [];
        foreach ($array1 as $key => $subArray1) {
            if (isset($array2[$key])) {
                $result[$key] = array_merge($subArray1, $array2[$key]);
            } else {
                $result[$key] = $subArray1;
            }
        }

        return $result;
    }

    //-------------------------------------------------------------
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function isDayOff($date, $daysOff)
    {
        foreach ($daysOff as $dayOff) {
            if ($date->format('Y-m-d') === $dayOff->format('Y-m-d')) {
                return true;
            }
        }
        return false;
    }

    // Function to get the next available Monday, skipping off days
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function getNextAvailableMonday($currentDate, $daysOff)
    {
        do {
            $currentDate->modify('+7 days');
        } while ($this->isDayOff($currentDate, $daysOff));

        return $currentDate;
    }

    // Function to assign dates for each position, starting the date over for each level
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function assignDates($array, $startDay, $daysOff)
    {
        foreach ($array as &$level) {
            $currentDate = clone $startDay; // Reset start day for each position
            $firstRoundAssigned = false;
            $previousRound = null;

            foreach ($level as &$item) {
                $currentRound = $item[0]; // Round identifier

                if (!$firstRoundAssigned) {
                    $firstRoundAssigned = true;
                } elseif ($currentRound !== $previousRound) {
                    $currentDate = $this->getNextAvailableMonday($currentDate, $daysOff);
                }

                // Assign date to item
                $item[6] = $currentDate->format('Y-m-d');

                // Track the previous round
                $previousRound = $currentRound;
            }
        }

        return $array;
    }
    //-----------------------------------------------------------------

    #[Route('/dashboard/registration/change-team/{id}', name: 'app_dashboard_change_team', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function organiseTeamsRounds(int $numberOfTeams, int $divisionId, array $getTeamIds)
    {
        $isOdd = $numberOfTeams % 2 !== 0;
        if ($isOdd) {
            $numberOfTeams += 1; // Adding a dummy team
        }
        $teams = range(1, $numberOfTeams);
        if ($isOdd) {
            $teams[$numberOfTeams - 1] = null; // Assign null to the dummy team
        }

        // Number of rounds is number of teams - 1 (for even), or same number with the dummy team
        $numberOfRounds = $numberOfTeams - 1;
        $matches = [];

        for ($round = 1; $round <= $numberOfRounds; $round++) {
            $roundMatches = [];
            // Pair the first team with a rotating other team
            for ($i = 0; $i < $numberOfTeams / 2; $i++) {
                $team1 = $teams[$i];
                $team2 = $teams[$numberOfTeams - 1 - $i];
                $team1Data = array_filter($getTeamIds, function ($item) use ($team1, $divisionId) {
                    return $item['currentTeamId'] == $team1 && $item['divisionId'] == $divisionId;
                });
                $team1Data = array_values($team1Data);
                $team2Data = array_filter($getTeamIds, function ($item) use ($team2, $divisionId) {
                    return $item['currentTeamId'] == $team2 && $item['divisionId'] == $divisionId;
                });
                $team2Data = array_values($team2Data);
                $team1Id = $team1Data[0]['teamId'];
                $team2Id = $team2Data[0]['teamId'];

                if ($team1 !== null && $team2 !== null) {
                    $roundMatches[] = ["Round " . $round, $divisionId, $team1, $team2, $team1Id, $team2Id];
                }
            }

            // Rotate teams for next round except the first one
            $teams = array_merge([$teams[0]], array_merge([end($teams)], array_slice($teams, 1, -1)));
            $matches = array_merge($matches, $roundMatches);
        }
        return $matches;
    }

    #[Route('/dashboard/registration/change-team/{id}', name: 'app_dashboard_change_team', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function changeTeam(
        int $id,
        Request $request,
        TournamentRegistrationRepository $tournamentRegistrationRepository,
        UserProfileRepository $userProfile,
        TeamsRepository $teamsRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $registration = $tournamentRegistrationRepository->find($id);

        if (!$registration) {
            throw $this->createNotFoundException('Tournament registration not found');
        }

        $newTeamId = $request->request->get('new_team_id');
        $newTeam = $teamsRepository->find($newTeamId);
        $registration->setTeam($newTeam);

        $entityManager->flush();

        $this->addFlash('success', 'Team has been successfully changed!');

        return $this->redirectToRoute('app_dashboard_registration');
    }


    // Users section ------------------------------------------------------------------------
    #[Route('/dashboard/users', name: 'app_dashboard_users')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function dashboardUsers(Request $request, UserRepository $userRepository): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $sortBy = $request->query->get('sort_by', 'u.email');
        $order = $request->query->get('order', 'ASC');
        $searchBy = $request->query->get('search_by', null);
        $searchValue = $request->query->get('search_value', null);

        $paginator = $userRepository->findUsersWithPaginationAndSearch($page, $limit, $sortBy, $order, $searchBy, $searchValue);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);

        return $this->render('dashboard/users.html.twig', [
            'users' => $paginator->getQuery()->getResult(),
            'current_page' => $page,
            'total_pages' => $totalPages,
            'sort_by' => $sortBy,
            'order' => $order,
            'search_by' => $searchBy,
            'search_value' => $searchValue,
        ]);
    }

    #[Route('/dashboard/users/delete/{id}', name: 'app_dashboard_users_delete', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function deleteUser(int $id, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $user->setActive('N');
        $entityManager->flush();

        $this->addFlash('success', 'User has been successfully deleted.');

        return $this->redirectToRoute('app_dashboard_users');
    }

    #[Route('/dashboard/user', name: 'app_dashboard_user')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        Security $security,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        $user = new User();
        $form = $this->createForm(UserExtraInfoType::class, $user);
        $form->handleRequest($request);

        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $currentDivisions = $userProfile->findByUserLocation($currentUser->getId());

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setActive($form->get('active')->getData() ?? 'Y');
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            $security->login($user, 'form_login', 'main');
            $this->addFlash('success', 'User has been successfully saved!');

            return $this->redirectToRoute('app_dashboard_users');
        }

        return $this->render('dashboard/user.html.twig', [
            'form' => $form,
            'location' => $currentLocation[0]->getLocation(),
            'division' => $currentDivisions,
            'isEdit' => false,
        ]);
    }

    #[Route('/dashboard/user/edit/{id}', name: 'app_dashboard_user_edit')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editUser(
        int $id,
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $currentDivisions = $userProfile->findByUserLocation($currentUser->getId());

        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found.');
        }

        $form = $this->createForm(UserExtraInfoType::class, $user, [
            'isEdit' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();

            if (!empty($plainPassword)) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $plainPassword
                    )
                );
            }

            $entityManager->flush();

            $this->addFlash('success', 'User updated successfully!');

            return $this->redirectToRoute('app_dashboard_users');
        }

        return $this->render('dashboard/user.html.twig', [
            'form' => $form,
            'location' => $currentLocation[0]->getLocation(),
            'division' => $currentDivisions,
            'isEdit' => true,
        ]);
    }

    // Tournament Section ------------------------------------------------
    #[Route('/dashboard/tournament', name: 'app_dashboard_tournament')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function dashboardTournament(
        Request $request,
        UserRepository $userRepository,
        UserProfileRepository $userProfileRepository,
        TournamentRepository $tournamentRepository,
        TournamentRegistrationRepository $tournamentRegistration
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfileRepository->findLocationsByUserId($currentUser->getId());
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $userProfile = $currentUser->getUserProfile();

        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $sortBy = $request->query->get('sort_by', 'tt.id');
        $order = $request->query->get('order', 'DESC');
        $searchBy = $request->query->get('search_by', null);
        $searchValue = $request->query->get('search_value', null);
        $location = $getCurrentLocation->getId();
        $offset = ($page - 1) * $limit;

        $paginator = $tournamentRepository->findByTournament(
            $location,
            $limit,
            $offset,
            $sortBy,
            $order,
            $searchBy,
            $searchValue
        );

        $totalItems = $tournamentRepository->countByTournament(
            $location,
            $searchBy,
            $searchValue
        );
        $totalPages = ceil($totalItems / $limit);

        foreach ($paginator as &$tournament) {
            $registeredUser = $tournamentRegistration->findByUserProfileId(
                $userProfile->getId(),
                $tournament['id']
            );

            $tournament['registeredUser'] = $registeredUser ? true : false;
        }
        // dd($paginator);
        return $this->render('dashboard/tournament.html.twig', [
            'tournament_registration' => $paginator, // Updated paginator with new property
            'current_page' => $page,
            'total_pages' => $totalPages,
            'sort_by' => $sortBy,
            'order' => $order,
            'search_by' => $searchBy,
            'search_value' => $searchValue,
            'user_profile_id' => $currentUser->getId(),
        ]);
    }

    #[Route('/dashboard/create-tournament', name: 'app_dashboard_create_tournament')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createTournament(
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());

        $tournament = new Tournament();
        $userLocation = $currentLocation[0]->getLocation() ?? null;
        $form = $this->createForm(TournamentFormType::class, $tournament, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tournament);
            $entityManager->flush();

            $this->addFlash('success', 'The tournament has been successfully created!');

            return $this->redirectToRoute('app_dashboard_tournament');
        }

        return $this->render('dashboard/create_tournament.html.twig', [
            'form' => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/dashboard/tournament/delete/{id}', name: 'app_dashboard_tournament_delete', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function deleteTournament(int $id, TournamentRepository $tournamentRepository, EntityManagerInterface $entityManager): Response
    {
        $tournament = $tournamentRepository->find($id);
        if (!$tournament) {
            throw $this->createNotFoundException('Tournament not found');
        }

        $tournament->setStatus('Deleted');
        $entityManager->flush();

        $this->addFlash('success', 'Tournament has been successfully deleted.');

        return $this->redirectToRoute('app_dashboard_tournament');
    }
}
