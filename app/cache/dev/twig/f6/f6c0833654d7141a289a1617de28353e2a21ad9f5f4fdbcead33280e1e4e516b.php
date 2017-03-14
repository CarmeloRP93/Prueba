<?php

/* CriveroPruebaBundle::main.html.twig */
class __TwigTemplate_169196c2e7f9a3000d28bc569cf2245be4ea9c71cf159a91e366c58df8fba960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CriveroPruebaBundle::main.html.twig", 1);
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
        echo "        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" >
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


            <div class=\"collapse navbar-collapse navbar-ex1-collapse \" >
                <ul class=\"nav navbar-nav \">
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Usuarios <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_clientes");
        echo "\">Clientes</a></li>
                              <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_monitores");
        echo "\">Monitores</a></li>
                            </ul>
                     </li>
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Instalaciones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_canchas");
        echo "\">Canchas</a></li>
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_aulas");
        echo "\">Aulas</a></li>
                            </ul>
                    </li>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_reservas");
        echo "\">Reservas</a></li>
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Competiciones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_competiciones");
        echo "\">Competiciones </a></li>
                              <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_equipos");
        echo "\">Equipos</a></li>
                              <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_jugadores");
        echo "\">Jugadores</a></li>
                            </ul>
                     </li>
                     <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_sesiones");
        echo "\">S.Generales</a></li>
                              <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("crivero_prueba_dedicadas");
        echo "\">S.Dedicadas</a></li>
                            </ul>
                     </li>
                </ul>
                
                ";
        // line 56
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href = \"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/user-128.png"), "html", null, true);
            echo "\" style=\"width: 50%;\" /></a></li>
                        <li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crivero_prueba_logout");
            echo "\" style=\"margin-right: 12px\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/logout-128.png"), "html", null, true);
            echo "\" style=\"width: 18px;\" /></a></li>
                    </ul>
                ";
        }
        // line 62
        echo "
                <form method=\"GET\" class=\"navbar-form navbar-center\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"query\" class=\"form-control\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" 
                               placeholder=\"Buscar usuarios, reservas\" required>
                    </div>
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Buscar\">
                </form>
            </div>
        </nav>
";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            ";
        // line 76
        $this->displayBlock('contenido', $context, $blocks);
        // line 78
        echo "        </div>

    </div>

";
    }

    // line 76
    public function block_contenido($context, array $blocks = array())
    {
        // line 77
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
        return array (  183 => 77,  180 => 76,  172 => 78,  170 => 76,  166 => 74,  163 => 73,  151 => 65,  146 => 62,  138 => 59,  132 => 58,  129 => 57,  127 => 56,  119 => 51,  115 => 50,  106 => 44,  102 => 43,  98 => 42,  91 => 38,  85 => 35,  81 => 34,  72 => 28,  68 => 27,  46 => 7,  43 => 6,  38 => 4,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %} Vista desde main {% endblock %}

{% block header %}{% endblock %}

{% block navegation %}
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" >
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


            <div class=\"collapse navbar-collapse navbar-ex1-collapse \" >
                <ul class=\"nav navbar-nav \">
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Usuarios <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"{{url('crivero_prueba_clientes')}}\">Clientes</a></li>
                              <li><a href=\"{{url('crivero_prueba_monitores')}}\">Monitores</a></li>
                            </ul>
                     </li>
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Instalaciones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{url('crivero_prueba_canchas')}}\">Canchas</a></li>
                                <li><a href=\"{{url('crivero_prueba_aulas')}}\">Aulas</a></li>
                            </ul>
                    </li>
                    <li><a href=\"{{url('crivero_prueba_reservas')}}\">Reservas</a></li>
                    <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Competiciones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"{{url('crivero_prueba_competiciones')}}\">Competiciones </a></li>
                              <li><a href=\"{{url('crivero_prueba_equipos')}}\">Equipos</a></li>
                              <li><a href=\"{{url('crivero_prueba_jugadores')}}\">Jugadores</a></li>
                            </ul>
                     </li>
                     <li class=\"dropdown\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sesiones <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                              <li><a href=\"{{url('crivero_prueba_sesiones')}}\">S.Generales</a></li>
                              <li><a href=\"{{url('crivero_prueba_dedicadas')}}\">S.Dedicadas</a></li>
                            </ul>
                     </li>
                </ul>
                
                {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href = \"{{path('crivero_prueba_editarUsuario', { id: app.user.id })}}\"><img src=\"{{asset('images/user-128.png')}}\" style=\"width: 50%;\" /></a></li>
                        <li><a href=\"{{path('crivero_prueba_logout')}}\" style=\"margin-right: 12px\"><img src=\"{{asset('images/logout-128.png')}}\" style=\"width: 18px;\" /></a></li>
                    </ul>
                {% endif %}

                <form method=\"GET\" class=\"navbar-form navbar-center\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"query\" class=\"form-control\" value=\"{{app.request.get('query')}}\" 
                               placeholder=\"Buscar usuarios, reservas\" required>
                    </div>
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Buscar\">
                </form>
            </div>
        </nav>
{% endblock %}
{% block body %}
    <div id=\"pagina\" class=\"cfix\">
        <div id =\"contenido\">
            {% block contenido %}
            {% endblock %}
        </div>

    </div>

{% endblock %}", "CriveroPruebaBundle::main.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/main.html.twig");
    }
}
