<?php

/* CriveroPruebaBundle:Sesiones:horariosSesion.html.twig */
class __TwigTemplate_4ad52e58f933fff2c7b538d1d36b10db15474bb277f477197fa62f3efed6ce7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Sesiones:horariosSesion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo " Sesión ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " - Horarios ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesión ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " - Horarios</h1>
        </div>
        <h4 class=\"t3\">*Las sesiones se realizarán en el aula: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "html", null, true);
        echo "</h4>
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-bordered\">
                <thead>
                    <tr>
                        <th>Nº Sesión</th>
                        <th>Dia y hora</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context["i"] = 1;
        // line 21
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 22
            echo "                        <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $context["horario"], "html", null, true);
            echo "</td>
                            ";
            // line 25
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 26
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </tbody>
            </table>
        </div>
            ";
        // line 31
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")) {
            echo "    
                <a class=\"btn btn-success\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\">Volver atrás</a>
            ";
        } else {
            // line 34
            echo "                <a class=\"btn btn-success\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\">Volver atrás</a>
            ";
        }
        // line 36
        echo "       ";
        // line 39
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:horariosSesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 39,  109 => 36,  103 => 34,  98 => 32,  94 => 31,  89 => 28,  82 => 26,  80 => 25,  76 => 24,  72 => 23,  69 => 22,  64 => 21,  62 => 20,  49 => 10,  44 => 8,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Sesión {{ sesion.nombre }} - Horarios {% endblock %}

{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesión {{ sesion.nombre }} - Horarios</h1>
        </div>
        <h4 class=\"t3\">*Las sesiones se realizarán en el aula: {{aula}}</h4>
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-bordered\">
                <thead>
                    <tr>
                        <th>Nº Sesión</th>
                        <th>Dia y hora</th>
                    </tr>
                </thead>
                <tbody>
                    {% set i = 1 %}
                    {% for horario in horarios %}
                        <tr>
                            <td>{{i}}</td>
                            <td>{{horario}}</td>
                            {% set i = i + 1 %}
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
            {% if app.request.headers.get('referer') %}    
                <a class=\"btn btn-success\" href=\"{{ app.request.headers.get('referer') }}\">Volver atrás</a>
            {% else %}
                <a class=\"btn btn-success\" href=\"{{ path('crivero_prueba_sesion', { id: sesion.id }) }}\">Volver atrás</a>
            {% endif %}
       {#<form action=\"{{ app.request.headers.get('referer') }}\">        
            <button type=\"submit\" class=\"btn btn-success\">Volver atrás</button>
        </form>  #}
    </div>
{% endblock %}", "CriveroPruebaBundle:Sesiones:horariosSesion.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Sesiones/horariosSesion.html.twig");
    }
}
