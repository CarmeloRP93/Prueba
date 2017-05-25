<?php

/* modulomonitoresmonitoresBundle:Publica:misSesionesMonitores.html.twig */
class __TwigTemplate_7fb2d2b6794cdd0039ada73d06210f7ed32c1980a2de3d04e39a958ddedb7386 extends Twig_Template
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
        echo " Mis sesiones públicas ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis sesiones públicas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 11
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 12
            echo "                    <h2>No se encontraron sesiones públicas</h2>
                ";
        } else {
            // line 14
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre de la sesión", "pagination.nombre");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado de la sesión", "pagination.estado");
            echo "</th>
                                    <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de clientes", "pagination.nClientes");
            echo "</th>
                                    <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de sesiones", "pagination.nSesiones");
            echo "</th>
                                    <th>";
            // line 23
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Recinto", "pagination.aula");
            echo "</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                echo "                      
                                    <tr data-id=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "id", array()), "html", null, true);
                echo "\">
                                        <td><img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["sesion"], "imagen", array())), "html", null, true);
                echo "\" class=\"img-responsive center-block \" style=\"max-width: 50px; height: 45px\"/></td>
                                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo "</td>
                                        
                                        ";
                // line 33
                if (((($this->getAttribute($context["sesion"], "estado", array()) == "cancelada") || ($this->getAttribute($context["sesion"], "estado", array()) == "suspendida")) || ($this->getAttribute($context["sesion"], "estado", array()) == "rechazada"))) {
                    // line 34
                    echo "                                            <td><strong style=\"color: red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                    echo "</strong></td>
                                            ";
                } elseif (($this->getAttribute(                // line 35
$context["sesion"], "estado", array()) == "validada")) {
                    // line 36
                    echo "                                            <td><strong style=\"color: greenyellow\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                    echo "</strong></td>
                                            ";
                } else {
                    // line 38
                    echo "                                            <td><strong> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                }
                // line 40
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nClientes", array()), "html", null, true);
                echo " Clientes</td>
                                        <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nSesiones", array()), "html", null, true);
                echo " Sesiones</td>
                                        ";
                // line 42
                if (($this->getAttribute($context["sesion"], "estado", array()) != "terminada")) {
                    // line 43
                    echo "                                            ";
                    if (($this->getAttribute($context["sesion"], "concepto", array()) == "aula")) {
                        echo " 
                                                <td>";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), $this->getAttribute($context["sesion"], "id", array()), array(), "array"), "nombre", array()), "html", null, true);
                        echo "</td>
                                            ";
                    } else {
                        // line 46
                        echo "                                                <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), $this->getAttribute($context["sesion"], "id", array()), array(), "array"), "tipo", array()), "html", null, true);
                        echo "</td>
                                            ";
                    }
                    // line 48
                    echo "                                        ";
                } else {
                    // line 49
                    echo "                                            <td></td>
                                        ";
                }
                // line 51
                echo "                                        <td class=\"actions\">
                                            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                                Ver más información
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 62
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 63
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
        return "modulomonitoresmonitoresBundle:Publica:misSesionesMonitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 63,  189 => 62,  183 => 58,  171 => 52,  168 => 51,  164 => 49,  161 => 48,  155 => 46,  150 => 44,  145 => 43,  143 => 42,  139 => 41,  134 => 40,  128 => 38,  122 => 36,  120 => 35,  115 => 34,  113 => 33,  108 => 31,  104 => 30,  100 => 29,  94 => 28,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  63 => 14,  59 => 12,  57 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
