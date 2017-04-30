<?php

/* modulomonitoresmonitoresBundle:Publica:misSesionesMonitores.html.twig */
class __TwigTemplate_7fb2d2b6794cdd0039ada73d06210f7ed32c1980a2de3d04e39a958ddedb7386 extends Twig_Template
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
        echo " Sesiones públicas ";
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
            <h1 class=\"t1\">Listado de sesiones públicas</h1>
        </div>
        ";
        // line 10
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "            <h2>No se encontraron sesiones públicas</h2>
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
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado de la sesión", "pagination.estado");
            echo "</th>
                            <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de clientes", "pagination.nClientes");
            echo "</th>
                            <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Número de sesiones", "pagination.nSesiones");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Aula asignada", "pagination.aula");
            echo "</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["sesion"]) {
                // line 27
                echo "                            
                                <tr data-id=\"";
                // line 28
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
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nClientes", array()), "html", null, true);
                echo " Clientes</td>
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["sesion"], "nSesiones", array()), "html", null, true);
                echo " Sesiones</td>
                                    <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aulas"]) ? $context["aulas"] : $this->getContext($context, "aulas")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "nombre", array()), "html", null, true);
                echo "</td>
                                    <td class=\"actions\">

                                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_miSesionMonitores", array("id" => $this->getAttribute($context["sesion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                            Ver más información
                                        </a>
                                    </td>
                                </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sesion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 46
        echo "        <div class=\"navigation\">
            ";
        // line 47
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Publica:misSesionesMonitores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 47,  163 => 46,  157 => 42,  137 => 36,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  108 => 27,  91 => 26,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  61 => 13,  57 => 11,  55 => 10,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}