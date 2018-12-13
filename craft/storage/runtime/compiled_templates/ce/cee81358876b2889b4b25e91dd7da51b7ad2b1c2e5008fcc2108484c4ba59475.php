<?php

/* announcements/_entry */
class __TwigTemplate_a9c772fd835429d3d8a9131bed73954bd3d5790c8eef8d1279ff55e5344692e3 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "announcements/_entry", 1);
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
        echo "
<h1>Congrats, youve done it! </h1>

";
    }

    public function getTemplateName()
    {
        return "announcements/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}

{% block content %}

<h1>Congrats, youve done it! </h1>

{% endblock %}
", "announcements/_entry", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/announcements/_entry.html");
    }
}
