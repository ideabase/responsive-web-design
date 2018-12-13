<?php

/* settings/fields/_edit */
class __TwigTemplate_fe9980587dee2dce040e680557d0485034770137085665ba5e189cd4f5f59d72 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/fields/_edit", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["fullPageForm"] = true;
        // line 4
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/fields/_edit", 4);
        // line 121
        if ((twig_test_empty((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 121, $this->source); })())) || twig_test_empty(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 121, $this->source); })()), "handle", array())))) {
            // line 122
            ob_start();
            // line 123
            echo "        new Craft.HandleGenerator('#name', '#handle');
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 127
        ob_start();
        // line 128
        echo "    Craft.supportedTranslationMethods = ";
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["supportedTranslationMethods"]) || array_key_exists("supportedTranslationMethods", $context) ? $context["supportedTranslationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "supportedTranslationMethods" does not exist.', 128, $this->source); })()));
        echo ";

    Craft.updateTranslationMethodSettings = function(type, container) {
        var \$container = \$(container);
        if (!Craft.supportedTranslationMethods[type] || Craft.supportedTranslationMethods[type].length == 1) {
            \$container.addClass('hidden');
        } else {
            \$container.removeClass('hidden');
            // Rebuild the options based on the field type's supported translation methods
            \$container.find('select').html(
                (\$.inArray('none', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"none\">";
        // line 138
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app"), "js"), "html", null, true);
        echo "</option>' : '') +
                (\$.inArray('site', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"site\">";
        // line 139
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app"), "js"), "html", null, true);
        echo "</option>' : '') +
                (\$.inArray('siteGroup', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"site\">";
        // line 140
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app"), "js"), "html", null, true);
        echo "</option>' : '') +
                (\$.inArray('language', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"language\">";
        // line 141
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app"), "js"), "html", null, true);
        echo "</option>' : '') +
                (\$.inArray('custom', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"custom\">";
        // line 142
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app"), "js"), "html", null, true);
        echo "</option>' : '')
            );
        }
    }

    var \$fieldTypeInput = \$(\"#";
        // line 147
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array("type")), "js"), "html", null, true);
        echo "\"),
        \$translationSettings = \$(\"#";
        // line 148
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array("translation-settings")), "js"), "html", null, true);
        echo "\");

    \$fieldTypeInput.change(function(e) {
        Craft.updateTranslationMethodSettings(\$(this).val(), \$translationSettings);
    });
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" name=\"action\" value=\"fields/save-field\">
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction("settings/fields/{groupId}"), "html", null, true);
        echo "
    ";
        // line 10
        if ((array_key_exists("fieldId", $context) && (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "        <input type=\"hidden\" name=\"fieldId\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\">
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        echo $context["forms"]->macro_selectField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Group", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which group should this field be displayed in?", "app"), "id" => "group", "name" => "group", "options" =>         // line 20
(isset($context["groupOptions"]) || array_key_exists("groupOptions", $context) ? $context["groupOptions"] : (function () { throw new Twig_Error_Runtime('Variable "groupOptions" does not exist.', 20, $this->source); })()), "value" =>         // line 21
(isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new Twig_Error_Runtime('Variable "groupId" does not exist.', 21, $this->source); })())));
        // line 22
        echo "

    ";
        // line 24
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this field will be called in the CP.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 29
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 29, $this->source); })()), "name", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 30
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 30, $this->source); })()), "getErrors", array(0 => "name"), "method"), "required" => true, "autofocus" => true));
        // line 33
        echo "

    ";
        // line 35
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this field in the templates.", "app"), "id" => "handle", "class" => "code", "name" => "handle", "maxlength" => 64, "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 42
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 42, $this->source); })()), "handle", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 43
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 43, $this->source); })()), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 45
        echo "

    ";
        // line 47
        echo $context["forms"]->macro_textareaField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Instructions", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Helper text to guide the author.", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 53
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 53, $this->source); })()), "instructions", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 54
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 54, $this->source); })()), "getErrors", array(0 => "instructions"), "method")));
        // line 55
        echo "

    ";
        // line 57
        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Type", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What type of field is this?", "app"), "warning" => ((( !twig_test_empty(        // line 60
(isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 60, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 60, $this->source); })()), "hasErrors", array(0 => "type"), "method"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" =>         // line 63
(isset($context["fieldTypeOptions"]) || array_key_exists("fieldTypeOptions", $context) ? $context["fieldTypeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypeOptions" does not exist.', 63, $this->source); })()), "value" => get_class(        // line 64
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 64, $this->source); })())), "toggle" => true));
        // line 66
        echo "

    ";
        // line 68
        echo (isset($context["missingFieldPlaceholder"]) || array_key_exists("missingFieldPlaceholder", $context) ? $context["missingFieldPlaceholder"] : (function () { throw new Twig_Error_Runtime('Variable "missingFieldPlaceholder" does not exist.', 68, $this->source); })());
        echo "

    ";
        // line 70
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 70, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            // line 71
            echo "        ";
            $context["translationMethods"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 71, $this->source); })()), "supportedTranslationMethods", array());
            // line 72
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 72, $this->source); })())) > 1)) {
                // line 73
                echo "            <div id=\"translation-settings\">
                ";
                // line 74
                echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Method", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How should this field’s values be translated?", "app"), "id" => "translation-method", "name" => "translationMethod", "options" => array_filter(array(0 => ((twig_in_filter("none",                 // line 80
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 80, $this->source); })()))) ? (array("value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app"))) : ("")), 1 => ((twig_in_filter("site",                 // line 81
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 81, $this->source); })()))) ? (array("value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app"))) : ("")), 2 => ((twig_in_filter("siteGroup",                 // line 82
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 82, $this->source); })()))) ? (array("value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app"))) : ("")), 3 => ((twig_in_filter("language",                 // line 83
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 83, $this->source); })()))) ? (array("value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app"))) : ("")), 4 => ((twig_in_filter("custom",                 // line 84
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 84, $this->source); })()))) ? (array("value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app"))) : ("")))), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 86
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 86, $this->source); })()), "translationMethod", array()), "toggle" => true, "targetPrefix" => "translation-method-"));
                // line 89
                echo "

                ";
                // line 91
                if (twig_in_filter("custom", (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 91, $this->source); })()))) {
                    // line 92
                    echo "                    <div id=\"translation-method-custom\" ";
                    if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 92, $this->source); })()), "translationMethod", array()) != "custom")) {
                        echo "class=\"hidden\"";
                    }
                    echo ">
                        ";
                    // line 93
                    echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Key Format", "app"), "instructions" => "Template that defines the field’s custom “translation key” format. Field values will be copied to all sites that produce the same key. For example, to make the field translatable based on the first two characters of the site handle, you could enter `{site.handle[:2]}`.", "id" => "translation-key-format", "name" => "translationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 98
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 98, $this->source); })()), "translationKeyFormat", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 99
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 99, $this->source); })()), "getErrors", array(0 => "translationKeyFormat"), "method")));
                    // line 100
                    echo "
                    </div>
                ";
                }
                // line 103
                echo "            </div>
        ";
            }
            // line 105
            echo "    ";
        }
        // line 106
        echo "
    <hr>

    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allFieldTypes"]) || array_key_exists("allFieldTypes", $context) ? $context["allFieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "allFieldTypes" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 110
            echo "        ";
            $context["isCurrent"] = ($context["type"] == get_class((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 110, $this->source); })())));
            // line 111
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('id')->getCallable(), array($context["type"])), "html", null, true);
            echo "\"";
            if ( !(isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new Twig_Error_Runtime('Variable "isCurrent" does not exist.', 111, $this->source); })())) {
                echo " class=\"hidden\"";
            }
            echo ">
            ";
            // line 112
            $_namespace = (("types[" . $context["type"]) . "]");
            if ($_namespace) {
                $_originalNamespace = Craft::$app->getView()->getNamespace();
                Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 113
                    echo "                ";
                    $context["_field"] = (((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new Twig_Error_Runtime('Variable "isCurrent" does not exist.', 113, $this->source); })())) ? ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 113, $this->source); })())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 113, $this->source); })()), "app", array()), "fields", array()), "createField", array(0 => $context["type"]), "method")));
                    // line 114
                    echo "                ";
                    echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["_field"]) || array_key_exists("_field", $context) ? $context["_field"] : (function () { throw new Twig_Error_Runtime('Variable "_field" does not exist.', 114, $this->source); })()), "getSettingsHtml", array(), "method");
                    echo "
            ";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo Craft::$app->getView()->namespaceInputs(ob_get_clean(), $_namespace);
                Craft::$app->getView()->setNamespace($_originalNamespace);
            } else {
                // line 113
                echo "                ";
                $context["_field"] = (((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new Twig_Error_Runtime('Variable "isCurrent" does not exist.', 113, $this->source); })())) ? ((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 113, $this->source); })())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 113, $this->source); })()), "app", array()), "fields", array()), "createField", array(0 => $context["type"]), "method")));
                // line 114
                echo "                ";
                echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["_field"]) || array_key_exists("_field", $context) ? $context["_field"] : (function () { throw new Twig_Error_Runtime('Variable "_field" does not exist.', 114, $this->source); })()), "getSettingsHtml", array(), "method");
                echo "
            ";
            }
            unset($_originalNamespace, $_namespace);
            // line 116
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "settings/fields/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 116,  261 => 114,  258 => 113,  245 => 114,  242 => 113,  235 => 112,  226 => 111,  223 => 110,  219 => 109,  214 => 106,  211 => 105,  207 => 103,  202 => 100,  200 => 99,  199 => 98,  198 => 93,  191 => 92,  189 => 91,  185 => 89,  183 => 86,  182 => 84,  181 => 83,  180 => 82,  179 => 81,  178 => 80,  177 => 74,  174 => 73,  171 => 72,  168 => 71,  166 => 70,  161 => 68,  157 => 66,  155 => 64,  154 => 63,  153 => 60,  152 => 57,  148 => 55,  146 => 54,  145 => 53,  144 => 47,  140 => 45,  138 => 43,  137 => 42,  136 => 35,  132 => 33,  130 => 30,  129 => 29,  128 => 24,  124 => 22,  122 => 21,  121 => 20,  120 => 14,  117 => 13,  111 => 11,  109 => 10,  105 => 9,  102 => 8,  99 => 7,  95 => 1,  86 => 148,  82 => 147,  74 => 142,  70 => 141,  66 => 140,  62 => 139,  58 => 138,  44 => 128,  42 => 127,  37 => 123,  35 => 122,  33 => 121,  31 => 4,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set fullPageForm = true %}

