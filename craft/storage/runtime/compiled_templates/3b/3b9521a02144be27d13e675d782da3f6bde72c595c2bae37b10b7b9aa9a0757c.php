<?php

/* _layouts/elementindex */
class __TwigTemplate_bf7049b553b1eac7757e9ac38b3cb1eab429d0b0d0cf3bb003c374b29e10b024 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "_layouts/elementindex", 1);
        $this->blocks = array(
            'contextMenu' => array($this, 'block_contextMenu'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'initJs' => array($this, 'block_initJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["elementInstance"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 3, $this->source); })()), "app", array()), "elements", array()), "createElement", array(0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 3, $this->source); })())), "method");
        // line 4
        $context["context"] = "index";
        // line 6
        if ( !(isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new Twig_Error_Runtime('Variable "elementInstance" does not exist.', 6, $this->source); })())) {
            // line 7
            throw new yii\web\HttpException(404);
        }
        // line 10
        $context["sources"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 10, $this->source); })()), "app", array()), "elementIndexes", array()), "getSources", array(0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 10, $this->source); })()), 1 => "index"), "method");
        // line 11
        $context["customizableSources"] = (( !twig_test_empty((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 11, $this->source); })())) && ((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new Twig_Error_Runtime('Variable "context" does not exist.', 11, $this->source); })()) == "index")) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 11, $this->source); })()), "admin", array()));
        // line 13
        $context["showSiteMenu"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 13, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) ? ((($context["showSiteMenu"]) ?? ("auto"))) : (false));
        // line 14
        if (((isset($context["showSiteMenu"]) || array_key_exists("showSiteMenu", $context) ? $context["showSiteMenu"] : (function () { throw new Twig_Error_Runtime('Variable "showSiteMenu" does not exist.', 14, $this->source); })()) == "auto")) {
            // line 15
            $context["showSiteMenu"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new Twig_Error_Runtime('Variable "elementInstance" does not exist.', 15, $this->source); })()), "isLocalized", array(), "method");
        }
        // line 57
        Craft::$app->getView()->registerJs(        $this->renderBlock("initJs", $context, $blocks), 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_contextMenu($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ((isset($context["showSiteMenu"]) || array_key_exists("showSiteMenu", $context) ? $context["showSiteMenu"] : (function () { throw new Twig_Error_Runtime('Variable "showSiteMenu" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        ";
            $this->loadTemplate("_elements/sitemenu", "_layouts/elementindex", 21)->display($context);
            // line 22
            echo "    ";
        }
    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ( !twig_test_empty((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "        <nav>
            ";
            // line 29
            $this->loadTemplate("_elements/sources", "_layouts/elementindex", 29)->display($context);
            // line 30
            echo "        </nav>

        ";
            // line 32
            if ((isset($context["customizableSources"]) || array_key_exists("customizableSources", $context) ? $context["customizableSources"] : (function () { throw new Twig_Error_Runtime('Variable "customizableSources" does not exist.', 32, $this->source); })())) {
                // line 33
                echo "            <div class=\"heading\"><span></span></div>
            <a class=\"customize-sources settings icon\" title=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Customize sources"), "html", null, true);
                echo "\"></a>
        ";
            }
            // line 36
            echo "    ";
        }
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"elementindex\">
        ";
        // line 42
        $this->loadTemplate("_elements/indexcontainer", "_layouts/elementindex", 42)->display(array_merge($context, array("showSiteMenu" => false)));
        // line 45
        echo "    </div>
";
    }

    // line 49
    public function block_initJs($context, array $blocks = array())
    {
        // line 50
        echo "    Craft.elementIndex = Craft.createElementIndex('";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 50, $this->source); })()), "js"), "html", null, true);
        echo "', \$('#main'), {
        context:        '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new Twig_Error_Runtime('Variable "context" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "',
        storageKey:     'elementindex.";
        // line 52
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 52, $this->source); })()), "js"), "html", null, true);
        echo "',
        criteria:       Craft.defaultIndexCriteria
    });
";
    }

    public function getTemplateName()
    {
        return "_layouts/elementindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  123 => 51,  118 => 50,  115 => 49,  110 => 45,  108 => 42,  105 => 41,  102 => 40,  97 => 36,  92 => 34,  89 => 33,  87 => 32,  83 => 30,  81 => 29,  78 => 28,  75 => 27,  72 => 26,  67 => 22,  64 => 21,  61 => 20,  58 => 19,  54 => 1,  52 => 57,  49 => 15,  47 => 14,  45 => 13,  43 => 11,  41 => 10,  38 => 7,  36 => 6,  34 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}

{% set elementInstance = craft.app.elements.createElement(elementType) %}
{% set context = 'index' %}

{% if not elementInstance %}
    {% exit 404 %}
{% endif %}

{% set sources = craft.app.elementIndexes.getSources(elementType, 'index') %}
{% set customizableSources = (sources is not empty and context == 'index' and currentUser.admin) %}

{% set showSiteMenu = (craft.app.getIsMultiSite() ? (showSiteMenu ?? 'auto') : false) %}
{% if showSiteMenu == 'auto' %}
    {% set showSiteMenu = elementInstance.isLocalized() %}
{% endif %}


{% block contextMenu %}
    {% if showSiteMenu %}
        {% include \"_elements/sitemenu\" %}
    {% endif %}
{% endblock %}


{% block sidebar %}
    {% if sources is not empty %}
        <nav>
            {% include \"_elements/sources\" %}
        </nav>

        {% if customizableSources %}
            <div class=\"heading\"><span></span></div>
            <a class=\"customize-sources settings icon\" title=\"{{ 'Customize sources'|t }}\"></a>
        {% endif %}
    {% endif %}
{% endblock %}


{% block content %}
    <div class=\"elementindex\">
        {% include \"_elements/indexcontainer\" with {
            showSiteMenu: false
        } %}
    </div>
{% endblock %}


{% block initJs %}
    Craft.elementIndex = Craft.createElementIndex('{{ elementType|e(\"js\") }}', \$('#main'), {
        context:        '{{ context }}',
        storageKey:     'elementindex.{{ elementType|e(\"js\") }}',
        criteria:       Craft.defaultIndexCriteria
    });
{% endblock %}

{% js block('initJs') %}
", "_layouts/elementindex", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_layouts/elementindex.html");
    }
}
