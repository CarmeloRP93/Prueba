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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Sesión - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"sesiondat\" class=\"container text-center\">
        <div class=\"page-header\">    
            <h1 class=\"t1\">Sesión - ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h1>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center\" >
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" style=\"max-width: 350px; margin-bottom:20px; margin-right: 0\"/>        
                ";
        // line 13
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 14
            echo "                    <h4 class=\"terr\">Motivo de cancelación: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>   
                ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 16
            echo "                    <h4 class=\"terr\">Motivo de suspensión: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</h4>   
                ";
        } elseif (($this->getAttribute(        // line 17
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 18
            echo "                    <h4>¡Gracias por su participación!</h4>   
                ";
        }
        // line 20
        echo "            </div>

            <div class=\"col-xs-8 col-sm-8 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-0 col-lg-offset-0 text-center\" >
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">                   
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Monitor</h4> 
                            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_verMonitor", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "idMonitor", array()))), "html", null, true);
        echo "\" 
                               class=\"btn btn-success text-center center-block img-responsive\" style=\"width: 180px;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</a>
                            <h4>Ejercicios</h4> <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones</h4> <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Tiempo estimado</h4> <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios</h4> <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Objetivo</h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 41
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "terminada")) {
            // line 42
            echo "            <button class=\"btn btn-warning text-center center-block img-responsive\" style=\"width: 180px;\" disabled>Sesión terminada</button>
        ";
        } elseif (($this->getAttribute(        // line 43
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "suspendida")) {
            // line 44
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionesClientes_abandonar", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" 
               class=\"btn btn-danger text-center img-responsive\" style=\"width: 220px;\">Salir de sesión</a><br>                                      
        ";
        } else {
            // line 47
            echo "            ";
            if ((($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal") || ($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada"))) {
                // line 48
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionesClientes_abandonar", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
                echo "\" 
                   class=\"btn btn-danger text-center img-responsive\" style=\"width: 220px;\">Abandonar</a><br>  
            ";
            }
            // line 51
            echo "        ";
        }
        // line 52
        echo "
        ";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")) {
            // line 54
            echo "            <a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_misSesionesClientes");
            echo "\">Volver atrás</a>
        ";
        }
        // line 56
        echo "    </div>
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
        return array (  167 => 56,  161 => 54,  159 => 53,  156 => 52,  153 => 51,  146 => 48,  143 => 47,  136 => 44,  134 => 43,  131 => 42,  129 => 41,  120 => 35,  116 => 34,  112 => 33,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  85 => 20,  81 => 18,  79 => 17,  74 => 16,  72 => 15,  67 => 14,  65 => 13,  61 => 12,  53 => 7,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
