<?php

/* _includes/forms/elementSelect */
class __TwigTemplate_022c34be79461c7a5455a8dfd89cfead9e3747dd30b99ba4b7d46baaaab06703 extends craft\web\twig\Template
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = (((array_key_exists("elements", $context) && (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 5, $this->source); })()))) ? ((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 5, $this->source); })())) : (array()));
        // line 6
        $context["jsClass"] = (((array_key_exists("jsClass", $context) && (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new Twig_Error_Runtime('Variable "jsClass" does not exist.', 6, $this->source); })()))) ? ((isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new Twig_Error_Runtime('Variable "jsClass" does not exist.', 6, $this->source); })())) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = (((array_key_exists("sources", $context) && (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 7, $this->source); })()))) ? ((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 7, $this->source); })())) : (null));
        // line 8
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 8, $this->source); })()))) ? ((isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 8, $this->source); })())) : (null));
        // line 9
        $context["sourceElementId"] = (((array_key_exists("sourceElementId", $context) && (isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context) ? $context["sourceElementId"] : (function () { throw new Twig_Error_Runtime('Variable "sourceElementId" does not exist.', 9, $this->source); })()))) ? ((isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context) ? $context["sourceElementId"] : (function () { throw new Twig_Error_Runtime('Variable "sourceElementId" does not exist.', 9, $this->source); })())) : (null));
        // line 10
        $context["storageKey"] = (((array_key_exists("storageKey", $context) && (isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new Twig_Error_Runtime('Variable "storageKey" does not exist.', 10, $this->source); })()))) ? ((isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new Twig_Error_Runtime('Variable "storageKey" does not exist.', 10, $this->source); })())) : (null));
        // line 11
        $context["viewMode"] = ((array_key_exists("viewMode", $context)) ? ((isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new Twig_Error_Runtime('Variable "viewMode" does not exist.', 11, $this->source); })())) : ("list"));
        // line 12
        echo "
<div id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" class=\"elementselect\"";
        // line 14
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    <div class=\"elements\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 17
            echo "            ";
            $this->loadTemplate("_elements/element", "_includes/forms/elementSelect", 17)->display(array_merge($context, array("context" => "field", "size" => (((            // line 19
(isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new Twig_Error_Runtime('Variable "viewMode" does not exist.', 19, $this->source); })()) == "large")) ? ("large") : ("small")))));
            // line 21
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>

    <div class=\"btn add icon dashed\">";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("selectionLabel", $context)) ? ((isset($context["selectionLabel"]) || array_key_exists("selectionLabel", $context) ? $context["selectionLabel"] : (function () { throw new Twig_Error_Runtime('Variable "selectionLabel" does not exist.', 24, $this->source); })())) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Choose", "app"))), "html", null, true);
        echo "</div>
</div>

";
        // line 27
        $context["jsSettings"] = array("id" => call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array(        // line 28
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 28, $this->source); })()))), "name" => call_user_func_array($this->env->getFilter('namespaceInputName')->getCallable(), array(        // line 29
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 29, $this->source); })()))), "elementType" =>         // line 30
(isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 30, $this->source); })()), "sources" =>         // line 31
(isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 31, $this->source); })()), "criteria" =>         // line 32
(isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 32, $this->source); })()), "sourceElementId" =>         // line 33
(isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context) ? $context["sourceElementId"] : (function () { throw new Twig_Error_Runtime('Variable "sourceElementId" does not exist.', 33, $this->source); })()), "viewMode" =>         // line 34
(isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new Twig_Error_Runtime('Variable "viewMode" does not exist.', 34, $this->source); })()), "limit" => ((        // line 35
$context["limit"]) ?? (null)), "modalStorageKey" =>         // line 36
(isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new Twig_Error_Runtime('Variable "storageKey" does not exist.', 36, $this->source); })()));
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "    new ";
        echo twig_escape_filter($this->env, (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new Twig_Error_Runtime('Variable "jsClass" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "(";
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["jsSettings"]) || array_key_exists("jsSettings", $context) ? $context["jsSettings"] : (function () { throw new Twig_Error_Runtime('Variable "jsSettings" does not exist.', 40, $this->source); })()));
        echo ");
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
    }

    public function getTemplateName()
    {
        return "_includes/forms/elementSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  118 => 39,  115 => 38,  113 => 36,  112 => 35,  111 => 34,  110 => 33,  109 => 32,  108 => 31,  107 => 30,  106 => 29,  105 => 28,  104 => 27,  98 => 24,  94 => 22,  80 => 21,  78 => 19,  76 => 17,  59 => 16,  51 => 14,  48 => 13,  45 => 12,  43 => 11,  41 => 10,  39 => 9,  37 => 8,  35 => 7,  33 => 6,  31 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if name is defined and name %}
    <input type=\"hidden\" name=\"{{ name }}\" value=\"\">
{% endif -%}

{% set elements = (elements is defined and elements ? elements : []) -%}
{% set jsClass = (jsClass is defined and jsClass ? jsClass : 'Craft.BaseElementSelectInput') -%}
{% set sources = (sources is defined and sources ? sources : null) -%}
{% set criteria = (criteria is defined and criteria ? criteria : null) -%}
{% set sourceElementId = (sourceElementId is defined and sourceElementId ? sourceElementId : null) -%}
{% set storageKey = (storageKey is defined and storageKey ? storageKey : null) -%}
{% set viewMode = (viewMode is defined ? viewMode : 'list') %}

<div id=\"{{ id }}\" class=\"elementselect\"
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    <div class=\"elements\">
        {% for element in elements %}
            {% include \"_elements/element\" with {
                context: 'field',
                size: (viewMode == 'large' ? 'large' : 'small')
            } %}
        {% endfor %}
    </div>

    <div class=\"btn add icon dashed\">{{ selectionLabel is defined ? selectionLabel : \"Choose\"|t('app') }}</div>
</div>

{% set jsSettings = {
    id: id|namespaceInputId,
    name: name|namespaceInputName,
    elementType: elementType,
    sources: sources,
    criteria: criteria,
    sourceElementId: sourceElementId,
    viewMode: viewMode,
    limit: limit ?? null,
    modalStorageKey: storageKey
} %}

{% js %}
    new {{ jsClass }}({{ jsSettings|json_encode|raw }});
{% endjs %}
", "_includes/forms/elementSelect", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/elementSelect.html");
    }
}
