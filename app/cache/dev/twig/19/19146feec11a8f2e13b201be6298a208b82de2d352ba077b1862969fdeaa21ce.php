<?php

/* moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig */
class __TwigTemplate_de6f92432f329499ce88251e02d337213d320e0a5450e0a4537a7762a3b787f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig", 1);
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
        echo " Competiciones ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Competiciones</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "                    <h2>No se encontraron competiciones</h2>
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
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "c.nombre");
            echo "</th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Deporte", "c.deporte");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tipo", "c.tipoCompeticion");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "c.estadoCompeticion");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                // line 26
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "deporte", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "tipoCompeticion", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estadoCompeticion", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            ";
                // line 32
                if (($this->getAttribute($context["competicion"], "estadoCompeticion", array()) == "Cancelado")) {
                    // line 33
                    echo "                                                <button class=\"btn btn-sm btn-info\" disabled>Ver</button>
                                            ";
                } else {
                    // line 34
                    echo "                                              
                                                <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                    echo "\"  class=\"btn btn-sm btn-info\">
                                                    Ver
                                                </a>
                                            ";
                }
                // line 39
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 46
        echo "                <div class=\"navigation\">
                    ";
        // line 47
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
        return "moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  135 => 46,  129 => 42,  121 => 39,  114 => 35,  111 => 34,  107 => 33,  105 => 32,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  83 => 26,  79 => 25,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  52 => 12,  48 => 11,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Competiciones {% endblock %}             
{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Competiciones</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not pagination|length %}
                    <h2>No se encontraron competiciones</h2>
                {% else %}  
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'c.nombre') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Deporte', 'c.deporte') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Tipo', 'c.tipoCompeticion') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Estado', 'c.estadoCompeticion') }}</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for competicion in pagination %}
                                    <tr data-id=\"{{ competicion.id }}\">
                                        <td>{{competicion.nombre}}</td>
                                        <td>{{competicion.deporte}}</td>
                                        <td>{{competicion.tipoCompeticion}}</td>
                                        <td>{{competicion.estadoCompeticion}}</td>
                                        <td class=\"actions\">
                                            {% if competicion.estadoCompeticion == 'Cancelado' %}
                                                <button class=\"btn btn-sm btn-info\" disabled>Ver</button>
                                            {% else %}                                              
                                                <a href=\"{{ path('moduloclientes_cliente_competicionClientes', {id: competicion.id}) }}\"  class=\"btn btn-sm btn-info\">
                                                    Ver
                                                </a>
                                            {% endif %}
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
{% endblock %}", "moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/competicionesClientes.html.twig");
    }
}
