<?php

/* CriveroPruebaBundle:Publicaciones:publicaciones.html.twig */
class __TwigTemplate_560322a198bc81047a9c001e23c622148046e9fa3931f71477cd7de9eeffb1d9 extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Publicaciones";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        // line 11
        echo "
    <div class=\"main\">
        <div class=\"slides\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Tulips.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/futbol (1).jpg"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/kickboxing.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>

    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
    <script>

        \$(function () {
            \$(\".slides\").slidesjs({
                play: {
                    active: true,
                    // [boolean] Generate the play and stop buttons.
                    // You cannot use your own buttons. Sorry.
                    effect: \"fade\",
                    // [string] Can be either \"slide\" or \"fade\".
                    interval: 5000,
                    // [number] Time spent on each slide in milliseconds.
                    auto: true,
                    // [boolean] Start playing the slideshow on load.
                    swap: true,
                    // [boolean] show/hide stop and play buttons
                    pauseOnHover: false,
                    // [boolean] pause a playing slideshow on hover
                    restartDelay: 3000
                            // [number] restart delay on inactive slideshow
                }
            });
            

            var stop= '<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/stop-xxl.png"), "html", null, true);
        echo "\" style=\"width: 13px; border-radius: 0px\" />';
            var play= '<img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/white-play-512.png"), "html", null, true);
        echo "\" style=\"width: 19.4px; border-radius: 0px\" />';
            var next= '<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/next.png"), "html", null, true);
        echo "\" style=\"width: 17px; border-radius: 0px\" />';
            var previous= '<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/previous.png"), "html", null, true);
        echo "\" style=\"width: 10px; border-radius: 0px\" />';
            \$('.slidesjs-stop').append(stop);
            \$('.slidesjs-play').append(play);
            \$('.slidesjs-next').append(next);
            \$('.slidesjs-previous').append(previous);
        });


    </script>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slides.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slides.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Publicaciones:publicaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 23,  149 => 22,  144 => 21,  141 => 20,  127 => 53,  123 => 52,  119 => 51,  115 => 50,  88 => 25,  86 => 20,  79 => 16,  75 => 15,  71 => 14,  66 => 11,  63 => 10,  57 => 8,  53 => 7,  48 => 6,  45 => 5,  39 => 4,  11 => 1,);
    }
}
