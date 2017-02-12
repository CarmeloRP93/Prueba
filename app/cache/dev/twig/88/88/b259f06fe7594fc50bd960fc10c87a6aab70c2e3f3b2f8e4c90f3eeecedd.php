<?php

/* CriveroPruebaBundle:Aulas:aula.html.twig */
class __TwigTemplate_8888b259f06fe7594fc50bd960fc10c87a6aab70c2e3f3b2f8e4c90f3eeecedd extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
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
        <h3>Detalles de Aula</h3>
    </div>

    <div class=\"text-center\">
        <h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</h4>
    </div>

    <div class=\"col-md-6 col-xs-12\">

        <div class=\"text-center\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "imagen", array()))), "html", null, true);
        echo "\" style=\"width:250px; height: 150px\"  class=\"img-rounded\"/><br>

            <br>";
        // line 18
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()) == "Disponible")) {
            // line 19
            echo "            <div class=\"text-center\">
                <button class=\"btn btn-success\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
            </div>
            ";
        } else {
            // line 23
            echo "                <div class=\"text-center\">
                    <button class=\"btn btn-danger\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "disponibilidad", array()), "html", null, true);
            echo "</button>
                </div>
                ";
        }
        // line 27
        echo "                </div><br>

            </div>

            <div class=\"col-md-6 col-xs-12\">
                <div class=\"text-center\">
                    <h4>Horario: </h4>
                    <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "horario", array()), "html", null, true);
        echo " </p>

                    ";
        // line 36
        if (($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "sesiones", array()) != null)) {
            // line 37
            echo "                        <div>
                            <h4>Sesiones: </h4> 
                            ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 40
                echo "                                <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo " con ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "monitor", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "horario", array()), "html", null, true);
                echo " </p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        </div>
                    ";
        }
        // line 44
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aula_editar", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">
                        Editar info
                    </a>
                </div>


                ";
        // line 53
        echo "

            </div>
            ";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Aulas:aula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  133 => 44,  129 => 42,  116 => 40,  112 => 39,  108 => 37,  106 => 36,  101 => 34,  92 => 27,  86 => 24,  83 => 23,  77 => 20,  74 => 19,  72 => 18,  67 => 16,  58 => 10,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}