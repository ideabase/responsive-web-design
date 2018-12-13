<?php

/* _components/fieldtypes/Matrix/settings */
class __TwigTemplate_8347a183ba9a444f598a9dcba5615085efd560110b93892bece8e73a3fed9492 extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Matrix/settings", 1);
        // line 2
        echo "

";
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"mc-sidebar block-types\">
        <div class=\"col-inner-container\">
            <div class=\"heading\">
                <h5>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Block Types", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"items\">
                <div class=\"blocktypes\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 12, $this->source); })()), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 13
            echo "                        <div class=\"matrixconfigitem mci-blocktype";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "hasFieldErrors", array())) {
                echo " error";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "id", array()), "html", null, true);
            echo "\"";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "hasErrors", array(), "method")) {
                echo " data-errors=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "getErrors", array(), "method")), "html", null, true);
                echo "\"";
            }
            echo ">
                            <div class=\"name\">";
            // line 14
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array())) {
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array()), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
                            <div class=\"handle code\">";
            // line 15
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array())) {
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array()), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
                            <div class=\"actions\">
                                <a class=\"move icon\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
            echo "\" role=\"button\"></a>
                                <a class=\"settings icon";
            // line 18
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "hasErrors", array(), "method")) {
                echo " error";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
            echo "\" role=\"button\"></a>
                            </div>
                            <input class=\"hidden\" name=\"blockTypes[";
            // line 20
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "id", array()), "html", null, true);
            echo "][name]\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array()), "html", null, true);
            echo "\">
                            <input class=\"hidden\" name=\"blockTypes[";
            // line 21
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "id", array()), "html", null, true);
            echo "][handle]\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array()), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </div>
                <div class=\"btn add icon\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New block type", "app"), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"mc-sidebar fields\">
        <div class=\"col-inner-container hidden\">
            <div class=\"heading\">
                <h5>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Fields", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"items\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 35, $this->source); })()), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 36
            echo "                    <div data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "id", array()), "html", null, true);
            echo "\" class=\"hidden\">
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 38
                echo "                            <div class=\"matrixconfigitem mci-field";
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "hasErrors", array(), "method")) {
                    echo " error";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), "html", null, true);
                echo "\">
                                <div class=\"name";
                // line 39
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                // line 40
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()) && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()) != "__blank__"))) {
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()), "html", null, true);
                } else {
                    echo "<em class=\"light\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("(blank)", "app"), "html", null, true);
                    echo "</em>";
                }
                // line 41
                echo "&nbsp;</div>
                                <div class=\"handle code\">";
                // line 42
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "handle", array()), "html", null, true);
                echo "&nbsp;</div>
                                <div class=\"actions\">
                                    <a class=\"move icon\" title=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" role=\"button\"></a>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                <div class=\"btn add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New field", "app"), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"field-settings\">
        <div class=\"col-inner-container hidden\">
            <div class=\"heading\">
                <h5>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Field Settings", "app"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"items\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 60, $this->source); })()), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 61
            echo "                    <div data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 63
                echo "                            ";
                $context["fieldId"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array());
                // line 64
                echo "                            <div data-id=\"";
                echo twig_escape_filter($this->env, (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 64, $this->source); })()), "html", null, true);
                echo "\" class=\"hidden\">
                                ";
                // line 65
                $_namespace = (((("blockTypes[" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 65, $this->source); })())) . "]");
                if ($_namespace) {
                    $_originalNamespace = Craft::$app->getView()->getNamespace();
                    Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 66
                        echo "                                    ";
                        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 70
$context["field"], "name", array()) != "__blank__")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array())) : ("")), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 71
$context["field"], "getErrors", array(0 => "name"), "method"), "autofocus" => true));
                        // line 73
                        echo "

                                    ";
                        // line 75
                        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "class" => "code", "name" => "handle", "maxlength" => 64, "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 81
$context["field"], "handle", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 82
$context["field"], "getErrors", array(0 => "handle"), "method"), "required" => true));
                        // line 84
                        echo "

                                    ";
                        // line 86
                        echo $context["forms"]->macro_textareaField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Instructions", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 91
