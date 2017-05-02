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
        echo " Participantes ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Participantes</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>";
        // line 14
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre del cliente", "pagination.nombre");
        echo "</th>
                                <th><div class=\"hidden-xs\">";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de teléfono", "pagination.telefono");
        echo "</div></th>
                                <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Correo electrónico", "pagination.email");
        echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 22
            echo "                                <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "\">
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                                    <td><div class=\"hidden-xs\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefono", array()), "html", null, true);
            echo "</div></td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                                    <td class=\"actions\">
                                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ((("http://localhost/Prueba/web/app_dev.php/miSesionMonitores/" . (isset($context["idSesion"]) ? $context["idSesion"] : $this->getContext($context, "idSesion"))) . "/verParticipantes/") . $this->getAttribute($context["cliente"], "id", array())), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                            Ver
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => (isset($context["idSesion"]) ? $context["idSesion"] : $this->getContext($context, "idSesion")))), "html", null, true);
        echo "\"class=\"btn btn-default\">Volver a la sesión</a>
    </div>
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
        return array (  121 => 41,  114 => 37,  108 => 33,  96 => 27,  91 => 25,  87 => 24,  83 => 23,  78 => 22,  74 => 21,  66 => 16,  62 => 15,  58 => 14,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
