<?php

/* CriveroPruebaBundle:Reservas:cancelarReserva.html.twig */
class __TwigTemplate_24b5ad29c52f591bf865bdb0cf81e5bd202a21db2ab0369a63e4ff13f99330c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Reservas:cancelarReserva.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CriveroPruebaBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Cancelar reserva";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <h2>Cancelar reserva</h2>

        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

        <div class=\"hidden\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"hidden\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaFinalizacion", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaFinalizacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaFinalizacion", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
            <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'errors');
        echo "</span>
        </div>
        <p>
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
        </p>                

        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Reservas:cancelarReserva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  93 => 27,  87 => 24,  83 => 23,  79 => 22,  72 => 18,  68 => 17,  64 => 16,  57 => 12,  53 => 11,  49 => 10,  43 => 7,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CriveroPruebaBundle::main.html.twig' %}
{% block title %}Cancelar reserva{% endblock %}
{% block contenido %}
    <div class=\"container\">
        <h2>Cancelar reserva</h2>

        {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}

        <div class=\"hidden\">
            {{ form_label(form.fechaInicio) }}
            {{ form_widget(form.fechaInicio, { 'attr' : {'class' : 'form-control'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.fechaInicio) }}</span>
        </div>

        <div class=\"hidden\">
            {{ form_label(form.fechaFinalizacion) }}
            {{ form_widget(form.fechaFinalizacion, {'attr': {'class': 'form-control'}}) }}
            <span class=\"text-danger\">{{ form_errors(form.fechaFinalizacion) }}</span>
        </div>

        <div class=\"form-group\">
            {{ form_label(form.motivos) }}
            {{ form_widget(form.motivos, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Motivos de cancelación'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.motivos) }}</span>
        </div>
        <p>
            {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
        </p>                

        {{ form_end(form) }}
    </div>
{% endblock %}", "CriveroPruebaBundle:Reservas:cancelarReserva.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Reservas/cancelarReserva.html.twig");
    }
}