$context["field"], "instructions", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 92
$context["field"], "getErrors", array(0 => "instructions"), "method")));
                        // line 93
                        echo "

                                    ";
                        // line 95
                        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("This field is required", "app"), "id" => "required", "name" => "required", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 99
$context["field"], "required", array())));
                        // line 100
                        echo "

                                    ";
                        // line 102
                        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Type", "app"), "warning" => ((( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 104
$context["field"], "getIsNew", array(), "method") &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "hasErrors", array(0 => "type"), "method"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 107
$context["field"], "id", array()) && (twig_slice($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), 0, 3) != "new"))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypes" does not exist.', 107, $this->source); })()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), array(), "array")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypes" does not exist.', 107, $this->source); })()), "new", array()))), "value" => get_class(                        // line 108
$context["field"]), "errors" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 109
$context["field"], "getErrors", array(0 => "type"), "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getErrors", array(0 => "type"), "method")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getErrors", array(0 => "type"), "method")) : (null))));
                        // line 110
                        echo "

                                    ";
                        // line 112
                        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 112, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
                            // line 113
                            echo "                                        ";
                            $context["translationMethods"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "supportedTranslationMethods", array());
                            // line 114
                            echo "                                        ";
                            if ((twig_length_filter($this->env, (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 114, $this->source); })())) > 1)) {
                                // line 115
                                echo "                                            <div id=\"translation-settings\">
                                                ";
                                // line 116
                                echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Method", "app"), "id" => "translation-method", "name" => "translationMethod", "options" => array_filter(array(0 => ((twig_in_filter("none",                                 // line 121
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 121, $this->source); })()))) ? (array("value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app"))) : ("")), 1 => ((twig_in_filter("site",                                 // line 122
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 122, $this->source); })()))) ? (array("value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app"))) : ("")), 2 => ((twig_in_filter("siteGroup",                                 // line 123
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 123, $this->source); })()))) ? (array("value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app"))) : ("")), 3 => ((twig_in_filter("language",                                 // line 124
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 124, $this->source); })()))) ? (array("value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app"))) : ("")), 4 => ((twig_in_filter("custom",                                 // line 125
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 125, $this->source); })()))) ? (array("value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app"))) : ("")))), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                 // line 127
$context["field"], "translationMethod", array()), "toggle" => true, "targetPrefix" => "translation-method-"));
                                // line 130
                                echo "

                                                ";
                                // line 132
                                if (twig_in_filter("custom", (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 132, $this->source); })()))) {
                                    // line 133
                                    echo "                                                    <div id=\"translation-method-custom\" ";
                                    if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "translationMethod", array()) != "custom")) {
                                        echo "class=\"hidden\"";
                                    }
                                    echo ">
                                                        ";
                                    // line 134
                                    echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Key Format", "app"), "id" => "translation-key-format", "name" => "translationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                     // line 138
$context["field"], "translationKeyFormat", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                     // line 139
$context["field"], "getErrors", array(0 => "translationKeyFormat"), "method")));
                                    // line 140
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 143
                                echo "                                            </div>
                                        ";
                            }
                            // line 145
                            echo "                                    ";
                        }
                        // line 146
                        echo "                                ";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo Craft::$app->getView()->namespaceInputs(ob_get_clean(), $_namespace);
                    Craft::$app->getView()->setNamespace($_originalNamespace);
                } else {
                    // line 66
                    echo "                                    ";
                    echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "id" => "name", "name" => "name", "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 70
$context["field"], "name", array()) != "__blank__")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array())) : ("")), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 71
$context["field"], "getErrors", array(0 => "name"), "method"), "autofocus" => true));
                    // line 73
                    echo "

                                    ";
                    // line 75
                    echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "id" => "handle", "class" => "code", "name" => "handle", "maxlength" => 64, "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 81
