<?php

/* CriveroPruebaBundle:Competiciones:equipos.html.twig */
class __TwigTemplate_073415aaeb0a7f8aa15e85fe6b4a57a64100962e7363a6bc0e3892a96a869dad extends Twig_Template
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
        echo " Vista de Equipos ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Equipos</h1>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Equipo", "equipo.nombre");
        echo "</th>
                        <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Competición inscrito", "equipo.idCompeticion");
        echo "</th>
                        <th>";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Responsable", "equipo.idCliente");
        echo "</th>
                        <th>";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Deporte", "equipo.deporte");
        echo "</th>
                        <th>";
        // line 19
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Clasificacion", "equipo.clasificacion");
        echo "</th>
                        <th>";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Puntuación", "equipo.puntuacion");
        echo "</th>
                        <th>";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Victorias", "equipo.victorias");
        echo "</th>
                        <th>";
        // line 22
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Empates", "equipo.empates");
        echo "</th>
                        <th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")), "Derrotas", "equipo.derrotas");
        echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 29
            echo "                        <tr>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")), ($this->getAttribute($context["equipo"], "id", array()) - 1), array(), "array"), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["representantes"]) ? $context["representantes"] : $this->getContext($context, "representantes")), ($this->getAttribute($context["equipo"], "id", array()) - 1), array(), "array"), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "deporte", array()), "html", null, true);
            echo "</td>
                            ";
            // line 34
            if (($this->getAttribute($context["equipo"], "clasificacion", array()) != 0)) {
                // line 35
                echo "                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "clasificacion", array()), "html", null, true);
                echo " º</td>
                            ";
            } else {
                // line 37
                echo "                                <td>Pendiente</td>
                            ";
            }
            // line 39
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "puntuacion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "victorias", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "empates", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "derrotas", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 44
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            ";
        // line 57
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Competiciones:equipos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 57,  165 => 53,  150 => 44,  145 => 42,  141 => 41,  137 => 40,  132 => 39,  128 => 37,  122 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  101 => 29,  97 => 28,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
