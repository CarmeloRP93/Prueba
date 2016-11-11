<?php

/* CriveroPruebaBundle:Default:torneo.html.twig */
class __TwigTemplate_d080da251adcee457af36e1e95dd5c8efa323f7f1b3f9aa4f9c1c968e022856b extends Twig_Template
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
            'detalles' => array($this, 'block_detalles'),
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h2>Detalles del Torneo</h2>
        ";
        // line 7
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estado", array()) == "Solicitud Presentada")) {
            // line 8
            echo "            <button class=\"btn btn-default\">Aceptar Solicitud</button>
            <button class=\"btn btn-danger\">Rechazar Solicitud </button>
        ";
        }
        // line 11
        echo "        ";
        $this->displayBlock('detalles', $context, $blocks);
        // line 21
        echo "    </div>
";
    }

    // line 11
    public function block_detalles($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estado", array()) == "Validado")) {
            // line 13
            echo "                <h3>Ver información de equipos</h3>
                ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "equipos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 15
                echo "                    <label class=\"control-label span7 text-left\">";
                echo twig_escape_filter($this->env, $context["equipo"], "html", null, true);
                echo "</label>
                    <button class=\"btn btn-default\">Ver puesto</button>
                    <button class=\"btn btn-danger\">Eliminar equipo</button><br>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        }
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:torneo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  81 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  63 => 21,  60 => 11,  55 => 8,  53 => 7,  49 => 5,  46 => 4,  38 => 3,  11 => 1,);
    }
}
