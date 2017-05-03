<?php

/* CriveroPruebaBundle:Competiciones:nuevaCompeticion.html.twig */
class __TwigTemplate_5ae79a85cdc3e74bf95f35c2853bd1e021ac336f3a8535ca5ce95ecf433c9287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:nuevaCompeticion.html.twig", 1);
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
        echo " Nueva Competicion ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nueva Competición</h1>
            </div>

            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'label');
        echo "
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocompeticion", array()), 'label');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocompeticion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocompeticion", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadocompeticion", array()), 'label');
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadocompeticion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadocompeticion", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
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

                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
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
        return "CriveroPruebaBundle:Competiciones:nuevaCompeticion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 52,  142 => 49,  135 => 45,  131 => 44,  127 => 43,  120 => 39,  116 => 38,  112 => 37,  105 => 33,  101 => 32,  97 => 31,  90 => 27,  86 => 26,  82 => 25,  75 => 21,  71 => 20,  67 => 19,  61 => 16,  57 => 15,  53 => 14,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CriveroPruebaBundle::main.html.twig'  %}
{% block title %} Nueva Competicion {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nueva Competición</h1>
            </div>

            {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}
            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        {{ form_label(form.nombre) }}
                        {{ form_widget(form.nombre, {'attr' : {'class' : 'form-control'}  } ) }}
                        <span class=\"text-danger\">{{ form_errors(form.nombre) }}</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        {{ form_label(form.deporte) }}
                        {{ form_widget(form.deporte, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.deporte) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        {{ form_label(form.tipocompeticion) }}
                        {{ form_widget(form.tipocompeticion, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.tipocompeticion) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        {{ form_label(form.estadocompeticion) }}
                        {{ form_widget(form.estadocompeticion, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.estadocompeticion) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
                        {{ form_label(form.fechainicio) }}
                        {{ form_widget(form.fechainicio, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.fechainicio) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-2\">
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
{% endblock %}", "CriveroPruebaBundle:Competiciones:nuevaCompeticion.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/nuevaCompeticion.html.twig");
    }
}
