<?php

/* moduloclientesclienteBundle:Competiciones:nuevoJugadorCliente.html.twig */
class __TwigTemplate_17f3dae74b9139408ff4655364616c851308fa4609b47f0a53b9b768a277c605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:nuevoJugadorCliente.html.twig", 1);
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
        echo " Nuevo Miembro del equipo ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nuevo jugador</h1>
            </div>

            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            <div class=\"hidden\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEquipo", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
                <span class=\"text-danger\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEquipo", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"hidden\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incidencia", array()), 'label');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incidencia", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incidencia", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introducir si tiene cuenta de usuario")));
        echo "
                        <span class=\"text-danger\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introducir si no tiene usuario")));
        echo "
                        <span class=\"text-danger\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dorsal", array()), 'label');
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dorsal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dorsal", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\"><br>
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>              
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:nuevoJugadorCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  123 => 42,  117 => 39,  113 => 38,  109 => 37,  102 => 33,  98 => 32,  94 => 31,  87 => 27,  83 => 26,  79 => 25,  70 => 19,  66 => 18,  62 => 17,  55 => 13,  51 => 12,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Nuevo Miembro del equipo {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nuevo jugador</h1>
            </div>

            {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}
            <div class=\"hidden\">
                {{ form_widget(form.idEquipo, {'value' : id } ) }}
                <span class=\"text-danger\">{{ form_errors(form.idEquipo) }}</span>
            </div>

            <div class=\"hidden\">
                {{ form_label(form.incidencia) }}
                {{ form_widget(form.incidencia, {'attr' : {'class' : 'form-control'}  } ) }}
                <span class=\"text-danger\">{{ form_errors(form.incidencia) }}</span>
            </div>

            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        {{ form_label(form.username) }}
                        {{ form_widget(form.username, {'attr' : {'class' : 'form-control', 'placeholder' : 'Introducir si tiene cuenta de usuario'}  } ) }}
                        <span class=\"text-danger\">{{ form_errors(form.username) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        {{ form_label(form.nombre) }}
                        {{ form_widget(form.nombre, {'attr' : {'class' : 'form-control', 'placeholder' : 'Introducir si no tiene usuario'}  } ) }}
                        <span class=\"text-danger\">{{ form_errors(form.nombre) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        {{ form_label(form.dorsal) }}
                        {{ form_widget(form.dorsal, {'attr' : {'class' : 'form-control'}  } ) }}
                        <span class=\"text-danger\">{{ form_errors(form.dorsal) }}</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\"><br>
                        {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
                    </div>
                </div>
            </div>
            {{ form_end(form) }}
        </div>              
    </div>
{% endblock %}{# empty Twig template #}
", "moduloclientesclienteBundle:Competiciones:nuevoJugadorCliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/nuevoJugadorCliente.html.twig");
    }
}
