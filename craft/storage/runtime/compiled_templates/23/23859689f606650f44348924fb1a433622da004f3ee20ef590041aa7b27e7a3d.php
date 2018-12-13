<?php

/* singles/basic/index */
class __TwigTemplate_6b424737b00db0bf86c59cc33b6067b07990668595f2f00e6c916e237bc98d38 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/basic/index", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <h1> ";
        // line 6
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 6, $this->source); })()), "subheadline", array()), "html", null, true);
        echo " </h1>

    <section>
\t\t<h2>Course Materials</h2>
\t\t<div class=\"gallery-container\">
\t\t\t<dl class=\"gallery carousel\">
        <ul>
           ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 13, $this->source); })()), "relatedLinksAndDownloads", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 14
            echo "               ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()) == "Syllabus")) {
                // line 15
                echo "                   <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()), "html", null, true);
                echo "</a></li>
               ";
            } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 16
$context["block"], "linkName", array()) == "Calendar")) {
                // line 17
                echo "                   <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()), "html", null, true);
                echo "</a></li>
               ";
            } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 18
$context["block"], "linkName", array()) == "Assignments")) {
                // line 19
                echo "                   <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()), "html", null, true);
                echo "</a></li>
               ";
            } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 20
$context["block"], "linkName", array()) == "Groups")) {
                // line 21
                echo "                   <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()), "html", null, true);
                echo "</a></li>
               ";
            }
            // line 23
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "       </ul>
\t\t\t</dl>
\t\t</div>
\t</section>
\t<section class=\"main-content-area\">
\t\t<section>
\t\t\t<h2>Announcements</h2>
\t\t\t<div class=\"blog-posts group\">

\t\t\t</div>
\t\t\t<a class=\"small button\" href=\"/blog\">View All Announcements</a>
\t\t</section>
\t</section>
\t<aside role=\"complementary\">
\t\t<section class=\"basic-information\">
\t\t<h2>Registration Details</h2>
\t\t\t<dl class=\"detail-listing group\">
\t\t\t\t<dt>Instructor:</dt>
\t\t\t\t<dd>Christopher Hallahan and David Roll</dd>
\t\t\t\t<dt>Terms:</dt>
\t\t\t\t<dd>Fall 2018 (2 Sections)</dd>
\t\t\t\t<dt>Undergrad:</dt>
\t\t\t\t<dd>CCI 46001-001/002 - 11708/21459 (F-2018)</dd>
\t\t\t\t<dt>Grad:</dt>
\t\t\t\t<dd>CCI 56001-001/002 - 11709/21460 (F-2018)</dd>
\t\t\t\t<dt>Day/Time:</dt>
\t\t\t\t<dd>Tuesdays, 5:30 p.m. - 8:15 p.m. or Tuesday/Thursday, 11 a.m. - 12:25 p.m.</dd>
\t\t\t\t<dt>Room:</dt>
\t\t\t\t<dd><a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent or Taylor Hall, 331</dd>
\t\t\t</dl>
\t\t</section>
\t\t<section class=\"about-course\">
\t\t\t\t<h2>About the Course</h2>
\t\t\t\t<p>In Kent State University's basic Responsive Web Design course, you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective and ensure its functionality for users in terms of both usability and performance.</p>
\t\t</section>
\t</aside>

";
    }

    public function getTemplateName()
    {
        return "singles/basic/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  90 => 23,  82 => 21,  80 => 20,  73 => 19,  71 => 18,  64 => 17,  62 => 16,  55 => 15,  52 => 14,  48 => 13,  38 => 6,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}


{% block content %}

    <h1> {{ entry.subheadline }} </h1>

    <section>
\t\t<h2>Course Materials</h2>
\t\t<div class=\"gallery-container\">
\t\t\t<dl class=\"gallery carousel\">
        <ul>
           {% for block in entry.relatedLinksAndDownloads %}
               {% if block.linkName == 'Syllabus' %}
                   <li><a href=\"{{ block.internalUrl }}\"> {{ block.linkName }}</a></li>
               {% elseif block.linkName == 'Calendar' %}
                   <li><a href=\"{{ block.internalUrl }}\"> {{ block.linkName }}</a></li>
               {% elseif block.linkName == 'Assignments' %}
                   <li><a href=\"{{ block.internalUrl }}\"> {{ block.linkName }}</a></li>
               {% elseif block.linkName == 'Groups' %}
                   <li><a href=\"{{ block.internalUrl }}\"> {{ block.linkName }}</a></li>
               {% endif %}
           {% endfor %}
       </ul>
\t\t\t</dl>
\t\t</div>
\t</section>
\t<section class=\"main-content-area\">
\t\t<section>
\t\t\t<h2>Announcements</h2>
\t\t\t<div class=\"blog-posts group\">

\t\t\t</div>
\t\t\t<a class=\"small button\" href=\"/blog\">View All Announcements</a>
\t\t</section>
\t</section>
\t<aside role=\"complementary\">
\t\t<section class=\"basic-information\">
\t\t<h2>Registration Details</h2>
\t\t\t<dl class=\"detail-listing group\">
\t\t\t\t<dt>Instructor:</dt>
\t\t\t\t<dd>Christopher Hallahan and David Roll</dd>
\t\t\t\t<dt>Terms:</dt>
\t\t\t\t<dd>Fall 2018 (2 Sections)</dd>
\t\t\t\t<dt>Undergrad:</dt>
\t\t\t\t<dd>CCI 46001-001/002 - 11708/21459 (F-2018)</dd>
\t\t\t\t<dt>Grad:</dt>
\t\t\t\t<dd>CCI 56001-001/002 - 11709/21460 (F-2018)</dd>
\t\t\t\t<dt>Day/Time:</dt>
\t\t\t\t<dd>Tuesdays, 5:30 p.m. - 8:15 p.m. or Tuesday/Thursday, 11 a.m. - 12:25 p.m.</dd>
\t\t\t\t<dt>Room:</dt>
\t\t\t\t<dd><a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent or Taylor Hall, 331</dd>
\t\t\t</dl>
\t\t</section>
\t\t<section class=\"about-course\">
\t\t\t\t<h2>About the Course</h2>
\t\t\t\t<p>In Kent State University's basic Responsive Web Design course, you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective and ensure its functionality for users in terms of both usability and performance.</p>
\t\t</section>
\t</aside>

{% endblock %}
", "singles/basic/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/basic/index.html");
    }
}
