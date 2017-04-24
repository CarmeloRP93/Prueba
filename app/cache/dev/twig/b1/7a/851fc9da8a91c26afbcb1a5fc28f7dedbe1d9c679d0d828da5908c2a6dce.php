<?php

/* modulomonitoresmonitoresBundle:Default:sesionesDedicadas.html.twig */
class __TwigTemplate_b17a851fc9da8a91c26afbcb1a5fc28f7dedbe1d9c679d0d828da5908c2a6dce extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Sesiones privadas aceptadas ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesiones privadas aceptadas</h1>
        </div>
        ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "            <h2>No se encontraron sesiones privadas aceptadas</h2>
        ";
        } else {
            // line 13
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre de la sesión", "pagination.nombre");
            echo "</th>
                            <th>";
            // line 18
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de sesiones", "pagination.nSesiones");
            echo "</th>
                            <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Aula asignada", "pagination.aula");
            echo "</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 25
                echo "                                <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "id", array()), "html", null, true);
                echo "\">
                                    <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nombre", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nSesiones", array()), "html", null, true);
                echo " Sesiones</td>
                                    <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "aula", array()), "html", null, true);
                echo "</td>
                                    <td class=\"actions\">

                                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_sesionDedicada", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
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
            // line 37
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"navigation\">
            ";
        // line 42
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Default:sesionesDedicadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  124 => 41,  118 => 37,  106 => 31,  100 => 28,  96 => 27,  92 => 26,  87 => 25,  83 => 24,  75 => 19,  71 => 18,  67 => 17,  61 => 13,  57 => 11,  55 => 10,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
