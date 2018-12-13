<?php

/* _includes/forms/radioGroup */
class __TwigTemplate_b470096ffaa695bf6ad8d71fb5603a596672358f679ac33cfa263a143de5248a extends craft\web\twig\Template
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
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->source); })())) : (null));
        // line 3
        echo "
<div class=\"radio-group\"";
        // line 5
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 6, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 7
            if ( !twig_test_iterable($context["option"])) {
                // line 8
                $context["option"] = array("label" => $context["option"], "value" => $context["key"]);
            }
            // line 10
            echo "        <div>
            ";
            // line 11
            $this->loadTemplate("_includes/forms/radio", "_includes/forms/radioGroup", 11)->display(twig_array_merge(array("id" => (((            // line 12
array_key_exists("id", $context) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array()))) ? ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 12, $this->source); })())) : (null)), "name" => ((            // line 13
array_key_exists("name", $context)) ? ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 13, $this->source); })())) : (null)), "checked" => (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 14
$context["option"], "value", array(), "any", true, true) && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["option"], "value", array()) == (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 14, $this->source); })()))), "autofocus" => (((            // line 15
array_key_exists("autofocus", $context) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new Twig_Error_Runtime('Variable "autofocus" does not exist.', 15, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 15, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method"))),             // line 16
$context["option"]));
            // line 17
            echo "        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/radioGroup";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  68 => 17,  66 => 16,  65 => 15,  64 => 14,  63 => 13,  62 => 12,  61 => 11,  58 => 10,  55 => 8,  53 => 7,  36 => 6,  30 => 5,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set options = (options is defined ? options : []) %}
{%- set value = (value is defined ? value : null) %}

<div class=\"radio-group\"
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    {%- for key, option in options %}
        {%- if option is not iterable %}
            {%- set option = {label: option, value: key} %}
        {%- endif %}
        <div>
            {% include \"_includes/forms/radio\" with {
                id:        (id is defined and loop.first ? id : null),
                name:      (name is defined ? name : null),
                checked:   (option.value is defined and option.value == value),
                autofocus: (autofocus is defined and autofocus and loop.first and not craft.app.request.isMobileBrowser(true))
            }|merge(option) only %}
        </div>
    {% endfor %}
</div>
", "_includes/forms/radioGroup", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/radioGroup.html");
    }
}
