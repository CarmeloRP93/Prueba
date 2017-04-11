<?php

/* moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig */
class __TwigTemplate_d22be14fefa45eb0c07c4f60630e009137b40cb6fdd55b1a86fe0e6a65269bc9 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Nueva Competicion ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
         <h1 class=\"t1\">Nueva Competicion</h1>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

        <div class=\"form-group\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
        </div>
        
        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'errors');
        echo "</span>
        </div>
        
        <div class=\"form-group\">
            <label>Tipo Competicion:</label>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocompeticion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipocompeticion", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form-group\">
            <label>Fecha Inicio:</label><br>
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span class=\"text-danger\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechainicio", array()), 'errors');
        echo "</span>
        </div>
        <p>
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
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
        return "moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  100 => 33,  94 => 30,  90 => 29,  83 => 25,  79 => 24,  71 => 19,  67 => 18,  63 => 17,  56 => 13,  52 => 12,  48 => 11,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Nueva Competicion {% endblock %}

{% block contenido %}
    <div class=\"container\">
         <h1 class=\"t1\">Nueva Competicion</h1>
        {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}

        <div class=\"form-group\">
            {{ form_label(form.nombre) }}
            {{ form_widget(form.nombre, {'attr' : {'class' : 'form-control'}  } ) }}
            <span class=\"text-danger\">{{ form_errors(form.nombre) }}</span>
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.deporte) }}
            {{ form_widget(form.deporte, { 'attr' : {'class' : 'form-control'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.deporte) }}</span>
        </div>
        
        <div class=\"form-group\">
            <label>Tipo Competicion:</label>
            {{ form_widget(form.tipocompeticion, { 'attr' : {'class' : 'form-control'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.tipocompeticion) }}</span>
        </div>
        <div class=\"form-group\">
            <label>Fecha Inicio:</label><br>
            {{ form_widget(form.fechainicio, { 'attr' : {'class' : 'form-control'} }) }}
            <span class=\"text-danger\">{{ form_errors(form.fechainicio) }}</span>
        </div>
        <p>
            {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
        </p>                
        {{ form_end(form) }}
    </div>
{% endblock %}", "moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/nuevaCompeticionClientes.html.twig");
    }
}
