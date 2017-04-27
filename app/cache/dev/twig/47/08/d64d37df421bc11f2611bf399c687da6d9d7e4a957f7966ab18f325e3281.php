<?php

/* moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig */
class __TwigTemplate_4708d64d37df421bc11f2611bf399c687da6d9d7e4a957f7966ab18f325e3281 extends Twig_Template
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
        echo " Nueva Reserva ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <h1 class=\"t1\">Nueva reserva</h1>
                </div>

                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                ";
        // line 12
        if (((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")) != null)) {
            // line 13
            echo "                    <h3 class=\"terr\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</h3>
                ";
        }
        // line 15
        echo "                <div class=\"hidden\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
                    <span class=\"text-danger\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"hidden\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'widget');
        echo "
                    <span class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'errors');
        echo "</span>
                </div> 

                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'label');
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <span class=\"text-danger\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <br>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Elegir hora", "attr" => array("class" => "btn btn-success")));
        echo "
                        </div>
                    </div>
                </div>
                ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  111 => 33,  105 => 30,  101 => 29,  97 => 28,  88 => 22,  84 => 21,  80 => 20,  74 => 17,  70 => 16,  67 => 15,  61 => 13,  59 => 12,  55 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
