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
            $context['_parent'] = (array) $context;
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
            $context['_parent'] = (array) $context;
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
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_partidos");
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
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_partidos");
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
            $context['_parent'] = (array) $context;
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
            $context['_parent'] = (array) $context;
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
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_partidos");
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
        return "CriveroPruebaBundle:Competiciones:partido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 135,  326 => 133,  319 => 128,  309 => 125,  305 => 124,  302 => 123,  297 => 122,  287 => 115,  276 => 106,  266 => 103,  262 => 102,  259 => 101,  254 => 100,  244 => 93,  236 => 88,  231 => 85,  229 => 84,  226 => 83,  221 => 81,  214 => 77,  208 => 74,  200 => 71,  192 => 67,  187 => 65,  180 => 60,  170 => 57,  166 => 56,  162 => 55,  159 => 54,  154 => 53,  143 => 45,  139 => 44,  128 => 35,  118 => 32,  114 => 31,  110 => 30,  107 => 29,  102 => 28,  91 => 20,  87 => 19,  81 => 16,  76 => 14,  73 => 13,  67 => 11,  59 => 9,  57 => 8,  51 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
