<?php

namespace App\Form;

use App\Entity\Vetement;
use App\Entity\Color;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VetementFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
            $builder
            // ->add('name')
            ->add('type')
            ->add('style')
            ->add('newColor', TextType::class, [
                "mapped" => false,
            ])
            ->add('nameColor', TextType::class, [
                "mapped" => false,
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the image file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '10240k',
                        'mimeTypes' => [
                            'image/jpg',
                            'image/jpeg', 
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPG document',
                    ])
                ],
            ])
            // ->add('tenues')
            // ->add('tagHumeur', EntityType::class, [
            //     'class' => 'App\Entity\TagHumeur',
            //     'multiple' => true,
            //     //Pour checkbox
            //     'expanded' => true,
            //     'choice_label' => 'name',
            //     ])
                ->add('color')
                ->add('tagAmbiances', EntityType::class, [
                    'class' => 'App\Entity\TagAmbiance',
                    // 'attr' => ['class' => 'tagAmbiance'],
                    'multiple' => true,
                    //Pour checkbox
                    'expanded' => true,
                    'choice_label' => 'name',
                    ])                 
                    ->add('valider', SubmitType::class, [
                        'attr' => ['class' => 'save'],
                    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vetement::class,
        ]);
    }
}
