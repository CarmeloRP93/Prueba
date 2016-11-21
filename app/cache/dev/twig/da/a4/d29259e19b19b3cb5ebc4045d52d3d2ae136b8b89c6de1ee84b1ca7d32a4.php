<?php

/* CriveroPruebaBundle:Default:sesion.html.twig */
class __TwigTemplate_daa4d29259e19b19b3cb5ebc4045d52d3d2ae136b8b89c6de1ee84b1ca7d32a4 extends Twig_Template
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
        // line 2
        $context["nombre"] = $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array());
        // line 3
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) != null)) {
            // line 4
            $context["nombre"] = $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Vista de ";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"text-center\">
        <h3>
            Sesion ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo "
            <small class=\"text-muted\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "</small>
        </h3>
    </div>
    
    <div id=\"sesiondat\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />        
        </div>
  
    ";
        // line 20
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "pendiente")) {
            // line 21
            echo "        <div class=\"accionesesion text-center\" style=\"margin-left: 18px; margin-right: 18px;\">
            <button style=\"height: 30px; width: 250px;\" class=\"btn btn-success col-sm-3 col-sm-offset-3\">Aceptar Solicitud</button>
            <button style=\"height: 30px; width: 250px;\" class=\"btn btn-danger col-sm-3 col-sm-offset-1\">Rechazar Solicitud </button>
        </div>
    ";
        } else {
            // line 26
            echo "        <div class=\"text-center\">
            <button style=\"height: 30px; width: 600px;\" class=\"btn btn-success\">Validada</button>
        </div>
    ";
        }
        // line 30
        echo "        
           <div class=\"row\">
                    <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                        <h4>Monitor:</h4> <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                        <h4>Ejercicios:</h4> <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                        <h4>Repeticiones:</h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                    </div>
                    <div id=\"colder\" class=\"col-md-4\">
                        <h4>Tiempo estimado:</h4> <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                        <h4>Descanso entre ejercicios:</h4> <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                        <h4>Objetivo:</h4> <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                    </div>
           </div>
    </div>
            
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  117 => 39,  113 => 38,  107 => 35,  103 => 34,  99 => 33,  94 => 30,  88 => 26,  81 => 21,  79 => 20,  73 => 17,  64 => 11,  60 => 10,  56 => 8,  53 => 7,  45 => 6,  41 => 1,  38 => 4,  36 => 3,  34 => 2,  11 => 1,);
    }
}
