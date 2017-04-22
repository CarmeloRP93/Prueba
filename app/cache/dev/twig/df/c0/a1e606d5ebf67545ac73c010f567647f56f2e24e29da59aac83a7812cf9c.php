<?php

/* CriveroPruebaBundle:Competiciones:partidos.html.twig */
class __TwigTemplate_dfc0a1e606d5ebf67545ac73c010f567647f56f2e24e29da59aac83a7812cf9c extends Twig_Template
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
        echo " Partidos ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Partidos</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Nombre Competición</th>
                        <th>Equipo Local</th>
                        <th>Equipo Visitante</th>
                        <th>Lugar del partido</th>
                        <th>Fecha inicio</th>
                        <th>Resultados</th>
                        <th>Estados de los partidos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 27
            echo "                        <tr>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), ($this->getAttribute($context["partido"], "id", array()) - 1), array(), "array"), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equiposLocales"]) ? $context["equiposLocales"] : $this->getContext($context, "equiposLocales")), ($this->getAttribute($context["partido"], "id", array()) - 1), array(), "array"), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equiposVisitantes"]) ? $context["equiposVisitantes"] : $this->getContext($context, "equiposVisitantes")), ($this->getAttribute($context["partido"], "id", array()) - 1), array(), "array"), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")), ($this->getAttribute($context["partido"], "id", array()) - 1), array(), "array"), "tipo", array()), "html", null, true);
            echo "</td>
                            <td><strong>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaInicio", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</strong></td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultado", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "estadoPartido", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_partido", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_editarPartido", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 56
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:partidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 56,  125 => 48,  110 => 39,  104 => 36,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  75 => 28,  72 => 27,  68 => 26,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
