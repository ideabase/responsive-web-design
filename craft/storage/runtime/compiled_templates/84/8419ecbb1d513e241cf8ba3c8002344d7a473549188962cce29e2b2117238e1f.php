<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_23ff461f4625905f87f0921b613c216dde6c840adbbbcf7d2c7d3ddfb9d1f8de extends craft\web\twig\Template
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
        $context["on"] = ((array_key_exists("on", $context)) ? ((isset($context["on"]) || array_key_exists("on", $context) ? $context["on"] : (function () { throw new Twig_Error_Runtime('Variable "on" does not exist.', 1, $this->source); })())) : (false));
        // line 2
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->source); })())) : ("1"));
        // line 3
        $context["small"] = ((array_key_exists("small", $context)) ? ((isset($context["small"]) || array_key_exists("small", $context) ? $context["small"] : (function () { throw new Twig_Error_Runtime('Variable "small" does not exist.', 3, $this->source); })())) : (false));
        // line 4
        $context["toggle"] = ((array_key_exists("toggle", $context)) ? ((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new Twig_Error_Runtime('Variable "toggle" does not exist.', 4, $this->source); })())) : (false));
        // line 5
        $context["reverseToggle"] = ((array_key_exists("reverseToggle", $context)) ? ((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new Twig_Error_Runtime('Variable "reverseToggle" does not exist.', 5, $this->source); })())) : (false));
        // line 6
        $context["disabled"] = ((array_key_exists("disabled", $context)) ? ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 6, $this->source); })())) : (false));
        // line 7
        echo "
<div class=\"lightswitch";
        // line 8
        if ((isset($context["on"]) || array_key_exists("on", $context) ? $context["on"] : (function () { throw new Twig_Error_Runtime('Variable "on" does not exist.', 8, $this->source); })())) {
            echo " on";
        }
        if ((isset($context["small"]) || array_key_exists("small", $context) ? $context["small"] : (function () { throw new Twig_Error_Runtime('Variable "small" does not exist.', 8, $this->source); })())) {
            echo " small";
        }
        if (((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new Twig_Error_Runtime('Variable "toggle" does not exist.', 8, $this->source); })()) || (isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new Twig_Error_Runtime('Variable "reverseToggle" does not exist.', 8, $this->source); })()))) {
            echo " fieldtoggle";
        }
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 8, $this->source); })())) {
            echo " disabled";
        }
        echo "\" tabindex=\"0\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\"";
        // line 9
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 10
        if (array_key_exists("labelId", $context)) {
            echo " aria-labelledby=\"";
            echo twig_escape_filter($this->env, (isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new Twig_Error_Runtime('Variable "labelId" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 11
        if ((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new Twig_Error_Runtime('Variable "toggle" does not exist.', 11, $this->source); })())) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new Twig_Error_Runtime('Variable "toggle" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 12
        if ((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new Twig_Error_Runtime('Variable "reverseToggle" does not exist.', 12, $this->source); })())) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new Twig_Error_Runtime('Variable "reverseToggle" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 13
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    <div class=\"lightswitch-container\">
        <div class=\"label on\"></div>
        <div class=\"handle\"></div>
        <div class=\"label off\"></div>
    </div>
    ";
        // line 19
        if (array_key_exists("name", $context)) {
            // line 20
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (((isset($context["on"]) || array_key_exists("on", $context) ? $context["on"] : (function () { throw new Twig_Error_Runtime('Variable "on" does not exist.', 20, $this->source); })())) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->source); })())) : ("")), "html", null, true);
            echo "\"";
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 20, $this->source); })())) {
                echo " disabled";
            }
            echo ">";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  92 => 20,  90 => 19,  78 => 13,  72 => 12,  66 => 11,  60 => 10,  54 => 9,  38 => 8,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set on = (on is defined ? on : false) %}
{%- set value = (value is defined ? value : '1') %}
{%- set small = (small is defined ? small : false) %}
{%- set toggle = (toggle is defined ? toggle : false) %}
{%- set reverseToggle = (reverseToggle is defined ? reverseToggle : false) %}
{%- set disabled = (disabled is defined ? disabled : false) %}

<div class=\"lightswitch{% if on %} on{% endif %}{% if small %} small{% endif %}{% if toggle or reverseToggle %} fieldtoggle{% endif %}{% if disabled %} disabled{% endif %}\" tabindex=\"0\" data-value=\"{{ value }}\"
    {%- if id is defined %} id=\"{{ id }}\"{% endif %}
    {%- if labelId is defined %} aria-labelledby=\"{{ labelId }}\"{% endif %}
    {%- if toggle %} data-target=\"{{ toggle }}\"{% endif %}
    {%- if reverseToggle %} data-reverse-target=\"{{ reverseToggle }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    <div class=\"lightswitch-container\">
        <div class=\"label on\"></div>
        <div class=\"handle\"></div>
        <div class=\"label off\"></div>
    </div>
    {% if name is defined -%}
        <input type=\"hidden\" name=\"{{ name }}\" value=\"{{ on ? value }}\"{% if disabled %} disabled{% endif %}>
    {%- endif %}
</div>
", "_includes/forms/lightswitch", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/lightswitch.html");
    }
}
