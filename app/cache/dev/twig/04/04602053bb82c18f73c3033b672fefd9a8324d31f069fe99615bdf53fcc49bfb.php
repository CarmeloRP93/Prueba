<?php

/* CriveroPruebaBundle:Usuarios:home.html.twig */
class __TwigTemplate_053ca705518580c627ff0a18f2e5dda13dda5f726d7957748fe976caa28542ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:home.html.twig", 1);
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
            echo "            <form id=\"formu\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_clientes");
            echo "\" method=\"post\">
            </form>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 2)) {
            // line 11
            echo "            ";
            if ((twig_date_format_filter($this->env, "now", "dmY") >= $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fechaPagar", array()))) {
                // line 12
                echo "                <form id=\"formu\" action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_pagar");
                echo "\" method=\"post\">
                </form>
            ";
            } else {
                // line 15
                echo "                <form id=\"formu\" action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_reservasClientes");
                echo "\" method=\"post\">
                </form>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <form id=\"formu\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulomonitores_monitores_misSesionesMonitores");
            echo "\" method=\"post\">
            </form>
        ";
        }
        // line 22
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/loading.gif"), "html", null, true);
        echo "\" class=\"centradoV\" style=\"width: 10%; top: 50%\" />
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
        return array (  84 => 22,  77 => 19,  74 => 18,  67 => 15,  60 => 12,  57 => 11,  55 => 10,  49 => 8,  47 => 7,  44 => 6,  41 => 5,  35 => 4,  30 => 3,  11 => 1,);
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

{% block navegation %}{% endblock %}
{% block title %}Home{% endblock %}
{% block body %}
    <div class=\"container\" >
        {% if app.user.tipo == 1 %}
            <form id=\"formu\" action=\"{{ path('crivero_prueba_clientes') }}\" method=\"post\">
            </form>
        {% elseif app.user.tipo == 2 %}
            {% if \"now\"|date('dmY') >= app.user.fechaPagar %}
                <form id=\"formu\" action=\"{{ path('moduloclientes_cliente_pagar') }}\" method=\"post\">
                </form>
            {% else %}
                <form id=\"formu\" action=\"{{ path('moduloclientes_cliente_reservasClientes') }}\" method=\"post\">
                </form>
            {% endif %}
        {% else %}
            <form id=\"formu\" action=\"{{ path('modulomonitores_monitores_misSesionesMonitores') }}\" method=\"post\">
            </form>
        {% endif %}
        <img src=\"{{ asset('images/loading.gif') }}\" class=\"centradoV\" style=\"width: 10%; top: 50%\" />
    </div>

    <script type=\"text/javascript\">
        setTimeout(function () {
            document.getElementById(\"formu\").submit();
        }, 2000);
    </script>
{% endblock %}", "CriveroPruebaBundle:Usuarios:home.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/home.html.twig");
    }
}