{% import \"_includes/forms\" as forms %}


{% block content %}
    <input type=\"hidden\" name=\"action\" value=\"fields/save-field\">
    {{ redirectInput('settings/fields/{groupId}') }}
    {% if fieldId is defined and fieldId %}
        <input type=\"hidden\" name=\"fieldId\" value=\"{{ fieldId }}\">
    {% endif %}

    {{ forms.selectField({
        first: true,
        label: \"Group\"|t('app'),
        instructions: \"Which group should this field be displayed in?\"|t('app'),
        id: 'group',
        name: 'group',
        options: groupOptions,
        value: groupId
    }) }}

    {{ forms.textField({
        label: \"Name\"|t('app'),
        instructions: \"What this field will be called in the CP.\"|t('app'),
        id: 'name',
        name: 'name',
        value: field.name,
        errors: field.getErrors('name'),
        required: true,
        autofocus: true
    }) }}

    {{ forms.textField({
        label: \"Handle\"|t('app'),
        instructions: \"How you’ll refer to this field in the templates.\"|t('app'),
        id: 'handle',
        class: 'code',
        name: 'handle',
        maxlength: 64,
        value: field.handle,
        errors: field.getErrors('handle'),
        required: true,
    }) }}

    {{ forms.textareaField({
        label: \"Instructions\"|t('app'),
        instructions: \"Helper text to guide the author.\"|t('app'),
        id: 'instructions',
        class: 'nicetext',
        name: 'instructions',
        value: field.instructions,
        errors: field.getErrors('instructions'),
    }) }}

    {{ forms.selectField({
        label: \"Field Type\"|t('app'),
        instructions: \"What type of field is this?\"|t('app'),
        warning: (fieldId is not empty and not field.hasErrors('type') ? \"Changing this may result in data loss.\"|t('app')),
        id: 'type',
        name: 'type',
        options: fieldTypeOptions,
        value: className(field),
        toggle: true
    }) }}

    {{ missingFieldPlaceholder|raw }}

    {% if craft.app.getIsMultiSite() %}
        {% set translationMethods = field.supportedTranslationMethods %}
        {% if translationMethods|length > 1 %}
            <div id=\"translation-settings\">
                {{ forms.selectField({
                    label: \"Translation Method\"|t('app'),
                    instructions: \"How should this field’s values be translated?\"|t('app'),
                    id: 'translation-method',
                    name: 'translationMethod',
                    options: [
                        'none' in translationMethods ? { value: 'none', label: \"Not translatable\"|t('app') },
                        'site' in translationMethods ? { value: 'site', label: \"Translate for each site\"|t('app') },
                        'siteGroup' in translationMethods ? { value: 'siteGroup', label: \"Translate for each site group\"|t('app') },
                        'language' in translationMethods ? { value: 'language', label: \"Translate for each language\"|t('app') },
                        'custom' in translationMethods ? { value: 'custom', label: \"Custom…\"|t('app') }
                    ]|filter,
                    value: field.translationMethod,
                    toggle: true,
                    targetPrefix: 'translation-method-'
                }) }}

                {% if 'custom' in translationMethods %}
                    <div id=\"translation-method-custom\" {% if field.translationMethod != 'custom' %}class=\"hidden\"{% endif %}>
                        {{ forms.textField({
                            label: \"Translation Key Format\"|t('app'),
                            instructions: \"Template that defines the field’s custom “translation key” format. Field values will be copied to all sites that produce the same key. For example, to make the field translatable based on the first two characters of the site handle, you could enter `{site.handle[:2]}`.\",
                            id: 'translation-key-format',
                            name: 'translationKeyFormat',
                            value: field.translationKeyFormat,
                            errors: field.getErrors('translationKeyFormat')
                        }) }}
                    </div>
                {% endif %}
            </div>
        {% endif %}
    {% endif %}

    <hr>

    {% for type in allFieldTypes %}
        {% set isCurrent = (type == className(field)) %}
        <div id=\"{{ type|id }}\"{% if not isCurrent %} class=\"hidden\"{% endif %}>
            {% namespace 'types['~type~']' %}
                {% set _field = isCurrent ? field : craft.app.fields.createField(type) %}
                {{ _field.getSettingsHtml()|raw }}
            {% endnamespace %}
        </div>
    {% endfor %}
{% endblock %}


{% if field is empty or field.handle is empty %}
    {% js %}
        new Craft.HandleGenerator('#name', '#handle');
    {% endjs %}
{% endif %}

{% js %}
    Craft.supportedTranslationMethods = {{ supportedTranslationMethods|json_encode|raw }};

    Craft.updateTranslationMethodSettings = function(type, container) {
        var \$container = \$(container);
        if (!Craft.supportedTranslationMethods[type] || Craft.supportedTranslationMethods[type].length == 1) {
            \$container.addClass('hidden');
        } else {
            \$container.removeClass('hidden');
            // Rebuild the options based on the field type's supported translation methods
            \$container.find('select').html(
                (\$.inArray('none', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"none\">{{ \"Not translatable\"|t('app')|e('js') }}</option>' : '') +
                (\$.inArray('site', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"site\">{{ \"Translate for each site\"|t('app')|e('js') }}</option>' : '') +
                (\$.inArray('siteGroup', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"site\">{{ \"Translate for each site group\"|t('app')|e('js') }}</option>' : '') +
                (\$.inArray('language', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"language\">{{ \"Translate for each language\"|t('app')|e('js') }}</option>' : '') +
                (\$.inArray('custom', Craft.supportedTranslationMethods[type]) != -1 ? '<option value=\"custom\">{{ \"Custom…\"|t('app')|e('js') }}</option>' : '')
            );
        }
    }

    var \$fieldTypeInput = \$(\"#{{ 'type'|namespaceInputId|e('js') }}\"),
        \$translationSettings = \$(\"#{{ 'translation-settings'|namespaceInputId|e('js') }}\");

    \$fieldTypeInput.change(function(e) {
        Craft.updateTranslationMethodSettings(\$(this).val(), \$translationSettings);
    });
{% endjs %}
", "settings/fields/_edit", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/fields/_edit.html");
    }
}
