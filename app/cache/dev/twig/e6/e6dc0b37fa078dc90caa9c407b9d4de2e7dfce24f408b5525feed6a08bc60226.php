<?php

/* moduloclientesclienteBundle:Mensajes:notificacionesCliente.html.twig */
class __TwigTemplate_1d31f2354ba6c942f91b624422deabe8d0a2f281a8e73a550391d710b52bc38a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Mensajes:notificacionesCliente.html.twig", 1);
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
        echo " Notificaciones ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Notificaciones</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "                    <h2>No hay notificaciones</h2>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-condensed\">
                            <thead>
                                <tr>
                                    <th>Mensaje</th>
                                    <th>Enviado</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                // line 24
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "id", array()), "html", null, true);
                echo "\">
                                        <td><strong>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                echo "</strong></td>
                                        <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notificacion"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            ";
                // line 28
                if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                    // line 29
                    echo "                                                ";
                    if (twig_in_filter($this->getAttribute($context["notificacion"], "idEntidad", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sesiones", array()))) {
                        // line 30
                        echo "                                                    <form action=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_miSesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                        echo "\">
                                                    ";
                    } else {
                        // line 32
                        echo "                                                        <form action=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                        echo "\">
                                                        ";
                    }
                    // line 34
                    echo "                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 38
$context["notificacion"], "concepto", array()) == "Privada")) {
                    // line 39
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 44
$context["notificacion"], "concepto", array()) == "Reserva")) {
                    // line 45
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_reservaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 50
$context["notificacion"], "concepto", array()) == "Usuario")) {
                    // line 51
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_miPerfil", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 56
$context["notificacion"], "concepto", array()) == "Cancha")) {
                    // line 57
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 62
$context["notificacion"], "concepto", array()) == "Mensaje")) {
                    // line 63
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_mensajeCliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 68
$context["notificacion"], "concepto", array()) == "Celiminada")) {
                    // line 69
                    echo "                                                    <form action=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_canchasClientes");
                    echo " \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 75
$context["notificacion"], "concepto", array()) == "AbandonoPublica")) {
                    // line 76
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo " \" method=\"GET\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 81
$context["notificacion"], "concepto", array()) == "Tarifas")) {
                    // line 82
                    echo "                                                    <form action=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_sesionesClientes");
                    echo " \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 88
$context["notificacion"], "concepto", array()) == "Publicacion")) {
                    // line 89
                    echo "                                                    <form action=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_homeCliente");
                    echo " \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 95
$context["notificacion"], "concepto", array()) == "Competicion")) {
                    // line 96
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo " \" method=\"GET\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                }
                // line 102
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 109
        echo "                <div class=\"navigation text-center\"  >
                    ";
        // line 110
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Mensajes:notificacionesCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 110,  242 => 109,  236 => 105,  228 => 102,  218 => 96,  216 => 95,  208 => 90,  203 => 89,  201 => 88,  193 => 83,  188 => 82,  186 => 81,  177 => 76,  175 => 75,  167 => 70,  162 => 69,  160 => 68,  151 => 63,  149 => 62,  140 => 57,  138 => 56,  129 => 51,  127 => 50,  118 => 45,  116 => 44,  107 => 39,  105 => 38,  99 => 34,  93 => 32,  87 => 30,  84 => 29,  82 => 28,  77 => 26,  73 => 25,  68 => 24,  64 => 23,  52 => 13,  48 => 11,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Notificaciones {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Notificaciones</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not pagination|length %}
                    <h2>No hay notificaciones</h2>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-condensed\">
                            <thead>
                                <tr>
                                    <th>Mensaje</th>
                                    <th>Enviado</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for notificacion in pagination %}
                                    <tr data-id=\"{{ notificacion.id }}\">
                                        <td><strong>{{ notificacion.mensaje }}</strong></td>
                                        <td>{{ notificacion.fecha|date('d/m/Y H:i') }}</td>
                                        <td class=\"actions\">
                                            {% if notificacion.concepto == \"Publica\"%}
                                                {% if notificacion.idEntidad in app.user.sesiones %}
                                                    <form action=\"{{ path('moduloclientes_cliente_miSesionClientes', {id: notificacion.idEntidad}) }}\">
                                                    {% else %}
                                                        <form action=\"{{ path('moduloclientes_cliente_sesionClientes', {id: notificacion.idEntidad}) }}\">
                                                        {% endif %}
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Privada\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_sesionClientes', {id: notificacion.idEntidad}) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Reserva\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_reservaClientes', {id: notificacion.idEntidad}) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Usuario\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_miPerfil', {id: notificacion.idEntidad}) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Cancha\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_canchaClientes', {id: notificacion.idEntidad}) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Mensaje\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_mensajeCliente', {id: notificacion.idEntidad}) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Celiminada\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_canchasClientes') }} \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"{{ notificacion.idEntidad }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"AbandonoPublica\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_sesionClientes', {id: notificacion.idEntidad}) }} \" method=\"GET\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Tarifas\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_sesionesClientes') }} \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"{{ notificacion.idEntidad }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Publicacion\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_homeCliente') }} \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"{{ notificacion.idEntidad }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% elseif notificacion.concepto == \"Competicion\"%}
                                                    <form action=\"{{ path('moduloclientes_cliente_competicionClientes', {id: notificacion.idEntidad}) }} \" method=\"GET\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
                <div class=\"navigation text-center\"  >
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "moduloclientesclienteBundle:Mensajes:notificacionesCliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Mensajes/notificacionesCliente.html.twig");
    }
}
