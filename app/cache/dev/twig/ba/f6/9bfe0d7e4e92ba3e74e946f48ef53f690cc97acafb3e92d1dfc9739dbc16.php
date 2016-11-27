<?php

/* CriveroPruebaBundle:Default:clientes.html.twig */
class __TwigTemplate_baf69bfe0d7e4e92ba3e74e946f48ef53f690cc97acafb3e92d1dfc9739dbc16 extends Twig_Template
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
        echo "Clientes ";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"text-center\">Clientes</h1>

<div class=\"\">
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Creado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        
";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 21
            echo "            <tr>
            ";
            // line 22
            if (($this->getAttribute($context["usuario"], "tipo", array()) == 2)) {
                // line 23
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "registro", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                <td class=\"actions\">
                    <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_cliente", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                        Ver
                    </a>
                    <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crivero_prueba_editar", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                        Editar
                    </a>
                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                        Eliminar
                    </a>
                </td>
            ";
            }
            // line 38
            echo "            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</div>
    <div class=\"nuevoUsuario\">
        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("crivero_prueba_nuevo");
        echo "\" class=\"btn btn-success\" style=\"height: 30px; width: 150px;\">Nuevo Usuario <span class=\"glyphicon glyphicon-plus\"></span></a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  109 => 40,  102 => 38,  91 => 30,  85 => 27,  80 => 25,  76 => 24,  71 => 23,  69 => 22,  66 => 21,  62 => 20,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
