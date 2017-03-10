<?php

/* CriveroPruebaBundle:Default:forms/form.html.twig */
class __TwigTemplate_9906cf96730c17e4af8473af8e01e70f693e71e57e59794ddc45e60ccf92a6f9 extends Twig_Template
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
            echo "Eliminar usuario";
            echo "\" class=\"btn btn-danger\" 
               onclick=\"confirmarEliminar()\" >
    ";
        }
        // line 8
        echo "
";
        // line 9
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
        return "CriveroPruebaBundle:Default:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  37 => 8,  30 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': id|default('form')}} ) }}

    {{ form_widget(form) }}
    {% if with_submit is not defined or with_submit == true %}
        <input type=\"button\" value=\"{{ 'Eliminar usuario' }}\" class=\"btn btn-danger\" 
               onclick=\"confirmarEliminar()\" >
    {% endif %}

{{ form_end(form) }}

<script>
    function confirmarEliminar() {
        bootbox.confirm ('¿Estas seguro?', function(result) {
           if (result === true) {
               document.getElementById(\"form\").submit();
           } 
        });
    }
</script>
", "CriveroPruebaBundle:Default:forms/form.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Default/forms/form.html.twig");
    }
}
