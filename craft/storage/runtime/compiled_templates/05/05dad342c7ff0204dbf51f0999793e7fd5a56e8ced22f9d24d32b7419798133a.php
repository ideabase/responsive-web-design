<?php

/* _components/utilities/DbBackup */
class __TwigTemplate_65f9430851a4728b8bf5ec31982f0ebdb2153f505ec3f1a618ee4ef0f13a8766 extends craft\web\twig\Template
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/utilities/DbBackup", 1);
        // line 2
        echo "
<form id=\"db-backup\" class=\"utility\" method=\"post\" accept-charset=\"UTF-8\">
    <input type=\"hidden\" name=\"action\" value=\"utilities/db-backup-perform-action\">
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->csrfInputFunction(), "html", null, true);
        echo "

    ";
        // line 7
        echo $context["forms"]->macro_checkbox(array("name" => "downloadBackup", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Download backup?", "app"), "checked" => true));
        // line 11
        echo "

    <div class=\"buttons\">
        <input type=\"submit\" class=\"btn submit\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Backup", "app"), "html", null, true);
        echo "\" />
        <div class=\"utility-status\"></div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "_components/utilities/DbBackup";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  37 => 11,  35 => 7,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

<form id=\"db-backup\" class=\"utility\" method=\"post\" accept-charset=\"UTF-8\">
    <input type=\"hidden\" name=\"action\" value=\"utilities/db-backup-perform-action\">
    {{ csrfInput() }}

    {{ forms.checkbox({
        name: 'downloadBackup',
        label: 'Download backup?'|t('app'),
        checked: true,
    }) }}

    <div class=\"buttons\">
        <input type=\"submit\" class=\"btn submit\" value=\"{{ \"Backup\"|t('app') }}\" />
        <div class=\"utility-status\"></div>
    </div>
</form>
", "_components/utilities/DbBackup", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/utilities/DbBackup.html");
    }
}
