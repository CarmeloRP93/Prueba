<?php

/* modulomonitoresmonitoresBundle:Horario:horario.html.twig */
class __TwigTemplate_c280c3388a5307483365f61203243ece5b1e7957e07a4aa14dbcd2529eeaf0c2 extends Twig_Template
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
        echo " Vista de Horario ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2\"> 
            <div class=\"page-header\">
                <h1 class=\"t1\">Horario</h1>
            </div>
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body myelement\">    
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <tr>
                                <td><strong>Número de la sesión</strong></td>
                                <td><strong>Día y hora</strong></td>
                            </tr>
                            ";
        // line 17
        $context["i"] = 0;
        // line 18
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")));
        foreach ($context['_seq'] as $context["_key"] => $context["hora"]) {
            // line 19
            echo "                                <tr>
                                    ";
            // line 20
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 21
            echo "                                    <td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </table>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-default\">Volver atrás</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Horario:horario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  87 => 25,  78 => 22,  73 => 21,  71 => 20,  68 => 19,  63 => 18,  61 => 17,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
