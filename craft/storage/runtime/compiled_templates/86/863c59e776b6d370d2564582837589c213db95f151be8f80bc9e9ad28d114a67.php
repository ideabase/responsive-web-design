<?php

/* __string_template__5ddc363a4e2bb64e84da4005a5b39d142ea437e2a46a390390031f3dc88758c3 */
class __TwigTemplate_77cff838bfc32b633bb1a35c495a6a2c8f884fd23cc9d522156ba3cad18cb4bf extends craft\web\twig\Template
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
        echo "locations/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array());
    }

    public function getTemplateName()
    {
        return "__string_template__5ddc363a4e2bb64e84da4005a5b39d142ea437e2a46a390390031f3dc88758c3";
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
        return new Twig_Source("locations/{{object.slug|raw}}", "__string_template__5ddc363a4e2bb64e84da4005a5b39d142ea437e2a46a390390031f3dc88758c3", "");
    }
}
