<?php

/* CriveroPruebaBundle:Aulas:aulas.html.twig */
class __TwigTemplate_e822bf7cd2cefcf1bd2aab59592f89f2885044c8b90b38348be44859086305d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Aulas ";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "    
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 
    
    ";
        // line 14
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Aulas</h1>
        </div>
        ";
        // line 19
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 20
            echo "            <h2>No se encontraron aulas.</h2>
        ";
        } else {
            // line 22
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 26
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "a.nombre");
            echo "</th>
                            <th>";
            // line 27
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "a.disponibilidad");
            echo "</th>
                            <th>";
            // line 28
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "a.horario");
            echo "</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["aula"]) {
                // line 34
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "nombre", array()), "html", null, true);
                echo "</td>
                                ";
                // line 41
                echo "                                <td><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "disponibilidad", array()), "html", null, true);
                echo "</strong></td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "horario", array()), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                  <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula", array("id" => $this->getAttribute($context["aula"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                        Ver
                                    </a>
                                    <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute($context["aula"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                        Editar
                                    </a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aula'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 60
        echo "        <div>
            ";
        // line 64
        echo "            <div class=\"navigation\">
                ";
        // line 65
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
                
    ";
        // line 70
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "id" => "form-delete", "with_submit" => false));
        echo "
    
";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/criveroprueba/js/delete-aula.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Aulas:aulas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 75,  166 => 74,  163 => 73,  156 => 70,  148 => 65,  145 => 64,  142 => 60,  136 => 56,  121 => 47,  115 => 44,  110 => 42,  105 => 41,  101 => 35,  96 => 34,  92 => 33,  84 => 28,  80 => 27,  76 => 26,  70 => 22,  66 => 20,  64 => 19,  56 => 14,  47 => 7,  44 => 6,  38 => 4,  11 => 2,);
    }
}
