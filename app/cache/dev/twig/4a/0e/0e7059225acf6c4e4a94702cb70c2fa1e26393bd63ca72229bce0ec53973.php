<?php

/* CriveroPruebaBundle:Default:equipo.html.twig */
class __TwigTemplate_4a0e0e7059225acf6c4e4a94702cb70c2fa1e26393bd63ca72229bce0ec53973 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h2>Detalles del Equipo</h2>
        ";
        // line 7
        $this->displayBlock('detalles', $context, $blocks);
        // line 13
        echo "    </div>
";
    }

    // line 7
    public function block_detalles($context, array $blocks = array())
    {
        // line 8
        echo "            ";
        if (($this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "deporte", array()) == "Futbol")) {
            // line 9
            echo "                <h3>Ver información de los miembros</h3>
                <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "miembros", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 11
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:equipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  55 => 13,  53 => 7,  49 => 5,  46 => 4,  38 => 3,  11 => 1,);
    }
}
