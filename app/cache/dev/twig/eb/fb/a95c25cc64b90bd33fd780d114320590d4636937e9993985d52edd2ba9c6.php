<?php

/* modulomonitoresmonitoresBundle:Aulas:disponibilidadM.html.twig */
class __TwigTemplate_ebfba95c25cc64b90bd33fd780d114320590d4636937e9993985d52edd2ba9c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("modulomonitoresmonitoresBundle::main.html.twig");
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
        return "modulomonitoresmonitoresBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array())), "html", null, true);
        echo " - Disponibilidad ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"page-header \"> 
            <h2 class=\"t1\">";
        // line 6
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array())), "html", null, true);
        echo " - Horarios disponibles de los próximos 7 días</h2>
        </div><br>
        <div class=\"panel panel-default\">                  
            <div class=\"panel-body\">
                <div class=\"table-responsive\">
                    <table class=\"table ";
        // line 11
        echo "\">
                        <tbody>
                            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 14
            echo "                                <tr>
                                    <td style=\"padding-top: 14px;padding-bottom: 14px\"><strong>Día ";
            // line 15
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["horario"], "fechaInicio", array()) < 10)) ? (("0" . $this->getAttribute($context["horario"], "fechaInicio", array()))) : ($this->getAttribute($context["horario"], "fechaInicio", array()))), "html", null, true);
            echo "</strong></td>
                                    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute($context["horario"], "periodo", array()), "&"));
            foreach ($context['_seq'] as $context["_key"] => $context["horitas"]) {
                // line 17
                echo "                                        <td style=\"padding-top: 14px;padding-bottom: 14px;\">";
                echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                echo "</td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horitas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verAula", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
        echo "\">Volver atrás</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Aulas:disponibilidadM.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  95 => 21,  88 => 19,  79 => 17,  75 => 16,  71 => 15,  68 => 14,  64 => 13,  60 => 11,  52 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
