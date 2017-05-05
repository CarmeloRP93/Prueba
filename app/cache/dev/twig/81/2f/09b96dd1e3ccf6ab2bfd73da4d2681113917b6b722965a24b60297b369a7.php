<?php

/* moduloclientesclienteBundle:Sesiones:sesionesPrivadasClientes.html.twig */
class __TwigTemplate_812f09b96dd1e3ccf6ab2bfd73da4d2681113917b6b722965a24b60297b369a7 extends Twig_Template
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
        echo " Sesiones privadas ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesiones privadas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "                    <h2>No se encontraron sesiones</h2>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "s.nombre");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Monitor", "s.monitor");
            echo "</th>
                                    <th><div class=\"hidden-xs\">";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Objetivo", "s.objetivo");
            echo "</div></th>
                                    <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "s.estadoCliente");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 27
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "id", array()), "html", null, true);
                echo "\">
                                        <td><img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["sesion"], "imagen", array())), "html", null, true);
                echo "\" class=\"img-responsive center-block \" style=\"max-width: 50px;height: 45px\"/></td>
                                        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "objetivo", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 32
                if (($this->getAttribute($context["sesion"], "estadoCliente", array()) == "disponible")) {
                    // line 33
                    echo "                                            <td>Disponible</td>
                                        ";
                } else {
                    // line 35
                    echo "                                            <td><font color=\"red\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["sesion"], "estadoCliente", array())), "html", null, true);
                    echo "</font></td>
                                            ";
                }
                // line 37
                echo "                                        <td class=\"actions\">
                                            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionClientes", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                Ver
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 47
        echo "        
                <div>
                    <div class=\"navigation\">
                        ";
        // line 50
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                </div>
            </div>                     
        </div>                     
    </div>                                
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Sesiones:sesionesPrivadasClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  145 => 47,  139 => 44,  127 => 38,  124 => 37,  118 => 35,  114 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  91 => 27,  87 => 26,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  60 => 13,  56 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
