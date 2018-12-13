<?php

/* _components/widgets/CraftSupport/body */
class __TwigTemplate_44bb09825e240afc167c9bc262b8a331c33932465047d4c44f9b5600cb911223 extends craft\web\twig\Template
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
        // line 77
        echo "
";
        // line 78
        $context["__internal_b2c7104716913b065ca0b88bd717bd092d0c34c2436e1fb5c5ce7c382b31dd29"] = $this;
        // line 79
        echo "

<div class=\"cs-screen cs-screen-home\">
    <div class=\"cs-opt\" data-screen=\"help\">
        <div class=\"cs-opt-icon\">";
        // line 83
        echo (isset($context["buoeyIcon"]) || array_key_exists("buoeyIcon", $context) ? $context["buoeyIcon"] : (function () { throw new Twig_Error_Runtime('Variable "buoeyIcon" does not exist.', 83, $this->source); })());
        echo "</div>
        <h2>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Get help", "app"), "html", null, true);
        echo "</h2>
        <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("How-to’s and other questions", "app"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"cs-opt\" data-screen=\"feedback\">
        <div class=\"cs-opt-icon\">";
        // line 88
        echo (isset($context["bullhornIcon"]) || array_key_exists("bullhornIcon", $context) ? $context["bullhornIcon"] : (function () { throw new Twig_Error_Runtime('Variable "bullhornIcon" does not exist.', 88, $this->source); })());
        echo "</div>
        <h2>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Give feedback", "app"), "html", null, true);
        echo "</h2>
        <p>";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Bug reports and feature requests", "app"), "html", null, true);
        echo "</p>
    </div>
</div>

";
        // line 94
        echo $context["__internal_b2c7104716913b065ca0b88bd717bd092d0c34c2436e1fb5c5ce7c382b31dd29"]->macro_screen((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 94, $this->source); })()), (isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new Twig_Error_Runtime('Variable "showBackupOption" does not exist.', 94, $this->source); })()), "help", $this->extensions['craft\web\twig\Extension']->translateFilter("Briefly describe your question.", "app"), (isset($context["seIcon"]) || array_key_exists("seIcon", $context) ? $context["seIcon"] : (function () { throw new Twig_Error_Runtime('Variable "seIcon" does not exist.', 94, $this->source); })()), $this->extensions['craft\web\twig\Extension']->translateFilter("Similar questions on Stack Exchange", "app"), "https://craftcms.stackexchange.com/questions/ask", $this->extensions['craft\web\twig\Extension']->translateFilter("Ask on Stack Exchange", "app"));
        echo "

";
        // line 96
        echo $context["__internal_b2c7104716913b065ca0b88bd717bd092d0c34c2436e1fb5c5ce7c382b31dd29"]->macro_screen((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->source); })()), (isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new Twig_Error_Runtime('Variable "showBackupOption" does not exist.', 96, $this->source); })()), "feedback", $this->extensions['craft\web\twig\Extension']->translateFilter("Briefly describe your issue or idea.", "app"), (isset($context["ghIcon"]) || array_key_exists("ghIcon", $context) ? $context["ghIcon"] : (function () { throw new Twig_Error_Runtime('Variable "ghIcon" does not exist.', 96, $this->source); })()), $this->extensions['craft\web\twig\Extension']->translateFilter("Similar issues on GitHub", "app"), "https://github.com/craftcms/cms/issues/new", $this->extensions['craft\web\twig\Extension']->translateFilter("Post on GitHub", "app"));
        echo "
