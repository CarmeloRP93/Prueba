<?php

/* modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig */
class __TwigTemplate_99d232fbed775b95743b0e57556ded2f357aa18cebb2f9ba58905559508feb6e extends Twig_Template
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"text-center\">
        <h3>
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()), "html", null, true);
        echo "
            <small class=\"text-muted\">Abdomen</small>
        </h3>
    </div>
    
    <div id=\"sesiondat\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/abdd.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />        
        </div>
  
        ";
        // line 16
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 17
            echo "        <div class=\"accionesesion text-center\" style=\"margin-left: 30px; margin-right: 10px;\">
            <button style=\"height: 30px; width: 250px;\" class=\"btn btn-success col-sm-3 col-sm-offset-3\">Modificar sesion</button>
            <button style=\"height: 30px; width: 250px;\" class=\"btn btn-danger col-sm-3 col-sm-offset-1\">Eliminar sesion </button>
        </div>
    ";
        } else {
            // line 22
            echo "        <div class=\"text-center\">
            <button style=\"height: 30px; width: 600px;\" class=\"btn btn-warning\">Sin validar</button>
        </div>
    ";
        }
        // line 26
        echo "    
        
           <div class=\"row\">
                    <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                        <h4>Monitor:</h4> <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                        <h4>Ejercicios:</h4> <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                        <h4>Repeticiones:</h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                    </div>
                    <div id=\"colder\" class=\"col-md-4\">
                        <h4>Tiempo estimado:</h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                        <h4>Descanso entre ejercicios:</h4> <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                        <h4>Objetivo:</h4> <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                    </div>
           </div>
    </div>
            
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  111 => 36,  107 => 35,  101 => 32,  97 => 31,  93 => 30,  87 => 26,  81 => 22,  74 => 17,  72 => 16,  66 => 13,  54 => 6,  50 => 4,  47 => 3,  37 => 2,  11 => 1,);
    }
}