$context["field"], "handle", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 82
$context["field"], "getErrors", array(0 => "handle"), "method"), "required" => true));
                    // line 84
                    echo "

                                    ";
                    // line 86
                    echo $context["forms"]->macro_textareaField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Instructions", "app"), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 91
$context["field"], "instructions", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 92
$context["field"], "getErrors", array(0 => "instructions"), "method")));
                    // line 93
                    echo "

                                    ";
                    // line 95
                    echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("This field is required", "app"), "id" => "required", "name" => "required", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 99
$context["field"], "required", array())));
                    // line 100
                    echo "

                                    ";
                    // line 102
                    echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Field Type", "app"), "warning" => ((( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 104
$context["field"], "getIsNew", array(), "method") &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "hasErrors", array(0 => "type"), "method"))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : ("")), "id" => "type", "name" => "type", "options" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 107
$context["field"], "id", array()) && (twig_slice($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), 0, 3) != "new"))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypes" does not exist.', 107, $this->source); })()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), array(), "array")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["fieldTypes"]) || array_key_exists("fieldTypes", $context) ? $context["fieldTypes"] : (function () { throw new Twig_Error_Runtime('Variable "fieldTypes" does not exist.', 107, $this->source); })()), "new", array()))), "value" => get_class(                    // line 108
$context["field"]), "errors" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 109
$context["field"], "getErrors", array(0 => "type"), "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getErrors", array(0 => "type"), "method")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getErrors", array(0 => "type"), "method")) : (null))));
                    // line 110
                    echo "

                                    ";
                    // line 112
                    if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 112, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
                        // line 113
                        echo "                                        ";
                        $context["translationMethods"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "supportedTranslationMethods", array());
                        // line 114
                        echo "                                        ";
                        if ((twig_length_filter($this->env, (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 114, $this->source); })())) > 1)) {
                            // line 115
                            echo "                                            <div id=\"translation-settings\">
                                                ";
                            // line 116
                            echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Method", "app"), "id" => "translation-method", "name" => "translationMethod", "options" => array_filter(array(0 => ((twig_in_filter("none",                             // line 121
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 121, $this->source); })()))) ? (array("value" => "none", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Not translatable", "app"))) : ("")), 1 => ((twig_in_filter("site",                             // line 122
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 122, $this->source); })()))) ? (array("value" => "site", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site", "app"))) : ("")), 2 => ((twig_in_filter("siteGroup",                             // line 123
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 123, $this->source); })()))) ? (array("value" => "siteGroup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each site group", "app"))) : ("")), 3 => ((twig_in_filter("language",                             // line 124
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 124, $this->source); })()))) ? (array("value" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translate for each language", "app"))) : ("")), 4 => ((twig_in_filter("custom",                             // line 125
(isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 125, $this->source); })()))) ? (array("value" => "custom", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Custom…", "app"))) : ("")))), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                             // line 127
$context["field"], "translationMethod", array()), "toggle" => true, "targetPrefix" => "translation-method-"));
                            // line 130
                            echo "

                                                ";
                            // line 132
                            if (twig_in_filter("custom", (isset($context["translationMethods"]) || array_key_exists("translationMethods", $context) ? $context["translationMethods"] : (function () { throw new Twig_Error_Runtime('Variable "translationMethods" does not exist.', 132, $this->source); })()))) {
                                // line 133
                                echo "                                                    <div id=\"translation-method-custom\" ";
                                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "translationMethod", array()) != "custom")) {
                                    echo "class=\"hidden\"";
                                }
                                echo ">
                                                        ";
                                // line 134
                                echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Translation Key Format", "app"), "id" => "translation-key-format", "name" => "translationKeyFormat", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                 // line 138
