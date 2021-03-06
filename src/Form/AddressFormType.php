<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['attr' => ['class' => 'modernize', 'placeholder' => 'Libellé']])
            ->add('line1', TextType::class, ['attr' => ['class' => 'modernize', 'placeholder' => 'Adresse']])
            ->add('line2', TextType::class, ['attr' => ['class' => 'modernize', 'placeholder' => 'Complément, Bâtiment, Appartement...']])
//            ->add('city', TextType::class)
//            ->add('zipCode', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
