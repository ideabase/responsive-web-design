<?php

/* __string_template__f87104bfb1db8f1f3635a5689c53cd9d42f19e012dcc9a4452da71a4c29f4b64 */
class __TwigTemplate_64c107621e97f9179dad5aaaae6a940cfe350b51609e4bcae95f8f1ae66103ad extends craft\web\twig\Template
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
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "section", array()), "name", array());
    }

    public function getTemplateName()
    {
        return "__string_template__f87104bfb1db8f1f3635a5689c53cd9d42f19e012dcc9a4452da71a4c29f4b64";
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
        return new Twig_Source("{{object.section.name|raw|raw}}", "__string_template__f87104bfb1db8f1f3635a5689c53cd9d42f19e012dcc9a4452da71a4c29f4b64", "");
    }
}
