<?php

namespace ContainerVlLAAWI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5hl7CedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5hl7Ced' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5hl7Ced'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'posts' => ['privates', 'App\\Repository\\MicroPostRepository', 'getMicroPostRepositoryService', true],
        ], [
            'posts' => 'App\\Repository\\MicroPostRepository',
        ]);
    }
}
