<?php

/* CriveroPruebaBundle:Usuarios:home.html.twig */
class __TwigTemplate_570f3de54131cdb5ba5efa2690a5ba9af89c775b88c14b0a5e01404a2c09000e extends Twig_Template
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
        echo " <div class=\"container\" >
            ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 1)) {
            // line 9
            echo "                    <form id=\"formu\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_clientes");
            echo "\" method=\"post\">
                    </form>
";
            // line 12
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 2)) {
            // line 13
            echo "                <form id=\"formu\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_reservasClientes");
            echo "\" method=\"post\">
                </form>
            ";
        } else {
            // line 16
            echo "                <form id=\"formu\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modulomonitores_monitores_misSesionesMonitores");
            echo "\" method=\"post\">
                </form>
            ";
        }
        // line 19
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/loading.gif"), "html", null, true);
        echo "\" style=\"margin-left: 35%; margin-top: 15%\" />
 </div>
            
<script type=\"text/javascript\">
    setTimeout(function(){document.getElementById(\"formu\").submit();}, 2000); 
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
        return array (  72 => 19,  65 => 16,  58 => 13,  55 => 12,  49 => 9,  47 => 7,  44 => 6,  41 => 5,  35 => 4,  30 => 3,  11 => 1,);
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
{#                {% if 'now'|date('d-m') == app.user.fechaPagar|date('d-m') || moroso == true %}#}
                    <form id=\"formu\" action=\"{{ path('crivero_prueba_clientes') }}\" method=\"post\">
                    </form>
{#                {% endif %}#}
            {% elseif app.user.tipo == 2 %}
                <form id=\"formu\" action=\"{{ path('moduloclientes_cliente_reservasClientes') }}\" method=\"post\">
                </form>
            {% else %}
                <form id=\"formu\" action=\"{{ path('modulomonitores_monitores_misSesionesMonitores') }}\" method=\"post\">
                </form>
            {% endif %}
            <img src=\"{{ asset('images/loading.gif') }}\" style=\"margin-left: 35%; margin-top: 15%\" />
 </div>
            
<script type=\"text/javascript\">
    setTimeout(function(){document.getElementById(\"formu\").submit();}, 2000); 
</script>
{% endblock %}", "CriveroPruebaBundle:Usuarios:home.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/home.html.twig");
    }
}
