<?php

/* admin-bar/bar */
class __TwigTemplate_8a1cd1dca0e8ecc108a3f7dca4e87b3b8a925358be93581d9a7385e66fe6d32a extends craft\web\twig\Template
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
        // line 2
        echo "
";
        // line 3
        $context["devMode"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 3, $this->source); })()), "app", array()), "config", array()), "general", array()), "devMode", array());
        // line 4
        echo "
";
        // line 5
        $context["self"] = $this;
        // line 6
        echo "
";
        // line 8
        $context["assetBundlePath"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 8, $this->source); })()), "getAssetManager", array(), "method"), "getPublishedPath", array(0 => "@wbrowar/adminbar/assetbundles/adminbar/dist", 1 => true), "method");
        // line 9
        $context["dashboardPath"] = ((isset($context["assetBundlePath"]) || array_key_exists("assetBundlePath", $context) ? $context["assetBundlePath"] : (function () { throw new Twig_Error_Runtime('Variable "assetBundlePath" does not exist.', 9, $this->source); })()) . "/img/dashboard.svg");
        // line 10
        $context["devmodePath"] = ((isset($context["assetBundlePath"]) || array_key_exists("assetBundlePath", $context) ? $context["assetBundlePath"] : (function () { throw new Twig_Error_Runtime('Variable "assetBundlePath" does not exist.', 10, $this->source); })()) . "/img/devmode.svg");
        // line 11
        $context["editPath"] = ((isset($context["assetBundlePath"]) || array_key_exists("assetBundlePath", $context) ? $context["assetBundlePath"] : (function () { throw new Twig_Error_Runtime('Variable "assetBundlePath" does not exist.', 11, $this->source); })()) . "/img/edit.svg");
        // line 12
        $context["iconPath"] = ((isset($context["assetBundlePath"]) || array_key_exists("assetBundlePath", $context) ? $context["assetBundlePath"] : (function () { throw new Twig_Error_Runtime('Variable "assetBundlePath" does not exist.', 12, $this->source); })()) . "/img/icon.svg");
        // line 13
        $context["settingsPath"] = ((isset($context["assetBundlePath"]) || array_key_exists("assetBundlePath", $context) ? $context["assetBundlePath"] : (function () { throw new Twig_Error_Runtime('Variable "assetBundlePath" does not exist.', 13, $this->source); })()) . "/img/settings.svg");
        // line 14
        echo "
