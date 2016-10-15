<?php

/* CriveroPruebaBundle:Default:alumnos.html.twig */
class __TwigTemplate_c5abae419373689338dc4ad29bcc1fd6cb3f128c4e02040c1de9110c1a19d81f extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Admin ";
    }

    // line 4
    public function block_navegation($context, array $blocks = array())
    {
        // line 5
        echo "        <ul>
\t\t<li><a href=\"#\">Clientes</a></li>
\t\t<li><a href=\"#\">Monitores</a></li>
\t\t<li><a href=\"#\">Canchas</a></li>
\t\t<li><a href=\"#\">Contacto</a></li>
\t</ul>
";
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "<h1>Listado de Clientes</h1>
";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 15
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("crivero_prueba_alumno", array("matricula" => $this->getAttribute($context["alumno"], "matricula", array()))), "html", null, true);
            echo ">}}\" class=\"fila ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "matricula", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:alumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 17,  80 => 15,  63 => 14,  60 => 13,  57 => 12,  47 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
