<?php

/* CriveroPruebaBundle:Usuarios:clientes.html.twig */
class __TwigTemplate_119e56fcd30720ea062d86dfd94d63b6ca9cc36a78e23ed31c783008f51bec58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:clientes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Clientes ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        echo " 
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    ";
        // line 10
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Clientes</h1>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                ";
        // line 17
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 18
            echo "                    <h2>No se encontraron clientes</h2>
                ";
        } else {
            // line 20
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 25
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Usuario", "u.username");
            echo "</th>
                                    <th>";
            // line 26
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "u.nombre");
            echo "</th>
                                    <th>";
            // line 27
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Correo electrónico", "u.email");
            echo "</th>
                                    <th>";
            // line 28
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Creado", "u.registro");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 34
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
                echo "\">
                                        <td><img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["usuario"], "imagen", array()))), "html", null, true);
                echo "\" class=\"img-responsive center-block \" style=\"max-width: 45px\"/></td>
                                            ";
                // line 36
                if (($this->getAttribute($context["usuario"], "activo", array()) == 1)) {
                    // line 37
                    echo "                                            <td><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                } else {
                    // line 39
                    echo "                                            <td style=\"color: red\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
                    echo "</strong></td>
                                                ";
                }
                // line 41
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "registro", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            ";
                // line 45
                if (($this->getAttribute($context["usuario"], "activo", array()) == 1)) {
                    // line 46
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                    Ver
                                                </a>
                                            ";
                } else {
                    // line 50
                    echo "                                                <button class=\"btn btn-sm btn-info noMargenBoton\" disabled>Ver</button>
                                            ";
                }
                // line 52
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary noMargenBoton\">
                                                Editar
                                            </a>
                                            ";
                // line 55
                if (($this->getAttribute($context["usuario"], "activo", array()) == 1)) {
                    // line 56
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_pagos_usuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-warning noMargenBoton\">
                                                    Pagos
                                                </a>
                                            ";
                } else {
                    // line 60
                    echo "                                                <button class=\"btn btn-sm btn-warning noMargenBoton\" disabled>Pagos</button>
                                            ";
                }
                // line 62
                echo "                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 72
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 73
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 77
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "id" => "form-delete", "with_submit" => false));
        echo "
    ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/criveroprueba/js/delete-user.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 82,  202 => 81,  199 => 80,  193 => 77,  186 => 73,  183 => 72,  177 => 68,  166 => 62,  162 => 60,  154 => 56,  152 => 55,  145 => 52,  141 => 50,  133 => 46,  131 => 45,  126 => 43,  122 => 42,  117 => 41,  111 => 39,  105 => 37,  103 => 36,  99 => 35,  94 => 34,  90 => 33,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  63 => 20,  59 => 18,  57 => 17,  47 => 10,  36 => 3,  30 => 2,  11 => 1,);
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
{% block title %} Clientes {% endblock %}
{% block contenido %} 
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Clientes</h1>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                {% if not pagination|length %}
                    <h2>No se encontraron clientes</h2>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Usuario', 'u.username') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'u.nombre') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Correo electrónico', 'u.email') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Creado', 'u.registro') }}</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for usuario in pagination %}
                                    <tr data-id=\"{{ usuario.id }}\">
                                        <td><img src=\"{{ asset('images/'~usuario.imagen) }}\" class=\"img-responsive center-block \" style=\"max-width: 45px\"/></td>
                                            {% if usuario.activo == 1 %}
                                            <td><strong>{{usuario.username}}</strong></td>
                                        {% else %}
                                            <td style=\"color: red\"><strong>{{usuario.username}}</strong></td>
                                                {% endif %}
                                        <td>{{usuario.email}}</td>
                                        <td>{{usuario.nombre}}</td>
                                        <td>{{usuario.registro|date('d/m/Y')}}</td>
                                        <td class=\"actions\">
                                            {% if usuario.activo == 1 %}
                                                <a href=\"{{ path('crivero_prueba_cliente', { id: usuario.id }) }}\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                    Ver
                                                </a>
                                            {% else %}
                                                <button class=\"btn btn-sm btn-info noMargenBoton\" disabled>Ver</button>
                                            {% endif %}
                                            <a href=\"{{ path('crivero_prueba_editarUsuario', { id: usuario.id }) }}\" class=\"btn btn-sm btn-primary noMargenBoton\">
                                                Editar
                                            </a>
                                            {% if usuario.activo == 1 %}
                                                <a href=\"{{ path('crivero_prueba_pagos_usuario', { id: usuario.id }) }}\" class=\"btn btn-sm btn-warning noMargenBoton\">
                                                    Pagos
                                                </a>
                                            {% else %}
                                                <button class=\"btn btn-sm btn-warning noMargenBoton\" disabled>Pagos</button>
                                            {% endif %}
                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
                <div class=\"navigation text-center\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
        {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form_ajax, id: \"form-delete\", with_submit: false })}}
    {% endblock %}

    {% block javascripts %}
        {{ parent() }}
        <script src=\"{{ asset('bundles/criveroprueba/js/delete-user.js') }}\"></script>
    {% endblock %}
", "CriveroPruebaBundle:Usuarios:clientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/clientes.html.twig");
    }
}
