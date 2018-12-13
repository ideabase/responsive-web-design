<?php

/* plugin-store/_index */
class __TwigTemplate_7bc65e19589c4f19a03cf9a8e89fe5098aa6c0799c322915b18331b81ae6099c extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "plugin-store/_index", 1);
        $this->blocks = array(
            'actionButton' => array($this, 'block_actionButton'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Plugin Store", "app");
        // line 5
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 5, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Active installs", 1 => "Active Trials", 2 => "Add to cart", 3 => "Added to cart", 4 => "Ascending", 5 => "Billing", 6 => "Buy later", 7 => "Buy now", 8 => "Buy now for {price}", 9 => "Cart", 10 => "Categories", 11 => "Changelog", 12 => "Checkout", 13 => "Cloud Storage Integration", 14 => "Community Support (Slack, Stack Exchange)", 15 => "Compatibility", 16 => "Connect to your Craft ID", 17 => "Contact", 18 => "Content Modeling", 19 => "Continue as guest", 20 => "Continue", 21 => "Coupon Code", 22 => "Descending", 23 => "Description", 24 => "Developer Support", 25 => "Documentation", 26 => "Features", 27 => "For when you’re building a website for yourself or a friend.", 28 => "For when you’re building something professionally for a client or team.", 29 => "Free", 30 => "Install", 31 => "Installed", 32 => "Item", 33 => "Items in your cart", 34 => "Last update", 35 => "Last Update", 36 => "License", 37 => "Loading Plugin Store…", 38 => "Manage plugins", 39 => "Multi-site Multi-lingual", 40 => "Name", 41 => "Page not found.", 42 => "Pay", 43 => "Payment Method", 44 => "Plugin Name", 45 => "Plugin Store", 46 => "Popularity", 47 => "Price", 48 => "Pro Rate Discount", 49 => "Reactivate", 50 => "Renewal price", 51 => "Screenshots", 52 => "Search plugins", 53 => "Security & Bug Fixes", 54 => "See all", 55 => "Staff Picks", 56 => "Subtotal", 57 => "Support", 58 => "System Branding", 59 => "Thank You!", 60 => "The Plugin Store is not available, please try again later.", 61 => "Total", 62 => "Try for free", 63 => "Try", 64 => "Upgrade Craft CMS", 65 => "Use your Craft ID", 66 => "User Accounts", 67 => "Version", 68 => "Website", 69 => "Your order has been processed successfully.", 70 => "{price} plus {renewalPrice}/year for updates", 71 => "{price}/year")), "method");
        // line 115
        $context["content"] = ('' === $tmp = "
\t<template v-if=\"pluginStoreDataLoaded && !pluginStoreDataError\">
\t\t<router-view></router-view>
\t</template>

\t<template v-else>
\t\t<status-message :error=\"pluginStoreDataError\" :message=\"statusMessage\" />
\t</template>

\t<modal :show.sync=\"showModal\" :plugin-id=\"pluginId\" />

") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 80
    public function block_actionButton($context, array $blocks = array())
    {
        // line 81
        echo "
\t<div id=\"pluginstore-actions-spinner\" class=\"spinner hidden\"></div>

\t<div id=\"pluginstore-actions\" class=\"hidden\">

\t\t<a id=\"cart-button\" role=\"button\" tabindex=\"0\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/shopping-cart.svg"), "html", null, true);
        echo " <span class=\"badge\">0</span></a>

\t\t<a id=\"craftid-account\" class=\"menubtn hidden\"><span class=\"photo\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/craftid.svg"), "html", null, true);
        echo "</span><span class=\"label\">Account</span></a>

\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 92, $this->source); })()), "cp", array()), "craftIdAccountUrl", array(), "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Manage your Craft ID", "app"), "html", null, true);
        echo "</a></li>
\t\t\t\t<li>
\t\t\t\t\t<form method=\"post\" id=\"disconnect\">
\t\t\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "
\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"plugin-store/disconnect\">
\t\t\t\t\t\t<a onclick=\"document.getElementById('disconnect').submit();\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sign out from Craft ID", "app"), "html", null, true);
        echo "</a>
\t\t\t\t\t</form>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<form id=\"craftid-connect-form\" method=\"post\">
\t\t\t";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "
\t\t\t<input type=\"hidden\" name=\"action\" value=\"plugin-store/connect\">
\t\t\t<div class=\"ssl-status light\" title=\"";
        // line 106
        echo twig_escape_filter($this->env, ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 106, $this->source); })()), "app", array()), "request", array()), "isSecureConnection", array())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Your connection is secure", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Your connection is insecure", "app"))), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"";
        // line 107
        echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 107, $this->source); })()), "app", array()), "request", array()), "isSecureConnection", array())) ? ("secure") : ("insecure"));
        echo " icon\"></i>
\t\t\t</div>
\t\t\t<a onclick=\"document.getElementById('craftid-connect-form').submit();\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sign into Craft ID", "app"), "html", null, true);
        echo "</a>
