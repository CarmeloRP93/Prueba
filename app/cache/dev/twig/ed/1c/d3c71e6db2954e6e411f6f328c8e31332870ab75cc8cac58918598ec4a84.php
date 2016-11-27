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
        echo "    <div class=\"usuardesc\">
        <div class=\"accionesExclus\">
            <button>Enviar mensaje</button>
            <p>";
        // line 8
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form"))));
        echo "</p>
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
                ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "reservas", array())) > 0)) {
            // line 17
            echo "                <div>
                    <h4>Reservas: </h4> 
                    <ul id=\"reservas\">
                            ";
            // line 20
            $context["reservas"] = twig_split_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "reservas", array()), "**");
            // line 21
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "                        <li>
                            <div class=\"acciones\">
                                <button>Modificar</button>
                                <button>Cancelar</button>
                            </div>
                            <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")), $context["i"], array(), "array"), "html", null, true);
                echo "</p>
                        </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </ul>
                </div>
                ";
        }
        // line 33
        echo "                
                ";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array())) > 0)) {
            // line 35
            echo "                <div>
                    <h4>Sesiones: </h4> 
                    <ul id=\"sesiones\">
                        ";
            // line 38
            $context["sesiones"] = twig_split_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "sesiones", array()), "**");
            // line 39
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 40
                echo "                        <li>
                            <div class=\"acciones\">
                                <button>Modificar</button>
                                <button>Cancelar</button>
                            </div>
                            <p>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")), $context["i"], array(), "array"), "html", null, true);
                echo "</p>
                        </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    </ul>
                </div>
                ";
        }
        // line 51
        echo "            </div>
            <h4>F.Nacimiento: </h4> <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fNacimiento", array()), "html", null, true);
        echo "</p>
            <h4>Registro: </h4> <p>";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "registro", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>
            <h4>Telefono: </h4> <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</p>
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
        return array (  154 => 54,  150 => 53,  146 => 52,  143 => 51,  138 => 48,  129 => 45,  122 => 40,  117 => 39,  115 => 38,  110 => 35,  108 => 34,  105 => 33,  100 => 30,  91 => 27,  84 => 22,  79 => 21,  77 => 20,  72 => 17,  70 => 16,  63 => 12,  58 => 10,  53 => 8,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
