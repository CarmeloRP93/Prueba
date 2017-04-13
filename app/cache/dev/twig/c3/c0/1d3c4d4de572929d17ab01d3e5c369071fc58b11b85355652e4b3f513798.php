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
        <h3>Detalles de Cancha</h3>
    </div>
        
         <div class=\"text-center\">
           <h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "</h4>
        </div>

        <div class=\"col-md-6 col-xs-12\">

            <div class=\"text-center\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>

                <br>";
        // line 18
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 19
            echo "                      <div class=\"text-center\">
                        <button class=\"btn btn-success\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()), "html", null, true);
            echo "</button>
                      </div>
                      ";
        } else {
            // line 23
            echo "                      <div class=\"text-center\">
                        <button class=\"btn btn-danger\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()), "html", null, true);
            echo "</button>
                      </div>
                ";
        }
        // line 27
        echo "            </div><br>

        </div>

        <div class=\"col-md-6 col-xs-12\">
            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Horario: </label>
                <label class=\"control-label span7 text-right\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "horario", array()), "html", null, true);
        echo " </label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Valoracion: </label>
                <label class=\" text-right\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), "html", null, true);
        echo "</label>
            </div><br>

            <div class=\"text-center\">
              <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha_editar", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Editar info</a>
              ";
        // line 44
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar cancha"));
        echo "
            </div>


    </div>
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
        return array (  120 => 44,  116 => 43,  109 => 39,  101 => 34,  92 => 27,  86 => 24,  83 => 23,  77 => 20,  74 => 19,  72 => 18,  67 => 16,  58 => 10,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
