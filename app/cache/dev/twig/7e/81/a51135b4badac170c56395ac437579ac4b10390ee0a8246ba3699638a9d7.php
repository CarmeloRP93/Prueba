<?php

/* moduloclientesclienteBundle::main.html.twig */
class __TwigTemplate_7e81a51135b4badac170c56395ac437579ac4b10390ee0a8246ba3699638a9d7 extends Twig_Template
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
        echo "    <nav class=\"navbar navbar-default\" role=\"navigation\">
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

                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reservas <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_reservasClientes");
        echo "\">Mis reservas</a></li>
                    </ul>
                </li>

                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_canchasClientes");
        echo "\">Canchas</a></li>

                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Competiciones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_competicionesClientes");
        echo "\"> Mis competiciones </a></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_equiposClientes");
        echo "\"> Mis equipos </a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_misSesionesClientes");
        echo "\"> Mis sesiones </a></li>
                        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_sesionesClientes");
        echo "\">Sesiones</a></li>                    </ul>
                </li>

                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_pagoSesion");
        echo "\">Pagar</a></li>
            </ul>

            ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 53
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href = #>Perfil</a></li>
                    <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\">Logout</a></li>
                </ul>
            ";
        }
        // line 58
        echo "
            <form class=\"navbar-form navbar-center\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Nombre, cancha...\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\" style=\"margin-bottom: 0px\">Buscar</button>

            </form>
        </div>
    </nav>
";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 72
        $this->displayBlock('contenido', $context, $blocks);
        // line 74
        echo "        </div>

    </div>

";
    }

    // line 72
    public function block_contenido($context, array $blocks = array())
    {
        // line 73
        echo "            ";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 73,  165 => 72,  157 => 74,  155 => 72,  151 => 70,  148 => 69,  134 => 58,  128 => 55,  124 => 53,  122 => 52,  116 => 49,  110 => 46,  106 => 45,  96 => 38,  92 => 37,  84 => 32,  77 => 28,  54 => 7,  51 => 6,  46 => 4,  40 => 2,  11 => 1,);
    }
}
