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
            'header' => array($this, 'block_header'),
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
        
        <div id=\"cabecera\">
            ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "        </div>
        
        <nav>
            ";
        // line 15
        $this->displayBlock('navegation', $context, $blocks);
        // line 17
        echo "\t</nav>
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
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

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "            ";
    }

    // line 15
    public function block_navegation($context, array $blocks = array())
    {
        // line 16
        echo "            ";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
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
        return array (  99 => 21,  94 => 20,  90 => 16,  87 => 15,  83 => 11,  80 => 10,  75 => 6,  69 => 5,  63 => 22,  60 => 21,  58 => 20,  53 => 17,  51 => 15,  46 => 12,  44 => 10,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
