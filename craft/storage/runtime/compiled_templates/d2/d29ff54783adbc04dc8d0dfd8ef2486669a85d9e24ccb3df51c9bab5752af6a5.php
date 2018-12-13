<?php

/* _includes/forms/time */
class __TwigTemplate_b6b41cc72ac087cca955d92f9a27fc74c064244d91f258e7513136e5d2ead498 extends craft\web\twig\Template
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
        $context["id"] = (((($context["id"]) ?? ("time")) . twig_random($this->env)) . "-time");
        // line 2
        $context["name"] = (($context["name"]) ?? (null));
        // line 3
        $context["value"] = (($context["value"]) ?? (null));
        // line 5
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\timepicker\\TimepickerAsset"), "method");
        // line 7
        echo "<div class=\"timewrapper\"";
        // line 8
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        // line 9
        $this->loadTemplate("_includes/forms/text", "_includes/forms/time", 9)->display(array_merge($context, array("name" => ((        // line 10
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 10, $this->source); })())) ? (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 10, $this->source); })()) . "[time]")) : ("")), "autocomplete" => false, "size" => 10, "placeholder" => " ", "value" => ((        // line 14
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 14, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->timeFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 14, $this->source); })()), "short")) : ("")))));
        // line 16
        echo "<div data-icon=\"time\"></div>
    ";
        // line 17
        if ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "[timezone]\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 18, $this->source); })()), "app", array()), "getTimeZone", array(), "method"), "html", null, true);
            echo "\">";
        }
        // line 20
        echo "</div>";
        // line 22
        $context["localeData"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 22, $this->source); })()), "app", array()), "locale", array());
        // line 24
        ob_start();
        // line 25
        echo "    var \$timePicker = \$('#";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 25, $this->source); })()))), "js"), "html", null, true);
        echo "');
    \$timePicker.timepicker(\$.extend({
        ";
        // line 27
        if (array_key_exists("minuteIncrement", $context)) {
            echo "step: '";
            echo twig_escape_filter($this->env, (isset($context["minuteIncrement"]) || array_key_exists("minuteIncrement", $context) ? $context["minuteIncrement"] : (function () { throw new Twig_Error_Runtime('Variable "minuteIncrement" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "'";
        }
        // line 28
        echo "    }, Craft.timepickerOptions));

    ";
        // line 30
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 30, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "format", array(), "any", true, true))) {
            // line 31
            echo "        \$timePicker.timepicker('setTime', ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->dateFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 31, $this->source); })()), "G"), "html", null, true);
            echo "*3600 + ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->dateFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 31, $this->source); })()), "i"), "html", null, true);
            echo "*60 + ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->dateFilter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 31, $this->source); })()), "s"), "html", null, true);
            echo ");
    ";
        }
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  77 => 30,  73 => 28,  67 => 27,  61 => 25,  59 => 24,  57 => 22,  55 => 20,  48 => 18,  46 => 17,  43 => 16,  41 => 14,  40 => 10,  39 => 9,  33 => 8,  31 => 7,  29 => 5,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set id = (id ?? 'time'~random())~'-time' -%}
{% set name = name ?? null -%}
{% set value = value ?? null -%}

{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\timepicker\\\\TimepickerAsset') -%}

<div class=\"timewrapper\"
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    {%- include \"_includes/forms/text\" with {
        name: (name ? name~'[time]'),
        autocomplete: false,
        size: 10,
        placeholder: ' ',
        value: (value ? value|time('short') : '')
    } -%}
    <div data-icon=\"time\"></div>
    {% if name -%}
        <input type=\"hidden\" name=\"{{ name }}[timezone]\" value=\"{{ craft.app.getTimeZone() }}\">
    {%- endif -%}
</div>

{%- set localeData = craft.app.locale %}

{%- js %}
    var \$timePicker = \$('#{{ id|namespaceInputId|e('js') }}');
    \$timePicker.timepicker(\$.extend({
        {% if minuteIncrement is defined %}step: '{{ minuteIncrement }}'{% endif %}
    }, Craft.timepickerOptions));

    {% if value and value.format is defined %}
        \$timePicker.timepicker('setTime', {{ value|date('G') }}*3600 + {{ value|date('i') }}*60 + {{ value|date('s') }});
    {% endif %}
{%- endjs %}
", "_includes/forms/time", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/time.html");
    }
}
