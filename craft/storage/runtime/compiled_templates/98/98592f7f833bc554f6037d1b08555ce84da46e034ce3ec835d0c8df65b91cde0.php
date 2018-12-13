<?php

/* _includes/forms/checkbox */
class __TwigTemplate_97a981b336bac1f7ff4fe539f1d7ffcf3eb37f1f4baaf4eb7ec82b14f2a2ee87 extends craft\web\twig\Template
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
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => ((        // line 4
array_key_exists("class", $context)) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 4, $this->source); })())) : (null)), 1 => ((((        // line 5
array_key_exists("toggle", $context) &&  !twig_test_empty((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new Twig_Error_Runtime('Variable "toggle" does not exist.', 5, $this->source); })()))) || (array_key_exists("reverseToggle", $context) &&  !twig_test_empty((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new Twig_Error_Runtime('Variable "reverseToggle" does not exist.', 5, $this->source); })()))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 8
        echo "
";
        // line 9
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 9, $this->source); })())) : (1));
        // line 10
        $context["id"] = (((array_key_exists("id", $context) && (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 10, $this->source); })()))) ? ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 10, $this->source); })())) : (("checkbox" . twig_random($this->env))));
        // line 11
        $context["label"] = ((array_key_exists("label", $context)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->source); })())) : (""));
        // line 12
        echo "
";
        // line 13
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 13, $this->source); })())) < 3) || (twig_slice($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 13, $this->source); })()),  -2) != "[]")))) {
            // line 14
            echo "    <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 16
        echo "
<input type=\"checkbox\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"";
        // line 18
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 18, $this->source); })())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 19
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 20
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 20, $this->source); })()))) {
            echo " checked";
        }
        // line 21
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 21, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 21, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 22
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 22, $this->source); })()))) {
            echo " disabled";
        }
        // line 23
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new Twig_Error_Runtime('Variable "toggle" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 24
        if (array_key_exists("reverseToggle", $context)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new Twig_Error_Runtime('Variable "reverseToggle" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 25
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">

<label for=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\">";
        echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 27, $this->source); })());
        echo "</label>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  96 => 25,  90 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  66 => 19,  60 => 18,  55 => 17,  52 => 16,  46 => 14,  44 => 13,  41 => 12,  39 => 11,  37 => 10,  35 => 9,  32 => 8,  30 => 5,  29 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- spaceless %}

{% set class = [
    (class is defined ? class : null),
    ((toggle is defined and toggle is not empty) or (reverseToggle is defined and reverseToggle is not empty) ? 'fieldtoggle' : null),
    'checkbox'
]|filter|join(' ') %}

{% set value = (value is defined ? value : 1) %}
{% set id = (id is defined and id ? id : 'checkbox'~random()) %}
{% set label = (label is defined ? label) %}

{% if name is defined and (name|length < 3 or name|slice(-2) != '[]') %}
    <input type=\"hidden\" name=\"{{ name }}\" value=\"\">
{% endif %}

<input type=\"checkbox\" value=\"{{ value }}\" class=\"{{ class }}\"
    {%- if id %} id=\"{{ id }}\"{% endif %}
    {%- if name is defined %} name=\"{{ name }}\"{% endif %}
    {%- if checked is defined and checked %} checked{% endif %}
    {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
    {%- if disabled is defined and disabled %} disabled{% endif %}
    {%- if toggle is defined %} data-target=\"{{ toggle }}\"{% endif %}
    {%- if reverseToggle is defined %} data-reverse-target=\"{{ reverseToggle }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>

<label for=\"{{ id }}\">{{ label|raw }}</label>

{% endspaceless -%}
", "_includes/forms/checkbox", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/checkbox.html");
    }
}
