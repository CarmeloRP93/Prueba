<?php

/* CriveroPruebaBundle:Usuarios:cliente.html.twig */
class __TwigTemplate_07ce4ffe77a4352d061cd75ea5950d9df3534b932a967f0a4c4618a3c8fe846f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success2.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3 style=\"font-weight: 600\">";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username", array())), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">  
                    ";
        // line 21
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 1))) {
            // line 22
            echo "                        <div>
                            <form style=\"margin-right: -3px\" action=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_enviarMensaje", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" class=\"btn btn-primary\">Enviar mensaje</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                            <form style=\"\" action=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <input type=\"hidden\" class=\"btn\">
                                <button type=\"submit\" class=\"btn btn-info\">Editar usuario</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                            <form style=\"margin-left: -3px\" action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_pagos_usuario", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <input type=\"hidden\" class=\"btn\">
                                <button type=\"submit\" class=\"btn btn-warning\">Historial pagos</button>
                            </form>
                        </div>
                    ";
        }
        // line 38
        echo "
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Nombre </h4> <p>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</p>
                            <h4>E-mail </h4> <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "email", array()), "html", null, true);
        echo "</p>
                            <h4>Fecha nacimiento </h4> <p>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                            <h4>Teléfono </h4> <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>
                            <h4>Registro </h4> <p>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                        </div>
                        
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            <h4>Reservas</h4>
                            ";
        // line 50
        if (((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")) != null)) {
            // line 51
            echo "                                <div>
                                    <ul style=\"list-style: none\">
                                        ";
            // line 53
            $context["i"] = 0;
            // line 54
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                    // line 55
                    echo "                                            ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 56
                    echo "                                            <li>
                                                <p>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cancha", array()), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d/m"), "html", null, true);
                    echo " - 
                                                    ";
                    // line 58
                    $context["horario"] = twig_split_filter($this->env, $this->getAttribute($context["reserva"], "horario", array()), "&");
                    echo " 
                                                    ";
                    // line 59
                    if ((twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) > 2)) {
                        // line 60
                        echo "                                                        ";
                        $context["horarioFinal1"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "-");
                        echo " 
                                                        ";
                        // line 61
                        $context["horarioFinal2"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), (twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) - 2), array(), "array"), "-");
                        echo " 
                                                        ";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal1"]) ? $context["horarioFinal1"] : $this->getContext($context, "horarioFinal1")), 0, array(), "array"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2")), (twig_length_filter($this->env, (isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2"))) - 1), array(), "array"), "html", null, true);
                        echo "</p>
                                                    ";
                    } else {
                        // line 64
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "html", null, true);
                        echo "</p>
                                                ";
                    }
                    // line 66
                    echo "                                            </li>
                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                    </ul>
                                    <form action=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_reservas_cliente", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-success\">Ver reservas</button>
                                    </form>
                                </div>
                            ";
        } else {
            // line 74
            echo "                                <p style=\"color: red\"><strong>Sin reservas actualmente.</strong></p>
                            ";
        }
        // line 76
        echo "
                            <h4>Sesiones</h4>
                            ";
        // line 78
        if (($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()) != null)) {
            // line 79
            echo "                                <div>
                                    <ul style=\"list-style: none\">
                                        ";
            // line 81
            $context["i"] = 0;
            // line 82
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 2)) {
                    // line 83
                    echo "                                            ";
                    if (($this->getAttribute($context["sesion"], "estado", array()) == "validada")) {
                        // line 84
                        echo "                                                ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 85
                        echo "                                                <li>
                                                    <p>Aula ";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "aula", array()), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                        echo " con ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
                        echo " 
                                                        <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                        // line 87
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                        echo "\">
                                                            <img src=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                        echo "\" style=\"width: 13px\" />
                                                        </a>
                                                    </p>
                                                </li>
                                            ";
                    }
                    // line 93
                    echo "                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                    </ul>
                                    ";
            // line 95
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                echo " <p style=\"color: red\"><strong>Sin sesiones validadas.</strong></p>";
            }
            // line 96
            echo "                                    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones_cliente", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-success\">Ver sesiones</button>
                                    </form>
                                </div>
                            ";
        } else {
            // line 101
            echo "                                <p style=\"color: red\"><strong>Sin sesiones actualmente.</strong></p>
                            ";
        }
        // line 103
        echo "                            
                            ";
        // line 104
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array())) && (((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")) == null) || ($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()) == null)))) {
            // line 105
            echo "                                <br>
                                ";
            // line 106
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar usuario"));
            echo "
                            ";
        }
        // line 108
        echo "                        </div>
                    </div>
                    ";
        // line 110
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array())) && ((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")) != null)) && ($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()) != null))) {
            // line 111
            echo "                        ";
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar usuario"));
            echo "
                    ";
        }
        // line 113
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
        return array (  308 => 113,  302 => 111,  300 => 110,  296 => 108,  291 => 106,  288 => 105,  286 => 104,  283 => 103,  279 => 101,  270 => 96,  266 => 95,  263 => 94,  256 => 93,  248 => 88,  244 => 87,  236 => 86,  233 => 85,  230 => 84,  227 => 83,  221 => 82,  219 => 81,  215 => 79,  213 => 78,  209 => 76,  205 => 74,  197 => 69,  194 => 68,  186 => 66,  180 => 64,  173 => 62,  169 => 61,  164 => 60,  162 => 59,  158 => 58,  152 => 57,  149 => 56,  146 => 55,  140 => 54,  138 => 53,  134 => 51,  132 => 50,  124 => 45,  120 => 44,  116 => 43,  112 => 42,  108 => 41,  103 => 38,  94 => 32,  86 => 27,  79 => 23,  76 => 22,  74 => 21,  65 => 15,  59 => 12,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
