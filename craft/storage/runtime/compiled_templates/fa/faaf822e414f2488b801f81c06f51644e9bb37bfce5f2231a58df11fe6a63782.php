<?php

/* utilities/_index */
class __TwigTemplate_92cbba22236ed7d11792159ae282d847ef10d0cfaa65eca8ba64362f7335d7a3 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "utilities/_index", 1);
        $this->blocks = array(
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
        // line 3
        $context["title"] = (isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new Twig_Error_Runtime('Variable "displayName" does not exist.', 3, $this->source); })());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        // line 6
        echo "    <nav>
        <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilities"]) || array_key_exists("utilities", $context) ? $context["utilities"] : (function () { throw new Twig_Error_Runtime('Variable "utilities" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utility"]) {
            // line 9
            echo "                ";
            $context["selected"] = (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["utility"], "id", array()) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->source); })()));
            // line 10
            echo "                <li>
                    <a class=\"";
            // line 11
            if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 11, $this->source); })())) {
                echo "sel";
            } elseif (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["utility"], "badgeCount", array())) {
                echo "has-badge";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("utilities/" . craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["utility"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"icon icon-mask\">";
            // line 12
            echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["utility"], "iconSvg", array());
            echo "</span>
                        <span class=\"label\">";
            // line 13
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["utility"], "displayName", array()), "html", null, true);
            echo "</span>
                        ";
            // line 14
            if (( !(isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 14, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["utility"], "badgeCount", array()))) {
                // line 15
                echo "                            <span class=\"badge\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["utility"], "badgeCount", array()), "html", null, true);
                echo "</span>
                        ";
            }
            // line 17
            echo "                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>
    </nav>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        echo (isset($context["contentHtml"]) || array_key_exists("contentHtml", $context) ? $context["contentHtml"] : (function () { throw new Twig_Error_Runtime('Variable "contentHtml" does not exist.', 25, $this->source); })());
        echo "
";
    }

    public function getTemplateName()
    {
        return "utilities/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  93 => 24,  87 => 20,  79 => 17,  73 => 15,  71 => 14,  67 => 13,  63 => 12,  53 => 11,  50 => 10,  47 => 9,  43 => 8,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}

{% set title = displayName %}

{% block sidebar %}
    <nav>
        <ul>
            {% for utility in utilities %}
                {% set selected = utility.id == id %}
                <li>
                    <a class=\"{% if selected %}sel{% elseif utility.badgeCount %}has-badge{% endif %}\" href=\"{{ url('utilities/'~utility.id) }}\">
                        <span class=\"icon icon-mask\">{{ utility.iconSvg|raw }}</span>
                        <span class=\"label\">{{ utility.displayName }}</span>
                        {% if not selected and utility.badgeCount %}
                            <span class=\"badge\">{{ utility.badgeCount }}</span>
                        {% endif %}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </nav>
{% endblock %}

{% block content %}
    {{ contentHtml|raw }}
{% endblock %}
", "utilities/_index", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/utilities/_index.html");
    }
}
