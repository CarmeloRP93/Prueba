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
        $context["i"] = 1;
        // line 14
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 15
            echo "                                <tr>
                                    ";
            // line 16
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                // line 17
                echo "                                        <td style=\"border: none; padding-top: 14px;padding-bottom: 14px\"><strong>Día ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["horario"], "fechaInicio", array()) < 10)) ? (("0" . $this->getAttribute($context["horario"], "fechaInicio", array()))) : ($this->getAttribute($context["horario"], "fechaInicio", array()))), "html", null, true);
                echo "</strong></td>
                                    ";
            } else {
                // line 19
                echo "                                        <td style=\"padding-top: 14px;padding-bottom: 14px\"><strong>Día ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["horario"], "fechaInicio", array()) < 10)) ? (("0" . $this->getAttribute($context["horario"], "fechaInicio", array()))) : ($this->getAttribute($context["horario"], "fechaInicio", array()))), "html", null, true);
                echo "</strong></td>
                                    ";
            }
            // line 21
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, "09:00-10:00&10:00-11:00&11:00-12:00&12:00-13:00&16:00-17:00&17:00-18:00&18:00-19:00&19:00-20:00&20:00-21:00&21:00-22:00&", "&"));
            foreach ($context['_seq'] as $context["_key"] => $context["horitas"]) {
                // line 22
                echo "                                        ";
                if ( !twig_in_filter($context["horitas"], $this->getAttribute($context["horario"], "periodo", array()))) {
                    // line 23
                    echo "                                            ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                        // line 24
                        echo "                                                <td style=\"border: none; padding-top: 14px; padding-bottom: 14px; color: red\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                            ";
                    } else {
                        // line 26
                        echo "                                                <td style=\"padding-top: 14px; padding-bottom: 14px; color: red\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                            ";
                    }
                    // line 28
                    echo "                                        ";
                } else {
                    // line 29
                    echo "                                            ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                        // line 30
                        echo "                                                <td style=\"border: none; padding-top: 14px; padding-bottom: 14px;\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                            ";
                    } else {
                        // line 32
                        echo "                                                <td style=\"padding-top: 14px; padding-bottom: 14px;\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                            ";
                    }
                    // line 34
                    echo "                                        ";
                }
                // line 35
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horitas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                </tr>
                                ";
            // line 37
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 38
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 44
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
        return array (  156 => 44,  149 => 39,  143 => 38,  141 => 37,  138 => 36,  132 => 35,  129 => 34,  123 => 32,  117 => 30,  114 => 29,  111 => 28,  105 => 26,  99 => 24,  96 => 23,  93 => 22,  88 => 21,  82 => 19,  76 => 17,  74 => 16,  71 => 15,  66 => 14,  64 => 13,  60 => 11,  52 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
