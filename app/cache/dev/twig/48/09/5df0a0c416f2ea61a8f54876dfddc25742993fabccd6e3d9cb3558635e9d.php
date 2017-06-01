<?php

/* CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig */
class __TwigTemplate_48095df0a0c416f2ea61a8f54876dfddc25742993fabccd6e3d9cb3558635e9d extends Twig_Template
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
        echo "Cancelar sesión";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\"><br>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <h1 class=\"t1\">Cancelar sesión</h1>
                    </div>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                    <div class=\"panel-body\">  
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label');
        echo "
                                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba los motivos de cancelación..."), "value" => ""));
        echo "
                                <span class=\"text-danger\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'errors');
        echo "</span>
                            </div>
                        </div><br>
                        <div class=\"row\">
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                            </div>            
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                ";
        // line 25
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "cliente", array()) == "normal")) {
            // line 26
            echo "                                    ";
            $context["ruta"] = $this->env->getExtension('routing')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array())));
            // line 27
            echo "                                ";
        } else {
            // line 28
            echo "                                    ";
            $context["ruta"] = $this->env->getExtension('routing')->getPath("crivero_prueba_dedicadas", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array())));
            // line 29
            echo "                                ";
        }
        // line 30
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["ruta"]) ? $context["ruta"] : $this->getContext($context, "ruta")), "html", null, true);
        echo "\" class=\"btn btn-danger\">Cancelar</a>
                            </div>                
                        </div>                
                    </div>                
                    ";
        // line 34
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
        return "CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  84 => 25,  78 => 22,  70 => 17,  66 => 16,  62 => 15,  55 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