";
        // line 15
        if ((($context["useCss"]) ?? (true))) {
            // line 16
            echo "    ";
            ob_start();
            // line 17
            echo "        :root{--adminbar-bg:linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.95));--adminbar-color-bg:rgba(0,0,0,0.9);--adminbar-color-border:#505050;--adminbar-color-highlight:#d85b4b;--adminbar-color-link-text:#fff;--adminbar-color-text:rgba(255,255,255,0.8);--adminbar-font-stack:'BlinkMacSystemFont', -apple-system, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;--adminbar-font-size-mobile:17px;--adminbar-font-size-desktop:14px;--adminbar-height-mobile:52px;--adminbar-height-desktop:45px;--editlinks-bg:var(--editlinks-color-bg);--editlinks-color-bg:var(--adminbar-color-bg);--editlinks-color-border:var(--adminbar-color-border);--editlinks-color-highlight:var(--adminbar-color-highlight);--editlinks-color-link-text:var(--adminbar-color-link-text);--editlinks-color-text:rgba(255,255,255,0.8);--adminbar-logo-links:var(--adminbar-color-highlight);--adminbar-logo-logout:var(--adminbar-color-highlight);--adminbar-logo-pencil:var(--adminbar-color-bg);--adminbar-logo-user:#7e9fc3}.adminbar__icon{display:inline-block;margin-right:7px;width:22px;-webkit-transform:translateY(2px);transform:translateY(2px)}.adminbar__icon svg{width:100%}@media (min-width: 601px){.adminbar .adminbar__icon{margin-right:5px;width:15px}}.adminbar{position:relative;margin:0;padding:0;width:100%;height:var(--adminbar-height-mobile);-webkit-box-sizing:border-box;box-sizing:border-box;background:var(--adminbar-bg);font-family:var(--adminbar-font-stack);font-size:var(--adminbar-font-size-mobile);color:var(--adminbar-color-link-text);-webkit-transition:height .3s ease-out;transition:height .3s ease-out;overflow:hidden;z-index:100000}.adminbar--devmode{padding-top:4px;height:calc(var(--adminbar-height-mobile) + 4px)}.adminbar--sticky{position:fixed;top:0;left:0}.adminbar--widget--on{height:100vh !important}.adminbar__bar{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;height:var(--adminbar-height-mobile)}.adminbar a{margin:0;padding:0 10px;height:100%;text-align:center;text-decoration:none;-webkit-transition:color .2s ease-out, background .2s ease-out;transition:color .2s ease-out, background .2s ease-out}.adminbar a svg *{-webkit-transition:fill .2s ease-out;transition:fill .2s ease-out}.adminbar__devmode_indicator{display:block;position:absolute;top:0;left:0;height:4px;width:100%;background:url(\"data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMjguNDcgMjIuOTUiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojZjNiNjM4fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5kZXZtb2RlPC90aXRsZT48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xODUuNTIgMGgtMTIwTDQyLjk1IDIyLjk1aDEyMEwxODUuNTIgMHoiLz48L3N2Zz4=\") repeat-x 15px 0}.adminbar__greeting{display:none;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;padding:0 15px;color:var(--adminbar-color-link-text);white-space:nowrap}.adminbar--mobile .adminbar__greeting{display:-webkit-box;display:-ms-flexbox;display:flex}.adminbar__user_photo{margin-right:7px;-webkit-box-sizing:border-box;box-sizing:border-box;width:23px;line-height:0}.adminbar__user_photo img{width:23px;max-width:23px;height:auto;border-radius:50%}.adminbar__links_wrapper{display:grid;grid-template-columns:auto auto;grid-template-rows:var(--adminbar-height-mobile);-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;min-width:1px;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}@media (max-width: 600px){.adminbar--active .adminbar__links_wrapper{overflow:scroll}}.adminbar__widget_buttons{display:-webkit-box;display:-ms-flexbox;display:flex;width:100%;height:100%}.adminbar__widget_button{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:0;-ms-flex:0 0 var(--adminbar-height-desktop);flex:0 0 var(--adminbar-height-desktop);-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;position:relative;-webkit-box-sizing:border-box;box-sizing:border-box;width:var(--adminbar-height-desktop)}.adminbar__widget_button path{fill:var(--adminbar-color-link-text)}.adminbar__widget_button polygon{fill:var(--adminbar-color-link-text)}.adminbar__widget_button rect{fill:var(--adminbar-color-link-text)}.adminbar__widget_button circle{fill:var(--adminbar-color-link-text)}.adminbar__widget_button svg{width:calc(var(--adminbar-height-desktop) - 20px)}.adminbar__widget_button--active{background-color:var(--adminbar-color-highlight)}.adminbar__widget_button__click{position:absolute;top:0;left:0;width:100%;height:100%}.adminbar__links{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;padding:0}.adminbar--mobile .adminbar__links{display:none}@media (max-width: 600px){.adminbar--mobile .adminbar--active .adminbar__links{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-flow:column nowrap;flex-flow:column nowrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding:40px;min-height:100%;-webkit-box-sizing:border-box;box-sizing:border-box;font-size:1.4em}}.adminbar__links a{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;color:var(--adminbar-color-link-text)}.adminbar__links a svg path{fill:var(--adminbar-color-link-text)}.adminbar__links a svg polygon{fill:var(--adminbar-color-link-text)}.adminbar__links a svg rect{fill:var(--adminbar-color-link-text)}.adminbar__links a svg circle{fill:var(--adminbar-color-link-text)}.adminbar__logout{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-item-align:end;align-self:flex-end;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-flow:column nowrap;flex-flow:column nowrap;-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;padding:0;text-align:right;font-size:.9em}.adminbar__logout a{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:9px 25px;background-color:transparent;-webkit-transition:background .2s ease-out, color .2s ease-out;transition:background .2s ease-out, color .2s ease-out;color:var(--adminbar-color-text)}.adminbar__logout a:hover{background-color:var(--adminbar-color-highlight);color:var(--adminbar-color-link-text)}.adminbar--mobile .adminbar__logout_link{display:none}.adminbar__mobile_toggle{display:none;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:10px 25px;line-height:1;cursor:pointer}.adminbar__mobile_toggle svg{width:30px}.adminbar__mobile_toggle svg path{fill:var(--adminbar-color-link-text)}.adminbar__mobile_toggle svg polygon{fill:var(--adminbar-color-link-text)}.adminbar__mobile_toggle svg rect{fill:var(--adminbar-color-link-text)}.adminbar__mobile_toggle svg circle{fill:var(--adminbar-color-link-text)}@media (max-width: 600px){.adminbar--mobile .adminbar__mobile_toggle{display:block}}@media (max-width: 600px){.adminbar__overlay.adminbar--active{position:fixed;top:0;left:0;width:100%;height:100%;-webkit-box-sizing:border-box;box-sizing:border-box;background-color:var(--adminbar-color-highlight);overflow:auto;z-index:10}}.adminbar__overlay>.adminbar__close{display:none;position:fixed;top:0;right:0;padding:10px 25px;font-size:1.1em;cursor:pointer}.adminbar__overlay>.adminbar__close svg{width:30px}.adminbar__overlay>.adminbar__close svg path{fill:var(--adminbar-color-link-text)}.adminbar__overlay>.adminbar__close svg polygon{fill:var(--adminbar-color-link-text)}.adminbar__overlay>.adminbar__close svg rect{fill:var(--adminbar-color-link-text)}.adminbar__overlay>.adminbar__close svg circle{fill:var(--adminbar-color-link-text)}.adminbar--devmode .adminbar__overlay>.adminbar__close{top:4px}@media (max-width: 600px){.adminbar__overlay.adminbar--active>.adminbar__close{display:block}}.adminbar_widgets{padding:5vh 5vw;height:calc(100% - 10vh);border-top:1px solid transparent;-webkit-transition:border-color .3s ease-out;transition:border-color .3s ease-out;overflow:hidden}.adminbar--widget--on .adminbar_widgets{border-color:var(--adminbar-color-border)}.adminbar_widgets__content{position:relative;width:100%;height:100%;overflow:scroll}.adminbar_widget{display:grid;grid-gap:30px;grid-template-columns:repeat(auto-fit, minmax(200px, 300px));grid-template-rows:auto;position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;-webkit-transition:opacity .3s ease-out;transition:opacity .3s ease-out}.adminbar_widget--active{opacity:1;z-index:1}.adminbar_widget--template--center{grid-template-columns:[start] auto [content-start] minmax(300px, 900px) [content-end] auto [end];grid-template-areas:\". adminbar-widget .\"}.adminbar_widget--template--center>*:first-child{grid-area:adminbar-widget}.adminbar_widget--template--columns_12{grid-template-columns:[start] repeat(12, 1fr) [end]}@media (min-width: 601px){.adminbar{font-size:var(--adminbar-font-size-desktop);height:var(--adminbar-height-desktop)}.adminbar--devmode{height:calc(var(--adminbar-height-desktop) + 4px)}.adminbar__bar{height:var(--adminbar-height-desktop)}.adminbar__greeting{display:-webkit-box;display:-ms-flexbox;display:flex;border-right:1px solid var(--adminbar-color-border)}.adminbar__links_wrapper{grid-template-rows:var(--adminbar-height-desktop);-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.adminbar__links_wrapper a{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;height:100%}.adminbar__links_wrapper a:hover{background-color:var(--adminbar-color-link-text);color:var(--adminbar-color-highlight)}.adminbar__links_wrapper a:hover svg path{fill:var(--adminbar-color-highlight)}.adminbar__links_wrapper a:hover svg polygon{fill:var(--adminbar-color-highlight)}.adminbar__links_wrapper a:hover svg rect{fill:var(--adminbar-color-highlight)}.adminbar__links_wrapper a:hover svg circle{fill:var(--adminbar-color-highlight)}.adminbar__widget_buttons{overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.adminbar__links{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;height:100%}.adminbar--mobile .adminbar__links{display:-webkit-box;display:-ms-flexbox;display:flex}.adminbar__logout{-ms-flex-item-align:stretch;align-self:stretch;font-size:1em}.adminbar__logout a{padding:9px 25px}.adminbar__logout_link{border-left:1px solid var(--adminbar-color-border)}.adminbar--mobile .adminbar__logout_link{display:-webkit-box;display:-ms-flexbox;display:flex}.adminbar--mobile .adminbar__mobile_toggle{display:none}}

        ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["customCss"]) || array_key_exists("customCss", $context) ? $context["customCss"] : (function () { throw new Twig_Error_Runtime('Variable "customCss" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "
    ";
            $context["css"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 21
            echo "    ";
            $this->extensions['wbrowar\adminbar\twigextensions\AdminBarTwigExtension']->addAdminBarCss((isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new Twig_Error_Runtime('Variable "css" does not exist.', 21, $this->source); })()));
        }
        // line 23
        echo "
";
        // line 24
        if ((($context["useJs"]) ?? (true))) {
            // line 25
            echo "    ";
            $context["js"] = ('' === $tmp = "        \"use strict\";var adminBar=document.getElementById(\"adminbar\"),adminBarWidgetButtons=document.getElementsByClassName(\"adminbar__widget_button__click\"),adminBarWidgets=document.getElementsByClassName(\"adminbar_widget\");function adminBarAddClass(a,t){a.classList?a.classList.add(t):a.className+=\" \"+t}function adminBarHasClass(a,t){return a.classList?a.classList.contains(t):new RegExp(\"(^| )\"+t+\"( |\$)\",\"gi\").test(a.className)}function adminBarRemoveClass(a,t){a.classList?a.classList.remove(t):a.className=a.className.replace(new RegExp(\"(^|\\\\b)\"+t.split(\" \").join(\"|\")+\"(\\\\b|\$)\",\"gi\"),\" \")}function adminBarShowMobile(a){adminBarAddClass(document.querySelector(\"#adminbar__links .adminbar__overlay\"),\"adminbar--active\")}function adminBarHideMobile(a){adminBarRemoveClass(document.querySelector(\"#adminbar__links .adminbar__overlay\"),\"adminbar--active\")}function adminBarWidgetButtonHandler(a){var t=adminBar.hasAttribute(\"data-current-widget\")?adminBar.getAttribute(\"data-current-widget\"):null,e=a.target.getAttribute(\"data-widget-id\");console.log(a.target),e===t?adminBarCloseWidgets():adminBarShowWidget(e)}function adminBarCloseWidgets(){var a=document.querySelector(\".adminbar__widget_button.adminbar__widget_button--active\");void 0!==a&&adminBarRemoveClass(a,\"adminbar__widget_button--active\"),adminBarRemoveClass(adminBar,\"adminbar--widget--on\"),adminBar.removeAttribute(\"data-current-widget\")}function adminBarRemoveWidget(a){var t=document.getElementById(\"adminbar__widget_buttons\"),e=document.getElementById(\"adminbar__widget_button--\"+a);t&&e&&t.removeChild(e);var d=document.getElementById(\"adminbar_widgets__content\"),i=document.getElementById(\"adminbar_widget--\"+a);d&&i&&d.removeChild(i)}function adminBarShowWidget(a){var t=void 0,e=void 0;adminBarAddClass(adminBar,\"adminbar--widget--on\"),adminBar.setAttribute(\"data-current-widget\",a);for(var d=0;d<adminBarWidgets.length;d++)t=document.querySelector('.adminbar__widget_button[data-widget-id=\"'+adminBarWidgets[d].getAttribute(\"data-widget-id\")+'\"]'),e=document.querySelector('.adminbar_widget[data-widget-id=\"'+adminBarWidgets[d].getAttribute(\"data-widget-id\")+'\"]'),a===t.getAttribute(\"data-widget-id\")?(adminBarAddClass(t,\"adminbar__widget_button--active\"),adminBarAddClass(e,\"adminbar_widget--active\")):(adminBarRemoveClass(t,\"adminbar__widget_button--active\"),adminBarRemoveClass(e,\"adminbar_widget--active\"))}!function(){if(adminBar){document.getElementById(\"adminbar__mobile_toggle\").addEventListener(\"click\",adminBarShowMobile);for(var a=document.querySelectorAll(\".adminbar__overlay .adminbar__close\"),t=0;t<a.length;t++)a[t].addEventListener(\"click\",adminBarHideMobile);for(var e=0;e<adminBarWidgetButtons.length;e++)adminBarWidgetButtons[e].addEventListener(\"click\",adminBarWidgetButtonHandler);adminBarAddClass(document.documentElement,\"adminbar-on\")}}();
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 28
            echo "    ";
            $this->extensions['wbrowar\adminbar\twigextensions\AdminBarTwigExtension']->addAdminBarJs((isset($context["js"]) || array_key_exists("js", $context) ? $context["js"] : (function () { throw new Twig_Error_Runtime('Variable "js" does not exist.', 28, $this->source); })()));
        }
        // line 30
        echo "
";
        // line 47
        echo "
<div id=\"adminbar\" class=\"adminbar";
        // line 48
        if ((($context["sticky"]) ?? (true))) {
            echo " adminbar--sticky";
        }
        if ((isset($context["devMode"]) || array_key_exists("devMode", $context) ? $context["devMode"] : (function () { throw new Twig_Error_Runtime('Variable "devMode" does not exist.', 48, $this->source); })())) {
            echo " adminbar--devmode";
        }
        if ((($context["enableMobileMenu"]) ?? (true))) {
            echo " adminbar--mobile";
        }
        echo "\">
    <div class=\"adminbar__bar\">

        ";
        // line 51
        if ((isset($context["devMode"]) || array_key_exists("devMode", $context) ? $context["devMode"] : (function () { throw new Twig_Error_Runtime('Variable "devMode" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "            <div class=\"adminbar__devmode_indicator\"></div>
        ";
        }
        // line 54
        echo "
        ";
        // line 55
        if ((($context["displayGreeting"]) ?? (true))) {
            // line 56
            echo "            <div class=\"adminbar__greeting\">";
            ob_start();
            // line 57
            echo "                ";
            if (((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 57, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 57, $this->source); })()), "photo", array()))) {
                // line 58
                echo "                    <span class=\"adminbar__user_photo\">
                        <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 59, $this->source); })()), "getThumbUrl", array(0 => 50), "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 59, $this->source); })()), "friendlyName", array()), "html", null, true);
                echo "’s photo\"/>
                    </span>
                ";
            }
            // line 62
            echo "
                ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Hi"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["currentUser"] ?? null), "friendlyName", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["currentUser"] ?? null), "friendlyName", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["currentUser"] ?? null), "friendlyName", array())) : ("")), "html", null, true);
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 64
            echo "</div>
        ";
        }
        // line 66
        echo "
        <div id=\"adminbar__links\" class=\"adminbar__links_wrapper\">
            <div id=\"adminbar__widget_buttons\" class=\"adminbar__widget_buttons\">
                ";
        // line 69
        if ((($context["widgets"]) ?? (false))) {
            // line 70
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new Twig_Error_Runtime('Variable "widgets" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "                        <a id=\"adminbar__widget_button--";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()), "html", null, true);
                echo "\" class=\"adminbar__widget_button\" href=\"javascript:;\" title=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "name", array()), "html", null, true);
                echo "\" data-widget-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "iconPath", array())), "html", null, true);
                echo "<span class=\"adminbar__widget_button__click\" data-widget-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()), "html", null, true);
                echo "\"></span></a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                ";
        }
        // line 74
        echo "            </div>
            <div class=\"adminbar__overlay\">
                <nav id=\"adminbar__links_nav\" class=\"adminbar__links\">
                    ";
        // line 77
        if ((($context["displayDashboardLink"]) ?? (true))) {
            // line 78
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 78, $this->source); })()), "app", array()), "config", array()), "general", array()), "cpTrigger", array()) . "/dashboard")), "html", null, true);
            echo "\" class=\"adminbar__has_icon\"><span class=\"adminbar__icon\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["dashboardPath"]) || array_key_exists("dashboardPath", $context) ? $context["dashboardPath"] : (function () { throw new Twig_Error_Runtime('Variable "dashboardPath" does not exist.', 78, $this->source); })())), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Dashboard"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ((($context["entry"]) ?? (false))) {
            // line 82
            echo "                        ";
            $context["sectionName"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 82, $this->source); })()), "section", array());
            // line 83
            echo "                        ";
            $context["entryEditUrl"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 83, $this->source); })()), "cpEditUrl", array());
            // line 84
            echo "
                        <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((isset($context["entryEditUrl"]) || array_key_exists("entryEditUrl", $context) ? $context["entryEditUrl"] : (function () { throw new Twig_Error_Runtime('Variable "entryEditUrl" does not exist.', 85, $this->source); })())), "html", null, true);
            echo "\" class=\"adminbar__has_icon\"><span class=\"adminbar__icon\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["editPath"]) || array_key_exists("editPath", $context) ? $context["editPath"] : (function () { throw new Twig_Error_Runtime('Variable "editPath" does not exist.', 85, $this->source); })())), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, ($this->extensions['craft\web\twig\Extension']->translateFilter("Edit ") . (isset($context["sectionName"]) || array_key_exists("sectionName", $context) ? $context["sectionName"] : (function () { throw new Twig_Error_Runtime('Variable "sectionName" does not exist.', 85, $this->source); })())), "html", null, true);
            echo "</a>
                    ";
        }
        // line 87
        echo "
                    ";
        // line 88
        if ((($context["category"]) ?? (false))) {
            // line 89
            echo "                        ";
            $context["categoryEditUrl"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 89, $this->source); })()), "cpEditUrl", array());
            // line 90
            echo "
                        <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((isset($context["categoryEditUrl"]) || array_key_exists("categoryEditUrl", $context) ? $context["categoryEditUrl"] : (function () { throw new Twig_Error_Runtime('Variable "categoryEditUrl" does not exist.', 91, $this->source); })())), "html", null, true);
            echo "\" class=\"adminbar__has_icon\"><span class=\"adminbar__icon\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["editPath"]) || array_key_exists("editPath", $context) ? $context["editPath"] : (function () { throw new Twig_Error_Runtime('Variable "editPath" does not exist.', 91, $this->source); })())), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, ($this->extensions['craft\web\twig\Extension']->translateFilter("Edit ") . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 91, $this->source); })())), "html", null, true);
            echo "</a>
                    ";
        }
        // line 93
        echo "
                    ";
        // line 94
        if (twig_length_filter($this->env, (isset($context["customLinks"]) || array_key_exists("customLinks", $context) ? $context["customLinks"] : (function () { throw new Twig_Error_Runtime('Variable "customLinks" does not exist.', 94, $this->source); })()))) {
            // line 95
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customLinks"]) || array_key_exists("customLinks", $context) ? $context["customLinks"] : (function () { throw new Twig_Error_Runtime('Variable "customLinks" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 96
                echo "                            ";
                if (twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "linkUrl", array()))) {
                    // line 97
                    echo "                                ";
                    if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "adminOnly", array()) != true)) {
                        // line 98
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "linkUrl", array())), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "linkLabel", array())), "html", null, true);
                        echo "</a>
                                ";
                    } elseif (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 99
$context["link"], "adminOnly", array()) && (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 99, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 99, $this->source); })()), "admin", array()))) {
                        // line 100
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "linkUrl", array())), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "linkLabel", array())), "html", null, true);
                        echo "</a>
                                ";
                    }
                    // line 102
                    echo "                            ";
                }
                // line 103
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                    ";
        }
        // line 105
        echo "
                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["additionalLinks"]) || array_key_exists("additionalLinks", $context) ? $context["additionalLinks"] : (function () { throw new Twig_Error_Runtime('Variable "additionalLinks" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 107
            echo "                        ";
            echo $context["self"]->macro_addConfigLink($context["link"]);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
                    ";
        // line 110
        if ((((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 110, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 110, $this->source); })()), "admin", array())) && (($context["displaySettingsLink"]) ?? (true)))) {
            // line 111
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 111, $this->source); })()), "app", array()), "config", array()), "general", array()), "cpTrigger", array()) . "/settings")), "html", null, true);
            echo "\" class=\"adminbar__has_icon\"><span class=\"adminbar__icon\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["settingsPath"]) || array_key_exists("settingsPath", $context) ? $context["settingsPath"] : (function () { throw new Twig_Error_Runtime('Variable "settingsPath" does not exist.', 111, $this->source); })())), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 113
        echo "                </nav>
                <div class=\"adminbar__close\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["iconPath"]) || array_key_exists("iconPath", $context) ? $context["iconPath"] : (function () { throw new Twig_Error_Runtime('Variable "iconPath" does not exist.', 114, $this->source); })())), "html", null, true);
        echo "</div>
            </div>
        </div>
        <div class=\"adminbar__logout\">
            ";
        // line 118
        if ((($context["displayLogout"]) ?? (true))) {
            // line 119
            echo "                <a class=\"adminbar__logout_link\" href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((isset($context["logoutUrl"]) || array_key_exists("logoutUrl", $context) ? $context["logoutUrl"] : (function () { throw new Twig_Error_Runtime('Variable "logoutUrl" does not exist.', 119, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Logout"), "html", null, true);
            echo "</a>
            ";
        }
        // line 121
        echo "            ";
        if ((($context["enableMobileMenu"]) ?? (true))) {
            // line 122
            echo "                <div id=\"adminbar__mobile_toggle\" class=\"adminbar__mobile_toggle\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction((isset($context["iconPath"]) || array_key_exists("iconPath", $context) ? $context["iconPath"] : (function () { throw new Twig_Error_Runtime('Variable "iconPath" does not exist.', 122, $this->source); })())), "html", null, true);
            echo "</div>
            ";
        }
        // line 124
        echo "        </div>
    </div>

    ";
        // line 127
        if ((($context["widgets"]) ?? (false))) {
            // line 128
            echo "        <div id=\"adminbar_widgets\" class=\"adminbar_widgets\">
            <div id=\"adminbar_widgets__content\" class=\"adminbar_widgets__content\">
                ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new Twig_Error_Runtime('Variable "widgets" does not exist.', 130, $this->source); })()));
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
                // line 131
                echo "                    <div id=\"adminbar_widget--";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()), "html", null, true);
                echo "\" class=\"adminbar_widget adminbar_widget__";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()), "html", null, true);
                echo " adminbar_widget--template--";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "layout", array()), "html", null, true);
                echo "\" data-widget-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 132
                try {
                    $this->loadTemplate(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "template", array()), "admin-bar/bar", 132)->display(array_merge($context, array("id" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 133
$context["item"], "id", array()), "category" => ((                    // line 134
$context["category"]) ?? (null)), "entry" => ((                    // line 135
$context["entry"]) ?? (null)), "info" =>                     // line 136
$context["item"], "includeAssets" => ((                    // line 137
$context["includeAssets"]) ?? (false)))));
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 139
                echo "                    </div>
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
            // line 141
            echo "            </div>
        </div>
    ";
        }
        // line 144
        echo "
    ";
        // line 145
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 145, $this->source); })())) {
            // line 146
            echo "        ";
            echo $this->extensions['wbrowar\adminbar\twigextensions\AdminBarTwigExtension']->getAdminBarAssets(array(), false);
            echo "
    ";
        }
        // line 148
        echo "</div>

