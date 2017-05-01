<?php

/* moduloclientesclienteBundle:Competiciones:partidoClientes.html.twig */
class __TwigTemplate_b100ab57e656ad7968694b3ed72b1b32fea951d0a5d0f4410c6bee16db7772e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:partidoClientes.html.twig", 1);
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
        echo " Partido ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <h1 class=\"t1\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo "</h1>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                ";
        // line 8
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Finalizado")) {
            // line 9
            echo "                    <h2 class=\"t1\">Partido ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultado", array()), "html", null, true);
            echo "</h2>
                ";
        } else {
            // line 11
            echo "                    <h2 class=\"t1\">Partido ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()), "html", null, true);
            echo "</h2>
                ";
        }
        // line 13
        echo "            </div>
            ";
        // line 14
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Finalizado")) {
            echo "  
                <div class=\"panel-body\">  
                    <h4>Arbitrado por ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</h4>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <h4>Posición en la liga: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "clasificacion", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                        <th>Incidencias</th>
                                    </tr>
                                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 29
                    echo "                                        <tr>
                                            <td>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <h4>Vs</h4>
                        </div>      

                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <h4>Posición en la liga: ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "clasificacion", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                        <th>Incidencias</th>
                                    </tr>
                                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 54
                    echo "                                        <tr>
                                            <td>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_partidosClientes", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\">Volver atrás</a>
            ";
        }
        // line 67
        echo "            ";
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Pendiente")) {
            echo "  
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Fecha prevista</h4> <p>El ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo " a las ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaInicio", array()), "H:i"), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Cancha</h4> <p>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Árbitro designado</h4> <p>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_partidosClientes", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\">Volver atrás</a>
            ";
        }
        // line 83
        echo "
            ";
        // line 84
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Jugandose")) {
            // line 85
            echo "                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <h4>Arbitro pitando: ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</h4>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 101
                    echo "                                        <tr>
                                            <td>";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <h4>Vs</h4>
                        </div>      

                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 123
                    echo "                                        <tr>
                                            <td>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_partidosClientes", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\">Volver atrás</a>
            ";
        }
        // line 135
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:partidoClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 135,  318 => 133,  311 => 128,  301 => 125,  297 => 124,  294 => 123,  289 => 122,  279 => 115,  268 => 106,  258 => 103,  254 => 102,  251 => 101,  246 => 100,  236 => 93,  228 => 88,  223 => 85,  221 => 84,  218 => 83,  213 => 81,  206 => 77,  200 => 74,  192 => 71,  184 => 67,  179 => 65,  172 => 60,  162 => 57,  158 => 56,  154 => 55,  151 => 54,  146 => 53,  135 => 45,  131 => 44,  120 => 35,  110 => 32,  106 => 31,  102 => 30,  99 => 29,  94 => 28,  83 => 20,  79 => 19,  73 => 16,  68 => 14,  65 => 13,  59 => 11,  51 => 9,  49 => 8,  43 => 5,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Partido {{ partido.id }} {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <h1 class=\"t1\">{{ competicion.nombre }}</h1>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                {% if partido.estadoPartido == 'Finalizado' %}
                    <h2 class=\"t1\">Partido {{ partido.estadoPartido }}: {{ partido.resultado }}</h2>
                {% else %}
                    <h2 class=\"t1\">Partido {{ partido.estadoPartido }}</h2>
                {% endif %}
            </div>
            {% if partido.estadoPartido == 'Finalizado' %}  
                <div class=\"panel-body\">  
                    <h4>Arbitrado por {{ partido.arbitro }}</h4>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>{{ equipoLocal.nombre }}</h4>
                            <h4>Posición en la liga: {{ equipoLocal.clasificacion }}</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                        <th>Incidencias</th>
                                    </tr>
                                    {% for jugador in jugadores if equipoVisitante.id == jugador.idEquipo%}
                                        <tr>
                                            <td>{{ jugador.nombre }}</td>
                                            <td>{{ jugador.dorsal }}</td>
                                            <td>{{ jugador.incidencia }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <h4>Vs</h4>
                        </div>      

                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>{{ equipoVisitante.nombre }}</h4>
                            <h4>Posición en la liga: {{ equipoVisitante.clasificacion }}</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                        <th>Incidencias</th>
                                    </tr>
                                    {% for jugador in jugadores if equipoVisitante.id == jugador.idEquipo%}
                                        <tr>
                                            <td>{{ jugador.nombre }}</td>
                                            <td>{{ jugador.dorsal }}</td>
                                            <td>{{ jugador.incidencia }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"{{ path('moduloclientes_cliente_partidosClientes', {id: competicion.id}) }}\">Volver atrás</a>
            {% endif %}
            {% if partido.estadoPartido == 'Pendiente' %}  
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Fecha prevista</h4> <p>El {{ partido.fechaInicio|date('d/m/Y') }} a las {{ partido.fechaInicio|date('H:i') }}</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Cancha</h4> <p>{{ cancha.tipo }}</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Árbitro designado</h4> <p>{{ partido.arbitro }}</p>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"{{ path('moduloclientes_cliente_partidosClientes', {id: competicion.id}) }}\">Volver atrás</a>
            {% endif %}

            {% if partido.estadoPartido == 'Jugandose' %}
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <h4>Arbitro pitando: {{ partido.arbitro }}</h4>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>{{ equipoLocal.nombre }}</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    {% for jugador in jugadores if equipoVisitante.id == jugador.idEquipo%}
                                        <tr>
                                            <td>{{ jugador.nombre }}</td>
                                            <td>{{ jugador.dorsal }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <h4>Vs</h4>
                        </div>      

                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>{{ equipoVisitante.nombre }}</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    {% for jugador in jugadores if equipoVisitante.id == jugador.idEquipo%}
                                        <tr>
                                            <td>{{ jugador.nombre }}</td>
                                            <td>{{ jugador.dorsal }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"{{ path('moduloclientes_cliente_partidosClientes', {id: competicion.id}) }}\">Volver atrás</a>
            {% endif %}
        </div>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Competiciones:partidoClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/partidoClientes.html.twig");
    }
}
