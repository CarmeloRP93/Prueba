<?php

/* CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig */
class __TwigTemplate_de3f66e98e59d9770e5d18d2a1670192dd20f64fd73fb8ebbd3c117ce4fbf6aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig", 1);
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
        echo "Vista de cancelar sesion";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Cancelar sesion</h2>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Si no es dedicada dejelo vacio")));
        echo "
        <span class=\"text-danger\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca nombre de la sesion")));
        echo "
        <span class=\"text-danger\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "imagen")));
        echo "
        <span class=\"text-danger\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca ejercicios de la sesion")));
        echo "
        <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca las repeticiones")));
        echo "
        <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'label');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca la duracion de la sesionjoin")));
        echo "
        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'label');
        echo "
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el descanso entre ejercicios")));
        echo "
        <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        <p>Limite de clientes</p>
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lClientes", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el limite de participantes")));
        echo "
        <span class=\"text-danger\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lClientes", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'label');
        echo "
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el objetivo de la sesion")));
        echo "
        <span class=\"text-danger\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\">
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label');
        echo "
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
        <span class=\"text-danger\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'errors');
        echo "</span>
    </div>
    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'label');
        echo "
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
        <span class=\"text-danger\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'errors');
        echo "</span>
    </div>
    <div class=\"form-group\" style=\"display:none;\">
        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'label');
        echo "
        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
        <span class=\"text-danger\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'errors');
        echo "</span>
    </div>
    <p>
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
    </p>                

    ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 81,  222 => 78,  216 => 75,  212 => 74,  208 => 73,  202 => 70,  198 => 69,  194 => 68,  188 => 65,  184 => 64,  180 => 63,  173 => 59,  169 => 58,  165 => 57,  158 => 53,  154 => 52,  146 => 47,  142 => 46,  138 => 45,  131 => 41,  127 => 40,  123 => 39,  116 => 35,  112 => 34,  108 => 33,  101 => 29,  97 => 28,  93 => 27,  86 => 23,  82 => 22,  78 => 21,  71 => 17,  67 => 16,  63 => 15,  56 => 11,  52 => 10,  48 => 9,  42 => 6,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Vista de cancelar sesion{% endblock %}
{% block contenido %}
    <h2>Cancelar sesion</h2>

    {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}

    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.cliente) }}
        {{ form_widget(form.cliente, {'attr': {'class': 'form-control', 'placeholder' : 'Si no es dedicada dejelo vacio'}}) }}
        <span class=\"text-danger\">{{ form_errors(form.cliente) }}</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.nombre) }}
        {{ form_widget(form.nombre, {'attr': {'class': 'form-control', 'placeholder' : 'Introduzca nombre de la sesion'}}) }}
        <span class=\"text-danger\">{{ form_errors(form.nombre) }}</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.imagen) }}
        {{ form_widget(form.imagen, { 'attr' : {'class' : 'form-control', 'placeholder' : 'imagen'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.imagen) }}</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.ejercicios) }}
        {{ form_widget(form.ejercicios, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Introduzca ejercicios de la sesion'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.ejercicios) }}</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.repeticiones) }}
        {{ form_widget(form.repeticiones, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Introduzca las repeticiones'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.repeticiones) }}</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.duracion) }}
        {{ form_widget(form.duracion, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Introduzca la duracion de la sesionjoin'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.duracion) }}</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.descanso) }}
        {{ form_widget(form.descanso, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Introduzca el descanso entre ejercicios'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.descanso) }}</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        <p>Limite de clientes</p>
        {{ form_widget(form.lClientes, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Introduzca el limite de participantes'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.lClientes) }}</span>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.objetivo) }}
        {{ form_widget(form.objetivo, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Introduzca el objetivo de la sesion'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.objetivo) }}</span>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.observaciones) }}
        {{ form_widget(form.observaciones, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Motivos de cancelación'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.observaciones) }}</span>
    </div>
    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.motivos) }}
        {{ form_widget(form.motivos, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Motivos de cancelación'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.motivos) }}</span>
    </div>
    <div class=\"form-group\" style=\"display:none;\">
        {{ form_label(form.aula) }}
        {{ form_widget(form.aula, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Motivos de cancelación'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.aula) }}</span>
    </div>
    <p>
        {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
    </p>                

    {{ form_end(form) }}
{% endblock %}", "CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Sesiones/cancelarSesion.html.twig");
    }
}
