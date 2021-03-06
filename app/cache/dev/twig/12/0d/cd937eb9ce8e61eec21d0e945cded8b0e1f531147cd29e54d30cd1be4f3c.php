<?php

/* modulomonitoresmonitoresBundle:Mensajes:recibidosMonitor.html.twig */
class __TwigTemplate_120dcd937eb9ce8e61eec21d0e945cded8b0e1f531147cd29e54d30cd1be4f3c extends Twig_Template
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
        echo " Mensajes Recibidos ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <div class=\"row text-center\">
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                    <h1 class=\"t1\">Mensajes recibidos</h1>
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"><br>
                    <div class=\"dropdown\" style=\"float: left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Recibidos<span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("modulomonitores_monitores_mensajes_enviadosMonitor");
        echo "\">Mensajes Enviados</a></li>
                            <li class=\"active\"><a href=\"#\">Mensajes Recibidos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 23
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 24
            echo "                    <h2>No se encontraron mensajes</h2>
                ";
        } else {
            // line 26
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-condensed\">
                            <thead>
                                <tr>
                                    <th>";
            // line 30
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Remitente", "m.idRemitente");
            echo "</th>
                                    <th><div class=\"hidden-xs\">";
            // line 31
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "m.asunto");
            echo "</div></th>
                                    <th>";
            // line 32
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
                echo "                                    ";
                echo ((($this->getAttribute($context["mensaje"], "estado", array()) == "nuevo")) ? ("<tr data-id='{{ mensaje.id }}' style='font-weight: bold'>") : ("<tr data-id='{{ mensaje.id }}'>"));
                // line 39
                echo "
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["remitentes"]) ? $context["remitentes"] : $this->getContext($context, "remitentes")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "html", null, true);
                echo "</td>
                                ";
                // line 41
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 42
                    echo "                                    <td><div class=\"hidden-xs\">Sin asunto</div></td>
                                ";
                } else {
                    // line 44
                    echo "                                    <td><div class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</div></td>
                                ";
                }
                // line 46
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    <form action=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_mensajeMonitor", array("id" => $this->getAttribute($context["mensaje"], "id", array()))), "html", null, true);
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
            // line 56
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 60
        echo "                <div>
                    <div class=\"navigation text-center\">
                        ";
        // line 62
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Mensajes:recibidosMonitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  171 => 60,  165 => 56,  143 => 48,  137 => 46,  131 => 44,  127 => 42,  125 => 41,  121 => 40,  118 => 39,  115 => 38,  98 => 37,  90 => 32,  86 => 31,  82 => 30,  76 => 26,  72 => 24,  70 => 23,  58 => 14,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
