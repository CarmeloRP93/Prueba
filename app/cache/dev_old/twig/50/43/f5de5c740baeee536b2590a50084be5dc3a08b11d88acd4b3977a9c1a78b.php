<?php

/* modulomonitoresmonitoresBundle::main.html.twig */
class __TwigTemplate_5043f5de5c740baeee536b2590a50084be5dc3a08b11d88acd4b3977a9c1a78b extends Twig_Template
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
        echo "
";
    }

    // line 11
    public function block_navegation($context, array $blocks = array())
    {
        // line 12
        echo " <nav class=\"navbar navbar-default\" role=\"navigation\">
            <!-- El logotipo y el icono que despliega el menú se agrupan
                 para mostrarlos mejor en los dispositivos móviles -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Desplegar navegación</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Logotipo</a>
            </div>


            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_sesionesMonitores");
        echo "\">Sesiones</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_sesionesDedicadas");
        echo "\">Sesiones dedicadas</a></li>
                </ul>

                <form class=\"navbar-form navbar-center\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Nombre, sesion...\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
 
                    <a href = #>Perfil</a>
                    <a href = \"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_home");
        echo "\">Log out</a>
                </form>
            </div>
        </nav>
";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 48
        $this->displayBlock('contenido', $context, $blocks);
        // line 50
        echo "        </div>

    </div>

";
    }

    // line 48
    public function block_contenido($context, array $blocks = array())
    {
        // line 49
        echo "            ";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  130 => 48,  122 => 50,  120 => 48,  116 => 46,  113 => 45,  104 => 40,  91 => 30,  87 => 29,  68 => 12,  65 => 11,  60 => 8,  57 => 7,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
