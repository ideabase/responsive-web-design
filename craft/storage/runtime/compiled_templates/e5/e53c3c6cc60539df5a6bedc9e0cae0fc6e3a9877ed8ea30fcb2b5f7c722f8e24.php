<?php

/* settings/sections/_entrytypes/edit */
class __TwigTemplate_6ec41bc35a192f3f8f30e07b2d3703912018f671a7def44bb8b6e37443ee1781 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_entrytypes/edit", 1);
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
        $context["fullPageForm"] = true;
        // line 4
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/sections/_entrytypes/edit", 4);
        // line 88
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 88, $this->source); })()), "handle", array())) {
            // line 89
            Craft::$app->getView()->registerJs("new Craft.HandleGenerator('#name', '#handle');", 3);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" name=\"action\" value=\"sections/save-entry-type\">

    ";
        // line 10
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 10, $this->source); })()), "type", array()) == "single")) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction("settings/sections"), "html", null, true);
            echo "
    ";
        } else {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 13, $this->source); })()), "id", array())) . "/entrytypes")), "html", null, true);
            echo "
    ";
        }
        // line 15
        echo "    <input type=\"hidden\" name=\"sectionId\" value=\"";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 15, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 16
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 16, $this->source); })()), "id", array())) {
            echo "<input type=\"hidden\" name=\"entryTypeId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 16, $this->source); })()), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 17
        echo "
    ";
        // line 18
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 18, $this->source); })()), "type", array()) != "single")) {
            // line 19
            echo "        ";
            echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this entry type will be called in the CP.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 25
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 25, $this->source); })()), "name", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 26
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 26, $this->source); })()), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true));
            // line 29
            echo "

        ";
            // line 31
            echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this entry type in the templates.", "app"), "id" => "handle", "class" => "code", "name" => "handle", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 37
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 37, $this->source); })()), "handle", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 38
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 38, $this->source); })()), "getErrors", array(0 => "handle"), "method"), "required" => true));
            // line 40
            echo "

        <hr>

    ";
        }
        // line 45
        echo "
    ";
        // line 46
        echo $context["forms"]->macro_checkboxField(array("first" => (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 47
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 47, $this->source); })()), "type", array()) == "single"), "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show the Title field", "app"), "name" => "hasTitleField", "toggle" => "titleLabel-container", "reverseToggle" => "titleFormat-container", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 52
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 52, $this->source); })()), "hasTitleField", array())));
        // line 53
        echo "

    <div id=\"titleLabel-container\"";
        // line 55
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 55, $this->source); })()), "hasTitleField", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
        ";
        // line 56
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title Field Label", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What do you want the Title field to be called?", "app"), "id" => "titleLabel", "name" => "titleLabel", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 61
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 61, $this->source); })()), "titleLabel", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 62
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 62, $this->source); })()), "getErrors", array(0 => "titleLabel"), "method"), "required" => true));
        // line 64
        echo "
    </div>

    <div id=\"titleFormat-container\"";
        // line 67
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 67, $this->source); })()), "hasTitleField", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
        ";
        // line 68
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title Format", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What the auto-generated entry titles should look like. You can include tags that output entry properties, such as {ex}.", "app", array("ex" => "<code>{myCustomField}</code>")), "id" => "titleFormat", "name" => "titleFormat", "class" => "code", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 74
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 74, $this->source); })()), "titleFormat", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 75
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 75, $this->source); })()), "getErrors", array(0 => "titleFormat"), "method"), "required" => true));
        // line 77
        echo "
    </div>

    <hr>

    ";
        // line 82
        $this->loadTemplate("_includes/fieldlayoutdesigner", "settings/sections/_entrytypes/edit", 82)->display(array("fieldLayout" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 83
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 83, $this->source); })()), "getFieldLayout", array(), "method")));
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 83,  142 => 82,  135 => 77,  133 => 75,  132 => 74,  131 => 68,  125 => 67,  120 => 64,  118 => 62,  117 => 61,  116 => 56,  110 => 55,  106 => 53,  104 => 52,  103 => 47,  102 => 46,  99 => 45,  92 => 40,  90 => 38,  89 => 37,  88 => 31,  84 => 29,  82 => 26,  81 => 25,  79 => 19,  77 => 18,  74 => 17,  68 => 16,  63 => 15,  57 => 13,  51 => 11,  49 => 10,  45 => 8,  42 => 7,  38 => 1,  35 => 89,  33 => 88,  31 => 4,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set fullPageForm = true %}

{% import \"_includes/forms\" as forms %}


{% block content %}
    <input type=\"hidden\" name=\"action\" value=\"sections/save-entry-type\">

    {% if section.type == 'single' %}
        {{ redirectInput('settings/sections') }}
    {% else %}
        {{ redirectInput('settings/sections/'~section.id~'/entrytypes') }}
    {% endif %}
    <input type=\"hidden\" name=\"sectionId\" value=\"{{ section.id }}\">
    {% if entryType.id %}<input type=\"hidden\" name=\"entryTypeId\" value=\"{{ entryType.id }}\">{% endif %}

    {% if section.type != 'single' %}
        {{ forms.textField({
            first: true,
            label: \"Name\"|t('app'),
            instructions: \"What this entry type will be called in the CP.\"|t('app'),
            id: 'name',
            name: 'name',
            value: entryType.name,
            errors: entryType.getErrors('name'),
            autofocus: true,
            required: true
        }) }}

        {{ forms.textField({
            label: \"Handle\"|t('app'),
            instructions: \"How you’ll refer to this entry type in the templates.\"|t('app'),
            id: 'handle',
            class: 'code',
            name: 'handle',
            value: entryType.handle,
            errors: entryType.getErrors('handle'),
            required: true
        }) }}

        <hr>

    {% endif %}

    {{ forms.checkboxField({
        first: (section.type == 'single'),
        label: \"Show the Title field\"|t('app'),
        name: 'hasTitleField',
        toggle: 'titleLabel-container',
        reverseToggle: 'titleFormat-container',
        checked: entryType.hasTitleField
    }) }}

    <div id=\"titleLabel-container\"{% if not entryType.hasTitleField %} class=\"hidden\"{% endif %}>
        {{ forms.textField({
            label: \"Title Field Label\"|t('app'),
            instructions: \"What do you want the Title field to be called?\"|t('app'),
            id: 'titleLabel',
            name: 'titleLabel',
            value: entryType.titleLabel,
            errors: entryType.getErrors('titleLabel'),
            required: true
        }) }}
    </div>

    <div id=\"titleFormat-container\"{% if entryType.hasTitleField %} class=\"hidden\"{% endif %}>
        {{ forms.textField({
            label: \"Title Format\"|t('app'),
            instructions: \"What the auto-generated entry titles should look like. You can include tags that output entry properties, such as {ex}.\"|t('app', { ex: '<code>{myCustomField}</code>' }),
            id: 'titleFormat',
            name: 'titleFormat',
            class: 'code',
            value: entryType.titleFormat,
            errors: entryType.getErrors('titleFormat'),
            required: true
        }) }}
    </div>

    <hr>

    {% include \"_includes/fieldlayoutdesigner\" with {
        fieldLayout: entryType.getFieldLayout(),
    } only %}
{% endblock %}


{% if not entryType.handle %}
    {% js \"new Craft.HandleGenerator('#name', '#handle');\" %}
{% endif %}
", "settings/sections/_entrytypes/edit", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/sections/_entrytypes/edit.html");
    }
}
