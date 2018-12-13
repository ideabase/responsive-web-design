<?php

/* _includes/forms/checkboxSelect */
class __TwigTemplate_7ebf3b9b62079bb42e7950fa15786ca8be5265997d426f1093e02fe922a3b6ae extends craft\web\twig\Template
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
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->source); })())) : (array()));
        // line 2
        $context["values"] = ((array_key_exists("values", $context)) ? ((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new Twig_Error_Runtime('Variable "values" does not exist.', 2, $this->source); })())) : (array()));
        // line 4
        $context["showAllOption"] = (($context["showAllOption"]) ?? (false));
        // line 5
        if ((isset($context["showAllOption"]) || array_key_exists("showAllOption", $context) ? $context["showAllOption"] : (function () { throw new Twig_Error_Runtime('Variable "showAllOption" does not exist.', 5, $this->source); })())) {
            // line 6
            $context["allLabel"] = (($context["allLabel"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("All", "app")));
            // line 7
            $context["allValue"] = (($context["allValue"]) ?? ("*"));
            // line 8
            $context["allChecked"] = ((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new Twig_Error_Runtime('Variable "values" does not exist.', 8, $this->source); })()) == (isset($context["allValue"]) || array_key_exists("allValue", $context) ? $context["allValue"] : (function () { throw new Twig_Error_Runtime('Variable "allValue" does not exist.', 8, $this->source); })()));
        }
        // line 10
        echo "
<div class=\"checkbox-select";
        // line 11
        if (array_key_exists("class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 11, $this->source); })()), "html", null, true);
        }
        echo "\"";
        // line 12
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        // line 13
        if ((isset($context["showAllOption"]) || array_key_exists("showAllOption", $context) ? $context["showAllOption"] : (function () { throw new Twig_Error_Runtime('Variable "showAllOption" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "        <div>
            ";
            // line 15
            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/checkboxSelect", 15)->display(array("id" => ((            // line 16
array_key_exists("id", $context)) ? ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 16, $this->source); })())) : (null)), "class" => "all", "label" => (("<b>" .             // line 18
(isset($context["allLabel"]) || array_key_exists("allLabel", $context) ? $context["allLabel"] : (function () { throw new Twig_Error_Runtime('Variable "allLabel" does not exist.', 18, $this->source); })())) . "</b>"), "name" => ((            // line 19
array_key_exists("name", $context)) ? ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 19, $this->source); })())) : (null)), "value" =>             // line 20
(isset($context["allValue"]) || array_key_exists("allValue", $context) ? $context["allValue"] : (function () { throw new Twig_Error_Runtime('Variable "allValue" does not exist.', 20, $this->source); })()), "checked" =>             // line 21
(isset($context["allChecked"]) || array_key_exists("allChecked", $context) ? $context["allChecked"] : (function () { throw new Twig_Error_Runtime('Variable "allChecked" does not exist.', 21, $this->source); })()), "autofocus" => ((            // line 22
array_key_exists("autofocus", $context) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 22, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 22, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"))));
            // line 24
            echo "        </div>";
        }
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 27
            if ( !twig_test_iterable($context["option"])) {
                // line 28
                $context["option"] = array("label" => $context["option"], "value" => $context["key"]);
            }
            // line 30
            echo "        ";
            if ((( !(isset($context["showAllOption"]) || array_key_exists("showAllOption", $context) ? $context["showAllOption"] : (function () { throw new Twig_Error_Runtime('Variable "showAllOption" does not exist.', 30, $this->source); })()) ||  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "value", array(), "any", true, true)) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "value", array()) != (isset($context["allValue"]) || array_key_exists("allValue", $context) ? $context["allValue"] : (function () { throw new Twig_Error_Runtime('Variable "allValue" does not exist.', 30, $this->source); })())))) {
                // line 31
                echo "            <div>
                ";
                // line 32
                $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/checkboxSelect", 32)->display(twig_array_merge(array("name" => ((                // line 33
array_key_exists("name", $context)) ? (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 33, $this->source); })()) . "[]")) : (null)), "checked" => ((                // line 34
(isset($context["showAllOption"]) || array_key_exists("showAllOption", $context) ? $context["showAllOption"] : (function () { throw new Twig_Error_Runtime('Variable "showAllOption" does not exist.', 34, $this->source); })()) && (isset($context["allChecked"]) || array_key_exists("allChecked", $context) ? $context["allChecked"] : (function () { throw new Twig_Error_Runtime('Variable "allChecked" does not exist.', 34, $this->source); })())) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "value", array(), "any", true, true) && twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "value", array()), (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new Twig_Error_Runtime('Variable "values" does not exist.', 34, $this->source); })())))), "disabled" => (                // line 35
(isset($context["showAllOption"]) || array_key_exists("showAllOption", $context) ? $context["showAllOption"] : (function () { throw new Twig_Error_Runtime('Variable "showAllOption" does not exist.', 35, $this->source); })()) && (isset($context["allChecked"]) || array_key_exists("allChecked", $context) ? $context["allChecked"] : (function () { throw new Twig_Error_Runtime('Variable "allChecked" does not exist.', 35, $this->source); })()))),                 // line 36
$context["option"]));
                // line 37
                echo "            </div>
        ";
            }
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  94 => 39,  90 => 37,  88 => 36,  87 => 35,  86 => 34,  85 => 33,  84 => 32,  81 => 31,  78 => 30,  75 => 28,  73 => 27,  69 => 26,  66 => 24,  64 => 22,  63 => 21,  62 => 20,  61 => 19,  60 => 18,  59 => 16,  58 => 15,  55 => 14,  53 => 13,  47 => 12,  41 => 11,  38 => 10,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set options = (options is defined ? options : []) %}
{%- set values = (values is defined ? values : []) -%}

{%- set showAllOption = showAllOption ?? false %}
{%- if showAllOption %}
    {%- set allLabel = allLabel ?? \"All\"|t('app') %}
    {%- set allValue = allValue ?? '*' %}
    {%- set allChecked = (values == allValue) %}
{%- endif %}

<div class=\"checkbox-select{% if class is defined %} {{ class }}{% endif %}\"
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    {%- if showAllOption %}
        <div>
            {% include \"_includes/forms/checkbox\" with {
                id:        (id is defined ? id : null),
                class:     'all',
                label:     '<b>' ~ allLabel ~ '</b>',
                name:      (name is defined ? name : null),
                value:     allValue,
                checked:   allChecked,
                autofocus: (autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true))
            } only %}
        </div>
    {%- endif %}
    {%- for key, option in options %}
        {%- if option is not iterable %}
            {%- set option = {label: option, value: key} %}
        {%- endif %}
        {% if not showAllOption or option.value is not defined or option.value != allValue %}
            <div>
                {% include \"_includes/forms/checkbox\" with {
                    name:     (name is defined ? name~'[]' : null),
                    checked:  ((showAllOption and allChecked) or (option.value is defined and option.value in values)),
                    disabled: (showAllOption and allChecked)
                }|merge(option) only %}
            </div>
        {% endif %}
    {% endfor %}
</div>
", "_includes/forms/checkboxSelect", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/checkboxSelect.html");
    }
}
