<?php

/* settings/assets/_layout */
class __TwigTemplate_67088d336182861ca567995d87bccf8c82673dbb5253d91564bf84ab0389370a extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/assets/_layout", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Asset Settings", "app");
        // line 4
        $context["crumbs"] = array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")));
        // line 9
        $context["navItems"] = array("volumes" => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Volumes", "app"), "url" => craft\helpers\UrlHelper::url("settings/assets")), "transforms" => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Image Transforms", "app"), "url" => craft\helpers\UrlHelper::url("settings/assets/transforms")));
        // line 14
        $context["docTitle"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["navItems"]) || array_key_exists("navItems", $context) ? $context["navItems"] : (function () { throw new Twig_Error_Runtime('Variable "navItems" does not exist.', 14, $this->source); })()), (isset($context["selectedNavItem"]) || array_key_exists("selectedNavItem", $context) ? $context["selectedNavItem"] : (function () { throw new Twig_Error_Runtime('Variable "selectedNavItem" does not exist.', 14, $this->source); })()), array(), "array"), "label", array()) . " - ") . (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 14, $this->source); })()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
        // line 17
        echo "    <nav>
        ";
        // line 18
        $this->loadTemplate("_includes/nav", "settings/assets/_layout", 18)->display(array("items" => (isset($context["navItems"]) || array_key_exists("navItems", $context) ? $context["navItems"] : (function () { throw new Twig_Error_Runtime('Variable "navItems" does not exist.', 18, $this->source); })()), "selectedItem" => (isset($context["selectedNavItem"]) || array_key_exists("selectedNavItem", $context) ? $context["selectedNavItem"] : (function () { throw new Twig_Error_Runtime('Variable "selectedNavItem" does not exist.', 18, $this->source); })())));
        // line 19
        echo "    </nav>
";
    }

    public function getTemplateName()
    {
        return "settings/assets/_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  47 => 18,  44 => 17,  41 => 16,  37 => 1,  35 => 14,  33 => 9,  31 => 4,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set title = \"Asset Settings\"|t('app') %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}


{% set navItems = {
    volumes: { label: \"Volumes\"|t('app'), url: url('settings/assets') },
    transforms: { label: \"Image Transforms\"|t('app'), url: url('settings/assets/transforms') },
} %}

{% set docTitle = navItems[selectedNavItem].label~' - '~title %}

{% block sidebar %}
    <nav>
        {% include \"_includes/nav\" with { items: navItems, selectedItem: selectedNavItem } only %}
    </nav>
{% endblock %}
", "settings/assets/_layout", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/assets/_layout.html");
    }
}
