<?php

/* moduloclientesclienteBundle::main.html.twig */
class __TwigTemplate_7e81a51135b4badac170c56395ac437579ac4b10390ee0a8246ba3699638a9d7 extends Twig_Template
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
        echo " Vista desde main";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
    }

    // line 4
    public function block_navegation($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ((twig_date_format_filter($this->env, "now", "dmY") < $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fechaPagar", array()))) {
            // line 6
            echo "        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" >
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
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
            echo "\" style=\"width: 30px\"> </a>
            </div>


            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">

                    <li class=\"dropdown\">
                    <li><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_reservasClientes");
            echo "\">Mis reservas</a></li>
                    </li>

                    <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_canchasClientes");
            echo "\">Canchas</a></li>

                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Competiciones <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_competicionesClientes");
            echo "\">Competiciones </a></li>
                            <li><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_equiposClientes");
            echo "\"> Mis equipos </a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_competicion_nueva");
            echo "\">Crear competición</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_misSesionesClientes");
            echo "\">Apuntadas</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-submenu\">
                                <a tabindex=\"-1\" href=\"#\">No apuntadas</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_sesionesClientes");
            echo "\">Públicas</a></li>                    
                                    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_sesionesPrivadasClientes");
            echo "\">Privadas</a></li>                          </ul>
                            </li>   
                        </ul>
                    </li>

                    <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_pagoSesion");
            echo "\">Pagar</a></li>
                </ul>

                ";
            // line 57
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 58
                echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
                // line 59
                if ( !twig_length_filter($this->env, (isset($context["notificacionesSinLeer"]) ? $context["notificacionesSinLeer"] : $this->getContext($context, "notificacionesSinLeer")))) {
                    echo "  
                            <li><a href = \"";
                    // line 60
                    echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_notificacionesCliente");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaSN.png"), "html", null, true);
                    echo "\" style=\"width: 18px;\" /></a></li>
                                ";
                } else {
                    // line 62
                    echo "                            <li><a href = \"";
                    echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_notificacionesCliente");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                    echo "\" style=\"width: 18px;\" /></a></li>
                                ";
                }
                // line 64
                echo "                        <li><a href = \"";
                echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajes_recibidosCliente");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/correo.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a></li>
                        <li><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_miPerfil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user-128.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a></li>
                        <li><a href=\"";
                // line 66
                echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
                echo "\" style=\"margin-right:12px;\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logout-128.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a></li>
                    </ul>
                ";
            }
            // line 69
            echo "
                <form method=\"GET\" class=\"navbar-form navbar-center\" role=\"search\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"query\" class=\"form-control\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
            echo "\" 
                               placeholder=\"Buscar usuarios, reservas\" >
                        <div class=\"input-group-btn\">
                            <button type=\"submit\" class=\"btn btn-default\">
                                <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/search-128.png"), "html", null, true);
            echo "\" style=\"width: 15px;\" />  
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
    ";
        } else {
            // line 84
            echo "        <div class=\"container\">
            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\" style=\"margin-right:12px;\">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        // line 96
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 98
        $this->displayBlock('contenido', $context, $blocks);
        // line 100
        echo "        </div>
    </div>
";
    }

    // line 98
    public function block_contenido($context, array $blocks = array())
    {
        // line 99
        echo "            ";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 99,  240 => 98,  234 => 100,  232 => 98,  228 => 96,  225 => 95,  214 => 88,  208 => 84,  197 => 76,  190 => 72,  185 => 69,  177 => 66,  171 => 65,  164 => 64,  156 => 62,  149 => 60,  145 => 59,  142 => 58,  140 => 57,  134 => 54,  126 => 49,  122 => 48,  114 => 43,  104 => 36,  99 => 34,  95 => 33,  87 => 28,  81 => 25,  70 => 17,  57 => 6,  54 => 5,  51 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
