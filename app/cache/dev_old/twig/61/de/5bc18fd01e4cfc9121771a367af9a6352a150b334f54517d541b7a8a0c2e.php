<?php

/* CriveroPruebaBundle:Canchas:canchas.html.twig */
class __TwigTemplate_61de5bc18fd01e4cfc9121771a367af9a6352a150b334f54517d541b7a8a0c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CriveroPruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Canchas ";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "    
    <div class=\"container\">
        <h1 class=\"text-center\">Canchas</h1>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 14
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "c.tipo");
        echo "</th>
                        <th>";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "c.disponibilidad");
        echo "</th>
                        <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "c.horario");
        echo "</th>
                        <th>";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Valoracion", "c.valoracion");
        echo "</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
            // line 23
            echo "                        <tr>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
            echo "</td>
                            <td><strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
            echo "</strong></td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "horario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "valoracion", array()), "html", null, true);
            echo "/5.0</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                    Ver
                                </a>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cancha_editar", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                    Editar
                                </a>
                                
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
            </table>
        </div>
        <div class=\"navigation\">
            ";
        // line 43
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Canchas:canchas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  118 => 39,  105 => 32,  99 => 29,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  79 => 23,  75 => 22,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
