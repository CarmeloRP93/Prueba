<?php

/* modulomonitoresmonitoresBundle:Perfil:miperfilm.html.twig */
class __TwigTemplate_d6f8cde60035f17bb3cfd25fccbfd5fb2bd2d4373fb025a07a443cbe91eb82dc extends Twig_Template
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
        echo " Mi perfil ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
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
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3>Mi perfil</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" style=\"margin-top: 18px;\">
                            <a href = \"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_editarmiperfilm");
        echo "\" class=\"btn btn-default active\">Editar</a>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">  

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                            <h4>Nombre </h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
        echo "</p>
                            <h4>Fecha nacimiento </h4> <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                            <h4>E-mail </h4> <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "email", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            <h4>Nombre de usuario</h4> <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "username", array()), "html", null, true);
        echo "</p>        
                            <h4>Registro </h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                            <h4>Teléfono </h4> <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "telefono", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div style=\"display: inline-grid\">
                        <form class=\"btn-group-vertical\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_mensajearAdministradorMonitor");
        echo "\" method=\"post\">
                            <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-primary\">Mensaje a administrador</button>
                            <input type=\"hidden\" class=\"btn\">
                        </form>

                        <form class=\"btn-group-vertical\" action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
        echo "\" method=\"post\">
                            <input type=\"hidden\" class=\"btn\">
                            <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-danger\">Salir de sesión</button>
                            <input type=\"hidden\" class=\"btn\">
                        </form>

                    </div> 
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Perfil:miperfilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  107 => 37,  100 => 33,  96 => 32,  92 => 31,  86 => 28,  82 => 27,  78 => 26,  66 => 17,  57 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
