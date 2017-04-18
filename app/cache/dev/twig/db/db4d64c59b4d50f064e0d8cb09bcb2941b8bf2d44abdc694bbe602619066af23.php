<?php

/* moduloclientesclienteBundle:Sesiones:miSesionClientes.html.twig */
class __TwigTemplate_25eb788263cec424f469c484204ff0bc3649b9cbab3e5eac39a4265ce5ebf1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Sesiones:miSesionClientes.html.twig", 1);
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <h1 class=\"t1\">Sesion ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo "</h1>
    <h3 class=\"t1\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h3>    

    <div id=\"sesiondat\" class=\"container\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"width: 50%; margin-bottom: 1%\" />        
        </div>

        <div class=\"accionesesion\">
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_sesionesClientes_abandonar", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
        echo "\" 
            class=\"btn btn-danger text-center center-block\" style=\"height: 30px; width: 600px;\">Abandonar</a>
        </div>

        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                <h4>Ejercicios:</h4> <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                <h4>Repeticiones:</h4> <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                <h4>Objetivo:</h4> <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Sesiones:miSesionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  86 => 26,  82 => 25,  76 => 22,  72 => 21,  68 => 20,  59 => 14,  52 => 10,  45 => 6,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
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

{% block title %}Vista de {{sesion.nombre}} {% endblock %}
{% block contenido %}
    <h1 class=\"t1\">Sesion {{sesion.id}}</h1>
    <h3 class=\"t1\">{{sesion.nombre}}</h3>    

    <div id=\"sesiondat\" class=\"container\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"{{ asset(sesion.imagen) }}\" class=\"img-responsive center-block\" style=\"width: 50%; margin-bottom: 1%\" />        
        </div>

        <div class=\"accionesesion\">
            <a href=\"{{path('moduloclientes_cliente_sesionesClientes_abandonar', {id: sesion.id})}}\" 
            class=\"btn btn-danger text-center center-block\" style=\"height: 30px; width: 600px;\">Abandonar</a>
        </div>

        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>{{sesion.monitor}}</p>
                <h4>Ejercicios:</h4> <p>{{sesion.ejercicios}}</p>
                <h4>Repeticiones:</h4> <p>{{sesion.repeticiones}} por ejercicio</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>{{sesion.duracion}} minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>{{sesion.descanso}} minutos</p>
                <h4>Objetivo:</h4> <p>{{sesion.objetivo}}</p>
            </div>
        </div>
    </div>

{% endblock %}", "moduloclientesclienteBundle:Sesiones:miSesionClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Sesiones/miSesionClientes.html.twig");
    }
}
