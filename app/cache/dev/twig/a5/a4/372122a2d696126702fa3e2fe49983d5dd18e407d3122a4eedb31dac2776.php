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
        echo "    <div class=\"container text-center\">
        <div class=\"page-header \"> 
            <h2 class=\"t1\">";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array())), "html", null, true);
        echo " - Horarios disponibles de los próximos 7 días</h2>
        </div><br>
        
        <div class=\"panel panel-default\">                  
            <div class=\"panel-body\" style=\"padding-bottom: 0px\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover ";
        // line 14
        echo "\">
                        <tbody>
                            ";
        // line 16
        $context["i"] = 1;
        // line 17
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 18
            echo "                                <tr>
                                    ";
            // line 19
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                // line 20
                echo "                                        <td style=\"border: none; padding-top: 14px;padding-bottom: 14px\"><strong>Día ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["horario"], "fechaInicio", array()) < 10)) ? (("0" . $this->getAttribute($context["horario"], "fechaInicio", array()))) : ($this->getAttribute($context["horario"], "fechaInicio", array()))), "html", null, true);
                echo "</strong></td>
                                    ";
            } else {
                // line 22
                echo "                                        <td style=\"padding-top: 14px;padding-bottom: 14px\"><strong>Día ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["horario"], "fechaInicio", array()) < 10)) ? (("0" . $this->getAttribute($context["horario"], "fechaInicio", array()))) : ($this->getAttribute($context["horario"], "fechaInicio", array()))), "html", null, true);
                echo "</strong></td>
                                    ";
            }
            // line 24
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, "09:00-10:00&10:00-11:00&11:00-12:00&12:00-13:00&16:00-17:00&17:00-18:00&18:00-19:00&19:00-20:00&20:00-21:00&21:00-22:00&", "&"));
            foreach ($context['_seq'] as $context["_key"] => $context["horitas"]) {
                // line 25
                echo "                                        ";
                if ( !twig_in_filter($context["horitas"], $this->getAttribute($context["horario"], "periodo", array()))) {
                    // line 26
                    echo "                                            ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                        // line 27
                        echo "                                                <td style=\"border: none; padding-top: 14px; padding-bottom: 14px; color: red\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                            ";
                    } else {
                        // line 29
                        echo "                                                <td style=\"padding-top: 14px; padding-bottom: 14px; color: red\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                            ";
                    }
                    // line 31
                    echo "                                        ";
                } else {
                    // line 32
                    echo "                                            ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                        // line 33
                        echo "                                                <td style=\"border: none; padding-top: 14px; padding-bottom: 14px;\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                            ";
                    } else {
                        // line 35
                        echo "                                                <td style=\"padding-top: 14px; padding-bottom: 14px;\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                            ";
                    }
                    // line 37
                    echo "                                        ";
                }
                // line 38
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horitas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                                </tr>
                                ";
            // line 40
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 41
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
        echo "\">Volver atrás</a>
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
        return array (  157 => 47,  150 => 42,  144 => 41,  142 => 40,  139 => 39,  133 => 38,  130 => 37,  124 => 35,  118 => 33,  115 => 32,  112 => 31,  106 => 29,  100 => 27,  97 => 26,  94 => 25,  89 => 24,  83 => 22,  77 => 20,  75 => 19,  72 => 18,  67 => 17,  65 => 16,  61 => 14,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
