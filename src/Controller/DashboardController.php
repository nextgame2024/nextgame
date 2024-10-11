<?php

namespace App\Controller;

use App\Repository\DashboardRepository;
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
        DashboardRepository $dashboardRepository,
        UserProfileRepository $userProfile,
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $dashboardByPlayer = [];
        $dashboardByTeams = [];
        $tournamentNames = [];
        $tournamentDivisions = [];
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $getCurrentLocation = $currentLocation[0]->getLocation();
        $locationId = $getCurrentLocation->getId();
        $searchByTournament = $request->query->get('search_by_tournament', null);
        $searchByDivision = $request->query->get('search_by_division', null);

        if (!$searchByTournament) {
            $searchByTournament = $dashboardRepository->findTournamentWithFirstGameCreated($locationId);
        }
        if (!$searchByDivision) {
            $searchByDivision = $dashboardRepository->findDivisionWithFirstGameCreated($locationId);
        }

        if ($searchByTournament && $searchByDivision) {
            $dashboardByPlayer = $dashboardRepository->dashboardByPlayer($searchByTournament, $searchByDivision, $locationId);
            $dashboardByTeams = $dashboardRepository->dashboardByTeams($searchByTournament, $searchByDivision, $locationId);
            $seachValues = $dashboardRepository->findActiveTournaments($locationId);

            foreach ($seachValues as $item) {
                $uniqueKey = $item['id'] . '-' . $item['tournament_name'];
                if (!isset($tournamentNames[$uniqueKey])) {
                    $tournamentNames[$uniqueKey] = [
                        'id' => $item['id'],
                        'tournament_name' => $item['tournament_name'],
                    ];
                }
            }
            $tournamentNames = array_values($tournamentNames);

            foreach ($seachValues as $item) {
                $uniqueKey = $item['division_id'] . '-' . $item['division_name'];
                if (!isset($tournamentDivisions[$uniqueKey])) {
                    $tournamentDivisions[$uniqueKey] = [
                        'division_id' => $item['division_id'],
                        'division_name' => $item['division_name'],
                    ];
                }
            }
            $tournamentDivisions = array_values($tournamentDivisions);
        }

        return $this->render('dashboard/index.html.twig', [
            'dashboard_player' => $dashboardByPlayer,
            'dashboard_teams' => $dashboardByTeams,
            'search_by_tournament' => $searchByTournament,
            'search_by_division' => $searchByDivision,
            'tournamentNames' => $tournamentNames,
            'tournamentDivisions' => $tournamentDivisions,
        ]);
    }
}
