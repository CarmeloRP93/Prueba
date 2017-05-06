<?php

/* moduloclientesclienteBundle:Reservas:reservasClientes.html.twig */
class __TwigTemplate_ca5830256a792a656033d404e9a0f523947beb321c924995d169d4faca58142f extends Twig_Template
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
        echo " Mis reservas ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis reservas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 17
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 18
            echo "                    <h2>No se encontraron reservas</h2>
                ";
        } else {
            // line 20
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 24
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Código", "r.id");
            echo "</th>
                                    <th>";
            // line 25
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cancha", "r.cancha");
            echo "</th>
                                    <th>";
            // line 26
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "r.estadoReserva");
            echo "</th>
                                    <th>";
            // line 27
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "r.fechaInicio");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 33
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "cancha", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 36
                if (($this->getAttribute($context["reserva"], "estadoReserva", array()) == "Cancelada")) {
                    // line 37
                    echo "                                            <td style=\"color: red\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "estadoReserva", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                } else {
                    // line 39
                    echo "                                            <td><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "estadoReserva", array()), "html", null, true);
                    echo "</strong></td>
                                        ";
                }
                // line 41
                echo "                                        <td><strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "fechaInicio", array()), "d-m-Y"), "html", null, true);
                echo "</strong></td>
                                        <td class=\"actions\">
                                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_reservaClientes", array("id" => $this->getAttribute($context["reserva"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info noMargenBoton\">
                                                Ver
                                            </a>
                                            ";
                // line 46
                if (($this->getAttribute($context["reserva"], "estadoReserva", array()) == "Cancelada")) {
                    // line 47
                    echo "                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Descartar
                                                </a>
                                            ";
                } else {
                    // line 51
                    echo "                                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete noMargenBoton\">
                                                    Cancelar
                                                </a>
                                            ";
                }
                // line 55
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 61
        echo "        
                <div>
                    <div class=\"navigation\">
                        ";
        // line 64
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                </div>
            </div>                     
        </div>                     
    </div>
    ";
        // line 70
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "id" => "form-delete", "with_submit" => false));
        echo "

";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/criveroprueba/js/delete-reserva.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Reservas:reservasClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 75,  191 => 74,  188 => 73,  181 => 70,  172 => 64,  167 => 61,  161 => 58,  153 => 55,  147 => 51,  141 => 47,  139 => 46,  133 => 43,  127 => 41,  121 => 39,  115 => 37,  113 => 36,  109 => 35,  105 => 34,  100 => 33,  96 => 32,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  70 => 20,  66 => 18,  64 => 17,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