";
    }

    // line 1
    public function macro_screen($__widget__ = null, $__showBackupOption__ = null, $__screen__ = null, $__placeholder__ = null, $__resultsIcon__ = null, $__resultsHeading__ = null, $__formAction__ = null, $__submitText__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "showBackupOption" => $__showBackupOption__,
            "screen" => $__screen__,
            "placeholder" => $__placeholder__,
            "resultsIcon" => $__resultsIcon__,
            "resultsHeading" => $__resultsHeading__,
            "formAction" => $__formAction__,
            "submitText" => $__submitText__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/CraftSupport/body", 2);
            // line 3
            echo "    ";
            $context["idPrefix"] = (("cs-" . (isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new Twig_Error_Runtime('Variable "screen" does not exist.', 3, $this->source); })())) . twig_random($this->env));
            // line 4
            echo "
    <div class=\"cs-screen cs-screen-2 cs-screen-";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new Twig_Error_Runtime('Variable "screen" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new Twig_Error_Runtime('Variable "formAction" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" method=\"get\" target=\"_blank\">
        ";
            // line 6
            echo $context["forms"]->macro_textareaField(array("first" => true, "class" => "cs-body-text", "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter(            // line 9
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 9, $this->source); })()), "app"), "rows" => 5));
            // line 11
            echo "
        <div class=\"cs-search-results-container hidden\">
            <div class=\"cs-search-icon\">";
            // line 13
            echo (isset($context["resultsIcon"]) || array_key_exists("resultsIcon", $context) ? $context["resultsIcon"] : (function () { throw new Twig_Error_Runtime('Variable "resultsIcon" does not exist.', 13, $this->source); })());
            echo "</div>
            <h2>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["resultsHeading"]) || array_key_exists("resultsHeading", $context) ? $context["resultsHeading"] : (function () { throw new Twig_Error_Runtime('Variable "resultsHeading" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "</h2>
            <ul class=\"cs-search-results\"></ul>
        </div>
        <div class=\"cs-forms\">
            <form class=\"cs-search-form\" action=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new Twig_Error_Runtime('Variable "formAction" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" method=\"get\" target=\"_blank\">
                <div class=\"cs-search-params\"></div>
                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["submitText"]) || array_key_exists("submitText", $context) ? $context["submitText"] : (function () { throw new Twig_Error_Runtime('Variable "submitText" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\">
                <p>";
            // line 21
            echo $this->extensions['craft\web\twig\Extension']->translateFilter("or <a>send to Craft Support</a>", "app");
            echo "</p>
            </form>
            <form class=\"cs-support-form hidden\" action=\"";
            // line 23
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::actionUrl("dashboard/send-support-request"), "html", null, true);
            echo "\" method=\"post\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "idPrefix" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "-iframe\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
            echo "
                <input type=\"hidden\" name=\"widgetId\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 25, $this->source); })()), "id", array()), "html", null, true);
            echo "\">
                <input class=\"cs-support-message\" type=\"hidden\" name=\"message\" value=\"\">

                ";
            // line 28
            $context["email"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 28, $this->source); })()), "email", array());
            // line 29
            echo "                ";
            if (twig_in_filter((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 29, $this->source); })()), array(0 => "support@pixelandtonic.com", 1 => "support@craftcms.com"))) {
                // line 30
                echo "                    ";
                $context["email"] = "";
                // line 31
                echo "                ";
            }
            // line 32
            echo "
                ";
            // line 33
            echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Your Email", "app"), "name" => "fromEmail", "value" =>             // line 37
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 37, $this->source); })())));
            // line 38
            echo "

                <a class=\"fieldtoggle\" data-target=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "idPrefix" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "-support-more\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("More", "app"), "html", null, true);
            echo "</a>

                <div id=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "idPrefix" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "-support-more\" class=\"cs-support-more hidden\">
                    ";
            // line 43
            echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach error logs?", "app"), "name" => "attachLogs", "checked" => true));
            // line 47
            echo "

                    ";
            // line 49
            if ((isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new Twig_Error_Runtime('Variable "showBackupOption" does not exist.', 49, $this->source); })())) {
                // line 50
                echo "                        ";
                echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach a database backup?", "app"), "name" => "attachDbBackup", "checked" => true));
                // line 54
                echo "
                    ";
            }
            // line 56
            echo "
                    ";
            // line 57
            echo $context["forms"]->macro_checkboxField(array("name" => "attachTemplates", "checked" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Include your template files?", "app")));
            // line 61
            echo "

                    ";
            // line 63
            echo $context["forms"]->macro_fileField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach an additional file?", "app"), "class" => "cs-support-attachment", "name" => "attachAdditionalFile"));
            // line 67
            echo "
                </div>

                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Send", "app"), "html", null, true);
            echo "\">
                <div class=\"spinner hidden\"></div>
            </form>
        </div>
        <iframe id=\"";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "idPrefix" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "-iframe\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "idPrefix" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "-iframe\" class=\"hidden\"></iframe>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/CraftSupport/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 74,  219 => 70,  214 => 67,  212 => 63,  208 => 61,  206 => 57,  203 => 56,  199 => 54,  196 => 50,  194 => 49,  190 => 47,  188 => 43,  184 => 42,  177 => 40,  173 => 38,  171 => 37,  170 => 33,  167 => 32,  164 => 31,  161 => 30,  158 => 29,  156 => 28,  150 => 25,  146 => 24,  140 => 23,  135 => 21,  131 => 20,  126 => 18,  119 => 14,  115 => 13,  111 => 11,  109 => 9,  108 => 6,  102 => 5,  99 => 4,  96 => 3,  93 => 2,  74 => 1,  68 => 96,  63 => 94,  56 => 90,  52 => 89,  48 => 88,  42 => 85,  38 => 84,  34 => 83,  28 => 79,  26 => 78,  23 => 77,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro screen(widget, showBackupOption, screen, placeholder, resultsIcon, resultsHeading, formAction, submitText) %}
    {% import \"_includes/forms\" as forms %}
    {% set idPrefix = 'cs-'~screen~random() %}

    <div class=\"cs-screen cs-screen-2 cs-screen-{{ screen }}\" action=\"{{ formAction }}\" method=\"get\" target=\"_blank\">
        {{ forms.textareaField({
            first: true,
            class: 'cs-body-text',
            placeholder: placeholder|t('app'),
            rows: 5
        }) }}
        <div class=\"cs-search-results-container hidden\">
            <div class=\"cs-search-icon\">{{ resultsIcon|raw }}</div>
            <h2>{{ resultsHeading }}</h2>
            <ul class=\"cs-search-results\"></ul>
        </div>
        <div class=\"cs-forms\">
            <form class=\"cs-search-form\" action=\"{{ formAction }}\" method=\"get\" target=\"_blank\">
                <div class=\"cs-search-params\"></div>
                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"{{ submitText }}\">
                <p>{{ \"or <a>send to Craft Support</a>\"|t('app')|raw }}</p>
            </form>
            <form class=\"cs-support-form hidden\" action=\"{{ actionUrl('dashboard/send-support-request') }}\" method=\"post\" target=\"{{ idPrefix }}-iframe\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
                {{ csrfInput() }}
                <input type=\"hidden\" name=\"widgetId\" value=\"{{ widget.id }}\">
                <input class=\"cs-support-message\" type=\"hidden\" name=\"message\" value=\"\">

                {% set email = currentUser.email %}
                {% if email in ['support@pixelandtonic.com', 'support@craftcms.com'] %}
                    {% set email = '' %}
                {% endif %}

                {{ forms.textField({
                    first: true,
                    label: \"Your Email\"|t('app'),
                    name: 'fromEmail',
                    value: email
                }) }}

                <a class=\"fieldtoggle\" data-target=\"{{ idPrefix }}-support-more\">{{ \"More\"|t('app') }}</a>

                <div id=\"{{ idPrefix }}-support-more\" class=\"cs-support-more hidden\">
                    {{ forms.checkboxField({
                        label: \"Attach error logs?\"|t('app'),
                        name: 'attachLogs',
                        checked: true
                    }) }}

                    {% if showBackupOption %}
                        {{ forms.checkboxField({
                            label: \"Attach a database backup?\"|t('app'),
                            name: 'attachDbBackup',
                            checked: true
                        }) }}
                    {% endif %}

                    {{ forms.checkboxField({
                        name: 'attachTemplates',
                        checked: true,
                        label: \"Include your template files?\"|t('app'),
                    }) }}

                    {{ forms.fileField({
                        label: \"Attach an additional file?\"|t('app'),
                        class: 'cs-support-attachment',
                        name: 'attachAdditionalFile',
                    }) }}
                </div>

                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"{{ 'Send'|t('app') }}\">
                <div class=\"spinner hidden\"></div>
            </form>
        </div>
        <iframe id=\"{{ idPrefix }}-iframe\" name=\"{{ idPrefix }}-iframe\" class=\"hidden\"></iframe>
    </div>
{% endmacro %}

{% from _self import screen %}


<div class=\"cs-screen cs-screen-home\">
    <div class=\"cs-opt\" data-screen=\"help\">
        <div class=\"cs-opt-icon\">{{ buoeyIcon|raw }}</div>
        <h2>{{ \"Get help\"|t('app') }}</h2>
        <p>{{ \"How-to’s and other questions\"|t('app') }}</p>
    </div>
    <div class=\"cs-opt\" data-screen=\"feedback\">
        <div class=\"cs-opt-icon\">{{ bullhornIcon|raw }}</div>
        <h2>{{ \"Give feedback\"|t('app') }}</h2>
        <p>{{ \"Bug reports and feature requests\"|t('app') }}</p>
    </div>
</div>

{{ screen(widget, showBackupOption, 'help', \"Briefly describe your question.\"|t('app'), seIcon, \"Similar questions on Stack Exchange\"|t('app'), 'https://craftcms.stackexchange.com/questions/ask', \"Ask on Stack Exchange\"|t('app')) }}

{{ screen(widget, showBackupOption, 'feedback', \"Briefly describe your issue or idea.\"|t('app'), ghIcon, \"Similar issues on GitHub\"|t('app'), 'https://github.com/craftcms/cms/issues/new', \"Post on GitHub\"|t('app')) }}
", "_components/widgets/CraftSupport/body", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/widgets/CraftSupport/body.html");
    }
}
