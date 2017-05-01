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
        <div class=\"panel panel-default\">
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
                                    <th>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mensaje", "pagination.mensaje");
            echo "</th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "pagination.fecha");
            echo "</th>
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
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 34
$context["notificacion"], "concepto", array()) == "Privada")) {
                    // line 35
                    echo "                                                <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionDedicada", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 40
$context["notificacion"], "concepto", array()) == "Mensaje")) {
                    echo "  
                                                <form action=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_mensajeMonitor", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 46
$context["notificacion"], "concepto", array()) == "Aula")) {
                    echo "  
                                                <form action=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verAula", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 52
$context["notificacion"], "concepto", array()) == "Aeliminada")) {
                    // line 53
                    echo "                                                <form action=\"";
                    echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_listadoAulas");
                    echo " \" method=\"GET\">
                                                    <input type=\"hidden\" name=\"id\" value=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 59
$context["notificacion"], "concepto", array()) == "AbandonoPublica")) {
                    // line 60
                    echo "                                                <form action=\"";
                    echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_misSesionesMonitores");
                    echo " \" method=\"GET\">
                                                    <input type=\"hidden\" name=\"id\" value=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "idEntidad", array()), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 66
$context["notificacion"], "concepto", array()) == "NuevoParticipantePublica")) {
                    echo "  
                                                <form action=\"";
                    // line 67
                    echo twig_escape_filter($this->env, ((("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . $this->getAttribute($context["notificacion"], "idEntidad", array())) . "/verParticipantes/") . $this->getAttribute($context["notificacion"], "idOrigen", array())), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                } elseif (($this->getAttribute(                // line 72
$context["notificacion"], "concepto", array()) == "NuevoParticipantePrivada")) {
                    echo "  
                                                <form action=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_participantePrivado", array("id" => $this->getAttribute($context["notificacion"], "idEntidad", array()))), "html", null, true);
                    echo "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                        Ver notificación
                                                    </button>
                                                </form>
                                            ";
                }
                // line 79
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 86
        echo "                <div class=\"navigation text-center\"  >
                    ";
        // line 87
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
        return "modulomonitoresmonitoresBundle:Notificaciones:notificacionesMonitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 87,  211 => 86,  205 => 82,  197 => 79,  188 => 73,  184 => 72,  176 => 67,  172 => 66,  164 => 61,  159 => 60,  157 => 59,  149 => 54,  144 => 53,  142 => 52,  134 => 47,  130 => 46,  122 => 41,  118 => 40,  109 => 35,  107 => 34,  98 => 29,  96 => 28,  91 => 26,  87 => 25,  82 => 24,  78 => 23,  70 => 18,  66 => 17,  60 => 13,  56 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
