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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Mensajes Recibidos ";
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
            <div class=\"row text-center\">
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                    <h1 class=\"t1\">Mensajes recibidos</h1>
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"><br>
                    <div class=\"dropdown\" style=\"float: left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Recibidos<span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_mensajes_enviados");
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
            echo "                    <h2>No se encontraron mensajes</h2>
                ";
        } else {
            // line 27
            echo "                    <div class=\"table-responsive\">
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
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 39
                echo "                                    ";
                echo ((($this->getAttribute($context["mensaje"], "estado", array()) == "nuevo")) ? ("<tr data-id='{{ mensaje.id }}' style='font-weight: bold'>") : ("<tr data-id='{{ mensaje.id }}'>"));
                // line 40
                echo "
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["remitentes"]) ? $context["remitentes"] : $this->getContext($context, "remitentes")), $this->getAttribute($context["mensaje"], "id", array()), array(), "array"), "html", null, true);
                echo "</td>
                                ";
                // line 42
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 43
                    echo "                                    <td>Sin asunto</td>
                                ";
                } else {
                    // line 45
                    echo "                                    <td><div class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</div></td>
                                    ";
                }
                // line 47
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    <form action=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_mensaje", array("id" => $this->getAttribute($context["mensaje"], "id", array()))), "html", null, true);
                echo "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" style=\"margin-bottom: 0\">
                                            Ver mensaje
                                        </button>
                                    </form>
                                </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 61
        echo "                <div class=\"navigation text-center\" style=\"margin: -10px\">
                    ";
        // line 62
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
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
        return array (  175 => 70,  170 => 69,  167 => 68,  157 => 62,  154 => 61,  148 => 57,  134 => 49,  128 => 47,  122 => 45,  118 => 43,  116 => 42,  112 => 41,  109 => 40,  106 => 39,  102 => 38,  94 => 33,  90 => 32,  86 => 31,  80 => 27,  76 => 25,  74 => 24,  62 => 15,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
