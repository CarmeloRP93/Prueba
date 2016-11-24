<?php

/* CriveroPruebaBundle::main.html.twig */
class __TwigTemplate_5f9211c3218098720272eb6469292043e517b7bc975fd024a40198a41b3da2c4 extends Twig_Template
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
        echo "
";
    }

    // line 11
    public function block_navegation($context, array $blocks = array())
    {
        // line 12
        echo "        <nav class=\"navbar navbar-default\" role=\"navigation\">
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


            <div class=\"collapse navbar-collapse navbar-ex1-collapse \">
                <ul class=\"nav navbar-nav \">
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_torneos");
        echo "\">Torneos</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_sesiones");
        echo "\">Sesiones</a></li>
                </ul>
                
                ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 37
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href = #>Perfil</a></li>
                        <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\">Logout</a></li>
                    </ul>
                ";
        }
        // line 42
        echo "
                <form class=\"navbar-form navbar-center\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Nombre, cancha...\" style=\"wi\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
                </form>
            </div>
        </nav>
";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 55
        $this->displayBlock('contenido', $context, $blocks);
        // line 57
        echo "        </div>

    </div>

";
    }

    // line 55
    public function block_contenido($context, array $blocks = array())
    {
        // line 56
        echo "            ";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  151 => 55,  143 => 57,  141 => 55,  137 => 53,  134 => 52,  121 => 42,  115 => 39,  111 => 37,  109 => 36,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  68 => 12,  65 => 11,  60 => 8,  57 => 7,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
