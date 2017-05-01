<?php

/* moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig */
class __TwigTemplate_4a0a01c67695bb77390ac816378efadd1d9feeac81765a3b99604f0d0e58361e extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " Vista de mis equipo ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h1 class=\"t1\">Deporte: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "deporte", array()), "html", null, true);
        echo "</h1>
        <h2 class=\"t1\">Detalles del Equipo. ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo "</h2>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th> ";
        // line 12
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Nombre", "jugadores.nombre");
        echo "</th>
                        <th> ";
        // line 13
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Dorsal", "jugadores.Dorsal");
        echo "</th>
                        <th>";
        // line 14
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Incidencias", "jugadores.incidencia");
        echo "</th>
                        <th> Acción </th>
                    </tr>
                </thead>
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 19
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "id", array()), "html", null, true);
            echo "\">
                            <td>  ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
            echo "  </td>
                            <td>   ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "Dorsal", array()), "html", null, true);
            echo "   </td>
                            <td>   ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
            echo "   </td>
                            <td>
                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </table>
        </div>
        <div class=\"container\">
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_jugador_nuevo", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">
                Añadir jugador 
                <span class=\"glyphicon glyphicon-plus\"></span></a>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_equipo_editar", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">
                Editar Equipo
            </a>
            <p>
               ";
        // line 40
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar equipo"));
        echo "
            </p>
        </div>
        <a class=\"btn btn-default text-center\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_equiposClientes");
        echo "\">Volver atrás</a>
        <div class=\"navigation text-center\">
            ";
        // line 45
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        echo "
        </div>
    </div>
    ";
        // line 48
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "nombre" => "Eliminar jugador", "id" => "form-delete", "with_submit" => false));
        // line 49
        echo "
";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/criveroprueba/js/delete-jugador.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 54,  153 => 53,  150 => 52,  145 => 49,  143 => 48,  137 => 45,  132 => 43,  126 => 40,  119 => 36,  113 => 33,  108 => 30,  94 => 22,  90 => 21,  86 => 20,  81 => 19,  77 => 18,  70 => 14,  66 => 13,  62 => 12,  54 => 7,  50 => 6,  47 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
