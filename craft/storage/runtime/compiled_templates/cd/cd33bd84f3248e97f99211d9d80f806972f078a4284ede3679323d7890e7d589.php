<?php

/* _includes/forms/editableTable */
class __TwigTemplate_4f0eb6b93fa8b03c5c736cd02831568536dd6c6174e083e8e74de3255ad2cf74 extends craft\web\twig\Template
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
        $context["static"] = (($context["static"]) ?? (false));
        // line 2
        $context["staticRows"] = ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 2, $this->source); })()) || (($context["staticRows"]) ?? (false)));
        // line 3
        $context["cols"] = (($context["cols"]) ?? (array()));
        // line 4
        $context["rows"] = (($context["rows"]) ?? (array()));
        // line 5
        $context["initJs"] = ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 5, $this->source); })()) && (($context["initJs"]) ?? (true)));
        // line 6
        $context["minRows"] = (($context["minRows"]) ?? ("null"));
        // line 7
        $context["maxRows"] = (($context["maxRows"]) ?? ("null"));
        // line 8
        echo "
<table id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" class=\"shadow-box editable\"";
        // line 10
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    <thead>
        <tr>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new Twig_Error_Runtime('Variable "cols" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 14
            echo "                <th scope=\"col\" class=\"";
            echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())) : ("")), "html", null, true);
            echo "\">";
            // line 15
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "heading", array(), "any", true, true) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "heading", array()))) {
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "heading", array()), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            // line 16
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "info", array(), "any", true, true)) {
                // line 17
                echo "<span class=\"info\">";
                echo $this->extensions['craft\web\twig\Extension']->markdownFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "info", array()));
                echo "</span>";
            }
            // line 19
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            ";
        if ( !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new Twig_Error_Runtime('Variable "staticRows" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                <th colspan=\"2\"></th>
            ";
        }
        // line 24
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new Twig_Error_Runtime('Variable "rows" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
            // line 28
            echo "            <tr data-id=\"";
            echo twig_escape_filter($this->env, $context["rowId"], "html", null, true);
            echo "\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new Twig_Error_Runtime('Variable "cols" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["colId"] => $context["col"]) {
                // line 30
                echo "                    ";
                $context["cell"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["row"], $context["colId"], array(), "array", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["row"], $context["colId"], array(), "array")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["row"], $context["colId"], array(), "array")) : (null));
                // line 31
                echo "                    ";
                $context["value"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "value", array(), "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["cell"]) || array_key_exists("cell", $context) ? $context["cell"] : (function () { throw new Twig_Error_Runtime('Variable "cell" does not exist.', 31, $this->source); })()), "value", array())) : ((isset($context["cell"]) || array_key_exists("cell", $context) ? $context["cell"] : (function () { throw new Twig_Error_Runtime('Variable "cell" does not exist.', 31, $this->source); })())));
                // line 32
                echo "                    ";
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "type", array()) == "heading")) {
                    // line 33
                    echo "                        <th scope=\"row\" class=\"";
                    echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array())) : ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())) : ("")))), "html", null, true);
                    echo "\">";
                    echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 33, $this->source); })());
                    echo "</th>
                    ";
                } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 34
