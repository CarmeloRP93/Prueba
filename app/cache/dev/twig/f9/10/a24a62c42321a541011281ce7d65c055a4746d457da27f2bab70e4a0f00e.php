<?php

/* moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig */
class __TwigTemplate_f910a24a62c42321a541011281ce7d65c055a4746d457da27f2bab70e4a0f00e extends Twig_Template
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
        echo " Competiciones ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Competiciones</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "                    <h2>No se encontraron competiciones</h2>
                ";
        } else {
            // line 12
            echo "  
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "c.nombre");
            echo "</th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Deporte", "c.deporte");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tipo", "c.tipoCompeticion");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "c.estadoCompeticion");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                // line 26
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "deporte", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "tipoCompeticion", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estadoCompeticion", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            ";
                // line 32
                if (($this->getAttribute($context["competicion"], "estadoCompeticion", array()) == "Cancelado")) {
                    // line 33
                    echo "                                                <button class=\"btn btn-sm btn-info\" disabled>Ver</button>
                                            ";
                } else {
                    // line 34
                    echo "                                              
                                                <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                    echo "\"  class=\"btn btn-sm btn-info\">
                                                    Ver
                                                </a>
                                            ";
                }
                // line 39
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 46
        echo "                <div class=\"navigation\">
                    ";
        // line 47
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
        return "moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  143 => 46,  137 => 42,  129 => 39,  122 => 35,  119 => 34,  115 => 33,  113 => 32,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  91 => 26,  87 => 25,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  60 => 12,  56 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
