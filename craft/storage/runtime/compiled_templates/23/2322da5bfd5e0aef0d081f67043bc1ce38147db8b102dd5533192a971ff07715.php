<?php

/* entries/_revisions */
class __TwigTemplate_4d0f6d82f31012aba6203d990b140d157460b4644d00aa3ea0398eefc8b0e59d extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "entries/_revisions", 1);
        // line 2
        echo "
";
        // line 3
        $context["drafts"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 3, $this->source); })()), "id", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 3, $this->source); })()), "app", array()), "entryRevisions", array()), "getEditableDraftsByEntryId", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 3, $this->source); })()), "id", array()), 1 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 3, $this->source); })()), "siteId", array())), "method")) : (array()));
        // line 4
        $context["baseUrl"] = (((("entries/" . (isset($context["sectionHandle"]) || array_key_exists("sectionHandle", $context) ? $context["sectionHandle"] : (function () { throw new Twig_Error_Runtime('Variable "sectionHandle" does not exist.', 4, $this->source); })())) . "/") . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 4, $this->source); })()), "app", array()), "request", array()), "getSegment", array(0 => 3), "method")) . "/");
        // line 5
        $context["parentIdParam"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 5, $this->source); })()), "app", array()), "request", array()), "getParam", array(0 => "parentId.0"), "method")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 5, $this->source); })()), "app", array()), "request", array()), "getParam", array(0 => "parentId.0"), "method")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 5, $this->source); })()), "app", array()), "request", array()), "getParam", array(0 => "parentId"), "method")));
        // line 6
        $context["params"] = (((isset($context["parentIdParam"]) || array_key_exists("parentIdParam", $context) ? $context["parentIdParam"] : (function () { throw new Twig_Error_Runtime('Variable "parentIdParam" does not exist.', 6, $this->source); })())) ? (array("parentId" => (isset($context["parentIdParam"]) || array_key_exists("parentIdParam", $context) ? $context["parentIdParam"] : (function () { throw new Twig_Error_Runtime('Variable "parentIdParam" does not exist.', 6, $this->source); })()))) : (null));
        // line 7
        echo "
