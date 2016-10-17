<?php

/* ::base.html.twig */
class __TwigTemplate_d354397de892ff617cd2f52224457a71cc7aefa32593027bc5bd0e36efb1bc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navegation' => array($this, 'block_navegation'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <nav>
            ";
        // line 9
        $this->displayBlock('navegation', $context, $blocks);
        // line 14
        echo "\t</nav>
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_navegation($context, array $blocks = array())
    {
        // line 10
        echo "\t\t<ul>
\t\t\t<li><a href=\"#\">Contacto</a></li>
\t\t</ul>
            ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  81 => 17,  74 => 10,  71 => 9,  66 => 6,  60 => 5,  54 => 19,  51 => 18,  49 => 17,  44 => 14,  42 => 9,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
