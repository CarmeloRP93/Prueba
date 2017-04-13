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
    <h1 class=\"t1\">Sesion ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo "</h1>
    <h3 class=\"t1\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</h3>    

    <div id=\"sesiondat\" class=\"container\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" style=\"width: 50%; margin-bottom: 1%\" />        
        </div>
        ";
        // line 13
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "disponible")) {
            // line 14
            echo "            <div class=\"accionesesion text-center\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_sesionesClientes_apuntarse", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" 
                   class=\"btn btn-primary text-center center-block\" style=\"height: 30px; width: 600px;\">Apuntarse <span class=\"glyphicon glyphicon-pencil\"></span></a>
            </div>

        ";
        } elseif (($this->getAttribute(        // line 19
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "completo")) {
            // line 20
            echo "            <div class=\"accionesesion text-center\">
                <button class=\"btn btn-danger text-center center-block\" style=\"height: 30px; width: 600px;\" disabled=\"disabled\">Completo</button>
            </div>

        ";
        } elseif (($this->getAttribute(        // line 24
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "cancelada")) {
            // line 25
            echo "            <div class=\"accionesesion text-center\">
                <button class=\"btn btn-danger text-center center-block\" style=\"height: 30px; width: 600px;\" disabled=\"disabled\">Cancelada</button>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                <h4>Ejercicios:</h4> <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                <h4>Repeticiones:</h4> <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                <h4>Objetivo:</h4> <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
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
        return array (  122 => 39,  118 => 38,  114 => 37,  108 => 34,  104 => 33,  100 => 32,  95 => 29,  89 => 25,  87 => 24,  81 => 20,  79 => 19,  72 => 15,  69 => 14,  67 => 13,  62 => 11,  55 => 7,  51 => 6,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
