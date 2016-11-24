<?php

/* CriveroPruebaBundle:Default:canchas.html.twig */
class __TwigTemplate_3f0a1b71c6f2165c3410fda577549355bf27027f25fa9c76ee7acf47389c96d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Canchas ";
    }

    // line 5
    public function block_navegation($context, array $blocks = array())
    {
        echo "        
        <ul>
\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
\t\t<li><a class=\"active\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_torneos");
        echo "\">Torneos</a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_sesiones");
        echo "\">Sesiones</a></li>
\t</ul>
";
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "<div id=\"buscador\">
    <form>
        <input type=\"search\" name=\"cancha\" placeholder=\"Buscar cancha\"/>
    </form>
</div>
<h1>Listado de Canchas</h1>
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
            // line 22
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("crivero_prueba_cancha", array("matricula" => $this->getAttribute($context["cancha"], "matricula", array()))), "html", null, true);
            echo "\" class=\"fila ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "matricula", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "nombre", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:canchas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 24,  101 => 22,  84 => 21,  76 => 15,  73 => 14,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  44 => 5,  38 => 4,  11 => 2,);
    }
}
