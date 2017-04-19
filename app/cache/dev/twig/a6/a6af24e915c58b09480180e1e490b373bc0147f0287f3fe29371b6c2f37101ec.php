<?php

/* CriveroPruebaBundle:Sesiones:sesionesMonitor.html.twig */
class __TwigTemplate_b084bd12c3a07316ca569e4f85cfe0003cd03202472e22d5f81341fa66ff221e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Sesiones:sesionesMonitor.html.twig", 1);
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
        echo " Sesiones de ";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesiones de ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-bordered\">
                <thead>
                    <tr>
                        <th>";
        // line 15
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sesión", "s.nombre");
        echo "</th>
                        <th>";
        // line 16
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "s.estado");
        echo "</th>
                        <th>";
        // line 17
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cliente/s", "s.monitor");
        echo "</th>
                        <th>";
        // line 18
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Participantes", "s.nClientes");
        echo "</th>
                        <td><strong>Acciones</strong></td>
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
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["sesion"], "cliente", array()) == "normal")) ? ("Múltiples") : ($this->getAttribute($context["sesion"], "cliente", array()))), "html", null, true);
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
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                    Ver horarios
                                </a>
                                ";
            // line 40
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </tbody>
            </table>
        </div>
        <a class=\"btn btn-success\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_monitor", array("id" => (isset($context["mId"]) ? $context["mId"] : $this->getContext($context, "mId")))), "html", null, true);
        echo "\">Volver atrás</a>
        <div class=\"navigation\" style=\"float: right\">
            ";
        // line 48
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:sesionesMonitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  126 => 46,  121 => 43,  113 => 40,  107 => 34,  101 => 31,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  74 => 23,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  44 => 8,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Sesiones de {{ username }} {% endblock %}

{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesiones de {{ username }}</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-bordered\">
                <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(pagination, 'Sesión', 's.nombre') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Estado', 's.estado') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Cliente/s', 's.monitor') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Participantes', 's.nClientes') }}</th>
                        <td><strong>Acciones</strong></td>
                    </tr>
                </thead>
                <tbody>
                    {% for sesion in pagination %}
                        <tr>
                            <td>{{sesion.nombre}}</td>
                            <td><strong>{{sesion.estado}}</strong></td>
                            <td>{{(sesion.cliente == 'normal' ? \"Múltiples\" : sesion.cliente)}}</td>
                            <td>{{sesion.nClientes}}/{{sesion.lClientes}}</td>

                            <td class=\"actions\">
                                <a href=\"{{ path('crivero_prueba_sesion', { id: sesion.id }) }}\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"{{path('crivero_prueba_horarios_sesion', {id: sesion.id})}}\" class=\"btn btn-sm btn-primary\">
                                    Ver horarios
                                </a>
                                {#<a href=\"{{path('crivero_prueba_cancelarSesion', {id: sesion.id})}}\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Cancelar
                                </a>#}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <a class=\"btn btn-success\" href=\"{{ path('crivero_prueba_monitor', { id: mId }) }}\">Volver atrás</a>
        <div class=\"navigation\" style=\"float: right\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Sesiones:sesionesMonitor.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Sesiones/sesionesMonitor.html.twig");
    }
}
