<?php

/* _includes/field */
class __TwigTemplate_a32615543bb8b8335972764d8bcef3bf07c89b724dde3b19e4669787918de154 extends craft\web\twig\Template
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
        $context["static"] = ((array_key_exists("static", $context)) ? ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 1, $this->source); })())) : (false));
        // line 2
        $context["element"] = ((array_key_exists("element", $context)) ? ((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 2, $this->source); })())) : (null));
        // line 3
        echo "
";
        // line 4
        $context["value"] = (((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 4, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 4, $this->source); })()), "getFieldValue", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 4, $this->source); })()), "handle", array())), "method")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 4, $this->source); })()), "normalizeValue", array(0 => null), "method")));
        // line 5
        $context["errors"] = ((((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 5, $this->source); })()) &&  !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 5, $this->source); })()))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 5, $this->source); })()), "getErrors", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 5, $this->source); })()), "handle", array())), "method")) : (null));
        // line 6
        $context["instructions"] = ((( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 6, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 6, $this->source); })()), "instructions", array()))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 6, $this->source); })()), "instructions", array()), "site")) : (null));
        // line 7
        $context["translatable"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 7, $this->source); })()), "getIsTranslatable", array(0 => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 7, $this->source); })())), "method");
        // line 8
        $context["siteId"] = ((((isset($context["translatable"]) || array_key_exists("translatable", $context) ? $context["translatable"] : (function () { throw new Twig_Error_Runtime('Variable "translatable" does not exist.', 8, $this->source); })()) && (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["element"] ?? null), "isLocalized", array(), "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["element"] ?? null), "isLocalized", array(), "method")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["element"] ?? null), "isLocalized", array(), "method")) : (true)))) ? ((($context["siteId"]) ?? ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["element"] ?? null), "siteId", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["element"] ?? null), "siteId", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["element"] ?? null), "siteId", array())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 8, $this->source); })()), "app", array()), "sites", array()), "currentSite", array()), "id", array())))))) : (""));
        // line 9
        echo "
";
        // line 10
        if ((isset($context["translatable"]) || array_key_exists("translatable", $context) ? $context["translatable"] : (function () { throw new Twig_Error_Runtime('Variable "translatable" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    ";
            switch (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 11, $this->source); })()), "translationMethod", array())) {
                case "site":
                {
                    // line 13
                    echo "        ";
                    $context["translationDescription"] = $this->extensions['craft\web\twig\Extension']->translateFilter("This field is translated for each site.", "app");
                    // line 14
                    echo "    ";
                    break;
                }
                case "siteGroup":
                {
                    // line 15
                    echo "        ";
                    $context["translationDescription"] = $this->extensions['craft\web\twig\Extension']->translateFilter("This field is translated for each site group.", "app");
                    // line 16
                    echo "    ";
                    break;
                }
                case "language":
                {
                    // line 17
                    echo "        ";
                    $context["translationDescription"] = $this->extensions['craft\web\twig\Extension']->translateFilter("This field is translated for each language.", "app");
                    // line 18
                    echo "    ";
                    break;
                }
            }
        }
        // line 20
        echo "
";
        // line 21
        if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "    ";
            $context["input"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 22, $this->source); })()), "getInputHtml", array(0 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->source); })()), 1 => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 22, $this->source); })())), "method");
        } else {
            // line 24
            echo "    ";
            $context["input"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 24, $this->source); })()), "getStaticHtml", array(0 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 24, $this->source); })()), 1 => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 24, $this->source); })())), "method");
        }
        // line 26
        echo "
";
        // line 27
        if (((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 27, $this->source); })()) || (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "    ";
            $this->loadTemplate("_includes/field", "_includes/field", 28, "721163418")->display(array("label" => twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 29
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 29, $this->source); })()), "name", array()), "site")), "translatable" =>             // line 30
(isset($context["translatable"]) || array_key_exists("translatable", $context) ? $context["translatable"] : (function () { throw new Twig_Error_Runtime('Variable "translatable" does not exist.', 30, $this->source); })()), "translationDescription" => ((            // line 31
$context["translationDescription"]) ?? (null)), "siteId" =>             // line 32
(isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new Twig_Error_Runtime('Variable "siteId" does not exist.', 32, $this->source); })()), "required" => (( !            // line 33
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 33, $this->source); })())) ? ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 33, $this->source); })())) : (false)), "instructions" => twig_escape_filter($this->env,             // line 34
(isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 34, $this->source); })())), "id" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 35
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 35, $this->source); })()), "handle", array()), "errors" =>             // line 36
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 36, $this->source); })()), "input" =>             // line 37
(isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 37, $this->source); })()), "fieldType" => get_class(            // line 38
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 38, $this->source); })()))));
        }
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  105 => 37,  104 => 36,  103 => 35,  102 => 34,  101 => 33,  100 => 32,  99 => 31,  98 => 30,  97 => 29,  95 => 28,  93 => 27,  90 => 26,  86 => 24,  82 => 22,  80 => 21,  77 => 20,  71 => 18,  68 => 17,  62 => 16,  59 => 15,  53 => 14,  50 => 13,  45 => 11,  43 => 10,  40 => 9,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set static = static is defined ? static : false %}
{% set element = element is defined ? element : null %}

