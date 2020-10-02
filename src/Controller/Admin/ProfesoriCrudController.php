<?php

namespace App\Controller\Admin;

use App\Entity\Profesori;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProfesoriCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Profesori::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
