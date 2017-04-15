<?php

/* moduloclientesclienteBundle:Canchas:canchaClientes.html.twig */
class __TwigTemplate_d3067d9171b049fe818c6238a4960afc03cf5d7b750fd41c6ed7053e55faf086 extends Twig_Template
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

        <div class=\" container row\">
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>

                    <br>";
        // line 16
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 17
            echo "                    <div class=\"text-center\">
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_nuevaReserva", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Reservar </a>
                    </div>
                    ";
        } else {
            // line 21
            echo "                        <div class=\"text-center\">
                            <button class=\"btn btn-danger\">Reservada</button>
                        </div>
                        ";
        }
        // line 25
        echo "                </div><br>

            </div>
                
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Horario: </label>
                    <label class=\"control-label span7 text-right\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "horario", array()), "html", null, true);
        echo "</label>
                </div>

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Deporte: </label>
                    <label class=\" text-right\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "deporte", array()), "html", null, true);
        echo "</label>
                </div> 

                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Dimensiones: </label>
                    <label class=\"control-label span7 text-right\">";
        // line 42
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
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
        echo "</label>
                </div><br>

                <div class=\"text-center\">
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_escribirSugerencia", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Escribir sugerencia </a>
                </div><br>
            </div>
        </div>
                
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"t3 text-center\">Horarios disponibles de los próximos 7 días</h3>               
                <table class=\"table\">
                    <tbody>
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 67
            echo "                            <tr>
                                <th>Día ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["horario"], "fechaInicio", array()), "-"), 0, array(), "array"), "html", null, true);
            echo "</th>
                                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute($context["horario"], "periodo", array()), "&"));
            foreach ($context['_seq'] as $context["_key"] => $context["horitas"]) {
                // line 70
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                echo "</td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horitas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </tbody>
                </table>
            </div>
        </div>
                    
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
        return array (  166 => 74,  159 => 72,  150 => 70,  146 => 69,  142 => 68,  139 => 67,  135 => 66,  122 => 56,  115 => 52,  102 => 42,  94 => 37,  86 => 32,  77 => 25,  71 => 21,  65 => 18,  62 => 17,  60 => 16,  55 => 14,  46 => 8,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
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

        <div class=\" container row\">
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <img src=\"{{ asset(cancha.imagen) }}\" width=\"180px\" class=\"img-rounded\"/><br>

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
                
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <label class=\"control-label span7 text-left\">Horario: </label>
                    <label class=\"control-label span7 text-right\">{{cancha.horario}}</label>
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
                    <a href=\"{{path('moduloclientes_cliente_escribirSugerencia', {'id': cancha.id})}}\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Escribir sugerencia </a>
                </div><br>
            </div>
        </div>
                
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"t3 text-center\">Horarios disponibles de los próximos 7 días</h3>               
                <table class=\"table\">
                    <tbody>
                        {% for horario in horarios  %}
                            <tr>
                                <th>Día {{ horario.fechaInicio|split('-')[0] }}</th>
                                {% for horitas in horario.periodo|split('&')  %}
                                    <td>{{ horitas }}</td>
                                {% endfor %}
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
                    
    </div>
{% endblock %}", "moduloclientesclienteBundle:Canchas:canchaClientes.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Canchas/canchaClientes.html.twig");
    }
}
