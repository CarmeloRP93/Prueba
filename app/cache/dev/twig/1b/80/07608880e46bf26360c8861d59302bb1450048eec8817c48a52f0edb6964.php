<?php

/* moduloclientesclienteBundle:Default:sesionClientes.html.twig */
class __TwigTemplate_1b8007608880e46bf26360c8861d59302bb1450048eec8817c48a52f0edb6964 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"text-center\">
        <h3>
            Sesion ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "id", array()), "html", null, true);
        echo " 
            <small class=\"text-muted\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "nombre", array()), "html", null, true);
        echo "</small>
        </h3>
    </div>
    <div id=\"sesiondat\">
        <div id=\"sesionfot\" style=\"margin-top: 14px;\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "imagen", array())), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />        
        </div>
        ";
        // line 15
        if (($this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "Disponible")) {
            // line 16
            echo "            <div class=\"accionesesion\">
                <a data-toggle=\"modal\" data-target=\"#comprita\" class=\"btn btn-primary text-center center-block\" style=\"height: 30px; width: 600px;\">Apuntarse <span class=\"glyphicon glyphicon-pencil\"></span></a>
                        <div class=\"modal fade\" id=\"comprita\">
                            <div style=\"width: 35%\" class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\" ><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                        <h4 class=\"modal-title\">Datos de compra</h4>
                                    </div>
                                    <div style=\"margin-left: 30px;\" class=\"modal-body\">
                                        <form name=\"formulario\" action=\"FrontController\" method=\"GET\">

                                            <label>DNI</label>
                                            <input style=\"margin-bottom: 14px; width: 200px;\" required type=\"text\" name=\"dni\" maxlength=\"8\" placeholder=\"Ej: 12345678\" class=\"form-control\">

                                                    <div class=\"form-group\">
                                                        <label >Cupón</label>
                                                        <input style=\"margin-bottom: 14px; width: 200px;\"  type=\"text\"  pattern=\"[A-Za-z]+\"  name=\"cupon\" placeholder=\"cupón\" class=\"form-control\" >
                                                    </div>
                                            <label for=\"email\">Email</label>
                                            <input style=\"margin-bottom: 14px; width: 350px\" required type=\"email\" class=\"form-control\"  placeholder=\"Introduce tu email\" name=\"email\">

                                            <div class=\"row\">
                                                    <div class=\"form-group\">
                                                        <label>Número de Tarjeta</label>
                                                        <input style=\"margin-bottom: 14px; width: 350px;\" required type=\"text\" name=\"tarjeta\" class=\"form-control\" placeholder=\"16 dígitos\" maxlength=\"16\" >
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label >Código Tarjeta</label>
                                                        <input style=\"margin-bottom: 14px; width: 50px;\" required type=\"password\" maxlength=\"3\" name=\"cod\" placeholder=\"***\" class=\"form-control\" >
                                                    </div>
                                            </div>                                            
                                            <label>
                                                <input style=\"margin-bottom: 14px;\" required type=\"checkbox\" value=\"\" name=\"checkbox\" >
                                                He leido y acepto la <a href=\"http://es.jimdo.com/info/pol%C3%ADtica-de-privacidad/\" target=\"_blank\">politica de proteccion de datos</a>
                                            </label>

                                            <input type=\"hidden\" name=\"command\" value=\"ConfirmarCompra\" ><br>
                                            <button type=\"submit\" name=\"boton\" class=\"btn btn-primary\">Confirmar</button>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            
            
        ";
        } elseif (($this->getAttribute(        // line 65
(isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "estadoCliente", array()) == "Apuntado")) {
            // line 66
            echo "            <div class=\"accionesesion text-center\" >
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-success\">Apuntado</button>
            </div>

        ";
        } else {
            // line 71
            echo "            <div class=\"accionesesion text-center\">
                <button style=\"height: 30px; width: 600px;\" class=\"btn btn-danger\">Completo</button>
            </div>
        ";
        }
        // line 75
        echo "        
        <div class=\"row\">
            <div id=\"colizq\" class=\"col-md-4 col-md-offset-3\" >
                <h4>Monitor:</h4> <p>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "monitor", array()), "html", null, true);
        echo "</p>
                <h4>Ejercicios:</h4> <p>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "ejercicios", array()), "html", null, true);
        echo "</p>
                <h4>Repeticiones:</h4> <p>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "repeticiones", array()), "html", null, true);
        echo " por ejercicio</p>
            </div>
            <div id=\"colder\" class=\"col-md-4\">
                <h4>Tiempo estimado:</h4> <p>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "duracion", array()), "html", null, true);
        echo " minutos</p>
                <h4>Descanso entre ejercicios:</h4> <p>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "descanso", array()), "html", null, true);
        echo " minutos</p>
                <h4>Objetivo:</h4> <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sesion"]) ? $context["sesion"] : $this->getContext($context, "sesion")), "objetivo", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Default:sesionClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 85,  160 => 84,  156 => 83,  150 => 80,  146 => 79,  142 => 78,  137 => 75,  131 => 71,  124 => 66,  122 => 65,  71 => 16,  69 => 15,  64 => 13,  56 => 8,  52 => 7,  48 => 5,  45 => 4,  37 => 3,  11 => 1,);
    }
}
