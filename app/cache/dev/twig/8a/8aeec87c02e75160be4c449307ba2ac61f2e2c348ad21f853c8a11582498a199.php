<?php

/* moduloclientesclienteBundle:Canchas:canchaClientes.html.twig */
class __TwigTemplate_0eb50563f82298f5c61f3622fea7ae7e46503252e5342da3d02603455e2b7cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Canchas:canchaClientes.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"t1\">Detalles de la cancha</h1>   
    <div class=\"container text-center\">

    <div class=\"text-center\">
        <h3 class=\"t3\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"col-md-6 col-xs-12\">

        <div class=\"text-center\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/cancha_de_marmolejo.jpg"), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>

            <br>";
        // line 16
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 17
            echo "            <div class=\"text-center\">
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_nuevaReserva", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Reservar </a>
            </div>
            ";
        } else {
            // line 21
            echo "                <div class=\"text-center\">
                    <button class=\"btn btn-danger\">Reservada</button>
                </div>
                ";
        }
        // line 25
        echo "                </div><br>

            </div>

            <div class=\"col-md-6 col-xs-12\">
                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Horario: </label>
                    <label class=\"control-label span7 text-right\">15:00 - 18:30 </label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dimensiones: </label>
                    <label class=\"control-label span7 text-right\">100 m2</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Mínimo de personas para jugar: </label>
                    <label class=\"control-label span7 text-right\">20</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Valoracion: </label>
                    <label class=\" text-right\">5.0</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dirección: </label>
                    <label class=\"control-label span7 text-right\">Calle Desengaño, 21</label>
                </div><br>

                <div class=\"text-center\">
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_escribirSugerencia", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Escribir sugerencia </a>
                </div><br>

            </div>

            ";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Canchas:canchaClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 56,  77 => 25,  71 => 21,  65 => 18,  62 => 17,  60 => 16,  55 => 14,  46 => 8,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Vista de {{cancha.tipo}} {% endblock %}
{% block contenido %}
    <h1 class=\"t1\">Detalles de la cancha</h1>   
    <div class=\"container text-center\">

    <div class=\"text-center\">
        <h3 class=\"t3\">{{cancha.tipo}}</h3>
    </div>

    <div class=\"col-md-6 col-xs-12\">

        <div class=\"text-center\">
            <img src=\"{{ asset('images/cancha_de_marmolejo.jpg') }}\" width=\"180px\" class=\"img-rounded\"/><br>

            <br>{% if cancha.disponibilidad == \"Disponible\" %}
            <div class=\"text-center\">
                <a href=\"{{path('moduloclientes_cliente_nuevaReserva', {'id': cancha.id})}}\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Reservar </a>
            </div>
            {% else %}
                <div class=\"text-center\">
                    <button class=\"btn btn-danger\">Reservada</button>
                </div>
                {% endif %}
                </div><br>

            </div>

            <div class=\"col-md-6 col-xs-12\">
                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Horario: </label>
                    <label class=\"control-label span7 text-right\">15:00 - 18:30 </label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dimensiones: </label>
                    <label class=\"control-label span7 text-right\">100 m2</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Mínimo de personas para jugar: </label>
                    <label class=\"control-label span7 text-right\">20</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Valoracion: </label>
                    <label class=\" text-right\">5.0</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dirección: </label>
                    <label class=\"control-label span7 text-right\">Calle Desengaño, 21</label>
                </div><br>

                <div class=\"text-center\">
                    <a href=\"{{path('moduloclientes_cliente_escribirSugerencia', {'id': cancha.id})}}\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Escribir sugerencia </a>
                </div><br>

            </div>

            {% endblock %}", "moduloclientesclienteBundle:Canchas:canchaClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Canchas/canchaClientes.html.twig");
    }
}
