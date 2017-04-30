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
        echo "
    <div class=\"container\" style=\"margin-top: -21px\">
        <div class=\"page-header\">

            <h1 class=\"t1\" style=\"margin-right: 4.5em\">Notificaciones</h1>
        </div>
        ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "            <h2>No hay notificaciones</h2>
        ";
        } else {
            // line 13
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-condensed\">
                    <thead>
                        <tr>
                            <th>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mensaje", "pagination.mensaje");
            echo "</th>
                            <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "pagination.estado");
            echo "</th>
                            <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "pagination.fecha");
            echo "</th>
                            <th class=\"t3\">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                // line 26
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "id", array()), "html", null, true);
                echo "\">
                                <td><strong>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                echo "</strong></td>
                                <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "estado", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notificacion"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    ";
                // line 31
                if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                    // line 32
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 37
$context["notificacion"], "concepto", array()) == "Privada")) {
                    // line 38
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 43
$context["notificacion"], "concepto", array()) == "Reserva")) {
                    // line 44
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_reservaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 49
$context["notificacion"], "concepto", array()) == "Usuario")) {
                    // line 50
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_miPerfil", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 55
$context["notificacion"], "concepto", array()) == "Cancha")) {
                    // line 56
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 61
$context["notificacion"], "concepto", array()) == "Mensaje")) {
                    // line 62
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajeCliente", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 67
$context["notificacion"], "concepto", array()) == "Celiminada")) {
                    // line 68
                    echo "                                        <form action=\"";
                    echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_canchasClientes");
                    echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                }
                // line 75
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 82
        echo "        <div>
            <div class=\"navigation\"  >
                ";
        // line 84
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
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
        return array (  205 => 84,  201 => 82,  195 => 78,  187 => 75,  178 => 69,  173 => 68,  171 => 67,  162 => 62,  160 => 61,  151 => 56,  149 => 55,  140 => 50,  138 => 49,  129 => 44,  127 => 43,  118 => 38,  116 => 37,  107 => 32,  105 => 31,  100 => 29,  96 => 28,  92 => 27,  87 => 26,  83 => 25,  74 => 19,  70 => 18,  66 => 17,  60 => 13,  56 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
