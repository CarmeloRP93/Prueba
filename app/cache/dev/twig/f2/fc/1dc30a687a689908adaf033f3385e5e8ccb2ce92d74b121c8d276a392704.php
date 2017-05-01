<?php

/* CriveroPruebaBundle:Usuarios:login.html.twig */
class __TwigTemplate_f2fc1dc30a687a689908adaf033f3385e5e8ccb2ce92d74b121c8d276a392704 extends Twig_Template
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
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/loginstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 10
    public function block_navegation($context, array $blocks = array())
    {
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "    <body style=\" margin: 0px\">
        <div class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    ";
        // line 27
        echo "                </div>

                <div class=\"item\">
                    ";
        // line 31
        echo "                </div>
                <div class=\"item\">
                    ";
        // line 34
        echo "                </div>
            </div>
        </div>  
        <br> 
        <div class=\"container\" text=\"center\">
            <div id=\"login-form\" class=\"loginmodal-container\">
                <form action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
                    <h3>Inicio de sesión</h3>
                    ";
        // line 42
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 43
            echo "                        <div class=\"text-danger\">
                            <p>
                            <h4>
                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                            </h4>
                            </p>
                        </div>
                    ";
        }
        // line 51
        echo "
                    <fieldset>
                        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" required autofocus />
                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Pass\" required />
                        <input type=\"hidden\" name=\"_target_path\" value=\"crivero_prueba_home\" />
                        <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">Entrar</button>   

                    </fieldset>
                </form>
            </div> <!-- /login-form -->
        </div> <!-- /container -->
    </div> <!-- /body -->
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 53,  119 => 51,  111 => 46,  106 => 43,  104 => 42,  99 => 40,  91 => 34,  87 => 31,  82 => 27,  67 => 13,  64 => 12,  59 => 10,  53 => 9,  46 => 6,  44 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
