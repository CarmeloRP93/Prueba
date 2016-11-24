<?php

/* CriveroPruebaBundle:Default:cliente.html.twig */
class __TwigTemplate_2f235d9bb283ce558f3a14ff29f79998bd99676b8d8fa394bebb2d4e3d6e005d extends Twig_Template
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"usuardesc\">
        <div class=\"accionesExclus\">
            <button>Enviar mensaje</button>
            <button>Dar de baja</button>
        </div>
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</h1>
        <div class=\"usuarfot\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/no-image-found.png"), "html", null, true);
        echo "\" style=\"float: left; width: 100%;\" />        
        </div>
        <div class=\"usuardat\">
            <div id=\"resersiones\">
                <div>
                    <h4>Reservas: </h4> 
                    <ul id=\"reservas\">
                        <li>
                            <div class=\"acciones\">
                                <button>Modificar</button>
                                <button>Cancelar</button>
                            </div>
                            <p>Cancha 01 - 01/11/2016</p>
                        </li>
                        <li>
                            <div class=\"acciones\">
                                <button>Modificar</button>
                                <button>Cancelar</button>
                            </div>
                            <p>Cancha 02 - 05/11/2016</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>Sesiones: </h4> 
                    <ul id=\"sesiones\">
                        <li>
                            <div class=\"acciones\">
                                <button>Modificar</button>
                                <button>Cancelar</button>
                            </div>
                            <p>Bodycombat - 06/11/2016</p>
                        </li>
                        <li>
                            <div class=\"acciones\">
                                <button>Modificar</button>
                                <button>Cancelar</button>
                            </div>
                            <p>Zumba - 08/11/2016</p>
                        </li>
                    </ul>
                </div>
            </div>
            <h4>Sexo: </h4> <p>Masculino</p>
            <h4>F.Nacimiento: </h4> <p>08/10/1993</p>
            <h4>Registro: </h4> <p>11/10/2016</p>
        </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  55 => 10,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
