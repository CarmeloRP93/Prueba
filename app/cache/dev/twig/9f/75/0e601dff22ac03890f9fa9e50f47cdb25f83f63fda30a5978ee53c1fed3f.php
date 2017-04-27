<?php

/* moduloclientesclienteBundle:Reservas:reservaClientes.html.twig */
class __TwigTemplate_9f750e601dff22ac03890f9fa9e50f47cdb25f83f63fda30a5978ee53c1fed3f extends Twig_Template
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
        echo "Reserva de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "cancha", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <h1 class=\"t1\">Reserva de la cancha ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "</h1><br>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                <div class=\"text-center\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 340px; margin-bottom:20px\"/>
                </div><br>
                ";
        // line 12
        if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "estadoReserva", array()) == "Reservado")) {
            // line 13
            echo "                    ";
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Cancelar reserva"));
            echo "
                ";
        } else {
            // line 15
            echo "                    ";
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Cancelada (Pulsar para descartar reserva)"));
            echo "
                    ";
            // line 16
            if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()) != null)) {
                // line 17
                echo "                        <h4 class=\"terr\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()), "html", null, true);
                echo "</h4>
                    ";
            }
            // line 19
            echo "                ";
        }
        echo "      
            </div>                      

            <div class=\"col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <h4>Fecha reserva </h4>
                            <p>El día ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " de 
                            ";
        // line 28
        $context["horario"] = twig_split_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "horario", array()), "&");
        echo " 
                            ";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) > 2)) {
            // line 30
            echo "                                ";
            $context["horarioFinal1"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "-");
            echo " 
                                ";
            // line 31
            $context["horarioFinal2"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), (twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) - 2), array(), "array"), "-");
            echo " 
                                ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal1"]) ? $context["horarioFinal1"] : $this->getContext($context, "horarioFinal1")), 0, array(), "array"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2")), (twig_length_filter($this->env, (isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2"))) - 1), array(), "array"), "html", null, true);
            echo "
                            ";
        } else {
            // line 34
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 36
        echo "                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Deporte </h4><p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "deporte", array()), "html", null, true);
        echo "</p>
                            </div> 
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Dimensiones </h4><p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "dimensiones", array()), "html", null, true);
        echo " m²</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Valoracion </h4>
                                <p>";
        // line 44
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), 0, "common"), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Dirección </h4><p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
        echo "</p>
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_valorar", array("id" => $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"height: 30px; width: 150px;\"> Valorar cancha </a>
                </div><br>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Reservas:reservaClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  151 => 47,  145 => 44,  138 => 40,  132 => 37,  129 => 36,  123 => 34,  116 => 32,  112 => 31,  107 => 30,  105 => 29,  101 => 28,  97 => 27,  85 => 19,  79 => 17,  77 => 16,  72 => 15,  66 => 13,  64 => 12,  59 => 10,  51 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
