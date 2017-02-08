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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "nombre", array()), "html", null, true);
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
        if (($this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "sesiones", array()) != null)) {
            // line 17
            echo "                <div>
                    <h4>Sesiones: </h4> 
                    <ul id=\"sesiones\">
                        ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sesiones"]) ? $context["sesiones"] : $this->getContext($context, "sesiones")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 21
                echo "                            <li>
                                <p>Aula ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "aula", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "horario", array()), "html", null, true);
                echo "</p>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    </ul>
                </div>
                    ";
        }
        // line 28
        echo "            </div>
            <h4>F.Nacimiento: </h4> <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "fNacimiento", array()), "html", null, true);
        echo "</p>
            <h4>Registro: </h4> <p>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "registro", array()), "d/m/Y H:i"), "html", null, true);
        echo "</p>
            <h4>Telefono: </h4> <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monitor"]) ? $context["monitor"] : $this->getContext($context, "monitor")), "telefono", array()), "html", null, true);
        echo "</p>
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
        return array (  113 => 31,  109 => 30,  105 => 29,  102 => 28,  97 => 25,  84 => 22,  81 => 21,  77 => 20,  72 => 17,  70 => 16,  63 => 12,  58 => 10,  53 => 8,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
