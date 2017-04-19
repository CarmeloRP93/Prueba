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

    // line 4
    public function block_header($context, array $blocks = array())
    {
    }

    // line 6
    public function block_navegation($context, array $blocks = array())
    {
        // line 7
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" >
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
            <a class=\"navbar-brand\" href=\"#\"> <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width: 30px\"> </a>
        </div>


        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">mis Sesiones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_misSesionesMonitores");
        echo "\">Mis sesiones</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_misSesionesDedicadas");
        echo "\">Mis sesiones dedicadas</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_sesionesMonitores");
        echo "\">Sesiones</a></li>
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_sesionesDedicadas");
        echo "\">Sesiones dedicadas</a></li>
                    </ul>
                </li>
            </ul>

            ";
        // line 40
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 41
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href = \"";
            // line 42
            echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_miperfilm");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user-128.png"), "html", null, true);
            echo "\" style=\"width: 50%;\" /></a></li>
                    <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\"  style=\"margin-right: 12px\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logout-128.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                </ul>
            ";
        }
        // line 46
        echo "            
            <form class=\"navbar-form navbar-center\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Nombre, sesion...\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\" style=\"margin-bottom: 0px\">Buscar</button>
            </form>
        </div>
    </nav>
";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 59
        $this->displayBlock('contenido', $context, $blocks);
        // line 61
        echo "        </div>

    </div>

";
    }

    // line 59
    public function block_contenido($context, array $blocks = array())
    {
        // line 60
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
        return array (  156 => 60,  153 => 59,  145 => 61,  143 => 59,  139 => 57,  136 => 56,  123 => 46,  115 => 43,  109 => 42,  106 => 41,  104 => 40,  96 => 35,  92 => 34,  83 => 28,  79 => 27,  67 => 18,  54 => 7,  51 => 6,  46 => 4,  40 => 2,  11 => 1,);
    }
}
