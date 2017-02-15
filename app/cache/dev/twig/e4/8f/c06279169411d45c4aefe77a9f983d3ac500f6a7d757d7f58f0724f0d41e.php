<?php

/* CriveroPruebaBundle:Sesiones:sesion.html.twig */
class __TwigTemplate_e48fc06279169411d45c4aefe77a9f983d3ac500f6a7d757d7f58f0724f0d41e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"text-center\">
        <h3>
            Sesion ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo "
            <small class=\"text-muted\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</small>
        </h3>
    </div>

    <div id=\"sesiondat\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />        
        </div>

        ";
        // line 21
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "validada")) {
            // line 22
            echo "            <div class=\"text-center\">
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancelarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\">Cancelar</a>
            </div>
            <div class=\"row\">
                <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                    <h4>Aula:</h4> <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
            echo "</p>
                </div>
                <div id=\"colder\" class=\"col-md-4\">
                    <h4>Horario:</h4> <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "horario", array()), "html", null, true);
            echo " </p>
                </div>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 33
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "cancelada")) {
            // line 34
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\" disabled=\"disabled\">Cancelada</button>
                <h4>Motivos:</h4> <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estado", array()) == "rechazada")) {
            // line 39
            echo "            <div class=\"text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\" disabled=\"disabled\">Rechazada</button>
                <h4>Motivos:</h4> <p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "observaciones", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } else {
            // line 43
            echo "   
            <div class=\"accionesesion text-center\" style=\"margin-left: 18px; margin-right: 18px;\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_aceptarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success col-sm-3 col-sm-offset-3\" style=\"height: 30px; width: 250px;\">Aceptar Solicitud</a>
                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_rechazarSesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger col-sm-3 col-sm-offset-1\">Rechazar Solicitud </a>
            </div>
        ";
        }
        // line 49
        echo "
        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                <h4>Ejercicios:</h4> <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                <h4>Repeticiones:</h4> <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
                <h4>Nº de participantes:</h4> <p>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nClientes", array()), "html", null, true);
        echo "</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                <h4>Objetivo:</h4> <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
                <h4>Límite de participantes:</h4> <p>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "lClientes", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 61,  174 => 60,  170 => 59,  166 => 58,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  143 => 49,  137 => 46,  133 => 45,  129 => 43,  123 => 41,  119 => 39,  117 => 38,  112 => 36,  108 => 34,  106 => 33,  100 => 30,  94 => 27,  87 => 23,  84 => 22,  82 => 21,  76 => 18,  67 => 12,  63 => 11,  56 => 8,  53 => 7,  45 => 6,  41 => 1,  38 => 4,  36 => 3,  34 => 2,  11 => 1,);
    }
}
