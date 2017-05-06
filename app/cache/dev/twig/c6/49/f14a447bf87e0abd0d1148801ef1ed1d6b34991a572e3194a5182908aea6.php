<?php

/* modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig */
class __TwigTemplate_c649f14a447bf87e0abd0d1148801ef1ed1d6b34991a572e3194a5182908aea6 extends Twig_Template
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
        echo "Nueva sesión pública";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container center-block\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading text-center\">
                <h1 class=\"t1\">Nueva sesión pública</h1>                       
            </div>

            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            <div class=\"panel-body\">
                <form role=\"form\">
                    <div style=\"display:none;\">
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label');
        echo "
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Si no es dedicada dejelo vacio")));
        echo "
                        <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'errors');
        echo "</span>

                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'label');
        echo "
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "imagen")));
        echo "
                        <span class=\"text-danger\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'errors');
        echo "</span>

                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Motivos de cancelación")));
        echo "
                        <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'errors');
        echo "</span>   

                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\" >
                            <label>Nombre de la sesión</label>
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca nombre de la sesión")));
        echo "
                            <span class=\"text-danger\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\" > 
                            <label>Número total de sesiones</label>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nSesiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el número total de sesiones")));
        echo "
                            <span class=\"text-danger\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nSesiones", array()), 'errors');
        echo "</span>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <label>Ejercicios a realizar</label>
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca los ejercicios a realizar")));
        echo "
                            <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ejercicios", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\" >
                            <label>Objetivo de la sesión</label>
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el objetivo de la sesión")));
        echo "
                            <span class=\"text-danger\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetivo", array()), 'errors');
        echo "</span>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\" >
                            <label>Descanso entre ejercicios (segundos)</label>
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el descanso entre ejercicios")));
        echo "
                            <span class=\"text-danger\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descanso", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\" >
                            <label>Repeticiones por cada ejercicio </label>
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca las repeticiones a realizar")));
        echo "
                            <span class=\"text-danger\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "repeticiones", array()), 'errors');
        echo "</span>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\" >
                            <label>Duración de cada sesión (minutos)</label>
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca la duracion de cada sesión")));
        echo "
                            <span class=\"text-danger\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracion", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\" >
                            <label>Limite de participantes</label>
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lClientes", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca el limite de participantes")));
        echo "
                            <span class=\"text-danger\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lClientes", array()), 'errors');
        echo "</span>
                        </div>
                    </div><br>

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <label>Seleccione la hora de comienzo</label> 
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaComienzo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <span class=\"text-danger\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaComienzo", array()), 'errors');
        echo "</span><br>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <label>Seleccione el día de comienzo</label> 
                            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <span class=\"text-danger\">";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'errors');
        echo "</span><br>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <label>Seleccione un aula para realizar la sesión</label> ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'widget');
        echo " 
                            <span class=\"text-danger\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'errors');
        echo "</span><br>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <label>Seleccione los días de la sesión</label> 
                            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 'widget');
        echo "
                            <span class=\"text-danger\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 'errors');
        echo "</span><br>
                        </div>
                    </div>
                </form><br>

                <div class=\"text-center\">
                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmar", array()), 'widget', array("label" => "Confirmar", "attr" => array("class" => "btn btn-success")));
        echo "
                    <form class=\"alinear\" action=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_misSesionesMonitores");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-danger\" >Cancelar</button>
                    </form>
                </div>
                ";
        // line 114
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                   
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 114,  259 => 110,  255 => 109,  246 => 103,  242 => 102,  235 => 98,  231 => 97,  222 => 91,  218 => 90,  211 => 86,  207 => 85,  197 => 78,  193 => 77,  186 => 73,  182 => 72,  172 => 65,  168 => 64,  161 => 60,  157 => 59,  147 => 52,  143 => 51,  135 => 46,  131 => 45,  121 => 38,  117 => 37,  109 => 32,  105 => 31,  95 => 24,  91 => 23,  87 => 22,  82 => 20,  78 => 19,  74 => 18,  69 => 16,  65 => 15,  61 => 14,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
