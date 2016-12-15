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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        
        <div id=\"cabecera\">
            ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "        </div>
        
            ";
        // line 18
        $this->displayBlock('navegation', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "            ";
    }

    // line 18
    public function block_navegation($context, array $blocks = array())
    {
        // line 19
        echo "            ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        ";
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
        return array (  125 => 28,  121 => 27,  117 => 26,  113 => 25,  108 => 24,  105 => 23,  100 => 22,  96 => 19,  93 => 18,  89 => 15,  86 => 14,  78 => 9,  75 => 8,  69 => 6,  63 => 30,  60 => 23,  58 => 22,  54 => 20,  52 => 18,  48 => 16,  46 => 14,  42 => 12,  40 => 8,  36 => 7,  32 => 6,  25 => 1,);
    }
}
