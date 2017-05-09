<?php

/* CriveroPruebaBundle:Competiciones:competicion.html.twig */
class __TwigTemplate_16dd33738b3ba9fe7d9c141e833865b974b360c37a891921dcbe719d8d99b43d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:competicion.html.twig", 1);
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
        echo " Detalles de la competicion ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <h1 class=\"t1\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo "</h1>
        <h3 class=\"t3\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "tipoCompeticion", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "deporte", array()), "html", null, true);
        echo "</h3>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 9
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Pendiente")) {
            // line 10
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion_validar", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Validar</a>
                    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion_rechazar", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Rechazar</a>
                ";
        }
        // line 13
        echo "                ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Rechazado")) {
            // line 14
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion_validar", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Validar</a>
                ";
        }
        // line 16
        echo "                ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Validado")) {
            // line 17
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Equipos inscritos</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                if (($this->getAttribute($context["equipo"], "idCompeticion", array()) == $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))) {
                    // line 27
                    echo "                                    <tr>
                                        <td>";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                    echo "</td>
                                        <td>
                                            <a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_equipo", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">Ver</a>
                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">Eliminar</a>
                                        </td>
                                    </tr>
                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                            </tbody>
                        </table>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_partido_nuevo", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Nuevo Partido <span class=\"glyphicon glyphicon-plus\"></span></a>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competicion_cancelar", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Cancelar Competición</a>
                    </div>
                ";
        }
        // line 41
        echo "                ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Jugandose")) {
            // line 42
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Posición</th>
                                    <th>Equipo</th>
                                    <th>Puntos</th>
                                    <th>Victorias</th>
                                    <th>Derrotas</th>
                                    <th>Empates</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                if (($this->getAttribute($context["equipo"], "idCompeticion", array()) == $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))) {
                    // line 56
                    echo "                                <tr>
                                    <td>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                    echo "º</td>
                                    <td>";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                    echo "</td>
                                    <td>
                                        <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_equipo", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">Ver</a>
                                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">Eliminar</a>
                                    </td>
                                </tr>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                        </table>
                    </div>
                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_partido_nuevo", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Nuevo Partido <span class=\"glyphicon glyphicon-plus\"></span></a>
                ";
        }
        // line 73
        echo "                ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Finalizado")) {
            // line 74
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Posición</th>
                                    <th>Equipo</th>
                                    <th>Puntos</th>
                                    <th>Victorias</th>
                                    <th>Derrotas</th>
                                    <th>Empates</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                if (($this->getAttribute($context["equipo"], "idCompeticion", array()) == $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))) {
                    // line 88
                    echo "                                <tr>
                                    <td>";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                    echo "º</td>
                                    <td>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                    echo "</td>
                                    <td><a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_equipo", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info\">Ver</a></td>
                                </tr>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                        </table>
                    </div>
                ";
        }
        // line 101
        echo "            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_competiciones");
        echo "\">Volver atrás</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:competicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 103,  264 => 101,  259 => 98,  249 => 95,  245 => 94,  241 => 93,  237 => 92,  233 => 91,  229 => 90,  225 => 89,  222 => 88,  217 => 87,  202 => 74,  199 => 73,  194 => 71,  190 => 69,  178 => 64,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  150 => 56,  145 => 55,  130 => 42,  127 => 41,  121 => 38,  117 => 37,  113 => 35,  101 => 30,  96 => 28,  93 => 27,  88 => 26,  77 => 17,  74 => 16,  68 => 14,  65 => 13,  60 => 11,  55 => 10,  53 => 9,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Detalles de la competicion {% endblock %}
{% block contenido %}
    <div class=\"container text-center\">
        <h1 class=\"t1\">{{competicion.nombre}}</h1>
        <h3 class=\"t3\">{{competicion.tipoCompeticion}} de {{competicion.deporte}}</h3>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if competicion.estadoCompeticion == \"Pendiente\" %}
                    <a href=\"{{path('crivero_prueba_competicion_validar', {id: competicion.id})}}\" class=\"btn btn-success\">Validar</a>
                    <a href=\"{{path('crivero_prueba_competicion_rechazar', {id: competicion.id})}}\" class=\"btn btn-danger\">Rechazar</a>
                {% endif %}
                {% if competicion.estadoCompeticion == \"Rechazado\" %}
                    <a href=\"{{path('crivero_prueba_competicion_validar', {id: competicion.id})}}\" class=\"btn btn-success\">Validar</a>
                {% endif %}
                {% if competicion.estadoCompeticion == \"Validado\" %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Equipos inscritos</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for equipo in equipos if equipo.idCompeticion ==competicion.id %}
                                    <tr>
                                        <td>{{equipo.nombre}}</td>
                                        <td>
                                            <a href=\"{{ path('crivero_prueba_equipo', { id: equipo.id }) }}\" class=\"btn btn-sm btn-info\">Ver</a>
                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">Eliminar</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                        <a href=\"{{ path('crivero_prueba_partido_nuevo', { id: competicion.id }) }}\" class=\"btn btn-success\">Nuevo Partido <span class=\"glyphicon glyphicon-plus\"></span></a>
                        <a href=\"{{path('crivero_prueba_competicion_cancelar', {id: competicion.id})}}\" class=\"btn btn-danger\">Cancelar Competición</a>
                    </div>
                {% endif %}
                {% if competicion.estadoCompeticion == \"Jugandose\"%}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Posición</th>
                                    <th>Equipo</th>
                                    <th>Puntos</th>
                                    <th>Victorias</th>
                                    <th>Derrotas</th>
                                    <th>Empates</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            {% for equipo in equipos if equipo.idCompeticion ==competicion.id %}
                                <tr>
                                    <td>{{equipo.clasificacion}}º</td>
                                    <td>{{equipo.nombre}}</td>
                                    <td>{{equipo.puntuacion}}</td>
                                    <td>{{equipo.victorias}}</td>
                                    <td>{{equipo.derrotas}}</td>
                                    <td>{{equipo.empates}}</td>
                                    <td>
                                        <a href=\"{{ path('crivero_prueba_equipo', { id: equipo.id }) }}\" class=\"btn btn-sm btn-info\">Ver</a>
                                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">Eliminar</a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
                    <a href=\"{{ path('crivero_prueba_partido_nuevo', { id: competicion.id }) }}\" class=\"btn btn-success\">Nuevo Partido <span class=\"glyphicon glyphicon-plus\"></span></a>
                {% endif %}
                {% if competicion.estadoCompeticion == \"Finalizado\"%}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Posición</th>
                                    <th>Equipo</th>
                                    <th>Puntos</th>
                                    <th>Victorias</th>
                                    <th>Derrotas</th>
                                    <th>Empates</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            {% for equipo in equipos if equipo.idCompeticion == competicion.id %}
                                <tr>
                                    <td>{{equipo.clasificacion}}º</td>
                                    <td>{{equipo.nombre}}</td>
                                    <td>{{equipo.puntuacion}}</td>
                                    <td>{{equipo.victorias}}</td>
                                    <td>{{equipo.derrotas}}</td>
                                    <td>{{equipo.empates}}</td>
                                    <td><a href=\"{{ path('crivero_prueba_equipo', { id: equipo.id }) }}\" class=\"btn btn-info\">Ver</a></td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
                {% endif %}
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"{{ path('crivero_prueba_competiciones') }}\">Volver atrás</a>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:competicion.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/competicion.html.twig");
    }
}
