<?php

/* CriveroPruebaBundle:Competiciones:jugador.html.twig */
class __TwigTemplate_751b285bf7c9683aefcfa1631fb5497a6fe2edd5c60166842ae82788277ed39d extends Twig_Template
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
        echo " Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Información detallada de: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "nombre", array()), "html", null, true);
        echo "</h1>
    <ul>
        <li>Nº de Dorsal : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "dorsal", array()), "html", null, true);
        echo "</li>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "idEquipo", array()))) {
                // line 10
                echo "            <li>Equipo al que pertenece: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "</li>
            ";
                // line 11
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
                foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                    if (($this->getAttribute($context["equipo"], "idCompeticion", array()) == $this->getAttribute($context["competicion"], "id", array()))) {
                        // line 12
                        echo "                <li>Competición en la que participa: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                        echo "</li>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "idEquipo", array()))) {
                // line 16
                echo "            <li>Nº de partidos en los que su equipo ha disputado:";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["equipo"], "victorias", array()) + $this->getAttribute($context["equipo"], "empates", array())) + $this->getAttribute($context["equipo"], "derrotas", array())), "html", null, true);
                echo "</li>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <li>Incidencias:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "incidencia", array()), "html", null, true);
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:jugador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 18,  96 => 16,  90 => 15,  83 => 14,  73 => 12,  68 => 11,  63 => 10,  58 => 9,  54 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
