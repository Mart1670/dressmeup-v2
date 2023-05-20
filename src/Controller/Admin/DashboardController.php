<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\ColorCrudController;
use App\Controller\Admin\ReferenceColorCrudController;
use App\Entity\Color;
use App\Entity\ReferenceColor;
use App\Entity\Vetement;
use App\Entity\Palette;
use App\Entity\TagHumeur;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        /* return parent::index(); */

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        /* if(is_granted('ROLE_ADMIN')){ */
            $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
            return $this->redirect($adminUrlGenerator->setController(ColorCrudController::class)->generateUrl(),
            );
        /* } else {
            return $this->render('app_home');
        } */

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        //return $this->render('some/path/my-dashboard.html.twig');
        
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Admin');
    }

    public function configureMenuItems(): iterable
    {
        //yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Color', 'fas fa-list', Color::class);
        yield MenuItem::linkToCrud('Reference Color', 'fas fa-list', ReferenceColor::class);
        yield MenuItem::linkToCrud('Vetement', 'fas fa-list', Vetement::class);
        yield MenuItem::linkToCrud('Palette', 'fas fa-list', Palette::class);
        yield MenuItem::linkToCrud('TagHumeur', 'fas fa-list', TagHumeur::class);
    }
}
