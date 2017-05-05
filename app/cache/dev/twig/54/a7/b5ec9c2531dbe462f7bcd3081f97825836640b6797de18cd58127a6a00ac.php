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
                                <th></th>
                                <th>";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sesión", "s.nombre");
        echo "</th>
                                <th>";
        // line 19
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "s.estado");
        echo "</th>
                                <th>";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cliente", "s.monitor");
        echo "</th>
                                <th>";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Participantes", "s.nClientes");
        echo "</th>
                                <td><strong>Acciones</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
            // line 27
            echo "                                <tr>
                                    <td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["sesion"], "imagen", array())), "html", null, true);
            echo "\" class=\"img-responsive center-block \" style=\"max-width: 50px;height: 45px\"/></td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 30
            if ((($this->getAttribute($context["sesion"], "estado", array()) == "cancelada") || ($this->getAttribute($context["sesion"], "estado", array()) == "suspendida"))) {
                // line 31
                echo "                                        <td><strong style=\"color: red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                echo "</strong></td>
                                    ";
            } elseif (($this->getAttribute(            // line 32
$context["sesion"], "estado", array()) == "validada")) {
                // line 33
                echo "                                            <td><strong style=\"color: greenyellow\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                echo "</strong></td>
                                    ";
            } else {
                // line 35
                echo "                                            <td><strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                echo "</strong></td>
                                    ";
            }
            // line 37
            echo "                                    <td>";
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["sesion"], "cliente", array()) == "normal")) ? ("Varios") : ($this->getAttribute($context["sesion"], "cliente", array()))), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nClientes", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "lClientes", array()), "html", null, true);
            echo "</td>

                                    <td class=\"actions\">
                                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\" style=\"margin-bottom: 0\">
                                            Ver
                                        </a>
                                        ";
            // line 44
            if (($this->getAttribute($context["sesion"], "estado", array()) == "validada")) {
                echo "     
                                            <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                Ver horarios
                                            </a>
                                        ";
            }
            // line 49
            echo "                                        ";
            // line 52
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"navigation text-center\" style=\"margin: -10px\">
                    ";
        // line 59
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
                <a class=\"btn btn-default\" href=\"";
        // line 63
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
        return array (  174 => 63,  167 => 59,  161 => 55,  153 => 52,  151 => 49,  144 => 45,  140 => 44,  134 => 41,  126 => 38,  121 => 37,  115 => 35,  109 => 33,  107 => 32,  102 => 31,  100 => 30,  96 => 29,  92 => 28,  89 => 27,  85 => 26,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
