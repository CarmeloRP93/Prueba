<?php

/* moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig */
class __TwigTemplate_abd143849b23b167547165c1de6a82ae6eec5bb6df0ef8b908044180c8197f77 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Pago Sesion ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Pago suscripción</h1>
            </div>

            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            <div class=\"hidden\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCliente", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCliente", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"text-danger\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCliente", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"hidden\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaPago", array()), 'label');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaPago", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"text-danger\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaPago", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"hidden\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantia", array()), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantia", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cantidad a pagar")));
        echo "
                <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantia", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoSuscripcion", array()), 'label');
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoSuscripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoSuscripcion", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPago", array()), 'label');
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tipo de pago")));
        echo "
                        <span class=\"text-danger\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPago", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\"><br>
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
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
        return array (  134 => 47,  127 => 43,  120 => 39,  116 => 38,  112 => 37,  105 => 33,  101 => 32,  97 => 31,  88 => 25,  84 => 24,  80 => 23,  74 => 20,  70 => 19,  66 => 18,  59 => 14,  55 => 13,  51 => 12,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Pago suscripción</h1>
            </div>

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
            <div class=\"hidden\">
                {{ form_label(form.cuantia) }}
                {{ form_widget(form.cuantia, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Cantidad a pagar'} }) }}
                <span class=\"text-danger\">{{ form_errors(form.cuantia) }}</span>
            </div>

            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        {{ form_label(form.tipoSuscripcion) }}
                        {{ form_widget(form.tipoSuscripcion, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.tipoSuscripcion) }}</span>
                    </div>
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                        {{ form_label(form.tipoPago) }}
                        {{ form_widget(form.tipoPago, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Tipo de pago'} }) }}
                        <span class=\"text-danger\">{{ form_errors(form.tipoPago) }}</span>
                    </div>

                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\"><br>
                        {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
                    </div>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}", "moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Sesiones/pagoSesion.html.twig");
    }
}
