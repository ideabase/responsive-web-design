<?php

/* settings/sections/_edit */
class __TwigTemplate_27c4b1d8fb315381b163d3d8545d07b4a906f41b0464b075e727f010736fb388 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_edit", 1);
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 4);
        // line 168
        ob_start();
        // line 169
        echo "    var \$siteRows = \$('#sites').children('tbody').children(),
        \$lightswitches = \$siteRows.children('th:nth-child(2)').children('.lightswitch');

    function updateSites() {
        \$lightswitches.each(function() {
            if (\$(this).data('lightswitch').on) {
                \$(this).parent().nextAll('td').removeClass('disabled').find('textarea,div.lightswitch,input').attr('tabindex', '0');
            } else {
                \$(this).parent().nextAll('td').addClass('disabled').find('textarea,div.lightswitch,input').attr('tabindex', '-1');
            }
        });
    }

    \$lightswitches.on('change', updateSites);

    Garnish.\$doc.ready(function() {
        updateSites();
    });

    ";
        // line 188
        if ((isset($context["brandNewSection"]) || array_key_exists("brandNewSection", $context) ? $context["brandNewSection"] : (function () { throw new Twig_Error_Runtime('Variable "brandNewSection" does not exist.', 188, $this->source); })())) {
            // line 189
            echo "        new Craft.HandleGenerator('#name', '#handle');

        ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 191, $this->source); })()), "app", array()), "sites", array()), "getAllSites", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 192
                echo "            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "handle", array()), "html", null, true);
                echo "\"] textarea[name\$=\"[singleUri]\"]');
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                // line 193
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "handle", array()), "html", null, true);
                echo "\"] textarea[name\$=\"[uriFormat]\"]', { suffix: '/{slug}' });
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"";
                // line 194
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "handle", array()), "html", null, true);
                echo "\"] textarea[name\$=\"[template]\"]', { suffix: '/_entry' });
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "    ";
        }
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <input type=\"hidden\" name=\"action\" value=\"sections/save-section\">
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction("settings/sections"), "html", null, true);
        echo "

    ";
        // line 11
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 11, $this->source); })()), "id", array())) {
            echo "<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 11, $this->source); })()), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 12
        echo "
    ";
        // line 13
        echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("What this section will be called in the CP.", "app"), "id" => "name", "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 19
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 19, $this->source); })()), "name", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 20
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 20, $this->source); })()), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true));
        // line 23
        echo "

    ";
        // line 25
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("How you’ll refer to this section in the templates.", "app"), "id" => "handle", "class" => "code", "name" => "handle", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 31
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 31, $this->source); })()), "handle", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 32
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 32, $this->source); })()), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 34
        echo "

    ";
        // line 36
        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enable versioning for entries in this section?", "app"), "id" => "enableVersioning", "name" => "enableVersioning", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 40
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 40, $this->source); })()), "enableVersioning", array())));
        // line 41
        echo "

    ";
        // line 43
        echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Section Type", "app"), "instructions" => ($this->extensions['craft\web\twig\Extension']->translateFilter("What type of section is this?", "app") . ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 45
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 45, $this->source); })()), "id", array())) ? ((("<br><span class=\"error\">" . $this->extensions['craft\web\twig\Extension']->translateFilter("Careful—changing this may result in data loss.", "app")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" =>         // line 48
(isset($context["typeOptions"]) || array_key_exists("typeOptions", $context) ? $context["typeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "typeOptions" does not exist.', 48, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 49
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 49, $this->source); })()), "type", array()), "toggle" => true, "targetPrefix" => ".type-", "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 52
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 52, $this->source); })()), "getErrors", array(0 => "type"), "method")));
        // line 53
        echo "

    <hr>

    ";
        // line 57
        $context["siteRows"] = array();
        // line 58
        echo "    ";
        $context["siteErrors"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 58, $this->source); })()), "getErrors", array(0 => "siteSettings"), "method");
        // line 59
        echo "
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 60, $this->source); })()), "app", array()), "sites", array()), "getAllSites", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 61
            echo "        ";
            $context["siteSettings"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["section"] ?? null), "siteSettings", array(), "any", false, true), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), array(), "array", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["section"] ?? null), "siteSettings", array(), "any", false, true), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), array(), "array")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["section"] ?? null), "siteSettings", array(), "any", false, true), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), array(), "array")) : (null));
            // line 62
            echo "        ";
            if ((isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 62, $this->source); })())) {
                // line 63
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 63, $this->source); })()), "getErrors", array(), "method"));
                foreach ($context['_seq'] as $context["attribute"] => $context["errors"]) {
                    // line 64
                    echo "                ";
                    $context["siteErrors"] = twig_array_merge((isset($context["siteErrors"]) || array_key_exists("siteErrors", $context) ? $context["siteErrors"] : (function () { throw new Twig_Error_Runtime('Variable "siteErrors" does not exist.', 64, $this->source); })()), $context["errors"]);
                    // line 65
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['errors'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "        ";
            }
            // line 67
            echo "        ";
            $context["siteRows"] = twig_array_merge((isset($context["siteRows"]) || array_key_exists("siteRows", $context) ? $context["siteRows"] : (function () { throw new Twig_Error_Runtime('Variable "siteRows" does not exist.', 67, $this->source); })()), array(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 68
$context["site"], "handle", array()) => array("heading" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 69
$context["site"], "name", array()), "site"), "enabled" => twig_include($this->env, $context, "_includes/forms/lightswitch", array("name" => (("sites[" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 71
$context["site"], "handle", array())) . "][enabled]"), "on" => (            // line 72
(isset($context["brandNewSection"]) || array_key_exists("brandNewSection", $context) ? $context["brandNewSection"] : (function () { throw new Twig_Error_Runtime('Variable "brandNewSection" does not exist.', 72, $this->source); })()) || (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 72, $this->source); })())), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 73
$context["site"], "id", array()), "small" => true)), "singleUri" => array("value" => (((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 77
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 77, $this->source); })()), "type", array()) == "single") && (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 77, $this->source); })())) && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 77, $this->source); })()), "uriFormat", array()) != "__home__"))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 77, $this->source); })()), "uriFormat", array())) : ("")), "hasErrors" => ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 78
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 78, $this->source); })()), "type", array()) == "single") && (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 78, $this->source); })()))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 78, $this->source); })()), "hasErrors", array(0 => "uriFormat"), "method")) : (""))), "uriFormat" => array("value" => ((            // line 81
(isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 81, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 81, $this->source); })()), "uriFormat", array())) : ("")), "hasErrors" => ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 82
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 82, $this->source); })()), "type", array()) != "single") && (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 82, $this->source); })()))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 82, $this->source); })()), "hasErrors", array(0 => "uriFormat"), "method")) : (""))), "template" => array("value" => ((            // line 85
(isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 85, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 85, $this->source); })()), "template", array())) : ("")), "hasErrors" => ((            // line 86
(isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 86, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 86, $this->source); })()), "hasErrors", array(0 => "template"), "method")) : (""))), "enabledByDefault" => ((            // line 88
(isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 88, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["siteSettings"]) || array_key_exists("siteSettings", $context) ? $context["siteSettings"] : (function () { throw new Twig_Error_Runtime('Variable "siteSettings" does not exist.', 88, $this->source); })()), "enabledByDefault", array())) : (true)))));
            // line 91
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
    ";
        // line 93
        echo $context["forms"]->macro_editableTableField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site Settings", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Choose which sites this section should be available in, and configure the site-specific settings.", "app"), "id" => "sites", "name" => "sites", "cols" => array("heading" => array("type" => "heading", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site", "app"), "class" => "thin"), "enabled" => array("type" => "heading", "class" => ("thin" . (( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 106
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 106, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) ? (" hidden") : ("")))), "singleUri" => array("type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("URI", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("What the entry URI should be for the site. Leave blank if this is the homepage.", "app"), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Leave blank if this is the homepage", "app"), "code" => true, "class" => ("type-single" . (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 114
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 114, $this->source); })()), "type", array()) != "single")) ? (" hidden") : ("")))), "uriFormat" => array("type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry URI Format", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("What entry URIs should look like for the site. Leave blank if entries don’t have URLs.", "app"), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Leave blank if entries don’t have URLs", "app"), "code" => true, "class" => ("type-channel type-structure" . (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 122
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 122, $this->source); })()), "type", array()) == "single")) ? (" hidden") : ("")))), "template" => array("type" => "singleline", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Template", "app"), "info" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which template should be loaded when an entry’s URL is requested.", "app"), "code" => true), "enabledByDefault" => array("type" => "lightswitch", "heading" => $this->extensions['craft\web\twig\Extension']->translateFilter("Default Status", "app"), "class" => ("thin type-channel type-structure" . (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 133
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 133, $this->source); })()), "type", array()) == "single")) ? (" hidden") : (""))))), "rows" =>         // line 136
(isset($context["siteRows"]) || array_key_exists("siteRows", $context) ? $context["siteRows"] : (function () { throw new Twig_Error_Runtime('Variable "siteRows" does not exist.', 136, $this->source); })()), "staticRows" => true, "errors" => array_unique(        // line 138
(isset($context["siteErrors"]) || array_key_exists("siteErrors", $context) ? $context["siteErrors"] : (function () { throw new Twig_Error_Runtime('Variable "siteErrors" does not exist.', 138, $this->source); })()))));
        // line 139
        echo "

    ";
        // line 141
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 141, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            // line 142
            echo "        <div class=\"type-channel ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 142, $this->source); })()), "type", array()) != "channel")) {
                echo "hidden";
            }
            echo "\">
            ";
            // line 143
            echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Propagate entries across all enabled sites?", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Whether entries should be propagated across all the sites the section is enabled in. If this is disabled, each entry will only belong to the site it was created in.", "app"), "id" => "propagateEntries", "name" => "propagateEntries", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 148
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 148, $this->source); })()), "propagateEntries", array()), "warning" => (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 149
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 149, $this->source); })()), "id", array()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 149, $this->source); })()), "propagateEntries", array()))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Changing this may result in data loss.", "app")) : (""))));
            // line 150
            echo "
        </div>
    ";
        }
        // line 153
        echo "
    <div class=\"type-structure ";
        // line 154
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 154, $this->source); })()), "type", array()) != "structure")) {
            echo "hidden";
        }
        echo "\">
        ";
        // line 155
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Max Levels", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("The maximum number of levels this section can have. Leave blank if you don’t care.", "app"), "id" => "maxLevels", "name" => "maxLevels", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 160
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 160, $this->source); })()), "maxLevels", array()), "size" => 5, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 162
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 162, $this->source); })()), "getErrors", array(0 => "maxLevels"), "method")));
        // line 163
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "settings/sections/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 163,  267 => 162,  266 => 160,  265 => 155,  259 => 154,  256 => 153,  251 => 150,  249 => 149,  248 => 148,  247 => 143,  240 => 142,  238 => 141,  234 => 139,  232 => 138,  231 => 136,  230 => 133,  229 => 122,  228 => 114,  227 => 106,  226 => 93,  223 => 92,  209 => 91,  207 => 88,  206 => 86,  205 => 85,  204 => 82,  203 => 81,  202 => 78,  201 => 77,  200 => 73,  199 => 72,  198 => 71,  197 => 69,  196 => 68,  194 => 67,  191 => 66,  185 => 65,  182 => 64,  177 => 63,  174 => 62,  171 => 61,  154 => 60,  151 => 59,  148 => 58,  146 => 57,  140 => 53,  138 => 52,  137 => 49,  136 => 48,  135 => 45,  134 => 43,  130 => 41,  128 => 40,  127 => 36,  123 => 34,  121 => 32,  120 => 31,  119 => 25,  115 => 23,  113 => 20,  112 => 19,  111 => 13,  108 => 12,  102 => 11,  97 => 9,  94 => 8,  91 => 7,  87 => 1,  83 => 196,  75 => 194,  71 => 193,  66 => 192,  62 => 191,  58 => 189,  56 => 188,  35 => 169,  33 => 168,  31 => 4,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set fullPageForm = true %}

