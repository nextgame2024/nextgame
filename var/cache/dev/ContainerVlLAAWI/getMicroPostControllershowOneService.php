<?php

namespace ContainerVlLAAWI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMicroPostControllershowOneService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T2jPi7M.App\Controller\MicroPostController::showOne()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T2jPi7M.App\\Controller\\MicroPostController::showOne()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'post' => ['privates', '.errored..service_locator.T2jPi7M.App\\Entity\\MicroPost', NULL, 'Cannot autowire service ".service_locator.T2jPi7M": it needs an instance of "App\\Entity\\MicroPost" but this type has been excluded in "config/services.yaml".'],
        ], [
            'post' => 'App\\Entity\\MicroPost',
        ]))->withContext('App\\Controller\\MicroPostController::showOne()', $container);
    }
}
