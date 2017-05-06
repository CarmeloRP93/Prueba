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
        ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")))) {
            // line 11
            echo "            <h2>No se encontraron competiciones</h2>
        ";
        } else {
            // line 13
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Nombre", "competiciones.nombre");
            echo "</th>
                        <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Deporte", "competiciones.deporte");
            echo "</th>
                        <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Estado de la competicion", "competiciones.estadoCompeticion");
            echo "</th>
                        <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), "Tipo Competicion", "competiciones.tipoCompeticion");
            echo "</th>
                        <th>Fecha inicio</th>
                        <th>Fecha finalización</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                // line 28
                echo "                        <tr>
                            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "deporte", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estadoCompeticion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "tipoCompeticion", array()), "html", null, true);
                echo "</td>
                            <td><strong>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
                echo "</strong></td>
                            ";
                // line 34
                if (($this->getAttribute($context["competicion"], "fechaFinalizacion", array()) != null)) {
                    // line 35
                    echo "                                <td><strong>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaFinalizacion", array()), "d/m/Y"), "html", null, true);
                    echo "</strong></td>
                                ";
                } else {
                    // line 37
                    echo "                                <td><strong>No Consta</strong></td>
                            ";
                }
                // line 39
                echo "                            <td class=\"actions\">
                                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_competicion", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
                // line 43
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
            // line 52
            echo "                </tbody>
            </table>
        </div>
        ";
        }
        // line 56
        echo "        ";
        // line 61
        echo "        <div class=\"navigation\">
            ";
        // line 62
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
        return array (  160 => 62,  157 => 61,  155 => 56,  149 => 52,  134 => 43,  128 => 40,  125 => 39,  121 => 37,  115 => 35,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  90 => 28,  86 => 27,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  58 => 13,  54 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
