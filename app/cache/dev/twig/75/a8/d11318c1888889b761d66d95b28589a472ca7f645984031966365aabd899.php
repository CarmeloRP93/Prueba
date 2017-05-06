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
                                <th></th>
                                <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre del cliente", "pagination.nombre");
            echo "</th>
                                <th><div class=\"hidden-xs\">";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de teléfono", "pagination.telefono");
            echo "</div></th>
                                <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Correo electrónico", "pagination.email");
            echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
                // line 27
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
                echo "\">
                                <td><img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["cliente"], "imagen", array()))), "html", null, true);
                echo "\" class=\"img-responsive center-block \" style=\"max-width: 45px\"/></td>
                                        
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefono", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    ";
                // line 34
                if ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag"))) {
                    // line 35
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, ((("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . (isset($context["idSesion"]) ? $context["idSesion"] : $this->getContext($context, "idSesion"))) . "/verParticipantes/") . $this->getAttribute($context["cliente"], "id", array())), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">
                                            Ver más información
                                        </a>
                                    ";
                } else {
                    // line 39
                    echo "                                         <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_participanteListado", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">
                                            Ver más información
                                        </a>
                                    ";
                }
                // line 43
                echo "                                </td>

                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    </tbody>
                    </table>
                </div>
\t\t\t\t";
        }
        // line 51
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 52
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
\t\t";
        // line 56
        if ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag"))) {
            // line 57
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => (isset($context["idSesion"]) ? $context["idSesion"] : $this->getContext($context, "idSesion")))), "html", null, true);
            echo "\"class=\"btn btn-default\">Volver a la sesión</a>
    ";
        }
        // line 59
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
        return array (  162 => 59,  156 => 57,  154 => 56,  147 => 52,  144 => 51,  138 => 47,  129 => 43,  121 => 39,  113 => 35,  111 => 34,  106 => 32,  102 => 31,  98 => 30,  93 => 28,  88 => 27,  84 => 26,  75 => 20,  71 => 19,  67 => 18,  60 => 13,  56 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
