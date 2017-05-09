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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"main\" >
        <div class=\"slides\">
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 14
            echo "                <div class=\"image\">
                    ";
            // line 15
            if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
                // line 16
                echo "                        <img class=\"img-thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo ">
                    ";
            } else {
                // line 18
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" style=\"max-width: 91%\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo " >
                    ";
            }
            // line 20
            echo "                    <h3><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
            echo "</span></h3>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>

";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slides.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
            // line 32
            echo "        <script>

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


                var stop = '<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/stop-xxl.png"), "html", null, true);
            echo "\" style=\"width: 13px; border-radius: 0px\" />';
                var play = '<img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/white-play-512.png"), "html", null, true);
            echo "\" style=\"width: 19.4px; border-radius: 0px\" />';
                var next = '<img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/next.png"), "html", null, true);
            echo "\" style=\"width: 17px; border-radius: 0px\" />';
                var previous = '<img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/previous.png"), "html", null, true);
            echo "\" style=\"width: 10px; border-radius: 0px\" />';
                \$('.slidesjs-stop').append(stop);
                \$('.slidesjs-stop').addClass(\"hidden-xs\");
                \$('.slidesjs-play').append(play);
                \$('.slidesjs-play').addClass(\"hidden-xs\");
                \$('.slidesjs-next').append(next);
                \$('.slidesjs-next').addClass(\"hidden-xs\");
                \$('.slidesjs-previous').append(previous);
                \$('.slidesjs-previous').addClass(\"hidden-xs\");
            });



        </script>
    ";
        }
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
        return array (  161 => 59,  157 => 58,  153 => 57,  149 => 56,  123 => 32,  121 => 31,  117 => 30,  112 => 29,  109 => 28,  102 => 23,  92 => 20,  84 => 18,  76 => 16,  74 => 15,  71 => 14,  67 => 13,  62 => 10,  59 => 9,  53 => 7,  48 => 6,  45 => 5,  39 => 4,  11 => 1,);
    }
}
