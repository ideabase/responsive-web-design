<?php

/* _components/fieldtypes/Table/settings */
class __TwigTemplate_00ef6b1b5abde60ada17fc2afa02507a70853a3fe25e4bc3cbd3d1706927a04c extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Table/settings", 1);
        // line 2
        echo "
";
        // line 3
        echo (isset($context["columnsField"]) || array_key_exists("columnsField", $context) ? $context["columnsField"] : (function () { throw new Twig_Error_Runtime('Variable "columnsField" does not exist.', 3, $this->source); })());
        echo "
";
        // line 4
        echo (isset($context["defaultsField"]) || array_key_exists("defaultsField", $context) ? $context["defaultsField"] : (function () { throw new Twig_Error_Runtime('Variable "defaultsField" does not exist.', 4, $this->source); })());
        echo "

";
        // line 6
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Min Rows", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The minimum number of rows the field is allowed to have.", "app"), "id" => "minRows", "name" => "minRows", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 11
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 11, $this->source); })()), "minRows", array()), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 13
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 13, $this->source); })()), "getErrors", array(0 => "minRows"), "method")));
        // line 14
        echo "

";
        // line 16
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Rows", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of rows the field is allowed to have.", "app"), "id" => "maxRows", "name" => "maxRows", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 21
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 21, $this->source); })()), "maxRows", array()), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 23
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 23, $this->source); })()), "getErrors", array(0 => "maxRows"), "method")));
        // line 24
        echo "

";
        // line 26
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Add Row Label", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Insert the button label for adding a new row to the table.", "app"), "id" => "addRowLabel", "name" => "addRowLabel", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 31
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 31, $this->source); })()), "addRowLabel", array()), "size" => 20, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 33
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 33, $this->source); })()), "getErrors", array(0 => "addRowLabel"), "method")));
        // line 34
        echo "

";
        // line 36
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 36, $this->source); })()), "app", array()), "db", array()), "isMysql", array())) {
            // line 37
            echo "    <hr>
    <a class=\"fieldtoggle\" data-target=\"advanced\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Advanced", "app"), "html", null, true);
            echo "</a>
    <div id=\"advanced\" class=\"hidden\">
        ";
            // line 40
            echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Column Type", "app"), "id" => "column-type", "name" => "columnType", "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The type of column this field should get in the database.", "app"), "options" => array(0 => array("value" => "text", "label" => "text (~64KB)"), 1 => array("value" => "mediumtext", "label" => "mediumtext (~16MB)")), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 49
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 49, $this->source); })()), "columnType", array()), "warning" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 50
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 50, $this->source); })()), "id", array())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : (""))));
            // line 51
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Table/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 51,  73 => 50,  72 => 49,  71 => 40,  66 => 38,  63 => 37,  61 => 36,  57 => 34,  55 => 33,  54 => 31,  53 => 26,  49 => 24,  47 => 23,  46 => 21,  45 => 16,  41 => 14,  39 => 13,  38 => 11,  37 => 6,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_includes/forms' as forms %}

{{ columnsField|raw }}
{{ defaultsField|raw }}

{{ forms.textField({
    label: \"Min Rows\"|t('app'),
    instructions: \"The minimum number of rows the field is allowed to have.\"|t('app'),
    id: 'minRows',
    name: 'minRows',
    value: field.minRows,
    size: 3,
    errors: field.getErrors('minRows')
}) }}

{{ forms.textField({
    label: \"Max Rows\"|t('app'),
    instructions: \"The maximum number of rows the field is allowed to have.\"|t('app'),
    id: 'maxRows',
    name: 'maxRows',
    value: field.maxRows,
    size: 3,
    errors: field.getErrors('maxRows')
}) }}

{{ forms.textField({
    label: \"Add Row Label\"|t('app'),
    instructions: \"Insert the button label for adding a new row to the table.\"|t('app'),
    id: 'addRowLabel',
    name: 'addRowLabel',
    value: field.addRowLabel,
    size: 20,
    errors: field.getErrors('addRowLabel')
}) }}

{% if craft.app.db.isMysql %}
    <hr>
    <a class=\"fieldtoggle\" data-target=\"advanced\">{{ \"Advanced\"|t('app') }}</a>
    <div id=\"advanced\" class=\"hidden\">
        {{ forms.selectField({
            label: \"Column Type\"|t('app'),
            id: 'column-type',
            name: 'columnType',
            instructions: \"The type of column this field should get in the database.\"|t('app'),
            options: [
                { value: 'text', label: 'text (~64KB)' },
                { value: 'mediumtext', label: 'mediumtext (~16MB)' },
            ],
            value: field.columnType,
            warning: (field.id ? \"Changing this may result in data loss.\"|t('app')),
        }) }}
    </div>
{% endif %}
", "_components/fieldtypes/Table/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/Table/settings.html");
    }
}
