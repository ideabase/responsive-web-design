<?php

/* login */
class __TwigTemplate_fcaf280ab0f4ba6176d9547e60b5ae4d4aad1f8b17ed717335902063f3151f92 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "login", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->loadTemplate("_includes/forms", "login", 2);
        // line 3
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Login", "app");
        // line 4
        $context["bodyClass"] = "login";
        // line 5
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\login\\LoginAsset"), "method");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 6, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Reset Password", 1 => "Check your email for instructions to reset your password.")), "method");
        // line 11
        $context["username"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 11, $this->source); })()), "app", array()), "config", array()), "general", array()), "rememberUsernameDuration", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 11, $this->source); })()), "app", array()), "user", array()), "getRememberedUsername", array(), "method")) : (""));
        // line 12
        $context["cpAssetUrl"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 12, $this->source); })()), "getAssetManager", array(), "method"), "getPublishedUrl", array(0 => "@app/web/assets/cp/dist", 1 => true), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <script type=\"text/javascript\">
        var cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
        document.cookie = cookieTest;
        var cookiesEnabled = document.cookie.search(cookieTest) != -1;
        if (cookiesEnabled)
        {
            document.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

            document.write(
                    '";
        // line 24
        $context["hasLogo"] = (((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 24, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 24, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 24, $this->source); })()), "rebrand", array()), "isLogoUploaded", array()))) ? (true) : (false));
        echo "'+
                    '<form id=\"login-form\" method=\"post\" accept-charset=\"UTF-8\" ";
        // line 25
        if ((isset($context["hasLogo"]) || array_key_exists("hasLogo", $context) ? $context["hasLogo"] : (function () { throw new Twig_Error_Runtime('Variable "hasLogo" does not exist.', 25, $this->source); })())) {
            // line 26
            $context["logo"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 26, $this->source); })()), "rebrand", array()), "logo", array());
            // line 27
            $context["padding"] = (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 27, $this->source); })()), "height", array()) + 30);
            // line 28
            echo "class=\"has-logo\" style=\"background-image: url(\\'";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 28, $this->source); })()), "url", array()), "html", null, true);
            echo "\\'); background-size: ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 28, $this->source); })()), "width", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 28, $this->source); })()), "height", array()), "html", null, true);
            echo "px; padding-top: ";
            echo twig_escape_filter($this->env, (isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new Twig_Error_Runtime('Variable "padding" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "px; margin-top: -";
            echo twig_escape_filter($this->env, twig_round(((353 + (isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new Twig_Error_Runtime('Variable "padding" does not exist.', 28, $this->source); })())) / 2)), "html", null, true);
            echo "px\"";
        }
        // line 29
        echo ">' +
            '";
        // line 30
        if ( !(isset($context["hasLogo"]) || array_key_exists("hasLogo", $context) ? $context["hasLogo"] : (function () { throw new Twig_Error_Runtime('Variable "hasLogo" does not exist.', 30, $this->source); })())) {
            echo "<h1>";
            echo twig_escape_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new Twig_Error_Runtime('Variable "systemName" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "</h1>";
        }
        echo "'+
            '";
        // line 31
        $context["placeHolderText"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 31, $this->source); })()), "app", array()), "config", array()), "general", array()), "useEmailAsUsername", array())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Email", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Username or Email", "app")));
        echo "' +
            '";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->macro_textField(array("id" => "loginName", "name" => "username", "placeholder" => (isset($context["placeHolderText"]) || array_key_exists("placeHolderText", $context) ? $context["placeHolderText"] : (function () { throw new Twig_Error_Runtime('Variable "placeHolderText" does not exist.', 32, $this->source); })()), "value" => (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 32, $this->source); })()))), "js"), "html", null, true);
        echo "' +

            '<div id=\"login-fields\" class=\"nested-fields\">' +
            '";
        // line 35
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->macro_passwordField(array("id" => "password", "name" => "password", "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Password", "app"))), "js"), "html", null, true);
        echo "' +
            '<a id=\"forgot-password\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Forgot your password?", "app"), "html", null, true);
        echo "</a>' +
            ";
        // line 37
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 37, $this->source); })()), "app", array()), "config", array()), "general", array()), "rememberedUserSessionDuration", array())) {
            // line 38
            echo "            '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->macro_checkboxField(array("id" => "rememberMe", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Keep me logged in", "app"))), "js"), "html", null, true);
            echo "' +
            ";
        }
        // line 40
        echo "            '</div>' +

            '<div class=\"buttons\">' +
            '";
        // line 43
        echo "' +
            '<input id=\"submit\" class=\"btn submit disabled\" type=\"submit\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Login", "app"), "html", null, true);
        echo "\">' +
            '<div id=\"spinner\" class=\"spinner hidden\"></div>' +
            '</div>' +
            '<a id=\"poweredby\" href=\"http://craftcms.com/\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Powered by Craft CMS", "app"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "cpAssetUrl" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "/images/craftcms.svg\" /></a>'+
            '</form>'
        );

            ";
        // line 51
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 51, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method")) {
            // line 52
            echo "            document.getElementById(\"";
            echo (((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 52, $this->source); })())) ? ("password") : ("loginName"));
            echo "\").focus();
            ";
        }
        // line 54
        echo "        }
        else
        {
            document.write(
                '<div class=\"no-access\">' +
                    '<div class=\"pane\">' +
                        '<div class=\"pane-body\">' +
                            '<div class=\"notice\">' +
                                '<div class=\"icon\"></div>' +
                                '<p>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Cookies must be enabled to access the Craft CMS control panel.", "app"), "html", null, true);
        echo "<br>' +
                                    '<a class=\"go nowrap\" href=\"\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("See how", "app"), "html", null, true);
        echo "</a>' +
                                '</p>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>'
            );
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "login";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 64,  163 => 63,  152 => 54,  146 => 52,  144 => 51,  135 => 47,  129 => 44,  126 => 43,  121 => 40,  115 => 38,  113 => 37,  109 => 36,  105 => 35,  99 => 32,  95 => 31,  87 => 30,  84 => 29,  71 => 28,  69 => 27,  67 => 26,  65 => 25,  61 => 24,  50 => 15,  47 => 14,  43 => 1,  41 => 12,  39 => 11,  37 => 6,  35 => 5,  33 => 4,  31 => 3,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/basecp\" %}
{% import \"_includes/forms\" as forms %}
{% set title = \"Login\"|t('app') %}
{% set bodyClass = 'login' %}
{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\login\\\\LoginAsset\") %}
{% do view.registerTranslations('app', [
    \"Reset Password\",
    \"Check your email for instructions to reset your password.\",
]) %}

{% set username = (craft.app.config.general.rememberUsernameDuration ? craft.app.user.getRememberedUsername(): '') %}
{% set cpAssetUrl = view.getAssetManager().getPublishedUrl('@app/web/assets/cp/dist', true) %}

{% block body %}
    <script type=\"text/javascript\">
        var cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
        document.cookie = cookieTest;
        var cookiesEnabled = document.cookie.search(cookieTest) != -1;
        if (cookiesEnabled)
        {
            document.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

            document.write(
                    '{%- set hasLogo = (CraftEdition == CraftPro and craft.rebrand.isLogoUploaded ? true : false) -%}'+
                    '<form id=\"login-form\" method=\"post\" accept-charset=\"UTF-8\" {% if hasLogo -%}
            {%- set logo = craft.rebrand.logo -%}
            {%- set padding = logo.height + 30 -%}
        class=\"has-logo\" style=\"background-image: url(\\'{{ logo.url }}\\'); background-size: {{ logo.width }}px {{ logo.height }}px; padding-top: {{ padding }}px; margin-top: -{{ ((353+padding)/2)|round }}px\"
                {%- endif %}>' +
            '{% if not hasLogo -%}<h1>{{ systemName }}</h1>{%- endif %}'+
            '{% set placeHolderText = (craft.app.config.general.useEmailAsUsername ? \"Email\"|t('app') : \"Username or Email\"|t('app')) %}' +
            '{{ forms.textField({ id: \"loginName\", name: \"username\", placeholder: placeHolderText, value: username })|e(\"js\") }}' +

            '<div id=\"login-fields\" class=\"nested-fields\">' +
            '{{ forms.passwordField({ id: \"password\", name: \"password\", placeholder: \"Password\"|t('app') })|e(\"js\") }}' +
            '<a id=\"forgot-password\">{{ \"Forgot your password?\"|t('app') }}</a>' +
            {% if craft.app.config.general.rememberedUserSessionDuration %}
            '{{ forms.checkboxField({ id: \"rememberMe\", label: \"Keep me logged in\"|t('app') })|e(\"js\") }}' +
            {% endif %}
            '</div>' +

            '<div class=\"buttons\">' +
            '{# <div id=\"ssl-icon\" class=\"disabled\"><div class=\"{{ craft.app.request.getIsSecureConnection() ? \"secure\" : \"insecure\" }} icon\"></div></div>#}' +
            '<input id=\"submit\" class=\"btn submit disabled\" type=\"submit\" value=\"{{ \"Login\"|t('app') }}\">' +
            '<div id=\"spinner\" class=\"spinner hidden\"></div>' +
            '</div>' +
            '<a id=\"poweredby\" href=\"http://craftcms.com/\" title=\"{{ \"Powered by Craft CMS\"|t('app') }}\"><img src=\"{{ cpAssetUrl }}/images/craftcms.svg\" /></a>'+
            '</form>'
        );

            {% if not craft.app.request.isMobileBrowser(true) %}
            document.getElementById(\"{{ (username ? 'password' : 'loginName') }}\").focus();
            {% endif %}
        }
        else
        {
            document.write(
                '<div class=\"no-access\">' +
                    '<div class=\"pane\">' +
                        '<div class=\"pane-body\">' +
                            '<div class=\"notice\">' +
                                '<div class=\"icon\"></div>' +
                                '<p>{{ \"Cookies must be enabled to access the Craft CMS control panel.\"|t('app') }}<br>' +
                                    '<a class=\"go nowrap\" href=\"\">{{ \"See how\"|t('app') }}</a>' +
                                '</p>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>'
            );
        }
    </script>
{% endblock %}
", "login", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/login.html");
    }
}
