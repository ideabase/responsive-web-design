<?php

/* dashboard/_index */
class __TwigTemplate_82730a4874af202324e4a9f2f5cf7062a27a1576071420cc903219a73504f2cd extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "dashboard/_index", 1);
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
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Dashboard", "app");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_actionButton($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"buttons secondary-buttons\">
        <div class=\"newwidget btngroup\">
            <div id=\"newwidgetmenubtn\" class=\"btn submit menubtn add icon\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New widget", "app"), "html", null, true);
        echo "</div>
            <div class=\"menu newwidgetmenu\">
                <ul>
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgetTypes"]) || array_key_exists("widgetTypes", $context) ? $context["widgetTypes"] : (function () { throw new Twig_Error_Runtime('Variable "widgetTypes" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["info"]) {
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "selectable", array())) {
                // line 11
                echo "                        <li>
                            <a data-type=\"";
                // line 12
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "name", array()), "html", null, true);
                echo "\">
                                <span class=\"icon\">";
                // line 13
                echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "iconSvg", array());
                echo "</span>
                                ";
                // line 14
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "name", array()), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </ul>
            </div>
        </div>

        <div id=\"widgetManagerBtn\" class=\"btn settings icon submit\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
        echo "\"></div>
    </div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div id=\"dashboard-grid\" class=\"grid\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new Twig_Error_Runtime('Variable "widgets" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 30
            echo "            <div class=\"item\" data-colspan=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "colspan", array()), "html", null, true);
            echo "\">
                <div id=\"widget";
            // line 31
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "id", array()), "html", null, true);
            echo "\" class=\"widget ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "type", array())), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "id", array()), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "type", array()), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "title", array()), "html", null, true);
            echo "\">
                    <div class=\"front\">
                        <div class=\"pane\">
                            <div class=\"spinner body-loading\"></div>
                            <div class=\"settings icon hidden\"></div>
                            <h2>";
            // line 36
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "title", array()), "html", null, true);
            echo "</h2>
                            <div class=\"body\">
                                ";
            // line 38
            echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "bodyHtml", array());
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"back\">
                        <form class=\"pane\">
                            <input type=\"hidden\" name=\"widgetId\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "id", array()), "html", null, true);
            echo "\">
                            <h2>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("{type} Settings", "app", array("type" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["widget"], "name", array()))), "html", null, true);
            echo "</h2>
                            <div class=\"settings\"></div>
                            <hr>
                            <div class=\"buttons clearafter\">
                                <input type=\"submit\" class=\"btn submit\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
            echo "\">
                                <div class=\"btn\" role=\"button\">";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Cancel", "app"), "html", null, true);
            echo "</div>
                                <div class=\"spinner hidden\"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 58,  151 => 50,  147 => 49,  140 => 45,  136 => 44,  127 => 38,  122 => 36,  106 => 31,  101 => 30,  97 => 29,  94 => 28,  91 => 27,  84 => 22,  78 => 18,  67 => 14,  63 => 13,  57 => 12,  54 => 11,  49 => 10,  43 => 7,  39 => 5,  36 => 4,  32 => 1,  30 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set title = \"Dashboard\"|t('app') %}

{% block actionButton %}
    <div class=\"buttons secondary-buttons\">
        <div class=\"newwidget btngroup\">
            <div id=\"newwidgetmenubtn\" class=\"btn submit menubtn add icon\">{{ 'New widget'|t('app') }}</div>
            <div class=\"menu newwidgetmenu\">
                <ul>
                    {% for type, info in widgetTypes if info.selectable %}
                        <li>
                            <a data-type=\"{{ type }}\" data-name=\"{{ info.name }}\">
                                <span class=\"icon\">{{ info.iconSvg|raw }}</span>
                                {{ info.name }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        <div id=\"widgetManagerBtn\" class=\"btn settings icon submit\" title=\"{{ 'Settings'|t('app') }}\"></div>
    </div>
{% endblock %}


{% block content %}
    <div id=\"dashboard-grid\" class=\"grid\">
        {% for widget in widgets %}
            <div class=\"item\" data-colspan=\"{{ widget.colspan }}\">
                <div id=\"widget{{ widget.id }}\" class=\"widget {{ widget.type|lower }}\" data-id=\"{{ widget.id }}\" data-type=\"{{ widget.type }}\" data-title=\"{{ widget.title }}\">
                    <div class=\"front\">
                        <div class=\"pane\">
                            <div class=\"spinner body-loading\"></div>
                            <div class=\"settings icon hidden\"></div>
                            <h2>{{ widget.title }}</h2>
                            <div class=\"body\">
                                {{ widget.bodyHtml|raw }}
                            </div>
                        </div>
                    </div>
                    <div class=\"back\">
                        <form class=\"pane\">
                            <input type=\"hidden\" name=\"widgetId\" value=\"{{ widget.id }}\">
                            <h2>{{ \"{type} Settings\"|t('app', { type: widget.name }) }}</h2>
                            <div class=\"settings\"></div>
                            <hr>
                            <div class=\"buttons clearafter\">
                                <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t('app') }}\">
                                <div class=\"btn\" role=\"button\">{{ 'Cancel'|t('app') }}</div>
                                <div class=\"spinner hidden\"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "dashboard/_index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/dashboard/_index.html");
    }
}
