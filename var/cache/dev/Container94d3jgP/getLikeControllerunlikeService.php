<?php

namespace Container94d3jgP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLikeControllerunlikeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q.lvv_Y.App\Controller\LikeController::unlike()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q.lvv_Y.App\\Controller\\LikeController::unlike()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'post' => ['privates', '.errored..service_locator.Q.lvv_Y.App\\Entity\\MicroPost', NULL, 'Cannot autowire service ".service_locator.Q.lvv_Y": it needs an instance of "App\\Entity\\MicroPost" but this type has been excluded in "config/services.yaml".'],
            'posts' => ['privates', 'App\\Repository\\MicroPostRepository', 'getMicroPostRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'post' => 'App\\Entity\\MicroPost',
            'posts' => 'App\\Repository\\MicroPostRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\LikeController::unlike()', $container);
    }
}
