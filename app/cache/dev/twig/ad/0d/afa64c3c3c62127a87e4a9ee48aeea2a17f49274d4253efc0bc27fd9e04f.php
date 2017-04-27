<?php

/* moduloclientesclienteBundle:Competiciones:partidosClientes.html.twig */
class __TwigTemplate_ad0dafa64c3c3c62127a87e4a9ee48aeea2a17f49274d4253efc0bc27fd9e04f extends Twig_Template
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
                        <th>";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Competición", "partidos.idCompeticion");
        echo "</th>
                        <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Equipo Locar", "partidos.idEquipoLocal");
        echo "</th>
                        <th>";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Equipo Visitante", "partidos.idEquipoVisitante");
        echo "</th>
                        <th>";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Lugar del partido", "partidos.idCancha");
        echo "</th>
                        <th>Fecha Inicio</th>
                        <th>";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Resultado", "partidos.resultado");
        echo "</th>
                        <th>";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")), "Estado de los partidos", "partidos.estadoPartido");
        echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            if (($this->getAttribute($context["partido"], "idCompeticion", array()) == (isset($context["idCompeticion"]) ? $context["idCompeticion"] : $this->getContext($context, "idCompeticion")))) {
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_partidoClientes", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                            </td>
                        </tr>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            ";
        // line 46
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:partidosClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 46,  136 => 42,  123 => 36,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  91 => 27,  86 => 26,  78 => 21,  74 => 20,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
