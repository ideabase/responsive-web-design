<?php

/* _elements/tableview/elements */
class __TwigTemplate_166999944ec7ce377f9bf86ae9a283f10835f94e48fcbfeaac3ef1f93440879d extends craft\web\twig\Template
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
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["structure"] = ((array_key_exists("structure", $context)) ? ((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new Twig_Error_Runtime('Variable "structure" does not exist.', 3, $this->source); })())) : (null));
        // line 4
        $context["structureEditable"] = ((array_key_exists("structureEditable", $context)) ? ((isset($context["structureEditable"]) || array_key_exists("structureEditable", $context) ? $context["structureEditable"] : (function () { throw new Twig_Error_Runtime('Variable "structureEditable" does not exist.', 4, $this->source); })())) : (false));
        // line 6
        if ((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new Twig_Error_Runtime('Variable "structure" does not exist.', 6, $this->source); })())) {
            // line 7
            $context["basePadding"] = ((((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new Twig_Error_Runtime('Variable "context" does not exist.', 7, $this->source); })()) == "index")) ? (((20 + (((isset($context["showCheckboxes"]) || array_key_exists("showCheckboxes", $context) ? $context["showCheckboxes"] : (function () { throw new Twig_Error_Runtime('Variable "showCheckboxes" does not exist.', 7, $this->source); })())) ? (7) : (0))) + (((isset($context["structureEditable"]) || array_key_exists("structureEditable", $context) ? $context["structureEditable"] : (function () { throw new Twig_Error_Runtime('Variable "structureEditable" does not exist.', 7, $this->source); })())) ? (14) : (0)))) : (7));
            // line 8
            echo "    ";
            $context["padding"] = (((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new Twig_Error_Runtime('Variable "craft" does not exist.', 8, $this->source); })()), "app", array()), "locale", array()), "getOrientation", array(), "method") == "ltr")) ? ("left") : ("right"));
        }
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 11, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 12
            echo "    <tr data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["element"], "id", array()), "html", null, true);
            echo "\"";
            if ((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new Twig_Error_Runtime('Variable "structure" does not exist.', 12, $this->source); })())) {
                echo " data-level=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["element"], "level", array()), "html", null, true);
                echo "\" data-descendants=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["element"], "getTotalDescendants", array(), "method"), "html", null, true);
                echo "\"";
            }
            if (twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["element"], "id", array()), (isset($context["disabledElementIds"]) || array_key_exists("disabledElementIds", $context) ? $context["disabledElementIds"] : (function () { throw new Twig_Error_Runtime('Variable "disabledElementIds" does not exist.', 12, $this->source); })()))) {
                echo " class=\"disabled\"";
            }
            echo ">
        ";
            // line 13
            if ((isset($context["showCheckboxes"]) || array_key_exists("showCheckboxes", $context) ? $context["showCheckboxes"] : (function () { throw new Twig_Error_Runtime('Variable "showCheckboxes" does not exist.', 13, $this->source); })())) {
                // line 14
                echo "            <td class=\"checkbox-cell\"><div class=\"checkbox\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Select", "app"), "html", null, true);
                echo "\"></div></td>
        ";
            }
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 16, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 17
                echo "            ";
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    // line 18
                    echo "                <td data-title=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 1, array(), "array"), "label", array()), "html", null, true);
                    echo "\"";
                    if ((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new Twig_Error_Runtime('Variable "structure" does not exist.', 18, $this->source); })())) {
                        echo " style=\"padding-";
                        echo twig_escape_filter($this->env, (isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new Twig_Error_Runtime('Variable "padding" does not exist.', 18, $this->source); })()), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, ((isset($context["basePadding"]) || array_key_exists("basePadding", $context) ? $context["basePadding"] : (function () { throw new Twig_Error_Runtime('Variable "basePadding" does not exist.', 18, $this->source); })()) + ((craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["element"], "level", array()) - 1) * 44)), "html", null, true);
                        echo "px;\"";
                    }
                    echo " data-titlecell=\"\">";
                    // line 19
                    if ((isset($context["structureEditable"]) || array_key_exists("structureEditable", $context) ? $context["structureEditable"] : (function () { throw new Twig_Error_Runtime('Variable "structureEditable" does not exist.', 19, $this->source); })())) {
                        echo "<a class=\"move icon\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                        echo "\" role=\"button\">&nbsp;</a>";
                    }
                    // line 20
                    if (((isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new Twig_Error_Runtime('Variable "structure" does not exist.', 20, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["element"], "getHasDescendants", array(), "method"))) {
                        echo "<span class=\"toggle";
                        if (!twig_in_filter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["element"], "id", array()), (isset($context["collapsedElementIds"]) || array_key_exists("collapsedElementIds", $context) ? $context["collapsedElementIds"] : (function () { throw new Twig_Error_Runtime('Variable "collapsedElementIds" does not exist.', 20, $this->source); })()))) {
                            echo " expanded";
                        }
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show/hide children", "app"), "html", null, true);
                        echo "\"></span>";
                    }
                    // line 21
                    $this->loadTemplate("_elements/element", "_elements/tableview/elements", 21)->display($context);
                    // line 22
                    echo "</td>
            ";
                } else {
                    // line 24
                    echo "                <td data-title=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 1, array(), "array"), "label", array()), "html", null, true);
                    echo "\" data-attr=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 0, array(), "array"), "html", null, true);
                    echo "\">";
                    // line 25
                    echo craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["element"], "getTableAttributeHtml", array(0 => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["attribute"], 0, array(), "array")), "method");
                    // line 26
                    echo "</td>
            ";
                }
                // line 28
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_elements/tableview/elements";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 31,  162 => 29,  148 => 28,  144 => 26,  142 => 25,  136 => 24,  132 => 22,  130 => 21,  120 => 20,  114 => 19,  102 => 18,  99 => 17,  81 => 16,  75 => 14,  73 => 13,  57 => 12,  40 => 11,  36 => 8,  34 => 7,  32 => 6,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}

