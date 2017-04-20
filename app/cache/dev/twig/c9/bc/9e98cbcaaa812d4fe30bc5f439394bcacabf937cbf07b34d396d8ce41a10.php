<?php

/* modulomonitoresmonitoresBundle:Default:forms/form.html.twig */
class __TwigTemplate_c9bc9e98cbcaaa812d4fe30bc5f439394bcacabf937cbf07b34d396d8ce41a10 extends Twig_Template
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
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"button\" value=\"";
        // line 5
        echo "Eliminar";
        echo "\" class=\"btn btn-danger \" style=\"height: 30px; width: 250px;\" 
           onclick=\"return confirmarEliminar()\" >

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

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
        return "modulomonitoresmonitoresBundle:Default:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  29 => 5,  25 => 4,  19 => 1,);
    }
}
