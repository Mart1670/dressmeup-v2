<?php

namespace App\Controller\Admin;

use App\Entity\TagHumeur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TagHumeurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TagHumeur::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('name'),
        ];
    }
   
}
