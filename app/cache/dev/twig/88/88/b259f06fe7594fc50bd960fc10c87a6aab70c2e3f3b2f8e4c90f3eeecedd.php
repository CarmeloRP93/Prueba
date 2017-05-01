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
    <div class=\"container\">

        <h1 class=\"page-header t1\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</h1><br>

        <div class=\"col-md-5 col-sm-10 col-sm-offset-2 col-xs-12 col-lg-offset-1\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "imagen", array()))), "html", null, true);
        echo "\" style=\"width:400px; margin-bottom: 5px\"  class=\"img-rounded\"/><br>
            ";
        // line 11
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()) == "Disponible")) {
            // line 12
            echo "                <button style=\"width:400px;\" class=\"btn btn-success active\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            ";
        } else {
            // line 14
            echo "                <button style=\"width:400px;\" class=\"btn btn-danger active\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            ";
        }
        // line 16
        echo "        </div>

        <div class=\"col-xs-12 col-sm-9 col-sm-offset-1 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-0\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body\">

                    <div class=\"col-md-6 col-xs-12\">
                        <div class=\"text-center\">
                            <h4>Disponibilidad </h4>
                            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "horario", array()), "html", null, true);
        echo " </p>
                            <h4>Descripción </h4>
                            <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "descripcion", array()), "html", null, true);
        echo " </p>


                        </div>
                    </div>
                    <div  class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 \">
                        <h4>Dimensiones </h4>
                        <p>";
        // line 34
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "dimensiones", array()) . " m²"), "html", null, true);
        echo " </p>
                        <h4>Sesiones </h4> 
                        <div>
                            ";
        // line 37
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) != null)) {
            // line 38
            echo "                                <ul>
                                    ";
            // line 39
            $context["i"] = 0;
            // line 40
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                    // line 41
                    echo "                                        ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 42
                    echo "                                        <li style=\"list-style: none\">
                                            <p>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array())), "html", null, true);
                    echo "
                                                <a style=\"margin-bottom: 0; padding: 1px 1px; line-height: 0;\" class=\"btn btn-xs btn-primary\" href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_horarios_sesion", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\">
                                                    <img src=\"";
                    // line 45
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
            // line 50
            echo "                                </ul>
                                <form action=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones_aula", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\">Ver sesiones</button>
                                </form>
                            ";
        } else {
            // line 55
            echo "                                <p style=\"color: red\"><strong>Sin sesiones asignadas.</strong></p>
                            ";
        }
        // line 57
        echo "                        </div>
                    </div>
                    ";
        // line 59
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) == null)) {
            // line 60
            echo "                        <div style=\"display: inline-grid; margin-top: 16px\">
                            <form class=\"btn-group-vertical\" action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_disponibilidad", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" style=\"margin-bottom: 1px\" class=\"btn btn-primary\">Disponibilidad</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                            <form  class=\"btn-group-vertical\" action=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <input type=\"hidden\" class=\"btn\">
                                <button type=\"submit\" class=\"btn btn-warning\">Modificar aula</button>
                            </form>
                        </div>
                    ";
        } else {
            // line 71
            echo "                        <div class=\"col-md-12 col-xs-12\" style=\"margin-top: 14px; margin-bottom: 7px\">
                            <form style=\"margin-right: -2px\" action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_disponibilidad", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-bottom: 0px\">Disponibilidad</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                            <form style=\"margin-left: -2px\" action=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <input type=\"hidden\" class=\"btn\">
                                <button type=\"submit\" class=\"btn btn-warning\" style=\"margin-bottom: 0px\">Modificar aula</button>
                            </form>
                        </div>
                    ";
        }
        // line 81
        echo "    

                </div>

            </div>
            <div class=\"col-xs-offset-4 col-sm-offset-5 col-md-offset-5 col-lg-offset-5 \">
                ";
        // line 87
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar aula"));
        echo "
            </div>
        </div>
    </div>
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
        return array (  218 => 87,  210 => 81,  201 => 76,  194 => 72,  191 => 71,  182 => 65,  175 => 61,  172 => 60,  170 => 59,  166 => 57,  162 => 55,  155 => 51,  152 => 50,  140 => 45,  136 => 44,  130 => 43,  127 => 42,  124 => 41,  118 => 40,  116 => 39,  113 => 38,  111 => 37,  105 => 34,  95 => 27,  90 => 25,  79 => 16,  73 => 14,  67 => 12,  65 => 11,  61 => 10,  55 => 7,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
