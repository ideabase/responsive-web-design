<?php

/* settings/fields */
class __TwigTemplate_ba0cc2070d8130ea2b2ed8f2dedf3f639c17da2111abb8885a81b4f67414d193 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/fields", 3);
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
        // line 1
        Craft::$app->controller->requireAdmin();
        // line 4
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Fields", "app");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 6, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\fields\\FieldsAsset"), "method");
        // line 8
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 8, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "What do you want to name the group?", 1 => "Could not create the group:", 2 => "Could not create the group:", 3 => "Are you sure you want to delete this group and all its fields?", 4 => "Could not delete the group.", 5 => "Group renamed.")), "method");
        // line 17
        $context["crumbs"] = array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")));
        // line 22
        $context["groups"] = craft\helpers\ArrayHelper::index(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 22, $this->source); })()), "app", array()), "fields", array()), "getAllGroups", array(), "method"), "id");
        // line 24
        if (array_key_exists("groupId", $context)) {
            // line 25
            if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["groups"] ?? null), (isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new Twig_Error_Runtime('Variable "groupId" does not exist.', 25, $this->source); })()), array(), "array", true, true)) {
                // line 26
                throw new yii\web\HttpException(404);
            }
            // line 29
            $context["fields"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 29, $this->source); })()), (isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new Twig_Error_Runtime('Variable "groupId" does not exist.', 29, $this->source); })()), array(), "array"), "getFields", array(), "method");
        } else {
            // line 31
            $context["fields"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 31, $this->source); })()), "app", array()), "fields", array()), "getAllFields", array(), "method");
        }
        // line 111
        ob_start();
        // line 112
        echo "    new Craft.AdminTable({
        tableSelector: '#fields',
        noItemsSelector: '#nofields',
        deleteAction: 'fields/delete-field'
    });
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_actionButton($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if ((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "        ";
            $context["newFieldUrl"] = craft\helpers\UrlHelper::url("settings/fields/new", ((array_key_exists("groupId", $context)) ? (array("groupId" => (isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new Twig_Error_Runtime('Variable "groupId" does not exist.', 37, $this->source); })()))) : (null)));
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["newFieldUrl"]) || array_key_exists("newFieldUrl", $context) ? $context["newFieldUrl"] : (function () { throw new Twig_Error_Runtime('Variable "newFieldUrl" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "\" class=\"submit btn add icon\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New field", "app"), "html", null, true);
            echo "</a>
    ";
        }
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        // line 44
        echo "    <nav>
        <ul id=\"groups\">
            <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/fields"), "html", null, true);
        echo "\"";
        if ( !array_key_exists("groupId", $context)) {
            echo " class=\"sel\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All Fields", "app"), "html", null, true);
        echo "</a></li>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 48
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/fields/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "id", array()))), "html", null, true);
            echo "\"";
            if ((array_key_exists("groupId", $context) && (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "id", array()) == (isset($context["groupId"]) || array_key_exists("groupId", $context) ? $context["groupId"] : (function () { throw new Twig_Error_Runtime('Variable "groupId" does not exist.', 48, $this->source); })())))) {
                echo " class=\"sel\"";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "name", array()), "site"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </ul>
    </nav>

    <div class=\"buttons\">
        <div id=\"newgroupbtn\" class=\"btn add icon\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New group", "app"), "html", null, true);
        echo "</div>

        ";
        // line 56
        if (array_key_exists("groupId", $context)) {
            // line 57
            echo "            <div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"";
            echo "Settings";
            echo "\"></div>
            <div class=\"menu\">
                <ul>
                    <li><a data-action=\"rename\" role=\"button\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Rename selected group", "app"), "html", null, true);
            echo "</a></li>
                    <li><a data-action=\"delete\" role=\"button\">";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete selected group", "app"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>
        ";
        }
        // line 65
        echo "    </div>
";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        // line 70
        echo "    <p id=\"nofields\"";
        if ((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 70, $this->source); })())) {
            echo " class=\"hidden\"";
        }
        echo ">
        ";
        // line 71
        if (array_key_exists("groupId", $context)) {
            // line 72
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("This group doesn’t have any fields yet.", "app"), "html", null, true);
            echo "
        ";
        } else {
            // line 74
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No fields exist yet.", "app"), "html", null, true);
            echo "
        ";
        }
        // line 76
        echo "    </p>

    ";
        // line 78
        if ((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "        <table id=\"fields\" class=\"data fullwidth collapsible\">
            <thead>
                <th scope=\"col\">";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Type", "app"), "html", null, true);
            echo "</th>
                ";
            // line 84
            if ( !array_key_exists("groupId", $context)) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Group", "app"), "html", null, true);
                echo "</th>";
            }
            // line 85
            echo "                <td class=\"thin\"></td>
            </thead>
            <tbody>
                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 88, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 89
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()), "site"), "html", null, true);
                echo "\">
                        <th scope=\"row\" data-title=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/fields/edit/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()), "site"), "html", null, true);
                echo "</a>";
                // line 91
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "required", array())) {
                    echo " <span class=\"required\"></span>";
                }
                // line 92
                echo "</th>
                        <td data-title=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "handle", array()), "html", null, true);
                echo "</code></td>
                        <td data-title=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Type", "app"), "html", null, true);
                echo "\">
                            ";
                // line 95
                if (call_user_func_array($this->env->getTest('missing')->getCallable(), array($context["field"]))) {
                    // line 96
                    echo "                                <span class=\"error\">";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "expectedType", array()), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 98
                    echo "                                ";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "displayName", array(), "method"), "html", null, true);
                    echo "
                            ";
                }
                // line 100
                echo "                        </td>
                        ";
                // line 101
                if ( !array_key_exists("groupId", $context)) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Group", "app"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["field"], "group", array()), "name", array()), "site"), "html", null, true);
                    echo "</td>";
                }
                // line 102
                echo "                        <td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            </tbody>
        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "settings/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 105,  280 => 102,  272 => 101,  269 => 100,  263 => 98,  257 => 96,  255 => 95,  251 => 94,  245 => 93,  242 => 92,  238 => 91,  231 => 90,  224 => 89,  220 => 88,  215 => 85,  209 => 84,  205 => 83,  201 => 82,  197 => 81,  193 => 79,  191 => 78,  187 => 76,  181 => 74,  175 => 72,  173 => 71,  166 => 70,  163 => 69,  158 => 65,  151 => 61,  147 => 60,  140 => 57,  138 => 56,  133 => 54,  127 => 50,  110 => 48,  106 => 47,  96 => 46,  92 => 44,  89 => 43,  79 => 38,  76 => 37,  73 => 36,  70 => 35,  66 => 3,  58 => 112,  56 => 111,  53 => 31,  50 => 29,  47 => 26,  45 => 25,  43 => 24,  41 => 22,  39 => 17,  37 => 8,  35 => 6,  33 => 4,  31 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Fields\"|t('app') %}

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\fields\\\\FieldsAsset\") %}

