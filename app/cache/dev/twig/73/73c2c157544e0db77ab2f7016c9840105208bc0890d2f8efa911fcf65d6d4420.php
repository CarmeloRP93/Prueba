<?php

/* moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig */
class __TwigTemplate_fad4aef81396edbca761bf5762b40a8ac822fcfa45e53aa33797843865ecd8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig", 1);
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
        echo " Nueva Reserva ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"t1\">Nueva reserva</h1>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

        ";
        // line 10
        if (((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")) != null)) {
            // line 11
            echo "            <h3 class=\"t3\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</h3>
        ";
        }
        // line 13
        echo "
        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
            <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"hidden\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'label');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'widget');
        echo "
            <span class=\"text-danger\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'errors');
        echo "</span>
        </div> 

        <p>
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Elegir hora", "attr" => array("class" => "btn btn-success")));
        echo "
        </p>                

        ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  100 => 32,  93 => 28,  89 => 27,  85 => 26,  78 => 22,  74 => 21,  70 => 20,  63 => 16,  59 => 15,  55 => 13,  49 => 11,  47 => 10,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Nueva Reserva {% endblock %}

{% block contenido %}
    <div class=\"container\">
        <h1 class=\"t1\">Nueva reserva</h1>
        {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}

        {% if mensaje != null  %}
            <h3 class=\"t3\">{{mensaje}}</h3>
        {% endif %}

        <div class=\"form-group\">
            {{ form_widget(form.idCancha, {'value' : id } ) }}
            <span class=\"text-danger\">{{ form_errors(form.idCancha) }}</span>
        </div>

        <div class=\"form-group\">
            {{ form_label(form.fechaInicio) }}
            {{ form_widget(form.fechaInicio, { 'attr' : {'class' : 'form-control'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.fechaInicio) }}</span>
        </div>

        <div class=\"hidden\">
            {{ form_label(form.horario) }}
            {{ form_widget(form.horario) }}
            <span class=\"text-danger\">{{ form_errors(form.horario) }}</span>
        </div> 

        <p>
            {{ form_widget(form.confirmar, {'label' : 'Elegir hora', 'attr': {'class': 'btn btn-success'}}) }}
        </p>                

        {{ form_end(form) }}
    </div>
{% endblock %} ", "moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Reservas/nuevaReserva.html.twig");
    }
}
