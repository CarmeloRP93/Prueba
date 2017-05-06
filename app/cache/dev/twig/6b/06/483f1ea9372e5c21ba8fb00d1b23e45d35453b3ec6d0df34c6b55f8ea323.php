<?php

/* modulomonitoresmonitoresBundle:Mensajes:nuevoMensajeMonitor.html.twig */
class __TwigTemplate_6b06483f1ea9372e5c21ba8fb00d1b23e45d35453b3ec6d0df34c6b55f8ea323 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Nuevo Mensaje ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <h1 class=\"t1\">Destinatario - ";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino"))), "html", null, true);
        echo "</h1>   
                    </div>

                    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                    <div class=\"hidden\">
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'widget', array("value" => "mensaje"));
        echo "
                        <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"hidden\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idRemitente", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
        echo "
                        <span class=\"text-danger\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idRemitente", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"hidden\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'label');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca nombre de usuario"), "value" => (isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino"))));
        echo "
                        <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"hidden\">
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"hidden\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("value" => "nuevo"));
        echo "
                        <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"panel-body\">  
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'label');
        echo "
                                ";
        // line 41
        if (twig_in_filter("responder", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()))) {
            // line 42
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba el asunto"), "value" => (isset($context["asunto"]) ? $context["asunto"] : $this->getContext($context, "asunto"))));
            echo "
                                ";
        } else {
            // line 44
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba el asunto")));
            echo "
                                ";
        }
        // line 46
        echo "                                <span class=\"text-danger\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba el mensaje...")));
        echo "
                                <span class=\"text-danger\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <br>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar", array()), 'widget', array("label" => "Enviar", "attr" => array("class" => "btn btn-success")));
        echo "
                                ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")) {
            // line 61
            echo "                                    <a class=\"btn btn-danger text-center img-responsive\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\">Cancelar</a>
                                ";
        }
        // line 63
        echo "                                
                            
                                
                            </div>     
                        </div>    
                    </div>     
                    ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>     
            </div>     
        </div>
        <div class=\"text-center\">
            <a class=\"btn btn-default\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_mensajes_recibidosMonitor");
        echo "\">Volver a mensajes</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Mensajes:nuevoMensajeMonitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 74,  189 => 69,  181 => 63,  175 => 61,  173 => 60,  169 => 59,  160 => 53,  156 => 52,  152 => 51,  143 => 46,  137 => 44,  131 => 42,  129 => 41,  125 => 40,  116 => 34,  112 => 33,  106 => 30,  102 => 29,  98 => 28,  92 => 25,  88 => 24,  84 => 23,  78 => 20,  74 => 19,  68 => 16,  64 => 15,  59 => 13,  53 => 10,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
