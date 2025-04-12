<?php

namespace App\Form;

use App\Entity\Rencontre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RencontreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_utilisateur')
            ->add('titre')
            ->add('description')
            ->add('categorie_rencontre')
            ->add('lieu')
            ->add('date_rencontre', null, [
                'widget' => 'single_text'
            ])
            ->add('image')
            ->add('image_name')
            ->add('tags')
            ->add('places_dispo')
            ->add('budget')
            ->add('bio')
            ->add('statut')
            ->add('age_min')
            ->add('age_max')
            ->add('distance_max')
            ->add('genre_recherche')
            ->add('niveau_relation')
            ->add('created_at', null, [
                'widget' => 'single_text'
            ])
            ->add('latitude')
            ->add('longitude')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rencontre::class,
        ]);
    }
}
