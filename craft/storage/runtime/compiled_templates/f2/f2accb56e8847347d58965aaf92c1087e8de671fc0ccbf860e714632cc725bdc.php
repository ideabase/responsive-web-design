<?php

/* settings/categories/_edit */
class __TwigTemplate_cad9f41985faefbab54952ba6a7e3c7d1b96dc88384a7ee8c491a026c3e8914d extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/categories/_edit", 1);
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
        // line 3
        $context["fullPageForm"] = true;
        // line 5
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/categories/_edit", 5);
        // line 115
        if ((isset($context["brandNewGroup"]) || array_key_exists("brandNewGroup", $context) ? $context["brandNewGroup"] : (function () { throw new Twig_Error_Runtime('Variable "brandNewGroup" does not exist.', 115, $this->source); })())) {
            // line 116
            ob_start();
            // line 117
            echo "        new Craft.HandleGenerator('#name', '#handle');

        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 119, $this->source); })()), "app", array()), "sites", array()), "getAllSites", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 120
                echo "            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "handle", array()), "html", null, true);
                echo "\"] textarea[name\$=\"[uriFormat]\"]', { suffix: '/{slug}' });
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                // line 121
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "handle", array()), "html", null, true);
                echo "\"] textarea[name\$=\"[template]\"]', { suffix: '/_category' });
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <input type=\"hidden\" name=\"action\" value=\"categories/save-group\">
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction("settings/categories"), "html", null, true);
        echo "

    ";
        // line 12
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 12, $this->source); })()), "id", array())) {
            echo "<input type=\"hidden\" name=\"groupId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 13
        echo "
    <div id=\"categorygroup-settings\">
        ";
        // line 15
        echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this category group will be called in the CP.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 21
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 21, $this->source); })()), "name", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 22
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 22, $this->source); })()), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true));
        // line 25
        echo "

        ";
        // line 27
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this category group in the templates.", "app"), "id" => "handle", "class" => "code", "name" => "handle", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 33
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 33, $this->source); })()), "handle", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 34
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 34, $this->source); })()), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 36
        echo "

        ";
        // line 38
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Levels", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of levels this category group can have. Leave blank if you don’t care.", "app"), "id" => "maxLevels", "name" => "maxLevels", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 43
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 43, $this->source); })()), "maxLevels", array()), "size" => 5, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 45
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 45, $this->source); })()), "getErrors", array(0 => "maxLevels"), "method")));
        // line 46
        echo "

        <hr>

        ";
        // line 50
        $context["siteRows"] = array();
        // line 51
        echo "        ";
        $context["siteErrors"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 51, $this->source); })()), "getErrors", array(0 => "siteSettings"), "method");
        // line 52
        echo "
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 53, $this->source); })()), "app", array()), "sites", array()), "getAllSites", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 54
            echo "            ";
            $context["siteSettings"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["categoryGroup"] ?? null), "siteSettings", array(), "any", false, true), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), array(), "array", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["categoryGroup"] ?? null), "siteSettings", array(), "any", false, true), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), array(), "array")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["categoryGroup"] ?? null), "siteSettings", array(), "any", false, true), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), array(), "array")) : (null));
            // line 55
            echo "            ";
            if ((isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 55, $this->source); })())) {
                // line 56
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 56, $this->source); })()), "getErrors", array(), "method"));
                foreach ($context['_seq'] as $context["attribute"] => $context["errors"]) {
                    // line 57
                    echo "                    ";
                    $context["siteErrors"] = twig_array_merge((isset($context["siteErrors"]) || array_key_exists("siteErrors", $context) ? $context["siteErrors"] : (function () { throw new Twig_Error_Runtime('Variable "siteErrors" does not exist.', 57, $this->source); })()), $context["errors"]);
                    // line 58
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['errors'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            ";
            }
            // line 60
            echo "            ";
            $context["siteRows"] = twig_array_merge((isset($context["siteRows"]) || array_key_exists("siteRows", $context) ? $context["siteRows"] : (function () { throw new Twig_Error_Runtime('Variable "siteRows" does not exist.', 60, $this->source); })()), array(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 61
$context["site"], "handle", array()) => array("heading" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 62
$context["site"], "name", array()), "site"), "uriFormat" => array("value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 64
($context["siteSettings"] ?? null), "uriFormat", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["siteSettings"] ?? null), "uriFormat", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["siteSettings"] ?? null), "uriFormat", array())) : (null)), "hasErrors" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 65
($context["siteSettings"] ?? null), "hasErrors", array(0 => "uriFormat"), "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["siteSettings"] ?? null), "hasErrors", array(0 => "uriFormat"), "method")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["siteSettings"] ?? null), "hasErrors", array(0 => "uriFormat"), "method")) : (false))), "template" => array("value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 68
($context["siteSettings"] ?? null), "template", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["siteSettings"] ?? null), "template", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["siteSettings"] ?? null), "template", array())) : (null)), "hasErrors" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 69
($context["siteSettings"] ?? null), "hasErrors", array(0 => "template"), "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["siteSettings"] ?? null), "hasErrors", array(0 => "template"), "method")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["siteSettings"] ?? null), "hasErrors", array(0 => "template"), "method")) : (false))))));
            // line 73
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
        ";
        // line 75
        echo $context["forms"]->macro_editableTableField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site Settings", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Configure the category group’s site-specific settings.", "app"), "id" => "sites", "name" => "sites", "cols" => array("heading" => array("type" => "heading", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site", "app"), "class" => "thin"), "uriFormat" => array("type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Category URI Format", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("What category URIs should look like for the site.", "app"), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Leave blank if categories don’t have URLs", "app"), "code" => true), "template" => array("type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Template", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which template should be loaded when an entry’s URL is requested.", "app"), "code" => true)), "rows" =>         // line 100
(isset($context["siteRows"]) || array_key_exists("siteRows", $context) ? $context["siteRows"] : (function () { throw new Twig_Error_Runtime('Variable "siteRows" does not exist.', 100, $this->source); })()), "staticRows" => true, "errors" => array_unique(        // line 102
(isset($context["siteErrors"]) || array_key_exists("siteErrors", $context) ? $context["siteErrors"] : (function () { throw new Twig_Error_Runtime('Variable "siteErrors" does not exist.', 102, $this->source); })()))));
        // line 103
        echo "

    </div>

    <div id=\"categorygroup-fieldlayout\" class=\"hidden\">
        ";
        // line 108
        $this->loadTemplate("_includes/fieldlayoutdesigner", "settings/categories/_edit", 108)->display(array("fieldLayout" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 109
(isset($context["categoryGroup"]) || array_key_exists("categoryGroup", $context) ? $context["categoryGroup"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroup" does not exist.', 109, $this->source); })()), "getFieldLayout", array(), "method")));
        // line 111
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "settings/categories/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 111,  178 => 109,  177 => 108,  170 => 103,  168 => 102,  167 => 100,  166 => 75,  163 => 74,  157 => 73,  155 => 69,  154 => 68,  153 => 65,  152 => 64,  151 => 62,  150 => 61,  148 => 60,  145 => 59,  139 => 58,  136 => 57,  131 => 56,  128 => 55,  125 => 54,  121 => 53,  118 => 52,  115 => 51,  113 => 50,  107 => 46,  105 => 45,  104 => 43,  103 => 38,  99 => 36,  97 => 34,  96 => 33,  95 => 27,  91 => 25,  89 => 22,  88 => 21,  87 => 15,  83 => 13,  77 => 12,  72 => 10,  69 => 9,  66 => 8,  62 => 1,  58 => 123,  50 => 121,  45 => 120,  41 => 119,  37 => 117,  35 => 116,  33 => 115,  31 => 5,  29 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}

{% set fullPageForm = true %}

{% import \"_includes/forms\" as forms %}


{% block content %}
    <input type=\"hidden\" name=\"action\" value=\"categories/save-group\">
    {{ redirectInput('settings/categories') }}

    {% if categoryGroup.id %}<input type=\"hidden\" name=\"groupId\" value=\"{{ categoryGroup.id }}\">{% endif %}

    <div id=\"categorygroup-settings\">
        {{ forms.textField({
            first: true,
            label: \"Name\"|t('app'),
            instructions: \"What this category group will be called in the CP.\"|t('app'),
            id: 'name',
            name: 'name',
            value: categoryGroup.name,
            errors: categoryGroup.getErrors('name'),
            autofocus: true,
            required: true,
        }) }}

        {{ forms.textField({
            label: \"Handle\"|t('app'),
            instructions: \"How you’ll refer to this category group in the templates.\"|t('app'),
            id: 'handle',
            class: 'code',
            name: 'handle',
            value: categoryGroup.handle,
            errors: categoryGroup.getErrors('handle'),
            required: true
        }) }}

        {{ forms.textField({
            label: \"Max Levels\"|t('app'),
            instructions: \"The maximum number of levels this category group can have. Leave blank if you don’t care.\"|t('app'),
            id: 'maxLevels',
            name: 'maxLevels',
            value: categoryGroup.maxLevels,
            size: 5,
            errors: categoryGroup.getErrors('maxLevels')
        }) }}

        <hr>

        {% set siteRows = [] %}
        {% set siteErrors = categoryGroup.getErrors('siteSettings') %}

        {% for site in craft.app.sites.getAllSites() %}
            {% set siteSettings = categoryGroup.siteSettings[site.id] ?? null %}
            {% if siteSettings %}
                {% for attribute, errors in siteSettings.getErrors() %}
                    {% set siteErrors = siteErrors|merge(errors) %}
                {% endfor %}
            {% endif %}
            {% set siteRows = siteRows|merge({
                (site.handle): {
                    heading: site.name|t('site'),
                    uriFormat: {
                        value: siteSettings.uriFormat ?? null,
                        hasErrors: siteSettings.hasErrors('uriFormat') ?? false
                    },
                    template: {
                        value: siteSettings.template ?? null,
                        hasErrors: siteSettings.hasErrors('template') ?? false,
                    }
                }
            }) %}
        {% endfor %}

        {{ forms.editableTableField({
            label: \"Site Settings\"|t('app'),
            instructions: \"Configure the category group’s site-specific settings.\"|t('app'),
            id: 'sites',
            name: 'sites',
            cols: {
                heading: {
                    type: 'heading',
                    heading: \"Site\"|t('app'),
                    class: 'thin'
                },
                uriFormat: {
                    type: 'singleline',
                    heading: \"Category URI Format\"|t('app'),
                    info: \"What category URIs should look like for the site.\"|t('app'),
                    placeholder: \"Leave blank if categories don’t have URLs\"|t('app'),
                    code: true
                },
                template: {
                    type: 'singleline',
                    heading: \"Template\"|t('app'),
                    info: \"Which template should be loaded when an entry’s URL is requested.\"|t('app'),
                    code: true
                },
            },
            rows: siteRows,
            staticRows: true,
            errors: siteErrors|unique
        }) }}

    </div>

    <div id=\"categorygroup-fieldlayout\" class=\"hidden\">
        {% include \"_includes/fieldlayoutdesigner\" with {
        fieldLayout: categoryGroup.getFieldLayout()
        } only %}
    </div>
{% endblock %}


{% if brandNewGroup %}
    {% js %}
        new Craft.HandleGenerator('#name', '#handle');

        {% for site in craft.app.sites.getAllSites() %}
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[uriFormat]\"]', { suffix: '/{slug}' });
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[template]\"]', { suffix: '/_category' });
        {% endfor %}
    {% endjs %}
{% endif %}
", "settings/categories/_edit", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/categories/_edit.html");
    }
}
