<?php

namespace ContainerVlLAAWI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMicroPostControllerfollowsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5hl7Ced.App\Controller\MicroPostController::follows()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5hl7Ced.App\\Controller\\MicroPostController::follows()'] = ($container->privates['.service_locator.5hl7Ced'] ?? $container->load('get_ServiceLocator_5hl7CedService'))->withContext('App\\Controller\\MicroPostController::follows()', $container);
    }
}
