<?php

namespace App\Controller\Admin;

use App\Entity\Elevi;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EleviCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Elevi::class;
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
