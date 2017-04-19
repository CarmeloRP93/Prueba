<?php

/* CriveroPruebaBundle:Sesiones:sesion.html.twig */
class __TwigTemplate_7b189a9a0deed65ec13241354851b683dbf0f215a1137c2c55fc9518a423614b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Sesiones:sesion.html.twig", 1);
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
        // line 2
        $context["nombre"] = $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array());
        // line 3
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) != null)) {
            // line 4
            $context["nombre"] = $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <h1 class=\"t1\">Sesion ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo "</h1>
    <h1 class=\"t1\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h1>

    <div id=\"sesiondat\" class=\"container\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"width: 50%; margin-bottom: 1%\" />        
        </div>
        ";
        // line 16
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 17
            echo "            <div class=\"text-center\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancelarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\">Cancelar</a>
            </div>
            <div class=\"row\">
                <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                    <h4>Aula:</h4> <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
            echo "</p>
                </div>
                <div id=\"colder\" class=\"col-md-4\">
                    <h4>Horario:</h4> 
                    <form action=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                        <button type=\"submit\" class=\"btn btn-sm btn-success\" style=\"margin-bottom: 5px\">Ver horarios</button>
                    </form>
                </div>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 31
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 32
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 400px;\" class=\"btn btn-danger\" disabled=\"disabled\">Cancelada</button>
                <h4>Motivos:</h4> <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 36
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 37
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 400px;\" class=\"btn btn-danger\" disabled=\"disabled\">Rechazada</button>
                <h4>Motivos:</h4> <p>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } else {
            // line 41
            echo "   
            <div class=\"accionesesion text-center\" style=\"margin-left: 18px; margin-right: 18px;\">
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_aceptarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success col-sm-3 col-sm-offset-3\" style=\"height: 30px; width: 250px;\">Aceptar Solicitud</a>
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_rechazarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger col-sm-3 col-sm-offset-1\">Rechazar Solicitud </a>
            </div>
        ";
        }
        // line 47
        echo "
        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                <h4>Ejercicios:</h4> <p>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                <h4>Repeticiones:</h4> <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                <h4>Nº de participantes:</h4> <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()), "html", null, true);
        echo "</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                <h4>Objetivo:</h4> <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                <h4>Límite de participantes:</h4> <p>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "lClientes", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 59,  164 => 58,  160 => 57,  156 => 56,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  133 => 47,  127 => 44,  123 => 43,  119 => 41,  113 => 39,  109 => 37,  107 => 36,  102 => 34,  98 => 32,  96 => 31,  88 => 26,  81 => 22,  74 => 18,  71 => 17,  69 => 16,  64 => 14,  57 => 10,  53 => 9,  48 => 8,  45 => 7,  37 => 6,  33 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
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
{%    set nombre = sesion.nombre %}
{% if sesion.cliente!=null %}
    {%    set nombre = sesion.cliente %}
{% endif %}
{% block title %}Vista de {{sesion.nombre}} {% endblock %}
{% block contenido %}
    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <h1 class=\"t1\">Sesion {{sesion.id}}</h1>
    <h1 class=\"t1\">{{sesion.nombre}}</h1>

    <div id=\"sesiondat\" class=\"container\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"{{ asset(sesion.imagen) }}\" class=\"img-responsive center-block\" style=\"width: 50%; margin-bottom: 1%\" />        
        </div>
        {% if sesion.estado == \"validada\"%}
            <div class=\"text-center\">
                <a href=\"{{path('crivero_prueba_cancelarSesion', {id: sesion.id})}}\" style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\">Cancelar</a>
            </div>
            <div class=\"row\">
                <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                    <h4>Aula:</h4> <p>{{aula.nombre}}</p>
                </div>
                <div id=\"colder\" class=\"col-md-4\">
                    <h4>Horario:</h4> 
                    <form action=\"{{ path('crivero_prueba_horarios_sesion', { id: sesion.id })}}\" method=\"post\" class=\"form-signin\">
                        <button type=\"submit\" class=\"btn btn-sm btn-success\" style=\"margin-bottom: 5px\">Ver horarios</button>
                    </form>
                </div>
            </div>
        {% elseif sesion.estado == \"cancelada\" %}
            <div class=\"text-center\">
                <button style=\"height: 30px; width: 400px;\" class=\"btn btn-danger\" disabled=\"disabled\">Cancelada</button>
                <h4>Motivos:</h4> <p>{{sesion.observaciones}}</p>
            </div>
        {% elseif sesion.estado == \"rechazada\" %}
            <div class=\"text-center\">
                <button style=\"height: 30px; width: 400px;\" class=\"btn btn-danger\" disabled=\"disabled\">Rechazada</button>
                <h4>Motivos:</h4> <p>{{sesion.observaciones}}</p>
            </div>
        {% else %}   
            <div class=\"accionesesion text-center\" style=\"margin-left: 18px; margin-right: 18px;\">
                <a href=\"{{path('crivero_prueba_aceptarSesion', {id: sesion.id})}}\" class=\"btn btn-success col-sm-3 col-sm-offset-3\" style=\"height: 30px; width: 250px;\">Aceptar Solicitud</a>
                <a href=\"{{path('crivero_prueba_rechazarSesion', {id: sesion.id})}}\" class=\"btn btn-danger col-sm-3 col-sm-offset-1\">Rechazar Solicitud </a>
            </div>
        {% endif %}

        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>{{sesion.monitor}}</p>
                <h4>Ejercicios:</h4> <p>{{sesion.ejercicios}}</p>
                <h4>Repeticiones:</h4> <p>{{sesion.repeticiones}} por ejercicio</p>
                <h4>Nº de participantes:</h4> <p>{{sesion.nClientes}}</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>{{sesion.duracion}} minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>{{sesion.descanso}} minutos</p>
                <h4>Objetivo:</h4> <p>{{sesion.objetivo}}</p>
                <h4>Límite de participantes:</h4> <p>{{sesion.lClientes}}</p>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "CriveroPruebaBundle:Sesiones:sesion.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Sesiones/sesion.html.twig");
    }
}
