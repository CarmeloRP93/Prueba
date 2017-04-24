<?php

/* modulomonitoresmonitoresBundle:Default:miperfilm.html.twig */
class __TwigTemplate_adf8743f9246c61d9ff1272a2d5065831ae2881ceef231312098a5b5e32453c3 extends Twig_Template
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
        echo " Mi perfil ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success2.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3 style=\"font-weight: 600\">Perfil</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" style=\"margin-top: 18px;\">
                            <a href = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarmiperfilm", array("id" => $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default active\">Editar</a>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">  

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                            <h4>Nombre </h4> <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
        echo "</p>
                            <h4>Fecha nacimiento </h4> <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                            <h4>E-mail </h4> <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "email", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            <h4>Nombre de usuario</h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "username", array()), "html", null, true);
        echo "</p>        
                            <h4>Registro </h4> <p>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                            <h4>Teléfono </h4> <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "telefono", array()), "html", null, true);
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
        return "modulomonitoresmonitoresBundle:Default:miperfilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  96 => 33,  92 => 32,  86 => 29,  82 => 28,  78 => 27,  66 => 18,  57 => 12,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
