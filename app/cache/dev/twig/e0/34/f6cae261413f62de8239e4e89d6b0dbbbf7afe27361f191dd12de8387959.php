<?php

/* CriveroPruebaBundle:Usuarios:monitor.html.twig */
class __TwigTemplate_e034f6cae261413f62de8239e4e89d6b0dbbbf7afe27361f191dd12de8387959 extends Twig_Template
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
        echo " Monitor ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "username", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3 style=\"font-weight: 600\">";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "username", array())), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Nombre </h4> <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array())), "html", null, true);
        echo "</p>
                            <h4>E-mail </h4> <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "email", array()), "html", null, true);
        echo "</p>
                            <h4>Fecha nacimiento </h4> <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                            <h4>Teléfono </h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "telefono", array()), "html", null, true);
        echo "</p>
                            <h4>Registro </h4> <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            <h4>Sesiones</h4>
                            ";
        // line 32
        if (((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")) != null)) {
            // line 33
            echo "                                <div>
                                    <ul style=\"list-style: none\">
                                        ";
            // line 35
            $context["i"] = 0;
            // line 36
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                    // line 37
                    echo "                                            ";
                    if (($this->getAttribute($context["sesion"], "estado", array()) == "validada")) {
                        // line 38
                        echo "                                                ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 39
                        echo "                                                <li>
                                                    <p>Aula ";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "aula", array()), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                        echo " 
                                                        <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                        echo "\">
                                                            <img src=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                        echo "\" style=\"width: 13px\" />
                                                        </a>
                                                    </p>
                                                </li>
                                            ";
                    }
                    // line 47
                    echo "                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                    </ul>
                                    ";
            // line 49
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                echo " <p style=\"color: red\"><strong>Sin sesiones validadas.</strong></p>";
            }
            // line 50
            echo "                                    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones_monitor", array("id" => $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-outline-success\">Ver sesiones</button>
                                    </form>
                                </div>
                            ";
        } else {
            // line 55
            echo "                                <p style=\"color: red\"><strong>Sin sesiones actualmente.</strong></p>
                            ";
        }
        // line 57
        echo "                            ";
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "id", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tipo", array()) == 1))) {
            // line 58
            echo "                                <div style=\"display: inline-grid; margin-top: 16px\">
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_enviarMensaje", array("id" => $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                                        <button type=\"submit\" style=\"margin-bottom: 1px\" class=\"btn btn-primary\">Enviar mensaje</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-info\">Editar usuario</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    ";
            // line 68
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form2.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar usuario"));
            echo "
                                </div>
                            ";
        }
        // line 71
        echo "                        </div>
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
        return "CriveroPruebaBundle:Usuarios:monitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  189 => 68,  181 => 63,  174 => 59,  171 => 58,  168 => 57,  164 => 55,  155 => 50,  151 => 49,  148 => 48,  141 => 47,  133 => 42,  129 => 41,  123 => 40,  120 => 39,  117 => 38,  114 => 37,  108 => 36,  106 => 35,  102 => 33,  100 => 32,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  65 => 15,  59 => 12,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
