<?php

/* settings/sections/_entrytypes/index */
class __TwigTemplate_380f362126bf5adb2dc7ce56c70ae932c4968b2792fb006e73f6bf3ba9f297d0 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_entrytypes/index", 1);
        $this->blocks = array(
            'actionButton' => array($this, 'block_actionButton'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["entryTypes"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 3, $this->source); })()), "getEntryTypes", array(), "method");
        // line 4
        $context["multiple"] = (twig_length_filter($this->env, (isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new Twig_Error_Runtime('Variable "entryTypes" does not exist.', 4, $this->source); })())) > 1);
        // line 38
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 38, $this->source); })()), "type", array()) != "single")) {
            // line 39
            ob_start();
            // line 40
            echo "        new Craft.AdminTable({
            tableSelector: '#entrytypes',
            deleteAction: 'sections/delete-entry-type',
            minItems: 1,
            sortable: true,
            reorderAction: 'sections/reorder-entry-types',
            confirmDeleteMessage: '";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Are you sure you want to delete “{name}” and all entries that use it?", "app"), "html", null, true);
            echo "',
        });
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_actionButton($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 7, $this->source); })()), "type", array()) != "single")) {
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 8, $this->source); })()), "id", array())) . "/entrytypes/new")), "html", null, true);
            echo "\" class=\"btn submit add icon\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New entry type", "app"), "html", null, true);
            echo "</a>
    ";
        }
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <table id=\"entrytypes\" class=\"data fullwidth collapsible\">
        <thead>
            <th scope=\"col\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
        echo "</th>
            ";
        // line 17
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                <td class=\"thin\"></td>
                <td class=\"thin\"></td>
            ";
        }
        // line 21
        echo "        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new Twig_Error_Runtime('Variable "entryTypes" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
            // line 24
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "name", array()), "site"), "html", null, true);
            echo "\">
                    <th scope=\"row\" data-title=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new Twig_Error_Runtime('Variable "section" does not exist.', 25, $this->source); })()), "id", array())) . "/entrytypes/") . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "name", array()), "site"), "html", null, true);
            echo "</a></th>
                    <td data-title=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "handle", array()), "html", null, true);
            echo "</code></td>
                    ";
            // line 27
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 27, $this->source); })())) {
                // line 28
                echo "                        <td class=\"thin\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                        <td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                    ";
            }
            // line 31
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 33,  136 => 31,  131 => 29,  126 => 28,  124 => 27,  118 => 26,  110 => 25,  103 => 24,  99 => 23,  95 => 21,  90 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 13,  73 => 12,  63 => 8,  60 => 7,  57 => 6,  53 => 1,  46 => 46,  38 => 40,  36 => 39,  34 => 38,  32 => 4,  30 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}

{% set entryTypes = section.getEntryTypes() %}
{% set multiple  = (entryTypes|length > 1) %}

{% block actionButton %}
    {% if section.type != 'single' %}
        <a href=\"{{ url('settings/sections/' ~ section.id ~ '/entrytypes/new') }}\" class=\"btn submit add icon\">{{ \"New entry type\"|t('app') }}</a>
    {% endif %}
{% endblock %}

{% block content %}
    <table id=\"entrytypes\" class=\"data fullwidth collapsible\">
        <thead>
            <th scope=\"col\">{{ \"Name\"|t('app') }}</th>
            <th scope=\"col\">{{ \"Handle\"|t('app') }}</th>
            {% if multiple %}
                <td class=\"thin\"></td>
                <td class=\"thin\"></td>
            {% endif %}
        </thead>
        <tbody>
            {% for entryType in entryTypes %}
                <tr data-id=\"{{ entryType.id }}\" data-name=\"{{ entryType.name|t('site') }}\">
                    <th scope=\"row\" data-title=\"{{ 'Name'|t('app') }}\"><a href=\"{{ url('settings/sections/' ~ section.id ~ '/entrytypes/' ~ entryType.id) }}\">{{ entryType.name|t('site') }}</a></th>
                    <td data-title=\"{{ 'Handle'|t('app') }}\"><code>{{ entryType.handle }}</code></td>
                    {% if multiple %}
                        <td class=\"thin\"><a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a></td>
                        <td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\" role=\"button\"></a></td>
                    {% endif %}
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}


{% if section.type != 'single' %}
    {% js %}
        new Craft.AdminTable({
            tableSelector: '#entrytypes',
            deleteAction: 'sections/delete-entry-type',
            minItems: 1,
            sortable: true,
            reorderAction: 'sections/reorder-entry-types',
            confirmDeleteMessage: '{{ \"Are you sure you want to delete “{name}” and all entries that use it?\"|t('app') }}',
        });
    {% endjs %}
{% endif %}
", "settings/sections/_entrytypes/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/sections/_entrytypes/index.html");
    }
}
