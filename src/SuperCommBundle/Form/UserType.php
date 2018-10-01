<?php
namespace SuperCommBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class UserType extends AbstractType
{
    // UserType is a abstract representation of the form
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // I can add fields in the FormBuilder (component of Symfony) to be seen in the formview
        $builder->add('lastname')
                ->add('firstname')
                ->add('status', ChoiceType::class, array(
                'choices'=> array(
                    'Une PME'=> 'Une PME', 'Une startup'=> 'Une startup', 'Une TPE'=> 'Une TPE',
                    'En libéral dans le médical'=> 'En libéral dans le médical', 'En libéral dans le juridique'=> 'En libéral dans le juridique',
                    'Un(e) confrère ou un(e) enseignat(e)'=> 'Un(e) confrère ou un(e) enseignat(e)', 'Un(e) étudiant(e)'=> 'Un(e) étudiant(e)',
                    "En recherche d'emploi"=> "En recherche d'emploi" )));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SuperCommBundle\Entity\User'
        ));
    }

    // My custom form inherits from the FOSUser registration form ; I can remove it if I want custom every field of my form.
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'supercommbundle_user';
    }
}