{% set value = (element ? element.getFieldValue(field.handle) : field.normalizeValue(null)) %}
{% set errors = (element and not static ? element.getErrors(field.handle) : null) %}
{% set instructions = (not static and field.instructions ? field.instructions|t('site') : null) %}
{% set translatable = field.getIsTranslatable(element) %}
{% set siteId = (translatable and (element.isLocalized() ?? true)) ? (siteId ?? element.siteId ?? craft.app.sites.currentSite.id) %}

{% if translatable %}
    {% switch field.translationMethod %}
    {% case 'site' %}
        {% set translationDescription = 'This field is translated for each site.'|t('app') %}
    {% case 'siteGroup' %}
        {% set translationDescription = 'This field is translated for each site group.'|t('app') %}
    {% case 'language' %}
        {% set translationDescription = 'This field is translated for each language.'|t('app') %}
    {% endswitch %}
{% endif %}

{% if not static %}
    {% set input = field.getInputHtml(value, element) %}
{% else %}
    {% set input = field.getStaticHtml(value, element) %}
{% endif %}

{% if instructions or input %}
    {% embed \"_includes/forms/field\" with {
        label: field.name|t('site')|e,
        translatable: translatable,
        translationDescription: translationDescription ?? null,
        siteId: siteId,
        required: (not static ? required : false),
        instructions: instructions|e,
        id: field.handle,
        errors: errors,
        input: input,
        fieldType: className(field)
    } only %}
        {% block attr %}data-type=\"{{ fieldType }}\"{% endblock %}
    {% endembed %}
{% endif %}
", "_includes/field", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/field.html");
    }
}


/* _includes/field */
class __TwigTemplate_a32615543bb8b8335972764d8bcef3bf07c89b724dde3b19e4669787918de154_721163418 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 28
        $this->parent = $this->loadTemplate("_includes/forms/field", "_includes/field", 28);
        $this->blocks = array(
            'attr' => array($this, 'block_attr'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_includes/forms/field";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_attr($context, array $blocks = array())
    {
        echo "data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["fieldType"]) || array_key_exists("fieldType", $context) ? $context["fieldType"] : (function () { throw new Twig_Error_Runtime('Variable "fieldType" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\"";
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 40,  186 => 28,  106 => 38,  105 => 37,  104 => 36,  103 => 35,  102 => 34,  101 => 33,  100 => 32,  99 => 31,  98 => 30,  97 => 29,  95 => 28,  93 => 27,  90 => 26,  86 => 24,  82 => 22,  80 => 21,  77 => 20,  71 => 18,  68 => 17,  62 => 16,  59 => 15,  53 => 14,  50 => 13,  45 => 11,  43 => 10,  40 => 9,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set static = static is defined ? static : false %}
{% set element = element is defined ? element : null %}

{% set value = (element ? element.getFieldValue(field.handle) : field.normalizeValue(null)) %}
{% set errors = (element and not static ? element.getErrors(field.handle) : null) %}
{% set instructions = (not static and field.instructions ? field.instructions|t('site') : null) %}
{% set translatable = field.getIsTranslatable(element) %}
{% set siteId = (translatable and (element.isLocalized() ?? true)) ? (siteId ?? element.siteId ?? craft.app.sites.currentSite.id) %}

{% if translatable %}
    {% switch field.translationMethod %}
    {% case 'site' %}
        {% set translationDescription = 'This field is translated for each site.'|t('app') %}
    {% case 'siteGroup' %}
        {% set translationDescription = 'This field is translated for each site group.'|t('app') %}
    {% case 'language' %}
        {% set translationDescription = 'This field is translated for each language.'|t('app') %}
    {% endswitch %}
{% endif %}

{% if not static %}
    {% set input = field.getInputHtml(value, element) %}
{% else %}
    {% set input = field.getStaticHtml(value, element) %}
{% endif %}

{% if instructions or input %}
    {% embed \"_includes/forms/field\" with {
        label: field.name|t('site')|e,
        translatable: translatable,
        translationDescription: translationDescription ?? null,
        siteId: siteId,
        required: (not static ? required : false),
        instructions: instructions|e,
        id: field.handle,
        errors: errors,
        input: input,
        fieldType: className(field)
    } only %}
        {% block attr %}data-type=\"{{ fieldType }}\"{% endblock %}
    {% endembed %}
{% endif %}
", "_includes/field", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/field.html");
    }
}
