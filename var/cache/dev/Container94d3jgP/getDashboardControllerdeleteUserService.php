<?php

namespace Container94d3jgP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerdeleteUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._FObXMC.App\Controller\DashboardController::deleteUser()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._FObXMC.App\\Controller\\DashboardController::deleteUser()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\DashboardController::deleteUser()', $container);
    }
}
