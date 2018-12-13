<?php

/* entries/_edit */
class __TwigTemplate_729917dece0cd88466bcb977e88f2653f6eba7e7b25c6b2815bafd377925c94c extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "entries/_edit", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'contextMenu' => array($this, 'block_contextMenu'),
            'actionButton' => array($this, 'block_actionButton'),
            'content' => array($this, 'block_content'),
            'details' => array($this, 'block_details'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->loadTemplate("_includes/forms", "entries/_edit", 2);
        // line 4
        $context["sectionHandle"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 4, $this->source); })()), "handle", array());
        // line 5
        $context["isSingle"] = (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 5, $this->source); })()), "type", array()) == "single");
        // line 6
        $context["isVersion"] = (get_class((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 6, $this->source); })())) == "craft\\models\\EntryVersion");
        // line 7
        $context["isDraft"] = (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 7, $this->source); })()), "id", array()) && (get_class((isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 7, $this->source); })())) == "craft\\models\\EntryDraft"));
        // line 9
        $context["canPublish"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 9, $this->source); })()), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) || array_key_exists("permissionSuffix", $context) ? $context["permissionSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "permissionSuffix" does not exist.', 9, $this->source); })()))), "method");
        // line 10
        $context["canSave"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 11
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 11, $this->source); })()), "id", array()) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 11, $this->source); })()), "can", array(0 => ("createEntries" . (isset($context["permissionSuffix"]) || array_key_exists("permissionSuffix", $context) ? $context["permissionSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "permissionSuffix" does not exist.', 11, $this->source); })()))), "method")) && (( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 12
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 12, $this->source); })()), "id", array()) ||  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 12, $this->source); })()), "enabled", array())) || (isset($context["canPublish"]) || array_key_exists("canPublish", $context) ? $context["canPublish"] : (function () { throw new Twig_Error_Runtime('Variable "canPublish" does not exist.', 12, $this->source); })()))) && ((        // line 13
(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 13, $this->source); })()) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 13, $this->source); })()), "authorId", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 13, $this->source); })()), "id", array()))) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 13, $this->source); })()), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) || array_key_exists("permissionSuffix", $context) ? $context["permissionSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "permissionSuffix" does not exist.', 13, $this->source); })()))), "method")));
        // line 17
        echo \Craft::$app->getView()->invokeHook("cp.entries.edit", $context);

        // line 314
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 314, $this->source); })()), "slug", array())) {
            // line 315
            ob_start();
            // line 316
            echo "        window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayBlock("pageTitle", $context, $blocks);
        echo "
    ";
        // line 22
        $this->displayBlock("contextMenu", $context, $blocks);
        echo "
    <div class=\"flex-grow\"></div>
    ";
        // line 24
        if (((isset($context["showPreviewBtn"]) || array_key_exists("showPreviewBtn", $context) ? $context["showPreviewBtn"] : (function () { throw new Twig_Error_Runtime('Variable "showPreviewBtn" does not exist.', 24, $this->source); })()) || array_key_exists("shareUrl", $context))) {
            // line 25
            echo "        ";
            if ((isset($context["showPreviewBtn"]) || array_key_exists("showPreviewBtn", $context) ? $context["showPreviewBtn"] : (function () { throw new Twig_Error_Runtime('Variable "showPreviewBtn" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "            <div class=\"btn livepreviewbtn\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Live Preview", "app"), "html", null, true);
                echo "</div>
        ";
            }
            // line 28
            echo "        ";
            if (array_key_exists("shareUrl", $context)) {
                // line 29
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["shareUrl"]) || array_key_exists("shareUrl", $context) ? $context["shareUrl"] : (function () { throw new Twig_Error_Runtime('Variable "shareUrl" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "\" class=\"btn sharebtn\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Share", "app"), "html", null, true);
                echo "</a>
        ";
            }
            // line 31
            echo "        <div class=\"flex-grow\"></div>
    ";
        }
        // line 33
        echo "    ";
        $this->displayBlock("actionButton", $context, $blocks);
        echo "
";
    }

    // line 36
    public function block_contextMenu($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 37, $this->source); })()), "id", array()) || (isset($context["showSites"]) || array_key_exists("showSites", $context) ? $context["showSites"] : (function () { throw new Twig_Error_Runtime('Variable "showSites" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "        ";
            $this->loadTemplate("entries/_revisions", "entries/_edit", 38)->display($context);
            // line 39
            echo "    ";
        }
    }

    // line 42
    public function block_actionButton($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if ((isset($context["isDraft"]) || array_key_exists("isDraft", $context) ? $context["isDraft"] : (function () { throw new Twig_Error_Runtime('Variable "isDraft" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "
        <input type=\"hidden\" name=\"action\" value=\"entry-revisions/save-draft\">
        ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction((((isset($context["baseCpEditUrl"]) || array_key_exists("baseCpEditUrl", $context) ? $context["baseCpEditUrl"] : (function () { throw new Twig_Error_Runtime('Variable "baseCpEditUrl" does not exist.', 46, $this->source); })()) . "/drafts/") . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 46, $this->source); })()), "draftId", array()))), "html", null, true);
            echo "
        <input type=\"hidden\" name=\"draftId\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 47, $this->source); })()), "draftId", array()), "html", null, true);
            echo "\">

        <div class=\"btngroup\">
            <input type=\"submit\" class=\"btn submit\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save draft", "app"), "html", null, true);
            echo "\">

            ";
            // line 53
            echo "            ";
            $context["canPublishDraft"] = ((            // line 54
(isset($context["canPublish"]) || array_key_exists("canPublish", $context) ? $context["canPublish"] : (function () { throw new Twig_Error_Runtime('Variable "canPublish" does not exist.', 54, $this->source); })()) && ((            // line 55
(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 55, $this->source); })()) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 55, $this->source); })()), "authorId", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 55, $this->source); })()), "id", array()))) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 55, $this->source); })()), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) || array_key_exists("permissionSuffix", $context) ? $context["permissionSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "permissionSuffix" does not exist.', 55, $this->source); })()))), "method"))) && ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 56
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 56, $this->source); })()), "creatorId", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 56, $this->source); })()), "id", array())) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 56, $this->source); })()), "can", array(0 => ("publishPeerEntryDrafts" . (isset($context["permissionSuffix"]) || array_key_exists("permissionSuffix", $context) ? $context["permissionSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "permissionSuffix" does not exist.', 56, $this->source); })()))), "method")));
            // line 58
            echo "
            ";
            // line 60
            echo "            ";
            $context["canDeleteDraft"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 61
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 61, $this->source); })()), "creatorId", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 61, $this->source); })()), "id", array())) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 61, $this->source); })()), "can", array(0 => ("deletePeerEntryDrafts" . (isset($context["permissionSuffix"]) || array_key_exists("permissionSuffix", $context) ? $context["permissionSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "permissionSuffix" does not exist.', 61, $this->source); })()))), "method"));
            // line 63
            echo "
            ";
            // line 64
            if (((isset($context["canPublishDraft"]) || array_key_exists("canPublishDraft", $context) ? $context["canPublishDraft"] : (function () { throw new Twig_Error_Runtime('Variable "canPublishDraft" does not exist.', 64, $this->source); })()) || (isset($context["canDeleteDraft"]) || array_key_exists("canDeleteDraft", $context) ? $context["canDeleteDraft"] : (function () { throw new Twig_Error_Runtime('Variable "canDeleteDraft" does not exist.', 64, $this->source); })()))) {
                // line 65
                echo "                <div class=\"btn submit menubtn\"></div>
                <div class=\"menu\">
                    ";
                // line 67
                if ((isset($context["canPublishDraft"]) || array_key_exists("canPublishDraft", $context) ? $context["canPublishDraft"] : (function () { throw new Twig_Error_Runtime('Variable "canPublishDraft" does not exist.', 67, $this->source); })())) {
                    // line 68
                    echo "                        <ul>
                            <li><a class=\"formsubmit\"
                                   data-action=\"entry-revisions/publish-draft\"
                                   data-redirect=\"";
                    // line 71
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 71, $this->source); })()), "getCpEditUrl", array(), "method") . "#"))), "html", null, true);
                    echo "\">
                                    ";
                    // line 72
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Publish draft", "app"), "html", null, true);
                    echo "
                                </a></li>
                        </ul>
                    ";
                }
                // line 76
                echo "
                    ";
                // line 77
                if (((isset($context["canPublishDraft"]) || array_key_exists("canPublishDraft", $context) ? $context["canPublishDraft"] : (function () { throw new Twig_Error_Runtime('Variable "canPublishDraft" does not exist.', 77, $this->source); })()) && (isset($context["canDeleteDraft"]) || array_key_exists("canDeleteDraft", $context) ? $context["canDeleteDraft"] : (function () { throw new Twig_Error_Runtime('Variable "canDeleteDraft" does not exist.', 77, $this->source); })()))) {
                    // line 78
                    echo "                        <hr>
                    ";
                }
                // line 80
                echo "
                    ";
                // line 81
                if ((isset($context["canDeleteDraft"]) || array_key_exists("canDeleteDraft", $context) ? $context["canDeleteDraft"] : (function () { throw new Twig_Error_Runtime('Variable "canDeleteDraft" does not exist.', 81, $this->source); })())) {
                    // line 82
                    echo "                        <ul>
                            <li><a class=\"formsubmit\"
                                   data-action=\"entry-revisions/delete-draft\"
                                   data-confirm=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Are you sure you want to delete this draft?", "app"), "html", null, true);
                    echo "\"
                                   data-redirect=\"";
                    // line 86
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 86, $this->source); })()), "getCpEditUrl", array(), "method") . "#"))), "html", null, true);
                    echo "\">
                                    ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete draft", "app"), "html", null, true);
                    echo "
                                </a></li>
                        </ul>
                    ";
                }
                // line 91
                echo "                </div>
            ";
            }
            // line 93
            echo "        </div>

    ";
        } elseif (        // line 95
(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 95, $this->source); })())) {
            // line 96
            echo "
        ";
            // line 98
            echo "        ";
            if ((            // line 99
(isset($context["canPublish"]) || array_key_exists("canPublish", $context) ? $context["canPublish"] : (function () { throw new Twig_Error_Runtime('Variable "canPublish" does not exist.', 99, $this->source); })()) && ((            // line 100
(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 100, $this->source); })()) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 100, $this->source); })()), "authorId", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 100, $this->source); })()), "id", array()))) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 100, $this->source); })()), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) || array_key_exists("permissionSuffix", $context) ? $context["permissionSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "permissionSuffix" does not exist.', 100, $this->source); })()))), "method")))) {
                // line 102
                echo "
            <input type=\"hidden\" name=\"action\" value=\"entry-revisions/revert-entry-to-version\">
            ";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 104, $this->source); })()), "getCpEditUrl", array(), "method")), "html", null, true);
                echo "
            <input type=\"hidden\" name=\"versionId\" value=\"";
                // line 105
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 105, $this->source); })()), "versionId", array()), "html", null, true);
                echo "\">

            <div class=\"secondary-buttons\">
                <input type=\"button\" class=\"btn submit formsubmit\" value=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Revert entry to this version", "app"), "html", null, true);
                echo "\">
            </div>
        ";
            }
            // line 111
            echo "
    ";
        } elseif (        // line 112
(isset($context["canSave"]) || array_key_exists("canSave", $context) ? $context["canSave"] : (function () { throw new Twig_Error_Runtime('Variable "canSave" does not exist.', 112, $this->source); })())) {
            // line 113
            echo "
        <input type=\"hidden\" name=\"action\" value=\"entries/save-entry\">
        ";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction(("entries/" . (isset($context["sectionHandle"]) || array_key_exists("sectionHandle", $context) ? $context["sectionHandle"] : (function () { throw new Twig_Error_Runtime('Variable "sectionHandle" does not exist.', 115, $this->source); })()))), "html", null, true);
            echo "

        <div class=\"btngroup\">
            <input type=\"submit\" class=\"btn submit\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
            echo "\">

            <div class=\"btn submit menubtn\"></div>
            <div class=\"menu\">
                <ul>
                    <li><a class=\"formsubmit\" data-redirect=\"";
            // line 123
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array((isset($context["continueEditingUrl"]) || array_key_exists("continueEditingUrl", $context) ? $context["continueEditingUrl"] : (function () { throw new Twig_Error_Runtime('Variable "continueEditingUrl" does not exist.', 123, $this->source); })()))), "html", null, true);
            echo "\">
                            ";
            // line 124
            echo $context["forms"]->macro_optionShortcutLabel("S");
            echo "
                            ";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save and continue editing", "app"), "html", null, true);
            echo "
                        </a></li>

                    ";
            // line 128
            $context["nextEntryParams"] = array();
            // line 129
            echo "                    ";
            if ((isset($context["showEntryTypes"]) || array_key_exists("showEntryTypes", $context) ? $context["showEntryTypes"] : (function () { throw new Twig_Error_Runtime('Variable "showEntryTypes" does not exist.', 129, $this->source); })())) {
                // line 130
                echo "                        ";
                $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) || array_key_exists("nextEntryParams", $context) ? $context["nextEntryParams"] : (function () { throw new Twig_Error_Runtime('Variable "nextEntryParams" does not exist.', 130, $this->source); })()), array(0 => "typeId={type.id}"));
                // line 131
                echo "                    ";
            }
            // line 132
            echo "                    ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 132, $this->source); })()), "type", array()) == "structure")) {
                // line 133
                echo "                        ";
                $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) || array_key_exists("nextEntryParams", $context) ? $context["nextEntryParams"] : (function () { throw new Twig_Error_Runtime('Variable "nextEntryParams" does not exist.', 133, $this->source); })()), array(0 => "parentId={parent.id}"));
                // line 134
                echo "                    ";
            }
            // line 135
            echo "
                    ";
            // line 136
            if ( !(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 136, $this->source); })())) {
                // line 137
                echo "                        <li><a class=\"formsubmit\" data-redirect=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array((((isset($context["nextEntryUrl"]) || array_key_exists("nextEntryUrl", $context) ? $context["nextEntryUrl"] : (function () { throw new Twig_Error_Runtime('Variable "nextEntryUrl" does not exist.', 137, $this->source); })()) . (((isset($context["nextEntryParams"]) || array_key_exists("nextEntryParams", $context) ? $context["nextEntryParams"] : (function () { throw new Twig_Error_Runtime('Variable "nextEntryParams" does not exist.', 137, $this->source); })())) ? (("?" . twig_join_filter((isset($context["nextEntryParams"]) || array_key_exists("nextEntryParams", $context) ? $context["nextEntryParams"] : (function () { throw new Twig_Error_Runtime('Variable "nextEntryParams" does not exist.', 137, $this->source); })()), "&"))) : (""))) . "#"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save and add another", "app"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 139
            echo "
                    <li><a class=\"formsubmit\" data-action=\"entry-revisions/save-draft\" data-redirect=\"";
            // line 140
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array(((isset($context["baseCpEditUrl"]) || array_key_exists("baseCpEditUrl", $context) ? $context["baseCpEditUrl"] : (function () { throw new Twig_Error_Runtime('Variable "baseCpEditUrl" does not exist.', 140, $this->source); })()) . "/drafts/{draftId}#"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save as a draft", "app"), "html", null, true);
            echo "</a></li>

                    ";
            // line 142
            if (( !(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 142, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 142, $this->source); })()), "id", array()))) {
                // line 143
                echo "                        <li><a class=\"formsubmit\" data-param=\"duplicate\" data-value=\"1\" data-redirect=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array(((isset($context["continueEditingUrl"]) || array_key_exists("continueEditingUrl", $context) ? $context["continueEditingUrl"] : (function () { throw new Twig_Error_Runtime('Variable "continueEditingUrl" does not exist.', 143, $this->source); })()) . "#"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save as a new entry", "app"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 145
            echo "                </ul>

                ";
            // line 147
            if ((( !(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 147, $this->source); })()) &&  !(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 147, $this->source); })())) && (isset($context["canDeleteEntry"]) || array_key_exists("canDeleteEntry", $context) ? $context["canDeleteEntry"] : (function () { throw new Twig_Error_Runtime('Variable "canDeleteEntry" does not exist.', 147, $this->source); })()))) {
                // line 148
                echo "                    <hr>
                    <ul>
                        <li><a class=\"formsubmit error\" data-action=\"entries/delete-entry\" data-confirm=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Are you sure you want to delete this entry?", "app"), "html", null, true);
                echo "\" data-redirect=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array("entries#")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "</a></li>
                    </ul>
                ";
            }
            // line 153
            echo "            </div>
        </div>

    ";
        } else {
            // line 157
            echo "
        <input type=\"hidden\" name=\"action\" value=\"entry-revisions/save-draft\">
        ";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction(((isset($context["baseCpEditUrl"]) || array_key_exists("baseCpEditUrl", $context) ? $context["baseCpEditUrl"] : (function () { throw new Twig_Error_Runtime('Variable "baseCpEditUrl" does not exist.', 159, $this->source); })()) . "/drafts/{draftId}")), "html", null, true);
            echo "

        <input type=\"submit\" class=\"btn submit first\" value=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save as a draft", "app"), "html", null, true);
            echo "\">

    ";
        }
    }

    // line 167
    public function block_content($context, array $blocks = array())
    {
        // line 168
        echo "    ";
        if ( !(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 168, $this->source); })())) {
            // line 169
            echo "        <input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 169, $this->source); })()), "id", array()), "html", null, true);
            echo "\">
        ";
            // line 170
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 170, $this->source); })()), "id", array())) {
                echo "<input type=\"hidden\" name=\"entryId\" value=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 170, $this->source); })()), "id", array()), "html", null, true);
                echo "\">";
            }
            // line 171
            echo "        ";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 171, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
                echo "<input type=\"hidden\" name=\"siteId\" value=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 171, $this->source); })()), "siteId", array()), "html", null, true);
                echo "\">";
            }
            // line 172
            echo "    ";
        } else {
            // line 173
            echo "        <input type=\"hidden\" name=\"versionId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 173, $this->source); })()), "versionId", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 175
        echo "
    <div id=\"fields\">
        ";
        // line 177
        $this->loadTemplate("entries/_fields", "entries/_edit", 177)->display(array_merge($context, array("static" =>         // line 178
(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 178, $this->source); })()))));
        // line 180
        echo "    </div>

    ";
        // line 183
        echo "    ";
        echo \Craft::$app->getView()->invokeHook("cp.entries.edit.content", $context);

    }

    // line 186
    public function block_details($context, array $blocks = array())
    {
        // line 187
        echo "    ";
        if (( !(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 187, $this->source); })()) || (isset($context["canPublish"]) || array_key_exists("canPublish", $context) ? $context["canPublish"] : (function () { throw new Twig_Error_Runtime('Variable "canPublish" does not exist.', 187, $this->source); })()))) {
            // line 188
            echo "        <div id=\"settings\" class=\"meta\">

            ";
            // line 190
            if ( !(isset($context["isSingle"]) || array_key_exists("isSingle", $context) ? $context["isSingle"] : (function () { throw new Twig_Error_Runtime('Variable "isSingle" does not exist.', 190, $this->source); })())) {
                // line 191
                echo "                ";
                if ((isset($context["showEntryTypes"]) || array_key_exists("showEntryTypes", $context) ? $context["showEntryTypes"] : (function () { throw new Twig_Error_Runtime('Variable "showEntryTypes" does not exist.', 191, $this->source); })())) {
                    // line 192
                    echo "                    ";
                    echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Type", "app"), "id" => "entryType", "name" => "typeId", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 196
(isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 196, $this->source); })()), "id", array()), "options" =>                     // line 197
(isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "entryTypeOptions" does not exist.', 197, $this->source); })())));
                    // line 198
                    echo "
                ";
                }
                // line 200
                echo "
                ";
                // line 201
                echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Slug", "app"), "siteId" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 203
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 203, $this->source); })()), "siteId", array()), "id" => "slug", "name" => "slug", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 206
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 206, $this->source); })()), "slug", array()), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enter slug", "app"), "errors" => (( !                // line 208
(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 208, $this->source); })())) ? (twig_array_merge(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 208, $this->source); })()), "getErrors", array(0 => "slug"), "method"), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 208, $this->source); })()), "getErrors", array(0 => "uri"), "method"))) : ("")), "disabled" =>                 // line 209
(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 209, $this->source); })())));
                // line 210
                echo "

                ";
                // line 212
                if (array_key_exists("parentOptionCriteria", $context)) {
                    // line 213
                    echo "                    ";
                    echo $context["forms"]->macro_elementSelectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Parent", "app"), "id" => "parentId", "name" => "parentId", "elementType" =>                     // line 217
(isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 217, $this->source); })()), "selectionLabel" => $this->extensions['craft\web\twig\Extension']->translateFilter("Choose", "app"), "sources" => array(0 => ("section:" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 219
(isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 219, $this->source); })()), "id", array()))), "criteria" =>                     // line 220
(isset($context["parentOptionCriteria"]) || array_key_exists("parentOptionCriteria", $context) ? $context["parentOptionCriteria"] : (function () { throw new Twig_Error_Runtime('Variable "parentOptionCriteria" does not exist.', 220, $this->source); })()), "limit" => 1, "elements" => (((                    // line 222
array_key_exists("parent", $context) && (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 222, $this->source); })()))) ? (array(0 => (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 222, $this->source); })()))) : ("")), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 223
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 223, $this->source); })()), "getErrors", array(0 => "parent"), "method")));
                    // line 224
                    echo "
                ";
                }
                // line 226
                echo "
                ";
                // line 227
                if ((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 227, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 227, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 227, $this->source); })()), "can", array(0 => ("editPeerEntries" . (isset($context["permissionSuffix"]) || array_key_exists("permissionSuffix", $context) ? $context["permissionSuffix"] : (function () { throw new Twig_Error_Runtime('Variable "permissionSuffix" does not exist.', 227, $this->source); })()))), "method"))) {
                    // line 228
                    echo "                    ";
                    echo $context["forms"]->macro_elementSelectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Author", "app"), "id" => "author", "name" => "author", "elementType" =>                     // line 232
(isset($context["userElementType"]) || array_key_exists("userElementType", $context) ? $context["userElementType"] : (function () { throw new Twig_Error_Runtime('Variable "userElementType" does not exist.', 232, $this->source); })()), "selectionLabel" => $this->extensions['craft\web\twig\Extension']->translateFilter("Choose", "app"), "criteria" =>                     // line 234
(isset($context["authorOptionCriteria"]) || array_key_exists("authorOptionCriteria", $context) ? $context["authorOptionCriteria"] : (function () { throw new Twig_Error_Runtime('Variable "authorOptionCriteria" does not exist.', 234, $this->source); })()), "limit" => 1, "elements" => (((                    // line 236
array_key_exists("author", $context) && (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 236, $this->source); })()))) ? (array(0 => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 236, $this->source); })()))) : (""))));
                    // line 237
                    echo "
                ";
                }
                // line 239
                echo "
                ";
                // line 240
                echo $context["forms"]->macro_dateTimeField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Post Date", "app"), "id" => "postDate", "name" => "postDate", "value" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 244
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 244, $this->source); })()), "postDate", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 244, $this->source); })()), "postDate", array())) : (null)), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 245
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 245, $this->source); })()), "getErrors", array(0 => "postDate"), "method"), "disabled" =>                 // line 246
(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 246, $this->source); })())));
                // line 247
                echo "

                ";
                // line 249
                echo $context["forms"]->macro_dateTimeField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Expiry Date", "app"), "id" => "expiryDate", "name" => "expiryDate", "value" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 253
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 253, $this->source); })()), "expiryDate", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 253, $this->source); })()), "expiryDate", array())) : (null)), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 254
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 254, $this->source); })()), "getErrors", array(0 => "expiryDate"), "method"), "disabled" =>                 // line 255
(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 255, $this->source); })())));
                // line 256
                echo "
            ";
            }
            // line 258
            echo "
            ";
            // line 259
            if ((isset($context["canPublish"]) || array_key_exists("canPublish", $context) ? $context["canPublish"] : (function () { throw new Twig_Error_Runtime('Variable "canPublish" does not exist.', 259, $this->source); })())) {
                // line 260
                echo "                ";
                echo $context["forms"]->macro_lightswitchField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enabled", "app"), "id" => "enabled", "name" => "enabled", "on" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 264
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 264, $this->source); })()), "enabled", array()), "disabled" =>                 // line 265
(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 265, $this->source); })())));
                // line 266
                echo "
            ";
            }
            // line 268
            echo "
            ";
            // line 269
            if ((isset($context["showSites"]) || array_key_exists("showSites", $context) ? $context["showSites"] : (function () { throw new Twig_Error_Runtime('Variable "showSites" does not exist.', 269, $this->source); })())) {
                // line 270
                echo "                ";
                echo $context["forms"]->macro_lightswitchField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enabled for site", "app"), "id" => "enabledForSite", "name" => "enabledForSite", "on" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 274
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 274, $this->source); })()), "enabledForSite", array()), "disabled" =>                 // line 275
(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 275, $this->source); })())));
                // line 276
                echo "
            ";
            }
            // line 278
            echo "        </div><!-- #settings -->

        ";
            // line 280
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 280, $this->source); })()), "id", array())) {
                // line 281
                echo "            <hr>
            <div class=\"meta read-only\">
                <div class=\"data\">
                    <h5 class=\"heading\">";
                // line 284
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Created at", "app"), "html", null, true);
                echo "</h5>
                    <div class=\"value\">";
                // line 285
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->datetimeFilter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 285, $this->source); })()), "dateCreated", array()), "short"), "html", null, true);
                echo "</div>
                </div>
                <div class=\"data\">
                    <h5 class=\"heading\">";
                // line 288
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Updated at", "app"), "html", null, true);
                echo "</h5>
                    <div class=\"value\">";
                // line 289
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->datetimeFilter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 289, $this->source); })()), "dateUpdated", array()), "short"), "html", null, true);
                echo "</div>
                </div>
                ";
                // line 291
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 291, $this->source); })()), "revisionNotes", array())) {
                    // line 292
                    echo "                    <div class=\"data\">
                        <h5 class=\"heading\">";
                    // line 293
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Notes", "app"), "html", null, true);
                    echo "</h5>
                        <div class=\"value\">";
                    // line 294
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 294, $this->source); })()), "revisionNotes", array()), "html", null, true);
                    echo "</div>
                    </div>
                ";
                }
                // line 297
                echo "            </div>
        ";
            }
            // line 299
            echo "
    ";
        }
        // line 301
        echo "
    ";
        // line 303
        echo "    ";
        echo \Craft::$app->getView()->invokeHook("cp.entries.edit.details", $context);

        // line 304
        echo "
    ";
        // line 305
        if (((( !(isset($context["isDraft"]) || array_key_exists("isDraft", $context) ? $context["isDraft"] : (function () { throw new Twig_Error_Runtime('Variable "isDraft" does not exist.', 305, $this->source); })()) &&  !(isset($context["isVersion"]) || array_key_exists("isVersion", $context) ? $context["isVersion"] : (function () { throw new Twig_Error_Runtime('Variable "isVersion" does not exist.', 305, $this->source); })())) && (isset($context["canSave"]) || array_key_exists("canSave", $context) ? $context["canSave"] : (function () { throw new Twig_Error_Runtime('Variable "canSave" does not exist.', 305, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 305, $this->source); })()), "enableVersioning", array()))) {
            // line 306
            echo "        <hr>
        <div class=\"meta\">
            <textarea id=\"revision-notes\" name=\"revisionNotes\" class=\"text fullwidth\" placeholder=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Notes about your changes", "app"), "html", null, true);
            echo "\" autocomplete=\"off\"></textarea>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "entries/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 308,  626 => 306,  624 => 305,  621 => 304,  617 => 303,  614 => 301,  610 => 299,  606 => 297,  600 => 294,  596 => 293,  593 => 292,  591 => 291,  586 => 289,  582 => 288,  576 => 285,  572 => 284,  567 => 281,  565 => 280,  561 => 278,  557 => 276,  555 => 275,  554 => 274,  552 => 270,  550 => 269,  547 => 268,  543 => 266,  541 => 265,  540 => 264,  538 => 260,  536 => 259,  533 => 258,  529 => 256,  527 => 255,  526 => 254,  525 => 253,  524 => 249,  520 => 247,  518 => 246,  517 => 245,  516 => 244,  515 => 240,  512 => 239,  508 => 237,  506 => 236,  505 => 234,  504 => 232,  502 => 228,  500 => 227,  497 => 226,  493 => 224,  491 => 223,  490 => 222,  489 => 220,  488 => 219,  487 => 217,  485 => 213,  483 => 212,  479 => 210,  477 => 209,  476 => 208,  475 => 206,  474 => 203,  473 => 201,  470 => 200,  466 => 198,  464 => 197,  463 => 196,  461 => 192,  458 => 191,  456 => 190,  452 => 188,  449 => 187,  446 => 186,  440 => 183,  436 => 180,  434 => 178,  433 => 177,  429 => 175,  423 => 173,  420 => 172,  413 => 171,  407 => 170,  402 => 169,  399 => 168,  396 => 167,  388 => 161,  383 => 159,  379 => 157,  373 => 153,  363 => 150,  359 => 148,  357 => 147,  353 => 145,  345 => 143,  343 => 142,  336 => 140,  333 => 139,  325 => 137,  323 => 136,  320 => 135,  317 => 134,  314 => 133,  311 => 132,  308 => 131,  305 => 130,  302 => 129,  300 => 128,  294 => 125,  290 => 124,  286 => 123,  278 => 118,  272 => 115,  268 => 113,  266 => 112,  263 => 111,  257 => 108,  251 => 105,  247 => 104,  243 => 102,  241 => 100,  240 => 99,  238 => 98,  235 => 96,  233 => 95,  229 => 93,  225 => 91,  218 => 87,  214 => 86,  210 => 85,  205 => 82,  203 => 81,  200 => 80,  196 => 78,  194 => 77,  191 => 76,  184 => 72,  180 => 71,  175 => 68,  173 => 67,  169 => 65,  167 => 64,  164 => 63,  162 => 61,  160 => 60,  157 => 58,  155 => 56,  154 => 55,  153 => 54,  151 => 53,  146 => 50,  140 => 47,  136 => 46,  132 => 44,  129 => 43,  126 => 42,  121 => 39,  118 => 38,  115 => 37,  112 => 36,  105 => 33,  101 => 31,  93 => 29,  90 => 28,  84 => 26,  81 => 25,  79 => 24,  74 => 22,  69 => 21,  66 => 20,  62 => 1,  57 => 316,  55 => 315,  53 => 314,  50 => 17,  48 => 13,  47 => 12,  46 => 11,  45 => 10,  43 => 9,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% import \"_includes/forms\" as forms %}

