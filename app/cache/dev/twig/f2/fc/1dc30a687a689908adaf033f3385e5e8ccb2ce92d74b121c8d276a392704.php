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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 3
    public function block_navegation($context, array $blocks = array())
    {
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <body style=\"margin-top: -70px\">
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
        // line 18
        echo "                </div>

                <div class=\"item\">
                    ";
        // line 22
        echo "                </div>
                <div class=\"item\">
                    ";
        // line 25
        echo "                </div>
            </div>
        </div>  
        <br>
        <div class=\"container text-center\">
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-3 col-md-offset-4 col-lg-offset-4\">
                <div class=\"panel panel-default\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width: 200px; margin-top: 10px\">           
                    <form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
                        <h3 class=\"t3\">Inicio de sesión</h3>
                        <div class=\"panel-body\">  
                            ";
        // line 36
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 37
            echo "                                <div class=\"text-danger\">
                                    <p>
                                    <h4>
                                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                                    </h4>
                                    </p>
                                </div>
                            ";
        }
        // line 45
        echo "                            <fieldset>
                                <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" required autofocus />
                                <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" required style=\"margin-top: 10px\"/>
                                <input type=\"hidden\" name=\"_target_path\" value=\"crivero_prueba_home\"/>
                                <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">Entrar</button>   
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
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
        return array (  112 => 46,  109 => 45,  101 => 40,  96 => 37,  94 => 36,  88 => 33,  84 => 32,  75 => 25,  71 => 22,  66 => 18,  52 => 5,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
