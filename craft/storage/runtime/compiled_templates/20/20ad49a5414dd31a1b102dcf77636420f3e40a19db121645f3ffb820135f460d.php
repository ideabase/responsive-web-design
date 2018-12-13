<?php

/* _components/widgets/RecentEntries/settings */
class __TwigTemplate_2969b1743c1f3d86a5a1aeb3b9bf9c0f12f5b77ca1a560dbff3ca96a65cf655c extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/RecentEntries/settings", 1);
        // line 2
        echo "

";
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"select\">
        <select id=\"section\" name=\"section\">
            <option value=\"*\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All", "app"), "html", null, true);
        echo "</option>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 8, $this->source); })()), "app", array()), "sections", array()), "getAllSections", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 9
            echo "                ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "type", array()) != "single")) {
                // line 10
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()), "html", null, true);
                echo "\"";
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 10, $this->source); })()), "section", array()))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "name", array()), "site"), "html", null, true);
                echo "</option>
                ";
            }
            // line 12
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </select>
    </div>
";
        $context["sectionInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
";
        // line 17
        echo $context["forms"]->macro_field(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Section", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which section do you want to pull recent entries from?", "app"), "id" => "section"),         // line 21
(isset($context["sectionInput"]) || array_key_exists("sectionInput", $context) ? $context["sectionInput"] : (function () { throw new Twig_Error_Runtime('Variable "sectionInput" does not exist.', 21, $this->source); })()));
        echo "

";
        // line 23
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 23, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            // line 24
            echo "    ";
            $context["editableSites"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 24, $this->source); })()), "app", array()), "sites", array()), "getEditableSites", array(), "method");
            // line 25
            echo "
    ";
            // line 26
            if ((twig_length_filter($this->env, (isset($context["editableSites"]) || array_key_exists("editableSites", $context) ? $context["editableSites"] : (function () { throw new Twig_Error_Runtime('Variable "editableSites" does not exist.', 26, $this->source); })())) > 1)) {
                // line 27
                echo "        ";
                ob_start();
                // line 28
                echo "            <div class=\"select\">
                <select id=\"site-id\" name=\"siteId\">
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["editableSites"]) || array_key_exists("editableSites", $context) ? $context["editableSites"] : (function () { throw new Twig_Error_Runtime('Variable "editableSites" does not exist.', 30, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                    // line 31
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), "html", null, true);
                    echo "\"";
                    if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 31, $this->source); })()), "siteId", array()))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "name", array()), "site"), "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                </select>
            </div>
        ";
                $context["siteInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 36
                echo "
        ";
                // line 37
                echo $context["forms"]->macro_field(array("id" => "site-id", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site", "app")),                 // line 40
(isset($context["siteInput"]) || array_key_exists("siteInput", $context) ? $context["siteInput"] : (function () { throw new Twig_Error_Runtime('Variable "siteInput" does not exist.', 40, $this->source); })()));
                echo "
    ";
            }
        }
        // line 43
        echo "

";
        // line 45
        echo $context["forms"]->macro_textField(array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit", "app"), "id" => "limit", "name" => "limit", "value" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 49
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 49, $this->source); })()), "limit", array()), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),         // line 51
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 51, $this->source); })()), "getErrors", array(0 => "limit"), "method")));
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  135 => 51,  134 => 49,  133 => 45,  129 => 43,  123 => 40,  122 => 37,  119 => 36,  114 => 33,  99 => 31,  95 => 30,  91 => 28,  88 => 27,  86 => 26,  83 => 25,  80 => 24,  78 => 23,  73 => 21,  72 => 17,  69 => 16,  64 => 13,  58 => 12,  46 => 10,  43 => 9,  39 => 8,  35 => 7,  31 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}


{% set sectionInput %}
    <div class=\"select\">
        <select id=\"section\" name=\"section\">
            <option value=\"*\">{{ \"All\"|t('app') }}</option>
            {% for section in craft.app.sections.getAllSections() %}
                {% if section.type != 'single' %}
                    <option value=\"{{ section.id }}\"{% if section.id == widget.section %} selected{% endif %}>{{ section.name|t('site') }}</option>
                {% endif %}
            {% endfor %}
        </select>
    </div>
{% endset %}

{{ forms.field({
    label: \"Section\"|t('app'),
    instructions: \"Which section do you want to pull recent entries from?\"|t('app'),
    id: 'section',
}, sectionInput) }}

{% if craft.app.getIsMultiSite() %}
    {% set editableSites = craft.app.sites.getEditableSites() %}

    {% if editableSites|length > 1 %}
        {% set siteInput %}
            <div class=\"select\">
                <select id=\"site-id\" name=\"siteId\">
                    {% for site in editableSites %}
                        <option value=\"{{ site.id }}\"{% if site.id == widget.siteId %} selected{% endif %}>{{ site.name|t('site') }}</option>
                    {% endfor %}
                </select>
            </div>
        {% endset %}

        {{ forms.field({
            id: 'site-id',
            label: \"Site\"|t('app')
        }, siteInput) }}
    {% endif %}
{% endif %}


{{ forms.textField({
    label: \"Limit\"|t('app'),
    id: 'limit',
    name: 'limit',
    value: widget.limit,
    size: 2,
    errors: widget.getErrors('limit')
}) }}
", "_components/widgets/RecentEntries/settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/widgets/RecentEntries/settings.html");
    }
}
