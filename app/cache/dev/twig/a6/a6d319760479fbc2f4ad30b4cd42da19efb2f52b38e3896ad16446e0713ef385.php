<?php

/* CriveroPruebaBundle:Canchas:canchas.html.twig */
class __TwigTemplate_bd836247b6f6afaaaf5dced2008e4e84da67145010b8d58f9850b2e605fb520c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Canchas:canchas.html.twig", 2);
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
        echo " Canchas ";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "    
    <div class=\"container\">
        <h1 class=\"text-center\">Canchas</h1>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 14
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "c.tipo");
        echo "</th>
                        <th>";
        // line 15
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "c.disponibilidad");
        echo "</th>
                        <th>";
        // line 16
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "c.horario");
        echo "</th>
                        <th>";
        // line 17
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Valoracion", "c.valoracion");
        echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
            // line 23
            echo "                        <tr>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
            echo "</td>
                            <td><strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
            echo "</strong></td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "horario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "valoracion", array()), "html", null, true);
            echo "/5.0</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancha_editar", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                    Editar
                                </a>
                                
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            ";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Canchas:canchas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  110 => 39,  97 => 32,  91 => 29,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  71 => 23,  67 => 22,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
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

{% block title %} Canchas {% endblock %}

{% block contenido %}
    
    <div class=\"container\">
        <h1 class=\"text-center\">Canchas</h1>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'c.tipo') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Estado', 'c.disponibilidad') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Horario', 'c.horario') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Valoracion', 'c.valoracion') }}</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for cancha in pagination %}
                        <tr>
                            <td>{{cancha.tipo}}</td>
                            <td><strong>{{cancha.disponibilidad}}</strong></td>
                            <td>{{cancha.horario}}</td>
                            <td>{{cancha.valoracion}}/5.0</td>
                            <td class=\"actions\">
                                <a href=\"{{ path('crivero_prueba_cancha', { id: cancha.id }) }}\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"{{ path('crivero_prueba_cancha_editar', { id: cancha.id }) }}\" class=\"btn btn-sm btn-primary\">
                                    Editar
                                </a>
                                
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
{% endblock %} ", "CriveroPruebaBundle:Canchas:canchas.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Canchas/canchas.html.twig");
    }
}
