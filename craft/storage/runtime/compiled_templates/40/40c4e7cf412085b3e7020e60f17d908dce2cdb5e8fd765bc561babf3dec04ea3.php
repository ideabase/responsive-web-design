<?php

/* redactor/_field_settings */
class __TwigTemplate_827b395c9950fdba061e337e0915479bf15bf27f08cdfa0ddfa6b0871def1779 extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "redactor/_field_settings", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Redactor Config", "redactor"), "instructions" => ((($this->extensions['craft\web\twig\Extension']->translateFilter("You can save custom {name} configs as {ext} files in {path}.", "redactor", array("name" => "Redactor", "ext" => "`.json`", "path" => "`config/redactor/`")) . " <a href=\"http://imperavi.com/redactor/docs/settings/\" target=\"_blank\">") . $this->extensions['craft\web\twig\Extension']->translateFilter("View available settings", "redactor")) . "</a>"), "id" => "redactorConfig", "name" => "redactorConfig", "options" =>         // line 13
(isset($context["redactorConfigOptions"]) || array_key_exists("redactorConfigOptions", $context) ? $context["redactorConfigOptions"] : (function () { throw new Twig_Error_Runtime('Variable "redactorConfigOptions" does not exist.', 13, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 14
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 14, $this->source); })()), "redactorConfig", array())));
        // line 15
        echo "

";
        // line 17
        echo $context["forms"]->macro_checkboxSelectField(array("id" => "availableVolumes", "name" => "availableVolumes", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Available Volumes", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The volumes that should be available when selecting assets (if the selected config has an Image or File button).", "redactor"), "options" =>         // line 22
(isset($context["volumeOptions"]) || array_key_exists("volumeOptions", $context) ? $context["volumeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "volumeOptions" does not exist.', 22, $this->source); })()), "values" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 23
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 23, $this->source); })()), "availableVolumes", array()), "showAllOption" => ((twig_length_filter($this->env,         // line 24
(isset($context["volumeOptions"]) || array_key_exists("volumeOptions", $context) ? $context["volumeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "volumeOptions" does not exist.', 24, $this->source); })()))) ? (true) : (false))));
        // line 25
        echo "

";
        // line 27
        echo $context["forms"]->macro_checkboxSelectField(array("id" => "availableTransforms", "name" => "availableTransforms", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Available Transforms", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The Transforms that should be available for Image selection.", "redactor"), "options" =>         // line 32
(isset($context["transformOptions"]) || array_key_exists("transformOptions", $context) ? $context["transformOptions"] : (function () { throw new Twig_Error_Runtime('Variable "transformOptions" does not exist.', 32, $this->source); })()), "values" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 33
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 33, $this->source); })()), "availableTransforms", array()), "showAllOption" => ((twig_length_filter($this->env,         // line 34
(isset($context["transformOptions"]) || array_key_exists("transformOptions", $context) ? $context["transformOptions"] : (function () { throw new Twig_Error_Runtime('Variable "transformOptions" does not exist.', 34, $this->source); })()))) ? (true) : (false))));
        // line 35
        echo "


<hr>
<a class=\"fieldtoggle\" data-target=\"advanced\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Advanced", "redactor"), "html", null, true);
        echo "</a>
<div id=\"advanced\" class=\"hidden\">
    ";
        // line 41
        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Clean up HTML?", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Removes <code>&lt;span&gt;</code>’s, empty tags, and most <code>style</code> attributes on save.", "redactor"), "id" => "cleanupHtml", "name" => "cleanupHtml", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 46
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 46, $this->source); })()), "cleanupHtml", array())));
        // line 47
        echo "

    ";
        // line 49
        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Purify HTML?", "redactor"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Removes any potentially-malicious code on save, by running the submitted data through <a href=\"http://htmlpurifier.org/\" target=\"_blank\">HTML Purifier</a>.", "redactor"), "warning" => $this->extensions['craft\web\twig\Extension']->translateFilter("Disable this at your own risk!", "redactor"), "id" => "purifyHtml", "name" => "purifyHtml", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 55
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 55, $this->source); })()), "purifyHtml", array()), "toggle" => "purifier-config-container"));
        // line 57
        echo "

    <div id=\"purifier-config-container\"";
        // line 59
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 59, $this->source); })()), "purifyHtml", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
        ";
        // line 60
        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("HTML Purifier Config", "redactor"), "instructions" => ((($this->extensions['craft\web\twig\Extension']->translateFilter("You can save custom {name} configs as {ext} files in {path}.", "redactor", array("name" => "HTML Purifier Config", "ext" => "`.json`", "path" => "`config/htmlpurifier/`")) . " <a href=\"http://htmlpurifier.org/live/configdoc/plain.html\" target=\"_blank\">") . $this->extensions['craft\web\twig\Extension']->translateFilter("View available settings", "redactor")) . "</a>"), "id" => "purifierConfig", "name" => "purifierConfig", "options" =>         // line 70
