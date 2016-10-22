<?php

/* CriveroPruebaBundle::main.html.twig */
class __TwigTemplate_3d54a05536215a22f3c757ea543b327210444025e965a575e6926107d2a08746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'navegation' => array($this, 'block_navegation'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Vista desde main ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"logout\">
    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_home");
        echo "\">
        <button>Log out</button>
    </form>
</div>
<div class=\"perfil\">
    <form>
        <button>Perfil</button>
    </form>
</div>
";
    }

    // line 20
    public function block_navegation($context, array $blocks = array())
    {
        // line 21
        echo "        <ul>
\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
\t\t<li><a href=\"#\">Torneos</a></li>
\t</ul>
";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 31
        $this->displayBlock('contenido', $context, $blocks);
        // line 33
        echo "        </div>
    
    </div>
            
";
    }

    // line 31
    public function block_contenido($context, array $blocks = array())
    {
        // line 32
        echo "            ";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  116 => 31,  108 => 33,  106 => 31,  102 => 29,  99 => 28,  91 => 24,  87 => 23,  83 => 22,  80 => 21,  77 => 20,  63 => 9,  60 => 8,  57 => 7,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
