<?php

/* _components/utilities/SystemReport */
class __TwigTemplate_fcb27a9ffaf263ce869b3c579cfd27415219a94796dfdd358c95733726beca0e extends craft\web\twig\Template
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
        echo "<div class=\"readable\">
    <h2>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Application Info", "app"), "html", null, true);
        echo "</h2>

    <table class=\"data fullwidth fixed-layout\">
        <tbody>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appInfo"]) || array_key_exists("appInfo", $context) ? $context["appInfo"] : (function () { throw new Twig_Error_Runtime('Variable "appInfo" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 7
            echo "                <tr>
                    <th class=\"light\">";
            // line 8
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</th>
                    <td>";
            // line 9
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </tbody>
    </table>

    <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Plugins", "app"), "html", null, true);
        echo "</h2>

    <table class=\"data fullwidth fixed-layout\">
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new Twig_Error_Runtime('Variable "plugins" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 20
            echo "                <tr>
                    <th class=\"light\">";
            // line 21
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["plugin"], "name", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["plugin"], "version", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

    <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Requirements", "app"), "html", null, true);
        echo "</h2>

    <table class=\"data fullwidth\">
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new Twig_Error_Runtime('Variable "requirements" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 33
            echo "            <tr>
                <td class=\"thin centeralign\">
                    ";
            // line 35
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["requirement"], "error", array())) {
                // line 36
                echo "                        <span class=\"error\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Failed", "app"), "html", null, true);
                echo "\" data-icon=\"error\"></span>
                    ";
            } elseif (craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 37
$context["requirement"], "warning", array())) {
                // line 38
                echo "                        <span class=\"warning\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Passed with warning", "app"), "html", null, true);
                echo "\" data-icon=\"alert\"></span>
                    ";
            } else {
                // line 40
                echo "                        <span class=\"success\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Passed", "app"), "html", null, true);
                echo "\" data-icon=\"check\"></span>
                    ";
            }
            // line 42
            echo "                </td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["requirement"], "name", array()), "html", null, true);
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["requirement"], "memo", array())) {
                echo " <span class=\"info\">";
                echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["requirement"], "memo", array());
                echo "</span>";
            }
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/utilities/SystemReport";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  129 => 43,  126 => 42,  120 => 40,  114 => 38,  112 => 37,  107 => 36,  105 => 35,  101 => 33,  97 => 32,  90 => 28,  85 => 25,  76 => 22,  72 => 21,  69 => 20,  65 => 19,  58 => 15,  53 => 12,  44 => 9,  40 => 8,  37 => 7,  33 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"readable\">
    <h2>{{ \"Application Info\"|t('app') }}</h2>

    <table class=\"data fullwidth fixed-layout\">
        <tbody>
            {% for label, value in appInfo %}
                <tr>
                    <th class=\"light\">{{ label }}</th>
                    <td>{{ value }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <h2>{{ \"Plugins\"|t('app') }}</h2>

    <table class=\"data fullwidth fixed-layout\">
        <tbody>
            {% for plugin in plugins %}
                <tr>
                    <th class=\"light\">{{ plugin.name }}</th>
                    <td>{{ plugin.version }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <h2>{{ \"Requirements\"|t('app') }}</h2>

    <table class=\"data fullwidth\">
        <tbody>
        {% for requirement in requirements %}
            <tr>
                <td class=\"thin centeralign\">
                    {% if requirement.error %}
                        <span class=\"error\" title=\"{{ 'Failed'|t('app') }}\" data-icon=\"error\"></span>
                    {% elseif requirement.warning %}
                        <span class=\"warning\" title=\"{{ 'Passed with warning'|t('app') }}\" data-icon=\"alert\"></span>
                    {% else %}
                        <span class=\"success\" title=\"{{ 'Passed'|t('app') }}\" data-icon=\"check\"></span>
                    {% endif %}
                </td>
                <td>{{ requirement.name }}{% if requirement.memo %} <span class=\"info\">{{ requirement.memo|raw }}</span>{% endif %}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "_components/utilities/SystemReport", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/utilities/SystemReport.html");
    }
}
