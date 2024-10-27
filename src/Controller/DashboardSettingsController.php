<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Games;
use App\Entity\DaysOff;
use App\Entity\Divisions;
use App\Entity\Parameters;
use App\Entity\TableType;
use App\Form\GameFormType;
use App\Form\DaysOffFormType;
use App\Entity\TournamentType;
use App\Form\DivisionsFormType;
use App\Form\ParametersFormType;
use App\Form\TableTypeFormType;
use App\Repository\GamesRepository;
use App\Repository\TeamsRepository;
use App\Form\TournamentTypeFormType;
use App\Repository\SettingsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserProfileRepository;
use Doctrine\DBAL\ParameterType;
use Doctrine\ORM\Query\Parameter;
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
            case 'table_type':
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

    #[Route('/dashboard/settings-tournament', name: 'app_dashboard_settings_tournament')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createSettingsTournament(
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());

        $tournamentType = new TournamentType();
        $userLocation = $currentLocation[0]->getLocation() ?? null;
        $form = $this->createForm(TournamentTypeFormType::class, $tournamentType, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tournamentType);
            $entityManager->flush();

            $this->addFlash('success', 'The tournament has been successfully created!');

            return $this->redirectToRoute('app_dashboard_settings');
        }

        return $this->render('dashboard/create_tournament_type.html.twig', [
            'form' => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/dashboard/settings-days_off', name: 'app_dashboard_settings_days_off')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createSettingsDaysOff(
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());

        $daysOff = new DaysOff();
        $userLocation = $currentLocation[0]->getLocation() ?? null;
        $form = $this->createForm(DaysOffFormType::class, $daysOff, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($daysOff);
            $entityManager->flush();

            $this->addFlash('success', 'Days off have been successfully updated!');

            $searchBy = 'days_off';
            $url = $this->generateUrl('app_dashboard_settings') . '?search_by=' . urlencode($searchBy);

            return $this->redirect($url);
        }

        return $this->render('dashboard/create_days_off.html.twig', [
            'form' => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/dashboard/settings-divisions', name: 'app_dashboard_settings_divisions')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createSettingsDivisions(
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());

        $divisions = new Divisions();
        $userLocation = $currentLocation[0]->getLocation() ?? null;
        $form = $this->createForm(DivisionsFormType::class, $divisions, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($divisions);
            $entityManager->flush();

            $this->addFlash('success', 'Division has been successfully created!');

            $searchBy = 'divisions';
            $url = $this->generateUrl('app_dashboard_settings') . '?search_by=' . urlencode($searchBy);

            return $this->redirect($url);
        }

        return $this->render('dashboard/create_divisions.html.twig', [
            'form' => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/dashboard/settings-table_type', name: 'app_dashboard_settings_table_type')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createSettingsTableType(
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());

        $tabletType = new TableType();
        $userLocation = $currentLocation[0]->getLocation() ?? null;
        $form = $this->createForm(TableTypeFormType::class, $tabletType, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tabletType);
            $entityManager->flush();

            $this->addFlash('success', 'The table has been successfully created!');

            $searchBy = 'table_type';
            $url = $this->generateUrl('app_dashboard_settings') . '?search_by=' . urlencode($searchBy);

            return $this->redirect($url);
        }

        return $this->render('dashboard/create_tables.html.twig', [
            'form' => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/dashboard/settings-edit-tournament/{id}', name: 'app_dashboard_settings_edit_tournament')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editSettingsTournament(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $userLocation = $currentLocation[0]->getLocation() ?? null;

        $game = $entityManager->getRepository(TournamentType::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Settings not found.');
        }

        $form = $this->createForm(TournamentTypeFormType::class, $game, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($game);
            $entityManager->flush();

            $this->addFlash('success', 'The tournament has been successfully updated!');

            return $this->redirectToRoute('app_dashboard_settings');
        }

        return $this->render('dashboard/create_tournament_type.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }

    #[Route('/dashboard/settings-edit-daysoff/{id}', name: 'app_dashboard_settings_edit_days_off')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editSettingsDaysOff(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $userLocation = $currentLocation[0]->getLocation() ?? null;

        $daysOff = $entityManager->getRepository(DaysOff::class)->find($id);

        if (!$daysOff) {
            throw $this->createNotFoundException('Settings not found.');
        }

        $form = $this->createForm(DaysOffFormType::class, $daysOff, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($daysOff);
            $entityManager->flush();

            $this->addFlash('success', 'Days Off have been successfully updated!');

            $searchBy = 'days_off';
            $url = $this->generateUrl('app_dashboard_settings') . '?search_by=' . urlencode($searchBy);

            return $this->redirect($url);
        }

        return $this->render('dashboard/create_days_off.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }

    #[Route('/dashboard/settings-edit-divisions/{id}', name: 'app_dashboard_settings_edit_divisions')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editSettingsDivisions(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $userLocation = $currentLocation[0]->getLocation() ?? null;

        $game = $entityManager->getRepository(Divisions::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Settings not found.');
        }

        $form = $this->createForm(DivisionsFormType::class, $game, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($game);
            $entityManager->flush();

            $this->addFlash('success', 'Division has been successfully updated!');

            $searchBy = 'divisions';
            $url = $this->generateUrl('app_dashboard_settings') . '?search_by=' . urlencode($searchBy);

            $searchBy = 'divisions';
            $url = $this->generateUrl('app_dashboard_settings') . '?search_by=' . urlencode($searchBy);

            return $this->redirect($url);
        }

        return $this->render('dashboard/create_divisions.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }

    #[Route('/dashboard/settings-edit-table-type/{id}', name: 'app_dashboard_settings_edit_table_type')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editSettingsTableType(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $userLocation = $currentLocation[0]->getLocation() ?? null;

        $game = $entityManager->getRepository(TableType::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Settings not found.');
        }

        $form = $this->createForm(TableTypeFormType::class, $game, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($game);
            $entityManager->flush();

            $this->addFlash('success', 'The table has been successfully updated!');

            $searchBy = 'table_type';
            $url = $this->generateUrl('app_dashboard_settings') . '?search_by=' . urlencode($searchBy);

            return $this->redirect($url);
        }

        return $this->render('dashboard/create_tables.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }

    #[Route('/dashboard/settings-edit-parameters/{id}', name: 'app_dashboard_settings_edit_parameters')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editSettingsParameters(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $userLocation = $currentLocation[0]->getLocation() ?? null;

        $game = $entityManager->getRepository(Parameters::class)->find($id);

        if (!$game) {
            throw $this->createNotFoundException('Settings not found.');
        }

        $form = $this->createForm(ParametersFormType::class, $game, [
            'user_location' => $userLocation,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($game);
            $entityManager->flush();

            $this->addFlash('success', 'The parameter has been successfully updated!');

            $searchBy = 'parameters';
            $url = $this->generateUrl('app_dashboard_settings') . '?search_by=' . urlencode($searchBy);

            return $this->redirect($url);
        }

        return $this->render('dashboard/create_parameters.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }
}
