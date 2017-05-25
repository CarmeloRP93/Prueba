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
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container text-center\">
        <div class=\"page-header\">
            ";
        // line 7
        if ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag"))) {
            // line 8
            echo "                <h1 class=\"t1\"> ";
            echo twig_escape_filter($this->env, (isset($context["nombreSesion"]) ? $context["nombreSesion"] : $this->getContext($context, "nombreSesion")), "html", null, true);
            echo " - Participantes</h1>
            ";
        } else {
            // line 10
            echo "                <h1 class=\"t1\">Mis participantes</h1>
            ";
        }
        // line 12
        echo "        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 15
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 16
            echo "                    <h2>No se encontraron participantes</h2>
                ";
        } else {
            // line 18
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>";
            // line 23
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre del cliente", "pagination.nombre");
            echo "</th>
                                    <th><div class=\"hidden-xs\">";
            // line 24
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de teléfono", "pagination.telefono");
            echo "</div></th>
                                    <th>";
            // line 25
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Correo electrónico", "pagination.email");
            echo "</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
                // line 32
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
                echo "\">
                                        <td><img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["cliente"], "imagen", array()))), "html", null, true);
                echo "\" class=\"img-responsive center-block \" style=\"max-width: 45px\"/></td>

                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefono", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">
                                            ";
                // line 39
                if ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag"))) {
                    // line 40
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, ((("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . (isset($context["idSesion"]) ? $context["idSesion"] : $this->getContext($context, "idSesion"))) . "/verParticipantes/") . $this->getAttribute($context["cliente"], "id", array())), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">
                                                    Ver más información
                                                </a>
                                            ";
                } else {
                    // line 44
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_participanteListado", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary\">
                                                    Ver más información
                                                </a>
                                            ";
                }
                // line 48
                echo "                                        </td>

                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 56
        echo "                <div class=\"navigation text-center\">
                    ";
        // line 57
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 61
        if ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag"))) {
            // line 62
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => (isset($context["idSesion"]) ? $context["idSesion"] : $this->getContext($context, "idSesion")))), "html", null, true);
            echo "\"class=\"btn btn-default\">Volver a la sesión</a>
        ";
        }
        // line 64
        echo "    </div>
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
        return array (  178 => 64,  172 => 62,  170 => 61,  163 => 57,  160 => 56,  154 => 52,  145 => 48,  137 => 44,  129 => 40,  127 => 39,  122 => 37,  118 => 36,  114 => 35,  109 => 33,  104 => 32,  100 => 31,  91 => 25,  87 => 24,  83 => 23,  76 => 18,  72 => 16,  70 => 15,  65 => 12,  61 => 10,  55 => 8,  53 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
