<?php

/* CriveroPruebaBundle:Competiciones:competiciones.html.twig */
class __TwigTemplate_93398c94027a555a153ec4fea2f3f8e01c2247ec4e0e453d7645cd83b4ff1b78 extends Twig_Template
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
        echo " Competiciones ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Competiciones</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Nombre", "competiciones.nombre");
        echo "</th>
                        <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Deporte", "competiciones.deporte");
        echo "</th>
                        <th>";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Estado de la competicion", "competiciones.estadoCompeticion");
        echo "</th>
                        <th>";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Tipo Competicion", "competiciones.tipoCompeticion");
        echo "</th>
                        <th>Fecha inicio</th>
                        <th>Fecha finalización</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 26
            echo "                        <tr>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estadoCompeticion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "tipoCompeticion", array()), "html", null, true);
            echo "</td>
                            <td><strong>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</strong></td>
                            ";
            // line 32
            if (($this->getAttribute($context["competicion"], "fechaFinalizacion", array()) != null)) {
                // line 33
                echo "                                <td><strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaFinalizacion", array()), "d/m/Y"), "html", null, true);
                echo "</strong></td>
                                ";
            } else {
                // line 35
                echo "                                <td><strong>No Consta</strong></td>
                            ";
            }
            // line 37
            echo "                            <td class=\"actions\">
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_competicion", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_editarCompeticion", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 58
        echo "        <div class=\"navigation\">
            ";
        // line 59
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:competiciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  147 => 58,  142 => 50,  127 => 41,  121 => 38,  118 => 37,  114 => 35,  108 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  83 => 26,  79 => 25,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
