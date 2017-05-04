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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Mi equipo ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"page-header\">    
            <h1 class=\"t1\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "deporte", array()), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")))) {
            // line 11
            echo "                    <h2>No se encontraron jugadores</h2><br>
                ";
        } else {
            // line 13
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Nombre", "jugadores.nombre");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Dorsal", "jugadores.Dorsal");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")), "Incidencias", "jugadores.incidencia");
            echo "</th>
                                    <th> Acción </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
            foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
                // line 26
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "id", array()), "html", null, true);
                echo "\">
                                        ";
                // line 27
                if (($this->getAttribute($context["jugador"], "imagen", array()) != null)) {
                    // line 28
                    echo "                                            <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["jugador"], "imagen", array()))), "html", null, true);
                    echo "\" class=\"img-responsive\" style=\"max-width: 50px;\"/></td>
                                            ";
                } else {
                    // line 30
                    echo "                                            <td>Imagen no Disponible</td>
                                        ";
                }
                // line 32
                echo "                                        <td>  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nombre", array()), "html", null, true);
                echo "  </td>
                                        <td>   ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "Dorsal", array()), "html", null, true);
                echo "   </td>
                                        <td>   ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "incidencia", array()), "html", null, true);
                echo "</td>
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
            // line 42
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 46
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 47
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        echo "
                </div>
                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_jugador_nuevo", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Añadir invitado<span class=\"glyphicon glyphicon-plus\"></span></a>
                <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_jugadoresClientes", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Buscar jugador<span class=\"glyphicon glyphicon-plus\"></span></a>
                <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_equipo_editar", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">Editar Equipo</a>
                <p>";
        // line 52
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "nombre" => "Eliminar equipo"));
        echo "</p>
            </div>
        </div>
        <a class=\"btn btn-default text-center\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_equiposClientes");
        echo "\">Volver atrás</a>
    </div>
    ";
        // line 57
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "nombre" => "Eliminar jugador", "id" => "form-delete", "with_submit" => false));
        echo "
";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 62
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
        return array (  184 => 62,  179 => 61,  176 => 60,  170 => 57,  165 => 55,  159 => 52,  155 => 51,  151 => 50,  147 => 49,  142 => 47,  139 => 46,  133 => 42,  119 => 34,  115 => 33,  110 => 32,  106 => 30,  100 => 28,  98 => 27,  93 => 26,  89 => 25,  81 => 20,  77 => 19,  73 => 18,  66 => 13,  62 => 11,  60 => 10,  51 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
