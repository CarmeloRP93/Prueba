<?php

/* CriveroPruebaBundle:Canchas:nuevaCancha.html.twig */
class __TwigTemplate_efa214fda3b7aea40713fc3fc80cdbfb2068d9a4386d46b27dc554b10d4e054c extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Nueva Cancha ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\"><br>

        <div class=\"col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h2 class=\"t3\">Nueva cancha</h2>
                </div>
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <div class=\"panel-body\">
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    <label>Nombre</label>
                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de cancha")));
        echo "
                                    <span class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'label');
        echo "
                                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'label');
        echo "
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    <span class=\"text-danger\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'errors');
        echo "</span>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "
                                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Localización de la cancha")));
        echo "
                                    <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "</span>
                                </div> 
                            </div>

                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'label');
        echo "
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tamaño de la cancha")));
        echo "
                                    <span class=\"text-danger\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'errors');
        echo "</span>
                                </div>

                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'label');
        echo "
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Coste de reserva por hora. Ej: 5.25")));
        echo "
                                    <span class=\"text-danger\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>



                        <div class=\"form-group\">
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
        echo "
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget');
        echo "
                            <span class=\"text-danger\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
        echo "</span>
                        </div>

                    </form><br>
                    <div class=\"text-center\">
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                        <form class=\"alinear\" action=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_canchas");
        echo "\">
                            <button type=\"submit\" class=\"btn btn-danger\" >Cancelar</button>
                        </form>
                    </div>
                    ";
        // line 83
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
        return "CriveroPruebaBundle:Canchas:nuevaCancha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 83,  187 => 79,  183 => 78,  175 => 73,  171 => 72,  167 => 71,  156 => 63,  152 => 62,  148 => 61,  139 => 55,  135 => 54,  131 => 53,  122 => 47,  118 => 46,  114 => 45,  105 => 39,  101 => 38,  97 => 37,  86 => 29,  82 => 28,  78 => 27,  70 => 22,  66 => 21,  56 => 14,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
