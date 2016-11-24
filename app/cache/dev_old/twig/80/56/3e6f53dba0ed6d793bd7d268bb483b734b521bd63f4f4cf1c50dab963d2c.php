<?php

/* CriveroPruebaBundle:Default:sesion.html.twig */
class __TwigTemplate_80563e6f53dba0ed6d793bd7d268bb483b734b521bd63f4f4cf1c50dab963d2c extends Twig_Template
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div style=\"text-align: center\">
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " - Abdomen</h2>
    </div>
    ";
        // line 8
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "Solicitud Presentada")) {
            // line 9
            echo "        <div id=\"accionesesion\" style=\"margin-left: 18px; margin-right: 18px;\">
            <button style=\"height: 25px;\">Aceptar Solicitud</button>
            <button style=\"float: right; height: 25px;\">Rechazar Solicitud </button>
        </div>
    ";
        }
        // line 14
        echo "    <div id=\"sesiondat\">
        <div id=\"sesionfot\" style=\"margin-left: 16em; margin-top: 20px;\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/abdd.jpg"), "html", null, true);
        echo "\" style=\"width: 65%;\" />        
        </div>
        <div id=\"colder\" style=\"float: right; margin-right: 6em;\">
            <h4>Tiempo estimado:</h4> <p>40-45 minutos</p>
            <h4>Descanso entre ejercicios:</h4> <p>2-3 minutos</p>
            <h4>Objetivos:</h4> <p>Definir abdominales y tonificar el vientre </p>
        </div>
        <div id=\"colizq\" style=\"margin-left: 7.5em;\">
            <h4>Monitor:</h4> <p>Jordan</p>
            <h4>Ejercicios:</h4> <p>Plancha dinámica, Elevación de piernas y Patadas de rana</p>
            <h4>Repeticiones:</h4> <p>3/Ejercicio</p>
            <h4>Material:</h4> <p>Nuestro propio cuerpo para completar esta efectiva sesion para el abdomen</p>
        </div>
    </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  65 => 14,  58 => 9,  56 => 8,  51 => 6,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
