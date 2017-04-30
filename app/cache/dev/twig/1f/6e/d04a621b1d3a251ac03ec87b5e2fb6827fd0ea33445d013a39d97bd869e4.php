<?php

/* modulomonitoresmonitoresBundle:Notificaciones:notificacionesMonitor.html.twig */
class __TwigTemplate_1f6ed04a621b1d3a251ac03ec87b5e2fb6827fd0ea33445d013a39d97bd869e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("modulomonitoresmonitoresBundle::main.html.twig");
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
        return "modulomonitoresmonitoresBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Notificaciones ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\" style=\"margin-top: -21px\">
        <div class=\"page-header\">

            <h1 class=\"t1\" style=\"margin-right: 4.5em\">Notificaciones</h1>
        </div>
        ";
        // line 12
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 13
            echo "            <h2>No hay notificaciones.</h2>
        ";
        } else {
            // line 15
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-condensed\">
                    <thead>
                        <tr>
                            <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mensaje", "pagination.mensaje");
            echo "</th>
                            <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "pagination.estado");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "pagination.fecha");
            echo "</th>
                            <th class=\"t3\">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
                // line 28
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "id", array()), "html", null, true);
                echo "\">
                                <td><strong>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "mensaje", array()), "html", null, true);
                echo "</strong></td>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "estado", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notificacion"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    ";
                // line 33
                if (($this->getAttribute($context["notificacion"], "concepto", array()) == "Publica")) {
                    // line 34
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 39
$context["notificacion"], "concepto", array()) == "Privada")) {
                    // line 40
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionDedicada", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 45
$context["notificacion"], "concepto", array()) == "Mensaje")) {
                    echo "  
                                        <form action=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_mensajeMonitor", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 51
$context["notificacion"], "concepto", array()) == "Aula")) {
                    echo "  
                                        <form action=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verAula", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 57
$context["notificacion"], "concepto", array()) == "Aeliminada")) {
                    // line 58
                    echo "                                        <form action=\"";
                    echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_listadoAulas");
                    echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 64
$context["notificacion"], "concepto", array()) == "AbandonoPublica")) {
                    // line 65
                    echo "                                        <form action=\"";
                    echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_misSesionesMonitores");
                    echo " \" method=\"GET\">
                                            <input type=\"hidden\" name=\"id\" value=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 71
$context["notificacion"], "concepto", array()) == "NuevoParticipantePublica")) {
                    echo "  
                                        <form action=\"";
                    // line 72
                    echo twig_escape_filter($this->env, ((("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . $this->getAttribute($context["notificacion"], "idEntidad", array())) . "/verParticipantes/") . $this->getAttribute($context["notificacion"], "idOrigen", array())), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                } elseif (($this->getAttribute(                // line 77
$context["notificacion"], "concepto", array()) == "NuevoParticipantePrivada")) {
                    echo "  
                                        <form action=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_participantePrivado", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver notificación
                                            </button>
                                        </form>
                                    ";
                }
                // line 84
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 91
        echo "        <div>
            <div class=\"navigation\"  >
                ";
        // line 93
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Notificaciones:notificacionesMonitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 93,  220 => 91,  214 => 87,  206 => 84,  197 => 78,  193 => 77,  185 => 72,  181 => 71,  173 => 66,  168 => 65,  166 => 64,  158 => 59,  153 => 58,  151 => 57,  143 => 52,  139 => 51,  131 => 46,  127 => 45,  118 => 40,  116 => 39,  107 => 34,  105 => 33,  100 => 31,  96 => 30,  92 => 29,  87 => 28,  83 => 27,  74 => 21,  70 => 20,  66 => 19,  60 => 15,  56 => 13,  54 => 12,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
