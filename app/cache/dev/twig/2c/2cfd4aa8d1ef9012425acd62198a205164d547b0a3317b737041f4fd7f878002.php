<?php

/* CriveroPruebaBundle:Usuarios:monitores.html.twig */
class __TwigTemplate_30cd79c142442aeb9fc5e42d7d8be4bdb4389280f65bbc5213b83986c729bf5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:monitores.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Monitores ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 
    
    ";
        // line 13
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"text-center\">Monitores</h1>
        </div>
        
        ";
        // line 19
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 20
            echo "            <h2>No se encontraron monitores con esos parámetros de búsqueda.</h2>
        ";
        } else {
            // line 22
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 26
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Usuario", "u.username");
            echo "</th>
                            <th>";
            // line 27
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "u.nombre");
            echo "</th>
                            <th>";
            // line 28
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Correo electrónico", "u.email");
            echo "</th>
                            <th>";
            // line 29
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Creado", "u.registro");
            echo "</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 35
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
                echo "\">
                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "registro", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                    <td class=\"actions\">
                                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_monitor", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                            Ver
                                        </a>
                                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                            Editar
                                        </a>
                                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                            Eliminar
                                        </a>
                                    </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 57
        echo "        <div class=\"navigation\">
            ";
        // line 58
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
        <div class=\"nuevoUsuario text-center\">
            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_nuevo");
        echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">Nuevo Usuario <span class=\"glyphicon glyphicon-plus\"></span></a>
        </div>
    </div>
            
    ";
        // line 65
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "id" => "form-delete", "with_submit" => false));
        echo "
    
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/criveroprueba/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:monitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 70,  168 => 69,  165 => 68,  158 => 65,  151 => 61,  145 => 58,  142 => 57,  136 => 53,  121 => 44,  115 => 41,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  93 => 35,  89 => 34,  81 => 29,  77 => 28,  73 => 27,  69 => 26,  63 => 22,  59 => 20,  57 => 19,  48 => 13,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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

{% block title %} Monitores {% endblock %}

{% block contenido %}
    
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 
    
    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"text-center\">Monitores</h1>
        </div>
        
        {% if not pagination|length %}
            <h2>No se encontraron monitores con esos parámetros de búsqueda.</h2>
        {% else %}
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Usuario', 'u.username') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'u.nombre') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Correo electrónico', 'u.email') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Creado', 'u.registro') }}</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for usuario in pagination %}
                            <tr data-id=\"{{ usuario.id }}\">
                                    <td>{{usuario.username}}</td>
                                    <td>{{usuario.nombre}}</td>
                                    <td>{{usuario.email}}</td>
                                    <td>{{usuario.registro|date('d/m/Y H:i')}}</td>
                                    <td class=\"actions\">
                                        <a href=\"{{ path('crivero_prueba_monitor', { id: usuario.id }) }}\" class=\"btn btn-sm btn-info\">
                                            Ver
                                        </a>
                                        <a href=\"{{ path('crivero_prueba_editarUsuario', { id: usuario.id }) }}\" class=\"btn btn-sm btn-primary\">
                                            Editar
                                        </a>
                                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                            Eliminar
                                        </a>
                                    </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
        <div class=\"nuevoUsuario text-center\">
            <a href=\"{{path('crivero_prueba_nuevo')}}\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">Nuevo Usuario <span class=\"glyphicon glyphicon-plus\"></span></a>
        </div>
    </div>
            
    {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form_ajax, id: \"form-delete\", with_submit: false })}}
    
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/criveroprueba/js/delete-user.js') }}\"></script>
{% endblock %}", "CriveroPruebaBundle:Usuarios:monitores.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/monitores.html.twig");
    }
}
