<?php

/* moduloclientesclienteBundle:Reservas:reservaClientes.html.twig */
class __TwigTemplate_4876f1c6a1e04b9b16b6ad1d1bd111e0ae8245044c9a6ad7912f27e066c971af extends Twig_Template
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
        echo "    ";
        if (((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")) == null)) {
            echo " 
        KOKJOJPO
    ";
        } else {
            // line 7
            echo " 
        
    <div class=\"container text-center\">
        <h1 class=\"t1\">Detalles de Reserva</h1>
        <h3 class=\"t3\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "cancha", array()), "html", null, true);
            echo "</h3>
  
        <div class=\"container row\">
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
            echo "\" width=\"180px\" class=\"img-rounded\"/><br>
                </div><br>

                <div class=\"text-center\">
                    ";
            // line 20
            if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "estadoReserva", array()) == "Reservado")) {
                // line 21
                echo "                        ";
                echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Cancelar reserva"));
                echo "
                    ";
            } else {
                // line 23
                echo "                        <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                            Cancelada(pulsa para descartar reserva)
                        </a>
                        ";
                // line 26
                if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()) != null)) {
                    // line 27
                    echo "                            <div >
                                <h4>Motivos:</h4>
                                <p>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()), "html", null, true);
                    echo "</p>
                            </div>
                        ";
                }
                // line 32
                echo "                    ";
            }
            echo "      
                         
                </div>        
            </div>                      

            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Fecha reserva: </label>
                    <label>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</label>
                    ";
            // line 41
            $context["horario"] = twig_split_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "horario", array()), "&");
            echo " 
                    ";
            // line 42
            if ((twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) > 2)) {
                // line 43
                echo "                        ";
                $context["horarioFinal1"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "-");
                echo " 
                        ";
                // line 44
                $context["horarioFinal2"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), (twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) - 2), array(), "array"), "-");
                echo " 
                        <label>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal1"]) ? $context["horarioFinal1"] : $this->getContext($context, "horarioFinal1")), 0, array(), "array"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2")), (twig_length_filter($this->env, (isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2"))) - 1), array(), "array"), "html", null, true);
                echo " </label>
                    ";
            } else {
                // line 47
                echo "                        <label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "html", null, true);
                echo "</label>
                    ";
            }
            // line 49
            echo "                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Deporte: </label>
                    <label class=\" text-right\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "deporte", array()), "html", null, true);
            echo "</label>
                </div> 

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dimensiones: </label>
                    <label class=\"control-label span7 text-right\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "dimensiones", array()), "html", null, true);
            echo " m²</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Valoracion: </label>
                    <label class=\" text-right\">5.0</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dirección: </label>
                    <label class=\"control-label span7 text-right\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
            echo "</label>
                </div><br>

                <div class=\"text-center\">
                    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_escribirSugerencia", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Valorar cancha </a>
                </div><br>
            </div>
        </div>
    </div>
                            ";
        }
        // line 77
        echo " 
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
        return array (  182 => 77,  173 => 72,  166 => 68,  153 => 58,  145 => 53,  139 => 49,  133 => 47,  126 => 45,  122 => 44,  117 => 43,  115 => 42,  111 => 41,  107 => 40,  95 => 32,  89 => 29,  85 => 27,  83 => 26,  76 => 23,  70 => 21,  68 => 20,  61 => 16,  53 => 11,  47 => 7,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
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
    {% if cancha == null %} 
        KOKJOJPO
    {% else %} 
        
    <div class=\"container text-center\">
        <h1 class=\"t1\">Detalles de Reserva</h1>
        <h3 class=\"t3\">{{reserva.cancha}}</h3>
  
        <div class=\"container row\">
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <img src=\"{{ asset(cancha.imagen) }}\" width=\"180px\" class=\"img-rounded\"/><br>
                </div><br>

                <div class=\"text-center\">
                    {% if reserva.estadoReserva == 'Reservado' %}
                        {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form, nombre: \"Cancelar reserva\" })}}
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
            </div>                      

            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Fecha reserva: </label>
                    <label>{{reserva.fechaInicio|date('d/m/Y')}}</label>
                    {% set horario = reserva.horario|split('&') %} 
                    {% if horario|length > 2 %}
                        {% set horarioFinal1 = horario[0]|split('-') %} 
                        {% set horarioFinal2 = horario[horario|length - 2]|split('-') %} 
                        <label>{{horarioFinal1[0]}}-{{horarioFinal2[horarioFinal2|length - 1]}} </label>
                    {% else %}
                        <label>{{horario[0]}}</label>
                    {% endif %}
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Deporte: </label>
                    <label class=\" text-right\">{{cancha.deporte}}</label>
                </div> 

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dimensiones: </label>
                    <label class=\"control-label span7 text-right\">{{cancha.dimensiones}} m²</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Valoracion: </label>
                    <label class=\" text-right\">5.0</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dirección: </label>
                    <label class=\"control-label span7 text-right\">{{cancha.direccion}}</label>
                </div><br>

                <div class=\"text-center\">
                    <a href=\"{{path('moduloclientes_cliente_escribirSugerencia', {'id': cancha.id})}}\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Valorar cancha </a>
                </div><br>
            </div>
        </div>
    </div>
                            {% endif %} 
{% endblock %}", "moduloclientesclienteBundle:Reservas:reservaClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Reservas/reservaClientes.html.twig");
    }
}
