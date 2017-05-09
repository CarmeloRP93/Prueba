<?php

/* moduloclientesclienteBundle:Canchas:canchaClientes.html.twig */
class __TwigTemplate_e89f364a84da25a499057f0aae7ea5134d2a7a249d09075eee75206d6d6da18e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("moduloclientesclienteBundle::main.html.twig");
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
        return "moduloclientesclienteBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Cancha ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"sesiondat\" class=\"container text-center\">
        <div class=\"page-header\">    
            <h1 class=\"t1\">Cancha ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "</h1>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"width: 305px\"/>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Horario: </h4> <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "horario", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Deporte: </h4><p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "deporte", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Dimensiones: </h4><p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "dimensiones", array()), "html", null, true);
        echo " m²</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Precio/hora: </h4><p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "precio", array()), "html", null, true);
        echo " €</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Dirección: </h4><p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Valoracion: </h4>
                                ";
        // line 39
        if ((twig_round($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), 0, "common") != 0)) {
            // line 40
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_round($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), 0, "common")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 41
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/star-icon.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" />
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                ";
        } else {
            // line 44
            echo "                                    <p>Sin valoraciones</p>
                                ";
        }
        // line 46
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                            ";
        // line 51
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 52
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_nuevaReserva", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\"> Reservar </a>
                            ";
        } else {
            // line 54
            echo "                                <button class=\"btn btn-danger\">No disponible</button>
                            ";
        }
        // line 56
        echo "                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_escribirSugerencia", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Escribir sugerencia </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <table class=\"table table-condensed\">
                            <tbody>
                                ";
        // line 71
        $context["i"] = 1;
        // line 72
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 73
            echo "                                    <tr>
                                        ";
            // line 74
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                // line 75
                echo "                                            <td style='border: none'><strong>Día ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["horario"], "fechaInicio", array()), "-"), 0, array(), "array"), "html", null, true);
                echo "</strong></td>
                                        ";
            } else {
                // line 77
                echo "                                            <td><strong>Día ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["horario"], "fechaInicio", array()), "-"), 0, array(), "array"), "html", null, true);
                echo "</strong></td>
                                        ";
            }
            // line 79
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, "09:00-10:00&10:00-11:00&11:00-12:00&12:00-13:00&13:00-14:00&14:00-15:00&15:00-16:00&16:00-17:00&17:00-18:00&18:00-19:00&19:00-20:00&20:00-21:00&21:00-22:00", "&"));
            foreach ($context['_seq'] as $context["_key"] => $context["horitas"]) {
                // line 80
                echo "                                            ";
                if ( !twig_in_filter($context["horitas"], $this->getAttribute($context["horario"], "periodo", array()))) {
                    // line 81
                    echo "                                                ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                        // line 82
                        echo "                                                    <td style=\"border: none; color: red\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                                ";
                    } else {
                        // line 84
                        echo "                                                    <td style=\"color: red\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                                ";
                    }
                    // line 86
                    echo "                                            ";
                } else {
                    // line 87
                    echo "                                                ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                        // line 88
                        echo "                                                    <td style=\"border: none;\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                                ";
                    } else {
                        // line 90
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                                ";
                    }
                    // line 92
                    echo "                                            ";
                }
                // line 93
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horitas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                    </tr>
                                    ";
            // line 95
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 96
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_canchasClientes");
        echo "\">Volver atrás</a>
    </div><br>
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
        return array (  261 => 103,  253 => 97,  247 => 96,  245 => 95,  242 => 94,  236 => 93,  233 => 92,  227 => 90,  221 => 88,  218 => 87,  215 => 86,  209 => 84,  203 => 82,  200 => 81,  197 => 80,  192 => 79,  186 => 77,  180 => 75,  178 => 74,  175 => 73,  170 => 72,  168 => 71,  152 => 58,  148 => 56,  144 => 54,  138 => 52,  136 => 51,  129 => 46,  125 => 44,  122 => 43,  113 => 41,  108 => 40,  106 => 39,  99 => 35,  93 => 32,  87 => 29,  81 => 26,  75 => 23,  62 => 13,  52 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
