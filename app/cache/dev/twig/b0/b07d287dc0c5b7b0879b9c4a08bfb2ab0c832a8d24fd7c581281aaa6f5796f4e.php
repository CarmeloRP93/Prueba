<?php

/* moduloclientesclienteBundle:Reservas:reservaClientes.html.twig */
class __TwigTemplate_e5e7bf1dd9f065ddc0cd85235c614ff5b7d799ea78c94d6e12763177734b4e65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Reservas:reservaClientes.html.twig", 1);
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
        echo "Reserva de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "cancha", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h1 class=\"t1\">Detalles de Reserva</h1>
        <h3 class=\"t3\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "cancha", array()), "html", null, true);
        echo "<h3>
                </div>

                <div class=\"col-md-6 col-xs-12\">

                    <div class=\"text-center\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/cancha_de_marmolejo.jpg"), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>


                        <br>
                        <div class=\"text-center\">
                            ";
        // line 18
        if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "estadoReserva", array()) == "Reservado")) {
            // line 19
            echo "                                <button class=\"btn btn-danger\">Cancelar</button>
                            ";
        } else {
            // line 21
            echo "                                <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                                    Cancelada(pulsa para descartar reserva)
                                </a>
                                ";
            // line 24
            if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()) != null)) {
                // line 25
                echo "                                    <div >
                                        <h4>Motivos:</h4>
                                        <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()), "html", null, true);
                echo "</p>
                                    </div>
                                ";
            }
            // line 30
            echo "                            ";
        }
        // line 31
        echo "                        </div>
                    </div><br>
                </div>

                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Día: </label>
                        <label class=\"control-label span7 text-right\">15/11/2016 </label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Horario: </label>
                        <label class=\"control-label span7 text-right\">15:00 - 18:30 </label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Dimensiones: </label>
                        <label class=\"control-label span7 text-right\">100 m2</label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Valoracion: </label>
                        <label class=\" text-right\">5.0/5.0</label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Dirección: </label>
                        <label class=\"control-label span7 text-right\">Calle Desengaño, 21</label>
                    </div><br>

                </div>

            ";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Reservas:reservaClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  86 => 30,  80 => 27,  76 => 25,  74 => 24,  67 => 21,  63 => 19,  61 => 18,  53 => 13,  44 => 7,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
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

{% block title %}Reserva de {{reserva.cancha}} {% endblock %}
{% block contenido %}
    <div class=\"container text-center\">
        <h1 class=\"t1\">Detalles de Reserva</h1>
        <h3 class=\"t3\">{{reserva.cancha}}<h3>
                </div>

                <div class=\"col-md-6 col-xs-12\">

                    <div class=\"text-center\">
                        <img src=\"{{ asset('images/cancha_de_marmolejo.jpg') }}\" width=\"180px\" class=\"img-rounded\"/><br>


                        <br>
                        <div class=\"text-center\">
                            {% if reserva.estadoReserva == 'Reservado' %}
                                <button class=\"btn btn-danger\">Cancelar</button>
                            {% else %}
                                <a  href=\"{{ path('crivero_prueba_cliente', { id: reserva.id }) }}\" class=\"btn btn-danger\">
                                    Cancelada(pulsa para descartar reserva)
                                </a>
                                {% if reserva.motivos != null %}
                                    <div >
                                        <h4>Motivos:</h4>
                                        <p>{{reserva.motivos}}</p>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </div>
                    </div><br>
                </div>

                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Día: </label>
                        <label class=\"control-label span7 text-right\">15/11/2016 </label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Horario: </label>
                        <label class=\"control-label span7 text-right\">15:00 - 18:30 </label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Dimensiones: </label>
                        <label class=\"control-label span7 text-right\">100 m2</label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Valoracion: </label>
                        <label class=\" text-right\">5.0/5.0</label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Dirección: </label>
                        <label class=\"control-label span7 text-right\">Calle Desengaño, 21</label>
                    </div><br>

                </div>

            {% endblock %}", "moduloclientesclienteBundle:Reservas:reservaClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Reservas/reservaClientes.html.twig");
    }
}
