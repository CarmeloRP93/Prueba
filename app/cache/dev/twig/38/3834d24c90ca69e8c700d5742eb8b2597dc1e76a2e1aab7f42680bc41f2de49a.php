<?php

/* CriveroPruebaBundle:Aulas:aulas.html.twig */
class __TwigTemplate_6b7a87eab30219d8e04cc585db0b7f5193168cdfe81771906d56cb10ff66f40d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Aulas:aulas.html.twig", 2);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Aulas ";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"text-center\">Aulas</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 17
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "a.nombre");
        echo "</th>
                        <th>";
        // line 18
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "a.disponibilidad");
        echo "</th>
                        <th>";
        // line 19
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "a.horario");
        echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["aula"]) {
            // line 25
            echo "                        <tr>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            if ((((isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")) == 0) || ((isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")) == 6))) {
                // line 28
                echo "                                <strong>No disponible</strong>
                                ";
            } else {
                // line 31
                echo "                                ";
            }
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "horario", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                              <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_aula", array("id" => $this->getAttribute($context["aula"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute($context["aula"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                    Editar
                                </a>
                                
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </tbody>
            </table>
        </div>
        <div>
            <div class=\"nuevoUsuario text-center\">
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_aula_nueva");
        echo "\" class=\"btn btn-success\" style=\"width: 150px;\"> Nueva aula <span class=\"glyphicon glyphicon-plus\"></span></a>
            </div>
            <div class=\"navigation\">
                ";
        // line 52
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Aulas:aulas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  121 => 49,  114 => 44,  101 => 37,  95 => 34,  90 => 32,  85 => 31,  81 => 28,  79 => 27,  75 => 26,  72 => 25,  68 => 24,  60 => 19,  56 => 18,  52 => 17,  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends 'CriveroPruebaBundle::main.html.twig' %}

{% block title %} Aulas {% endblock %}

{% block contenido %}
    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"text-center\">Aulas</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'a.nombre') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Estado', 'a.disponibilidad') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Horario', 'a.horario') }}</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for aula in pagination %}
                        <tr>
                            <td>{{aula.nombre}}</td>
                            <td>{% if hoy == 0 or hoy == 6 %}
                                <strong>No disponible</strong>
                                {% else %}
{#                                    <strong>{{ estados[aula.id-1].estado }}</strong>#}
                                {% endif %}</td>
                            <td>{{aula.horario}}</td>
                            <td class=\"actions\">
                              <a href=\"{{ path('crivero_prueba_aula', { id: aula.id }) }}\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"{{ path('crivero_prueba_aula_editar', { id: aula.id }) }}\" class=\"btn btn-sm btn-primary\">
                                    Editar
                                </a>
                                
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div>
            <div class=\"nuevoUsuario text-center\">
                    <a href=\"{{path('crivero_prueba_aula_nueva')}}\" class=\"btn btn-success\" style=\"width: 150px;\"> Nueva aula <span class=\"glyphicon glyphicon-plus\"></span></a>
            </div>
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>
{% endblock %} ", "CriveroPruebaBundle:Aulas:aulas.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Aulas/aulas.html.twig");
    }
}
