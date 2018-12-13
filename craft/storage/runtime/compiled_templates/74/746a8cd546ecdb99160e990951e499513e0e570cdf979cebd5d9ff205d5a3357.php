<?php

/* settings/general/_index */
class __TwigTemplate_27ba26e8866da8614fc13628e6406b0964851bea3f9bd6140bab5b05b0539a2f extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/general/_index", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/general/_index", 2);
        // line 3
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("General Settings", "app");
        // line 4
        $context["fullPageForm"] = true;
        // line 6
        $context["crumbs"] = array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")));
        // line 17
        $context["__internal_46a1c2075b1f729371a0322bf5fba380767466872216c2e35f4e2d173883ae1e"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    <input type=\"hidden\" name=\"action\" value=\"system-settings/save-general-settings\">
    ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction("settings"), "html", null, true);
        echo "

    ";
        // line 24
        echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("System Name", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 29
(isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 29, $this->source); })()), "name", array())));
        // line 30
        echo "

    ";
        // line 32
        echo $context["forms"]->macro_lightswitchField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("System Status", "app"), "warning" => ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 35
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 35, $this->source); })()), "app", array()), "config", array()), "general", array()), "isSystemOn", array()) === true) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 35, $this->source); })()), "app", array()), "config", array()), "general", array()), "isSystemOn", array()) === false))) ? ($context["__internal_46a1c2075b1f729371a0322bf5fba380767466872216c2e35f4e2d173883ae1e"]->macro_configWarning("isSystemOn")) : ("")), "id" => "on", "name" => "on", "on" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 38
(isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 38, $this->source); })()), "on", array())));
        // line 39
        echo "

    ";
        // line 41
        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Timezone", "app"), "warning" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 43
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 43, $this->source); })()), "app", array()), "config", array()), "general", array()), "timezone", array())) ? ($context["__internal_46a1c2075b1f729371a0322bf5fba380767466872216c2e35f4e2d173883ae1e"]->macro_configWarning("timezone")) : ("")), "id" => "timezone", "name" => "timezone", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 46
(isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 46, $this->source); })()), "timezone", array()), "options" =>         // line 47
(isset($context["timezoneOptions"]) || array_key_exists("timezoneOptions", $context) ? $context["timezoneOptions"] : (function () { throw new Twig_Error_Runtime('Variable "timezoneOptions" does not exist.', 47, $this->source); })())));
        // line 48
        echo "

    ";
        // line 50
        if (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 50, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "        <hr>

        ";
            // line 53
            craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 53, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Are you sure you want to delete the logo?")), "method");
            // line 56
            echo "
        ";
            // line 57
            craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 57, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\fileupload\\FileUploadAsset"), "method");
            // line 58
            echo "
        ";
            // line 59
            echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Login Page Logo", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("SVG file recommended. The logo will be displayed at {size} wide.", "app", array("size" => "300px"))), twig_include($this->env, $context, "settings/general/_images/logo"));
            // line 62
            echo "

        ";
            // line 64
            echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site Icon", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Square SVG file recommended. The logo will be displayed at {size} by {size}.", "app", array("size" => "32px"))), twig_include($this->env, $context, "settings/general/_images/icon"));
            // line 67
            echo "

        <div class=\"clear\"></div>
    ";
        }
    }

    // line 11
    public function macro_configWarning($__setting__ = null, $__file__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "setting" => $__setting__,
            "file" => $__file__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo $this->extensions['craft\web\twig\Extension']->translateFilter("This is being overridden by the {setting} config setting.", "app", array("setting" => (((("<a href=\"http://craftcms.com/docs/config-settings#" .             // line 13
(isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 13, $this->source); })())) . "\" target=\"_blank\">") . (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 13, $this->source); })())) . "</a>")));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "settings/general/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 13,  123 => 12,  110 => 11,  102 => 67,  100 => 64,  96 => 62,  94 => 59,  91 => 58,  89 => 57,  86 => 56,  84 => 53,  80 => 51,  78 => 50,  74 => 48,  72 => 47,  71 => 46,  70 => 43,  69 => 41,  65 => 39,  63 => 38,  62 => 35,  61 => 32,  57 => 30,  55 => 29,  54 => 24,  49 => 22,  46 => 21,  43 => 20,  39 => 1,  37 => 17,  35 => 6,  33 => 4,  31 => 3,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% import \"_includes/forms\" as forms %}
{% set title = \"General Settings\"|t('app') %}
{% set fullPageForm = true %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}


{% macro configWarning(setting, file) -%}
    {{ \"This is being overridden by the {setting} config setting.\"|t('app', {
        setting: '<a href=\"http://craftcms.com/docs/config-settings#'~setting~'\" target=\"_blank\">'~setting~'</a>'
    })|raw }}
{%- endmacro %}

{% from _self import configWarning %}


{% block content %}
    <input type=\"hidden\" name=\"action\" value=\"system-settings/save-general-settings\">
    {{ redirectInput('settings') }}

    {{ forms.textField({
        first: true,
        label: \"System Name\"|t('app'),
        id: 'name',
        name: 'name',
        value: info.name
    }) }}

    {{ forms.lightswitchField({
        first: true,
        label: \"System Status\"|t('app'),
        warning: (craft.app.config.general.isSystemOn is same as(true) or craft.app.config.general.isSystemOn is same as(false) ? configWarning('isSystemOn')),
        id: 'on',
        name: 'on',
        on: info.on
    }) }}

    {{ forms.selectField({
        label: \"Timezone\"|t('app'),
        warning: (craft.app.config.general.timezone ? configWarning('timezone')),
        id: 'timezone',
        name: 'timezone',
        value: info.timezone,
        options: timezoneOptions
    }) }}

    {% if CraftEdition == CraftPro %}
        <hr>

        {% do view.registerTranslations('app', [
            \"Are you sure you want to delete the logo?\",
        ]) %}

        {% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\fileupload\\\\FileUploadAsset\") %}

        {{ forms.field({
            label: \"Login Page Logo\"|t('app'),
            instructions: \"SVG file recommended. The logo will be displayed at {size} wide.\"|t('app', { size: '300px' })
        }, include('settings/general/_images/logo')) }}

        {{ forms.field({
            label: \"Site Icon\"|t('app'),
            instructions: \"Square SVG file recommended. The logo will be displayed at {size} by {size}.\"|t('app', { size: '32px' })
        }, include('settings/general/_images/icon')) }}

        <div class=\"clear\"></div>
    {% endif %}
{% endblock %}
", "settings/general/_index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/general/_index.html");
    }
}
