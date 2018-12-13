<?php

/* categories/_edit */
class __TwigTemplate_c226bb96f316e46be46401bb23268dba4acd5094c27bce3529a5b3849a2175f6 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "categories/_edit", 1);
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "categories/_edit", 2);
        // line 4
        $context["fullPageForm"] = true;
        // line 5
        $context["saveShortcutRedirect"] = (isset($context["continueEditingUrl"]) || array_key_exists("continueEditingUrl", $context) ? $context["continueEditingUrl"] : (function () { throw new Twig_Error_Runtime('Variable "continueEditingUrl" does not exist.', 5, $this->source); })());
        // line 7
        $context["groupHandle"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 7, $this->source); })()), "handle", array());
        // line 8
        $context["isNewCategory"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 8, $this->source); })()), "id", array())) ? (false) : (true));
        // line 10
        echo \Craft::$app->getView()->invokeHook("cp.categories.edit", $context);

        // line 162
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 162, $this->source); })()), "slug", array())) {
            // line 163
            ob_start();
            // line 164
            echo "        window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock("pageTitle", $context, $blocks);
        echo "
    ";
        // line 14
        $this->displayBlock("contextMenu", $context, $blocks);
        echo "
    <div class=\"flex-grow\"></div>
    ";
        // line 16
        if (((isset($context["showPreviewBtn"]) || array_key_exists("showPreviewBtn", $context) ? $context["showPreviewBtn"] : (function () { throw new Twig_Error_Runtime('Variable "showPreviewBtn" does not exist.', 16, $this->source); })()) || array_key_exists("shareUrl", $context))) {
            // line 17
            echo "        ";
            if ((isset($context["showPreviewBtn"]) || array_key_exists("showPreviewBtn", $context) ? $context["showPreviewBtn"] : (function () { throw new Twig_Error_Runtime('Variable "showPreviewBtn" does not exist.', 17, $this->source); })())) {
                // line 18
                echo "            <div class=\"btn livepreviewbtn\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Live Preview", "app"), "html", null, true);
                echo "</div>
        ";
            }
            // line 20
            echo "        ";
            if (array_key_exists("shareUrl", $context)) {
                // line 21
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["shareUrl"]) || array_key_exists("shareUrl", $context) ? $context["shareUrl"] : (function () { throw new Twig_Error_Runtime('Variable "shareUrl" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "\" class=\"btn sharebtn\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Share", "app"), "html", null, true);
                echo "</a>
        ";
            }
            // line 23
            echo "        <div class=\"flex-grow\"></div>
    ";
        }
        // line 25
        echo "    ";
        $this->displayBlock("actionButton", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_contextMenu($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 29, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            // line 30
            echo "        ";
            $context["parentIdParam"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 30, $this->source); })()), "app", array()), "request", array()), "getParam", array(0 => "parentId.0"), "method")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 30, $this->source); })()), "app", array()), "request", array()), "getParam", array(0 => "parentId.0"), "method")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 30, $this->source); })()), "app", array()), "request", array()), "getParam", array(0 => "parentId"), "method")));
            // line 31
            echo "        ";
            $context["urlFormat"] = craft\helpers\UrlHelper::url((((("categories/" . (isset($context["groupHandle"]) || array_key_exists("groupHandle", $context) ? $context["groupHandle"] : (function () { throw new Twig_Error_Runtime('Variable "groupHandle" does not exist.', 31, $this->source); })())) . "/") . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 31, $this->source); })()), "app", array()), "request", array()), "getSegment", array(0 => 3), "method")) . "/{handle}"), (((isset($context["parentIdParam"]) || array_key_exists("parentIdParam", $context) ? $context["parentIdParam"] : (function () { throw new Twig_Error_Runtime('Variable "parentIdParam" does not exist.', 31, $this->source); })())) ? (array("parentId" => (isset($context["parentIdParam"]) || array_key_exists("parentIdParam", $context) ? $context["parentIdParam"] : (function () { throw new Twig_Error_Runtime('Variable "parentIdParam" does not exist.', 31, $this->source); })()))) : ("")));
            // line 32
            echo "        ";
            $this->loadTemplate("_elements/sitemenu", "categories/_edit", 32)->display(array("siteIds" =>             // line 33
(isset($context["siteIds"]) || array_key_exists("siteIds", $context) ? $context["siteIds"] : (function () { throw new Twig_Error_Runtime('Variable "siteIds" does not exist.', 33, $this->source); })()), "selectedSiteId" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 34
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 34, $this->source); })()), "siteId", array()), "urlFormat" =>             // line 35
(isset($context["urlFormat"]) || array_key_exists("urlFormat", $context) ? $context["urlFormat"] : (function () { throw new Twig_Error_Runtime('Variable "urlFormat" does not exist.', 35, $this->source); })())));
            // line 37
            echo "    ";
        }
    }

    // line 40
    public function block_actionButton($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"btngroup\">
        <input type=\"submit\" class=\"btn submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
        echo "\">

        <div class=\"btn submit menubtn\"></div>
        <div class=\"menu\">
            <ul>
                <li><a class=\"formsubmit\" data-redirect=\"";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array((isset($context["continueEditingUrl"]) || array_key_exists("continueEditingUrl", $context) ? $context["continueEditingUrl"] : (function () { throw new Twig_Error_Runtime('Variable "continueEditingUrl" does not exist.', 47, $this->source); })()))), "html", null, true);
        echo "\">
                        ";
        // line 48
        echo $context["forms"]->macro_optionShortcutLabel("S");
        echo "
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save and continue editing", "app"), "html", null, true);
        echo "
                    </a></li>
                <li><a class=\"formsubmit\" data-redirect=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array(((isset($context["nextCategoryUrl"]) || array_key_exists("nextCategoryUrl", $context) ? $context["nextCategoryUrl"] : (function () { throw new Twig_Error_Runtime('Variable "nextCategoryUrl" does not exist.', 51, $this->source); })()) . "?parentId={parent.id}#"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save and add another", "app"), "html", null, true);
        echo "</a></li>

                ";
        // line 53
        if ( !(isset($context["isNewCategory"]) || array_key_exists("isNewCategory", $context) ? $context["isNewCategory"] : (function () { throw new Twig_Error_Runtime('Variable "isNewCategory" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "                    <li><a class=\"formsubmit\" data-param=\"duplicate\" data-value=\"1\" data-redirect=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array(((isset($context["continueEditingUrl"]) || array_key_exists("continueEditingUrl", $context) ? $context["continueEditingUrl"] : (function () { throw new Twig_Error_Runtime('Variable "continueEditingUrl" does not exist.', 54, $this->source); })()) . "#"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save as a new category", "app"), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 56
        echo "            </ul>
            ";
        // line 57
        if ( !(isset($context["isNewCategory"]) || array_key_exists("isNewCategory", $context) ? $context["isNewCategory"] : (function () { throw new Twig_Error_Runtime('Variable "isNewCategory" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "                <hr>
                <ul>
                    <li><a class=\"formsubmit error\" data-action=\"categories/delete-category\" data-confirm=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Are you sure you want to delete this category?", "app"), "html", null, true);
            echo "\" data-redirect=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array("categories#")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
            echo "</a></li>
                </ul>
            ";
        }
        // line 63
        echo "        </div>
    </div>
";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "    <input type=\"hidden\" name=\"action\" value=\"categories/save-category\">
    ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction(("categories/" . (isset($context["groupHandle"]) || array_key_exists("groupHandle", $context) ? $context["groupHandle"] : (function () { throw new Twig_Error_Runtime('Variable "groupHandle" does not exist.', 70, $this->source); })()))), "html", null, true);
        echo "

    <input type=\"hidden\" name=\"groupId\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 72, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 73
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 73, $this->source); })()), "id", array())) {
            echo "<input type=\"hidden\" name=\"categoryId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 73, $this->source); })()), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 74
        echo "    ";
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 74, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            echo "<input type=\"hidden\" name=\"siteId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 74, $this->source); })()), "siteId", array()), "html", null, true);
            echo "\">";
        }
        // line 75
        echo "
    <div id=\"fields\">
        ";
        // line 77
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title", "app"), "siteId" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 79
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 79, $this->source); })()), "siteId", array()), "id" => "title", "name" => "title", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 82
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 82, $this->source); })()), "title", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 83
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 83, $this->source); })()), "getErrors", array(0 => "title"), "method"), "first" => true, "autofocus" => true, "required" => true, "maxlength" => 255));
        // line 88
        echo "

        <div>
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 91, $this->source); })()), "getFieldLayout", array(), "method"), "getTabs", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 92
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "getHtmlId", array(), "method"), "html", null, true);
            echo "\"";
            if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                echo " class=\"hidden\"";
            }
            echo ">
                    ";
            // line 93
            $this->loadTemplate("_includes/fields", "categories/_edit", 93)->display(array("fields" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 94
$context["tab"], "getFields", array(), "method"), "element" =>             // line 95
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 95, $this->source); })())));
            // line 97
            echo "                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </div>
    </div>

    ";
        // line 103
        echo "    ";
        echo \Craft::$app->getView()->invokeHook("cp.categories.edit.content", $context);

    }

    // line 106
    public function block_details($context, array $blocks = array())
    {
        // line 107
        echo "    <div id=\"settings\" class=\"meta\">

        ";
        // line 109
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Slug", "app"), "siteId" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 111
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 111, $this->source); })()), "siteId", array()), "id" => "slug", "name" => "slug", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 114
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 114, $this->source); })()), "slug", array()), "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enter slug", "app"), "errors" => twig_array_merge(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 116
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 116, $this->source); })()), "getErrors", array(0 => "slug"), "method"), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 116, $this->source); })()), "getErrors", array(0 => "uri"), "method"))));
        // line 117
        echo "

        ";
        // line 119
        if (array_key_exists("parentOptionCriteria", $context)) {
            // line 120
            echo "            ";
            echo $context["forms"]->macro_elementSelectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Parent", "app"), "id" => "parentId", "name" => "parentId", "elementType" =>             // line 124
(isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 124, $this->source); })()), "selectionLabel" => $this->extensions['craft\web\twig\Extension']->translateFilter("Choose", "app"), "sources" => array(0 => ("group:" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 126
(isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 126, $this->source); })()), "id", array()))), "criteria" =>             // line 127
(isset($context["parentOptionCriteria"]) || array_key_exists("parentOptionCriteria", $context) ? $context["parentOptionCriteria"] : (function () { throw new Twig_Error_Runtime('Variable "parentOptionCriteria" does not exist.', 127, $this->source); })()), "limit" => 1, "elements" => (((            // line 129
array_key_exists("parent", $context) && (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 129, $this->source); })()))) ? (array(0 => (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 129, $this->source); })()))) : ("")), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 130
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 130, $this->source); })()), "getErrors", array(0 => "parent"), "method")));
            // line 131
            echo "
        ";
        }
        // line 133
        echo "
        ";
        // line 134
        echo $context["forms"]->macro_lightswitchField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enabled", "app"), "id" => "enabled", "name" => "enabled", "on" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 138
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 138, $this->source); })()), "enabled", array())));
        // line 139
        echo "

    </div>

    ";
        // line 143
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 143, $this->source); })()), "id", array())) {
            // line 144
            echo "        <hr>
        <div class=\"meta read-only\">
            <div class=\"data\">
                <h5 class=\"heading\">";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Date Created", "app"), "html", null, true);
            echo "</h5>
                <div class=\"value\">";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->datetimeFilter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 148, $this->source); })()), "dateCreated", array()), "short"), "html", null, true);
            echo "</div>
            </div>
            <div class=\"data\">
                <h5 class=\"heading\">";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Date Updated", "app"), "html", null, true);
            echo "</h5>
                <div class=\"value\">";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->datetimeFilter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 152, $this->source); })()), "dateUpdated", array()), "short"), "html", null, true);
            echo "</div>
            </div>
        </div>
    ";
        }
        // line 156
        echo "
    ";
        // line 158
        echo "    ";
        echo \Craft::$app->getView()->invokeHook("cp.categories.edit.details", $context);

    }

    public function getTemplateName()
    {
        return "categories/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 158,  365 => 156,  358 => 152,  354 => 151,  348 => 148,  344 => 147,  339 => 144,  337 => 143,  331 => 139,  329 => 138,  328 => 134,  325 => 133,  321 => 131,  319 => 130,  318 => 129,  317 => 127,  316 => 126,  315 => 124,  313 => 120,  311 => 119,  307 => 117,  305 => 116,  304 => 114,  303 => 111,  302 => 109,  298 => 107,  295 => 106,  289 => 103,  284 => 99,  269 => 97,  267 => 95,  266 => 94,  265 => 93,  256 => 92,  239 => 91,  234 => 88,  232 => 83,  231 => 82,  230 => 79,  229 => 77,  225 => 75,  218 => 74,  212 => 73,  208 => 72,  203 => 70,  200 => 69,  197 => 68,  191 => 63,  181 => 60,  177 => 58,  175 => 57,  172 => 56,  164 => 54,  162 => 53,  155 => 51,  150 => 49,  146 => 48,  142 => 47,  134 => 42,  131 => 41,  128 => 40,  123 => 37,  121 => 35,  120 => 34,  119 => 33,  117 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  98 => 25,  94 => 23,  86 => 21,  83 => 20,  77 => 18,  74 => 17,  72 => 16,  67 => 14,  62 => 13,  59 => 12,  55 => 1,  50 => 164,  48 => 163,  46 => 162,  43 => 10,  41 => 8,  39 => 7,  37 => 5,  35 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% import \"_includes/forms\" as forms %}

{% set fullPageForm = true %}
{% set saveShortcutRedirect = continueEditingUrl %}

{% set groupHandle = group.handle %}
{% set isNewCategory = category.id ? false : true %}

{% hook \"cp.categories.edit\" %}

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
    {% if craft.app.getIsMultiSite() %}
        {% set parentIdParam = craft.app.request.getParam('parentId.0') ?: craft.app.request.getParam('parentId') %}
        {% set urlFormat = url(\"categories/#{groupHandle}/#{craft.app.request.getSegment(3)}/{handle}\", (parentIdParam ? { parentId: parentIdParam })) %}
        {% include \"_elements/sitemenu\" with {
            siteIds: siteIds,
            selectedSiteId: category.siteId,
            urlFormat: urlFormat
        } only %}
    {% endif %}
{% endblock %}

{% block actionButton %}
    <div class=\"btngroup\">
        <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t('app') }}\">

        <div class=\"btn submit menubtn\"></div>
        <div class=\"menu\">
            <ul>
                <li><a class=\"formsubmit\" data-redirect=\"{{ continueEditingUrl|hash }}\">
                        {{ forms.optionShortcutLabel('S') }}
                        {{ \"Save and continue editing\"|t('app') }}
                    </a></li>
                <li><a class=\"formsubmit\" data-redirect=\"{{ (nextCategoryUrl~'?parentId={parent.id}#')|hash }}\">{{ \"Save and add another\"|t('app') }}</a></li>

                {% if not isNewCategory %}
                    <li><a class=\"formsubmit\" data-param=\"duplicate\" data-value=\"1\" data-redirect=\"{{ (continueEditingUrl~'#')|hash }}\">{{ \"Save as a new category\"|t('app') }}</a></li>
                {% endif %}
            </ul>
            {% if not isNewCategory %}
                <hr>
                <ul>
                    <li><a class=\"formsubmit error\" data-action=\"categories/delete-category\" data-confirm=\"{{ 'Are you sure you want to delete this category?'|t('app') }}\" data-redirect=\"{{ 'categories#'|hash }}\">{{ 'Delete'|t('app') }}</a></li>
                </ul>
            {% endif %}
        </div>
    </div>
{% endblock %}


{% block content %}
    <input type=\"hidden\" name=\"action\" value=\"categories/save-category\">
    {{ redirectInput('categories/'~groupHandle) }}

    <input type=\"hidden\" name=\"groupId\" value=\"{{ group.id }}\">
    {% if category.id %}<input type=\"hidden\" name=\"categoryId\" value=\"{{ category.id }}\">{% endif %}
    {% if craft.app.getIsMultiSite() %}<input type=\"hidden\" name=\"siteId\" value=\"{{ category.siteId }}\">{% endif %}

    <div id=\"fields\">
        {{ forms.textField({
            label: \"Title\"|t('app'),
            siteId: category.siteId,
            id: 'title',
            name: 'title',
            value: category.title,
            errors: category.getErrors('title'),
            first: true,
            autofocus: true,
            required: true,
            maxlength: 255
        }) }}

        <div>
            {% for tab in group.getFieldLayout().getTabs() %}
                <div id=\"{{ tab.getHtmlId() }}\"{% if not loop.first %} class=\"hidden\"{% endif %}>
                    {% include \"_includes/fields\" with {
                        fields:  tab.getFields(),
                        element: category
                    } only %}
                </div>
            {% endfor %}
        </div>
    </div>

    {# Give plugins a chance to add other things here #}
    {% hook \"cp.categories.edit.content\" %}
{% endblock %}

{% block details %}
    <div id=\"settings\" class=\"meta\">

        {{ forms.textField({
            label: \"Slug\"|t('app'),
            siteId: category.siteId,
            id: 'slug',
            name: 'slug',
            value: category.slug,
            placeholder: \"Enter slug\"|t('app'),
            errors: (category.getErrors('slug')|merge(category.getErrors('uri')))
        }) }}

        {% if parentOptionCriteria is defined %}
            {{ forms.elementSelectField({
                label: \"Parent\"|t('app'),
                id: 'parentId',
                name: 'parentId',
                elementType: elementType,
                selectionLabel: \"Choose\"|t('app'),
                sources: ['group:'~group.id],
                criteria: parentOptionCriteria,
                limit: 1,
                elements: (parent is defined and parent ? [parent]),
                errors: category.getErrors('parent')
            }) }}
        {% endif %}

        {{ forms.lightswitchField({
            label: \"Enabled\"|t('app'),
            id: 'enabled',
            name: 'enabled',
            on: category.enabled
        }) }}

    </div>

    {% if category.id %}
        <hr>
        <div class=\"meta read-only\">
            <div class=\"data\">
                <h5 class=\"heading\">{{ \"Date Created\"|t('app') }}</h5>
                <div class=\"value\">{{ category.dateCreated|datetime('short') }}</div>
            </div>
            <div class=\"data\">
                <h5 class=\"heading\">{{ \"Date Updated\"|t('app') }}</h5>
                <div class=\"value\">{{ category.dateUpdated|datetime('short') }}</div>
            </div>
        </div>
    {% endif %}

    {# Give plugins a chance to add other stuff here #}
    {% hook \"cp.categories.edit.details\" %}
{% endblock %}


{% if not category.slug %}
    {% js %}
        window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');
    {% endjs %}
{% endif %}
", "categories/_edit", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/categories/_edit.html");
    }
}
