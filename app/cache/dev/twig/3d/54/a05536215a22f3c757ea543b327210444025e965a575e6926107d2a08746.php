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

    // line 6
    public function block_navegation($context, array $blocks = array())
    {
        // line 7
        echo "        <ul>
\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
\t\t<li><a href=\"#\">Contacto</a></li>
\t</ul>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 17
        $this->displayBlock('contenido', $context, $blocks);
        // line 19
        echo "        </div>
    
    </div>
            
";
    }

    // line 17
    public function block_contenido($context, array $blocks = array())
    {
        // line 18
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
        return array (  98 => 18,  95 => 17,  87 => 19,  85 => 17,  81 => 15,  78 => 14,  70 => 10,  66 => 9,  62 => 8,  59 => 7,  56 => 6,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
