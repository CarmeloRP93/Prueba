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


            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_reservasClientes");
        echo "\">Reservas</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_canchasClientes");
        echo "\">Canchas</a></li>
                    
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Torneos <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_torneosClientes");
        echo "\"> Mis torneos </a></li>
                            </ul>
                     </li>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_sesionesClientes");
        echo "\">Sesiones</a></li>
                </ul>

                <form class=\"navbar-form navbar-center\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Nombre, cancha...\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
 
                    <a href = #>Perfil</a>
                    <a href = \"";
        // line 48
        echo $this->env->getExtension('routing')->getUrl("crivero_prueba_home");
        echo "\">Log out</a>
                </form>
            </div>
        </nav>
";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 56
        $this->displayBlock('contenido', $context, $blocks);
        // line 58
        echo "        </div>

    </div>

";
    }

    // line 56
    public function block_contenido($context, array $blocks = array())
    {
        // line 57
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
        return array (  147 => 57,  144 => 56,  136 => 58,  134 => 56,  130 => 54,  127 => 53,  118 => 48,  105 => 38,  99 => 35,  91 => 30,  87 => 29,  68 => 12,  65 => 11,  60 => 8,  57 => 7,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
