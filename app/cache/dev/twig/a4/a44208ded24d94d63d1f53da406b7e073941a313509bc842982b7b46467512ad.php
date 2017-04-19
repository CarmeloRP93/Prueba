<?php

/* CriveroPruebaBundle:Usuarios:login.html.twig */
class __TwigTemplate_927b0ab6d83594ddf413d257d9f99b9ca8687124169182a83c918be848155a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:login.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/loginstyle.css"), "html", null, true);
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
        echo "    <div class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
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
        // line 26
        echo "            </div>

            <div class=\"item\">
";
        // line 30
        echo "            </div>
            <div class=\"item\">
";
        // line 33
        echo "            </div>
        </div>
    </div>  
    <br> 
    <div class=\"container\" text=\"center\">
        <div id=\"login-form\" class=\"loginmodal-container\">
            <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
                <h3>Inicio de sesión</h3>
                ";
        // line 41
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 42
            echo "                    <div class=\"text-danger\">
                        <p>
                        <h4>
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </h4>
                        </p>
                    </div>
                ";
        }
        // line 50
        echo "
                <fieldset>
                    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" required autofocus />
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Pass\" required />
                    <input type=\"hidden\" name=\"_target_path\" value=\"crivero_prueba_home\" />
                    <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">Entrar</button>   

                </fieldset>
            </form>
        </div> <!-- /login-form -->
    </div> <!-- /container -->
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
        return array (  114 => 52,  110 => 50,  102 => 45,  97 => 42,  95 => 41,  90 => 39,  82 => 33,  78 => 30,  73 => 26,  59 => 13,  56 => 12,  51 => 10,  45 => 9,  38 => 6,  36 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CriveroPruebaBundle::main.html.twig' %}

{% block stylesheets %}
    {#    <link rel=\"stylesheet\" href=\"{{ asset('public/css/signin.css') }}\">#}
    {#    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">#}
    <link href=\"{{ asset('css/loginstyle.css') }}\" type=\"text/css\" rel=\"stylesheet\">
{% endblock %}

{% block title %}Login{% endblock %}
{% block navegation %}{% endblock %}

{% block contenido %}
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
{#                <img src=\"{{ asset('images/campo.jpg') }}\"  width=\"100%\" background-size=\"cover\"/>#}
            </div>

            <div class=\"item\">
{#                <img src=\"{{ asset('images/basket.jpg') }}\"  width=\"100%\" background-size=\"cover\"/>#}
            </div>
            <div class=\"item\">
{#                <img src=\"{{ asset('images/basket.jpg') }}\"  width=\"100%\" background-size=\"cover\"/>#}
            </div>
        </div>
    </div>  
    <br> 
    <div class=\"container\" text=\"center\">
        <div id=\"login-form\" class=\"loginmodal-container\">
            <form action=\"{{ path('crivero_prueba_login_check') }}\" method=\"post\" class=\"form-signin\">
                <h3>Inicio de sesión</h3>
                {% if error %}
                    <div class=\"text-danger\">
                        <p>
                        <h4>
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </h4>
                        </p>
                    </div>
                {% endif %}

                <fieldset>
                    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{last_username}}\" placeholder=\"Usuario\" required autofocus />
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Pass\" required />
                    <input type=\"hidden\" name=\"_target_path\" value=\"crivero_prueba_home\" />
                    <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">Entrar</button>   

                </fieldset>
            </form>
        </div> <!-- /login-form -->
    </div> <!-- /container -->
{% endblock %}", "CriveroPruebaBundle:Usuarios:login.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/login.html.twig");
    }
}
