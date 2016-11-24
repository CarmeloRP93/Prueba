<?php

/* CriveroPruebaBundle:Default:soccer.html.twig */
class __TwigTemplate_17e20ffb0b1bac2c67468958b7c88ecb056d0f66b7e5e631dc21fa2ae96fe5e2 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Soccer ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<!-- Begin Wrapper -->
<div id=\"wrapper\">
  <!-- Begin Header -->
  <div id=\"header\">
      <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bg_header.jpg"), "html", null, true);
        echo "\" />
    <h1>Soccer 01</h1>
  </div>
  <!-- End Header -->
  <!-- Begin Navigation -->
  <div id=\"navtop\">
    <ul>
      <li><a href=\"#\">Sitemap</a></li>
      <li><a href=\"#\">Contact</a></li>
      <li><a href=\"#\">Home</a></li>
    </ul>
  </div>
  <!-- End Navigation -->
  <!-- Begin Left Column -->
  <div id=\"leftcolumn\">
    <div id=\"navigation\">
      <ul>
        <li><a href=\"#\">> Home</a></li>
        <li><a href=\"#\">> Page</a></li>
        <li><a href=\"#\">> Page</a></li>
        <li><a href=\"#\">> Page</a></li>
        <li><a href=\"#\">> Page</a></li>
      </ul>
    </div>
    <div class=\"tableleft\">
      <h3>Season 2006-07</h3>
      <p> <strong>Sunday 13 May 2007</strong> <br />
        Liverpool 2 - 2 Charlton </p>
      <h4>Tables</h4>
      <table width=\"164\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
        <tr style=\"background: #336600; color: #fff;\">
          <td width=\"18\"><strong>#</strong></td>
          <td><strong>Team</strong></td>
          <td width=\"30\"><div align=\"center\"><strong>P</strong></div></td>
          <td width=\"30\"><div align=\"center\"><strong>Pts</strong></div></td>
        </tr>
        <tr class=\"otherteam\">
          <td width=\"18\">1</td>
          <td>Man Utd </td>
          <td width=\"30\"><div align=\"center\">38</div></td>
          <td width=\"30\"><div align=\"center\">89</div></td>
        </tr>
        <tr class=\"otherteam\">
          <td width=\"18\">2</td>
          <td>Chelsea </td>
          <td width=\"30\"><div align=\"center\">38</div></td>
          <td width=\"30\"><div align=\"center\">83</div></td>
        </tr>
        <tr class=\"yourteam\">
          <td width=\"18\">3</td>
          <td>Liverpool </td>
          <td width=\"30\"><div align=\"center\">38</div></td>
          <td width=\"30\"><div align=\"center\">68</div></td>
        </tr>
        <tr class=\"otherteam\">
          <td width=\"18\">4</td>
          <td>Arsenal</td>
          <td width=\"30\"><div align=\"center\">38</div></td>
          <td width=\"30\"><div align=\"center\">68</div></td>
        </tr>
        <tr class=\"otherteam\">
          <td width=\"18\">5</td>
          <td>Spurs</td>
          <td width=\"30\"><div align=\"center\">38</div></td>
          <td width=\"30\"><div align=\"center\">60</div></td>
        </tr>
      </table>
    </div>
  </div>
  <!-- End Left Column -->
  <!-- Begin Right Column -->
  <div id=\"maincolumn\">
    <h1>Welcome! (h1)</h1>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum sapien enim, cursus in, aliquam sit amet, convallis eget, metus. Duis dui mi, varius at, lacinia eget, ullamcorper et, tortor. Pellentesque ac pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean orci mi, varius eget, mollis vel, rhoncus a, leo. Ut eros enim, vehicula quis, gravida ac, sodales sit amet, orci. Nulla eleifend tristique erat.</p>
    <div class=\"news\"><strong>Latest News</strong>
      <p> <a href=\"#\">Nunc commodo metus et lorem. Phasellus vel libero.</a></p>
      <p> <a href=\"#\">Vestibulum eu enim. Mauris pharetra. Vestibulum ligula libero, vestibulum quis, commodo non, sagittis eget, elit.</a></p>
      <p> <a href=\"#\">Ut nec tellus. Nunc ligula quam, vulputate ut, imperdiet nec, luctus at, magna. Nunc posuere nulla ac tortor.</a></p>
    </div>
    <h2>Headline! (h2, h3)</h2>
    <p>Quisque vulputate. Aliquam condimentum, odio vel ultrices sodales, augue lorem vehicula mi, vel nonummy nisl eros et tortor. Duis laoreet pellentesque lorem. Nam sagittis condimentum libero. Nullam a ante vel massa accumsan elementum. Sed mauris metus, tincidunt quis, blandit at, viverra a, ligula. Pellentesque neque metus, mattis non, tincidunt vitae, euismod scelerisque, nulla. Fusce justo. Donec nec nibh. Sed suscipit bibendum leo. Nulla erat ligula, egestas consequat, sagittis ut, fermentum a, diam. Sed turpis est, aliquam nec, lacinia sed, aliquam non, libero. Ut turpis. Pellentesque viverra pharetra quam.</p>
    <p> <a href=\"#\">This is a link</a></p>
    <h4>Headline (h4, h5, h6)</h4>
    <p>Aenean dapibus, leo vitae eleifend porta, sem ipsum nonummy est, eu fermentum arcu lectus in lacus. Vestibulum tristique metus eu lorem. Pellentesque sed erat. Morbi pharetra condimentum massa. Vestibulum vel nulla at eros porta tempus. Fusce at lorem. Nulla facilisis. Phasellus nisl. Integer id massa nec tellus rutrum pellentesque. Mauris orci mauris, dictum vitae, varius eget, vestibulum quis, risus. Pellentesque dictum, magna vitae pulvinar interdum, orci lacus posuere neque, et lacinia dui eros ut erat. Ut purus. Nullam ac tellus et eros condimentum interdum.</p>
    <div class=\"clear\"></div>
  </div>
  <!-- End Right Column -->
  <div class=\"clear\"></div>
  <div id=\"footer\"> &copy; Copyright 2007 by Your Name | Design by <a href=\"http://www.wfiedler-online.de\">wfiedler</a><br />
    Icons by IconArchive (Free for non-commercial use) </div>
</div>
<!-- End Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "CriveroPruebaBundle:Default:soccer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 7,  54 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
