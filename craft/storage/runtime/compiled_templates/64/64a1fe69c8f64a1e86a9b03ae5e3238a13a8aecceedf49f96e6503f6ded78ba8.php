<?php

/* singles/blog/index */
class __TwigTemplate_a7a291aaa14dac22a87dbcad766e970140645a9520dec1bada54a09aa8a2a615 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/blog/index", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 4, $this->source); })()), "subheadline", array()), "html", null, true);
        echo "</h2>  
    ";
        // line 5
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 5, $this->source); })()), "body", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "singles/blog/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}

{% block content %}
    <h2>{{ entry.subheadline }}</h2>  
    {{ entry.body }}
{% endblock %}
", "singles/blog/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/blog/index.html");
    }
}
