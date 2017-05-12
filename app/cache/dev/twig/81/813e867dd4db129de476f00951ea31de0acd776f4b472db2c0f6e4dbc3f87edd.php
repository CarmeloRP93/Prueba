<?php

/* CriveroPruebaBundle:Competiciones:partido.html.twig */
class __TwigTemplate_a66e6e888dd50f4d35633852da1fcc1a187e50c46215195b2db3046da93612f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:partido.html.twig", 1);
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
                                        <th></th>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                        <th>Incidencias</th>
                                    </tr>
                                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 30
                    echo "                                        <tr>
                                            ";
                    // line 31
                    if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                        // line 32
                        echo "                                                    <td><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                        echo "\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                            ";
                    } else {
                        // line 34
                        echo "                                                    <td>Imagen no Disponible</td>
                                            ";
                    }
                    // line 36
                    echo "                                            <td>";
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
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <h4>Vs</h4>
                        </div>      

                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <h4>Posición en la liga: ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "clasificacion", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                        <th>Incidencias</th>
                                    </tr>
                                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 61
                    echo "                                        <tr>
                                            ";
                    // line 62
                    if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                        // line 63
                        echo "                                                    <td><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                        echo "\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                            ";
                    } else {
                        // line 65
                        echo "                                                    <td>Imagen no Disponible</td>
                                            ";
                    }
                    // line 67
                    echo "                                            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_partidos");
            echo "\">Volver atrás</a>
            ";
        }
        // line 79
        echo "            ";
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Pendiente")) {
            echo "  
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Fecha prevista</h4> <p>El ";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo " a las ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaInicio", array()), "H:i"), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Cancha</h4> <p>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Árbitro designado</h4> <p>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_partidos");
            echo "\">Volver atrás</a>
            ";
        }
        // line 95
        echo "
            ";
        // line 96
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Jugandose")) {
            // line 97
            echo "                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <h4>Arbitro pitando: ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</h4>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 114
                    echo "                                        <tr>
                                            ";
                    // line 115
                    if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                        // line 116
                        echo "                                                    <td><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                        echo "\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                            ";
                    } else {
                        // line 118
                        echo "                                                    <td>Imagen no Disponible</td>
                                            ";
                    }
                    // line 120
                    echo "                                            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <h4>Vs</h4>
                        </div>      

                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 142
                    echo "                                        <tr>
                                            ";
                    // line 143
                    if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                        // line 144
                        echo "                                                <td><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                        echo "\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                            ";
                    } else {
                        // line 146
                        echo "                                                <td>Imagen no Disponible</td>
                                            ";
                    }
                    // line 148
                    echo "                                            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"";
            // line 157
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_partidos");
            echo "\">Volver atrás</a>
            ";
        }
        // line 159
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:partido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 159,  374 => 157,  367 => 152,  357 => 149,  352 => 148,  348 => 146,  342 => 144,  340 => 143,  337 => 142,  332 => 141,  321 => 133,  310 => 124,  300 => 121,  295 => 120,  291 => 118,  285 => 116,  283 => 115,  280 => 114,  275 => 113,  264 => 105,  256 => 100,  251 => 97,  249 => 96,  246 => 95,  241 => 93,  234 => 89,  228 => 86,  220 => 83,  212 => 79,  207 => 77,  200 => 72,  190 => 69,  186 => 68,  181 => 67,  177 => 65,  171 => 63,  169 => 62,  166 => 61,  161 => 60,  149 => 51,  145 => 50,  134 => 41,  124 => 38,  120 => 37,  115 => 36,  111 => 34,  105 => 32,  103 => 31,  100 => 30,  95 => 29,  83 => 20,  79 => 19,  73 => 16,  68 => 14,  65 => 13,  59 => 11,  51 => 9,  49 => 8,  43 => 5,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
                                        <th></th>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                        <th>Incidencias</th>
                                    </tr>
                                    {% for jugador in jugadores if equipoLocal.id == jugador.idEquipo%}
                                        <tr>
                                            {%if jugador.imagen != null%}
                                                    <td><img src=\"{{ asset('images/'~jugador.imagen) }}\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                            {%else%}
                                                    <td>Imagen no Disponible</td>
                                            {%endif%}
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
                                        <th></th>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                        <th>Incidencias</th>
                                    </tr>
                                    {% for jugador in jugadores if equipoVisitante.id == jugador.idEquipo%}
                                        <tr>
                                            {%if jugador.imagen != null%}
                                                    <td><img src=\"{{ asset('images/'~jugador.imagen) }}\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                            {%else%}
                                                    <td>Imagen no Disponible</td>
                                            {%endif%}
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
                <a class=\"btn btn-default\" href=\"{{ path('crivero_prueba_partidos') }}\">Volver atrás</a>
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
                <a class=\"btn btn-default\" href=\"{{ path('crivero_prueba_partidos') }}\">Volver atrás</a>
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
                                        <th></th>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    {% for jugador in jugadores if equipoLocal.id == jugador.idEquipo%}
                                        <tr>
                                            {%if jugador.imagen != null%}
                                                    <td><img src=\"{{ asset('images/'~jugador.imagen) }}\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                            {%else%}
                                                    <td>Imagen no Disponible</td>
                                            {%endif%}
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
                                        <th></th>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    {% for jugador in jugadores if equipoVisitante.id == jugador.idEquipo%}
                                        <tr>
                                            {%if jugador.imagen != null%}
                                                <td><img src=\"{{ asset('images/'~jugador.imagen) }}\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                            {%else%}
                                                <td>Imagen no Disponible</td>
                                            {%endif%}
                                            <td>{{ jugador.nombre }}</td>
                                            <td>{{ jugador.dorsal }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"{{ path('crivero_prueba_partidos') }}\">Volver atrás</a>
            {% endif %}
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:partido.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/partido.html.twig");
    }
}
