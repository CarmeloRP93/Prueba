<?php

/* CriveroPruebaBundle:Default:monitor.html.twig */
class __TwigTemplate_4932c1d3ea0e15ec598a6cbbf7038ac3057fc1824168ded9f07ed52b2fadb331 extends Twig_Template
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"usuardesc\">
        <div class=\"accionesExclus\">
            <button>Enviar mensaje</button>
            <button>Dar de baja</button>
        </div>
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
        echo "</h1>
        <div class=\"usuarfot\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "imagen", array())), "html", null, true);
        echo "\" style=\"float: left; width: 100%;\" />        
        </div>
        <div class=\"usuardat\">
            <div id=\"resersiones\">
                <div>
                    <h4>Sesiones: </h4> 
                    <ul id=\"sesiones\">
                       ";
        // line 19
        $context["sesiones"] = twig_split_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "sesiones", array()), "**");
        // line 20
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "                        <li>
                            <div class=\"acciones\">
                                <button>Modificar</button>
                                <button>Cancelar</button>
                            </div>
                            <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")), $context["i"], array(), "array"), "html", null, true);
            echo "</p>
                        </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </div>
            </div>
            <h4>F.Nacimiento: </h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "fNacimiento", array()), "html", null, true);
        echo "</p>
            <h4>Registro: </h4> <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "registro", array()), "html", null, true);
        echo "</p>
            <h4>Telefono: </h4> <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "telefono", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:monitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  102 => 33,  98 => 32,  93 => 29,  84 => 26,  77 => 21,  72 => 20,  70 => 19,  60 => 12,  55 => 10,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