";
    }

    // line 150
    public function macro_addConfigLink($__link__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "link" => $__link__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 151
            echo "    ";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "linkParams", array(), "any", true, true)) {
                // line 152
                echo "        ";
                $context["params"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 152, $this->source); })()), "linkParams", array());
                // line 153
                echo "    ";
            } else {
                // line 154
                echo "        ";
                $context["params"] = "";
                // line 155
                echo "    ";
            }
            // line 156
            echo "
    ";
            // line 157
            $context["params"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "params", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "params", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "params", array())) : (""));
            // line 158
            echo "    ";
            $context["protocol"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "protocol", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "protocol", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "protocol", array())) : (""));
            // line 159
            echo "    ";
            $context["mustShowScriptName"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "mustShowScriptName", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "mustShowScriptName", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "mustShowScriptName", array())) : (""));
            // line 160
            echo "
    ";
            // line 161
            $context["userHasPermission"] = true;
            // line 162
            echo "    ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "admin", array(), "any", true, true) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 162, $this->source); })()), "admin", array()))) {
                // line 163
                echo "        ";
                if (((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 163, $this->source); })()) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 163, $this->source); })()), "admin", array()))) {
                    // line 164
                    echo "            ";
                    $context["userHasPermission"] = false;
                    // line 165
                    echo "        ";
                }
                // line 166
                echo "    ";
            } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["link"] ?? null), "permissions", array(), "any", true, true) && twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 166, $this->source); })()), "permissions", array())))) {
                // line 167
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 167, $this->source); })()), "permissions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 168
                    echo "            ";
                    if (((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 168, $this->source); })()) &&  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 168, $this->source); })()), "can", array(0 => $context["permission"]), "method"))) {
                        // line 169
                        echo "                ";
                        $context["userHasPermission"] = false;
                        // line 170
                        echo "            ";
                    }
                    // line 171
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "    ";
            }
            // line 173
            echo "
    ";
            // line 174
            if (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 174, $this->source); })()), "type", array()) == "url") && (isset($context["userHasPermission"]) || array_key_exists("userHasPermission", $context) ? $context["userHasPermission"] : (function () { throw new Twig_Error_Runtime('Variable "userHasPermission" does not exist.', 174, $this->source); })()))) {
                // line 175
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 175, $this->source); })()), "url", array()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new Twig_Error_Runtime('Variable "params" does not exist.', 175, $this->source); })()), (isset($context["protocol"]) || array_key_exists("protocol", $context) ? $context["protocol"] : (function () { throw new Twig_Error_Runtime('Variable "protocol" does not exist.', 175, $this->source); })()), (isset($context["mustShowScriptName"]) || array_key_exists("mustShowScriptName", $context) ? $context["mustShowScriptName"] : (function () { throw new Twig_Error_Runtime('Variable "mustShowScriptName" does not exist.', 175, $this->source); })())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 175, $this->source); })()), "title", array())), "html", null, true);
                echo "</a>
    ";
            } elseif (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 176
(isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 176, $this->source); })()), "type", array()) == "cpUrl") && (isset($context["userHasPermission"]) || array_key_exists("userHasPermission", $context) ? $context["userHasPermission"] : (function () { throw new Twig_Error_Runtime('Variable "userHasPermission" does not exist.', 176, $this->source); })()))) {
                // line 177
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 177, $this->source); })()), "app", array()), "config", array()), "general", array()), "cpTrigger", array()) . "/") . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 177, $this->source); })()), "url", array())), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new Twig_Error_Runtime('Variable "params" does not exist.', 177, $this->source); })()), (isset($context["protocol"]) || array_key_exists("protocol", $context) ? $context["protocol"] : (function () { throw new Twig_Error_Runtime('Variable "protocol" does not exist.', 177, $this->source); })()), (isset($context["mustShowScriptName"]) || array_key_exists("mustShowScriptName", $context) ? $context["mustShowScriptName"] : (function () { throw new Twig_Error_Runtime('Variable "mustShowScriptName" does not exist.', 177, $this->source); })())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 177, $this->source); })()), "title", array())), "html", null, true);
                echo "</a>
    ";
            } elseif (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 178
(isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 178, $this->source); })()), "type", array()) == "action") && (isset($context["userHasPermission"]) || array_key_exists("userHasPermission", $context) ? $context["userHasPermission"] : (function () { throw new Twig_Error_Runtime('Variable "userHasPermission" does not exist.', 178, $this->source); })()))) {
                // line 179
                echo "        ";
                $context["actionParams"] = ((twig_length_filter($this->env, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new Twig_Error_Runtime('Variable "params" does not exist.', 179, $this->source); })()))) ? ((((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new Twig_Error_Runtime('Variable "params" does not exist.', 179, $this->source); })()) . "&returnUrl=") . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 179, $this->source); })()), "request", array()), "url", array()))) : (("returnUrl=" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 179, $this->source); })()), "request", array()), "url", array()))));
                // line 180
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::actionUrl(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 180, $this->source); })()), "url", array()), (isset($context["actionParams"]) || array_key_exists("actionParams", $context) ? $context["actionParams"] : (function () { throw new Twig_Error_Runtime('Variable "actionParams" does not exist.', 180, $this->source); })())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 180, $this->source); })()), "title", array())), "html", null, true);
                echo "</a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "admin-bar/bar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 180,  533 => 179,  531 => 178,  524 => 177,  522 => 176,  515 => 175,  513 => 174,  510 => 173,  507 => 172,  501 => 171,  498 => 170,  495 => 169,  492 => 168,  487 => 167,  484 => 166,  481 => 165,  478 => 164,  475 => 163,  472 => 162,  470 => 161,  467 => 160,  464 => 159,  461 => 158,  459 => 157,  456 => 156,  453 => 155,  450 => 154,  447 => 153,  444 => 152,  441 => 151,  429 => 150,  423 => 148,  417 => 146,  415 => 145,  412 => 144,  407 => 141,  392 => 139,  386 => 137,  385 => 136,  384 => 135,  383 => 134,  382 => 133,  380 => 132,  369 => 131,  352 => 130,  348 => 128,  346 => 127,  341 => 124,  335 => 122,  332 => 121,  324 => 119,  322 => 118,  315 => 114,  312 => 113,  302 => 111,  300 => 110,  297 => 109,  288 => 107,  284 => 106,  281 => 105,  278 => 104,  272 => 103,  269 => 102,  261 => 100,  259 => 99,  252 => 98,  249 => 97,  246 => 96,  241 => 95,  239 => 94,  236 => 93,  227 => 91,  224 => 90,  221 => 89,  219 => 88,  216 => 87,  207 => 85,  204 => 84,  201 => 83,  198 => 82,  196 => 81,  193 => 80,  183 => 78,  181 => 77,  176 => 74,  173 => 73,  156 => 71,  151 => 70,  149 => 69,  144 => 66,  140 => 64,  133 => 63,  130 => 62,  122 => 59,  119 => 58,  116 => 57,  113 => 56,  111 => 55,  108 => 54,  104 => 52,  102 => 51,  88 => 48,  85 => 47,  82 => 30,  78 => 28,  74 => 25,  72 => 24,  69 => 23,  65 => 21,  60 => 19,  56 => 17,  53 => 16,  51 => 15,  48 => 14,  46 => 13,  44 => 12,  42 => 11,  40 => 10,  38 => 9,  36 => 8,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# @var craft \\craft\\web\\twig\\variables\\CraftVariable #}

