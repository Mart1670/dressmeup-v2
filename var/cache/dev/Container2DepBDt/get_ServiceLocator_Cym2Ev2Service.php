<?php

namespace Container2DepBDt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cym2Ev2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cym2Ev2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cym2Ev2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'colorRepository' => ['privates', '.errored.zMKj1rx', NULL, 'Cannot determine controller argument for "App\\Controller\\VetementController::index()": the $colorRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\ColorRepository". Did you forget to add a use statement?'],
            'request' => ['privates', '.errored.w75IF66', NULL, 'Cannot determine controller argument for "App\\Controller\\VetementController::index()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
            'slugger' => ['privates', '.errored..IJgDgR', NULL, 'Cannot determine controller argument for "App\\Controller\\VetementController::index()": the $slugger argument is type-hinted with the non-existent class or interface: "App\\Controller\\SluggerInterface". Did you forget to add a use statement?'],
            'vetementRepository' => ['privates', '.errored.iWaJipx', NULL, 'Cannot determine controller argument for "App\\Controller\\VetementController::index()": the $vetementRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\VetementRepository". Did you forget to add a use statement?'],
        ], [
            'colorRepository' => '?',
            'request' => '?',
            'slugger' => '?',
            'vetementRepository' => '?',
        ]);
    }
}
