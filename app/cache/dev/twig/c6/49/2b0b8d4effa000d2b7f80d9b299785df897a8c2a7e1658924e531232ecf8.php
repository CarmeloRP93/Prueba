<?php

/* modulomonitoresmonitoresBundle:Publica:miSesionMonitores.html.twig */
class __TwigTemplate_c6492b0b8d4effa000d2b7f80d9b299785df897a8c2a7e1658924e531232ecf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("modulomonitoresmonitoresBundle::main.html.twig");
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
        return "modulomonitoresmonitoresBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div id=\"sesiondat\" class=\"container text-center\">
        <div class=\"page-header\">    
            <h1 class=\"t1\">Sesión pública - ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h1>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" >  
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 330px; margin-bottom:20px\" />        
                <div class=\"text-center\">
                    ";
        // line 14
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 15
            echo "                        <h4 class=\"terr\">Motivos: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 17
            echo "                        <h4 class=\"terr\">Motivos: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    ";
        } elseif (($this->getAttribute(        // line 18
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 19
            echo "                        <h4 class=\"terr\">Motivos: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    ";
        }
        // line 21
        echo "                </div>
            </div>

            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">   
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">  
                            ";
        // line 28
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) != "terminada")) {
            echo " 
                                <h4>Recinto de la sesión:</h4> 

                                ";
            // line 31
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "concepto", array()) == "aula")) {
                echo " 
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "nombre", array()), "html", null, true);
                echo "</td>
                                ";
            } else {
                // line 34
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "tipo", array()), "html", null, true);
                echo "</td>
                                ";
            }
            // line 36
            echo "                            ";
        }
        // line 37
        echo "                            <h4>Ejercicios a realizar:</h4> <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones por cada ejercicio:</h4> <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                            <h4>Límite de participantes:</h4> <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "lClientes", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Duración de cada sesión:</h4> <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios:</h4> <p>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " segundos</p>
                            <h4>Objetivo de la sesión:</h4> <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                            ";
        // line 45
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()) > 0)) {
            // line 46
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, (("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array())) . "/verParticipantes"), "html", null, true);
            echo "\" style=\"height: 30px; width: 130px;\" class=\"btn btn-primary\">Ver participantes</a> 
                            ";
        }
        // line 48
        echo "                            ";
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 49
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verHorario", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 100px;\" class=\"btn btn-primary\">Ver Horario</a>
                            ";
        }
        // line 51
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center\">
            ";
        // line 58
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 59
            echo "                ";
            if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == true)) {
                // line 60
                echo "                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_terminar", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\">Terminar sesión</a>
                    </div>
                ";
            } else {
                // line 63
                echo " 
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        <button class=\"btn btn-warning text-center center-block img-responsive\" class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Terminar sesión</button>
                    </div>
                ";
            }
            // line 67
            echo "  
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_suspender", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Suspender sesión</a> 
                </div>
            ";
        } elseif (($this->getAttribute(        // line 71
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 72
            echo "                <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Suspendida</button>
            ";
        } elseif (($this->getAttribute(        // line 73
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 74
            echo "                <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Sesión terminada</button>
            ";
        } elseif (($this->getAttribute(        // line 75
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 76
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_abandonarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Abandonar sesión</a>
            ";
        } elseif (($this->getAttribute(        // line 77
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 78
            echo "                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        ";
            // line 80
            echo twig_include($this->env, $context, "modulomonitoresmonitoresBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
            echo "
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        ";
            // line 83
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "concepto", array()) == "aula")) {
                echo " 
                            <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary text-center center-block img-responsive\" style=\"width: 180px;\">Modificar sesión</a> 
                        ";
            } else {
                // line 86
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarSesionDeportiva", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary text-center center-block img-responsive\" style=\"width: 180px;\">Modificar sesión</a> 
                        ";
            }
            // line 88
            echo "                    </div>
                </div> 
            ";
        } else {
            // line 91
            echo "                <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Pendiente</button>
            ";
        }
        // line 93
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Publica:miSesionMonitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 93,  254 => 91,  249 => 88,  243 => 86,  238 => 84,  234 => 83,  228 => 80,  224 => 78,  222 => 77,  217 => 76,  215 => 75,  212 => 74,  210 => 73,  207 => 72,  205 => 71,  200 => 69,  196 => 67,  189 => 63,  183 => 61,  180 => 60,  177 => 59,  175 => 58,  166 => 51,  160 => 49,  157 => 48,  151 => 46,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  131 => 39,  127 => 38,  122 => 37,  119 => 36,  113 => 34,  108 => 32,  104 => 31,  98 => 28,  89 => 21,  83 => 19,  81 => 18,  76 => 17,  74 => 16,  69 => 15,  67 => 14,  62 => 12,  54 => 7,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
