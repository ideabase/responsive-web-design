<?php

/* __string_template__5b9864dd471c0217bd77badd6fd2c179c3d80544db24da8767cf516fb957636b */
class __TwigTemplate_9c6b3a42e11b34036a2a41fd32e6cc4f08e447ffed3f0614d6fc7f00b2f2f689 extends craft\web\twig\Template
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
        echo "assignment-type/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array());
    }

    public function getTemplateName()
    {
        return "__string_template__5b9864dd471c0217bd77badd6fd2c179c3d80544db24da8767cf516fb957636b";
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
        return new Twig_Source("assignment-type/{{object.slug|raw}}", "__string_template__5b9864dd471c0217bd77badd6fd2c179c3d80544db24da8767cf516fb957636b", "");
    }
}
