<?php

/* settings/sections/_index */
class __TwigTemplate_68db49ba5a2da5b3ee41bae61034d76bd46ca7a2de9ddd8adf5a7395145c997d extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_index", 1);
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
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Sections", "app");
        // line 4
        $context["crumbs"] = array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")));
        // line 58
        ob_start();
        // line 59
        echo "    var adminTable = new Craft.AdminTable({
        tableSelector: '#sections',
        noItemsSelector: '#nosections',
        deleteAction: 'sections/delete-section',
        confirmDeleteMessage: '";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Are you sure you want to delete “{name}” and all its entries?", "app"), "html", null, true);
        echo "',
        onDeleteItem: function()
        {
            // Hide the Entries tab if that was the last one
            if (adminTable.totalItems == 0)
            {
                \$('#nav-entries').remove();
            }
        }
    });
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_actionButton($context, array $blocks = array())
    {
        // line 9
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/sections/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New section", "app"), "html", null, true);
        echo "</a>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div id=\"nosections\"";
        if ((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new Twig_Error_Runtime('Variable "sections" does not exist.', 14, $this->source); })())) {
            echo " class=\"hidden\"";
        }
        echo ">
        <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No sections exist yet.", "app"), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 18
        if (twig_length_filter($this->env, (isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new Twig_Error_Runtime('Variable "sections" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "        <table id=\"sections\" class=\"data fullwidth collapsible\">
            <thead>
                <th scope=\"col\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Type", "app"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Types", "app"), "html", null, true);
            echo "</th>
                <td class=\"thin\"></td>
            </thead>
            <tbody>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new Twig_Error_Runtime('Variable "sections" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 29
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "name", array()), "site"), "html", null, true);
                echo "\">
                        <th scope=\"row\" data-title=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "name", array()), "site"), "html", null, true);
                echo "</a></th>
                        <td data-title=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "handle", array()), "html", null, true);
                echo "</code></td>
                        <td data-title=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Type", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(twig_title_string_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "type", array())), "app"), "html", null, true);
                echo "</td>
                        <td data-title=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Types", "app"), "html", null, true);
                echo "\">
                            ";
                // line 34
                if (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "type", array()) == "single") && (twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "getEntryTypes", array(), "method")) == 1))) {
                    // line 35
                    echo "                                ";
                    $context["entryType"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "getEntryTypes", array(), "method"), 0, array(), "array");
                    // line 36
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 36, $this->source); })()), "getCpEditUrl", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Edit entry type", "app"), "html", null, true);
                    echo "</a>
                            ";
                } else {
                    // line 38
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url((("settings/sections/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "id", array())) . "/entrytypes")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Edit entry types ({count})", "app", array("count" => twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "getEntryTypes", array(), "method")))), "html", null, true);
                    echo "</a>
                                <a class=\"menubtn\" title=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Types", "app"), "html", null, true);
                    echo "\"></a>
                                <div class=\"menu\">
                                    <ul>
                                        ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["section"], "getEntryTypes", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                        // line 43
                        echo "                                            <li><a href=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "getCpEditUrl", array(), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entryType"], "name", array()), "site"), "html", null, true);
                        echo "</a></li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                                    </ul>
                                </div>
                            ";
                }
                // line 48
                echo "                        </td>
                        <td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "settings/sections/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 52,  197 => 49,  194 => 48,  189 => 45,  178 => 43,  174 => 42,  168 => 39,  161 => 38,  153 => 36,  150 => 35,  148 => 34,  144 => 33,  138 => 32,  132 => 31,  124 => 30,  117 => 29,  113 => 28,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 19,  88 => 18,  82 => 15,  75 => 14,  72 => 13,  63 => 9,  60 => 8,  56 => 1,  42 => 63,  36 => 59,  34 => 58,  32 => 4,  30 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set title = \"Sections\"|t('app') %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}

{% block actionButton %}
    <a href=\"{{ url('settings/sections/new') }}\" class=\"btn submit add icon\">{{ \"New section\"|t('app') }}</a>
{% endblock %}


{% block content %}
    <div id=\"nosections\"{% if sections %} class=\"hidden\"{% endif %}>
        <p>{{ \"No sections exist yet.\"|t('app') }}</p>
    </div>

    {% if sections|length %}
        <table id=\"sections\" class=\"data fullwidth collapsible\">
            <thead>
                <th scope=\"col\">{{ \"Name\"|t('app') }}</th>
                <th scope=\"col\">{{ \"Handle\"|t('app') }}</th>
                <th scope=\"col\">{{ \"Type\"|t('app') }}</th>
                <th scope=\"col\">{{ \"Entry Types\"|t('app')}}</th>
                <td class=\"thin\"></td>
            </thead>
            <tbody>
                {% for section in sections %}
                    <tr data-id=\"{{ section.id }}\" data-name=\"{{ section.name|t('site') }}\">
                        <th scope=\"row\" data-title=\"{{ 'Name'|t('app') }}\"><a href=\"{{ url('settings/sections/' ~ section.id) }}\">{{ section.name|t('site') }}</a></th>
                        <td data-title=\"{{ 'Handle'|t('app') }}\"><code>{{ section.handle }}</code></td>
                        <td data-title=\"{{ 'Type'|t('app') }}\">{{ section.type|title|t('app') }}</td>
                        <td data-title=\"{{ 'Entry Types'|t('app') }}\">
                            {% if section.type == 'single' and section.getEntryTypes()|length == 1 %}
                                {% set entryType = section.getEntryTypes()[0] %}
                                <a href=\"{{ entryType.getCpEditUrl() }}\">{{ \"Edit entry type\"|t('app') }}</a>
                            {% else %}
                                <a href=\"{{ url('settings/sections/' ~ section.id ~ '/entrytypes') }}\">{{ \"Edit entry types ({count})\"|t('app', { count: section.getEntryTypes()|length }) }}</a>
                                <a class=\"menubtn\" title=\"{{ 'Entry Types'|t('app') }}\"></a>
                                <div class=\"menu\">
                                    <ul>
                                        {% for entryType in section.getEntryTypes() %}
                                            <li><a href=\"{{ entryType.getCpEditUrl() }}\">{{ entryType.name|t('site') }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% endif %}
                        </td>
                        <td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\" role=\"button\"></a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}


{% js %}
    var adminTable = new Craft.AdminTable({
        tableSelector: '#sections',
        noItemsSelector: '#nosections',
        deleteAction: 'sections/delete-section',
        confirmDeleteMessage: '{{ \"Are you sure you want to delete “{name}” and all its entries?\"|t('app') }}',
        onDeleteItem: function()
        {
            // Hide the Entries tab if that was the last one
            if (adminTable.totalItems == 0)
            {
                \$('#nav-entries').remove();
            }
        }
    });
{% endjs %}
", "settings/sections/_index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/sections/_index.html");
    }
}
