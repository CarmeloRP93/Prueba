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
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"opacity: 0.9\" role=\"navigation\" >
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
            <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_homeCliente");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width: 30px; margin-top: -5px\"> </a>
        </div>


        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">

                <li class=\"dropdown\">
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_reservasClientes");
        echo "\">Reservas</a></li>
                </li>

                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_canchasClientes");
        echo "\">Canchas</a></li>

                ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 30
            echo "                    <li class=\"dropdown\">
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
            echo "\">Privadas</a></li>                          
                                </ul>
                            </li>   
                        </ul>
                    </li>
                ";
        }
        // line 55
        echo "            </ul>

            ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 58
            echo "                <ul class=\"nav navbar-nav navbar-right\">
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
                echo "                        <li class=\"dropdown hidden-xs\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a>
                            <ul class=\"dropdown-menu\" style=\"background-color: rgba(67, 152, 147, 0.46); border-radius: 15px 15px;\">
                                ";
                // line 65
                $context["n"] = 0;
                echo " 
                                ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notificacionesSinLeer"]) ? $context["notificacionesSinLeer"] : $this->getContext($context, "notificacionesSinLeer")));
                foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                    if (((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) < 5)) {
                        echo "  
                                    ";
                        // line 67
                        $context["flag"] = 0;
                        // line 68
                        echo "                                    ";
                        if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                            // line 69
                            echo "                                        ";
                            if (twig_in_filter($this->getAttribute($context["notificacion"], "idEntidad", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sesiones", array()))) {
                                // line 70
                                echo "                                            ";
                                $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_miSesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                                // line 71
                                echo "                                        ";
                            } else {
                                // line 72
                                echo "                                            ";
                                $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                                // line 73
                                echo "                                        ";
                            }
                            // line 74
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Privada")) {
                            // line 75
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 76
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Reserva")) {
                            // line 77
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_reservaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 78
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Usuario")) {
                            // line 79
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_miPerfil", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 80
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Competicion")) {
                            // line 81
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 82
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Cancha")) {
                            // line 83
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 84
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Mensaje")) {
                            // line 85
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_mensajeCliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 86
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Celiminada")) {
                            // line 87
                            echo "                                        <li class=\"text-center\"><form action=\"";
                            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_canchasClientes");
                            echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                            // line 88
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                            echo "\">
                                            <input style=\"background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"";
                            // line 89
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                            echo "\" >
                                        </form></li>
                                        ";
                            // line 91
                            $context["flag"] = 1;
                            // line 92
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "AbandonoPublica")) {
                            // line 93
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 94
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Tarifas")) {
                            // line 95
                            echo "                                        <li class=\"text-center\"><form action=\"";
                            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionesClientes");
                            echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                            // line 96
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                            echo "\">
                                            <input style=\"background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"";
                            // line 97
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                            echo "\">
                                        </form></li>
                                        ";
                            // line 99
                            $context["flag"] = 1;
                            // line 100
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publicacion")) {
                            // line 101
                            echo "                                        <li class=\"text-center\"><form action=\"";
                            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_homeCliente");
                            echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                            // line 102
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                            echo "\">
                                            <input style=\"background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"";
                            // line 103
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                            echo "\">
                                        </form></li>
                                        ";
                            // line 105
                            $context["flag"] = 1;
                            // line 106
                            echo "                                    ";
                        } else {
                            // line 107
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_notificacionesCliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 108
                            echo "                                    ";
                        }
                        // line 109
                        echo "                                    ";
                        if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == 0)) {
                            // line 110
                            echo "                                        <li class=\"text-center\"><a style=\"color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" href=\"";
                            echo twig_escape_filter($this->env, (isset($context["ruta"]) ? $context["ruta"] : $this->getContext($context, "ruta")), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                            echo "</a></li>
                                    ";
                        }
                        // line 112
                        echo "                                    <li role=\"separator\" class=\"divider\" style=\"background-color: #cecdcd\"></li>
                                        ";
                        // line 113
                        $context["n"] = ((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) + 1);
                        // line 114
                        echo "                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "                                <li class=\"text-center\"><a href = \"";
                echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_notificacionesCliente");
                echo "\"><font color=\"blue\"><strong>Ver todas</strong></font></a></li>
                            </ul>
                        </li>
                        <li><a class=\"hidden-sm hidden-md hidden-lg\" href = \"";
                // line 118
                echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_notificacionesCliente");
                echo "\"><img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px\"/></a></li>
                            ";
            }
            // line 120
            echo "                    <li><a href = \"";
            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajes_recibidosCliente");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/correo.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_miPerfil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 122
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\" style=\"margin-right:12px;\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logout.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                </ul>
            ";
        }
        // line 125
        echo "
            <form method=\"GET\" class=\"navbar-form navbar-center\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"query\" class=\"form-control\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" 
                           placeholder=\"Buscar...\" >
                    <div class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-default\">
                            <img src=\"";
        // line 132
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

    // line 141
    public function block_body($context, array $blocks = array())
    {
        // line 142
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 144
        $this->displayBlock('contenido', $context, $blocks);
        // line 146
        echo "        </div>
    </div>
";
    }

    // line 144
    public function block_contenido($context, array $blocks = array())
    {
        // line 145
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
        return array (  406 => 145,  403 => 144,  397 => 146,  395 => 144,  391 => 142,  388 => 141,  375 => 132,  368 => 128,  363 => 125,  355 => 122,  349 => 121,  342 => 120,  335 => 118,  328 => 115,  321 => 114,  319 => 113,  316 => 112,  308 => 110,  305 => 109,  302 => 108,  299 => 107,  296 => 106,  294 => 105,  289 => 103,  285 => 102,  280 => 101,  277 => 100,  275 => 99,  270 => 97,  266 => 96,  261 => 95,  258 => 94,  255 => 93,  252 => 92,  250 => 91,  245 => 89,  241 => 88,  236 => 87,  233 => 86,  230 => 85,  227 => 84,  224 => 83,  221 => 82,  218 => 81,  215 => 80,  212 => 79,  209 => 78,  206 => 77,  203 => 76,  200 => 75,  197 => 74,  194 => 73,  191 => 72,  188 => 71,  185 => 70,  182 => 69,  179 => 68,  177 => 67,  170 => 66,  166 => 65,  161 => 63,  158 => 62,  151 => 60,  147 => 59,  144 => 58,  142 => 57,  138 => 55,  129 => 49,  125 => 48,  117 => 43,  107 => 36,  102 => 34,  98 => 33,  93 => 30,  91 => 29,  86 => 27,  80 => 24,  67 => 16,  54 => 5,  51 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
