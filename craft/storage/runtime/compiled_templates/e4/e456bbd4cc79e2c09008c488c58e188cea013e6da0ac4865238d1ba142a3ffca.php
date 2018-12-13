<?php

/* _includes/forms/select */
class __TwigTemplate_911a7f5bf50342694c7122fc5e2bdf978f014f9d058e2f41db12926de644008f extends craft\web\twig\Template
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "select", 1 => ((        // line 3
array_key_exists("class", $context)) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 3, $this->source); })())) : (null)))), " ");
        // line 6
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 6, $this->source); })())) : (array()));
        // line 7
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 7, $this->source); })())) : (null));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\"";
        // line 11
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    <select";
        // line 13
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 14
        if ((array_key_exists("toggle", $context) && (isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new Twig_Error_Runtime('Variable "toggle" does not exist.', 14, $this->source); })()))) {
            echo " class=\"fieldtoggle\" data-target-prefix=\"";
            echo twig_escape_filter($this->env, (($context["targetPrefix"]) ?? ("")), "html", null, true);
            echo "\"";
        }
        // line 15
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 16
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 16, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 16, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 17
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 17, $this->source); })()))) {
            echo " disabled";
        }
        echo ">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 19
            echo "            ";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "optgroup", array(), "any", true, true)) {
                // line 20
                echo "                ";
                if ((isset($context["hasOptgroups"]) || array_key_exists("hasOptgroups", $context) ? $context["hasOptgroups"] : (function () { throw new Twig_Error_Runtime('Variable "hasOptgroups" does not exist.', 20, $this->source); })())) {
                    // line 21
                    echo "                    </optgroup>
                ";
                } else {
                    // line 23
                    echo "                    ";
                    $context["hasOptgroups"] = true;
                    // line 24
                    echo "                ";
                }
                // line 25
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "optgroup", array()), "html", null, true);
                echo "\">
            ";
            } else {
                // line 27
                echo "                ";
                $context["optionLabel"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "label", array(), "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "label", array())) : ($context["option"]));
                // line 28
                echo "                ";
                $context["optionValue"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "value", array(), "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "value", array())) : ($context["key"]));
                // line 29
                echo "                ";
                $context["optionDisabled"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "disabled", array(), "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "disabled", array())) : (false));
                // line 30
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["optionValue"]) || array_key_exists("optionValue", $context) ? $context["optionValue"] : (function () { throw new Twig_Error_Runtime('Variable "optionValue" does not exist.', 30, $this->source); })()), "html", null, true);
                echo "\"";
                if (((isset($context["optionValue"]) || array_key_exists("optionValue", $context) ? $context["optionValue"] : (function () { throw new Twig_Error_Runtime('Variable "optionValue" does not exist.', 30, $this->source); })()) == (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 30, $this->source); })()))) {
                    echo " selected";
                }
                if ((isset($context["optionDisabled"]) || array_key_exists("optionDisabled", $context) ? $context["optionDisabled"] : (function () { throw new Twig_Error_Runtime('Variable "optionDisabled" does not exist.', 30, $this->source); })())) {
                    echo " disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["optionLabel"]) || array_key_exists("optionLabel", $context) ? $context["optionLabel"] : (function () { throw new Twig_Error_Runtime('Variable "optionLabel" does not exist.', 30, $this->source); })()), "html", null, true);
                echo "</option>
            ";
            }
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        if ((isset($context["hasOptgroups"]) || array_key_exists("hasOptgroups", $context) ? $context["hasOptgroups"] : (function () { throw new Twig_Error_Runtime('Variable "hasOptgroups" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "            </optgroup>
        ";
        }
        // line 36
        echo "    </select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  130 => 34,  127 => 33,  121 => 32,  106 => 30,  103 => 29,  100 => 28,  97 => 27,  91 => 25,  88 => 24,  85 => 23,  81 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 17,  61 => 16,  55 => 15,  49 => 14,  43 => 13,  36 => 11,  32 => 10,  30 => 8,  28 => 7,  26 => 6,  24 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set class = [
    'select',
    (class is defined ? class : null)
]|filter|join(' ') %}

{%- set options = (options is defined ? options : []) %}
{%- set value = (value is defined ? value : null) %}
{%- set hasOptgroups = false -%}

<div class=\"{{ class }}\"
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    <select
        {%- if id is defined %} id=\"{{ id }}\"{% endif %}
        {%- if toggle is defined and toggle %} class=\"fieldtoggle\" data-target-prefix=\"{{ targetPrefix ?? '' }}\"{% endif %}
        {%- if name is defined %} name=\"{{ name }}\"{% endif %}
        {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
        {%- if disabled is defined and disabled %} disabled{% endif %}>
        {% for key, option in options %}
            {% if option.optgroup is defined %}
                {% if hasOptgroups %}
                    </optgroup>
                {% else %}
                    {% set hasOptgroups = true %}
                {% endif %}
                <optgroup label=\"{{ option.optgroup }}\">
            {% else %}
                {% set optionLabel = (option.label is defined ? option.label : option) %}
                {% set optionValue = (option.value is defined ? option.value : key) %}
                {% set optionDisabled = (option.disabled is defined ? option.disabled : false) %}
                <option value=\"{{ optionValue }}\"{% if optionValue == value %} selected{% endif %}{% if optionDisabled %} disabled{% endif %}>{{ optionLabel }}</option>
            {% endif %}
        {% endfor %}
        {% if hasOptgroups %}
            </optgroup>
        {% endif %}
    </select>
</div>
", "_includes/forms/select", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/select.html");
    }
}
