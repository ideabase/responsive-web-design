<?php

/* singles/home/index.html */
class __TwigTemplate_0c98a86b05d3d745505bd360fa4b4de3cc03409c45cac728f2310e9e8f1fb0b3 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/home/index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 4, $this->source); })()), "subheadline", array()), "html", null, true);
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 5, $this->source); })()), "body", array()), "html", null, true);
        echo "

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 7, $this->source); })()), "relatedLinksAndDownloads", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 8
            echo "        ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "type", array()) == "internalLink")) {
                // line 9
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["link"], "linkName", array()), "html", null, true);
                echo " </a>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "singles/home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  52 => 9,  49 => 8,  45 => 7,  40 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}

{% block content %}
    {{ entry.subheadline }}
    {{ entry.body }}

    {% for link in entry.relatedLinksAndDownloads %}
        {% if link.type == 'internalLink' %}
            <a href=\"{{ link.internalUrl }}\"> {{ link.linkName }} </a>
        {% endif %}
    {% endfor %}
{% endblock %}
", "singles/home/index.html", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/home/index.html");
    }
}
