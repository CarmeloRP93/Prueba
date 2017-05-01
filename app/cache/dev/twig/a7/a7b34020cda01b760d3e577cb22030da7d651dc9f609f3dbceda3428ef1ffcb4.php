<?php

/* moduloclientesclienteBundle:Competiciones:equiposClientes.html.twig */
class __TwigTemplate_8e9b558cdb11d1eb70efeb6d68f524e6a641076a9d9d5c2ea5a76afc6fe2dd07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:equiposClientes.html.twig", 1);
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
        echo " Mis equipos ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis equipos</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "                    <h2>No se encontraron equipos</h2>
                ";
        } else {
            // line 12
            echo "  
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 17
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "equipos.nombre");
            echo "</th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Deporte", "equipos.deporte");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 24
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "deporte", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">                                               
                                            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_equipoClientes", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                echo "\"  class=\"btn btn-sm btn-info\">
                                                Ver
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 38
        echo "                <div class=\"navigation\">
                    ";
        // line 39
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>  

    ";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:equiposClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  107 => 38,  101 => 34,  89 => 28,  84 => 26,  80 => 25,  75 => 24,  71 => 23,  63 => 18,  59 => 17,  52 => 12,  48 => 11,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Mis equipos {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis equipos</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not pagination|length %}
                    <h2>No se encontraron equipos</h2>
                {% else %}  
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'equipos.nombre') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Deporte', 'equipos.deporte') }}</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for equipo in pagination %}
                                    <tr data-id=\"{{ equipo.id }}\">
                                        <td>{{equipo.nombre}}</td>
                                        <td>{{equipo.deporte}}</td>
                                        <td class=\"actions\">                                               
                                            <a href=\"{{ path('moduloclientes_cliente_equipoClientes', {id: equipo.id}) }}\"  class=\"btn btn-sm btn-info\">
                                                Ver
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
            </div>
        </div>
    </div>  

    {#   <div class=\"container\">
           <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
               <div class=\"panel panel-default\">
                   <div class=\"panel-heading text-center\">
                       <h1 class=\"t1\">Listado de Equipos</h1>
                   </div>
                   <h3>Fútbol</h3>
                   {% for equipo in equipos %}
                       {%if equipo.deporte =='Fútbol'%}
                           <a href=\"{{url('moduloclientes_cliente_equipoClientes', {'id': equipo.id})}}\" class=\"fila {{cycle([\"par\",\"impar\"], loop.index)}}\">{{ equipo.nombre }}</a>
                       {%endif%}
                   {% endfor %}
                   <h3>Padel</h3>
                   {% for equipo in equipos %}
                       {%if equipo.deporte =='Padel'%}
                           <a href=\"{{url('moduloclientes_cliente_equipoClientes', {'id': equipo.id})}}\" class=\"fila {{cycle([\"par\",\"impar\"], loop.index)}}\">{{ equipo.nombre }}</a>
                       {%endif%}
                   {% endfor %}
               </div>
           </div>
       </div>#}
{% endblock %}", "moduloclientesclienteBundle:Competiciones:equiposClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/equiposClientes.html.twig");
    }
}
