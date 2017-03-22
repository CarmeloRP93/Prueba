<?php

/* modulomonitoresmonitoresBundle:Default:nuevaSesion.html.twig */
class __TwigTemplate_f367c17d08d0227d16ff617072669e20ddb4702ac4be675a8742177bf007f7a8 extends Twig_Template
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
        echo "Vista de nueva sesion";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <h1 class=\"t1\">Nueva sesion</h1>

        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Si no es dedicada dejelo vacio")));
        echo "
            <span class=\"text-danger\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca nombre de la sesion")));
        echo "
            <span class=\"text-danger\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "imagen")));
        echo "
            <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'label');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca ejercicios de la sesion")));
        echo "
            <span class=\"text-danger\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'label');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca las repeticiones")));
        echo "
            <span class=\"text-danger\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'label');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca la duracion de la sesionjoin")));
        echo "
            <span class=\"text-danger\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'label');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el descanso entre ejercicios")));
        echo "
            <span class=\"text-danger\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            <p style=\"bold\">Limite de clientes</p>
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lClientes", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el limite de participantes")));
        echo "
            <span class=\"text-danger\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lClientes", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'label');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el objetivo de la sesion")));
        echo "
            <span class=\"text-danger\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'label');
        echo "
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
            <span class=\"text-danger\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label');
        echo "
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
            <span class=\"text-danger\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'errors');
        echo "</span>
        </div>
        <div class=\"form-group\" style=\"display:none;\">
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'label');
        echo "
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
            <span class=\"text-danger\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motivos", array()), 'errors');
        echo "</span>
        </div>
        <p>
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
        </p>                
    </div>
    ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:nuevaSesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 83,  232 => 80,  226 => 77,  222 => 76,  218 => 75,  212 => 72,  208 => 71,  204 => 70,  197 => 66,  193 => 65,  189 => 64,  182 => 60,  178 => 59,  174 => 58,  167 => 54,  163 => 53,  155 => 48,  151 => 47,  147 => 46,  140 => 42,  136 => 41,  132 => 40,  125 => 36,  121 => 35,  117 => 34,  110 => 30,  106 => 29,  102 => 28,  95 => 24,  91 => 23,  87 => 22,  80 => 18,  76 => 17,  72 => 16,  65 => 12,  61 => 11,  57 => 10,  51 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
