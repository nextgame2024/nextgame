<?php

namespace ContainerVlLAAWI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerdeleteTournamentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mnM5Upm.App\Controller\DashboardController::deleteTournament()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mnM5Upm.App\\Controller\\DashboardController::deleteTournament()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'tournamentRepository' => ['privates', 'App\\Repository\\TournamentRepository', 'getTournamentRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'tournamentRepository' => 'App\\Repository\\TournamentRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\DashboardController::deleteTournament()', $container);
    }
}
