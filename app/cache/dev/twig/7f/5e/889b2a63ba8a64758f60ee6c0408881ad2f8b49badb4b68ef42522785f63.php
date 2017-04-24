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
        echo "    <h3 class=\"t1\">Sesión privada: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h3>
    <div id=\"sesiondat\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"width: 50%; margin-bottom: 1%\" />        
        </div>

        ";
        // line 10
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 11
            echo "            <div class=\"accionesesion text-center\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_solEliminarSesionDedicada", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\">Solicitar eliminar sesion dedicada</a> 
            </div>
        ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "solEliminar")) {
            // line 15
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\" disabled=\"disabled\">Solicitud de eliminacion enviada</button>
                <h4>Motivos:</h4> <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "motivos", array()), "html", null, true);
            echo "</p>
            </div>   
        ";
        } elseif (($this->getAttribute(        // line 19
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 20
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\" disabled=\"disabled\">Cancelada</button>
                <h4>Motivos:</h4> <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 24
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 25
            echo "            <div class=\"text-center\">
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarSesionDedicada", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 250px;\" class=\"btn btn-primary\">Modificar sesion dedicada</a>
                ";
            // line 27
            echo twig_include($this->env, $context, "modulomonitoresmonitoresBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
            echo "
                <h4>Motivos:</h4> <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } else {
            // line 31
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-warning\" disabled=\"disabled\">pendiente</button>
            </div>
        ";
        }
        // line 35
        echo "
        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Aula de la sesión: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</h4>
                <h4>Monitor: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</h4>
                <h4>Ejercicios a realizar: ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</h4>
                <h4>Repeticiones por cada ejercicio: ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</h4>
                ";
        // line 42
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 43
            echo "                    <h4>Horario: <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verHorario", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 100px;\" class=\"btn btn-primary\">Ver Horario</a> </h4>
                ";
        }
        // line 45
        echo "                <h4>Duración de cada sesión: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</h4>
                <h4>Descanso entre ejercicios: ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</h4>

                <h4>Objetivo de la sesión: ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</h4>
                ";
        // line 49
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()) > 0)) {
            // line 50
            echo "                    <h4>Participante: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
            echo " 
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verParticipantes", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 130px;\" class=\"btn btn-primary\">Ver participantes</a> </h4> 
                    ";
        }
        // line 53
        echo "            </div>
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
        return array (  172 => 53,  167 => 51,  162 => 50,  160 => 49,  156 => 48,  151 => 46,  146 => 45,  140 => 43,  138 => 42,  134 => 41,  130 => 40,  126 => 39,  122 => 38,  117 => 35,  111 => 31,  105 => 28,  101 => 27,  97 => 26,  94 => 25,  92 => 24,  87 => 22,  83 => 20,  81 => 19,  76 => 17,  72 => 15,  70 => 14,  65 => 12,  62 => 11,  60 => 10,  54 => 7,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
