<?php

/* _components/fieldtypes/elementfieldsettings */
class __TwigTemplate_827cdedfb175f4f9b2e5a5311b177c01d3edd578693ee408b0029e31cf5b1fdb extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'fieldSettings' => array($this, 'block_fieldSettings'),
            'sourcesField' => array($this, 'block_sourcesField'),
            'limitField' => array($this, 'block_limitField'),
            'viewModeField' => array($this, 'block_viewModeField'),
            'selectionLabelField' => array($this, 'block_selectionLabelField'),
            'advancedSettings' => array($this, 'block_advancedSettings'),
            'targetSiteField' => array($this, 'block_targetSiteField'),
            'localizeRelationsField' => array($this, 'block_localizeRelationsField'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/elementfieldsettings", 1);
        // line 2
        echo "
";
        // line 3
        $context["sourceOptions"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 3, $this->source); })()), "getSourceOptions", array(), "method");
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fieldSettings', $context, $blocks);
    }

    public function block_fieldSettings($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('sourcesField', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('limitField', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('viewModeField', $context, $blocks);
        // line 52
        echo "
    ";
        // line 53
        $this->displayBlock('selectionLabelField', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('advancedSettings', $context, $blocks);
    }

    // line 6
    public function block_sourcesField($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        if ((isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sourceOptions" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "            ";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 8, $this->source); })()), "allowMultipleSources", array())) {
                // line 9
                echo "                ";
                echo $context["forms"]->macro_checkboxSelectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Sources", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which sources do you want to select {type} from?", "app", array("type" => twig_lower_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 11
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 11, $this->source); })()), "displayName", array(), "method")))), "id" => "sources", "name" => "sources", "options" =>                 // line 14
(isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sourceOptions" does not exist.', 14, $this->source); })()), "values" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 15
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 15, $this->source); })()), "sources", array()), "showAllOption" => true));
                // line 17
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Source", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which source do you want to select {type} from?", "app", array("type" => twig_lower_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 21
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 21, $this->source); })()), "displayName", array(), "method")))), "id" => "source", "name" => "source", "options" =>                 // line 24
(isset($context["sourceOptions"]) || array_key_exists("sourceOptions", $context) ? $context["sourceOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sourceOptions" does not exist.', 24, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 25
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 25, $this->source); })()), "source", array())));
                // line 26
                echo "
            ";
            }
            // line 28
            echo "        ";
        } else {
            // line 29
            echo "            ";
            echo $context["forms"]->macro_field(array("label" => ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 30
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 30, $this->source); })()), "allowMultipleSources", array())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Sources", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Source", "app")))), (("<p class=\"error\">" . $this->extensions['craft\web\twig\Extension']->translateFilter("No sources exist yet.", "app")) . "</p>"));
            // line 31
            echo "
        ";
        }
        // line 33
        echo "    ";
    }

    // line 35
    public function block_limitField($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 36, $this->source); })()), "allowLimit", array())) {
            // line 37
            echo "            ";
            echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit the number of selectable {type}.", "app", array("type" => twig_lower_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 39
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 39, $this->source); })()), "displayName", array(), "method")))), "id" => "limit", "name" => "limit", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 42
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 42, $this->source); })()), "limit", array()), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 44
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 44, $this->source); })()), "getErrors", array(0 => "limit"), "method")));
            // line 45
            echo "
        ";
        }
        // line 47
        echo "    ";
    }

    // line 49
    public function block_viewModeField($context, array $blocks = array())
    {
        // line 50
        echo "        ";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 50, $this->source); })()), "getViewModeFieldHtml", array(), "method");
        echo "
    ";
    }

    // line 53
    public function block_selectionLabelField($context, array $blocks = array())
    {
        // line 54
        echo "        ";
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Selection Label", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Enter the text you want to appear on the {type} selection input.", "app", array("type" => twig_lower_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 56
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 56, $this->source); })()), "displayName", array(), "method")))), "id" => "selectionLabel", "name" => "selectionLabel", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 59
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 59, $this->source); })()), "selectionLabel", array()), "placeholder" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 60
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 60, $this->source); })()), "defaultSelectionLabel", array(), "method"), "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 61
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 61, $this->source); })()), "getErrors", array(0 => "selectionLabel"), "method")));
        // line 62
        echo "
    ";
    }

    // line 65
    public function block_advancedSettings($context, array $blocks = array())
    {
        // line 66
        echo "        ";
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 66, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            // line 67
            echo "            <hr>
            <a class=\"fieldtoggle\" data-target=\"advanced\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Advanced", "app"), "html", null, true);
            echo "</a>
            <div id=\"advanced\" class=\"hidden\">
                ";
            // line 70
            $this->displayBlock('targetSiteField', $context, $blocks);
            // line 73
            echo "
                ";
            // line 74
            $this->displayBlock('localizeRelationsField', $context, $blocks);
            // line 82
            echo "            </div>
        ";
        }
        // line 84
        echo "    ";
    }

    // line 70
    public function block_targetSiteField($context, array $blocks = array())
    {
        // line 71
        echo "                    ";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 71, $this->source); })()), "getTargetSiteFieldHtml", array(), "method");
        echo "
                ";
    }

    // line 74
    public function block_localizeRelationsField($context, array $blocks = array())
    {
        // line 75
        echo "                    ";
        echo $context["forms"]->macro_checkboxField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Manage relations on a per-site basis", "app"), "id" => "localize-relations", "name" => "localizeRelations", "checked" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 79
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 79, $this->source); })()), "localizeRelations", array())));
        // line 80
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 80,  205 => 79,  203 => 75,  200 => 74,  193 => 71,  190 => 70,  186 => 84,  182 => 82,  180 => 74,  177 => 73,  175 => 70,  170 => 68,  167 => 67,  164 => 66,  161 => 65,  156 => 62,  154 => 61,  153 => 60,  152 => 59,  151 => 56,  149 => 54,  146 => 53,  139 => 50,  136 => 49,  132 => 47,  128 => 45,  126 => 44,  125 => 42,  124 => 39,  122 => 37,  119 => 36,  116 => 35,  112 => 33,  108 => 31,  106 => 30,  104 => 29,  101 => 28,  97 => 26,  95 => 25,  94 => 24,  93 => 21,  91 => 19,  87 => 17,  85 => 15,  84 => 14,  83 => 11,  81 => 9,  78 => 8,  75 => 7,  72 => 6,  68 => 65,  65 => 64,  63 => 53,  60 => 52,  58 => 49,  55 => 48,  53 => 35,  50 => 34,  47 => 6,  41 => 5,  38 => 4,  36 => 3,  33 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{% set sourceOptions = field.getSourceOptions() %}

