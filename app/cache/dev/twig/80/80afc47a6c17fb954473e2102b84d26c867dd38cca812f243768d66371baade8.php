<?php

/* moduloclientesclienteBundle:Usuarios:homeCliente.html.twig */
class __TwigTemplate_6bb55723cbb7f38bafda9f8712a27cb084c64a66f2d5c1c31c503adf531e1233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("moduloclientesclienteBundle::main.html.twig", "moduloclientesclienteBundle:Usuarios:homeCliente.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/slider.css"), "html", null, true);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 15
            echo "                    <div class=\"image\">
                        ";
            // line 16
            if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
                // line 17
                echo "                            <img class=\"img-thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo ">
                        ";
            } else {
                // line 19
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
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
        $context['_parent'] = $context;
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["aula"], "imagen", array()))), "html", null, true);
                    echo "\" title=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "nombre", array()), "html", null, true);
                    echo ">
                            ";
                } else {
                    // line 38
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["aula"], "imagen", array()))), "html", null, true);
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
        $context['_parent'] = $context;
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                    echo "\"><img class=\"img-thumbnail\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["cancha"], "imagen", array()))), "html", null, true);
                    echo "\" title=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "tipo", array()), "html", null, true);
                    echo "></a>
                            ";
                } else {
                    // line 55
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moduloclientes_cliente_canchaClientes", array("id" => $this->getAttribute($context["cancha"], "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["cancha"], "imagen", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/jquery.slides.js"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/stop-xxl.png"), "html", null, true);
            echo "\" style=\"width: 13px; border-radius: 0px\" />';
                var play = '<img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/white-play-512.png"), "html", null, true);
            echo "\" style=\"width: 19.4px; border-radius: 0px\" />';
                var next = '<img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/next.png"), "html", null, true);
            echo "\" style=\"width: 17px; border-radius: 0px\" />';
                var previous = '<img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/previous.png"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/stop-xxl.png"), "html", null, true);
            echo "\" style=\"width: 13px; border-radius: 0px\" />';
                var play = '<img src=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/white-play-512.png"), "html", null, true);
            echo "\" style=\"width: 19.4px; border-radius: 0px\" />';
                var next = '<img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/next.png"), "html", null, true);
            echo "\" style=\"width: 17px; border-radius: 0px\" />';
                var previous = '<img src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/previous.png"), "html", null, true);
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
        return "moduloclientesclienteBundle:Usuarios:homeCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 135,  314 => 134,  310 => 133,  306 => 132,  283 => 111,  281 => 110,  278 => 109,  263 => 97,  259 => 96,  255 => 95,  251 => 94,  228 => 73,  226 => 72,  222 => 71,  217 => 70,  214 => 69,  203 => 60,  196 => 59,  194 => 58,  191 => 57,  181 => 55,  171 => 53,  169 => 52,  166 => 51,  161 => 50,  157 => 49,  149 => 43,  142 => 42,  140 => 41,  137 => 40,  129 => 38,  121 => 36,  119 => 35,  116 => 34,  111 => 33,  107 => 32,  97 => 24,  87 => 21,  79 => 19,  71 => 17,  69 => 16,  66 => 15,  62 => 14,  54 => 8,  51 => 7,  45 => 5,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'moduloclientesclienteBundle::main.html.twig' %}
{% block title %} Home {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/slider.css') }}\" type=\"text/css\" rel=\"stylesheet\">
{% endblock %}
{% block contenido %}
    <div class=\"container\">        
        <div class=\"page-header\">    
            <h1 class=\"t3 text-center\">Novedades</h1>
        </div>
        <div class=\"main\">
            <div class=\"slides\">
                {% for publicacion in publicaciones %}
                    <div class=\"image\">
                        {% if publicaciones|length > 1 %}
                            <img class=\"img-thumbnail\" src=\"{{asset('images/'~publicacion.imagen)}}\" title={{publicacion.titulo}}>
                        {% else %}
                            <img src=\"{{asset('images/'~publicacion.imagen)}}\" style=\"max-width: 91%\" title={{publicacion.titulo}} >
                        {% endif %}
                        <h3><span>{{publicacion.titulo}}</span></h3>
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-4 col-lg-offset-4\">
                <h1 class=\"t3 text-center\">Modernas aulas totalmente equipadas</h1>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\" >
                <div class=\"slides2\">
                    {% set n = 0 %} 
                    {% for aula in aulas if n < 4 %}
                        <div class=\"image\">
                            {% if aulas|length > 1 %}
                                <img class=\"img-thumbnail\" src=\"{{asset('images/'~aula.imagen)}}\" title={{aula.nombre}}>
                            {% else %}
                                <img src=\"{{asset('images/'~aula.imagen)}}\" style=\"max-width: 91%\" title={{aula.nombre}} >
                            {% endif %}
                        </div>
                        {% set n = n + 1 %}
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0\" >
                <div class=\"slides2\">
                    {% set n = 0 %} 
                    {% for cancha in canchas if n < 4 %}
                        <div class=\"image\">
                            {% if canchas|length > 1 %}
                                <a href=\"{{ path('moduloclientes_cliente_canchaClientes', { id: cancha.id }) }}\"><img class=\"img-thumbnail\" src=\"{{asset('images/'~cancha.imagen)}}\" title={{cancha.tipo}}></a>
                            {% else %}
                                <a href=\"{{ path('moduloclientes_cliente_canchaClientes', { id: cancha.id }) }}\"><img src=\"{{asset('images/'~cancha.imagen)}}\" style=\"max-width: 91%\" title={{cancha.tipo}} ></a>
                            {% endif %}
                        </div>
                        {% set n = n + 1 %}
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\" >
                <h1 class=\"t3 text-center\">Diversidad de canchas a tu alcance</h1>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{asset ('js/jquery.slides.js')}}\"></script>
    {% if publicaciones|length > 1 %}
        <script>
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
                var stop = '<img src=\"{{asset('images/stop-xxl.png')}}\" style=\"width: 13px; border-radius: 0px\" />';
                var play = '<img src=\"{{asset('images/white-play-512.png')}}\" style=\"width: 19.4px; border-radius: 0px\" />';
                var next = '<img src=\"{{asset('images/next.png')}}\" style=\"width: 17px; border-radius: 0px\" />';
                var previous = '<img src=\"{{asset('images/previous.png')}}\" style=\"width: 10px; border-radius: 0px\" />';
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
    {% endif %}

    {% if canchas|length > 1 %}
        <script>
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
                var stop = '<img src=\"{{asset('images/stop-xxl.png')}}\" style=\"width: 13px; border-radius: 0px\" />';
                var play = '<img src=\"{{asset('images/white-play-512.png')}}\" style=\"width: 19.4px; border-radius: 0px\" />';
                var next = '<img src=\"{{asset('images/next.png')}}\" style=\"width: 17px; border-radius: 0px\" />';
                var previous = '<img src=\"{{asset('images/previous.png')}}\" style=\"width: 10px; border-radius: 0px\" />';
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
    {% endif %}
{% endblock %}", "moduloclientesclienteBundle:Usuarios:homeCliente.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\moduloclientes\\clienteBundle/Resources/views/Usuarios/homeCliente.html.twig");
    }
}
