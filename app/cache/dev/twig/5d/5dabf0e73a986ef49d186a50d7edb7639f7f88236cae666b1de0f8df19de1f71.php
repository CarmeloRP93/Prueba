<?php

/* moduloclientesclienteBundle:Canchas:canchasClientes.html.twig */
class __TwigTemplate_223452b87398c638f3e4cf6d713660980815deaad12335dd99bec6720744873d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Canchas:canchasClientes.html.twig", 1);
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
        echo " Canchas ";
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
            <h1 class=\"t1\">Canchas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 16
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 17
            echo "                    <h2>No se encontraron canchas</h2>
                ";
        } else {
            // line 19
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 24
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "c.tipo");
            echo "</th>
                                    <th>";
            // line 25
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Deporte", "c.deporte");
            echo "</th>
                                    <th>";
            // line 26
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "c.disponibilidad");
            echo "</th>
                                    <th><div class=\"hidden-xs\">";
            // line 27
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "c.horario");
            echo "</div></th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
                // line 33
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "id", array()), "html", null, true);
                echo "\">
                                        <td><img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["cancha"], "imagen", array()))), "html", null, true);
                echo "\" class=\"img-responsive center-block \" style=\"max-width: 60px; height: 55px\"/></td>
                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "deporte", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 37
                if (($this->getAttribute($context["cancha"], "disponibilidad", array()) != "Disponible")) {
                    // line 38
                    echo "                                            <td><strong><font color=\"red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
                    echo "</font></strong></td>                                                                                         
                                                ";
                } else {
                    // line 39
                    echo "                                              
                                            <td><strong>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
                    echo "</strong></td>                                               
                                        ";
                }
                // line 42
                echo "                                        <td><div class=\"hidden-xs\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "horario", array()), "html", null, true);
                echo "</div></td>
                                        <td class=\"actions\">
                                            ";
                // line 44
                if (($this->getAttribute($context["cancha"], "disponibilidad", array()) != "Disponible")) {
                    // line 45
                    echo "                                                <button class=\"btn btn-sm btn-info noMargenBoton\" disabled>Ver</button>
                                                <button class=\"btn btn-sm btn-success noMargenBoton\" disabled>Reservar</button>
                                            ";
                } else {
                    // line 47
                    echo "                                              
                                                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                    Ver
                                                </a>
                                                <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_nuevaReserva", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-success noMargenBoton\" >
                                                    Reservar 
                                                </a>
                                            ";
                }
                // line 55
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 61
        echo "        
                <div class=\"navigation\">
                    ";
        // line 63
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
        return "moduloclientesclienteBundle:Canchas:canchasClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  165 => 61,  159 => 58,  151 => 55,  144 => 51,  138 => 48,  135 => 47,  130 => 45,  128 => 44,  122 => 42,  117 => 40,  114 => 39,  108 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  89 => 33,  85 => 32,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  58 => 19,  54 => 17,  52 => 16,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Canchas {% endblock %}
{% block contenido %}          
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Canchas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not pagination|length %}
                    <h2>No se encontraron canchas</h2>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'c.tipo') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Deporte', 'c.deporte') }}</th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Estado', 'c.disponibilidad') }}</th>
                                    <th><div class=\"hidden-xs\">{{ knp_pagination_sortable(pagination, 'Horario', 'c.horario') }}</div></th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for cancha in pagination %}
                                    <tr data-id=\"{{ cancha.id }}\">
                                        <td><img src=\"{{ asset('images/'~cancha.imagen) }}\" class=\"img-responsive center-block \" style=\"max-width: 60px; height: 55px\"/></td>
                                        <td>{{cancha.tipo}}</td>
                                        <td>{{cancha.deporte}}</td>
                                        {% if cancha.disponibilidad != 'Disponible' %}
                                            <td><strong><font color=\"red\">{{cancha.disponibilidad}}</font></strong></td>                                                                                         
                                                {% else %}                                              
                                            <td><strong>{{cancha.disponibilidad}}</strong></td>                                               
                                        {% endif %}
                                        <td><div class=\"hidden-xs\">{{cancha.horario}}</div></td>
                                        <td class=\"actions\">
                                            {% if cancha.disponibilidad != 'Disponible' %}
                                                <button class=\"btn btn-sm btn-info noMargenBoton\" disabled>Ver</button>
                                                <button class=\"btn btn-sm btn-success noMargenBoton\" disabled>Reservar</button>
                                            {% else %}                                              
                                                <a href=\"{{ path('moduloclientes_cliente_canchaClientes', { id: cancha.id }) }}\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                    Ver
                                                </a>
                                                <a href=\"{{path('moduloclientes_cliente_nuevaReserva', {id: cancha.id})}}\" class=\"btn btn-sm btn-success noMargenBoton\" >
                                                    Reservar 
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
{% endblock %}", "moduloclientesclienteBundle:Canchas:canchasClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Canchas/canchasClientes.html.twig");
    }
}
