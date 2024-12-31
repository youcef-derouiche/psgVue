<?php

namespace Container77BAOq0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V4b_FYYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V4b.fYY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V4b.fYY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\BoutiqueAdminController::addProduct' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::addProduct()', 'getBoutiqueAdminControlleraddProductService', true],
            'App\\Controller\\BoutiqueAdminController::getProducts' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::getProducts()', 'getBoutiqueAdminControllergetProductsService', true],
            'App\\Controller\\BoutiqueAdminController::deleteProduct' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::deleteProduct()', 'getBoutiqueAdminControllerdeleteProductService', true],
            'App\\Controller\\BoutiqueAdminController::updateStock' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::updateStock()', 'getBoutiqueAdminControllerupdateStockService', true],
            'App\\Controller\\JoueurController::getJoueurs' => ['privates', '.service_locator.egipcEH.App\\Controller\\JoueurController::getJoueurs()', 'getJoueurControllergetJoueursService', true],
            'App\\Controller\\JoueurController::addJoueur' => ['privates', '.service_locator.egipcEH.App\\Controller\\JoueurController::addJoueur()', 'getJoueurControlleraddJoueurService', true],
            'App\\Controller\\JoueurController::updateJoueur' => ['privates', '.service_locator.egipcEH.App\\Controller\\JoueurController::updateJoueur()', 'getJoueurControllerupdateJoueurService', true],
            'App\\Controller\\JoueurController::deleteJoueur' => ['privates', '.service_locator.egipcEH.App\\Controller\\JoueurController::deleteJoueur()', 'getJoueurControllerdeleteJoueurService', true],
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.OzEre6h.App\\Controller\\LoginController::login()', 'getLoginControllerloginService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\BoutiqueAdminController:addProduct' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::addProduct()', 'getBoutiqueAdminControlleraddProductService', true],
            'App\\Controller\\BoutiqueAdminController:getProducts' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::getProducts()', 'getBoutiqueAdminControllergetProductsService', true],
            'App\\Controller\\BoutiqueAdminController:deleteProduct' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::deleteProduct()', 'getBoutiqueAdminControllerdeleteProductService', true],
            'App\\Controller\\BoutiqueAdminController:updateStock' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\BoutiqueAdminController::updateStock()', 'getBoutiqueAdminControllerupdateStockService', true],
            'App\\Controller\\JoueurController:getJoueurs' => ['privates', '.service_locator.egipcEH.App\\Controller\\JoueurController::getJoueurs()', 'getJoueurControllergetJoueursService', true],
            'App\\Controller\\JoueurController:addJoueur' => ['privates', '.service_locator.egipcEH.App\\Controller\\JoueurController::addJoueur()', 'getJoueurControlleraddJoueurService', true],
            'App\\Controller\\JoueurController:updateJoueur' => ['privates', '.service_locator.egipcEH.App\\Controller\\JoueurController::updateJoueur()', 'getJoueurControllerupdateJoueurService', true],
            'App\\Controller\\JoueurController:deleteJoueur' => ['privates', '.service_locator.egipcEH.App\\Controller\\JoueurController::deleteJoueur()', 'getJoueurControllerdeleteJoueurService', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.OzEre6h.App\\Controller\\LoginController::login()', 'getLoginControllerloginService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\BoutiqueAdminController::addProduct' => '?',
            'App\\Controller\\BoutiqueAdminController::getProducts' => '?',
            'App\\Controller\\BoutiqueAdminController::deleteProduct' => '?',
            'App\\Controller\\BoutiqueAdminController::updateStock' => '?',
            'App\\Controller\\JoueurController::getJoueurs' => '?',
            'App\\Controller\\JoueurController::addJoueur' => '?',
            'App\\Controller\\JoueurController::updateJoueur' => '?',
            'App\\Controller\\JoueurController::deleteJoueur' => '?',
            'App\\Controller\\LoginController::login' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\BoutiqueAdminController:addProduct' => '?',
            'App\\Controller\\BoutiqueAdminController:getProducts' => '?',
            'App\\Controller\\BoutiqueAdminController:deleteProduct' => '?',
            'App\\Controller\\BoutiqueAdminController:updateStock' => '?',
            'App\\Controller\\JoueurController:getJoueurs' => '?',
            'App\\Controller\\JoueurController:addJoueur' => '?',
            'App\\Controller\\JoueurController:updateJoueur' => '?',
            'App\\Controller\\JoueurController:deleteJoueur' => '?',
            'App\\Controller\\LoginController:login' => '?',
        ]);
    }
}
