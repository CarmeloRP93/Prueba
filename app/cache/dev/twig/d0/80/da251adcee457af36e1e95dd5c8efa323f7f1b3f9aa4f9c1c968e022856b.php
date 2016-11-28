<?php

/* CriveroPruebaBundle:Default:torneo.html.twig */
class __TwigTemplate_d080da251adcee457af36e1e95dd5c8efa323f7f1b3f9aa4f9c1c968e022856b extends Twig_Template
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
            'detalles' => array($this, 'block_detalles'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h2>Detalles del Torneo</h2>
        ";
        // line 7
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estadoTorneo", array()) == "Solicitud Presentada")) {
            // line 8
            echo "            <button class=\"btn btn-default\">Aceptar Solicitud</button>
            <button class=\"btn btn-danger\">Rechazar Solicitud </button>
        ";
        }
        // line 11
        echo "        ";
        $this->displayBlock('detalles', $context, $blocks);
        // line 18
        echo "    </div>
";
    }

    // line 11
    public function block_detalles($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estadoTorneo", array()) == "Validado")) {
            // line 13
            echo "                <h3>Ver información de equipos</h3>
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "equipos", array()), "html", null, true);
            echo "<p>
                <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getUrl("crivero_prueba_equipos");
            echo "\">Ver los datos de los equipos</a>
            ";
        }
        // line 16
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:torneo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  81 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  63 => 18,  60 => 11,  55 => 8,  53 => 7,  49 => 5,  46 => 4,  38 => 3,  11 => 1,);
    }
}
