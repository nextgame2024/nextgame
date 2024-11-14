<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Games;
use App\Form\GameFormType;
use App\Repository\DirectorsRepository;
use App\Service\PHPMailerService;
use App\Repository\GamesRepository;
use App\Repository\ParametersRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserProfileRepository;
use App\Repository\RatingsCentralRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardRatingsCentralController extends AbstractController
{
    #[Route('/dashboard/ratings-central', name: 'app_dashboard_ratings_central')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function ratingsCentral(
        Request $request,
        RatingsCentralRepository $ratingsCentralRepository,
        UserProfileRepository $userProfile,
        DirectorsRepository $directorsRepository,
        ParametersRepository $parametersRepository,
        PHPMailerService $phpMailerService
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $page = $request->query->getInt('page', 1);
        $limit = 25;
        $sortBy = $request->query->get('sort_by', 'g.division_id');
        $order = $request->query->get('order', 'ASC');
        $searchBy = $request->query->get('search_by_tournament', null);
        $searchValue = $request->query->get('search_value', null);
        $searchDate = $request->query->get('search_date', null);
        $status = $request->query->get('statuses', '-');
        $isSubmitted = $request->query->get('is_submitted', null);
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $location = $getCurrentLocation->getId();
        $offset = ($page - 1) * $limit;

        $paginator = $ratingsCentralRepository->findGamesByLocationId(
            $location,
            $limit,
            $offset,
            $sortBy,
            $order,
            $status,
            $searchBy,
            $searchValue,
            $searchDate
        );
        $totalItems = $ratingsCentralRepository->countByTournamentRegistration(
            $location,
            $limit,
            $offset,
            $sortBy,
            $order,
            $status,
            $searchBy,
            $searchValue,
            $searchDate
        );
        $totalPages = ceil($totalItems / $limit);

        if ($isSubmitted) {
            $directorId = $parametersRepository->findParameterByNumberAndLocationId($location, 2);
            $director = $directorsRepository->findDirectorByIdAndLocationId($location, $directorId[0]->getValue());
            $unratedMean = $getCurrentLocation->getUnratedMean();
            $unratedStDev = $getCurrentLocation->getUnratedStDev();
            $sport = $getCurrentLocation->getSport();
            $isvalid = false;
            $players = "";
            $scores = "";
            $finalScore = "";
            $winner = "";
            $loser = "";
            $userIds = $this->getUserIds($paginator);

            $users = $userProfile->findUsersByIds($userIds);
            foreach ($users as $user) {
                // Todo: New user, Unrated Mean  and Unrated St Dev
                $ratingCentralId = $user->getRatingCentralId();
                $playerName = $user->getName() ? "\"" . $user->getName()  . "\"" : "";
                $unratedMean = 0;
                $unratedStDev = 0;
                $clubId = $user->getPrimaryClub();
                $playerNewInfo = $user->getPlayerNewInfo();
                $address1 = $user->getAddress1() ? "\"" . $user->getAddress1() . "\"" : "";
                $address2 = $user->getAddress2() ? "\"" . $user->getAddress2() . "\"" : "";
                $city = $user->getCity() ? "\"" . $user->getCity() . "\"" : "";
                $state = $user->getState();
                $province = $user->getProvince() ? "\"" . $user->getProvince() . "\"" : "";
                $postalCode = $user->getPostalCode();
                $country = $user->getCountry();
                $birth = $user->getDateOfBirth() ? $user->getDateOfBirth()->format('Y-m-d') : '';
                $gender = $user->getGender();
                $email = $user->getuser()->getEmail();
                $usatt = $user->getUsattId();
                $ttaId = $user->getTtaId();
                $deceased = $user->getDeceased();
                $phone = $user->getPhone() ? "\"" . $user->getPhone() . "\"" : "";
                $mobile = $user->getMobile();
                $players = $players . $ratingCentralId . "," . $playerName . "," . $unratedMean . "," . $unratedStDev . "," . $clubId . "," . $playerNewInfo . "," . $address1 . "," . $address2 . "," . $city . "," . $state . "," . $province . "," . $postalCode . "," . $country . "," . $birth . "," . $gender . "," . $email . "," . $usatt . "," . $ttaId . "," . $deceased . "," . $phone . "," . $mobile . "<br>";
            }

            foreach ($paginator as $currentGame) {
                if ($currentGame['game_type'] == 'Singles') {
                    $isvalid = true;
                    $gamePlayers = [$currentGame['player_one_id'], $currentGame['player_two_id']];
                    if ($currentGame['game_type'] == 'Singles') {
                        if ($currentGame['sets_team_one'] > $currentGame['sets_team_two']) {
                            $loserPlayer = "2";
                            $winner = $currentGame['player_one_id'];
                            $loser = $currentGame['player_two_id'];
                        } else {
                            $loserPlayer = "1";
                            $winner = $currentGame['player_two_id'];
                            $loser = $currentGame['player_one_id'];
                        }
                    }
                    $gamePlayersData = $userProfile->findUsersByIds($gamePlayers);

                    foreach ($gamePlayersData as $player) {
                        $playerId = $player->getId();
                        if ($playerId == $winner) {
                            $winnerId = $player->getRatingCentralId();
                        }
                        if ($playerId == $loser) {
                            $loserId = $player->getRatingCentralId();
                        }
                    }

                    if ($loserPlayer == "1") {
                        if ($currentGame['player_one_set_1'] < $currentGame['player_two_set_1']) {
                            $game1 = $currentGame['player_one_set_1'];
                        } else {
                            $game1 = "-" . $currentGame['player_two_set_1'];
                        }

                        if ($currentGame['player_one_set_2'] < $currentGame['player_two_set_2']) {
                            $game2 = $currentGame['player_one_set_2'];
                        } else {
                            $game2 = "-" . $currentGame['player_two_set_2'];
                        }

                        if ($currentGame['player_one_set_3'] < $currentGame['player_two_set_3']) {
                            $game3 = $currentGame['player_one_set_3'];
                        } else {
                            $game3 = "-" . $currentGame['player_two_set_3'];
                        }

                        if ($currentGame['player_one_set_4'] !== $currentGame['player_two_set_4']) {
                            if ($currentGame['player_one_set_4'] < $currentGame['player_two_set_4']) {
                                $game4 = $currentGame['player_one_set_4'];
                            } else {
                                $game4 = "-" . $currentGame['player_two_set_4'];
                            }
                        } else {
                            $game4 = "No";
                        }

                        if ($currentGame['player_one_set_5'] !== $currentGame['player_two_set_5']) {
                            if ($currentGame['player_one_set_5'] < $currentGame['player_two_set_5']) {
                                $game5 = $currentGame['player_one_set_5'];
                            } else {
                                $game5 = "-" . $currentGame['player_two_set_5'];
                            }
                        } else {
                            $game5 = "No";
                        }

                        if ($currentGame['player_one_set_6'] !== $currentGame['player_two_set_6']) {
                            if ($currentGame['player_one_set_6'] < $currentGame['player_two_set_6']) {
                                $game6 = $currentGame['player_one_set_6'];
                            } else {
                                $game6 = "-" . $currentGame['player_two_set_6'];
                            }
                        } else {
                            $game6 = "No";
                        }

                        if ($currentGame['player_one_set_7'] !== $currentGame['player_two_set_7']) {
                            if ($currentGame['player_one_set_6'] < $currentGame['player_two_set_6']) {
                                $game7 = $currentGame['player_one_set_7'];
                            } else {
                                $game7 = "-" . $currentGame['player_two_set_7'];
                            }
                        } else {
                            $game7 = "No";
                        }
                    } else {
                        if ($currentGame['player_two_set_1'] < $currentGame['player_one_set_1']) {
                            $game1 = $currentGame['player_two_set_1'];
                        } else {
                            $game1 = "-" . $currentGame['player_one_set_1'];
                        }

                        if ($currentGame['player_two_set_2'] < $currentGame['player_one_set_2']) {
                            $game2 = $currentGame['player_two_set_2'];
                        } else {
                            $game2 = "-" . $currentGame['player_one_set_2'];
                        }

                        if ($currentGame['player_two_set_3'] < $currentGame['player_one_set_3']) {
                            $game3 = $currentGame['player_two_set_3'];
                        } else {
                            $game3 = "-" . $currentGame['player_one_set_3'];
                        }

                        if ($currentGame['player_two_set_4'] !== $currentGame['player_one_set_4']) {
                            if ($currentGame['player_two_set_4'] < $currentGame['player_one_set_4']) {
                                $game4 = $currentGame['player_two_set_4'];
                            } else {
                                $game4 = "-" . $currentGame['player_one_set_4'];
                            }
                        } else {
                            $game4 = "No";
                        }

                        if ($currentGame['player_two_set_5'] !== $currentGame['player_one_set_5']) {
                            if ($currentGame['player_two_set_5'] < $currentGame['player_one_set_5']) {
                                $game5 = $currentGame['player_two_set_5'];
                            } else {
                                $game5 = "-" . $currentGame['player_one_set_5'];
                            }
                        } else {
                            $game5 = "No";
                        }

                        if ($currentGame['player_two_set_6'] !== $currentGame['player_one_set_6']) {
                            if ($currentGame['player_two_set_6'] < $currentGame['player_one_set_6']) {
                                $game6 = $currentGame['player_two_set_6'];
                            } else {
                                $game6 = "-" . $currentGame['player_one_set_6'];
                            }
                        } else {
                            $game6 = "No";
                        }

                        if ($currentGame['player_two_set_7'] !== $currentGame['player_one_set_7']) {
                            if ($currentGame['player_two_set_7'] < $currentGame['player_one_set_7']) {
                                $game7 = $currentGame['player_two_set_7'];
                            } else {
                                $game7 = "-" . $currentGame['player_one_set_7'];
                            }
                        } else {
                            $game7 = "No";
                        }
                    }

                    if ($game4 == "No") {
                        $scores = $winnerId . "," . $loserId . ",\"" . $game1 . "," . $game2 . "," . $game3 . "\"<br>";
                        $finalScore = $finalScore .  $scores;
                    } else {
                        if ($game5 == "No") {
                            $scores = $winnerId . "," . $loserId . ",\"" . $game1 . "," . $game2 . "," . $game3  . "," . $game4 . "\"<br>";
                            $finalScore = $finalScore .  $scores;
                        } else {
                            if ($game6 == "No") {
                                $scores = $winnerId . "," . $loserId . ",\"" . $game1  . "," . $game2  . "," . $game3  . "," . $game4 . "," . $game5 . "\"<br>";
                                $finalScore = $finalScore .  $scores;
                            } else {
                                if ($game7 == "No") {
                                    $scores = $winnerId . "," . $loserId . ",\"" . $game1  . "," . $game2 . "," . $game3  . "," . $game4  . "," . $game5  . "," . $game6 . "\"<br>";
                                    $finalScore = $finalScore .  $scores;
                                } else {
                                    $scores = $winnerId . "," . $loserId . ",\"" . $game1  . "," . $game2 . "," . $game3  . "," . $game4  . "," . $game5  . "," . $game6  . "," . $game7 . "\"<br>";
                                    $finalScore = $finalScore .  $scores;
                                }
                            }
                        }
                    }
                }
            }

            if ($isvalid) {
                $emailBody = "[Report]<br>
                9, \"NextGame 1.0 via Email\"<br>
                [Event]<br>
                " . $searchDate . "," . $directorId[0]->getValue() . "," . $director[0]->getPassword() . ",\"" . $paginator[0]['tournament_type_name']  . "\"," . $currentLocation[0]->getPrimaryClub() . "," . $currentLocation[0]->getState() . "," . $currentLocation[0]->getProvince() . "," . $currentLocation[0]->getCountry() . "," . $unratedMean . "," . $unratedStDev . "," . $sport . ",,," . $searchDate . "T00:00:26<br>
                [Players]<br>
                " . $players . "
                [Results]<br>
                " . $finalScore . "
                [End]";

                $subject = 'Rating Central Test';

                try {
                    $sent = $phpMailerService->sendMail(
                        'jose.corredor@linqueate.com',
                        'Jose Corredor',
                        $subject,
                        $emailBody,
                        'To view the message, please use an HTML compatible email viewer!'
                    );

                    if (!$sent) {
                        throw new \Exception('Failed to send email.');
                    }
                    $this->addFlash('success', 'The match results have been successfully submitted!');
                } catch (\Exception $e) {
                    // dd('Email sending failed: ' . $e->getMessage());
                    $this->addFlash('danger', 'Email sending failed.');
                }
            } else {
                $this->addFlash('danger', 'Please review your data carefully before submitting and try again.');
            }
        }

        return $this->render('dashboard/tournament_ratings_central.html.twig', [
            'tournament_games' => $paginator,
            'current_page' => $page,
            'total_pages' => $totalPages,
            'sort_by' => $sortBy,
            'order' => $order,
            'search_by' => $searchBy,
            'search_value' => $searchValue,
            'search_date' => $searchDate,
            'status' => $status
        ]);
    }

    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function getUserIds($gamesData)
    {
        $playerIds = [];

        foreach ($gamesData as $game) {
            if ($game['player_one_id'] !== null) {
                $playerIds[] = $game['player_one_id'];
            }

            if ($game['player_two_id'] !== null) {
                $playerIds[] = $game['player_two_id'];
            }
        }

        $uniquePlayerIds = array_unique($playerIds);
        $newArray = array_values($uniquePlayerIds);

        return $newArray;
    }


    #[Route('/dashboard/create-game', name: 'app_dashboard_create_game')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createGame(
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());

        $game = new Games();
        $userLocation = $currentLocation[0]->getLocation() ?? null;
        $form = $this->createForm(GameFormType::class, $game, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $game->setPlayerOneSet1(0);
            $game->setPlayerOneSet2(0);
            $game->setPlayerOneSet3(0);
            $game->setPlayerOneSet4(0);
            $game->setPlayerOneSet5(0);
            $game->setPlayerTwoSet1(0);
            $game->setPlayerTwoSet2(0);
            $game->setPlayerTwoSet3(0);
            $game->setPlayerTwoSet4(0);
            $game->setPlayerTwoSet5(0);
            $game->setGamesTeamOne(0);
            $game->setGamesTeamTwo(0);
            $game->setSetsTeamOne(0);
            $game->setSetsTeamTwo(0);
            $game->setIsPaid('No');
            $entityManager->persist($game);
            $entityManager->flush();

            $this->addFlash('success', 'The match has been successfully created!');

            return $this->redirectToRoute('app_dashboard_games');
        }

        return $this->render('dashboard/create_game.html.twig', [
            'form' => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/dashboard/edit-game/{id}', name: 'app_dashboard_edit_game')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editGame(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $userLocation = $currentLocation[0]->getLocation() ?? null;

        $game = $entityManager->getRepository(Games::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('User not found.');
        }

        $form = $this->createForm(GameFormType::class, $game, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($game);
            $entityManager->flush();

            $this->addFlash('success', 'The match has been successfully updated!');

            return $this->redirectToRoute('app_dashboard_games');
        }

        return $this->render('dashboard/create_game.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }

    #[Route('/dashboard/registration/payment-change/{id}', name: 'app_dashboard_payment_change', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function paymentChange(
        int $id,
        Request $request,
        GamesRepository $gamesRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $payment = $gamesRepository->find($id);

        if (!$payment) {
            throw $this->createNotFoundException('Payment not found');
        }

        $is_paid = $request->request->get('new_team_id');
        $payment->setIsPaid($is_paid);
        $entityManager->flush();

        $this->addFlash('success', 'Payment has been successfully updated!');

        return $this->redirectToRoute('app_dashboard_games');
    }
}
