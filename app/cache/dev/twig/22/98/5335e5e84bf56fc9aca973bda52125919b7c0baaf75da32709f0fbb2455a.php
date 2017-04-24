<?php

/* moduloclientesclienteBundle:Competiciones:partidoClientes.html.twig */
class __TwigTemplate_22985335e5e84bf56fc9aca973bda52125919b7c0baaf75da32709f0fbb2455a extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Partido ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo "</h1>
            <h2 class=\"t1\">Partido entre ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
        echo " VS ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
        echo "</h2>
        </div>
        <div>
            ";
        // line 12
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Pendiente")) {
            // line 13
            echo "                <ul>
                    <li>El partido esta previsto para: ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaInicio", array()), "d/m/Y H:i:s"), "html", null, true);
            echo " en la cancha ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
            echo "
                    <li> El ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo " clasificado en ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "clasificacion", array()), "html", null, true);
            echo "º
                        puesto VS ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo " clasificado en ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "clasificacion", array()), "html", null, true);
            echo "º puesto</li>
                    <li>Árbitro designado para el encuentro: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</li>
                </ul>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Jugandose")) {
            // line 21
            echo "                <ul>
                    <li> El ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo " clasificado en ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "clasificacion", array()), "html", null, true);
            echo "º
                        puesto VS ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo " clasificado en ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "clasificacion", array()), "html", null, true);
            echo "º puesto</li>
                    <li>Arbitro pitando: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</li>
                    <li>Los jugadores del ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</li>
                    ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 27
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo " con el dorsal ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</p>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    <li>Los jugadores del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</li>
                    ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 31
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo " con el dorsal ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</p>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </ul>
            ";
        }
        // line 35
        echo "            ";
        if (($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "estadoPartido", array()) == "Finalizado")) {
            // line 36
            echo "                <ul>
                    <li>Clasificación de ambos en la competición</li>
                    <li>Árbitro asignado al encuentro: ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "arbitro", array()), "html", null, true);
            echo "</li>
                    <li>Los jugadores del ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "nombre", array()), "html", null, true);
            echo "</li>
                    ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoLocal"]) ? $context["equipoLocal"] : $this->getContext($context, "equipoLocal")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 41
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo " con el dorsal ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo "</p>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    <li>Los jugadores del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "nombre", array()), "html", null, true);
            echo "</li>
                    ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                if (($this->getAttribute((isset($context["equipoVisitante"]) ? $context["equipoVisitante"] : $this->getContext($context, "equipoVisitante")), "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 45
                    echo "                        <p>Nombre: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                    echo " Dorsal: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
                    echo " Incidencias: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                    echo "</p>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    <li>Resultado del encuentro: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultado", array()), "html", null, true);
            echo "</li>
                </ul>
            ";
        }
        // line 50
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:partidoClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 50,  218 => 47,  204 => 45,  199 => 44,  194 => 43,  182 => 41,  177 => 40,  173 => 39,  169 => 38,  165 => 36,  162 => 35,  158 => 33,  146 => 31,  141 => 30,  136 => 29,  124 => 27,  119 => 26,  115 => 25,  111 => 24,  105 => 23,  99 => 22,  96 => 21,  93 => 20,  87 => 17,  81 => 16,  75 => 15,  69 => 14,  66 => 13,  64 => 12,  56 => 9,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
