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
        echo "<div class=\"container\">
<h1>Detalles del ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "nombre", array()), "html", null, true);
        echo "</h1>
    ";
        // line 6
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estado", array()) == "Inscripcion")) {
            // line 7
            echo "        <form class=\"form-horizontal\">
            <div class=\"row container-fluid\">
                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                    <label class=\"control-label span7 text-left\">Añadir miembros del equipo</label>
                    <textarea class=\"form-control\" rows=\"5\"></textarea>
                </div>
                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                    <label class=\"control-label span7 text-left\">Delegado del equipo (Persona de contacto)</label>
                    <input class=\"form-control\" type=\"text\" name=\"capitan\"/><br>
                    <label class=\"control-label span7 text-left\">Nombre del equipo</label>
                    <input class=\"form-control\" type=\"text\" name=\"capitan\"/><br>
                </div>
                
                <div class=\"text-center\">
                    <button class=\"btn btn-primary\">Registrar jugadores y equipo </button>
                </div>
            </div>
        </form>
    ";
        }
        // line 26
        echo "    ";
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estado", array()) == "Disponible")) {
            // line 27
            echo "        <h3>Insertar tabla de liga</h3>
            <table class=\"table-striped\">
                <tr>
                    <th>Posición</th>
                    <th>Equipo</th>
                    <th>Puntos</th>
                    <th>Ganados</th>
                    <th>Perdidos</th>
                    <th>Empatados</th>
                    <th>G. a favor</th>
                    <th>G. en contra</th>
                </tr>
                <tr>
                    <td>1º</td>
                    <td>Real Madrid</td>
                    <td>5</td>
                    <td>1</td>
                    <td>5</td>
                    <td>4</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
            </table>
    ";
        }
        // line 51
        echo "</div>
    <div>
        <ul>
        ";
        // line 54
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estado", array()) == "Finalizado")) {
            // line 55
            echo "            <h3>Resumen del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "nombre", array()), "html", null, true);
            echo "</h3>
            ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "equipos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 57
                echo "                <div>
                    <li>";
                // line 58
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
            // line 64
            echo "        ";
        }
        // line 65
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
        return array (  141 => 65,  138 => 64,  126 => 58,  123 => 57,  119 => 56,  114 => 55,  112 => 54,  107 => 51,  81 => 27,  78 => 26,  57 => 7,  55 => 6,  51 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
