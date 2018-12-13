<?php

/* _components/fieldtypes/Assets/input */
class __TwigTemplate_b536139737760405b80a3de62e13624cad175a9b2a36aa40669e6e455faf75f1 extends craft\web\twig\Template
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
        $context["elements"] = ((array_key_exists("elements", $context)) ? ((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 5, $this->source); })())) : (array()));
        // line 6
        $context["jsClass"] = (((array_key_exists("jsClass", $context) && (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new Twig_Error_Runtime('Variable "jsClass" does not exist.', 6, $this->source); })()))) ? ((isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new Twig_Error_Runtime('Variable "jsClass" does not exist.', 6, $this->source); })())) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = (((array_key_exists("sources", $context) && (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 7, $this->source); })()))) ? ((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 7, $this->source); })())) : (null));
        // line 8
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 8, $this->source); })()))) ? ((isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 8, $this->source); })())) : (null));
        // line 9
        $context["storageKey"] = (((array_key_exists("storageKey", $context) && (isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new Twig_Error_Runtime('Variable "storageKey" does not exist.', 9, $this->source); })()))) ? ((isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new Twig_Error_Runtime('Variable "storageKey" does not exist.', 9, $this->source); })())) : (null));
        // line 11
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\" class=\"elementselect\">
    <div class=\"elements\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 13, $this->source); })()));
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
            // line 14
            echo "            ";
            $this->loadTemplate("_elements/element", "_components/fieldtypes/Assets/input", 14)->display(array_merge($context, array("context" => "field", "size" => (((            // line 16
(isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new Twig_Error_Runtime('Variable "viewMode" does not exist.', 16, $this->source); })()) == "large")) ? ("large") : ("small")))));
            // line 18
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
        // line 19
        echo "    </div>

    <div class=\"btn add icon dashed\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["selectionLabel"]) || array_key_exists("selectionLabel", $context) ? $context["selectionLabel"] : (function () { throw new Twig_Error_Runtime('Variable "selectionLabel" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</div>
</div>

";
        // line 24
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 24, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\prismjs\\PrismJsAsset"), "method");
        // line 25
        echo "
";
        // line 26
        $context["jsSettings"] = array("id" => call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array(        // line 27
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 27, $this->source); })()))), "name" => call_user_func_array($this->env->getFilter('namespaceInputName')->getCallable(), array(        // line 28
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 28, $this->source); })()))), "elementType" =>         // line 29
(isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 29, $this->source); })()), "sources" =>         // line 30
(isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 30, $this->source); })()), "criteria" =>         // line 31
(isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 31, $this->source); })()), "sourceElementId" =>         // line 32
(isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context) ? $context["sourceElementId"] : (function () { throw new Twig_Error_Runtime('Variable "sourceElementId" does not exist.', 32, $this->source); })()), "viewMode" =>         // line 33
(isset($context["viewMode"]) || array_key_exists("viewMode", $context) ? $context["viewMode"] : (function () { throw new Twig_Error_Runtime('Variable "viewMode" does not exist.', 33, $this->source); })()), "limit" =>         // line 34
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new Twig_Error_Runtime('Variable "limit" does not exist.', 34, $this->source); })()), "modalStorageKey" =>         // line 35
(isset($context["storageKey"]) || array_key_exists("storageKey", $context) ? $context["storageKey"] : (function () { throw new Twig_Error_Runtime('Variable "storageKey" does not exist.', 35, $this->source); })()), "fieldId" =>         // line 36
(isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 36, $this->source); })()), "defaultFieldLayoutId" =>         // line 37
(isset($context["defaultFieldLayoutId"]) || array_key_exists("defaultFieldLayoutId", $context) ? $context["defaultFieldLayoutId"] : (function () { throw new Twig_Error_Runtime('Variable "defaultFieldLayoutId" does not exist.', 37, $this->source); })()), "modalSettings" => array("hideSidebar" =>         // line 38
(isset($context["hideSidebar"]) || array_key_exists("hideSidebar", $context) ? $context["hideSidebar"] : (function () { throw new Twig_Error_Runtime('Variable "hideSidebar" does not exist.', 38, $this->source); })())));
        // line 40
        echo "
";
        // line 41
        ob_start();
        // line 42
        echo "    new ";
        echo twig_escape_filter($this->env, (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new Twig_Error_Runtime('Variable "jsClass" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "(";
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["jsSettings"]) || array_key_exists("jsSettings", $context) ? $context["jsSettings"] : (function () { throw new Twig_Error_Runtime('Variable "jsSettings" does not exist.', 42, $this->source); })()));
        echo ");
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  114 => 41,  111 => 40,  109 => 38,  108 => 37,  107 => 36,  106 => 35,  105 => 34,  104 => 33,  103 => 32,  102 => 31,  101 => 30,  100 => 29,  99 => 28,  98 => 27,  97 => 26,  94 => 25,  92 => 24,  86 => 21,  82 => 19,  68 => 18,  66 => 16,  64 => 14,  47 => 13,  41 => 11,  39 => 9,  37 => 8,  35 => 7,  33 => 6,  31 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if name is defined and name %}
    <input type=\"hidden\" name=\"{{ name }}\" value=\"\">
{% endif -%}

{% set elements = (elements is defined ? elements : []) -%}
{% set jsClass = (jsClass is defined and jsClass ? jsClass : 'Craft.BaseElementSelectInput') -%}
{% set sources = (sources is defined and sources ? sources : null) -%}
{% set criteria = (criteria is defined and criteria ? criteria : null) -%}
{% set storageKey = (storageKey is defined and storageKey ? storageKey : null) -%}

<div id=\"{{ id }}\" class=\"elementselect\">
    <div class=\"elements\">
        {% for element in elements %}
            {% include \"_elements/element\" with {
                context: 'field',
                size: (viewMode == 'large' ? 'large' : 'small')
            } %}
        {% endfor %}
    </div>

    <div class=\"btn add icon dashed\">{{ selectionLabel }}</div>
</div>

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\prismjs\\\\PrismJsAsset\") %}

{% set jsSettings = {
    id: id|namespaceInputId,
    name: name|namespaceInputName,
    elementType: elementType,
    sources: sources,
    criteria: criteria,
    sourceElementId: sourceElementId,
    viewMode: viewMode,
    limit: limit,
    modalStorageKey: storageKey,
    fieldId: fieldId,
    defaultFieldLayoutId: defaultFieldLayoutId,
    modalSettings: {hideSidebar: hideSidebar}
} %}

{% js %}
    new {{ jsClass }}({{ jsSettings|json_encode|raw }});
{% endjs %}
", "_components/fieldtypes/Assets/input", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/Assets/input.html");
    }
}