{% set devMode = craft.app.config.general.devMode %}

{% import _self as self %}

{# icons #}
{% set assetBundlePath = view.getAssetManager().getPublishedPath('@wbrowar/adminbar/assetbundles/adminbar/dist', true) %}
{% set dashboardPath = assetBundlePath ~ '/img/dashboard.svg' %}
{% set devmodePath = assetBundlePath ~ '/img/devmode.svg' %}
{% set editPath = assetBundlePath ~ '/img/edit.svg' %}
{% set iconPath = assetBundlePath ~ '/img/icon.svg' %}
{% set settingsPath = assetBundlePath ~ '/img/settings.svg' %}

{% if useCss ?? true %}
    {% set css %}
        :root{--adminbar-bg:linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.95));--adminbar-color-bg:rgba(0,0,0,0.9);--adminbar-color-border:#505050;--adminbar-color-highlight:#d85b4b;--adminbar-color-link-text:#fff;--adminbar-color-text:rgba(255,255,255,0.8);--adminbar-font-stack:'BlinkMacSystemFont', -apple-system, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;--adminbar-font-size-mobile:17px;--adminbar-font-size-desktop:14px;--adminbar-height-mobile:52px;--adminbar-height-desktop:45px;--editlinks-bg:var(--editlinks-color-bg);--editlinks-color-bg:var(--adminbar-color-bg);--editlinks-color-border:var(--adminbar-color-border);--editlinks-color-highlight:var(--adminbar-color-highlight);--editlinks-color-link-text:var(--adminbar-color-link-text);--editlinks-color-text:rgba(255,255,255,0.8);--adminbar-logo-links:var(--adminbar-color-highlight);--adminbar-logo-logout:var(--adminbar-color-highlight);--adminbar-logo-pencil:var(--adminbar-color-bg);--adminbar-logo-user:#7e9fc3}.adminbar__icon{display:inline-block;margin-right:7px;width:22px;-webkit-transform:translateY(2px);transform:translateY(2px)}.adminbar__icon svg{width:100%}@media (min-width: 601px){.adminbar .adminbar__icon{margin-right:5px;width:15px}}.adminbar{position:relative;margin:0;padding:0;width:100%;height:var(--adminbar-height-mobile);-webkit-box-sizing:border-box;box-sizing:border-box;background:var(--adminbar-bg);font-family:var(--adminbar-font-stack);font-size:var(--adminbar-font-size-mobile);color:var(--adminbar-color-link-text);-webkit-transition:height .3s ease-out;transition:height .3s ease-out;overflow:hidden;z-index:100000}.adminbar--devmode{padding-top:4px;height:calc(var(--adminbar-height-mobile) + 4px)}.adminbar--sticky{position:fixed;top:0;left:0}.adminbar--widget--on{height:100vh !important}.adminbar__bar{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;height:var(--adminbar-height-mobile)}.adminbar a{margin:0;padding:0 10px;height:100%;text-align:center;text-decoration:none;-webkit-transition:color .2s ease-out, background .2s ease-out;transition:color .2s ease-out, background .2s ease-out}.adminbar a svg *{-webkit-transition:fill .2s ease-out;transition:fill .2s ease-out}.adminbar__devmode_indicator{display:block;position:absolute;top:0;left:0;height:4px;width:100%;background:url(\"data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMjguNDcgMjIuOTUiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojZjNiNjM4fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5kZXZtb2RlPC90aXRsZT48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xODUuNTIgMGgtMTIwTDQyLjk1IDIyLjk1aDEyMEwxODUuNTIgMHoiLz48L3N2Zz4=\") repeat-x 15px 0}.adminbar__greeting{display:none;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;padding:0 15px;color:var(--adminbar-color-link-text);white-space:nowrap}.adminbar--mobile .adminbar__greeting{display:-webkit-box;display:-ms-flexbox;display:flex}.adminbar__user_photo{margin-right:7px;-webkit-box-sizing:border-box;box-sizing:border-box;width:23px;line-height:0}.adminbar__user_photo img{width:23px;max-width:23px;height:auto;border-radius:50%}.adminbar__links_wrapper{display:grid;grid-template-columns:auto auto;grid-template-rows:var(--adminbar-height-mobile);-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;min-width:1px;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}@media (max-width: 600px){.adminbar--active .adminbar__links_wrapper{overflow:scroll}}.adminbar__widget_buttons{display:-webkit-box;display:-ms-flexbox;display:flex;width:100%;height:100%}.adminbar__widget_button{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:0;-ms-flex:0 0 var(--adminbar-height-desktop);flex:0 0 var(--adminbar-height-desktop);-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;position:relative;-webkit-box-sizing:border-box;box-sizing:border-box;width:var(--adminbar-height-desktop)}.adminbar__widget_button path{fill:var(--adminbar-color-link-text)}.adminbar__widget_button polygon{fill:var(--adminbar-color-link-text)}.adminbar__widget_button rect{fill:var(--adminbar-color-link-text)}.adminbar__widget_button circle{fill:var(--adminbar-color-link-text)}.adminbar__widget_button svg{width:calc(var(--adminbar-height-desktop) - 20px)}.adminbar__widget_button--active{background-color:var(--adminbar-color-highlight)}.adminbar__widget_button__click{position:absolute;top:0;left:0;width:100%;height:100%}.adminbar__links{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;padding:0}.adminbar--mobile .adminbar__links{display:none}@media (max-width: 600px){.adminbar--mobile .adminbar--active .adminbar__links{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-flow:column nowrap;flex-flow:column nowrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding:40px;min-height:100%;-webkit-box-sizing:border-box;box-sizing:border-box;font-size:1.4em}}.adminbar__links a{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;color:var(--adminbar-color-link-text)}.adminbar__links a svg path{fill:var(--adminbar-color-link-text)}.adminbar__links a svg polygon{fill:var(--adminbar-color-link-text)}.adminbar__links a svg rect{fill:var(--adminbar-color-link-text)}.adminbar__links a svg circle{fill:var(--adminbar-color-link-text)}.adminbar__logout{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-item-align:end;align-self:flex-end;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-flow:column nowrap;flex-flow:column nowrap;-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;padding:0;text-align:right;font-size:.9em}.adminbar__logout a{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:9px 25px;background-color:transparent;-webkit-transition:background .2s ease-out, color .2s ease-out;transition:background .2s ease-out, color .2s ease-out;color:var(--adminbar-color-text)}.adminbar__logout a:hover{background-color:var(--adminbar-color-highlight);color:var(--adminbar-color-link-text)}.adminbar--mobile .adminbar__logout_link{display:none}.adminbar__mobile_toggle{display:none;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:10px 25px;line-height:1;cursor:pointer}.adminbar__mobile_toggle svg{width:30px}.adminbar__mobile_toggle svg path{fill:var(--adminbar-color-link-text)}.adminbar__mobile_toggle svg polygon{fill:var(--adminbar-color-link-text)}.adminbar__mobile_toggle svg rect{fill:var(--adminbar-color-link-text)}.adminbar__mobile_toggle svg circle{fill:var(--adminbar-color-link-text)}@media (max-width: 600px){.adminbar--mobile .adminbar__mobile_toggle{display:block}}@media (max-width: 600px){.adminbar__overlay.adminbar--active{position:fixed;top:0;left:0;width:100%;height:100%;-webkit-box-sizing:border-box;box-sizing:border-box;background-color:var(--adminbar-color-highlight);overflow:auto;z-index:10}}.adminbar__overlay>.adminbar__close{display:none;position:fixed;top:0;right:0;padding:10px 25px;font-size:1.1em;cursor:pointer}.adminbar__overlay>.adminbar__close svg{width:30px}.adminbar__overlay>.adminbar__close svg path{fill:var(--adminbar-color-link-text)}.adminbar__overlay>.adminbar__close svg polygon{fill:var(--adminbar-color-link-text)}.adminbar__overlay>.adminbar__close svg rect{fill:var(--adminbar-color-link-text)}.adminbar__overlay>.adminbar__close svg circle{fill:var(--adminbar-color-link-text)}.adminbar--devmode .adminbar__overlay>.adminbar__close{top:4px}@media (max-width: 600px){.adminbar__overlay.adminbar--active>.adminbar__close{display:block}}.adminbar_widgets{padding:5vh 5vw;height:calc(100% - 10vh);border-top:1px solid transparent;-webkit-transition:border-color .3s ease-out;transition:border-color .3s ease-out;overflow:hidden}.adminbar--widget--on .adminbar_widgets{border-color:var(--adminbar-color-border)}.adminbar_widgets__content{position:relative;width:100%;height:100%;overflow:scroll}.adminbar_widget{display:grid;grid-gap:30px;grid-template-columns:repeat(auto-fit, minmax(200px, 300px));grid-template-rows:auto;position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;-webkit-transition:opacity .3s ease-out;transition:opacity .3s ease-out}.adminbar_widget--active{opacity:1;z-index:1}.adminbar_widget--template--center{grid-template-columns:[start] auto [content-start] minmax(300px, 900px) [content-end] auto [end];grid-template-areas:\". adminbar-widget .\"}.adminbar_widget--template--center>*:first-child{grid-area:adminbar-widget}.adminbar_widget--template--columns_12{grid-template-columns:[start] repeat(12, 1fr) [end]}@media (min-width: 601px){.adminbar{font-size:var(--adminbar-font-size-desktop);height:var(--adminbar-height-desktop)}.adminbar--devmode{height:calc(var(--adminbar-height-desktop) + 4px)}.adminbar__bar{height:var(--adminbar-height-desktop)}.adminbar__greeting{display:-webkit-box;display:-ms-flexbox;display:flex;border-right:1px solid var(--adminbar-color-border)}.adminbar__links_wrapper{grid-template-rows:var(--adminbar-height-desktop);-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.adminbar__links_wrapper a{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;height:100%}.adminbar__links_wrapper a:hover{background-color:var(--adminbar-color-link-text);color:var(--adminbar-color-highlight)}.adminbar__links_wrapper a:hover svg path{fill:var(--adminbar-color-highlight)}.adminbar__links_wrapper a:hover svg polygon{fill:var(--adminbar-color-highlight)}.adminbar__links_wrapper a:hover svg rect{fill:var(--adminbar-color-highlight)}.adminbar__links_wrapper a:hover svg circle{fill:var(--adminbar-color-highlight)}.adminbar__widget_buttons{overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.adminbar__links{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;height:100%}.adminbar--mobile .adminbar__links{display:-webkit-box;display:-ms-flexbox;display:flex}.adminbar__logout{-ms-flex-item-align:stretch;align-self:stretch;font-size:1em}.adminbar__logout a{padding:9px 25px}.adminbar__logout_link{border-left:1px solid var(--adminbar-color-border)}.adminbar--mobile .adminbar__logout_link{display:-webkit-box;display:-ms-flexbox;display:flex}.adminbar--mobile .adminbar__mobile_toggle{display:none}}

        {{ customCss }}
    {% endset %}
    {% do addAdminBarCss(css) %}
{% endif %}

