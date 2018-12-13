<?php

/* _includes/forms/textarea */
class __TwigTemplate_c0d8563b8c632665de5c32c3537f6321ac7573eab7f3c5fede6c97729abede22 extends craft\web\twig\Template
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 3
array_key_exists("class", $context) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 3, $this->source); })()))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 3, $this->source); })())) : (null)), 2 => (((        // line 4
array_key_exists("size", $context) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 4, $this->source); })()))) ? (null) : ("fullwidth")))), " ");
        // line 7
        $context["rows"] = ((array_key_exists("rows", $context)) ? ((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new Twig_Error_Runtime('Variable "rows" does not exist.', 7, $this->source); })())) : (2));
        // line 8
        $context["cols"] = ((array_key_exists("cols", $context)) ? ((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new Twig_Error_Runtime('Variable "cols" does not exist.', 8, $this->source); })())) : (50));
        // line 10
        echo "<textarea class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new Twig_Error_Runtime('Variable "rows" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" cols=\"";
        echo twig_escape_filter($this->env, (isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new Twig_Error_Runtime('Variable "cols" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\"";
        // line 11
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 12
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 13
        if ((array_key_exists("maxlength", $context) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 13, $this->source); })()))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 14
        if ((array_key_exists("showCharsLeft", $context) && (isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new Twig_Error_Runtime('Variable "showCharsLeft" does not exist.', 14, $this->source); })()))) {
            echo " data-show-chars-left";
        }
        // line 15
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 15, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 15, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 16
        if ((array_key_exists("readonly", $context) && (isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new Twig_Error_Runtime('Variable "readonly" does not exist.', 16, $this->source); })()))) {
            echo " readonly ";
        }
        // line 17
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 17, $this->source); })()))) {
            echo " disabled";
        }
        // line 18
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 19
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 19, $this->source); })())) : (null)), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/textarea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  51 => 13,  45 => 12,  39 => 11,  31 => 10,  29 => 8,  27 => 7,  25 => 4,  24 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set class = [
    'text',
    (class is defined and class ? class : null),
    (size is defined and size ? null : 'fullwidth')
]|filter|join(' ') %}

{%- set rows = (rows is defined ? rows : 2) %}
{%- set cols = (cols is defined ? cols : 50) -%}

<textarea class=\"{{ class }}\" rows=\"{{ rows }}\" cols=\"{{ cols }}\"
    {%- if id is defined %} id=\"{{ id }}\"{% endif %}
    {%- if name is defined %} name=\"{{ name }}\"{% endif %}
    {%- if maxlength is defined and maxlength %} maxlength=\"{{ maxlength }}\"{% endif %}
    {%- if showCharsLeft is defined and showCharsLeft %} data-show-chars-left{% endif %}
    {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
    {%- if readonly is defined and readonly %} readonly {% endif %}
    {%- if disabled is defined and disabled %} disabled{% endif %}
    {%- if placeholder is defined %} placeholder=\"{{ placeholder }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>{{ value is defined ? value : null }}</textarea>
", "_includes/forms/textarea", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/textarea.html");
    }
}
