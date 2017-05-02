<?php

/* moduloclientesclienteBundle:Usuarios:miPerfil.html.twig */
class __TwigTemplate_381ae7ebbd93e6c077a7976a00ccfa9ebcc2fdc41a282abca8dbb69f27dbab72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("moduloclientesclienteBundle::main.html.twig");
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
        return "moduloclientesclienteBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Cliente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\"><br><br>
        <div class=\"col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3>";
        // line 13
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array())), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" style=\"margin-top: 18px;\">
                            <a href = \"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_editarPerfil");
        echo "\" class=\"btn btn-default active\">Editar</a>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body text-center\">    
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Nombre </h4> <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Fecha nacimiento </h4> <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Telefono </h4> <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Registro </h4> <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "registro", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <h4>E-mail </h4> <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "</p>
                    </div>

                    <div style=\"display: inline-grid\">
                        <form class=\"btn-group-vertical\" action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajearAdministradorCliente");
        echo "\" method=\"post\">
                            <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-primary\">Mensaje a administrador</button>
                            <input type=\"hidden\" class=\"btn\">
                        </form>
                        <form class=\"btn-group-vertical\" action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_nuevo");
        echo "\" method=\"post\">
                            <input type=\"hidden\" class=\"btn\">
                            <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-info\">Ver mis pagos</button>
                            <input type=\"hidden\" class=\"btn\">
                        </form>
                        <form class=\"btn-group-vertical\" action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_logout");
        echo "\" method=\"post\">
                            <input type=\"hidden\" class=\"btn\">
                            <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-danger\">Salir de sesión</button>
                            <input type=\"hidden\" class=\"btn\">
                        </form>
                        <form class=\"btn-group-vertical\" method=\"post\">
                            <input type=\"hidden\" class=\"btn\">
                            <button type=\"submit\" style=\"margin-bottom: 0\" class=\"btn btn-danger\">Borrar mi cuenta</button>
                        </form>
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
        return "moduloclientesclienteBundle:Usuarios:miPerfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 52,  120 => 47,  113 => 43,  106 => 39,  99 => 35,  93 => 32,  85 => 27,  79 => 24,  68 => 16,  62 => 13,  56 => 10,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
