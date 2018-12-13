<?php

/* singles/about/index */
class __TwigTemplate_415c76d7b0ae777d2efc2c52ba2046c2edc0709d51ebb4d6174fcd92aa132091 extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout", "singles/about/index", 1);
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
    <h2>";
        // line 6
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new Twig_Error_Runtime('Variable "entry" does not exist.', 6, $this->source); })()), "subheadline", array()), "html", null, true);
        echo "</h2>
    <section class=\"main-content-area\">
\t\t\t\t<p class=\"section-introduction\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\"http://alistapart.com/article/responsive-web-design\">Responsive Web Design</a>. The article was quickly followed by the <a href=\"http://abookapart.com/products/responsive-web-design\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>
\t\t\t\t<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>
\t\t\t\t<h2>RWD at Kent State</h2>
\t\t\t\t<p>Kent State University's Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\"http://www.kent.edu/cci\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers.  The classes are hands-on and encourage active learning.  The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>
\t\t\t\t<p>I'm making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>
\t\t<h2>About the Instructor: Christopher Hallahan</h2>
\t\t<p>I work full time for Kent State's <a href=\"http://www.kent.edu/cci\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\"http://www.ideabasekent.com\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>
\t\t<p>My degrees are both from Kent State University - a bachelor's degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master's degree (2010) in User Experience Design (School of Library & Information Science).</p>
\t\t<p>You can learn more about me at my personal website, <a href=\"http://www.chrishallahan.com\">www.chrishallahan.com</a>.</p>
\t</section>
\t<aside>
\t\t<section class=\"instructor-aside\">

      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 21, $this->source); })()), "entries", array()), "section", array(0 => "Instructors"), "method"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 22
            echo "        ";
            if ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["asset"], "title", array()) == "Chris Hallahan")) {
                // line 23
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["asset"], "headshot", array()), "all", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 24
                    echo "\t\t\t       <img src=\"";
                    echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                    echo "\" alt=\"Chris's Headshot\">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "        ";
            }
            // line 27
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
\t\t\t<h3>Instructor Information</h3>
\t\t\t<div class=\"supplemental-information\">
\t\t\t\t<div class=\"supplemental-information-title\">Email</div>
\t\t\t\t<div class=\"supplemental-information-attribute\">
\t\t\t\t<a href=\"mailto:challahan@ideabasekent.com\">challahan@ideabasekent.com</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"supplemental-information-title\">Phone</div>
\t\t\t\t<div class=\"supplemental-information-attribute\">
\t\t\t\t(330) 672-3031</div>
\t\t\t\t<div class=\"supplemental-information-title\">Twitter</div>
\t\t\t\t<div class=\"supplemental-information-attribute\">
\t\t\t\t@challahan</div>
\t\t\t</div>
\t\t</section>
\t</aside>
";
    }

    public function getTemplateName()
    {
        return "singles/about/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  80 => 27,  77 => 26,  68 => 24,  63 => 23,  60 => 22,  56 => 21,  38 => 6,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layout\" %}


{% block content %}

    <h2>{{ entry.subheadline }}</h2>
    <section class=\"main-content-area\">
\t\t\t\t<p class=\"section-introduction\">In 2010, Ethan Marcotte published his famous article on A List Apart called <a href=\"http://alistapart.com/article/responsive-web-design\">Responsive Web Design</a>. The article was quickly followed by the <a href=\"http://abookapart.com/products/responsive-web-design\">Responsive Web Design Book</a>, published by A Book Apart in 2011. In this book, Marcotte popularized the idea of using flexible grids and CSS media queries to build a single website that scales across mobile phones, tablets, desktop computers, televisions and everything in between.</p>
\t\t\t\t<p>Since then, Responsive Web Design has become not just a technical solution for web design - it’s an entire process that brings multiple disciplines together to form one product that works across multiple devices. The responsive design process includes user experience, content strategy, information architecture, visual design, HTML/CSS/JavaScript development, usability testing and technical testing.</p>
\t\t\t\t<h2>RWD at Kent State</h2>
\t\t\t\t<p>Kent State University's Responsive Web Design classes were designed with the goal of bringing together students from multiple disciplines from within the <a href=\"http://www.kent.edu/cci\">College of Communication and Information</a> and giving them the skills they need to work with and become web designers.  The classes are hands-on and encourage active learning.  The class is constantly evolving, always integrating the latest advancements in design, development and user experience design.</p>
\t\t\t\t<p>I'm making this information public with the hope that others will find it helpful when creating similar programs at their educational institutions.</p>
\t\t<h2>About the Instructor: Christopher Hallahan</h2>
\t\t<p>I work full time for Kent State's <a href=\"http://www.kent.edu/cci\">College of Communication &amp; Information (CCI)</a> as a User Experience Designer at the college and <a href=\"http://www.ideabasekent.com\">IdeaBase</a>, a collaborative, student-run agency located in Downtown Kent, where we conduct research, design and development work for real-world clients, both inside and outside the university.</p>
\t\t<p>My degrees are both from Kent State University - a bachelor's degree (2008) in Electronic Media (School of Journalism and Mass Communication) and master's degree (2010) in User Experience Design (School of Library & Information Science).</p>
\t\t<p>You can learn more about me at my personal website, <a href=\"http://www.chrishallahan.com\">www.chrishallahan.com</a>.</p>
\t</section>
\t<aside>
\t\t<section class=\"instructor-aside\">

      {% for asset in craft.entries.section('Instructors').all() %}
        {% if asset.title == 'Chris Hallahan' %}
          {% for image in asset.headshot.all() %}
\t\t\t       <img src=\"{{ image }}\" alt=\"Chris's Headshot\">
          {% endfor %}
        {% endif %}
      {% endfor %}

\t\t\t<h3>Instructor Information</h3>
\t\t\t<div class=\"supplemental-information\">
\t\t\t\t<div class=\"supplemental-information-title\">Email</div>
\t\t\t\t<div class=\"supplemental-information-attribute\">
\t\t\t\t<a href=\"mailto:challahan@ideabasekent.com\">challahan@ideabasekent.com</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"supplemental-information-title\">Phone</div>
\t\t\t\t<div class=\"supplemental-information-attribute\">
\t\t\t\t(330) 672-3031</div>
\t\t\t\t<div class=\"supplemental-information-title\">Twitter</div>
\t\t\t\t<div class=\"supplemental-information-attribute\">
\t\t\t\t@challahan</div>
\t\t\t</div>
\t\t</section>
\t</aside>
{% endblock %}
", "singles/about/index", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/singles/about/index.html");
    }
}
