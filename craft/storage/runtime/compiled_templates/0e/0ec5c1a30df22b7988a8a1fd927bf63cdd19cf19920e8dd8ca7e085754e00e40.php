<?php

/* entries/_titlefield */
class __TwigTemplate_ec63ecb3f4e1c54fb7895925ada888b0520e81b519540a53da5dd80a10f30d61 extends craft\web\twig\Template
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
        $context["__internal_e0a7ebde9856e93dfb8a29c9a94d26797999c587c2decbbac8d627ae3a3f39a0"] = $this->loadTemplate("_includes/forms", "entries/_titlefield", 1);
        // line 2
        $context["static"] = ((array_key_exists("static", $context)) ? ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 2, $this->source); })())) : (false));
        // line 3
        $context["entryType"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 3, $this->source); })()), "getType", array(), "method");
        // line 4
        echo "
";
        // line 5
        echo $context["__internal_e0a7ebde9856e93dfb8a29c9a94d26797999c587c2decbbac8d627ae3a3f39a0"]->macro_textField(array("label" => ((twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 6, $this->source); })()), "titleLabel", array()), "site"))) ? (twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 6, $this->source); })()), "titleLabel", array()), "site"))) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Title", "app"))), "siteId" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 7
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 7, $this->source); })()), "hasTitleField", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 7, $this->source); })()), "siteId", array())) : ("")), "id" => "title", "name" => "title", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 10, $this->source); })()), "title", array()), "errors" => (( !        // line 11
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 11, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 11, $this->source); })()), "getErrors", array(0 => "title"), "method")) : ("")), "first" => true, "autofocus" => true, "required" => ( !        // line 14
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 14, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 14, $this->source); })()), "hasTitleField", array())), "disabled" => (        // line 15
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 15, $this->source); })()) ||  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 15, $this->source); })()), "hasTitleField", array())), "maxlength" => 255));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries/_titlefield";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  38 => 15,  37 => 14,  36 => 11,  35 => 10,  34 => 7,  33 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from \"_includes/forms\" import textField %}
{% set static = static is defined ? static : false %}
{% set entryType = entry.getType() %}

{{ textField({
    label: entryType.titleLabel|t('site')|e ?: 'Title'|t('app'),
    siteId: entryType.hasTitleField ? entry.siteId,
    id: 'title',
    name: 'title',
    value: entry.title,
    errors: (not static ? entry.getErrors('title')),
    first: true,
    autofocus: true,
    required: not static and entryType.hasTitleField,
    disabled: static or not entryType.hasTitleField,
    maxlength: 255
}) }}
", "entries/_titlefield", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/entries/_titlefield.html");
    }
}