$context["field"], "translationKeyFormat", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                                 // line 139
$context["field"], "getErrors", array(0 => "translationKeyFormat"), "method")));
                                // line 140
                                echo "
                                                    </div>
                                                ";
                            }
                            // line 143
                            echo "                                            </div>
                                        ";
                        }
                        // line 145
                        echo "                                    ";
                    }
                    // line 146
                    echo "                                ";
                }
                unset($_originalNamespace, $_namespace);
                // line 147
                echo "
                                <hr>

                                <div class=\"fieldtype-settings\">
                                    <div>
                                        ";
                // line 152
                $_namespace = (((("blockTypes[" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new Twig_Error_Runtime('Variable "fieldId" does not exist.', 152, $this->source); })())) . "][typesettings]");
                if ($_namespace) {
                    $_originalNamespace = Craft::$app->getView()->getNamespace();
                    Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 153
                        echo "                                            ";
                        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getSettingsHtml", array(), "method");
                        echo "
                                        ";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo Craft::$app->getView()->namespaceInputs(ob_get_clean(), $_namespace);
                    Craft::$app->getView()->setNamespace($_originalNamespace);
                } else {
                    echo "                                            ";
                    echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "getSettingsHtml", array(), "method");
                    echo "
                                        ";
                }
                unset($_originalNamespace, $_namespace);
                // line 155
                echo "                                    </div>
                                </div>

                                <hr>

                                <a class=\"error delete\">";
                // line 160
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "</a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "            </div>
        </div>
    </div>
";
        $context["blockTypeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 169
        echo "
<div id=\"matrix-configurator\" class=\"matrix-configurator\">
    ";
        // line 171
        echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Configuration", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of.", "app"), "name" => "config"),         // line 175
(isset($context["blockTypeInput"]) || array_key_exists("blockTypeInput", $context) ? $context["blockTypeInput"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypeInput" does not exist.', 175, $this->source); })()));
        echo "
</div>

";
        // line 178
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 178, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            // line 179
            echo "    ";
            echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Manage blocks on a per-site basis", "app"), "id" => "localize-blocks", "name" => "localizeBlocks", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 183
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 183, $this->source); })()), "localizeBlocks", array())));
            // line 184
            echo "
";
        }
        // line 186
        echo "
";
        // line 187
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Min Blocks", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The minimum number of blocks the field is allowed to have.", "app"), "id" => "minBlocks", "name" => "minBlocks", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 192
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 192, $this->source); })()), "minBlocks", array()), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 194
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 194, $this->source); })()), "getErrors", array(0 => "minBlocks"), "method")));
        // line 195
        echo "

";
        // line 197
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Blocks", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of blocks the field is allowed to have.", "app"), "id" => "maxBlocks", "name" => "maxBlocks", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 202
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 202, $this->source); })()), "maxBlocks", array()), "size" => 3, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 204
(isset($context["matrixField"]) || array_key_exists("matrixField", $context) ? $context["matrixField"] : (function () { throw new Twig_Error_Runtime('Variable "matrixField" does not exist.', 204, $this->source); })()), "getErrors", array(0 => "maxBlocks"), "method")));
        // line 205
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 205,  523 => 204,  522 => 202,  521 => 197,  517 => 195,  515 => 194,  514 => 192,  513 => 187,  510 => 186,  506 => 184,  504 => 183,  502 => 179,  500 => 178,  494 => 175,  493 => 171,  489 => 169,  483 => 165,  476 => 163,  467 => 160,  460 => 155,  441 => 153,  434 => 152,  427 => 147,  423 => 146,  420 => 145,  416 => 143,  411 => 140,  409 => 139,  408 => 138,  407 => 134,  400 => 133,  398 => 132,  394 => 130,  392 => 127,  391 => 125,  390 => 124,  389 => 123,  388 => 122,  387 => 121,  386 => 116,  383 => 115,  380 => 114,  377 => 113,  375 => 112,  371 => 110,  369 => 109,  368 => 108,  367 => 107,  366 => 104,  365 => 102,  361 => 100,  359 => 99,  358 => 95,  354 => 93,  352 => 92,  351 => 91,  350 => 86,  346 => 84,  344 => 82,  343 => 81,  342 => 75,  338 => 73,  336 => 71,  335 => 70,  333 => 66,  323 => 146,  320 => 145,  316 => 143,  311 => 140,  309 => 139,  308 => 138,  307 => 134,  300 => 133,  298 => 132,  294 => 130,  292 => 127,  291 => 125,  290 => 124,  289 => 123,  288 => 122,  287 => 121,  286 => 116,  283 => 115,  280 => 114,  277 => 113,  275 => 112,  271 => 110,  269 => 109,  268 => 108,  267 => 107,  266 => 104,  265 => 102,  261 => 100,  259 => 99,  258 => 95,  254 => 93,  252 => 92,  251 => 91,  250 => 86,  246 => 84,  244 => 82,  243 => 81,  242 => 75,  238 => 73,  236 => 71,  235 => 70,  233 => 66,  226 => 65,  221 => 64,  218 => 63,  214 => 62,  209 => 61,  205 => 60,  199 => 57,  188 => 50,  181 => 48,  171 => 44,  166 => 42,  163 => 41,  155 => 40,  150 => 39,  141 => 38,  137 => 37,  132 => 36,  128 => 35,  122 => 32,  112 => 25,  109 => 24,  98 => 21,  92 => 20,  83 => 18,  79 => 17,  70 => 15,  62 => 14,  47 => 13,  43 => 12,  36 => 8,  31 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}


