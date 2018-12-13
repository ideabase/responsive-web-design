<?php

/* _includes/fieldlayoutdesigner */
class __TwigTemplate_fa92fb90238cda5a51adfe893241e600726e263f3909304772f850f000e6ec53 extends craft\web\twig\Template
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
        if ( !array_key_exists("customizableTabs", $context)) {
            $context["customizableTabs"] = true;
        }
        // line 2
        if (( !(isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 2, $this->source); })()) &&  !array_key_exists("pretendTabName", $context))) {
            // line 3
            echo "    ";
            $context["pretendTabName"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Content", "app");
        }
        // line 5
        echo "
";
        // line 6
        $context["groups"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 6, $this->source); })()), "app", array()), "fields", array()), "getAllGroups", array(), "method");
        // line 7
        echo "
";
        // line 8
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 8, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Rename", 1 => "Delete", 2 => "Make required", 3 => "Make not required", 4 => "Remove", 5 => "Give your tab a name.")), "method");
        // line 16
        echo "
";
        // line 39
        echo "


<div id=\"fieldlayoutform\" class=\"fieldlayoutform\">
    ";
        // line 43
        if (((isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 43, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 43, $this->source); })()), "id", array()))) {
            // line 44
            echo "        <input type=\"hidden\" name=\"fieldLayoutId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 44, $this->source); })()), "id", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 46
        echo "
    <h2 class=\"first\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Design your field layout", "app"), "html", null, true);
        echo "</h2>

    ";
        // line 49
        if (array_key_exists("instructions", $context)) {
            // line 50
            echo "        <div class=\"instructions\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 50, $this->source); })())), "html", null, true);
            echo "</div>
    ";
        }
        // line 52
        echo "
    <div class=\"fld-tabs\">
        ";
        // line 54
        if ((isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "            ";
            $context["macros"] = $this;
            // line 56
            echo "
            ";
            // line 57
            if ((isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 57, $this->source); })())) {
                // line 58
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 58, $this->source); })()), "getTabs", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 59
                    echo "                    ";
                    echo $context["macros"]->macro_tab((isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 59, $this->source); })()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "name", array()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "getFields", array(), "method"));
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "            ";
            } else {
                // line 62
                echo "                ";
                echo $context["macros"]->macro_tab((isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 62, $this->source); })()), (isset($context["pretendTabName"]) || array_key_exists("pretendTabName", $context) ? $context["pretendTabName"] : (function () { throw new Twig_Error_Runtime('Variable "pretendTabName" does not exist.', 62, $this->source); })()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 62, $this->source); })()), "getFields", array(), "method"));
                echo "
            ";
            }
            // line 64
            echo "        ";
        }
        // line 65
        echo "    </div>

    ";
        // line 67
        if ((isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 67, $this->source); })())) {
            // line 68
            echo "        <div class=\"newtabbtn-container\">
            <div class=\"btn add icon\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New Tab", "app"), "html", null, true);
            echo "</div>
            <h3>";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("…Or use one of your field groups as a starting point:", "app"), "html", null, true);
            echo "</h3>
        </div>
    ";
        }
        // line 73
        echo "
    <div class=\"unusedfields\">
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 76
            echo "            ";
            $context["totalUnselected"] = 0;
            // line 77
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 78
                echo "                ";
                if (( !(isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 78, $this->source); })()) || !twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 78, $this->source); })()), "getFieldIds", array(), "method")))) {
                    // line 79
                    echo "                    ";
                    $context["totalUnselected"] = ((isset($context["totalUnselected"]) || array_key_exists("totalUnselected", $context) ? $context["totalUnselected"] : (function () { throw new Twig_Error_Runtime('Variable "totalUnselected" does not exist.', 79, $this->source); })()) + 1);
                    // line 80
                    echo "                ";
                }
                // line 81
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
            <div class=\"fld-tab unused";
            // line 83
            if (((isset($context["totalUnselected"]) || array_key_exists("totalUnselected", $context) ? $context["totalUnselected"] : (function () { throw new Twig_Error_Runtime('Variable "totalUnselected" does not exist.', 83, $this->source); })()) == 0)) {
                echo " hidden";
            }
            echo "\">
                <div class=\"tabs\">
                    <div class=\"tab sel";
            // line 85
            if ((isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 85, $this->source); })())) {
                echo " draggable";
            }
            echo "\"><span>";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "name", array()), "html", null, true);
            echo "</span></div>
                </div>
                <div class=\"fld-tabcontent\">
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 89
                echo "                        ";
                $context["selected"] = ((isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 89, $this->source); })()) && twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldLayout"]) || array_key_exists("fieldLayout", $context) ? $context["fieldLayout"] : (function () { throw new Twig_Error_Runtime('Variable "fieldLayout" does not exist.', 89, $this->source); })()), "getFieldIds", array(), "method")));
                // line 90
                echo "                        <div class=\"fld-field unused";
                if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 90, $this->source); })())) {
                    echo " hidden";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), "html", null, true);
                echo "\">
                            <span title=\"";
                // line 91
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "handle", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()), "site"), "html", null, true);
                echo "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "    </div>

