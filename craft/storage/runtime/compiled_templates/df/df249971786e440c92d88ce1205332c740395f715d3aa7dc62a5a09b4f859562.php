<?php

/* global/footer.html */
class __TwigTemplate_e324870a0f62534bde44089b430b47699f53c890e68b5e7b7edb203abff98503 extends craft\web\twig\Template
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
        echo "<footer class=\"group\" role=\"contentinfo\">
\t<div class=\"footer-inner\">
\t<div class=\"footer-contact-information\">
\t\t\t<p><a href=\"http://www.kent.edu/cci\">College of Communication & Information</a></p>
\t\t\t<p><a href=\"http://www.ideabasekent.com\">IdeaBase: Powered by Kent State Students</a></p>
\t\t\t<a class=\"footer-instructor\" href=\"mailto:challahan@gmail.com\">Instructor: Christopher Hallahan</a>
\t\t\t<div class=\"footer-supplemental\">
\t\t\t\t<a href=\"http://www.twitter.com/rwdkent\">Follow @RWDkent on Twitter</a>
\t\t\t\t<a href=\"https://github.com/KentStateWeb/rwd/tree/gh-pages\">View this Site on GitHub</a>
\t\t\t</div>
\t</div>
\t<div class=\"footer-logo\">
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new Twig_Error_Runtime('Variable "footer" does not exist.', 13, $this->source); })()), "footerImage", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 14
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["image"], "url", array()), "html", null, true);
            echo "\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</div>
\t</div>
</footer>

<link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Oswald\" rel=\"stylesheet\">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.rwdkent.com/analytics.js','ga');
  ga('create', 'UA-52690730-5', 'auto');
  ga('send', 'pageview');
</script>

";
        // line 30
        call_user_func_array($this->env->getFunction('endBody')->getCallable(), array());
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "global/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  50 => 16,  41 => 14,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"group\" role=\"contentinfo\">
\t<div class=\"footer-inner\">
\t<div class=\"footer-contact-information\">
\t\t\t<p><a href=\"http://www.kent.edu/cci\">College of Communication & Information</a></p>
\t\t\t<p><a href=\"http://www.ideabasekent.com\">IdeaBase: Powered by Kent State Students</a></p>
\t\t\t<a class=\"footer-instructor\" href=\"mailto:challahan@gmail.com\">Instructor: Christopher Hallahan</a>
\t\t\t<div class=\"footer-supplemental\">
\t\t\t\t<a href=\"http://www.twitter.com/rwdkent\">Follow @RWDkent on Twitter</a>
\t\t\t\t<a href=\"https://github.com/KentStateWeb/rwd/tree/gh-pages\">View this Site on GitHub</a>
\t\t\t</div>
\t</div>
\t<div class=\"footer-logo\">
  {% for image in footer.footerImage %}
      <img src=\"{{ image.url }}\">
  {% endfor%}
\t</div>
\t</div>
</footer>

<link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Oswald\" rel=\"stylesheet\">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.rwdkent.com/analytics.js','ga');
  ga('create', 'UA-52690730-5', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
", "global/footer.html", "/Users/matt/Documents/ResponsiveWebDesign/craft/templates/global/footer.html");
    }
}
