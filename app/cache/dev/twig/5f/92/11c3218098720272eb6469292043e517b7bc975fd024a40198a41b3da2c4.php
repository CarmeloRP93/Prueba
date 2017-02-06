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
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Instalaciones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_aulas");
        echo "\">Aulas</a></li>
                            </ul>
                    </li>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_reservas");
        echo "\">Reservas</a></li>
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Competiciones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_competiciones");
        echo "\">Competiciones </a></li>
                              <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_equipos");
        echo "\">Equipos</a></li>
                              <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_jugadores");
        echo "\">Jugadores</a></li>
                            </ul>
                     </li>
                     <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_sesiones");
        echo "\">S.Generales</a></li>
                              <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_dedicadas");
        echo "\">S.Dedicadas</a></li>
                            </ul>
                     </li>
                </ul>
                
                ";
        // line 56
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href = #>Perfil</a></li>
                        <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\">Logout</a></li>
                    </ul>
                ";
        }
        // line 62
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

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 75
        $this->displayBlock('contenido', $context, $blocks);
        // line 77
        echo "        </div>

    </div>

";
    }

    // line 75
    public function block_contenido($context, array $blocks = array())
    {
        // line 76
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
        return array (  180 => 76,  177 => 75,  169 => 77,  167 => 75,  163 => 73,  160 => 72,  147 => 62,  141 => 59,  137 => 57,  135 => 56,  127 => 51,  123 => 50,  114 => 44,  110 => 43,  106 => 42,  99 => 38,  93 => 35,  89 => 34,  80 => 28,  76 => 27,  54 => 7,  51 => 6,  46 => 4,  40 => 2,  11 => 1,);
    }
}
