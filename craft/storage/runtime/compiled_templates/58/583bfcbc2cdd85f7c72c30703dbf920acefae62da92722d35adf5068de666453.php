<?php

/* settings/globals */
class __TwigTemplate_e9f5e8bccbc40d2af2cdba475f8219946a3bdac4601b375654ee30bea9a9fef0 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/globals", 3);
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
        // line 1
        Craft::$app->controller->requireAdmin();
        // line 4
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Globals", "app");
        // line 10
        $context["crumbs"] = array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")));
        // line 15
        $context["globalSets"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 15, $this->source); })()), "app", array()), "globals", array()), "getAllSets", array(), "method");
        // line 46
        ob_start();
        // line 47
        echo "    var adminTable = new Craft.AdminTable({
        tableSelector: '#sets',
        noItemsSelector: '#nosets',
        deleteAction: 'globals/delete-set',
        onDeleteItem: function()
        {
            // Hide the Globals tab if that was the last one
            if (adminTable.totalItems == 0)
            {
                \$('#nav-globals').remove();
            }
        }
    });
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_actionButton($context, array $blocks = array())
    {
        // line 7
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("settings/globals/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New global set", "app"), "html", null, true);
        echo "</a>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"field\">
        <p id=\"nosets\"";
        // line 20
        if ((isset($context["globalSets"]) || array_key_exists("globalSets", $context) ? $context["globalSets"] : (function () { throw new Twig_Error_Runtime('Variable "globalSets" does not exist.', 20, $this->source); })())) {
            echo " class=\"hidden\"";
        }
        echo ">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No global sets exist yet.", "app"), "html", null, true);
        echo "
        </p>

        ";
        // line 24
        if ((isset($context["globalSets"]) || array_key_exists("globalSets", $context) ? $context["globalSets"] : (function () { throw new Twig_Error_Runtime('Variable "globalSets" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "            <table id=\"sets\" class=\"data fullwidth collapsible\">
                <thead>
                    <th scope=\"col\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Global Set Name", "app"), "html", null, true);
            echo "</th>
                    <th scope=\"col\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
            echo "</th>
                    <td class=\"thin\"></td>
                </thead>
                <tbody>
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["globalSets"]) || array_key_exists("globalSets", $context) ? $context["globalSets"] : (function () { throw new Twig_Error_Runtime('Variable "globalSets" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["globalSet"]) {
                // line 33
                echo "                        <tr data-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["globalSet"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["globalSet"], "name", array()), "html", null, true);
                echo "\">
                            <th scope=\"row\" data-title=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Global Set Name", "app"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/globals/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["globalSet"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["globalSet"], "name", array()), "site"), "html", null, true);
                echo "</a></th>
                            <td class=\"code\" data-title=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Handle", "app"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["globalSet"], "handle", array()), "html", null, true);
                echo "</td>
                            <td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                echo "\"></a></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['globalSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </tbody>
            </table>
        ";
        }
        // line 42
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "settings/globals";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  141 => 39,  132 => 36,  126 => 35,  118 => 34,  111 => 33,  107 => 32,  100 => 28,  96 => 27,  92 => 25,  90 => 24,  84 => 21,  78 => 20,  75 => 19,  72 => 18,  63 => 7,  60 => 6,  56 => 3,  40 => 47,  38 => 46,  36 => 15,  34 => 10,  32 => 4,  30 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Globals\"|t('app') %}

{% block actionButton %}
    <a href=\"{{ url('settings/globals/new') }}\" class=\"btn submit add icon\">{{ \"New global set\"|t('app') }}</a>
{% endblock %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}


{% set globalSets = craft.app.globals.getAllSets() %}


{% block content %}
    <div class=\"field\">
        <p id=\"nosets\"{% if globalSets %} class=\"hidden\"{% endif %}>
            {{ \"No global sets exist yet.\"|t('app') }}
        </p>

        {% if globalSets %}
            <table id=\"sets\" class=\"data fullwidth collapsible\">
                <thead>
                    <th scope=\"col\">{{ \"Global Set Name\"|t('app') }}</th>
                    <th scope=\"col\">{{ \"Handle\"|t('app') }}</th>
                    <td class=\"thin\"></td>
                </thead>
                <tbody>
                    {% for globalSet in globalSets %}
                        <tr data-id=\"{{ globalSet.id }}\" data-name=\"{{ globalSet.name }}\">
                            <th scope=\"row\" data-title=\"{{ 'Global Set Name'|t('app') }}\"><a href=\"{{ url('settings/globals/' ~ globalSet.id) }}\">{{ globalSet.name|t('site') }}</a></th>
                            <td class=\"code\" data-title=\"{{ 'Handle'|t('app') }}\">{{ globalSet.handle }}</td>
                            <td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t('app') }}\"></a></td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}


{% js %}
    var adminTable = new Craft.AdminTable({
        tableSelector: '#sets',
        noItemsSelector: '#nosets',
        deleteAction: 'globals/delete-set',
        onDeleteItem: function()
        {
            // Hide the Globals tab if that was the last one
            if (adminTable.totalItems == 0)
            {
                \$('#nav-globals').remove();
            }
        }
    });
{% endjs %}
", "settings/globals", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/globals/index.html");
    }
}
