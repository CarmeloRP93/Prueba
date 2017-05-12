<?php

/* CriveroPruebaBundle:Competiciones:jugadores.html.twig */
class __TwigTemplate_626a499ec01021564f44a0025124defe9340389e905ef28cad6b11b79ef4abdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:jugadores.html.twig", 1);
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
        echo " Vista de Jugadores ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\"> Jugadores</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "                    <h2>No se encontraron jugadores</h2>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
\t\t\t\t\t\t\t\t\t<th></th>
                                    <th>Equipo</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre del jugador", "pagination.nombre");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Dorsal", "pagination.dorsal");
            echo "</th>
                                    <th>Incidencias</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                // line 27
                echo "                                    <tr>
\t\t\t\t\t\t\t\t\t\t";
                // line 28
                if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                    // line 29
                    echo "                                            <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                    echo "\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                        ";
                } else {
                    // line 31
                    echo "                                            <td>Imagen no Disponible</td>
                                        ";
                }
                // line 33
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
                foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                    if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                        // line 34
                        echo "                                            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                        echo "</td>
                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_jugador", array("id" => $this->getAttribute($context["jugador"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                                Ver Detalles
                                            </a>
                                            ";
                // line 46
                echo "                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                                Eliminar Jugador
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 56
        echo "                <div class=\"navigation\">
                    ";
        // line 57
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
        return "CriveroPruebaBundle:Competiciones:jugadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 57,  145 => 56,  139 => 52,  128 => 46,  122 => 40,  117 => 38,  113 => 37,  108 => 36,  98 => 34,  92 => 33,  88 => 31,  82 => 29,  80 => 28,  77 => 27,  73 => 26,  64 => 20,  60 => 19,  52 => 13,  48 => 11,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Vista de Jugadores {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\"> Jugadores</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not pagination|length %}
                    <h2>No se encontraron jugadores</h2>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
\t\t\t\t\t\t\t\t\t<th></th>
                                    <th>Equipo</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Nombre del jugador', 'pagination.nombre') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Dorsal', 'pagination.dorsal') }}</th>
                                    <th>Incidencias</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for jugador in pagination %}
                                    <tr>
\t\t\t\t\t\t\t\t\t\t{%if jugador.imagen != null%}
                                            <td><img src=\"{{ asset('images/'~jugador.imagen) }}\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                        {%else%}
                                            <td>Imagen no Disponible</td>
                                        {%endif%}
                                        {% for equipo in equipos if equipo.id == jugador.idEquipo%}
                                            <td>{{equipo.nombre}}</td>
                                        {%endfor%}
                                        <td>{{jugador.nombre}}</td>
                                        <td>{{jugador.dorsal}}</td>
                                        <td>{{jugador.incidencia}}</td>
                                        <td class=\"actions\">
                                            <a href=\"{{ path('crivero_prueba_jugador', { id: jugador.id })  }}\" class=\"btn btn-sm btn-info\">
                                                Ver Detalles
                                            </a>
                                            {#<a href=\"{{ path('crivero_prueba_editarJugador', { id: jugador.id }) }}\" class=\"btn btn-sm btn-primary\">
                                                Editar Jugador
                                            </a>#}
                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                                Eliminar Jugador
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
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:jugadores.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/jugadores.html.twig");
    }
}
