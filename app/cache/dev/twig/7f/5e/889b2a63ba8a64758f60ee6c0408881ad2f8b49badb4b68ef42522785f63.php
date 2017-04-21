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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"t1\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
        echo "</h1>
    <h3 class=\"t1\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h3>
    <div id=\"sesiondat\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"width: 50%; margin-bottom: 1%\" />        
        </div>

        ";
        // line 11
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 12
            echo "            <div class=\"accionesesion text-center\">
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_solEliminarSesionDedicada", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\">Solicitar eliminar sesion dedicada</a> 
                <div class=\"row\">
                    <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                        <h4>Aula:</h4> <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "aula", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div id=\"colder\" class=\"col-md-4\">
                        <h4>Horario:</h4> <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "horario", array()), "html", null, true);
            echo " </p>
                    </div>
                </div>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "solEliminar")) {
            // line 24
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\" disabled=\"disabled\">Solicitud de eliminacion enviada</button>
                <h4>Motivos:</h4> <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "motivos", array()), "html", null, true);
            echo "</p>
            </div>   
        ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 29
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\" disabled=\"disabled\">Cancelada</button>
                <h4>Motivos:</h4> <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 33
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 34
            echo "            <div class=\"text-center\">
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarSesionDedicada", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 250px;\" class=\"btn btn-primary\">Modificar sesion dedicada</a>
                ";
            // line 36
            echo twig_include($this->env, $context, "modulomonitoresmonitoresBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
            echo "
                <h4>Motivos:</h4> <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } else {
            // line 40
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-warning\" disabled=\"disabled\">pendiente</button>
            </div>
        ";
        }
        // line 44
        echo "
        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                <h4>Ejercicios:</h4> <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                <h4>Repeticiones:</h4> <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                <h4>Objetivo:</h4> <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
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
        return array (  167 => 54,  163 => 53,  159 => 52,  153 => 49,  149 => 48,  145 => 47,  140 => 44,  134 => 40,  128 => 37,  124 => 36,  120 => 35,  117 => 34,  115 => 33,  110 => 31,  106 => 29,  104 => 28,  99 => 26,  95 => 24,  93 => 23,  86 => 19,  80 => 16,  74 => 13,  71 => 12,  69 => 11,  63 => 8,  57 => 5,  50 => 4,  47 => 3,  37 => 2,  11 => 1,);
    }
}
