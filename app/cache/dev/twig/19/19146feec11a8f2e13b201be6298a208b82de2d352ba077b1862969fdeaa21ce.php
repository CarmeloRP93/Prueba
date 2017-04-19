<?php

/* moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig */
class __TwigTemplate_de6f92432f329499ce88251e02d337213d320e0a5450e0a4537a7762a3b787f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Competiciones ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                     <h1 class=\"t1\">Listado de competiciones </h1>
                </div>
                <label class=\"label label-default\">En inscripción: </label>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 13
            echo "                    ";
            if (($this->getAttribute($context["competicion"], "estadoCompeticion", array()) == "Validado")) {
                // line 14
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"fila ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</a>
                    ";
            }
            // line 16
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                <label class=\"label label-success\">En curso: </label>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 19
            echo "                    ";
            if (($this->getAttribute($context["competicion"], "estadoCompeticion", array()) == "Jugandose")) {
                // line 20
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"fila ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</a>
                    ";
            }
            // line 22
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                <label class=\"label label-danger\">Finalizado: </label>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 25
            echo "                    ";
            if (($this->getAttribute($context["competicion"], "estadoCompeticion", array()) == "Finalizado")) {
                // line 26
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_competicionClientes", array("id" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"fila ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</a>
                    ";
            }
            // line 28
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
            <div class=\"nuevaCompeticion\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_competicion_nueva");
        echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                    Nueva Competicion 
                 <span class=\"glyphicon glyphicon-plus\"></span></a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 31,  185 => 29,  171 => 28,  161 => 26,  158 => 25,  141 => 24,  138 => 23,  124 => 22,  114 => 20,  111 => 19,  94 => 18,  91 => 17,  77 => 16,  67 => 14,  64 => 13,  47 => 12,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
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

{% block title %} Vista de Competiciones {% endblock %}             
{% block contenido %}
    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                     <h1 class=\"t1\">Listado de competiciones </h1>
                </div>
                <label class=\"label label-default\">En inscripción: </label>
                {% for competicion in competiciones %}
                    {% if competicion.estadoCompeticion == \"Validado\" %}
                        <a href=\"{{url('moduloclientes_cliente_competicionClientes', {'id': competicion.id})}}\" class=\"fila {{cycle([\"par\",\"impar\"], loop.index)}}\">{{ competicion.nombre }}</a>
                    {%endif%}
                {% endfor %}
                <label class=\"label label-success\">En curso: </label>
                {% for competicion in competiciones %}
                    {% if competicion.estadoCompeticion == \"Jugandose\" %}
                        <a href=\"{{url('moduloclientes_cliente_competicionClientes', {'id': competicion.id})}}\" class=\"fila {{cycle([\"par\",\"impar\"], loop.index)}}\">{{ competicion.nombre }}</a>
                    {%endif%}
                {% endfor %}
                <label class=\"label label-danger\">Finalizado: </label>
                {% for competicion in competiciones %}
                    {% if competicion.estadoCompeticion == \"Finalizado\" %}
                        <a href=\"{{url('moduloclientes_cliente_competicionClientes', {'id': competicion.id})}}\" class=\"fila {{cycle([\"par\",\"impar\"], loop.index)}}\">{{ competicion.nombre }}</a>
                    {%endif%}
                {% endfor %}
            </div>
            <div class=\"nuevaCompeticion\">
                <a href=\"{{path('moduloclientes_cliente_competicion_nueva')}}\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                    Nueva Competicion 
                 <span class=\"glyphicon glyphicon-plus\"></span></a>
            </div>
        </div>
    </div>
{% endblock %}", "moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Competiciones/competicionesClientes.html.twig");
    }
}
