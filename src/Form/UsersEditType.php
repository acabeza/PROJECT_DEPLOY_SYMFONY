<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\ProductType;
use App\Repository\ProductRepository;


class UsersEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => [
                'placeholder' => 'Añada el nombre',
                'class' => 'custom_inputForm'
            ],
            'label' => 'Nombre',
            'label_attr' => [
                'class' => 'labelForm1'
            ]
            ])

        ->add('surname', TextType::class, [
            'attr' => [
                'placeholder' => 'Añada el apellido',
                'class' => 'custom_inputForm'
            ],
            'label' => 'Apellidos',
            'label_attr' => [
                'class' => 'labelForm1'
            ]
        ])

        ->add('city', TextType::class, [
            'attr' => [
                'placeholder' => 'Añada tu ciudad',
                'class' => 'custom_inputForm'
            ],
            'label' => 'Ciudad',
            'label_attr' => [
                'class' => 'labelForm1'
            ]
        ])

        ->add('cp', IntegerType::class, [
            'attr' => [
                'placeholder' => 'Añada el codigo postal',
                'class' => 'custom_inputForm'
            ],
            'label' => 'Codigo Postal',
            'label_attr' => [
                'class' => 'labelForm1'
            ]
        ])

        ->add('email', EmailType::class, [
            'attr' => [
                'placeholder' => 'Añada el correo',
                'class' => 'custom_inputForm'
            ],
            'label' => 'Correo Electronico',
            'label_attr' => [
                'class' => 'labelForm1'
            ]
        ])

        ->add('Editar', SubmitType::class, [
            'attr' => [
                'placeholder' => 'Editar',
                'class' => 'submit'
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
