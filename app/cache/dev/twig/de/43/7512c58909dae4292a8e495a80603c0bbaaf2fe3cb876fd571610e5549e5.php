<?php

/* CriveroPruebaBundle:Sesiones:rechazarSesion.html.twig */
class __TwigTemplate_de437512c58909dae4292a8e495a80603c0bbaaf2fe3cb876fd571610e5549e5 extends Twig_Template
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
        echo "Rechazar sesión";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <h1 class=\"t1\">Rechazar sesión</h1>
                    </div>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

                    <div class=\"panel-body\">  
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label');
        echo "
                                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba los motivos del rechazo..."), "value" => ""));
        echo "
                                <span class=\"text-danger\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'errors');
        echo "</span>
                            </div>
                        </div><br>

                        <div class=\"row\">
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                ";
        // line 24
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) {
            // line 25
            echo "                                    ";
            $context["ruta"] = $this->env->getExtension('routing')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array())));
            // line 26
            echo "                                ";
        } else {
            // line 27
            echo "                                    ";
            $context["ruta"] = $this->env->getExtension('routing')->getPath("crivero_prueba_dedicadas", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array())));
            // line 28
            echo "                                ";
        }
        // line 29
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                            </div>                
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["ruta"]) ? $context["ruta"] : $this->getContext($context, "ruta")), "html", null, true);
        echo "\" class=\"btn btn-danger\">Anular</a>
                            </div>                
                        </div>
                    </div>
                    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:rechazarSesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  101 => 32,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  80 => 24,  71 => 18,  67 => 17,  63 => 16,  55 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
