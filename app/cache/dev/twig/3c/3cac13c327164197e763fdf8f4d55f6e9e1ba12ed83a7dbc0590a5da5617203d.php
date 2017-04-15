<?php

/* CriveroPruebaBundle:Usuarios:pagos.html.twig */
class __TwigTemplate_e11c06ef37ae1cb1632c390240ecfa8a758a26614c3fbf9aade122390efc4457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:pagos.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Pagos ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Pagos</h1>
        </div>

        ";
        // line 13
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 14
            echo "            <h2>Este cliente aún no ha realizado pagos</h2>
        ";
        } else {
            // line 16
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 20
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "p.FechaPago");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tipo", "p.tipoPago");
            echo "</th>
                            <th>";
            // line 22
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Concepto", "p.concepto");
            echo "</th>
                            <th>";
            // line 23
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cuantia", "p.cuantia");
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["pago"]) {
                // line 29
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pago"], "FechaPago", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "tipoPago", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "concepto", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "cuantia", array()), "html", null, true);
                echo "€</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pago'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 40
        echo "        <div>
            <div class=\"navigation\">
                ";
        // line 42
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:pagos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  118 => 40,  112 => 36,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  86 => 29,  82 => 28,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  56 => 16,  52 => 14,  50 => 13,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Pagos {% endblock %}

{% block contenido %}

    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Pagos</h1>
        </div>

        {% if not pagination|length %}
            <h2>Este cliente aún no ha realizado pagos</h2>
        {% else %}
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Fecha', 'p.FechaPago') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Tipo', 'p.tipoPago') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Concepto', 'p.concepto') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Cuantia', 'p.cuantia') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        {% for pago in pagination %}
                            <tr data-id=\"{{ pago.id }}\">
                                <td>{{pago.FechaPago|date('d/m/Y H:i')}}</td>
                                <td>{{pago.tipoPago}}</td>
                                <td>{{pago.concepto}}</td>
                                <td>{{pago.cuantia}}€</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        <div>
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>

{% endblock %}
", "CriveroPruebaBundle:Usuarios:pagos.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/pagos.html.twig");
    }
}
