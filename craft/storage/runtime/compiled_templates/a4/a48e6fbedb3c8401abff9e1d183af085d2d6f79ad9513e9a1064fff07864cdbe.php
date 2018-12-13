<?php

/* entries/_fields */
class __TwigTemplate_c74734882eec4492636a4e567fb72a5a2545310c41c8d152e7f18edc7afc37bf extends craft\web\twig\Template
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
        if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 1, $this->source); })()), "hasTitleField", array()) || craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 1, $this->source); })()), "hasErrors", array(0 => "title"), "method"))) {
            // line 2
            echo "    ";
            $this->loadTemplate("entries/_titlefield", "entries/_fields", 2)->display($context);
        }
        // line 4
        echo "
<div>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entryType"]) || array_key_exists("entryType", $context) ? $context["entryType"] : (function () { throw new Twig_Error_Runtime('Variable "entryType" does not exist.', 6, $this->source); })()), "getFieldLayout", array(), "method"), "getTabs", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["tab"], "getHtmlId", array(), "method"), "html", null, true);
            echo "\"";
            if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                echo " class=\"hidden\"";
            }
            echo ">
            ";
            // line 8
            $this->loadTemplate("_includes/fields", "entries/_fields", 8)->display(array("fields" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 9
$context["tab"], "getFields", array(), "method"), "element" =>             // line 10
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 10, $this->source); })()), "static" => ((            // line 11
array_key_exists("static", $context)) ? ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 11, $this->source); })())) : (false))));
            // line 13
            echo "        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "entries/_fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  64 => 13,  62 => 11,  61 => 10,  60 => 9,  59 => 8,  50 => 7,  33 => 6,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if entryType.hasTitleField or entry.hasErrors('title') %}
    {% include \"entries/_titlefield\" %}
{% endif %}

<div>
    {% for tab in entryType.getFieldLayout().getTabs() %}
        <div id=\"{{ tab.getHtmlId() }}\"{% if not loop.first %} class=\"hidden\"{% endif %}>
            {% include \"_includes/fields\" with {
                fields:  tab.getFields(),
                element: entry,
                static:  (static is defined ? static : false)
            } only %}
        </div>
    {% endfor %}
</div>
", "entries/_fields", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/entries/_fields.html");
    }
}
