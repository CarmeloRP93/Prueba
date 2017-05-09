<?php

/* CriveroPruebaBundle:Competiciones:jugador.html.twig */
class __TwigTemplate_b9e2e7f14ea359014bb72c8af4694d394484effc03b62efa13d04c29c0794fe7 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <h3 style=\"font-weight: 600\">Foto</h3>
                            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <h3 style=\"font-weight: 600\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "nombre", array()), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Nº de Dorsal:</h4> <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "dorsal", array()), "html", null, true);
        echo "</p>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 23
            echo "                                <h4>Equipo al que pertenece:</h4><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
            echo "</p>
                                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                if (($this->getAttribute($context["equipo"], "idCompeticion", array()) == $this->getAttribute($context["competicion"], "id", array()))) {
                    // line 25
                    echo "                                    <h4>Competición en la que participa: </h4><p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                    echo "</p>
                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "idEquipo", array()))) {
                // line 31
                echo "                                <h4>Nº de partidos en los que su equipo ha disputado:</h4><p>";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["equipo"], "victorias", array()) + $this->getAttribute($context["equipo"], "empates", array())) + $this->getAttribute($context["equipo"], "derrotas", array())), "html", null, true);
                echo "</p>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            <h4>Incidencias:</h4><p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "incidencia", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_equipo", array("id" => $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "idEquipo", array()))), "html", null, true);
        echo "\">Ver equipo</a>
                <a class=\"btn btn-default\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_jugadores");
        echo "\">Volver a listado jugadores</a>
            </div>
        </div>
    </div>
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
        return array (  130 => 38,  126 => 37,  118 => 33,  108 => 31,  103 => 30,  99 => 28,  93 => 27,  83 => 25,  78 => 24,  73 => 23,  69 => 22,  65 => 21,  55 => 14,  49 => 11,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <h3 style=\"font-weight: 600\">Foto</h3>
                            <img src=\"{{ asset('images/' ~ jugador.imagen) }}\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <h3 style=\"font-weight: 600\">{{jugador.nombre}}</h3>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Nº de Dorsal:</h4> <p>{{jugador.dorsal}}</p>
                            {%for equipo in equipos%}
                                <h4>Equipo al que pertenece:</h4><p>{{equipo.nombre}}</p>
                                {%for competicion in competiciones if equipo.idCompeticion == competicion.id%}
                                    <h4>Competición en la que participa: </h4><p>{{competicion.nombre}}</p>
                                {%endfor%}
                            {%endfor%}
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            {%for equipo in equipos if equipo.id == jugador.idEquipo %}
                                <h4>Nº de partidos en los que su equipo ha disputado:</h4><p>{{equipo.victorias + equipo.empates + equipo.derrotas}}</p>
                            {%endfor%}
                            <h4>Incidencias:</h4><p>{{jugador.incidencia}}</p>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"{{ path('crivero_prueba_equipo', {id:jugador.idEquipo}) }}\">Ver equipo</a>
                <a class=\"btn btn-default\" href=\"{{ path('crivero_prueba_jugadores') }}\">Volver a listado jugadores</a>
            </div>
        </div>
    </div>
{% endblock %}", "CriveroPruebaBundle:Competiciones:jugador.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Competiciones/jugador.html.twig");
    }
}
