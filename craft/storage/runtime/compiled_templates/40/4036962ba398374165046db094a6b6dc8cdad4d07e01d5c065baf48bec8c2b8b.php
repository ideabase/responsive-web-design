<?php

/* __string_template__be6bf7d67adf26a1b4e7c43a121ca28421aff71995364d485afa96471a2f4461 */
class __TwigTemplate_10a488b2e1069d991f81cd03503dec0c5153d8d8c1ac7c413208ff533052fef2 extends craft\web\twig\Template
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
        echo "assignments/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array());
    }

    public function getTemplateName()
    {
        return "__string_template__be6bf7d67adf26a1b4e7c43a121ca28421aff71995364d485afa96471a2f4461";
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
        return new Twig_Source("assignments/{{object.slug|raw}}", "__string_template__be6bf7d67adf26a1b4e7c43a121ca28421aff71995364d485afa96471a2f4461", "");
    }
}
