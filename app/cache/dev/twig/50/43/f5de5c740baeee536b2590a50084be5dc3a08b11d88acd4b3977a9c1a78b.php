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
        echo "\">Públicas</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_misSesionesDedicadas");
        echo "\">Privadas</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Nueva sesión</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_recintoPublico");
        echo "\">Pública</a></li> 
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_nuevaSesionDedicada");
        echo "\">Privada</a></li> 
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
        echo "\">Públicas</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_sesionesDedicadas");
        echo "\">Privadas</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Instalaciones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_canchas");
        echo "\">Canchas</a></li>
                        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_listadoAulas");
        echo "\">Aulas</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_listadoParticipantes");
        echo "\">Participantes</a></li>
            </ul>

            ";
        // line 56
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    ";
            // line 58
            if ( !twig_length_filter($this->env, (isset($context["notificacionesSinLeer"]) ? $context["notificacionesSinLeer"] : $this->getContext($context, "notificacionesSinLeer")))) {
                echo "  
                        <li><a href = \"";
                // line 59
                echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_notificacionesMonitor");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaSN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a></li>
                            ";
            } else {
                // line 61
                echo "                        <li class=\"dropdown hidden-xs\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a>
                            <ul class=\"dropdown-menu\" style=\"background-color: rgba(67, 152, 147, 0.46); border-radius: 15px 15px;\">
                                ";
                // line 64
                $context["n"] = 0;
                echo " 
                                ";
                // line 65
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notificacionesSinLeer"]) ? $context["notificacionesSinLeer"] : $this->getContext($context, "notificacionesSinLeer")));
                foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                    if (((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) < 5)) {
                        echo "  
                                    ";
                        // line 66
                        if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                            // line 67
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_miSesionMonitores", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 68
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Privada")) {
                            // line 69
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_miSesionDedicada", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 70
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Mensaje")) {
                            // line 71
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_mensajeMonitor", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 72
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Aula")) {
                            // line 73
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_verAula", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 74
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Aeliminada")) {
                            // line 75
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_listadoAulas", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 76
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "AbandonoPublica")) {
                            // line 77
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_misSesionesMonitores", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 78
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Cancha")) {
                            // line 79
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_cancha", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 80
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "NuevoParticipantePublica")) {
                            // line 81
                            echo "                                        ";
                            $context["ruta"] = ((("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . $this->getAttribute($context["notificacion"], "idEntidad", array())) . "/verParticipantes/") . $this->getAttribute($context["notificacion"], "idOrigen", array()));
                            // line 82
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "NuevoParticipantePrivada")) {
                            // line 83
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_participantePrivado", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 84
                            echo "                                    ";
                        }
                        // line 85
                        echo "                                    <li class=\"text-center\"><a style=\"color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["ruta"]) ? $context["ruta"] : $this->getContext($context, "ruta")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                        echo "</a></li>
                                    <li role=\"separator\" class=\"divider\" style=\"background-color: #cecdcd\"></li>
                                        ";
                        // line 87
                        $context["n"] = ((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) + 1);
                        // line 88
                        echo "                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                                <li class=\"text-center\"><a href = \"";
                echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_notificacionesMonitor");
                echo "\"><font color=\"blue\"><strong>Ver todas</strong></font></a></li>
                            </ul>
                        </li>
                        <li><a class=\"hidden-sm hidden-md hidden-lg\" href = \"";
                // line 92
                echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_notificacionesMonitor");
                echo "\"><img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px\"/></a></li>                        
                            ";
            }
            // line 94
            echo "                    <li><a href = \"";
            echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_mensajes_recibidosMonitor");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/correo.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miperfilm");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\" style=\"margin-right:12px;\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logout.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                </ul>
            ";
        }
        // line 99
        echo "
            <form method=\"GET\" class=\"navbar-form navbar-center\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"query\" class=\"form-control\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" 
                           placeholder=\"Buscar...\">
                    <div class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-default\">
                            <img src=\"";
        // line 106
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

    // line 114
    public function block_body($context, array $blocks = array())
    {
        // line 115
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 117
        $this->displayBlock('contenido', $context, $blocks);
        // line 119
        echo "        </div>

    </div>

";
    }

    // line 117
    public function block_contenido($context, array $blocks = array())
    {
        // line 118
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
        return array (  322 => 118,  319 => 117,  311 => 119,  309 => 117,  305 => 115,  302 => 114,  290 => 106,  283 => 102,  278 => 99,  270 => 96,  264 => 95,  257 => 94,  250 => 92,  243 => 89,  236 => 88,  234 => 87,  226 => 85,  223 => 84,  220 => 83,  217 => 82,  214 => 81,  211 => 80,  208 => 79,  205 => 78,  202 => 77,  199 => 76,  196 => 75,  193 => 74,  190 => 73,  187 => 72,  184 => 71,  181 => 70,  178 => 69,  175 => 68,  172 => 67,  170 => 66,  163 => 65,  159 => 64,  154 => 62,  151 => 61,  144 => 59,  140 => 58,  137 => 57,  135 => 56,  129 => 53,  123 => 50,  119 => 49,  110 => 43,  106 => 42,  95 => 34,  91 => 33,  83 => 28,  79 => 27,  67 => 18,  54 => 7,  51 => 6,  46 => 4,  40 => 2,  11 => 1,);
    }
}
