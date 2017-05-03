<?php

/* CriveroPruebaBundle:Usuarios:pagos.html.twig */
class __TwigTemplate_f23249b136e4fba630ab8f4be0674b9981ef55ce0b4b796f58af5c53b87d79ba extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array())), "html", null, true);
        echo " - Pagos ";
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
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array())), "html", null, true);
        echo " - Pagos </h1>
        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-body myelement\">
                ";
        // line 15
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 16
            echo "                    <h2>Este cliente aún no ha realizado pagos</h2>
                ";
        } else {
            // line 18
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover \">
                            <thead>
                                <tr>
                                    <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha de pago", "p.fechaPago");
            echo "</th>
                                        ";
            // line 24
            echo "                                    <th>";
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Concepto", "p.concepto");
            echo "</th>
                                    <th>";
            // line 25
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Asunto", "p.idConcepto");
            echo "</th>
                                    <th>";
            // line 26
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Importe", "p.cuantia");
            echo "</th>
                                </tr>
                            </thead>
                            <tbody>

                                ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["pago"]) {
                // line 32
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pago"], "fechaPago", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        ";
                // line 35
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "concepto", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidades"]) ? $context["entidades"] : $this->getContext($context, "entidades")), $this->getAttribute($context["pago"], "id", array()), array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "cuantia", array()), "html", null, true);
                echo "€</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pago'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 44
        echo "                <div class=\"navigation text-center\" style=\"margin: -10px\">
                    ";
        // line 45
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
        <a class=\"btn btn-default\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">Volver atrás</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:pagos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 49,  138 => 45,  135 => 44,  129 => 40,  120 => 37,  116 => 36,  111 => 35,  107 => 33,  102 => 32,  98 => 31,  90 => 26,  86 => 25,  81 => 24,  77 => 22,  71 => 18,  67 => 16,  65 => 15,  57 => 10,  51 => 7,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
