<?php

/* moduloclientesclienteBundle:Mensajes:mensajeCliente.html.twig */
class __TwigTemplate_bce2f27be9aed631bedbd21126175ef9ee8edcf91cad75d45101658bb7f62deb extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Mensaje ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "id", array()), "html", null, true);
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h3 class=\"t3\" style=\" word-wrap: break-word;\">";
        // line 9
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "asunto", array()) == null)) ? ("Sin asunto") : ($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "asunto", array()))), "html", null, true);
        echo "</h3>
                </div>

                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-2\" >
                            <img class=\"img-circle\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["remitente"]) ? $context["remitente"] : $this->getContext($context, "remitente")), "imagen", array()))), "html", null, true);
        echo "\" style=\"width: 80px; float: left\"/>
                        </div>

                        <div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-10\">
                            ";
        // line 19
        if (($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "idDestinatario", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 20
            echo "                                <form class=\"alinear\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_responderMensajeCliente", array("id" => $this->getAttribute((isset($context["remitente"]) ? $context["remitente"] : $this->getContext($context, "remitente")), "id", array()))), "html", null, true);
            echo "\" style=\"float: right\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\" >Responder<span class=\"\"></span></button>
                                </form>
                            ";
        }
        // line 24
        echo "                            <p style=\"font-weight: bold\"> ";
        echo twig_escape_filter($this->env, (("<" . $this->getAttribute((isset($context["remitente"]) ? $context["remitente"] : $this->getContext($context, "remitente")), "username", array())) . ">"), "html", null, true);
        echo "</p>
                            <p style=\"font-weight: bold\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "fecha", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>
                            <p style=\"font-weight: bold\">";
        // line 26
        echo twig_escape_filter($this->env, (("(" . $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "destinatario", array())) . ")"), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <hr />

                    <div class=\"col-xs-12 col-sm-6 col-md-12 col-lg-12 \" >
                        <div class=\"row\">
                            <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "descripcion", array()), "html", null, true);
        echo "</p>
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
        return "moduloclientesclienteBundle:Mensajes:mensajeCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  88 => 26,  84 => 25,  79 => 24,  71 => 20,  69 => 19,  62 => 15,  53 => 9,  47 => 5,  44 => 4,  37 => 3,  11 => 1,);
    }
}
