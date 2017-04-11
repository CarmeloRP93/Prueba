<?php

/* CriveroPruebaBundle:Competiciones:jugador.html.twig */
class __TwigTemplate_37599ef795a4e69b4c1d02ebe67c20598ec65d1fa8df35c1ce0e0457be3969ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Competiciones:jugador.html.twig", 1);
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
        echo " Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Información detallada de: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "primerApellido", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "segundoApellido", array()), "html", null, true);
        echo "</h1>
    <ul>
        <li>Nº de Dorsal : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "dorsal", array()), "html", null, true);
        echo "</li>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "idEquipo", array()))) {
                // line 10
                echo "            <li>Equipo al que pertenece: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "</li>
            ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
                foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                    if (($this->getAttribute($context["equipo"], "idCompeticion", array()) == $this->getAttribute($context["competicion"], "id", array()))) {
                        // line 12
                        echo "                <li>Competición en la que participa: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                        echo "</li>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "idEquipo", array()))) {
                // line 16
                echo "            <li>Nº de partidos en los que su equipo ha disputado:";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["equipo"], "victorias", array()) + $this->getAttribute($context["equipo"], "empates", array())) + $this->getAttribute($context["equipo"], "derrotas", array())), "html", null, true);
                echo "</li>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <li>Incidencias:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "incidencia", array()), "html", null, true);
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:jugador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  92 => 16,  86 => 15,  79 => 14,  69 => 12,  64 => 11,  59 => 10,  54 => 9,  50 => 8,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Vista de {{jugador.nombre}} {% endblock %}

{% block contenido %}
    <h1>Información detallada de: {{jugador.nombre}} {{jugador.primerApellido}} {{jugador.segundoApellido}}</h1>
    <ul>
        <li>Nº de Dorsal : {{jugador.dorsal}}</li>
        {%for equipo in equipos if equipo.id == jugador.idEquipo %}
            <li>Equipo al que pertenece: {{equipo.nombre}}</li>
            {%for competicion in competiciones if equipo.idCompeticion == competicion.id%}
                <li>Competición en la que participa: {{competicion.nombre}}</li>
            {%endfor%}
        {%endfor%}
        {%for equipo in equipos if equipo.id == jugador.idEquipo %}
            <li>Nº de partidos en los que su equipo ha disputado:{{equipo.victorias + equipo.empates + equipo.derrotas}}</li>
        {%endfor%}
        <li>Incidencias:{{jugador.incidencia}}</li>
    </ul>
{% endblock %}", "CriveroPruebaBundle:Competiciones:jugador.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/jugador.html.twig");
    }
}
