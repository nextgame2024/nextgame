<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Games;
use App\Form\GameFormType;
use App\Repository\GamesRepository;
use App\Repository\SettingsRepository;
use App\Repository\TeamsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserProfileRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardSettingsController extends AbstractController
{
    #[Route('/dashboard/settings', name: 'app_dashboard_settings')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function dashboardSettings(
        Request $request,
        SettingsRepository $settingsRepository,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $page = $request->query->getInt('page', 1);
        $limit = 11;
        $sortBy = $request->query->get('sort_by', 'g.name');
        $order = $request->query->get('order', 'ASC');
        $searchBy = $request->query->get('search_by', 'tournament_type');
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $location = $getCurrentLocation->getId();
        $offset = ($page - 1) * $limit;
        $settingType = 1;

        switch ($searchBy) {
            case 'tournament_type':
                $settingType = 1;
                break;
            case 'days_off':
                $settingType = 2;
                break;
            case 'divisions':
                $settingType = 3;
                break;
            case 'tables':
                $settingType = 4;
                break;
            case 'parameters':
                $settingType = 5;
                break;
            default:
                $settingType = 'name';
        }

        $paginator = $settingsRepository->findSettingsByLocationId(
            $location,
            $limit,
            $offset,
            $sortBy,
            $order,
            $searchBy
        );
        $totalItems = $settingsRepository->countByTournamentRegistration(
            $location,
            $searchBy
        );
        $totalPages = ceil($totalItems / $limit);

        return $this->render('dashboard/tournament_settings.html.twig', [
            'tournament_settings' => $paginator,
            'current_page' => $page,
            'total_pages' => $totalPages,
            'sort_by' => $sortBy,
            'order' => $order,
            'search_by' => $searchBy,
            'setting_type' => $settingType
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
