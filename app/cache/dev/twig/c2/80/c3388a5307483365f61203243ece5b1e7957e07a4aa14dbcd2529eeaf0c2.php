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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Horario ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <center>
            <table border=\"3\" width=\"50%\" HEIGHT=\"50\"> 
                <caption><H1>Horario</H1></caption>
                <tr>
                    <td width=\"50%\" HEIGHT=\"50\"><strong>Número de la sesión</strong></td>
                    <td width=\"50%\" HEIGHT=\"50\"><strong>Día y hora</strong></td>
                </tr>
                ";
        // line 13
        $context["i"] = 0;
        // line 14
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")));
        foreach ($context['_seq'] as $context["_key"] => $context["hora"]) {
            // line 15
            echo "                    <tr>
                        ";
            // line 16
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 17
            echo "                        <td width=\"50%\" HEIGHT=\"50\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                        <td width=\"50%\" HEIGHT=\"50\">";
            // line 18
            echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </table>
        <div id=\"colder\" class=\"col-md-8\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" style=\"height: 30px; width: 190px; margin-top: 10px;\" class=\"btn btn-success\">Volver atrás</a></div>
        </center>
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
        return array (  85 => 22,  82 => 21,  73 => 18,  68 => 17,  66 => 16,  63 => 15,  58 => 14,  56 => 13,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
