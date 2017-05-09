<?php

/* modulomonitoresmonitoresBundle:Perfil:homeMonitor.html.twig */
class __TwigTemplate_6bf24e203f9bca681d17c8b4770e24503d25da15229e30ef011826488652dee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("modulomonitoresmonitoresBundle::main.html.twig");
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
        return "modulomonitoresmonitoresBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Home ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container\">        
        <div class=\"page-header\">    
            <h1 class=\"t3 text-center\">Novedades</h1>
        </div>
        <div class=\"main\">
            <div class=\"slides\">
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 15
            echo "                    <div class=\"image\">
                        ";
            // line 16
            if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
                // line 17
                echo "                            <img class=\"img-thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo ">
                        ";
            } else {
                // line 19
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" style=\"max-width: 91%\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo " >
                        ";
            }
            // line 21
            echo "                        <h3><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
            echo "</span></h3>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-4 col-lg-offset-4\">
                <h1 class=\"t3 text-center\">Modernas aulas totalmente equipadas</h1>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\" >
                <div class=\"slides2\">
                    ";
        // line 32
        $context["n"] = 0;
        echo " 
                    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aulas"]) ? $context["aulas"] : $this->getContext($context, "aulas")));
        foreach ($context['_seq'] as $context["_key"] => $context["aula"]) {
            if (((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) < 4)) {
                // line 34
                echo "                        <div class=\"image\">
                            ";
                // line 35
                if ((twig_length_filter($this->env, (isset($context["aulas"]) ? $context["aulas"] : $this->getContext($context, "aulas"))) > 1)) {
                    // line 36
                    echo "                                <img class=\"img-thumbnail\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["aula"], "imagen", array()))), "html", null, true);
                    echo "\" title=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "nombre", array()), "html", null, true);
                    echo ">
                            ";
                } else {
                    // line 38
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["aula"], "imagen", array()))), "html", null, true);
                    echo "\" style=\"max-width: 91%\" title=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "nombre", array()), "html", null, true);
                    echo " >
                            ";
                }
                // line 40
                echo "                        </div>
                        ";
                // line 41
                $context["n"] = ((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) + 1);
                // line 42
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0\" >
                <div class=\"slides2\">
                    ";
        // line 49
        $context["n"] = 0;
        echo " 
                    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
            if (((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) < 4)) {
                // line 51
                echo "                        <div class=\"image\">
                            ";
                // line 52
                if ((twig_length_filter($this->env, (isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas"))) > 1)) {
                    // line 53
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_cancha", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                    echo "\"><img class=\"img-thumbnail\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["cancha"], "imagen", array()))), "html", null, true);
                    echo "\" title=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
                    echo "></a>
                            ";
                } else {
                    // line 55
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulomonitores_monitores_cancha", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($context["cancha"], "imagen", array()))), "html", null, true);
                    echo "\" style=\"max-width: 91%\" title=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
                    echo " ></a>
                            ";
                }
                // line 57
                echo "                        </div>
                        ";
                // line 58
                $context["n"] = ((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) + 1);
                // line 59
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </div>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\" >
                <h1 class=\"t3 text-center\">Diversidad de canchas a tu alcance</h1>
            </div>
        </div>
    </div>
";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slides.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 72
        if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
            // line 73
            echo "        <script>
            \$(function () {
                \$(\".slides\").slidesjs({
                    play: {
                        active: false,
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
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/stop-xxl.png"), "html", null, true);
            echo "\" style=\"width: 13px; border-radius: 0px\" />';
                var play = '<img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/white-play-512.png"), "html", null, true);
            echo "\" style=\"width: 19.4px; border-radius: 0px\" />';
                var next = '<img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/next.png"), "html", null, true);
            echo "\" style=\"width: 17px; border-radius: 0px\" />';
                var previous = '<img src=\"";
            // line 97
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
        // line 109
        echo "
    ";
        // line 110
        if ((twig_length_filter($this->env, (isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas"))) > 1)) {
            // line 111
            echo "        <script>
            \$(function () {
                \$(\".slides2\").slidesjs({
                    play: {
                        active: true,
                        // [boolean] Generate the play and stop buttons.
                        // You cannot use your own buttons. Sorry.
                        effect: \"slide\",
                        // [string] Can be either \"slide\" or \"fade\".
                        interval: 3000,
                        // [number] Time spent on each slide in milliseconds.
                        auto: true,
                        // [boolean] Start playing the slideshow on load.
                        swap: true,
                        // [boolean] show/hide stop and play buttons
                        pauseOnHover: true,
                        // [boolean] pause a playing slideshow on hover
                        restartDelay: 3000
                                // [number] restart delay on inactive slideshow
                    }
                });
                var stop = '<img src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/stop-xxl.png"), "html", null, true);
            echo "\" style=\"width: 13px; border-radius: 0px\" />';
                var play = '<img src=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/white-play-512.png"), "html", null, true);
            echo "\" style=\"width: 19.4px; border-radius: 0px\" />';
                var next = '<img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/next.png"), "html", null, true);
            echo "\" style=\"width: 17px; border-radius: 0px\" />';
                var previous = '<img src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/previous.png"), "html", null, true);
            echo "\" style=\"width: 10px; border-radius: 0px\" />';
                \$('.slidesjs-stop').append(stop);
                \$('.slidesjs-stop').addClass(\"hidden-xs hidden-sm hidden-md\");
                \$('.slidesjs-play').append(play);
                \$('.slidesjs-play').addClass(\"hidden-xs hidden-sm hidden-md\");
                \$('.slidesjs-next').append(next);
                \$('.slidesjs-next').addClass(\"hidden-xs hidden-sm hidden-md\");
                \$('.slidesjs-previous').append(previous);
                \$('.slidesjs-previous').addClass(\"hidden-xs hidden-sm hidden-md\");
            });
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "modulomonitoresmonitoresBundle:Perfil:homeMonitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 135,  322 => 134,  318 => 133,  314 => 132,  291 => 111,  289 => 110,  286 => 109,  271 => 97,  267 => 96,  263 => 95,  259 => 94,  236 => 73,  234 => 72,  230 => 71,  225 => 70,  222 => 69,  211 => 60,  204 => 59,  202 => 58,  199 => 57,  189 => 55,  179 => 53,  177 => 52,  174 => 51,  169 => 50,  165 => 49,  157 => 43,  150 => 42,  148 => 41,  145 => 40,  137 => 38,  129 => 36,  127 => 35,  124 => 34,  119 => 33,  115 => 32,  105 => 24,  95 => 21,  87 => 19,  79 => 17,  77 => 16,  74 => 15,  70 => 14,  62 => 8,  59 => 7,  53 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
