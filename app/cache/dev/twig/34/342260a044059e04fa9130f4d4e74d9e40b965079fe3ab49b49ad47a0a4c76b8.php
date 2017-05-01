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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Notificaciones ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\" style=\"margin-top: -21px\">
        <div class=\"page-header\">

            <h1 class=\"t1\" style=\"margin-right: 4.5em\">Notificaciones</h1>
        </div>
        ";
        // line 12
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 13
            echo "            <h2>No hay notificaciones.</h2>
        ";
        } else {
            // line 15
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-condensed\">
                    <thead>
                        <tr>
                            <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mensaje", "pagination.mensaje");
            echo "</th>
                            <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "pagination.estado");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "pagination.fecha");
            echo "</th>
                            <th class=\"t3\">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                // line 28
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "id", array()), "html", null, true);
                echo "\">
                                <td><strong>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                echo "</strong></td>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "estado", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notificacion"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    ";
                // line 33
                if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                    // line 34
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 39
$context["notificacion"], "concepto", array()) == "Privada")) {
                    // line 40
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 45
$context["notificacion"], "concepto", array()) == "Mensaje")) {
                    // line 46
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_mensaje", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 51
$context["notificacion"], "concepto", array()) == "Reserva")) {
                    // line 52
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_reservas_cliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 57
$context["notificacion"], "concepto", array()) == "Partido")) {
                    // line 58
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarPartido", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Editar partido
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 63
$context["notificacion"], "concepto", array()) == "Usuario")) {
                    // line 64
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                            ";
                } elseif (($this->getAttribute(                // line 69
$context["notificacion"], "concepto", array()) == "PublicaEliminada")) {
                    // line 70
                    echo "                                        <form action=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesiones");
                    echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 76
$context["notificacion"], "concepto", array()) == "PrivadaEliminada")) {
                    // line 77
                    echo "                                        <form action=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_dedicadas");
                    echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                }
                // line 84
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 91
        echo "        <div>
            <div class=\"navigation\"  >
                ";
        // line 93
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
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
        return array (  212 => 93,  208 => 91,  202 => 87,  194 => 84,  185 => 78,  180 => 77,  178 => 76,  170 => 71,  165 => 70,  163 => 69,  154 => 64,  152 => 63,  143 => 58,  141 => 57,  132 => 52,  130 => 51,  121 => 46,  119 => 45,  110 => 40,  108 => 39,  99 => 34,  97 => 33,  92 => 31,  88 => 30,  84 => 29,  79 => 28,  75 => 27,  66 => 21,  62 => 20,  58 => 19,  52 => 15,  48 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

    <div class=\"container\" style=\"margin-top: -21px\">
        <div class=\"page-header\">

            <h1 class=\"t1\" style=\"margin-right: 4.5em\">Notificaciones</h1>
        </div>
        {% if not pagination|length %}
            <h2>No hay notificaciones.</h2>
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
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        <div>
            <div class=\"navigation\"  >
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>


{% endblock %}
", "CriveroPruebaBundle:Mensajes:notificacionesAdmin.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Mensajes/notificacionesAdmin.html.twig");
    }
}