</div>

";
        // line 101
        ob_start();
        // line 102
        echo "    var initFLD = function() {
        new Craft.FieldLayoutDesigner('#";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array("fieldlayoutform")), "html", null, true);
        echo "', {
            customizableTabs: ";
        // line 104
        echo (((isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 104, $this->source); })())) ? ("true") : ("false"));
        echo ",
            fieldInputName: '";
        // line 105
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputName')->getCallable(), array("fieldLayout[__TAB_NAME__][]")), "js"), "html", null, true);
        echo "',
            requiredFieldInputName: '";
        // line 106
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputName')->getCallable(), array("requiredFields[]")), "js"), "html", null, true);
        echo "'
        });
    };

    ";
        // line 110
        if (array_key_exists("tab", $context)) {
            // line 111
            echo "
        var \$fldTab = \$('#";
            // line 112
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array(("tab-" . (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new Twig_Error_Runtime('Variable "tab" does not exist.', 112, $this->source); })())))), "html", null, true);
            echo "');

        if (\$fldTab.hasClass('sel'))
        {
            initFLD();
        }
        else
        {
            \$fldTab.on('activate.fld', function() {
                initFLD();
                \$fldTab.off('activate.fld');
            });
        }

    ";
        } else {
            // line 127
            echo "
        initFLD();

    ";
        }
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
    }

    // line 17
    public function macro_tab($__customizableTabs__ = null, $__tabName__ = null, $__tabFields__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "customizableTabs" => $__customizableTabs__,
            "tabName" => $__tabName__,
            "tabFields" => $__tabFields__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "    <div class=\"fld-tab\">
        <div class=\"tabs\">
            <div class=\"tab sel";
            // line 20
            if ((isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 20, $this->source); })())) {
                echo " draggable";
            }
            echo "\">
                <span>";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["tabName"]) || array_key_exists("tabName", $context) ? $context["tabName"] : (function () { throw new Twig_Error_Runtime('Variable "tabName" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "</span>
                ";
            // line 22
            if ((isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context) ? $context["customizableTabs"] : (function () { throw new Twig_Error_Runtime('Variable "customizableTabs" does not exist.', 22, $this->source); })())) {
                // line 23
                echo "                    <a class=\"settings icon\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Edit", "app"), "html", null, true);
                echo "\"></a>
                ";
            }
            // line 25
            echo "            </div>
        </div>
        <div class=\"fld-tabcontent\">
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabFields"]) || array_key_exists("tabFields", $context) ? $context["tabFields"] : (function () { throw new Twig_Error_Runtime('Variable "tabFields" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 29
                echo "                <div class=\"fld-field";
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "required", array())) {
                    echo " fld-required";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), "html", null, true);
                echo "\">
                    <a class=\"settings icon\" title=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Edit", "app"), "html", null, true);
                echo "\"></a>
                    <span title=\"";
                // line 31
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "handle", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()), "site"), "html", null, true);
                echo "</span>
                    <input class=\"id-input\" type=\"hidden\" name=\"fieldLayout[";
                // line 32
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["tabName"]) || array_key_exists("tabName", $context) ? $context["tabName"] : (function () { throw new Twig_Error_Runtime('Variable "tabName" does not exist.', 32, $this->source); })()), "url"), "html", null, true);
                echo "][]\" value=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), "html", null, true);
                echo "\">
                    ";
                // line 33
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "required", array())) {
                    echo "<input class=\"required-input\" type=\"hidden\" name=\"requiredFields[]\" value=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), "html", null, true);
                    echo "\">";
                }
                // line 34
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_includes/fieldlayoutdesigner";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 36,  359 => 34,  353 => 33,  347 => 32,  341 => 31,  337 => 30,  328 => 29,  324 => 28,  319 => 25,  313 => 23,  311 => 22,  307 => 21,  301 => 20,  297 => 18,  283 => 17,  274 => 127,  256 => 112,  253 => 111,  251 => 110,  244 => 106,  240 => 105,  236 => 104,  232 => 103,  229 => 102,  227 => 101,  221 => 97,  213 => 94,  202 => 91,  193 => 90,  190 => 89,  186 => 88,  176 => 85,  169 => 83,  166 => 82,  160 => 81,  157 => 80,  154 => 79,  151 => 78,  146 => 77,  143 => 76,  139 => 75,  135 => 73,  129 => 70,  125 => 69,  122 => 68,  120 => 67,  116 => 65,  113 => 64,  107 => 62,  104 => 61,  95 => 59,  90 => 58,  88 => 57,  85 => 56,  82 => 55,  80 => 54,  76 => 52,  70 => 50,  68 => 49,  63 => 47,  60 => 46,  54 => 44,  52 => 43,  46 => 39,  43 => 16,  41 => 8,  38 => 7,  36 => 6,  33 => 5,  29 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if customizableTabs is not defined %}{% set customizableTabs = true %}{% endif %}
{% if not customizableTabs and pretendTabName is not defined %}
    {% set pretendTabName = \"Content\"|t('app') %}
{% endif %}

{% set groups = craft.app.fields.getAllGroups() %}

{% do view.registerTranslations('app', [
    \"Rename\",
    \"Delete\",
    \"Make required\",
    \"Make not required\",
    \"Remove\",
    \"Give your tab a name.\",
]) %}

{% macro tab(customizableTabs, tabName, tabFields) %}
    <div class=\"fld-tab\">
        <div class=\"tabs\">
            <div class=\"tab sel{% if customizableTabs %} draggable{% endif %}\">
                <span>{{ tabName }}</span>
                {% if customizableTabs %}
                    <a class=\"settings icon\" title=\"{{ 'Edit'|t('app') }}\"></a>
                {% endif %}
            </div>
        </div>
        <div class=\"fld-tabcontent\">
            {% for field in tabFields %}
                <div class=\"fld-field{% if field.required %} fld-required{% endif %}\" data-id=\"{{ field.id }}\">
                    <a class=\"settings icon\" title=\"{{ 'Edit'|t('app') }}\"></a>
                    <span title=\"{{ field.handle }}\">{{ field.name|t('site') }}</span>
                    <input class=\"id-input\" type=\"hidden\" name=\"fieldLayout[{{ tabName|e('url') }}][]\" value=\"{{ field.id }}\">
                    {% if field.required %}<input class=\"required-input\" type=\"hidden\" name=\"requiredFields[]\" value=\"{{ field.id }}\">{% endif %}
                </div>
            {% endfor %}
        </div>
    </div>
{% endmacro %}



<div id=\"fieldlayoutform\" class=\"fieldlayoutform\">
    {% if fieldLayout and fieldLayout.id %}
        <input type=\"hidden\" name=\"fieldLayoutId\" value=\"{{ fieldLayout.id }}\">
    {% endif %}

    <h2 class=\"first\">{{ \"Design your field layout\"|t('app') }}</h2>

    {% if instructions is defined %}
        <div class=\"instructions\">{{ instructions|md }}</div>
    {% endif %}

    <div class=\"fld-tabs\">
        {% if fieldLayout %}
            {% import _self as macros %}

            {% if customizableTabs %}
                {% for tab in fieldLayout.getTabs() %}
                    {{ macros.tab(customizableTabs, tab.name, tab.getFields()) }}
                {% endfor %}
            {% else %}
                {{ macros.tab(customizableTabs, pretendTabName, fieldLayout.getFields()) }}
            {% endif %}
        {% endif %}
    </div>

    {% if customizableTabs %}
        <div class=\"newtabbtn-container\">
            <div class=\"btn add icon\">{{ \"New Tab\"|t('app') }}</div>
            <h3>{{ \"…Or use one of your field groups as a starting point:\"|t('app') }}</h3>
        </div>
    {% endif %}

    <div class=\"unusedfields\">
        {% for group in groups %}
            {% set totalUnselected = 0 %}
            {% for field in group.fields %}
                {% if not fieldLayout or field.id not in fieldLayout.getFieldIds() %}
                    {% set totalUnselected = totalUnselected + 1 %}
                {% endif %}
            {% endfor %}

            <div class=\"fld-tab unused{% if totalUnselected == 0 %} hidden{% endif %}\">
                <div class=\"tabs\">
                    <div class=\"tab sel{% if customizableTabs %} draggable{% endif %}\"><span>{{ group.name }}</span></div>
                </div>
                <div class=\"fld-tabcontent\">
                    {% for field in group.fields %}
                        {% set selected = fieldLayout and field.id in fieldLayout.getFieldIds() %}
                        <div class=\"fld-field unused{% if selected %} hidden{% endif %}\" data-id=\"{{ field.id }}\">
                            <span title=\"{{ field.handle }}\">{{ field.name|t('site') }}</span>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>

</div>

{% js %}
    var initFLD = function() {
        new Craft.FieldLayoutDesigner('#{{ \"fieldlayoutform\"|namespaceInputId }}', {
            customizableTabs: {{ customizableTabs ? 'true' : 'false' }},
            fieldInputName: '{{ \"fieldLayout[__TAB_NAME__][]\"|namespaceInputName|e(\"js\") }}',
            requiredFieldInputName: '{{ \"requiredFields[]\"|namespaceInputName|e(\"js\") }}'
        });
    };

    {% if tab is defined %}

        var \$fldTab = \$('#{{ (\"tab-\"~tab)|namespaceInputId }}');

        if (\$fldTab.hasClass('sel'))
        {
            initFLD();
        }
        else
        {
            \$fldTab.on('activate.fld', function() {
                initFLD();
                \$fldTab.off('activate.fld');
            });
        }

    {% else %}

        initFLD();

    {% endif %}
{% endjs %}
", "_includes/fieldlayoutdesigner", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/fieldlayoutdesigner.html");
    }
}
