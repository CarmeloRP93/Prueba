<?php

/* modulomonitoresmonitoresBundle:Privada:misSesionesDedicadas.html.twig */
class __TwigTemplate_5f8d1fe2b49392dfebf49b7ade5cddbf2cbe8d2305fd577615b14d68dc233a91 extends Twig_Template
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
        echo " Mis sesiones privadas ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis sesiones privadas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 11
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 12
            echo "                    <h2>No se encontraron sesiones privadas</h2>
                ";
        } else {
            // line 14
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre de la sesión", "pagination.nombre");
            echo "</th>
                                    <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado de la sesión", "pagination.estado");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Paticipante", "pagination.cliente");
            echo "</th>
                                    <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de sesiones", "pagination.nSesiones");
            echo "</th>
                                    <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Aula asignada", "pagination.aula");
            echo "</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 28
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "estado", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nSesiones", array()), "html", null, true);
                echo " Sesiones</td>
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aulas"]) ? $context["aulas"] : $this->getContext($context, "aulas")), $this->getAttribute($context["sesion"], "id", array()), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                                        <td class=\"actions\">

                                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionDedicada", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                                Ver más información
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
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
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Privada:misSesionesDedicadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 47,  142 => 46,  136 => 42,  124 => 36,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  97 => 28,  93 => 27,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  63 => 14,  59 => 12,  57 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
