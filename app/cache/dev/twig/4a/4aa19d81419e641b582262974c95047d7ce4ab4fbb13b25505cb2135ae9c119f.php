<?php

/* moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig */
class __TwigTemplate_b259899a6161e6c50f2b6b7d19a785060f5c280e071546167b6a2f0c483d60d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"page-header\">
            <h1 class=\"t1\"> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "tipoCompeticion", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "deporte", array()), "html", null, true);
        echo "</h1>
        </div>

        ";
        // line 9
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Validado")) {
            // line 10
            echo "            <h4>Le fecha de comienzo es el ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo ". Después de esta fecha la fase de inscripción quedará cerrada.</h4>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_equipo_nuevo", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Crear Equipo <span class=\"glyphicon glyphicon-plus\"></span></a>
        ";
        }
        // line 13
        echo "        ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Jugandose")) {
            // line 14
            echo "            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body myelement\">
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
                                </tr>
                            </thead>
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 29
                echo "                                <tr>
                                    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                echo "º</td>
                                    <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                        </table>
                    </div>
                </div>
                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_partidosClientes", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Ver Partidos</a>
            </div>
        ";
        }
        // line 44
        echo "        ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Finalizado")) {
            // line 45
            echo "            <h3 class=\"t3\">Finalizado</h3>
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body myelement\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Posición </th>
                                    <th> Equipo  </th>
                                    <th> Puntos   </th>
                                    <th> Victorias </th>
                                    <th> Derrotas </th>
                                    <th> Empates  </th>
                                </tr>
                            </thead>
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 61
                echo "                                <tr>
                                    <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                echo "º</td>
                                    <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                        </table>
                    </div>
                </div>
                <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_partidosClientes", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Ver Partidos</a>
            </div>
        ";
        }
        // line 76
        echo "        <a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_competicionesClientes");
        echo "\">Volver atrás</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 76,  193 => 73,  188 => 70,  179 => 67,  175 => 66,  171 => 65,  167 => 64,  163 => 63,  159 => 62,  156 => 61,  152 => 60,  135 => 45,  132 => 44,  126 => 41,  121 => 38,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  89 => 29,  85 => 28,  69 => 14,  66 => 13,  61 => 11,  56 => 10,  54 => 9,  44 => 6,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
{% block title %} {{competicion.nombre}} {% endblock %}
{% block contenido %}
    <div class=\"container text-center\">
        <div class=\"page-header\">
            <h1 class=\"t1\"> {{competicion.tipoCompeticion}} {{competicion.nombre}} de {{competicion.deporte}}</h1>
        </div>

        {% if competicion.estadoCompeticion == \"Validado\"%}
            <h4>Le fecha de comienzo es el {{competicion.fechaInicio|date('d/m/Y')}}. Después de esta fecha la fase de inscripción quedará cerrada.</h4>
            <a href=\"{{path('moduloclientes_cliente_equipo_nuevo',{'id':competicion.id})}}\" class=\"btn btn-success\">Crear Equipo <span class=\"glyphicon glyphicon-plus\"></span></a>
        {% endif %}
        {% if competicion.estadoCompeticion == \"Jugandose\"%}
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body myelement\">
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
                                </tr>
                            </thead>
                            {% for equipo in equipos %}
                                <tr>
                                    <td>{{equipo.clasificacion}}º</td>
                                    <td>{{equipo.nombre}}</td>
                                    <td>{{equipo.puntuacion}}</td>
                                    <td>{{equipo.victorias}}</td>
                                    <td>{{equipo.derrotas}}</td>
                                    <td>{{equipo.empates}}</td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
                </div>
                <a href=\"{{ path('moduloclientes_cliente_partidosClientes',{ id: competicion.id }) }}\" class=\"btn btn-success\">Ver Partidos</a>
            </div>
        {% endif %}
        {% if competicion.estadoCompeticion == \"Finalizado\" %}
            <h3 class=\"t3\">Finalizado</h3>
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body myelement\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Posición </th>
                                    <th> Equipo  </th>
                                    <th> Puntos   </th>
                                    <th> Victorias </th>
                                    <th> Derrotas </th>
                                    <th> Empates  </th>
                                </tr>
                            </thead>
                            {% for equipo in equipos %}
                                <tr>
                                    <td>{{equipo.clasificacion}}º</td>
                                    <td>{{equipo.nombre}}</td>
                                    <td>{{equipo.puntuacion}}</td>
                                    <td>{{equipo.victorias}}</td>
                                    <td>{{equipo.derrotas}}</td>
                                    <td>{{equipo.empates}}</td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
                </div>
                <a href=\"{{ path('moduloclientes_cliente_partidosClientes',{ id: competicion.id }) }}\" class=\"btn btn-sm btn-info\">Ver Partidos</a>
            </div>
        {% endif %}
        <a class=\"btn btn-default\" href=\"{{ path('moduloclientes_cliente_competicionesClientes') }}\">Volver atrás</a>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/competicionClientes.html.twig");
    }
}
