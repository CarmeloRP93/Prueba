<?php

/* CriveroPruebaBundle:Aulas:nuevaAula.html.twig */
class __TwigTemplate_d46f1e3998afd8238016e7094e1e1831f36a64a727ea000f07775ba1c2d09b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Nueva aula ";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"container\"><br>

        <div class=\"col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h2 class=\"t3\">Nueva aula</h2>
                </div>
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <div class=\"panel-body\">
                    <form role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre del aula")));
        echo "
                                    <span class=\"text-danger\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                                <div class=\"form-group\">
                                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'label');
        echo "
                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    <span class=\"text-danger\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilidad", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">

                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                                <div class=\"form-group\">
                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'label');
        echo "
                                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tamaño del aula")));
        echo "
                                    <span class=\"text-danger\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dimensiones", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                                <div class=\"form-group\">
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aforo", array()), 'label');
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aforo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Capacidad del aula")));
        echo "
                                    <span class=\"text-danger\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aforo", array()), 'errors');
        echo "</span>
                                </div>

                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba una descripción del aula...")));
        echo "
                            <span class=\"text-danger\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
        echo "
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget');
        echo "
                            <span class=\"text-danger\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
        echo "</span>
                        </div>


                    </form><br>
                    <div class=\"text-center\">
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                        <form class=\"alinear\" action=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_aulas");
        echo "\">
                            <button type=\"submit\" class=\"btn btn-danger\" >Cancelar</button>
                        </form>
                    </div>
                    ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>               
</div>
</div>           

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Aulas:nuevaAula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 76,  173 => 72,  169 => 71,  160 => 65,  156 => 64,  152 => 63,  145 => 59,  141 => 58,  137 => 57,  127 => 50,  123 => 49,  119 => 48,  110 => 42,  106 => 41,  102 => 40,  90 => 31,  86 => 30,  82 => 29,  73 => 23,  69 => 22,  65 => 21,  56 => 15,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
