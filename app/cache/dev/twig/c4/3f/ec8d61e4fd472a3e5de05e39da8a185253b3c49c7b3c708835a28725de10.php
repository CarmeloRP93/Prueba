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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Mensajes Enviados ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <div class=\"row text-center\">
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
                    <h1 class=\"t1\">Mensajes enviados</h1>
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"><br>
                    <div class=\"dropdown\" style=\"float: left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Enviados<span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_mensajes_recibidos");
        echo "\">Mensajes Recibidos</a></li>
                            <li class=\"active\"><a href=\"#\">Mensajes Enviados</a></li>
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
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Destino", "m.destinatario");
            echo "</th>
                                    <th><div class=\"hidden-xs\">";
            // line 31
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "m.asunto");
            echo "</div></th>
                                    <th>";
            // line 32
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "m.fecha");
            echo "</th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 38
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "id", array()), "html", null, true);
                echo "\">
                                        <td><strong>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "destinatario", array()), "html", null, true);
                echo "</strong></td>
                                        ";
                // line 40
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 41
                    echo "                                            <td>Sin asunto</td>
                                        ";
                } else {
                    // line 43
                    echo "                                            <td><div class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</div></td>
                                            ";
                }
                // line 45
                echo "                                        <td>";
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 59
        echo "                <div class=\"navigation text-center\" style=\"margin: -10px\">
                    ";
        // line 60
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 68
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
        return array (  171 => 68,  166 => 67,  163 => 66,  153 => 60,  150 => 59,  144 => 55,  130 => 47,  124 => 45,  118 => 43,  114 => 41,  112 => 40,  108 => 39,  103 => 38,  99 => 37,  91 => 32,  87 => 31,  83 => 30,  77 => 26,  73 => 24,  71 => 23,  59 => 14,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
