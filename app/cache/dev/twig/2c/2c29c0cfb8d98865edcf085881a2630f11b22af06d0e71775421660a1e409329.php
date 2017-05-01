<?php

/* moduloclientesclienteBundle:Competiciones:nuevoEquipoCliente.html.twig */
class __TwigTemplate_6d4a59a5e218f7afc574652bcc5aaa55596851012e91eceb30101a8baf8ef28b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:nuevoEquipoCliente.html.twig", 1);
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
        echo " Nuevo Equipo ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nuevo equipo</h1>
            </div>

            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            <div class=\"hidden\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCompeticion", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
                <span class=\"text-danger\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCompeticion", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center\"><br>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:nuevoEquipoCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  78 => 24,  72 => 21,  68 => 20,  64 => 19,  55 => 13,  51 => 12,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Nuevo Equipo {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nuevo equipo</h1>
            </div>

            {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}
            <div class=\"hidden\">
                {{ form_widget(form.idCompeticion, {'value' : id } ) }}
                <span class=\"text-danger\">{{ form_errors(form.idCompeticion) }}</span>
            </div>

            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        {{ form_label(form.nombre) }}
                        {{ form_widget(form.nombre, {'attr' : {'class' : 'form-control'}  } ) }}
                        <span class=\"text-danger\">{{ form_errors(form.nombre) }}</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center\"><br>
                        {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
                    </div>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Competiciones:nuevoEquipoCliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/nuevoEquipoCliente.html.twig");
    }
}
