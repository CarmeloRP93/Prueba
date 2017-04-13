<?php

/* CriveroPruebaBundle:Canchas:canchas.html.twig */
class __TwigTemplate_bd836247b6f6afaaaf5dced2008e4e84da67145010b8d58f9850b2e605fb520c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Canchas:canchas.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " Canchas ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 
    
    ";
        // line 13
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Canchas</h1>
        </div>
        ";
        // line 18
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 19
            echo "            <h2>No se encontraron canchas.</h2>
        ";
        } else {
            // line 21
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 25
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "c.tipo");
            echo "</th>
                            <th>";
            // line 26
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Deporte", "c.deporte");
            echo "</th>
                            <th>";
            // line 27
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "c.disponibilidad");
            echo "</th>
                            <th>";
            // line 28
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "c.horario");
            echo "</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
                // line 34
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "deporte", array()), "html", null, true);
                echo "</td>
                                <td><strong>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
                echo "</strong></td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "horario", array()), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                        Ver
                                    </a>
                                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancha_editar", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                        Editar
                                    </a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 55
        echo "        
        <div>
            ";
        // line 60
        echo "            <div class=\"navigation\">
                ";
        // line 61
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
    
    ";
        // line 66
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "id" => "form-delete", "with_submit" => false));
        echo "
    
";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/criveroprueba/js/delete-cancha.js"), "html", null, true);
        echo "\"></script>
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
        return array (  171 => 71,  166 => 70,  163 => 69,  156 => 66,  148 => 61,  145 => 60,  141 => 55,  135 => 52,  120 => 43,  114 => 40,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  92 => 34,  88 => 33,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  62 => 21,  58 => 19,  56 => 18,  48 => 13,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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

{% block title %} Canchas {% endblock %}

{% block contenido %}
    
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 
    
    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Canchas</h1>
        </div>
        {% if not pagination|length %}
            <h2>No se encontraron canchas.</h2>
        {% else %}
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Nombre', 'c.tipo') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Deporte', 'c.deporte') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Estado', 'c.disponibilidad') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Horario', 'c.horario') }}</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for cancha in pagination %}
                            <tr data-id=\"{{ cancha.id }}\">
                                <td>{{cancha.tipo}}</td>
                                <td>{{cancha.deporte}}</td>
                                <td><strong>{{cancha.disponibilidad}}</strong></td>
                                <td>{{cancha.horario}}</td>
                                <td class=\"actions\">
                                    <a href=\"{{ path('crivero_prueba_cancha', { id: cancha.id }) }}\" class=\"btn btn-sm btn-info\">
                                        Ver
                                    </a>
                                    <a href=\"{{ path('crivero_prueba_cancha_editar', { id: cancha.id }) }}\" class=\"btn btn-sm btn-primary\">
                                        Editar
                                    </a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}        
        <div>
            {#<div class=\"nuevoUsuario text-center\">
                <a href=\"{{path('crivero_prueba_cancha_nueva')}}\" class=\"btn btn-success\" style=\"width: 150px;\"> Nueva cancha <span class=\"glyphicon glyphicon-plus\"></span></a>
            </div>#}
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>
    
    {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form_ajax, id: \"form-delete\", with_submit: false })}}
    
{% endblock %} 
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/criveroprueba/js/delete-cancha.js') }}\"></script>
{% endblock %}", "CriveroPruebaBundle:Canchas:canchas.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Canchas/canchas.html.twig");
    }
}
