<?php

/* modulomonitoresmonitoresBundle:Default:sesionMonitores.html.twig */
class __TwigTemplate_1cd0666dac7a3da8738bdc71e2dc16a4dc7a6a3fa677afc0419d134ea7dde215 extends Twig_Template
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
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "Validada")) {
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
                        <h4>Monitor:</h4> <p>Jordan</p>
                        <h4>Ejercicios:</h4> <p >Plancha dinámica, Elevación de piernas y Patadas de rana</p>
                        <h4>Repeticiones:</h4> <p>3/Ejercicio</p>
                        <h4>Material:</h4> <p>Nuestro propio cuerpo para completar esta efectiva sesion para el abdomen</p>
                    </div>
                    <div id=\"colder\" class=\"col-md-4\">
                        <h4>Tiempo estimado:</h4> <p>40-45 minutos</p>
                        <h4>Descanso entre ejercicios:</h4> <p>2-3 minutos</p>
                        <h4>Objetivos:</h4> <p>Definir abdominales y tonificar el vientre </p>
                    </div>
           </div>
    </div>
            
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:sesionMonitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  77 => 22,  70 => 17,  68 => 16,  62 => 13,  52 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
