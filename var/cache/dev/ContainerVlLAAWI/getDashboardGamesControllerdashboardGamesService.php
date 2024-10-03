<?php

namespace ContainerVlLAAWI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardGamesControllerdashboardGamesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0i1NoSH.App\Controller\DashboardGamesController::dashboardGames()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0i1NoSH.App\\Controller\\DashboardGamesController::dashboardGames()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'gamesRepository' => ['privates', 'App\\Repository\\GamesRepository', 'getGamesRepositoryService', true],
            'userProfile' => ['privates', 'App\\Repository\\UserProfileRepository', 'getUserProfileRepositoryService', true],
            'tournamentRegistration' => ['privates', 'App\\Repository\\TournamentRegistrationRepository', 'getTournamentRegistrationRepositoryService', true],
            'teamsRepository' => ['privates', 'App\\Repository\\TeamsRepository', 'getTeamsRepositoryService', true],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
            'gamesRepository' => 'App\\Repository\\GamesRepository',
            'userProfile' => 'App\\Repository\\UserProfileRepository',
            'tournamentRegistration' => 'App\\Repository\\TournamentRegistrationRepository',
            'teamsRepository' => 'App\\Repository\\TeamsRepository',
        ]))->withContext('App\\Controller\\DashboardGamesController::dashboardGames()', $container);
    }
}