{% import \"_includes/forms\" as forms %}


{% block content %}
    <input type=\"hidden\" name=\"action\" value=\"sections/save-section\">
    {{ redirectInput('settings/sections') }}

    {% if section.id %}<input type=\"hidden\" name=\"sectionId\" value=\"{{ section.id }}\">{% endif %}

    {{ forms.textField({
        first: true,
        label: \"Name\"|t('app'),
        instructions: \"What this section will be called in the CP.\"|t('app'),
        id: 'name',
        name: 'name',
        value: section.name,
        errors: section.getErrors('name'),
        autofocus: true,
        required: true,
    }) }}

    {{ forms.textField({
        label: \"Handle\"|t('app'),
        instructions: \"How you’ll refer to this section in the templates.\"|t('app'),
        id: 'handle',
        class: 'code',
        name: 'handle',
        value: section.handle,
        errors: section.getErrors('handle'),
        required: true
    }) }}

    {{ forms.checkboxField({
        label: \"Enable versioning for entries in this section?\"|t('app'),
        id: 'enableVersioning',
        name: 'enableVersioning',
        checked: section.enableVersioning
    }) }}

    {{ forms.selectField({
        label: \"Section Type\"|t('app'),
        instructions: \"What type of section is this?\"|t('app') ~ (section.id ? '<br><span class=\"error\">'~\"Careful—changing this may result in data loss.\"|t('app')~'</span>' : ''),
        id: 'type',
        name: 'type',
        options: typeOptions,
        value: section.type,
        toggle: true,
        targetPrefix: '.type-',
        errors: section.getErrors('type')
    }) }}

    <hr>

    {% set siteRows = [] %}
    {% set siteErrors = section.getErrors('siteSettings') %}

    {% for site in craft.app.sites.getAllSites() %}
        {% set siteSettings = section.siteSettings[site.id] ?? null %}
        {% if siteSettings %}
            {% for attribute, errors in siteSettings.getErrors() %}
                {% set siteErrors = siteErrors|merge(errors) %}
            {% endfor %}
        {% endif %}
        {% set siteRows = siteRows|merge({
            (site.handle): {
                heading: site.name|t('site'),
                enabled: include('_includes/forms/lightswitch', {
                    name: 'sites['~site.handle~'][enabled]',
                    on: brandNewSection or siteSettings,
                    value: site.id,
                    small: true
                }),
                singleUri: {
                    value: (section.type == 'single' and siteSettings and siteSettings.uriFormat != '__home__') ? siteSettings.uriFormat,
                    hasErrors: (section.type == 'single' and siteSettings ? siteSettings.hasErrors('uriFormat'))
                },
                uriFormat: {
                    value: siteSettings ? siteSettings.uriFormat,
                    hasErrors: (section.type != 'single' and siteSettings ? siteSettings.hasErrors('uriFormat'))
                },
                template: {
                    value: siteSettings ? siteSettings.template,
                    hasErrors: siteSettings ? siteSettings.hasErrors('template'),
                },
                enabledByDefault: siteSettings ? siteSettings.enabledByDefault : true,
            }
        }) %}
    {% endfor %}

    {{ forms.editableTableField({
        label: \"Site Settings\"|t('app'),
        instructions: \"Choose which sites this section should be available in, and configure the site-specific settings.\"|t('app'),
        id: 'sites',
        name: 'sites',
        cols: {
            heading: {
                type: 'heading',
                heading: \"Site\"|t('app'),
                class: 'thin'
            },
            enabled: {
                type: 'heading',
                class: 'thin'~(not craft.app.getIsMultiSite() ? ' hidden')
            },
            singleUri: {
                type: 'singleline',
                heading: \"URI\"|t('app'),
                info: \"What the entry URI should be for the site. Leave blank if this is the homepage.\"|t('app'),
                placeholder: \"Leave blank if this is the homepage\"|t('app'),
                code: true,
                class: 'type-single'~(section.type != 'single' ? ' hidden')
            },
            uriFormat: {
                type: 'singleline',
                heading: \"Entry URI Format\"|t('app'),
                info: \"What entry URIs should look like for the site. Leave blank if entries don’t have URLs.\"|t('app'),
                placeholder: \"Leave blank if entries don’t have URLs\"|t('app'),
                code: true,
                class: 'type-channel type-structure'~(section.type == 'single' ? ' hidden')
            },
            template: {
                type: 'singleline',
                heading: \"Template\"|t('app'),
                info: \"Which template should be loaded when an entry’s URL is requested.\"|t('app'),
                code: true
            },
            enabledByDefault: {
                type: 'lightswitch',
                heading: \"Default Status\"|t('app'),
                class: 'thin type-channel type-structure'~(section.type == 'single' ? ' hidden')
            }
        },
        rows: siteRows,
        staticRows: true,
        errors: siteErrors|unique
    }) }}

    {% if craft.app.getIsMultiSite() %}
        <div class=\"type-channel {% if section.type != 'channel' %}hidden{% endif %}\">
            {{ forms.checkboxField({
                label: 'Propagate entries across all enabled sites?'|t('app'),
                instructions: 'Whether entries should be propagated across all the sites the section is enabled in. If this is disabled, each entry will only belong to the site it was created in.'|t('app'),
                id: 'propagateEntries',
                name: 'propagateEntries',
                checked: section.propagateEntries,
                warning: section.id and section.propagateEntries ? 'Changing this may result in data loss.'|t('app')
            }) }}
        </div>
    {% endif %}

    <div class=\"type-structure {% if section.type != 'structure' %}hidden{% endif %}\">
        {{ forms.textField({
            label: \"Max Levels\"|t('app'),
            instructions: \"The maximum number of levels this section can have. Leave blank if you don’t care.\"|t('app'),
            id: 'maxLevels',
            name: 'maxLevels',
            value: section.maxLevels,
            size: 5,
            errors: section.getErrors('maxLevels')
        }) }}
    </div>
{% endblock %}


{% js %}
    var \$siteRows = \$('#sites').children('tbody').children(),
        \$lightswitches = \$siteRows.children('th:nth-child(2)').children('.lightswitch');

    function updateSites() {
        \$lightswitches.each(function() {
            if (\$(this).data('lightswitch').on) {
                \$(this).parent().nextAll('td').removeClass('disabled').find('textarea,div.lightswitch,input').attr('tabindex', '0');
            } else {
                \$(this).parent().nextAll('td').addClass('disabled').find('textarea,div.lightswitch,input').attr('tabindex', '-1');
            }
        });
    }

    \$lightswitches.on('change', updateSites);

    Garnish.\$doc.ready(function() {
        updateSites();
    });

    {% if brandNewSection %}
        new Craft.HandleGenerator('#name', '#handle');

        {% for site in craft.app.sites.getAllSites() %}
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[singleUri]\"]');
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[uriFormat]\"]', { suffix: '/{slug}' });
            new Craft.UriFormatGenerator('#name', '#sites tr[data-id=\"{{ site.handle }}\"] textarea[name\$=\"[template]\"]', { suffix: '/_entry' });
        {% endfor %}
    {% endif %}
{% endjs %}
", "settings/sections/_edit", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/sections/_edit.html");
    }
}
