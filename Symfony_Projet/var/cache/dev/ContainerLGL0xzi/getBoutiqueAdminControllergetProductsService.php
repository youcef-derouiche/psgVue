<?php

namespace ContainerLGL0xzi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBoutiqueAdminControllergetProductsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Kq27LHM.App\Controller\BoutiqueAdminController::getProducts()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::getProducts()'] = ($container->privates['.service_locator.Kq27LHM'] ?? $container->load('get_ServiceLocator_Kq27LHMService'))->withContext('App\\Controller\\BoutiqueAdminController::getProducts()', $container);
    }
}