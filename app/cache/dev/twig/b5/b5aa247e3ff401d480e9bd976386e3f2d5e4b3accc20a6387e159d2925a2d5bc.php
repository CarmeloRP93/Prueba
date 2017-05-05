<?php

/* moduloclientesclienteBundle:Competiciones:jugadoresClientes.html.twig */
class __TwigTemplate_f6da0f4cbb7357127b0a6ff9dfbface301cf219a353373d3f4a24092acee7a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:jugadoresClientes.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Listado Clientes ";
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
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Clientes</h1>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                ";
        // line 15
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 16
            echo "                    <h2>No se encontraron clientes</h2>
                ";
        } else {
            // line 18
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 23
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "u.nombre");
            echo "</th>
                                    <th>";
            // line 24
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Correo electrónico", "u.email");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 30
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
                echo "\">
                                        ";
                // line 31
                if (($this->getAttribute($context["usuario"], "imagen", array()) != null)) {
                    // line 32
                    echo "                                            <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["usuario"], "imagen", array()))), "html", null, true);
                    echo "\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                        ";
                } else {
                    // line 34
                    echo "                                            <td>Imagen no Disponible</td>
                                        ";
                }
                // line 36
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_jugador_validar", array("id" => $this->getAttribute($context["usuario"], "id", array()), "idEquipo" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "id"), "method"))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                                Añadir nuevo
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 49
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 50
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
                <div class=\"text-center\">
                    <a class=\"btn btn-default\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_equipoClientes", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\">Volver atrás</a>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:jugadoresClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  128 => 50,  125 => 49,  119 => 45,  107 => 39,  102 => 37,  97 => 36,  93 => 34,  87 => 32,  85 => 31,  80 => 30,  76 => 29,  68 => 24,  64 => 23,  57 => 18,  53 => 16,  51 => 15,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Listado Clientes {% endblock %}
{% block contenido %} 
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 
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
                                    <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'u.nombre') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Correo electrónico', 'u.email') }}</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for usuario in pagination %}
                                    <tr data-id=\"{{ usuario.id }}\">
                                        {%if usuario.imagen != null%}
                                            <td><img src=\"{{ asset('images/'~usuario.imagen) }}\" class=\"img-responsive center-block\" style=\"max-width: 50px\"/></td>
                                        {%else%}
                                            <td>Imagen no Disponible</td>
                                        {%endif%}
                                        <td>{{usuario.nombre}}</td>
                                        <td>{{usuario.email}}</td>
                                        <td class=\"actions\">
                                            <a href=\"{{path('moduloclientes_cliente_jugador_validar', { 'id': usuario.id,'idEquipo':app.request.get('id')})}}\" class=\"btn btn-sm btn-info\">
                                                Añadir nuevo
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
                <div class=\"text-center\">
                    <a class=\"btn btn-default\" href=\"{{ path('moduloclientes_cliente_equipoClientes',{'id' : app.request.get('id')}) }}\">Volver atrás</a>
                </div>
            </div>
        </div>
{% endblock %}

", "moduloclientesclienteBundle:Competiciones:jugadoresClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/jugadoresClientes.html.twig");
    }
}
