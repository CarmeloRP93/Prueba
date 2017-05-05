<?php

/* CriveroPruebaBundle:Default:messages/success.html.twig */
class __TwigTemplate_4f487e4d60eed834550ca411b660691a63523e31d7a62b921901493dc9ffca48 extends Twig_Template
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
";
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "\t<div class=\"alert alert-success\" style=\"margin-top: -20px; margin-bottom: 0\" role=\"alert\">
\t\t<div class=\"container\"> ";
            // line 11
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
        return "CriveroPruebaBundle:Default:messages/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  36 => 10,  32 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
