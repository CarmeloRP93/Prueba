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
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array())), "html", null, true);
        echo "</h1><br>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\" >  
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 450px; margin-bottom:20px\"/>        
                ";
        // line 12
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 13
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancelarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block btn-block\" style=\"width: 450px;\">Cancelar</a>

                ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 16
            echo "                    <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 450px;\" disabled>Cancelada</button>
                    <div class=\"text-center\">
                        <h4 class=\"terr\">Motivos de cancelación: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>   
                    </div>

                ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 22
            echo "                    <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 450px;\" disabled>Rechazada</button>
                    <div class=\"text-center\">
                        <h4 class=\"terr\">Motivos de  rechazo: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    </div>

                ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 28
            echo "                    <h4 class=\"terr\">Motivos de  suspensión: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 450px;\" disabled>Suspendida</button>

                ";
        } elseif (($this->getAttribute(        // line 31
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 32
            echo "                    <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 450px;\" disabled>Sesión terminada</button>

                ";
        } else {
            // line 35
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aceptarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success text-center center-block img-responsive\" style=\"width: 180px;\">Aceptar Solicitud</a>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_rechazarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Rechazar Solicitud </a>               
                        </div>
                    </div>
                ";
        }
        // line 44
        echo "            </div>

            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">                   
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">    
                            <h4>Monitor</h4> <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                            <h4>Ejercicios a realizar</h4> <p>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones por ejercicio</h4> <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo "</p>

                            ";
        // line 54
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) != "normal")) {
            // line 55
            echo "                                <h4>Cliente</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 57
            echo "                                <h4>Número de participantes</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()), "html", null, true);
            echo "</p>
                                ";
            // line 58
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
                // line 59
                echo "                                    <h4>Recinto de la sesión:</h4> 
                                    ";
                // line 60
                if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "concepto", array()) == "aula")) {
                    echo " 
                                        <td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "nombre", array()), "html", null, true);
                    echo "</td>
                                    ";
                } else {
                    // line 63
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "tipo", array()), "html", null, true);
                    echo "</td>
                                    ";
                }
                // line 65
                echo "                                ";
            }
            // line 66
            echo "                            ";
        }
        // line 67
        echo "                            ";
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "pendiente")) {
            // line 68
            echo "                                <h4>Recinto de la sesión:</h4> 
                                ";
            // line 69
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "concepto", array()) == "aula")) {
                echo " 
                                    <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "nombre", array()), "html", null, true);
                echo " 
                                        <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_disponibilidad", array("id" => (isset($context["recintoId"]) ? $context["recintoId"] : $this->getContext($context, "recintoId")))), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                echo "\" style=\"width: 13px\" />
                                        </a>
                                    </td>
                                ";
            } else {
                // line 76
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "tipo", array()), "html", null, true);
                echo " 
                                        <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha_disponibilidad", array("id" => (isset($context["recintoId"]) ? $context["recintoId"] : $this->getContext($context, "recintoId")))), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                echo "\" style=\"width: 13px\" />
                                        </a>
                                    </td>
                                ";
            }
            // line 82
            echo "                            ";
        }
        // line 83
        echo "                        </div> 

                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Duración de cada sesión</h4> <p>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios</h4> <p>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " segundos </p>
                            <h4>Objetivo de la sesión</h4> <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                            ";
        // line 89
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) {
            // line 90
            echo "                                <h4>Límite de participantes</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "lClientes", array()), "html", null, true);
            echo "</p>
                            ";
        } elseif (($this->getAttribute(        // line 91
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 92
            echo "                                <h4>Recinto de la sesión</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "nombre", array()), "html", null, true);
            echo "</p>
                            ";
        }
        // line 94
        echo "
                            ";
        // line 95
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 96
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\" style=\"margin-top: 10px\">Ver horarios</button>
                                </form>
                            ";
        }
        // line 100
        echo "                        </div>
                        ";
        // line 101
        if (((($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "pendiente") || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "modificada"))) {
            // line 102
            echo "                            <h4>Fecha de inicio</h4> <p>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 104
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"text-center\">
            ";
        // line 109
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")) {
            // line 110
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-default\">
                    Volver atrás
                </a>
            ";
        } else {
            // line 114
            echo "                ";
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) {
                // line 115
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones");
                echo "\" class=\"btn btn-default\">
                        Volver atrás
                    </a>
                ";
            } else {
                // line 119
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("crivero_prueba_dedicadas");
                echo "\" class=\"btn btn-default\">
                        Volver atrás
                    </a>
                ";
            }
            // line 123
            echo "            ";
        }
        // line 124
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
        return array (  330 => 124,  327 => 123,  319 => 119,  311 => 115,  308 => 114,  300 => 110,  298 => 109,  291 => 104,  285 => 102,  283 => 101,  280 => 100,  272 => 96,  270 => 95,  267 => 94,  261 => 92,  259 => 91,  254 => 90,  252 => 89,  248 => 88,  244 => 87,  240 => 86,  235 => 83,  232 => 82,  225 => 78,  221 => 77,  216 => 76,  209 => 72,  205 => 71,  201 => 70,  197 => 69,  194 => 68,  191 => 67,  188 => 66,  185 => 65,  179 => 63,  174 => 61,  170 => 60,  167 => 59,  165 => 58,  160 => 57,  154 => 55,  152 => 54,  147 => 52,  143 => 51,  139 => 50,  131 => 44,  124 => 40,  118 => 37,  114 => 35,  109 => 32,  107 => 31,  100 => 28,  98 => 27,  92 => 24,  88 => 22,  86 => 21,  80 => 18,  76 => 16,  74 => 15,  68 => 13,  66 => 12,  62 => 11,  53 => 7,  47 => 5,  44 => 4,  37 => 3,  11 => 1,);
    }
}
