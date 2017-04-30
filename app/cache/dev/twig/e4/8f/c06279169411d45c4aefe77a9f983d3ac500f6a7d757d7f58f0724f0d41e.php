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
        <div class=\"page-header\">
            <h1 class=\"t1\">";
        // line 8
        echo ((($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) ? ("Sesión pública ") : ("Sesión privada "));
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array())), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" >  
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 450px; margin-bottom:20px\"/>        
                ";
        // line 14
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 15
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancelarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block btn-block\" style=\"width: 450px;\">Cancelar</a>
                    
                ";
        } elseif (($this->getAttribute(        // line 17
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 18
            echo "                    <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 450px;\" disabled>Cancelada</button>
                    <div class=\"text-center\">
                        <h4 class=\"terr\">Motivos de cancelación: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>   
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 24
            echo "                    <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 450px;\" disabled>Rechazada</button>
                    <div class=\"text-center\">
                        <h4 class=\"terr\">Motivos de  rechazo: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 29
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 30
            echo "                    <h4 class=\"terr\">Motivos de  suspensión: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 450px;\" disabled>Suspendida</button>
                    
                ";
        } elseif (($this->getAttribute(        // line 33
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 34
            echo "                    <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 450px;\" disabled>Sesión terminada</button>
                    
                ";
        } else {
            // line 37
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aceptarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success text-center center-block img-responsive\" style=\"width: 180px;\">Aceptar Solicitud</a>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_rechazarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Rechazar Solicitud </a>               
                        </div>
                    </div>
                ";
        }
        // line 46
        echo "            </div>

            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">                   
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">    
                            <h4>Monitor</h4> <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                            <h4>Ejercicios a realizar</h4> <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones por ejercicio</h4> <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo "</p>

                            ";
        // line 56
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) != "normal")) {
            // line 57
            echo "                                <h4>Cliente</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 59
            echo "                                <h4>Número de participantes</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()), "html", null, true);
            echo "</p>
                                ";
            // line 60
            if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
                // line 61
                echo "                                    <h4>Aula de la sesión</h4> <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
                echo "</p>
                                ";
            }
            // line 63
            echo "                            ";
        }
        // line 64
        echo "                        </div> 

                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Duración de cada sesión</h4> <p>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios</h4> <p>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " segundos </p>
                            <h4>Objetivo de la sesión</h4> <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                            ";
        // line 70
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) {
            // line 71
            echo "                                <h4>Límite de participantes</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "lClientes", array()), "html", null, true);
            echo "</p>
                            ";
        } elseif (($this->getAttribute(        // line 72
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 73
            echo "                                <h4>Aula de la sesión</h4> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
            echo "</p>
                            ";
        }
        // line 75
        echo "
                            ";
        // line 76
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 77
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\" style=\"margin-top: 10px\">Ver horarios</button>
                                </form>
                            ";
        }
        // line 81
        echo "                        </div>
                        ";
        // line 82
        if (((($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "pendiente") || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "modificada"))) {
            // line 83
            echo "                            <h4>Fecha de inicio</h4> <p>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 85
        echo "                    </div>
                </div>
            </div>
        </div>

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
        return array (  234 => 85,  228 => 83,  226 => 82,  223 => 81,  215 => 77,  213 => 76,  210 => 75,  204 => 73,  202 => 72,  197 => 71,  195 => 70,  191 => 69,  187 => 68,  183 => 67,  178 => 64,  175 => 63,  169 => 61,  167 => 60,  162 => 59,  156 => 57,  154 => 56,  149 => 54,  145 => 53,  141 => 52,  133 => 46,  126 => 42,  120 => 39,  116 => 37,  111 => 34,  109 => 33,  102 => 30,  100 => 29,  94 => 26,  90 => 24,  88 => 23,  82 => 20,  78 => 18,  76 => 17,  70 => 15,  68 => 14,  64 => 13,  54 => 8,  47 => 5,  44 => 4,  37 => 3,  11 => 1,);
    }
}
