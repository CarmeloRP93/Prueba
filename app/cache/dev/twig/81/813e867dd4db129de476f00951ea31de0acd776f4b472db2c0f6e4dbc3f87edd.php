<?php

/* CriveroPruebaBundle:Competiciones:partido.html.twig */
class __TwigTemplate_a66e6e888dd50f4d35633852da1fcc1a187e50c46215195b2db3046da93612f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:partido.html.twig", 1);
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
        echo " Partido ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo "</h1>
            <h2 class=\"t1\">Partido entre ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
        echo " VS ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
        echo "</h2>
        </div>
        <div>
            ";
        // line 12
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Pendiente")) {
            // line 13
            echo "                <ul>
                    <li>El partido esta previsto para: ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaInicio", array()), "d/m/Y H:i:s"), "html", null, true);
            echo " en la cancha ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
            echo "
                    <li> El ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo " clasificado en ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "clasificacion", array()), "html", null, true);
            echo "º
                        puesto VS ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo " clasificado en ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "clasificacion", array()), "html", null, true);
            echo "º puesto</li>
                    <li>Árbitro designado para el encuentro: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</li>
                </ul>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Jugandose")) {
            // line 21
            echo "                <ul>
                    <li> El ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo " clasificado en ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "clasificacion", array()), "html", null, true);
            echo "º
                        puesto VS ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo " clasificado en ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "clasificacion", array()), "html", null, true);
            echo "º puesto</li>
                    <li>Arbitro pitando: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</li>
                    <li>Los jugadores del ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</li>
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 27
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo " con el dorsal ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</p>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    <li>Los jugadores del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</li>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 31
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo " con el dorsal ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</p>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </ul>
            ";
        }
        // line 35
        echo "            ";
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Finalizado")) {
            // line 36
            echo "                <ul>
                    <li>Clasificación de ambos en la competición</li>
                    <li>Árbitro asignado al encuentro: ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</li>
                    <li>Los jugadores del ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</li>
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 41
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo " con el dorsal ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</p>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    <li>Los jugadores del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</li>
                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 45
                    echo "                        <p>Nombre: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo " Dorsal: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo " Incidencias: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                    echo "</p>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    <li>Resultado del encuentro: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultado", array()), "html", null, true);
            echo "</li>
                </ul>
            ";
        }
        // line 50
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:partido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 50,  210 => 47,  196 => 45,  191 => 44,  186 => 43,  174 => 41,  169 => 40,  165 => 39,  161 => 38,  157 => 36,  154 => 35,  150 => 33,  138 => 31,  133 => 30,  128 => 29,  116 => 27,  111 => 26,  107 => 25,  103 => 24,  97 => 23,  91 => 22,  88 => 21,  85 => 20,  79 => 17,  73 => 16,  67 => 15,  61 => 14,  58 => 13,  56 => 12,  48 => 9,  44 => 8,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Partido {{ partido.id }} {% endblock %}

{% block contenido %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">{{ competicion.nombre }}</h1>
            <h2 class=\"t1\">Partido entre {{ equipoLocal.nombre }} VS {{ equipoVisitante.nombre }}</h2>
        </div>
        <div>
            {% if partido.estadoPartido == 'Pendiente' %}
                <ul>
                    <li>El partido esta previsto para: {{ partido.fechaInicio|date('d/m/Y H:i:s') }} en la cancha {{ cancha.tipo }}
                    <li> El {{ equipoLocal.nombre }} clasificado en {{ equipoLocal.clasificacion }}º
                        puesto VS {{ equipoVisitante.nombre }} clasificado en {{ equipoVisitante.clasificacion }}º puesto</li>
                    <li>Árbitro designado para el encuentro: {{ partido.arbitro }}</li>
                </ul>
            {% endif %}
            {% if partido.estadoPartido == 'Jugandose' %}
                <ul>
                    <li> El {{ equipoLocal.nombre }} clasificado en {{ equipoLocal.clasificacion }}º
                        puesto VS {{ equipoVisitante.nombre }} clasificado en {{ equipoVisitante.clasificacion }}º puesto</li>
                    <li>Arbitro pitando: {{ partido.arbitro }}</li>
                    <li>Los jugadores del {{ equipoLocal.nombre }}</li>
                    {% for jugador in jugadores if equipoLocal.id == jugador.idEquipo%}
                        <p>{{ jugador.nombre }} con el dorsal {{ jugador.dorsal }}</p>
                    {% endfor %}
                    <li>Los jugadores del {{ equipoVisitante.nombre }}</li>
                    {% for jugador in jugadores if equipoVisitante.id == jugador.idEquipo%}
                        <p>{{ jugador.nombre }} con el dorsal {{ jugador.dorsal }}</p>
                    {% endfor %}
                </ul>
            {% endif %}
            {% if partido.estadoPartido == 'Finalizado' %}
                <ul>
                    <li>Clasificación de ambos en la competición</li>
                    <li>Árbitro asignado al encuentro: {{ partido.arbitro }}</li>
                    <li>Los jugadores del {{ equipoLocal.nombre }}</li>
                    {% for jugador in jugadores if equipoLocal.id == jugador.idEquipo%}
                        <p>{{ jugador.nombre }} con el dorsal {{ jugador.dorsal }}</p>
                    {% endfor %}
                    <li>Los jugadores del {{ equipoVisitante.nombre }}</li>
                    {% for jugador in jugadores if equipoVisitante.id == jugador.idEquipo%}
                        <p>Nombre: {{ jugador.nombre }} Dorsal: {{ jugador.dorsal }} Incidencias: {{ jugador.incidencia }}</p>
                    {% endfor %}
                    <li>Resultado del encuentro: {{ partido.resultado}}</li>
                </ul>
            {% endif %}
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:partido.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/partido.html.twig");
    }
}
