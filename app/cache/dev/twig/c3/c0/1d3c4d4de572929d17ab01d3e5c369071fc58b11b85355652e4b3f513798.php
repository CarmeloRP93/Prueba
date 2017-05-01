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
    <h1 class=\"t1\">Cancha ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "</h1><br>
    <div class=\"container text-center\">

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 340px; margin-bottom:20px\"/>
                ";
        // line 11
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 12
            echo "                    <button class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()), "html", null, true);
            echo "</button>
                ";
        } else {
            // line 14
            echo "                    <button class=\"btn btn-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()), "html", null, true);
            echo "</button>
                ";
        }
        // line 16
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
                                <h4>Valoracion: </h4><p>";
        // line 33
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "valoracion", array()), 0, "common"), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                <h4>Dirección: </h4><p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha_editar", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Editar info</a>
                    ";
        // line 43
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar cancha"));
        echo "
                </div>
            </div>
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
        return array (  126 => 43,  122 => 42,  113 => 36,  107 => 33,  101 => 30,  95 => 27,  89 => 24,  79 => 16,  73 => 14,  67 => 12,  65 => 11,  61 => 10,  53 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
