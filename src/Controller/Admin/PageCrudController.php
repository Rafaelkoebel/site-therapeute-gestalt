<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Page::class;
    }




    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            TextField::new('slug')->hideOnForm(),
            BooleanField::new('isHome', 'Page d’accueil'),
            TextEditorField::new('contenu')
                ->setFormTypeOptions([
                    'attr' => ['rows' => 20],
                ]),
            AssociationField::new('therapeute'),
        ];
    }
}
