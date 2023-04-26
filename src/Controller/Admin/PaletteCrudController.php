<?php

namespace App\Controller\Admin;

use App\Entity\Palette;
use App\Entity\TagHumeur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class PaletteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Palette::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('name'),
            ColorField::new('color1')->showValue(),
            ColorField::new('color2')->showValue(),
            ColorField::new('color3')->showValue(),
            ColorField::new('color4')->showValue(),
            ColorField::new('color5')->showValue(),
            AssociationField::new('tagHumeur')
        ];
    }
   
}
