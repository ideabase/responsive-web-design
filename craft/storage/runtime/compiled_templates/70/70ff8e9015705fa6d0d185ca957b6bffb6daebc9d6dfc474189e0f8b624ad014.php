<?php

/* _layouts/cp */
class __TwigTemplate_15d3322f7f8c37a630aebe158e7fa329f3b638806823e348f305f79ee45c7a97 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 44
        $this->parent = $this->loadTemplate("_layouts/basecp", "_layouts/cp", 44);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'contextMenu' => array($this, 'block_contextMenu'),
            'actionButton' => array($this, 'block_actionButton'),
            'main' => array($this, 'block_main'),
            'tabs' => array($this, 'block_tabs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 47
        $context["queue"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 47, $this->source); })()), "app", array()), "queue", array());
        // line 48
        ob_start();
        // line 49
        echo "    ";
        if (call_user_func_array($this->env->getTest('instance of')->getCallable(), array((isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new Twig_Error_Runtime('Variable "queue" does not exist.', 49, $this->source); })()), "craft\\queue\\QueueInterface"))) {
            // line 50
            echo "        Craft.cp.setJobInfo(";
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new Twig_Error_Runtime('Variable "queue" does not exist.', 50, $this->source); })()), "getJobInfo", array(0 => 100), "method"));
            echo ", false);
        ";
            // line 51
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new Twig_Error_Runtime('Variable "queue" does not exist.', 51, $this->source); })()), "getHasReservedJobs", array(), "method")) {
                // line 52
                echo "            Craft.cp.trackJobProgress(true);
        ";
            } elseif (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 53
(isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new Twig_Error_Runtime('Variable "queue" does not exist.', 53, $this->source); })()), "getHasWaitingJobs", array(), "method")) {
                // line 54
                echo "            Craft.cp.runQueue();
        ";
            }
            // line 56
            echo "    ";
        } else {
            // line 57
            echo "        Craft.cp.enableQueue = false;
    ";
        }
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 61
        $context["hasSystemIcon"] = (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 61, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 61, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 61, $this->source); })()), "rebrand", array()), "isIconUploaded", array()));
        // line 63
        $context["forceConfirmUnload"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 63, $this->source); })()), "app", array()), "session", array()), "hasFlash", array(0 => "error"), "method");
        // line 64
        $context["fullPageForm"] = (array_key_exists("fullPageForm", $context) && (isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new Twig_Error_Runtime('Variable "fullPageForm" does not exist.', 64, $this->source); })()));
        // line 66
        $context["canUpgradeEdition"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 66, $this->source); })()), "app", array()), "getCanUpgradeEdition", array(), "method");
        // line 67
        $context["licensedEdition"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 67, $this->source); })()), "app", array()), "getLicensedEdition", array(), "method");
        // line 68
        $context["isTrial"] = ( !((isset($context["licensedEdition"]) || array_key_exists("licensedEdition", $context) ? $context["licensedEdition"] : (function () { throw new Twig_Error_Runtime('Variable "licensedEdition" does not exist.', 68, $this->source); })()) === null) &&  !((isset($context["licensedEdition"]) || array_key_exists("licensedEdition", $context) ? $context["licensedEdition"] : (function () { throw new Twig_Error_Runtime('Variable "licensedEdition" does not exist.', 68, $this->source); })()) === (isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 68, $this->source); })())));
        // line 70
        $context["sidebar"] = twig_trim_filter((($context["sidebar"]) ?? ((((        $this->hasBlock("sidebar", $context, $blocks) &&  !(null ===         $this->renderBlock("sidebar", $context, $blocks)))) ? (        $this->renderBlock("sidebar", $context, $blocks)) : ("")))));
        // line 71
        $context["details"] = twig_trim_filter((($context["details"]) ?? ((((        $this->hasBlock("details", $context, $blocks) &&  !(null ===         $this->renderBlock("details", $context, $blocks)))) ? (        $this->renderBlock("details", $context, $blocks)) : ("")))));
        // line 72
        $context["crumbs"] = (($context["crumbs"]) ?? (null));
        // line 284
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 284, $this->source); })()), "can", array(0 => "performUpdates"), "method") &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 284, $this->source); })()), "app", array()), "updates", array()), "getIsUpdateInfoCached", array(), "method"))) {
            // line 285
            ob_start();
            // line 286
            echo "        Craft.cp.checkForUpdates();
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 44
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo "    <div id=\"global-container\">
        <header id=\"global-sidebar\" class=\"sidebar\">
            ";
        // line 77
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 77, $this->source); })()), "admin", array()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 77, $this->source); })()), "app", array()), "config", array()), "general", array()), "devMode", array()))) {
            // line 78
            echo "                <div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Craft CMS is running in Dev Mode.", "app"), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 80
        echo "
            <a id=\"system-info\" class=\"menubtn\" role=\"button\" data-menu-anchor=\"#user-info\">
                <div id=\"site-icon\">
                    ";
        // line 83
        if ((isset($context["hasSystemIcon"]) || array_key_exists("hasSystemIcon", $context) ? $context["hasSystemIcon"] : (function () { throw new Twig_Error_Runtime('Variable "hasSystemIcon" does not exist.', 83, $this->source); })())) {
            // line 84
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 84, $this->source); })()), "rebrand", array()), "icon", array()), "url", array()), "html", null, true);
            echo "\" alt=\"\">
                    ";
        } else {
            // line 86
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/circle-c-outline.svg"), "html", null, true);
            echo "
                    ";
        }
        // line 88
        echo "                </div>
                <div id=\"system-name\">
                    <h2>";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new Twig_Error_Runtime('Variable "systemName" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "&nbsp;<span data-icon=\"downangle\"></span></h2>
                    <div id=\"user-info\">
                        ";
        // line 92
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 92, $this->source); })()), "photoId", array())) {
            // line 93
            echo "                            <div id=\"user-photo\">
                                <img width=\"14\" sizes=\"14px\" srcset=\"";
            // line 94
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 94, $this->source); })()), "getThumbUrl", array(0 => 14), "method"), "html", null, true);
            echo " 14w, ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 94, $this->source); })()), "getThumbUrl", array(0 => 28), "method"), "html", null, true);
            echo " 28w\" alt=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 94, $this->source); })()), "getName", array(), "method"), "html", null, true);
            echo "\">
                            </div>
                        ";
        }
        // line 97
        echo "                        <div>";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 97, $this->source); })()), "friendlyName", array()), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </a>

            <div class=\"menu\" data-align=\"left\">
                <ul>
                    <li><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "siteUrl" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("View site", "app"), "html", null, true);
        echo "</a></li>
                </ul>
                <hr>
                <ul>
                    <li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Account", "app"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("logout"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sign out", "app"), "html", null, true);
        echo "</a></li>
                </ul>
            </div>

            <nav id=\"nav\">
                <ul>
                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 115, $this->source); })()), "cp", array()), "nav", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 116
            echo "                        ";
            $context["hasSubnav"] = (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "subnav", array(), "any", true, true) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "subnav", array()));
            // line 117
            echo "                        <li id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()), "html", null, true);
            echo "\" ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "sel", array()) && (isset($context["hasSubnav"]) || array_key_exists("hasSubnav", $context) ? $context["hasSubnav"] : (function () { throw new Twig_Error_Runtime('Variable "hasSubnav" does not exist.', 117, $this->source); })()))) {
                echo " class=\"has-subnav\"";
            }
            echo ">
                            <a";
            // line 118
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "sel", array())) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\">
                                <span class=\"icon icon-mask\">";
            // line 120
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "icon", array(), "any", true, true)) {
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "icon", array())), "html", null, true);
            } elseif (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 122
$context["item"], "fontIcon", array(), "any", true, true)) {
                // line 123
                echo "<span data-icon=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "fontIcon", array()), "html", null, true);
                echo "\"></span>";
            } else {
                // line 125
                $this->loadTemplate("_includes/defaulticon.svg", "_layouts/cp", 125)->display(array_merge($context, array("label" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "label", array()))));
            }
            // line 127
            echo "</span>

                                <span class=\"label\">";
            // line 130
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "label", array()), "html", null, true);
            // line 131
            echo "</span>";
            // line 133
            if (( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "sel", array()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "badgeCount", array()))) {
                // line 134
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "badgeCount", array()), "html", null, true);
                echo "</span>";
            }
            // line 136
            echo "</a>
                            ";
            // line 137
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "sel", array()) && (isset($context["hasSubnav"]) || array_key_exists("hasSubnav", $context) ? $context["hasSubnav"] : (function () { throw new Twig_Error_Runtime('Variable "hasSubnav" does not exist.', 137, $this->source); })()))) {
                // line 138
                echo "                                <ul class=\"subnav\">
                                    ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "subnav", array()));
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
                foreach ($context['_seq'] as $context["itemId"] => $context["item"]) {
                    // line 140
                    echo "                                        ";
                    $context["itemIsSelected"] = ((                    // line 141
array_key_exists("selectedSubnavItem", $context) && ((isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context) ? $context["selectedSubnavItem"] : (function () { throw new Twig_Error_Runtime('Variable "selectedSubnavItem" does not exist.', 141, $this->source); })()) == $context["itemId"])) || ( !                    // line 142
array_key_exists("selectedSubnavItem", $context) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())));
                    // line 145
                    echo "<li>
                                            <a href=\"";
                    // line 146
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "url", array())), "html", null, true);
                    echo "\"";
                    if ((isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new Twig_Error_Runtime('Variable "itemIsSelected" does not exist.', 146, $this->source); })())) {
                        echo " class=\"sel\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "label", array()), "html", null, true);
                    echo "</a>
                                        </li>

                                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                                </ul>
                            ";
            }
            // line 152
            echo "                        </li>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                </ul>
            </nav>

            <div id=\"app-info\">
                <div id=\"edition\" ";
        // line 158
        if ((isset($context["canUpgradeEdition"]) || array_key_exists("canUpgradeEdition", $context) ? $context["canUpgradeEdition"] : (function () { throw new Twig_Error_Runtime('Variable "canUpgradeEdition" does not exist.', 158, $this->source); })())) {
            echo "class=\"hot\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Manage your Craft CMS edition", "app"), "html", null, true);
            echo "\"";
        } else {
            echo "class=\"edition\"";
        }
        echo ">
                    <div id=\"edition-logo\">
                        <div class=\"edition-name\">";
        // line 160
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 160, $this->source); })()), "app", array()), "getEditionName", array(), "method"), "html", null, true);
        echo "</div>
                        ";
        // line 161
        if ((isset($context["isTrial"]) || array_key_exists("isTrial", $context) ? $context["isTrial"] : (function () { throw new Twig_Error_Runtime('Variable "isTrial" does not exist.', 161, $this->source); })())) {
            // line 162
            echo "                            <div class=\"edition-trial\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Trial", "app"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 164
        echo "                    </div>
                </div>
                <div id=\"version\">Craft CMS ";
        // line 166
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 166, $this->source); })()), "app", array()), "version", array()), "html", null, true);
        echo "</div>
            </div>
        </header><!-- #global-sidebar -->

        <div id=\"main-container\">

            ";
        // line 173
        echo "            ";
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 173, $this->source); })()), "cp", array()), "areAlertsCached", array(), "method")) {
            // line 174
            echo "                ";
            $context["alerts"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 174, $this->source); })()), "cp", array()), "getAlerts", array(), "method");
            // line 175
            echo "                ";
            if ((isset($context["alerts"]) || array_key_exists("alerts", $context) ? $context["alerts"] : (function () { throw new Twig_Error_Runtime('Variable "alerts" does not exist.', 175, $this->source); })())) {
                // line 176
                echo "                    <ul id=\"alerts\">
                        ";
                // line 177
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 177, $this->source); })()), "cp", array()), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 178
                    echo "                            <li>";
                    echo $context["alert"];
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "                    </ul>
                ";
            }
            // line 182
            echo "            ";
        } else {
            // line 183
            echo "                ";
            ob_start();
            // line 184
            echo "                Craft.cp.fetchAlerts();
                ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
            // line 186
            echo "            ";
        }
        // line 187
        echo "
            ";
        // line 189
        echo "            <div id=\"notifications-wrapper\">
                <div id=\"notifications\">
                    ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 192
            echo "                        ";
            $context["message"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 192, $this->source); })()), "app", array()), "session", array()), "getFlash", array(0 => $context["type"]), "method");
            // line 193
            echo "                        ";
            if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 193, $this->source); })())) {
                // line 194
                echo "                            <div class=\"notification ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 194, $this->source); })()), "html", null, true);
                echo "</div>
                        ";
            }
            // line 196
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                </div>
            </div>

            ";
        // line 201
        echo "            <div id=\"crumbs\"";
        if ( !(isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new Twig_Error_Runtime('Variable "crumbs" does not exist.', 201, $this->source); })())) {
            echo " class=\"empty\"";
        }
        echo ">
                <a id=\"nav-toggle\" title=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show nav", "app"), "html", null, true);
        echo "\"></a>
                ";
        // line 203
        if ((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new Twig_Error_Runtime('Variable "crumbs" does not exist.', 203, $this->source); })())) {
            // line 204
            echo "                    <nav>
                        <ul>
                            ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new Twig_Error_Runtime('Variable "crumbs" does not exist.', 206, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 207
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["crumb"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["crumb"], "label", array()), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "                        </ul>
                    </nav>
                ";
        }
        // line 212
        echo "            </div>

            ";
        // line 215
        echo "            <main id=\"main\" role=\"main\">

                ";
        // line 217
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new Twig_Error_Runtime('Variable "fullPageForm" does not exist.', 217, $this->source); })())) {
            // line 218
            echo "<form id=\"main-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut";
            if (array_key_exists("saveShortcutRedirect", $context)) {
                echo " data-saveshortcut-redirect=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array((isset($context["saveShortcutRedirect"]) || array_key_exists("saveShortcutRedirect", $context) ? $context["saveShortcutRedirect"] : (function () { throw new Twig_Error_Runtime('Variable "saveShortcutRedirect" does not exist.', 218, $this->source); })()))), "html", null, true);
                echo "\"";
            }
            echo " data-confirm-unload>";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        }
        // line 221
        echo "
                ";
        // line 223
        echo "                <header id=\"header\">
                    ";
        // line 224
        $this->displayBlock('header', $context, $blocks);
        // line 238
        echo "                </header>

                ";
        // line 241
        echo "                <div id=\"main-content\" class=\"";
        if ((isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new Twig_Error_Runtime('Variable "sidebar" does not exist.', 241, $this->source); })())) {
            echo "has-sidebar";
        }
        echo " ";
        if ((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new Twig_Error_Runtime('Variable "details" does not exist.', 241, $this->source); })())) {
            echo "has-details";
        }
        echo "\">
                    ";
        // line 242
        $this->displayBlock('main', $context, $blocks);
        // line 273
        echo "                </div>

                ";
        // line 275
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new Twig_Error_Runtime('Variable "fullPageForm" does not exist.', 275, $this->source); })())) {
            // line 276
            echo "</form><!-- #main-form -->";
        }
        // line 278
        echo "            </main><!-- #main -->
        </div><!-- #main-container -->
    </div><!-- #global-container -->
