<?php

/* CriveroPruebaBundle:Aulas:disponibilidadAula.html.twig */
class __TwigTemplate_a5a4372122a2d696126702fa3e2fe49983d5dd18e407d3122a4eedb31dac2776 extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array())), "html", null, true);
        echo " - Disponibilidad ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header \"> 
            <h2 class=\"t1\">";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array())), "html", null, true);
        echo " - Horarios disponibles de los próximos 7 días</h2>
        </div><br>
        <div class=\"table-responsive\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs\">
                    <table class=\"table table-hover ";
        // line 13
        echo "\">
                        <tbody>
                            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 16
            echo "                                <tr >
                                    <td style=\"padding-top: 14px;padding-bottom: 14px\"><strong>Día ";
            // line 17
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["horario"], "fechaInicio", array()) < 10)) ? (("0" . $this->getAttribute($context["horario"], "fechaInicio", array()))) : ($this->getAttribute($context["horario"], "fechaInicio", array()))), "html", null, true);
            echo "</strong></td>
                                    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute($context["horario"], "periodo", array()), "&"));
            foreach ($context['_seq'] as $context["_key"] => $context["horitas"]) {
                // line 19
                echo "                                        <td style=\"padding-top: 14px;padding-bottom: 14px;\">";
                echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                echo "</td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horitas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div><br>

        <div>
            <a class=\"btn btn-default\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
        echo "\">Volver atrás</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Aulas:disponibilidadAula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  95 => 23,  88 => 21,  79 => 19,  75 => 18,  71 => 17,  68 => 16,  64 => 15,  60 => 13,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
