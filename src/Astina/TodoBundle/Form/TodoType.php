<?php

namespace Astina\TodoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TodoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('itemCode', 'text', array('required' => false))
            ->add('itemName', 'text', array('required' => false))
            ->add('itemPrice', 'text', array('required' => false))
            ->add('itemQuantity', 'text', array('required' => false))
            ->add('itemStatus', 'text', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Astina\TodoBundle\Entity\Todo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'astina_todobundle_todo';
    }
}
