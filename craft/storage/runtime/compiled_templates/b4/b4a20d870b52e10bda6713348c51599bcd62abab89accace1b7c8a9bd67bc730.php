<?php

/* singles/basic/assignments/index */
class __TwigTemplate_2f2f9240055b47c900f75abdbc72e02e717fdcbdd005d865a2acafa425efe2d6 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/basic/assignments/index", 1);
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
    <ul>
      <li> ";
        // line 6
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 6, $this->source); })()), "assignmentType", array()), "html", null, true);
        echo " </li>
      <li> ";
        // line 7
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 7, $this->source); })()), "points", array()), "html", null, true);
        echo " </li>
    </ul>



";
    }

    public function getTemplateName()
    {
        return "singles/basic/assignments/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}

{% block content %}

    <ul>
      <li> {{ entry.assignmentType }} </li>
      <li> {{ entry.points }} </li>
    </ul>



{% endblock %}
", "singles/basic/assignments/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/basic/assignments/index.html");
    }
}
