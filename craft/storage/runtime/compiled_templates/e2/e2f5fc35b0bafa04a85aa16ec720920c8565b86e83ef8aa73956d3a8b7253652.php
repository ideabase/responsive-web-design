<?php

/* users/_edit */
class __TwigTemplate_902d0dedaa3b0c27fedb891d61cb3b0aaad2fd7b53f1d90b42250bae58dfce03 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "users/_edit", 1);
        $this->blocks = array(
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
        // line 3
        if ((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 3, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 3, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 3, $this->source); })()), "can", array(0 => "editUsers"), "method"))) {
            // line 4
            $context["crumbs"] = array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Users", "app"), "url" => craft\helpers\UrlHelper::url("users")));
        }
        // line 9
        $context["forms"] = $this->loadTemplate("_includes/forms", "users/_edit", 9);
        // line 11
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 11, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Are you sure you want to delete this photo?")), "method");
        // line 15
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 15, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\fileupload\\FileUploadAsset"), "method");
        // line 17
        $context["requireEmailVerification"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 17, $this->source); })()), "app", array()), "systemSettings", array()), "getSettings", array(0 => "users"), "method"), "requireEmailVerification", array());
        // line 19
        ob_start();
        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "
    ";
        // line 21
        if ( !(isset($context["isNewUser"]) || array_key_exists("isNewUser", $context) ? $context["isNewUser"] : (function () { throw new Twig_Error_Runtime('Variable "isNewUser" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "<input type=\"hidden\" name=\"userId\" value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->source); })()), "id", array()), "html", null, true);
            echo "\">";
        }
        $context["hiddenInputs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo \Craft::$app->getView()->invokeHook("cp.users.edit", $context);

        // line 322
        ob_start();
        // line 323
        echo "    ";
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 323, $this->source); })()), "getIsCurrent", array(), "method")) {
            // line 324
            echo "        var changeSidebarPicture = true;
    ";
        } else {
            // line 326
            echo "        var changeSidebarPicture = false;
    ";
        }
        // line 328
        echo "
    new Craft.ElevatedSessionForm('#userform', [
        '#email',
        '#newPassword',
        '#admin:not(:checked)',
        '#user-groups input[type=\"checkbox\"]:not(:checked)',
        '#permissions input[type=\"checkbox\"]:not(:checked)'
    ]);
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_actionButton($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        if (( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 29, $this->source); })()), "can", array(0 => "registerUsers"), "method") || ((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 29, $this->source); })()) != (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 29, $this->source); })())))) {
            // line 30
            echo "        <div class=\"btn submit formsubmit\" data-form=\"userform\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 32
            echo "        <div class=\"btngroup\">
            <div class=\"btn submit formsubmit\" data-form=\"userform\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
            echo "</div>
            <div class=\"btn submit menubtn\" data-form=\"userform\"></div>
            <div class=\"menu\">
                <ul>
                    <li>
                        <a class=\"formsubmit\" data-redirect=\"";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array((((isset($context["isNewUser"]) || array_key_exists("isNewUser", $context) ? $context["isNewUser"] : (function () { throw new Twig_Error_Runtime('Variable "isNewUser" does not exist.', 38, $this->source); })())) ? ("users/{id}") : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->source); })()), "getCpEditUrl", array(), "method"))))), "html", null, true);
            echo "\">
                            ";
            // line 39
            echo $context["forms"]->macro_optionShortcutLabel("S");
            echo "
                            ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save and continue editing", "app"), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li><a class=\"formsubmit\" data-redirect=\"";
            // line 43
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array("users/new#")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save and add another", "app"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>
        </div>
    ";
        }
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    <form id=\"userform\" method=\"post\" accept-charset=\"UTF-8\" autocomplete=\"off\" data-saveshortcut data-saveshortcut-redirect=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), array(((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->source); })()), "getIsCurrent", array(), "method")) ? ("myaccount") : ((((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 51, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 51, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 51, $this->source); })()), "can", array(0 => "editUsers"), "method"))) ? ("users/{id}") : ("dashboard")))))), "html", null, true);
        echo "\" data-confirm-unload>
        <input type=\"hidden\" name=\"action\" value=\"users/save-user\">
        ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->redirectInputFunction((((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 53, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 53, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 53, $this->source); })()), "can", array(0 => "editUsers"), "method"))) ? ("users") : ("dashboard"))), "html", null, true);
        echo "
        ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["hiddenInputs"]) || array_key_exists("hiddenInputs", $context) ? $context["hiddenInputs"] : (function () { throw new Twig_Error_Runtime('Variable "hiddenInputs" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "

        <div id=\"account\">
            ";
        // line 57
        $this->loadTemplate("users/_accountfields", "users/_edit", 57)->display($context);
        // line 58
        echo "
            ";
        // line 59
        if ( !(isset($context["isNewUser"]) || array_key_exists("isNewUser", $context) ? $context["isNewUser"] : (function () { throw new Twig_Error_Runtime('Variable "isNewUser" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "                ";
            echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Photo", "app"), "id" => "photo"), twig_include($this->env, $context, "users/_photo", array("user" =>             // line 63
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 63, $this->source); })())), false));
            echo "
            ";
        }
        // line 65
        echo "
            <hr>

            ";
        // line 68
        if ((isset($context["isNewUser"]) || array_key_exists("isNewUser", $context) ? $context["isNewUser"] : (function () { throw new Twig_Error_Runtime('Variable "isNewUser" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "
                ";
            // line 70
            echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Email", "app"), "instructions" => (((            // line 72
(isset($context["requireEmailVerification"]) || array_key_exists("requireEmailVerification", $context) ? $context["requireEmailVerification"] : (function () { throw new Twig_Error_Runtime('Variable "requireEmailVerification" does not exist.', 72, $this->source); })()) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 72, $this->source); })()), "admin", array()))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("A verification email will be sent automatically.", "app")) : ("")), "id" => "email", "name" => "email", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 75
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 75, $this->source); })()), "email", array()), "required" => true, "errors" => twig_array_merge(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 77
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 77, $this->source); })()), "getErrors", array(0 => "email"), "method"), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 77, $this->source); })()), "getErrors", array(0 => "unverifiedEmail"), "method"))));
            // line 78
            echo "

                ";
            // line 80
            if (((isset($context["requireEmailVerification"]) || array_key_exists("requireEmailVerification", $context) ? $context["requireEmailVerification"] : (function () { throw new Twig_Error_Runtime('Variable "requireEmailVerification" does not exist.', 80, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 80, $this->source); })()), "admin", array()))) {
                // line 81
                echo "                    ";
                echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Send an activation email now?", "app"), "name" => "sendVerificationEmail", "checked" => true));
                // line 85
                echo "
                ";
            }
            // line 87
            echo "
            ";
        } elseif (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 88
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 88, $this->source); })()), "getIsCurrent", array(), "method") || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 88, $this->source); })()), "admin", array())) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 88, $this->source); })()), "can", array(0 => "changeUserEmails"), "method"))) {
            // line 89
            echo "
                ";
            // line 90
            echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Email", "app"), "instructions" => (((            // line 92
(isset($context["requireEmailVerification"]) || array_key_exists("requireEmailVerification", $context) ? $context["requireEmailVerification"] : (function () { throw new Twig_Error_Runtime('Variable "requireEmailVerification" does not exist.', 92, $this->source); })()) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 92, $this->source); })()), "admin", array()))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("New email addresses must be verified before taking effect.", "app")) : ("")), "id" => "email", "name" => "email", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 95
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 95, $this->source); })()), "email", array()), "required" => true, "errors" => twig_array_merge(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 97
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 97, $this->source); })()), "getErrors", array(0 => "email"), "method"), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 97, $this->source); })()), "getErrors", array(0 => "unverifiedEmail"), "method"))));
            // line 98
            echo "

                ";
            // line 100
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 100, $this->source); })()), "getIsCurrent", array(), "method")) {
                // line 101
                echo "                    ";
                echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("New Password", "app"), "id" => "newPassword", "name" => "newPassword", "type" => "password", "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 106
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 106, $this->source); })()), "getErrors", array(0 => "newPassword"), "method")));
                // line 107
                echo "
                ";
            }
            // line 109
            echo "
                ";
            // line 110
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 110, $this->source); })()), "admin", array())) {
                // line 111
                echo "                    ";
                echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Require a password reset on next login", "app"), "name" => "passwordResetRequired", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 114
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 114, $this->source); })()), "passwordResetRequired", array())));
                // line 115
                echo "
                ";
            }
            // line 117
            echo "
            ";
        }
        // line 119
        echo "        </div>

        ";
        // line 121
        if (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 121, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 121, $this->source); })()))) {
            // line 122
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 122, $this->source); })()), "getFieldLayout", array(), "method"), "getTabs", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 123
                echo "                <div id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "getHtmlId", array(), "method"), "html", null, true);
                echo "\" class=\"hidden\">
                    ";
                // line 124
                $this->loadTemplate("_includes/fields", "users/_edit", 124)->display(array("fields" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 125
$context["tab"], "getFields", array(), "method"), "element" =>                 // line 126
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 126, $this->source); })())));
                // line 128
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "        ";
        }
        // line 131
        echo "
        ";
        // line 132
        if ((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 132, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 132, $this->source); })())) && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 132, $this->source); })()), "can", array(0 => "assignUserGroups"), "method") || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 132, $this->source); })()), "can", array(0 => "assignUserPermissions"), "method")))) {
            // line 133
            echo "            <div id=\"perms\" class=\"hidden\">

                ";
            // line 135
            if ((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 135, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 135, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 135, $this->source); })()), "can", array(0 => "assignUserGroups"), "method"))) {
                // line 136
                echo "                    <h2>";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("User Groups", "app"), "html", null, true);
                echo "</h2>

                    ";
                // line 138
                $context["assignableGroups"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 138, $this->source); })()), "app", array()), "userGroups", array()), "getAssignableGroups", array(0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 138, $this->source); })())), "method");
                // line 139
                echo "                    ";
                $context["currentGroupIds"] = craft\helpers\ArrayHelper::getColumn(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 139, $this->source); })()), "getGroups", array(), "method"), "id");
                // line 140
                echo "
                    ";
                // line 141
                ob_start();
                // line 142
                echo "                        <input type=\"hidden\" name=\"groups\" value=\"\">

                        ";
                // line 144
                if ((isset($context["assignableGroups"]) || array_key_exists("assignableGroups", $context) ? $context["assignableGroups"] : (function () { throw new Twig_Error_Runtime('Variable "assignableGroups" does not exist.', 144, $this->source); })())) {
                    // line 145
                    echo "                            <ul>
                                ";
                    // line 146
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["assignableGroups"]) || array_key_exists("assignableGroups", $context) ? $context["assignableGroups"] : (function () { throw new Twig_Error_Runtime('Variable "assignableGroups" does not exist.', 146, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 147
                        echo "                                    <li>
                                        ";
                        // line 148
                        echo $context["forms"]->macro_checkbox(array("label" => twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 149
$context["group"], "name", array()), "site")), "name" => "groups[]", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 151
$context["group"], "id", array()), "checked" => twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 152
$context["group"], "id", array()), (isset($context["currentGroupIds"]) || array_key_exists("currentGroupIds", $context) ? $context["currentGroupIds"] : (function () { throw new Twig_Error_Runtime('Variable "currentGroupIds" does not exist.', 152, $this->source); })()))));
                        // line 153
                        echo "
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo "                            </ul>

                        ";
                } else {
                    // line 159
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No user groups exist yet.", "app"), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 161
                echo "                    ";
                $context["userGroupsInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 162
                echo "
                    ";
                // line 163
                echo $context["forms"]->macro_field(array("fieldId" => "user-groups"),                 // line 165
(isset($context["userGroupsInput"]) || array_key_exists("userGroupsInput", $context) ? $context["userGroupsInput"] : (function () { throw new Twig_Error_Runtime('Variable "userGroupsInput" does not exist.', 165, $this->source); })()));
                echo "

                    <hr>
                ";
            }
            // line 169
            echo "
                ";
            // line 170
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 170, $this->source); })()), "can", array(0 => "assignUserPermissions"), "method")) {
                // line 171
                echo "                    <h2>";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Permissions", "app"), "html", null, true);
                echo "</h2>

                    ";
                // line 173
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 173, $this->source); })()), "admin", array()) && ((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 173, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 173, $this->source); })())))) {
                    // line 174
                    echo "                        ";
                    echo $context["forms"]->macro_checkboxField(array("label" => (("<strong>" . $this->extensions['craft\web\twig\Extension']->translateFilter("Admin", "app")) . "</strong>"), "name" => "admin", "id" => "admin", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 178
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 178, $this->source); })()), "admin", array()), "reverseToggle" => "permissions"));
                    // line 180
                    echo "
                    ";
                }
                // line 182
                echo "
                    <input type=\"hidden\" name=\"permissions\" value=\"\">

                    <div id=\"permissions\" class=\"field";
                // line 185
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 185, $this->source); })()), "admin", array())) {
                    echo " hidden";
                }
                echo "\">
                        ";
                // line 186
                $this->loadTemplate("_includes/permissions", "users/_edit", 186)->display(array("userOrGroup" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 187
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 187, $this->source); })()), "admin", array())) ? (null) : ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 187, $this->source); })()))), "groupPermissions" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 188
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 188, $this->source); })()), "id", array())) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 188, $this->source); })()), "app", array()), "userPermissions", array()), "getGroupPermissionsByUserId", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 188, $this->source); })()), "id", array())), "method")) : (array()))));
                // line 190
                echo "                    </div>
                ";
            }
            // line 192
            echo "
            </div>
        ";
        }
        // line 195
        echo "
        ";
        // line 196
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 196, $this->source); })()), "getIsCurrent", array(), "method")) {
            // line 197
            echo "            <div id=\"prefs\" class=\"hidden\">
                ";
            // line 198
            ob_start();
            // line 199
            echo "                    <div class=\"select\">
                        <select id=\"language\" name=\"preferredLanguage\">
                            ";
            // line 201
            $context["allAppLocales"] = $this->extensions['craft\web\twig\Extension']->multisortFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 201, $this->source); })()), "app", array()), "i18n", array()), "getAppLocales", array(), "method"), "displayName");
            // line 202
            echo "                            ";
            $context["userLanguage"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 202, $this->source); })()), "getPreferredLanguage", array(), "method")) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 202, $this->source); })()), "getPreferredLanguage", array(), "method")) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 202, $this->source); })()), "app", array()), "language", array())));
            // line 203
            echo "
                            ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allAppLocales"]) || array_key_exists("allAppLocales", $context) ? $context["allAppLocales"] : (function () { throw new Twig_Error_Runtime('Variable "allAppLocales" does not exist.', 204, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 205
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["locale"], "id", array()), "html", null, true);
                echo "\" ";
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["locale"], "id", array()) == (isset($context["userLanguage"]) || array_key_exists("userLanguage", $context) ? $context["userLanguage"] : (function () { throw new Twig_Error_Runtime('Variable "userLanguage" does not exist.', 205, $this->source); })()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["locale"], "getDisplayName", array(), "method"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                        </select>
                    </div>
                ";
            $context["languageInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 210
            echo "
                ";
            // line 211
            echo $context["forms"]->macro_field(array("id" => "language", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Language", "app")),             // line 214
(isset($context["languageInput"]) || array_key_exists("languageInput", $context) ? $context["languageInput"] : (function () { throw new Twig_Error_Runtime('Variable "languageInput" does not exist.', 214, $this->source); })()));
            echo "

                ";
            // line 216
            echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Week Start Day", "app"), "id" => "weekStartDay", "name" => "weekStartDay", "options" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 220
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 220, $this->source); })()), "app", array()), "locale", array()), "getWeekDayNames", array(), "method"), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 221
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 221, $this->source); })()), "getPreference", array(0 => "weekStartDay", 1 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 221, $this->source); })()), "app", array()), "config", array()), "general", array()), "defaultWeekStartDay", array())), "method")));
            // line 222
            echo "

                ";
            // line 224
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 224, $this->source); })()), "admin", array())) {
                // line 225
                echo "                    <hr>

                    ";
                // line 227
                echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show the debug toolbar on the front end", "app"), "name" => "enableDebugToolbarForSite", "id" => "enableDebugToolbarForSite", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 231
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 231, $this->source); })()), "getPreference", array(0 => "enableDebugToolbarForSite"), "method")));
                // line 232
                echo "

                    ";
                // line 234
                echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Show the debug toolbar on the Control Panel", "app"), "name" => "enableDebugToolbarForCp", "id" => "enableDebugToolbarForCp", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 238
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 238, $this->source); })()), "getPreference", array(0 => "enableDebugToolbarForCp"), "method")));
                // line 239
                echo "
                ";
            }
            // line 241
            echo "            </div>
        ";
        }
        // line 243
        echo "
        ";
        // line 245
        echo "        ";
        echo \Craft::$app->getView()->invokeHook("cp.users.edit.content", $context);

        // line 246
        echo "
        <input type=\"submit\" class=\"hidden\">
    </form>
