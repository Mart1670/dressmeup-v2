<?php

namespace Container2DepBDt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_ZMKj1rxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.zMKj1rx' shared service.
     *
     * @return \App\Controller\ColorRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot determine controller argument for "App\\Controller\\VetementController::index()": the $colorRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\ColorRepository". Did you forget to add a use statement?');
    }
}
