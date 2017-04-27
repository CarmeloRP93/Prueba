<?php

/* modulomonitoresmonitoresBundle:Default:miSesionMonitores.html.twig */
class __TwigTemplate_db8836e36c36a2001899461da6d98e26ccff23ac27baec5a77eeb11eab44aed5 extends Twig_Template
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
        echo "    <h3 class=\"t1\">Sesión pública: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h3>    

    <div id=\"sesiondat\" class=\"container\">

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" >  
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 330px; margin-bottom:20px\" />        
                <div class=\"text-center\">
                    ";
        // line 12
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 13
            echo "                        <h4 class=\"terr\">Motivos: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 15
            echo "                        <h4 class=\"terr\">Motivos: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>
                    ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 17
            echo "                        <h4 class=\"terr\">¡Gracias por su participación! </h4>
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
                            <h4>Aula de la sesión:</h4> <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</p>
                            <h4>Ejercicios a realizar:</h4> <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones por cada ejercicio:</h4> <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                            <h4>Límite de participantes:</h4> <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "lClientes", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Duración de cada sesión:</h4> <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios:</h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " segundos</p>
                            <h4>Objetivo de la sesión:</h4> <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                            ";
        // line 37
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()) > 0)) {
            // line 38
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, (("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array())) . "/verParticipantes"), "html", null, true);
            echo "\" style=\"height: 30px; width: 130px;\" class=\"btn btn-primary\">Ver participantes</a> 
                            ";
        }
        // line 40
        echo "                            ";
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 41
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verHorario", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 100px;\" class=\"btn btn-primary\">Ver Horario</a>
                            ";
        }
        // line 43
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center\">
            ";
        // line 50
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 51
            echo "                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_terminar", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\">Terminar sesión</a>
                </div>
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_suspender", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Suspender sesión</a> 
                </div>
            ";
        } elseif (($this->getAttribute(        // line 57
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 58
            echo "                <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Suspendida</button>
            ";
        } elseif (($this->getAttribute(        // line 59
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 60
            echo "                <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Sesión terminada</button>
            ";
        } elseif (($this->getAttribute(        // line 61
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 62
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_abandonarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Abandonar sesión</a>
            ";
        } elseif (($this->getAttribute(        // line 63
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 64
            echo "                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        ";
            // line 66
            echo twig_include($this->env, $context, "modulomonitoresmonitoresBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
            echo "
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary text-center center-block img-responsive\" style=\"width: 180px;\">Modificar sesión</a> 
                    </div>
                </div> 
            ";
        } else {
            // line 73
            echo "                <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Pendiente</button>
            ";
        }
        // line 75
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:miSesionMonitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 75,  206 => 73,  199 => 69,  193 => 66,  189 => 64,  187 => 63,  182 => 62,  180 => 61,  177 => 60,  175 => 59,  172 => 58,  170 => 57,  165 => 55,  159 => 52,  156 => 51,  154 => 50,  145 => 43,  139 => 41,  136 => 40,  130 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  89 => 21,  83 => 19,  81 => 18,  78 => 17,  76 => 16,  71 => 15,  69 => 14,  64 => 13,  62 => 12,  57 => 10,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
