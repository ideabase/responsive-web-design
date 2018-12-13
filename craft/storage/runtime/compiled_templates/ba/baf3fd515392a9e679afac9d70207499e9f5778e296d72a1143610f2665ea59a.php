<?php

/* entries */
class __TwigTemplate_d1804dc9ec86709755bdcd0a9ae73b3a1ef8988d98cb4f3968a576ed9e472895 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "entries", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Entries", "app");
        // line 3
        $context["elementType"] = "craft\\elements\\Entry";
        // line 5
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 5, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "New entry")), "method");
        // line 10
        if (array_key_exists("sectionHandle", $context)) {
            // line 11
            ob_start();
            // line 12
            echo "        window.defaultSectionHandle = '";
            echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) || array_key_exists("sectionHandle", $context) ? $context["sectionHandle"] : (function () { throw new Twig_Error_Runtime('Variable "sectionHandle" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "';
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "entries";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,  38 => 12,  36 => 11,  34 => 10,  32 => 5,  30 => 3,  28 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/elementindex\" %}
{% set title = \"Entries\"|t('app') %}
{% set elementType = 'craft\\\\elements\\\\Entry' %}

{% do view.registerTranslations('app', [
    'New entry',
]) %}


{% if sectionHandle is defined %}
    {% js %}
        window.defaultSectionHandle = '{{ sectionHandle }}';
    {% endjs %}
{% endif %}
", "entries", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/entries/index.html");
    }
}
