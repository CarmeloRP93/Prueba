<?php

/* CriveroPruebaBundle:Competiciones:jugadores.html.twig */
class __TwigTemplate_166c828640f92df1c16cca4b0cee5ff69b0fa4745e1f41af3f12eb487370fe49 extends Twig_Template
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
        echo "    <div class=\"container\">

        <div class=\"page-header\">
            <h1 class=\"t1\"> Jugadores</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Equipo</th>
                         <th>";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre del jugador", "pagination.nombre");
        echo "</th>
                         <th>";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Dorsal", "pagination.dorsal");
        echo "</th>
                        <th>Incidencias</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 25
            echo "                        <tr>
                            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                if (($this->getAttribute($context["equipo"], "id", array()) == $this->getAttribute($context["jugador"], "idEquipo", array()))) {
                    // line 27
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                    echo "</td>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "dorsal", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_jugador", array("id" => $this->getAttribute($context["jugador"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver Detalles
                                </a>
                                ";
            // line 39
            echo "                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Eliminar Jugador
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:jugadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  125 => 45,  114 => 39,  108 => 33,  103 => 31,  99 => 30,  94 => 29,  84 => 27,  79 => 26,  76 => 25,  72 => 24,  63 => 18,  59 => 17,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
