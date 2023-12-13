<?php

namespace ContainerBwcFlM5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_78JeOfSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.78JeOfS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.78JeOfS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\LocationController::delete' => ['privates', '.service_locator.1AE27f6', 'get_ServiceLocator_1AE27f6Service', true],
            'App\\Controller\\LocationController::edit' => ['privates', '.service_locator.1AE27f6', 'get_ServiceLocator_1AE27f6Service', true],
            'App\\Controller\\LocationController::index' => ['privates', '.service_locator.YNXvnLc', 'get_ServiceLocator_YNXvnLcService', true],
            'App\\Controller\\LocationController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LocationController::show' => ['privates', '.service_locator.dgpf7NO', 'get_ServiceLocator_Dgpf7NOService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\MeasurementController::delete' => ['privates', '.service_locator.M6eEz9.', 'get_ServiceLocator_M6eEz9_Service', true],
            'App\\Controller\\MeasurementController::edit' => ['privates', '.service_locator.M6eEz9.', 'get_ServiceLocator_M6eEz9_Service', true],
            'App\\Controller\\MeasurementController::index' => ['privates', '.service_locator.ODCF3UA', 'get_ServiceLocator_ODCF3UAService', true],
            'App\\Controller\\MeasurementController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MeasurementController::show' => ['privates', '.service_locator.2tZn04d', 'get_ServiceLocator_2tZn04dService', true],
            'App\\Controller\\WeatherController::city' => ['privates', '.service_locator.yyLDgIV', 'get_ServiceLocator_YyLDgIVService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\LocationController:delete' => ['privates', '.service_locator.1AE27f6', 'get_ServiceLocator_1AE27f6Service', true],
            'App\\Controller\\LocationController:edit' => ['privates', '.service_locator.1AE27f6', 'get_ServiceLocator_1AE27f6Service', true],
            'App\\Controller\\LocationController:index' => ['privates', '.service_locator.YNXvnLc', 'get_ServiceLocator_YNXvnLcService', true],
            'App\\Controller\\LocationController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LocationController:show' => ['privates', '.service_locator.dgpf7NO', 'get_ServiceLocator_Dgpf7NOService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\MeasurementController:delete' => ['privates', '.service_locator.M6eEz9.', 'get_ServiceLocator_M6eEz9_Service', true],
            'App\\Controller\\MeasurementController:edit' => ['privates', '.service_locator.M6eEz9.', 'get_ServiceLocator_M6eEz9_Service', true],
            'App\\Controller\\MeasurementController:index' => ['privates', '.service_locator.ODCF3UA', 'get_ServiceLocator_ODCF3UAService', true],
            'App\\Controller\\MeasurementController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MeasurementController:show' => ['privates', '.service_locator.2tZn04d', 'get_ServiceLocator_2tZn04dService', true],
            'App\\Controller\\WeatherController:city' => ['privates', '.service_locator.yyLDgIV', 'get_ServiceLocator_YyLDgIVService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\LocationController::delete' => '?',
            'App\\Controller\\LocationController::edit' => '?',
            'App\\Controller\\LocationController::index' => '?',
            'App\\Controller\\LocationController::new' => '?',
            'App\\Controller\\LocationController::show' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\MeasurementController::delete' => '?',
            'App\\Controller\\MeasurementController::edit' => '?',
            'App\\Controller\\MeasurementController::index' => '?',
            'App\\Controller\\MeasurementController::new' => '?',
            'App\\Controller\\MeasurementController::show' => '?',
            'App\\Controller\\WeatherController::city' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\LocationController:delete' => '?',
            'App\\Controller\\LocationController:edit' => '?',
            'App\\Controller\\LocationController:index' => '?',
            'App\\Controller\\LocationController:new' => '?',
            'App\\Controller\\LocationController:show' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\MeasurementController:delete' => '?',
            'App\\Controller\\MeasurementController:edit' => '?',
            'App\\Controller\\MeasurementController:index' => '?',
            'App\\Controller\\MeasurementController:new' => '?',
            'App\\Controller\\MeasurementController:show' => '?',
            'App\\Controller\\WeatherController:city' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
