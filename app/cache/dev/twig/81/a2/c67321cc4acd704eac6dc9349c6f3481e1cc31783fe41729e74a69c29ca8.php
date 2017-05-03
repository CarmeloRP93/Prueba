<?php

/* CriveroPruebaBundle:Reservas:reservasCancha.html.twig */
class __TwigTemplate_81a2c67321cc4acd704eac6dc9349c6f3481e1cc31783fe41729e74a69c29ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array(), "array"), "cancha", array())), "html", null, true);
        echo " - Reservas";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header \"> 
            <h1 class=\"t1\">";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array(), "array"), "cancha", array())), "html", null, true);
        echo " - Reservas</h1>
        </div>
        ";
        // line 12
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 13
            echo "            <h2>No se encontraron reservas.</h2>
        ";
        } else {
            // line 15
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-bordered\">
                    <thead>
                        <tr>
                            <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cliente", "r.cliente");
            echo "</th>
                            <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "r.estadoReserva");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "r.fechaInicio");
            echo "</th>
                            <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "r.horario");
            echo "</th>
                            <td><strong>Acciones</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 28
                echo "                            <tr>
                                <td><strong><a class=\"atd\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute($context["reserva"], "idCliente", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cliente", array()), "html", null, true);
                echo "</a></strong></td>
                                ";
                // line 30
                if (($this->getAttribute($context["reserva"], "estadoReserva", array()) == "Reservado")) {
                    // line 31
                    echo "                                    <td><strong style=\"color: greenyellow\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "estadoReserva", array()), "html", null, true);
                    echo "</strong></td>
                                ";
                } else {
                    // line 33
                    echo "                                    <td><strong style=\"color: red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "estadoReserva", array()), "html", null, true);
                    echo "</strong></td>
                                ";
                }
                // line 35
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                ";
                // line 36
                $context["horario"] = twig_split_filter($this->env, $this->getAttribute($context["reserva"], "horario", array()), "&");
                echo " 
                                ";
                // line 37
                if ((twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) > 2)) {
                    // line 38
                    echo "                                    ";
                    $context["horarioFinal1"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "-");
                    echo " 
                                    ";
                    // line 39
                    $context["horarioFinal2"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), (twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) - 2), array(), "array"), "-");
                    echo " 
                                    <td>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal1"]) ? $context["horarioFinal1"] : $this->getContext($context, "horarioFinal1")), 0, array(), "array"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2")), (twig_length_filter($this->env, (isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2"))) - 1), array(), "array"), "html", null, true);
                    echo " </td>
                                ";
                } else {
                    // line 42
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "html", null, true);
                    echo "</td>
                                ";
                }
                // line 44
                echo "
                                <td class=\"actions\">
                                    ";
                // line 46
                if (($this->getAttribute($context["reserva"], "estadoReserva", array()) == "Reservado")) {
                    // line 47
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_reserva_cancelar", array("id" => $this->getAttribute($context["reserva"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-danger\" style=\"margin-bottom: 0\">
                                            Cancelar
                                        </a>
                                    ";
                } else {
                    // line 51
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_enviarMensaje", array("id" => $this->getAttribute($context["reserva"], "idCliente", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                            Enviar mensaje
                                        </a>
                                    ";
                }
                // line 55
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </tbody>
                </table>
            </div>

        ";
        }
        // line 63
        echo "        <div>
            <a class=\"btn btn-default\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array(), "array"), "idCancha", array()))), "html", null, true);
        echo "\">Volver atrás</a>
            <div class=\"navigation\" style=\"float: right\">
                ";
        // line 66
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Reservas:reservasCancha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 66,  192 => 64,  189 => 63,  182 => 58,  174 => 55,  166 => 51,  158 => 47,  156 => 46,  152 => 44,  146 => 42,  139 => 40,  135 => 39,  130 => 38,  128 => 37,  124 => 36,  119 => 35,  113 => 33,  107 => 31,  105 => 30,  99 => 29,  96 => 28,  92 => 27,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  66 => 15,  62 => 13,  60 => 12,  55 => 10,  48 => 7,  45 => 6,  37 => 4,  11 => 2,);
    }
}