<div id=\"revision-btn\" class=\"btn menubtn\"";
        // line 8
        if ((isset($context["showSites"]) || array_key_exists("showSites", $context) ? $context["showSites"] : (function () { throw new Twig_Error_Runtime('Variable "showSites" does not exist.', 8, $this->source); })())) {
            echo " data-icon=\"world\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["revisionLabel"]) || array_key_exists("revisionLabel", $context) ? $context["revisionLabel"] : (function () { throw new Twig_Error_Runtime('Variable "revisionLabel" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</div>

<div class=\"menu\">
    ";
        // line 11
        if ((isset($context["showSites"]) || array_key_exists("showSites", $context) ? $context["showSites"] : (function () { throw new Twig_Error_Runtime('Variable "showSites" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "        ";
            $context["siteGroups"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 12, $this->source); })()), "app", array()), "sites", array()), "getAllGroups", array(), "method");
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["siteGroups"]) || array_key_exists("siteGroups", $context) ? $context["siteGroups"] : (function () { throw new Twig_Error_Runtime('Variable "siteGroups" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 14
                echo "            ";
                $context["groupSiteIds"] = array_intersect(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "getSiteIds", array(), "method"), (isset($context["siteIds"]) || array_key_exists("siteIds", $context) ? $context["siteIds"] : (function () { throw new Twig_Error_Runtime('Variable "siteIds" does not exist.', 14, $this->source); })()));
                // line 15
                echo "            ";
                if ((isset($context["groupSiteIds"]) || array_key_exists("groupSiteIds", $context) ? $context["groupSiteIds"] : (function () { throw new Twig_Error_Runtime('Variable "groupSiteIds" does not exist.', 15, $this->source); })())) {
                    // line 16
                    echo "                ";
                    if ((twig_length_filter($this->env, (isset($context["siteGroups"]) || array_key_exists("siteGroups", $context) ? $context["siteGroups"] : (function () { throw new Twig_Error_Runtime('Variable "siteGroups" does not exist.', 16, $this->source); })())) > 1)) {
                        echo "<h6>";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "name", array()), "site"), "html", null, true);
                        echo "</h6>";
                    }
                    // line 17
                    echo "                <ul class=\"padded\">
                    ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["groupSiteIds"]) || array_key_exists("groupSiteIds", $context) ? $context["groupSiteIds"] : (function () { throw new Twig_Error_Runtime('Variable "groupSiteIds" does not exist.', 18, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["siteId"]) {
                        // line 19
                        echo "                        ";
                        $context["site"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 19, $this->source); })()), "app", array()), "sites", array()), "getSiteById", array(0 => $context["siteId"]), "method");
                        // line 20
                        echo "                        ";
                        $context["status"] = ((twig_in_filter($context["siteId"], (isset($context["enabledSiteIds"]) || array_key_exists("enabledSiteIds", $context) ? $context["enabledSiteIds"] : (function () { throw new Twig_Error_Runtime('Variable "enabledSiteIds" does not exist.', 20, $this->source); })()))) ? ("enabled") : ("disabled"));
                        // line 21
                        echo "                        <li>
                            ";
                        // line 22
                        if (($context["siteId"] == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 22, $this->source); })()), "siteId", array()))) {
                            // line 23
                            echo "                                <a class=\"sel\">
                                    <div class=\"status ";
                            // line 24
                            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 24, $this->source); })()), "html", null, true);
                            echo "\"></div>";
                            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new Twig_Error_Runtime('Variable "site" does not exist.', 24, $this->source); })()), "name", array()), "site"), "html", null, true);
                            echo "
                                </a>
                            ";
                        } else {
                            // line 27
                            echo "                                ";
                            $context["url"] = craft\helpers\UrlHelper::url(((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new Twig_Error_Runtime('Variable "baseUrl" does not exist.', 27, $this->source); })()) . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new Twig_Error_Runtime('Variable "site" does not exist.', 27, $this->source); })()), "handle", array())), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new Twig_Error_Runtime('Variable "params" does not exist.', 27, $this->source); })()));
                            // line 28
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 28, $this->source); })()), "html", null, true);
                            echo "\">
                                    <div class=\"status ";
                            // line 29
                            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 29, $this->source); })()), "html", null, true);
                            echo "\"></div>";
                            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new Twig_Error_Runtime('Variable "site" does not exist.', 29, $this->source); })()), "name", array()), "site"), "html", null, true);
                            echo "
                                </a>
                            ";
                        }
                        // line 32
                        echo "                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['siteId'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                </ul>
            ";
                }
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (((isset($context["showSites"]) || array_key_exists("showSites", $context) ? $context["showSites"] : (function () { throw new Twig_Error_Runtime('Variable "showSites" does not exist.', 39, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 39, $this->source); })()), "id", array()))) {
            // line 40
            echo "        <hr>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 43, $this->source); })()), "id", array())) {
            // line 44
            echo "        <ul class=\"padded\">
            ";
            // line 45
            $context["currentVersionEditTime"] = (($context["currentVersionEditTime"]) ?? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 45, $this->source); })()), "dateUpdated", array())));
            // line 46
            echo "            <li><a";
            if ((get_class((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 46, $this->source); })())) == "craft\\elements\\Entry")) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 46, $this->source); })()), "getCpEditUrl", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Current", "app"), "html", null, true);
            echo "
                <span class=\"light\">
                    ";
            // line 48
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('timestamp')->getCallable(), array((isset($context["currentVersionEditTime"]) || array_key_exists("currentVersionEditTime", $context) ? $context["currentVersionEditTime"] : (function () { throw new Twig_Error_Runtime('Variable "currentVersionEditTime" does not exist.', 48, $this->source); })()), "short")), "html", null, true);
            // line 49
            if (array_key_exists("currentVersionCreator", $context)) {
                echo ", ";
                echo twig_escape_filter($this->env, (isset($context["currentVersionCreator"]) || array_key_exists("currentVersionCreator", $context) ? $context["currentVersionCreator"] : (function () { throw new Twig_Error_Runtime('Variable "currentVersionCreator" does not exist.', 49, $this->source); })()), "html", null, true);
            }
            // line 50
            echo "                </span>
            </a></li>
        </ul>

        ";
            // line 54
            if ((isset($context["drafts"]) || array_key_exists("drafts", $context) ? $context["drafts"] : (function () { throw new Twig_Error_Runtime('Variable "drafts" does not exist.', 54, $this->source); })())) {
                // line 55
                echo "            <h6>";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Drafts", "app"), "html", null, true);
                echo "</h6>
            <ul class=\"padded\">
                ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["drafts"]) || array_key_exists("drafts", $context) ? $context["drafts"] : (function () { throw new Twig_Error_Runtime('Variable "drafts" does not exist.', 57, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                    // line 58
                    echo "                    <li><a";
                    if (((get_class((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 58, $this->source); })())) == "craft\\models\\EntryDraft") && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["draft"], "draftId", array()) == (isset($context["draftId"]) || array_key_exists("draftId", $context) ? $context["draftId"] : (function () { throw new Twig_Error_Runtime('Variable "draftId" does not exist.', 58, $this->source); })())))) {
                        echo " class=\"sel\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new Twig_Error_Runtime('Variable "baseUrl" does not exist.', 58, $this->source); })()) . "drafts/") . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["draft"], "draftId", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["draft"], "name", array()), "site"), "html", null, true);
                    echo "
                        <span class=\"light\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("by {creator}", "app", array("creator" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["draft"], "creator", array()))), "html", null, true);
                    echo "</span>
                    </a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            </ul>
        ";
            }
            // line 65
            echo "
        ";
            // line 66
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 66, $this->source); })()), "enableVersioning", array())) {
                // line 67
                echo "            ";
                $context["versions"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 67, $this->source); })()), "app", array()), "entryRevisions", array()), "getVersionsByEntryId", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 67, $this->source); })()), "id", array()), 1 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 67, $this->source); })()), "siteId", array())), "method");
                // line 68
                echo "            ";
                if ((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new Twig_Error_Runtime('Variable "versions" does not exist.', 68, $this->source); })())) {
                    // line 69
                    echo "                <h6>";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Recent Versions", "app"), "html", null, true);
                    echo "</h6>
                <ul class=\"padded\">
                    ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new Twig_Error_Runtime('Variable "versions" does not exist.', 71, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                        // line 72
                        echo "                        <li><a";
                        if (((get_class((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 72, $this->source); })())) == "craft\\models\\EntryVersion") && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["version"], "versionId", array()) == (isset($context["versionId"]) || array_key_exists("versionId", $context) ? $context["versionId"] : (function () { throw new Twig_Error_Runtime('Variable "versionId" does not exist.', 72, $this->source); })())))) {
                            echo " class=\"sel\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new Twig_Error_Runtime('Variable "baseUrl" does not exist.', 72, $this->source); })()) . "versions/") . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["version"], "versionId", array()))), "html", null, true);
                        echo "\">
                            ";
                        // line 73
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Version {num}", "app", array("num" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["version"], "num", array()))), "html", null, true);
                        echo "
                            <span class=\"light\">";
                        // line 74
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('timestamp')->getCallable(), array(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["version"], "dateCreated", array()), "short")), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["version"], "getCreator", array(), "method"), "html", null, true);
                        echo "</span>
                        </a></li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                </ul>
            ";
                }
                // line 79
                echo "        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "</div>