{% set blockTypeInput %}
    <div class=\"mc-sidebar block-types\">
        <div class=\"col-inner-container\">
            <div class=\"heading\">
                <h5>{{ \"Block Types\"|t('app') }}</h5>
            </div>
            <div class=\"items\">
                <div class=\"blocktypes\">
                    {% for blockType in matrixField.getBlockTypes() %}
                        <div class=\"matrixconfigitem mci-blocktype{% if blockType.hasFieldErrors %} error{% endif %}\" data-id=\"{{ blockType.id }}\"{% if blockType.hasErrors() %} data-errors=\"{{ blockType.getErrors() | json_encode }}\"{% endif %}>
                            <div class=\"name\">{% if blockType.name %}{{ blockType.name }}{% else %}&nbsp;{% endif %}</div>
                            <div class=\"handle code\">{% if blockType.handle %}{{ blockType.handle }}{% else %}&nbsp;{% endif %}</div>
                            <div class=\"actions\">
                                <a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a>
                                <a class=\"settings icon{% if blockType.hasErrors() %} error{% endif %}\" title=\"{{ 'Settings'|t('app') }}\" role=\"button\"></a>
                            </div>
                            <input class=\"hidden\" name=\"blockTypes[{{ blockType.id }}][name]\" value=\"{{ blockType.name }}\">
                            <input class=\"hidden\" name=\"blockTypes[{{ blockType.id }}][handle]\" value=\"{{ blockType.handle }}\">
                        </div>
                    {% endfor %}
                </div>
                <div class=\"btn add icon\">{{ \"New block type\"|t('app') }}</div>
            </div>
        </div>
    </div>
    <div class=\"mc-sidebar fields\">
        <div class=\"col-inner-container hidden\">
            <div class=\"heading\">
                <h5>{{ \"Fields\"|t('app') }}</h5>
            </div>
            <div class=\"items\">
                {% for blockType in matrixField.getBlockTypes() %}
                    <div data-id=\"{{ blockType.id }}\" class=\"hidden\">
                        {% for field in blockType.getFields() %}
                            <div class=\"matrixconfigitem mci-field{% if field.hasErrors() %} error{% endif %}\" data-id=\"{{ field.id }}\">
                                <div class=\"name{% if field.required %} required{% endif %}\">
                                    {%- if field.name and field.name != '__blank__' %}{{ field.name }}{% else %}<em class=\"light\">{{ '(blank)'|t('app') }}</em>{% endif -%}
                                &nbsp;</div>
                                <div class=\"handle code\">{{ field.handle }}&nbsp;</div>
                                <div class=\"actions\">
                                    <a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
                <div class=\"btn add icon\">{{ \"New field\"|t('app') }}</div>
            </div>
        </div>
    </div>
    <div class=\"field-settings\">
        <div class=\"col-inner-container hidden\">
            <div class=\"heading\">
                <h5>{{ \"Field Settings\"|t('app') }}</h5>
            </div>
            <div class=\"items\">
                {% for blockType in matrixField.getBlockTypes() %}
                    <div data-id=\"{{ blockType.id }}\">
                        {% for field in blockType.getFields() %}
                            {% set fieldId = field.id %}
                            <div data-id=\"{{ fieldId }}\" class=\"hidden\">
                                {% namespace 'blockTypes['~blockType.id~'][fields]['~fieldId~']' %}
                                    {{ forms.textField({
                                        label: \"Name\"|t('app'),
                                        id: 'name',
                                        name: 'name',
                                        value: (field.name != '__blank__' ? field.name),
                                        errors: field.getErrors('name'),
                                        autofocus: true
                                    }) }}

                                    {{ forms.textField({
                                        label: \"Handle\"|t('app'),
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
                                        id: 'instructions',
                                        class: 'nicetext',
                                        name: 'instructions',
                                        value: field.instructions,
                                        errors: field.getErrors('instructions'),
                                    }) }}

                                    {{ forms.checkboxField({
                                        label: \"This field is required\"|t('app'),
                                        id: 'required',
                                        name: 'required',
                                        checked: field.required
                                    }) }}

                                    {{ forms.selectField({
                                        label: \"Field Type\"|t('app'),
                                        warning: (not field.getIsNew() and not field.hasErrors('type') ? \"Changing this may result in data loss.\"|t('app')),
                                        id: 'type',
                                        name: 'type',
                                        options: field.id and field.id[0:3] != 'new' ? fieldTypes[field.id] : fieldTypes.new,
                                        value: className(field),
                                        errors: field.getErrors('type') ?? null
                                    }) }}

                                    {% if craft.app.getIsMultiSite() %}
                                        {% set translationMethods = field.supportedTranslationMethods %}
                                        {% if translationMethods|length > 1 %}
                                            <div id=\"translation-settings\">
                                                {{ forms.selectField({
                                                    label: \"Translation Method\"|t('app'),
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
                                {% endnamespace %}

                                <hr>

                                <div class=\"fieldtype-settings\">
                                    <div>
                                        {% namespace 'blockTypes['~blockType.id~'][fields]['~fieldId~'][typesettings]' %}
                                            {{ field.getSettingsHtml()|raw  }}
                                        {% endnamespace %}
                                    </div>
                                </div>

                                <hr>

                                <a class=\"error delete\">{{ \"Delete\"|t('app') }}</a>
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endset %}

<div id=\"matrix-configurator\" class=\"matrix-configurator\">
    {{ forms.field({
        label: \"Configuration\"|t('app'),
        instructions: \"Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of.\"|t('app'),
        name: 'config'
    }, blockTypeInput) }}
</div>

{% if craft.app.getIsMultiSite() %}
    {{ forms.checkboxField({
        label: \"Manage blocks on a per-site basis\"|t('app'),
        id: 'localize-blocks',
        name: 'localizeBlocks',
        checked: matrixField.localizeBlocks
    }) }}
{% endif %}

{{ forms.textField({
    label: \"Min Blocks\"|t('app'),
    instructions: \"The minimum number of blocks the field is allowed to have.\"|t('app'),
    id: 'minBlocks',
    name: 'minBlocks',
    value: matrixField.minBlocks,
    size: 3,
    errors: matrixField.getErrors('minBlocks')
}) }}

{{ forms.textField({
    label: \"Max Blocks\"|t('app'),
    instructions: \"The maximum number of blocks the field is allowed to have.\"|t('app'),
    id: 'maxBlocks',
    name: 'maxBlocks',
    value: matrixField.maxBlocks,
    size: 3,
    errors: matrixField.getErrors('maxBlocks')
}) }}
", "_components/fieldtypes/Matrix/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/Matrix/settings.html");
    }
}
