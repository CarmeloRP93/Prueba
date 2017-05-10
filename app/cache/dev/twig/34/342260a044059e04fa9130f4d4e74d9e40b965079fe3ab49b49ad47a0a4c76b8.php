<?php

/* CriveroPruebaBundle:Mensajes:notificacionesAdmin.html.twig */
class __TwigTemplate_0cd4ff6dde22ec3d6652d9a3e23fe5855e103370c5de6cd034af818d18fdd78e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Mensajes:notificacionesAdmin.html.twig", 1);
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
                                    <th>";
            // line 17
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mensaje", "pagination.mensaje");
            echo "</th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "pagination.estado");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "pagination.fecha");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                // line 26
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "id", array()), "html", null, true);
                echo "\">
                                        <td><strong>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                echo "</strong></td>
                                        <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "estado", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notificacion"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            ";
                // line 31
                if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                    // line 32
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 37
$context["notificacion"], "concepto", array()) == "Privada")) {
                    // line 38
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 43
$context["notificacion"], "concepto", array()) == "Mensaje")) {
                    // line 44
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_mensaje", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 49
$context["notificacion"], "concepto", array()) == "Reserva")) {
                    // line 50
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_reservas_cliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 55
$context["notificacion"], "concepto", array()) == "Partido")) {
                    // line 56
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarPartido", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Editar partido
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 61
$context["notificacion"], "concepto", array()) == "Usuario")) {
                    // line 62
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 67
$context["notificacion"], "concepto", array()) == "PublicaEliminada")) {
                    // line 68
                    echo "                                                <form action=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesiones");
                    echo " \" method=\"GET\">
                                                    <input type=\"hidden\" name=\"id\" value=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 74
$context["notificacion"], "concepto", array()) == "PrivadaEliminada")) {
                    // line 75
                    echo "                                                <form action=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_dedicadas");
                    echo " \" method=\"GET\">
                                                    <input type=\"hidden\" name=\"id\" value=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 81
$context["notificacion"], "concepto", array()) == "Competicion")) {
                    // line 82
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                }
                // line 88
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 95
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 96
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
        return "CriveroPruebaBundle:Mensajes:notificacionesAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 96,  219 => 95,  213 => 91,  205 => 88,  195 => 82,  193 => 81,  185 => 76,  180 => 75,  178 => 74,  170 => 69,  165 => 68,  163 => 67,  154 => 62,  152 => 61,  143 => 56,  141 => 55,  132 => 50,  130 => 49,  121 => 44,  119 => 43,  110 => 38,  108 => 37,  99 => 32,  97 => 31,  92 => 29,  88 => 28,  84 => 27,  79 => 26,  75 => 25,  66 => 19,  62 => 18,  58 => 17,  52 => 13,  48 => 11,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
                                    <th>{{ knp_pagination_sortable(pagination, 'Mensaje', 'pagination.mensaje') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Estado', 'pagination.estado') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Enviado', 'pagination.fecha') }}</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                {% for notificacion in pagination %}
                                    <tr data-id=\"{{ notificacion.id }}\">
                                        <td><strong>{{ notificacion.mensaje }}</strong></td>
                                        <td>{{ notificacion.estado}}</td>
                                        <td>{{ notificacion.fecha|date('d/m/Y H:i') }}</td>
                                        <td class=\"actions\">
                                            {% if notificacion.concepto == \"Publica\"%}
                                                <form action=\"{{ path('crivero_prueba_sesion', {id: notificacion.idEntidad}) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            {% elseif notificacion.concepto == \"Privada\"%}
                                                <form action=\"{{ path('crivero_prueba_sesion', {id: notificacion.idEntidad}) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            {% elseif notificacion.concepto == \"Mensaje\"%}
                                                <form action=\"{{ path('crivero_prueba_mensaje', {id: notificacion.idEntidad}) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            {% elseif notificacion.concepto == \"Reserva\"%}
                                                <form action=\"{{ path('crivero_prueba_reservas_cliente', {id: notificacion.idEntidad}) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            {% elseif notificacion.concepto == \"Partido\"%}
                                                <form action=\"{{ path('crivero_prueba_editarPartido', {id: notificacion.idEntidad}) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Editar partido
                                                    </button>
                                                </form>
                                            {% elseif notificacion.concepto == \"Usuario\"%}
                                                <form action=\"{{ path('crivero_prueba_cliente', {id: notificacion.idEntidad}) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            {% elseif notificacion.concepto == \"PublicaEliminada\"%}
                                                <form action=\"{{ path('crivero_prueba_sesiones') }} \" method=\"GET\">
                                                    <input type=\"hidden\" name=\"id\" value=\"{{ notificacion.idEntidad }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            {% elseif notificacion.concepto == \"PrivadaEliminada\"%}
                                                <form action=\"{{ path('crivero_prueba_dedicadas') }} \" method=\"GET\">
                                                    <input type=\"hidden\" name=\"id\" value=\"{{ notificacion.idEntidad }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            {% elseif notificacion.concepto == \"Competicion\"%}
                                                <form action=\"{{ path('crivero_prueba_competicion', {id: notificacion.idEntidad}) }}\">
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
                <div class=\"navigation text-center\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "CriveroPruebaBundle:Mensajes:notificacionesAdmin.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Mensajes/notificacionesAdmin.html.twig");
    }
}
