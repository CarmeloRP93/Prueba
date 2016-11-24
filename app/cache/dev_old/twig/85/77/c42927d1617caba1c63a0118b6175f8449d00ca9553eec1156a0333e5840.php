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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
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
           <h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "</h4>
        </div>

        <div class=\"col-md-6 col-xs-12\">

            <div class=\"text-center\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>

                <br>";
        // line 17
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "disponible")) {
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
                <label class=\"control-label span7 text-right\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "horario", array()), "html", null, true);
        echo " </label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Valoracion: </label>
                <label class=\" text-right\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), "html", null, true);
        echo "</label>
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
        return array (  100 => 38,  92 => 33,  83 => 26,  77 => 22,  71 => 18,  69 => 17,  64 => 15,  55 => 9,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
