<?php

/* CriveroPruebaBundle:Usuarios:perfil.html.twig */
class __TwigTemplate_238f51906398213b4f2d0f16b3828d2ce5c8045c6551f87076b9aa66e1adb9c9 extends Twig_Template
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
        echo " Perfil ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
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
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3 style=\"font-weight: 600\">Perfil</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" style=\"margin-top: 18px;\">
                            <a href = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default active\">Editar</a>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">  

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">

                            <h4>Nombre </h4> <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</p>
                            <h4>Fecha nacimiento </h4> <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                            <h4>E-mail </h4> <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "</p>
                            <h4>Teléfono </h4> <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "</p>
                            <h4>Rol</h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol"))), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            <h4>Nombre de usuario</h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</p>        
                            <h4>Registro </h4> <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                            ";
        // line 37
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "tipo", array()) == 1)) {
            // line 38
            echo "                                <br>
                                <div style=\"display: inline-grid\">
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_enviarMensaje");
            echo "\" method=\"post\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-primary\">Enviar mensaje</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_nuevo");
            echo "\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-info\">Nuevo usuario</button>
                                        <input type=\"hidden\" class=\"btn\">
                                    </form>
                                    <form class=\"btn-group-vertical\" action=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
            echo "\" method=\"post\">
                                        <input type=\"hidden\" class=\"btn\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Salir de sesión</button>
                                    </form>
                                </div>

                            ";
        }
        // line 56
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  130 => 49,  122 => 44,  115 => 40,  111 => 38,  109 => 37,  105 => 36,  101 => 35,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  66 => 18,  57 => 12,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
