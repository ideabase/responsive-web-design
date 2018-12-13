<?php

/* _includes/forms */
class __TwigTemplate_0c8bb21e3bc5832b5bb38313ec22844f8f43b12b6b64564f7752edf1eb6aaebd extends craft\web\twig\Template
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
        // line 4
        echo "

";
        // line 7
        echo "

";
        // line 12
        echo "

";
        // line 17
        echo "

";
        // line 22
        echo "

";
        // line 27
        echo "

";
        // line 32
        echo "

";
        // line 37
        echo "

";
        // line 42
        echo "

";
        // line 47
        echo "

";
        // line 52
        echo "

";
        // line 57
        echo "

";
        // line 62
        echo "

";
        // line 67
        echo "

";
        // line 72
        echo "

";
        // line 77
        echo "

";
        // line 82
        echo "

";
        // line 87
        echo "

";
        // line 92
        echo "

";
        // line 97
        echo "

";
        // line 100
        echo "

";
        // line 105
        echo "

";
        // line 121
        echo "

";
        // line 127
        echo "

";
        // line 133
        echo "

";
        // line 139
        echo "

";
        // line 145
        echo "

";
        // line 157
        echo "

";
        // line 163
        echo "

";
        // line 169
        echo "

";
        // line 175
        echo "

";
        // line 195
        echo "

";
        // line 201
        echo "

";
        // line 207
        echo "

";
        // line 213
        echo "

";
        // line 219
        echo "

";
        // line 228
        echo "

";
        // line 235
        echo "

";
        // line 241
        echo "

";
        // line 244
        echo "

