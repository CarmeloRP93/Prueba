<?php

/* moduloclientesclienteBundle:Mensajes:enviadosCliente.html.twig */
class __TwigTemplate_ed4b9fac43de6354d6d8c635ba60dd36e838df90ecfaa615243448cdaf0baba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Mensajes:enviadosCliente.html.twig", 1);
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
        echo " Mensajes Enviados ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1\">
            <div class=\"page-header\">
                <div class=\"row text-center\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        <h1 class=\"t1\">Mensajes enviados</h1>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"><br>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Enviados<span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_mensajes_recibidosCliente");
        echo "\">Mensajes Recibidos</a></li>
                                <li class=\"active\"><a href=\"#\">Mensajes Enviados</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body myelement\">
                    ";
        // line 24
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 25
            echo "                        <h2>No se encontraron mensajes</h2>
                    ";
        } else {
            // line 27
            echo "                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-condensed\">
                                <thead>
                                    <tr>
                                        <th>";
            // line 31
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Destino", "m.destinatario");
            echo "</th>
                                        <th><div class=\"hidden-xs\">";
            // line 32
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "m.asunto");
            echo "</div></th>
                                        <th>";
            // line 33
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "m.fecha");
            echo "</th>
                                        <th class=\"t3\">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 39
                echo "                                        <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "id", array()), "html", null, true);
                echo "\">
                                            <td><strong>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "destinatario", array()), "html", null, true);
                echo "</strong></td>
                                            ";
                // line 41
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 42
                    echo "                                                <td>Sin asunto</td>
                                            ";
                } else {
                    // line 44
                    echo "                                                <td><div class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</div></td>
                                                ";
                }
                // line 46
                echo "                                            <td>";
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 60
        echo "                    <div>
                        <div class=\"navigation\"  >
                            ";
        // line 62
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Mensajes:enviadosCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  142 => 60,  136 => 56,  122 => 48,  116 => 46,  110 => 44,  106 => 42,  104 => 41,  100 => 40,  95 => 39,  91 => 38,  83 => 33,  79 => 32,  75 => 31,  69 => 27,  65 => 25,  63 => 24,  51 => 15,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %} Mensajes Enviados {% endblock %}
{% block contenido %}
    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1\">
            <div class=\"page-header\">
                <div class=\"row text-center\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        <h1 class=\"t1\">Mensajes enviados</h1>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"><br>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Enviados<span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{path('moduloclientes_cliente_mensajes_recibidosCliente')}}\">Mensajes Recibidos</a></li>
                                <li class=\"active\"><a href=\"#\">Mensajes Enviados</a></li>
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
                                        <th>{{ knp_pagination_sortable(pagination, 'Destino', 'm.destinatario') }}</th>
                                        <th><div class=\"hidden-xs\">{{ knp_pagination_sortable(pagination, 'Asunto', 'm.asunto') }}</div></th>
                                        <th>{{ knp_pagination_sortable(pagination, 'Enviado', 'm.fecha') }}</th>
                                        <th class=\"t3\">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for mensaje in pagination %}
                                        <tr data-id=\"{{ mensaje.id }}\">
                                            <td><strong>{{ mensaje.destinatario }}</strong></td>
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
                    <div>
                        <div class=\"navigation\"  >
                            {{ knp_pagination_render(pagination) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Mensajes:enviadosCliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Mensajes/enviadosCliente.html.twig");
    }
}
