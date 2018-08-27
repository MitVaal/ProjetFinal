<?php

namespace SuperCommBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;



class ProspectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('civility', ChoiceType::class, array('choices'=> array('M.'=> 'M.', 'Mme'=> 'Mme' )))
                ->add('lastname')
                ->add('firstname')
                ->add('email', EmailType::class)
                ->add('password')
                ->add('status', ChoiceType::class, array(
                    'choices'=> array(
                        '       '=> '       ',
                        'Une PME'=> 'Une PME', 'Une starup'=> 'Une starup', 'Une TPE'=> 'Une TPE',
                        'En libéral dans le médical'=> 'En libéral dans le médical', 'En libéral dans le juridique'=> 'En libéral dans le juridique',
                        'Un(e) confrère ou un(e) enseignat(e)'=> 'Un(e) confrère ou un(e) enseignat(e)', 'Un(e) étudiant(e)'=> 'Un(e) étudiant(e)',
                        "En recherche d'emploi"=> "En recherche d'emploi" )))
                ->add('submit', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SuperCommBundle\Entity\Prospect'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'supercommbundle_prospect';
    }


}
