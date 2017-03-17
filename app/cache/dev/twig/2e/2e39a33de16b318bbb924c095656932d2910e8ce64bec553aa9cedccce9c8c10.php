<?php

/* CriveroPruebaBundle:Reservas:reservas.html.twig */
class __TwigTemplate_859e2419ae069698f9b3e2baf04fab0ff1308efc9f2af5b5cf10a0f2fffa0760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Reservas:reservas.html.twig", 2);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Reservas ";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
            <div class=\"page-header \"> 
                <h1 class=\"text-center\">Reservas</h1>
            </div>
        ";
        // line 12
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 13
            echo "            <h2>No se encontraron reservas con esos parámetros de búsqueda.</h2>
        ";
        } else {
            // line 15
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cliente", "r.cliente");
            echo "</th>
                            <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cancha", "r.cancha");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Inicio", "r.fechaInicio");
            echo "</th>
                            <th>";
            // line 22
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Final", "r.fechaFinalizacion");
            echo "</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 28
                echo "                            <tr>
                                <td><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute($context["reserva"], "idCliente", array()))), "html", null, true);
                echo "\" style=\"color: #000\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cliente", array()), "html", null, true);
                echo "</a></td>
                                <td><strong><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute($context["reserva"], "idCancha", array()))), "html", null, true);
                echo "\" style=\"color: #000\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cancha", array()), "html", null, true);
                echo "</a></strong></td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaFinalizacion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_reserva_cancelar", array("id" => $this->getAttribute($context["reserva"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">
                                        Cancelar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 44
        echo "        <div class=\"navigation\">
            ";
        // line 45
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Reservas:reservas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 45,  125 => 44,  119 => 40,  107 => 34,  102 => 32,  98 => 31,  92 => 30,  86 => 29,  83 => 28,  79 => 27,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  53 => 15,  49 => 13,  47 => 12,  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends 'CriveroPruebaBundle::main.html.twig' %}

{% block title %} Reservas {% endblock %}

{% block contenido %}
    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"container\">
            <div class=\"page-header \"> 
                <h1 class=\"text-center\">Reservas</h1>
            </div>
        {% if not pagination|length %}
            <h2>No se encontraron reservas con esos parámetros de búsqueda.</h2>
        {% else %}
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Cliente', 'r.cliente') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Cancha', 'r.cancha') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Inicio', 'r.fechaInicio') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Final', 'r.fechaFinalizacion') }}</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reserva in pagination %}
                            <tr>
                                <td><a href=\"{{ path('crivero_prueba_cliente', { id: reserva.idCliente }) }}\" style=\"color: #000\" >{{reserva.cliente}}</a></td>
                                <td><strong><a href=\"{{ path('crivero_prueba_cancha', { id: reserva.idCancha }) }}\" style=\"color: #000\">{{reserva.cancha}}</a></strong></td>
                                <td>{{reserva.fechaInicio|date('d/m/Y H:i')}}</td>
                                <td>{{reserva.fechaFinalizacion|date('d/m/Y H:i')}}</td>
                                <td class=\"actions\">
                                    <a href=\"{{path('crivero_prueba_reserva_cancelar', {id: reserva.id})}}\" class=\"btn btn-sm btn-danger\">
                                        Cancelar
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
{% endblock %} ", "CriveroPruebaBundle:Reservas:reservas.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Reservas/reservas.html.twig");
    }
}