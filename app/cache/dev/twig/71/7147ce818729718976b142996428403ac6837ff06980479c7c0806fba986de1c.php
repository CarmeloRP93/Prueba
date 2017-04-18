<?php

/* moduloclientesclienteBundle:Sesiones:sesionClientes.html.twig */
class __TwigTemplate_af5b64d53b3387d341de536960943c49d5bcfdb04cf83ee6a2c424ac8721dd05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Sesiones:sesionClientes.html.twig", 1);
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
        echo "
    <h1 class=\"t1\">Sesion ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo "</h1>
    <h3 class=\"t1\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h3>    

    <div id=\"sesiondat\" class=\"container\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"width: 50%; margin-bottom: 1%\" />        
        </div>
        ";
        // line 13
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "disponible")) {
            // line 14
            echo "            <div class=\"accionesesion text-center\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_sesionesClientes_apuntarse", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" 
                   class=\"btn btn-primary text-center center-block\" style=\"height: 30px; width: 600px;\">Apuntarse <span class=\"glyphicon glyphicon-pencil\"></span></a>
            </div>

        ";
        } elseif (($this->getAttribute(        // line 19
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "completo")) {
            // line 20
            echo "            <div class=\"accionesesion text-center\">
                <button class=\"btn btn-danger text-center center-block\" style=\"height: 30px; width: 600px;\" disabled=\"disabled\">Completo</button>
            </div>

        ";
        } elseif (($this->getAttribute(        // line 24
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "cancelada")) {
            // line 25
            echo "            <div class=\"accionesesion text-center\">
                <button class=\"btn btn-danger text-center center-block\" style=\"height: 30px; width: 600px;\" disabled=\"disabled\">Cancelada</button>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                <h4>Ejercicios:</h4> <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                <h4>Repeticiones:</h4> <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                <h4>Objetivo:</h4> <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Sesiones:sesionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  110 => 38,  106 => 37,  100 => 34,  96 => 33,  92 => 32,  87 => 29,  81 => 25,  79 => 24,  73 => 20,  71 => 19,  64 => 15,  61 => 14,  59 => 13,  54 => 11,  47 => 7,  43 => 6,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
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
        {% if sesion.estadoCliente == \"disponible\" %}
            <div class=\"accionesesion text-center\">
                <a href=\"{{path('moduloclientes_cliente_sesionesClientes_apuntarse', {id: sesion.id})}}\" 
                   class=\"btn btn-primary text-center center-block\" style=\"height: 30px; width: 600px;\">Apuntarse <span class=\"glyphicon glyphicon-pencil\"></span></a>
            </div>

        {% elseif sesion.estadoCliente == \"completo\" %}
            <div class=\"accionesesion text-center\">
                <button class=\"btn btn-danger text-center center-block\" style=\"height: 30px; width: 600px;\" disabled=\"disabled\">Completo</button>
            </div>

        {% elseif sesion.estadoCliente == \"cancelada\" %}
            <div class=\"accionesesion text-center\">
                <button class=\"btn btn-danger text-center center-block\" style=\"height: 30px; width: 600px;\" disabled=\"disabled\">Cancelada</button>
            </div>
        {% endif %}

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

{% endblock %}", "moduloclientesclienteBundle:Sesiones:sesionClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Sesiones/sesionClientes.html.twig");
    }
}
