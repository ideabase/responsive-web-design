<?php

/* settings/assets/volumes/_index */
class __TwigTemplate_f094933091fe1a0e9a1c6de64e0a334008fb22a9f39a251c266e9ec5ace45733 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("settings/assets/_layout", "settings/assets/volumes/_index", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "settings/assets/_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["selectedNavItem"] = "volumes";
        // line 47
        ob_start();
        // line 48
        echo "    var adminTable = new Craft.AdminTable({
        tableSelector: '#volumes',
        noItemsSelector: '#novolumes',
        sortable: true,
        reorderAction: 'volumes/reorder-volumes',
        deleteAction: 'volumes/delete-volume',
        onDeleteItem: function()
        {
            // Hide the Assets tab if that was the last one
            if (adminTable.totalItems == 0)
            {
                \$('#nav-assets').remove();
            }
        }
    });
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p id=\"novolumes\"";
        if (twig_length_filter($this->env, (isset($context["volumes"]) || array_key_exists("volumes", $context) ? $context["volumes"] : (function () { throw new Twig_Error_Runtime('Variable "volumes" does not exist.', 6, $this->source); })()))) {
            echo " class=\"hidden\"";
        }
        echo ">
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No volumes exist yet.", "app"), "html", null, true);
        echo "
    </p>

    ";
        // line 10
        if (twig_length_filter($this->env, (isset($context["volumes"]) || array_key_exists("volumes", $context) ? $context["volumes"] : (function () { throw new Twig_Error_Runtime('Variable "volumes" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "        ";
            $context["sortable"] = (twig_length_filter($this->env, (isset($context["volumes"]) || array_key_exists("volumes", $context) ? $context["volumes"] : (function () { throw new Twig_Error_Runtime('Variable "volumes" does not exist.', 11, $this->source); })())) > 1);
            // line 12
            echo "
        <table id=\"volumes\" class=\"data fullwidth collapsible\">
            <thead>
                <th scope=\"col\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Type", "app"), "html", null, true);
            echo "</th>
                ";
            // line 18
            if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new Twig_Error_Runtime('Variable "sortable" does not exist.', 18, $this->source); })())) {
                echo "<td class=\"thin\"></td>";
            }
            // line 19
            echo "                <td class=\"thin\"></td>
            </thead>
            <tbody>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["volumes"]) || array_key_exists("volumes", $context) ? $context["volumes"] : (function () { throw new Twig_Error_Runtime('Variable "volumes" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["volume"]) {
                // line 23
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["volume"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["volume"], "name", array()), "site"), "html", null, true);
                echo "\">
                        <th scope=\"row\" data-title=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Name", "app"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/assets/volumes/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["volume"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["volume"], "name", array()), "site"), "html", null, true);
                echo "</a></th>
                        <td scope=\"row\" data-title=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
                echo "\" class=\"code\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["volume"], "handle", array()), "html", null, true);
                echo "</td>
                        <td data-title=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Type", "app"), "html", null, true);
                echo "\">
                            ";
                // line 27
                if (call_user_func_array($this->env->getTest('missing')->getCallable(), array($context["volume"]))) {
                    // line 28
                    echo "                                <span class=\"error\">";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["volume"], "expectedType", array()), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 30
                    echo "                                ";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["volume"], "displayName", array(), "method"), "html", null, true);
                    echo "
                            ";
                }
                // line 32
                echo "                        </td>
                        ";
                // line 33
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new Twig_Error_Runtime('Variable "sortable" does not exist.', 33, $this->source); })())) {
                    echo "<td class=\"thin\"><a class=\"move icon\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                    echo "\" role=\"button\"></a></td>";
                }
                // line 34
                echo "                        <td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\" role=\"button\"></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['volume'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </tbody>
        </table>
    ";
        }
        // line 40
        echo "
    <div class=\"buttons\">
        <a class=\"btn submit add icon\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/assets/volumes/new"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New volume", "app"), "html", null, true);
        echo "</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "settings/assets/volumes/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  169 => 40,  164 => 37,  154 => 34,  148 => 33,  145 => 32,  139 => 30,  133 => 28,  131 => 27,  127 => 26,  121 => 25,  113 => 24,  106 => 23,  102 => 22,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  76 => 12,  73 => 11,  71 => 10,  65 => 7,  58 => 6,  55 => 5,  51 => 1,  33 => 48,  31 => 47,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"settings/assets/_layout\" %}
{% set selectedNavItem = 'volumes' %}


{% block content %}
    <p id=\"novolumes\"{% if volumes|length %} class=\"hidden\"{% endif %}>
        {{ \"No volumes exist yet.\"|t('app') }}
    </p>

    {% if volumes|length %}
        {% set sortable  = (volumes|length > 1) %}

        <table id=\"volumes\" class=\"data fullwidth collapsible\">
            <thead>
                <th scope=\"col\">{{ \"Name\"|t('app') }}</th>
                <th scope=\"col\">{{ \"Handle\"|t('app') }}</th>
                <th scope=\"col\">{{ \"Type\"|t('app') }}</th>
                {% if sortable %}<td class=\"thin\"></td>{% endif %}
                <td class=\"thin\"></td>
            </thead>
            <tbody>
                {% for volume in volumes %}
                    <tr data-id=\"{{ volume.id }}\" data-name=\"{{ volume.name|t('site') }}\">
                        <th scope=\"row\" data-title=\"{{ 'Name'|t('app') }}\"><a href=\"{{ url('settings/assets/volumes/' ~ volume.id) }}\">{{ volume.name|t('site') }}</a></th>
                        <td scope=\"row\" data-title=\"{{ 'Handle'|t('app') }}\" class=\"code\">{{ volume.handle }}</td>
                        <td data-title=\"{{ 'Type'|t('app') }}\">
                            {% if volume is missing %}
                                <span class=\"error\">{{ volume.expectedType }}</span>
                            {% else %}
                                {{ volume.displayName() }}
                            {% endif %}
                        </td>
                        {% if sortable %}<td class=\"thin\"><a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a></td>{% endif %}
                        <td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\" role=\"button\"></a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    <div class=\"buttons\">
        <a class=\"btn submit add icon\" href=\"{{ url('settings/assets/volumes/new') }}\">{{ \"New volume\"|t('app') }}</a>
    </div>
{% endblock %}


{% js %}
    var adminTable = new Craft.AdminTable({
        tableSelector: '#volumes',
        noItemsSelector: '#novolumes',
        sortable: true,
        reorderAction: 'volumes/reorder-volumes',
        deleteAction: 'volumes/delete-volume',
        onDeleteItem: function()
        {
            // Hide the Assets tab if that was the last one
            if (adminTable.totalItems == 0)
            {
                \$('#nav-assets').remove();
            }
        }
    });
{% endjs %}
", "settings/assets/volumes/_index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/assets/volumes/_index.html");
    }
}
