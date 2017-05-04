<?php

/* CriveroPruebaBundle:Canchas:cancha.html.twig */
class __TwigTemplate_c3c01d3c4d4de572929d17ab01d3e5c369071fc58b11b85355652e4b3f513798 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
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
        <h1 class=\"t1 page-header\">Cancha ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "</h1><br>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 340px; margin-bottom:5px\"/>
                ";
        // line 11
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 12
            echo "                    <button class=\"btn btn-success active\" style=\"width: 340px\">
                        ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((((twig_length_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "precio", array())) == 3) && twig_in_filter(".", $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "precio", array()))))) ? ((("(" . $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "precio", array())) . "0 €/hora)")) : ((("(" . $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "precio", array())) . " €/hora)"))), "html", null, true);
            echo "
                    </button>
                ";
        } else {
            // line 16
            echo "                    <button class=\"btn btn-danger active\" style=\"width: 340px\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()), "html", null, true);
            echo "</button>
                ";
        }
        // line 18
        echo "            </div>


            <div class=\"col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0\"> 
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Horario </h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "horario", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Deporte </h4><p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "deporte", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Dimensiones </h4><p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "dimensiones", array()), "html", null, true);
        echo " m²</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Valoración </h4>
                                ";
        // line 36
        if ((twig_round($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), 0, "common") != 0)) {
            // line 37
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_round($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), 0, "common")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/star-icon.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" />
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                ";
        } else {
            // line 41
            echo "                                    <p>Sin valoraciones</p>
                                ";
        }
        // line 43
        echo "                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <h4>Dirección </h4><p>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"\" style=\"margin-bottom: 10px;margin-top: 10px\">
                        <form style=\"margin-right: -2px\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha_disponibilidad", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"alinear btn-group\">
                            <button type=\"submit\" class=\"btn btn-primary\">Disponibilidad</button>
                            <input type=\"hidden\" class=\"btn\">
                        </form>
                        <form style=\"margin-left: -2px; margin-right: -2px\" action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha_editar", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"alinear btn-group\">
                            <input type=\"hidden\" class=\"btn\">
                            <button type=\"submit\" class=\"btn btn-warning\">Editar cancha</button>
                            ";
        // line 57
        if (((isset($context["nReservas"]) ? $context["nReservas"] : $this->getContext($context, "nReservas")) > 0)) {
            echo "<input type=\"hidden\" class=\"btn\">";
        }
        echo " 
                        </form>
                        ";
        // line 59
        if (((isset($context["nReservas"]) ? $context["nReservas"] : $this->getContext($context, "nReservas")) > 0)) {
            // line 61
            echo "                                <input type=\"hidden\" class=\"btn\">
                                <div class=\"btn-group\" style=\"margin-left: -1px\">
                                <input type=\"hidden\" class=\"btn\">
                                    <button type=\"submit\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\">
                                        Ver reservas <span class=\"caret\"></span></button>
                                    <ul class=\"dropdown-menu\" role=\"menu\" style=\"margin-top: -12px\">
                                        <li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha_reservas", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
            echo "\">Clientes</a></li>
                                        <li><a href=\"#\">Monitores</a></li>
                                    </ul>
                                </div>
                                                                
";
            // line 73
            echo "                        ";
        }
        // line 74
        echo "                    </div>
                </div>
                <div class=\"text-center\">
                    ";
        // line 77
        if (((isset($context["nReservas"]) ? $context["nReservas"] : $this->getContext($context, "nReservas")) > 0)) {
            // line 78
            echo "                        <form action=\"#\">
                            <input type=\"button\" value=\"Eliminar cancha\" class=\"btn btn-danger active\" 
                                   onclick=\"warningEliminar()\" >
                        </form>
                    ";
        } else {
            // line 83
            echo "                        ";
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar cancha"));
            echo "
                    ";
        }
        // line 85
        echo "                </div>
            </div>
        </div>
    </div>

    <script>
        function warningEliminar() {
            var dialog = bootbox.dialog({
                title: '<h4 class=\"text-center\" style=\"font-weight: 600; color: red\">¡ATENCIÓN!</h4>',
                message: '<p class=\"text-center\" >No es posible eliminar una cancha con reservas asignadas.</p>',
                closeButton: false
            });
            setTimeout(function () {
                dialog.modal('hide');
            }, 4000);
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Canchas:cancha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 85,  203 => 83,  196 => 78,  194 => 77,  189 => 74,  186 => 73,  178 => 67,  170 => 61,  168 => 59,  161 => 57,  155 => 54,  148 => 50,  140 => 45,  136 => 43,  132 => 41,  129 => 40,  120 => 38,  115 => 37,  113 => 36,  106 => 32,  100 => 29,  94 => 26,  84 => 18,  78 => 16,  70 => 13,  67 => 12,  65 => 11,  61 => 10,  54 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
