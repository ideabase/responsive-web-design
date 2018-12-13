<?php

/* _includes/tabs */
class __TwigTemplate_1f04bb27b2bf371b55ccd5ec85223026725d25fb4c83921ff5348f0e9544afd0 extends craft\web\twig\Template
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
        echo "<nav id=\"tabs\">
    <ul>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new Twig_Error_Runtime('Variable "tabs" does not exist.', 3, $this->source); })()));
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
        foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
            // line 4
            echo "            ";
            if ($context["tab"]) {
                // line 5
                echo "                ";
                $context["tabIsSelected"] = (( !array_key_exists("selectedTab", $context) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) || (array_key_exists("selectedTab", $context) && ((isset($context["selectedTab"]) || array_key_exists("selectedTab", $context) ? $context["selectedTab"] : (function () { throw new Twig_Error_Runtime('Variable "selectedTab" does not exist.', 5, $this->source); })()) == $context["tabId"])));
                // line 6
                echo "<li><a id=\"tab-";
                echo twig_escape_filter($this->env, $context["tabId"], "html", null, true);
                echo "\" class=\"tab";
                if ((isset($context["tabIsSelected"]) || array_key_exists("tabIsSelected", $context) ? $context["tabIsSelected"] : (function () { throw new Twig_Error_Runtime('Variable "tabIsSelected" does not exist.', 6, $this->source); })())) {
                    echo " sel";
                }
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "class", array()), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "label", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "label", array()), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 8
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 9,  70 => 8,  50 => 6,  47 => 5,  44 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"tabs\">
    <ul>
        {% for tabId, tab in tabs %}
            {% if tab %}
                {% set tabIsSelected = ((selectedTab is not defined and loop.first) or (selectedTab is defined and selectedTab == tabId)) -%}
                <li><a id=\"tab-{{ tabId }}\" class=\"tab{% if tabIsSelected %} sel{% endif %}{% if tab.class is defined %} {{ tab.class }}{% endif %}\" href=\"{{ tab.url }}\" title=\"{{ tab.label }}\">{{ tab.label }}</a></li>
            {% endif %}
        {% endfor %}
    </ul>
</nav>
", "_includes/tabs", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/tabs.html");
    }
}
