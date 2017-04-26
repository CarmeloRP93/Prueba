<?php

/* CriveroPruebaBundle:Mensajes:enviados.html.twig */
class __TwigTemplate_c43fec8d61e4fd472a3e5de05e39da8a185253b3c49c7b3c708835a28725de10 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " Mensajes Enviados ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    
    ";
        // line 7
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\" style=\"margin-top: -22px\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mensajes Enviados </h1>
        </div>
        ";
        // line 12
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 13
            echo "            <h2>No se encontraron mensajes.</h2>
        ";
        } else {
            // line 15
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-condensed\">
                    <thead>
                        <tr>
                            <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Destinatario", "m.destinatario");
            echo "</th>
                            <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "m.asunto");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "m.fecha");
            echo "</th>
                            <th class=\"t3\">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 28
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "id", array()), "html", null, true);
                echo "\">
                                <td><strong>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "destinatario", array()), "html", null, true);
                echo "</strong></td>
                                ";
                // line 30
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 31
                    echo "                                    <td>Sin asunto</td>
                                ";
                } else {
                    // line 33
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</td>
                                ";
                }
                // line 35
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                 <td class=\"actions\">
                                    <a href=\"\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                        Ver mensaje
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 47
        echo "        <div>
            <div class=\"navigation\" >
                ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>


";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/criveroprueba/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Mensajes:enviados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  151 => 57,  148 => 56,  137 => 49,  133 => 47,  127 => 43,  112 => 35,  106 => 33,  102 => 31,  100 => 30,  96 => 29,  91 => 28,  87 => 27,  78 => 21,  74 => 20,  70 => 19,  64 => 15,  60 => 13,  58 => 12,  50 => 7,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
