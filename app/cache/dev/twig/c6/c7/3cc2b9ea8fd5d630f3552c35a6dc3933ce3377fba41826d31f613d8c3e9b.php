<?php

/* CriveroPruebaBundle:Usuarios:clientes.html.twig */
class __TwigTemplate_c6c73cc2b9ea8fd5d630f3552c35a6dc3933ce3377fba41826d31f613d8c3e9b extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Clientes ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    ";
        // line 13
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:messages/success.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Clientes</h1>
        </div>
        ";
        // line 18
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 19
            echo "            <h2>No se encontraron clientes.</h2>
        ";
        } else {
            // line 21
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 25
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Usuario", "u.username");
            echo "</th>
                            <th>";
            // line 26
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "u.nombre");
            echo "</th>
                            <th>";
            // line 27
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Correo electrónico", "u.email");
            echo "</th>
                            <th>";
            // line 28
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Creado", "u.registro");
            echo "</th>
                            <td><strong>Acciones</strong></td>
                        </tr>
                    </thead>
                    <tbody>

                        ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 35
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
                echo "\">
                                <td><strong>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
                echo "</strong></td>
                                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "registro", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    
                                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                        Ver
                                    </a>
                                    <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_editarUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                        Editar
                                    </a>
                                    <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_pagos_usuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\">
                                        Pagos
                                    </a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 61
        echo "        <div>
            ";
        // line 65
        echo "            <div class=\"navigation\">
                ";
        // line 66
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>

    ";
        // line 71
        echo twig_include($this->env, $context, "CriveroPruebaBundle:Default:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "id" => "form-delete", "with_submit" => false));
        echo "

";
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/criveroprueba/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Usuarios:clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 76,  181 => 75,  178 => 74,  171 => 71,  163 => 66,  160 => 65,  157 => 61,  151 => 57,  136 => 48,  130 => 45,  124 => 42,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  101 => 35,  97 => 34,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  70 => 21,  66 => 19,  64 => 18,  56 => 13,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
