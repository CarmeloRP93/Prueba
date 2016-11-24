<?php

/* CriveroPruebaBundle:Default:home.html.twig */
class __TwigTemplate_4b8219392e2376a871fd4686d1271561017f5f1352fcd930ea8d93ad8f54347f extends Twig_Template
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
            'navegation' => array($this, 'block_navegation'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_navegation($context, array $blocks = array())
    {
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " <div class=\"container\" >
        <h2 class=\"text-center\">
            ";
        // line 8
        echo "Welcome";
        echo "
             :
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo "
        </h2>
 </div>
        ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 1)) {
            // line 14
            echo "            <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_clientes");
            echo "\" method=\"post\">
            </form>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 16
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 2)) {
            // line 17
            echo "            <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_reservasClientes");
            echo "\" method=\"post\">
            </form>
        ";
        } else {
            // line 20
            echo "            <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_sesionesMonitores");
            echo "\" method=\"post\">
            </form>
        ";
        }
        // line 23
        echo "        <script type=\"text/javascript\">
            setTimeout(function(){document.getElementById(\"formu\").submit();}, 5000); 
        </script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  84 => 20,  77 => 17,  75 => 16,  69 => 14,  67 => 13,  61 => 10,  56 => 8,  52 => 6,  49 => 5,  43 => 4,  38 => 3,  11 => 1,);
    }
}
