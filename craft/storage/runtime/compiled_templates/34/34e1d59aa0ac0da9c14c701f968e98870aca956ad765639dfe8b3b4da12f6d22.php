<?php

/* _components/fieldtypes/PlainText/input */
class __TwigTemplate_6b990ce492639b4652468ecfff66132c933ac27c3ae6fc4e88885c7506a68554 extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/PlainText/input", 1);
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "nicetext", 1 => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 5, $this->source); })()), "code", array())) ? ("code") : (null)))), " ");
        // line 7
        echo "
";
        // line 8
        $context["config"] = array("id" =>         // line 9
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 9, $this->source); })()), "name" =>         // line 10
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 10, $this->source); })()), "value" =>         // line 11
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 11, $this->source); })()), "class" =>         // line 12
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 12, $this->source); })()), "maxlength" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 13
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 13, $this->source); })()), "charLimit", array()), "showCharsLeft" => true, "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 15
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 15, $this->source); })()), "placeholder", array()), "site"), "rows" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 16
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 16, $this->source); })()), "initialRows", array()));
        // line 18
        echo "
";
        // line 19
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 19, $this->source); })()), "multiline", array())) {
            // line 20
            echo "    ";
            echo $context["forms"]->macro_textarea((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 20, $this->source); })()));
            echo "
";
        } else {
            // line 22
            echo "    ";
            echo $context["forms"]->macro_text((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 22, $this->source); })()));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  45 => 20,  43 => 19,  40 => 18,  38 => 16,  37 => 15,  36 => 13,  35 => 12,  34 => 11,  33 => 10,  32 => 9,  31 => 8,  28 => 7,  26 => 5,  25 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{%- set class = [
    'nicetext',
    (field.code ? 'code' : null)
]|filter|join(' ') %}

{% set config = {
    id: name,
    name: name,
    value: value,
    class: class,
    maxlength: field.charLimit,
    showCharsLeft: true,
    placeholder: field.placeholder|t('site'),
    rows: field.initialRows
} %}

{% if field.multiline %}
    {{ forms.textarea(config) }}
{% else %}
    {{ forms.text(config) }}
{% endif %}
", "_components/fieldtypes/PlainText/input", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/PlainText/input.html");
    }
}
