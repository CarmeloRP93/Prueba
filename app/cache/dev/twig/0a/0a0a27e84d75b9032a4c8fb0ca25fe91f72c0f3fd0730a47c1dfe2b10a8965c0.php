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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "imagen", array()))), "html", null, true);
        echo "\" style=\"float: left; width: 120%;\" />        
                    </div>
                    <div class=\"usuardat text-center\">
                        <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_enviarMensaje");
        echo "\" method=\"post\" class=\"form-signin\">
                            <button type=\"submit\" class=\"btn btn-primary\">Enviar mensaje</button>
                        </form>
                        <a href = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">Editar</a>

                    </div>
                    <h4>Nombre: </h4> <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</p>
                    <h4>F.Nacimiento: </h4> <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                    <h4>Telefono: </h4> <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>
                    <h4>Registro: </h4> <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>

                    <div>
                        ";
        // line 28
        if (((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")) != null)) {
            // line 29
            echo "                            <div>
                                <h4>Reservas: </h4> 
                                <form action=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_reservas_cliente", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ver reservas</button>
                                </form>
                           ";
            // line 46
            echo "                            </div>
                        ";
        }
        // line 48
        echo "
                        ";
        // line 49
        if (($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()) != null)) {
            // line 50
            echo "                            <div>
                                <h4>Sesiones: </h4> 
                                <form action=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_sesiones_cliente", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ver sesiones</button>
                                </form>
                                ";
            // line 62
            echo "                            </div>
                        ";
        }
        // line 64
        echo "                    </div><br>
                    ";
        // line 65
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))) {
            // line 66
            echo "                        <div class=\"accionesExclus text-center\">       
                            ";
            // line 67
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar usuario"));
            echo "
                        </div>
                    ";
        }
        // line 70
        echo "                </div>
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
        return array (  138 => 70,  132 => 67,  129 => 66,  127 => 65,  124 => 64,  120 => 62,  114 => 52,  110 => 50,  108 => 49,  105 => 48,  101 => 46,  95 => 31,  91 => 29,  89 => 28,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  65 => 19,  59 => 16,  53 => 13,  46 => 9,  40 => 5,  37 => 4,  29 => 3,  11 => 1,);
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
                        <img src=\"{{ asset('images/' ~ cliente.imagen) }}\" style=\"float: left; width: 120%;\" />        
                    </div>
                    <div class=\"usuardat text-center\">
                        <form action=\"{{ path('crivero_prueba_enviarMensaje') }}\" method=\"post\" class=\"form-signin\">
                            <button type=\"submit\" class=\"btn btn-primary\">Enviar mensaje</button>
                        </form>
                        <a href = \"{{path('crivero_prueba_editarUsuario', { id: cliente.id })}}\" class=\"btn btn-sm btn-primary\">Editar</a>

                    </div>
                    <h4>Nombre: </h4> <p>{{cliente.nombre}}</p>
                    <h4>F.Nacimiento: </h4> <p>{{cliente.fNacimiento}}</p>
                    <h4>Telefono: </h4> <p>{{cliente.telefono}}</p>
                    <h4>Registro: </h4> <p>{{cliente.registro|date('d/m/Y')}}</p>

                    <div>
                        {% if reservas != null %}
                            <div>
                                <h4>Reservas: </h4> 
                                <form action=\"{{ path('crivero_prueba_reservas_cliente', { id: cliente.id })}}\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ver reservas</button>
                                </form>
                           {#     <ul id=\"reservas\">
                                    {% for reserva in reservas %}
                                        <li>
                                            <div class=\"acciones\">
                                                <a href=\"{{path('crivero_prueba_reserva_cancelar', {id: reserva.id})}}\" class=\"btn btn-sm btn-warning\">
                                                    Cancelar
                                                </a>
                                            </div>
                                            <p>{{reserva.cancha}}: {{reserva.fechaInicio|date('d/m')}} - {{reserva.horario}}</p>
                                        </li>
                                    {% endfor %}
                                </ul>#}
                            </div>
                        {% endif %}

                        {% if cliente.sesiones != null %}
                            <div>
                                <h4>Sesiones: </h4> 
                                <form action=\"{{ path('crivero_prueba_sesiones_cliente', { id: cliente.id })}}\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ver sesiones</button>
                                </form>
                                {#<ul id=\"sesiones\">
                                    {% for sesion in sesiones %}
                                        <li>
                                            <p>Aula {{sesion.aula}} - {{sesion.nombre}} con {{sesion.monitor}} - {{sesion.horario}}</p>
                                        </li>
                                    {% endfor %}
                                </ul>#}
                            </div>
                        {% endif %}
                    </div><br>
                    {% if app.user.id != cliente.id %}
                        <div class=\"accionesExclus text-center\">       
                            {{ include('CriveroPruebaBundle:Default:forms/form.html.twig', { form: delete_form, nombre: \"Eliminar usuario\" })}}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "CriveroPruebaBundle:Usuarios:cliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Usuarios/cliente.html.twig");
    }
}
