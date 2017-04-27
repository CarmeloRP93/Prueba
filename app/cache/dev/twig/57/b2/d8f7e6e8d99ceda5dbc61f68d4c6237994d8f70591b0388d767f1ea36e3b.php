<?php

/* moduloclientesclienteBundle:Canchas:valorar.html.twig */
class __TwigTemplate_57b2d8f7e6e8d99ceda5dbc61f68d4c6237994d8f70591b0388d767f1ea36e3b extends Twig_Template
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
        echo "Vista de valorar cancha ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <h1 class=\"t1\">Valorar cancha</h1>
                </div>

                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <div class=\"hidden\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'label');
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'widget', array("value" => (isset($context["idCancha"]) ? $context["idCancha"] : $this->getContext($context, "idCancha")), "attr" => array("class" => "form-control", "placeholder" => "idCancha")));
        echo "
                    <span class=\"text-danger\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCancha", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntuacion", array()), 'label');
        echo "
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntuacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <span class=\"text-danger\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntuacion", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <br>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar", array()), 'widget', array("label" => "Enviar valoracion", "attr" => array("class" => "btn btn-success")));
        echo "                
                        </div>
                    </div>
                </div>
                ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Canchas:valorar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  91 => 26,  85 => 23,  81 => 22,  77 => 21,  68 => 15,  64 => 14,  60 => 13,  55 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
