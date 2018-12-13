<?php

/* _components/widgets/Feed/body */
class __TwigTemplate_f8ccc1cfac86c10620ae974965136aeec9764ac2fa75bfe029d7a6f1f02e56d0 extends craft\web\twig\Template
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
        echo "<table class=\"data fullwidth\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new Twig_Error_Runtime('Variable "limit" does not exist.', 2, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "        <tr>
            <td>&nbsp;</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"data fullwidth\">
    {% for i in 1..limit %}
        <tr>
            <td>&nbsp;</td>
        </tr>
    {% endfor %}
</table>
", "_components/widgets/Feed/body", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/widgets/Feed/body.html");
    }
}