";
    }

    // line 251
    public function block_details($context, array $blocks = array())
    {
        // line 252
        echo "    ";
        if ( !(isset($context["isNewUser"]) || array_key_exists("isNewUser", $context) ? $context["isNewUser"] : (function () { throw new Twig_Error_Runtime('Variable "isNewUser" does not exist.', 252, $this->source); })())) {
            // line 253
            echo "        ";
            if (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 253, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 253, $this->source); })()))) {
                // line 254
                echo "            <form class=\"meta read-only\" method=\"post\" accept-charset=\"UTF-8\">
                ";
                // line 255
                echo twig_escape_filter($this->env, (isset($context["hiddenInputs"]) || array_key_exists("hiddenInputs", $context) ? $context["hiddenInputs"] : (function () { throw new Twig_Error_Runtime('Variable "hiddenInputs" does not exist.', 255, $this->source); })()), "html", null, true);
                echo "
                <div class=\"data first\">
                    <h5 class=\"heading\">";
                // line 257
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Status", "app"), "html", null, true);
                echo "</h5>
                    <div class=\"value flex\">
                        <div class=\"flex-grow\"><span class=\"status ";
                // line 259
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 259, $this->source); })()), "getStatus", array(), "method"), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new Twig_Error_Runtime('Variable "statusLabel" does not exist.', 259, $this->source); })()), "html", null, true);
                echo "</div>

                        ";
                // line 261
                if (twig_length_filter($this->env, (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 261, $this->source); })()))) {
                    // line 262
                    echo "                            <div>
                                <div id=\"action-menubtn\" class=\"btn menubtn\" data-icon=\"settings\" title=\"";
                    // line 263
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Actions", "app"), "html", null, true);
                    echo "\"></div>
                                <div class=\"menu\">
                                    ";
                    // line 265
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 265, $this->source); })()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["actionList"]) {
                        // line 266
                        echo "                                        ";
                        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                            echo "<hr>";
                        }
                        // line 267
                        echo "                                        <ul>
                                            ";
                        // line 268
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["actionList"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["actionItem"]) {
                            // line 269
                            echo "                                                <li><a";
                            // line 270
                            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["actionItem"], "id", array(), "any", true, true)) {
                                echo " id=\"";
                                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["actionItem"], "id", array()), "html", null, true);
                                echo "\"";
                            }
                            // line 271
                            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["actionItem"], "action", array(), "any", true, true)) {
                                echo " class=\"formsubmit\" data-action=\"";
                                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["actionItem"], "action", array()), "html", null, true);
                                echo "\"";
                            }
                            // line 272
                            echo ">";
                            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["actionItem"], "label", array()), "html", null, true);
                            echo "</a>
                                                </li>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actionItem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 275
                        echo "                                        </ul>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actionList'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 277
                    echo "                                </div>
                                <div id=\"action-spinner\" class=\"spinner hidden\"></div>
                            </div>
                        ";
                }
                // line 281
                echo "                    </div>
                </div>

                ";
                // line 284
                if ((((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 284, $this->source); })()), "getStatus", array(), "method") == "locked") && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 284, $this->source); })()), "app", array()), "config", array()), "general", array()), "cooldownDuration", array())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 284, $this->source); })()), "remainingCooldownTime", array()))) {
                    // line 285
                    echo "                    <div class=\"data\">
                        <h5 class=\"heading\">";
                    // line 286
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Cooldown Time Remaining", "app"), "html", null, true);
                    echo "</h5>
                        <p class=\"value\">";
                    // line 287
                    echo twig_escape_filter($this->env, craft\helpers\DateTimeHelper::humanDurationFromInterval(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 287, $this->source); })()), "remainingCooldownTime", array())), "html", null, true);
                    echo "</p>
                    </div>
                ";
                }
                // line 290
                echo "
                <div class=\"data\">
                    <h5 class=\"heading\">";
                // line 292
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Registered at", "app"), "html", null, true);
                echo "</h5>
                    <p class=\"value\">";
                // line 293
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->datetimeFilter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 293, $this->source); })()), "dateCreated", array()), "short"), "html", null, true);
                echo "</p>
                </div>

                ";
                // line 296
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 296, $this->source); })()), "getStatus", array(), "method") != "pending")) {
                    // line 297
                    echo "                    <div class=\"data\">
                        <h5 class=\"heading\">";
                    // line 298
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Last login", "app"), "html", null, true);
                    echo "</h5>
                        <p class=\"value\">";
                    // line 299
                    if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 299, $this->source); })()), "lastLoginDate", array())) {
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->datetimeFilter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 299, $this->source); })()), "lastLoginDate", array()), "short"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Never", "app"), "html", null, true);
                    }
                    echo "</p>
                    </div>

                    ";
                    // line 302
                    if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 302, $this->source); })()), "getStatus", array(), "method") == "locked")) {
                        // line 303
                        echo "                        <div class=\"data\">
                            <h5 class=\"heading\">";
                        // line 304
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Last login fail", "app"), "html", null, true);
                        echo "</h5>
                            <p class=\"value\">";
                        // line 305
                        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 305, $this->source); })()), "lastInvalidLoginDate", array())) {
                            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->datetimeFilter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 305, $this->source); })()), "lastInvalidLoginDate", array()), "short"), "html", null, true);
                        }
                        echo "</p>
                        </div>

                        <div class=\"data\">
                            <h5 class=\"heading\">";
                        // line 309
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Login fail count", "app"), "html", null, true);
                        echo "</h5>
                            <p class=\"value\">";
                        // line 310
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 310, $this->source); })()), "invalidLoginCount", array()), "html", null, true);
                        echo "</p>
                        </div>
                    ";
                    }
                    // line 313
                    echo "                ";
                }
                // line 314
                echo "            </form>
        ";
            }
            // line 316
            echo "    ";
        }
        // line 317
        echo "
    ";
        // line 319
        echo "    ";
        echo \Craft::$app->getView()->invokeHook("cp.users.edit.details", $context);

    }

    public function getTemplateName()
    {
        return "users/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 319,  705 => 317,  702 => 316,  698 => 314,  695 => 313,  689 => 310,  685 => 309,  676 => 305,  672 => 304,  669 => 303,  667 => 302,  657 => 299,  653 => 298,  650 => 297,  648 => 296,  642 => 293,  638 => 292,  634 => 290,  628 => 287,  624 => 286,  621 => 285,  619 => 284,  614 => 281,  608 => 277,  593 => 275,  583 => 272,  577 => 271,  571 => 270,  569 => 269,  565 => 268,  562 => 267,  557 => 266,  540 => 265,  535 => 263,  532 => 262,  530 => 261,  523 => 259,  518 => 257,  513 => 255,  510 => 254,  507 => 253,  504 => 252,  501 => 251,  494 => 246,  490 => 245,  487 => 243,  483 => 241,  479 => 239,  477 => 238,  476 => 234,  472 => 232,  470 => 231,  469 => 227,  465 => 225,  463 => 224,  459 => 222,  457 => 221,  456 => 220,  455 => 216,  450 => 214,  449 => 211,  446 => 210,  441 => 207,  426 => 205,  422 => 204,  419 => 203,  416 => 202,  414 => 201,  410 => 199,  408 => 198,  405 => 197,  403 => 196,  400 => 195,  395 => 192,  391 => 190,  389 => 188,  388 => 187,  387 => 186,  381 => 185,  376 => 182,  372 => 180,  370 => 178,  368 => 174,  366 => 173,  360 => 171,  358 => 170,  355 => 169,  348 => 165,  347 => 163,  344 => 162,  341 => 161,  335 => 159,  330 => 156,  322 => 153,  320 => 152,  319 => 151,  318 => 149,  317 => 148,  314 => 147,  310 => 146,  307 => 145,  305 => 144,  301 => 142,  299 => 141,  296 => 140,  293 => 139,  291 => 138,  285 => 136,  283 => 135,  279 => 133,  277 => 132,  274 => 131,  271 => 130,  264 => 128,  262 => 126,  261 => 125,  260 => 124,  255 => 123,  250 => 122,  248 => 121,  244 => 119,  240 => 117,  236 => 115,  234 => 114,  232 => 111,  230 => 110,  227 => 109,  223 => 107,  221 => 106,  219 => 101,  217 => 100,  213 => 98,  211 => 97,  210 => 95,  209 => 92,  208 => 90,  205 => 89,  203 => 88,  200 => 87,  196 => 85,  193 => 81,  191 => 80,  187 => 78,  185 => 77,  184 => 75,  183 => 72,  182 => 70,  179 => 69,  177 => 68,  172 => 65,  167 => 63,  165 => 60,  163 => 59,  160 => 58,  158 => 57,  152 => 54,  148 => 53,  142 => 51,  139 => 50,  127 => 43,  121 => 40,  117 => 39,  113 => 38,  105 => 33,  102 => 32,  96 => 30,  93 => 29,  90 => 28,  86 => 1,  75 => 328,  71 => 326,  67 => 324,  64 => 323,  62 => 322,  59 => 26,  53 => 22,  51 => 21,  46 => 20,  44 => 19,  42 => 17,  40 => 15,  38 => 11,  36 => 9,  33 => 4,  31 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}

{% if CraftEdition == CraftPro and currentUser.can('editUsers') %}
    {% set crumbs = [
    { label: \"Users\"|t('app'), url: url('users') }
    ] %}
{% endif %}

{% import \"_includes/forms\" as forms %}

{% do view.registerTranslations('app', [
    \"Are you sure you want to delete this photo?\",
]) %}

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\fileupload\\\\FileUploadAsset\") %}

{% set requireEmailVerification = craft.app.systemSettings.getSettings('users').requireEmailVerification %}

{% set hiddenInputs %}
    {{ csrfInput() }}
    {% if not isNewUser -%}
        <input type=\"hidden\" name=\"userId\" value=\"{{ user.id }}\">
    {%- endif %}
{% endset %}

{% hook \"cp.users.edit\" %}

{% block actionButton %}
    {% if not currentUser.can('registerUsers') or CraftEdition != CraftPro %}
        <div class=\"btn submit formsubmit\" data-form=\"userform\">{{ 'Save'|t('app') }}</div>
    {% else %}
        <div class=\"btngroup\">
            <div class=\"btn submit formsubmit\" data-form=\"userform\">{{ 'Save'|t('app') }}</div>
            <div class=\"btn submit menubtn\" data-form=\"userform\"></div>
            <div class=\"menu\">
                <ul>
                    <li>
                        <a class=\"formsubmit\" data-redirect=\"{{ (isNewUser ? 'users/{id}' : user.getCpEditUrl())|hash }}\">
                            {{ forms.optionShortcutLabel('S') }}
                            {{ \"Save and continue editing\"|t('app') }}
                        </a>
                    </li>
                    <li><a class=\"formsubmit\" data-redirect=\"{{ 'users/new#'|hash }}\">{{ \"Save and add another\"|t('app') }}</a></li>
                </ul>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block content %}
    <form id=\"userform\" method=\"post\" accept-charset=\"UTF-8\" autocomplete=\"off\" data-saveshortcut data-saveshortcut-redirect=\"{{ (user.getIsCurrent() ? 'myaccount' : (CraftEdition == CraftPro and currentUser.can('editUsers') ? 'users/{id}' : 'dashboard'))|hash }}\" data-confirm-unload>
        <input type=\"hidden\" name=\"action\" value=\"users/save-user\">
        {{ redirectInput(CraftEdition == CraftPro and currentUser.can('editUsers') ? 'users' : 'dashboard') }}
        {{ hiddenInputs }}

        <div id=\"account\">
            {% include \"users/_accountfields\" %}

            {% if not isNewUser %}
                {{ forms.field({
                    label: \"Photo\"|t('app'),
                    id: 'photo'
                }, include('users/_photo', {user: user}, with_context = false)) }}
            {% endif %}

            <hr>

            {% if isNewUser %}

                {{ forms.textField({
                    label: \"Email\"|t('app'),
                    instructions: (requireEmailVerification and not currentUser.admin ? 'A verification email will be sent automatically.'|t('app')),
                    id: 'email',
                    name: 'email',
                    value: user.email,
                    required: true,
                    errors: user.getErrors('email')|merge(user.getErrors('unverifiedEmail'))
                }) }}

                {% if requireEmailVerification and currentUser.admin %}
                    {{ forms.checkboxField({
                        label: \"Send an activation email now?\"|t('app'),
                        name: 'sendVerificationEmail',
                        checked: true
                    }) }}
                {% endif %}

            {% elseif user.getIsCurrent() or currentUser.admin or currentUser.can('changeUserEmails') %}

                {{ forms.textField({
                    label: \"Email\"|t('app'),
                    instructions: (requireEmailVerification and not currentUser.admin ? 'New email addresses must be verified before taking effect.'|t('app')),
                    id: 'email',
                    name: 'email',
                    value: user.email,
                    required: true,
                    errors: user.getErrors('email')|merge(user.getErrors('unverifiedEmail'))
                }) }}

                {% if user.getIsCurrent() %}
                    {{ forms.textField({
                        label: \"New Password\"|t('app'),
                        id: 'newPassword',
                        name: 'newPassword',
                        type: 'password',
                        errors: user.getErrors('newPassword')
                    }) }}
                {% endif %}

                {% if currentUser.admin %}
                    {{ forms.checkboxField({
                        label: \"Require a password reset on next login\"|t('app'),
                        name: 'passwordResetRequired',
                        checked: user.passwordResetRequired
                    }) }}
                {% endif %}

            {% endif %}
        </div>

        {% if CraftEdition == CraftPro %}
            {% for tab in user.getFieldLayout().getTabs() %}
                <div id=\"{{ tab.getHtmlId() }}\" class=\"hidden\">
                    {% include \"_includes/fields\" with {
                        fields:  tab.getFields(),
                        element: user
                    } only %}
                </div>
            {% endfor %}
        {% endif %}

        {% if CraftEdition == CraftPro and (currentUser.can('assignUserGroups') or currentUser.can('assignUserPermissions')) %}
            <div id=\"perms\" class=\"hidden\">

                {% if CraftEdition == CraftPro and currentUser.can('assignUserGroups') %}
                    <h2>{{ \"User Groups\"|t('app') }}</h2>

                    {% set assignableGroups = craft.app.userGroups.getAssignableGroups(user) %}
                    {% set currentGroupIds = user.getGroups()|column('id') %}

                    {% set userGroupsInput %}
                        <input type=\"hidden\" name=\"groups\" value=\"\">

                        {% if assignableGroups %}
                            <ul>
                                {% for group in assignableGroups %}
                                    <li>
                                        {{ forms.checkbox({
                                            label: group.name|t('site')|e,
                                            name: 'groups[]',
                                            value: group.id,
                                            checked: (group.id in currentGroupIds)
                                        }) }}
                                    </li>
                                {% endfor %}
                            </ul>

                        {% else %}
                            <p>{{ \"No user groups exist yet.\"|t('app') }}</p>
                        {% endif %}
                    {% endset %}

                    {{ forms.field({
                        fieldId: 'user-groups'
                    }, userGroupsInput) }}

                    <hr>
                {% endif %}

                {% if currentUser.can('assignUserPermissions') %}
                    <h2>{{ \"Permissions\"|t('app') }}</h2>

                    {% if currentUser.admin and CraftEdition == CraftPro %}
                        {{ forms.checkboxField({
                            label: '<strong>' ~ \"Admin\"|t('app') ~ '</strong>',
                            name: 'admin',
                            id: 'admin',
                            checked: user.admin,
                            reverseToggle: 'permissions'
                        }) }}
                    {% endif %}

                    <input type=\"hidden\" name=\"permissions\" value=\"\">

                    <div id=\"permissions\" class=\"field{% if user.admin %} hidden{% endif %}\">
                        {% include \"_includes/permissions\" with {
                            userOrGroup: (user.admin ? null : user),
                            groupPermissions: user.id ? craft.app.userPermissions.getGroupPermissionsByUserId(user.id) : []
                        } only %}
                    </div>
                {% endif %}

            </div>
        {% endif %}

        {% if user.getIsCurrent() %}
            <div id=\"prefs\" class=\"hidden\">
                {% set languageInput %}
                    <div class=\"select\">
                        <select id=\"language\" name=\"preferredLanguage\">
                            {% set allAppLocales = craft.app.i18n.getAppLocales()|multisort('displayName') %}
                            {% set userLanguage = user.getPreferredLanguage() ?: craft.app.language %}

                            {% for locale in allAppLocales %}
                                <option value=\"{{ locale.id }}\" {% if locale.id == userLanguage %}selected{% endif %}>{{ locale.getDisplayName() }}</option>
                            {% endfor %}
                        </select>
                    </div>
                {% endset %}

                {{ forms.field({
                    id: 'language',
                    label: \"Language\"|t('app')
                }, languageInput) }}

                {{ forms.selectField({
                    label: \"Week Start Day\"|t('app'),
                    id: 'weekStartDay',
                    name: 'weekStartDay',
                    options: craft.app.locale.getWeekDayNames(),
                    value: user.getPreference('weekStartDay', craft.app.config.general.defaultWeekStartDay)
                }) }}

                {% if user.admin %}
                    <hr>

                    {{ forms.checkboxField({
                        label: \"Show the debug toolbar on the front end\"|t('app'),
                        name: 'enableDebugToolbarForSite',
                        id: 'enableDebugToolbarForSite',
                        checked: user.getPreference('enableDebugToolbarForSite')
                    }) }}

                    {{ forms.checkboxField({
                        label: \"Show the debug toolbar on the Control Panel\"|t('app'),
                        name: 'enableDebugToolbarForCp',
                        id: 'enableDebugToolbarForCp',
                        checked: user.getPreference('enableDebugToolbarForCp')
                    }) }}
                {% endif %}
            </div>
        {% endif %}

        {# Give plugins a chance to add other things here #}
        {% hook \"cp.users.edit.content\" %}

        <input type=\"submit\" class=\"hidden\">
    </form>
{% endblock %}

{% block details %}
    {% if not isNewUser %}
        {% if CraftEdition == CraftPro %}
            <form class=\"meta read-only\" method=\"post\" accept-charset=\"UTF-8\">
                {{ hiddenInputs }}
                <div class=\"data first\">
                    <h5 class=\"heading\">{{ \"Status\"|t('app') }}</h5>
                    <div class=\"value flex\">
                        <div class=\"flex-grow\"><span class=\"status {{ user.getStatus() }}\"></span> {{ statusLabel }}</div>

                        {% if actions|length %}
                            <div>
                                <div id=\"action-menubtn\" class=\"btn menubtn\" data-icon=\"settings\" title=\"{{ 'Actions'|t('app') }}\"></div>
                                <div class=\"menu\">
                                    {% for actionList in actions %}
                                        {% if not loop.first %}<hr>{% endif %}
                                        <ul>
                                            {% for actionItem in actionList %}
                                                <li><a
                                                        {%- if actionItem.id is defined %} id=\"{{ actionItem.id }}\"{% endif %}
                                                        {%- if actionItem.action is defined %} class=\"formsubmit\" data-action=\"{{ actionItem.action }}\"{% endif -%}
                                                    >{{ actionItem.label }}</a>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    {% endfor %}
                                </div>
                                <div id=\"action-spinner\" class=\"spinner hidden\"></div>
                            </div>
                        {% endif %}
                    </div>
                </div>

                {% if user.getStatus() == 'locked' and craft.app.config.general.cooldownDuration and user.remainingCooldownTime %}
                    <div class=\"data\">
                        <h5 class=\"heading\">{{ \"Cooldown Time Remaining\"|t('app') }}</h5>
                        <p class=\"value\">{{ user.remainingCooldownTime|duration }}</p>
                    </div>
                {% endif %}

                <div class=\"data\">
                    <h5 class=\"heading\">{{ \"Registered at\"|t('app') }}</h5>
                    <p class=\"value\">{{ user.dateCreated|datetime('short') }}</p>
                </div>

                {% if user.getStatus() != 'pending' %}
                    <div class=\"data\">
                        <h5 class=\"heading\">{{ \"Last login\"|t('app') }}</h5>
                        <p class=\"value\">{% if user.lastLoginDate %}{{ user.lastLoginDate|datetime('short') }}{% else %}{{ \"Never\"|t('app') }}{% endif %}</p>
                    </div>

                    {% if user.getStatus() == 'locked' %}
                        <div class=\"data\">
                            <h5 class=\"heading\">{{ \"Last login fail\"|t('app') }}</h5>
                            <p class=\"value\">{% if user.lastInvalidLoginDate %}{{ user.lastInvalidLoginDate|datetime('short') }}{% endif %}</p>
                        </div>

                        <div class=\"data\">
                            <h5 class=\"heading\">{{ \"Login fail count\"|t('app') }}</h5>
                            <p class=\"value\">{{ user.invalidLoginCount }}</p>
                        </div>
                    {% endif %}
                {% endif %}
            </form>
        {% endif %}
    {% endif %}

    {# Give plugins a chance to add other stuff here #}
    {% hook \"cp.users.edit.details\" %}
{% endblock %}

{% js %}
    {% if user.getIsCurrent() %}
        var changeSidebarPicture = true;
    {% else %}
        var changeSidebarPicture = false;
    {% endif %}

    new Craft.ElevatedSessionForm('#userform', [
        '#email',
        '#newPassword',
        '#admin:not(:checked)',
        '#user-groups input[type=\"checkbox\"]:not(:checked)',
        '#permissions input[type=\"checkbox\"]:not(:checked)'
    ]);
{% endjs %}
", "users/_edit", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/users/_edit.html");
    }
}
