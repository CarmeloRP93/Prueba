<?php

/* moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig */
class __TwigTemplate_e49f1947682b0bf6f1ac27117cbb7ef5cc5bbafb97fce1ee412aa77ce7fde84e extends Twig_Template
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
        ";
        }
        // line 16
        echo "        ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Jugandose")) {
            // line 17
            echo "            <h3>Insertar tabla de liga del deporte en cuestión (fútbol,baloncesto, tenis)</h3>
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
        ";
        }
        // line 43
        echo "    </div>
    <div>
        <ul class=\"container text-center\">
            ";
        // line 46
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Finalizado")) {
            // line 47
            echo "                <h3 class=\"t3\">Resumen del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
            echo "</h3>
                <p>Equipos</p>
            ";
        }
        // line 50
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
        return array (  143 => 50,  136 => 47,  134 => 46,  129 => 43,  124 => 40,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  92 => 31,  88 => 30,  73 => 17,  70 => 16,  62 => 11,  57 => 9,  50 => 8,  48 => 7,  43 => 5,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
        {%endif%}
        {% if competicion.estadoCompeticion == \"Jugandose\"%}
            <h3>Insertar tabla de liga del deporte en cuestión (fútbol,baloncesto, tenis)</h3>
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
        {%endif%}
    </div>
    <div>
        <ul class=\"container text-center\">
            {%if competicion.estadoCompeticion == \"Finalizado\" %}
                <h3 class=\"t3\">Resumen del {{competicion.nombre}}</h3>
                <p>Equipos</p>
            {%endif%}
        </ul>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/competicionClientes.html.twig");
    }
}
