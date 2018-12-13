<?php

/* _layouts/basecp */
class __TwigTemplate_21438cb37fb73e481a9c7f8dba86c2d5ffd19499962972311ec9367ac719b9ee extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/base", "_layouts/basecp", 1);
        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 4, $this->source); })()), "app", array()), "request", array()), "isMobileBrowser", array(0 => true), "method")) {
            // line 5
            $context["bodyClass"] = ((((array_key_exists("bodyClass", $context) && (isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new Twig_Error_Runtime('Variable "bodyClass" does not exist.', 5, $this->source); })()))) ? (((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new Twig_Error_Runtime('Variable "bodyClass" does not exist.', 5, $this->source); })()) . " ")) : ("")) . "mobile");
        }
        // line 8
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 8, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Show", 1 => "Hide")), "method");
        // line 13
        $context["localeData"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 13, $this->source); })()), "app", array()), "locale", array());
        // line 14
        $context["orientation"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 14, $this->source); })()), "getOrientation", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_foot($context, array $blocks = array())
    {
        // line 17
        echo "    <form id=\"x\" method=\"post\" accept-charset=\"UTF-8\">
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "
    </form>
    <noscript>
        <div class=\"message-container no-access\">
            <div class=\"pane notice\">
                <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("JavaScript must be enabled to access the Craft control panel.", "app"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </noscript>

    ";
        // line 28
        ob_start();
        // line 29
        echo "        // Create the Craft object
        window.Craft = {
            systemUid:             \"";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 31, $this->source); })()), "app", array()), "getSystemUid", array(), "method"), "js"), "html", null, true);
        echo "\",
            baseUrl:               \"";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\UrlHelper::url(), "js"), "html", null, true);
        echo "\",
            baseCpUrl:             \"";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\UrlHelper::cpUrl(), "js"), "html", null, true);
        echo "\",
            baseSiteUrl:           \"";
        // line 34
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\UrlHelper::siteUrl(), "js"), "html", null, true);
        echo "\",
            actionUrl:             \"";
        // line 35
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\UrlHelper::actionUrl(), "js"), "html", null, true);
        echo "\",
            jqueryPaymentUrl:      \"";
        // line 36
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 36, $this->source); })()), "getAssetManager", array(), "method"), "getPublishedUrl", array(0 => "@lib/jquery.payment", 1 => true), "method") . "/jquery.payment.js"), "js"), "html", null, true);
        echo "\",
            scriptName:            \"";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 37, $this->source); })()), "app", array()), "request", array()), "getScriptFilename", array(), "method"), "js"), "html", null, true);
        echo "\",
            omitScriptNameInUrls:  ";
        // line 38
        echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 38, $this->source); })()), "app", array()), "config", array()), "general", array()), "omitScriptNameInUrls", array())) ? ("true") : ("false"));
        echo ",
            usePathInfo:           ";
        // line 39
        echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 39, $this->source); })()), "app", array()), "config", array()), "general", array()), "usePathInfo", array())) ? ("true") : ("false"));
        echo ",
            useCompressedJs:       ";
        // line 40
        echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 40, $this->source); })()), "app", array()), "config", array()), "general", array()), "useCompressedJs", array())) ? ("true") : ("false"));
        echo ",
            actionTrigger:         \"";
        // line 41
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 41, $this->source); })()), "app", array()), "config", array()), "general", array()), "actionTrigger", array()), "js"), "html", null, true);
        echo "\",
            path:                  \"";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 42, $this->source); })()), "app", array()), "request", array()), "getPathInfo", array(), "method"), "js"), "html", null, true);
        echo "\",
            language:              \"";
        // line 43
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 43, $this->source); })()), "app", array()), "language", array()), "js"), "html", null, true);
        echo "\",
            timezone:              \"";
        // line 44
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 44, $this->source); })()), "app", array()), "getTimeZone", array(), "method"), "js"), "html", null, true);
        echo "\",
            siteId:                ";
        // line 45
        echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 45, $this->source); })()), "app", array()), "isInstalled", array()) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 45, $this->source); })()), "app", array()), "updates", array()), "isCraftDbMigrationNeeded", array()))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 45, $this->source); })()), "app", array()), "sites", array()), "currentSite", array()), "id", array())) : ("null")), "html", null, true);
        echo ",
            orientation:           \"";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new Twig_Error_Runtime('Variable "orientation" does not exist.', 46, $this->source); })()), "js"), "html", null, true);
        echo "\",
            left:                  \"";
        // line 47
        echo ((((isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new Twig_Error_Runtime('Variable "orientation" does not exist.', 47, $this->source); })()) == "ltr")) ? ("left") : ("right"));
        echo "\",
            right:                 \"";
        // line 48
        echo ((((isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new Twig_Error_Runtime('Variable "orientation" does not exist.', 48, $this->source); })()) == "ltr")) ? ("right") : ("left"));
        echo "\",
            username:              ";
        // line 49
        echo (((array_key_exists("currentUser", $context) && (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 49, $this->source); })()))) ? ((("\"" . twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 49, $this->source); })()), "username", array()), "js")) . "\"")) : ("null"));
        echo ",
            remainingSessionTime:  ";
        // line 50
        echo twig_escape_filter($this->env, ((!twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 50, $this->source); })()), "app", array()), "request", array()), "getSegment", array(0 => 1), "method"), array(0 => "updates", 1 => "manualupdate"))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 50, $this->source); })()), "app", array()), "user", array()), "getRemainingSessionTime", array(), "method")) : (0)), "html", null, true);
        echo ",
            Solo:                  ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["CraftSolo"]) || array_key_exists("CraftSolo", $context) ? $context["CraftSolo"] : (function () { throw new Twig_Error_Runtime('Variable "CraftSolo" does not exist.', 51, $this->source); })()), "html", null, true);
        echo ",
            Pro:                   ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 52, $this->source); })()), "html", null, true);
        echo ",
            edition:               ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 53, $this->source); })()), "html", null, true);
        echo ",
            isMultiSite:           ";
        // line 54
        echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 54, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) ? ("true") : ("false"));
        echo ",
            translations:          {},
            maxUploadSize:         ";
        // line 56
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 56, $this->source); })()), "io", array()), "getMaxUploadSize", array(), "method"), "html", null, true);
        echo ",
            isImagick:             ";
        // line 57
        echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 57, $this->source); })()), "app", array()), "images", array()), "getIsImagick", array(), "method")) ? ("true") : ("false"));
        echo ",
            forceConfirmUnload:    ";
        // line 58
        echo (((array_key_exists("forceConfirmUnload", $context) && (isset($context["forceConfirmUnload"]) || array_key_exists("forceConfirmUnload", $context) ? $context["forceConfirmUnload"] : (function () { throw new Twig_Error_Runtime('Variable "forceConfirmUnload" does not exist.', 58, $this->source); })()))) ? ("true") : ("false"));
        echo ",
            defaultIndexCriteria:  { enabledForSite: null },
            ";
        // line 60
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 60, $this->source); })()), "app", array()), "config", array()), "general", array()), "enableCsrfProtection", array())) {
            // line 61
            echo "                csrfTokenValue:        \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 61, $this->source); })()), "app", array()), "request", array()), "getCsrfToken", array(), "method"), "js"), "html", null, true);
            echo "\",
                csrfTokenName:         \"";
            // line 62
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 62, $this->source); })()), "app", array()), "config", array()), "general", array()), "csrfTokenName", array()), "js"), "html", null, true);
            echo "\",
            ";
        }
        // line 64
        echo "            runQueueAutomatically: ";
        echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 64, $this->source); })()), "app", array()), "config", array()), "general", array()), "runQueueAutomatically", array())) ? ("true") : ("false"));
        echo ",
            slugWordSeparator:     \"";
        // line 65
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 65, $this->source); })()), "app", array()), "config", array()), "general", array()), "slugWordSeparator", array()), "js"), "html", null, true);
        echo "\",
            limitAutoSlugsToAscii: ";
        // line 66
        echo ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 66, $this->source); })()), "app", array()), "config", array()), "general", array()), "limitAutoSlugsToAscii", array())) ? ("true") : ("false"));
        echo ",
            fileKinds:             ";
        // line 67
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 67, $this->source); })()), "io", array()), "getFileKinds", array(), "method"));
        echo ",
            datepickerOptions: {
                constrainInput: false,
                dateFormat: \"";
        // line 70
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 70, $this->source); })()), "getDateFormat", array(0 => "short", 1 => "jui"), "method"), "js"), "html", null, true);
        echo "\",
                prevText: '";
        // line 71
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Prev", "app"), "js"), "html", null, true);
        echo "',
                nextText: '";
        // line 72
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Next", "app"), "js"), "html", null, true);
        echo "',
                firstDay: ";
        // line 73
        echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["currentUser"] ?? null), "getPreference", array(0 => "weekStartDay"), "method", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["currentUser"] ?? null), "getPreference", array(0 => "weekStartDay"), "method")))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["currentUser"] ?? null), "getPreference", array(0 => "weekStartDay"), "method")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 73, $this->source); })()), "app", array()), "config", array()), "general", array()), "defaultWeekStartDay", array()))), "html", null, true);
        echo ",
                dayNames: ";
        // line 74
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 74, $this->source); })()), "getWeekDayNames", array(0 => "full", 1 => true), "method"));
        echo ",
                dayNamesShort: ";
        // line 75
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 75, $this->source); })()), "getWeekDayNames", array(0 => "short", 1 => true), "method"));
        echo ",
                dayNamesMin: ";
        // line 76
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 76, $this->source); })()), "getWeekDayNames", array(0 => "abbreviated", 1 => true), "method"));
        echo ",
                monthNames: ";
        // line 77
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(array_values(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 77, $this->source); })()), "getMonthNames", array(0 => "full", 1 => true), "method")));
        echo ",
                monthNamesShort: ";
        // line 78
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(array_values(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 78, $this->source); })()), "getMonthNames", array(0 => "abbreviated", 1 => true), "method")));
        echo "
            },
            timepickerOptions: {
                timeFormat: '";
        // line 81
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 81, $this->source); })()), "getTimeFormat", array(0 => "short", 1 => "php"), "method"), "html", null, true);
        echo "',
                closeOnWindowScroll: false,
                orientation: '";
        // line 83
        echo ((((isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new Twig_Error_Runtime('Variable "orientation" does not exist.', 83, $this->source); })()) == "ltr")) ? ("l") : ("r"));
        echo "',
                lang: {
                    am: '";
        // line 85
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 85, $this->source); })()), "getAMName", array(), "method")), "html", null, true);
        echo "',
                    AM: '";
        // line 86
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 86, $this->source); })()), "getAMName", array(), "method"), "html", null, true);
        echo "',
                    pm: '";
        // line 87
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 87, $this->source); })()), "getPMName", array(), "method")), "html", null, true);
        echo "',
                    PM: '";
        // line 88
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new Twig_Error_Runtime('Variable "localeData" does not exist.', 88, $this->source); })()), "getPMName", array(), "method"), "html", null, true);
        echo "'
                }
            },
            primarySiteId: ";
        // line 91
        echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 91, $this->source); })()), "app", array()), "isInstalled", array()) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 91, $this->source); })()), "app", array()), "updates", array()), "isCraftDbMigrationNeeded", array()))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 91, $this->source); })()), "app", array()), "sites", array()), "primarySite", array()), "id", array())) : ("null")), "html", null, true);
        echo ",
            sites: [
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 93, $this->source); })()), "app", array()), "sites", array()), "getAllSites", array(), "method"));
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
            // line 94
            echo "                    {
                        id: ";
            // line 95
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), "html", null, true);
            echo ",
                        handle: \"";
            // line 96
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "handle", array()), "js"), "html", null, true);
            echo "\",
                        name: \"";
            // line 97
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "name", array()), "site"), "js"), "html", null, true);
            echo "\"
                    }";
            // line 98
            if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                echo ",";
            }
            // line 99
            echo "                ";
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
        // line 100
        echo "            ],
            publishableSections: [
                ";
        // line 102
        if ((((isset($context["isInstalled"]) || array_key_exists("isInstalled", $context) ? $context["isInstalled"] : (function () { throw new Twig_Error_Runtime('Variable "isInstalled" does not exist.', 102, $this->source); })()) && array_key_exists("currentUser", $context)) && (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 102, $this->source); })()))) {
            // line 103
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 103, $this->source); })()), "app", array()), "sections", array()), "getEditableSections", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 104
                echo "                        ";
                if (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "type", array()) != "single") && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 104, $this->source); })()), "can", array(0 => ("createEntries:" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()))), "method"))) {
                    // line 105
                    echo "                            {
                                id: ";
                    // line 106
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()), "html", null, true);
                    echo ",
                                name: \"";
                    // line 107
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "name", array()), "site"), "js"), "html", null, true);
                    echo "\",
                                handle: \"";
                    // line 108
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "handle", array()), "js"), "html", null, true);
                    echo "\",
                                type: \"";
                    // line 109
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "type", array()), "html", null, true);
                    echo "\",
                                entryTypes: [
                                    ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "getEntryTypes", array(), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                        // line 112
                        echo "                                        {
                                            id: ";
                        // line 113
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "id", array()), "html", null, true);
                        echo ",
                                            name: \"";
                        // line 114
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "name", array()), "site"), "js"), "html", null, true);
                        echo "\",
                                            handle: \"";
                        // line 115
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "handle", array()), "js"), "html", null, true);
                        echo "\"
                                        }";
                        // line 116
                        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                            echo ",";
                        }
                        // line 117
                        echo "                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "                                ]
                            }";
                    // line 119
                    if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 120
                    echo "                        ";
                }
                // line 121
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                ";
        }
        // line 123
        echo "            ],
            editableCategoryGroups: [
                ";
        // line 125
        if ((isset($context["isInstalled"]) || array_key_exists("isInstalled", $context) ? $context["isInstalled"] : (function () { throw new Twig_Error_Runtime('Variable "isInstalled" does not exist.', 125, $this->source); })())) {
            // line 126
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 126, $this->source); })()), "app", array()), "categories", array()), "getEditableGroups", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 127
                echo "                        {id: ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "id", array()), "html", null, true);
                echo ", name: \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "name", array()), "site"), "js"), "html", null, true);
                echo "\", handle: \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "handle", array()), "js"), "html", null, true);
                echo "\"}";
                if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ",";
                }
                // line 128
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                ";
        }
        // line 130
        echo "            ]
        };

        // Picture element HTML5 shiv
        document.createElement('picture');
    ";
        Craft::$app->getView()->registerJs(ob_get_clean(), 1);
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 130,  507 => 129,  493 => 128,  482 => 127,  464 => 126,  462 => 125,  458 => 123,  455 => 122,  441 => 121,  438 => 120,  434 => 119,  431 => 118,  417 => 117,  413 => 116,  409 => 115,  405 => 114,  401 => 113,  398 => 112,  381 => 111,  376 => 109,  372 => 108,  368 => 107,  364 => 106,  361 => 105,  358 => 104,  340 => 103,  338 => 102,  334 => 100,  320 => 99,  316 => 98,  312 => 97,  308 => 96,  304 => 95,  301 => 94,  284 => 93,  279 => 91,  273 => 88,  269 => 87,  265 => 86,  261 => 85,  256 => 83,  251 => 81,  245 => 78,  241 => 77,  237 => 76,  233 => 75,  229 => 74,  225 => 73,  221 => 72,  217 => 71,  213 => 70,  207 => 67,  203 => 66,  199 => 65,  194 => 64,  189 => 62,  184 => 61,  182 => 60,  177 => 58,  173 => 57,  169 => 56,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  72 => 31,  68 => 29,  66 => 28,  58 => 23,  50 => 18,  47 => 17,  44 => 16,  40 => 1,  38 => 14,  36 => 13,  34 => 8,  31 => 5,  29 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/base\" %}

