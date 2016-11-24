<?php

/* modulomonitoresmonitoresBundle::main.html.twig */
class __TwigTemplate_96dfff5c879ca926ede3e64c44f27efedd39c3a8d747b7e74cb14ca4ded95d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'navegation' => array($this, 'block_navegation'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Vista desde main ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"logout\">
        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("modulomonitores_monitores_homeMonitores");
        echo "\">
            <button>Log out</button>
        </form>
    </div>
    <div class=\"perfil\">
        <form>
            <button>Perfil</button>
        </form>
    </div>
";
    }

    // line 20
    public function block_navegation($context, array $blocks = array())
    {
        // line 21
        echo " <nav class=\"navbar navbar-default\" role=\"navigation\">
            <!-- El logotipo y el icono que despliega el menú se agrupan
                 para mostrarlos mejor en los dispositivos móviles -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Desplegar navegación</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Logotipo</a>
            </div>


            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
                    <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_torneos");
        echo "\">Torneos</a></li>
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_sesiones");
        echo "\">Sesiones</a></li>
                </ul>

                <form class=\"navbar-form navbar-center\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Nombre, cancha...\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
 
                    <a href = #>Perfil</a>
                    <a href = \"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_home");
        echo "\">Log out</a>
                </form>
            </div>
        </nav>
";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 60
        $this->displayBlock('contenido', $context, $blocks);
        // line 62
        echo "        </div>

    </div>

";
    }

    // line 60
    public function block_contenido($context, array $blocks = array())
    {
        // line 61
        echo "            ";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  154 => 60,  146 => 62,  144 => 60,  140 => 58,  137 => 57,  128 => 52,  115 => 42,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  80 => 21,  77 => 20,  63 => 9,  60 => 8,  57 => 7,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
