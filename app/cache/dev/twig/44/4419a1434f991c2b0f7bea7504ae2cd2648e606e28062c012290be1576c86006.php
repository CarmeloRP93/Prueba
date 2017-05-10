<?php

/* moduloclientesclienteBundle:Mensajes:recibidosCliente.html.twig */
class __TwigTemplate_05a274fb677e295879416f346646b77eeb5dd63ff7be0dbab8aca424ffc10207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Mensajes:recibidosCliente.html.twig", 1);
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
        echo " Mensajes Recibidos ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <div class=\"row text-center\">
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                    <h1 class=\"t1\">Mensajes recibidos</h1>
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"><br>
                    <div class=\"dropdown\" style=\"float: left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Recibidos<span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_mensajes_enviadosCliente");
        echo "\">Mensajes Enviados</a></li>
                            <li class=\"active\"><a href=\"#\">Mensajes Recibidos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 23
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 24
            echo "                    <h2>No se encontraron mensajes</h2>
                ";
        } else {
            // line 26
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-condensed\">
                            <thead>
                                <tr>
                                    <th>";
            // line 30
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Remitente", "m.idRemitente");
            echo "</th>
                                    <th><div class=\"hidden-xs\">";
            // line 31
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "m.asunto");
            echo "</div></th>
                                    <th>";
            // line 32
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Recibido", "m.fecha");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 38
                echo "                                    ";
                echo ((($this->getAttribute($context["mensaje"], "estado", array()) == "nuevo")) ? ("<tr data-id='{{ mensaje.id }}' style='font-weight: bold'>") : ("<tr data-id='{{ mensaje.id }}'>"));
                // line 39
                echo "
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["remitentes"]) ? $context["remitentes"] : $this->getContext($context, "remitentes")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "html", null, true);
                echo "</td>
                                ";
                // line 41
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 42
                    echo "                                    <td>Sin asunto</td>
                                ";
                } else {
                    // line 44
                    echo "                                    <td><div class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</div></td>
                                    ";
                }
                // line 46
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    <form action=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_mensajeCliente", array("id" => $this->getAttribute($context["mensaje"], "id", array()))), "html", null, true);
                echo "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                            Ver mensaje
                                        </button>
                                    </form>
                                </td>
                                </tr>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 60
        echo "            </div>
            <div class=\"navigation\">
                ";
        // line 62
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Mensajes:recibidosCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  163 => 60,  157 => 56,  135 => 48,  129 => 46,  123 => 44,  119 => 42,  117 => 41,  113 => 40,  110 => 39,  107 => 38,  90 => 37,  82 => 32,  78 => 31,  74 => 30,  68 => 26,  64 => 24,  62 => 23,  50 => 14,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Mensajes Recibidos {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <div class=\"row text-center\">
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                    <h1 class=\"t1\">Mensajes recibidos</h1>
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"><br>
                    <div class=\"dropdown\" style=\"float: left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Recibidos<span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{path('moduloclientes_cliente_mensajes_enviadosCliente')}}\">Mensajes Enviados</a></li>
                            <li class=\"active\"><a href=\"#\">Mensajes Recibidos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                {% if not pagination|length %}
                    <h2>No se encontraron mensajes</h2>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-condensed\">
                            <thead>
                                <tr>
                                    <th>{{ knp_pagination_sortable(pagination, 'Remitente', 'm.idRemitente') }}</th>
                                    <th><div class=\"hidden-xs\">{{ knp_pagination_sortable(pagination, 'Asunto', 'm.asunto') }}</div></th>
                                    <th>{{ knp_pagination_sortable(pagination, 'Recibido', 'm.fecha') }}</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for mensaje in pagination %}
                                    {{ (mensaje.estado == \"nuevo\") ? \"<tr data-id='{{ mensaje.id }}' style='font-weight: bold'>\"|raw : 
                                                             \"<tr data-id='{{ mensaje.id }}'>\"|raw }}
                                <td>{{ remitentes[loop.index0] }}</td>
                                {% if mensaje.asunto == null %}
                                    <td>Sin asunto</td>
                                {% else %}
                                    <td><div class=\"hidden-xs\">{{mensaje.asunto}}</div></td>
                                    {% endif %}
                                <td>{{ mensaje.fecha|date('d/m/Y H:i') }}</td>
                                <td class=\"actions\">
                                    <form action=\"{{ path('moduloclientes_cliente_mensajeCliente', {id: mensaje.id}) }}\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                            Ver mensaje
                                        </button>
                                    </form>
                                </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
            </div>
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Mensajes:recibidosCliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Mensajes/recibidosCliente.html.twig");
    }
}
