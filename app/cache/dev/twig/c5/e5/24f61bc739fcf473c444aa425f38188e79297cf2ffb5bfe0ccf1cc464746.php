<?php

/* moduloclientesclienteBundle:Default:torneoClientes.html.twig */
class __TwigTemplate_c5e524f61bc739fcf473c444aa425f38188e79297cf2ffb5bfe0ccf1cc464746 extends Twig_Template
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
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Detalles del ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "nombre", array()), "html", null, true);
        echo "</h1>
    <div>
    ";
        // line 6
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estado", array()) == "Disponible")) {
            // line 7
            echo "        <form>
            <legend>Añadir miembros del equipo</legend>
            <textarea rows=\"10\"></textarea>
            <p>Delegado del equipo (Persona de contacto)</p>
            <input type=\"text\" name=\"capitan\"/><br>
            <p>Nombre del equipo</p>
            <input type=\"text\" name=\"capitan\"/><br>
            <br>
            <button>Registrar jugadores y equipo </button>
        </form>
    ";
        }
        // line 18
        echo "    </div>
    <div>
        <ul>
        ";
        // line 21
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estado", array()) == "Finalizado")) {
            // line 22
            echo "            <h3>Resumen del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "nombre", array()), "html", null, true);
            echo "</h3>
            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "equipos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 24
                echo "                <div>
                    <li>";
                // line 25
                echo twig_escape_filter($this->env, $context["equipo"], "html", null, true);
                echo "
                        <button>Posicion</button>
                        <button>Datos del equipo</button>
                    </li>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
        }
        // line 32
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Default:torneoClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  100 => 31,  88 => 25,  85 => 24,  81 => 23,  76 => 22,  74 => 21,  69 => 18,  56 => 7,  54 => 6,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
