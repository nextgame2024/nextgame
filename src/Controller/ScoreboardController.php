<?php

namespace App\Controller;

use App\Entity\Games;
use Twig\Environment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Component\HttpFoundation\Request;
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
        EntityManagerInterface $entityManager,
        CacheInterface $cache,
        Request $request
    ): Response {
        $cacheKey = 'game_scoreboard_' . $id;

        $gameData = $cache->get($cacheKey, function (ItemInterface $item) use ($id, $entityManager) {
            $item->expiresAfter(2);
            $game = $entityManager->getRepository(Games::class)->find($id);

            if (!$game) {
                return ['error' => 'Game not found'];
            }

            $current_set = $game->getCurrentSet();
            $setPlayerOne = $game->getSetsTeamOne();
            $setPlayerTwo = $game->getSetsTeamTwo();
            $playerOneName = $game->getPlayerOne()->getName();
            $playerTwoName = $game->getPlayerTwo()->getName();
            $status = $game->getStatus();

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
                case 6:
                    $playerOne = $game->getPlayerOneSet6();
                    $playerTwo = $game->getPlayerTwoSet6();
                    break;
                case 7:
                    $playerOne = $game->getPlayerOneSet7();
                    $playerTwo = $game->getPlayerTwoSet7();
                    break;
                default:
                    $playerOne = 0;
                    $playerTwo = 0;
            }

            return [
                'playerOne' => $playerOne,
                'playerTwo' => $playerTwo,
                'current_set' => $current_set,
                'setPlayerOne' => $setPlayerOne,
                'setPlayerTwo' => $setPlayerTwo,
                'playerOneName' => $playerOneName,
                'playerTwoName' => $playerTwoName,
                'display' => $game->getDisplay(),
                'status' => $status,
                'id' => $id,
            ];
        });

        if ($request->isXmlHttpRequest()) {
            if (isset($gameData['error'])) {
                return $this->json($gameData, Response::HTTP_NOT_FOUND);
            }
            return $this->json($gameData);
        }

        return $this->render('scoreboard/scoreboard.html.twig', array_merge($gameData, [
            'id' => $id
        ]));
    }

    #[Route('/umpire/{id}/{display}', name: 'app_umpire')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function umpireboard(
        int $id,
        int $display,
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
        $game->setDisplay($display);

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
            case 6:
                $playerOne = $game->getPlayerOneSet6();
                $playerTwo = $game->getPlayerTwoSet6();
                break;
            case 7:
                $playerOne = $game->getPlayerOneSet7();
                $playerTwo = $game->getPlayerTwoSet7();
                break;
            default:
                $playerOne = 0;
                $playerTwo = 0;
        }
        $entityManager->flush();

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
            'display' => $display,
            'id' => $id,
        ]);
    }

    #[Route('/scoreboard/add-score-player/{id}/{playerId}', name: 'app_add_score_player')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function addScore(
        int $id,
        int $playerId,
        EntityManagerInterface $entityManager,
        CacheInterface $cache,
    ): Response {
        $playerOnePoints = 0;
        $playerTwoPoints = 0;
        $game = $entityManager->getRepository(Games::class)->find($id);
        $playerOneId = $game->getPlayerOne()->getId();
        $playerTwoId = $game->getPlayerTwo()->getId();

        if ($playerId == $playerOneId) {
            switch ($game->getCurrentSet()) {
                case 1:
                    $playerOnePoints = $game->getPlayerOneSet1() + 1;
                    if ($playerOnePoints <= 99) {
                        $game->setPlayerOneSet1($playerOnePoints);
                        $playerTwoPoints = $game->getPlayerTwoSet1();
                    }
                    break;
                case 2:
                    $playerOnePoints = $game->getPlayerOneSet2() + 1;
                    if ($playerOnePoints <= 99) {
                        $game->setPlayerOneSet2($playerOnePoints);
                        $playerTwoPoints = $game->getPlayerTwoSet2();
                    }
                    break;
                case 3:
                    $playerOnePoints = $game->getPlayerOneSet3() + 1;
                    if ($playerOnePoints <= 99) {
                        $game->setPlayerOneSet3($playerOnePoints);
                        $playerTwoPoints = $game->getPlayerTwoSet3();
                    }
                    break;
                case 4:
                    $playerOnePoints = $game->getPlayerOneSet4() + 1;
                    if ($playerOnePoints <= 99) {
                        $game->setPlayerOneSet4($playerOnePoints);
                        $playerTwoPoints = $game->getPlayerTwoSet4();
                    }
                    break;
                case 5:
                    $playerOnePoints = $game->getPlayerOneSet5() + 1;
                    if ($playerOnePoints <= 99) {
                        $game->setPlayerOneSet5($playerOnePoints);
                        $playerTwoPoints = $game->getPlayerTwoSet5();
                    }
                    break;
                case 6:
                    $playerOnePoints = $game->getPlayerOneSet6() + 1;
                    if ($playerOnePoints <= 99) {
                        $game->setPlayerOneSet6($playerOnePoints);
                        $playerTwoPoints = $game->getPlayerTwoSet6();
                    }
                    break;
                case 7:
                    $playerOnePoints = $game->getPlayerOneSet7() + 1;
                    if ($playerOnePoints <= 99) {
                        $game->setPlayerOneSet7($playerOnePoints);
                        $playerTwoPoints = $game->getPlayerTwoSet7();
                    }
                    break;
                default:
                    $playerOnePoints = 0;
                    $playerTwoPoints = 0;
            }
        }
        if ($playerId == $playerTwoId) {
            switch ($game->getCurrentSet()) {
                case 1:
                    $playerTwoPoints = $game->getPlayerTwoSet1() + 1;
                    if ($playerTwoPoints <= 99) {
                        $game->setPlayerTwoSet1($playerTwoPoints);
                        $playerOnePoints = $game->getPlayerOneSet1();
                    }
                    break;
                case 2:
                    $playerTwoPoints = $game->getPlayerTwoSet2() + 1;
                    if ($playerTwoPoints <= 99) {
                        $game->setPlayerTwoSet2($playerTwoPoints);
                        $playerOnePoints = $game->getPlayerOneSet2();
                    }
                    break;
                case 3:
                    $playerTwoPoints = $game->getPlayerTwoSet3() + 1;
                    if ($playerTwoPoints <= 99) {
                        $game->setPlayerTwoSet3($playerTwoPoints);
                        $playerOnePoints = $game->getPlayerOneSet3();
                    }
                    break;
                case 4:
                    $playerTwoPoints = $game->getPlayerTwoSet4() + 1;
                    if ($playerTwoPoints <= 99) {
                        $game->setPlayerTwoSet4($playerTwoPoints);
                        $playerOnePoints = $game->getPlayerOneSet4();
                    }
                    break;
                case 5:
                    $playerTwoPoints = $game->getPlayerTwoSet5() + 1;
                    if ($playerTwoPoints <= 99) {
                        $game->setPlayerTwoSet5($playerTwoPoints);
                        $playerOnePoints = $game->getPlayerOneSet5();
                    }
                    break;
                case 6:
                    $playerTwoPoints = $game->getPlayerTwoSet6() + 1;
                    if ($playerTwoPoints <= 99) {
                        $game->setPlayerTwoSet6($playerTwoPoints);
                        $playerOnePoints = $game->getPlayerOneSet6();
                    }
                    break;
                case 7:
                    $playerTwoPoints = $game->getPlayerTwoSet7() + 1;
                    if ($playerTwoPoints <= 99) {
                        $game->setPlayerTwoSet7($playerTwoPoints);
                        $playerOnePoints = $game->getPlayerOneSet7();
                    }
                    break;
                default:
                    $playerOnePoints = 0;
                    $playerTwoPoints = 0;
            }
        }

        $entityManager->flush();
        $cache->delete('game_scoreboard_' . $id);

        return $this->json([
            'playerOnePoints' => $playerOnePoints,
            'playerTwoPoints' => $playerTwoPoints,
            'currentSet' => $game->getCurrentSet(),
            'id' => $id,
        ]);
    }

    #[Route('/scoreboard/subtract-score/{id}/{playerId}', name: 'app_scoreboard_subtract_score')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function subtractScore(
        int $id,
        int $playerId,
        EntityManagerInterface $entityManager,
        CacheInterface $cache,
    ): Response {
        $playerOnePoints = 0;
        $playerTwoPoints = 0;
        $game = $entityManager->getRepository(Games::class)->find($id);
        $playerOneId = $game->getPlayerOne()->getId();
        $playerTwoId = $game->getPlayerTwo()->getId();

        if ($playerId == $playerOneId) {
            switch ($game->getCurrentSet()) {
                case 1:
                    $playerTwoPoints = $game->getPlayerTwoSet1();
                    $playerOnePoints = $game->getPlayerOneSet1();
                    if ($playerOnePoints == 0) {
                        $playerOnePoints = $game->getPlayerOneSet1();
                    }
                    if ($playerOnePoints > 0) {
                        $playerOnePoints = $game->getPlayerOneSet1() - 1;
                        $game->setPlayerOneSet1($playerOnePoints);
                    }
                    break;
                case 2:
                    $playerTwoPoints = $game->getPlayerTwoSet2();
                    $playerOnePoints = $game->getPlayerOneSet2();
                    if ($playerOnePoints == 0) {
                        $playerOnePoints = $game->getPlayerOneSet2();
                    }
                    if ($playerOnePoints > 0) {
                        $playerOnePoints = $game->getPlayerOneSet2() - 1;
                        $game->setPlayerOneSet2($playerOnePoints);
                    }
                    break;
                case 3:
                    $playerTwoPoints = $game->getPlayerTwoSet3();
                    $playerOnePoints = $game->getPlayerOneSet3();
                    if ($playerOnePoints == 0) {
                        $playerOnePoints = $game->getPlayerOneSet3();
                    }
                    if ($playerOnePoints > 0) {
                        $playerOnePoints = $game->getPlayerOneSet3() - 1;
                        $game->setPlayerOneSet3($playerOnePoints);
                    }
                    break;
                case 4:
                    $playerTwoPoints = $game->getPlayerTwoSet4();
                    $playerOnePoints = $game->getPlayerOneSet4();
                    if ($playerOnePoints == 0) {
                        $playerOnePoints = $game->getPlayerOneSet4() - 1;
                    }
                    if ($playerOnePoints > 0) {
                        $playerOnePoints = $game->getPlayerOneSet4() - 1;
                        $game->setPlayerOneSet4($playerOnePoints);
                    }
                    break;
                case 5:
                    $playerTwoPoints = $game->getPlayerTwoSet5();
                    $playerOnePoints = $game->getPlayerOneSet5();
                    if ($playerOnePoints == 0) {
                        $playerOnePoints = $game->getPlayerOneSet5();
                    }
                    if ($playerOnePoints > 0) {
                        $playerOnePoints = $game->getPlayerOneSet5() - 1;
                        $game->setPlayerOneSet5($playerOnePoints);
                    }
                    break;
                case 6:
                    $playerTwoPoints = $game->getPlayerTwoSet6();
                    $playerOnePoints = $game->getPlayerOneSet6();
                    if ($playerOnePoints == 0) {
                        $playerOnePoints = $game->getPlayerOneSet6();
                    }
                    if ($playerOnePoints > 0) {
                        $playerOnePoints = $game->getPlayerOneSet6() - 1;
                        $game->setPlayerOneSet6($playerOnePoints);
                    }
                    break;
                case 7:
                    $playerTwoPoints = $game->getPlayerTwoSet7();
                    $playerOnePoints = $game->getPlayerOneSet7();
                    if ($playerOnePoints == 0) {
                        $playerOnePoints = $game->getPlayerOneSet7();
                    }
                    if ($playerOnePoints > 0) {
                        $playerOnePoints = $game->getPlayerOneSet7() - 1;
                        $game->setPlayerOneSet7($playerOnePoints);
                    }
                    break;
                default:
                    $playerOnePoints = 0;
                    $playerTwoPoints = 0;
            }
        }
        if ($playerId == $playerTwoId) {
            switch ($game->getCurrentSet()) {
                case 1:
                    $playerOnePoints = $game->getPlayerOneSet1();
                    $playerTwoPoints = $game->getPlayerTwoSet1();
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet1();
                    }
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet1() - 1;
                        $game->setPlayerTwoSet1($playerTwoPoints);
                    }
                    break;
                case 2:
                    $playerOnePoints = $game->getPlayerOneSet2();
                    $playerTwoPoints = $game->getPlayerTwoSet2();
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet2();
                    }
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet2() - 1;
                        $game->setPlayerTwoSet2($playerTwoPoints);
                    }
                    break;
                case 3:
                    $playerOnePoints = $game->getPlayerOneSet3();
                    $playerTwoPoints = $game->getPlayerTwoSet3();
                    if ($playerTwoPoints == 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet3();
                    }
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet3() - 1;
                        $game->setPlayerTwoSet3($playerTwoPoints);
                    }
                    break;
                case 4:
                    $playerOnePoints = $game->getPlayerOneSet4();
                    $playerTwoPoints = $game->getPlayerTwoSet4();
                    if ($playerTwoPoints == 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet4();
                    }
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet4() - 1;
                        $game->setPlayerTwoSet4($playerTwoPoints);
                    }
                    break;
                case 5:
                    $playerOnePoints = $game->getPlayerOneSet5();
                    $playerTwoPoints = $game->getPlayerTwoSet5();
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet5();
                    }
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet5() - 1;
                        $game->setPlayerTwoSet5($playerTwoPoints);
                    }
                    break;
                case 6:
                    $playerOnePoints = $game->getPlayerOneSet6();
                    $playerTwoPoints = $game->getPlayerTwoSet6();
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet6();
                    }
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet6() - 1;
                        $game->setPlayerTwoSet6($playerTwoPoints);
                    }
                    break;
                case 7:
                    $playerOnePoints = $game->getPlayerOneSet7();
                    $playerTwoPoints = $game->getPlayerTwoSet7();
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet7();
                    }
                    if ($playerTwoPoints > 0) {
                        $playerTwoPoints = $game->getPlayerTwoSet7() - 1;
                        $game->setPlayerTwoSet7($playerTwoPoints);
                    }
                    break;
                default:
                    $playerOnePoints = 0;
                    $playerTwoPoints = 0;
            }
        }

        $entityManager->flush();
        $cache->delete('game_scoreboard_' . $id);

        return $this->json([
            'playerOnePoints' => $playerOnePoints,
            'playerTwoPoints' => $playerTwoPoints,
            'currentSet' => $game->getCurrentSet(),
            'id' => $id,
        ]);
    }

    #[Route('/finish-set/{id}', name: 'app_finish_set')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function finishSet(
        int $id,
        EntityManagerInterface $entityManager
    ): Response {
        $game = $entityManager->getRepository(Games::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Game not found.');
        }

        $pointsPlayerOne = 0;
        $pointsPlayerTwo = 0;
        $setPlayerOne = 0;
        $setPlayerTwo = 0;
        $currentSet = $game->getCurrentSet();

        switch ($game->getCurrentSet()) {
            case 1:
                $pointsPlayerOne = $game->getPlayerOneSet1();
                $pointsPlayerTwo = $game->getPlayerTwoSet1();
                break;
            case 2:
                $pointsPlayerOne = $game->getPlayerOneSet2();
                $pointsPlayerTwo = $game->getPlayerTwoSet2();
                break;
            case 3:
                $pointsPlayerOne = $game->getPlayerOneSet3();
                $pointsPlayerTwo = $game->getPlayerTwoSet3();
                break;
            case 4:
                $pointsPlayerOne = $game->getPlayerOneSet4();
                $pointsPlayerTwo = $game->getPlayerTwoSet4();
                break;
            case 5:
                $pointsPlayerOne = $game->getPlayerOneSet5();
                $pointsPlayerTwo = $game->getPlayerTwoSet5();
                break;
            case 6:
                $pointsPlayerOne = $game->getPlayerOneSet6();
                $pointsPlayerTwo = $game->getPlayerTwoSet6();
                break;
            case 7:
                $pointsPlayerOne = $game->getPlayerOneSet7();
                $pointsPlayerTwo = $game->getPlayerTwoSet7();
                break;
            default:
                $pointsPlayerOne = 0;
                $pointsPlayerTwo = 0;
        }

        if ($pointsPlayerOne > $pointsPlayerTwo && $currentSet < 8) {
            $setPlayerOne = $game->getSetsTeamOne() + 1;
            $game->setSetsTeamOne($setPlayerOne);
            $setPlayerTwo = $game->getSetsTeamTwo();
            $game->setCurrentSet($currentSet + 1);
        } elseif ($currentSet < 8) {
            $setPlayerTwo = $game->getSetsTeamTwo() + 1;
            $game->setSetsTeamTwo($setPlayerTwo);
            $setPlayerOne = $game->getSetsTeamOne();
            $game->setCurrentSet($currentSet + 1);
        }

        $pointsPlayerOne = 0;
        $pointsPlayerTwo = 0;
        $entityManager->flush();

        return $this->json([
            'id' => $id,
            'setsPlayerOne' => $setPlayerOne,
            'setsPlayerTwo' => $setPlayerTwo,
            'pointsPlayerOne' => $pointsPlayerOne,
            'pointsPlayerTwo' => $pointsPlayerTwo,
        ]);
    }

    #[Route('/finish-game/{id}', name: 'app_finish_game')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function finishGame(
        int $id,
        EntityManagerInterface $entityManager
    ): Response {
        $game = $entityManager->getRepository(Games::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Game not found.');
        }

        if ($game->getSetsTeamOne() > $game->getSetsTeamTwo()) {
            $game->setGamesTeamOne(1);
            $game->setGamesTeamTwo(0);
        } else {
            $game->setGamesTeamOne(0);
            $game->setGamesTeamTwo(1);
        }

        $game->setStatus('Completed');

        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard_games');
    }
}
