<?php

/* CriveroPruebaBundle:Competiciones:equipos.html.twig */
class __TwigTemplate_5776560c3f48a8c1416af46f84c23e0c4a1081ad59ac4bf58ee541bf52d658a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:equipos.html.twig", 1);
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
        echo " Vista de Equipos ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Equipos</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")))) {
            // line 11
            echo "                    <h2>No se encontraron equipos</h2>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 17
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Equipo", "equipo.nombre");
            echo "</th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Competición inscrito", "equipo.idCompeticion");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Responsable", "equipo.idCliente");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Deporte", "equipo.deporte");
            echo "</th>
                                    <th>";
            // line 21
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Clasificacion", "equipo.clasificacion");
            echo "</th>
                                    <th>";
            // line 22
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Puntuación", "equipo.puntuacion");
            echo "</th>
                                    <th>";
            // line 23
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Victorias", "equipo.victorias");
            echo "</th>
                                    <th>";
            // line 24
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Empates", "equipo.empates");
            echo "</th>
                                    <th>";
            // line 25
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Derrotas", "equipo.derrotas");
            echo "</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 31
                echo "                                    <tr>
                                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), $this->getAttribute($context["equipo"], "idCompeticion", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["representantes"]) ? $context["representantes"] : $this->getContext($context, "representantes")), $this->getAttribute($context["equipo"], "idCliente", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "deporte", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 36
                if (($this->getAttribute($context["equipo"], "clasificacion", array()) != 0)) {
                    // line 37
                    echo "                                            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                    echo " º</td>
                                        ";
                } else {
                    // line 39
                    echo "                                            <td>Pendiente</td>
                                        ";
                }
                // line 41
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_equipo", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                                Ver
                                            </a>
                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                                Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 59
        echo "                <div class=\"navigation\">
                    ";
        // line 60
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:equipos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 60,  172 => 59,  166 => 55,  151 => 46,  146 => 44,  142 => 43,  138 => 42,  133 => 41,  129 => 39,  123 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  102 => 31,  98 => 30,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  52 => 13,  48 => 11,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Vista de Equipos {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Equipos</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not equipos|length %}
                    <h2>No se encontraron equipos</h2>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>{{ knp_pagination_sortable(equipos, 'Equipo', 'equipo.nombre') }}</th>
                                    <th>{{ knp_pagination_sortable(equipos, 'Competición inscrito', 'equipo.idCompeticion') }}</th>
                                    <th>{{ knp_pagination_sortable(equipos, 'Responsable', 'equipo.idCliente') }}</th>
                                    <th>{{ knp_pagination_sortable(equipos, 'Deporte', 'equipo.deporte') }}</th>
                                    <th>{{ knp_pagination_sortable(equipos, 'Clasificacion', 'equipo.clasificacion') }}</th>
                                    <th>{{ knp_pagination_sortable(equipos, 'Puntuación', 'equipo.puntuacion') }}</th>
                                    <th>{{ knp_pagination_sortable(equipos, 'Victorias', 'equipo.victorias') }}</th>
                                    <th>{{ knp_pagination_sortable(equipos, 'Empates', 'equipo.empates') }}</th>
                                    <th>{{ knp_pagination_sortable(equipos, 'Derrotas', 'equipo.derrotas') }}</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for equipo in equipos %}
                                    <tr>
                                        <td>{{equipo.nombre}}</td>
                                        <td>{{competiciones[equipo.idCompeticion].nombre}}</td>
                                        <td>{{representantes[equipo.idCliente].nombre}}</td>
                                        <td>{{equipo.deporte}}</td>
                                        {%if equipo.clasificacion != 0 %}
                                            <td>{{equipo.clasificacion}} º</td>
                                        {%else%}
                                            <td>Pendiente</td>
                                        {%endif%}
                                        <td>{{equipo.puntuacion}}</td>
                                        <td>{{equipo.victorias}}</td>
                                        <td>{{equipo.empates}}</td>
                                        <td>{{equipo.derrotas}}</td>
                                        <td class=\"actions\">
                                            <a href=\"{{ path('crivero_prueba_equipo', { id: equipo.id }) }}\" class=\"btn btn-sm btn-info\">
                                                Ver
                                            </a>
                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                                Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
                <div class=\"navigation\">
                    {{ knp_pagination_render(equipos) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:equipos.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/equipos.html.twig");
    }
}
