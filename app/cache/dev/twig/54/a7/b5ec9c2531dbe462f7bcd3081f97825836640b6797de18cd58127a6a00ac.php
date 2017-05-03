<?php

/* CriveroPruebaBundle:Sesiones:sesionesMonitor.html.twig */
class __TwigTemplate_54a7b5ec9c2531dbe462f7bcd3081f97825836640b6797de18cd58127a6a00ac extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))), "html", null, true);
        echo " - Sesiones ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))), "html", null, true);
        echo " - Sesiones</h1>
        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover \">
                        <thead>
                            <tr>
                                <th>";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sesión", "s.nombre");
        echo "</th>
                                <th>";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "s.estado");
        echo "</th>
                                <th>";
        // line 19
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cliente", "s.monitor");
        echo "</th>
                                <th>";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Participantes", "s.nClientes");
        echo "</th>
                                <td><strong>Acciones</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
            // line 26
            echo "                                <tr>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 28
            if ((($this->getAttribute($context["sesion"], "estado", array()) == "cancelada") || ($this->getAttribute($context["sesion"], "estado", array()) == "suspendida"))) {
                // line 29
                echo "                                        <td><strong style=\"color: red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                echo "</strong></td>
                                    ";
            } elseif (($this->getAttribute(            // line 30
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
            echo "                                    <td>";
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["sesion"], "cliente", array()) == "normal")) ? ("Varios") : ($this->getAttribute($context["sesion"], "cliente", array()))), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nClientes", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "lClientes", array()), "html", null, true);
            echo "</td>

                                    <td class=\"actions\">
                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\" style=\"margin-bottom: 0\">
                                            Ver
                                        </a>
                                        ";
            // line 42
            if (($this->getAttribute($context["sesion"], "estado", array()) == "validada")) {
                echo "     
                                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver horarios
                                            </a>
                                        ";
            }
            // line 47
            echo "                                        ";
            // line 50
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"navigation text-center\" style=\"margin: -10px\">
                    ";
        // line 57
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
                <a class=\"btn btn-default\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_monitor", array("id" => (isset($context["mId"]) ? $context["mId"] : $this->getContext($context, "mId")))), "html", null, true);
        echo "\">Volver atrás</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:sesionesMonitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  162 => 57,  156 => 53,  148 => 50,  146 => 47,  139 => 43,  135 => 42,  129 => 39,  121 => 36,  116 => 35,  110 => 33,  104 => 31,  102 => 30,  97 => 29,  95 => 28,  91 => 27,  88 => 26,  84 => 25,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
