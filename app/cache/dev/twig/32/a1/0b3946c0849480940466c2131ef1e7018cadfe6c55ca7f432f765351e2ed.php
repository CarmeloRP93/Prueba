<?php

/* modulomonitoresmonitoresBundle:Publica:recintoPublico.html.twig */
class __TwigTemplate_32a10b3946c0849480940466c2131ef1e7018cadfe6c55ca7f432f765351e2ed extends Twig_Template
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
        echo " Elegir tipo ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                <h1 class=\"t1\">Elegir lugar de la sesión</h1>
            </div>
            <div class=\"panel-body myelement\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-5 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-2\">
                        <div class=\"panel panel-default text-center\">
                            <div class=\"panel-heading\">
                                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_nuevaSesion");
        echo "\">
                                    <h2 class=\"t1\">Aula</h2>   
                            </div>
                            <div class=\"panel-body myelement\">
                                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/kickboxing.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-5 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0\">
                        <div class=\"panel panel-default text-center\">
                            <div class=\"panel-heading\">
                                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_nuevaSesionDeportiva");
        echo "\">
                                    <h2 class=\"t1\">Cancha</h2>   
                            </div>
                            <div class=\"panel-body myelement\">
                                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/futbol (1).jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />
                                </a>
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
        return "modulomonitoresmonitoresBundle:Publica:recintoPublico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  76 => 26,  65 => 18,  58 => 14,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
