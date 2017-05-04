<?php

/* CriveroPruebaBundle:Usuarios:perfil.html.twig */
class __TwigTemplate_3f935735e9bd369e3170933ac654f6889f65889fa1765ca1bfef8d1124fc473e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:perfil.html.twig", 1);
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
        echo " Perfil ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success2.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3 style=\"font-weight: 600\">Perfil</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" style=\"margin-top: 18px;\">
                            <a href = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default active\">Editar</a>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">  

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                            <h4>Nombre </h4> <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</p>
                            <h4>Fecha nacimiento </h4> <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                            <h4>E-mail </h4> <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "</p>
                            <h4>Teléfono </h4> <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "</p>
                            <h4>Rol</h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol"))), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            <h4>Nombre de usuario</h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</p>        
                            <h4>Registro </h4> <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                            ";
        // line 37
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "tipo", array()) == 1)) {
            // line 38
            echo "                                <br>
                                <div style=\"display: inline-grid\">
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_mensajearDirector");
            echo "\" method=\"post\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-primary\">Mensaje a director</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_nuevo");
            echo "\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-info\">Publicar evento</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_nuevo");
            echo "\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-warning\">Cambiar horario</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_logout");
            echo "\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Salir de sesión</button>
                                    </form>
                                </div>

                            ";
        }
        // line 61
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 61,  130 => 54,  122 => 49,  114 => 44,  107 => 40,  103 => 38,  101 => 37,  97 => 36,  93 => 35,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  58 => 18,  49 => 12,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
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

{% block title %} Perfil {% endblock %}
{% block contenido %}
    {{ include('CriveroPruebaBundle:Default:messages/success2.html.twig') }}
    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <img src=\"{{ asset('images/' ~ usuario.imagen) }}\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3 style=\"font-weight: 600\">Perfil</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" style=\"margin-top: 18px;\">
                            <a href = \"{{path('crivero_prueba_editarUsuario', { id: usuario.id })}}\" class=\"btn btn-default active\">Editar</a>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">  

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                            <h4>Nombre </h4> <p>{{usuario.nombre}}</p>
                            <h4>Fecha nacimiento </h4> <p>{{usuario.fNacimiento}}</p>
                            <h4>E-mail </h4> <p>{{usuario.email}}</p>
                            <h4>Teléfono </h4> <p>{{usuario.telefono}}</p>
                            <h4>Rol</h4> <p>{{ rol|capitalize }}</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            <h4>Nombre de usuario</h4> <p>{{usuario.username}}</p>        
                            <h4>Registro </h4> <p>{{usuario.registro|date('d/m/Y')}}</p>
                            {% if usuario.tipo == 1 %}
                                <br>
                                <div style=\"display: inline-grid\">
                                    <form class=\"btn-group-vertical\" action=\"{{ path('crivero_prueba_mensajearDirector') }}\" method=\"post\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-primary\">Mensaje a director</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"{{ path('crivero_prueba_nuevo') }}\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-info\">Publicar evento</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"{{ path('crivero_prueba_nuevo') }}\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-warning\">Cambiar horario</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"{{ path('crivero_prueba_logout') }}\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Salir de sesión</button>
                                    </form>
                                </div>

                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "CriveroPruebaBundle:Usuarios:perfil.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/perfil.html.twig");
    }
}
