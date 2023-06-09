<?php

namespace Container9uXdL2X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5fKmsacService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5fKmsac' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5fKmsac'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hub' => ['privates', 'mercure.hub.default.traceable', 'getMercure_Hub_Default_TraceableService', false],
        ], [
            'hub' => '?',
        ]);
    }
}
