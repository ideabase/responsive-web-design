<?php

/* _layouts/base */
class __TwigTemplate_1949d5f0cee157008e9fbfaf55552322c4c2ff41ca0b73b80f6f1194f1a7bb6a extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["systemName"] = $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 1, $this->source); })()), "app", array()), "info", array()), "name", array()), "site");
        // line 2
        $context["docTitle"] = ((array_key_exists("docTitle", $context)) ? ((isset($context["docTitle"]) || array_key_exists("docTitle", $context) ? $context["docTitle"] : (function () { throw new Twig_Error_Runtime('Variable "docTitle" does not exist.', 2, $this->source); })())) : (strip_tags((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 2, $this->source); })()))));
        // line 3
        $context["bodyClass"] = (((array_key_exists("bodyClass", $context)) ? (((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new Twig_Error_Runtime('Variable "bodyClass" does not exist.', 3, $this->source); })()) . " ")) : ("")) . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 3, $this->source); })()), "app", array()), "locale", array()), "getOrientation", array(), "method"));
        // line 5
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\cp\\CpAsset"), "method");
        // line 6
        $context["cpAssetUrl"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 6, $this->source); })()), "getAssetManager", array(), "method"), "getPublishedUrl", array(0 => "@app/web/assets/cp/dist", 1 => true), "method");
        // line 8
        echo \Craft::$app->getView()->invokeHook("cp.layouts.base", $context);

        // line 10
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
    ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body class=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new Twig_Error_Runtime('Variable "bodyClass" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 34
        call_user_func_array($this->env->getFunction('beginBody')->getCallable(), array());
        echo "
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "    ";
        $this->displayBlock('foot', $context, $blocks);
        // line 37
        echo "    ";
        call_user_func_array($this->env->getFunction('endBody')->getCallable(), array());
        echo "
</body>
</html>
";
    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        // line 14
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <title>";
        // line 16
        echo twig_escape_filter($this->env, (((isset($context["docTitle"]) || array_key_exists("docTitle", $context) ? $context["docTitle"] : (function () { throw new Twig_Error_Runtime('Variable "docTitle" does not exist.', 16, $this->source); })()) . (((twig_length_filter($this->env, (isset($context["docTitle"]) || array_key_exists("docTitle", $context) ? $context["docTitle"] : (function () { throw new Twig_Error_Runtime('Variable "docTitle" does not exist.', 16, $this->source); })())) && twig_length_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new Twig_Error_Runtime('Variable "systemName" does not exist.', 16, $this->source); })())))) ? (" - ") : (""))) . (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new Twig_Error_Runtime('Variable "systemName" does not exist.', 16, $this->source); })())), "html", null, true);
        echo "</title>
    ";
        // line 17
        call_user_func_array($this->env->getFunction('head')->getCallable(), array());
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"referrer\" content=\"origin-when-cross-origin\">

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "cpAssetUrl" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/ipad_1x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "cpAssetUrl" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/iphone_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "cpAssetUrl" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/ipad_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"167x167\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "cpAssetUrl" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/ipad-pro_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "cpAssetUrl" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/iphone_3x.png\">

    <script type=\"text/javascript\">
        // Fix for Firefox autofocus CSS bug
        // See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
    </script>
    ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    // line 36
    public function block_foot($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  116 => 35,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  82 => 17,  78 => 16,  74 => 14,  71 => 13,  62 => 37,  59 => 36,  57 => 35,  53 => 34,  49 => 33,  46 => 32,  44 => 13,  39 => 10,  36 => 8,  34 => 6,  32 => 5,  30 => 3,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set systemName = craft.app.info.name|t('site') -%}
{% set docTitle = docTitle is defined ? docTitle : title|striptags -%}
{% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ craft.app.locale.getOrientation() -%}

{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\cp\\\\CpAsset') -%}
{% set cpAssetUrl = view.getAssetManager().getPublishedUrl('@app/web/assets/cp/dist', true) -%}

{% hook \"cp.layouts.base\" -%}

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
    {% block head %}
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <title>{{ docTitle ~ (docTitle|length and systemName|length ? ' - ') ~ systemName }}</title>
    {{ head() }}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"referrer\" content=\"origin-when-cross-origin\">

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ cpAssetUrl }}/images/touch-icons/ipad_1x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ cpAssetUrl }}/images/touch-icons/iphone_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ cpAssetUrl }}/images/touch-icons/ipad_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"167x167\" href=\"{{ cpAssetUrl }}/images/touch-icons/ipad-pro_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ cpAssetUrl }}/images/touch-icons/iphone_3x.png\">

    <script type=\"text/javascript\">
        // Fix for Firefox autofocus CSS bug
        // See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
    </script>
    {% endblock %}
</head>
<body class=\"{{ bodyClass }}\">
    {{ beginBody() }}
    {% block body %}{% endblock %}
    {% block foot %}{% endblock %}
    {{ endBody() }}
</body>
</html>
", "_layouts/base", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_layouts/base.html");
    }
}
