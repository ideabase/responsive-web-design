<?php

/* _components/widgets/QuickPost/settings */
class __TwigTemplate_e3081b6b83b31875485593409341c0dbfb2b42f2029fc442672db219f1f3176f extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/QuickPost/settings", 1);
        // line 2
        echo "
";
        // line 3
        if ((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new Twig_Error_Runtime('Variable "sections" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    ";
            $context["sectionOptions"] = array();
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new Twig_Error_Runtime('Variable "sections" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 6
                echo "        ";
                $context["sectionOptions"] = twig_array_merge((isset($context["sectionOptions"]) || array_key_exists("sectionOptions", $context) ? $context["sectionOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sectionOptions" does not exist.', 6, $this->source); })()), array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "name", array()), "site"), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()))));
                // line 7
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
            echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Section", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which section do you want to publish entries to?", "app"), "id" => "section", "name" => "section", "options" =>             // line 13
(isset($context["sectionOptions"]) || array_key_exists("sectionOptions", $context) ? $context["sectionOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sectionOptions" does not exist.', 13, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 14
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 14, $this->source); })()), "section", array()), "toggle" => true, "targetPrefix" => "section"));
            // line 17
            echo "

    ";
            // line 19
            $context["selectedSectionId"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 19, $this->source); })()), "section", array());
            // line 20
            echo "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new Twig_Error_Runtime('Variable "sections" does not exist.', 21, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 22
                echo "        ";
                $context["showSection"] = (( !(isset($context["selectedSectionId"]) || array_key_exists("selectedSectionId", $context) ? $context["selectedSectionId"] : (function () { throw new Twig_Error_Runtime('Variable "selectedSectionId" does not exist.', 22, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) || ((isset($context["selectedSectionId"]) || array_key_exists("selectedSectionId", $context) ? $context["selectedSectionId"] : (function () { throw new Twig_Error_Runtime('Variable "selectedSectionId" does not exist.', 22, $this->source); })()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array())));
                // line 23
                echo "        <div id=\"section";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()), "html", null, true);
                echo "\"";
                if ( !(isset($context["showSection"]) || array_key_exists("showSection", $context) ? $context["showSection"] : (function () { throw new Twig_Error_Runtime('Variable "showSection" does not exist.', 23, $this->source); })())) {
                    echo " class=\"hidden\"";
                }
                echo ">

            ";
                // line 25
                $context["entryTypeOptions"] = array();
                // line 26
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "getEntryTypes", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 27
                    echo "                ";
                    $context["entryTypeOptions"] = twig_array_merge((isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "entryTypeOptions" does not exist.', 27, $this->source); })()), array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "name", array()), "site"), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "id", array()))));
                    // line 28
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "
            ";
                // line 30
                if ((twig_length_filter($this->env, (isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "entryTypeOptions" does not exist.', 30, $this->source); })())) == 1)) {
                    // line 31
                    echo "                <input type=\"hidden\" name=\"sections[";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()), "html", null, true);
                    echo "][entryType]\" value=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 31, $this->source); })()), "entryType", array()), "html", null, true);
                    echo "\" />
            ";
                } else {
                    // line 33
                    echo "                ";
                    echo $context["forms"]->macro_selectField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Type", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which type of entries do you want to publish?", "app"), "id" => "entryType", "name" => (("sections[" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 37
$context["section"], "id", array())) . "][entryType]"), "options" =>                     // line 38
(isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new Twig_Error_Runtime('Variable "entryTypeOptions" does not exist.', 38, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 39
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 39, $this->source); })()), "entryType", array()), "toggle" => true, "targetPrefix" => (("section" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 41
$context["section"], "id", array())) . "-type")));
                    // line 42
                    echo "
            ";
                }
                // line 44
                echo "
            ";
                // line 45
                ob_start();
                // line 46
                echo "                ";
                $context["entryTypes"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "getEntryTypes", array(), "method");
                // line 47
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new Twig_Error_Runtime('Variable "entryTypes" does not exist.', 47, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 48
                    echo "                    ";
                    $context["showEntryType"] = (((( !(isset($context["showSection"]) || array_key_exists("showSection", $context) ? $context["showSection"] : (function () { throw new Twig_Error_Runtime('Variable "showSection" does not exist.', 48, $this->source); })()) ||  !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 48, $this->source); })()), "entryType", array())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) || (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 48, $this->source); })()), "entryType", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "id", array()))) || (twig_length_filter($this->env, (isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new Twig_Error_Runtime('Variable "entryTypes" does not exist.', 48, $this->source); })())) == 1));
                    // line 49
                    echo "                    <div id=\"section";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()), "html", null, true);
                    echo "-type";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "id", array()), "html", null, true);
                    echo "\"";
                    if ( !(isset($context["showEntryType"]) || array_key_exists("showEntryType", $context) ? $context["showEntryType"] : (function () { throw new Twig_Error_Runtime('Variable "showEntryType" does not exist.', 49, $this->source); })())) {
                        echo " class=\"hidden\"";
                    }
                    echo ">
                        ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "getFieldLayout", array(), "method"), "getFields", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 51
                        echo "                            <div>
                                ";
                        // line 52
                        echo $context["forms"]->macro_checkbox(array("label" => (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 53
$context["field"], "name", array()) . ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "required", array())) ? (" <span class=\"required\"></span>") : (""))), "name" => (("sections[" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 54
$context["section"], "id", array())) . "][fields][]"), "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 55
$context["field"], "id", array()), "checked" => (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 56
$context["field"], "required", array()) || twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 56, $this->source); })()), "fields", array()))), "disabled" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                         // line 57
$context["field"], "required", array())));
                        // line 58
                        echo "
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            ";
                $context["fieldsInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 64
                echo "
            ";
                // line 65
                echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Fields", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which fields should be visible in the widget?", "app")),                 // line 68
