<?php

/* moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig */
class __TwigTemplate_fd2fb42336f94a705e05c7c2ab78d46a65980f4d6d516cf35675ecc9b036ce87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " Mi equipo ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"page-header\">    
            <h1 class=\"t1\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "deporte", array()), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")))) {
            // line 11
            echo "                    <h2>No se encontraron jugadores</h2><br>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Nombre", "jugadores.nombre");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Dorsal", "jugadores.Dorsal");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Incidencias", "jugadores.incidencia");
            echo "</th>
                                    <th> Acción </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                // line 26
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "id", array()), "html", null, true);
                echo "\">
                                        ";
                // line 27
                if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                    // line 28
                    echo "                                            <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                    echo "\" class=\"img-responsive\" style=\"max-width: 50px;\"/></td>
                                            ";
                } else {
                    // line 30
                    echo "                                            <td>Imagen no Disponible</td>
                                        ";
                }
                // line 32
                echo "                                        <td>  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                echo "  </td>
                                        <td>   ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "Dorsal", array()), "html", null, true);
                echo "   </td>
                                        <td>   ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                                Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 46
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 47
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        echo "
                </div>
                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_jugador_nuevo", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Añadir invitado<span class=\"glyphicon glyphicon-plus\"></span></a>
                <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_jugadoresClientes", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Buscar jugador<span class=\"glyphicon glyphicon-plus\"></span></a>
                <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_equipo_editar", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">Editar Equipo</a>
                <p>";
        // line 52
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar equipo"));
        echo "</p>
            </div>
        </div>
        <a class=\"btn btn-default text-center\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_equiposClientes");
        echo "\">Volver atrás</a>
    </div>
    ";
        // line 57
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "nombre" => "Eliminar jugador", "id" => "form-delete", "with_submit" => false));
        echo "
";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/criveroprueba/js/delete-jugador.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 62,  171 => 61,  168 => 60,  162 => 57,  157 => 55,  151 => 52,  147 => 51,  143 => 50,  139 => 49,  134 => 47,  131 => 46,  125 => 42,  111 => 34,  107 => 33,  102 => 32,  98 => 30,  92 => 28,  90 => 27,  85 => 26,  81 => 25,  73 => 20,  69 => 19,  65 => 18,  58 => 13,  54 => 11,  52 => 10,  43 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
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
{% block title %} Mi equipo {% endblock %}             
{% block contenido %}
    <div class=\"container text-center\">
        <div class=\"page-header\">    
            <h1 class=\"t1\">{{equipo.nombre}} - {{equipo.deporte}}</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not jugadores|length %}
                    <h2>No se encontraron jugadores</h2><br>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>{{ knp_pagination_sortable(jugadores, 'Nombre', 'jugadores.nombre') }}</th>
                                    <th>{{ knp_pagination_sortable(jugadores, 'Dorsal', 'jugadores.Dorsal') }}</th>
                                    <th>{{ knp_pagination_sortable(jugadores, 'Incidencias', 'jugadores.incidencia') }}</th>
                                    <th> Acción </th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for jugador in jugadores %}
                                    <tr data-id=\"{{jugador.id}}\">
                                        {%if jugador.imagen != null%}
                                            <td><img src=\"{{ asset('images/'~jugador.imagen) }}\" class=\"img-responsive\" style=\"max-width: 50px;\"/></td>
                                            {%else%}
                                            <td>Imagen no Disponible</td>
                                        {%endif%}
                                        <td>  {{jugador.nombre}}  </td>
                                        <td>   {{jugador.Dorsal}}   </td>
                                        <td>   {{jugador.incidencia}}</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                                Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                {%endfor%}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
                <div class=\"navigation text-center\">
                    {{ knp_pagination_render(jugadores) }}
                </div>
                <a href=\"{{path('moduloclientes_cliente_jugador_nuevo',{'id': equipo.id})}}\" class=\"btn btn-success\">Añadir invitado<span class=\"glyphicon glyphicon-plus\"></span></a>
                <a href=\"{{path('moduloclientes_cliente_jugadoresClientes',{'id': equipo.id})}}\" class=\"btn btn-success\">Buscar jugador<span class=\"glyphicon glyphicon-plus\"></span></a>
                <a href=\"{{ path('moduloclientes_cliente_equipo_editar', { 'id': equipo.id }) }}\" class=\"btn btn-sm btn-primary\">Editar Equipo</a>
                <p>{{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form, nombre: \"Eliminar equipo\" })}}</p>
            </div>
        </div>
        <a class=\"btn btn-default text-center\" href=\"{{ path('moduloclientes_cliente_equiposClientes') }}\">Volver atrás</a>
    </div>
    {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form_ajax, nombre: \"Eliminar jugador\", id:'form-delete',with_submit:false })}}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/criveroprueba/js/delete-jugador.js') }}\"></script>
{% endblock %}
", "moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/equipoClientes.html.twig");
    }
}
