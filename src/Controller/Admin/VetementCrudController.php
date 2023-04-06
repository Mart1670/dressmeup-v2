<?php

namespace App\Controller\Admin;

use App\Entity\Vetement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VetementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vetement::class;
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
