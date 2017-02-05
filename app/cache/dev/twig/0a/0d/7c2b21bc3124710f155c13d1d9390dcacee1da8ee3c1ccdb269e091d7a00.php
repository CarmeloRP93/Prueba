<?php

/* CriveroPruebaBundle:Usuarios:home.html.twig */
class __TwigTemplate_0a0d7c2b21bc3124710f155c13d1d9390dcacee1da8ee3c1ccdb269e091d7a00 extends Twig_Template
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
        echo "Home";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " <div class=\"container\" >
        <h2 class=\"text-center\">
            Bienvenido
            ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 1)) {
            // line 10
            echo "                administrador
            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 2)) {
            // line 12
            echo "                cliente
            ";
        } else {
            // line 14
            echo "                monitor    
            ";
        }
        // line 16
        echo "            :
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo "
        </h2>
 </div>
            ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 1)) {
            // line 21
            echo "                <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_clientes");
            echo "\" method=\"post\">
                </form>
            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 23
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 2)) {
            // line 24
            echo "                <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_reservasClientes");
            echo "\" method=\"post\">
                </form>
            ";
        } else {
            // line 27
            echo "                <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_sesionesMonitores");
            echo "\" method=\"post\">
                </form>
            ";
        }
        // line 30
        echo "            <script type=\"text/javascript\">
                setTimeout(function(){document.getElementById(\"formu\").submit();}, 3000); 
            </script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  98 => 27,  91 => 24,  89 => 23,  83 => 21,  81 => 20,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  62 => 11,  59 => 10,  57 => 9,  52 => 6,  49 => 5,  43 => 4,  38 => 3,  11 => 1,);
    }
}