{# Give the body a .mobile class for mobile devices #}
{% if craft.app.request.isMobileBrowser(true) %}
    {% set bodyClass = (bodyClass is defined and bodyClass ? bodyClass~' ' : '') ~ 'mobile' %}
{% endif %}

{% do view.registerTranslations('app', [
    \"Show\",
    \"Hide\",
]) %}

{% set localeData = craft.app.locale %}
{% set orientation = localeData.getOrientation() %}

{% block foot %}
    <form id=\"x\" method=\"post\" accept-charset=\"UTF-8\">
        {{ csrfInput() }}
    </form>
    <noscript>
        <div class=\"message-container no-access\">
            <div class=\"pane notice\">
                <p>{{ \"JavaScript must be enabled to access the Craft control panel.\"|t('app') }}</p>
            </div>
        </div>
    </noscript>

    {% js at head %}
        // Create the Craft object
        window.Craft = {
            systemUid:             \"{{ craft.app.getSystemUid()|e('js') }}\",
            baseUrl:               \"{{ url()|e('js') }}\",
            baseCpUrl:             \"{{ cpUrl()|e('js') }}\",
            baseSiteUrl:           \"{{ siteUrl()|e('js') }}\",
            actionUrl:             \"{{ actionUrl()|e('js') }}\",
            jqueryPaymentUrl:      \"{{ (view.getAssetManager().getPublishedUrl('@lib/jquery.payment', true)~'/jquery.payment.js')|e('js') }}\",
            scriptName:            \"{{ craft.app.request.getScriptFilename()|e('js') }}\",
            omitScriptNameInUrls:  {{ craft.app.config.general.omitScriptNameInUrls ? 'true' : 'false' }},
            usePathInfo:           {{ craft.app.config.general.usePathInfo ? 'true' : 'false' }},
            useCompressedJs:       {{ craft.app.config.general.useCompressedJs ? 'true' : 'false' }},
            actionTrigger:         \"{{ craft.app.config.general.actionTrigger|e('js') }}\",
            path:                  \"{{ craft.app.request.getPathInfo()|e('js') }}\",
            language:              \"{{ craft.app.language|e('js') }}\",
            timezone:              \"{{ craft.app.getTimeZone()|e('js') }}\",
            siteId:                {{ craft.app.isInstalled and not craft.app.updates.isCraftDbMigrationNeeded ? craft.app.sites.currentSite.id : 'null' }},
            orientation:           \"{{ orientation|e('js') }}\",
            left:                  \"{{ orientation == 'ltr' ? 'left' : 'right' }}\",
            right:                 \"{{ orientation == 'ltr' ? 'right' : 'left' }}\",
            username:              {{ currentUser is defined and currentUser ? ('\"'~currentUser.username|e('js')~'\"')|raw : 'null' }},
            remainingSessionTime:  {{ craft.app.request.getSegment(1) not in ['updates', 'manualupdate'] ? craft.app.user.getRemainingSessionTime() : 0 }},
            Solo:                  {{ CraftSolo }},
            Pro:                   {{ CraftPro }},
            edition:               {{ CraftEdition }},
            isMultiSite:           {{ craft.app.getIsMultiSite() ? 'true' : 'false' }},
            translations:          {},
            maxUploadSize:         {{ craft.io.getMaxUploadSize() }},
            isImagick:             {{ craft.app.images.getIsImagick() ? 'true' : 'false' }},
            forceConfirmUnload:    {{ forceConfirmUnload is defined and forceConfirmUnload ? 'true' : 'false' }},
            defaultIndexCriteria:  { enabledForSite: null },
            {% if craft.app.config.general.enableCsrfProtection %}
                csrfTokenValue:        \"{{ craft.app.request.getCsrfToken()|e('js') }}\",
                csrfTokenName:         \"{{ craft.app.config.general.csrfTokenName|e('js') }}\",
            {% endif %}
            runQueueAutomatically: {{ craft.app.config.general.runQueueAutomatically ? 'true' : 'false' }},
            slugWordSeparator:     \"{{ craft.app.config.general.slugWordSeparator|e('js') }}\",
            limitAutoSlugsToAscii: {{ craft.app.config.general.limitAutoSlugsToAscii ? 'true' : 'false' }},
            fileKinds:             {{ craft.io.getFileKinds()|json_encode|raw }},
            datepickerOptions: {
                constrainInput: false,
                dateFormat: \"{{ localeData.getDateFormat('short', 'jui')|e('js') }}\",
                prevText: '{{ \"Prev\"|t('app')|e('js') }}',
                nextText: '{{ \"Next\"|t('app')|e('js') }}',
                firstDay: {{ currentUser.getPreference('weekStartDay') ?? craft.app.config.general.defaultWeekStartDay }},
                dayNames: {{ localeData.getWeekDayNames('full', true)|json_encode|raw }},
                dayNamesShort: {{ localeData.getWeekDayNames('short', true)|json_encode|raw }},
                dayNamesMin: {{ localeData.getWeekDayNames('abbreviated', true)|json_encode|raw }},
                monthNames: {{ localeData.getMonthNames('full', true)|values|json_encode|raw }},
                monthNamesShort: {{ localeData.getMonthNames('abbreviated', true)|values|json_encode|raw }}
            },
            timepickerOptions: {
                timeFormat: '{{ localeData.getTimeFormat('short', 'php') }}',
                closeOnWindowScroll: false,
                orientation: '{{ orientation == 'ltr' ? 'l' : 'r' }}',
                lang: {
                    am: '{{ localeData.getAMName()|lower }}',
                    AM: '{{ localeData.getAMName() }}',
                    pm: '{{ localeData.getPMName()|lower }}',
                    PM: '{{ localeData.getPMName() }}'
                }
            },
            primarySiteId: {{ craft.app.isInstalled and not craft.app.updates.isCraftDbMigrationNeeded ? craft.app.sites.primarySite.id : 'null' }},
            sites: [
                {% for site in craft.app.sites.getAllSites() %}
                    {
                        id: {{ site.id }},
                        handle: \"{{ site.handle|e('js') }}\",
                        name: \"{{ site.name|t('site')|e('js') }}\"
                    }{% if not loop.last %},{% endif %}
                {% endfor %}
            ],
            publishableSections: [
                {% if isInstalled and currentUser is defined and currentUser %}
                    {% for section in craft.app.sections.getEditableSections() %}
                        {% if section.type != 'single' and currentUser.can('createEntries:'~section.id) %}
                            {
                                id: {{ section.id }},
                                name: \"{{ section.name|t('site')|e('js') }}\",
                                handle: \"{{ section.handle|e('js') }}\",
                                type: \"{{ section.type }}\",
                                entryTypes: [
                                    {% for entryType in section.getEntryTypes() %}
                                        {
                                            id: {{ entryType.id }},
                                            name: \"{{ entryType.name|t('site')|e('js') }}\",
                                            handle: \"{{ entryType.handle|e('js') }}\"
                                        }{% if not loop.last %},{% endif %}
                                    {% endfor %}
                                ]
                            }{% if not loop.last %},{% endif %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            ],
            editableCategoryGroups: [
                {% if isInstalled %}
                    {% for group in craft.app.categories.getEditableGroups() %}
                        {id: {{ group.id }}, name: \"{{ group.name|t('site')|e('js') }}\", handle: \"{{ group.handle|e('js') }}\"}{% if not loop.last %},{% endif %}
                    {% endfor %}
                {% endif %}
            ]
        };

        // Picture element HTML5 shiv
        document.createElement('picture');
    {% endjs %}
{% endblock %}
", "_layouts/basecp", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_layouts/basecp.html");
    }
}