{% do view.registerTranslations('app', [
    \"What do you want to name the group?\",
    \"Could not create the group:\",
    \"Could not create the group:\",
    \"Are you sure you want to delete this group and all its fields?\",
    \"Could not delete the group.\",
    \"Group renamed.\",
]) %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}


{% set groups = craft.app.fields.getAllGroups()|index('id') %}

{% if groupId is defined %}
    {% if groups[groupId] is not defined %}
        {% exit 404 %}
    {% endif %}

    {% set fields = groups[groupId].getFields() %}
{% else %}
    {% set fields = craft.app.fields.getAllFields() %}
{% endif %}


{% block actionButton %}
    {% if groups %}
        {% set newFieldUrl = url('settings/fields/new', (groupId is defined ? { groupId: groupId } : null)) %}
        <a href=\"{{ newFieldUrl }}\" class=\"submit btn add icon\">{{ \"New field\"|t('app') }}</a>
    {% endif %}
{% endblock %}


{% block sidebar %}
    <nav>
        <ul id=\"groups\">
            <li><a href=\"{{ url('settings/fields') }}\"{% if groupId is not defined %} class=\"sel\"{% endif %}>{{ \"All Fields\"|t('app') }}</a></li>
            {% for group in groups %}
                <li><a href=\"{{ url('settings/fields/'~group.id) }}\"{% if groupId is defined and group.id == groupId %} class=\"sel\"{% endif %} data-id=\"{{ group.id }}\">{{ group.name|t('site') }}</a></li>
            {% endfor %}
        </ul>
    </nav>

    <div class=\"buttons\">
        <div id=\"newgroupbtn\" class=\"btn add icon\">{{ \"New group\"|t('app') }}</div>

        {% if groupId is defined %}
            <div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"{{ 'Settings' }}\"></div>
            <div class=\"menu\">
                <ul>
                    <li><a data-action=\"rename\" role=\"button\">{{ \"Rename selected group\"|t('app') }}</a></li>
                    <li><a data-action=\"delete\" role=\"button\">{{ \"Delete selected group\"|t('app') }}</a></li>
                </ul>
            </div>
        {% endif %}
    </div>
{% endblock %}


{% block content %}
    <p id=\"nofields\"{% if fields %} class=\"hidden\"{% endif %}>
        {% if groupId is defined %}
            {{ \"This group doesn’t have any fields yet.\"|t('app') }}
        {% else %}
            {{ \"No fields exist yet.\"|t('app') }}
        {% endif %}
    </p>

    {% if fields %}
        <table id=\"fields\" class=\"data fullwidth collapsible\">
            <thead>
                <th scope=\"col\">{{ \"Name\"|t('app') }}</th>
                <th scope=\"col\">{{ \"Handle\"|t('app') }}</th>
                <th scope=\"col\">{{ \"Type\"|t('app') }}</th>
                {% if groupId is not defined %}<th scope=\"col\">{{ \"Group\"|t('app') }}</th>{% endif %}
                <td class=\"thin\"></td>
            </thead>
            <tbody>
                {% for field in fields %}
                    <tr data-id=\"{{ field.id }}\" data-name=\"{{ field.name|t('site') }}\">
                        <th scope=\"row\" data-title=\"{{ 'Name'|t('app') }}\"><a href=\"{{ url('settings/fields/edit/' ~ field.id) }}\">{{ field.name|t('site') }}</a>
                            {%- if field.required %} <span class=\"required\"></span>{% endif -%}
                        </th>
                        <td data-title=\"{{ 'Handle'|t('app') }}\"><code>{{ field.handle }}</code></td>
                        <td data-title=\"{{ 'Type'|t('app') }}\">
                            {% if field is missing %}
                                <span class=\"error\">{{ field.expectedType }}</span>
                            {% else %}
                                {{ field.displayName() }}
                            {% endif %}
                        </td>
                        {% if groupId is not defined %}<td data-title=\"{{ 'Group'|t('app') }}\">{{ field.group.name|t('site') }}</td>{% endif %}
                        <td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\" role=\"button\"></a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}


{% js %}
    new Craft.AdminTable({
        tableSelector: '#fields',
        noItemsSelector: '#nofields',
        deleteAction: 'fields/delete-field'
    });
{% endjs %}
", "settings/fields", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/fields/index.html");
    }
}
