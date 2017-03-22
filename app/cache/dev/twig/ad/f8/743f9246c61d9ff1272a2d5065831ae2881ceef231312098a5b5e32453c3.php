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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
";
        // line 9
        echo "                    <div class=\"panel-heading text-center\">
                        <h3 class=\"t1\">Monitor: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
        echo "</h3>  
                    </div>
                    <div class=\"usuarfot\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/no-image-found.png"), "html", null, true);
        echo "\" style=\"float: left; width: 100%;\" />        
                    </div>
";
        // line 16
        echo "                      <h4>F.Nacimiento: </h4> <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                        <h4>Correo electrónico: </h4> <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "email", array()), "html", null, true);
        echo "</p>
                        <h4>Registro: </h4> <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "registro", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>
                        <h4>Telefono: </h4> <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "telefono", array()), "html", null, true);
        echo "</p>
";
        // line 21
        echo "                    <div class=\"accionesExclus\">
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarmiperfilm");
        echo "\" class=\"btn btn-primary\">Editar perfil</a> 
                    </div>
";
        // line 25
        echo "            </div>
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
        return array (  92 => 25,  87 => 22,  84 => 21,  80 => 19,  76 => 18,  72 => 17,  67 => 16,  62 => 13,  56 => 10,  53 => 9,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
