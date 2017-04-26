<?php

/* moduloclientesclienteBundle:Sesiones:miSesionClientes.html.twig */
class __TwigTemplate_30a7cceb3978b1b04a26f9fe0bce3409065a079f50883149a63b5b34cfacc1e5 extends Twig_Template
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "
    <div id=\"sesiondat\" class=\"container\">
        <div class=\"page-header\">    
            <h1 class=\"t1\">Sesión - ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h1>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-5\" >
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"max-width: 350px; margin-bottom:20px; margin-right: 0\"/>        
                ";
        // line 14
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 15
            echo "                    <div class=\"text-center\">
                        <h4 class=\"terr\">Motivo de cancelación: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>   
                    </div>
                ";
        }
        // line 19
        echo "            </div>

            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\" >
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">                   
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Monitor:</h4> <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                            <h4>Ejercicios:</h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones:</h4> <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Tiempo estimado:</h4> <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios:</h4> <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Objetivo:</h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center\">
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionesClientes_abandonar", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
        echo "\" 
               class=\"btn btn-danger text-center img-responsive\" style=\"width: 220px;\">Abandonar</a>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Sesiones:miSesionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  106 => 32,  102 => 31,  98 => 30,  92 => 27,  88 => 26,  84 => 25,  76 => 19,  70 => 16,  67 => 15,  65 => 14,  61 => 13,  53 => 8,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
