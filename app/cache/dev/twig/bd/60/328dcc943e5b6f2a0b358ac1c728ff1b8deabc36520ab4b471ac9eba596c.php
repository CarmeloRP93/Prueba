<?php

/* CriveroPruebaBundle:Default:alumno.html.twig */
class __TwigTemplate_bd60328dcc943e5b6f2a0b358ac1c728ff1b8deabc36520ab4b471ac9eba596c extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Detalles del Alumno</h1>
<div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "matricula", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
