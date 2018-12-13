<?php

/* _includes/forms/field */
class __TwigTemplate_3c1c76435d51943dbc26380ebb58080b654234cf554e0d1a212fe7bced3dc8f2 extends craft\web\twig\Template
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
        $context["labelId"] = ((array_key_exists("labelId", $context)) ? ((isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new Twig_Error_Runtime('Variable "labelId" does not exist.', 1, $this->source); })())) : (((array_key_exists("id", $context)) ? (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 1, $this->source); })()) . "-label")) : (null))));
        // line 2
        $context["fieldId"] = ((array_key_exists("fieldId", $context)) ? ((isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 2, $this->source); })())) : (((array_key_exists("id", $context)) ? (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 2, $this->source); })()) . "-field")) : (null))));
        // line 3
        $context["label"] = (((array_key_exists("label", $context) && ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 3, $this->source); })()) != "__blank__"))) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 3, $this->source); })())) : (null));
        // line 4
        $context["siteId"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 4, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method") && array_key_exists("siteId", $context))) ? ((isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new Twig_Error_Runtime('Variable "siteId" does not exist.', 4, $this->source); })())) : (null));
        // line 5
        $context["site"] = (((isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new Twig_Error_Runtime('Variable "siteId" does not exist.', 5, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 5, $this->source); })()), "app", array()), "sites", array()), "getSiteById", array(0 => (isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new Twig_Error_Runtime('Variable "siteId" does not exist.', 5, $this->source); })())), "method")) : (null));
        // line 6
        $context["instructions"] = ((array_key_exists("instructions", $context)) ? ((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 6, $this->source); })())) : (null));
        // line 7
        $context["warning"] = ((array_key_exists("warning", $context)) ? ((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new Twig_Error_Runtime('Variable "warning" does not exist.', 7, $this->source); })())) : (null));
        // line 8
        $context["orientation"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new Twig_Error_Runtime('Variable "site" does not exist.', 8, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 8, $this->source); })()), "app", array()), "i18n", array()), "getLocaleById", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new Twig_Error_Runtime('Variable "site" does not exist.', 8, $this->source); })()), "language", array())), "method")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 8, $this->source); })()), "app", array()), "locale", array()))), "getOrientation", array(), "method");
        // line 9
        $context["translatable"] = (($context["translatable"]) ?? ( !((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new Twig_Error_Runtime('Variable "site" does not exist.', 9, $this->source); })()) === null)));
        // line 10
        $context["errors"] = ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 10, $this->source); })())) : (null));
        // line 11
        $context["fieldClass"] = twig_join_filter(array_filter(array(0 => "field", 1 => (((        // line 13
array_key_exists("first", $context) && (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 13, $this->source); })()))) ? ("first") : (null)), 2 => ((        // line 14
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 14, $this->source); })())) ? ("has-errors") : (null)), 3 => (((        // line 15
array_key_exists("fieldClass", $context) && (isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new Twig_Error_Runtime('Variable "fieldClass" does not exist.', 15, $this->source); })()))) ? ((isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new Twig_Error_Runtime('Variable "fieldClass" does not exist.', 15, $this->source); })())) : (null)))), " ");
        // line 17
        echo "
