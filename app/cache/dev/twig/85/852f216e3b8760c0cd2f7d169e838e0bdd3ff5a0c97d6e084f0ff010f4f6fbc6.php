<?php

/* moduloclientesclienteBundle:Reservas:reservasClientes.html.twig */
class __TwigTemplate_30ca32159862267618169873e332d499b76e982cae3cf58baf8aedeeb6f6162a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Reservas:reservasClientes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " Mis reservas ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis reservas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 17
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 18
            echo "                    <h2>No se encontraron reservas</h2>
                ";
        } else {
            // line 20
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 24
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Código", "r.id");
            echo "</th>
                                    <th>";
            // line 25
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cancha", "r.cancha");
            echo "</th>
                                    <th>";
            // line 26
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "r.estadoReserva");
            echo "</th>
                                    <th>";
            // line 27
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "r.fechaInicio");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 33
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cancha", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 36
                if (($this->getAttribute($context["reserva"], "estadoReserva", array()) == "Cancelada")) {
                    // line 37
                    echo "                                            <td style=\"color: red\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "estadoReserva", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                } else {
                    // line 39
                    echo "                                            <td><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "estadoReserva", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                }
                // line 41
                echo "                                        <td><strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d-m-Y"), "html", null, true);
                echo "</strong></td>
                                        <td class=\"actions\">
                                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_reservaClientes", array("id" => $this->getAttribute($context["reserva"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                Ver
                                            </a>
                                            ";
                // line 46
                if (($this->getAttribute($context["reserva"], "estadoReserva", array()) == "Cancelada")) {
                    // line 47
                    echo "                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Descartar
                                                </a>
                                            ";
                } else {
                    // line 51
                    echo "                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Cancelar
                                                </a>
                                            ";
                }
                // line 55
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 61
        echo "        
                <div>
                    <div class=\"navigation\">
                        ";
        // line 64
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                </div>
            </div>                     
        </div>                     
    </div>
    ";
        // line 70
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "id" => "form-delete", "with_submit" => false));
        echo "

";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/criveroprueba/js/delete-reserva.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Reservas:reservasClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 75,  183 => 74,  180 => 73,  173 => 70,  164 => 64,  159 => 61,  153 => 58,  145 => 55,  139 => 51,  133 => 47,  131 => 46,  125 => 43,  119 => 41,  113 => 39,  107 => 37,  105 => 36,  101 => 35,  97 => 34,  92 => 33,  88 => 32,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  62 => 20,  58 => 18,  56 => 17,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
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
{% block title %} Mis reservas {% endblock %}
{% block contenido %}
    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis reservas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not pagination|length %}
                    <h2>No se encontraron reservas</h2>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>{{ knp_pagination_sortable(pagination, 'Código', 'r.id') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Cancha', 'r.cancha') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Estado', 'r.estadoReserva') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Fecha', 'r.fechaInicio') }}</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for reserva in pagination %}
                                    <tr data-id=\"{{ reserva.id }}\">
                                        <td>{{reserva.id}}</td>
                                        <td>{{reserva.cancha}}</td>
                                        {% if reserva.estadoReserva == 'Cancelada' %}
                                            <td style=\"color: red\"><strong>{{reserva.estadoReserva}}</strong></td>
                                        {% else %}
                                            <td><strong>{{reserva.estadoReserva}}</strong></td>
                                        {% endif %}
                                        <td><strong>{{reserva.fechaInicio|date('d-m-Y')}}</strong></td>
                                        <td class=\"actions\">
                                            <a href=\"{{ path('moduloclientes_cliente_reservaClientes', { id: reserva.id }) }}\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                Ver
                                            </a>
                                            {% if reserva.estadoReserva == 'Cancelada' %}
                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Descartar
                                                </a>
                                            {% else %}
                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Cancelar
                                                </a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}        
                <div>
                    <div class=\"navigation\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                </div>
            </div>                     
        </div>                     
    </div>
    {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form_ajax, id: \"form-delete\", with_submit: false })}}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/criveroprueba/js/delete-reserva.js') }}\"></script>
{% endblock %}", "moduloclientesclienteBundle:Reservas:reservasClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Reservas/reservasClientes.html.twig");
    }
}
