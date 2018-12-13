<?php

/* _components/fieldtypes/Assets/settings */
class __TwigTemplate_1556326908a1db98517f6287cebf10248144190c671192bc68819e06aee781ca extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_components/fieldtypes/elementfieldsettings", "_components/fieldtypes/Assets/settings", 1);
        $this->blocks = array(
            'fieldSettings' => array($this, 'block_fieldSettings'),
            'uploadLocationFields' => array($this, 'block_uploadLocationFields'),
            'fileTypesField' => array($this, 'block_fileTypesField'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Assets/settings", 3);
        // line 5
        $context["fileKindOptions"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 5, $this->source); })()), "getFileKindOptions", array(), "method");
        // line 6
        $context["isMatrix"] = twig_in_filter("craft\\fields\\Matrix", craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 6, $this->source); })()), "app", array()), "view", array()), "getNamespace", array(), "method"));
        // line 31
        $context["__internal_6f03eefec8489345bc0d37843519351025c1a7d4bfe9b008ec12aebed3b2bbe8"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_fieldSettings($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->displayBlock('uploadLocationFields', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        $this->displayBlock('fileTypesField', $context, $blocks);
        // line 97
        echo "
    ";
        // line 98
        $this->displayBlock("limitField", $context, $blocks);
        echo "
    ";
        // line 99
        $this->displayBlock("viewModeField", $context, $blocks);
        echo "
    ";
        // line 100
        $this->displayBlock("selectionLabelField", $context, $blocks);
        echo "
    ";
        // line 101
        $this->displayBlock("advancedSettings", $context, $blocks);
        echo "
";
    }

    // line 35
    public function block_uploadLocationFields($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Restrict uploads to a single folder?", "app"), "id" => "useSingleFolder-toggle", "name" => "useSingleFolder", "class" => "use-single-folder-cb", "value" => 1, "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 42
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 42, $this->source); })()), "useSingleFolder", array()), "toggle" => "single-folder-settings", "reverseToggle" => "multi-folder-settings"));
        // line 45
        echo "

        ";
        // line 47
        $context["uploadLocationNote"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Note that the subfolder path can contain variables like <code>{slug}</code> or <code>{author.username}</code>.", "app");
        // line 48
        echo "        ";
        if ((isset($context["isMatrix"]) || array_key_exists("isMatrix", $context) ? $context["isMatrix"] : (function () { throw new Twig_Error_Runtime('Variable "isMatrix" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "            ";
            $context["uploadLocationNote"] = $this->extensions['craft\web\twig\Extension']->replaceFilter((isset($context["uploadLocationNote"]) || array_key_exists("uploadLocationNote", $context) ? $context["uploadLocationNote"] : (function () { throw new Twig_Error_Runtime('Variable "uploadLocationNote" does not exist.', 49, $this->source); })()), array("{slug}" => "{owner.slug}", "{author.username}" => "{owner.author.username}"));
            // line 53
            echo "        ";
        }
        // line 54
        echo "
        <div id=\"multi-folder-settings\"";
        // line 55
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 55, $this->source); })()), "useSingleFolder", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
            ";
        // line 56
        $this->displayBlock("sourcesField", $context, $blocks);
        echo "

            ";
        // line 58
        echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default Upload Location", "app"), "instructions" => (($this->extensions['craft\web\twig\Extension']->translateFilter("Where should files be uploaded when they are dragged directly onto the field, or uploaded from the front end?", "app") . " ") .         // line 60
(isset($context["uploadLocationNote"]) || array_key_exists("uploadLocationNote", $context) ? $context["uploadLocationNote"] : (function () { throw new Twig_Error_Runtime('Variable "uploadLocationNote" does not exist.', 60, $this->source); })())), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 61
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 61, $this->source); })()), "getErrors", array(0 => "defaultUploadLocationSubpath"), "method")), $context["__internal_6f03eefec8489345bc0d37843519351025c1a7d4bfe9b008ec12aebed3b2bbe8"]->macro_uploadLocationInput("defaultUploadLocation",         // line 62
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 62, $this->source); })()), (isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sourceOptions" does not exist.', 62, $this->source); })())));
        echo "
        </div>

        <div id=\"single-folder-settings\"";
        // line 65
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 65, $this->source); })()), "useSingleFolder", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
            ";
        // line 66
        echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Upload Location", "app"), "instructions" =>         // line 68
