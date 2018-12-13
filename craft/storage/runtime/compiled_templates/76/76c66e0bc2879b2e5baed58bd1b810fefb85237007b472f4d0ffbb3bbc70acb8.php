<?php

/* _components/fieldtypes/Categories/settings */
class __TwigTemplate_2bd43d02f6725fbfd72a94d034162ec7c4f11999225728bc454ef662ac98b0a4 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_components/fieldtypes/elementfieldsettings", "_components/fieldtypes/Categories/settings", 1);
        $this->blocks = array(
            'fieldSettings' => array($this, 'block_fieldSettings'),
            'branchLimitField' => array($this, 'block_branchLimitField'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Categories/settings", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_fieldSettings($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayBlock("sourcesField", $context, $blocks);
        echo "

    ";
        // line 9
        $this->displayBlock('branchLimitField', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock("viewModeField", $context, $blocks);
        echo "
    ";
        // line 22
        $this->displayBlock("selectionLabelField", $context, $blocks);
        echo "
    ";
        // line 23
        $this->displayBlock("advancedSettings", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_branchLimitField($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Branch Limit", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit the number of selectable category branches.", "app"), "id" => "branchLimit", "name" => "branchLimit", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 15
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 15, $this->source); })()), "branchLimit", array()), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 17
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 17, $this->source); })()), "getErrors", array(0 => "branchLimit"), "method")));
        // line 18
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Categories/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  70 => 17,  69 => 15,  67 => 10,  64 => 9,  58 => 23,  54 => 22,  50 => 21,  47 => 20,  45 => 9,  39 => 7,  36 => 6,  32 => 1,  30 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_components/fieldtypes/elementfieldsettings\" %}

{% import \"_includes/forms\" as forms %}


{% block fieldSettings %}
    {{ block('sourcesField') }}

    {% block branchLimitField %}
        {{ forms.textField({
            label: \"Branch Limit\"|t('app'),
            instructions: \"Limit the number of selectable category branches.\"|t('app'),
            id: 'branchLimit',
            name: 'branchLimit',
            value: field.branchLimit,
            size: 2,
            errors: field.getErrors('branchLimit')
        }) }}
    {% endblock %}

    {{ block('viewModeField') }}
    {{ block('selectionLabelField') }}
    {{ block('advancedSettings') }}
{% endblock %}
", "_components/fieldtypes/Categories/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/Categories/settings.html");
    }
}
