<?php

/* _includes/fields */
class __TwigTemplate_900630775aa885ebe059ab1b67c6aed2aac7c645b854ec3fad6ddaf3a6595a04 extends craft\web\twig\Template
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
        if ( !array_key_exists("element", $context)) {
            $context["element"] = null;
        }
        // line 2
        if ( !array_key_exists("namespace", $context)) {
            $context["namespace"] = "fields";
        }
        // line 3
        echo "
";
        // line 4
        $_namespace = (isset($context["namespace"]) || array_key_exists("namespace", $context) ? $context["namespace"] : (function () { throw new Twig_Error_Runtime('Variable "namespace" does not exist.', 4, $this->source); })());
        if ($_namespace) {
            $_originalNamespace = Craft::$app->getView()->getNamespace();
            Craft::$app->getView()->setNamespace(Craft::$app->getView()->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 5
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 5, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 6
                    echo "        ";
                    $this->loadTemplate("_includes/field", "_includes/fields", 6)->display(array("field" =>                     // line 7
$context["field"], "required" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                     // line 8
$context["field"], "required", array()), "element" =>                     // line 9
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 9, $this->source); })()), "static" => ((                    // line 10
array_key_exists("static", $context)) ? ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 10, $this->source); })())) : (null))));
                    // line 12
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo Craft::$app->getView()->namespaceInputs(ob_get_clean(), $_namespace);
            Craft::$app->getView()->setNamespace($_originalNamespace);
        } else {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "        ";
                $this->loadTemplate("_includes/field", "_includes/fields", 6)->display(array("field" =>                 // line 7
$context["field"], "required" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(),                 // line 8
$context["field"], "required", array()), "element" =>                 // line 9
(isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 9, $this->source); })()), "static" => ((                // line 10
array_key_exists("static", $context)) ? ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 10, $this->source); })())) : (null))));
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        unset($_originalNamespace, $_namespace);
    }

    public function getTemplateName()
    {
        return "_includes/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  77 => 10,  76 => 9,  75 => 8,  74 => 7,  72 => 6,  67 => 5,  53 => 12,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  46 => 6,  41 => 5,  34 => 4,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if element is not defined %}{% set element = null %}{% endif %}
{% if namespace is not defined %}{% set namespace = 'fields' %}{% endif %}

{% namespace namespace %}
    {% for field in fields %}
        {% include \"_includes/field\" with {
            field:    field,
            required: field.required,
            element:  element,
            static:   (static is defined ? static : null)
        } only %}
    {% endfor %}
{% endnamespace %}
", "_includes/fields", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/fields.html");
    }
}
