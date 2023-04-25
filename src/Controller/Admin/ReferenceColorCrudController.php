<?php

namespace App\Controller\Admin;

use App\Entity\ReferenceColor;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class ReferenceColorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReferenceColor::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            ColorField::new('color_code')->showValue(),
            IntegerField::new('r'),
            IntegerField::new('g'),
            IntegerField::new('b'),
            BooleanField::new('active'),
            IntegerField::new('hMin'),
            IntegerField::new('hMax'),
            IntegerField::new('sMin'),
            IntegerField::new('sMax'),
            IntegerField::new('lMin'),
            IntegerField::new('lMax'),
        ];
    }
}
