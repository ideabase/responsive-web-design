<?php

/* _components/elementactions/SetStatus/trigger */
class __TwigTemplate_84be38816810cede3416ac96982dc63a77c876efb84812c9852d0af1ae86d80e extends craft\web\twig\Template
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
        echo "<div class=\"btn menubtn\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Set status", "app"), "html", null, true);
        echo "</div>
<div class=\"menu\">
    <ul>
        <li><a class=\"formsubmit\" data-param=\"status\" data-value=\"enabled\"><span class=\"status enabled\"></span> ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Enabled", "app"), "html", null, true);
        echo "</a></li>
        <li><a class=\"formsubmit\" data-param=\"status\" data-value=\"disabled\"><span class=\"status disabled\"></span> ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disabled", "app"), "html", null, true);
        echo "</a></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/elementactions/SetStatus/trigger";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"btn menubtn\">{{ \"Set status\"|t('app') }}</div>
<div class=\"menu\">
    <ul>
        <li><a class=\"formsubmit\" data-param=\"status\" data-value=\"enabled\"><span class=\"status enabled\"></span> {{ \"Enabled\"|t('app') }}</a></li>
        <li><a class=\"formsubmit\" data-param=\"status\" data-value=\"disabled\"><span class=\"status disabled\"></span> {{ \"Disabled\"|t('app') }}</a></li>
    </ul>
</div>
", "_components/elementactions/SetStatus/trigger", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/elementactions/SetStatus/trigger.html");
    }
}
