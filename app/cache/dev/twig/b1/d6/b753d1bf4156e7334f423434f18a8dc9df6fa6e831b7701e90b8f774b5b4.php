<?php

/* moduloclientesclienteBundle:Mensajes:notificacionesCliente.html.twig */
class __TwigTemplate_b1d6b753d1bf4156e7334f423434f18a8dc9df6fa6e831b7701e90b8f774b5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("moduloclientesclienteBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "moduloclientesclienteBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Notificaciones ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Notificaciones</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "                    <h2>No hay notificaciones</h2>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-condensed\">
                            <thead>
                                <tr>
                                    <th>Mensaje</th>
                                    <th>Enviado</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                // line 24
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "id", array()), "html", null, true);
                echo "\">
                                        <td><strong>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                echo "</strong></td>
                                        <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notificacion"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            ";
                // line 28
                if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                    // line 29
                    echo "                                                ";
                    if (twig_in_filter($this->getAttribute($context["notificacion"], "idEntidad", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sesiones", array()))) {
                        // line 30
                        echo "                                                    <form action=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_miSesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                        echo "\">
                                                    ";
                    } else {
                        // line 32
                        echo "                                                        <form action=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                        echo "\">
                                                        ";
                    }
                    // line 34
                    echo "                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 38
$context["notificacion"], "concepto", array()) == "Privada")) {
                    // line 39
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 44
$context["notificacion"], "concepto", array()) == "Reserva")) {
                    // line 45
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_reservaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 50
$context["notificacion"], "concepto", array()) == "Usuario")) {
                    // line 51
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_miPerfil", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 56
$context["notificacion"], "concepto", array()) == "Cancha")) {
                    // line 57
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 62
$context["notificacion"], "concepto", array()) == "Mensaje")) {
                    // line 63
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajeCliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 68
$context["notificacion"], "concepto", array()) == "Celiminada")) {
                    // line 69
                    echo "                                                    <form action=\"";
                    echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_canchasClientes");
                    echo " \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 75
$context["notificacion"], "concepto", array()) == "AbandonoPublica")) {
                    // line 76
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo " \" method=\"GET\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 81
$context["notificacion"], "concepto", array()) == "Tarifas")) {
                    // line 82
                    echo "                                                    <form action=\"";
                    echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionesClientes");
                    echo " \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 88
$context["notificacion"], "concepto", array()) == "Publicacion")) {
                    // line 89
                    echo "                                                    <form action=\"";
                    echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_homeCliente");
                    echo " \" method=\"GET\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                } elseif (($this->getAttribute(                // line 95
$context["notificacion"], "concepto", array()) == "Competicion")) {
                    // line 96
                    echo "                                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo " \" method=\"GET\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                            Ver notificación
                                                        </button>
                                                    </form>
                                                ";
                }
                // line 102
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 109
        echo "                <div class=\"navigation text-center\"  >
                    ";
        // line 110
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Mensajes:notificacionesCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 110,  250 => 109,  244 => 105,  236 => 102,  226 => 96,  224 => 95,  216 => 90,  211 => 89,  209 => 88,  201 => 83,  196 => 82,  194 => 81,  185 => 76,  183 => 75,  175 => 70,  170 => 69,  168 => 68,  159 => 63,  157 => 62,  148 => 57,  146 => 56,  137 => 51,  135 => 50,  126 => 45,  124 => 44,  115 => 39,  113 => 38,  107 => 34,  101 => 32,  95 => 30,  92 => 29,  90 => 28,  85 => 26,  81 => 25,  76 => 24,  72 => 23,  60 => 13,  56 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
