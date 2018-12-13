<?php

/* _components/fieldtypes/PlainText/settings */
class __TwigTemplate_a8292be2d27c30cc4d1b65bfcb77fda48dde7a40908d0812d648088d126150fc extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/PlainText/settings", 1);
        // line 2
        echo "

";
        // line 4
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Placeholder Text", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The text that will be shown if the field doesn’t have a value.", "app"), "id" => "placeholder", "name" => "placeholder", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 9
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 9, $this->source); })()), "placeholder", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 10, $this->source); })()), "getErrors", array(0 => "placeholder"), "method")));
        // line 11
        echo "

";
        // line 13
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Character Limit", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of characters the field is allowed to have.", "app"), "id" => "char-limit", "name" => "charLimit", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 18
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 18, $this->source); })()), "charLimit", array()), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 20
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 20, $this->source); })()), "getErrors", array(0 => "charLimit"), "method")));
        // line 21
        echo "

";
        // line 23
        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Use a monospaced font", "app"), "name" => "code", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 26
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 26, $this->source); })()), "code", array())));
        // line 27
        echo "

";
        // line 29
        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Allow line breaks", "app"), "name" => "multiline", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 32
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 32, $this->source); })()), "multiline", array()), "toggle" => "initialRowsContainer"));
        // line 34
        echo "


<div id=\"initialRowsContainer\" class=\"nested-fields";
        // line 37
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 37, $this->source); })()), "multiline", array())) {
            echo " hidden";
        }
        echo "\">
    ";
        // line 38
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Initial Rows", "app"), "id" => "initialRows", "name" => "initialRows", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 42
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 42, $this->source); })()), "initialRows", array()), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 44
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 44, $this->source); })()), "getErrors", array(0 => "initialRows"), "method")));
        // line 45
        echo "
</div>

";
        // line 48
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 48, $this->source); })()), "app", array()), "db", array()), "isMysql", array())) {
            // line 49
            echo "    <hr>
    <a class=\"fieldtoggle\" data-target=\"advanced\">";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Advanced", "app"), "html", null, true);
            echo "</a>
    <div id=\"advanced\" class=\"hidden\">
        ";
            // line 52
            echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Column Type", "app"), "id" => "column-type", "name" => "columnType", "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The type of column this field should get in the database.", "app"), "options" => array(0 => array("value" => "string", "label" => "varchar (255B)"), 1 => array("value" => "text", "label" => "text (~64KB)"), 2 => array("value" => "mediumtext", "label" => "mediumtext (~16MB)")), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 62
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 62, $this->source); })()), "columnType", array()), "warning" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 63
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 63, $this->source); })()), "id", array())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : (""))));
            // line 64
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 64,  87 => 63,  86 => 62,  85 => 52,  80 => 50,  77 => 49,  75 => 48,  70 => 45,  68 => 44,  67 => 42,  66 => 38,  60 => 37,  55 => 34,  53 => 32,  52 => 29,  48 => 27,  46 => 26,  45 => 23,  41 => 21,  39 => 20,  38 => 18,  37 => 13,  33 => 11,  31 => 10,  30 => 9,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}


{{ forms.textField({
    label: \"Placeholder Text\"|t('app'),
    instructions: \"The text that will be shown if the field doesn’t have a value.\"|t('app'),
    id: 'placeholder',
    name: 'placeholder',
    value: field.placeholder,
    errors: field.getErrors('placeholder')
}) }}

{{ forms.textField({
    label: \"Character Limit\"|t('app'),
    instructions: \"The maximum number of characters the field is allowed to have.\"|t('app'),
    id: 'char-limit',
    name: 'charLimit',
    value: field.charLimit,
    size: 3,
    errors: field.getErrors('charLimit')
}) }}

{{ forms.checkboxField({
    label: \"Use a monospaced font\"|t('app'),
    name: 'code',
    checked: field.code,
}) }}

{{ forms.checkboxField({
    label: \"Allow line breaks\"|t('app'),
    name: 'multiline',
    checked: field.multiline,
    toggle: 'initialRowsContainer'
}) }}


<div id=\"initialRowsContainer\" class=\"nested-fields{% if not field.multiline %} hidden{% endif %}\">
    {{ forms.textField({
        label: \"Initial Rows\"|t('app'),
        id: 'initialRows',
        name: 'initialRows',
        value: field.initialRows,
        size: 3,
        errors: field.getErrors('initialRows')
    }) }}
</div>

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
                { value: 'string', label: 'varchar (255B)' },
                { value: 'text', label: 'text (~64KB)' },
                { value: 'mediumtext', label: 'mediumtext (~16MB)' },
            ],
            value: field.columnType,
            warning: (field.id ? \"Changing this may result in data loss.\"|t('app')),
        }) }}
    </div>
{% endif %}
", "_components/fieldtypes/PlainText/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/PlainText/settings.html");
    }
}
