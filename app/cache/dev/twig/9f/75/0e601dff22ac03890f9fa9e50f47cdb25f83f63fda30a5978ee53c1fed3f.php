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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Reserva de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "cancha", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h1 class=\"t1\">Detalles de Reserva</h1>
        <h3 class=\"t3\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "cancha", array()), "html", null, true);
        echo "</h3>
  
    <div class=\"container row\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div class=\"text-center\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>
            </div><br>
        
            
        <div class=\"text-center\">
            ";
        // line 17
        if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "estadoReserva", array()) == "Reservado")) {
            // line 18
            echo "                ";
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Cancelar reserva"));
            echo "
            ";
        } else {
            // line 20
            echo "                <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                    Cancelada(pulsa para descartar reserva)
                </a>
                ";
            // line 23
            if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()) != null)) {
                // line 24
                echo "                    <div >
                        <h4>Motivos:</h4>
                        <p>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            // line 29
            echo "            ";
        }
        echo "      
        </div>        
    </div>                      
               
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Fecha reserva: </label>
                <label>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo "</label>
                ";
        // line 37
        $context["horario"] = twig_split_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "horario", array()), "&");
        echo " 
                ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) > 2)) {
            // line 39
            echo "                    ";
            $context["horarioFinal1"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "-");
            echo " 
                    ";
            // line 40
            $context["horarioFinal2"] = twig_split_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), (twig_length_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario"))) - 2), array(), "array"), "-");
            echo " 
                    <label>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal1"]) ? $context["horarioFinal1"] : $this->getContext($context, "horarioFinal1")), 0, array(), "array"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2")), (twig_length_filter($this->env, (isset($context["horarioFinal2"]) ? $context["horarioFinal2"] : $this->getContext($context, "horarioFinal2"))) - 1), array(), "array"), "html", null, true);
            echo " </label>
                ";
        } else {
            // line 43
            echo "                    <label>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), 0, array(), "array"), "html", null, true);
            echo "</label>
                ";
        }
        // line 45
        echo "            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Deporte: </label>
                <label class=\" text-right\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "deporte", array()), "html", null, true);
        echo "</label>
            </div> 

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Dimensiones: </label>
                <label class=\"control-label span7 text-right\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "dimensiones", array()), "html", null, true);
        echo " m²</label>
            </div>

            ";
        // line 61
        echo "
            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Valoracion: </label>
                <label class=\" text-right\">5.0</label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Dirección: </label>
                <label class=\"control-label span7 text-right\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
        echo "</label>
            </div><br>

            <div class=\"text-center\">
                <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_escribirSugerencia", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
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
        return array (  175 => 73,  168 => 69,  158 => 61,  152 => 54,  144 => 49,  138 => 45,  132 => 43,  125 => 41,  121 => 40,  116 => 39,  114 => 38,  110 => 37,  106 => 36,  95 => 29,  89 => 26,  85 => 24,  83 => 23,  76 => 20,  70 => 18,  68 => 17,  60 => 12,  52 => 7,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
