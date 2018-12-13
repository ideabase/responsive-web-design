<?php

/* _components/widgets/Updates/body */
class __TwigTemplate_76533fad03f58357aa15c338d0360746c3ca978324da727aa7635fc4f2965a0b extends craft\web\twig\Template
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
        if ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <p class=\"centeralign\">
        ";
            // line 3
            if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 3, $this->source); })()) == 1)) {
                // line 4
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("One update available!", "app"), "html", null, true);
                echo "
        ";
            } else {
                // line 6
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("{total} updates available!", "app", array("total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 6, $this->source); })()))), "html", null, true);
                echo "
        ";
            }
            // line 8
            echo "        <a class=\"go nowrap\" href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("utilities/updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Go to Updates", "app"), "html", null, true);
            echo "</a>
    </p>
";
        } else {
            // line 11
            echo "    <p class=\"centeralign\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Congrats! You’re up-to-date.", "app"), "html", null, true);
            echo "</p>
    <p class=\"centeralign\"><a class=\"btn\" data-icon=\"refresh\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Check again", "app"), "html", null, true);
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/Updates/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  51 => 11,  42 => 8,  36 => 6,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if total %}
    <p class=\"centeralign\">
        {% if total == 1 %}
            {{ \"One update available!\"|t('app') }}
        {% else %}
            {{ \"{total} updates available!\"|t('app', { total: total }) }}
        {% endif %}
        <a class=\"go nowrap\" href=\"{{ url('utilities/updates') }}\">{{ \"Go to Updates\"|t('app') }}</a>
    </p>
{% else %}
    <p class=\"centeralign\">{{ \"Congrats! You’re up-to-date.\"|t('app') }}</p>
    <p class=\"centeralign\"><a class=\"btn\" data-icon=\"refresh\">{{ 'Check again'|t('app') }}</a></p>
{% endif %}
", "_components/widgets/Updates/body", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/widgets/Updates/body.html");
    }
}
