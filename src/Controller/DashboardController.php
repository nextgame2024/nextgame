<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\TeamsRepository;
use App\Repository\UserProfileRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TournamentRegistrationRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(
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

        return $this->render('dashboard/index.html.twig', [
            'tournament_registration' => $paginator,
            'current_page' => $page,
            'total_pages' => $totalPages,
            'sort_by' => $sortBy,
            'order' => $order,
            'search_by' => $searchBy,
            'search_value' => $searchValue,
        ]);
    }
}
