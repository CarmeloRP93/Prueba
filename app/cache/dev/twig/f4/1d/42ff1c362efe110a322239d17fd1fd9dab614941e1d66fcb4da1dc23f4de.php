<?php

/* CriveroPruebaBundle:Competiciones:partido.html.twig */
class __TwigTemplate_f41d42ff1c362efe110a322239d17fd1fd9dab614941e1d66fcb4da1dc23f4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        // line 15
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Pendiente")) {
            echo "  
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Fecha prevista</h4> <p>El ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo " a las ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaInicio", array()), "H:i"), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Cancha</h4> <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                            <h4>Árbitro designado</h4> <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Jugandose")) {
            // line 32
            echo "                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <h4>Arbitro pitando: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</h4>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 48
                    echo "                                        <tr>
                                            <td>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <h4>Vs</h4>
                        </div>      

                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th>Jugador</th>
                                        <th>Dorsal</th>
                                    </tr>
                                    ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 70
                    echo "                                        <tr>
                                            <td>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 81
        echo "
            ";
        // line 82
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Finalizado")) {
            echo "  
                <div class=\"panel-body\">  
                    <h4>Arbitrado por ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</h4>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <h4>Posición en la liga: ";
            // line 88
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
            // line 96
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 97
                    echo "                                        <tr>
                                            <td>";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                                </tbody>
                            </table>
                        </div>

                        <div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
                            <h4>Vs</h4>
                        </div>      

                        <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5\">
                            <h4>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</h4>
                            <h4>Posición en la liga: ";
            // line 113
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
            // line 121
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 122
                    echo "                                        <tr>
                                            <td>";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
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
            ";
        }
        // line 134
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
        return array (  322 => 134,  314 => 128,  304 => 125,  300 => 124,  296 => 123,  293 => 122,  288 => 121,  277 => 113,  273 => 112,  262 => 103,  252 => 100,  248 => 99,  244 => 98,  241 => 97,  236 => 96,  225 => 88,  221 => 87,  215 => 84,  210 => 82,  207 => 81,  199 => 75,  189 => 72,  185 => 71,  182 => 70,  177 => 69,  167 => 62,  156 => 53,  146 => 50,  142 => 49,  139 => 48,  134 => 47,  124 => 40,  116 => 35,  111 => 32,  109 => 31,  106 => 30,  98 => 25,  92 => 22,  84 => 19,  77 => 15,  73 => 13,  67 => 11,  59 => 9,  57 => 8,  51 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
