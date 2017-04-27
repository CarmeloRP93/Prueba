<?php

/* modulomonitoresmonitoresBundle:Default:suspenderSesionDe.html.twig */
class __TwigTemplate_baf80b24d55f2f6d6e953f645ece95ab8f14246798fda5ad998f3a1b95624ac5 extends Twig_Template
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
        echo "Suspender sesión privada";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container centradoV\">
        <h1 class=\"t1\">Suspender sesión privada</h1>

        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Si no es dedicada dejelo vacio")));
        echo "
            <span class=\"text-danger\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca nombre de la sesion")));
        echo "
            <span class=\"text-danger\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "imagen")));
        echo "
            <span class=\"text-danger\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'label');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca ejercicios de la sesion")));
        echo "
            <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'label');
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca las repeticiones")));
        echo "
            <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'label');
        echo "
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca la duracion de la sesionjoin")));
        echo "
            <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'label');
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el descanso entre ejercicios")));
        echo "
            <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            <p>Limite de clientes</p>
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lClientes", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el limite de participantes")));
        echo "
            <span class=\"text-danger\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lClientes", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'label');
        echo "
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el objetivo de la sesion")));
        echo "
            <span class=\"text-danger\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label');
        echo "
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba los motivos de suspensión...")));
        echo "
            <span class=\"text-danger\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'label');
        echo "
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
            <span class=\"text-danger\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'label');
        echo "
            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
            <span class=\"text-danger\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form-group\" style=\"display:none;\">
            <label>Número total de sesiones</label>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nSesiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el número total de sesiones")));
        echo "
            <span class=\"text-danger\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nSesiones", array()), 'errors');
        echo "</span>
        </div>
        <div>
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
            
            <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionDedicada", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Cancelar</a>
        </div>                

        ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:suspenderSesionDe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 88,  246 => 85,  241 => 83,  235 => 80,  231 => 79,  224 => 75,  220 => 74,  216 => 73,  210 => 70,  206 => 69,  202 => 68,  196 => 65,  192 => 64,  188 => 63,  181 => 59,  177 => 58,  173 => 57,  166 => 53,  162 => 52,  154 => 47,  150 => 46,  146 => 45,  139 => 41,  135 => 40,  131 => 39,  124 => 35,  120 => 34,  116 => 33,  109 => 29,  105 => 28,  101 => 27,  94 => 23,  90 => 22,  86 => 21,  79 => 17,  75 => 16,  71 => 15,  64 => 11,  60 => 10,  56 => 9,  51 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