$context["col"], "type", array()) == "html")) {
                    // line 35
                    echo "                        <td class=\"";
                    echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "class", array())) : ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array())) : ("")))), "html", null, true);
                    echo "\">";
                    echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 35, $this->source); })());
                    echo "</td>
                    ";
                } else {
                    // line 37
                    echo "                        ";
                    $context["hasErrors"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "hasErrors", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "hasErrors", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "hasErrors", array())) : (false));
                    // line 38
                    echo "                        ";
                    $context["cellName"] = ((((((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 38, $this->source); })()) . "[") . $context["rowId"]) . "][") . $context["colId"]) . "]");
                    // line 39
                    echo "                        ";
                    $context["textual"] = twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "type", array()), array(0 => "color", 1 => "date", 2 => "multiline", 3 => "number", 4 => "singleline", 5 => "time"));
                    // line 40
                    echo "                        ";
                    $context["isCode"] = (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "code", array(), "any", true, true) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "type", array()) == "color"));
                    // line 41
                    echo "                        <td class=\"";
                    if ((isset($context["textual"]) || array_key_exists("textual", $context) ? $context["textual"] : (function () { throw new Twig_Error_Runtime('Variable "textual" does not exist.', 41, $this->source); })())) {
                        echo "textual";
                    }
                    echo " ";
                    if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "class", array()), "html", null, true);
                    }
                    echo " ";
                    if ((isset($context["isCode"]) || array_key_exists("isCode", $context) ? $context["isCode"] : (function () { throw new Twig_Error_Runtime('Variable "isCode" does not exist.', 41, $this->source); })())) {
                        echo "code";
                    }
                    echo " ";
                    if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new Twig_Error_Runtime('Variable "hasErrors" does not exist.', 41, $this->source); })())) {
                        echo "error";
                    }
                    echo "\"";
                    if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "width", array(), "any", true, true)) {
                        echo " width=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "width", array()), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    // line 42
                    switch (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "type", array())) {
                        case "checkbox":
                        {
                            // line 44
                            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/editableTable", 44)->display(array("name" =>                             // line 45
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 45, $this->source); })()), "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                             // line 46
$context["col"], "value", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "value", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "value", array())) : (1)), "checked" =>  !twig_test_empty(                            // line 47
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 47, $this->source); })())), "disabled" =>                             // line 48
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 48, $this->source); })())));
                            break;
                        }
                        case "color":
                        {
                            // line 51
                            $this->loadTemplate("_includes/forms/color", "_includes/forms/editableTable", 51)->display(array("name" =>                             // line 52
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 52, $this->source); })()), "value" =>                             // line 53
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 53, $this->source); })()), "small" => true, "disabled" =>                             // line 55
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 55, $this->source); })())));
                            break;
                        }
                        case "date":
                        {
                            // line 58
                            $this->loadTemplate("_includes/forms/date", "_includes/forms/editableTable", 58)->display(array("name" =>                             // line 59
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 59, $this->source); })()), "value" =>                             // line 60
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->source); })()), "disabled" =>                             // line 61
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 61, $this->source); })())));
                            break;
                        }
                        case "lightswitch":
                        {
                            // line 64
                            $this->loadTemplate("_includes/forms/lightswitch", "_includes/forms/editableTable", 64)->display(array("name" =>                             // line 65
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 65, $this->source); })()), "on" =>                             // line 66
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 66, $this->source); })()), "value" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                             // line 67
$context["col"], "value", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "value", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "value", array())) : (1)), "small" => true, "disabled" =>                             // line 69
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 69, $this->source); })())));
                            // line 71
                            echo "                                ";
                            break;
                        }
                        case "select":
                        {
                            // line 72
                            $this->loadTemplate("_includes/forms/select", "_includes/forms/editableTable", 72)->display(array("class" => "small", "name" =>                             // line 74
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 74, $this->source); })()), "options" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                             // line 75
($context["cell"] ?? null), "options", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "options", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["cell"] ?? null), "options", array())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "options", array()))), "value" =>                             // line 76
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 76, $this->source); })()), "disabled" =>                             // line 77
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 77, $this->source); })())));
                            break;
                        }
                        case "time":
                        {
                            // line 80
                            $this->loadTemplate("_includes/forms/time", "_includes/forms/editableTable", 80)->display(array("name" =>                             // line 81
(isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 81, $this->source); })()), "value" =>                             // line 82
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->source); })()), "disabled" =>                             // line 83
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 83, $this->source); })())));
                            break;
                        }
                        default:
                        {
                            // line 86
                            echo "<textarea name=\"";
                            echo twig_escape_filter($this->env, (isset($context["cellName"]) || array_key_exists("cellName", $context) ? $context["cellName"] : (function () { throw new Twig_Error_Runtime('Variable "cellName" does not exist.', 86, $this->source); })()), "html", null, true);
                            echo "\" rows=\"1\"";
                            if ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 86, $this->source); })())) {
                                echo " disabled";
                            }
                            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "placeholder", array(), "any", true, true)) {
                                echo " placeholder=\"";
                                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["col"], "placeholder", array()), "html", null, true);
                                echo "\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 86, $this->source); })()), "html", null, true);
                            echo "</textarea>";
                        }
                    }
                    // line 88
                    echo "</td>
                    ";
                }
                // line 90
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['colId'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                ";
            if ( !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new Twig_Error_Runtime('Variable "staticRows" does not exist.', 91, $this->source); })())) {
                // line 92
                echo "                    <td class=\"thin action\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\"></a></td>
                    <td class=\"thin action\"><a class=\"delete icon\" title=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\"></a></td>
                ";
            }
            // line 95
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "    </tbody>
</table>
";
        // line 99
        if ( !(isset($context["staticRows"]) || array_key_exists("staticRows", $context) ? $context["staticRows"] : (function () { throw new Twig_Error_Runtime('Variable "staticRows" does not exist.', 99, $this->source); })())) {
            // line 100
            echo "    <div class=\"btn add icon\">";
            echo twig_escape_filter($this->env, ((array_key_exists("addRowLabel", $context)) ? ((isset($context["addRowLabel"]) || array_key_exists("addRowLabel", $context) ? $context["addRowLabel"] : (function () { throw new Twig_Error_Runtime('Variable "addRowLabel" does not exist.', 100, $this->source); })())) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Add a row", "app"))), "html", null, true);
            echo "</div>
";
        }
        // line 102
        echo "
";
        // line 103
        if ((isset($context["initJs"]) || array_key_exists("initJs", $context) ? $context["initJs"] : (function () { throw new Twig_Error_Runtime('Variable "initJs" does not exist.', 103, $this->source); })())) {
            // line 104
            echo "    ";
            $context["jsId"] = twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), array((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 104, $this->source); })()))), "js");
            // line 105
            echo "    ";
            $context["jsName"] = twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputName')->getCallable(), array((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 105, $this->source); })()))), "js");
            // line 106
            echo "    ";
            $context["jsCols"] = $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new Twig_Error_Runtime('Variable "cols" does not exist.', 106, $this->source); })()));
            // line 107
            echo "    ";
            $context["defaultValues"] = (($context["defaultValues"]) ?? (null));
            // line 108
            echo "    ";
            ob_start();
            // line 109
            echo "        new Craft.EditableTable(\"";
            echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new Twig_Error_Runtime('Variable "jsId" does not exist.', 109, $this->source); })()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (isset($context["jsName"]) || array_key_exists("jsName", $context) ? $context["jsName"] : (function () { throw new Twig_Error_Runtime('Variable "jsName" does not exist.', 109, $this->source); })()), "html", null, true);
            echo "\", ";
            echo (isset($context["jsCols"]) || array_key_exists("jsCols", $context) ? $context["jsCols"] : (function () { throw new Twig_Error_Runtime('Variable "jsCols" does not exist.', 109, $this->source); })());
            echo ", {
            defaultValues: ";
            // line 110
            echo (((isset($context["defaultValues"]) || array_key_exists("defaultValues", $context) ? $context["defaultValues"] : (function () { throw new Twig_Error_Runtime('Variable "defaultValues" does not exist.', 110, $this->source); })())) ? ($this->extensions['craft\web\twig\Extension']->jsonEncodeFilter((isset($context["defaultValues"]) || array_key_exists("defaultValues", $context) ? $context["defaultValues"] : (function () { throw new Twig_Error_Runtime('Variable "defaultValues" does not exist.', 110, $this->source); })()))) : ("{}"));
            echo ",
            minRows: ";
            // line 111
            echo twig_escape_filter($this->env, (((isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new Twig_Error_Runtime('Variable "minRows" does not exist.', 111, $this->source); })())) ? ((isset($context["minRows"]) || array_key_exists("minRows", $context) ? $context["minRows"] : (function () { throw new Twig_Error_Runtime('Variable "minRows" does not exist.', 111, $this->source); })())) : ("null")), "html", null, true);
            echo ",
            maxRows: ";
            // line 112
            echo twig_escape_filter($this->env, (((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new Twig_Error_Runtime('Variable "maxRows" does not exist.', 112, $this->source); })())) ? ((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new Twig_Error_Runtime('Variable "maxRows" does not exist.', 112, $this->source); })())) : ("null")), "html", null, true);
            echo "
        });
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/editableTable";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 112,  322 => 111,  318 => 110,  309 => 109,  306 => 108,  303 => 107,  300 => 106,  297 => 105,  294 => 104,  292 => 103,  289 => 102,  283 => 100,  281 => 99,  277 => 97,  270 => 95,  265 => 93,  260 => 92,  257 => 91,  251 => 90,  247 => 88,  230 => 86,  224 => 83,  223 => 82,  222 => 81,  221 => 80,  215 => 77,  214 => 76,  213 => 75,  212 => 74,  211 => 72,  205 => 71,  203 => 69,  202 => 67,  201 => 66,  200 => 65,  199 => 64,  193 => 61,  192 => 60,  191 => 59,  190 => 58,  184 => 55,  183 => 53,  182 => 52,  181 => 51,  175 => 48,  174 => 47,  173 => 46,  172 => 45,  171 => 44,  167 => 42,  143 => 41,  140 => 40,  137 => 39,  134 => 38,  131 => 37,  123 => 35,  121 => 34,  114 => 33,  111 => 32,  108 => 31,  105 => 30,  101 => 29,  96 => 28,  92 => 27,  87 => 24,  83 => 22,  80 => 21,  73 => 19,  68 => 17,  66 => 16,  60 => 15,  56 => 14,  52 => 13,  43 => 10,  40 => 9,  37 => 8,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set static = static ?? false %}
{%- set staticRows = static or (staticRows ?? false) %}
{%- set cols = cols ?? [] %}
{%- set rows = rows ?? [] %}
{%- set initJs = not static and (initJs ?? true) -%}
{%- set minRows = minRows ?? 'null' %}
{%- set maxRows = maxRows ?? 'null' %}

