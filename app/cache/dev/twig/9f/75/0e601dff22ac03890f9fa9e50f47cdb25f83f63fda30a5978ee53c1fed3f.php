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
        echo "<h3>
                </div>

                <div class=\"col-md-6 col-xs-12\">

                    <div class=\"text-center\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cancha_de_marmolejo.jpg"), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>


                        <br>
                        <div class=\"text-center\">
                            ";
        // line 18
        if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "estadoReserva", array()) == "Reservado")) {
            // line 19
            echo "                                <button class=\"btn btn-danger\">Cancelar</button>
                            ";
        } else {
            // line 21
            echo "                                <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                                    Cancelada(pulsa para descartar reserva)
                                </a>
                                ";
            // line 24
            if (($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()) != null)) {
                // line 25
                echo "                                    <div >
                                        <h4>Motivos:</h4>
                                        <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "motivos", array()), "html", null, true);
                echo "</p>
                                    </div>
                                ";
            }
            // line 30
            echo "                            ";
        }
        // line 31
        echo "                        </div>
                    </div><br>
                </div>

                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Día: </label>
                        <label class=\"control-label span7 text-right\">15/11/2016 </label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Horario: </label>
                        <label class=\"control-label span7 text-right\">15:00 - 18:30 </label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Dimensiones: </label>
                        <label class=\"control-label span7 text-right\">100 m2</label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Valoracion: </label>
                        <label class=\" text-right\">5.0/5.0</label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Dirección: </label>
                        <label class=\"control-label span7 text-right\">Calle Desengaño, 21</label>
                    </div><br>

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
        return array (  97 => 31,  94 => 30,  88 => 27,  84 => 25,  82 => 24,  75 => 21,  71 => 19,  69 => 18,  61 => 13,  52 => 7,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
