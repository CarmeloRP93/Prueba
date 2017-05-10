<?php

/* CriveroPruebaBundle:Canchas:canchas.html.twig */
class __TwigTemplate_878ad436a233b05869202e28f32d6d272b9e36d915822b2df67b18ecf4cbb5bf extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Canchas ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    ";
        // line 10
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Canchas</h1>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                ";
        // line 17
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 18
            echo "                    <h2>No se encontraron canchas</h2>
                ";
        } else {
            // line 20
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
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
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
                // line 34
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "id", array()), "html", null, true);
                echo "\">
                                        <td><img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["cancha"], "imagen", array()))), "html", null, true);
                echo "\" class=\"img-responsive center-block \" style=\"max-width: 60px; height: 55px\"/></td>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "deporte", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 38
                if (($this->getAttribute($context["cancha"], "disponibilidad", array()) == "Disponible")) {
                    // line 39
                    echo "                                            <td><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                } else {
                    // line 41
                    echo "                                            <td><strong style=\"color: red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                }
                // line 43
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "horario", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                Ver
                                            </a>
                                            <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cancha_editar", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary noMargenBoton\">
                                                Editar
                                            </a>
                                            
                                            ";
                // line 52
                if (($this->getAttribute((isset($context["flags"]) ? $context["flags"] : $this->getContext($context, "flags")), $this->getAttribute($context["cancha"], "id", array()), array(), "array") == 0)) {
                    // line 53
                    echo "                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Eliminar
                                                </a>
                                            ";
                } else {
                    // line 57
                    echo "                                                 <a onclick=\"warningEliminar()\" class=\"btn btn-sm btn-danger noMargenBoton\">
                                                    Eliminar
                                                </a>
                                            ";
                }
                // line 61
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 67
        echo "        
                <div class=\"navigation text-center\">
                    ";
        // line 69
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 74
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "id" => "form-delete", "with_submit" => false));
        echo "
";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/criveroprueba/js/delete-cancha.js"), "html", null, true);
        echo "\"></script>
    <script>
        function warningEliminar(){
            var dialog=bootbox.dialog({
                title: '<h4 class=\"text-center\" style=\"font-weight: 600; color: red\">¡ATENCIÓN!</h4>',
                message: '<p class=\"text-center\" >No es posible eliminar una cancha con reservas asignadas.</p>',
                closeButton: false
            });
            setTimeout(function (){dialog.modal('hide');}, 4000);
        }
    </script>
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
        return array (  198 => 78,  193 => 77,  190 => 76,  184 => 74,  176 => 69,  172 => 67,  166 => 64,  158 => 61,  152 => 57,  146 => 53,  144 => 52,  137 => 48,  131 => 45,  125 => 43,  119 => 41,  113 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  94 => 34,  90 => 33,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  63 => 20,  59 => 18,  57 => 17,  47 => 10,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
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
        <div class=\"panel panel-default\">
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
                                    <th>{{ knp_pagination_sortable(pagination, 'Horario', 'c.horario') }}</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for cancha in pagination %}
                                    <tr data-id=\"{{ cancha.id }}\">
                                        <td><img src=\"{{ asset('images/'~cancha.imagen) }}\" class=\"img-responsive center-block \" style=\"max-width: 60px; height: 55px\"/></td>
                                        <td>{{cancha.tipo}}</td>
                                        <td>{{cancha.deporte}}</td>
                                        {% if cancha.disponibilidad == 'Disponible' %}
                                            <td><strong>{{cancha.disponibilidad}}</strong></td>
                                        {% else %}
                                            <td><strong style=\"color: red\">{{cancha.disponibilidad}}</strong></td>
                                        {% endif %}
                                        <td>{{cancha.horario}}</td>
                                        <td class=\"actions\">
                                            <a href=\"{{ path('crivero_prueba_cancha', { id: cancha.id }) }}\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                Ver
                                            </a>
                                            <a href=\"{{ path('crivero_prueba_cancha_editar', { id: cancha.id }) }}\" class=\"btn btn-sm btn-primary noMargenBoton\">
                                                Editar
                                            </a>
                                            
                                            {% if flags[cancha.id] == 0 %}
                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Eliminar
                                                </a>
                                            {% else %}
                                                 <a onclick=\"warningEliminar()\" class=\"btn btn-sm btn-danger noMargenBoton\">
                                                    Eliminar
                                                </a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}        
                <div class=\"navigation text-center\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
    {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form_ajax, id: \"form-delete\", with_submit: false })}}
{% endblock %} 
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/criveroprueba/js/delete-cancha.js') }}\"></script>
    <script>
        function warningEliminar(){
            var dialog=bootbox.dialog({
                title: '<h4 class=\"text-center\" style=\"font-weight: 600; color: red\">¡ATENCIÓN!</h4>',
                message: '<p class=\"text-center\" >No es posible eliminar una cancha con reservas asignadas.</p>',
                closeButton: false
            });
            setTimeout(function (){dialog.modal('hide');}, 4000);
        }
    </script>
{% endblock %}", "CriveroPruebaBundle:Canchas:canchas.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Canchas/canchas.html.twig");
    }
}
