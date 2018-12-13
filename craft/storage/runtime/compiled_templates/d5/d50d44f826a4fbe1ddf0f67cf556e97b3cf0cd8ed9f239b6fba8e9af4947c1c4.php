<?php

/* _includes/forms/text */
class __TwigTemplate_1099d89d90f9cadf0e55e629c84e2a7bc7a0ae59952bbf7b66ded70bb332800d extends craft\web\twig\Template
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
        $context["type"] = ((array_key_exists("type", $context)) ? ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 1, $this->source); })())) : ("text"));
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 5
array_key_exists("class", $context) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 5, $this->source); })()))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 5, $this->source); })())) : (null)), 2 => (((        // line 6
array_key_exists("type", $context) && ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->source); })()) == "password"))) ? ("password") : (null)), 3 => (((        // line 7
array_key_exists("disabled", $context) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 7, $this->source); })()))) ? ("disabled") : (null)), 4 => (((        // line 8
array_key_exists("size", $context) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 8, $this->source); })()))) ? (null) : ("fullwidth")))), " ");
        // line 11
        if ((((array_key_exists("showCharsLeft", $context) && (isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new Twig_Error_Runtime('Variable "showCharsLeft" does not exist.', 11, $this->source); })())) && array_key_exists("maxlength", $context)) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 11, $this->source); })()))) {
            // line 12
            $context["style"] = (((("padding-" . (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 12, $this->source); })()), "app", array()), "locale", array()), "getOrientation", array(), "method") == "ltr")) ? ("right") : ("left"))) . ": ") . ((7.2 * twig_length_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 12, $this->source); })()))) + 14)) . "px;");
        }
        // line 15
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 15, $this->source); })()) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 16
        echo "<input class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\"";
        // line 17
        if (array_key_exists("style", $context)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 18
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 19
        if (array_key_exists("size", $context)) {
            echo " size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 20
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 21
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 22
        if ((array_key_exists("maxlength", $context) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 22, $this->source); })()))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new Twig_Error_Runtime('Variable "maxlength" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 23
        if ((array_key_exists("showCharsLeft", $context) && (isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new Twig_Error_Runtime('Variable "showCharsLeft" does not exist.', 23, $this->source); })()))) {
            echo " data-show-chars-left";
        }
        // line 24
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 24, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 24, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 25
        if (( !array_key_exists("autocomplete", $context) ||  !(isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 25, $this->source); })()))) {
            echo " autocomplete=\"off\"";
        }
        // line 26
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 26, $this->source); })()))) {
            echo " disabled ";
        }
        // line 27
        if ((array_key_exists("readonly", $context) && (isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new Twig_Error_Runtime('Variable "readonly" does not exist.', 27, $this->source); })()))) {
            echo " readonly ";
        }
        // line 28
        if (array_key_exists("title", $context)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 29
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 30
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        // line 31
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 31, $this->source); })()) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  114 => 30,  108 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  76 => 22,  70 => 21,  64 => 20,  58 => 19,  52 => 18,  46 => 17,  40 => 16,  36 => 15,  33 => 12,  31 => 11,  29 => 8,  28 => 7,  27 => 6,  26 => 5,  25 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set type = (type is defined ? type : 'text') %}

{%- set class = [
    'text',
    (class is defined and class ? class : null),
    (type is defined and type == 'password' ? 'password' : null),
    (disabled is defined and disabled ? 'disabled' : null),
    (size is defined and size ? null : 'fullwidth')
]|filter|join(' ') %}

{%- if showCharsLeft is defined and showCharsLeft and maxlength is defined and maxlength %}
    {%- set style = 'padding-'~(craft.app.locale.getOrientation() == 'ltr' ? 'right' : 'left')~': '~(7.2*maxlength|length+14)~'px;' %}
{%- endif %}

{%- if type == 'password' %}<div class=\"passwordwrapper\">{% endif -%}
<input class=\"{{ class }}\" type=\"{{ type }}\"
    {%- if style is defined %} style=\"{{ style }}\"{% endif %}
    {%- if id is defined %} id=\"{{ id }}\"{% endif %}
    {%- if size is defined %} size=\"{{ size }}\"{% endif %}
    {%- if name is defined %} name=\"{{ name }}\"{% endif %}
    {%- if value is defined %} value=\"{{ value }}\"{% endif %}
    {%- if maxlength is defined and maxlength %} maxlength=\"{{ maxlength }}\"{% endif %}
    {%- if showCharsLeft is defined and showCharsLeft %} data-show-chars-left{% endif %}
    {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
    {%- if autocomplete is not defined or not autocomplete %} autocomplete=\"off\"{% endif %}
    {%- if disabled is defined and disabled %} disabled {% endif %}
    {%- if readonly is defined and readonly %} readonly {% endif %}
    {%- if title is defined %} title=\"{{ title }}\"{% endif %}
    {%- if placeholder is defined %} placeholder=\"{{ placeholder }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
{%- if type == 'password' %}</div>{% endif %}
", "_includes/forms/text", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/text.html");
    }
}
