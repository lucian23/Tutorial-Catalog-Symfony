<?php

namespace App\Controller\Admin;
    use App\Entity\Profesori;
	use App\Entity\Elevi;
	use App\Entity\Note;
	use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
	use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuilder->setController(ProfesoriCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Catalog');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Profesori', 'Administrare Profesori', Profesori::class);
        yield MenuItem::linkToCrud('Elevi', 'Administrare Elevi', Elevi::class);
        yield MenuItem::linkToCrud('Note', 'Administrare Note', Note::class);
    }
}
