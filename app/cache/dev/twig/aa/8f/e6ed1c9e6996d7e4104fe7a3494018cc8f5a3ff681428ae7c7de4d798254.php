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
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 8
    public function block_navegation($context, array $blocks = array())
    {
    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        // line 11
        echo "
    <div class=\"container\">
  <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
   <h2 class=\"form-signin-heading\">Inicio de Sesión</h2>

          ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "            <div class=\"text-danger\">
                <p>
                    <h4>
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </h4>
                </p>
            </div>
            ";
        }
        // line 25
        echo "
      <label for=\"username\" class=\"sr-only\">Usuario:</label>
      <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_nombre\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"\" required autofocus />

      <label for=\"password\" class=\"sr-only\">Password:</label>
      <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"\" required />
                    <input type=\"hidden\" name=\"_target_path\" value=\"crivero_prueba_home\" />

      <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">Entrar</button>
  </form>
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
        return array (  87 => 27,  83 => 25,  75 => 20,  70 => 17,  68 => 16,  62 => 13,  58 => 11,  55 => 10,  50 => 8,  44 => 7,  39 => 3,  11 => 1,);
    }
}
