<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Teams;
use App\Repository\UserRepository;
use App\Repository\TeamsRepository;
use App\Entity\TournamentRegistration;
use App\Repository\TeamsNamesRepository;
use App\Repository\TournamentRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserProfileRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TournamentRegistrationRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardRegistrationController extends AbstractController
{
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
        TeamsRepository $teamsRepository,
        EntityManagerInterface $entityManager,
        TournamentRegistrationRepository $tournamentRegistrationRepository
    ): Response {
        $registration = $tournamentRegistrationRepository->find($id);

        if (!$registration) {
            throw $this->createNotFoundException('Registration not found');
        }
        // $teamId = $registration->getTeam()->getId();
        $team = $registration->getTeam();
        // $updatedTeam = $teamsRepository->findBy(['name' => $id]);
        $entityManager->remove($registration);
        $entityManager->flush();

        $idFound = $tournamentRegistrationRepository->findBy(['team' => $team]);
        if (!isset($idFound) || empty($idFound) || $idFound === null) {
            // I need to remove thhe record from teams table as well
            $entityManager->remove($team);
            $entityManager->flush();
        }

        $this->addFlash('success', 'Tournament registration has been successfully deleted.');

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

        $updatedTeam = [];
        $tournamentId = $request->request->get('tournament_id');
        $players = $request->request->get('players');
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $userProfile = $currentUser->getUserProfile();
        $getDiv = $userProfile->getDivision();

        if ($getDiv->getId() == 1) {
            $this->addFlash('danger', 'The player has not yet been assigned a Division.');
            return $this->redirectToRoute('app_dashboard_tournament');
        }

        $location = $getCurrentLocation->getId();
        $tournament = $tournamentRepository->find($tournamentId);

        $getTeamId = $tournamentRegistrationRepository->findTeamByTorneoIdAndDivisionId($tournamentId, $getDiv->getId(), $players);
        $team = $teamsRepository->find($getTeamId);

        if (!isset($team) || empty($team) || $team === null) {
            $getTeamName = $teamsNamesRepository->find($getTeamId);
            $newTeam = new Teams();
            $newTeam->setTorneo($tournament);
            $newTeam->setName($getTeamName->getName());
            $newTeam->setDivision($getDiv);
            $newTeam->setTeamNames($getTeamName);
            $entityManager->persist($newTeam);
            $entityManager->flush();
            $newTeamsRepository = $teamsRepository->findBy(['team_names' => $getTeamId]);
            $updatedTeam = $newTeamsRepository[0];
        } else {
            $updatedTeam = $team;
        }

        if (!$tournamentId || !$userProfile || !$location) {
            $this->addFlash('danger', 'Invalid data provided.');
            return $this->redirectToRoute('app_dashboard_tournament');
        }

        $registration = new TournamentRegistration();
        $registration->setTorneo($tournament);
        $registration->setUserProfile($userProfile);
        $registration->setLocation($getCurrentLocation);
        $registration->setStatus('Registered');
        $registration->setTeam($updatedTeam);
        $entityManager->persist($registration);
        $entityManager->flush();

        $this->addFlash('success', 'Tournament registration has been successfully registered.');
        return $this->redirectToRoute('app_dashboard_tournament');
    }

    #[Route('/dashboard/registration/change-teams/{id}', name: 'app_dashboard_change_teams', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function changeTeam(
        int $id,
        Request $request,
        TournamentRegistrationRepository $tournamentRegistrationRepository,
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
}
