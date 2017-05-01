<?php

/* moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig */
class __TwigTemplate_8555cdaa866b36bf63cc47b212682a2ac8473894f42218fb9fe1eaf99feedcc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig", 1);
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
        echo " Nueva competicion ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nueva competición</h1>
            </div>

            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            <div class=\"hidden\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadocompeticion", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadocompeticion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'label');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocompeticion", array()), 'label');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocompeticion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocompeticion", array()), 'errors');
        echo "</span>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'label');
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafinalizacion", array()), 'label');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafinalizacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafinalizacion", array()), 'errors');
        echo "</span>
                    </div>
                </div><br>
                <div class=\"text-center\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                </div>
            </div>
            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  139 => 49,  132 => 45,  128 => 44,  124 => 43,  117 => 39,  113 => 38,  109 => 37,  100 => 31,  96 => 30,  92 => 29,  85 => 25,  81 => 24,  77 => 23,  71 => 20,  67 => 19,  63 => 18,  55 => 13,  51 => 12,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Nueva competicion {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nueva competición</h1>
            </div>

            {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}
            <div class=\"hidden\">
                {{ form_label(form.estadocompeticion) }}
                {{ form_widget(form.estadocompeticion, { 'attr' : {'class' : 'form-control'} }) }}
            </div>
            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        {{ form_label(form.nombre) }}
                        {{ form_widget(form.nombre, {'attr' : {'class' : 'form-control'}  } ) }}
                        <span class=\"text-danger\">{{ form_errors(form.nombre) }}</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        {{ form_label(form.deporte) }}
                        {{ form_widget(form.deporte, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.deporte) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        {{ form_label(form.tipocompeticion) }}
                        {{ form_widget(form.tipocompeticion, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.tipocompeticion) }}</span>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        {{ form_label(form.fechainicio) }}
                        {{ form_widget(form.fechainicio, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.fechainicio) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        {{ form_label(form.fechafinalizacion) }}
                        {{ form_widget(form.fechafinalizacion, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.fechafinalizacion) }}</span>
                    </div>
                </div><br>
                <div class=\"text-center\">
                    {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/nuevaCompeticionClientes.html.twig");
    }
}
