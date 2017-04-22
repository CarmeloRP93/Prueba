<?php

/* CriveroPruebaBundle:Reservas:reservas.html.twig */
class __TwigTemplate_c21506cdc8736fcc19f962a697f59721caf3d667fb762cf4183c4343f636e7b5 extends Twig_Template
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
        echo " Reservas ";
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
                <h1 class=\"t1\">Reservas</h1>
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
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cliente", "r.cliente");
            echo "</th>
                            <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cancha", "r.cancha");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "r.fechaInicio");
            echo "</th>
                            <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "r.horario");
            echo "</th>
                            <th class=\"t3\">Acciones</th>
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
                                <td><strong><a class=\"atd\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute($context["reserva"], "idCancha", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cancha", array()), "html", null, true);
                echo "</a></strong></td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                ";
                // line 32
                $context["horario"] = twig_split_filter($this->env, $this->getAttribute($context["reserva"], "horario", array()), "&");
                echo " 
                                ";
                // line 33
                if ((twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) > 2)) {
                    // line 34
                    echo "                                    ";
                    $context["horarioFinal1"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "-");
                    echo " 
                                    ";
                    // line 35
                    $context["horarioFinal2"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), (twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) - 2), array(), "array"), "-");
                    echo " 
                                    <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal1"]) ? $context["horarioFinal1"] : $this->getContext($context, "horarioFinal1")), 0, array(), "array"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2")), (twig_length_filter($this->env, (isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2"))) - 1), array(), "array"), "html", null, true);
                    echo " </td>
                                ";
                } else {
                    // line 38
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "html", null, true);
                    echo "</td>
                                ";
                }
                // line 40
                echo "                                
                                <td class=\"actions\">
                                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_reserva_cancelar", array("id" => $this->getAttribute($context["reserva"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">
                                        Cancelar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 52
        echo "        <div class=\"navigation\">
            ";
        // line 53
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Reservas:reservas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  160 => 52,  154 => 48,  142 => 42,  138 => 40,  132 => 38,  125 => 36,  121 => 35,  116 => 34,  114 => 33,  110 => 32,  106 => 31,  100 => 30,  94 => 29,  91 => 28,  87 => 27,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  61 => 15,  57 => 13,  55 => 12,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
