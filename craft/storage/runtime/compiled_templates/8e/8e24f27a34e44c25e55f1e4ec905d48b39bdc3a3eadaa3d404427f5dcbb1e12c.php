<?php

/* _elements/indexcontainer */
class __TwigTemplate_d4c073ea55374b7ce02b33530dee49f5ff9c13de097c3dbcb751cd61ab95e2ea extends craft\web\twig\Template
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
        $context["__internal_2033e48a6aa8fcd1c0c74cc8e1b2239a9aa34ed1cf938b45e3b0b75edfd008d8"] = $this->loadTemplate("_includes/forms", "_elements/indexcontainer", 1);
        // line 3
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 3, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Sort by {attribute}", 1 => "Score", 2 => "Structure", 3 => "Display in a table", 4 => "Display hierarchically", 5 => "Display as thumbnails")), "method");
        // line 11
        echo "
";
        // line 12
        $context["elementInstance"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 12, $this->source); })()), "app", array()), "elements", array()), "createElement", array(0 => (isset($context["elementType"]) || array_key_exists("elementType", $context) ? $context["elementType"] : (function () { throw new Twig_Error_Runtime('Variable "elementType" does not exist.', 12, $this->source); })())), "method");
        // line 13
        $context["context"] = ((array_key_exists("context", $context)) ? ((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new Twig_Error_Runtime('Variable "context" does not exist.', 13, $this->source); })())) : ("index"));
        // line 14
        $context["showStatusMenu"] = (((array_key_exists("showStatusMenu", $context) && ((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context) ? $context["showStatusMenu"] : (function () { throw new Twig_Error_Runtime('Variable "showStatusMenu" does not exist.', 14, $this->source); })()) != "auto"))) ? ((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context) ? $context["showStatusMenu"] : (function () { throw new Twig_Error_Runtime('Variable "showStatusMenu" does not exist.', 14, $this->source); })())) : (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new Twig_Error_Runtime('Variable "elementInstance" does not exist.', 14, $this->source); })()), "hasStatuses", array(), "method")));
        // line 15
        $context["showSiteMenu"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 15, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) ? ((($context["showSiteMenu"]) ?? ("auto"))) : (false));
        // line 16
        if (((isset($context["showSiteMenu"]) || array_key_exists("showSiteMenu", $context) ? $context["showSiteMenu"] : (function () { throw new Twig_Error_Runtime('Variable "showSiteMenu" does not exist.', 16, $this->source); })()) == "auto")) {
            // line 17
            echo "    ";
            $context["showSiteMenu"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new Twig_Error_Runtime('Variable "elementInstance" does not exist.', 17, $this->source); })()), "isLocalized", array(), "method");
        }
        // line 19
        $context["sortOptions"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new Twig_Error_Runtime('Variable "elementInstance" does not exist.', 19, $this->source); })()), "sortOptions", array(), "method");
        // line 20
        echo "
