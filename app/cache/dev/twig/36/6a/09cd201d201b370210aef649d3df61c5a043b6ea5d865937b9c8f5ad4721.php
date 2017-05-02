<?php

/* modulomonitoresmonitoresBundle:Participantes:participante.html.twig */
class __TwigTemplate_366a09cd201d201b370210aef649d3df61c5a043b6ea5d865937b9c8f5ad4721 extends Twig_Template
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
        echo " Cliente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-circle\" style=\"width:60px;\" />        
                        </div>
                        <div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
                            <h3>";
        // line 13
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array())), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>E-mail </h4> <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "email", array()), "html", null, true);
        echo "</p>
                            <h4>Fecha nacimiento </h4> <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Teléfono </h4> <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>
                            <h4>Sesiones en activo</h4>
                            <div>
                                <ul style=\"list-style: none\">
                                    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
        foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
            // line 29
            echo "                                        ";
            if (($this->getAttribute($context["sesion"], "estado", array()) == "validada")) {
                // line 30
                echo "                                            <li>
                                                ";
                // line 31
                if (($this->getAttribute($context["sesion"], "cliente", array()) == "normal")) {
                    // line 32
                    echo "                                                    <p>Sesión";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                    echo " 
                                                        <a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">
                                                            Ver más información
                                                        </a>
                                                    </p>
                                                ";
                } else {
                    // line 38
                    echo "                                                    <p>Sesión";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                    echo " 
                                                        <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionDedicada", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">
                                                            Ver más información
                                                        </a>
                                                    </p>
                                                </li>
                                            ";
                }
                // line 45
                echo "                                        ";
            }
            // line 46
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                </ul>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, ((("http://localhost/Prueba/web/app_dev.php/expulsar/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/") . (isset($context["idUsuario"]) ? $context["idUsuario"] : $this->getContext($context, "idUsuario"))), "html", null, true);
        echo "\"
                                   class=\"btn btn-danger text-center center-block img-responsive\" style=\"width: 180px;\">Expulsar</a>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                                <a class=\"btn btn-default\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_enviarMensajeCliente", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\">Enviar mensaje</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, (("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/verParticipantes"), "html", null, true);
        echo "\" class=\"btn btn-default\">Volver a lista de participantes</a>
        </div>
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Participantes:participante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  151 => 56,  144 => 52,  137 => 47,  131 => 46,  128 => 45,  119 => 39,  114 => 38,  106 => 33,  101 => 32,  99 => 31,  96 => 30,  93 => 29,  89 => 28,  82 => 24,  76 => 21,  72 => 20,  62 => 13,  56 => 10,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
