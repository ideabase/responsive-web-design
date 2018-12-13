<?php

/* _includes/forms/radio */
class __TwigTemplate_0763e6096b5db14ca0ba48d4fb845481ed3a80bfb43271ed72295ebfad9a74c3 extends craft\web\twig\Template
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
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->source); })())) : ("1"));
        // line 3
        echo "<label";
        // line 4
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    <input type=\"radio\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\"";
        // line 6
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 7
        if (array_key_exists("class", $context)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 8
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 9
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 9, $this->source); })()))) {
            echo " checked";
        }
        // line 10
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 10, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 10, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 11
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 11, $this->source); })()))) {
            echo " disabled";
        }
        echo ">
    ";
        // line 12
        if (array_key_exists("label", $context)) {
            echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->source); })());
        }
        // line 13
        echo "</label>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/radio";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  69 => 12,  63 => 11,  59 => 10,  55 => 9,  49 => 8,  43 => 7,  37 => 6,  34 => 5,  27 => 4,  25 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set value = (value is defined ? value : '1') -%}

<label
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    <input type=\"radio\" value=\"{{ value }}\"
        {%- if id is defined %} id=\"{{ id }}\"{% endif %}
        {%- if class is defined %} class=\"{{ class }}\"{% endif %}
        {%- if name is defined %} name=\"{{ name }}\"{% endif %}
        {%- if checked is defined and checked %} checked{% endif %}
        {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
        {%- if disabled is defined and disabled %} disabled{% endif %}>
    {% if label is defined %}{{ label|raw }}{% endif %}
</label>
", "_includes/forms/radio", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/radio.html");
    }
}
