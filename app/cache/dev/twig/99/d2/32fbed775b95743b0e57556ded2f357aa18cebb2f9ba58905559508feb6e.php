<?php

/* modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig */
class __TwigTemplate_99d232fbed775b95743b0e57556ded2f357aa18cebb2f9ba58905559508feb6e extends Twig_Template
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
        echo "    <div class=\"text-center\">
        <h3>
            Sesion ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
        echo "
            <small class=\"text-muted\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</small>
        </h3>
    </div>

    <div id=\"sesiondat\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />        
        </div>

        ";
        // line 16
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 17
            echo "            <div class=\"accionesesion text-center\" style=\"margin-left: 30px; margin-right: 10px;\">
                <button style=\"height: 30px; width: 250px;\" class=\"btn btn-danger col-sm-3 col-sm-offset-1\">Solicitar eliminar sesion dedicada </button>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 20
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 21
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\" disabled=\"disabled\">Cancelada</button>
                <h4>Motivos:</h4> <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 25
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 26
            echo "            <div class=\"text-center\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarSesionDedicada", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 250px; margin-right: 100px;\" class=\"btn btn-primary\">Modificar sesion dedicada</a>
                <button style=\"height: 30px; width: 250px;\" class=\"btn btn-danger\">Eliminar sesion dedicada</button>
                <h4>Motivos:</h4> <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } else {
            // line 32
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-warning\" disabled=\"disabled\">pendiente</button>
            </div>
        ";
        }
        // line 36
        echo "
        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                <h4>Ejercicios:</h4> <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                <h4>Repeticiones:</h4> <p>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                <h4>Objetivo:</h4> <p>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 46,  138 => 45,  134 => 44,  128 => 41,  124 => 40,  120 => 39,  115 => 36,  109 => 32,  103 => 29,  98 => 27,  95 => 26,  93 => 25,  88 => 23,  84 => 21,  82 => 20,  77 => 17,  75 => 16,  69 => 13,  60 => 7,  54 => 6,  50 => 4,  47 => 3,  37 => 2,  11 => 1,);
    }
}
