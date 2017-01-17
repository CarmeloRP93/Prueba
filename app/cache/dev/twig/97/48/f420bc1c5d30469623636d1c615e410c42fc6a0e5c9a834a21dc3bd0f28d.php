<?php

/* moduloclientesclienteBundle:Default:competicionClientes.html.twig */
class __TwigTemplate_9748f420bc1c5d30469623636d1c615e410c42fc6a0e5c9a834a21dc3bd0f28d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <h1>Detalles del ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo "</h1>
        ";
        // line 6
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Solicitud Presentada")) {
            // line 7
            echo "            <form class=\"form-horizontal\">
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
        echo "        ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Validado")) {
            // line 27
            echo "            <h3>Insertar tabla de liga del deporte en cuestión (fútbol,baloncesto, tenis)</h3>
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
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " 
                        <tr>
                            <td>  ";
                // line 42
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "º  </td>
                            <td>Equipo ";
                // line 43
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " </td>
                            <td>   ";
                // line 44
                echo twig_escape_filter($this->env, ((15 * 3) - ($context["i"] * 2)), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 45
                echo twig_escape_filter($this->env, (16 - $context["i"]), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 46
                echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 47
                echo 0;
                echo "   </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </table>
            </div>
        ";
        }
        // line 53
        echo "    </div>
    <div>
        <ul class=\"container text-center\">
            ";
        // line 56
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Finalizado")) {
            // line 57
            echo "                <h3>Resumen del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
            echo "</h3>
                <p>Equipos</p>
            ";
        }
        // line 60
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Default:competicionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  144 => 57,  142 => 56,  137 => 53,  132 => 50,  123 => 47,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  96 => 40,  81 => 27,  78 => 26,  57 => 7,  55 => 6,  51 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
