<?php

/* CriveroPruebaBundle:Default:inicio.html.twig */
class __TwigTemplate_4d576b7d7712eb16a66fce1239fb845dc0f92ac09641619cc1a2555c3b829192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido!";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"container\" style=\"\">
        <div class=\"row\">
            <div class=\"col-lg-6\" style=\"display: inline;float: right;\">
                <h3 class=\"nothing \" >Nuestras instalaciones</h3>
                <p>fefbewfkefefiehefiefe ijfejfiojiojieofjioo fefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioo
                    fefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioo
                    fefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioo</p>
            </div>
            <div class=\"main col-lg-6\" style=\" width: 50%; max-width: none; margin: 0\" >
                <div class=\"slides\">
                    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 22
            echo "                        <div class=\"image\">
                            ";
            // line 23
            if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
                // line 24
                echo "                                <img class=\"img-thumbnail\" style=\"width: 100%\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo ">
                            ";
            } else {
                // line 26
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" style=\"max-width: 91%\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo " >
                            ";
            }
            // line 28
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"main col-lg-6\" style=\" float: right;width: 50%; max-width: none;\" >
                <div class=\"slides\">
                    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 38
            echo "                        <div class=\"image\">
                            ";
            // line 39
            if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
                // line 40
                echo "                                <img class=\"img-thumbnail\" style=\"width: 100%\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo ">
                            ";
            } else {
                // line 42
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" style=\"max-width: 91%\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo " >
                            ";
            }
            // line 44
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </div>
            </div>
            <div class=\"col-lg-6\" style=\"display: inline;\">
                <h3 class=\"nothing \" >Nuestras instalaciones</h3>
                <p>fefbewfkefefiehefiefe ijfejfiojiojieofjioo fefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioo
                    fefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioo
                    fefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioofefbewfkefefiehefiefe ijfejfiojiojieofjioo</p>
            </div>
        </div>

    </div>

";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slides.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 62
        if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
            // line 63
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



                \$('.slidesjs-stop').addClass('hidden');
                \$('.slidesjs-play').addClass('hidden');
                \$('.slidesjs-next').addClass('hidden');
                \$('.slidesjs-previous').addClass('hidden');
                \$('.slidesjs-pagination').addClass('hidden');

                \$('.slidesjs-container').css('height', \"700px\");
                \$('.slidesjs-container').css('width', \"580px\");
            });



        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 63,  176 => 62,  172 => 61,  167 => 60,  164 => 59,  148 => 46,  141 => 44,  133 => 42,  125 => 40,  123 => 39,  120 => 38,  116 => 37,  107 => 30,  100 => 28,  92 => 26,  84 => 24,  82 => 23,  79 => 22,  75 => 21,  62 => 10,  59 => 9,  53 => 6,  48 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
