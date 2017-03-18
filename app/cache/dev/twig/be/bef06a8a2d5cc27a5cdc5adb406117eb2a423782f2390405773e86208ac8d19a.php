<?php

/* CriveroPruebaBundle:Aulas:aula.html.twig */
class __TwigTemplate_91aaf3250a47bd908dbb8169e4cb4c69b4e78ec644e6370c7849eca507df5dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Aulas:aula.html.twig", 1);
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container text-center\">
        <h3>Detalles de Aula</h3>
    </div>

    <div class=\"text-center\">
        <h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</h4>
    </div>

    <div class=\"col-md-6 col-xs-12\">

        <div class=\"text-center\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "imagen", array()))), "html", null, true);
        echo "\" style=\"width:250px; height: 150px\"  class=\"img-rounded\"/><br>

            <br>";
        // line 18
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()) == "Disponible")) {
            // line 19
            echo "            <div class=\"text-center\">
                <button class=\"btn btn-success\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            </div>
            ";
        } else {
            // line 23
            echo "                <div class=\"text-center\">
                    <button class=\"btn btn-danger\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
                </div>
                ";
        }
        // line 27
        echo "                </div><br>

            </div>

            <div class=\"col-md-6 col-xs-12\">
                <div class=\"text-center\">
                    <h4>Horario: </h4>
                    <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "horario", array()), "html", null, true);
        echo " </p>

                    ";
        // line 36
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) != null)) {
            // line 37
            echo "                        <div>
                            <h4>Sesiones: </h4> 
                            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 40
                echo "                                <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo " con ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "horario", array()), "html", null, true);
                echo " </p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        </div>
                    ";
        }
        // line 44
        echo "                </div>

                <div class=\"text-center\">
                    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">
                        Editar info
                    </a>
                    ";
        // line 50
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar aula"));
        echo "
                 </div>

            </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Aulas:aula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  130 => 47,  125 => 44,  121 => 42,  108 => 40,  104 => 39,  100 => 37,  98 => 36,  93 => 34,  84 => 27,  78 => 24,  75 => 23,  69 => 20,  66 => 19,  64 => 18,  59 => 16,  50 => 10,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
{% block title %} {{aula.nombre}} {% endblock %}
{% block contenido %}
    {{ include('CriveroPruebaBundle:Default:messages/success.html.twig') }}
    <div class=\"container text-center\">
        <h3>Detalles de Aula</h3>
    </div>

    <div class=\"text-center\">
        <h4>{{aula.nombre}}</h4>
    </div>

    <div class=\"col-md-6 col-xs-12\">

        <div class=\"text-center\">
            <img src=\"{{ asset('images/' ~ aula.imagen) }}\" style=\"width:250px; height: 150px\"  class=\"img-rounded\"/><br>

            <br>{% if aula.disponibilidad == \"Disponible\" %}
            <div class=\"text-center\">
                <button class=\"btn btn-success\">{{aula.disponibilidad}}</button>
            </div>
            {% else %}
                <div class=\"text-center\">
                    <button class=\"btn btn-danger\">{{aula.disponibilidad}}</button>
                </div>
                {% endif %}
                </div><br>

            </div>

            <div class=\"col-md-6 col-xs-12\">
                <div class=\"text-center\">
                    <h4>Horario: </h4>
                    <p>{{aula.horario}} </p>

                    {% if aula.sesiones != null %}
                        <div>
                            <h4>Sesiones: </h4> 
                            {% for sesion in sesiones %}
                                <p>{{ sesion.nombre }} con {{sesion.monitor}} - {{sesion.horario}} </p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"text-center\">
                    <a href=\"{{ path('crivero_prueba_aula_editar', { id: aula.id }) }}\" class=\"btn btn-sm btn-primary\">
                        Editar info
                    </a>
                    {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form, nombre: \"Eliminar aula\" })}}
                 </div>

            </div>
{% endblock %}", "CriveroPruebaBundle:Aulas:aula.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Aulas/aula.html.twig");
    }
}
