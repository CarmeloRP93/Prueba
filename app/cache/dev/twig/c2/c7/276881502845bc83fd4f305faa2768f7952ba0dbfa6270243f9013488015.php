<?php

/* moduloclientesclienteBundle:Mensajes:enviadosCliente.html.twig */
class __TwigTemplate_c2c7276881502845bc83fd4f305faa2768f7952ba0dbfa6270243f9013488015 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
    <div class=\"container\" style=\"margin-top: -21px\">
        <div class=\"page-header\">
            <div class=\"dropdown \" style=\"float: left\">
                <button style=\"margin-bottom: 0\" class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Mensajes Enviados
                    <span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajes_recibidosCliente");
        echo "\">Mensajes Recibidos</a></li>
                    <li class=\"active\"><a href=\"#\">Mensajes Enviados</a></li>
                </ul>
            </div>
            <h1 class=\"t1\" style=\"margin-right: 4.5em\">Mensajes Enviados </h1>
        </div>
        ";
        // line 19
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 20
            echo "            <h2>No se encontraron mensajes.</h2>
        ";
        } else {
            // line 22
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-condensed\">
                    <thead>
                        <tr>
                            <th>";
            // line 26
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Destino", "m.destinatario");
            echo "</th>
                            <th>";
            // line 27
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "m.asunto");
            echo "</th>
                            <th>";
            // line 28
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Enviado", "m.fecha");
            echo "</th>
                            <th class=\"t3\">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 35
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "id", array()), "html", null, true);
                echo "\">
                                <td><strong>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "destinatario", array()), "html", null, true);
                echo "</strong></td>
                                ";
                // line 37
                if (($this->getAttribute($context["mensaje"], "asunto", array()) == null)) {
                    // line 38
                    echo "                                    <td>Sin asunto</td>
                                ";
                } else {
                    // line 40
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "asunto", array()), "html", null, true);
                    echo "</td>
                                ";
                }
                // line 42
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    <form action=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajeCliente", array("id" => $this->getAttribute($context["mensaje"], "id", array()))), "html", null, true);
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
            // line 52
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 56
        echo "        <div>
            <div class=\"navigation\"  >
                ";
        // line 58
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>


";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/criveroprueba/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Mensajes:enviadosCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 67,  163 => 66,  160 => 65,  149 => 58,  145 => 56,  139 => 52,  125 => 44,  119 => 42,  113 => 40,  109 => 38,  107 => 37,  103 => 36,  98 => 35,  94 => 34,  85 => 28,  81 => 27,  77 => 26,  71 => 22,  67 => 20,  65 => 19,  56 => 13,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
