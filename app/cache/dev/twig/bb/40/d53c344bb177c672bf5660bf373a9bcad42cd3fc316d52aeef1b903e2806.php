<?php

/* moduloclientesclienteBundle:Sesiones:misSesiones.html.twig */
class __TwigTemplate_bb40d53c344bb177c672bf5660bf373a9bcad42cd3fc316d52aeef1b903e2806 extends Twig_Template
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
        echo " Vista de entrenamiento ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 col-lg-offset-3\">

            <div class=\"page-header\">
                <h1 class=\"t1\">Mis sesiones</h1>
            </div>
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body myelement\">
                    ";
        // line 12
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 13
            echo "                        <h2>No se encontraron sesiones</h2>
                    ";
        } else {
            // line 15
            echo "                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "s.nombre");
            echo "</th>
                                        <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Monitor", "s.monitor");
            echo "</th>
                                        <th><div class=\"hidden-xs\">";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Objetivo", "s.objetivo");
            echo "</div></th>
                                        <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "s.estadoCliente");
            echo "</th>
                                        <th class=\"t3\">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 28
                echo "                                        <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "id", array()), "html", null, true);
                echo "\">
                                            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
                echo "</td>
                                            <td><div class=\"hidden-xs\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "objetivo", array()), "html", null, true);
                echo "</div></td>
                                                ";
                // line 32
                if (($this->getAttribute($context["sesion"], "estadoCliente", array()) == "Completo")) {
                    // line 33
                    echo "                                                    <td>Privada</td>
                                                ";
                } elseif (($this->getAttribute(                // line 34
$context["sesion"], "estadoCliente", array()) == "disponible")) {
                    // line 35
                    echo "                                                    <td>Disponible</td>
                                                ";
                } else {
                    // line 37
                    echo "                                                    <td><font color=\"red\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["sesion"], "estadoCliente", array())), "html", null, true);
                    echo "</font></td>
                                                ";
                }
                // line 39
                echo "                                            <td class=\"actions\">
                                                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_miSesionClientes", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                                    Ver
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 49
        echo "        
                    <div>
                        <div class=\"navigation\">
                            ";
        // line 52
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                        </div>
                    </div>
                </div>                     
            </div>                     
        </div>                     
    </div>                     
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Sesiones:misSesiones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  147 => 49,  141 => 46,  129 => 40,  126 => 39,  120 => 37,  116 => 35,  114 => 34,  111 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  92 => 28,  88 => 27,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  62 => 15,  58 => 13,  56 => 12,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
