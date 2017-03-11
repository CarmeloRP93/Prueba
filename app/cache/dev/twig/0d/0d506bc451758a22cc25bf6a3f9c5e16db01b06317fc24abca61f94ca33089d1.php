<?php

/* CriveroPruebaBundle:Competiciones:competiciones.html.twig */
class __TwigTemplate_f2b7cd08c4dc7c33e1c87fb7d27ead09e6fb680357e05de4e9caef31d7d16fe9 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Competiciones ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"text-center\">Competiciones</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Deporte</th>
                        <th>Estado Competicion</th>
                        <th>Tipo competicion</th>
                        <th>Fecha inicio</th>
                        <th>Fecha finalización</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 26
            echo "                        <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "deporte", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estadoCompeticion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "tipoCompeticion", array()), "html", null, true);
            echo "</td>
                            <td><strong>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</strong></td>
                            ";
            // line 32
            if (($this->getAttribute($context["competicion"], "fechaFinalizacion", array()) != null)) {
                // line 33
                echo "                                <td><strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaFinalizacion", array()), "d/m/Y"), "html", null, true);
                echo "</strong></td>
                                ";
            } else {
                // line 35
                echo "                                <td><strong>No Consta</strong></td>
                            ";
            }
            // line 37
            echo "                            <td class=\"actions\">
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                ";
            // line 44
            echo "                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>
            </table>
        </div>
        <div class=\"nueva\">
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion_nueva");
        echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                Nueva Competicion 
             <span class=\"glyphicon glyphicon-plus\"></span></a>
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
        return array (  124 => 54,  118 => 50,  107 => 44,  101 => 38,  98 => 37,  94 => 35,  88 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  63 => 26,  59 => 25,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
            <h1 class=\"text-center\">Competiciones</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Deporte</th>
                        <th>Estado Competicion</th>
                        <th>Tipo competicion</th>
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
                                <a href=\"{{ path('crivero_prueba_competicion', { id: competicion.id }) }}\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                {#<a href=\"{{ path('crivero_prueba_editarCompeticion', { id: competicion.id }) }}\" class=\"btn btn-sm btn-primary\">
                                    Editar
                                </a>#}
                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"nueva\">
            <a href=\"{{path('crivero_prueba_competicion_nueva')}}\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                Nueva Competicion 
             <span class=\"glyphicon glyphicon-plus\"></span></a>
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:competiciones.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/competiciones.html.twig");
    }
}
