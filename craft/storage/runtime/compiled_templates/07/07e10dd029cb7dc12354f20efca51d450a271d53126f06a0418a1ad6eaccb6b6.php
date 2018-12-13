<?php

/* _layout */
class __TwigTemplate_bc73627e75020875eaf169b0a4e4e359d2fbceab342322338d8c864a6c99fd08 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 8
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 15
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new Twig_Error_Runtime('Variable "siteName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</title>
\t<link rel=\"home\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "siteUrl" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" />

  <!-- Render Favicons -->
  \t";
        // line 19
        $this->loadTemplate("_includes/_favicons.html", "_layout", 19)->display($context);
        // line 20
        echo "  <!--Begin Critical CSS -->
    <style type=\"text/css\">
  \t ";
        // line 22
        $this->loadTemplate("_includes/critical.css", "_layout", 22)->display($context);
        // line 23
        echo "    </style>
";
        // line 24
        call_user_func_array($this->env->getFunction('head')->getCallable(), array());
        echo "</head>
";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['wbrowar\adminbar\twigextensions\AdminBarTwigExtension']->adminBar(array("entry" => (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 25, $this->source); })()))), "html", null, true);
        echo "


<body>";
        // line 28
        call_user_func_array($this->env->getFunction('beginBody')->getCallable(), array());
        echo "
";
        // line 35
        echo "
<!-- Include header -->
  ";
        // line 37
        $this->loadTemplate("global/header.html", "_layout", 37)->display($context);
        // line 38
        echo "\t\t<main role=\"main\">
\t\t\t";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "\t\t</main>
<!-- Include footer -->
";
        // line 44
        $this->loadTemplate("global/footer.html", "_layout", 44)->display($context);
        // line 45
        echo "
";
        // line 51
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "siteUrl" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "assets/css/style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "siteUrl" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "assets/js/min/scripts-min.js\"></script>
  <!-- Google Analytics Code - don't forget to change the UA ID -->
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "siteUrl" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "assets/js/min/analytics.js','ga');
      ga('create', 'UA-########-#', 'auto');
      ga('send', 'pageview');
    </script>
  ";
        // line 62
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 62, $this->source); })()), "config", array()), "devMode", array())) {
            // line 63
            echo "  <!-- Live Reload - For local environment only -->
  <script src=\"//localhost:35729/livereload.js\"></script>
  ";
        }
        // line 66
        echo "";
        call_user_func_array($this->env->getFunction('endBody')->getCallable(), array());
        echo "</body>
</html>
";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t\t
\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 40,  131 => 39,  123 => 66,  118 => 63,  116 => 62,  109 => 58,  100 => 52,  95 => 51,  92 => 45,  90 => 44,  86 => 42,  84 => 39,  81 => 38,  79 => 37,  75 => 35,  71 => 28,  65 => 25,  61 => 24,  58 => 23,  56 => 22,  52 => 20,  50 => 19,  44 => 16,  36 => 15,  27 => 8,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{#
 # Layout template
 # ---------------
 # See Twig’s Template Inheritance documentation for more details:
 # http://twig.sensiolabs.org/doc/templates.html#template-inheritance
 #}

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>{% if title is defined %}{{ title }} - {% endif %}{{ siteName }}</title>
\t<link rel=\"home\" href=\"{{ siteUrl }}\" />

  <!-- Render Favicons -->
  \t{% include '_includes/_favicons.html' %}
  <!--Begin Critical CSS -->
    <style type=\"text/css\">
  \t {% include '_includes/critical.css' %}
    </style>
</head>
{{ adminbar({ entry: entry }) }}


<body>
{#
\t\t<header role=\"banner\">
      <a id=\"skip-to-content\" href=\"#content\">skip to main content</a>
\t\t\t<h1><a href=\"{{ siteUrl }}\">{{ siteName }}</a></h1>
\t\t</header>
#}

<!-- Include header -->
  {% include 'global/header.html' %}
\t\t<main role=\"main\">
\t\t\t{% block content %}
\t\t\t\t
\t\t\t{% endblock %}
\t\t</main>
<!-- Include footer -->
{% include 'global/footer.html' %}

{#
\t\t<footer role=\"contentinfo\">
\t\t\tCopyright {{ now.year }} {{ craft.request.serverName | ucfirst }}. All rights reserved  •  Built with <a href=\"http://craftcms.com\">Craft</a>
\t\t</footer>
#}
  <link href=\"{{ siteUrl }}assets/css/style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <script type=\"text/javascript\" src=\"{{ siteUrl }}assets/js/min/scripts-min.js\"></script>
  <!-- Google Analytics Code - don't forget to change the UA ID -->
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','{{ siteUrl }}assets/js/min/analytics.js','ga');
      ga('create', 'UA-########-#', 'auto');
      ga('send', 'pageview');
    </script>
  {% if craft.config.devMode %}
  <!-- Live Reload - For local environment only -->
  <script src=\"//localhost:35729/livereload.js\"></script>
  {% endif %}
</body>
</html>
", "_layout", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/_layout.html");
    }
}
