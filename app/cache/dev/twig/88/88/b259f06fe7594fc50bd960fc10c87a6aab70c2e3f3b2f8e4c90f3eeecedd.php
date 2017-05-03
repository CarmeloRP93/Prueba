<?php

/* CriveroPruebaBundle:Aulas:aula.html.twig */
class __TwigTemplate_8888b259f06fe7594fc50bd960fc10c87a6aab70c2e3f3b2f8e4c90f3eeecedd extends Twig_Template
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
        <h1 class=\"t1 page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</h1><br>

        <div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-0\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "imagen", array()))), "html", null, true);
        echo "\" style=\"width:400px; margin-bottom: 5px\"  class=\"img-rounded\"/><br>
            ";
        // line 10
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()) == "Disponible")) {
            // line 11
            echo "                <button style=\"width:400px;\" class=\"btn btn-success active\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            ";
        } else {
            // line 13
            echo "                <button style=\"width:400px;\" class=\"btn btn-danger active\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            ";
        }
        // line 15
        echo "        </div>

        <div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-0\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body\">
                    <div class=\"col-md-6 col-xs-12\">
                        <div class=\"text-center\">
                            <h4>Disponibilidad </h4><p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "horario", array()), "html", null, true);
        echo "</p>
                            <h4>Descripción</h4><p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "descripcion", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                        <h4>Dimensiones </h4><p>";
        // line 27
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "dimensiones", array()) . " m²"), "html", null, true);
        echo " </p>
                        <h4>Sesiones </h4> 
                        ";
        // line 29
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) != null)) {
            // line 30
            echo "                            <ul>
                                ";
            // line 31
            $context["i"] = 0;
            // line 32
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                    // line 33
                    echo "                                    ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 34
                    echo "                                    <li style=\"list-style: none\">
                                        <p>";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array())), "html", null, true);
                    echo "
                                            ";
                    // line 36
                    if (($this->getAttribute($context["sesion"], "estado", array()) == "validada")) {
                        // line 37
                        echo "                                                <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                        echo "\" style=\"width: 13px\" />
                                                </a>
                                            ";
                    } else {
                        // line 41
                        echo "                                                <button style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-danger\" disabled>
                                                    <img src=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                        echo "\" style=\"width: 13px\" />
                                                </button>
                                            ";
                    }
                    // line 45
                    echo "                                        </p>
                                    </li>
                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                            </ul>
                            <form action=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones_aula", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                <button type=\"submit\" class=\"btn btn-sm btn-success\">Ver sesiones</button>
                            </form>
                        ";
        } else {
            // line 53
            echo "                            <p style=\"color: red\"><strong>Sin sesiones asignadas.</strong></p>
                        ";
        }
        // line 55
        echo "                    </div>
                    ";
        // line 56
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) == null)) {
            // line 57
            echo "                        <div style=\"display: inline-grid; margin-top: 16px\">
                            <form class=\"btn-group-vertical\" action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_disponibilidad", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" style=\"margin-bottom: 1px\" class=\"btn btn-primary\">Disponibilidad</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                            <form  class=\"btn-group-vertical\" action=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <input type=\"hidden\" class=\"btn\">
                                <button type=\"submit\" class=\"btn btn-warning\">Modificar aula</button>
                            </form>
                        </div>
                    ";
        } else {
            // line 68
            echo "                        <div class=\"col-md-12 col-xs-12\" style=\"margin-top: 14px; margin-bottom: 7px\">
                            <form style=\"margin-right: -2px\" action=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_disponibilidad", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-bottom: 0px\">Disponibilidad</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                            <form style=\"margin-left: -2px\" action=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <input type=\"hidden\" class=\"btn\">
                                <button type=\"submit\" class=\"btn btn-warning\" style=\"margin-bottom: 0px\">Modificar aula</button>
                            </form>
                        </div>
                    ";
        }
        // line 78
        echo "    
                </div>
            </div>
            ";
        // line 81
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) != null)) {
            // line 82
            echo "                <form action=\"#\">
                    <input type=\"button\" value=\"Eliminar aula\" class=\"btn btn-danger active\" 
                           onclick=\"warningEliminar()\" >
                </form>
            ";
        } else {
            // line 87
            echo "                ";
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar aula"));
            echo "
            ";
        }
        // line 89
        echo "        </div>
    </div>

    <script>
        function warningEliminar() {
            var dialog = bootbox.dialog({
                title: '<h4 class=\"text-center\" style=\"font-weight: 600; color: red\">¡ATENCIÓN!</h4>',
                message: '<p class=\"text-center\" >No es posible eliminar un aula con sesiones asignadas.</p>',
                closeButton: false
            });
            setTimeout(function () {
                dialog.modal('hide');
            }, 5000);
        }
    </script>
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
        return array (  236 => 89,  230 => 87,  223 => 82,  221 => 81,  216 => 78,  207 => 73,  200 => 69,  197 => 68,  188 => 62,  181 => 58,  178 => 57,  176 => 56,  173 => 55,  169 => 53,  162 => 49,  159 => 48,  150 => 45,  144 => 42,  141 => 41,  135 => 38,  130 => 37,  128 => 36,  122 => 35,  119 => 34,  116 => 33,  110 => 32,  108 => 31,  105 => 30,  103 => 29,  98 => 27,  91 => 23,  87 => 22,  78 => 15,  72 => 13,  66 => 11,  64 => 10,  60 => 9,  54 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
