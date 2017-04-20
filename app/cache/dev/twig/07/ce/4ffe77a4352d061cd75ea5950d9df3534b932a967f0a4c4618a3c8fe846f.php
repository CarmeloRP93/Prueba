<?php

/* CriveroPruebaBundle:Usuarios:cliente.html.twig */
class __TwigTemplate_07ce4ffe77a4352d061cd75ea5950d9df3534b932a967f0a4c4618a3c8fe846f extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) ? (("Cliente " . $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username", array()))) : ("Mi Perfil")), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"usuardesc container\">
        <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\">
                    <h3>";
        // line 9
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) ? ($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username", array())) : ("Mi Perfil")), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"usuarfot\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "imagen", array()))), "html", null, true);
        echo "\" style=\"float: left; width: 120%;\" />        
                        <a href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default active\">Editar</a>
                    </div>
                    <div class=\"usuardat\">
                        ";
        // line 17
        if (($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 18
            echo "                            <form action=\"";
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_enviarMensaje");
            echo "\" method=\"post\" class=\"form-signin\">
                                <button type=\"submit\" class=\"btn btn-primary\">Enviar mensaje</button>
                            </form>
                        ";
        }
        // line 22
        echo "
                    <h4>Nombre </h4> <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</p>
                    <h4>Aniversario </h4> <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                    <h4>Telefono </h4> <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>
                    <h4>Registro </h4> <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>

                    <div>
                        ";
        // line 29
        if (((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")) != null)) {
            // line 30
            echo "                            <div>
                                <h4>Reservas: </h4> 
                                <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_reservas_cliente", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ver reservas</button>
                                </form>
                           ";
            // line 47
            echo "                            </div>
                        ";
        }
        // line 49
        echo "
                        ";
        // line 50
        if (($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()) != null)) {
            // line 51
            echo "                            <div>
                                <h4>Sesiones: </h4> 
                                <form action=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesiones_cliente", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"form-signin\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ver sesiones</button>
                                </form>
                                ";
            // line 63
            echo "                            </div>
                        ";
        }
        // line 65
        echo "                    </div><br>
                    </div>
                    ";
        // line 67
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))) {
            // line 68
            echo "                        <div class=\"accionesExclus text-center\">       
                            ";
            // line 69
            echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar usuario"));
            echo "
                        </div>
                    ";
        }
        // line 72
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 72,  146 => 69,  143 => 68,  141 => 67,  137 => 65,  133 => 63,  127 => 53,  123 => 51,  121 => 50,  118 => 49,  114 => 47,  108 => 32,  104 => 30,  102 => 29,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  81 => 22,  73 => 18,  71 => 17,  65 => 14,  61 => 13,  54 => 9,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
