<?php

/* CriveroPruebaBundle:Mensajes:nuevoMensaje.html.twig */
class __TwigTemplate_88734d48e8baa5987c76fe61257f0c3c032083c2ff4410d6d7b83477f4e23dc0 extends Twig_Template
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
        echo "Nuevo Mensaje ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\"><br>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h2 class=\"t1\">Destinatario - ";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino"))), "html", null, true);
        echo "</h2>   
                    </div>

                    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                    <div class=\"hidden\">
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'widget', array("value" => "mensaje"));
        echo "
                        <span class=\"text-danger\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoComentario", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"hidden\">
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idRemitente", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
        echo "
                        <span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idRemitente", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"hidden\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduzca nombre de usuario"), "value" => (isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino"))));
        echo "
                        <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatario", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"hidden\">
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"hidden\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("value" => "nuevo"));
        echo "
                        <span class=\"text-danger\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"panel-body\">  
                        <div class=\"row text-center\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'label');
        echo "
                                ";
        // line 40
        if (twig_in_filter("responder", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()))) {
            // line 41
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba el asunto"), "value" => (isset($context["asunto"]) ? $context["asunto"] : $this->getContext($context, "asunto"))));
            echo "
                                ";
        } else {
            // line 43
            echo "                                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba el asunto")));
            echo "
                                ";
        }
        // line 45
        echo "                                <span class=\"text-danger\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asunto", array()), 'errors');
        echo "</span>
                            </div>
                        </div><br>
                        <div class=\"row text-center\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escriba el mensaje...")));
        echo "
                                <span class=\"text-danger\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"form-group\" >
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \" >
                                <br>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar", array()), 'widget', array("label" => "Enviar", "attr" => array("class" => "btn btn-success")));
        echo "
                                ";
        // line 59
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "tipo", array()) == 2)) {
            // line 60
            echo "                                    <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
            echo "\">Cancelar</a>
                                ";
        } else {
            // line 62
            echo "                                    <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_monitor", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
            echo "\">Cancelar</a>
                                ";
        }
        // line 64
        echo "                            </div>     
                        </div>     
                    </div>     
                    ";
        // line 67
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
        return "CriveroPruebaBundle:Mensajes:nuevoMensaje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 67,  187 => 64,  181 => 62,  175 => 60,  173 => 59,  169 => 58,  160 => 52,  156 => 51,  152 => 50,  143 => 45,  137 => 43,  131 => 41,  129 => 40,  125 => 39,  116 => 33,  112 => 32,  106 => 29,  102 => 28,  98 => 27,  92 => 24,  88 => 23,  84 => 22,  78 => 19,  74 => 18,  68 => 15,  64 => 14,  59 => 12,  53 => 9,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