(isset($context["purifierConfigOptions"]) || array_key_exists("purifierConfigOptions", $context) ? $context["purifierConfigOptions"] : (function () { throw new Twig_Error_Runtime('Variable "purifierConfigOptions" does not exist.', 70, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 71
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 71, $this->source); })()), "purifierConfig", array())));
        // line 72
        echo "
    </div>

    ";
        // line 75
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 75, $this->source); })()), "app", array()), "db", array()), "isMysql", array())) {
            // line 76
            echo "        ";
            echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Column Type", "redactor"), "id" => "column-type", "name" => "columnType", "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The type of column this field should get in the database.", "redactor"), "options" => array(0 => array("value" => "text", "label" => "text (~64KB)"), 1 => array("value" => "mediumtext", "label" => "mediumtext (~16MB)")), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 85
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 85, $this->source); })()), "columnType", array()), "warning" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 86
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 86, $this->source); })()), "id", array())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "redactor")) : (""))));
            // line 87
            echo "
    ";
        }
        // line 89
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "redactor/_field_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 89,  97 => 87,  95 => 86,  94 => 85,  92 => 76,  90 => 75,  85 => 72,  83 => 71,  82 => 70,  81 => 60,  75 => 59,  71 => 57,  69 => 55,  68 => 49,  64 => 47,  62 => 46,  61 => 41,  56 => 39,  50 => 35,  48 => 34,  47 => 33,  46 => 32,  45 => 27,  41 => 25,  39 => 24,  38 => 23,  37 => 22,  36 => 17,  32 => 15,  30 => 14,  29 => 13,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_includes/forms' as forms %}

{{ forms.selectField({
    label: \"Redactor Config\"|t('redactor'),
    instructions: \"You can save custom {name} configs as {ext} files in {path}.\"|t('redactor', {
            name: 'Redactor',
            ext: '`.json`',
            path: '`config/redactor/`'
        }) ~
        ' <a href=\"http://imperavi.com/redactor/docs/settings/\" target=\"_blank\">'~\"View available settings\"|t('redactor')~'</a>',
    id: 'redactorConfig',
    name: 'redactorConfig',
    options: redactorConfigOptions,
    value: field.redactorConfig
}) }}

{{ forms.checkboxSelectField({
    id: 'availableVolumes',
    name: 'availableVolumes',
    label: 'Available Volumes'|t('redactor'),
    instructions: 'The volumes that should be available when selecting assets (if the selected config has an Image or File button).'|t('redactor'),
    options: volumeOptions,
    values: field.availableVolumes,
    showAllOption: volumeOptions|length ? true : false
}) }}

{{ forms.checkboxSelectField({
    id: 'availableTransforms',
    name: 'availableTransforms',
    label: 'Available Transforms'|t('redactor'),
    instructions: 'The Transforms that should be available for Image selection.'|t('redactor'),
    options: transformOptions,
    values: field.availableTransforms,
    showAllOption: transformOptions|length ? true : false
}) }}


<hr>
<a class=\"fieldtoggle\" data-target=\"advanced\">{{ \"Advanced\"|t('redactor') }}</a>
<div id=\"advanced\" class=\"hidden\">
    {{ forms.checkboxField({
        label: \"Clean up HTML?\"|t('redactor'),
        instructions: \"Removes <code>&lt;span&gt;</code>’s, empty tags, and most <code>style</code> attributes on save.\"|t('redactor'),
        id: 'cleanupHtml',
        name: 'cleanupHtml',
        checked: field.cleanupHtml
    }) }}

    {{ forms.checkboxField({
        label: \"Purify HTML?\"|t('redactor'),
        instructions: 'Removes any potentially-malicious code on save, by running the submitted data through <a href=\"http://htmlpurifier.org/\" target=\"_blank\">HTML Purifier</a>.'|t('redactor'),
        warning: 'Disable this at your own risk!'|t('redactor'),
        id: 'purifyHtml',
        name: 'purifyHtml',
        checked: field.purifyHtml,
        toggle: 'purifier-config-container'
    }) }}

    <div id=\"purifier-config-container\"{% if not field.purifyHtml %} class=\"hidden\"{% endif %}>
        {{ forms.selectField({
            label: \"HTML Purifier Config\"|t('redactor'),
            instructions: \"You can save custom {name} configs as {ext} files in {path}.\"|t('redactor', {
                name: 'HTML Purifier Config',
                ext: '`.json`',
                path: '`config/htmlpurifier/`'
            }) ~
            ' <a href=\"http://htmlpurifier.org/live/configdoc/plain.html\" target=\"_blank\">'~\"View available settings\"|t('redactor')~'</a>',
            id: 'purifierConfig',
            name: 'purifierConfig',
            options: purifierConfigOptions,
            value: field.purifierConfig
        }) }}
    </div>

    {% if craft.app.db.isMysql %}
        {{ forms.selectField({
            label: \"Column Type\"|t('redactor'),
            id: 'column-type',
            name: 'columnType',
            instructions: \"The type of column this field should get in the database.\"|t('redactor'),
            options: [
                { value: 'text', label: 'text (~64KB)' },
                { value: 'mediumtext', label: 'mediumtext (~16MB)' },
            ],
            value: field.columnType,
            warning: (field.id ? \"Changing this may result in data loss.\"|t('redactor')),
        }) }}
    {% endif %}
</div>
", "redactor/_field_settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/redactor/src/templates/_field_settings.html");
    }
}
