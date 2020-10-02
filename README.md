Lista completa de comenzi folosite in linia de comanda

composer create-project symfony/website-skeleton catalog
cd catalog
# completati cu valorile din baza voastra de date
# in .env inlocuim linia DATABASE astfel  ===>   DATABASE_URL=mysql://root:1234@localhost:3306/catalog?serverVersion=mariadb-10.4.11
composer recipes:install doctrine/annotations --force -v
composer recipes:install doctrine/doctrine-bundle --force -v
composer recipes:install doctrine/doctrine-migrations-bundle --force -v
composer recipes:install sensio/framework-extra-bundle --force -v
composer recipes:install symfony/console --force -v
composer recipes:install symfony/debug-bundle --force -v
composer recipes:install symfony/flex --force -v
composer recipes:install symfony/framework-bundle --force -v
composer recipes:install symfony/mailer --force -v
composer recipes:install symfony/maker-bundle --force -v
composer recipes:install symfony/monolog-bundle --force -v
composer recipes:install symfony/notifier --force -v
composer recipes:install symfony/phpunit-bridge --force -v
composer recipes:install symfony/routing --force -v
composer recipes:install symfony/security-bundle --force -v
composer recipes:install symfony/translation --force -v
composer recipes:install symfony/twig-bundle --force -v
composer recipes:install symfony/validator --force -v
composer recipes:install symfony/web-profiler-bundle --force -v

symfony console make:controller Catalog
symfony console make:entity Profesori
symfony console make:entity Note
symfony console make:entity Elevi
php bin/console make:migration
php bin/console doctrine:migrations:migrate

composer require easycorp/easyadmin-bundle

Creare folder Admin in src/controller
pentru fiecare entitate dam comanda crud (0,1,2 in cazul nostru)
php bin/console make:admin:crud

php bin/console make:admin:dashboard
stergem "\" din namespace App\Controller\Admin*;
adaugam use
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
adaugam menuItem
      	yield MenuItem::linkToCrud('Profesori', 'Administrare Profesori', Profesori::class);
        yield MenuItem::linkToCrud('Elevi', 'Administrare Elevi', Elevi::class);
        yield MenuItem::linkToCrud('Note', 'Administrare Note', Note::class);

adaugam 
	      $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuilder->setController(ProfesoriCrudController::class)->generateUrl());
in locul  
      #return parent::index();

symfony server:start

Adaugam Profesori, Elevi si Note
php bin/console doctrine:migrations:migrate