(isset($context["uploadLocationNote"]) || array_key_exists("uploadLocationNote", $context) ? $context["uploadLocationNote"] : (function () { throw new Twig_Error_Runtime('Variable "uploadLocationNote" does not exist.', 68, $this->source); })()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 69
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 69, $this->source); })()), "getErrors", array(0 => "singleUploadLocationSubpath"), "method")), $context["__internal_6f03eefec8489345bc0d37843519351025c1a7d4bfe9b008ec12aebed3b2bbe8"]->macro_uploadLocationInput("singleUploadLocation",         // line 70
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 70, $this->source); })()), (isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sourceOptions" does not exist.', 70, $this->source); })())));
        echo "
        </div>
    ";
    }

    // line 74
    public function block_fileTypesField($context, array $blocks = array())
    {
        // line 75
        echo "        ";
        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Restrict allowed file types?", "app"), "class" => "restrictFiles", "id" => "restrictFiles", "name" => "restrictFiles", "value" => 1, "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 81
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 81, $this->source); })()), "restrictFiles", array()), "toggle" => "restrict-allowed-types"));
        // line 83
        echo "

        <div id=\"restrict-allowed-types\"";
        // line 85
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 85, $this->source); })()), "restrictFiles", array())) {
            echo " class=\"hidden indent\"";
        }
        echo ">
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fileKindOptions"]) || array_key_exists("fileKindOptions", $context) ? $context["fileKindOptions"] : (function () { throw new Twig_Error_Runtime('Variable "fileKindOptions" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 87
            echo "                ";
            echo $context["forms"]->macro_checkboxField(array("label" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 88
$context["option"], "label", array()), "id" => ("allowedKinds-" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 89
$context["option"], "value", array())), "name" => "allowedKinds[]", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 91
$context["option"], "value", array()), "checked" => twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 92
$context["option"], "value", array()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 92, $this->source); })()), "allowedKinds", array()))));
            // line 93
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </div>
    ";
    }

    // line 8
    public function macro_uploadLocationInput($__name__ = null, $__field__ = null, $__inputSourceOptions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "field" => $__field__,
            "inputSourceOptions" => $__inputSourceOptions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "    ";
            $context["__internal_d6076854d3270806008d3983a1874b3f9d42d3d02506cc6631155efa0357fdaa"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Assets/settings", 9);
            // line 10
            echo "    <div class=\"flex\">
        <div>
            ";
            // line 12
            echo $context["__internal_d6076854d3270806008d3983a1874b3f9d42d3d02506cc6631155efa0357fdaa"]->macro_select(array("id" => (            // line 13
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 13, $this->source); })()) . "Source"), "name" => (            // line 14
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 14, $this->source); })()) . "Source"), "options" =>             // line 15
(isset($context["inputSourceOptions"]) || array_key_exists("inputSourceOptions", $context) ? $context["inputSourceOptions"] : (function () { throw new Twig_Error_Runtime('Variable "inputSourceOptions" does not exist.', 15, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 16
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 16, $this->source); })()), ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 16, $this->source); })()) . "Source"), array(), "array")));
            // line 17
            echo "
        </div>
        <div class=\"flex-grow\">
            ";
            // line 20
            echo $context["__internal_d6076854d3270806008d3983a1874b3f9d42d3d02506cc6631155efa0357fdaa"]->macro_text(array("id" => (            // line 21
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 21, $this->source); })()) . "Subpath"), "class" => "ltr", "name" => (            // line 23
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 23, $this->source); })()) . "Subpath"), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 24
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 24, $this->source); })()), ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 24, $this->source); })()) . "Subpath"), array(), "array"), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("path/to/subfolder", "app")));
            // line 26
            echo "
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 26,  211 => 24,  210 => 23,  209 => 21,  208 => 20,  203 => 17,  201 => 16,  200 => 15,  199 => 14,  198 => 13,  197 => 12,  193 => 10,  190 => 9,  176 => 8,  171 => 95,  164 => 93,  162 => 92,  161 => 91,  160 => 89,  159 => 88,  157 => 87,  153 => 86,  147 => 85,  143 => 83,  141 => 81,  139 => 75,  136 => 74,  129 => 70,  128 => 69,  127 => 68,  126 => 66,  120 => 65,  114 => 62,  113 => 61,  112 => 60,  111 => 58,  106 => 56,  100 => 55,  97 => 54,  94 => 53,  91 => 49,  88 => 48,  86 => 47,  82 => 45,  80 => 42,  78 => 36,  75 => 35,  69 => 101,  65 => 100,  61 => 99,  57 => 98,  54 => 97,  52 => 74,  49 => 73,  46 => 35,  43 => 34,  39 => 1,  37 => 31,  35 => 6,  33 => 5,  31 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_components/fieldtypes/elementfieldsettings\" %}

