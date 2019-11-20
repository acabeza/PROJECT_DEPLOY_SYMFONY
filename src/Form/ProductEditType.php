<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProductEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nameProduct', TextType::class, [
            'attr' => [
                'class' => 'custom_inputForm'
            ],
            'label' => 'Nombre del Producto',
            'label_attr' => [
                'class' => 'labelForm1'
            ]

        ])
        ->add('Editar', SubmitType::class, [
            'attr' => [
                'placeholder' => 'editar',
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
