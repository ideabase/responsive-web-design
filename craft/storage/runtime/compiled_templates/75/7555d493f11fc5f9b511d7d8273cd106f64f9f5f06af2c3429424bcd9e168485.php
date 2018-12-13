<?php

/* categories/_index */
class __TwigTemplate_ade94b374195626a97a1f0f36d249d74896c8b0d7dc627dfbcc1b88af1adb81e extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "categories/_index", 1);
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
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Categories", "app");
        // line 3
        $context["elementType"] = "craft\\elements\\Category";
        // line 4
        $context["showStatusMenu"] = false;
        // line 7
        if (array_key_exists("groupHandle", $context)) {
            // line 8
            ob_start();
            // line 9
            echo "        window.defaultGroupHandle = '";
            echo twig_escape_filter($this->env, (isset($context["groupHandle"]) || array_key_exists("groupHandle", $context) ? $context["groupHandle"] : (function () { throw new Twig_Error_Runtime('Variable "groupHandle" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "';
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "categories/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 4,  30 => 3,  28 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/elementindex\" %}
{% set title = \"Categories\"|t('app') %}
{% set elementType = 'craft\\\\elements\\\\Category' %}
{% set showStatusMenu = false %}


{% if groupHandle is defined %}
    {% js %}
        window.defaultGroupHandle = '{{ groupHandle }}';
    {% endjs %}
{% endif %}
", "categories/_index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/categories/_index.html");
    }
}
