<?php

namespace Container9uXdL2X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N5k0zY8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n5k0zY8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n5k0zY8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\ArticleCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ArticleCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ArticleCrudController::publish' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::setHub' => ['privates', '.service_locator.5fKmsac', 'get_ServiceLocator_5fKmsacService', true],
            'App\\Controller\\Admin\\ArticleCrudController::topicUri' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ArticleCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ArticleCrudController:publish' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:setHub' => ['privates', '.service_locator.5fKmsac', 'get_ServiceLocator_5fKmsacService', true],
            'App\\Controller\\Admin\\ArticleCrudController:topicUri' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\ArticleCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::delete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::detail' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::edit' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::index' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::new' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::publish' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::setHub' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::topicUri' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:delete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:detail' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:edit' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:index' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:new' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:publish' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:setHub' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:topicUri' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}