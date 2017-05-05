<?php

/* CriveroPruebaBundle:Competiciones:partidos.html.twig */
class __TwigTemplate_f6bb3ddf28d31418b07421968ae5b6f473b2e5b7432b659592a97c0e1b15af8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:partidos.html.twig", 1);
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
        echo " Partidos ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Partidos</h1>
        </div>
        ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")))) {
            // line 11
            echo "            <h2>No se encontraron partidos</h2>
        ";
        } else {
            // line 13
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
            // line 17
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Competición", "partidos.idCompeticion");
            echo "</th>
                        <th>";
            // line 18
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Equipo Local", "partidos.idEquipoLocal");
            echo "</th>
                        <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Equipo Visitante", "partidos.idEquipoVisitante");
            echo "</th>
                        <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Lugar del partido", "partidos.idCancha");
            echo "</th>
                        <th>Fecha Inicio</th>
                        <th>";
            // line 22
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Resultado", "partidos.resultado");
            echo "</th>
                        <th>";
            // line 23
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Estado de los partidos", "partidos.estadoPartido");
            echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
                // line 29
                echo "                        <tr>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), $this->getAttribute($context["partido"], "idCompeticion", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equiposLocales"]) ? $context["equiposLocales"] : $this->getContext($context, "equiposLocales")), $this->getAttribute($context["partido"], "idEquipoLocal", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equiposVisitantes"]) ? $context["equiposVisitantes"] : $this->getContext($context, "equiposVisitantes")), $this->getAttribute($context["partido"], "idEquipoVisitante", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")), $this->getAttribute($context["partido"], "idCancha", array()), array(), "array"), "tipo", array()), "html", null, true);
                echo "</td>
                            <td><strong>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
                echo "</strong></td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultado", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "estadoPartido", array()), "html", null, true);
                echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_partido", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarPartido", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                    Editar
                                </a>
                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </tbody>
            </table>
        </div>
        ";
        }
        // line 54
        echo "        ";
        // line 59
        echo "        <div class=\"navigation text-center\">
            ";
        // line 60
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:partidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 60,  150 => 59,  148 => 54,  142 => 50,  127 => 41,  121 => 38,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  89 => 29,  85 => 28,  77 => 23,  73 => 22,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  50 => 13,  46 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Partidos {% endblock %}

{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Partidos</h1>
        </div>
        {% if not partidos|length %}
            <h2>No se encontraron partidos</h2>
        {% else %}
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(partidos, 'Competición', 'partidos.idCompeticion') }}</th>
                        <th>{{ knp_pagination_sortable(partidos, 'Equipo Local', 'partidos.idEquipoLocal') }}</th>
                        <th>{{ knp_pagination_sortable(partidos, 'Equipo Visitante', 'partidos.idEquipoVisitante') }}</th>
                        <th>{{ knp_pagination_sortable(partidos, 'Lugar del partido', 'partidos.idCancha') }}</th>
                        <th>Fecha Inicio</th>
                        <th>{{ knp_pagination_sortable(partidos, 'Resultado', 'partidos.resultado') }}</th>
                        <th>{{ knp_pagination_sortable(partidos, 'Estado de los partidos', 'partidos.estadoPartido') }}</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for partido in partidos %}
                        <tr>
                            <td>{{competiciones[partido.idCompeticion].nombre}}</td>
                            <td>{{equiposLocales[partido.idEquipoLocal].nombre}}</td>
                            <td>{{equiposVisitantes[partido.idEquipoVisitante].nombre}}</td>
                            <td>{{canchas[partido.idCancha].tipo}}</td>
                            <td><strong>{{partido.fechaInicio|date('d/m/Y')}}</strong></td>
                            <td>{{partido.resultado}}</td>
                            <td>{{partido.estadoPartido}}</td>
                            <td class=\"actions\">
                                <a href=\"{{ path('crivero_prueba_partido', { id: partido.id }) }}\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"{{ path('crivero_prueba_editarPartido', { id: partido.id }) }}\" class=\"btn btn-sm btn-primary\">
                                    Editar
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
        {%endif%}
        {#<div class=\"nueva\">
            <a href=\"{{path('crivero_prueba_partido_nuevo')}}\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                Nuevo Partido
             <span class=\"glyphicon glyphicon-plus\"></span></a>
        </div>#}
        <div class=\"navigation text-center\">
            {{ knp_pagination_render(partidos)}}
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:partidos.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/partidos.html.twig");
    }
}
