<?php

/* _includes/forms/date */
class __TwigTemplate_8261639e36514d511c35d635255541b8bf0f3cc166e4d175c167a7bfbf62f304 extends craft\web\twig\Template
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
        $context["id"] = (((($context["id"]) ?? ("date")) . twig_random($this->env)) . "-date");
        // line 2
        $context["name"] = (($context["name"]) ?? (null));
        // line 3
        $context["value"] = (($context["value"]) ?? (null));
        // line 5
        echo "<div class=\"datewrapper\"";
        // line 6
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        // line 7
        $this->loadTemplate("_includes/forms/text", "_includes/forms/date", 7)->display(array_merge($context, array("name" => ((        // line 8
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 8, $this->source); })())) ? (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 8, $this->source); })()) . "[date]")) : ("")), "autocomplete" => false, "size" => 10, "placeholder" => " ", "value" => ((        // line 12
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 12, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->dateFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 12, $this->source); })()), "short")) : ("")))));
        // line 14
        echo "<div data-icon=\"date\"></div>
    ";
        // line 15
        if ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "[timezone]\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 16, $this->source); })()), "app", array()), "getTimeZone", array(), "method"), "html", null, true);
            echo "\">";
        }
        // line 18
        echo "</div>";
        // line 20
        ob_start();
        // line 21
        echo "    \$('#";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 21, $this->source); })()))), "js"), "html", null, true);
        echo "').datepicker(\$.extend({
        defaultDate: new Date(";
        // line 22
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->source); })())) {
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->dateFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->source); })()), "Y"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($this->extensions['craft\web\twig\Extension']->dateFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->source); })()), "n") - 1), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->dateFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->source); })()), "j"), "html", null, true);
        }
        echo ")
    }, Craft.datepickerOptions));";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
    }

    public function getTemplateName()
    {
        return "_includes/forms/date";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  57 => 21,  55 => 20,  53 => 18,  46 => 16,  44 => 15,  41 => 14,  39 => 12,  38 => 8,  37 => 7,  31 => 6,  29 => 5,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set id = (id ?? 'date'~random())~'-date' -%}
{% set name = name ?? null -%}
{% set value = value ?? null -%}

<div class=\"datewrapper\"
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    {%- include \"_includes/forms/text\" with {
        name: (name ? name~'[date]'),
        autocomplete: false,
        size: 10,
        placeholder: ' ',
        value: (value ? value|date('short') : '')
    } -%}
    <div data-icon=\"date\"></div>
    {% if name -%}
        <input type=\"hidden\" name=\"{{ name }}[timezone]\" value=\"{{ craft.app.getTimeZone() }}\">
    {%- endif -%}
</div>

{%- js %}
    \$('#{{ id|namespaceInputId|e('js') }}').datepicker(\$.extend({
        defaultDate: new Date({% if value %}{{ value|date('Y') }}, {{ value|date('n')-1 }}, {{ value|date('j') }}{% endif %})
    }, Craft.datepickerOptions));
{%- endjs %}
", "_includes/forms/date", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/date.html");
    }
}