";
    }

    // line 1
    public function macro_errorList($__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $this->loadTemplate("_includes/forms/errorList", "_includes/forms", 2)->display($context);

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_hidden($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            $this->loadTemplate("_includes/forms/hidden", "_includes/forms", 10)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 10, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 14
    public function macro_text($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    ";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 15)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 15, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
    public function macro_password($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    ";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 20)->display(twig_array_merge((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 20, $this->source); })()), array("type" => "password")));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_date($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            $this->loadTemplate("_includes/forms/date", "_includes/forms", 25)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 25, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_time($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            $this->loadTemplate("_includes/forms/time", "_includes/forms", 30)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 30, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 34
    public function macro_color($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "    ";
            $this->loadTemplate("_includes/forms/color", "_includes/forms", 35)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 35, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 39
    public function macro_textarea($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "    ";
            $this->loadTemplate("_includes/forms/textarea", "_includes/forms", 40)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 40, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_select($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "    ";
            $this->loadTemplate("_includes/forms/select", "_includes/forms", 45)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 45, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 49
    public function macro_multiselect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "    ";
            $this->loadTemplate("_includes/forms/multiselect", "_includes/forms", 50)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 50, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_checkbox($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "    ";
            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms", 55)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 55, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 59
    public function macro_checkboxGroup($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "    ";
            $this->loadTemplate("_includes/forms/checkboxGroup", "_includes/forms", 60)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 60, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_checkboxSelect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "    ";
            $this->loadTemplate("_includes/forms/checkboxSelect", "_includes/forms", 65)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 65, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 69
    public function macro_radio($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    ";
            $this->loadTemplate("_includes/forms/radio", "_includes/forms", 70)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 70, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 74
    public function macro_radioGroup($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "    ";
            $this->loadTemplate("_includes/forms/radioGroup", "_includes/forms", 75)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 75, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 79
    public function macro_file($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 80
            echo "    ";
            $this->loadTemplate("_includes/forms/file", "_includes/forms", 80)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 80, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 84
    public function macro_lightswitch($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 85
            echo "    ";
            $this->loadTemplate("_includes/forms/lightswitch", "_includes/forms", 85)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 85, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 89
    public function macro_editableTable($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "    ";
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 90)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 90, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 94
    public function macro_elementSelect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 95
            echo "    ";
            $this->loadTemplate("_includes/forms/elementSelect", "_includes/forms", 95)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 95, $this->source); })()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 102
    public function macro_field($__config__ = null, $__input__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "input" => $__input__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "    ";
            $this->loadTemplate("_includes/forms/field", "_includes/forms", 103)->display(twig_array_merge((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 103, $this->source); })()), array("input" => (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 103, $this->source); })()))));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 107
    public function macro_textField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "    ";
            $context["forms"] = $this;
            // line 109
            echo "    ";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "unit", array(), "any", true, true)) {
                // line 110
                echo "        ";
                ob_start();
                // line 111
                echo "            <div class=\"flex\">
                <div class=\"textwrapper\">";
                // line 112
                echo $context["forms"]->macro_text((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 112, $this->source); })()));
                echo "</div>
                <div class=\"label light\">";
                // line 113
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 113, $this->source); })()), "unit", array()), "html", null, true);
                echo "</div>
            </div>
        ";
                $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 116
                echo "    ";
            } else {
                // line 117
                echo "        ";
                $context["input"] = $context["forms"]->macro_text((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 117, $this->source); })()));
                // line 118
                echo "    ";
            }
            // line 119
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 119, $this->source); })()), (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 119, $this->source); })()));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 123
    public function macro_passwordField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 124
            echo "    ";
            $context["forms"] = $this;
            // line 125
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 125, $this->source); })()), $context["forms"]->macro_password((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 125, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 129
    public function macro_dateField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "    ";
            $context["forms"] = $this;
            // line 131
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 131, $this->source); })()), $context["forms"]->macro_date((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 131, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 135
    public function macro_timeField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 136
            echo "    ";
            $context["forms"] = $this;
            // line 137
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 137, $this->source); })()), $context["forms"]->macro_time((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 137, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 141
    public function macro_colorField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 142
            echo "    ";
            $context["forms"] = $this;
            // line 143
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 143, $this->source); })()), $context["forms"]->macro_color((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 143, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 147
    public function macro_dateTimeField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 148
            echo "    ";
            $context["forms"] = $this;
            // line 149
            echo "    ";
            ob_start();
            // line 150
            echo "        <div class=\"datetimewrapper\">
            ";
            // line 151
            echo $context["forms"]->macro_date((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 151, $this->source); })()));
            echo "
            ";
            // line 152
            echo $context["forms"]->macro_time((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 152, $this->source); })()));
            echo "
        </div>
    ";
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 155
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 155, $this->source); })()), (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 155, $this->source); })()));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 159
    public function macro_textareaField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 160
            echo "    ";
            $context["forms"] = $this;
            // line 161
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 161, $this->source); })()), $context["forms"]->macro_textarea((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 161, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 165
    public function macro_selectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    ";
            $context["forms"] = $this;
            // line 167
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 167, $this->source); })()), $context["forms"]->macro_select((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 167, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 171
    public function macro_multiselectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "    ";
            $context["forms"] = $this;
            // line 173
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 173, $this->source); })()), $context["forms"]->macro_multiselect((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 173, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 177
    public function macro_checkboxField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 178
            echo "    ";
            $context["forms"] = $this;
            // line 179
            echo "    ";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "fieldLabel", array(), "any", true, true)) {
                // line 180
                echo "        ";
                echo $context["forms"]->macro_field(twig_array_merge((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 180, $this->source); })()), array("label" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 180, $this->source); })()), "fieldLabel", array()))), $context["forms"]->macro_checkbox((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 180, $this->source); })())));
                echo "
    ";
            } else {
                // line 182
                echo "        ";
                $context["instructions"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "instructions", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "instructions", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "instructions", array())) : (null));
                // line 183
                $context["warning"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "warning", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "warning", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "warning", array())) : (null));
                // line 184
                echo "<div class=\"field checkboxfield";
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "first", array(), "any", true, true) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 184, $this->source); })()), "first", array()))) {
                    echo " first";
                }
                if ((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 184, $this->source); })())) {
                    echo " has-instructions";
                }
                echo "\"";
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "id", array(), "any", true, true) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 184, $this->source); })()), "id", array()))) {
                    echo " id=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 184, $this->source); })()), "id", array()), "html", null, true);
                    echo "-field\"";
                }
                echo ">
            ";
                // line 185
                echo $context["forms"]->macro_checkbox((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 185, $this->source); })()));
                echo "
            ";
                // line 186
                if ((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 186, $this->source); })())) {
                    // line 187
                    echo "                <div class=\"instructions\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new Twig_Error_Runtime('Variable "instructions" does not exist.', 187, $this->source); })())), "html", null, true);
                    echo "</div>
            ";
                }
                // line 189
                echo "            ";
                if ((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new Twig_Error_Runtime('Variable "warning" does not exist.', 189, $this->source); })())) {
                    // line 190
                    echo "                <p class=\"warning\">";
                    echo twig_escape_filter($this->env, (isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new Twig_Error_Runtime('Variable "warning" does not exist.', 190, $this->source); })()), "html", null, true);
                    echo "</p>
            ";
                }
                // line 192
                echo "        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 197
    public function macro_checkboxGroupField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 198
            echo "    ";
            $context["forms"] = $this;
            // line 199
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 199, $this->source); })()), $context["forms"]->macro_checkboxGroup((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 199, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 203
    public function macro_checkboxSelectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 204
            echo "    ";
            $context["forms"] = $this;
            // line 205
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 205, $this->source); })()), $context["forms"]->macro_checkboxSelect((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 205, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 209
    public function macro_radioGroupField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 210
            echo "    ";
            $context["forms"] = $this;
            // line 211
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 211, $this->source); })()), $context["forms"]->macro_radioGroup((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 211, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 215
    public function macro_fileField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 216
            echo "    ";
            $context["forms"] = $this;
            // line 217
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 217, $this->source); })()), $context["forms"]->macro_file((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 217, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 221
    public function macro_lightswitchField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 222
            echo "    ";
            $context["forms"] = $this;
            // line 223
            echo "    ";
            if (( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "labelId", array(), "any", true, true) ||  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 223, $this->source); })()), "labelId", array()))) {
                // line 224
                echo "        ";
                $context["config"] = twig_array_merge((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 224, $this->source); })()), array("labelId" => ("label" . twig_random($this->env))));
                // line 225
                echo "    ";
            }
            // line 226
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 226, $this->source); })()), $context["forms"]->macro_lightswitch((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 226, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 230
    public function macro_editableTableField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 231
            echo "    ";
            $context["forms"] = $this;
            // line 232
            echo "    ";
            ob_start();
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 232)->display((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 232, $this->source); })()));
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 233
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 233, $this->source); })()), (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new Twig_Error_Runtime('Variable "input" does not exist.', 233, $this->source); })()));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 237
    public function macro_elementSelectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 238
            echo "    ";
            $context["forms"] = $this;
            // line 239
            echo "    ";
            echo $context["forms"]->macro_field((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 239, $this->source); })()), $context["forms"]->macro_elementSelect((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 239, $this->source); })())));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 246
    public function macro_optionShortcutLabel($__key__ = null, $__shift__ = null, $__alt__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "shift" => $__shift__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 247
            ob_start();
            // line 248
            echo "        ";
            switch (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 248, $this->source); })()), "app", array()), "request", array()), "getClientOs", array(), "method")) {
                case "Mac":
                {
                    // line 250
                    echo "                <span class=\"shortcut\">";
                    echo twig_escape_filter($this->env, ((((((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new Twig_Error_Runtime('Variable "alt" does not exist.', 250, $this->source); })())) ? ("⌥") : ("")) . (((isset($context["shift"]) || array_key_exists("shift", $context) ? $context["shift"] : (function () { throw new Twig_Error_Runtime('Variable "shift" does not exist.', 250, $this->source); })())) ? ("⇧") : (""))) . "⌘") . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 250, $this->source); })())), "html", null, true);
                    echo "</span>
            ";
                    break;
                }
                default:
                {
                    // line 252
                    echo "                <span class=\"shortcut\">";
                    echo twig_escape_filter($this->env, ((("Ctrl+" . (((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new Twig_Error_Runtime('Variable "alt" does not exist.', 252, $this->source); })())) ? ("Alt+") : (""))) . (((isset($context["shift"]) || array_key_exists("shift", $context) ? $context["shift"] : (function () { throw new Twig_Error_Runtime('Variable "shift" does not exist.', 252, $this->source); })())) ? ("Shift+") : (""))) . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 252, $this->source); })())), "html", null, true);
                    echo "</span>
        ";
                }
            }
            // line 254
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1229 => 254,  1222 => 252,  1213 => 250,  1208 => 248,  1206 => 247,  1192 => 246,  1180 => 239,  1177 => 238,  1165 => 237,  1153 => 233,  1148 => 232,  1145 => 231,  1133 => 230,  1121 => 226,  1118 => 225,  1115 => 224,  1112 => 223,  1109 => 222,  1097 => 221,  1085 => 217,  1082 => 216,  1070 => 215,  1058 => 211,  1055 => 210,  1043 => 209,  1031 => 205,  1028 => 204,  1016 => 203,  1004 => 199,  1001 => 198,  989 => 197,  978 => 192,  972 => 190,  969 => 189,  963 => 187,  961 => 186,  957 => 185,  941 => 184,  939 => 183,  936 => 182,  930 => 180,  927 => 179,  924 => 178,  912 => 177,  900 => 173,  897 => 172,  885 => 171,  873 => 167,  870 => 166,  858 => 165,  846 => 161,  843 => 160,  831 => 159,  819 => 155,  813 => 152,  809 => 151,  806 => 150,  803 => 149,  800 => 148,  788 => 147,  776 => 143,  773 => 142,  761 => 141,  749 => 137,  746 => 136,  734 => 135,  722 => 131,  719 => 130,  707 => 129,  695 => 125,  692 => 124,  680 => 123,  668 => 119,  665 => 118,  662 => 117,  659 => 116,  653 => 113,  649 => 112,  646 => 111,  643 => 110,  640 => 109,  637 => 108,  625 => 107,  615 => 103,  602 => 102,  592 => 95,  580 => 94,  570 => 90,  558 => 89,  548 => 85,  536 => 84,  526 => 80,  514 => 79,  504 => 75,  492 => 74,  482 => 70,  470 => 69,  460 => 65,  448 => 64,  438 => 60,  426 => 59,  416 => 55,  404 => 54,  394 => 50,  382 => 49,  372 => 45,  360 => 44,  350 => 40,  338 => 39,  328 => 35,  316 => 34,  306 => 30,  294 => 29,  284 => 25,  272 => 24,  262 => 20,  250 => 19,  240 => 15,  228 => 14,  219 => 10,  207 => 9,  197 => 2,  185 => 1,  179 => 244,  175 => 241,  171 => 235,  167 => 228,  163 => 219,  159 => 213,  155 => 207,  151 => 201,  147 => 195,  143 => 175,  139 => 169,  135 => 163,  131 => 157,  127 => 145,  123 => 139,  119 => 133,  115 => 127,  111 => 121,  107 => 105,  103 => 100,  99 => 97,  95 => 92,  91 => 87,  87 => 82,  83 => 77,  79 => 72,  75 => 67,  71 => 62,  67 => 57,  63 => 52,  59 => 47,  55 => 42,  51 => 37,  47 => 32,  43 => 27,  39 => 22,  35 => 17,  31 => 12,  27 => 7,  23 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro errorList(errors) %}
    {% include \"_includes/forms/errorList\" %}
{% endmacro %}


{# Inputs #}


{% macro hidden(config) -%}
    {% include \"_includes/forms/hidden\" with config only %}
{%- endmacro %}


{% macro text(config) %}
    {% include \"_includes/forms/text\" with config only %}
{% endmacro %}


{% macro password(config) %}
    {% include \"_includes/forms/text\" with config|merge({ type: 'password' }) only %}
{% endmacro %}


{% macro date(config) %}
    {% include \"_includes/forms/date\" with config only %}
{% endmacro %}


{% macro time(config) %}
    {% include \"_includes/forms/time\" with config only %}
{% endmacro %}


{% macro color(config) %}
    {% include \"_includes/forms/color\" with config only %}
{% endmacro %}


{% macro textarea(config) %}
    {% include \"_includes/forms/textarea\" with config only %}
{% endmacro %}


{% macro select(config) %}
    {% include \"_includes/forms/select\" with config only %}
{% endmacro %}


{% macro multiselect(config) %}
    {% include \"_includes/forms/multiselect\" with config only %}
{% endmacro %}


{% macro checkbox(config) %}
    {% include \"_includes/forms/checkbox\" with config only %}
{% endmacro %}


{% macro checkboxGroup(config) %}
    {% include \"_includes/forms/checkboxGroup\" with config only %}
{% endmacro %}


{% macro checkboxSelect(config) %}
    {% include \"_includes/forms/checkboxSelect\" with config only %}
{% endmacro %}


{% macro radio(config) %}
    {% include \"_includes/forms/radio\" with config only %}
{% endmacro %}


{% macro radioGroup(config) %}
    {% include \"_includes/forms/radioGroup\" with config only %}
{% endmacro %}


{% macro file(config) %}
    {% include \"_includes/forms/file\" with config only %}
{% endmacro %}


{% macro lightswitch(config) %}
    {% include \"_includes/forms/lightswitch\" with config only %}
{% endmacro %}


{% macro editableTable(config) %}
    {% include \"_includes/forms/editableTable\" with config only %}
{% endmacro %}


{% macro elementSelect(config) %}
    {% include \"_includes/forms/elementSelect\" with config only %}
{% endmacro %}


{# Fields #}


{% macro field(config, input) %}
    {% include \"_includes/forms/field\" with config|merge({ input: input }) only %}
{% endmacro %}


{% macro textField(config) %}
    {% import _self as forms %}
    {% if config.unit is defined %}
        {% set input %}
            <div class=\"flex\">
                <div class=\"textwrapper\">{{ forms.text(config) }}</div>
                <div class=\"label light\">{{ config.unit }}</div>
            </div>
        {% endset %}
    {% else %}
        {% set input = forms.text(config) %}
    {% endif %}
    {{ forms.field(config, input) }}
{% endmacro %}


{% macro passwordField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.password(config)) }}
{% endmacro %}


{% macro dateField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.date(config)) }}
{% endmacro %}


{% macro timeField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.time(config)) }}
{% endmacro %}


{% macro colorField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.color(config)) }}
{% endmacro %}


{% macro dateTimeField(config) %}
    {% import _self as forms %}
    {% set input %}
        <div class=\"datetimewrapper\">
            {{ forms.date(config) }}
            {{ forms.time(config) }}
        </div>
    {% endset %}
    {{ forms.field(config, input) }}
{% endmacro %}


{% macro textareaField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.textarea(config)) }}
{% endmacro %}


{% macro selectField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.select(config)) }}
{% endmacro %}


{% macro multiselectField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.multiselect(config)) }}
{% endmacro %}


{% macro checkboxField(config) %}
    {% import _self as forms %}
    {% if config.fieldLabel is defined %}
        {{ forms.field(config|merge({label: config.fieldLabel}), forms.checkbox(config)) }}
    {% else %}
        {% set instructions = config.instructions ?? null -%}
        {% set warning = config.warning ?? null -%}
        <div class=\"field checkboxfield{% if config.first is defined and config.first %} first{% endif %}{% if instructions %} has-instructions{% endif %}\"{% if config.id is defined and config.id %} id=\"{{ config.id }}-field\"{% endif %}>
            {{ forms.checkbox(config) }}
            {% if instructions %}
                <div class=\"instructions\">{{ instructions|md }}</div>
            {% endif %}
            {% if warning %}
                <p class=\"warning\">{{ warning }}</p>
            {% endif %}
        </div>
    {% endif %}
{% endmacro %}


{% macro checkboxGroupField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.checkboxGroup(config)) }}
{% endmacro %}


{% macro checkboxSelectField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.checkboxSelect(config)) }}
{% endmacro %}


{% macro radioGroupField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.radioGroup(config)) }}
{% endmacro %}


{% macro fileField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.file(config)) }}
{% endmacro %}


{% macro lightswitchField(config) %}
    {% import _self as forms %}
    {% if config.labelId is not defined or not config.labelId %}
        {% set config = config|merge({ labelId: 'label'~random() }) %}
    {% endif %}
    {{ forms.field(config, forms.lightswitch(config)) }}
{% endmacro %}


{% macro editableTableField(config) %}
    {% import _self as forms %}
    {% set input %}{% include \"_includes/forms/editableTable\" with config only %}{% endset %}
    {{ forms.field(config, input) }}
{% endmacro %}


{% macro elementSelectField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.elementSelect(config)) }}
{% endmacro %}


{# Other #}


{% macro optionShortcutLabel(key, shift, alt) %}
    {%- spaceless %}
        {% switch craft.app.request.getClientOs() %}
            {% case 'Mac' %}
                <span class=\"shortcut\">{{ (alt ? '⌥') ~ (shift ? '⇧') ~ '⌘' ~ key }}</span>
            {% default %}
                <span class=\"shortcut\">{{ 'Ctrl+' ~ (alt ? 'Alt+') ~ (shift ? 'Shift+') ~ key }}</span>
        {% endswitch %}
    {% endspaceless -%}
{% endmacro %}
", "_includes/forms", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/forms.html");
    }
}
