<?php

/* moduloclientesclienteBundle:Usuarios:pagosCliente.html.twig */
class __TwigTemplate_53c23bada38a08eaf069d66f5a23feb16b6628bad30c6d0e904280ba9cc5f3d1 extends Twig_Template
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
        echo " Mis pagos ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Mis pagos</h1>
        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                ";
        // line 12
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 13
            echo "                    <h2>Este cliente aún no ha realizado pagos</h2>
                ";
        } else {
            // line 15
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover \">
                            <thead>
                                <tr>
                                    <th>";
            // line 19
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha de pago", "p.fechaPago");
            echo "</th>
                                    <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Concepto", "p.concepto");
            echo "</th>
                                    <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "p.idConcepto");
            echo "</th>
                                    <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Importe", "p.cuantia");
            echo "</th>
                                </tr>
                            </thead>
                            <tbody>

                                ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["pago"]) {
                // line 28
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pago"], "fechaPago", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        ";
                // line 31
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "concepto", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidades"]) ? $context["entidades"] : $this->getContext($context, "entidades")), $this->getAttribute($context["pago"], "id", array()), array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "cuantia", array()), "html", null, true);
                echo "€</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pago'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 40
        echo "                <div class=\"navigation text-center\" style=\"margin: -10px\">
                    ";
        // line 41
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")) {
            // line 46
            echo "            <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\">Volver atrás</a>
        ";
        } else {
            // line 48
            echo "            <a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("moduloclientes_cliente_mensajes_recibidosCliente");
            echo "\">Volver atrás</a>
        ";
        }
        // line 50
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Usuarios:pagosCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 50,  143 => 48,  137 => 46,  135 => 45,  128 => 41,  125 => 40,  119 => 36,  110 => 33,  106 => 32,  101 => 31,  97 => 29,  92 => 28,  88 => 27,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  62 => 15,  58 => 13,  56 => 12,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