<div class=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new Twig_Error_Runtime('Variable "fieldClass" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\"";
        // line 19
        if ((isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 19, $this->source); })())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 20
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    ";
        // line 21
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 21, $this->source); })()) || (isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "        <div class=\"heading\">
            ";
            // line 23
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 23, $this->source); })())) {
                // line 24
                echo "                <label ";
                if ((isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new Twig_Error_Runtime('Variable "labelId" does not exist.', 24, $this->source); })())) {
                    echo " id=\"";
                    echo twig_escape_filter($this->env, (isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new Twig_Error_Runtime('Variable "labelId" does not exist.', 24, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                if ((array_key_exists("required", $context) && (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 24, $this->source); })()))) {
                    echo " class=\"required\"";
                }
                if ((array_key_exists("id", $context) && (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 24, $this->source); })()))) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 24, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 25
                echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 25, $this->source); })());
                // line 26
                if ((isset($context["translatable"]) || array_key_exists("translatable", $context) ? $context["translatable"] : (function () { throw new Twig_Error_Runtime('Variable "translatable" does not exist.', 26, $this->source); })())) {
                    echo " <span class=\"extralight\" data-icon=\"language\" title=\"";
                    echo twig_escape_filter($this->env, (($context["translationDescription"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("This field is translatable.", "app"))), "html", null, true);
                    echo "\"></span>";
                }
                // line 27
                echo "</label>
            ";
            }
            // line 29
            echo "            ";
            if ((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "                <div class=\"instructions\">";
                echo $this->extensions['craft\web\twig\Extension']->replaceFilter($this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 30, $this->source); })())), "/&amp;(\\w+);/", "&\$1;");
                echo "</div>
            ";
            }
            // line 32
            echo "        </div>
    ";
        }
        // line 34
        echo "    <div class=\"input ";
        echo twig_escape_filter($this->env, (isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new Twig_Error_Runtime('Variable "orientation" does not exist.', 34, $this->source); })()), "html", null, true);
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->source); })())) {
            echo " errors";
        }
        echo "\">
        ";
        // line 35
        echo (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 35, $this->source); })());
        echo "
    </div>
    ";
        // line 37
        if ((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new Twig_Error_Runtime('Variable "warning" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "        <p class=\"warning\">";
            echo $this->extensions['craft\web\twig\Extension']->replaceFilter($this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new Twig_Error_Runtime('Variable "warning" does not exist.', 38, $this->source); })()), null, true), "/&amp;(\\w+);/", "&\$1;");
            echo "</p>
    ";
        }
        // line 40
        echo "    ";
        $this->loadTemplate("_includes/forms/errorList", "_includes/forms/field", 40)->display(array_merge($context, array("errors" => (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 40, $this->source); })()))));
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  136 => 40,  130 => 38,  128 => 37,  123 => 35,  115 => 34,  111 => 32,  105 => 30,  102 => 29,  98 => 27,  92 => 26,  90 => 25,  74 => 24,  72 => 23,  69 => 22,  67 => 21,  60 => 20,  54 => 19,  51 => 18,  48 => 17,  46 => 15,  45 => 14,  44 => 13,  43 => 11,  41 => 10,  39 => 9,  37 => 8,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set labelId = (labelId is defined ? labelId : (id is defined ? id~'-label' : null)) %}
{%- set fieldId = (fieldId is defined ? fieldId : (id is defined ? id~'-field' : null)) %}
{%- set label = (label is defined and label != '__blank__' ? label : null) %}
{%- set siteId = ((craft.app.getIsMultiSite() and siteId is defined) ? siteId : null) %}
{%- set site = (siteId ? craft.app.sites.getSiteById(siteId) : null) %}
{%- set instructions = (instructions is defined ? instructions : null) %}
{%- set warning = (warning is defined ? warning : null) %}
{%- set orientation = (site ? craft.app.i18n.getLocaleById(site.language) : craft.app.locale).getOrientation() %}
{%- set translatable = translatable ?? (site is not same as(null)) %}
{%- set errors = (errors is defined ? errors : null) -%}
{%- set fieldClass = [
    'field',
    (first is defined and first ? 'first' : null),
    (errors ? 'has-errors' : null),
    (fieldClass is defined and fieldClass ? fieldClass : null)
]|filter|join(' ') %}

<div class=\"{{ fieldClass }}\"
        {%- if fieldId %} id=\"{{ fieldId }}\"{% endif %}
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    {% if label or instructions %}
        <div class=\"heading\">
            {% if label %}
                <label {% if labelId %} id=\"{{ labelId }}\"{% endif %}{% if required is defined and required %} class=\"required\"{% endif %}{% if id is defined and id %} for=\"{{ id }}\"{% endif %}>
                    {{- label|raw -}}
                    {%- if translatable %} <span class=\"extralight\" data-icon=\"language\" title=\"{{ translationDescription ?? 'This field is translatable.'|t('app') }}\"></span>{% endif -%}
                </label>
            {% endif %}
            {% if instructions %}
                <div class=\"instructions\">{{ instructions|md|replace('/&amp;(\\\\w+);/', '&\$1;')|raw }}</div>
            {% endif %}
        </div>
    {% endif %}
    <div class=\"input {{ orientation }}{% if errors %} errors{% endif %}\">
        {{ input|raw }}
    </div>
    {% if warning %}
        <p class=\"warning\">{{ warning|md(inlineOnly=true)|replace('/&amp;(\\\\w+);/', '&\$1;')|raw }}</p>
    {% endif %}
    {% include \"_includes/forms/errorList\" with { errors: errors } %}
</div>
", "_includes/forms/field", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/field.html");
    }
}
