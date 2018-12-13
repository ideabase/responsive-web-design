<?php

/* __string_template__9667192534adbe17ba9d0e67f561d93fcad82fe989f118663b1007aa7e339d1f */
class __TwigTemplate_c14a55d305a459507cf77f2d50f9cb06eaea8b198a4c3868cff1e6429589a16e extends craft\web\twig\Template
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
        echo "course-type/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array());
    }

    public function getTemplateName()
    {
        return "__string_template__9667192534adbe17ba9d0e67f561d93fcad82fe989f118663b1007aa7e339d1f";
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
        return new Twig_Source("course-type/{{object.slug|raw}}", "__string_template__9667192534adbe17ba9d0e67f561d93fcad82fe989f118663b1007aa7e339d1f", "");
    }
}
