<?php

/* CriveroPruebaBundle:Default:torneo.html.twig */
class __TwigTemplate_d080da251adcee457af36e1e95dd5c8efa323f7f1b3f9aa4f9c1c968e022856b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h2>Detalles del Torneo</h2>
        ";
        // line 7
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estadoTorneo", array()) == "Solicitud Presentada")) {
            // line 8
            echo "            <button class=\"btn btn-default\">Aceptar Solicitud</button>
            <button class=\"btn btn-danger\">Rechazar Solicitud </button>
        ";
        }
        // line 11
        echo "        ";
        // line 21
        echo "        
        ";
        // line 22
        if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "estadoTorneo", array()) == "Validado")) {
            // line 23
            echo "            <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "deporte", array()), "html", null, true);
            echo "</h3>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th> Posición </th>
                            <th> Equipo  </th>
                            <th> Puntos   </th>
                            <th> Victorias </th>
                            <th> Derrotas </th>
                            <th> Empates  </th>
                        </tr>
                    </thead>
                    ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 37
                echo "                        ";
                if (($this->getAttribute($context["equipo"], "idTorneo", array()) == $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : $this->getContext($context, "torneo")), "id", array()))) {
                    // line 38
                    echo "                        <tr>
                            <td>  ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                    echo "º  </td>
                            <td class=\"actions\">
                                <p>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_equipo", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                ";
                    // line 48
                    echo "                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Eliminar
                                </a>
                            </td>
                            <td>   ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                    echo "   </td>
                            <td>   ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                    echo "   </td>
                            <td>   ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                    echo "   </td>
                            <td>   ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                    echo "   </td>
                        </tr>
                        ";
                }
                // line 58
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </table>
            </div>
        ";
        }
        // line 62
        echo "        
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:torneo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 62,  138 => 59,  132 => 58,  126 => 55,  122 => 54,  118 => 53,  114 => 52,  108 => 48,  102 => 42,  98 => 41,  93 => 39,  90 => 38,  87 => 37,  83 => 36,  66 => 23,  64 => 22,  61 => 21,  59 => 11,  54 => 8,  52 => 7,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
