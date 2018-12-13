<?php

/* _includes/nav */
class __TwigTemplate_da6ab654b4ac0939f45903e90ce3f2fd111584d242cfd83bd409c70f18efc8a5 extends craft\web\twig\Template
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
        echo "<nav>
    <ul>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 3, $this->source); })()));
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
        foreach ($context['_seq'] as $context["itemId"] => $context["item"]) {
            // line 4
            echo "            ";
            if ($context["item"]) {
                // line 5
                echo "                ";
                $context["itemIsSelected"] = (( !array_key_exists("selectedItem", $context) && craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) || (array_key_exists("selectedItem", $context) && ((isset($context["selectedItem"]) || array_key_exists("selectedItem", $context) ? $context["selectedItem"] : (function () { throw new Twig_Error_Runtime('Variable "selectedItem" does not exist.', 5, $this->source); })()) == $context["itemId"])));
                // line 6
                echo "<li><a";
                if ((isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new Twig_Error_Runtime('Variable "itemIsSelected" does not exist.', 6, $this->source); })())) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["item"], "label", array()), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 8
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
        unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/nav";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  62 => 8,  50 => 6,  47 => 5,  44 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav>
    <ul>
        {% for itemId, item in items %}
            {% if item %}
                {% set itemIsSelected = ((selectedItem is not defined and loop.first) or (selectedItem is defined and selectedItem == itemId)) -%}
                <li><a{% if itemIsSelected %} class=\"sel\"{% endif %} href=\"{{ item.url }}\">{{ item.label }}</a></li>
            {% endif %}
        {% endfor %}
    </ul>
</nav>
", "_includes/nav", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_includes/nav.html");
    }
}