<table id=\"{{ id }}\" class=\"shadow-box editable\"
       {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    <thead>
        <tr>
            {% for col in cols %}
                <th scope=\"col\" class=\"{{ col.class ?? '' }}\">
                    {%- if col.heading is defined and col.heading %}{{ col.heading }}{% else %}&nbsp;{% endif %}
                    {%- if col.info is defined -%}
                        <span class=\"info\">{{ col.info|md|raw }}</span>
                    {%- endif -%}
                </th>
            {% endfor %}
            {% if not staticRows %}
                <th colspan=\"2\"></th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
        {% for rowId, row in rows %}
            <tr data-id=\"{{ rowId }}\">
                {% for colId, col in cols %}
                    {% set cell = row[colId] ?? null %}
                    {% set value = cell.value is defined ? cell.value : cell %}
                    {% if col.type == 'heading' %}
                        <th scope=\"row\" class=\"{{ cell.class ?? col.class ?? '' }}\">{{ value|raw }}</th>
                    {% elseif col.type == 'html' %}
                        <td class=\"{{ cell.class ?? col.class ?? '' }}\">{{ value|raw }}</td>
                    {% else %}
                        {% set hasErrors = cell.hasErrors ?? false %}
                        {% set cellName = name~'['~rowId~']['~colId~']' %}
                        {% set textual = (col.type in ['color', 'date', 'multiline', 'number', 'singleline', 'time']) %}
                        {% set isCode = col.code is defined or col.type == 'color' %}
                        <td class=\"{% if textual %}textual{% endif %} {% if col.class is defined %}{{ col.class }}{% endif %} {% if isCode %}code{% endif %} {% if hasErrors %}error{% endif %}\"{% if col.width is defined %} width=\"{{ col.width }}\"{% endif %}>
                            {%- switch col.type -%}
                                {%- case 'checkbox' -%}
                                    {% include \"_includes/forms/checkbox\" with {
                                        name: cellName,
                                        value:  col.value ?? 1,
                                        checked: value is not empty,
                                        disabled: static
                                    } only %}
                                {%- case 'color' -%}
                                    {% include \"_includes/forms/color\" with {
                                        name: cellName,
                                        value: value,
                                        small: true,
                                        disabled: static
                                    } only %}
                                {%- case 'date' -%}
                                    {% include \"_includes/forms/date\" with {
                                        name: cellName,
                                        value: value,
                                        disabled: static
                                    } only %}
                                {%- case 'lightswitch' -%}
                                    {% include \"_includes/forms/lightswitch\" with {
                                        name: cellName,
                                        on: value,
                                        value: col.value ?? 1,
                                        small: true,
                                        disabled: static
                                    } only %}
                                {% case 'select' -%}
                                    {% include \"_includes/forms/select\" with {
                                        class: 'small',
                                        name: cellName,
                                        options: cell.options ?? col.options,
                                        value: value,
                                        disabled: static
                                    } only %}
                                {%- case 'time' -%}
                                    {% include \"_includes/forms/time\" with {
                                        name: cellName,
                                        value: value,
                                        disabled: static
                                    } only %}
                                {%- default -%}
                                    <textarea name=\"{{ cellName }}\" rows=\"1\"{% if static %} disabled{% endif %}{% if col.placeholder is defined %} placeholder=\"{{ col.placeholder }}\"{% endif %}>{{ value }}</textarea>
                            {%- endswitch -%}
                        </td>
                    {% endif %}
                {% endfor %}
                {% if not staticRows %}
                    <td class=\"thin action\"><a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\"></a></td>
                    <td class=\"thin action\"><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\"></a></td>
                {% endif %}
            </tr>
        {% endfor %}
    </tbody>
</table>
{% if not staticRows %}
    <div class=\"btn add icon\">{{ addRowLabel is defined ? addRowLabel : \"Add a row\"|t('app') }}</div>
{% endif %}

{% if initJs %}
    {% set jsId = id|namespaceInputId|e('js') %}
    {% set jsName = name|namespaceInputName|e('js') %}
    {% set jsCols = cols|json_encode %}
    {% set defaultValues = defaultValues ?? null %}
    {% js %}
        new Craft.EditableTable(\"{{ jsId }}\", \"{{ jsName }}\", {{ jsCols|raw }}, {
            defaultValues: {{ defaultValues ? defaultValues|json_encode|raw : '{}' }},
            minRows: {{ minRows ? minRows : 'null' }},
            maxRows: {{ maxRows ? maxRows : 'null' }}
        });
    {% endjs %}
{% endif %}
", "_includes/forms/editableTable", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms/editableTable.html");
    }
}
