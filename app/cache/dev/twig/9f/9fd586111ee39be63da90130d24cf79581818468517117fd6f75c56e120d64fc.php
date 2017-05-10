<?php

/* CriveroPruebaBundle:Competiciones:competiciones.html.twig */
class __TwigTemplate_bf8b93a1a69a5b0c555817c3976d4b6622f7ccdd639c7ad3b085f6289c33af73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:competiciones.html.twig", 1);
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
        echo " Competiciones ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Competiciones</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")))) {
            // line 11
            echo "                    <h2>No se encontraron competiciones</h2>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 17
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Nombre", "competiciones.nombre");
            echo "</th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Deporte", "competiciones.deporte");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Estado de la competicion", "competiciones.estadoCompeticion");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Tipo Competicion", "competiciones.tipoCompeticion");
            echo "</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha finalización</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                // line 28
                echo "                                    <tr>
                                        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "deporte", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estadoCompeticion", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "tipoCompeticion", array()), "html", null, true);
                echo "</td>
                                        <td><strong>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
                echo "</strong></td>
                                        ";
                // line 34
                if (($this->getAttribute($context["competicion"], "fechaFinalizacion", array()) != null)) {
                    // line 35
                    echo "                                            <td><strong>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaFinalizacion", array()), "d/m/Y"), "html", null, true);
                    echo "</strong></td>
                                        ";
                } else {
                    // line 37
                    echo "                                            <td><strong>No Consta</strong></td>
                                        ";
                }
                // line 39
                echo "                                        <td class=\"actions\">
                                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                Ver
                                            </a>
                                            ";
                // line 43
                if (($this->getAttribute($context["competicion"], "estadoCompeticion", array()) == "Pendiente")) {
                    // line 44
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion_validar", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-success noMargenBoton\">
                                                    Validar
                                                </a>
                                                <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion_rechazar", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-danger noMargenBoton\">
                                                    Rechazar
                                                </a>
                                            ";
                } else {
                    // line 51
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarCompeticion", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary noMargenBoton\">
                                                    Editar
                                                </a>
                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Eliminar
                                                </a>
                                            ";
                }
                // line 58
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 65
        echo "                <div class=\"navigation\">
                    ";
        // line 66
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:competiciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 66,  169 => 65,  163 => 61,  155 => 58,  144 => 51,  137 => 47,  130 => 44,  128 => 43,  122 => 40,  119 => 39,  115 => 37,  109 => 35,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  84 => 28,  80 => 27,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  52 => 13,  48 => 11,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Competiciones {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Competiciones</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not competiciones|length %}
                    <h2>No se encontraron competiciones</h2>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>{{ knp_pagination_sortable(competiciones, 'Nombre', 'competiciones.nombre') }}</th>
                                    <th>{{ knp_pagination_sortable(competiciones, 'Deporte', 'competiciones.deporte') }}</th>
                                    <th>{{ knp_pagination_sortable(competiciones, 'Estado de la competicion', 'competiciones.estadoCompeticion') }}</th>
                                    <th>{{ knp_pagination_sortable(competiciones, 'Tipo Competicion', 'competiciones.tipoCompeticion') }}</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha finalización</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for competicion in competiciones %}
                                    <tr>
                                        <td>{{competicion.nombre}}</td>
                                        <td>{{competicion.deporte}}</td>
                                        <td>{{competicion.estadoCompeticion}}</td>
                                        <td>{{competicion.tipoCompeticion}}</td>
                                        <td><strong>{{competicion.fechaInicio|date('d/m/Y')}}</strong></td>
                                        {% if competicion.fechaFinalizacion != null %}
                                            <td><strong>{{competicion.fechaFinalizacion|date('d/m/Y')}}</strong></td>
                                        {% else %}
                                            <td><strong>No Consta</strong></td>
                                        {% endif %}
                                        <td class=\"actions\">
                                            <a href=\"{{ path('crivero_prueba_competicion', { id: competicion.id }) }}\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                Ver
                                            </a>
                                            {% if competicion.estadoCompeticion == 'Pendiente' %}
                                                <a href=\"{{path('crivero_prueba_competicion_validar', {id: competicion.id})}}\" class=\"btn btn-sm btn-success noMargenBoton\">
                                                    Validar
                                                </a>
                                                <a href=\"{{path('crivero_prueba_competicion_rechazar', {id: competicion.id})}}\" class=\"btn btn-sm btn-danger noMargenBoton\">
                                                    Rechazar
                                                </a>
                                            {% else %}
                                                <a href=\"{{ path('crivero_prueba_editarCompeticion', { id: competicion.id }) }}\" class=\"btn btn-sm btn-primary noMargenBoton\">
                                                    Editar
                                                </a>
                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Eliminar
                                                </a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {%endif%}
                <div class=\"navigation\">
                    {{ knp_pagination_render(competiciones) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:competiciones.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/competiciones.html.twig");
    }
}
