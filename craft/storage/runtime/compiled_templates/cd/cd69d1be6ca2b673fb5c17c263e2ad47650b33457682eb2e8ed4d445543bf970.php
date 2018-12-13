<?php

/* _components/fieldtypes/Number/settings */
class __TwigTemplate_e192ac5024f8b7867961a739c26fa8cb8e0c1533f3fe8025cd4da814f74f260f extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Number/settings", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Min Value", "app"), "id" => "min", "name" => "min", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 7
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 7, $this->source); })()), "min", array()), "size" => 5, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 9
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 9, $this->source); })()), "getErrors", array(0 => "min"), "method")));
        // line 10
        echo "

";
        // line 12
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Value", "app"), "id" => "max", "name" => "max", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 16
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 16, $this->source); })()), "max", array()), "size" => 5, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 18
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 18, $this->source); })()), "getErrors", array(0 => "max"), "method")));
        // line 19
        echo "

";
        // line 21
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Decimal Points", "app"), "id" => "decimals", "name" => "decimals", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 25
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 25, $this->source); })()), "decimals", array()), "size" => 1, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 27
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 27, $this->source); })()), "getErrors", array(0 => "decimals"), "method")));
        // line 28
        echo "

";
        // line 30
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Size", "app"), "id" => "size", "name" => "size", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 34
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 34, $this->source); })()), "size", array()), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 36
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 36, $this->source); })()), "getErrors", array(0 => "size"), "method")));
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Number/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 37,  54 => 36,  53 => 34,  52 => 30,  48 => 28,  46 => 27,  45 => 25,  44 => 21,  40 => 19,  38 => 18,  37 => 16,  36 => 12,  32 => 10,  30 => 9,  29 => 7,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{{ forms.textField({
    label: \"Min Value\"|t('app'),
    id: 'min',
    name: 'min',
    value: field.min,
    size: 5,
    errors: field.getErrors('min')
}) }}

{{ forms.textField({
    label: \"Max Value\"|t('app'),
    id: 'max',
    name: 'max',
    value: field.max,
    size: 5,
    errors: field.getErrors('max')
}) }}

{{ forms.textField({
    label: \"Decimal Points\"|t('app'),
    id: 'decimals',
    name: 'decimals',
    value: field.decimals,
    size: 1,
    errors: field.getErrors('decimals')
}) }}

{{ forms.textField({
    label: \"Size\"|t('app'),
    id: 'size',
    name: 'size',
    value: field.size,
    size: 2,
    errors: field.getErrors('size')
}) }}
", "_components/fieldtypes/Number/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/Number/settings.html");
    }
}
