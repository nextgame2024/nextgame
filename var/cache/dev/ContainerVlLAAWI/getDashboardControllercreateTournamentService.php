<?php

namespace ContainerVlLAAWI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllercreateTournamentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cbAUxKW.App\Controller\DashboardController::createTournament()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.cbAUxKW'] ?? $container->load('get_ServiceLocator_CbAUxKWService'));

        if (isset($container->privates['.service_locator.cbAUxKW.App\\Controller\\DashboardController::createTournament()'])) {
            return $container->privates['.service_locator.cbAUxKW.App\\Controller\\DashboardController::createTournament()'];
        }

        return $container->privates['.service_locator.cbAUxKW.App\\Controller\\DashboardController::createTournament()'] = $a->withContext('App\\Controller\\DashboardController::createTournament()', $container);
    }
}
