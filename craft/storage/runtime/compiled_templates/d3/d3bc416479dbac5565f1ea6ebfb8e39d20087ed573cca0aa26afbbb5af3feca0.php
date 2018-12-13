<?php

/* _components/fieldtypes/Date/settings */
class __TwigTemplate_a3465d9fa6a27e1a9d32b76129069e9f6e4b037c9b0ce44a5a86c124561a1f9f extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Date/settings", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["forms"]->macro_radioGroupField(array("id" => "dateTime", "name" => "dateTime", "options" =>         // line 6
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 6, $this->source); })()), "value" =>         // line 7
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 7, $this->source); })())));
        // line 8
        echo "

";
        // line 10
        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Minute Increment", "app"), "id" => "minuteIncrement", "name" => "minuteIncrement", "options" =>         // line 14
(isset($context["incrementOptions"]) || array_key_exists("incrementOptions", $context) ? $context["incrementOptions"] : (function () { throw new Twig_Error_Runtime('Variable "incrementOptions" does not exist.', 14, $this->source); })()), "value" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 15
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 15, $this->source); })()), "minuteIncrement", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 15, $this->source); })()), "minuteIncrement", array())) : (30))));
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Date/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  38 => 15,  37 => 14,  36 => 10,  32 => 8,  30 => 7,  29 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{{ forms.radioGroupField({
    id: 'dateTime',
    name: 'dateTime',
    options: options,
    value: value
}) }}

{{ forms.selectField({
    label: \"Minute Increment\"|t('app'),
    id: 'minuteIncrement',
    name: 'minuteIncrement',
    options: incrementOptions,
    value: field.minuteIncrement ? field.minuteIncrement : 30,
}) }}
", "_components/fieldtypes/Date/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/Date/settings.html");
    }
}
