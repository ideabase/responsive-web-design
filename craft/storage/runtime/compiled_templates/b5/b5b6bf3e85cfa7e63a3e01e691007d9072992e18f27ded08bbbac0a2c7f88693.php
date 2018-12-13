<?php

/* settings */
class __TwigTemplate_6e5a340982c24c62c54d04adbdd3119e4bc85ee0d5ab87739004e0c3e1f1ef9d extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings", 3);
        $this->blocks = array(
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
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app");
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 8, $this->source); })()), "cp", array()), "settings", array(0 => 80), "method"));
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
        foreach ($context['_seq'] as $context["category"] => $context["items"]) {
            // line 9
            echo "        <h2>";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h2>

        <ul class=\"icons\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                // line 13
                echo "                <li>
                    <a href=\"";
                // line 14
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "url", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "url", array())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/" . $context["handle"])), "html", null, true);
                }
                echo "\">
                        <div class=\"icon\">
                            ";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "icon", array())), "html", null, true);
                echo "
                        </div>
                        ";
                // line 18
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "label", array()), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ul>

        ";
            // line 24
            if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                // line 25
                echo "            <hr>
        ";
            }
            // line 27
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
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  102 => 25,  100 => 24,  96 => 22,  86 => 18,  81 => 16,  72 => 14,  69 => 13,  65 => 12,  58 => 9,  40 => 8,  37 => 7,  33 => 3,  31 => 4,  29 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Settings\"|t('app') %}


{% block content %}
    {% for category, items in craft.cp.settings(80) %}
        <h2>{{ category }}</h2>

        <ul class=\"icons\">
            {% for handle, item in items %}
                <li>
                    <a href=\"{% if item.url is defined %}{{ url(item.url) }}{% else %}{{ url('settings/'~handle) }}{% endif %}\">
                        <div class=\"icon\">
                            {{ svg(item.icon) }}
                        </div>
                        {{ item.label }}
                    </a>
                </li>
            {% endfor %}
        </ul>

        {% if not loop.last %}
            <hr>
        {% endif %}
    {% endfor %}
{% endblock %}
", "settings", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/index.html");
    }
}
