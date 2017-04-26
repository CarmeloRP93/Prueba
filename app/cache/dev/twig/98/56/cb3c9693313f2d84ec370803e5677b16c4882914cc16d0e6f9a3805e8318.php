<?php

/* CriveroPruebaBundle:Mensajes:recibidos.html.twig */
class __TwigTemplate_9856cb3c9693313f2d84ec370803e5677b16c4882914cc16d0e6f9a3805e8318 extends Twig_Template
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
        echo " Mensajes Recibidos ";
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
    <div class=\"container\" style=\"margin-top: -21px\">
        <div class=\"page-header\">
            <div class=\"dropdown \" style=\"float: left\">
                <button style=\"margin-bottom: 0\" class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Recibidos
                    <span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_mensajes_enviados");
        echo "\">Mensajes Enviados</a></li>
                    <li class=\"active\"><a href=\"#\">Mensajes Recibidos</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_enviarMensaje");
        echo "\">Nuevo mensaje</a></li>
                </ul>
            </div>
            <h1 class=\"t1\" style=\"margin-right: 4.5em\">Mensajes Recibidos </h1>
        </div>
        ";
        // line 22
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 23
            echo "            <h2>No se encontraron mensajes.</h2>
        ";
        } else {
            // line 25
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-condensed\">
                    <thead>
                        <tr>
                            <th>";
            // line 29
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Remitente", "m.idRemitente");
            echo "</th>
                            <th>";
            // line 30
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "m.asunto");
            echo "</th>
                            <th>";
            // line 31
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Recibido", "m.fecha");
            echo "</th>
                            <th class=\"t3\">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
            // line 37
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
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 38
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "id", array()), "html", null, true);
                echo "\">
                                <td><strong>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["remitentes"]) ? $context["remitentes"] : $this->getContext($context, "remitentes")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "html", null, true);
                echo "</strong></td>
                                ";
                // line 40
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 41
                    echo "                                    <td>Sin asunto</td>
                                ";
                } else {
                    // line 43
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</td>
                                ";
                }
                // line 45
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    <form action=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_mensaje", array("id" => $this->getAttribute($context["mensaje"], "id", array()))), "html", null, true);
                echo "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                            Ver mensaje
                                        </button>
                                    </form>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 59
        echo "        <div>
            <div class=\"navigation\">
                ";
        // line 61
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>


";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/criveroprueba/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Mensajes:recibidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 70,  193 => 69,  190 => 68,  179 => 61,  175 => 59,  169 => 55,  147 => 47,  141 => 45,  135 => 43,  131 => 41,  129 => 40,  125 => 39,  120 => 38,  103 => 37,  94 => 31,  90 => 30,  86 => 29,  80 => 25,  76 => 23,  74 => 22,  66 => 17,  60 => 14,  50 => 7,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
