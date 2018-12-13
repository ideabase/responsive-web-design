<?php

/* __string_template__0c3ac0cb0410d3bed993f78712c5c765311d42f1c1e787944f6c20e73b9545fb */
class __TwigTemplate_700edbab3d2acfd83152c0c31b35d5d2c884b292d0512123ebd0ec26e83258c0 extends craft\web\twig\Template
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
        echo "calendar-events/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array());
    }

    public function getTemplateName()
    {
        return "__string_template__0c3ac0cb0410d3bed993f78712c5c765311d42f1c1e787944f6c20e73b9545fb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("calendar-events/{{object.slug|raw}}", "__string_template__0c3ac0cb0410d3bed993f78712c5c765311d42f1c1e787944f6c20e73b9545fb", "");
    }
}
