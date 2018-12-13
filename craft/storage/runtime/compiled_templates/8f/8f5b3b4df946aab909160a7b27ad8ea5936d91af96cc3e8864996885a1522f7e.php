<?php

/* settings/sites/index */
class __TwigTemplate_78b085153856548f782eff2dc511f7025ff5a2f8497e813f8783654ec5e2f0a5 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sites/index", 1);
        $this->blocks = array(
            'actionButton' => array($this, 'block_actionButton'),
            'sidebar' => array($this, 'block_sidebar'),
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
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Sites", "app");
        // line 4
        $context["multiple"] = (twig_length_filter($this->env, (isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new Twig_Error_Runtime('Variable "sites" does not exist.', 4, $this->source); })())) > 1);
        // line 5
        $context["canSort"] = ((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 5, $this->source); })()) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 5, $this->source); })()));
        // line 82
        ob_start();
        // line 83
        echo "    new Craft.SitesAdmin();

    new Craft.SiteAdminTable({
        tableSelector: '#sites',
        minItems: 1,
        sortable: true,
        reorderAction: 'sites/reorder-sites',
        deleteAction: 'sites/delete-site',
    });
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 4);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_actionButton($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["newSiteUrl"] = craft\helpers\UrlHelper::url("settings/sites/new", (((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 9, $this->source); })())) ? (array("groupId" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 9, $this->source); })()), "id", array()))) : (null)));
        // line 10
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["newSiteUrl"]) || array_key_exists("newSiteUrl", $context) ? $context["newSiteUrl"] : (function () { throw new Twig_Error_Runtime('Variable "newSiteUrl" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New site", "app"), "html", null, true);
        echo "</a>
";
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "    <nav>
        <ul id=\"groups\">
            <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/sites"), "html", null, true);
        echo "\"";
        if ( !(isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 17, $this->source); })())) {
            echo " class=\"sel\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All Sites", "app"), "html", null, true);
        echo "</a></li>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allGroups"]) || array_key_exists("allGroups", $context) ? $context["allGroups"] : (function () { throw new Twig_Error_Runtime('Variable "allGroups" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 19
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/sites", array("groupId" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["g"], "id", array()))), "html", null, true);
            echo "\"";
            if (((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 19, $this->source); })()) && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["g"], "id", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 19, $this->source); })()), "id", array())))) {
                echo " class=\"sel\"";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["g"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["g"], "name", array()), "site"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
    </nav>

    <div class=\"buttons\">
        <div id=\"newgroupbtn\" class=\"btn add icon\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New group", "app"), "html", null, true);
        echo "</div>

        ";
        // line 27
        if ((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "            <div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"";
            echo "Settings";
            echo "\"></div>
            <div class=\"menu\">
                <ul>
                    <li><a data-action=\"rename\" role=\"button\">";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Rename selected group", "app"), "html", null, true);
            echo "</a></li>
                    <li><a data-action=\"delete\" role=\"button\"";
            // line 32
            if (twig_length_filter($this->env, (isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new Twig_Error_Runtime('Variable "sites" does not exist.', 32, $this->source); })()))) {
                echo " class=\"disabled\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("You can only delete groups that have no sites.", "app"), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete selected group", "app"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>
        ";
        }
        // line 36
        echo "    </div>
";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "    <table id=\"sites\" class=\"data fullwidth collapsible\">
        <thead>
            <th scope=\"col\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Language", "app"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Primary", "app"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Base URL", "app"), "html", null, true);
        echo "</th>
            ";
        // line 48
        if ( !(isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "                <th scope=\"col\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Group", "app"), "html", null, true);
            echo "</th>
            ";
        }
        // line 51
        echo "            ";
        if ((isset($context["canSort"]) || array_key_exists("canSort", $context) ? $context["canSort"] : (function () { throw new Twig_Error_Runtime('Variable "canSort" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "                <td class=\"thin\"></td>
            ";
        }
        // line 54
        echo "            ";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "                <td class=\"thin\"></td>
            ";
        }
        // line 57
        echo "        </thead>
        <tbody>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new Twig_Error_Runtime('Variable "sites" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 60
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "name", array()), "site"), "html", null, true);
            echo "\">
                    <th scope=\"row\" data-title=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/sites/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "name", array()), "site"), "html", null, true);
            echo "</a></th>
                    <td data-title=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "handle", array()), "html", null, true);
            echo "</code></td>
                    <td data-title=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Language", "app"), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "language", array()), "html", null, true);
            echo "</code></td>
                    <td data-title=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Primary", "app"), "html", null, true);
            echo "\">";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "primary", array())) {
                echo "<div data-icon=\"check\"></div>";
            }
            echo "</td>
                    <td data-title=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Base URL", "app"), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "baseUrl", array()), "html", null, true);
            echo "</code></td>
                    ";
            // line 66
            if ( !(isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 66, $this->source); })())) {
                // line 67
                echo "                        <td data-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Group", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "group", array()), "name", array()), "site"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 69
            echo "                    ";
            if ((isset($context["canSort"]) || array_key_exists("canSort", $context) ? $context["canSort"] : (function () { throw new Twig_Error_Runtime('Variable "canSort" does not exist.', 69, $this->source); })())) {
                // line 70
                echo "                        <td class=\"thin\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                    ";
            }
            // line 72
            echo "                    ";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 72, $this->source); })())) {
                // line 73
                echo "                        <td class=\"thin\"><a class=\"delete icon";
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["site"], "primary", array())) {
                    echo " disabled";
                }
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                    ";
            }
            // line 75
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "settings/sites/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 77,  280 => 75,  270 => 73,  267 => 72,  261 => 70,  258 => 69,  250 => 67,  248 => 66,  242 => 65,  234 => 64,  228 => 63,  222 => 62,  214 => 61,  207 => 60,  203 => 59,  199 => 57,  195 => 55,  192 => 54,  188 => 52,  185 => 51,  179 => 49,  177 => 48,  173 => 47,  169 => 46,  165 => 45,  161 => 44,  157 => 43,  153 => 41,  150 => 40,  145 => 36,  132 => 32,  128 => 31,  121 => 28,  119 => 27,  114 => 25,  108 => 21,  91 => 19,  87 => 18,  77 => 17,  73 => 15,  70 => 14,  61 => 10,  58 => 9,  55 => 8,  51 => 1,  39 => 83,  37 => 82,  35 => 5,  33 => 4,  31 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set title = \"Sites\"|t('app') %}

