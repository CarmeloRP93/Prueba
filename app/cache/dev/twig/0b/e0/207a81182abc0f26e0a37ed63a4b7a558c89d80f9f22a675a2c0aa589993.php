<?php

/* CriveroPruebaBundle:Sesiones:tarifas.html.twig */
class __TwigTemplate_0be0207a81182abc0f26e0a37ed63a4b7a558c89d80f9f22a675a2c0aa589993 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Tarifas de sesiones  ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\"><br>
        <div class=\"col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h2 class=\"t3\">Establecer tarifas de sesiones (€/hora)</h2>
                </div>
                ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <div class=\"panel-body\">
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                <div class=\"form-group\">
                                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entrenamiento", array()), 'label');
        echo "
                                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entrenamiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "€/hora")));
        echo "
                                    <span class=\"text-danger\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entrenamiento", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                <div class=\"form-group\">
                                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deportiva", array()), 'label');
        echo "
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deportiva", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "€/hora")));
        echo "
                                    <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deportiva", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                                <div class=\"form-group\">
                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "privada", array()), 'label');
        echo "
                                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "privada", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "€/hora")));
        echo "
                                    <span class=\"text-danger\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "privada", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>
                    </form><br>
                    <div class=\"text-center\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Actualizar", "attr" => array("class" => "btn btn-success")));
        echo "
                        <form class=\"alinear\" action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones");
        echo "\">
                            <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
                        </form>
                    </div>
                    ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>               
        </div>
    </div>           
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:tarifas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  116 => 39,  112 => 38,  103 => 32,  99 => 31,  95 => 30,  87 => 25,  83 => 24,  79 => 23,  71 => 18,  67 => 17,  63 => 16,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
