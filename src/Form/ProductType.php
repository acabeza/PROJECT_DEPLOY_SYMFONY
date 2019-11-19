<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameProduct', TextType::class, [
                'attr' => [
                    'placeholder' => 'Añada el nombre del Producto',
                    'class' => 'custom_inputForm'
                ],
                'label' => 'Nombre del Producto',
                'label_attr' => [
                    'class' => 'labelForm1'
                ]

            ])
            ->add('ref_product', TextType::class, [
                'attr' => [
                    'placeholder' => 'Añada la referencia del producto',
                    'class' => 'custom_inputForm'
                ],
                'label' => 'Referencia del Producto',
                'label_attr' => [
                    'class' => 'labelForm1'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'placeholder' => 'Crear',
                    'class' => 'submit'
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
