<?php

/* CriveroPruebaBundle:Usuarios:monitor.html.twig */
class __TwigTemplate_54872d101489ea665c4555f02d82fceb37d6a68b64cd80ec8945fde08f6db260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:monitor.html.twig", 1);
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
        echo " Monitor ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "username", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"usuardesc\">
            <div class=\"accionesExclus\">
                <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_enviarMensaje");
        echo "\" method=\"post\" class=\"\">
                    <button style=\"padding-bottom: 26px\" type=\"submit\" class=\"btn btn-primary\">Enviar mensaje</button>
                </form>
                <p>";
        // line 11
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar usuario"));
        echo "</p>
            </div>
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "username", array()), "html", null, true);
        echo "</h1>
            <div class=\"usuarfot\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "imagen", array()))), "html", null, true);
        echo "\" style=\"float: left; width: 100%;\" />        
            </div>
            <div class=\"usuardat\">
                <div id=\"resersiones\">
                    ";
        // line 19
        if (((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")) != null)) {
            // line 20
            echo "                        <div>
                            <h4>Sesiones: </h4> 
                            <form action=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesiones_monitor", array("id" => $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                <button type=\"submit\" class=\"btn btn-success\">Ver sesiones</button>
                            </form>
                            ";
            // line 32
            echo "                        </div>
                    ";
        }
        // line 34
        echo "                </div>
                <h4>Nombre: </h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
        echo "</p>
                <h4>F.Nacimiento: </h4> <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                <h4>Telefono: </h4> <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "telefono", array()), "html", null, true);
        echo "</p>
                <h4>Registro: </h4> <p>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:monitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  95 => 37,  91 => 36,  87 => 35,  84 => 34,  80 => 32,  74 => 22,  70 => 20,  68 => 19,  61 => 15,  56 => 13,  51 => 11,  45 => 8,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
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

{% block title %} Monitor {{monitor.username}} {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"usuardesc\">
            <div class=\"accionesExclus\">
                <form action=\"{{ path('crivero_prueba_enviarMensaje') }}\" method=\"post\" class=\"\">
                    <button style=\"padding-bottom: 26px\" type=\"submit\" class=\"btn btn-primary\">Enviar mensaje</button>
                </form>
                <p>{{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form, nombre: \"Eliminar usuario\" })}}</p>
            </div>
            <h1>{{monitor.username}}</h1>
            <div class=\"usuarfot\">
                <img src=\"{{ asset('images/' ~ monitor.imagen) }}\" style=\"float: left; width: 100%;\" />        
            </div>
            <div class=\"usuardat\">
                <div id=\"resersiones\">
                    {% if sesiones != null %}
                        <div>
                            <h4>Sesiones: </h4> 
                            <form action=\"{{ path('crivero_prueba_sesiones_monitor', { id: monitor.id })}}\" method=\"post\" class=\"form-signin\">
                                <button type=\"submit\" class=\"btn btn-success\">Ver sesiones</button>
                            </form>
                            {#<ul id=\"sesiones\">
                                {% for sesion in sesiones %}
                                    <li>
                                        <p>Aula {{sesion.aula}} - {{sesion.nombre}} - {{sesion.horario}}</p>
                                    </li>
                                {% endfor %}
                            </ul>#}
                        </div>
                    {% endif %}
                </div>
                <h4>Nombre: </h4> <p>{{monitor.nombre}}</p>
                <h4>F.Nacimiento: </h4> <p>{{monitor.fNacimiento}}</p>
                <h4>Telefono: </h4> <p>{{monitor.telefono}}</p>
                <h4>Registro: </h4> <p>{{monitor.registro|date('d/m/Y')}}</p>
            </div>
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Usuarios:monitor.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/monitor.html.twig");
    }
}