(isset($context["fieldsInput"]) || array_key_exists("fieldsInput", $context) ? $context["fieldsInput"] : (function () { throw new Twig_Error_Runtime('Variable "fieldsInput" does not exist.', 68, $this->source); })()));
                echo "
        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
";
        } else {
            // line 73
            echo "
    <p>";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No sections are available.", "app"), "html", null, true);
            echo "</p>

";
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/QuickPost/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 74,  236 => 73,  232 => 71,  215 => 68,  214 => 65,  211 => 64,  208 => 63,  193 => 61,  185 => 58,  183 => 57,  182 => 56,  181 => 55,  180 => 54,  179 => 53,  178 => 52,  175 => 51,  171 => 50,  160 => 49,  157 => 48,  139 => 47,  136 => 46,  134 => 45,  131 => 44,  127 => 42,  125 => 41,  124 => 39,  123 => 38,  122 => 37,  120 => 33,  112 => 31,  110 => 30,  107 => 29,  101 => 28,  98 => 27,  93 => 26,  91 => 25,  81 => 23,  78 => 22,  61 => 21,  58 => 20,  56 => 19,  52 => 17,  50 => 14,  49 => 13,  47 => 8,  41 => 7,  38 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{% if sections %}
    {% set sectionOptions = [] %}
    {% for section in sections %}
        {% set sectionOptions = sectionOptions|merge([{ label: section.name|t('site'), value: section.id }]) %}
    {% endfor %}
    {{ forms.selectField({
        label: \"Section\"|t('app'),
        instructions: \"Which section do you want to publish entries to?\"|t('app'),
        id: 'section',
        name: 'section',
        options: sectionOptions,
        value: widget.section,
        toggle: true,
        targetPrefix: 'section'
    }) }}

    {% set selectedSectionId = widget.section %}

    {% for section in sections %}
        {% set showSection = ((not selectedSectionId and loop.first) or selectedSectionId == section.id) %}
        <div id=\"section{{ section.id }}\"{% if not showSection %} class=\"hidden\"{% endif %}>

            {% set entryTypeOptions = [] %}
            {% for entryType in section.getEntryTypes() %}
                {% set entryTypeOptions = entryTypeOptions|merge([{ label: entryType.name|t('site'), value: entryType.id }]) %}
            {% endfor %}

            {% if entryTypeOptions|length == 1 %}
                <input type=\"hidden\" name=\"sections[{{ section.id }}][entryType]\" value=\"{{ widget.entryType }}\" />
            {% else %}
                {{ forms.selectField({
                    label: \"Entry Type\"|t('app'),
                    instructions: \"Which type of entries do you want to publish?\"|t('app'),
                    id: 'entryType',
                    name: 'sections['~section.id~'][entryType]',
                    options: entryTypeOptions,
                    value: widget.entryType,
                    toggle: true,
                    targetPrefix: 'section'~section.id~'-type'
                }) }}
            {% endif %}

            {% set fieldsInput %}
                {% set entryTypes = section.getEntryTypes() %}
                {% for entryType in entryTypes %}
                    {% set showEntryType = (((not showSection or not widget.entryType) and loop.first) or widget.entryType == entryType.id or entryTypes|length == 1) %}
                    <div id=\"section{{ section.id }}-type{{ entryType.id }}\"{% if not showEntryType %} class=\"hidden\"{% endif %}>
                        {% for field in entryType.getFieldLayout().getFields() %}
                            <div>
                                {{ forms.checkbox({
                                    label: field.name~(field.required ? ' <span class=\"required\"></span>' : ''),
                                    name: 'sections['~section.id~'][fields][]',
                                    value: field.id,
                                    checked: (field.required or field.id in widget.fields),
                                    disabled: field.required
                                }) }}
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
            {% endset %}

            {{ forms.field({
                label: \"Fields\"|t('app'),
                instructions: \"Which fields should be visible in the widget?\"|t('app')
            }, fieldsInput) }}
        </div>
    {% endfor %}

{% else %}

    <p>{{ \"No sections are available.\"|t('app') }}</p>

{% endif %}
", "_components/widgets/QuickPost/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/widgets/QuickPost/settings.html");
    }
}
