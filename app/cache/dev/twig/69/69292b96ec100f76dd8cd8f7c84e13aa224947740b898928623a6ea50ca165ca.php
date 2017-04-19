<?php

/* CriveroPruebaBundle:Competiciones:equipo.html.twig */
class __TwigTemplate_37d2476d2cbf4620dfcd4848ecfd9a5d810decf27accc61c3cf65393619f8f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:equipo.html.twig", 1);
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h1 class=\"t1\">Deporte: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "deporte", array()), "html", null, true);
        echo "</h1>
        <h3 class=\"t3\">Detalles del Equipo ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo "</h3>
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th> Nombre </th>
                            <th> Primer Apellido  </th>
                            <th> Segundo Apellido  </th>
                            <th> Dorsal </th>
                            <th> Incidencia </th>
                        </tr>
                    </thead>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 20
            echo "                        ";
            if (($this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                // line 21
                echo "                        <tr>
                            <td>  ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                echo "  </td>
                            <td> ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "primerApellido", array()), "html", null, true);
                echo " </td>
                            <td>   ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "segundoApellido", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "Dorsal", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                echo "   </td>
                        </tr>
                        ";
            }
            // line 29
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </table>
            </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:equipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 29,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  69 => 21,  66 => 20,  62 => 19,  47 => 7,  43 => 6,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
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

{% block title %}Vista de {{equipo.nombre}} {% endblock %}
{% block contenido %}
    <div class=\"container text-center\">
        <h1 class=\"t1\">Deporte: {{equipo.deporte}}</h1>
        <h3 class=\"t3\">Detalles del Equipo {{equipo.nombre}}</h3>
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th> Nombre </th>
                            <th> Primer Apellido  </th>
                            <th> Segundo Apellido  </th>
                            <th> Dorsal </th>
                            <th> Incidencia </th>
                        </tr>
                    </thead>
                    {% for jugador in jugadores %}
                        {% if equipo.id == jugador.idEquipo%}
                        <tr>
                            <td>  {{jugador.nombre}}  </td>
                            <td> {{jugador.primerApellido}} </td>
                            <td>   {{jugador.segundoApellido}}   </td>
                            <td>   {{jugador.Dorsal}}   </td>
                            <td>   {{jugador.incidencia}}   </td>
                        </tr>
                        {%endif%}
                    {%endfor%}
                </table>
            </div>
    </div>
{% endblock %}
", "CriveroPruebaBundle:Competiciones:equipo.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/equipo.html.twig");
    }
}
