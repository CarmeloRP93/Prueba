<?php

/* CriveroPruebaBundle:Default:monitores.html.twig */
class __TwigTemplate_485a648dcc8d98d050a514f911880f5a0df569b892b20c9d7f96dae2f5c2546c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navegation' => array($this, 'block_navegation'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Monitores ";
    }

    // line 6
    public function block_navegation($context, array $blocks = array())
    {
        echo "        
        <ul>
\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
\t\t<li><a class=\"active\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_torneos");
        echo "\">Torneos</a></li>
\t</ul>
";
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "<div id=\"buscador\">
    <form>
        <input type=\"search\" name=\"monitor\" placeholder=\"Buscar monitor\"/>
    </form>
</div>
<h1>Listado de Monitores</h1>
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monitores"]) ? $context["monitores"] : $this->getContext($context, "monitores")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["monitor"]) {
            // line 22
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("crivero_prueba_monitor", array("matricula" => $this->getAttribute($context["monitor"], "matricula", array()))), "html", null, true);
            echo "\" class=\"fila ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitor"], "matricula", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitor"], "nombre", array()), "html", null, true);
            echo " </a>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:monitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 24,  97 => 22,  80 => 21,  72 => 15,  69 => 14,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  44 => 6,  38 => 5,  11 => 3,);
    }
}
