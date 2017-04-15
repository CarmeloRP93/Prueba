<?php

/* CriveroPruebaBundle:Usuarios:nuevoMensaje.html.twig */
class __TwigTemplate_deeadd19f741d6f8b99bcffe0845390e82b1634e1321281353e1e42fbd1567a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:nuevoMensaje.html.twig", 1);
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
        echo "Nuevo Mensaje ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"t1\">Nuevo Mensaje</h1>   
    </div>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

     
    <div class=\"hidden\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'widget', array("value" => "mensaje"));
        echo "
        <span class=\"text-danger\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'errors');
        echo "</span>
    </div>
    
    <div class=\"hidden\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idRemitente", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
        echo "
        <span class=\"text-danger\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idRemitente", array()), 'errors');
        echo "</span>
    </div>
    
    <div class=\"form-group\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'label');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ej: pedro@gmail.com")));
        echo "
        <span class=\"text-danger\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba el asunto")));
        echo "
        <span class=\"text-danger\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'errors');
        echo "</span>
    </div>
    
    <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba la descripción")));
        echo "
        <span class=\"text-danger\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"form-group\"><p>
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar", array()), 'widget', array("label" => "Enviar", "attr" => array("class" => "btn btn-success")));
        echo "
        </p></div>     

    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:nuevoMensaje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 45,  118 => 42,  111 => 38,  107 => 37,  103 => 36,  96 => 32,  92 => 31,  88 => 30,  81 => 26,  77 => 25,  73 => 24,  66 => 20,  62 => 19,  55 => 15,  51 => 14,  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Nuevo Mensaje {% endblock %}

{% block contenido %}
    <div class=\"container\">
        <h1 class=\"t1\">Nuevo Mensaje</h1>   
    </div>

    {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}

     
    <div class=\"hidden\">
        {{ form_widget(form.tipoComentario, { 'value' : \"mensaje\" } ) }}
        <span class=\"text-danger\">{{ form_errors(form.tipoComentario) }}</span>
    </div>
    
    <div class=\"hidden\">
        {{ form_widget(form.idRemitente, { 'value' : app.user.id } ) }}
        <span class=\"text-danger\">{{ form_errors(form.idRemitente) }}</span>
    </div>
    
    <div class=\"form-group\">
        {{ form_label(form.destinatario) }}
        {{ form_widget(form.destinatario, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Ej: pedro@gmail.com'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.destinatario) }}</span>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.asunto) }}
        {{ form_widget(form.asunto, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Escriba el asunto'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.asunto) }}</span>
    </div>
    
    <div class=\"form-group\">
        {{ form_label(form.descripcion) }}
        {{ form_widget(form.descripcion, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Escriba la descripción'} }) }}
        <span class=\"text-danger\">{{ form_errors(form.descripcion) }}</span>
    </div>

    <div class=\"form-group\"><p>
            {{ form_widget(form.enviar, {'label' : 'Enviar', 'attr': {'class': 'btn btn-success'}}) }}
        </p></div>     

    {{ form_end(form) }}

{% endblock %}", "CriveroPruebaBundle:Usuarios:nuevoMensaje.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/nuevoMensaje.html.twig");
    }
}
