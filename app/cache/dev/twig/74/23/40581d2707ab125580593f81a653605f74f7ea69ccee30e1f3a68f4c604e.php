<?php

/* modulomonitoresmonitoresBundle:Default:participante.html.twig */
class __TwigTemplate_742340581d2707ab125580593f81a653605f74f7ea69ccee30e1f3a68f4c604e extends Twig_Template
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
        echo " Cliente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3 style=\"font-weight: 600\">";
        // line 14
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array())), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">  

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>E-mail </h4> <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "email", array()), "html", null, true);
        echo "</p>
                            <h4>Fecha nacimiento </h4> <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Teléfono </h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
                        <div id=\"colder\" class=\"col-md-8\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/verParticipantes"), "html", null, true);
        echo "\" style=\"height: 30px; width: 190px; margin-top: 10px;\" class=\"btn btn-success\">Volver a lista de participantes</a></div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:participante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  83 => 26,  77 => 23,  73 => 22,  62 => 14,  56 => 11,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
