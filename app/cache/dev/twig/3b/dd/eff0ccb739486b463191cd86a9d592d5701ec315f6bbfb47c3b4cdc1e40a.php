<?php

/* CriveroPruebaBundle:Default:forms/form.html.twig */
class __TwigTemplate_3bddeff0ccb739486b463191cd86a9d592d5701ec315f6bbfb47c3b4cdc1e40a extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "form")) : ("form")))));
        echo "

    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 4
        if (( !array_key_exists("with_submit", $context) || ((isset($context["with_submit"]) ? $context["with_submit"] : $this->getContext($context, "with_submit")) == true))) {
            // line 5
            echo "        <input type=\"button\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
            echo "\" class=\"btn btn-danger active\" 
               onclick=\"confirmarEliminar()\" >
    ";
        }
        // line 8
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
<script>
    function confirmarEliminar() {
        bootbox.confirm ('¿Estas seguro?', function(result) {
           if (result === true) {
               document.getElementById(\"form\").submit();
           } 
        });
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 9,  37 => 8,  30 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
