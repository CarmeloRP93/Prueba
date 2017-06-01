<?php

/* modulomonitoresmonitoresBundle:Participantes:participante.html.twig */
class __TwigTemplate_366a09cd201d201b370210aef649d3df61c5a043b6ea5d865937b9c8f5ad4721 extends Twig_Template
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
        echo " Cliente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3 style=\"font-weight: 600\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username", array()), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Correo electrónico </h4> <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "email", array()), "html", null, true);
        echo "</p>
                            <h4>Nombe y apellidos </h4> <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <h4>Fecha nacimiento </h4> <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                                <h4>Teléfono </h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>
                            </div>

                            <div>
                                <form style=\"margin-right: -3px\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_sesionesParticipante", array("id" => (isset($context["idUsuario"]) ? $context["idUsuario"] : $this->getContext($context, "idUsuario")))), "html", null, true);
        echo "\" method=\"post\" class=\"alinear btn-group\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ver sesiones</button>
                                    <input type=\"hidden\" class=\"btn\">
                                </form>
                                <form style=\"\" action=\"";
        // line 34
        echo twig_escape_filter($this->env, ((("http://localhost/Prueba/web/app_dev.php/expulsar/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/") . (isset($context["idUsuario"]) ? $context["idUsuario"] : $this->getContext($context, "idUsuario"))), "html", null, true);
        echo "\" method=\"post\" class=\"alinear btn-group\">
                                    <button type=\"submit\" class=\"btn btn-danger\">Expulsar </button>
                                    <input type=\"hidden\" class=\"btn\">
                                </form>
                                <form style=\"margin-left: -3px; margin-top: -10px\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_enviarMensajeCliente", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"alinear btn-group\">
                                    <input type=\"hidden\" class=\"btn\">
                                    <button type=\"submit\" class=\"btn btn-default\">Enviar mensaje</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, (("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/verParticipantes"), "html", null, true);
        echo "\" class=\"btn btn-default\">Volver a lista de participantes</a>
        </div>
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Participantes:participante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  108 => 38,  101 => 34,  94 => 30,  87 => 26,  83 => 25,  76 => 21,  72 => 20,  62 => 13,  56 => 10,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
