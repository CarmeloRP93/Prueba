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
    <div class=\"container\">
        <h1 class=\"text-center\">Aulas</h1>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 14
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "a.nombre");
        echo "</th>
                        <th>";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "a.disponibilidad");
        echo "</th>
                        <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "a.horario");
        echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["aula"]) {
            // line 22
            echo "                        <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            if ((((isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")) == 0) || ((isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")) == 6))) {
                // line 25
                echo "                                <strong>No disponible</strong>
                                ";
            } else {
                // line 27
                echo "                                    <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["estados"]) ? $context["estados"] : $this->getContext($context, "estados")), ($this->getAttribute($context["aula"], "id", array()) - 1), array(), "array"), "estado", array()), "html", null, true);
                echo "</strong>
                                ";
            }
            // line 28
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "horario", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                              <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula", array("id" => $this->getAttribute($context["aula"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute($context["aula"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                    Editar
                                </a>
                                
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            ";
        // line 45
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
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
        return array (  127 => 45,  121 => 41,  108 => 34,  102 => 31,  97 => 29,  94 => 28,  88 => 27,  84 => 25,  82 => 24,  78 => 23,  75 => 22,  71 => 21,  63 => 16,  59 => 15,  55 => 14,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
