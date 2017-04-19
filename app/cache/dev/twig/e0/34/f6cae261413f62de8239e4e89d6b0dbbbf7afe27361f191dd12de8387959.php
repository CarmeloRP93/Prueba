<?php

/* CriveroPruebaBundle:Usuarios:monitor.html.twig */
class __TwigTemplate_e034f6cae261413f62de8239e4e89d6b0dbbbf7afe27361f191dd12de8387959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
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
        return "CriveroPruebaBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Monitor ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "username", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"usuardesc\">
            <div class=\"accionesExclus\">
                <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_enviarMensaje");
        echo "\" method=\"post\" class=\"\">
                    <button style=\"padding-bottom: 26px\" type=\"submit\" class=\"btn btn-primary\">Enviar mensaje</button>
                </form>
                <p>";
        // line 11
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar usuario"));
        echo "</p>
            </div>
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "username", array()), "html", null, true);
        echo "</h1>
            <div class=\"usuarfot\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "imagen", array()))), "html", null, true);
        echo "\" style=\"float: left; width: 100%;\" />        
            </div>
            <div class=\"usuardat\">
                <div id=\"resersiones\">
                    ";
        // line 19
        if (((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")) != null)) {
            // line 20
            echo "                        <div>
                            <h4>Sesiones: </h4> 
                            <form action=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones_monitor", array("id" => $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                <button type=\"submit\" class=\"btn btn-success\">Ver sesiones</button>
                            </form>
                            ";
            // line 32
            echo "                        </div>
                    ";
        }
        // line 34
        echo "                </div>
                <h4>Nombre: </h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
        echo "</p>
                <h4>F.Nacimiento: </h4> <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                <h4>Telefono: </h4> <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "telefono", array()), "html", null, true);
        echo "</p>
                <h4>Registro: </h4> <p>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:monitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  103 => 37,  99 => 36,  95 => 35,  92 => 34,  88 => 32,  82 => 22,  78 => 20,  76 => 19,  69 => 15,  64 => 13,  59 => 11,  53 => 8,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
