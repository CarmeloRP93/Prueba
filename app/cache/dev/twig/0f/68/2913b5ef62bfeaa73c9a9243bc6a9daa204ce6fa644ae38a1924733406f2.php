<?php

/* CriveroPruebaBundle:Sesiones:horariosSesion.html.twig */
class __TwigTemplate_0f682913b5ef62bfeaa73c9a9243bc6a9daa204ce6fa644ae38a1924733406f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
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
        return "CriveroPruebaBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Sesión ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " - Horarios ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Sesión ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " - Horarios</h1>
        </div>
        <h4 class=\"t3\">Recinto de la sesión: 
            ";
        // line 11
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "concepto", array()) == "aula")) {
            echo " 
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "nombre", array()), "html", null, true);
            echo "</td>
            ";
        } else {
            // line 14
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recinto"]) ? $context["recinto"] : $this->getContext($context, "recinto")), "tipo", array()), "html", null, true);
            echo "</td>
            ";
        }
        // line 16
        echo "        </h4>
        <div>
            <table id=\"differentTable\" class=\"table table-hover table-bordered table-condensed\" >
                <thead>
                    <tr>
                        <th>Nº Sesión</th>
                        <th>Día y hora</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        echo "                    ";
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
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $context["horario"], "html", null, true);
            echo "</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
            </table>
        </div>
        <div style=\"margin: 14px\">
            ";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")) {
            echo "    
                <a class=\"btn btn-default\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\">Volver atrás</a>
            ";
        } else {
            // line 45
            echo "                <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_sesion", array("id" => $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()))), "html", null, true);
            echo "\">Volver atrás</a>
            ";
        }
        // line 47
        echo "        </div>

        ";
        // line 52
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Sesiones:horariosSesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  148 => 47,  142 => 45,  137 => 43,  133 => 42,  127 => 38,  110 => 35,  106 => 34,  103 => 33,  85 => 32,  73 => 16,  67 => 14,  62 => 12,  58 => 11,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
