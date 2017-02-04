<?php

/* CriveroPruebaBundle:Default:cliente.html.twig */
class __TwigTemplate_ed1cd3c71e6db2954e6e411f6f328c8e31332870ab75cc8cac58918598ec4a84 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"usuarfot\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/no-image-found.png"), "html", null, true);
        echo "\" style=\"float: left; width: 120%;\" />        
                    </div>
                    <div class=\"usuardat text-center\">
                        <button type=\"button\" class=\"btn btn-primary\">Enviar mensaje</button>

                    </div>
                    <h4>F.Nacimiento: </h4> <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
                    <h4>Registro: </h4> <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "registro", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>
                    <h4>Telefono: </h4> <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>

                    <div>
                        ";
        // line 24
        if (($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "reservas", array()) != null)) {
            // line 25
            echo "                            <div>
                                <h4>Reservas: </h4> 
                                <ul id=\"reservas\">
                                    ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 29
                echo "                                        <li>
                                            <div class=\"acciones\">
                                                <button>Cancelar</button>
                                            </div>
                                            <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cancha", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
                echo "</p>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 39
        echo "
                        ";
        // line 40
        if (($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()) != null)) {
            // line 41
            echo "                            <div>
                                <h4>Sesiones: </h4> 
                                <ul id=\"sesiones\">
                                    ";
            // line 44
            $context["sesiones"] = twig_split_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()), "**");
            // line 45
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "                                        <li>
                                            <div class=\"acciones\">
                                                <button>Cancelar</button>
                                            </div>
                                            <p>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")), $context["i"], array(), "array"), "html", null, true);
                echo "</p>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 56
        echo "                    </div><br>
                    <div class=\"accionesExclus text-center\">       
                        ";
        // line 58
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
        echo "
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
        return "CriveroPruebaBundle:Default:cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  154 => 56,  149 => 53,  140 => 50,  134 => 46,  129 => 45,  127 => 44,  122 => 41,  120 => 40,  117 => 39,  112 => 36,  101 => 33,  95 => 29,  91 => 28,  86 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 19,  61 => 13,  54 => 9,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
