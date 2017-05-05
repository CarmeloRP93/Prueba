<?php

/* CriveroPruebaBundle:Usuarios:nuevo.html.twig */
class __TwigTemplate_38da1496f5b941507722ed1cd5c8418e9c91619b349704bb656b98daa619476a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:nuevo.html.twig", 1);
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
        echo " Nuevo usuario ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\"><br>
        <div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h2 class=\"t1\">Nuevo usuario</h2>
                </div>
                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <div class=\"panel-body\">
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "
                                    <span class=\"text-danger\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo electrónico")));
        echo "
                                    <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                                </div>

                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de pila")));
        echo "
                                    <span class=\"text-danger\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Clave de acceso")));
        echo "
                                    <span class=\"text-danger\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                                <div class=\"form-group\">
                                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fNacimiento", array()), 'label');
        echo "
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fNacimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ej: 08/10/1993")));
        echo "
                                    <span class=\"text-danger\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fNacimiento", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label');
        echo "
                                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ej: 651-44-19-75")));
        echo "
                                    <span class=\"text-danger\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"form-group\">
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'label');
        echo "
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    <span class=\"text-danger\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"hidden\">
                            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
        echo "
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget');
        echo "
                            <span class=\"text-danger\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
        echo "</span>
                        </div>

                    </form><br>
                    <div class=\"text-center\">
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                          <form class=\"alinear\" action=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_clientes");
        echo "\">
                            <button type=\"submit\" class=\"btn btn-danger\" >Cancelar</button>
                        </form>
                    </div>
                    ";
        // line 81
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
        return "CriveroPruebaBundle:Usuarios:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 81,  189 => 77,  185 => 76,  177 => 71,  173 => 70,  169 => 69,  160 => 63,  156 => 62,  152 => 61,  144 => 56,  140 => 55,  136 => 54,  128 => 49,  124 => 48,  120 => 47,  108 => 38,  104 => 37,  100 => 36,  94 => 33,  90 => 32,  86 => 31,  77 => 25,  73 => 24,  69 => 23,  63 => 20,  59 => 19,  55 => 18,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Nuevo usuario {% endblock %}

{% block contenido %}
    <div class=\"container\"><br>
        <div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h2 class=\"t1\">Nuevo usuario</h2>
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
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"form-group\">
                                    {{ form_label(form.tipo) }}
                                    {{ form_widget(form.tipo, {'attr': {'class': 'form-control'}}) }}
                                    <span class=\"text-danger\">{{ form_errors(form.tipo) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"hidden\">
                            {{ form_label(form.imagen) }}
                            {{ form_widget(form.imagen) }}
                            <span class=\"text-danger\">{{ form_errors(form.imagen) }}</span>
                        </div>

                    </form><br>
                    <div class=\"text-center\">
                        {{ form_widget(form.confirmar, {'label' : 'Confirmar', 'attr': {'class': 'btn btn-success'}}) }}
                          <form class=\"alinear\" action=\"{{ path(\"crivero_prueba_clientes\") }}\">
                            <button type=\"submit\" class=\"btn btn-danger\" >Cancelar</button>
                        </form>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>               
        </div>
    </div>           

{% endblock %}
", "CriveroPruebaBundle:Usuarios:nuevo.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/nuevo.html.twig");
    }
}
