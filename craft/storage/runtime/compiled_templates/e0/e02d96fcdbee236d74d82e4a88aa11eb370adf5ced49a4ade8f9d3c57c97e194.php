<?php

/* singles/advanced/index */
class __TwigTemplate_5f484d9d9dc036f7d191ed665142c8d63b58a67ecf866fcd9f7998645866256f extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/advanced/index", 1);
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
<h1> ";
        // line 5
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 5, $this->source); })()), "subheadline", array()), "html", null, true);
        echo " </h1>

<section>
\t\t<h2>Course Materials</h2>
\t\t<div class=\"gallery-container gallery-container__advanced\">
\t\t\t<dl class=\"gallery carousel\">
        <ul>
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 12, $this->source); })()), "relatedLinksAndDownloads", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 13
            echo "            ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()) == "Syllabus")) {
                // line 14
                echo "              <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()), "html", null, true);
                echo "</a></li>
            ";
            } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 15
$context["block"], "linkName", array()) == "Calendar")) {
                // line 16
                echo "              <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()), "html", null, true);
                echo "</a></li>
            ";
            } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 17
$context["block"], "linkName", array()) == "Assignments")) {
                // line 18
                echo "              <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()), "html", null, true);
                echo "</a></li>
            ";
            } elseif ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 19
$context["block"], "linkName", array()) == "Groups")) {
                // line 20
                echo "              <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "internalUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "linkName", array()), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 22
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "      </ul>
\t\t\t</dl>
\t\t</div>
\t</section>
\t<section class=\"main-content-area main-content-area__columns-container\">
\t\t<section class=\"main-content-area__columns\">
\t\t<h2>Course Tools</h2>
\t\t<p>We'll be using the following tools to complete the project.</p>
\t\t<h4><a href=\"http://github.com/ideabase/khs\">GitHub Repository</a></h4>
\t\t<p class=\"item-summary\">This is the central codebase for the website.
\t\t<h4><a href=\"https://trello.com/b/7GlYO2lF/kent-historical-society-advanced-responsive-design-2018\">Trello (Scrum Board)</a></h4>
\t\t<p class=\"item-summary\">Used to organize project sprints and backlogs (todo's).</p>
\t\t<h4><a href=\"https://basecamp.com/1762189/projects/14815560\">Basecamp</a></h4>
\t\t<p class=\"item-summary\">Used to handle client communication and project-related files.</p>
\t\t<h4><a href=\"https://rwdkent.slack.com\">Slack</a></h4>
\t\t<p class=\"item-summary\">Used for real-time communication/chat between team members.</p>
\t</section>
\t\t<section class=\"main-content-area__columns\">
\t\t<h2>Course Software</h2>
\t\t<p>We'll be using the following software in the course.  See the instructor for any software that requires a license key.</p>
\t\t<ul>
\t\t\t<li><a href=\"https://www.git-tower.com\">Tower</a></li>
\t\t\t<li><a href=\"http://sketchapp.com\">Sketch</a></li>
\t\t\t<li><a href=\"http://atom.io\">Atom</a></li>
\t\t\t<li><a href=\"https://www.mamp.info/en/mamp-pro/\">MAMP Pro</a></li>
\t\t\t<li><a href=\"http://www.slack.com\">Slack</a></li>
\t\t</ul>
\t</section>
\t<section class=\"main-content-area__columns\">
\t\t<h2>Documentation</h2>
\t\t<p>Instructions on how to perform key technical tasks in the course.</p>
\t\t<ul>
\t\t\t<li><a href=\"docs/tower.html\">1 - Tower + GitHub</a></li>
\t\t\t<li><a href=\"docs/craft.html\">2 - MAMP Pro + Craft CMS Setup</a></li>
\t\t\t<li><a href=\"docs/grunt.html\">3 - Grunt + SASS</a></li>
\t\t\t<li><a href=\"docs/craft2.html\">4 - Craft CMS Templating</a></li>
\t\t\t<li><a href=\"docs/craft3.html\">5 - Updating Your Database</a></li>
\t\t</ul>
\t</section>
\t<br/>
\t</section>
\t<aside role=\"complementary\">
\t\t<section class=\"basic-information\">
\t\t<h2>Registration Details</h2>
\t\t\t<dl class=\"detail-listing group\">
\t\t\t\t<dt>Instructor:</dt>
\t\t\t\t<dd>Christopher Hallahan</dd>
\t\t\t\t<dt>Terms:</dt>
\t\t\t\t<dd>Spring 2018</dd>
\t\t\t\t<dt>Undergrad:</dt>
\t\t\t\t<dd>CCI 40095-002 - 20826</dd>
\t\t\t\t<dt>Grad:</dt>
\t\t\t\t<dd>CCI 50095-002 - 20827</dd>
\t\t\t\t<dt>Day/Time:</dt>
\t\t\t\t<dd>Tuesdays, 3:45 - 5:00 p.m. and Thursdays, 3:00 - 5:00 p.m.</dd>
\t\t\t\t<dt>Room:</dt>
\t\t\t\t<dd><a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent</dd>
\t\t\t\t<dt>Prereqs:</dt>
\t\t\t\t<dd>Instructor Permission Required</dd>
\t\t\t</dl>
\t\t</section>
\t\t<section class=\"about-course\">
\t\t\t\t<h2>About the Course</h2>
\t\t\t\t<p>Advanced Responsive Web Design takes the key principles covered in the basic Responsive Web Design course (or equivalent courses) and expands upon them within the framework of a client project through the design and development of website in a content management system (CMS).</p>
\t\t</section>
\t\t<!--<section class=\"about-course\">
\t\t\t\t<h2>About the Course</h2>
\t\t\t\t<p>In Kent State University's Responsive Web Design course, you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective and ensure its functionality for users in terms of both usability and performance.</p>
\t\t</section>-->
\t</aside>

