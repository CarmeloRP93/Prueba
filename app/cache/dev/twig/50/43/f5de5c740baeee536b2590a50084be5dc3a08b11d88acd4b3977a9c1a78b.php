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
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mis sesiones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_misSesionesMonitores");
        echo "\">Mis sesiones públicas</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_misSesionesDedicadas");
        echo "\">Mis sesiones privadas</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Nueva sesión</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_nuevaSesion");
        echo "\">Sesión pública</a></li> 
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_nuevaSesionDedicada");
        echo "\">Sesión privada</a></li> 
                            </ul>
                        </li>   
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_sesionesMonitores");
        echo "\">Sesiones públicas</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_sesionesDedicadas");
        echo "\">Sesiones privadas</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_listadoAulas");
        echo "\">Aulas</a></li>
            </ul>

            ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 50
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    ";
            // line 51
            if ( !twig_length_filter($this->env, (isset($context["notificacionesSinLeer"]) ? $context["notificacionesSinLeer"] : $this->getContext($context, "notificacionesSinLeer")))) {
                echo "  
                        <li><a href = \"";
                // line 52
                echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_notificacionesMonitor");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaSN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a></li>
                    ";
            } else {
                // line 54
                echo "                        <li><a href = \"";
                echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_notificacionesMonitor");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a></li>
                    ";
            }
            // line 56
            echo "                    <li><a href = \"";
            echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_mensajes_recibidosMonitor");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/correo.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_miperfilm", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user-128.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\" style=\"margin-right:12px;\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logout-128.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                </ul>
            ";
        }
        // line 61
        echo "            
            <form method=\"GET\" class=\"navbar-form navbar-center\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"query\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" 
                           placeholder=\"Buscar...\">
                    <div class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-default\">
                           <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/search-128.png"), "html", null, true);
        echo "\" style=\"width: 15px;\" />  
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 79
        $this->displayBlock('contenido', $context, $blocks);
        // line 81
        echo "        </div>

    </div>

";
    }

    // line 79
    public function block_contenido($context, array $blocks = array())
    {
        // line 80
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
        return array (  211 => 80,  208 => 79,  200 => 81,  198 => 79,  194 => 77,  191 => 76,  179 => 68,  172 => 64,  167 => 61,  159 => 58,  153 => 57,  146 => 56,  138 => 54,  131 => 52,  127 => 51,  124 => 50,  122 => 49,  116 => 46,  110 => 43,  106 => 42,  95 => 34,  91 => 33,  83 => 28,  79 => 27,  67 => 18,  54 => 7,  51 => 6,  46 => 4,  40 => 2,  11 => 1,);
    }
}