{% set multiple = (sites|length > 1) %}
{% set canSort = group and multiple %}


{% block actionButton %}
    {% set newSiteUrl = url('settings/sites/new', (group ? { groupId: group.id } : null)) %}
    <a href=\"{{ newSiteUrl }}\" class=\"btn submit add icon\">{{ \"New site\"|t('app') }}</a>
{% endblock %}


{% block sidebar %}
    <nav>
        <ul id=\"groups\">
            <li><a href=\"{{ url('settings/sites') }}\"{% if not group %} class=\"sel\"{% endif %}>{{ \"All Sites\"|t('app') }}</a></li>
            {% for g in allGroups %}
                <li><a href=\"{{ url('settings/sites', {groupId: g.id}) }}\"{% if group and g.id == group.id %} class=\"sel\"{% endif %} data-id=\"{{ g.id }}\">{{ g.name|t('site') }}</a></li>
            {% endfor %}
        </ul>
    </nav>

    <div class=\"buttons\">
        <div id=\"newgroupbtn\" class=\"btn add icon\">{{ \"New group\"|t('app') }}</div>

        {% if group %}
            <div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"{{ 'Settings' }}\"></div>
            <div class=\"menu\">
                <ul>
                    <li><a data-action=\"rename\" role=\"button\">{{ \"Rename selected group\"|t('app') }}</a></li>
                    <li><a data-action=\"delete\" role=\"button\"{% if sites|length %} class=\"disabled\" title=\"{{ 'You can only delete groups that have no sites.'|t('app') }}\"{% endif %}>{{ \"Delete selected group\"|t('app') }}</a></li>
                </ul>
            </div>
        {% endif %}
    </div>
{% endblock %}


{% block content %}
    <table id=\"sites\" class=\"data fullwidth collapsible\">
        <thead>
            <th scope=\"col\">{{ \"Name\"|t('app') }}</th>
            <th scope=\"col\">{{ \"Handle\"|t('app') }}</th>
            <th scope=\"col\">{{ \"Language\"|t('app') }}</th>
            <th scope=\"col\">{{ \"Primary\"|t('app') }}</th>
            <th scope=\"col\">{{ \"Base URL\"|t('app') }}</th>
            {% if not group %}
                <th scope=\"col\">{{ \"Group\"|t('app') }}</th>
            {% endif %}
            {% if canSort %}
                <td class=\"thin\"></td>
            {% endif %}
            {% if multiple %}
                <td class=\"thin\"></td>
            {% endif %}
        </thead>
        <tbody>
            {% for site in sites %}
                <tr data-id=\"{{ site.id }}\" data-name=\"{{ site.name|t('site') }}\">
                    <th scope=\"row\" data-title=\"{{ 'Name'|t('app') }}\"><a href=\"{{ url('settings/sites/' ~ site.id) }}\">{{ site.name|t('site') }}</a></th>
                    <td data-title=\"{{ 'Handle'|t('app') }}\"><code>{{ site.handle }}</code></td>
                    <td data-title=\"{{ 'Language'|t('app') }}\"><code>{{ site.language }}</code></td>
                    <td data-title=\"{{ 'Primary'|t('app') }}\">{% if site.primary %}<div data-icon=\"check\"></div>{% endif %}</td>
                    <td data-title=\"{{ 'Base URL'|t('app') }}\"><code>{{ site.baseUrl }}</code></td>
                    {% if not group %}
                        <td data-title=\"{{ 'Group'|t('app') }}\">{{ site.group.name|t('site') }}</td>
                    {% endif %}
                    {% if canSort %}
                        <td class=\"thin\"><a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a></td>
                    {% endif %}
                    {% if multiple %}
                        <td class=\"thin\"><a class=\"delete icon{% if site.primary %} disabled{% endif %}\" title=\"{{ 'Delete'|t('app') }}\" role=\"button\"></a></td>
                    {% endif %}
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}


{% js on ready %}
    new Craft.SitesAdmin();

    new Craft.SiteAdminTable({
        tableSelector: '#sites',
        minItems: 1,
        sortable: true,
        reorderAction: 'sites/reorder-sites',
        deleteAction: 'sites/delete-site',
    });
{% endjs %}
", "settings/sites/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/sites/index.html");
    }
}
