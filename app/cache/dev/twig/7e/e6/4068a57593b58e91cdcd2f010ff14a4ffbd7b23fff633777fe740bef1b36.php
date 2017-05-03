<?php

/* CriveroPruebaBundle:Sesiones:sesionesDedicadas.html.twig */
class __TwigTemplate_7ee64068a57593b58e91cdcd2f010ff14a4ffbd7b23fff633777fe740bef1b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
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
        return "CriveroPruebaBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Sesiones Privadas";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesiones Privadas</h1>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "                    <h2>No se encontraron sesiones privadas</h2>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "s.nombre");
            echo "</th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "s.estado");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Monitor", "s.monitor");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cliente", "s.cliente");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 26
                echo "                                    <tr>
                                        <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 28
                if ((($this->getAttribute($context["sesion"], "estado", array()) == "cancelada") || ($this->getAttribute($context["sesion"], "estado", array()) == "suspendida"))) {
                    // line 29
                    echo "                                            <td><strong style=\"color: red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                    echo "</strong></td>
                                            ";
                } elseif (($this->getAttribute(                // line 30
$context["sesion"], "estado", array()) == "validada")) {
                    // line 31
                    echo "                                            <td><strong style=\"color: greenyellow\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                    echo "</strong></td>
                                            ";
                } else {
                    // line 33
                    echo "                                            <td><strong> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                }
                // line 35
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "cliente", array()), "html", null, true);
                echo "</td>

                                        <td class=\"actions\">
                                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                                Ver
                                            </a>
                                            ";
                // line 42
                if ((($this->getAttribute($context["sesion"], "estado", array()) == "pendiente") || ($this->getAttribute($context["sesion"], "estado", array()) == "modificada"))) {
                    // line 43
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aceptarSesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-success\">
                                                    Aceptar
                                                </a>
                                                <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_rechazarSesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-danger btn-delete\">
                                                    Rechazar
                                                </a>
                                            ";
                } elseif (($this->getAttribute(                // line 49
$context["sesion"], "estado", array()) == "validada")) {
                    // line 50
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancelarSesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-danger btn-delete\">
                                                    Cancelar
                                                </a>
                                            ";
                }
                // line 54
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 61
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 62
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
        return "CriveroPruebaBundle:Sesiones:sesionesDedicadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  174 => 61,  168 => 57,  160 => 54,  152 => 50,  150 => 49,  144 => 46,  137 => 43,  135 => 42,  129 => 39,  123 => 36,  118 => 35,  112 => 33,  106 => 31,  104 => 30,  99 => 29,  97 => 28,  93 => 27,  90 => 26,  86 => 25,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  60 => 13,  56 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
