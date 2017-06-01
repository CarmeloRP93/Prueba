<?php

/* CriveroPruebaBundle:Sesiones:sesion.html.twig */
class __TwigTemplate_e48fc06279169411d45c4aefe77a9f983d3ac500f6a7d757d7f58f0724f0d41e extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div id=\"sesiondat\" class=\"container\">
        <h1 class=\"t1 page-header\">";
        // line 7
        echo ((($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) ? ("Sesión pública ") : ("Sesión privada "));
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array())), "html", null, true);
        echo "</h1><br>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\" >  
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 450px; margin-bottom:20px\"/>        
                        ";
        // line 14
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 15
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancelarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"noMargenBoton btn btn-danger text-center center-block btn-block\" style=\"width: 450px;\">Cancelar</a>

                        ";
        } elseif (($this->getAttribute(        // line 17
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 18
            echo "                            <button class=\"btn btn-danger text-center center-block img-responsive noMargenBoton\" style=\"width: 450px;\" disabled>Cancelada</button>
                            
                        ";
        } elseif (($this->getAttribute(        // line 20
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 21
            echo "                            <button class=\"btn btn-danger text-center center-block img-responsive noMargenBoton\" style=\"width: 450px;\" disabled>Rechazada</button>

                        ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 24
            echo "                            <button class=\"btn btn-danger text-center center-block img-responsive noMargenBoton\" style=\"width: 450px;\" disabled>Suspendida</button>

                        ";
        } elseif (($this->getAttribute(        // line 26
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 27
            echo "                            <button class=\"btn btn-warning text-center center-block img-responsive noMargenBoton\" style=\"width: 450px;\" disabled>Finalizada</button>

                        ";
        } else {
            // line 30
            echo "                            <div class=\"row\">
                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aceptarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success text-center center-block img-responsive noMargenBoton\" style=\"width: 180px;\">Aceptar Solicitud</a>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_rechazarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive noMargenBoton\" style=\"width: 180px;\">Rechazar Solicitud </a>               
                                </div>
                            </div>
                        ";
        }
        // line 39
        echo "                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">                   
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">    
                            <h4>Monitor</h4> <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                            <h4>Ejercicios a realizar</h4> <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones por ejercicio</h4> <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo "</p>

                            ";
        // line 51
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 52
            echo "                                ";
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) {
                // line 53
                echo "                                    <h4>Número de participantes</h4> <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()), "html", null, true);
                echo "</p>
                                ";
            }
            // line 55
            echo "                            ";
        }
        // line 56
        echo "                            ";
        if ((($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "pendiente") || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada"))) {
            // line 57
            echo "                                <h4>Recinto de la sesión:</h4> 
                                ";
            // line 58
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "concepto", array()) == "aula")) {
                echo " 
                                    <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "nombre", array()), "html", null, true);
                echo " 
                                        <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_disponibilidad", array("id" => (isset($context["recintoId"]) ? $context["recintoId"] : $this->getContext($context, "recintoId")))), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                echo "\" style=\"width: 13px\" />
                                        </a>
                                    </td>
                                ";
            } else {
                // line 65
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "tipo", array()), "html", null, true);
                echo " 
                                        <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha_disponibilidad", array("id" => (isset($context["recintoId"]) ? $context["recintoId"] : $this->getContext($context, "recintoId")))), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                echo "\" style=\"width: 13px\" />
                                        </a>
                                    </td>
                                ";
            }
            // line 71
            echo "                            ";
        }
        // line 72
        echo "                        </div> 

                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Duración de cada sesión</h4> <p>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios</h4> <p>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " segundos </p>
                            <h4>Objetivo de la sesión</h4> <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                            ";
        // line 78
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            echo " 
                                <h4>Turno de comienzo</h4> 
                                ";
            // line 80
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "horaComienzo", array()) == 1)) {
                // line 81
                echo "                                    <p>Mañana</p>
                                ";
            } else {
                // line 83
                echo "                                    <p>Tarde</p>
                                ";
            }
            // line 85
            echo "                            ";
        }
        // line 86
        echo "                            ";
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) {
            // line 87
            echo "                                <h4>Límite de participantes</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "lClientes", array()), "html", null, true);
            echo "</p>
                            ";
        } elseif (($this->getAttribute(        // line 88
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 89
            echo "                                <h4>Cliente</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
            echo "</p>
                            ";
        }
        // line 91
        echo "
                            ";
        // line 92
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 93
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\" style=\"margin-top: 10px\">Ver horarios</button>
                                </form>
                            ";
        }
        // line 97
        echo "                            ";
        if (((($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "pendiente") || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "modificada"))) {
            // line 98
            echo "                                    <h4>Turno de comienzo</h4> 
                                    ";
            // line 99
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "horaComienzo", array()) == 1)) {
                // line 100
                echo "                                        <p>Mañana</p>
                                    ";
            } else {
                // line 102
                echo "                                        <p>Tarde</p>
                                    ";
            }
            // line 104
            echo "                                </div>
                                <h4 class=\"text-center\">Fecha de inicio</h4> <p>";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 107
        echo "                       
                    </div>
                    ";
        // line 109
        if ((($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada") || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida"))) {
            // line 110
            echo "                        <h4>Motivos</h4>
                        <div class=\"text-center\">
                            <h4 class=\"terr\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>   
                        </div>
                    ";
        }
        // line 115
        echo "                </div>
            </div> 
        </div>
        <div class=\"text-center\">
            ";
        // line 119
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")) {
            // line 120
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-default\">
                    Volver atrás
                </a>
            ";
        } else {
            // line 124
            echo "                ";
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) {
                // line 125
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones");
                echo "\" class=\"btn btn-default\">
                        Volver atrás
                    </a>
                ";
            } else {
                // line 129
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("crivero_prueba_dedicadas");
                echo "\" class=\"btn btn-default\">
                        Volver atrás
                    </a>
                ";
            }
            // line 133
            echo "            ";
        }
        // line 134
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 134,  338 => 133,  330 => 129,  322 => 125,  319 => 124,  311 => 120,  309 => 119,  303 => 115,  297 => 112,  293 => 110,  291 => 109,  287 => 107,  282 => 105,  279 => 104,  275 => 102,  271 => 100,  269 => 99,  266 => 98,  263 => 97,  255 => 93,  253 => 92,  250 => 91,  244 => 89,  242 => 88,  237 => 87,  234 => 86,  231 => 85,  227 => 83,  223 => 81,  221 => 80,  216 => 78,  212 => 77,  208 => 76,  204 => 75,  199 => 72,  196 => 71,  189 => 67,  185 => 66,  180 => 65,  173 => 61,  169 => 60,  165 => 59,  161 => 58,  158 => 57,  155 => 56,  152 => 55,  146 => 53,  143 => 52,  141 => 51,  136 => 49,  132 => 48,  128 => 47,  118 => 39,  111 => 35,  105 => 32,  101 => 30,  96 => 27,  94 => 26,  90 => 24,  88 => 23,  84 => 21,  82 => 20,  78 => 18,  76 => 17,  70 => 15,  68 => 14,  64 => 13,  53 => 7,  47 => 5,  44 => 4,  37 => 3,  11 => 1,);
    }
}
