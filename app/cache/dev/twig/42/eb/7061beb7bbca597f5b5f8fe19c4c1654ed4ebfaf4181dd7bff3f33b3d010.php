<?php

/* moduloclientesclienteBundle:Canchas:canchasClientes.html.twig */
class __TwigTemplate_42eb7061beb7bbca597f5b5f8fe19c4c1654ed4ebfaf4181dd7bff3f33b3d010 extends Twig_Template
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
        echo " Vista de Canchas ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        echo "          
    <div class=\"progress no-border hidden\" id=\"delete-progress\" style=\"margin-top: -20px\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"t1\">Canchas</h1>
        </div>
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-body myelement\">
                ";
        // line 16
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 17
            echo "                    <h2>No se encontraron canchas</h2>
                ";
        } else {
            // line 19
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 23
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre", "c.tipo");
            echo "</th>
                                    <th>";
            // line 24
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Deporte", "c.deporte");
            echo "</th>
                                    <th>";
            // line 25
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "c.disponibilidad");
            echo "</th>
                                    <th><div class=\"hidden-xs\">";
            // line 26
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Horario", "c.horario");
            echo "</div></th>
                                    <th class=\"t3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
                // line 32
                echo "                                    <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "deporte", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 35
                if (($this->getAttribute($context["cancha"], "disponibilidad", array()) != "Disponible")) {
                    // line 36
                    echo "                                            <td><strong><font color=\"red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
                    echo "</font></strong></td>                                                                                         
                                                ";
                } else {
                    // line 37
                    echo "                                              
                                            <td><strong>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
                    echo "</strong></td>                                               
                                        ";
                }
                // line 40
                echo "                                        <td><div class=\"hidden-xs\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "horario", array()), "html", null, true);
                echo "</div></td>
                                        <td class=\"actions\">
                                            ";
                // line 42
                if (($this->getAttribute($context["cancha"], "disponibilidad", array()) != "Disponible")) {
                    // line 43
                    echo "                                                <button class=\"btn btn-sm btn-info\" disabled>Ver</button>
                                            ";
                } else {
                    // line 44
                    echo "                                              
                                                <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">
                                                    Ver
                                                </a>
                                            ";
                }
                // line 49
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 55
        echo "        
                <div>
                    <div class=\"navigation\">
                        ";
        // line 58
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                </div>
            </div>                     
        </div>                     
    </div>                     
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Canchas:canchasClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  161 => 55,  155 => 52,  147 => 49,  140 => 45,  137 => 44,  133 => 43,  131 => 42,  125 => 40,  120 => 38,  117 => 37,  111 => 36,  109 => 35,  105 => 34,  101 => 33,  96 => 32,  92 => 31,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  66 => 19,  62 => 17,  60 => 16,  43 => 3,  37 => 2,  11 => 1,);
    }
}
