<?php

/* CriveroPruebaBundle:Canchas:nuevaCancha.html.twig */
class __TwigTemplate_827b8468ee3408b822888fec8051ed4a086f68031e571dc50b69368bf450aa81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Canchas:nuevaCancha.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Nueva Cancha ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\">

        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h3 class=\"t3\">Nueva Cancha</h3>
                </div>
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <div class=\"panel-body\">
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    <label>Nombre</label>
                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de cancha")));
        echo "
                                    <span class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'label');
        echo "
                                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'label');
        echo "
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    <span class=\"text-danger\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'errors');
        echo "</span>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'label');
        echo "
                                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "00:00-23:59")));
        echo "
                                    <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "
                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección cancha")));
        echo "
                                    <span class=\"text-danger\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'label');
        echo "
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Inserta una cifra")));
        echo "
                                    <span class=\"text-danger\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
        echo "
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget');
        echo "
                            <span class=\"text-danger\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
        echo "</span>
                        </div>

                    </form>
                    <div class=\"text-center\">
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                    </div>
                    ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>               
        </div>
    </div>           

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Canchas:nuevaCancha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  174 => 77,  166 => 72,  162 => 71,  158 => 70,  149 => 64,  145 => 63,  141 => 62,  133 => 57,  129 => 56,  125 => 55,  114 => 47,  110 => 46,  106 => 45,  97 => 39,  93 => 38,  89 => 37,  78 => 29,  74 => 28,  70 => 27,  62 => 22,  58 => 21,  48 => 14,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Nueva Cancha {% endblock %}

{% block contenido %}

    <div class=\"container\">

        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h3 class=\"t3\">Nueva Cancha</h3>
                </div>
                {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}
                <div class=\"panel-body\">
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    <label>Nombre</label>
                                    {{ form_widget(form.tipo, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Nombre de cancha'} }) }}
                                    <span class=\"text-danger\">{{ form_errors(form.tipo) }}</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.deporte) }}
                                    {{ form_widget(form.deporte, {'attr': {'class': 'form-control'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.deporte) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.disponibilidad) }}
                                    {{ form_widget(form.disponibilidad, {'attr': {'class': 'form-control'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.disponibilidad) }}</span>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.horario) }}
                                    {{ form_widget(form.horario, {'attr': {'class': 'form-control', 'placeholder' : '00:00-23:59'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.horario) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.direccion) }}
                                    {{ form_widget(form.direccion, {'attr': {'class': 'form-control', 'placeholder' : 'dirección cancha'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.direccion) }}</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.dimensiones) }}
                                    {{ form_widget(form.dimensiones, {'attr': {'class': 'form-control', 'placeholder' : 'Inserta una cifra'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.dimensiones) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.imagen) }}
                            {{ form_widget(form.imagen) }}
                            <span class=\"text-danger\">{{ form_errors(form.imagen) }}</span>
                        </div>

                    </form>
                    <div class=\"text-center\">
                        {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>               
        </div>
    </div>           

{% endblock %}", "CriveroPruebaBundle:Canchas:nuevaCancha.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Canchas/nuevaCancha.html.twig");
    }
}
