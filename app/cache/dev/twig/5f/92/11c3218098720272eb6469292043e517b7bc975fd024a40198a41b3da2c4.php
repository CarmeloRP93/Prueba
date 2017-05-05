<?php

/* CriveroPruebaBundle::main.html.twig */
class __TwigTemplate_5f9211c3218098720272eb6469292043e517b7bc975fd024a40198a41b3da2c4 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "\" style=\"width: 30px; margin-top: -5px\"> </a>
        </div>


        <div class=\"collapse navbar-collapse navbar-ex1-collapse \" >
            <ul class=\"nav navbar-nav \">
                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Usuarios <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_nuevo");
        echo "\">Nuevo usuario</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Instalaciones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_aulas");
        echo "\">Aulas</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Nueva instalacion</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_cancha_nueva");
        echo "\">Nueva cancha</a></li> 
                                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_aula_nueva");
        echo "\">Nueva aula</a></li> 
                            </ul>
                        </li>    
                    </ul>
                </li>
                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_reservas");
        echo "\">Reservas</a></li>
                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Competiciones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_competiciones");
        echo "\">Competiciones </a></li>
                        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_partidos");
        echo "\">Partidos </a></li>
                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_equipos");
        echo "\">Equipos</a></li>
                        <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_jugadores");
        echo "\">Jugadores</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_competicion_nueva");
        echo "\">Crear competición</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_sesiones");
        echo "\">Públicas</a></li>
                        <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_dedicadas");
        echo "\">Privadas</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_tarifas");
        echo "\">Tarifas</a></li>
                    </ul>
                </li>
            </ul>

            ";
        // line 71
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 72
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    ";
            // line 73
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == "director")) {
                // line 74
                echo "                        <li><a href = \"";
                echo $this->env->getExtension('routing')->getUrl("crivero_prueba_enviarMensaje");
                echo "\">enviar mensaje</a></li>
                    ";
            }
            // line 75
            echo " 
                    ";
            // line 76
            if ( !twig_length_filter($this->env, (isset($context["notificacionesSinLeer"]) ? $context["notificacionesSinLeer"] : $this->getContext($context, "notificacionesSinLeer")))) {
                echo "  
                        <li><a href = \"";
                // line 77
                echo $this->env->getExtension('routing')->getUrl("crivero_prueba_notificacionesAdmin");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaSN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a></li>
                    ";
            } else {
                // line 79
                echo "                        <li class=\"dropdown hidden-xs\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a>
                            <ul class=\"dropdown-menu\" style=\"background-color: rgba(67, 152, 147, 0.46); border-radius: 15px 15px;\">
                                ";
                // line 82
                $context["n"] = 0;
                echo " 
                                ";
                // line 83
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notificacionesSinLeer"]) ? $context["notificacionesSinLeer"] : $this->getContext($context, "notificacionesSinLeer")));
                foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                    if (((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) < 5)) {
                        echo "  
                                    ";
                        // line 84
                        if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                            // line 85
                            echo "                                       ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("crivero_prueba_sesion", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            echo "      
                                    ";
                        } elseif (($this->getAttribute(                        // line 86
$context["notificacion"], "concepto", array()) == "Privada")) {
                            // line 87
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("crivero_prueba_sesion", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 88
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Reserva")) {
                            // line 89
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("crivero_prueba_reservas_cliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 90
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Usuario")) {
                            // line 91
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("crivero_prueba_cliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 92
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Partido")) {
                            // line 93
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("crivero_prueba_editarPartido", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 94
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Mensaje")) {
                            // line 95
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("crivero_prueba_mensaje", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 96
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "PublicaEliminada")) {
                            // line 97
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("crivero_prueba_sesiones");
                            // line 98
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "PrivadaEliminada")) {
                            // line 99
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("crivero_prueba_dedicadas", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 100
                            echo "                                    ";
                        }
                        // line 101
                        echo "                                        <li class=\"text-center\"><a style=\"color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["ruta"]) ? $context["ruta"] : $this->getContext($context, "ruta")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                        echo "</a></li>
                                        <li role=\"separator\" class=\"divider\" style=\"background-color: #cecdcd\"></li>
                                    ";
                        // line 103
                        $context["n"] = ((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) + 1);
                        // line 104
                        echo "                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                                <li class=\"text-center\"><a href = \"";
                echo $this->env->getExtension('routing')->getUrl("crivero_prueba_notificacionesAdmin");
                echo "\"><font color=\"blue\"><strong>Ver todas</strong></font></a></li>
                            </ul>
                        </li>
                        <li><a class=\"hidden-sm hidden-md hidden-lg\" href = \"";
                // line 108
                echo $this->env->getExtension('routing')->getUrl("crivero_prueba_notificacionesAdmin");
                echo "\"><img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px\"/></a></li>                       
                    ";
            }
            // line 111
            echo "                    <li><a href = \"";
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_mensajes_recibidos");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/correo.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href = \"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_perfil");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\" style=\"margin-right: 12px\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logout.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                </ul>
            ";
        }
        // line 116
        echo "
            <form method=\"GET\" class=\"navbar-form navbar-center\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"query\" class=\"form-control\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" 
                           placeholder=\"Buscar usuarios, reservas\" >
                    <div class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-default\">
                            <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/search.png"), "html", null, true);
        echo "\" style=\"width: 15px;\" />  
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
";
    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
        // line 132
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 134
        $this->displayBlock('contenido', $context, $blocks);
        // line 136
        echo "        </div>

    </div>

";
    }

    // line 134
    public function block_contenido($context, array $blocks = array())
    {
        // line 135
        echo "            ";
    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        // line 143
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
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
        return array (  372 => 143,  369 => 142,  365 => 135,  362 => 134,  354 => 136,  352 => 134,  348 => 132,  345 => 131,  333 => 123,  326 => 119,  321 => 116,  313 => 113,  307 => 112,  300 => 111,  293 => 108,  286 => 105,  279 => 104,  277 => 103,  269 => 101,  266 => 100,  263 => 99,  260 => 98,  257 => 97,  254 => 96,  251 => 95,  248 => 94,  245 => 93,  242 => 92,  239 => 91,  236 => 90,  233 => 89,  230 => 88,  227 => 87,  225 => 86,  220 => 85,  218 => 84,  211 => 83,  207 => 82,  202 => 80,  199 => 79,  192 => 77,  188 => 76,  185 => 75,  179 => 74,  177 => 73,  174 => 72,  172 => 71,  164 => 66,  159 => 64,  155 => 63,  146 => 57,  141 => 55,  137 => 54,  133 => 53,  129 => 52,  122 => 48,  114 => 43,  110 => 42,  102 => 37,  98 => 36,  89 => 30,  84 => 28,  80 => 27,  68 => 18,  55 => 7,  52 => 6,  47 => 4,  41 => 2,  11 => 1,);
    }
}
