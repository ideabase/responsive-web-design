<?php

/* global/header.html */
class __TwigTemplate_c9a91d3a348e824e70b1f6dc57c093040be219a4b1d8d2ec1e58c99a373e41e4 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-us\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>";
        // line 6
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 6, $this->source); })()), "title", array()), "html", null, true);
        echo " - Responsive Web Design (RWD) Kent State</title>
\t\t<meta name=\"description\" content=\"Web design courses and workshops from Kent State University.\">
\t\t<link rel=\"mask-icon\" href=\"website_icon.svg\" color=\"#F06374\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-touch-icon-57x57.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-touch-icon-60x60.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-touch-icon-72x72.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-touch-icon-76x76.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-touch-icon-114x114.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-touch-icon-120x120.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-touch-icon-144x144.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-touch-icon-152x152.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon-180x180.png\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-194x194.png\" sizes=\"194x194\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-96x96.png\" sizes=\"96x96\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/android-chrome-192x192.png\" sizes=\"192x192\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">
\t\t<link rel=\"manifest\" href=\"/manifest.json\">
\t\t<meta name=\"msapplication-TileColor\" content=\"#1c7489\">
\t\t<meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">


\t";
        // line 29
        call_user_func_array($this->env->getFunction('head')->getCallable(), array());
        echo "</head>
\t<body>";
        // line 30
        call_user_func_array($this->env->getFunction('beginBody')->getCallable(), array());
        echo "
\t\t<header class=\"group\" role=\"banner\">

\t\t<a id=\"skip-to-content\" href=\"#content\">skip to main content</a>
\t\t\t<div class=\"header-inner\">
\t<br>
\t<br>
\t<br>
\t\t<h1><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "siteUrl" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\"> RWD </a></h1>
\t\t\t\t<nav role=\"navigation\">
\t\t\t\t\t<ul class=\"group\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("basic"), "html", null, true);
        echo "\">Basic Class</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("advanced"), "html", null, true);
        echo "\">Advanced Class</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("about"), "html", null, true);
        echo "\">About</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</header>
";
    }

    public function getTemplateName()
    {
        return "global/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 43,  81 => 42,  77 => 41,  71 => 38,  60 => 30,  56 => 29,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en-us\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>{{ entry.title }} - Responsive Web Design (RWD) Kent State</title>
\t\t<meta name=\"description\" content=\"Web design courses and workshops from Kent State University.\">
\t\t<link rel=\"mask-icon\" href=\"website_icon.svg\" color=\"#F06374\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-touch-icon-57x57.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-touch-icon-60x60.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-touch-icon-72x72.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-touch-icon-76x76.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-touch-icon-114x114.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-touch-icon-120x120.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-touch-icon-144x144.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-touch-icon-152x152.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon-180x180.png\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-194x194.png\" sizes=\"194x194\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-96x96.png\" sizes=\"96x96\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/android-chrome-192x192.png\" sizes=\"192x192\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">
\t\t<link rel=\"manifest\" href=\"/manifest.json\">
\t\t<meta name=\"msapplication-TileColor\" content=\"#1c7489\">
\t\t<meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">


\t</head>
\t<body>
\t\t<header class=\"group\" role=\"banner\">

\t\t<a id=\"skip-to-content\" href=\"#content\">skip to main content</a>
\t\t\t<div class=\"header-inner\">
\t<br>
\t<br>
\t<br>
\t\t<h1><a href=\"{{ siteUrl }}\"> RWD </a></h1>
\t\t\t\t<nav role=\"navigation\">
\t\t\t\t\t<ul class=\"group\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ url('basic') }}\">Basic Class</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ url('advanced') }}\">Advanced Class</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ url('about') }}\">About</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</header>
", "global/header.html", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/global/header.html");
    }
}
