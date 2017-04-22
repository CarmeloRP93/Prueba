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
        echo " Pagos ";
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
            <h1 class=\"t1\">Pagos</h1>
        </div>

        ";
        // line 13
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 14
            echo "            <h2>Este cliente aún no ha realizado pagos</h2>
        ";
        } else {
            // line 16
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 20
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "p.fechaPago");
            echo "</th>
                            <th>";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tipo", "p.tipoPago");
            echo "</th>
                            <th>";
            // line 22
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Concepto", "p.concepto");
            echo "</th>
                            <th>";
            // line 23
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cuantia", "p.cuantia");
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["pago"]) {
                // line 29
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pago"], "fechaPago", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "tipoPago", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["pago"], "concepto", array()), "html", null, true);
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
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 40
        echo "        <div>
            <div class=\"navigation\">
                ";
        // line 42
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
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
        return array (  130 => 42,  126 => 40,  120 => 36,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  94 => 29,  90 => 28,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  64 => 16,  60 => 14,  58 => 13,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
