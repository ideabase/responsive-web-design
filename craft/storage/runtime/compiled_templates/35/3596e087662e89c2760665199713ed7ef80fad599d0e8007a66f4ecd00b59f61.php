<?php

/* __string_template__558189a8b4c3df2478deaec2024c5207c8c90a437ab86b55b7c99e04ec653b64 */
class __TwigTemplate_898e3de08c736e90e403773dc276c258a07cb7b7c1840b05332287b702331884 extends craft\web\twig\Template
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
        echo "settings/fields/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "groupId", array());
    }

    public function getTemplateName()
    {
        return "__string_template__558189a8b4c3df2478deaec2024c5207c8c90a437ab86b55b7c99e04ec653b64";
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
        return new Twig_Source("settings/fields/{{object.groupId|raw}}", "__string_template__558189a8b4c3df2478deaec2024c5207c8c90a437ab86b55b7c99e04ec653b64", "");
    }
}
