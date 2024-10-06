<?php

namespace App\Controller;

use App\Entity\Games;
use App\Repository\GamesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ScoreboardController extends AbstractController
{
    #[Route('/scoreboard/{id}', name: 'app_scoreboard')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function scoreboard(
        int $id,
        EntityManagerInterface $entityManager
    ): Response {
        $game = $entityManager->getRepository(Games::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Game not found.');
        }

        $current_set = $game->getCurrentSet();
        $setPlayerOne = $game->getSetsTeamOne();
        $setPlayerTwo = $game->getSetsTeamTwo();

        switch ($current_set) {
            case 1:
                $playerOne = $game->getPlayerOneSet1();
                $playerTwo = $game->getPlayerTwoSet1();
                break;
            case 2:
                $playerOne = $game->getPlayerOneSet2();
                $playerTwo = $game->getPlayerTwoSet2();
                break;
            case 3:
                $playerOne = $game->getPlayerOneSet3();
                $playerTwo = $game->getPlayerTwoSet3();
                break;
            case 4:
                $playerOne = $game->getPlayerOneSet4();
                $playerTwo = $game->getPlayerTwoSet4();
                break;
            case 5:
                $playerOne = $game->getPlayerOneSet5();
                $playerTwo = $game->getPlayerTwoSet5();
                break;
            default:
                throw $this->createNotFoundException('Invalid current set.');
        }

        return $this->render('scoreboard/scoreboard.html.twig', [
            'playerOne' => $playerOne,
            'playerTwo' => $playerTwo,
            'current_set' => $current_set,
            'setPlayerOne' => $setPlayerOne,
            'setPlayerTwo' => $setPlayerTwo,
            'id' => $id,
        ]);
    }

    #[Route('/scoreboard/update/{id}', name: 'app_scoreboard_update')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function updateScoreboard(
        int $id,
        EntityManagerInterface $entityManager
    ): Response {
        $game = $entityManager->getRepository(Games::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Game not found.');
        }

        $current_set = $game->getCurrentSet();
        $setPlayerOne = $game->getSetsTeamOne();
        $setPlayerTwo = $game->getSetsTeamTwo();

        switch ($current_set) {
            case 1:
                $playerOne = $game->getPlayerOneSet1();
                $playerTwo = $game->getPlayerTwoSet1();
                break;
            case 2:
                $playerOne = $game->getPlayerOneSet2();
                $playerTwo = $game->getPlayerTwoSet2();
                break;
            case 3:
                $playerOne = $game->getPlayerOneSet3();
                $playerTwo = $game->getPlayerTwoSet3();
                break;
            case 4:
                $playerOne = $game->getPlayerOneSet4();
                $playerTwo = $game->getPlayerTwoSet4();
                break;
            case 5:
                $playerOne = $game->getPlayerOneSet5();
                $playerTwo = $game->getPlayerTwoSet5();
                break;
            default:
                throw $this->createNotFoundException('Invalid current set.');
        }

        return $this->json([
            'playerOne' => $playerOne,
            'playerTwo' => $playerTwo,
            'setPlayerOne' => $setPlayerOne,
            'setPlayerTwo' => $setPlayerTwo,
            'current_set' => $current_set,
            'id' => $id,
        ]);
    }

    #[Route('/umpire/{id}', name: 'app_umpire')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function umpireboard(
        int $id,
        EntityManagerInterface $entityManager
    ): Response {
        $game = $entityManager->getRepository(Games::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Game not found.');
        }

        $current_set = $game->getCurrentSet();
        $setPlayerOne = $game->getSetsTeamOne();
        $setPlayerTwo = $game->getSetsTeamTwo();
        $playerIdOne = $game->getPlayerOne()->getId();
        $playerIdTwo = $game->getPlayerTwo()->getId();
        $playerOneName = $game->getPlayerOne()->getName();
        $playerTwoName = $game->getPlayerTwo()->getName();
        // dd($playerIdOne);

        switch ($current_set) {
            case 1:
                $playerOne = $game->getPlayerOneSet1();
                $playerTwo = $game->getPlayerTwoSet1();
                break;
            case 2:
                $playerOne = $game->getPlayerOneSet2();
                $playerTwo = $game->getPlayerTwoSet2();
                break;
            case 3:
                $playerOne = $game->getPlayerOneSet3();
                $playerTwo = $game->getPlayerTwoSet3();
                break;
            case 4:
                $playerOne = $game->getPlayerOneSet4();
                $playerTwo = $game->getPlayerTwoSet4();
                break;
            case 5:
                $playerOne = $game->getPlayerOneSet5();
                $playerTwo = $game->getPlayerTwoSet5();
                break;
            default:
                throw $this->createNotFoundException('Invalid current set.');
        }

        // dd($playerOne);
        return $this->render('scoreboard/umpire.html.twig', [
            'playerIdOne' => $playerIdOne,
            'playerIdTwo' => $playerIdTwo,
            'pointsPlayerOne' => $playerOne,
            'pointsPlayerTwo' => $playerTwo,
            'current_set' => $current_set,
            'setPlayerOne' => $setPlayerOne,
            'setPlayerTwo' => $setPlayerTwo,
            'playerOneName' => $playerOneName,
            'playerTwoName' => $playerTwoName,
            'id' => $id,
        ]);
    }

    #[Route('/scoreboard/add-score-player/{id}/{playerId}', name: 'add_score_player')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function addScore(
        int $id,
        int $playerId,
        // Request $request,
        EntityManagerInterface $entityManager,
        // UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        // $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        // $userLocation = $currentLocation[0]->getLocation() ?? null;

        $game = $entityManager->getRepository(Games::class)->find($id);
        // $game = $gamesRepository->findBy(['player_one' => $id]);
        $playerOneId = $game->getPlayerOne()->getId();
        $playerTwoId = $game->getPlayerTwo()->getId();

        if ($playerId == $playerOneId) {
            switch ($game->getCurrentSet()) {
                case 1:
                    $playerOnePoints = $game->getPlayerOneSet1() + 1;
                    $game->setPlayerOneSet1($playerOnePoints);
                    // dd($playerOnePoints);
                    break;
                case 2:
                    // $playerOne = $game->getPlayerOneSet2();
                    // $playerTwo = $game->getPlayerTwoSet2();
                    break;
                case 3:
                    // $playerOne = $game->getPlayerOneSet3();
                    // $playerTwo = $game->getPlayerTwoSet3();
                    break;
                case 4:
                    // $playerOne = $game->getPlayerOneSet4();
                    // $playerTwo = $game->getPlayerTwoSet4();
                    break;
                case 5:
                    // $playerOne = $game->getPlayerOneSet5();
                    // $playerTwo = $game->getPlayerTwoSet5();
                    break;
                default:
                    throw $this->createNotFoundException('Invalid current set.');
            }
        }
        if ($playerId == $playerTwoId) {
            dd($playerTwoId);
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_umpire', ['id' => $id]);
        // return $this->render('scoreboard/scoreboard.html.twig', [
        //     // 'form' => $form->createView(),
        //     'isEdit' => true,
        // ]);
    }

    #[Route('/scoreboard/subtractScore/{id}', name: 'app_scoreboard_subtract_score')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function subtractScore(
        int $id,
        // Request $request,
        EntityManagerInterface $entityManager,
        GamesRepository $gamesRepository,
        // UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        // $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        // $userLocation = $currentLocation[0]->getLocation() ?? null;

        // $game = $entityManager->getRepository(Games::class)->find($id);
        $game = $gamesRepository->findBy(['play_one_id' => $id]);
        dd($game);

        // if (!$game) {
        //     throw $this->createNotFoundException('User not found.');
        // }

        // $form = $this->createForm(GameFormType::class, $game, [
        //     'user_location' => $userLocation,
        // ]);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $entityManager->persist($game);
        //     $entityManager->flush();

        //     $this->addFlash('success', 'The game has been successfully updated!');

        //     return $this->redirectToRoute('app_dashboard_games');
        // }

        return $this->render('dashboard/create_game.html.twig', [
            // 'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }
}
