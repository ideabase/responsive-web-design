<?php

/* _elements/sources */
class __TwigTemplate_f5f7ed78a24d85a6e5398dd45b73ca230d092a3559c451b730a03cb94357684b extends craft\web\twig\Template
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
        ob_start();
        // line 2
        $context["keyPrefix"] = (($context["keyPrefix"]) ?? (""));
        // line 3
        echo "<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new Twig_Error_Runtime('Variable "sources" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 5
            echo "        ";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "heading", array(), "any", true, true)) {
                // line 6
                echo "            <li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "heading", array()), "site"), "html", null, true);
                echo "</span></li>
        ";
            } else {
                // line 8
                echo "            ";
                $context["key"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "keyPath", array(), "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "keyPath", array())))) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "keyPath", array())) : (((isset($context["keyPrefix"]) || array_key_exists("keyPrefix", $context) ? $context["keyPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "keyPrefix" does not exist.', 8, $this->source); })()) . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "key", array()))));
                // line 9
                echo "            <li>";
                ob_start();
                // line 10
                echo "                <a data-key=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "\"";
                // line 11
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "hasThumbs", array(), "any", true, true) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "hasThumbs", array()))) {
                    echo " data-has-thumbs";
                }
                // line 12
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "structureId", array(), "any", true, true)) {
                    echo " data-has-structure";
                }
                // line 13
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "defaultSort", array(), "any", true, true)) {
                    $context["defaultSort"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "defaultSort", array());
                    echo " data-default-sort=\"";
                    echo twig_escape_filter($this->env, ((twig_test_iterable((isset($context["defaultSort"]) || array_key_exists("defaultSort", $context) ? $context["defaultSort"] : (function () { throw new Twig_Error_Runtime('Variable "defaultSort" does not exist.', 13, $this->source); })()))) ? (twig_join_filter((isset($context["defaultSort"]) || array_key_exists("defaultSort", $context) ? $context["defaultSort"] : (function () { throw new Twig_Error_Runtime('Variable "defaultSort" does not exist.', 13, $this->source); })()), ":")) : ((isset($context["defaultSort"]) || array_key_exists("defaultSort", $context) ? $context["defaultSort"] : (function () { throw new Twig_Error_Runtime('Variable "defaultSort" does not exist.', 13, $this->source); })()))), "html", null, true);
                    echo "\"";
                }
                // line 14
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "sites", array(), "any", true, true)) {
                    echo " data-sites=\"";
                    echo twig_escape_filter($this->env, twig_join_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "sites", array()), ","), "html", null, true);
                    echo "\"";
                }
                // line 15
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "data", array(), "any", true, true)) {
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "data", array()));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        echo twig_escape_filter($this->env, $context["dataKey"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["dataVal"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 17
                echo ">
                        ";
                // line 18
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "status", array(), "any", true, true)) {
                    // line 19
                    echo "                            <span class=\"status ";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "status", array()), "html", null, true);
                    echo "\"></span>
                        ";
                } elseif (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 20
$context["source"], "icon", array(), "any", true, true)) {
                    // line 21
                    echo "                            <span class=\"icon\">
                                ";
                    // line 22
                    echo (($this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "icon", array()))) ? ($this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "icon", array()))) : ((("<span data-icon='" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "icon", array())) . "'></span>")));
                    echo "
                            </span>
                        ";
                } elseif (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 24
$context["source"], "iconMask", array(), "any", true, true)) {
                    // line 25
                    echo "                            <span class=\"icon icon-mask\">
                                ";
                    // line 26
                    echo (($this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "iconMask", array()))) ? ($this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "iconMask", array()))) : ((("<span data-icon='" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "iconMask", array())) . "'></span>")));
                    echo "
                            </span>
                        ";
                }
                // line 29
                echo "                        <span class=\"label\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "label", array()), "html", null, true);
                echo "</span>
                </a>
                ";
                // line 31
                if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "nested", array(), "any", true, true) &&  !twig_test_empty(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["source"], "nested", array())))) {
                    // line 32
                    echo "                    <div class=\"toggle\"></div>
                    ";
                    // line 33
                    $this->loadTemplate("_elements/sources", "_elements/sources", 33)->display(array_merge($context, array("keyPrefix" => (                    // line 34
(isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 34, $this->source); })()) . "/"), "sources" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 35
$context["source"], "nested", array()))));
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                echo "</li>
        ";
            }
            // line 40
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 41,  158 => 40,  152 => 38,  149 => 37,  147 => 35,  146 => 34,  145 => 33,  142 => 32,  140 => 31,  134 => 29,  128 => 26,  125 => 25,  123 => 24,  118 => 22,  115 => 21,  113 => 20,  108 => 19,  106 => 18,  103 => 17,  89 => 16,  87 => 15,  81 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  59 => 9,  56 => 8,  50 => 6,  47 => 5,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
{% set keyPrefix = keyPrefix ?? '' %}
<ul>
    {% for source in sources %}
        {% if source.heading is defined %}
            <li class=\"heading\"><span>{{ source.heading|t('site') }}</span></li>
        {% else %}
            {% set key = source.keyPath ?? (keyPrefix ~ source.key) %}
            <li>{% spaceless %}
                <a data-key=\"{{ key }}\"
                    {%- if source.hasThumbs is defined and source.hasThumbs %} data-has-thumbs{% endif %}
                    {%- if source.structureId is defined %} data-has-structure{% endif %}
                    {%- if source.defaultSort is defined %}{% set defaultSort = source.defaultSort %} data-default-sort=\"{{ defaultSort is iterable ? defaultSort|join(':') : defaultSort }}\"{% endif %}
                    {%- if source.sites is defined %} data-sites=\"{{ source.sites|join(',') }}\"{% endif %}
                    {%- if source.data is defined -%}
                        {% for dataKey, dataVal in source.data %} data-{{ dataKey }}=\"{{ dataVal }}\"{% endfor %}
                    {%- endif %}>
                        {% if source.status is defined %}
                            <span class=\"status {{ source.status }}\"></span>
                        {% elseif source.icon is defined %}
                            <span class=\"icon\">
                                {{ (svg(source.icon) ?: \"<span data-icon='#{source.icon}'></span>\")|raw }}
                            </span>
                        {% elseif source.iconMask is defined %}
                            <span class=\"icon icon-mask\">
                                {{ (svg(source.iconMask) ?: \"<span data-icon='#{source.iconMask}'></span>\")|raw }}
                            </span>
                        {% endif %}
                        <span class=\"label\">{{ source.label }}</span>
                </a>
                {% if source.nested is defined and source.nested is not empty %}
                    <div class=\"toggle\"></div>
                    {% include \"_elements/sources\" with {
                        keyPrefix: key ~ '/',
                        sources: source.nested
                    } %}
                {% endif %}
            {% endspaceless %}</li>
        {% endif %}
    {% endfor %}
</ul>
{% endspaceless %}
", "_elements/sources", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_elements/sources.html");
    }
}