{% if useJs ?? true %}
    {% set js %}
        \"use strict\";var adminBar=document.getElementById(\"adminbar\"),adminBarWidgetButtons=document.getElementsByClassName(\"adminbar__widget_button__click\"),adminBarWidgets=document.getElementsByClassName(\"adminbar_widget\");function adminBarAddClass(a,t){a.classList?a.classList.add(t):a.className+=\" \"+t}function adminBarHasClass(a,t){return a.classList?a.classList.contains(t):new RegExp(\"(^| )\"+t+\"( |\$)\",\"gi\").test(a.className)}function adminBarRemoveClass(a,t){a.classList?a.classList.remove(t):a.className=a.className.replace(new RegExp(\"(^|\\\\b)\"+t.split(\" \").join(\"|\")+\"(\\\\b|\$)\",\"gi\"),\" \")}function adminBarShowMobile(a){adminBarAddClass(document.querySelector(\"#adminbar__links .adminbar__overlay\"),\"adminbar--active\")}function adminBarHideMobile(a){adminBarRemoveClass(document.querySelector(\"#adminbar__links .adminbar__overlay\"),\"adminbar--active\")}function adminBarWidgetButtonHandler(a){var t=adminBar.hasAttribute(\"data-current-widget\")?adminBar.getAttribute(\"data-current-widget\"):null,e=a.target.getAttribute(\"data-widget-id\");console.log(a.target),e===t?adminBarCloseWidgets():adminBarShowWidget(e)}function adminBarCloseWidgets(){var a=document.querySelector(\".adminbar__widget_button.adminbar__widget_button--active\");void 0!==a&&adminBarRemoveClass(a,\"adminbar__widget_button--active\"),adminBarRemoveClass(adminBar,\"adminbar--widget--on\"),adminBar.removeAttribute(\"data-current-widget\")}function adminBarRemoveWidget(a){var t=document.getElementById(\"adminbar__widget_buttons\"),e=document.getElementById(\"adminbar__widget_button--\"+a);t&&e&&t.removeChild(e);var d=document.getElementById(\"adminbar_widgets__content\"),i=document.getElementById(\"adminbar_widget--\"+a);d&&i&&d.removeChild(i)}function adminBarShowWidget(a){var t=void 0,e=void 0;adminBarAddClass(adminBar,\"adminbar--widget--on\"),adminBar.setAttribute(\"data-current-widget\",a);for(var d=0;d<adminBarWidgets.length;d++)t=document.querySelector('.adminbar__widget_button[data-widget-id=\"'+adminBarWidgets[d].getAttribute(\"data-widget-id\")+'\"]'),e=document.querySelector('.adminbar_widget[data-widget-id=\"'+adminBarWidgets[d].getAttribute(\"data-widget-id\")+'\"]'),a===t.getAttribute(\"data-widget-id\")?(adminBarAddClass(t,\"adminbar__widget_button--active\"),adminBarAddClass(e,\"adminbar_widget--active\")):(adminBarRemoveClass(t,\"adminbar__widget_button--active\"),adminBarRemoveClass(e,\"adminbar_widget--active\"))}!function(){if(adminBar){document.getElementById(\"adminbar__mobile_toggle\").addEventListener(\"click\",adminBarShowMobile);for(var a=document.querySelectorAll(\".adminbar__overlay .adminbar__close\"),t=0;t<a.length;t++)a[t].addEventListener(\"click\",adminBarHideMobile);for(var e=0;e<adminBarWidgetButtons.length;e++)adminBarWidgetButtons[e].addEventListener(\"click\",adminBarWidgetButtonHandler);adminBarAddClass(document.documentElement,\"adminbar-on\")}}();
    {% endset %}
    {% do addAdminBarJs(js) %}
{% endif %}

