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
            'javascripts' => array($this, 'block_javascripts'),
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
    <div class=\"container\">

        <div class=\"page-header text-center\">
            <h2 class=\"t1\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</h2>
        </div>

        <div class=\"col-md-5 col-xs-12\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "imagen", array()))), "html", null, true);
        echo "\" style=\"width:400px; margin-bottom: 2px\"  class=\"img-rounded\"/><br>
            ";
        // line 13
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()) == "Disponible")) {
            // line 14
            echo "                <button style=\"width:400px;\" class=\"btn btn-success active\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            ";
        } else {
            // line 16
            echo "                <button style=\"width:400px;\" class=\"btn btn-danger active\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            ";
        }
        // line 18
        echo "        </div>

        <div class=\"col-xs-12 col-sm-8 col-md-6\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body\">

                    <div class=\"col-md-6 col-xs-12\">
                        <div class=\"text-center\">
                            <h4>Disponibilidad </h4>
                            <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "horario", array()), "html", null, true);
        echo " </p>
                            <h4>Tamaño </h4>
                            <p>";
        // line 29
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "dimensiones", array()) . "m²"), "html", null, true);
        echo " </p>
                            <h4>Descripción </h4>
                            <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "descripcion", array()), "html", null, true);
        echo " </p>


                        </div>
                    </div>
                    <div  class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \">
                        <h4>Sesiones </h4> 
                        <div>
                            ";
        // line 39
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) != null)) {
            // line 40
            echo "                                <ul>
                                    ";
            // line 41
            $context["i"] = 0;
            // line 42
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                    // line 43
                    echo "                                        ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 44
                    echo "                                        <li style=\"list-style: none\">
                                            <p>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array())), "html", null, true);
                    echo "
                                                <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\">
                                                    <img src=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/clock.png"), "html", null, true);
                    echo "\" style=\"width: 13px\" />
                                                </a>
                                            </p>
                                        </li>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </ul>
                                <form action=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones_aula", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-success\">Ver sesiones</button>
                                </form>
                            </div>
                        ";
        } else {
            // line 58
            echo "                            <p style=\"color: red\"><strong>Sin sesiones asignadas.</strong></p>
                        ";
        }
        // line 59
        echo "<br>
                        ";
        // line 60
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar aula"));
        echo "
                    </div>
                    <div class=\"col-md-12 col-xs-12\" style=\"margin-top: 14px\">
                        <form style=\"margin-right: -3px\" action=\"#\" method=\"post\" class=\"alinear btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary\">Disponibilidad</button>
                            <input type=\"hidden\" class=\"btn\">
                        </form>
                        <form style=\"\" action=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"alinear btn-group\">
                            <input type=\"hidden\" class=\"btn\">
                            <button type=\"submit\" class=\"btn btn-warning\">Modificar aula</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function confirmarEliminar() {
            bootbox.confirm('¿Estas seguro?', function (result) {
                if (result === true) {
                    document.getElementById(\"form\").submit();
                }
            });
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
        return array (  202 => 80,  199 => 79,  183 => 67,  173 => 60,  170 => 59,  166 => 58,  158 => 53,  155 => 52,  143 => 47,  139 => 46,  133 => 45,  130 => 44,  127 => 43,  121 => 42,  119 => 41,  116 => 40,  114 => 39,  103 => 31,  98 => 29,  93 => 27,  82 => 18,  76 => 16,  70 => 14,  68 => 13,  64 => 12,  57 => 8,  49 => 4,  46 => 3,  38 => 2,  11 => 1,);
    }
}
