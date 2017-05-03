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
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 340px; margin-bottom:20px\"/>
                ";
        // line 12
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 13
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_nuevaReserva", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Reservar </a>
                ";
        } else {
            // line 15
            echo "                    <button class=\"btn btn-danger\">Reservada</button>
                ";
        }
        // line 17
        echo "            </div>

            <div class=\"col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0\"> 
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Horario: </h4> <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "horario", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Deporte: </h4><p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "deporte", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                <h4>Dimensiones: </h4><p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "dimensiones", array()), "html", null, true);
        echo " m²</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Valoracion: </h4>
                                ";
        // line 34
        if ((twig_round($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), 0, "common") != 0)) {
            // line 35
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_round($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), 0, "common")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/star-icon.png"), "html", null, true);
                echo "\" style=\"width: 18px;\" />
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                ";
        } else {
            // line 39
            echo "                                    <p>Sin valoraciones</p>
                                ";
        }
        // line 41
        echo "                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <h4>Dirección: </h4><p>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_escribirSugerencia", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Escribir sugerencia </a>
                </div><br>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <table class=\"table ";
        // line 58
        echo "\">
                            <tbody>
                                ";
        // line 60
        $context["i"] = 1;
        // line 61
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 62
            echo "                                    <tr>
                                        ";
            // line 63
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                // line 64
                echo "                                            <td style='border: none'><strong>Día ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["horario"], "fechaInicio", array()), "-"), 0, array(), "array"), "html", null, true);
                echo "</strong></td>
                                        ";
            } else {
                // line 66
                echo "                                            <td><strong>Día ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["horario"], "fechaInicio", array()), "-"), 0, array(), "array"), "html", null, true);
                echo "</strong></td>
                                        ";
            }
            // line 68
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, "09:00-10:00&10:00-11:00&11:00-12:00&12:00-13:00&13:00-14:00&14:00-15:00&15:00-16:00&16:00-17:00&17:00-18:00&18:00-19:00&19:00-20:00&20:00-21:00&21:00-22:00", "&"));
            foreach ($context['_seq'] as $context["_key"] => $context["horitas"]) {
                // line 69
                echo "                                            ";
                if ( !twig_in_filter($context["horitas"], $this->getAttribute($context["horario"], "periodo", array()))) {
                    // line 70
                    echo "                                                ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                        // line 71
                        echo "                                                    <td style=\"border: none; color: red\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                                ";
                    } else {
                        // line 73
                        echo "                                                    <td style=\"color: red\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                                ";
                    }
                    // line 75
                    echo "                                            ";
                } else {
                    // line 76
                    echo "                                                ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                        // line 77
                        echo "                                                    <td style=\"border: none;\">";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                                ";
                    } else {
                        // line 79
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, $context["horitas"], "html", null, true);
                        echo "</td>
                                                ";
                    }
                    // line 81
                    echo "                                            ";
                }
                // line 82
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horitas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                    </tr>
                                    ";
            // line 84
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 85
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 92
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
        return array (  249 => 92,  241 => 86,  235 => 85,  233 => 84,  230 => 83,  224 => 82,  221 => 81,  215 => 79,  209 => 77,  206 => 76,  203 => 75,  197 => 73,  191 => 71,  188 => 70,  185 => 69,  180 => 68,  174 => 66,  168 => 64,  166 => 63,  163 => 62,  158 => 61,  156 => 60,  152 => 58,  140 => 49,  131 => 43,  127 => 41,  123 => 39,  120 => 38,  111 => 36,  106 => 35,  104 => 34,  97 => 30,  91 => 27,  85 => 24,  76 => 17,  72 => 15,  66 => 13,  64 => 12,  60 => 11,  52 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
