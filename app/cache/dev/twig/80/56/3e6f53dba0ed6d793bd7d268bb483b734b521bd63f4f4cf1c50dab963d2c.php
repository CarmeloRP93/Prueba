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
        echo "    <h2>Detalles de la Sesion</h2>
    ";
        // line 6
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "Solicitud Presentada")) {
            // line 7
            echo "        <button>Aceptar Solicitud</button>
        <button>Rechazar Solicitud </button>
    ";
        }
        // line 10
        echo "    
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
        return array (  58 => 10,  53 => 7,  51 => 6,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