";
    }

    // line 224
    public function block_header($context, array $blocks = array())
    {
        // line 225
        echo "                        ";
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 230
        echo "                        ";
        $this->displayBlock('contextMenu', $context, $blocks);
        // line 231
        echo "                        <div class=\"flex-grow\"></div>
                        ";
        // line 232
        $this->displayBlock('actionButton', $context, $blocks);
        // line 237
        echo "                    ";
    }

    // line 225
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 226
        echo "                            ";
        if ((array_key_exists("title", $context) && twig_length_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 226, $this->source); })())))) {
            // line 227
            echo "                                <h1>";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 227, $this->source); })()), "html", null, true);
            echo "</h1>
                            ";
        }
        // line 229
        echo "                        ";
    }

    // line 230
    public function block_contextMenu($context, array $blocks = array())
    {
    }

    // line 232
    public function block_actionButton($context, array $blocks = array())
    {
        // line 233
        echo "                            ";
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new Twig_Error_Runtime('Variable "fullPageForm" does not exist.', 233, $this->source); })())) {
            // line 234
            echo "                                <input type=\"submit\" class=\"btn submit\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
            echo "\">
                            ";
        }
        // line 236
        echo "                        ";
    }

    // line 242
    public function block_main($context, array $blocks = array())
    {
        // line 243
        echo "                        ";
        // line 244
        echo "                        ";
        if ( !twig_test_empty((isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new Twig_Error_Runtime('Variable "sidebar" does not exist.', 244, $this->source); })()))) {
            // line 245
            echo "                            <a id=\"sidebar-toggle\"><span id=\"selected-sidebar-item-label\"></span>&nbsp;<span data-icon=\"downangle\"></span></a>
                            <div id=\"sidebar\" class=\"sidebar\">
                                ";
            // line 247
            echo (isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new Twig_Error_Runtime('Variable "sidebar" does not exist.', 247, $this->source); })());
            echo "
                            </div>
                        ";
        }
        // line 250
        echo "
                        ";
        // line 252
        echo "                        <div id=\"content-container\">
                            ";
        // line 253
        $this->displayBlock('tabs', $context, $blocks);
        // line 258
        echo "
                            <div id=\"content\">
                                ";
        // line 260
        $this->displayBlock('content', $context, $blocks);
        // line 263
        echo "                            </div>
                        </div>

                        ";
        // line 267
        echo "                        ";
        if ( !twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new Twig_Error_Runtime('Variable "details" does not exist.', 267, $this->source); })()))) {
            // line 268
            echo "                            <div id=\"details\">
                                ";
            // line 269
            echo (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new Twig_Error_Runtime('Variable "details" does not exist.', 269, $this->source); })());
            echo "
                            </div>
                        ";
        }
        // line 272
        echo "                    ";
    }

    // line 253
    public function block_tabs($context, array $blocks = array())
    {
        // line 254
        echo "                                ";
        if ((array_key_exists("tabs", $context) && (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 254, $this->source); })()))) {
            // line 255
            echo "                                    ";
            $this->loadTemplate("_includes/tabs", "_layouts/cp", 255)->display($context);
            // line 256
            echo "                                ";
        }
        // line 257
        echo "                            ";
    }

    // line 260
    public function block_content($context, array $blocks = array())
    {
        // line 261
        echo "                                    ";
        echo twig_escape_filter($this->env, ((array_key_exists("content", $context)) ? ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 261, $this->source); })())) : ("")), "html", null, true);
        echo "
                                ";
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 261,  678 => 260,  674 => 257,  671 => 256,  668 => 255,  665 => 254,  662 => 253,  658 => 272,  652 => 269,  649 => 268,  646 => 267,  641 => 263,  639 => 260,  635 => 258,  633 => 253,  630 => 252,  627 => 250,  621 => 247,  617 => 245,  614 => 244,  612 => 243,  609 => 242,  605 => 236,  599 => 234,  596 => 233,  593 => 232,  588 => 230,  584 => 229,  578 => 227,  575 => 226,  572 => 225,  568 => 237,  566 => 232,  563 => 231,  560 => 230,  557 => 225,  554 => 224,  547 => 278,  544 => 276,  542 => 275,  538 => 273,  536 => 242,  525 => 241,  521 => 238,  519 => 224,  516 => 223,  513 => 221,  510 => 219,  502 => 218,  500 => 217,  496 => 215,  492 => 212,  487 => 209,  476 => 207,  472 => 206,  468 => 204,  466 => 203,  462 => 202,  455 => 201,  450 => 197,  444 => 196,  436 => 194,  433 => 193,  430 => 192,  426 => 191,  422 => 189,  419 => 187,  416 => 186,  412 => 184,  409 => 183,  406 => 182,  402 => 180,  393 => 178,  389 => 177,  386 => 176,  383 => 175,  380 => 174,  377 => 173,  368 => 166,  364 => 164,  358 => 162,  356 => 161,  352 => 160,  341 => 158,  335 => 154,  320 => 152,  316 => 150,  292 => 146,  289 => 145,  287 => 142,  286 => 141,  284 => 140,  267 => 139,  264 => 138,  262 => 137,  259 => 136,  254 => 134,  252 => 133,  250 => 131,  248 => 130,  244 => 127,  241 => 125,  236 => 123,  234 => 122,  232 => 121,  230 => 120,  222 => 118,  213 => 117,  210 => 116,  193 => 115,  182 => 109,  176 => 108,  167 => 104,  156 => 97,  146 => 94,  143 => 93,  141 => 92,  136 => 90,  132 => 88,  126 => 86,  120 => 84,  118 => 83,  113 => 80,  107 => 78,  105 => 77,  101 => 75,  98 => 74,  94 => 44,  89 => 286,  87 => 285,  85 => 284,  83 => 72,  81 => 71,  79 => 70,  77 => 68,  75 => 67,  73 => 66,  71 => 64,  69 => 63,  67 => 61,  62 => 57,  59 => 56,  55 => 54,  53 => 53,  50 => 52,  48 => 51,  43 => 50,  40 => 49,  38 => 48,  36 => 47,  15 => 44,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
┌───────────────────────────────────────────────────────────────────────────┐
│                            #global-container                              │
│ ┌────────┐ ┌────────────────────────────────────────────────────────────┐ │
│ │        │ │                      #main-container                       │ │
│ │        │ │ ┌────────────────────────────────────────────────────────┐ │ │
│ │        │ │ │                        #alerts                         │ │ │
│ │        │ │ └────────────────────────────────────────────────────────┘ │ │
│ │        │ │ ┌────────────────────────────────────────────────────────┐ │ │
│ │        │ │ │                        #crumbs                         │ │ │
│ │        │ │ └────────────────────────────────────────────────────────┘ │ │
│ │        │ │ ┌────────────────────────────────────────────────────────┐ │ │
│ │        │ │ │                         #main                          │ │ │
│ │        │ │ │ ┌────────────────────────────────────────────────────┐ │ │ │
│ │        │ │ │ │                   #main-form (?)                   │ │ │ │
│ │        │ │ │ │ ┌────────────────────────────────────────────────┐ │ │ │ │
│ │        │ │ │ │ │                    #header                     │ │ │ │ │
│ │        │ │ │ │ └────────────────────────────────────────────────┘ │ │ │ │
│ │        │ │ │ │ ┌────────────────────────────────────────────────┐ │ │ │ │
│ │        │ │ │ │ │                 #main-content                  │ │ │ │ │
│ │#global-│ │ │ │ │ ┌────────┐ ┌──────────────────────┐ ┌────────┐ │ │ │ │ │
│ │sidebar │ │ │ │ │ │        │ │  #content-container  │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ ┌──────────────────┐ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │    #tabs (?)     │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ └──────────────────┘ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ ┌──────────────────┐ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │                  │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │#sidebar│ │ │                  │ │ │#details│ │ │ │ │ │
│ │        │ │ │ │ │ │  (?)   │ │ │                  │ │ │  (?)   │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │     #content     │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │                  │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │                  │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │                  │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │                  │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ └──────────────────┘ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ └────────┘ └──────────────────────┘ └────────┘ │ │ │ │ │
│ │        │ │ │ │ └────────────────────────────────────────────────┘ │ │ │ │
│ │        │ │ │ └────────────────────────────────────────────────────┘ │ │ │
│ │        │ │ └────────────────────────────────────────────────────────┘ │ │
│ └────────┘ └────────────────────────────────────────────────────────────┘ │
└───────────────────────────────────────────────────────────────────────────┘
#}

