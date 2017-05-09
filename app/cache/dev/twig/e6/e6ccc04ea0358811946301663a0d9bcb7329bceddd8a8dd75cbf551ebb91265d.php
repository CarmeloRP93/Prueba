<?php

/* CriveroPruebaBundle:Competiciones:equipo.html.twig */
class __TwigTemplate_db6f908196d9378f259838f597eab96c8ea31c4539e9c8bbc31384996f4d34a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:equipo.html.twig", 1);
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"page-header\">
            <h1 class=\"t1\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "deporte", array()), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                <div class=\"table-responsive\">
                    ";
        // line 11
        if ( !twig_length_filter($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")))) {
            // line 12
            echo "                    <h2>No se encontraron jugadores</h2>
                ";
        } else {
            // line 14
            echo "                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th></th>
                                <th>";
            // line 18
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Nombre del jugador", "pagination.nombre");
            echo "</th>
                                 <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Dorsal", "pagination.dorsal");
            echo "</th>
                                <th>Incidencia</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                // line 25
                echo "                                <tr>
                                    ";
                // line 26
                if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                    // line 27
                    echo "                                        <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                    echo "\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                    ";
                } else {
                    // line 29
                    echo "                                        <td>Imagen no Disponible</td>
                                    ";
                }
                // line 31
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "Dorsal", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                echo "</td>
                                    <td> <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_jugador", array("id" => $this->getAttribute($context["jugador"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Ver Detalles</a></td>
                                </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </table>
                </div>
                ";
        }
        // line 40
        echo "                <div class=\"navigation\">
                    ";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        echo "
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "idCompeticion", array()))), "html", null, true);
        echo "\">Ver competición</a>        
        <a class=\"btn btn-default\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_equipos");
        echo "\">Volver a Equipos</a>        
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:equipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  134 => 45,  127 => 41,  124 => 40,  119 => 37,  110 => 34,  106 => 33,  102 => 32,  97 => 31,  93 => 29,  87 => 27,  85 => 26,  82 => 25,  78 => 24,  70 => 19,  66 => 18,  60 => 14,  56 => 12,  54 => 11,  44 => 6,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Vista de {{equipo.nombre}} {% endblock %}
{% block contenido %}
    <div class=\"container text-center\">
        <div class=\"page-header\">
            <h1 class=\"t1\">{{equipo.nombre}} de {{equipo.deporte}}</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                <div class=\"table-responsive\">
                    {% if not jugadores|length %}
                    <h2>No se encontraron jugadores</h2>
                {% else %}
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th></th>
                                <th>{{ knp_pagination_sortable(jugadores, 'Nombre del jugador', 'pagination.nombre') }}</th>
                                 <th>{{ knp_pagination_sortable(jugadores, 'Dorsal', 'pagination.dorsal') }}</th>
                                <th>Incidencia</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        {% for jugador in jugadores %}
                                <tr>
                                    {%if jugador.imagen != null%}
                                        <td><img src=\"{{ asset('images/'~jugador.imagen) }}\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                    {%else%}
                                        <td>Imagen no Disponible</td>
                                    {%endif%}
                                    <td>{{jugador.nombre}}</td>
                                    <td>{{jugador.Dorsal}}</td>
                                    <td>{{jugador.incidencia}}</td>
                                    <td> <a href=\"{{ path('crivero_prueba_jugador', { id: jugador.id })  }}\" class=\"btn btn-info\">Ver Detalles</a></td>
                                </tr>
                        {% endfor %}
                    </table>
                </div>
                {% endif %}
                <div class=\"navigation\">
                    {{ knp_pagination_render(jugadores) }}
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"{{ path('crivero_prueba_competicion',{id:equipo.idCompeticion}) }}\">Ver competición</a>        
        <a class=\"btn btn-default\" href=\"{{ path('crivero_prueba_equipos') }}\">Volver a Equipos</a>        
    </div>
{% endblock %}
", "CriveroPruebaBundle:Competiciones:equipo.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/equipo.html.twig");
    }
}
