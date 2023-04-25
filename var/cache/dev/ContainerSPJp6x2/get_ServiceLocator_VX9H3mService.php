<?php

namespace ContainerSPJp6x2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VX9H3mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vX9_h3m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vX9_h3m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\ColorCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ColorCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ColorCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ColorCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ColorCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ColorCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ColorCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ColorCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ColorCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ColorCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ColorCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ColorCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ColorCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ColorCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\VetementCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\VetementCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\VetementCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\VetementCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\VetementCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\VetementCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\VetementCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\VetementCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\VetementCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\VetementCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\VetementCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\VetementCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\VetementCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\VetementCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ColortestController::index' => ['privates', '.service_locator.8LNhHdJ', 'get_ServiceLocator_8LNhHdJService', true],
            'App\\Controller\\DressingController::bottom' => ['privates', '.service_locator.VEbqy3h', 'get_ServiceLocator_VEbqy3hService', true],
            'App\\Controller\\DressingController::delete' => ['privates', '.service_locator.tGrh7JF', 'get_ServiceLocator_TGrh7JFService', true],
            'App\\Controller\\DressingController::top' => ['privates', '.service_locator.tGrh7JF', 'get_ServiceLocator_TGrh7JFService', true],
            'App\\Controller\\HomeController::generator' => ['privates', '.service_locator.zfr.ayg', 'get_ServiceLocator_Zfr_AygService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.sV_lXpb', 'get_ServiceLocator_SVLXpbService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TestpaletteController::colorname' => ['privates', '.service_locator.8LNhHdJ', 'get_ServiceLocator_8LNhHdJService', true],
            'App\\Controller\\TestpaletteController::index' => ['privates', '.service_locator.8LNhHdJ', 'get_ServiceLocator_8LNhHdJService', true],
            'App\\Controller\\TestpaletteController::integrationcolor' => ['privates', '.service_locator.GgO3p.I', 'get_ServiceLocator_GgO3p_IService', true],
            'App\\Controller\\VetementController::hsl' => ['privates', '.service_locator.8LNhHdJ', 'get_ServiceLocator_8LNhHdJService', true],
            'App\\Controller\\VetementController::index' => ['privates', '.service_locator.FPsfQyR', 'get_ServiceLocator_FPsfQyRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Admin\\ColorCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ColorCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ColorCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ColorCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ColorCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ColorCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ColorCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ColorCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ColorCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ColorCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ColorCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ColorCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ColorCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ColorCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ColorCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReferenceColorCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\VetementCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\VetementCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\VetementCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\VetementCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\VetementCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\VetementCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\VetementCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\VetementCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\VetementCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\VetementCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\VetementCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\VetementCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\VetementCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\VetementCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\VetementCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ColortestController:index' => ['privates', '.service_locator.8LNhHdJ', 'get_ServiceLocator_8LNhHdJService', true],
            'App\\Controller\\DressingController:bottom' => ['privates', '.service_locator.VEbqy3h', 'get_ServiceLocator_VEbqy3hService', true],
            'App\\Controller\\DressingController:delete' => ['privates', '.service_locator.tGrh7JF', 'get_ServiceLocator_TGrh7JFService', true],
            'App\\Controller\\DressingController:top' => ['privates', '.service_locator.tGrh7JF', 'get_ServiceLocator_TGrh7JFService', true],
            'App\\Controller\\HomeController:generator' => ['privates', '.service_locator.zfr.ayg', 'get_ServiceLocator_Zfr_AygService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.sV_lXpb', 'get_ServiceLocator_SVLXpbService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TestpaletteController:colorname' => ['privates', '.service_locator.8LNhHdJ', 'get_ServiceLocator_8LNhHdJService', true],
            'App\\Controller\\TestpaletteController:index' => ['privates', '.service_locator.8LNhHdJ', 'get_ServiceLocator_8LNhHdJService', true],
            'App\\Controller\\TestpaletteController:integrationcolor' => ['privates', '.service_locator.GgO3p.I', 'get_ServiceLocator_GgO3p_IService', true],
            'App\\Controller\\VetementController:hsl' => ['privates', '.service_locator.8LNhHdJ', 'get_ServiceLocator_8LNhHdJService', true],
            'App\\Controller\\VetementController:index' => ['privates', '.service_locator.FPsfQyR', 'get_ServiceLocator_FPsfQyRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Admin\\ColorCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ColorCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ColorCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ColorCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ColorCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ColorCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ColorCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ColorCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ColorCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ColorCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ColorCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ColorCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ColorCrudController::delete' => '?',
            'App\\Controller\\Admin\\ColorCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ColorCrudController::detail' => '?',
            'App\\Controller\\Admin\\ColorCrudController::edit' => '?',
            'App\\Controller\\Admin\\ColorCrudController::index' => '?',
            'App\\Controller\\Admin\\ColorCrudController::new' => '?',
            'App\\Controller\\Admin\\ColorCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ColorCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ColorCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::delete' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::detail' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::edit' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::index' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::new' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\VetementCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\VetementCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\VetementCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\VetementCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\VetementCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\VetementCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\VetementCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\VetementCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\VetementCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\VetementCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\VetementCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\VetementCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\VetementCrudController::delete' => '?',
            'App\\Controller\\Admin\\VetementCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\VetementCrudController::detail' => '?',
            'App\\Controller\\Admin\\VetementCrudController::edit' => '?',
            'App\\Controller\\Admin\\VetementCrudController::index' => '?',
            'App\\Controller\\Admin\\VetementCrudController::new' => '?',
            'App\\Controller\\Admin\\VetementCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\VetementCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\VetementCrudController::updateEntity' => '?',
            'App\\Controller\\ColortestController::index' => '?',
            'App\\Controller\\DressingController::bottom' => '?',
            'App\\Controller\\DressingController::delete' => '?',
            'App\\Controller\\DressingController::top' => '?',
            'App\\Controller\\HomeController::generator' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TestpaletteController::colorname' => '?',
            'App\\Controller\\TestpaletteController::index' => '?',
            'App\\Controller\\TestpaletteController::integrationcolor' => '?',
            'App\\Controller\\VetementController::hsl' => '?',
            'App\\Controller\\VetementController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\ColorCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ColorCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ColorCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ColorCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ColorCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ColorCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ColorCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ColorCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ColorCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ColorCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ColorCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ColorCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ColorCrudController:delete' => '?',
            'App\\Controller\\Admin\\ColorCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ColorCrudController:detail' => '?',
            'App\\Controller\\Admin\\ColorCrudController:edit' => '?',
            'App\\Controller\\Admin\\ColorCrudController:index' => '?',
            'App\\Controller\\Admin\\ColorCrudController:new' => '?',
            'App\\Controller\\Admin\\ColorCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ColorCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ColorCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:delete' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:detail' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:edit' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:index' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:new' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ReferenceColorCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\VetementCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\VetementCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\VetementCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\VetementCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\VetementCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\VetementCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\VetementCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\VetementCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\VetementCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\VetementCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\VetementCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\VetementCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\VetementCrudController:delete' => '?',
            'App\\Controller\\Admin\\VetementCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\VetementCrudController:detail' => '?',
            'App\\Controller\\Admin\\VetementCrudController:edit' => '?',
            'App\\Controller\\Admin\\VetementCrudController:index' => '?',
            'App\\Controller\\Admin\\VetementCrudController:new' => '?',
            'App\\Controller\\Admin\\VetementCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\VetementCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\VetementCrudController:updateEntity' => '?',
            'App\\Controller\\ColortestController:index' => '?',
            'App\\Controller\\DressingController:bottom' => '?',
            'App\\Controller\\DressingController:delete' => '?',
            'App\\Controller\\DressingController:top' => '?',
            'App\\Controller\\HomeController:generator' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TestpaletteController:colorname' => '?',
            'App\\Controller\\TestpaletteController:index' => '?',
            'App\\Controller\\TestpaletteController:integrationcolor' => '?',
            'App\\Controller\\VetementController:hsl' => '?',
            'App\\Controller\\VetementController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
