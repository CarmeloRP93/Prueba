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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de mis equipo ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h1 class=\"t1\">Deporte: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "deporte", array()), "html", null, true);
        echo "</h1>
        <h2 class=\"t1\">Detalles del Equipo. ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo "</h2>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th> ";
        // line 12
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Nombre", "jugadores.nombre");
        echo "</th>
                        <th> ";
        // line 13
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Dorsal", "jugadores.Dorsal");
        echo "</th>
                        <th>";
        // line 14
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Incidencias", "jugadores.incidencia");
        echo "</th>
                        <th> Imágenes</th>
                        <th> Acción </th>
                    </tr>
                </thead>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 20
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "id", array()), "html", null, true);
            echo "\">
                            <td>  ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
            echo "  </td>
                            <td>   ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "Dorsal", array()), "html", null, true);
            echo "   </td>
                            <td>   ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
            echo "</td>
                            ";
            // line 24
            if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                // line 25
                echo "                                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                echo "\" class=\"img-responsive center-block\" style=\"max-width: 140px; margin-bottom:20px\"/></td>
                            ";
            } else {
                // line 27
                echo "                                <td>Imagen no Disponible</td>
                            ";
            }
            // line 29
            echo "                            <td>
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
        // line 36
        echo "            </table>
        </div>
        <div class=\"container\">
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_jugador_nuevo", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                Añadir invitado
                <span class=\"glyphicon glyphicon-plus\"></span></a>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_jugadoresClientes", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                Buscar jugador
                <span class=\"glyphicon glyphicon-plus\"></span></a>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_equipo_editar", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">
                Editar Equipo
            </a>
            <p>
               ";
        // line 49
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar equipo"));
        echo "
            </p>
        </div>
        <a class=\"btn btn-default text-center\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_equiposClientes");
        echo "\">Volver atrás</a>
        <div class=\"navigation text-center\">
            ";
        // line 54
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        echo "
        </div>
    </div>
    ";
        // line 57
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "nombre" => "Eliminar jugador", "id" => "form-delete", "with_submit" => false));
        // line 58
        echo "
";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
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
        return array (  171 => 63,  166 => 62,  163 => 61,  158 => 58,  156 => 57,  150 => 54,  145 => 52,  139 => 49,  132 => 45,  126 => 42,  120 => 39,  115 => 36,  103 => 29,  99 => 27,  93 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  74 => 20,  70 => 19,  62 => 14,  58 => 13,  54 => 12,  46 => 7,  42 => 6,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
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

{% block title %} Vista de mis equipo {% endblock %}             
{% block contenido %}
    <div class=\"container text-center\">
        <h1 class=\"t1\">Deporte: {{equipo.deporte}}</h1>
        <h2 class=\"t1\">Detalles del Equipo. {{equipo.nombre}}</h2>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th> {{ knp_pagination_sortable(jugadores, 'Nombre', 'jugadores.nombre') }}</th>
                        <th> {{ knp_pagination_sortable(jugadores, 'Dorsal', 'jugadores.Dorsal') }}</th>
                        <th>{{ knp_pagination_sortable(jugadores, 'Incidencias', 'jugadores.incidencia') }}</th>
                        <th> Imágenes</th>
                        <th> Acción </th>
                    </tr>
                </thead>
                {% for jugador in jugadores %}
                        <tr data-id=\"{{jugador.id}}\">
                            <td>  {{jugador.nombre}}  </td>
                            <td>   {{jugador.Dorsal}}   </td>
                            <td>   {{jugador.incidencia}}</td>
                            {%if jugador.imagen != null%}
                                <td><img src=\"{{ asset('images/'~jugador.imagen) }}\" class=\"img-responsive center-block\" style=\"max-width: 140px; margin-bottom:20px\"/></td>
                            {%else%}
                                <td>Imagen no Disponible</td>
                            {%endif%}
                            <td>
                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                {%endfor%}
            </table>
        </div>
        <div class=\"container\">
            <a href=\"{{path('moduloclientes_cliente_jugador_nuevo',{'id': equipo.id})}}\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                Añadir invitado
                <span class=\"glyphicon glyphicon-plus\"></span></a>
            <a href=\"{{path('moduloclientes_cliente_jugadoresClientes',{'id': equipo.id})}}\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                Buscar jugador
                <span class=\"glyphicon glyphicon-plus\"></span></a>
            <a href=\"{{ path('moduloclientes_cliente_equipo_editar', { 'id': equipo.id }) }}\" class=\"btn btn-sm btn-primary\">
                Editar Equipo
            </a>
            <p>
               {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form, nombre: \"Eliminar equipo\" })}}
            </p>
        </div>
        <a class=\"btn btn-default text-center\" href=\"{{ path('moduloclientes_cliente_equiposClientes') }}\">Volver atrás</a>
        <div class=\"navigation text-center\">
            {{ knp_pagination_render(jugadores) }}
        </div>
    </div>
    {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form_ajax, nombre: \"Eliminar jugador\",
       id:'form-delete',with_submit:false })}}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/criveroprueba/js/delete-jugador.js') }}\"></script>
{% endblock %}
", "moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/equipoClientes.html.twig");
    }
}
