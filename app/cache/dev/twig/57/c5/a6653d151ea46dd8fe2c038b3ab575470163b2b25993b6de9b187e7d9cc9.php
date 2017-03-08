<?php

/* moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig */
class __TwigTemplate_57c5a6653d151ea46dd8fe2c038b3ab575470163b2b25993b6de9b187e7d9cc9 extends Twig_Template
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
        // line 7
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Validado")) {
            // line 8
            echo "        <h3>Bienvenido a la ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
            echo ". Esta competicion es para aquellos que quieran apuntarse a jugar a ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "deporte", array()), "html", null, true);
            echo "</h3>
        <h4>Le fecha de comienzo es el ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo ". Después de esta fecha la fase de inscripción quedará cerrada.</h4>
        <div class=\"nuevoEquipo\">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_equipo_nuevo", array("id" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">
                Crear Equipo 
                <span class=\"glyphicon glyphicon-plus\"></span></a>
        </div>
        ";
        }
        // line 16
        echo "        ";
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Jugandose")) {
            // line 17
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
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 31
                echo "                        <tr>
                            <td>   ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                echo "º  </td>
                            <td>   ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "           </td>
                            <td>   ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
                echo "   </td>
                            <td>   ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
                echo "  </td>
                            <td>   ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
                echo "   </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </table>
            </div>
        ";
        }
        // line 43
        echo "    </div>
    <div>
        <ul class=\"container text-center\">
            ";
        // line 46
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estadoCompeticion", array()) == "Finalizado")) {
            // line 47
            echo "                <h3>Resumen del ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
            echo "</h3>
                <p>Equipos</p>
            ";
        }
        // line 50
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  144 => 47,  142 => 46,  137 => 43,  132 => 40,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  100 => 31,  96 => 30,  81 => 17,  78 => 16,  70 => 11,  65 => 9,  58 => 8,  56 => 7,  51 => 5,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
