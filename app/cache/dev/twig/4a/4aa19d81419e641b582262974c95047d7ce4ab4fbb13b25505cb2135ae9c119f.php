<?php

/* moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig */
class __TwigTemplate_b259899a6161e6c50f2b6b7d19a785060f5c280e071546167b6a2f0c483d60d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig", 1);
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
         <h1 class=\"t1\">Detalles del ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo "</h1>

        ";
        // line 7
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Validado")) {
            // line 8
            echo "         <h3 class=\"t3\">Bienvenido a la ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
            echo ". Esta competicion es para aquellos que quieran apuntarse a jugar a ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "deporte", array()), "html", null, true);
            echo "</h3>
        <h4>Le fecha de comienzo es el ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo ". Después de esta fecha la fase de inscripción quedará cerrada.</h4>
        <div class=\"nuevoEquipo\">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_equipo_nuevo", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">
                Crear Equipo 
                <span class=\"glyphicon glyphicon-plus\"></span></a>
        </div>
        <a class=\"btn btn-default\" href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_competicionesClientes");
            echo "\">Volver atrás</a>
        ";
        }
        // line 17
        echo "        ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Jugandose")) {
            // line 18
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th> Posición </th>
                            <th> Equipo  </th>
                            <th> Puntos   </th>
                            <th> Victorias </th>
                            <th> Derrotas </th>
                            <th> Empates  </th>
                        </tr>
                    </thead>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 31
                echo "                        <tr>
                            <td>   ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                echo "º  </td>
                            <td>   ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "           </td>
                            <td>   ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                echo "  </td>
                            <td>   ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                echo "   </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </table>
            </div>
            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_partidosClientes", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                Ver Partidos
            </a>
            <a class=\"btn btn-default\" href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_competicionesClientes");
            echo "\">Volver atrás</a>
        ";
        }
        // line 47
        echo "    </div>
    <div>
        <ul class=\"container text-center\">
            ";
        // line 50
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Finalizado")) {
            // line 51
            echo "                <h3 class=\"t3\">Resumen del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
            echo "</h3>
                <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th> Posición </th>
                            <th> Equipo  </th>
                            <th> Puntos   </th>
                            <th> Victorias </th>
                            <th> Derrotas </th>
                            <th> Empates  </th>
                        </tr>
                    </thead>
                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 65
                echo "                        <tr>
                            <td>   ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                echo "º  </td>
                            <td>   ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "           </td>
                            <td>   ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                echo "  </td>
                            <td>   ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                echo "   </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                </table>
            </div>
                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_partidosClientes", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                    Ver Partidos
                </a>
                <a class=\"btn btn-default\" href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_competicionesClientes");
            echo "\">Volver atrás</a>
            ";
        }
        // line 81
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 81,  212 => 79,  206 => 76,  202 => 74,  193 => 71,  189 => 70,  185 => 69,  181 => 68,  177 => 67,  173 => 66,  170 => 65,  166 => 64,  149 => 51,  147 => 50,  142 => 47,  137 => 45,  131 => 42,  127 => 40,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  95 => 31,  91 => 30,  77 => 18,  74 => 17,  69 => 15,  62 => 11,  57 => 9,  50 => 8,  48 => 7,  43 => 5,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Vista de {{competicion.nombre}} {% endblock %}
{% block contenido %}
    <div class=\"container\">
         <h1 class=\"t1\">Detalles del {{competicion.nombre}}</h1>

        {% if competicion.estadoCompeticion == \"Validado\"%}
         <h3 class=\"t3\">Bienvenido a la {{competicion.nombre}}. Esta competicion es para aquellos que quieran apuntarse a jugar a {{competicion.deporte}}</h3>
        <h4>Le fecha de comienzo es el {{competicion.fechaInicio|date('d/m/Y')}}. Después de esta fecha la fase de inscripción quedará cerrada.</h4>
        <div class=\"nuevoEquipo\">
            <a href=\"{{path('moduloclientes_cliente_equipo_nuevo',{'id':competicion.id})}}\" class=\"btn btn-success\">
                Crear Equipo 
                <span class=\"glyphicon glyphicon-plus\"></span></a>
        </div>
        <a class=\"btn btn-default\" href=\"{{ path('moduloclientes_cliente_competicionesClientes') }}\">Volver atrás</a>
        {%endif%}
        {% if competicion.estadoCompeticion == \"Jugandose\"%}
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th> Posición </th>
                            <th> Equipo  </th>
                            <th> Puntos   </th>
                            <th> Victorias </th>
                            <th> Derrotas </th>
                            <th> Empates  </th>
                        </tr>
                    </thead>
                    {%for equipo in equipos%}
                        <tr>
                            <td>   {{equipo.clasificacion}}º  </td>
                            <td>   {{equipo.nombre}}           </td>
                            <td>   {{equipo.puntuacion}}   </td>
                            <td>   {{equipo.victorias}}   </td>
                            <td>   {{equipo.derrotas}}  </td>
                            <td>   {{equipo.empates}}   </td>
                        </tr>
                    {%endfor%}
                </table>
            </div>
            <a href=\"{{ path('moduloclientes_cliente_partidosClientes',{ id: competicion.id }) }}\" class=\"btn btn-sm btn-info\">
                Ver Partidos
            </a>
            <a class=\"btn btn-default\" href=\"{{ path('moduloclientes_cliente_competicionesClientes') }}\">Volver atrás</a>
        {%endif%}
    </div>
    <div>
        <ul class=\"container text-center\">
            {%if competicion.estadoCompeticion == \"Finalizado\" %}
                <h3 class=\"t3\">Resumen del {{competicion.nombre}}</h3>
                <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th> Posición </th>
                            <th> Equipo  </th>
                            <th> Puntos   </th>
                            <th> Victorias </th>
                            <th> Derrotas </th>
                            <th> Empates  </th>
                        </tr>
                    </thead>
                    {%for equipo in equipos%}
                        <tr>
                            <td>   {{equipo.clasificacion}}º  </td>
                            <td>   {{equipo.nombre}}           </td>
                            <td>   {{equipo.puntuacion}}   </td>
                            <td>   {{equipo.victorias}}   </td>
                            <td>   {{equipo.derrotas}}  </td>
                            <td>   {{equipo.empates}}   </td>
                        </tr>
                    {%endfor%}
                </table>
            </div>
                <a href=\"{{ path('moduloclientes_cliente_partidosClientes',{ id: competicion.id }) }}\" class=\"btn btn-sm btn-info\">
                    Ver Partidos
                </a>
                <a class=\"btn btn-default\" href=\"{{ path('moduloclientes_cliente_competicionesClientes') }}\">Volver atrás</a>
            {%endif%}
        </ul>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/competicionClientes.html.twig");
    }
}
