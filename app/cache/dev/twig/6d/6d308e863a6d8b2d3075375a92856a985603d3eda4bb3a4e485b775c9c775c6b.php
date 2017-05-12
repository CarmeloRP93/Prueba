<?php

/* CriveroPruebaBundle:Publicaciones:publicaciones.html.twig */
class __TwigTemplate_cbccabb59a318fa13d2b39772c89627a5911cbe03786cb8b63e4dda51d878a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CriveroPruebaBundle::main.html.twig", "CriveroPruebaBundle:Publicaciones:publicaciones.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Publicaciones";
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
        echo "    <div class=\"main\" >
        <div class=\"slides\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 11
            echo "                <div class=\"image\">
                    ";
            // line 12
            if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
                // line 13
                echo "                        <img class=\"img-thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo ">
                    ";
            } else {
                // line 15
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("images/" . $this->getAttribute($context["publicacion"], "imagen", array()))), "html", null, true);
                echo "\" style=\"max-width: 91%\" title=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                echo " >
                    ";
            }
            // line 17
            echo "                    <h3><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
            echo "</span></h3>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>
";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/jquery.slides.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) > 1)) {
            // line 28
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
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/stop-xxl.png"), "html", null, true);
            echo "\" style=\"width: 13px; border-radius: 0px\" />';
                var play = '<img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/white-play-512.png"), "html", null, true);
            echo "\" style=\"width: 19.4px; border-radius: 0px\" />';
                var next = '<img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/next.png"), "html", null, true);
            echo "\" style=\"width: 17px; border-radius: 0px\" />';
                var previous = '<img src=\"";
            // line 52
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
        return array (  148 => 52,  144 => 51,  140 => 50,  136 => 49,  113 => 28,  111 => 27,  107 => 26,  102 => 25,  99 => 24,  93 => 20,  83 => 17,  75 => 15,  67 => 13,  65 => 12,  62 => 11,  58 => 10,  54 => 8,  51 => 7,  45 => 5,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CriveroPruebaBundle::main.html.twig' %}
{% block title %}Publicaciones{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/slider.css') }}\" type=\"text/css\" rel=\"stylesheet\">
{% endblock %}
{% block contenido %}
    <div class=\"main\" >
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{asset ('js/jquery.slides.js')}}\"></script>
    {% if publicaciones|length > 1 %}
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
{% endblock %}", "CriveroPruebaBundle:Publicaciones:publicaciones.html.twig", "C:\\xampp\\htdocs\\Prueba\\src\\Crivero\\PruebaBundle/Resources/views/Publicaciones/publicaciones.html.twig");
    }
}
