<?php

namespace Video\FilmothequeBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ActeurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text');

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(optionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Video\FilmothequeBundle\Entity\acteur'
        ));
    }

}

