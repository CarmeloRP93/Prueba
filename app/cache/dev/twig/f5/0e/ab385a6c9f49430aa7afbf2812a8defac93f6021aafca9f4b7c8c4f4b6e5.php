<?php

/* CriveroPruebaBundle:Default:jugadores.html.twig */
class __TwigTemplate_f50eab385a6c9f49430aa7afbf2812a8defac93f6021aafca9f4b7c8c4f4b6e5 extends Twig_Template
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
        echo " Vista de Jugadores ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"buscador\">
    <form>
        <input type=\"search\" name=\"equipo\" placeholder=\"Buscar jugador\"/>
    </form>
</div>
<h1>Listado de Jugadores</h1>
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>1º Apellido</th>
                    <th>2º Apellido</th>
                    <th>Dorsal</th>
                    <th>Incidencia</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 25
            echo "                    <tr>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "primerApellido", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "segundoApellido", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_jugador", array("id" => $this->getAttribute($context["jugador"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                Ver
                            </a>
                            ";
            // line 37
            echo "                            <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:jugadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  96 => 37,  90 => 31,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  70 => 25,  66 => 24,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