{% import \"_includes/forms\" as forms %}

{% set fileKindOptions = field.getFileKindOptions() %}
{% set isMatrix = 'craft\\\\fields\\\\Matrix' in craft.app.view.getNamespace() %}

{% macro uploadLocationInput(name, field, inputSourceOptions) %}
    {% from \"_includes/forms\" import select, text %}
    <div class=\"flex\">
        <div>
            {{ select({
                id: name~'Source',
                name: name~'Source',
                options: inputSourceOptions,
                value: field[name~'Source'],
            }) }}
        </div>
        <div class=\"flex-grow\">
            {{ text({
                id: name~'Subpath',
                class: 'ltr',
                name: name~'Subpath',
                value: field[name~'Subpath'],
                placeholder: \"path/to/subfolder\"|t('app')
            }) }}
        </div>
    </div>
{% endmacro %}

{% from _self import uploadLocationInput %}


{% block fieldSettings %}
    {% block uploadLocationFields %}
        {{ forms.checkboxField({
            label: \"Restrict uploads to a single folder?\"|t('app'),
            id: 'useSingleFolder-toggle',
            name: 'useSingleFolder',
            class: 'use-single-folder-cb',
            value: 1,
            checked: field.useSingleFolder,
            toggle: 'single-folder-settings',
            reverseToggle: 'multi-folder-settings'
        }) }}

        {% set uploadLocationNote = \"Note that the subfolder path can contain variables like <code>{slug}</code> or <code>{author.username}</code>.\"|t('app') %}
        {% if isMatrix %}
            {% set uploadLocationNote = uploadLocationNote|replace({
            '{slug}': '{owner.slug}',
            '{author.username}': '{owner.author.username}'
            }) %}
        {% endif %}

        <div id=\"multi-folder-settings\"{% if field.useSingleFolder %} class=\"hidden\"{% endif %}>
            {{ block('sourcesField') }}

            {{ forms.field({
                label: \"Default Upload Location\"|t('app'),
                instructions: \"Where should files be uploaded when they are dragged directly onto the field, or uploaded from the front end?\"|t('app') ~' '~ uploadLocationNote,
                errors: field.getErrors('defaultUploadLocationSubpath')
            }, uploadLocationInput('defaultUploadLocation', field, sourceOptions)) }}
        </div>

        <div id=\"single-folder-settings\"{% if not field.useSingleFolder %} class=\"hidden\"{% endif %}>
            {{ forms.field({
                label: \"Upload Location\"|t('app'),
                instructions: uploadLocationNote,
                errors: field.getErrors('singleUploadLocationSubpath')
            }, uploadLocationInput('singleUploadLocation', field, sourceOptions)) }}
        </div>
    {% endblock %}

    {% block fileTypesField %}
        {{ forms.checkboxField({
            label: \"Restrict allowed file types?\"|t('app'),
            class: 'restrictFiles',
            id: 'restrictFiles',
            name: 'restrictFiles',
            value: 1,
            checked: field.restrictFiles,
            toggle: 'restrict-allowed-types'
        }) }}

        <div id=\"restrict-allowed-types\"{% if not field.restrictFiles %} class=\"hidden indent\"{% endif %}>
            {% for option in fileKindOptions %}
                {{ forms.checkboxField({
                    label: option.label,
                    id: 'allowedKinds-'~option.value,
                    name: 'allowedKinds[]',
                    value: option.value,
                    checked: (option.value in field.allowedKinds)
                }) }}
            {% endfor %}
        </div>
    {% endblock %}

    {{ block('limitField') }}
    {{ block('viewModeField') }}
    {{ block('selectionLabelField') }}
    {{ block('advancedSettings') }}
{% endblock %}
", "_components/fieldtypes/Assets/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/Assets/settings.html");
    }
}
