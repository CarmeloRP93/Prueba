<?php

/* CriveroPruebaBundle:Sesiones:sesiones.html.twig */
class __TwigTemplate_63d5434b3df8d40ab54320271a0683ac12742112081cfdb7f6e8e519bb839c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Sesiones:sesiones.html.twig", 1);
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
        echo " Sesiones Generales ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesiones Generales</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 15
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "s.nombre");
        echo "</th>
                        <th>";
        // line 16
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "s.estado");
        echo "</th>
                        <th>";
        // line 17
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Monitor", "s.monitor");
        echo "</th>
                        <th>";
        // line 18
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Participantes", "s.nClientes");
        echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
            // line 24
            echo "                        <tr>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td><strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
            echo "</strong></td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nClientes", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "lClientes", array()), "html", null, true);
            echo "</td>

                            <td class=\"actions\">
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                ";
            // line 34
            if (($this->getAttribute($context["sesion"], "estado", array()) == "pendiente")) {
                // line 35
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_aceptarSesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\">
                                        Aceptar
                                    </a>
                                    <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_rechazarSesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Rechazar
                                    </a>
                                ";
            } elseif (($this->getAttribute(            // line 41
$context["sesion"], "estado", array()) == "validada")) {
                // line 42
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancelarSesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Cancelar
                                    </a>
                                ";
            }
            // line 46
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            ";
        // line 53
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:sesiones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 53,  135 => 49,  127 => 46,  119 => 42,  117 => 41,  111 => 38,  104 => 35,  102 => 34,  96 => 31,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  73 => 24,  69 => 23,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Sesiones Generales {% endblock %}

{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesiones Generales</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(pagination, 'Nombre', 's.nombre') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Estado', 's.estado') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Monitor', 's.monitor') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Participantes', 's.nClientes') }}</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for sesion in pagination %}
                        <tr>
                            <td>{{sesion.nombre}}</td>
                            <td><strong>{{sesion.estado}}</strong></td>
                            <td>{{sesion.monitor}}</td>
                            <td>{{sesion.nClientes}}/{{sesion.lClientes}}</td>

                            <td class=\"actions\">
                                <a href=\"{{ path('crivero_prueba_sesion', { id: sesion.id }) }}\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                {% if sesion.estado == 'pendiente' %}
                                    <a href=\"{{path('crivero_prueba_aceptarSesion', {id: sesion.id})}}\" class=\"btn btn-sm btn-success\">
                                        Aceptar
                                    </a>
                                    <a href=\"{{path('crivero_prueba_rechazarSesion', {id: sesion.id})}}\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Rechazar
                                    </a>
                                {% elseif sesion.estado == 'validada' %}
                                    <a href=\"{{path('crivero_prueba_cancelarSesion', {id: sesion.id})}}\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Cancelar
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Sesiones:sesiones.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Sesiones/sesiones.html.twig");
    }
}
