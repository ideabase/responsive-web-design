<?php

/* settings/routes */
class __TwigTemplate_f64c6042054f025a04c240ee2d8b03368f25568068b0661c8f5d7b6d69581fce extends craft\web\twig\Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/routes", 3);
        $this->blocks = array(
            'actionButton' => array($this, 'block_actionButton'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        Craft::$app->controller->requireAdmin();
        // line 4
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Routes", "app");
        // line 10
        $context["crumbs"] = array(0 => array("label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")));
        // line 14
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 14, $this->source); })()), "registerAssetBundle", array(0 => "craft\\web\\assets\\routes\\RoutesAsset"), "method");
        // line 16
        craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 16, $this->source); })()), "registerTranslations", array(0 => "app", 1 => array(0 => "Global", 1 => "New route order saved.", 2 => "Couldn’t save new route order.", 3 => "If the URI looks like this", 4 => "Add a token", 5 => "Load this template", 6 => "Edit Route", 7 => "Create a new route", 8 => "Route Saved.", 9 => "Couldn’t save route.", 10 => "Are you sure you want to delete this route?", 11 => "Route deleted.")), "method");
        // line 32
        $context["routes"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 32, $this->source); })()), "routes", array()), "getDbRoutes", array(), "method");
        // line 58
        ob_start();
        // line 59
        echo "    Craft.routes.tokens = {
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new Twig_Error_Runtime('Variable "tokens" does not exist.', 60, $this->source); })()));
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
        foreach ($context['_seq'] as $context["name"] => $context["pattern"]) {
            // line 61
            echo "            ";
            if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                echo ",";
            }
            // line 62
            echo "            \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["name"], "js"), "html", null, true);
            echo "\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["pattern"], "js"), "html", null, true);
            echo "\"
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['pattern'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    };
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_actionButton($context, array $blocks = array())
    {
        // line 7
        echo "    <div id=\"add-route-btn\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New route", "app"), "html", null, true);
        echo "</div>
";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "    <p id=\"noroutes\"";
        if ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new Twig_Error_Runtime('Variable "routes" does not exist.', 36, $this->source); })())) {
            echo " class=\"hidden\"";
        }
        echo ">
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No routes exist yet.", "app"), "html", null, true);
        echo "
    </p>

    <div id=\"routes\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new Twig_Error_Runtime('Variable "routes" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 42
            echo "            <div class=\"route\" data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["route"], "id", array()), "html", null, true);
            echo "\"";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["route"], "siteId", array())) {
                echo " data-site-id=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["route"], "siteId", array()), "html", null, true);
                echo "\"";
            }
            echo ">
                <div class=\"uri-container\">";
            // line 44
            ob_start();
            // line 45
            echo "                        ";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 45, $this->source); })()), "app", array()), "getIsMultiSite", array(), "method")) {
                // line 46
                echo "                            <span class=\"site\">";
                echo twig_escape_filter($this->env, ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["route"], "siteId", array())) ? ($this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 46, $this->source); })()), "app", array()), "sites", array()), "getSiteById", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["route"], "siteId", array())), "method"), "name", array()), "site")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Global", "app"))), "html", null, true);
                echo "</span>
                        ";
            }
            // line 48
            echo "                        <span class=\"uri\">";
            echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["route"], "uriDisplayHtml", array());
            echo "</span>
                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 50
            echo "</div>
                <div class=\"template\">";
            // line 51
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["route"], "template", array()), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "settings/routes";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  158 => 51,  155 => 50,  149 => 48,  143 => 46,  140 => 45,  138 => 44,  127 => 42,  123 => 41,  116 => 37,  109 => 36,  106 => 35,  99 => 7,  96 => 6,  92 => 3,  88 => 64,  69 => 62,  64 => 61,  47 => 60,  44 => 59,  42 => 58,  40 => 32,  38 => 16,  36 => 14,  34 => 10,  32 => 4,  30 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Routes\"|t('app') %}

{% block actionButton %}
    <div id=\"add-route-btn\" class=\"btn submit add icon\">{{ \"New route\"|t('app') }}</div>
{% endblock %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}

{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\routes\\\\RoutesAsset\") %}

{% do view.registerTranslations('app', [
    \"Global\",
    \"New route order saved.\",
    \"Couldn’t save new route order.\",
    \"If the URI looks like this\",
    \"Add a token\",
    \"Load this template\",
    \"Edit Route\",
    \"Create a new route\",
    \"Route Saved.\",
    \"Couldn’t save route.\",
    \"Are you sure you want to delete this route?\",
    \"Route deleted.\",
]) %}


{% set routes = craft.routes.getDbRoutes() %}


{% block content %}
    <p id=\"noroutes\"{% if routes %} class=\"hidden\"{% endif %}>
        {{ \"No routes exist yet.\"|t('app') }}
    </p>

    <div id=\"routes\">
        {% for route in routes %}
            <div class=\"route\" data-id=\"{{ route.id }}\"{% if route.siteId %} data-site-id=\"{{ route.siteId }}\"{% endif %}>
                <div class=\"uri-container\">
                    {%- spaceless %}
                        {% if craft.app.getIsMultiSite() %}
                            <span class=\"site\">{{ route.siteId ? craft.app.sites.getSiteById(route.siteId).name|t('site') : \"Global\"|t('app') }}</span>
                        {% endif %}
                        <span class=\"uri\">{{ route.uriDisplayHtml|raw }}</span>
                    {% endspaceless -%}
                </div>
                <div class=\"template\">{{ route.template }}</div>
            </div>
        {% endfor %}
    </div>
{% endblock %}


{% js %}
    Craft.routes.tokens = {
        {% for name, pattern in tokens %}
            {% if not loop.first %},{% endif %}
            \"{{ name|e('js') }}\": \"{{ pattern|e('js') }}\"
        {% endfor %}
    };
{% endjs %}
", "settings/routes", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/settings/routes.html");
    }
}
