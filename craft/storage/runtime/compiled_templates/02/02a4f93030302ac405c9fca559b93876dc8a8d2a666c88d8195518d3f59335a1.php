<?php

/* singles/syllabus/index */
class __TwigTemplate_7cafc6cd2c0aeb4c2c079ff747f6b1752151b861b81482184d34a40680cdf624 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/syllabus/index", 1);
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
        echo "
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 5, $this->source); })()), "subheadline", array()), "html", null, true);
        echo "</h1>
    <p>Instructor Name: ";
        // line 6
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 6, $this->source); })()), "instructorName", array()), "html", null, true);
        echo "</p>
    <p>Instructor Email: ";
        // line 7
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 7, $this->source); })()), "email", array()), "html", null, true);
        echo "</p>
    <p>Terms: ";
        // line 8
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 8, $this->source); })()), "terms", array()), "html", null, true);
        echo "</p>
    <p>Room: ";
        // line 9
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 9, $this->source); })()), "room", array()), "html", null, true);
        echo "</p>



";
    }

    public function getTemplateName()
    {
        return "singles/syllabus/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}

{% block content %}

    <h1>{{ entry.subheadline }}</h1>
    <p>Instructor Name: {{ entry.instructorName }}</p>
    <p>Instructor Email: {{ entry.email }}</p>
    <p>Terms: {{ entry.terms }}</p>
    <p>Room: {{ entry.room }}</p>



{% endblock %}
", "singles/syllabus/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/syllabus/index.html");
    }
}
