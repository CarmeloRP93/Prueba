<?php

/* modulomonitoresmonitoresBundle:Default:miSesionDedicada.html.twig */
class __TwigTemplate_7f5e889b2a63ba8a64758f60ee6c0408881ad2f8b49badb4b68ef42522785f63 extends Twig_Template
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
        echo "    <h1 class=\"t1\">Sesión privada: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h1>

    <div id=\"sesiondat\" class=\"container\">

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" >  
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 330px; margin-bottom:20px\"/>        
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
                            ";
        // line 31
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 32
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verHorario", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 100px;\" class=\"btn btn-primary\">Ver Horario</a>
                            ";
        }
        // line 34
        echo "                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Duración de cada sesión:</h4> <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios:</h4> <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " segundos</p>
                            <h4>Objetivo de la sesión:</h4> <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                            ";
        // line 39
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()) > 0)) {
            // line 40
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_participantePrivado", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 180px;\" class=\"btn btn-primary\">Ver info del participante</a>
                            ";
        }
        // line 42
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center\">         
            ";
        // line 49
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 50
            echo "                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_terminar", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\">Terminar sesión</a>
                </div>
                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_suspenderSesionDedicada", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Suspender sesión</a> 
                </div>
            ";
        } elseif (($this->getAttribute(        // line 56
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 57
            echo "                <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Suspendida</button>
            ";
        } elseif (($this->getAttribute(        // line 58
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 59
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_abandonarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Abandonar sesión</a>
            ";
        } elseif (($this->getAttribute(        // line 60
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 61
            echo "                <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Sesión terminada</button>
            ";
        } elseif (($this->getAttribute(        // line 62
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 63
            echo "                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        ";
            // line 65
            echo twig_include($this->env, $context, "modulomonitoresmonitoresBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
            echo "
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarSesionDedicada", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary text-center center-block img-responsive\" style=\"width: 200px;\">Modificar sesión</a>
                    </div>
                </div>
            ";
        } else {
            // line 72
            echo "                <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Pendiente</button>
            ";
        }
        // line 74
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:miSesionDedicada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 74,  203 => 72,  196 => 68,  190 => 65,  186 => 63,  184 => 62,  181 => 61,  179 => 60,  174 => 59,  172 => 58,  169 => 57,  167 => 56,  162 => 54,  156 => 51,  153 => 50,  151 => 49,  142 => 42,  136 => 40,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  118 => 34,  112 => 32,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  89 => 21,  83 => 19,  81 => 18,  78 => 17,  76 => 16,  71 => 15,  69 => 14,  64 => 13,  62 => 12,  57 => 10,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
