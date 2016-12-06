<?php

/* CriveroPruebaBundle:Default:torneos.html.twig */
class __TwigTemplate_46f9ed36e174d6bfda0832ca6ce5401485751586870c0adca69bbdcec2b2e5c8 extends Twig_Template
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
        echo " Torneos ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"text-center\">Torneos</h1>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Deporte</th>
                        <th>Estado Torneo</th>
                        <th>Fecha inicio</th>
                        <th>Fecha finalización</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["torneos"]) ? $context["torneos"] : $this->getContext($context, "torneos")));
        foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
            // line 21
            echo "                        <tr>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["torneo"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["torneo"], "deporte", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["torneo"], "estadoTorneo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["torneo"], "fechaInicio", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["torneo"], "fechaFinalizacion", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_torneo", array("id" => $this->getAttribute($context["torneo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                ";
            // line 34
            echo "                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
            </table>
        </div>
       ";
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:torneos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  107 => 40,  96 => 34,  90 => 28,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  66 => 21,  62 => 20,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
