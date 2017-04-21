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
        echo "    <div class=\"container\" >
        ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 1)) {
            // line 8
            echo "            ";
            // line 9
            echo "            <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_clientes");
            echo "\" method=\"post\">
            </form>
            ";
            // line 12
            echo "        ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 2)) {
            // line 13
            echo "            <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_reservasClientes");
            echo "\" method=\"post\">
            </form>
        ";
        } else {
            // line 16
            echo "            <form id=\"formu\" action=\"";
            echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_misSesionesMonitores");
            echo "\" method=\"post\">
            </form>
        ";
        }
        // line 19
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loading.gif"), "html", null, true);
        echo "\" style=\"position: absolute; top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%); width: 25%;\" />
    </div>

    <script type=\"text/javascript\">
        setTimeout(function () {
            document.getElementById(\"formu\").submit();
        }, 2000);
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
        return array (  82 => 19,  75 => 16,  68 => 13,  65 => 12,  59 => 9,  57 => 8,  55 => 7,  52 => 6,  49 => 5,  43 => 4,  38 => 3,  11 => 1,);
    }
}
