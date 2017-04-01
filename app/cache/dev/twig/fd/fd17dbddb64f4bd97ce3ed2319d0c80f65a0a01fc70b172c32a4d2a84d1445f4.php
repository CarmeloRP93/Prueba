<?php

/* moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig */
class __TwigTemplate_705c3ff5202674ae23b0b5d8e1b17ea00020d520f4f6600776e0650de2e37afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Pago Sesion ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
         <h1 class=\"t1\">Pago de la Sesión</h1>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

        <div class=\"hidden\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCliente", array()), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCliente", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCliente", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"hidden\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaPago", array()), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaPago", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaPago", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "concepto", array()), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "concepto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Concepto")));
        echo "
            <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "concepto", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPago", array()), 'label');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tipo de pago")));
        echo "
            <span class=\"text-danger\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPago", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantia", array()), 'label');
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantia", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cantidad a pagar")));
        echo "
            <span class=\"text-danger\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantia", array()), 'errors');
        echo "</span>
        </div>

        <p>
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
        </p>                

        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  123 => 41,  116 => 37,  112 => 36,  108 => 35,  101 => 31,  97 => 30,  93 => 29,  86 => 25,  82 => 24,  78 => 23,  71 => 19,  67 => 18,  63 => 17,  56 => 13,  52 => 12,  48 => 11,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Pago Sesion {% endblock %}

{% block contenido %}
    <div class=\"container\">
         <h1 class=\"t1\">Pago de la Sesión</h1>
        {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}

        <div class=\"hidden\">
            {{ form_label(form.idCliente) }}
            {{ form_widget(form.idCliente, { 'attr' : {'class' : 'form-control'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.idCliente) }}</span>
        </div>

        <div class=\"hidden\">
            {{ form_label(form.fechaPago) }}
            {{ form_widget(form.fechaPago, {'attr': {'class': 'form-control'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.fechaPago) }}</span>
        </div>

        <div class=\"form-group\">
            {{ form_label(form.concepto) }}
            {{ form_widget(form.concepto, {'attr': {'class': 'form-control', 'placeholder' : 'Concepto'}}) }}
            <span class=\"text-danger\">{{ form_errors(form.concepto) }}</span>
        </div>

        <div class=\"form-group\">
            {{ form_label(form.tipoPago) }}
            {{ form_widget(form.tipoPago, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Tipo de pago'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.tipoPago) }}</span>
        </div>

        <div class=\"form-group\">
            {{ form_label(form.cuantia) }}
            {{ form_widget(form.cuantia, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Cantidad a pagar'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.cuantia) }}</span>
        </div>

        <p>
            {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
        </p>                

        {{ form_end(form) }}
    </div>
{% endblock %}", "moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Sesiones/pagoSesion.html.twig");
    }
}
