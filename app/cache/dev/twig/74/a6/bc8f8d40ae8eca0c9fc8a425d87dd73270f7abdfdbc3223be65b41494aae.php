<?php

/* modulomonitoresmonitoresBundle:Default:homeMonitores.html.twig */
class __TwigTemplate_74a6bc8f8d40ae8eca0c9fc8a425d87dd73270f7abdfdbc3223be65b41494aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("modulomonitoresmonitoresBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'navegation' => array($this, 'block_navegation'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modulomonitoresmonitoresBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Monitor ";
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
    public function block_header($context, array $blocks = array())
    {
    }

    // line 8
    public function block_navegation($context, array $blocks = array())
    {
    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        // line 10
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
        return "modulomonitoresmonitoresBundle:Default:homeMonitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  66 => 9,  61 => 8,  56 => 7,  49 => 5,  46 => 4,  40 => 3,  11 => 1,);
    }
}
