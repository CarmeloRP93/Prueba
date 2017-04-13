<?php

/* moduloclientesclienteBundle:Usuarios:miPerfil.html.twig */
class __TwigTemplate_bbbcf7c8ea18514389fc6f5dc9c91c310d1c8f7e292bd7e760752fcddc538d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Usuarios:miPerfil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "moduloclientesclienteBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Cliente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"usuardesc container\">
        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                     <h1 class=\"t1\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"panel-body\">
                    <div class=\"usuarfot\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/no-image-found.png"), "html", null, true);
        echo "\" style=\"float: left; width: 120%;\" />        
                    </div>
                    
                    <h4>Nombre: </h4> <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</p>
                    <h4>F.Nacimiento: </h4> <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                    <h4>Telefono: </h4> <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "</p>
                    <h4>Registro: </h4> <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "registro", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>

                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Usuarios:miPerfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  67 => 18,  63 => 17,  59 => 16,  53 => 13,  46 => 9,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'moduloclientesclienteBundle::main.html.twig' %}

{% block title %} Cliente {{usuario.nombre}} {% endblock %}
{% block contenido %}
    <div class=\"usuardesc container\">
        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                     <h1 class=\"t1\">{{usuario.nombre}}</h1>
                </div>
                <div class=\"panel-body\">
                    <div class=\"usuarfot\">
                        <img src=\"{{ asset('images/no-image-found.png') }}\" style=\"float: left; width: 120%;\" />        
                    </div>
                    
                    <h4>Nombre: </h4> <p>{{usuario.nombre}}</p>
                    <h4>F.Nacimiento: </h4> <p>{{usuario.fNacimiento}}</p>
                    <h4>Telefono: </h4> <p>{{usuario.telefono}}</p>
                    <h4>Registro: </h4> <p>{{usuario.registro|date('d/m/Y H:i')}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "moduloclientesclienteBundle:Usuarios:miPerfil.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Usuarios/miPerfil.html.twig");
    }
}