{% set sectionHandle = section.handle %}
{% set isSingle = section.type == 'single' %}
{% set isVersion = className(entry) == 'craft\\\\models\\\\EntryVersion' %}
{% set isDraft = entry.id and className(entry) == 'craft\\\\models\\\\EntryDraft' %}

{% set canPublish = currentUser.can('publishEntries'~permissionSuffix) %}
{% set canSave = (
    (entry.id or currentUser.can('createEntries'~permissionSuffix)) and
    (not entry.id or not entry.enabled or canPublish) and
    (isSingle or entry.authorId == currentUser.id or currentUser.can('publishPeerEntries'~permissionSuffix))
) %}


{% hook \"cp.entries.edit\" %}


{% block header %}
    {{ block('pageTitle') }}
    {{ block('contextMenu') }}
    <div class=\"flex-grow\"></div>
    {% if showPreviewBtn or shareUrl is defined %}
        {% if showPreviewBtn %}
            <div class=\"btn livepreviewbtn\">{{ \"Live Preview\"|t('app') }}</div>
        {% endif %}
        {% if shareUrl is defined %}
            <a href=\"{{ shareUrl }}\" class=\"btn sharebtn\" target=\"_blank\">{{ 'Share'|t('app') }}</a>
        {% endif %}
        <div class=\"flex-grow\"></div>
    {% endif %}
    {{ block('actionButton') }}
{% endblock %}

{% block contextMenu %}
    {% if entry.id or showSites %}
        {% include \"entries/_revisions\" %}
    {% endif %}
{% endblock %}

{% block actionButton %}
    {% if isDraft %}

        <input type=\"hidden\" name=\"action\" value=\"entry-revisions/save-draft\">
        {{ redirectInput(baseCpEditUrl~'/drafts/'~entry.draftId) }}
        <input type=\"hidden\" name=\"draftId\" value=\"{{ entry.draftId }}\">

        <div class=\"btngroup\">
            <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save draft'|t('app') }}\">

            {# Are they allowed to publish this draft? #}
            {% set canPublishDraft = (
            canPublish and
            (isSingle or entry.authorId == currentUser.id or currentUser.can('publishPeerEntries'~permissionSuffix)) and
            (entry.creatorId == currentUser.id or currentUser.can('publishPeerEntryDrafts'~permissionSuffix))
            ) %}

            {# Are they allowed to delete this draft? #}
            {% set canDeleteDraft = (
                entry.creatorId == currentUser.id or currentUser.can('deletePeerEntryDrafts'~permissionSuffix)
            ) %}

            {% if canPublishDraft or canDeleteDraft %}
                <div class=\"btn submit menubtn\"></div>
                <div class=\"menu\">
                    {% if canPublishDraft %}
                        <ul>
                            <li><a class=\"formsubmit\"
                                   data-action=\"entry-revisions/publish-draft\"
                                   data-redirect=\"{{ (entry.getCpEditUrl()~'#')|hash }}\">
                                    {{ \"Publish draft\"|t('app') }}
                                </a></li>
                        </ul>
                    {% endif %}

                    {% if canPublishDraft and canDeleteDraft %}
                        <hr>
                    {% endif %}

                    {% if canDeleteDraft %}
                        <ul>
                            <li><a class=\"formsubmit\"
                                   data-action=\"entry-revisions/delete-draft\"
                                   data-confirm=\"{{ 'Are you sure you want to delete this draft?'|t('app') }}\"
                                   data-redirect=\"{{ (entry.getCpEditUrl()~'#')|hash }}\">
                                    {{ 'Delete draft'|t('app') }}
                                </a></li>
                        </ul>
                    {% endif %}
                </div>
            {% endif %}
        </div>

    {% elseif isVersion %}

        {# Are they allowed to publish changes? #}
        {% if
        canPublish and
        (isSingle or entry.authorId == currentUser.id or currentUser.can('publishPeerEntries'~permissionSuffix))
        %}

            <input type=\"hidden\" name=\"action\" value=\"entry-revisions/revert-entry-to-version\">
            {{ redirectInput(entry.getCpEditUrl()) }}
            <input type=\"hidden\" name=\"versionId\" value=\"{{ entry.versionId }}\">

            <div class=\"secondary-buttons\">
                <input type=\"button\" class=\"btn submit formsubmit\" value=\"{{ 'Revert entry to this version'|t('app') }}\">
            </div>
        {% endif %}

    {% elseif canSave %}

        <input type=\"hidden\" name=\"action\" value=\"entries/save-entry\">
        {{ redirectInput('entries/'~sectionHandle) }}

        <div class=\"btngroup\">
            <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t('app') }}\">

            <div class=\"btn submit menubtn\"></div>
            <div class=\"menu\">
                <ul>
                    <li><a class=\"formsubmit\" data-redirect=\"{{ continueEditingUrl|hash }}\">
                            {{ forms.optionShortcutLabel('S') }}
                            {{ \"Save and continue editing\"|t('app') }}
                        </a></li>

                    {% set nextEntryParams = [] %}
                    {% if showEntryTypes %}
                        {% set nextEntryParams = nextEntryParams|merge(['typeId={type.id}']) %}
                    {% endif %}
                    {% if section.type == 'structure' %}
                        {% set nextEntryParams = nextEntryParams|merge(['parentId={parent.id}']) %}
                    {% endif %}

                    {% if not isSingle %}
                        <li><a class=\"formsubmit\" data-redirect=\"{{ (nextEntryUrl~(nextEntryParams ? '?'~nextEntryParams|join('&'))~'#')|hash }}\">{{ \"Save and add another\"|t('app') }}</a></li>
                    {% endif %}

                    <li><a class=\"formsubmit\" data-action=\"entry-revisions/save-draft\" data-redirect=\"{{ (baseCpEditUrl~'/drafts/{draftId}#')|hash }}\">{{ 'Save as a draft'|t('app') }}</a></li>

                    {% if not isSingle and entry.id %}
                        <li><a class=\"formsubmit\" data-param=\"duplicate\" data-value=\"1\" data-redirect=\"{{ (continueEditingUrl~'#')|hash }}\">{{ \"Save as a new entry\"|t('app') }}</a></li>
                    {% endif %}
                </ul>

                {% if not isSingle and not isVersion and canDeleteEntry %}
                    <hr>
                    <ul>
                        <li><a class=\"formsubmit error\" data-action=\"entries/delete-entry\" data-confirm=\"{{ 'Are you sure you want to delete this entry?'|t('app') }}\" data-redirect=\"{{ 'entries#'|hash }}\">{{ 'Delete'|t('app') }}</a></li>
                    </ul>
                {% endif %}
            </div>
        </div>

    {% else %}

        <input type=\"hidden\" name=\"action\" value=\"entry-revisions/save-draft\">
        {{ redirectInput(baseCpEditUrl~'/drafts/{draftId}') }}

        <input type=\"submit\" class=\"btn submit first\" value=\"{{ 'Save as a draft'|t('app') }}\">

    {% endif %}
{% endblock %}


{% block content %}
    {% if not isVersion %}
        <input type=\"hidden\" name=\"sectionId\" value=\"{{ section.id }}\">
        {% if entry.id %}<input type=\"hidden\" name=\"entryId\" value=\"{{ entry.id }}\">{% endif %}
        {% if craft.app.getIsMultiSite() %}<input type=\"hidden\" name=\"siteId\" value=\"{{ entry.siteId }}\">{% endif %}
    {% else %}
        <input type=\"hidden\" name=\"versionId\" value=\"{{ entry.versionId }}\">
    {% endif %}

    <div id=\"fields\">
        {% include \"entries/_fields\" with {
            static: isVersion
        } %}
    </div>

    {# Give plugins a chance to add other things here #}
    {% hook \"cp.entries.edit.content\" %}
{% endblock %}

{% block details %}
    {% if not isSingle or canPublish %}
        <div id=\"settings\" class=\"meta\">

            {% if not isSingle %}
                {% if showEntryTypes %}
                    {{ forms.selectField({
                        label: \"Entry Type\"|t('app'),
                        id: 'entryType',
                        name: 'typeId',
                        value: entryType.id,
                        options: entryTypeOptions
                    }) }}
                {% endif %}

                {{ forms.textField({
                    label: \"Slug\"|t('app'),
                    siteId: entry.siteId,
                    id: 'slug',
                    name: 'slug',
                    value: entry.slug,
                    placeholder: \"Enter slug\"|t('app'),
                    errors: (not isVersion ? entry.getErrors('slug')|merge(entry.getErrors('uri'))),
                    disabled: isVersion
                }) }}

                {% if parentOptionCriteria is defined %}
                    {{ forms.elementSelectField({
                        label: \"Parent\"|t('app'),
                        id: 'parentId',
                        name: 'parentId',
                        elementType: elementType,
                        selectionLabel: \"Choose\"|t('app'),
                        sources: ['section:'~section.id],
                        criteria: parentOptionCriteria,
                        limit: 1,
                        elements: (parent is defined and parent ? [parent]),
                        errors: entry.getErrors('parent')
                    }) }}
                {% endif %}

                {% if CraftEdition == CraftPro and currentUser.can('editPeerEntries'~permissionSuffix) %}
                    {{ forms.elementSelectField({
                        label: \"Author\"|t('app'),
                        id: 'author',
                        name: 'author',
                        elementType: userElementType,
                        selectionLabel: \"Choose\"|t('app'),
                        criteria: authorOptionCriteria,
                        limit: 1,
                        elements: (author is defined and author ? [author])
                    }) }}
                {% endif %}

                {{ forms.dateTimeField({
                    label: \"Post Date\"|t('app'),
                    id: 'postDate',
                    name: 'postDate',
                    value: (entry.postDate ? entry.postDate : null),
                    errors: entry.getErrors('postDate'),
                    disabled: isVersion
                }) }}

                {{ forms.dateTimeField({
                    label: \"Expiry Date\"|t('app'),
                    id: 'expiryDate',
                    name: 'expiryDate',
                    value: (entry.expiryDate ? entry.expiryDate : null),
                    errors: entry.getErrors('expiryDate'),
                    disabled: isVersion
                }) }}
            {% endif %}

            {% if canPublish %}
                {{ forms.lightswitchField({
                    label: \"Enabled\"|t('app'),
                    id: 'enabled',
                    name: 'enabled',
                    on: entry.enabled,
                    disabled: isVersion
                }) }}
            {% endif %}

            {% if showSites %}
                {{ forms.lightswitchField({
                    label: \"Enabled for site\"|t('app'),
                    id: 'enabledForSite',
                    name: 'enabledForSite',
                    on: entry.enabledForSite,
                    disabled: isVersion
                }) }}
            {% endif %}
        </div><!-- #settings -->

        {% if entry.id %}
            <hr>
            <div class=\"meta read-only\">
                <div class=\"data\">
                    <h5 class=\"heading\">{{ \"Created at\"|t('app') }}</h5>
                    <div class=\"value\">{{ entry.dateCreated|datetime('short') }}</div>
                </div>
                <div class=\"data\">
                    <h5 class=\"heading\">{{ \"Updated at\"|t('app') }}</h5>
                    <div class=\"value\">{{ entry.dateUpdated|datetime('short') }}</div>
                </div>
                {% if entry.revisionNotes %}
                    <div class=\"data\">
                        <h5 class=\"heading\">{{ \"Notes\"|t('app') }}</h5>
                        <div class=\"value\">{{ entry.revisionNotes }}</div>
                    </div>
                {% endif %}
            </div>
        {% endif %}

    {% endif %}

    {# Give plugins a chance to add other things here #}
    {% hook \"cp.entries.edit.details\" %}

    {% if not isDraft and not isVersion and canSave and section.enableVersioning %}
        <hr>
        <div class=\"meta\">
            <textarea id=\"revision-notes\" name=\"revisionNotes\" class=\"text fullwidth\" placeholder=\"{{ 'Notes about your changes'|t('app') }}\" autocomplete=\"off\"></textarea>
        </div>
    {% endif %}
{% endblock %}


{% if not entry.slug %}
    {% js %}
        window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');
    {% endjs %}
{% endif %}
", "entries/_edit", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/entries/_edit.html");
    }
}
