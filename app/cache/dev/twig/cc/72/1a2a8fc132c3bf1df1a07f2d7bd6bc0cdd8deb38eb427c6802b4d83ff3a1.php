<?php

/* moduloclientesclienteBundle:Default:reservaClientes.html.twig */
class __TwigTemplate_cc721a2a8fc132c3bf1df1a07f2d7bd6bc0cdd8deb38eb427c6802b4d83ff3a1 extends Twig_Template
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
        echo "Vista de la reserva de ";
        echo " ";
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container text-center\">
        <h3>Detalles de Reserva</h3>
        <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "tipo", array()), "html", null, true);
        echo "<h3>
                </div>

                <div class=\"text-center\">
                    <h4>Nombre de la cancha</h4>
                </div>

                <div class=\"col-md-6 col-xs-12\">

                    <div class=\"text-center\">
                        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cancha_de_marmolejo.jpg"), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>


                        <br>
                        <div class=\"text-center\">
                            <button class=\"btn btn-danger\">Cancelar</button>
                        </div>

                    </div><br>

                </div>

                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Día: </label>
                        <label class=\"control-label span7 text-right\">15/11/2016 </label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Horario: </label>
                        <label class=\"control-label span7 text-right\">15:00 - 18:30 </label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Dimensiones: </label>
                        <label class=\"control-label span7 text-right\">100 m2</label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Valoracion: </label>
                        <label class=\" text-right\">5.0/5.0</label>
                    </div>

                    <div class=\"text-center\">
                        <label class=\"control-label span7 text-left\">Dirección: </label>
                        <label class=\"control-label span7 text-right\">Calle Desengaño, 21</label>
                    </div><br>

                </div>
            ";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Default:reservaClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  51 => 7,  47 => 5,  44 => 4,  37 => 3,  11 => 1,);
    }
}
