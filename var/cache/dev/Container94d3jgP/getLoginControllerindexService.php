<?php

namespace Container94d3jgP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PXJZ2Ro.App\Controller\LoginController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PXJZ2Ro.App\\Controller\\LoginController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'utils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'utils' => '?',
        ]))->withContext('App\\Controller\\LoginController::index()', $container);
    }
}
