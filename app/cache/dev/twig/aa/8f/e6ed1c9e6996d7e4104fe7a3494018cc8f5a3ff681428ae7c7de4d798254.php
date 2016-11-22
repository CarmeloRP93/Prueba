<?php

/* CriveroPruebaBundle:Default:login.html.twig */
class __TwigTemplate_aa8fe6ed1c9e6996d7e4104fe7a3494018cc8f5a3ff681428ae7c7de4d798254 extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"container\">
\t\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
\t\t\t<h2 class=\"form-signin-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Please sign in"), "html", null, true);
        echo "</h2>

           ";
        // line 22
        echo "
\t\t    <label for=\"username\" class=\"sr-only\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo ":</label>
\t\t    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_email\" value=\"\" placeholder=\"\" required autofocus />

\t\t    <label for=\"password\" class=\"sr-only\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo ":</label>
\t\t    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"\" required />
\t\t    
\t\t    <input type=\"hidden\" name=\"_target_path\" value=\"crivero_prueba_clientes\" />

\t\t    <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">Entrar</button>
\t\t</form>
    </div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  66 => 23,  63 => 22,  58 => 11,  54 => 10,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
