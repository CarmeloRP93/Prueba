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

    // line 4
    public function block_header($context, array $blocks = array())
    {
    }

    // line 6
    public function block_navegation($context, array $blocks = array())
    {
        // line 7
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
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Usuarios <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
                              <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
                            </ul>
                     </li>
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_competiciones");
        echo "\">Competiciones</a></li>
                     <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_sesiones");
        echo "\">S.Generales</a></li>
                              <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_dedicadas");
        echo "\">S.Dedicadas</a></li>
                            </ul>
                     </li>
                </ul>
                
                ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href = #>Perfil</a></li>
                        <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\">Logout</a></li>
                    </ul>
                ";
        }
        // line 48
        echo "
                <form class=\"navbar-form navbar-center\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Nombre, cancha...\" style=\"wi\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\" style=\"\">Buscar</button>
                </form>
            </div>
        </nav>
";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 61
        $this->displayBlock('contenido', $context, $blocks);
        // line 63
        echo "        </div>

    </div>

";
    }

    // line 61
    public function block_contenido($context, array $blocks = array())
    {
        // line 62
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
        return array (  154 => 62,  151 => 61,  143 => 63,  141 => 61,  137 => 59,  134 => 58,  121 => 48,  115 => 45,  111 => 43,  109 => 42,  101 => 37,  97 => 36,  90 => 32,  86 => 31,  80 => 28,  76 => 27,  54 => 7,  51 => 6,  46 => 4,  40 => 2,  11 => 1,);
    }
}
