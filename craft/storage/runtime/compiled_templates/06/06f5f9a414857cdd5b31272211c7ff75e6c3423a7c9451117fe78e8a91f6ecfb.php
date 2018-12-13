<?php

/* __string_template__de0f7cb78866020545d110dfcd6cb24d243d3c8fb9bd994c4c139e6491faef3a */
class __TwigTemplate_03c97512e67f98085d1c0bb135838ee01d10cd84c7708d0ccd8b17ee8eb06c1e extends craft\web\twig\Template
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
        echo "syllabus/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array());
    }

    public function getTemplateName()
    {
        return "__string_template__de0f7cb78866020545d110dfcd6cb24d243d3c8fb9bd994c4c139e6491faef3a";
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
        return new Twig_Source("syllabus/{{object.slug|raw}}", "__string_template__de0f7cb78866020545d110dfcd6cb24d243d3c8fb9bd994c4c139e6491faef3a", "");
    }
}
