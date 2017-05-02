<?php

/* modulomonitoresmonitoresBundle:Participantes:participantes.html.twig */
class __TwigTemplate_75a8d11318c1888889b761d66d95b28589a472ca7f645984031966365aabd899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("modulomonitoresmonitoresBundle::main.html.twig");
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
        return "modulomonitoresmonitoresBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Mis participantes ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis participantes</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
\t\t\t";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "            <h2>No se encontraron participantes</h2>
        ";
        } else {
            // line 13
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre del cliente", "pagination.nombre");
            echo "</th>
                                <th><div class=\"hidden-xs\">";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de teléfono", "pagination.telefono");
            echo "</div></th>
                                <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Correo electrónico", "pagination.email");
            echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
                // line 26
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefono", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    ";
                // line 31
                if ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag"))) {
                    // line 32
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, ((("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . (isset($context["idSesion"]) ? $context["idSesion"] : $this->getContext($context, "idSesion"))) . "/verParticipantes/") . $this->getAttribute($context["cliente"], "id", array())), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">
                                            Ver más información
                                        </a>
                                    ";
                } else {
                    // line 36
                    echo "                                         <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_participanteListado", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">
                                            Ver más información
                                        </a>
                                    ";
                }
                // line 40
                echo "                                </td>

                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </tbody>
                    </table>
                </div>
\t\t\t\t";
        }
        // line 48
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
\t\t";
        // line 53
        if ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag"))) {
            // line 54
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => (isset($context["idSesion"]) ? $context["idSesion"] : $this->getContext($context, "idSesion")))), "html", null, true);
            echo "\"class=\"btn btn-default\">Volver a la sesión</a>
    ";
        }
        // line 56
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Participantes:participantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  150 => 54,  148 => 53,  141 => 49,  138 => 48,  132 => 44,  123 => 40,  115 => 36,  107 => 32,  105 => 31,  100 => 29,  96 => 28,  92 => 27,  87 => 26,  83 => 25,  74 => 19,  70 => 18,  66 => 17,  60 => 13,  56 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
