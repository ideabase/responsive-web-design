<?php

/* _components/widgets/Feed/settings */
class __TwigTemplate_d8eda9f5ad2540f4625d17793f7cc7158eb04e3f5e0093320707cd97dae2dc8e extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/Feed/settings", 1);
        // line 2
        echo "

";
        // line 4
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("URL", "app"), "id" => "url", "name" => "url", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 8
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 8, $this->source); })()), "url", array()), "required" => true, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 10, $this->source); })()), "getErrors", array(0 => "url"), "method")));
        // line 11
        echo "


";
        // line 14
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title", "app"), "id" => "title", "name" => "title", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 18
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 18, $this->source); })()), "title", array()), "required" => true, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 20
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 20, $this->source); })()), "getErrors", array(0 => "title"), "method")));
        // line 21
        echo "


";
        // line 24
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit", "app"), "id" => "limit", "name" => "limit", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 28
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 28, $this->source); })()), "limit", array()), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 30
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 30, $this->source); })()), "getErrors", array(0 => "limit"), "method")));
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  49 => 30,  48 => 28,  47 => 24,  42 => 21,  40 => 20,  39 => 18,  38 => 14,  33 => 11,  31 => 10,  30 => 8,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}


{{ forms.textField({
    label: \"URL\"|t('app'),
    id: 'url',
    name: 'url',
    value: widget.url,
    required: true,
    errors: widget.getErrors('url')
}) }}


{{ forms.textField({
    label: \"Title\"|t('app'),
    id: 'title',
    name: 'title',
    value: widget.title,
    required: true,
    errors: widget.getErrors('title')
}) }}


{{ forms.textField({
    label: \"Limit\"|t('app'),
    id: 'limit',
    name: 'limit',
    value: widget.limit,
    size: 2,
    errors: widget.getErrors('limit')
}) }}
", "_components/widgets/Feed/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/widgets/Feed/settings.html");
    }
}
