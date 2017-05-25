<?php

/* modulomonitoresmonitoresBundle:Publica:sesionesMonitores.html.twig */
class __TwigTemplate_976323e70f929fb21133778a893556d10147023480581e61aa7e9946ae8f1e37 extends Twig_Template
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
        echo " Sesiones públicas aceptadas";
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
            <h1 class=\"t1\">Sesiones públicas</h1>
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
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Monitor", "pagination.monitor");
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
                // line 29
                echo "                                    <tr data-id=\"";
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
                                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nClientes", array()), "html", null, true);
                echo " Clientes</td>
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nSesiones", array()), "html", null, true);
                echo " Sesiones</td>
                                        ";
                // line 35
                if (($this->getAttribute($context["sesion"], "concepto", array()) == "aula")) {
                    echo " 
                                        <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), $this->getAttribute($context["sesion"], "id", array()), array(), "array"), "nombre", array()), "html", null, true);
                    echo "</td>
                                        ";
                } else {
                    // line 38
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), $this->getAttribute($context["sesion"], "id", array()), array(), "array"), "tipo", array()), "html", null, true);
                    echo "</td>
                                        ";
                }
                // line 40
                echo "                                        <td class=\"actions\">

                                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_sesionMonitores", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
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
            // line 48
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 52
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 53
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
        return "modulomonitoresmonitoresBundle:Publica:sesionesMonitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  160 => 52,  154 => 48,  142 => 42,  138 => 40,  132 => 38,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  98 => 29,  94 => 28,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  63 => 14,  59 => 12,  57 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
