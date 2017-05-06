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
        ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")))) {
            // line 11
            echo "            <h2>No se encontraron partidos</h2>
        ";
        } else {
            // line 13
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Competición", "partidos.idCompeticion");
            echo "</th>
                        <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Equipo Local", "partidos.idEquipoLocal");
            echo "</th>
                        <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Equipo Visitante", "partidos.idEquipoVisitante");
            echo "</th>
                        <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Lugar del partido", "partidos.idCancha");
            echo "</th>
                        <th>Fecha Inicio</th>
                        <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Resultado", "partidos.resultado");
            echo "</th>
                        <th>";
            // line 23
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Estado de los partidos", "partidos.estadoPartido");
            echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
                // line 29
                echo "                        <tr>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), $this->getAttribute($context["partido"], "idCompeticion", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equiposLocales"]) ? $context["equiposLocales"] : $this->getContext($context, "equiposLocales")), $this->getAttribute($context["partido"], "idEquipoLocal", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equiposVisitantes"]) ? $context["equiposVisitantes"] : $this->getContext($context, "equiposVisitantes")), $this->getAttribute($context["partido"], "idEquipoVisitante", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")), $this->getAttribute($context["partido"], "idCancha", array()), array(), "array"), "tipo", array()), "html", null, true);
                echo "</td>
                            <td><strong>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
                echo "</strong></td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultado", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "estadoPartido", array()), "html", null, true);
                echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_partido", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
                // line 41
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
            // line 50
            echo "                </tbody>
            </table>
        </div>
        ";
        }
        // line 54
        echo "        ";
        // line 59
        echo "        <div class=\"navigation text-center\">
            ";
        // line 60
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        echo "
        </div>
    </div>
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
        return array (  161 => 60,  158 => 59,  156 => 54,  150 => 50,  135 => 41,  129 => 38,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  97 => 29,  93 => 28,  85 => 23,  81 => 22,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  58 => 13,  54 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
