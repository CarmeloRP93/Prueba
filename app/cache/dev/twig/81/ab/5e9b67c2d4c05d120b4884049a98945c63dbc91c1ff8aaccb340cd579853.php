<?php

/* modulomonitoresmonitoresBundle:Canchas:sesionesCancha.html.twig */
class __TwigTemplate_81ab5e9b67c2d4c05d120b4884049a98945c63dbc91c1ff8aaccb340cd579853 extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre"))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre"))), "html", null, true);
        echo " - Sesiones</h1>
        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                ";
        // line 13
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 14
            echo "                    <h2>No se encontraron canchas</h2>
                ";
        } else {
            // line 16
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sesión", "s.nombre");
            echo "</th>
                                    <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Participantes", "s.nClientes");
            echo "</th>
                               <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 28
                echo "                                    <tr>
                                        <td><img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["sesion"], "imagen", array())), "html", null, true);
                echo "\" class=\"img-responsive center-block \" style=\"max-width: 50px; height: 45px\"/></td>
                                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nClientes", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "lClientes", array()), "html", null, true);
                echo "</td>

                                        <td class=\"actions\">
                                            ";
                // line 34
                if (($this->getAttribute($context["sesion"], "cliente", array()) == "normal")) {
                    // line 35
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                    Ver sesión
                                                </a>
                                            ";
                } else {
                    // line 39
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionDedicada", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                                    Ver sesión
                                                </a>
                                            ";
                }
                // line 42
                echo " 
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 50
        echo "                <div class=\"navigation text-center\" style=\"margin: -10px\">
                    ";
        // line 51
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_cancha", array("id" => (isset($context["cId"]) ? $context["cId"] : $this->getContext($context, "cId")))), "html", null, true);
        echo "\">Volver atrás</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Canchas:sesionesCancha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  144 => 51,  141 => 50,  135 => 46,  126 => 42,  118 => 39,  110 => 35,  108 => 34,  100 => 31,  96 => 30,  92 => 29,  89 => 28,  85 => 27,  77 => 22,  73 => 21,  66 => 16,  62 => 14,  60 => 13,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
