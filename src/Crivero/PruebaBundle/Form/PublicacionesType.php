<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PublicacionesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', 'text', array('label' => 'Título'))
            ->add('imagen', 'file',  array('data_class' => null))
            ->add('fechaFinalizacion', 'date', array('widget' => 'single_text',
                                                     'label' => 'Fin de publicación'))
            ->add('confirmar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Publicaciones'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_publicaciones';
    }
}
