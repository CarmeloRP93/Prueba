<?php

/* moduloclientesclienteBundle:Mensajes:recibidosCliente.html.twig */
class __TwigTemplate_503f2dc58ccc7139b7db721b6aa4338d88b4aa21957f69a4f9b460293ee06cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("moduloclientesclienteBundle::main.html.twig");
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
        return "moduloclientesclienteBundle::main.html.twig";
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
        <div class=\"col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1\">
            <div class=\"page-header\">
                <div class=\"row text-center\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                        <h1 class=\"t1\">Mensajes recibidos</h1>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"><br>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Recibidos<span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajes_enviadosCliente");
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
        // line 24
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 25
            echo "                        <h2>No se encontraron mensajes</h2>
                    ";
        } else {
            // line 27
            echo "                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-condensed\">
                                <thead>
                                    <tr>
                                        <th>";
            // line 31
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Remitente", "m.idRemitente");
            echo "</th>
                                        <th><div class=\"hidden-xs\">";
            // line 32
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "m.asunto");
            echo "</div></th>
                                        <th>";
            // line 33
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Recibido", "m.fecha");
            echo "</th>
                                        <th class=\"t3\">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 38
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
                // line 39
                echo "                                        ";
                echo ((($this->getAttribute($context["mensaje"], "estado", array()) == "nuevo")) ? ("<tr data-id='{{ mensaje.id }}' style='font-weight: bold'>") : ("<tr data-id='{{ mensaje.id }}'>"));
                // line 40
                echo "
                                    <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["remitentes"]) ? $context["remitentes"] : $this->getContext($context, "remitentes")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "html", null, true);
                echo "</td>
                                    ";
                // line 42
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 43
                    echo "                                        <td>Sin asunto</td>
                                    ";
                } else {
                    // line 45
                    echo "                                        <td><div class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</div></td>
                                        ";
                }
                // line 47
                echo "                                    <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                    <td class=\"actions\">
                                        <form action=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajeCliente", array("id" => $this->getAttribute($context["mensaje"], "id", array()))), "html", null, true);
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
            // line 57
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 61
        echo "                </div>
                <div class=\"navigation\">
                    ";
        // line 63
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
        return "moduloclientesclienteBundle:Mensajes:recibidosCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  172 => 61,  166 => 57,  144 => 49,  138 => 47,  132 => 45,  128 => 43,  126 => 42,  122 => 41,  119 => 40,  116 => 39,  99 => 38,  91 => 33,  87 => 32,  83 => 31,  77 => 27,  73 => 25,  71 => 24,  59 => 15,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
