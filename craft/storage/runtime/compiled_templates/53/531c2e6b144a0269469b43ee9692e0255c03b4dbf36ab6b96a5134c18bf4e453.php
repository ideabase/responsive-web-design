<?php

/* _elements/modalbody */
class __TwigTemplate_9091121019da3c63347d5cf861251b4308d4b9cebc64b1d3a346c7ea22ace713 extends craft\web\twig\Template
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
        echo "<div class=\"content";
        if ((isset($context["showSidebar"]) || array_key_exists("showSidebar", $context) ? $context["showSidebar"] : (function () { throw new Twig_Error_Runtime('Variable "showSidebar" does not exist.', 1, $this->source); })())) {
            echo " has-sidebar";
        }
        echo "\">
    <div class=\"sidebar";
        // line 2
        if ( !(isset($context["showSidebar"]) || array_key_exists("showSidebar", $context) ? $context["showSidebar"] : (function () { throw new Twig_Error_Runtime('Variable "showSidebar" does not exist.', 2, $this->source); })())) {
            echo " hidden";
        }
        echo "\">
        <nav>
            ";
        // line 4
        $this->loadTemplate("_elements/sources", "_elements/modalbody", 4)->display($context);
        // line 5
        echo "        </nav>
    </div>

    ";
        // line 8
        $this->loadTemplate("_elements/indexcontainer", "_elements/modalbody", 8)->display($context);
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/modalbody";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  44 => 8,  39 => 5,  37 => 4,  30 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content{% if showSidebar %} has-sidebar{% endif %}\">
    <div class=\"sidebar{% if not showSidebar %} hidden{% endif %}\">
        <nav>
            {% include \"_elements/sources\" %}
        </nav>
    </div>

    {% include \"_elements/indexcontainer\" %}
</div>
", "_elements/modalbody", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_elements/modalbody.html");
    }
}