{#
{% if includeAssets ?? false %}
    <style>{{ css }}</style>
    <script>{{ js }}</script>
{% else %}
    {% if useCss ?? true %}
        {% css css %}
    {% endif %}

    {% if useJs ?? true %}
        {% if js|length %}
            {% js js|raw %}
        {% endif %}
    {% endif %}
{% endif %}
#}

<div id=\"adminbar\" class=\"adminbar{% if sticky ?? true %} adminbar--sticky{% endif %}{% if devMode %} adminbar--devmode{% endif %}{% if enableMobileMenu ?? true %} adminbar--mobile{% endif %}\">
    <div class=\"adminbar__bar\">

        {% if devMode %}
            <div class=\"adminbar__devmode_indicator\"></div>
        {% endif %}

        {% if displayGreeting ?? true %}
            <div class=\"adminbar__greeting\">{% spaceless %}
                {% if currentUser and currentUser.photo %}
                    <span class=\"adminbar__user_photo\">
                        <img src=\"{{ currentUser.getThumbUrl(50) }}\" alt=\"{{ currentUser.friendlyName }}’s photo\"/>
                    </span>
                {% endif %}

                {{ 'Hi'|t }}, {{ currentUser.friendlyName ?? '' }}
            {% endspaceless %}</div>
        {% endif %}

        <div id=\"adminbar__links\" class=\"adminbar__links_wrapper\">
            <div id=\"adminbar__widget_buttons\" class=\"adminbar__widget_buttons\">
                {% if widgets ?? false %}
                    {% for item in widgets %}
                        <a id=\"adminbar__widget_button--{{ item.id }}\" class=\"adminbar__widget_button\" href=\"javascript:;\" title=\"{{ item.name }}\" data-widget-id=\"{{ item.id }}\">{{ svg(item.iconPath) }}<span class=\"adminbar__widget_button__click\" data-widget-id=\"{{ item.id }}\"></span></a>
                    {% endfor %}
                {% endif %}
            </div>
            <div class=\"adminbar__overlay\">
                <nav id=\"adminbar__links_nav\" class=\"adminbar__links\">
                    {% if displayDashboardLink ?? true %}
                        <a href=\"{{ url(craft.app.config.general.cpTrigger ~ '/dashboard') }}\" class=\"adminbar__has_icon\"><span class=\"adminbar__icon\">{{ svg(dashboardPath) }}</span>{{ 'Dashboard'|t }}</a>
                    {% endif %}

                    {% if entry ?? false %}
                        {% set sectionName = entry.section %}
                        {% set entryEditUrl = entry.cpEditUrl %}

                        <a href=\"{{ url(entryEditUrl) }}\" class=\"adminbar__has_icon\"><span class=\"adminbar__icon\">{{ svg(editPath) }}</span>{{ 'Edit '|t ~ sectionName }}</a>
                    {% endif %}

                    {% if category ?? false %}
                        {% set categoryEditUrl = category.cpEditUrl %}

                        <a href=\"{{ url(categoryEditUrl) }}\" class=\"adminbar__has_icon\"><span class=\"adminbar__icon\">{{ svg(editPath) }}</span>{{ 'Edit '|t ~ category }}</a>
                    {% endif %}

                    {% if customLinks|length %}
                        {% for link in customLinks %}
                            {% if link.linkUrl|length %}
                                {% if link.adminOnly != true %}
                                    <a href=\"{{ url(link.linkUrl) }}\">{{ link.linkLabel|t }}</a>
                                {% elseif link.adminOnly and currentUser and currentUser.admin %}
                                    <a href=\"{{ url(link.linkUrl) }}\">{{ link.linkLabel|t }}</a>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}

                    {% for link in additionalLinks %}
                        {{ self.addConfigLink(link) }}
                    {% endfor %}

                    {% if currentUser and currentUser.admin and displaySettingsLink ?? true %}
                        <a href=\"{{ url(craft.app.config.general.cpTrigger ~ '/settings') }}\" class=\"adminbar__has_icon\"><span class=\"adminbar__icon\">{{ svg(settingsPath) }}</span>{{ 'Settings'|t }}</a>
                    {% endif %}
                </nav>
                <div class=\"adminbar__close\">{{ svg(iconPath) }}</div>
            </div>
        </div>
        <div class=\"adminbar__logout\">
            {% if displayLogout ?? true %}
                <a class=\"adminbar__logout_link\" href=\"{{ url(logoutUrl) }}\">{{ 'Logout'|t }}</a>
            {% endif %}
            {% if enableMobileMenu ?? true %}
                <div id=\"adminbar__mobile_toggle\" class=\"adminbar__mobile_toggle\">{{ svg(iconPath) }}</div>
            {% endif %}
        </div>
    </div>

    {% if widgets ?? false %}
        <div id=\"adminbar_widgets\" class=\"adminbar_widgets\">
            <div id=\"adminbar_widgets__content\" class=\"adminbar_widgets__content\">
                {% for item in widgets %}
                    <div id=\"adminbar_widget--{{ item.id }}\" class=\"adminbar_widget adminbar_widget__{{ item.id }} adminbar_widget--template--{{ item.layout }}\" data-widget-id=\"{{ item.id }}\">
                        {% include item.template ignore missing with {
                            id: item.id,
                            category: category ?? null,
                            entry: entry ?? null,
                            info: item,
                            includeAssets: includeAssets ?? false,
                        } %}
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endif %}

    {% if includeAssets %}
        {{ getAdminBarAssets([], false) }}
    {% endif %}
