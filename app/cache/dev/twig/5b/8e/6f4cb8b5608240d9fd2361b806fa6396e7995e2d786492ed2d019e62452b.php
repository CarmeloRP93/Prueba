<?php

/* moduloclientesclienteBundle:Sesiones:sesionClientes.html.twig */
class __TwigTemplate_5b8e6f4cb8b5608240d9fd2361b806fa6396e7995e2d786492ed2d019e62452b extends Twig_Template
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"sesiondat\" class=\"container\">
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
        }
        // line 16
        echo "            </div>

            <div class=\"col-xs-8 col-sm-8 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-0 col-lg-offset-0 text-center\" >
                <div class=\"panel panel-default\">                  
                    <div class=\"panel-body\">                   
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Monitor</h4> <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                            <h4>Ejercicios</h4> <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                            <h4>Repeticiones</h4> <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Tiempo estimado</h4> <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Descanso entre ejercicios</h4> <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                            <h4>Objetivo</h4> <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center\">
            ";
        // line 37
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "disponible")) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionesClientes_apuntarse", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" 
                   class=\"btn btn-primary text-center center-block img-responsive\" style=\"width: 180px;\">Apuntarse <span class=\"glyphicon glyphicon-pencil\"></span></a>
                ";
        } elseif (($this->getAttribute(        // line 40
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "completo")) {
            // line 41
            echo "                <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Completo</button>
            ";
        } elseif (($this->getAttribute(        // line 42
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "cancelada")) {
            // line 43
            echo "                <button class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\" disabled=\"disabled\">Cancelada</button>
            ";
        }
        // line 45
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Sesiones:sesionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 45,  129 => 43,  127 => 42,  124 => 41,  122 => 40,  116 => 38,  114 => 37,  103 => 29,  99 => 28,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  73 => 16,  67 => 14,  65 => 13,  61 => 12,  53 => 7,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
