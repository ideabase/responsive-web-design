<?php

/* __string_template__e5fd39667417ea03bdbcac238c537f152f9ff939adb4637fe65f8c44a337837e */
class __TwigTemplate_f1118a324e0da913f069baf29476cb9265efc830bc421af424d1ec39be3e9565 extends craft\web\twig\Template
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
        echo "instructors/";
        echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), ($context["object"] ?? null), "slug", array());
    }

    public function getTemplateName()
    {
        return "__string_template__e5fd39667417ea03bdbcac238c537f152f9ff939adb4637fe65f8c44a337837e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("instructors/{{object.slug|raw}}", "__string_template__e5fd39667417ea03bdbcac238c537f152f9ff939adb4637fe65f8c44a337837e", "");
    }
}
