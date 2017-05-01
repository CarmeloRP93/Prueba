<?php

/* CriveroPruebaBundle:Default:messages/success2.html.twig */
class __TwigTemplate_99cad9c81280612658b3a66fdc589c1b9d87efc6b265a0482652a93b7dd0cbb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "\t<div class=\"alert alert-success hidden\" id=\"message\" style=\"margin-top: -20px\" role=\"alert\">
\t\t<div class=\"container\">
\t\t\t<span id=\"user-message\"></span>
\t\t</div>
\t</div>
    <br>
";
        }
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "\t<div class=\"alert alert-success\" style=\"margin-top: -38px\" role=\"alert\">
\t\t<div class=\"container\"> ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:messages/success2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  37 => 11,  33 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