{% extends \"_layouts/basecp\" %}

{# The CP only supports queue components that implement QueueInterface #}
{% set queue = craft.app.queue %}
{% js %}
    {% if queue is instance of(\"craft\\\\queue\\\\QueueInterface\") %}
        Craft.cp.setJobInfo({{ queue.getJobInfo(100)|json_encode|raw }}, false);
        {% if queue.getHasReservedJobs() %}
            Craft.cp.trackJobProgress(true);
        {% elseif queue.getHasWaitingJobs() %}
            Craft.cp.runQueue();
        {% endif %}
    {% else %}
        Craft.cp.enableQueue = false;
    {% endif %}
{% endjs %}

{% set hasSystemIcon = CraftEdition == CraftPro and craft.rebrand.isIconUploaded %}

{% set forceConfirmUnload = craft.app.session.hasFlash('error') %}
{% set fullPageForm = (fullPageForm is defined and fullPageForm) %}

{% set canUpgradeEdition = craft.app.getCanUpgradeEdition() %}
{% set licensedEdition = craft.app.getLicensedEdition() %}
{% set isTrial = licensedEdition is not same as(null) and licensedEdition is not same as(CraftEdition) %}

{% set sidebar = (sidebar ?? block('sidebar') ?? '')|trim %}
{% set details = (details ?? block('details') ?? '')|trim %}
{% set crumbs = crumbs ?? null %}

{% block body %}
    <div id=\"global-container\">
        <header id=\"global-sidebar\" class=\"sidebar\">
            {% if currentUser.admin and craft.app.config.general.devMode %}
                <div id=\"devmode\" title=\"{{ 'Craft CMS is running in Dev Mode.'|t('app') }}\"></div>
            {% endif %}

            <a id=\"system-info\" class=\"menubtn\" role=\"button\" data-menu-anchor=\"#user-info\">
                <div id=\"site-icon\">
                    {% if hasSystemIcon %}
                        <img src=\"{{ craft.rebrand.icon.url }}\" alt=\"\">
                    {% else %}
                        {{ svg('@app/icons/circle-c-outline.svg') }}
                    {% endif %}
                </div>
                <div id=\"system-name\">
                    <h2>{{ systemName }}&nbsp;<span data-icon=\"downangle\"></span></h2>
                    <div id=\"user-info\">
                        {% if currentUser.photoId %}
                            <div id=\"user-photo\">
                                <img width=\"14\" sizes=\"14px\" srcset=\"{{ currentUser.getThumbUrl(14) }} 14w, {{ currentUser.getThumbUrl(28) }} 28w\" alt=\"{{ currentUser.getName() }}\">
                            </div>
                        {% endif %}
                        <div>{{ currentUser.friendlyName }}</div>
                    </div>
                </div>
            </a>

            <div class=\"menu\" data-align=\"left\">
                <ul>
                    <li><a href=\"{{ siteUrl }}\" target=\"_blank\">{{ 'View site'|t('app') }}</a></li>
                </ul>
                <hr>
                <ul>
                    <li><a href=\"{{ url('myaccount') }}\">{{ 'My Account'|t('app') }}</a></li>
                    <li><a href=\"{{ url('logout') }}\">{{ \"Sign out\"|t('app') }}</a></li>
                </ul>
            </div>

            <nav id=\"nav\">
                <ul>
                    {% for item in craft.cp.nav() %}
                        {% set hasSubnav = (item.subnav is defined and item.subnav) %}
                        <li id=\"{{ item.id }}\" {% if item.sel and hasSubnav %} class=\"has-subnav\"{% endif %}>
                            <a{% if item.sel %} class=\"sel\"{% endif %} href=\"{{ item.url }}\">
                                <span class=\"icon icon-mask\">
                                    {%- if item.icon is defined -%}
                                        {{ svg(item.icon) }}
                                    {%- elseif item.fontIcon is defined -%}
                                        <span data-icon=\"{{ item.fontIcon }}\"></span>
                                    {%- else -%}
                                        {% include \"_includes/defaulticon.svg\" with { label: item.label } %}
                                    {%- endif -%}
                                </span>

                                <span class=\"label\">
                                    {{- item.label -}}
                                </span>

                                {%- if not item.sel and item.badgeCount -%}
                                    <span class=\"badge\">{{ item.badgeCount }}</span>
                                {%- endif -%}
                            </a>
                            {% if item.sel and hasSubnav %}
                                <ul class=\"subnav\">
                                    {% for itemId, item in item.subnav %}
                                        {% set itemIsSelected = (
                                            (selectedSubnavItem is defined and selectedSubnavItem == itemId) or
                                            (selectedSubnavItem is not defined and loop.first)
                                        ) -%}

                                        <li>
                                            <a href=\"{{ url(item.url) }}\"{% if itemIsSelected %} class=\"sel\"{% endif %}>{{ item.label }}</a>
                                        </li>

                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </li>
                    {% endfor %}
                </ul>
            </nav>

            <div id=\"app-info\">
                <div id=\"edition\" {% if canUpgradeEdition %}class=\"hot\" title=\"{{ 'Manage your Craft CMS edition'|t('app') }}\"{% else %}class=\"edition\"{% endif %}>
                    <div id=\"edition-logo\">
                        <div class=\"edition-name\">{{ craft.app.getEditionName() }}</div>
                        {% if isTrial %}
                            <div class=\"edition-trial\">{{ \"Trial\"|t('app') }}</div>
                        {% endif %}
                    </div>
                </div>
                <div id=\"version\">Craft CMS {{ craft.app.version }}</div>
            </div>
        </header><!-- #global-sidebar -->

        <div id=\"main-container\">

            {# alerts #}
            {% if craft.cp.areAlertsCached() %}
                {% set alerts = craft.cp.getAlerts() %}
                {% if alerts %}
                    <ul id=\"alerts\">
                        {% for alert in craft.cp.getAlerts() %}
                            <li>{{ alert|raw }}</li>
                        {% endfor %}
                    </ul>
                {% endif %}
            {% else %}
                {% js %}
                Craft.cp.fetchAlerts();
                {% endjs %}
            {% endif %}

            {# notifications #}
            <div id=\"notifications-wrapper\">
                <div id=\"notifications\">
                    {% for type in ['notice', 'error'] %}
                        {% set message = craft.app.session.getFlash(type) %}
                        {% if message %}
                            <div class=\"notification {{ type }}\">{{ message }}</div>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>

            {# crumbs #}
            <div id=\"crumbs\"{% if not crumbs %} class=\"empty\"{% endif %}>
                <a id=\"nav-toggle\" title=\"{{ 'Show nav'|t('app') }}\"></a>
                {% if crumbs %}
                    <nav>
                        <ul>
                            {% for crumb in crumbs %}
                                <li><a href=\"{{ crumb.url }}\">{{ crumb.label }}</a></li>
                            {% endfor %}
                        </ul>
                    </nav>
                {% endif %}
            </div>

            {# main #}
            <main id=\"main\" role=\"main\">

                {% if fullPageForm -%}
                    <form id=\"main-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut{% if saveShortcutRedirect is defined %} data-saveshortcut-redirect=\"{{ saveShortcutRedirect|hash }}\"{% endif %} data-confirm-unload>
                        {{- csrfInput() }}
                {%- endif %}

                {# main-header #}
                <header id=\"header\">
                    {% block header %}
                        {% block pageTitle %}
                            {% if title is defined and title|length %}
                                <h1>{{ title }}</h1>
                            {% endif %}
                        {% endblock %}
                        {% block contextMenu %}{% endblock %}
                        <div class=\"flex-grow\"></div>
                        {% block actionButton %}
                            {% if fullPageForm %}
                                <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t('app') }}\">
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </header>

                {# main-content #}
                <div id=\"main-content\" class=\"{% if sidebar %}has-sidebar{% endif %} {% if details %}has-details{% endif %}\">
                    {% block main %}
                        {# sidebar #}
                        {% if sidebar is not empty %}
                            <a id=\"sidebar-toggle\"><span id=\"selected-sidebar-item-label\"></span>&nbsp;<span data-icon=\"downangle\"></span></a>
                            <div id=\"sidebar\" class=\"sidebar\">
                                {{ sidebar|raw }}
                            </div>
                        {% endif %}

                        {# content-container #}
                        <div id=\"content-container\">
                            {% block tabs %}
                                {% if tabs is defined and tabs %}
                                    {% include \"_includes/tabs\" %}
                                {% endif %}
                            {% endblock %}

                            <div id=\"content\">
                                {% block content %}
                                    {{ content is defined ? content }}
                                {% endblock %}
                            </div>
                        </div>

                        {# details #}
                        {% if details is not empty %}
                            <div id=\"details\">
                                {{ details|raw }}
                            </div>
                        {% endif %}
                    {% endblock %}
                </div>

                {% if fullPageForm -%}
                    </form><!-- #main-form -->
                {%- endif %}
            </main><!-- #main -->
        </div><!-- #main-container -->
    </div><!-- #global-container -->
{% endblock %}


{% if currentUser.can('performUpdates') and not craft.app.updates.getIsUpdateInfoCached() %}
    {% js %}
        Craft.cp.checkForUpdates();
    {% endjs %}
{% endif %}
", "_layouts/cp", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_layouts/cp.html");
    }
}
