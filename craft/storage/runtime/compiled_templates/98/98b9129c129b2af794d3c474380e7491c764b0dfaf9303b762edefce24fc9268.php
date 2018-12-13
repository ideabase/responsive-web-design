<?php

/* _includes/critical.css */
class __TwigTemplate_a0fc44d68021e16703c4a1626b74ca02d3d8df6cd6a593fe170c87f577e19c89 extends craft\web\twig\Template
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
        echo "/* Generate Critical CSS Here */
";
    }

    public function getTemplateName()
    {
        return "_includes/critical.css";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* Generate Critical CSS Here */
", "_includes/critical.css", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/_includes/critical.css");
    }
}
