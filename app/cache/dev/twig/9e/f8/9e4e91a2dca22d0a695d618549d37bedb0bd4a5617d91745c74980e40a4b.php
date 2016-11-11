<?php

/* moduloclientesclienteBundle:Default:torneosClientes.html.twig */
class __TwigTemplate_9ef89e4e91a2dca22d0a695d618549d37bedb0bd4a5617d91745c74980e40a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("moduloclientesclienteBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Torneos ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Listado de mis Torneos</h1>
    <ul>
        <p>En inscripción: </p>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["torneos"]) ? $context["torneos"] : $this->getContext($context, "torneos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
            // line 10
            echo "            ";
            if (($this->getAttribute($context["torneo"], "estado", array()) == "Inscripcion")) {
                // line 11
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_torneoClientes", array("matricula" => $this->getAttribute($context["torneo"], "matricula", array()))), "html", null, true);
                echo "\" class=\"fila ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["torneo"], "nombre", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 13
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
    <ul>
        <p>En curso: </p>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["torneos"]) ? $context["torneos"] : $this->getContext($context, "torneos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
            // line 18
            echo "            ";
            if (($this->getAttribute($context["torneo"], "estado", array()) == "Disponible")) {
                // line 19
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_torneoClientes", array("matricula" => $this->getAttribute($context["torneo"], "matricula", array()))), "html", null, true);
                echo "\" class=\"fila ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["torneo"], "nombre", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 21
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>
    <ul>
        <p>Finalizado: </p>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["torneos"]) ? $context["torneos"] : $this->getContext($context, "torneos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
            // line 26
            echo "            ";
            if (($this->getAttribute($context["torneo"], "estado", array()) == "Finalizado")) {
                // line 27
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_torneoClientes", array("matricula" => $this->getAttribute($context["torneo"], "matricula", array()))), "html", null, true);
                echo "\" class=\"fila ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["torneo"], "nombre", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 29
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Default:torneosClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 30,  179 => 29,  169 => 27,  166 => 26,  149 => 25,  144 => 22,  130 => 21,  120 => 19,  117 => 18,  100 => 17,  95 => 14,  81 => 13,  71 => 11,  68 => 10,  51 => 9,  46 => 6,  43 => 5,  37 => 4,  11 => 2,);
    }
}
