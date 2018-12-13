<?php

/* users/_accountfields */
class __TwigTemplate_ac9f10e9d3c03d3df27a29794483dcda7a9e29157f34005d7a53a26f50c9a4f3 extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "users/_accountfields", 1);
        // line 2
        $context["meta"] = ((array_key_exists("meta", $context)) ? ((isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 2, $this->source); })())) : (false));
        // line 3
        echo "
";
        // line 4
        if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 4, $this->source); })()), "app", array()), "config", array()), "general", array()), "useEmailAsUsername", array())) {
            // line 5
            echo "    ";
            echo $context["forms"]->macro_textField(array("first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Username", "app"), "id" => "username", "name" => "username", "value" => ((            // line 10
array_key_exists("user", $context)) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "username", array())) : (null)), "autofocus" => true, "required" => (((            // line 12
(isset($context["isNewUser"]) || array_key_exists("isNewUser", $context) ? $context["isNewUser"] : (function () { throw new Twig_Error_Runtime('Variable "isNewUser" does not exist.', 12, $this->source); })()) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 12, $this->source); })()), "admin", array()) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "getIsCurrent", array(), "method")))) ? (true) : (false)), "disabled" => (((            // line 13
(isset($context["isNewUser"]) || array_key_exists("isNewUser", $context) ? $context["isNewUser"] : (function () { throw new Twig_Error_Runtime('Variable "isNewUser" does not exist.', 13, $this->source); })()) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new Twig_Error_Runtime('Variable "currentUser" does not exist.', 13, $this->source); })()), "admin", array()) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "getIsCurrent", array(), "method")))) ? (false) : (true)), "errors" => ((            // line 14
array_key_exists("user", $context)) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "getErrors", array(0 => "username"), "method")) : (null))));
            // line 15
            echo "
";
        }
        // line 17
        echo "
";
        // line 18
        if ( !(isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "<div class=\"flex\">
    <div class=\"flex-grow\">
";
        }
        // line 22
        echo "        ";
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("First Name", "app"), "id" => "firstName", "name" => "firstName", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 26
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->source); })()), "firstName", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 27
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "getErrors", array(0 => "firstName"), "method"), "autofocus" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 28
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 28, $this->source); })()), "app", array()), "config", array()), "general", array()), "useEmailAsUsername", array())));
        // line 29
        echo "
";
        // line 30
        if ( !(isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "    </div>
    <div class=\"flex-grow\">
";
        }
        // line 34
        echo "        ";
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Last Name", "app"), "id" => "lastName", "name" => "lastName", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 38
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->source); })()), "lastName", array()), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 39
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 39, $this->source); })()), "getErrors", array(0 => "lastName"), "method")));
        // line 40
        echo "
";
        // line 41
        if ( !(isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "users/_accountfields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 42,  77 => 41,  74 => 40,  72 => 39,  71 => 38,  69 => 34,  64 => 31,  62 => 30,  59 => 29,  57 => 28,  56 => 27,  55 => 26,  53 => 22,  48 => 19,  46 => 18,  43 => 17,  39 => 15,  37 => 14,  36 => 13,  35 => 12,  34 => 10,  32 => 5,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}
{% set meta = meta is defined ? meta : false %}

{% if not craft.app.config.general.useEmailAsUsername %}
    {{ forms.textField({
        first: true,
        label: \"Username\"|t('app'),
        id: 'username',
        name: 'username',
        value: (user is defined ? user.username : null),
        autofocus: true,
        required: (isNewUser or (currentUser.admin or user.getIsCurrent()) ? true : false),
        disabled: (isNewUser or (currentUser.admin or user.getIsCurrent()) ? false : true),
        errors: (user is defined ? user.getErrors('username') : null)
    }) }}
{% endif %}

{% if not meta %}
<div class=\"flex\">
    <div class=\"flex-grow\">
{% endif %}
        {{ forms.textField({
            label: \"First Name\"|t('app'),
            id: 'firstName',
            name: 'firstName',
            value: user.firstName,
            errors: user.getErrors('firstName'),
            autofocus: craft.app.config.general.useEmailAsUsername
        }) }}
{% if not meta %}
    </div>
    <div class=\"flex-grow\">
{% endif %}
        {{ forms.textField({
            label: \"Last Name\"|t('app'),
            id: 'lastName',
            name: 'lastName',
            value: user.lastName,
            errors: user.getErrors('lastName')
        }) }}
{% if not meta %}
    </div>
</div>
{% endif %}
", "users/_accountfields", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/users/_accountfields.html");
    }
}
