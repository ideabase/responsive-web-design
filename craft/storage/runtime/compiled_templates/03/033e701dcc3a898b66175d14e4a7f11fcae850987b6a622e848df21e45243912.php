<?php

/* singles/basicCalendar/index */
class __TwigTemplate_e7992b03cde1c3fed2dc14d82b3da613dfe4175553e133e6cd6e68f34fa04c5c extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/basicCalendar/index", 1);
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

";
    }

    public function getTemplateName()
    {
        return "singles/basicCalendar/index";
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


{% endblock %}
", "singles/basicCalendar/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/basicCalendar/index.html");
    }
}