";
        // line 83
        if ((get_class((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 83, $this->source); })())) == "craft\\models\\EntryDraft")) {
            // line 84
            echo "    <a id=\"editdraft-btn\" class=\"btn edit icon\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Edit Draft Settings", "app"), "html", null, true);
            echo "\"></a>
    ";
            // line 85
            ob_start();
            // line 86
            echo "        new Craft.EntryDraftEditor(";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 86, $this->source); })()), "draftId", array()), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["revisionLabel"]) || array_key_exists("revisionLabel", $context) ? $context["revisionLabel"] : (function () { throw new Twig_Error_Runtime('Variable "revisionLabel" does not exist.', 86, $this->source); })()), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 86, $this->source); })()), "revisionNotes", array()), "js"), "html", null, true);
            echo "');
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
            // line 88
            echo "    ";
            craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 88, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Draft Name", 1 => "Notes")), "method");
        }
    }

    public function getTemplateName()
    {
        return "entries/_revisions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 88,  287 => 86,  285 => 85,  280 => 84,  278 => 83,  274 => 81,  271 => 80,  268 => 79,  264 => 77,  253 => 74,  249 => 73,  240 => 72,  236 => 71,  230 => 69,  227 => 68,  224 => 67,  222 => 66,  219 => 65,  215 => 63,  206 => 60,  202 => 59,  193 => 58,  189 => 57,  183 => 55,  181 => 54,  175 => 50,  170 => 49,  168 => 48,  156 => 46,  154 => 45,  151 => 44,  149 => 43,  146 => 42,  142 => 40,  140 => 39,  137 => 38,  134 => 37,  128 => 36,  124 => 34,  117 => 32,  109 => 29,  104 => 28,  101 => 27,  93 => 24,  90 => 23,  88 => 22,  85 => 21,  82 => 20,  79 => 19,  75 => 18,  72 => 17,  65 => 16,  62 => 15,  59 => 14,  54 => 13,  51 => 12,  49 => 11,  39 => 8,  36 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{% set drafts = entry.id ? craft.app.entryRevisions.getEditableDraftsByEntryId(entry.id, entry.siteId) : [] %}
{% set baseUrl = \"entries/#{sectionHandle}/#{craft.app.request.getSegment(3)}/\" %}
{% set parentIdParam = craft.app.request.getParam('parentId.0') ?: craft.app.request.getParam('parentId') %}
{% set params = parentIdParam ? { parentId: parentIdParam } : null %}

<div id=\"revision-btn\" class=\"btn menubtn\"{% if showSites %} data-icon=\"world\"{% endif %}>{{ revisionLabel }}</div>

<div class=\"menu\">
    {% if showSites %}
        {% set siteGroups = craft.app.sites.getAllGroups() %}
        {% for group in siteGroups %}
            {% set groupSiteIds = group.getSiteIds()|intersect(siteIds) %}
            {% if groupSiteIds %}
                {% if siteGroups|length > 1 %}<h6>{{ group.name|t('site') }}</h6>{% endif %}
                <ul class=\"padded\">
                    {% for siteId in groupSiteIds %}
                        {% set site = craft.app.sites.getSiteById(siteId) %}
                        {% set status = siteId in enabledSiteIds ? 'enabled' : 'disabled' %}
                        <li>
                            {% if siteId == entry.siteId %}
                                <a class=\"sel\">
                                    <div class=\"status {{ status }}\"></div>{{ site.name|t('site') }}
                                </a>
                            {% else %}
                                {% set url = url(baseUrl~site.handle, params) %}
                                <a href=\"{{ url }}\">
                                    <div class=\"status {{ status }}\"></div>{{ site.name|t('site') }}
                                </a>
                            {% endif %}
                        </li>
                    {% endfor %}
                </ul>
            {% endif %}
        {% endfor %}
    {% endif %}

    {% if showSites and entry.id %}
        <hr>
    {% endif %}

    {% if entry.id %}
        <ul class=\"padded\">
            {% set currentVersionEditTime = currentVersionEditTime ?? entry.dateUpdated %}
            <li><a{% if className(entry) == 'craft\\\\elements\\\\Entry' %} class=\"sel\"{% endif %} href=\"{{ entry.getCpEditUrl() }}\">{{ \"Current\"|t('app') }}
                <span class=\"light\">
                    {{ currentVersionEditTime|timestamp('short') }}
                    {%- if currentVersionCreator is defined %}, {{ currentVersionCreator }}{% endif %}
                </span>
            </a></li>
        </ul>

        {% if drafts %}
            <h6>{{ \"Drafts\"|t('app') }}</h6>
            <ul class=\"padded\">
                {% for draft in drafts %}
                    <li><a{% if className(entry) == 'craft\\\\models\\\\EntryDraft' and draft.draftId == draftId %} class=\"sel\"{% endif %} href=\"{{ url(baseUrl~'drafts/'~draft.draftId) }}\">
                        {{ draft.name|t('site') }}
                        <span class=\"light\">{{ \"by {creator}\"|t('app', { creator: draft.creator }) }}</span>
                    </a></li>
                {% endfor %}
            </ul>
        {% endif %}

        {% if section.enableVersioning %}
            {% set versions = craft.app.entryRevisions.getVersionsByEntryId(entry.id, entry.siteId) %}
            {% if versions %}
                <h6>{{ \"Recent Versions\"|t('app') }}</h6>
                <ul class=\"padded\">
                    {% for version in versions %}
                        <li><a{% if className(entry) == 'craft\\\\models\\\\EntryVersion' and version.versionId == versionId %} class=\"sel\"{% endif %} href=\"{{ url(baseUrl~'versions/'~version.versionId) }}\">
                            {{ \"Version {num}\"|t('app', { num: version.num }) }}
                            <span class=\"light\">{{ version.dateCreated|timestamp('short') }}, {{ version.getCreator() }}</span>
                        </a></li>
                    {% endfor %}
                </ul>
            {% endif %}
        {% endif %}
    {% endif %}
</div>

{% if className(entry) == 'craft\\\\models\\\\EntryDraft' %}
    <a id=\"editdraft-btn\" class=\"btn edit icon\" title=\"{{ 'Edit Draft Settings'|t('app') }}\"></a>
    {% js %}
        new Craft.EntryDraftEditor({{ entry.draftId }}, '{{ revisionLabel|e(\"js\") }}', '{{ entry.revisionNotes|e(\"js\") }}');
    {% endjs %}
    {% do view.registerTranslations('app', [
        \"Draft Name\",
        \"Notes\",
    ]) %}
{% endif %}
", "entries/_revisions", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/entries/_revisions.html");
    }
}
