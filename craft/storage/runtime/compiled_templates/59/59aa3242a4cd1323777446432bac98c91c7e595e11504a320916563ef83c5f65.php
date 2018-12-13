<?php

/* _components/widgets/RecentEntries/body */
class __TwigTemplate_f7daf8cadc96028a1f337042b62a84b01073dcb707178619bfaae23215b30c0e extends craft\web\twig\Template
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
        echo "<div class=\"recententries-container\">
    ";
        // line 2
        if (twig_length_filter($this->env, (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new Twig_Error_Runtime('Variable "entries" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        <table class=\"data fullwidth\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new Twig_Error_Runtime('Variable "entries" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 5
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entry"], "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
                echo "</a>
                        <span class=\"light\">
                            ";
                // line 9
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('timestamp')->getCallable(), array(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entry"], "dateCreated", array()), "short")), "html", null, true);
                // line 10
                if ((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new Twig_Error_Runtime('Variable "CraftEdition" does not exist.', 10, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new Twig_Error_Runtime('Variable "CraftPro" does not exist.', 10, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entry"], "author", array()))) {
                    echo ", ";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["entry"], "author", array()), "username", array()), "html", null, true);
                }
                // line 11
                echo "</span>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </table>
    ";
        } else {
            // line 17
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No entries exist yet.", "app"), "html", null, true);
            echo "</p>
    ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  66 => 17,  62 => 15,  53 => 11,  48 => 10,  46 => 9,  39 => 7,  35 => 5,  31 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"recententries-container\">
    {% if entries|length %}
        <table class=\"data fullwidth\">
            {% for entry in entries %}
                <tr>
                    <td>
                        <a href=\"{{ entry.getCpEditUrl() }}\">{{ entry.title }}</a>
                        <span class=\"light\">
                            {{ entry.dateCreated|timestamp('short') }}
                            {%- if CraftEdition == CraftPro and entry.author %}, {{ entry.author.username }}{% endif -%}
                        </span>
                    </td>
                </tr>
            {% endfor %}
        </table>
    {% else %}
        <p>{{ \"No entries exist yet.\"|t('app') }}</p>
    {% endif %}
</div>
", "_components/widgets/RecentEntries/body", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/widgets/RecentEntries/body.html");
    }
}
