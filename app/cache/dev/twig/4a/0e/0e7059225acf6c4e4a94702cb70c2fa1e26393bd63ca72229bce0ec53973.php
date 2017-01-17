<?php

/* CriveroPruebaBundle:Default:equipo.html.twig */
class __TwigTemplate_4a0e0e7059225acf6c4e4a94702cb70c2fa1e26393bd63ca72229bce0ec53973 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h1>Deporte: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "deporte", array()), "html", null, true);
        echo "</h1>
        <h2>Detalles del Equipo. ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo "</h2>
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th> Nombre </th>
                            <th> Primer Apellido  </th>
                            <th> Segundo Apellido  </th>
                            <th> Dorsal </th>
                            <th> Incidencia </th>
                        </tr>
                    </thead>
                    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 20
            echo "                        ";
            if (($this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                // line 21
                echo "                        <tr>
                            <td>  ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                echo "  </td>
                            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "primerApellido", array()), "html", null, true);
                echo " </td>
                            <td>   ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "segundoApellido", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "Dorsal", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                echo "   </td>
                        </tr>
                        ";
            }
            // line 29
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </table>
            </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:equipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  102 => 29,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  77 => 21,  74 => 20,  70 => 19,  55 => 7,  51 => 6,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
