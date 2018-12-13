<?php

/* settings/categories/index */
class __TwigTemplate_f5ce55c6107c601e67ee6dfbcba37b4f917545144aa42b76e8d0dc66469d0137 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/categories/index", 1);
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
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Category Groups", "app");
        // line 8
        $context["crumbs"] = array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")));
        // line 41
        ob_start();
        // line 42
        echo "    new Craft.AdminTable({
        tableSelector: '#categorygroups',
        noItemsSelector: '#nocategorygroups',
        deleteAction: 'categories/delete-category-group',
        confirmDeleteMessage: '";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Are you sure you want to delete “{name}” and all its categories?", "app"), "html", null, true);
        echo "',
    });
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_actionButton($context, array $blocks = array())
    {
        // line 5
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/categories/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New category group", "app"), "html", null, true);
        echo "</a>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div id=\"nocategorygroups\"";
        if (twig_length_filter($this->env, (isset($context["categoryGroups"]) || array_key_exists("categoryGroups", $context) ? $context["categoryGroups"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroups" does not exist.', 14, $this->source); })()))) {
            echo " class=\"hidden\"";
        }
        echo ">
        <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No category groups exist yet.", "app"), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 18
        if (twig_length_filter($this->env, (isset($context["categoryGroups"]) || array_key_exists("categoryGroups", $context) ? $context["categoryGroups"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroups" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "        <table id=\"categorygroups\" class=\"data collapsible\">
            <thead>
                <th scope=\"col\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
            echo "</th>
                <td></td>
                <td class=\"thin\"></td>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryGroups"]) || array_key_exists("categoryGroups", $context) ? $context["categoryGroups"] : (function () { throw new Twig_Error_Runtime('Variable "categoryGroups" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 28
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "name", array()), "site"), "html", null, true);
                echo "\">
                        <th scope=\"row\" data-title=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/categories/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "name", array()), "site"), "html", null, true);
                echo "</a></th>
                        <td data-title=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "handle", array()), "html", null, true);
                echo "</code></td>
                        <td><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("categories/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["group"], "handle", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Manage categories", "app"), "html", null, true);
                echo "</a></td>
                        <td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tbody>
        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "settings/categories/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 35,  129 => 32,  123 => 31,  117 => 30,  109 => 29,  102 => 28,  98 => 27,  90 => 22,  86 => 21,  82 => 19,  80 => 18,  74 => 15,  67 => 14,  64 => 13,  55 => 5,  52 => 4,  48 => 1,  42 => 46,  36 => 42,  34 => 41,  32 => 8,  30 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set title = \"Category Groups\"|t('app') %}

{% block actionButton %}
    <a href=\"{{ url('settings/categories/new') }}\" class=\"btn submit add icon\">{{ \"New category group\"|t('app') }}</a>
{% endblock %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}


{% block content %}
    <div id=\"nocategorygroups\"{% if categoryGroups|length %} class=\"hidden\"{% endif %}>
        <p>{{ \"No category groups exist yet.\"|t('app') }}</p>
    </div>

    {% if categoryGroups|length %}
        <table id=\"categorygroups\" class=\"data collapsible\">
            <thead>
                <th scope=\"col\">{{ \"Name\"|t('app') }}</th>
                <th scope=\"col\">{{ \"Handle\"|t('app') }}</th>
                <td></td>
                <td class=\"thin\"></td>
            </thead>
            <tbody>
                {% for group in categoryGroups %}
                    <tr data-id=\"{{ group.id }}\" data-name=\"{{ group.name|t('site') }}\">
                        <th scope=\"row\" data-title=\"{{ 'Name'|t('app') }}\"><a href=\"{{ url('settings/categories/' ~ group.id) }}\">{{ group.name|t('site') }}</a></th>
                        <td data-title=\"{{ 'Handle'|t('app') }}\"><code>{{ group.handle }}</code></td>
                        <td><a href=\"{{ url('categories/'~group.handle) }}\">{{ \"Manage categories\"|t('app') }}</a></td>
                        <td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\" role=\"button\"></a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}


{% js %}
    new Craft.AdminTable({
        tableSelector: '#categorygroups',
        noItemsSelector: '#nocategorygroups',
        deleteAction: 'categories/delete-category-group',
        confirmDeleteMessage: '{{ \"Are you sure you want to delete “{name}” and all its categories?\"|t('app') }}',
    });
{% endjs %}
", "settings/categories/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/categories/index.html");
    }
}
