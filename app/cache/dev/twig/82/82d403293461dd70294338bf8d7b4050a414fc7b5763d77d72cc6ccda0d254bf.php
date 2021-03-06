<?php

/* CriveroPruebaBundle:Usuarios:editar.html.twig */
class __TwigTemplate_62bfbbdffa006c4ac9c1b921a31928386c28c76f83b9bd6838a28b55981426a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:editar.html.twig", 1);
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
        echo " ";
        echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) ? ("Editar perfil") : ("Editar usuario"));
        echo "  ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container \"><br>
        <div class=\"col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    ";
        // line 10
        echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) ? ("<h2 class=\"t3\">Editar perfil</h2>") : ("<h2 class=\"t3\">Editar usuario</h2>"));
        echo " 

                </div>
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <div class=\"panel-body\">
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "
                                    <span class=\"text-danger\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo electrónico")));
        echo "
                                    <span class=\"text-danger\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                                </div>

                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de pila")));
        echo "
                                    <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Clave de acceso")));
        echo "
                                    <span class=\"text-danger\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                                <div class=\"form-group\">
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fNacimiento", array()), 'label');
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fNacimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ej: 08/10/1993")));
        echo "
                                    <span class=\"text-danger\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fNacimiento", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label');
        echo "
                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ej: 651-44-19-75")));
        echo "
                                    <span class=\"text-danger\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"hidden\">
                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'label');
        echo "
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    <span class=\"text-danger\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>
                        ";
        // line 68
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))) {
            // line 69
            echo "                            <div class=\"form-group\">
                                ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
            echo "
                                ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget');
            echo "
                                <span class=\"text-danger\">";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
            echo "</span>
                            </div>
                        ";
        } else {
            // line 75
            echo "                            <div class=\"hidden\">
                                ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
            echo "
                                ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget');
            echo "
                                <span class=\"text-danger\">";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
            echo "</span>
                            </div>
                        ";
        }
        // line 81
        echo "
                    </form><br>
                    <div class=\"text-center\">
                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                        ";
        // line 85
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "tipo", array()) == 2)) {
            // line 86
            echo "                            ";
            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array())));
            // line 87
            echo "                        ";
        } elseif (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "tipo", array()) == 3)) {
            // line 88
            echo "                            ";
            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_monitor", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array())));
            // line 89
            echo "                        ";
        } else {
            // line 90
            echo "                            ";
            $context["ruta"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_perfil");
            // line 91
            echo "                        ";
        }
        // line 92
        echo "                        <form class=\"alinear\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["ruta"]) ? $context["ruta"] : $this->getContext($context, "ruta")), "html", null, true);
        echo "\">
                            <button type=\"submit\" class=\"btn btn-danger\" >Cancelar</button>
                        </form>
                    </div>
                    ";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>               
        </div>
    </div>           

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 96,  238 => 92,  235 => 91,  232 => 90,  229 => 89,  226 => 88,  223 => 87,  220 => 86,  218 => 85,  214 => 84,  209 => 81,  203 => 78,  199 => 77,  195 => 76,  192 => 75,  186 => 72,  182 => 71,  178 => 70,  175 => 69,  173 => 68,  166 => 64,  162 => 63,  158 => 62,  150 => 57,  146 => 56,  142 => 55,  134 => 50,  130 => 49,  126 => 48,  114 => 39,  110 => 38,  106 => 37,  100 => 34,  96 => 33,  92 => 32,  83 => 26,  79 => 25,  75 => 24,  69 => 21,  65 => 20,  61 => 19,  52 => 13,  46 => 10,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
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

{% block title %} {{ (usuario.id == app.user.id) ?  'Editar perfil' : 'Editar usuario' }}  {% endblock %}

{% block contenido %}
    <div class=\"container \"><br>
        <div class=\"col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    {{ (usuario.id == app.user.id) ?  '<h2 class=\"t3\">Editar perfil</h2>'|raw : '<h2 class=\"t3\">Editar usuario</h2>'|raw }} 

                </div>
                {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate', 'role' : 'form'} }) }}
                <div class=\"panel-body\">
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.username) }}
                                    {{ form_widget(form.username, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Username'} }) }}
                                    <span class=\"text-danger\">{{ form_errors(form.username) }}</span>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.email) }}
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Correo electrónico'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.email) }}</span>
                                </div>

                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.nombre) }}
                                    {{ form_widget(form.nombre, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Nombre de pila'} }) }}
                                    <span class=\"text-danger\">{{ form_errors(form.nombre) }}</span>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.password) }}
                                    {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder' : 'Clave de acceso'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.password) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                                <div class=\"form-group\">
                                    {{ form_label(form.fNacimiento) }}
                                    {{ form_widget(form.fNacimiento, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Ej: 08/10/1993'} }) }}
                                    <span class=\"text-danger\">{{ form_errors(form.fNacimiento) }}</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.telefono) }}
                                    {{ form_widget(form.telefono, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Ej: 651-44-19-75'} }) }}
                                    <span class=\"text-danger\">{{ form_errors(form.telefono) }}</span>
                                </div>
                            </div>
                            <div class=\"hidden\">
                                <div class=\"form-group\">
                                    {{ form_label(form.tipo) }}
                                    {{ form_widget(form.tipo, {'attr': {'class': 'form-control'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.tipo) }}</span>
                                </div>
                            </div>
                        </div>
                        {% if app.user.id == usuario.id %}
                            <div class=\"form-group\">
                                {{ form_label(form.imagen) }}
                                {{ form_widget(form.imagen) }}
                                <span class=\"text-danger\">{{ form_errors(form.imagen) }}</span>
                            </div>
                        {% else %}
                            <div class=\"hidden\">
                                {{ form_label(form.imagen) }}
                                {{ form_widget(form.imagen) }}
                                <span class=\"text-danger\">{{ form_errors(form.imagen) }}</span>
                            </div>
                        {% endif %}

                    </form><br>
                    <div class=\"text-center\">
                        {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
                        {% if usuario.tipo == 2 %}
                            {% set ruta = path('crivero_prueba_cliente', { id: usuario.id }) %}
                        {% elseif usuario.tipo == 3 %}
                            {% set ruta = path('crivero_prueba_monitor', { id: usuario.id }) %}
                        {% else %}
                            {% set ruta = path('crivero_prueba_perfil') %}
                        {% endif %}
                        <form class=\"alinear\" action=\"{{ ruta }}\">
                            <button type=\"submit\" class=\"btn btn-danger\" >Cancelar</button>
                        </form>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>               
        </div>
    </div>           

{% endblock %}", "CriveroPruebaBundle:Usuarios:editar.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/editar.html.twig");
    }
}
