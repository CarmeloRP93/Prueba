<?php

/* moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig */
class __TwigTemplate_bcf5341c0e57ec6bcd48eeedeb90700bb375d8c1b2cdfe99d1204941b0e00ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "moduloclientesclienteBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Vista de escribir sugerencia ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <h1 class=\"t1\">Escribir sugerencia</h1>   
    </div>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

    <div class=\"form-group container\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinoComentario", array()), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinoComentario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Destino")));
        echo "
        <span class=\"text-danger\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinoComentario", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group container\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba el tipo de sugerencia")));
        echo "
        <span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group container\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba la descripción")));
        echo "
        <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group container\"><p>
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar", array()), 'widget', array("label" => "Enviar", "attr" => array("class" => "btn btn-success")));
        echo "
        </p></div>     

    ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  95 => 29,  88 => 25,  84 => 24,  80 => 23,  73 => 19,  69 => 18,  65 => 17,  58 => 13,  54 => 12,  50 => 11,  44 => 8,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'moduloclientesclienteBundle::main.html.twig' %}
{% block title %}Vista de escribir sugerencia {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <h1 class=\"t1\">Escribir sugerencia</h1>   
    </div>

    {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}

    <div class=\"form-group container\">
        {{ form_label(form.destinoComentario) }}
        {{ form_widget(form.destinoComentario, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Destino'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.destinoComentario) }}</span>
    </div>

    <div class=\"form-group container\">
        {{ form_label(form.tipoComentario) }}
        {{ form_widget(form.tipoComentario, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Escriba el tipo de sugerencia'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.tipoComentario) }}</span>
    </div>

    <div class=\"form-group container\">
        {{ form_label(form.descripcion) }}
        {{ form_widget(form.descripcion, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Escriba la descripción'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.descripcion) }}</span>
    </div>

    <div class=\"form-group container\"><p>
            {{ form_widget(form.enviar, {'label' : 'Enviar', 'attr': {'class': 'btn btn-success'}}) }}
        </p></div>     

    {{ form_end(form) }}

{% endblock %}", "moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Canchas/escribirSugerencia.html.twig");
    }
}
