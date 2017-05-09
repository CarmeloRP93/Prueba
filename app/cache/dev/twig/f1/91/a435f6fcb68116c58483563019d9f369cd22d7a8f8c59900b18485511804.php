<?php

/* CriveroPruebaBundle:Sesiones:sesionesCancha.html.twig */
class __TwigTemplate_f191a435f6fcb68116c58483563019d9f369cd22d7a8f8c59900b18485511804 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array())), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array())), "html", null, true);
        echo " - Sesiones</h1>
        </div>

        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Monitor", "s.monitor");
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
                echo "                                        <td><strong style=\"color: greenyellow\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                echo "</strong></td>
                                        ";
            } else {
                // line 35
                echo "                                        <td><strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                echo "</strong></td>
                                    ";
            }
            // line 37
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["sesion"], "lClientes", array()) > 1)) ? ((($this->getAttribute($context["sesion"], "nClientes", array()) . "/") . $this->getAttribute($context["sesion"], "lClientes", array()))) : ($this->getAttribute($context["sesion"], "cliente", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\">Volver atrás</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:sesionesCancha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 63,  165 => 59,  159 => 55,  151 => 52,  149 => 49,  142 => 45,  138 => 44,  132 => 41,  126 => 38,  121 => 37,  115 => 35,  109 => 33,  107 => 32,  102 => 31,  100 => 30,  96 => 29,  92 => 28,  89 => 27,  85 => 26,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
