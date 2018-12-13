<?php

/* _elements/tableview/container */
class __TwigTemplate_4e55b013c8fa45277b21829e23783f1a30ce897221882f639d55e9428f3ae916 extends craft\web\twig\Template
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
        echo "<div class=\"tableview\">
    <table class=\"data fullwidth\"";
        // line 2
        if ((array_key_exists("structureEditable", $context) && (isset($context["structureEditable"]) || array_key_exists("structureEditable", $context) ? $context["structureEditable"] : (function () { throw new Twig_Error_Runtime('Variable "structureEditable" does not exist.', 2, $this->source); })()))) {
            echo " data-structure-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new Twig_Error_Runtime('Variable "structure" does not exist.', 2, $this->source); })()), "id", array()), "html", null, true);
            echo "\" data-max-levels=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new Twig_Error_Runtime('Variable "structure" does not exist.', 2, $this->source); })()), "maxLevels", array()), "html", null, true);
            echo "\"";
        }
        echo ">
        <thead>
        <tr>
            ";
        // line 5
        if ((isset($context["showCheckboxes"]) || array_key_exists("showCheckboxes", $context) ? $context["showCheckboxes"] : (function () { throw new Twig_Error_Runtime('Variable "showCheckboxes" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "                <td class=\"checkbox-cell\"></td>
            ";
        }
        // line 8
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 9
            echo "                ";
            $context["icon"] = ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 1, array(), "array", false, true), "icon", array(), "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 1, array(), "array"), "icon", array())) : (null));
            // line 10
            echo "                <th scope=\"col\" data-attribute=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 0, array(), "array"), "html", null, true);
            echo "\"";
            // line 11
            if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 11, $this->source); })())) {
                echo " data-icon=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 11, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 1, array(), "array"), "label", array()), "html", null, true);
                echo "\"";
            }
            echo ">";
            // line 12
            if ( !(isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 12, $this->source); })())) {
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 1, array(), "array"), "label", array()), "html", null, true);
            }
            // line 13
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $this->loadTemplate("_elements/tableview/elements", "_elements/tableview/container", 18)->display($context);
        // line 19
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/tableview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  81 => 18,  76 => 15,  69 => 13,  65 => 12,  56 => 11,  52 => 10,  49 => 9,  44 => 8,  40 => 6,  38 => 5,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tableview\">
    <table class=\"data fullwidth\"{% if structureEditable is defined and structureEditable %} data-structure-id=\"{{ structure.id }}\" data-max-levels=\"{{ structure.maxLevels }}\"{% endif %}>
        <thead>
        <tr>
            {% if showCheckboxes %}
                <td class=\"checkbox-cell\"></td>
            {% endif %}
            {% for attribute in attributes %}
                {% set icon = (attribute[1].icon is defined ? attribute[1].icon : null) %}
                <th scope=\"col\" data-attribute=\"{{ attribute[0] }}\"
                        {%- if icon %} data-icon=\"{{ icon }}\" title=\"{{ attribute[1].label }}\"{% endif %}>
                    {%- if not icon %}{{ attribute[1].label }}{% endif -%}
                </th>
            {% endfor %}
        </tr>
        </thead>
        <tbody>
            {% include \"_elements/tableview/elements\" %}
        </tbody>
    </table>
</div>
", "_elements/tableview/container", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_elements/tableview/container.html");
    }
}
