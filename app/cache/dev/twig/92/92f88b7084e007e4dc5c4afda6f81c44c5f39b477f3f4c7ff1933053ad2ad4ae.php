<?php

/* moduloclientesclienteBundle::main.html.twig */
class __TwigTemplate_84447f4b7555ad9090c461e4f2c8469c430711b447b23575ba4bac40abd823c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "moduloclientesclienteBundle::main.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_homeCliente");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width: 30px; margin-top: -5px\"> </a>
        </div>


        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">

                <li class=\"dropdown\">
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_reservasClientes");
        echo "\">Reservas</a></li>
                </li>

                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_canchasClientes");
        echo "\">Canchas</a></li>

                ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 30
            echo "                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Competiciones <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_competicionesClientes");
            echo "\">Competiciones </a></li>
                            <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_equiposClientes");
            echo "\"> Mis equipos </a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_competicion_nueva");
            echo "\">Crear competición</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_misSesionesClientes");
            echo "\">Apuntadas</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-submenu\">
                                <a tabindex=\"-1\" href=\"#\">No apuntadas</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_sesionesClientes");
            echo "\">Públicas</a></li>                    
                                    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_sesionesPrivadasClientes");
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 58
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    ";
            // line 59
            if ( !twig_length_filter($this->env, (isset($context["notificacionesSinLeer"]) ? $context["notificacionesSinLeer"] : $this->getContext($context, "notificacionesSinLeer")))) {
                echo "  
                        <li><a href = \"";
                // line 60
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_notificacionesCliente");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/campanaSN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a></li>
                            ";
            } else {
                // line 62
                echo "                        <li class=\"dropdown hidden-xs\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" /></a>
                            <ul class=\"dropdown-menu\" style=\"background-color: rgba(67, 152, 147, 0.46); border-radius: 15px 15px;\">
                                ";
                // line 65
                $context["n"] = 0;
                echo " 
                                ";
                // line 66
                $context['_parent'] = $context;
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
                                $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_miSesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                                // line 71
                                echo "                                        ";
                            } else {
                                // line 72
                                echo "                                            ";
                                $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                                // line 73
                                echo "                                        ";
                            }
                            // line 74
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Privada")) {
                            // line 75
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 76
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Reserva")) {
                            // line 77
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_reservaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 78
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Usuario")) {
                            // line 79
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_miPerfil", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 80
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Competicion")) {
                            // line 81
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 82
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Cancha")) {
                            // line 83
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 84
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Mensaje")) {
                            // line 85
                            echo "                                        ";
                            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_mensajeCliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 86
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Celiminada")) {
                            // line 87
                            echo "                                        <li class=\"text-center\"><form action=\"";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_canchasClientes");
                            echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                            // line 88
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                            echo "\">
                                            <input style=\"border:none; background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"";
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
                            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
                            // line 94
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["notificacion"], "concepto", array()) == "Tarifas")) {
                            // line 95
                            echo "                                        <li class=\"text-center\"><form action=\"";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_sesionesClientes");
                            echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                            // line 96
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                            echo "\">
                                            <input style=\"border:none; background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"";
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
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_homeCliente");
                            echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                            // line 102
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                            echo "\">
                                            <input style=\"border:none; background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"";
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
                            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_notificacionesCliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array())));
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
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_notificacionesCliente");
                echo "\"><font color=\"blue\"><strong>Ver todas</strong></font></a></li>
                            </ul>
                        </li>
                        <li><a class=\"hidden-sm hidden-md hidden-lg\" href = \"";
                // line 118
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_notificacionesCliente");
                echo "\"><img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/campanaCN.png"), "html", null, true);
                echo "\" style=\"width: 18px\"/></a></li>
                            ";
            }
            // line 120
            echo "                    <li><a href = \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_mensajes_recibidosCliente");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/correo.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_miPerfil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/user.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_logout");
            echo "\" style=\"margin-right:12px;\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/logout.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/search.png"), "html", null, true);
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
        return array (  398 => 145,  395 => 144,  389 => 146,  387 => 144,  383 => 142,  380 => 141,  367 => 132,  360 => 128,  355 => 125,  347 => 122,  341 => 121,  334 => 120,  327 => 118,  320 => 115,  313 => 114,  311 => 113,  308 => 112,  300 => 110,  297 => 109,  294 => 108,  291 => 107,  288 => 106,  286 => 105,  281 => 103,  277 => 102,  272 => 101,  269 => 100,  267 => 99,  262 => 97,  258 => 96,  253 => 95,  250 => 94,  247 => 93,  244 => 92,  242 => 91,  237 => 89,  233 => 88,  228 => 87,  225 => 86,  222 => 85,  219 => 84,  216 => 83,  213 => 82,  210 => 81,  207 => 80,  204 => 79,  201 => 78,  198 => 77,  195 => 76,  192 => 75,  189 => 74,  186 => 73,  183 => 72,  180 => 71,  177 => 70,  174 => 69,  171 => 68,  169 => 67,  162 => 66,  158 => 65,  153 => 63,  150 => 62,  143 => 60,  139 => 59,  136 => 58,  134 => 57,  130 => 55,  121 => 49,  117 => 48,  109 => 43,  99 => 36,  94 => 34,  90 => 33,  85 => 30,  83 => 29,  78 => 27,  72 => 24,  59 => 16,  46 => 5,  43 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %} Vista desde main{% endblock %}
{% block header %}{% endblock %}
{% block navegation %}
    <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"opacity: 0.9\" role=\"navigation\" >
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
            <a class=\"navbar-brand\" href=\"{{url('moduloclientes_cliente_homeCliente')}}\"> <img src=\"{{ asset('images/logo.png') }}\" style=\"width: 30px; margin-top: -5px\"> </a>
        </div>


        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">

                <li class=\"dropdown\">
                <li><a href=\"{{url('moduloclientes_cliente_reservasClientes')}}\">Reservas</a></li>
                </li>

                <li><a href=\"{{url('moduloclientes_cliente_canchasClientes')}}\">Canchas</a></li>

                {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Competiciones <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{url('moduloclientes_cliente_competicionesClientes')}}\">Competiciones </a></li>
                            <li><a href=\"{{url('moduloclientes_cliente_equiposClientes')}}\"> Mis equipos </a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"{{url('moduloclientes_cliente_competicion_nueva')}}\">Crear competición</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{url('moduloclientes_cliente_misSesionesClientes')}}\">Apuntadas</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-submenu\">
                                <a tabindex=\"-1\" href=\"#\">No apuntadas</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{url('moduloclientes_cliente_sesionesClientes')}}\">Públicas</a></li>                    
                                    <li><a href=\"{{url('moduloclientes_cliente_sesionesPrivadasClientes')}}\">Privadas</a></li>                          
                                </ul>
                            </li>   
                        </ul>
                    </li>
                {% endif %}
            </ul>

            {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if not notificacionesSinLeer|length %}  
                        <li><a href = \"{{url('moduloclientes_cliente_notificacionesCliente')}}\"><img src=\"{{asset('images/campanaSN.png')}}\" style=\"width: 18px;\" /></a></li>
                            {% else %}
                        <li class=\"dropdown hidden-xs\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{asset('images/campanaCN.png')}}\" style=\"width: 18px;\" /></a>
                            <ul class=\"dropdown-menu\" style=\"background-color: rgba(67, 152, 147, 0.46); border-radius: 15px 15px;\">
                                {% set n = 0 %} 
                                {% for notificacion in notificacionesSinLeer if n < 5 %}  
                                    {% set flag = 0 %}
                                    {% if notificacion.concepto == \"Publica\"%}
                                        {% if notificacion.idEntidad in app.user.sesiones %}
                                            {% set ruta = url('moduloclientes_cliente_miSesionClientes', {id: notificacion.idEntidad})%}
                                        {% else %}
                                            {% set ruta = url('moduloclientes_cliente_sesionClientes', {id: notificacion.idEntidad})%}
                                        {% endif %}
                                    {% elseif notificacion.concepto == \"Privada\"%}
                                        {% set ruta = url('moduloclientes_cliente_sesionClientes', {id: notificacion.idEntidad})%}
                                    {% elseif notificacion.concepto == \"Reserva\"%}
                                        {% set ruta = url('moduloclientes_cliente_reservaClientes', {id: notificacion.idEntidad})%}
                                    {% elseif notificacion.concepto == \"Usuario\"%}
                                        {% set ruta = url('moduloclientes_cliente_miPerfil', {id: notificacion.idEntidad})%}
                                    {% elseif notificacion.concepto == \"Competicion\"%}
                                        {% set ruta = url('moduloclientes_cliente_competicionClientes', {id: notificacion.idEntidad})%}
                                    {% elseif notificacion.concepto == \"Cancha\"%}
                                        {% set ruta = url('moduloclientes_cliente_canchaClientes', {id: notificacion.idEntidad})%}
                                    {% elseif notificacion.concepto == \"Mensaje\"%}
                                        {% set ruta = url('moduloclientes_cliente_mensajeCliente', {id: notificacion.idEntidad})%}
                                    {% elseif notificacion.concepto == \"Celiminada\"%}
                                        <li class=\"text-center\"><form action=\"{{ path('moduloclientes_cliente_canchasClientes') }} \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"{{ notificacion.idEntidad }}\">
                                            <input style=\"border:none; background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"{{ notificacion.mensaje }}\" >
                                        </form></li>
                                        {% set flag = 1 %}
                                    {% elseif notificacion.concepto == \"AbandonoPublica\"%}
                                        {% set ruta = url('moduloclientes_cliente_sesionClientes', {id: notificacion.idEntidad})%}
                                    {% elseif notificacion.concepto == \"Tarifas\"%}
                                        <li class=\"text-center\"><form action=\"{{ path('moduloclientes_cliente_sesionesClientes') }} \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"{{ notificacion.idEntidad }}\">
                                            <input style=\"border:none; background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"{{ notificacion.mensaje }}\">
                                        </form></li>
                                        {% set flag = 1 %}
                                    {% elseif notificacion.concepto == \"Publicacion\"%}
                                        <li class=\"text-center\"><form action=\"{{ path('moduloclientes_cliente_homeCliente') }} \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"{{ notificacion.idEntidad }}\">
                                            <input style=\"border:none; background: transparent; color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" type=\"submit\" value=\"{{ notificacion.mensaje }}\">
                                        </form></li>
                                        {% set flag = 1 %}
                                    {% else %}
                                        {% set ruta = url('moduloclientes_cliente_notificacionesCliente', {id: notificacion.idEntidad})%}
                                    {% endif %}
                                    {% if flag == 0 %}
                                        <li class=\"text-center\"><a style=\"color: white; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;\" href=\"{{ ruta }}\">{{ notificacion.mensaje }}</a></li>
                                    {% endif %}
                                    <li role=\"separator\" class=\"divider\" style=\"background-color: #cecdcd\"></li>
                                        {% set n = n + 1 %}
                                    {% endfor %}
                                <li class=\"text-center\"><a href = \"{{url('moduloclientes_cliente_notificacionesCliente')}}\"><font color=\"blue\"><strong>Ver todas</strong></font></a></li>
                            </ul>
                        </li>
                        <li><a class=\"hidden-sm hidden-md hidden-lg\" href = \"{{url('moduloclientes_cliente_notificacionesCliente')}}\"><img  src=\"{{asset('images/campanaCN.png')}}\" style=\"width: 18px\"/></a></li>
                            {% endif %}
                    <li><a href = \"{{path('moduloclientes_cliente_mensajes_recibidosCliente')}}\"><img src=\"{{asset('images/correo.png')}}\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"{{url('moduloclientes_cliente_miPerfil', {id:app.user.id} )}}\"><img src=\"{{asset('images/user.png')}}\" style=\"width: 18px;\" /></a></li>
                    <li><a href=\"{{path('crivero_prueba_logout')}}\" style=\"margin-right:12px;\"><img src=\"{{asset('images/logout.png')}}\" style=\"width: 18px;\" /></a></li>
                </ul>
            {% endif %}

            <form method=\"GET\" class=\"navbar-form navbar-center\" role=\"search\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"query\" class=\"form-control\" value=\"{{app.request.get('query')}}\" 
                           placeholder=\"Buscar...\" >
                    <div class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-default\">
                            <img src=\"{{asset('images/search.png')}}\" style=\"width: 15px;\" />  
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>

{% endblock %}
{% block body %}
    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            {% block contenido %}
            {% endblock %}
        </div>
    </div>
{% endblock %}", "moduloclientesclienteBundle::main.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/main.html.twig");
    }
}