{% block fieldSettings %}
    {% block sourcesField %}
        {% if sourceOptions %}
            {% if field.allowMultipleSources %}
                {{ forms.checkboxSelectField({
                    label: \"Sources\"|t('app'),
                    instructions: \"Which sources do you want to select {type} from?\"|t('app', { type: field.displayName()|lower }),
                    id: 'sources',
                    name: 'sources',
                    options: sourceOptions,
                    values: field.sources,
                    showAllOption: true,
                }) }}
            {% else %}
                {{ forms.selectField({
                    label: \"Source\"|t('app'),
                    instructions: \"Which source do you want to select {type} from?\"|t('app', { type: field.displayName()|lower }),
                    id: 'source',
                    name: 'source',
                    options: sourceOptions,
                    value: field.source
                }) }}
            {% endif %}
        {% else %}
            {{ forms.field({
                label: (field.allowMultipleSources ? \"Sources\"|t('app') : \"Source\"|t('app'))
            }, '<p class=\"error\">' ~ \"No sources exist yet.\"|t('app') ~ '</p>') }}
        {% endif %}
    {% endblock %}

    {% block limitField %}
        {% if field.allowLimit %}
            {{ forms.textField({
                label: \"Limit\"|t('app'),
                instructions: \"Limit the number of selectable {type}.\"|t('app', { type: field.displayName()|lower }),
                id: 'limit',
                name: 'limit',
                value: field.limit,
                size: 2,
                errors: field.getErrors('limit')
            }) }}
        {% endif %}
    {% endblock %}

    {% block viewModeField %}
        {{ field.getViewModeFieldHtml()|raw }}
    {% endblock %}

    {% block selectionLabelField %}
        {{ forms.textField({
            label: \"Selection Label\"|t('app'),
            instructions: \"Enter the text you want to appear on the {type} selection input.\"|t('app', { type: field.displayName()|lower }),
            id: 'selectionLabel',
            name: 'selectionLabel',
            value: field.selectionLabel,
            placeholder: field.defaultSelectionLabel(),
            errors: field.getErrors('selectionLabel')
        }) }}
    {% endblock %}

    {% block advancedSettings %}
        {% if craft.app.getIsMultiSite() %}
            <hr>
            <a class=\"fieldtoggle\" data-target=\"advanced\">{{ \"Advanced\"|t('app') }}</a>
            <div id=\"advanced\" class=\"hidden\">
                {% block targetSiteField %}
                    {{ field.getTargetSiteFieldHtml()|raw }}
                {% endblock %}

                {% block localizeRelationsField %}
                    {{ forms.checkboxField({
                        label: \"Manage relations on a per-site basis\"|t('app'),
                        id: 'localize-relations',
                        name: 'localizeRelations',
                        checked: field.localizeRelations
                    }) }}
                {% endblock %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "_components/fieldtypes/elementfieldsettings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/elementfieldsettings.html");
    }
}
