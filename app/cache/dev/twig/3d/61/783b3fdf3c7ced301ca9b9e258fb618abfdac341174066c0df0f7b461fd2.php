<?php

/* moduloclientesclienteBundle:Reservas:pagoReserva.html.twig */
class __TwigTemplate_3d61783b3fdf3c7ced301ca9b9e258fb618abfdac341174066c0df0f7b461fd2 extends Twig_Template
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
        echo " Pago reserva ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Pago reserva</h1>
            </div>

            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            <div class=\"hidden\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCliente", array()), 'widget');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaPago", array()), 'widget');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idConcepto", array()), 'widget');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "concepto", array()), 'widget');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuantia", array()), 'widget');
        echo "
            </div>
            <div class=\"panel-body\">  
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        <label>N.º de tarjeta</label>
                        <input type=\"text\" class=\"form-control\" disabled/>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        <label>Fecha de caducidad</label>
                        <div class=\"row\">
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"MM\" disabled/>
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"YY\" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        <label>Código de seguridad CVV</label>
                        <input type=\"text\" class=\"form-control\" disabled/>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        <label>Nombre del titular</label>
                        <input type=\"text\" class=\"form-control\" disabled/>
                    </div>
                </div><br>
                <div class=\"row\">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                </div>
            </div>
            ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Reservas:pagoReserva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  107 => 45,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
