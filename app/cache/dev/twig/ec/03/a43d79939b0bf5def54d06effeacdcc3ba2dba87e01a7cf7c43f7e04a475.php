<?php

/* modulomonitoresmonitoresBundle:Aulas:verAula.html.twig */
class __TwigTemplate_ec03a43d79939b0bf5def54d06effeacdcc3ba2dba87e01a7cf7c43f7e04a475 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"page-header\">
            <h1 class=\"t1\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-0\">
            <div class=\"panel panel-default\">                  
                <div class=\"panel-body\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"width:305px\"/>
                </div>
            </div>
            ";
        // line 14
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()) == "Disponible")) {
            // line 15
            echo "                <button style=\"width:300px;\" class=\"btn btn-success active\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            ";
        } else {
            // line 17
            echo "                <button style=\"width:300px;\" class=\"btn btn-danger active\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            ";
        }
        // line 19
        echo "        </div>

        <div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-0\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-body\">
                    <div class=\"col-md-6 col-xs-12\">
                        <div class=\"text-center\">
                            <h4>Disponibilidad </h4><p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "horario", array()), "html", null, true);
        echo "</p>
                            <h4>Descripción</h4><p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "descripcion", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                        <h4>Dimensiones </h4><p>";
        // line 31
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "dimensiones", array()) . " m²"), "html", null, true);
        echo " </p>
                    </div>

                    <div style=\"display: inline-grid; margin-top: 16px\">
                        ";
        // line 35
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()) == "Disponible")) {
            // line 36
            echo "                            <form class=\"btn-group-vertical\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_disponibilidadM", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" style=\"margin-bottom: 1px; margin-top: -10px\" class=\"btn btn-primary\">Disponibilidad</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                        ";
        } else {
            // line 41
            echo "                            <button disabled=\"disabled\" type=\"submit\" style=\"margin-bottom: 1px\" class=\"btn btn-primary\">Disponibilidad</button>
                        ";
        }
        // line 43
        echo "                        ";
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) != null)) {
            // line 44
            echo "                            <form class=\"btn-group-vertical\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_sesionesAula", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"alinear btn-group\">
                                <button type=\"submit\" style=\"margin-bottom: 1px\" class=\"btn btn-info\">Ver sesiones</button>
                                <input type=\"hidden\" class=\"btn\">
                            </form>
                        ";
        }
        // line 49
        echo "                    </div>
                </div>
            </div>
            <a class=\"btn btn-default\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_listadoAulas", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
        echo "\">Volver atrás</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Aulas:verAula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 52,  134 => 49,  125 => 44,  122 => 43,  118 => 41,  109 => 36,  107 => 35,  100 => 31,  93 => 27,  89 => 26,  80 => 19,  74 => 17,  68 => 15,  66 => 14,  60 => 11,  52 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
