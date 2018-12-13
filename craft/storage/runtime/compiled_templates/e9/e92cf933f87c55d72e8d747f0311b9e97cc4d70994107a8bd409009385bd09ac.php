<?php

/* users/_photo */
class __TwigTemplate_a7603f05b2307cc8a99aff2242aa30d008bac9fb3baa9343019ac526f4cc590e extends craft\web\twig\Template
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
        $context["volumeId"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 1, $this->source); })()), "app", array()), "getSystemSettings", array()), "getSetting", array(0 => "users", 1 => "photoVolumeId"), "method");
        // line 2
        if ((isset($context["volumeId"]) || array_key_exists("volumeId", $context) ? $context["volumeId"] : (function () { throw new Twig_Error_Runtime('Variable "volumeId" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <div class=\"user-photo\" data-user=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->source); })()), "id", array()), "html", null, true);
            echo "\">
        <div id=\"current-photo\">
            <img sizes=\"100px\" srcset=\"";
            // line 5
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->source); })()), "getThumbUrl", array(0 => 100), "method"), "html", null, true);
            echo " 100w, ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->source); })()), "getThumbUrl", array(0 => 200), "method"), "html", null, true);
            echo " 200w\" alt=\"\">
        </div>
            <div class=\"user-photo-controls\">
                <input type=\"file\" name=\"photo\" class=\"hidden\" />
                ";
            // line 9
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->source); })()), "photoId", array())) {
                // line 10
                echo "                    <div class=\"btn upload-photo\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Change photo", "app"), "html", null, true);
                echo "</div>
                    <div class=\"btn delete-photo\">";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete photo", "app"), "html", null, true);
                echo "</div><br /><br />
                    <div class=\"btn edit-photo\" data-photoid=\"";
                // line 12
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "photoId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Edit photo", "app"), "html", null, true);
                echo "</div>
                ";
            } else {
                // line 14
                echo "                    <div class=\"btn upload-photo\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Upload a photo", "app"), "html", null, true);
                echo "</div>
                ";
            }
            // line 16
            echo "            </div>
    </div>
";
        } else {
            // line 19
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Please set a volume for storing the user photos in user settings page first.", "app"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "users/_photo";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  66 => 16,  60 => 14,  53 => 12,  49 => 11,  44 => 10,  42 => 9,  33 => 5,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set volumeId = craft.app.getSystemSettings.getSetting('users', 'photoVolumeId') %}
{% if volumeId %}
    <div class=\"user-photo\" data-user=\"{{ user.id }}\">
        <div id=\"current-photo\">
            <img sizes=\"100px\" srcset=\"{{ user.getThumbUrl(100) }} 100w, {{ user.getThumbUrl(200) }} 200w\" alt=\"\">
        </div>
            <div class=\"user-photo-controls\">
                <input type=\"file\" name=\"photo\" class=\"hidden\" />
                {% if user.photoId %}
                    <div class=\"btn upload-photo\">{{ \"Change photo\"|t('app') }}</div>
                    <div class=\"btn delete-photo\">{{ \"Delete photo\"|t('app') }}</div><br /><br />
                    <div class=\"btn edit-photo\" data-photoid=\"{{ user.photoId }}\">{{ \"Edit photo\"|t('app') }}</div>
                {% else %}
                    <div class=\"btn upload-photo\">{{ \"Upload a photo\"|t('app') }}</div>
                {% endif %}
            </div>
    </div>
{% else %}
    <p>{{ 'Please set a volume for storing the user photos in user settings page first.'|t('app') }}</p>
{% endif %}
", "users/_photo", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/users/_photo.html");
    }
}
