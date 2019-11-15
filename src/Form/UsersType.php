<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options, ProductRepository $productRepository)
    {
        $products -> $productRepository->findAll();
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'placeholder' => 'Añada el nombre',
                    'class' => 'custom_class'
                ],
                'name_label' => 'Nombre'
            ])
            ->add('surname', TextType::class, [
                'attr' => [
                    'placeholder' => 'Añada el apellido',
                    'class' => 'custom_class'
                ]
            ])
            ->add('ref_product', ChoiceType::class, [
                'attr' => [
                    'placeholder' => 'Añada la referencia del producto',
                    'class' => 'custom_class'
                ]
            ])
            ->add('city', TextType::class, [
                'attr' => [
                    'placeholder' => 'Añada tu ciudad',
                    'class' => 'custom_class'
                ]
            ])
            ->add('cp', IntegerType::class, [
                'attr' => [
                    'placeholder' => 'Añada el codigo postal',
                    'class' => 'custom_class'
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Añada el correo',
                    'class' => 'custom_class'
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
