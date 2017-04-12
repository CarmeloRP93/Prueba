<?php

/* CriveroPruebaBundle:Usuarios:cliente.html.twig */
class __TwigTemplate_31d20ebfdc8a6a2ac0ef180674732bccb4d5fe5d6503de3d404a520c760a3b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Usuarios:cliente.html.twig", 1);
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
        echo " Cliente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"usuardesc container\">
        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username", array()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"usuarfot\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/no-image-found.png"), "html", null, true);
        echo "\" style=\"float: left; width: 120%;\" />        
                    </div>
                    <div class=\"usuardat text-center\">
                        <button type=\"button\" class=\"btn btn-primary\">Enviar mensaje</button>

                    </div>
                    <h4>Nombre: </h4> <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</p>
                    <h4>F.Nacimiento: </h4> <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                    <h4>Telefono: </h4> <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>
                    <h4>Registro: </h4> <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>

                    <div>
                        ";
        // line 25
        if (((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")) != null)) {
            // line 26
            echo "                            <div>
                                <h4>Reservas: </h4> 
                                <ul id=\"reservas\">
                                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 30
                echo "                                        <li>
                                            <div class=\"acciones\">
                                                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_reserva_cancelar", array("id" => $this->getAttribute($context["reserva"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\">
                                                    Cancelar
                                                </a>
                                            </div>
                                            <p>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cancha", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d/m H:i"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaFinalizacion", array()), "H:i"), "html", null, true);
                echo "</p>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 42
        echo "
                        ";
        // line 43
        if (($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()) != null)) {
            // line 44
            echo "                            <div>
                                <h4>Sesiones: </h4> 
                                <ul id=\"sesiones\">
                                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 48
                echo "                                        <li>
                                            <p>Aula ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "aula", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo " con ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "horario", array()), "html", null, true);
                echo "</p>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 55
        echo "                    </div><br>
                    <div class=\"accionesExclus text-center\">       
                        ";
        // line 57
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar usuario"));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  157 => 55,  152 => 52,  137 => 49,  134 => 48,  130 => 47,  125 => 44,  123 => 43,  120 => 42,  115 => 39,  102 => 36,  95 => 32,  91 => 30,  87 => 29,  82 => 26,  80 => 25,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  53 => 13,  46 => 9,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
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

{% block title %} Cliente {{cliente.username}} {% endblock %}
{% block contenido %}
    <div class=\"usuardesc container\">
        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h3>{{cliente.username}}</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"usuarfot\">
                        <img src=\"{{ asset('images/no-image-found.png') }}\" style=\"float: left; width: 120%;\" />        
                    </div>
                    <div class=\"usuardat text-center\">
                        <button type=\"button\" class=\"btn btn-primary\">Enviar mensaje</button>

                    </div>
                    <h4>Nombre: </h4> <p>{{cliente.nombre}}</p>
                    <h4>F.Nacimiento: </h4> <p>{{cliente.fNacimiento}}</p>
                    <h4>Telefono: </h4> <p>{{cliente.telefono}}</p>
                    <h4>Registro: </h4> <p>{{cliente.registro|date('d/m/Y')}}</p>

                    <div>
                        {% if reservas != null %}
                            <div>
                                <h4>Reservas: </h4> 
                                <ul id=\"reservas\">
                                    {% for reserva in reservas %}
                                        <li>
                                            <div class=\"acciones\">
                                                <a href=\"{{path('crivero_prueba_reserva_cancelar', {id: reserva.id})}}\" class=\"btn btn-sm btn-warning\">
                                                    Cancelar
                                                </a>
                                            </div>
                                            <p>{{reserva.cancha}}: {{reserva.fechaInicio|date('d/m H:i')}} - {{reserva.fechaFinalizacion|date('H:i')}}</p>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}

                        {% if cliente.sesiones != null %}
                            <div>
                                <h4>Sesiones: </h4> 
                                <ul id=\"sesiones\">
                                    {% for sesion in sesiones %}
                                        <li>
                                            <p>Aula {{sesion.aula}} - {{sesion.nombre}} con {{sesion.monitor}} - {{sesion.horario}}</p>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}
                    </div><br>
                    <div class=\"accionesExclus text-center\">       
                        {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form, nombre: \"Eliminar usuario\" })}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "CriveroPruebaBundle:Usuarios:cliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/cliente.html.twig");
    }
}