</div>

{% macro addConfigLink(link) %}
    {% if link.linkParams is defined %}
        {% set params = link.linkParams %}
    {% else %}
        {% set params = '' %}
    {% endif %}

    {% set params = link.params ?? '' %}
    {% set protocol = link.protocol ?? '' %}
    {% set mustShowScriptName = link.mustShowScriptName ?? '' %}

    {% set userHasPermission = true %}
    {% if link.admin is defined and link.admin %}
        {% if currentUser and not currentUser.admin %}
            {% set userHasPermission = false %}
        {% endif %}
    {% elseif link.permissions is defined and link.permissions|length %}
        {% for permission in link.permissions %}
            {% if currentUser and not currentUser.can(permission) %}
                {% set userHasPermission = false %}
            {% endif %}
        {% endfor %}
    {% endif %}

    {% if link.type == 'url' and userHasPermission %}
        <a href=\"{{ url(link.url, params, protocol, mustShowScriptName) }}\">{{ link.title|t }}</a>
    {% elseif link.type == 'cpUrl' and userHasPermission %}
        <a href=\"{{ url(craft.app.config.general.cpTrigger ~ '/' ~ link.url, params, protocol, mustShowScriptName) }}\">{{ link.title|t }}</a>
    {% elseif link.type == 'action' and userHasPermission %}
        {% set actionParams = params|length ? params ~ '&returnUrl=' ~ craft.request.url : 'returnUrl=' ~ craft.request.url %}
        <a href=\"{{ actionUrl(link.url, actionParams) }}\">{{ link.title|t }}</a>
    {% endif %}
{% endmacro %}", "admin-bar/bar", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/wbrowar/adminbar/src/templates/bar.twig");
    }
}
