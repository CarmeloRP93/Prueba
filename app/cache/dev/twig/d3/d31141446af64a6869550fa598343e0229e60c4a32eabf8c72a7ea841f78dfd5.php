<?php

/* moduloclientesclienteBundle:Sesiones:misSesiones.html.twig */
class __TwigTemplate_bdb13289fa54cd12979b7e3ac1611ef8942a9041378a53e930bb0a8e5b8c0320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Sesiones:misSesiones.html.twig", 2);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de entrenamiento ";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading text-center\">
                 <h1 class=\"t1\">Mis sesiones</h1>
            </div>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
            // line 13
            echo "                ";
            if (($context["sesion"] != null)) {
                // line 14
                echo "                    ";
                if (($this->getAttribute($context["sesion"], "estado", array()) == "cancelada")) {
                    // line 15
                    echo "                        ";
                    $context["estado"] = "Cancelada";
                    // line 16
                    echo "                    ";
                } else {
                    // line 17
                    echo "                        ";
                    $context["estado"] = "Apuntado";
                    // line 18
                    echo "                    ";
                }
                // line 19
                echo "
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("moduloclientes_cliente_miSesionClientes", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"fila ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\"> Sesion ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "id", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, (isset($context["estado"]) ? $context["estado"] : $this->getContext($context, "estado")), "html", null, true);
                echo "</a>
                ";
            }
            // line 22
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Sesiones:misSesiones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  96 => 22,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  45 => 12,  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
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
{% extends 'moduloclientesclienteBundle::main.html.twig' %}

{% block title %} Vista de entrenamiento {% endblock %}

{% block contenido %}
    <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading text-center\">
                 <h1 class=\"t1\">Mis sesiones</h1>
            </div>
            {% for sesion in sesiones %}
                {% if (sesion != NULL) %}
                    {% if (sesion.estado == 'cancelada') %}
                        {% set estado = 'Cancelada' %}
                    {% else %}
                        {% set estado = 'Apuntado' %}
                    {% endif %}

                    <a href=\"{{url('moduloclientes_cliente_miSesionClientes', {'id': sesion.id})}}\" class=\"fila {{cycle([\"par\",\"impar\"], loop.index)}}\"> Sesion {{sesion.id}}: {{ sesion.nombre }} - {{ estado }}</a>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}





", "moduloclientesclienteBundle:Sesiones:misSesiones.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Sesiones/misSesiones.html.twig");
    }
}
