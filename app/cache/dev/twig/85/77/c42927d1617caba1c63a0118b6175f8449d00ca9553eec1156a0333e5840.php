<?php

/* CriveroPruebaBundle:Default:cancha.html.twig */
class __TwigTemplate_8577c42927d1617caba1c63a0118b6175f8449d00ca9553eec1156a0333e5840 extends Twig_Template
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "     <div class=\"container text-center\">
        <h3>Detalles de Cancha</h3>
    </div>
        
         <div class=\"text-center\">
           <h4>Nombre de la cancha</h4>
        </div>

        <div class=\"col-md-6 col-xs-12\">

            <div class=\"text-center\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cancha_de_marmolejo.jpg"), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>

                <br>";
        // line 17
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 18
            echo "                      <div class=\"text-center\">
                        <button class=\"btn btn-primary\">Reservar</button>
                      </div>
                      ";
        } else {
            // line 22
            echo "                      <div class=\"text-center\">
                        <button class=\"btn btn-danger\">Reservada</button>
                      </div>
                ";
        }
        // line 26
        echo "            </div><br>

        </div>

        <div class=\"col-md-6 col-xs-12\">
            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Horario: </label>
                <label class=\"control-label span7 text-right\">15:00 - 18:30 </label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Dimensiones: </label>
                <label class=\"control-label span7 text-right\">100 m2</label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Mínimo de personas para jugar: </label>
                <label class=\"control-label span7 text-right\">20</label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Valoracion: </label>
                <label class=\" text-right\">5.0</label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Dirección: </label>
                <label class=\"control-label span7 text-right\">Calle Desengaño, 21</label>
            </div><br>

            <div class=\"text-center\">
              <button class=\"btn btn-default\">Modificar</button>
            </div>


    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:cancha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  74 => 22,  68 => 18,  66 => 17,  61 => 15,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
