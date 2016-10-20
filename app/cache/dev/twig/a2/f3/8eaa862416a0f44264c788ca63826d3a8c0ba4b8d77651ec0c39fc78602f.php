<?php

/* CriveroPruebaBundle:Default:home.html.twig */
class __TwigTemplate_a2f38eaa862416a0f44264c788ca63826d3a8c0ba4b8d77651ec0c39fc78602f extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Admin ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_navegation($context, array $blocks = array())
    {
    }

    // line 8
    public function block_contenido($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"container\">

        <div id=\"login-form\">

            <h3>Login</h3>

            <fieldset>

                <form action=\"javascript:void(0);\" method=\"get\">

                    <input type=\"email\" required value=\"Email\" onBlur=\"if (this.value == '')
                                this.value = 'Email'\" onFocus=\"if (this.value == 'Email')
                                            this.value = ''\"> <!-- JS because of IE support; better: placeholder=\"Email\" -->

                    <input type=\"password\" required value=\"Password\" onBlur=\"if (this.value == '')
                                this.value = 'Password'\" onFocus=\"if (this.value == 'Password')
                                            this.value = ''\"> <!-- JS because of IE support; better: placeholder=\"Password\" -->

                    <input type=\"submit\" value=\"Login\">

                    <footer class=\"clearfix\">

                        <p><span class=\"info\">?</span><a href=\"#\">Forgot Password</a></p>

                    </footer>

                </form>

            </fieldset>

        </div> <!-- end login-form -->
    </div>

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
        return array (  63 => 9,  60 => 8,  55 => 7,  48 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