{% set structure = structure is defined ? structure : null -%}
{% set structureEditable = structureEditable is defined ? structureEditable : false -%}

{% if structure -%}
    {% set basePadding = (context == 'index' ? 20 + (showCheckboxes ? 7 : 0) + (structureEditable ? 14 : 0) : 7) %}
    {% set padding = craft.app.locale.getOrientation() == 'ltr' ? 'left' : 'right' -%}
{% endif -%}

{% for element in elements %}
    <tr data-id=\"{{ element.id }}\"{% if structure %} data-level=\"{{ element.level }}\" data-descendants=\"{{ element.getTotalDescendants() }}\"{% endif %}{% if element.id in disabledElementIds %} class=\"disabled\"{% endif %}>
        {% if showCheckboxes %}
            <td class=\"checkbox-cell\"><div class=\"checkbox\" title=\"{{ 'Select'|t('app') }}\"></div></td>
        {% endif %}
        {% for attribute in attributes %}
            {% if loop.first %}
                <td data-title=\"{{ attribute[1].label }}\"{% if structure %} style=\"padding-{{ padding }}: {{ basePadding + (element.level - 1) * 44 }}px;\"{% endif %} data-titlecell=\"\">
                    {%- if structureEditable %}<a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\">&nbsp;</a>{% endif %}
                    {%- if structure and element.getHasDescendants() %}<span class=\"toggle{% if element.id not in collapsedElementIds %} expanded{% endif %}\" title=\"{{ 'Show/hide children'|t('app') }}\"></span>{% endif %}
                    {%- include \"_elements/element\" -%}
                </td>
            {% else %}
                <td data-title=\"{{ attribute[1].label }}\" data-attr=\"{{ attribute[0] }}\">
                    {{- element.getTableAttributeHtml(attribute[0])|raw -}}
                </td>
            {% endif %}
        {% endfor %}
    </tr>
{% endfor %}

{% endspaceless -%}
", "_elements/tableview/elements", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_elements/tableview/elements.html");
    }
}
