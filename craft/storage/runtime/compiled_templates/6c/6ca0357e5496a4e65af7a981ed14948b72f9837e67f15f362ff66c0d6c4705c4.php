<?php

/* _includes/forms/color */
class __TwigTemplate_664e1d3b3d1756587401d465d77909cc05c3b4c45d1470eef8805e5c3c54c5b3 extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_includes/forms/color", 1);
        // line 3
        $context["id"] = ((($context["id"]) ?? ("color")) . twig_random($this->env));
        // line 4
        $context["containerId"] = ((($context["containerId"]) ?? ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->source); })()))) . "-container");
        // line 5
        $context["name"] = (($context["name"]) ?? (null));
        // line 6
        $context["value"] = (($context["value"]) ?? (null));
        // line 7
        $context["small"] = (($context["small"]) ?? (false));
        // line 8
        $context["autofocus"] = ((($context["autofocus"]) ?? (false)) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 8, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"));
        // line 9
        $context["disabled"] = (($context["disabled"]) ?? (false));
        // line 11
        ob_start();
        // line 12
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new Twig_Error_Runtime('Variable "containerId" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" class=\"flex color-container\"";
        // line 13
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
        <div class=\"color static";
        // line 14
        if ((isset($context["small"]) || array_key_exists("small", $context) ? $context["small"] : (function () { throw new Twig_Error_Runtime('Variable "small" does not exist.', 14, $this->source); })())) {
            echo " small";
        }
        echo "\">
            <div class=\"color-preview\"";
        // line 16
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->source); })())) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->source); })()), "html", null, true);
            echo ";\"";
        }
        // line 17
        echo "></div>
        </div>
        ";
        // line 19
        echo $context["forms"]->macro_text(array("id" =>         // line 20
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 20, $this->source); })()), "name" =>         // line 21
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 21, $this->source); })()), "value" =>         // line 22
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->source); })()), "size" => 10, "class" => "color-input", "autofocus" =>         // line 25
(isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 25, $this->source); })()), "disabled" =>         // line 26
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 26, $this->source); })())));
        // line 27
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 31
        ob_start();
        // line 32
        echo "    new Craft.ColorInput('#";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array((isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new Twig_Error_Runtime('Variable "containerId" does not exist.', 32, $this->source); })()))), "html", null, true);
        echo "');
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
    }

    public function getTemplateName()
    {
        return "_includes/forms/color";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  80 => 31,  75 => 27,  73 => 26,  72 => 25,  71 => 22,  70 => 21,  69 => 20,  68 => 19,  64 => 17,  58 => 16,  52 => 14,  45 => 13,  41 => 12,  39 => 11,  37 => 9,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms -%}

{% set id = id ?? 'color'~random() -%}
{% set containerId = containerId ?? id~'-container' -%}
{% set name = name ?? null -%}
{% set value = value ?? null -%}
{% set small = small ?? false -%}
{% set autofocus = (autofocus ?? false) and not craft.app.request.isMobileBrowser(true) -%}
{% set disabled = disabled ?? false -%}

{% spaceless %}
    <div id=\"{{ containerId }}\" class=\"flex color-container\"
            {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
        <div class=\"color static{% if small %} small{% endif %}\">
            <div class=\"color-preview\"
                {%- if value %} style=\"background-color: {{ value }};\"{% endif -%}
            ></div>
        </div>
        {{ forms.text({
            id: id,
            name: name,
            value: value,
            size: 10,
            class: 'color-input',
            autofocus: autofocus,
            disabled: disabled
        }) }}
    </div>
{% endspaceless -%}

{% js %}
    new Craft.ColorInput('#{{ containerId|namespaceInputId }}');
{% endjs -%}
", "_includes/forms/color", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/color.html");
    }
}
