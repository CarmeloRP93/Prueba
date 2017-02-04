<?php

/* CriveroPruebaBundle:Default:competicion.html.twig */
class __TwigTemplate_c77c37827f4a8993ac5d5b6c90a6d4033cddfdce755dd8e0e12fe7bfc49d2597 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h2>Detalles de la competicion</h2>
        ";
        // line 7
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Solicitud Presentada")) {
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
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Validado")) {
            // line 23
            echo "            <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "deporte", array()), "html", null, true);
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
                            <th> Acciones</th>
                        </tr>
                    </thead>
                    ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                if (($this->getAttribute($context["equipo"], "idCompeticion", array()) == $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))) {
                    // line 38
                    echo "                            <tr>
                                <td>   ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                    echo "º  </td>
                                <td>   ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                    echo "    </td>
                                <td>   ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                    echo "   </td>
                                <td>   ";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                    echo "   </td>
                                <td>   ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                    echo "   </td>
                                <td>   ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                    echo "   </td>
                                <td>    
                                    <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_equipo", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">
                                        Ver
                                    </a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Eliminar
                                    </a>   
                                </td>
                            </tr>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                </table>
            </div>
        ";
        }
        // line 58
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:competicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 58,  133 => 55,  117 => 46,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  89 => 38,  84 => 37,  66 => 23,  64 => 22,  61 => 21,  59 => 11,  54 => 8,  52 => 7,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