<div class=\"main\">
    <div class=\"toolbar\">
        <div class=\"flex\">
            ";
        // line 24
        if ((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context) ? $context["showStatusMenu"] : (function () { throw new Twig_Error_Runtime('Variable "showStatusMenu" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                <div>
                    <div class=\"btn menubtn statusmenubtn\"><span class=\"status\"></span>";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All", "app"), "html", null, true);
            echo "</div>
                    <div class=\"menu\">
                        <ul class=\"padded\">
                            <li><a data-status=\"\" class=\"sel\"><span class=\"status\"></span>";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All", "app"), "html", null, true);
            echo "</a></li>
                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["elementInstance"]) || array_key_exists("elementInstance", $context) ? $context["elementInstance"] : (function () { throw new Twig_Error_Runtime('Variable "elementInstance" does not exist.', 30, $this->source); })()), "statuses", array(), "method"));
            foreach ($context['_seq'] as $context["status"] => $context["info"]) {
                // line 31
                echo "                                ";
                $context["label"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "label", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "label", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "label", array())) : ($context["info"]));
                // line 32
                echo "                                ";
                $context["color"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "color", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "color", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["info"], "color", array())) : (""));
                // line 33
                echo "                                <li><a data-status=\"";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\"><span class=\"status ";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "\"></span>";
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        </ul>
                    </div>
                </div>
            ";
        }
        // line 39
        echo "            ";
        if ((isset($context["showSiteMenu"]) || array_key_exists("showSiteMenu", $context) ? $context["showSiteMenu"] : (function () { throw new Twig_Error_Runtime('Variable "showSiteMenu" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "                ";
            $this->loadTemplate("_elements/sitemenu", "_elements/indexcontainer", 40)->display($context);
            // line 41
            echo "            ";
        }
        // line 42
        echo "            <div class=\"flex-grow texticon search icon clearable\">
                ";
        // line 43
        echo $context["__internal_2033e48a6aa8fcd1c0c74cc8e1b2239a9aa34ed1cf938b45e3b0b75edfd008d8"]->macro_text(array("placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Search", "app")));
        // line 45
        echo "
                <div class=\"clear hidden\" title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Clear", "app"), "html", null, true);
        echo "\"></div>
            </div>
            <div>
                <div class=\"btn menubtn sortmenubtn\"";
        // line 49
        if ((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sortOptions" does not exist.', 49, $this->source); })())) {
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sort by {attribute}", "app", array("attribute" => twig_first($this->env, (isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sortOptions" does not exist.', 49, $this->source); })())))), "html", null, true);
            echo "\"";
        }
        echo " data-icon=\"asc\">";
        echo twig_escape_filter($this->env, (((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sortOptions" does not exist.', 49, $this->source); })())) ? (twig_first($this->env, (isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sortOptions" does not exist.', 49, $this->source); })()))) : ("")), "html", null, true);
        echo "</div>
                <div class=\"menu\">
                    <ul class=\"padded sort-attributes\">
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new Twig_Error_Runtime('Variable "sortOptions" does not exist.', 52, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 53
            echo "                            <li><a";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                echo " class=\"sel\"";
            }
            echo " data-attr=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</a></li>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </ul>
                    <hr>
                    <ul class=\"padded sort-directions\">
                        <li><a data-dir=\"asc\" class=\"sel\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Ascending", "app"), "html", null, true);
        echo "</a></li>
                        <li><a data-dir=\"desc\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Descending", "app"), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"spinner invisible\"></div>
        </div>
    </div>

    <div class=\"elements\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/indexcontainer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 59,  178 => 58,  173 => 55,  150 => 53,  133 => 52,  121 => 49,  115 => 46,  112 => 45,  110 => 43,  107 => 42,  104 => 41,  101 => 40,  98 => 39,  92 => 35,  77 => 33,  74 => 32,  71 => 31,  67 => 30,  63 => 29,  57 => 26,  54 => 25,  52 => 24,  46 => 20,  44 => 19,  40 => 17,  38 => 16,  36 => 15,  34 => 14,  32 => 13,  30 => 12,  27 => 11,  25 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from \"_includes/forms\" import text -%}

{% do view.registerTranslations('app', [
    \"Sort by {attribute}\",
    \"Score\",
    \"Structure\",
    \"Display in a table\",
    \"Display hierarchically\",
    \"Display as thumbnails\",
]) %}

{% set elementInstance = craft.app.elements.createElement(elementType) %}
{% set context = context is defined ? context : 'index' %}
{% set showStatusMenu = (showStatusMenu is defined and showStatusMenu != 'auto' ? showStatusMenu : elementInstance.hasStatuses()) %}
{% set showSiteMenu = (craft.app.getIsMultiSite() ? (showSiteMenu ?? 'auto') : false) %}
{% if showSiteMenu == 'auto' %}
    {% set showSiteMenu = elementInstance.isLocalized() %}
{% endif %}
{% set sortOptions = elementInstance.sortOptions() %}

<div class=\"main\">
    <div class=\"toolbar\">
        <div class=\"flex\">
            {% if showStatusMenu %}
                <div>
                    <div class=\"btn menubtn statusmenubtn\"><span class=\"status\"></span>{{ \"All\"|t('app') }}</div>
                    <div class=\"menu\">
                        <ul class=\"padded\">
                            <li><a data-status=\"\" class=\"sel\"><span class=\"status\"></span>{{ \"All\"|t('app') }}</a></li>
                            {% for status, info in elementInstance.statuses() %}
                                {% set label = info.label ?? info %}
                                {% set color = info.color ?? '' %}
                                <li><a data-status=\"{{ status }}\"><span class=\"status {{ status }} {{ color }}\"></span>{{ label }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            {% endif %}
            {% if showSiteMenu %}
                {% include \"_elements/sitemenu\" %}
            {% endif %}
            <div class=\"flex-grow texticon search icon clearable\">
                {{ text({
                    placeholder: \"Search\"|t('app')
                }) }}
                <div class=\"clear hidden\" title=\"{{ 'Clear'|t('app') }}\"></div>
            </div>
            <div>
                <div class=\"btn menubtn sortmenubtn\"{% if sortOptions %} title=\"{{ 'Sort by {attribute}'|t('app', { attribute: sortOptions|first }) }}\"{% endif %} data-icon=\"asc\">{{ sortOptions ? sortOptions|first }}</div>
                <div class=\"menu\">
                    <ul class=\"padded sort-attributes\">
                        {% for key, label in sortOptions %}
                            <li><a{% if loop.first %} class=\"sel\"{% endif %} data-attr=\"{{ key }}\">{{ label }}</a></li>
                        {% endfor %}
                    </ul>
                    <hr>
                    <ul class=\"padded sort-directions\">
                        <li><a data-dir=\"asc\" class=\"sel\">{{ \"Ascending\"|t('app') }}</a></li>
                        <li><a data-dir=\"desc\">{{ \"Descending\"|t('app') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"spinner invisible\"></div>
        </div>
    </div>

    <div class=\"elements\"></div>
</div>
", "_elements/indexcontainer", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_elements/indexcontainer.html");
    }
}
