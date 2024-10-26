<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Games;
use App\Form\GameFormType;
use App\Repository\GamesRepository;
use App\Repository\TeamsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserProfileRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardGamesController extends AbstractController
{
    #[Route('/dashboard/games', name: 'app_dashboard_games')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function dashboardGames(
        Request $request,
        GamesRepository $gamesRepository,
        UserProfileRepository $userProfile
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
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $location = $getCurrentLocation->getId();
        $offset = ($page - 1) * $limit;

        $paginator = $gamesRepository->findGamesByLocationId(
            $location,
            $limit,
            $offset,
            $sortBy,
            $order,
            $searchBy,
            $searchValue,
            $searchDate
        );
        $totalItems = $gamesRepository->countByTournamentRegistration(
            $location,
            $limit,
            $offset,
            $sortBy,
            $order,
            $searchBy,
            $searchValue,
            $searchDate
        );
        $totalPages = ceil($totalItems / $limit);

        $payment = ['Yes', 'No'];

        return $this->render('dashboard/tournament_games.html.twig', [
            'tournament_games' => $paginator,
            'current_page' => $page,
            'total_pages' => $totalPages,
            'sort_by' => $sortBy,
            'order' => $order,
            'search_by' => $searchBy,
            'search_value' => $searchValue,
            'search_date' => $searchDate,
            'payment' => $payment,
        ]);
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
