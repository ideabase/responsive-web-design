<?php

/* globals/_edit */
class __TwigTemplate_a2bd2f9c258021286e2f17f44fc54c323e188e9c896ed4652307338e071b47e4 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "globals/_edit", 1);
        $this->blocks = array(
            'contextMenu' => array($this, 'block_contextMenu'),
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
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 2, $this->source); })()), "name", array()), "site");
        // line 3
        $context["fullPageForm"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_contextMenu($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 7, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
            // line 8
            echo "        ";
            $this->loadTemplate("_elements/sitemenu", "globals/_edit", 8)->display(array_merge($context, array("selectedSiteId" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 9
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 9, $this->source); })()), "siteId", array()), "urlFormat" => ("globals/{handle}/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 10
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 10, $this->source); })()), "handle", array())))));
            // line 12
            echo "    ";
        }
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
        // line 17
        echo "    <nav>
        <ul>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editableGlobalSets"]) || array_key_exists("editableGlobalSets", $context) ? $context["editableGlobalSets"] : (function () { throw new Twig_Error_Runtime('Variable "editableGlobalSets" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["theGlobalSet"]) {
            // line 20
            echo "                <li><a";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["theGlobalSet"], "handle", array()) == craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 20, $this->source); })()), "handle", array()))) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["theGlobalSet"], "getCpEditUrl", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["theGlobalSet"], "name", array()), "site"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theGlobalSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </ul>
    </nav>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    <input type=\"hidden\" name=\"action\" value=\"globals/save-content\">
    <input type=\"hidden\" name=\"setId\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 29, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"siteId\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 30, $this->source); })()), "siteId", array()), "html", null, true);
        echo "\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "

    ";
        // line 33
        if (twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 33, $this->source); })()), "getFieldLayout", array(), "method"), "getFields", array(), "method"))) {
            // line 34
            echo "        <div>
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 35, $this->source); })()), "getFieldLayout", array(), "method"), "getTabs", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 36
                echo "                <div id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "getHtmlId", array(), "method"), "html", null, true);
                echo "\"";
                if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " class=\"hidden\"";
                }
                echo ">
                    ";
                // line 37
                $this->loadTemplate("_includes/fields", "globals/_edit", 37)->display(array("fields" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 38
$context["tab"], "getFields", array(), "method"), "element" =>                 // line 39
(isset($context["globalSet"]) || array_key_exists("globalSet", $context) ? $context["globalSet"] : (function () { throw new Twig_Error_Runtime('Variable "globalSet" does not exist.', 39, $this->source); })())));
                // line 41
                echo "                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </div>
    ";
        } else {
            // line 45
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("This global set doesn’t have any fields assigned to it in its field layout.", "app"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "globals/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 45,  156 => 43,  141 => 41,  139 => 39,  138 => 38,  137 => 37,  128 => 36,  111 => 35,  108 => 34,  106 => 33,  101 => 31,  97 => 30,  93 => 29,  90 => 28,  87 => 27,  81 => 22,  66 => 20,  62 => 19,  58 => 17,  55 => 16,  50 => 12,  48 => 10,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  35 => 1,  33 => 3,  31 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set title = globalSet.name|t('site') %}
{% set fullPageForm = true %}


{% block contextMenu %}
    {% if craft.app.getIsMultiSite() %}
        {% include \"_elements/sitemenu\" with {
            selectedSiteId: globalSet.siteId,
            urlFormat: \"globals/{handle}/#{globalSet.handle}\"
        } %}
    {% endif %}
{% endblock %}


{% block sidebar %}
    <nav>
        <ul>
            {% for theGlobalSet in editableGlobalSets %}
                <li><a{% if theGlobalSet.handle == globalSet.handle %} class=\"sel\"{% endif %} href=\"{{ theGlobalSet.getCpEditUrl() }}\">{{ theGlobalSet.name|t('site') }}</a></li>
            {% endfor %}
        </ul>
    </nav>
{% endblock %}


{% block content %}
    <input type=\"hidden\" name=\"action\" value=\"globals/save-content\">
    <input type=\"hidden\" name=\"setId\" value=\"{{ globalSet.id }}\">
    <input type=\"hidden\" name=\"siteId\" value=\"{{ globalSet.siteId }}\">
    {{ csrfInput() }}

    {% if globalSet.getFieldLayout().getFields() | length %}
        <div>
            {% for tab in globalSet.getFieldLayout().getTabs() %}
                <div id=\"{{ tab.getHtmlId() }}\"{% if not loop.first %} class=\"hidden\"{% endif %}>
                    {% include \"_includes/fields\" with {
                        fields:  tab.getFields(),
                        element: globalSet
                    } only %}
                </div>
            {% endfor %}
        </div>
    {% else %}
        {{ \"This global set doesn’t have any fields assigned to it in its field layout.\"|t('app') }}
    {% endif %}
{% endblock %}
", "globals/_edit", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/globals/_edit.html");
    }
}
