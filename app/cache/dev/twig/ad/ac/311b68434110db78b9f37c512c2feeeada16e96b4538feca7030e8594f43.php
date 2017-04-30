<?php

/* modulomonitoresmonitoresBundle:Privada:sesionDedicada.html.twig */
class __TwigTemplate_adac311b68434110db78b9f37c512c2feeeada16e96b4538feca7030e8594f43 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 class=\"t1\">Sesión privada: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h3>
    <div id=\"sesiondat\" class=\"container\">
        <div class=\"row\">           
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" >  
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 330px; margin-bottom:20px\"/>        
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\">
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">   
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">    
                            <h4>Aula de la sesión:</h4> <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</p>
                            <h4>Monitor:</h4> <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                            <h4>Ejercicios a realizar:</h4> <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones por cada ejercicio:</h4> <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Duración de cada sesión:</h4> <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios:</h4> <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " segundos</p>
                            <h4>Objetivo de la sesión:</h4> <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_verHorario", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
        echo "\" style=\"height: 30px; width: 100px;\" class=\"btn btn-primary\">Ver Horario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Privada:sesionDedicada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 22,  86 => 21,  82 => 20,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  55 => 8,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
