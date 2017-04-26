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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <div class=\"panel panel-default text-center\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            ";
        // line 11
        echo "                          <h3 style=\"font-weight: 600\">\"Foto\"</h3>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <h3 style=\"font-weight: 600\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "nombre", array()), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">  
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                            <h4>Nº de Dorsal:</h4> <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "dorsal", array()), "html", null, true);
        echo "</p>
                            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "idEquipo", array()))) {
                // line 23
                echo "                                <h4>Equipo al que pertenece:</h4><p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "</p>
                                ";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
                foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                    if (($this->getAttribute($context["equipo"], "idCompeticion", array()) == $this->getAttribute($context["competicion"], "id", array()))) {
                        // line 25
                        echo "                                    <h4>Competición en la que participa: </h4><p>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                        echo "</p>
                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 \" >
                            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "idEquipo", array()))) {
                // line 31
                echo "                                <h4>Nº de partidos en los que su equipo ha disputado:</h4><p>";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["equipo"], "victorias", array()) + $this->getAttribute($context["equipo"], "empates", array())) + $this->getAttribute($context["equipo"], "derrotas", array())), "html", null, true);
                echo "</p>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            <h4>Incidencias:</h4><p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "incidencia", array()), "html", null, true);
        echo "</p>
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
        return "CriveroPruebaBundle:Competiciones:jugador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  116 => 31,  111 => 30,  107 => 28,  100 => 27,  90 => 25,  85 => 24,  80 => 23,  75 => 22,  71 => 21,  61 => 14,  56 => 11,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
