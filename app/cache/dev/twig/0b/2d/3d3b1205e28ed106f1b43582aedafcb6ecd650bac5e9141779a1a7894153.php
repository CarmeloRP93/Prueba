<?php

/* modulomonitoresmonitoresBundle:Canchas:cancha.html.twig */
class __TwigTemplate_0b2d3d3b1205e28ed106f1b43582aedafcb6ecd650bac5e9141779a1a7894153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("modulomonitoresmonitoresBundle::main.html.twig");
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
        return "modulomonitoresmonitoresBundle::main.html.twig";
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
        echo "    <div class=\"container text-center\">
        <h1 class=\"t1 page-header\">Cancha ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "</h1><br>

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 305px\"/>
                    </div>
                    ";
        // line 13
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 14
            echo "                        <a class=\"btn btn-success\" style=\"width: 305px\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 16
            echo "                        <a class=\"btn btn-danger\" style=\"width: 305px\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()), "html", null, true);
            echo "</a>
                    ";
        }
        // line 18
        echo "                </div>
            </div>

            <div class=\"col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-5 col-md-offset-0 col-lg-5 col-lg-offset-0\"> 
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Horario </h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "horario", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Deporte </h4><p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "deporte", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Dimensiones </h4><p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "dimensiones", array()), "html", null, true);
        echo " m²</p>
                            </div>
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Dirección </h4><p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"\" style=\"margin-bottom: 10px;margin-top: 10px\">
                        ";
        // line 42
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 43
            echo "                            <form style=\"margin-right: -4px\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_canchaDisponibilidad", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" class=\"btn btn-primary\">Disponibilidad</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                        ";
        } else {
            // line 48
            echo "                            <button disabled=\"disabled\" type=\"submit\" style=\"margin-right: -4px\" class=\"btn btn-primary\">Disponibilidad</button>
                        ";
        }
        // line 50
        echo "                        ";
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "sesiones", array()) != null)) {
            // line 51
            echo "                            <form class=\"btn-group-vertical\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_sesionesCancha", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" style=\"margin-top: -1px\" class=\"btn btn-info\">Ver sesiones</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                        ";
        }
        // line 56
        echo "                    </div>
                </div>
                <a class=\"btn btn-default\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_canchas", array("id" => $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "id", array()))), "html", null, true);
        echo "\">Volver atrás</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Canchas:cancha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 58,  144 => 56,  135 => 51,  132 => 50,  128 => 48,  119 => 43,  117 => 42,  109 => 37,  103 => 34,  95 => 29,  89 => 26,  79 => 18,  73 => 16,  67 => 14,  65 => 13,  60 => 11,  51 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