";
    }

    public function getTemplateName()
    {
        return "singles/advanced/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  90 => 22,  82 => 20,  80 => 19,  73 => 18,  71 => 17,  64 => 16,  62 => 15,  55 => 14,  52 => 13,  48 => 12,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}

{% block content %}

<h1> {{ entry.subheadline }} </h1>

<section>
\t\t<h2>Course Materials</h2>
\t\t<div class=\"gallery-container gallery-container__advanced\">
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
\t<section class=\"main-content-area main-content-area__columns-container\">
\t\t<section class=\"main-content-area__columns\">
\t\t<h2>Course Tools</h2>
\t\t<p>We'll be using the following tools to complete the project.</p>
\t\t<h4><a href=\"http://github.com/ideabase/khs\">GitHub Repository</a></h4>
\t\t<p class=\"item-summary\">This is the central codebase for the website.
\t\t<h4><a href=\"https://trello.com/b/7GlYO2lF/kent-historical-society-advanced-responsive-design-2018\">Trello (Scrum Board)</a></h4>
\t\t<p class=\"item-summary\">Used to organize project sprints and backlogs (todo's).</p>
\t\t<h4><a href=\"https://basecamp.com/1762189/projects/14815560\">Basecamp</a></h4>
\t\t<p class=\"item-summary\">Used to handle client communication and project-related files.</p>
\t\t<h4><a href=\"https://rwdkent.slack.com\">Slack</a></h4>
\t\t<p class=\"item-summary\">Used for real-time communication/chat between team members.</p>
\t</section>
\t\t<section class=\"main-content-area__columns\">
\t\t<h2>Course Software</h2>
\t\t<p>We'll be using the following software in the course.  See the instructor for any software that requires a license key.</p>
\t\t<ul>
\t\t\t<li><a href=\"https://www.git-tower.com\">Tower</a></li>
\t\t\t<li><a href=\"http://sketchapp.com\">Sketch</a></li>
\t\t\t<li><a href=\"http://atom.io\">Atom</a></li>
\t\t\t<li><a href=\"https://www.mamp.info/en/mamp-pro/\">MAMP Pro</a></li>
\t\t\t<li><a href=\"http://www.slack.com\">Slack</a></li>
\t\t</ul>
\t</section>
\t<section class=\"main-content-area__columns\">
\t\t<h2>Documentation</h2>
\t\t<p>Instructions on how to perform key technical tasks in the course.</p>
\t\t<ul>
\t\t\t<li><a href=\"docs/tower.html\">1 - Tower + GitHub</a></li>
\t\t\t<li><a href=\"docs/craft.html\">2 - MAMP Pro + Craft CMS Setup</a></li>
\t\t\t<li><a href=\"docs/grunt.html\">3 - Grunt + SASS</a></li>
\t\t\t<li><a href=\"docs/craft2.html\">4 - Craft CMS Templating</a></li>
\t\t\t<li><a href=\"docs/craft3.html\">5 - Updating Your Database</a></li>
\t\t</ul>
\t</section>
\t<br/>
\t</section>
\t<aside role=\"complementary\">
\t\t<section class=\"basic-information\">
\t\t<h2>Registration Details</h2>
\t\t\t<dl class=\"detail-listing group\">
\t\t\t\t<dt>Instructor:</dt>
\t\t\t\t<dd>Christopher Hallahan</dd>
\t\t\t\t<dt>Terms:</dt>
\t\t\t\t<dd>Spring 2018</dd>
\t\t\t\t<dt>Undergrad:</dt>
\t\t\t\t<dd>CCI 40095-002 - 20826</dd>
\t\t\t\t<dt>Grad:</dt>
\t\t\t\t<dd>CCI 50095-002 - 20827</dd>
\t\t\t\t<dt>Day/Time:</dt>
\t\t\t\t<dd>Tuesdays, 3:45 - 5:00 p.m. and Thursdays, 3:00 - 5:00 p.m.</dd>
\t\t\t\t<dt>Room:</dt>
\t\t\t\t<dd><a href=\"http://www.ideabasekent.com/directions\">IdeaBase</a>, Downtown Kent</dd>
\t\t\t\t<dt>Prereqs:</dt>
\t\t\t\t<dd>Instructor Permission Required</dd>
\t\t\t</dl>
\t\t</section>
\t\t<section class=\"about-course\">
\t\t\t\t<h2>About the Course</h2>
\t\t\t\t<p>Advanced Responsive Web Design takes the key principles covered in the basic Responsive Web Design course (or equivalent courses) and expands upon them within the framework of a client project through the design and development of website in a content management system (CMS).</p>
\t\t</section>
\t\t<!--<section class=\"about-course\">
\t\t\t\t<h2>About the Course</h2>
\t\t\t\t<p>In Kent State University's Responsive Web Design course, you will learn the fundamental principles for developing standards-based web sites from a mobile-first and content-first perspective and ensure its functionality for users in terms of both usability and performance.</p>
\t\t</section>-->
\t</aside>

{% endblock %}
", "singles/advanced/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/advanced/index.html");
    }
}
