<?php

/* CriveroPruebaBundle:Competiciones:nuevoPartido.html.twig */
class __TwigTemplate_42b25f165647d2b3dea145902c16ee73bab4fff53d6afe5d395d56dbd82e6ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:nuevoPartido.html.twig", 1);
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
        echo " Nuevo Partido ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nuevo partido</h1>
                ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            </div>

            <div class=\"hidden\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCompeticion", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCompeticion", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
                <span class=\"text-danger\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCompeticion", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEquipoLocal", array()), 'label');
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEquipoLocal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEquipoLocal", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEquipoVisitante", array()), 'label');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEquipoVisitante", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEquipoVisitante", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'label');
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'label');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'errors');
        echo "</span>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"hidden\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultado", array()), 'label');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultado", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "arbitro", array()), 'label');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "arbitro", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "arbitro", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoPartido", array()), 'label');
        echo "
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoPartido", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoPartido", array()), 'errors');
        echo "</span>
                    </div>
                </div><br>

                <div class=\"text-center\">
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:nuevoPartido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  174 => 63,  166 => 58,  162 => 57,  158 => 56,  152 => 53,  148 => 52,  144 => 51,  138 => 48,  134 => 47,  130 => 46,  121 => 40,  117 => 39,  113 => 38,  106 => 34,  102 => 33,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  59 => 14,  55 => 13,  51 => 12,  44 => 8,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Nuevo Partido {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Nuevo partido</h1>
                {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}
            </div>

            <div class=\"hidden\">
                {{ form_label(form.idCompeticion) }}
                {{ form_widget(form.idCompeticion, {'value' : id } ) }}
                <span class=\"text-danger\">{{ form_errors(form.idCompeticion) }}</span>
            </div>

            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        {{ form_label(form.idEquipoLocal) }}
                        {{ form_widget(form.idEquipoLocal, {'attr' : {'class' : 'form-control'}  } ) }}
                        <span class=\"text-danger\">{{ form_errors(form.idEquipoLocal) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        {{ form_label(form.idEquipoVisitante) }}
                        {{ form_widget(form.idEquipoVisitante, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.idEquipoVisitante) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        {{ form_label(form.idCancha) }}
                        {{ form_widget(form.idCancha, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.idCancha) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3\">
                        {{ form_label(form.fechaInicio) }}
                        {{ form_widget(form.fechaInicio, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.fechaInicio) }}</span>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"hidden\">
                        {{ form_label(form.resultado) }}
                        {{ form_widget(form.resultado, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.resultado) }}</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        {{ form_label(form.arbitro) }}
                        {{ form_widget(form.arbitro, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.arbitro) }}</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        {{ form_label(form.estadoPartido) }}
                        {{ form_widget(form.estadoPartido, { 'attr' : {'class' : 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.estadoPartido) }}</span>
                    </div>
                </div><br>

                <div class=\"text-center\">
                    {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
                </div>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:nuevoPartido.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/nuevoPartido.html.twig");
    }
}
