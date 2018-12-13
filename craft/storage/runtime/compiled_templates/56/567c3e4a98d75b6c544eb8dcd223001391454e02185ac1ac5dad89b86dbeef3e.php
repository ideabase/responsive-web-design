<?php

/* __string_template__c461f1d6f8dedda6c32557b5ed9ba7c93fcdd92c4247f997cf134cc58f304c49 */
class __TwigTemplate_bd1b708ea4a3ad3b5f5cddda496e6ec94c7436224066b1af3cd6bcaf585f4114 extends craft\web\twig\Template
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
        echo "announcements/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array());
    }

    public function getTemplateName()
    {
        return "__string_template__c461f1d6f8dedda6c32557b5ed9ba7c93fcdd92c4247f997cf134cc58f304c49";
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
        return new Twig_Source("announcements/{{object.slug|raw}}", "__string_template__c461f1d6f8dedda6c32557b5ed9ba7c93fcdd92c4247f997cf134cc58f304c49", "");
    }
}
