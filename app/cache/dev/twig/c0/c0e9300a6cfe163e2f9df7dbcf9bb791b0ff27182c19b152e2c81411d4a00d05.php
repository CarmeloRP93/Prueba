<?php

/* CriveroPruebaBundle:Reservas:reservasCliente.html.twig */
class __TwigTemplate_2d18c6105ce550ef5259df46e985d54ef5130af56d7e4c9f292ff0bcf7b0c8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Reservas:reservasCliente.html.twig", 2);
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
        echo " Reservas de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array(), "array"), "cliente", array()), "html", null, true);
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
                <h1 class=\"t1\">Reservas de ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array(), "array"), "cliente", array()), "html", null, true);
        echo "</h1>
            </div>
        ";
        // line 12
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 13
            echo "            <h2>No se encontraron reservas.</h2>
        ";
        } else {
            // line 15
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-bordered\">
                    <thead>
                        <tr>
                            <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cancha", "r.cancha");
            echo "</th>
                            <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "r.fechaInicio");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "r.fechaFinalizacion");
            echo "</th>
                            <td><strong>Acciones</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 27
                echo "                            <tr>
                                <td><strong><a class=\"atd\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute($context["reserva"], "idCancha", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cancha", array()), "html", null, true);
                echo "</a></strong></td>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                ";
                // line 30
                $context["horario"] = twig_split_filter($this->env, $this->getAttribute($context["reserva"], "horario", array()), "&");
                echo " 
                                ";
                // line 31
                if ((twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) > 2)) {
                    // line 32
                    echo "                                    ";
                    $context["horarioFinal1"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "-");
                    echo " 
                                    ";
                    // line 33
                    $context["horarioFinal2"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), (twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) - 2), array(), "array"), "-");
                    echo " 
                                    <td>";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal1"]) ? $context["horarioFinal1"] : $this->getContext($context, "horarioFinal1")), 0, array(), "array"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2")), (twig_length_filter($this->env, (isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2"))) - 1), array(), "array"), "html", null, true);
                    echo " </td>
                                ";
                } else {
                    // line 36
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "html", null, true);
                    echo "</td>
                                ";
                }
                // line 38
                echo "                                
                                <td class=\"actions\">
                                    <a href=\"";
                // line 40
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
            // line 46
            echo "                    </tbody>
                </table>
            </div>
                
        ";
        }
        // line 51
        echo "        <div>
            <a class=\"btn btn-success\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array(), "array"), "idCliente", array()))), "html", null, true);
        echo "\">Volver atrás</a>
            <div class=\"navigation\" style=\"float: right\">
                ";
        // line 54
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Reservas:reservasCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  150 => 52,  147 => 51,  140 => 46,  128 => 40,  124 => 38,  118 => 36,  111 => 34,  107 => 33,  102 => 32,  100 => 31,  96 => 30,  92 => 29,  86 => 28,  83 => 27,  79 => 26,  71 => 21,  67 => 20,  63 => 19,  57 => 15,  53 => 13,  51 => 12,  46 => 10,  39 => 7,  36 => 6,  29 => 4,  11 => 2,);
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

{% block title %} Reservas de {{ pagination[0].cliente }}{% endblock %}

{% block contenido %}
    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"container\">
            <div class=\"page-header \"> 
                <h1 class=\"t1\">Reservas de {{ pagination[0].cliente }}</h1>
            </div>
        {% if not pagination|length %}
            <h2>No se encontraron reservas.</h2>
        {% else %}
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-bordered\">
                    <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Cancha', 'r.cancha') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Fecha', 'r.fechaInicio') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Horario', 'r.fechaFinalizacion') }}</th>
                            <td><strong>Acciones</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reserva in pagination %}
                            <tr>
                                <td><strong><a class=\"atd\" href=\"{{ path('crivero_prueba_cancha', { id: reserva.idCancha }) }}\" >{{reserva.cancha}}</a></strong></td>
                                <td>{{reserva.fechaInicio|date('d/m/Y')}}</td>
                                {% set horario = reserva.horario|split('&') %} 
                                {% if horario|length > 2 %}
                                    {% set horarioFinal1 = horario[0]|split('-') %} 
                                    {% set horarioFinal2 = horario[horario|length - 2]|split('-') %} 
                                    <td>{{horarioFinal1[0]}}-{{horarioFinal2[horarioFinal2|length - 1]}} </td>
                                {% else %}
                                    <td>{{horario[0]}}</td>
                                {% endif %}
                                
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
        <div>
            <a class=\"btn btn-success\" href=\"{{ path('crivero_prueba_cliente', { id: pagination[0].idCliente }) }}\">Volver atrás</a>
            <div class=\"navigation\" style=\"float: right\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>
{% endblock %} ", "CriveroPruebaBundle:Reservas:reservasCliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Reservas/reservasCliente.html.twig");
    }
}
