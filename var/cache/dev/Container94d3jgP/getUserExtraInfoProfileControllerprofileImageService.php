<?php

namespace Container94d3jgP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserExtraInfoProfileControllerprofileImageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GjNmf51.App\Controller\UserExtraInfoProfileController::profileImage()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GjNmf51.App\\Controller\\UserExtraInfoProfileController::profileImage()'] = ($container->privates['.service_locator.GjNmf51'] ?? $container->load('get_ServiceLocator_GjNmf51Service'))->withContext('App\\Controller\\UserExtraInfoProfileController::profileImage()', $container);
    }
}
