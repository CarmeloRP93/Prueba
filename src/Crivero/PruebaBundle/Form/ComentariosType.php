<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComentariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoComentario', 'hidden')
            ->add('idRemitente', 'hidden')
            ->add('destinatario', 'text' )
            ->add('asunto', 'text')
            ->add('descripcion', 'textarea', array('attr' => array('cols' => '4', 'rows' => '4')))
            ->add('fecha', 'datetime')
            ->add('enviar', 'submit', array('label' => 'Enviar'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Comentarios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_comentarios';
    }
}