\t\t</form>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "plugin-store/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 109,  104 => 107,  100 => 106,  95 => 104,  85 => 97,  80 => 95,  72 => 92,  65 => 88,  60 => 86,  53 => 81,  50 => 80,  46 => 1,  33 => 115,  31 => 5,  29 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}

{% set title = 'Plugin Store'|t('app') %}

{% do view.registerTranslations('app', [
\t\"Active installs\",
\t\"Active Trials\",
\t\"Add to cart\",
\t\"Added to cart\",
\t\"Ascending\",
\t\"Billing\",
\t\"Buy later\",
\t\"Buy now\",
\t\"Buy now for {price}\",
\t\"Cart\",
\t\"Categories\",
\t\"Changelog\",
\t\"Checkout\",
\t\"Cloud Storage Integration\",
\t\"Community Support (Slack, Stack Exchange)\",
\t\"Compatibility\",
\t\"Connect to your Craft ID\",
\t\"Contact\",
\t\"Content Modeling\",
\t\"Continue as guest\",
\t\"Continue\",
\t\"Coupon Code\",
\t\"Descending\",
\t\"Description\",
\t\"Developer Support\",
\t\"Documentation\",
\t\"Features\",
\t\"For when you’re building a website for yourself or a friend.\",
\t\"For when you’re building something professionally for a client or team.\",
\t\"Free\",
\t\"Install\",
\t\"Installed\",
\t\"Item\",
\t\"Items in your cart\",
\t\"Last update\",
\t\"Last Update\",
\t\"License\",
\t\"Loading Plugin Store…\",
\t\"Manage plugins\",
\t\"Multi-site Multi-lingual\",
\t\"Name\",
\t\"Page not found.\",
\t\"Pay\",
\t\"Payment Method\",
\t\"Plugin Name\",
\t\"Plugin Store\",
\t\"Popularity\",
\t\"Price\",
\t\"Pro Rate Discount\",
\t\"Reactivate\",
\t\"Renewal price\",
\t\"Screenshots\",
\t\"Search plugins\",
\t\"Security & Bug Fixes\",
\t\"See all\",
\t\"Staff Picks\",
\t\"Subtotal\",
\t\"Support\",
\t\"System Branding\",
\t\"Thank You!\",
\t\"The Plugin Store is not available, please try again later.\",
\t\"Total\",
\t\"Try for free\",
\t\"Try\",
\t\"Upgrade Craft CMS\",
\t\"Use your Craft ID\",
\t\"User Accounts\",
\t\"Version\",
\t\"Website\",
\t\"Your order has been processed successfully.\",
\t\"{price} plus {renewalPrice}/year for updates\",
\t\"{price}/year\",
]) %}

{% block actionButton %}

\t<div id=\"pluginstore-actions-spinner\" class=\"spinner hidden\"></div>

\t<div id=\"pluginstore-actions\" class=\"hidden\">

\t\t<a id=\"cart-button\" role=\"button\" tabindex=\"0\">{{ svg('@app/icons/shopping-cart.svg') }} <span class=\"badge\">0</span></a>

\t\t<a id=\"craftid-account\" class=\"menubtn hidden\"><span class=\"photo\">{{ svg('@app/icons/craftid.svg') }}</span><span class=\"label\">Account</span></a>

\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"{{ craft.cp.craftIdAccountUrl() }}\" target=\"_blank\">{{ \"Manage your Craft ID\"|t('app') }}</a></li>
\t\t\t\t<li>
\t\t\t\t\t<form method=\"post\" id=\"disconnect\">
\t\t\t\t\t\t{{ csrfInput() }}
\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"plugin-store/disconnect\">
\t\t\t\t\t\t<a onclick=\"document.getElementById('disconnect').submit();\">{{ \"Sign out from Craft ID\"|t('app') }}</a>
\t\t\t\t\t</form>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<form id=\"craftid-connect-form\" method=\"post\">
\t\t\t{{ csrfInput() }}
\t\t\t<input type=\"hidden\" name=\"action\" value=\"plugin-store/connect\">
\t\t\t<div class=\"ssl-status light\" title=\"{{ craft.app.request.isSecureConnection ? \"Your connection is secure\"|t('app') : \"Your connection is insecure\"|t('app') }}\">
\t\t\t\t<i class=\"{{ craft.app.request.isSecureConnection ? \"secure\" : \"insecure\" }} icon\"></i>
\t\t\t</div>
\t\t\t<a onclick=\"document.getElementById('craftid-connect-form').submit();\">{{ 'Sign into Craft ID'|t('app') }}</a>
\t\t</form>
\t</div>

{% endblock %}

{% set content %}

\t<template v-if=\"pluginStoreDataLoaded && !pluginStoreDataError\">
\t\t<router-view></router-view>
\t</template>

\t<template v-else>
\t\t<status-message :error=\"pluginStoreDataError\" :message=\"statusMessage\" />
\t</template>

\t<modal :show.sync=\"showModal\" :plugin-id=\"pluginId\" />

{% endset %}
", "plugin-store/_index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/plugin-store/_index.html");
    }
}
