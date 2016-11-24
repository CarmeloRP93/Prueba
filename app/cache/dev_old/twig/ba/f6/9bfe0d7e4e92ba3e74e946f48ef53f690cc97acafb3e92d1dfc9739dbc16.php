<?php

/* CriveroPruebaBundle:Default:clientes.html.twig */
class __TwigTemplate_baf69bfe0d7e4e92ba3e74e946f48ef53f690cc97acafb3e92d1dfc9739dbc16 extends Twig_Template
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
        echo " Vista de Clientes ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Listado de Clientes</h1>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 8
            echo "    ";
            if (($this->getAttribute($context["usuario"], "tipo", array()) == 2)) {
                // line 9
                echo "        <div>
            <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("crivero_prueba_cliente", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"fila ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo " </a>
        </div>
        
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <div class=\"nuevoUsuario\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_nuevo");
        echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">Nuevo Usuario <span class=\"glyphicon glyphicon-plus\"></span></a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  95 => 15,  72 => 10,  69 => 9,  66 => 8,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
