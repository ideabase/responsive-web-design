<?php

/* _components/fieldtypes/Matrix/input */
class __TwigTemplate_6d040343746a2ac06882aa537400cc27cdc14b19adc5905cc69574edc2192ad1 extends craft\web\twig\Template
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
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" value=\"\">

<div class=\"matrix matrix-field\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"blocks\">
        ";
        // line 5
        $context["totalNewBlocks"] = 0;
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 6, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 7
            echo "            ";
            $context["blockId"] = craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "id", array());
            // line 8
            echo "            ";
            if ( !(isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new Twig_Error_Runtime('Variable "blockId" does not exist.', 8, $this->source); })())) {
                // line 9
                echo "                ";
                $context["totalNewBlocks"] = ((isset($context["totalNewBlocks"]) || array_key_exists("totalNewBlocks", $context) ? $context["totalNewBlocks"] : (function () { throw new Twig_Error_Runtime('Variable "totalNewBlocks" does not exist.', 9, $this->source); })()) + 1);
                // line 10
                echo "                ";
                $context["blockId"] = ("new" . (isset($context["totalNewBlocks"]) || array_key_exists("totalNewBlocks", $context) ? $context["totalNewBlocks"] : (function () { throw new Twig_Error_Runtime('Variable "totalNewBlocks" does not exist.', 10, $this->source); })()));
                // line 11
                echo "            ";
            }
            // line 12
            echo "
            <div class=\"matrixblock";
            // line 13
            if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "enabled", array())) {
                echo " disabled";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new Twig_Error_Runtime('Variable "blockId" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\"";
            if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "collapsed", array())) {
                echo " data-collapsed";
            }
            echo " data-type=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "getType", array(), "method"), "handle", array()), "html", null, true);
            echo "\">
                ";
            // line 14
            if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 14, $this->source); })())) {
                // line 15
                echo "                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new Twig_Error_Runtime('Variable "blockId" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "][type]\" value=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "getType", array(), "method"), "handle", array()), "html", null, true);
                echo "\">
                    <input type=\"hidden\" name=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new Twig_Error_Runtime('Variable "blockId" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "][enabled]\" value=\"";
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "enabled", array())) {
                    echo "1";
                }
                echo "\">
                    <div class=\"titlebar\">
                        <div class=\"blocktype\">";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "getType", array(), "method"), "name", array()), "site"), "html", null, true);
                echo "</div>
                        <div class=\"preview\"></div>
                    </div>
                    <div class=\"checkbox\" title=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Select", "app"), "html", null, true);
                echo "\"></div>
                    <div class=\"actions\">
                        <div class=\"status off\" title=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disabled", "app"), "html", null, true);
                echo "\"></div>
                        <a class=\"settings icon menubtn\" title=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Actions", "app"), "html", null, true);
                echo "\" role=\"button\"></a>
                        <div class=\"menu\">
                            <ul class=\"padded\">
                                <li><a data-icon=\"collapse\" data-action=\"collapse\">";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Collapse", "app"), "html", null, true);
                echo "</a></li>
                                <li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\">";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Expand", "app"), "html", null, true);
                echo "</a></li>
                                <li";
                // line 29
                if ( !craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "enabled", array())) {
                    echo " class=\"hidden\"";
                }
                echo "><a data-icon=\"disabled\" data-action=\"disable\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disable", "app"), "html", null, true);
                echo "</a></li>
                                <li";
                // line 30
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["block"], "enabled", array())) {
                    echo " class=\"hidden\"";
                }
                echo "><a data-icon=\"enabled\" data-action=\"enable\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Enable", "app"), "html", null, true);
                echo "</a></li>
                            </ul>
                            ";
                // line 32
                if ( !(isset($context["staticBlocks"]) || array_key_exists("staticBlocks", $context) ? $context["staticBlocks"] : (function () { throw new Twig_Error_Runtime('Variable "staticBlocks" does not exist.', 32, $this->source); })())) {
                    // line 33
                    echo "                                <hr class=\"padded\">
                                <ul class=\"padded\">
                                    <li><a class=\"error\" data-icon=\"remove\" data-action=\"delete\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete", "app"), "html", null, true);
                    echo "</a></li>
                                </ul>
                                <hr class=\"padded\">
                                <ul class=\"padded\">
                                    ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypes" does not exist.', 39, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                        // line 40
                        echo "                                        <li><a data-icon=\"plus\" data-action=\"add\" data-type=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Add {type} above", "app", array("type" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array()), "site"))), "html", null, true);
                        echo "</a></li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                                </ul>
                            ";
                }
                // line 44
                echo "                        </div>
                        <a class=\"move icon\" title=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Reorder", "app"), "html", null, true);
                echo "\" role=\"button\"></a>
                    </div>
                ";
            }
            // line 48
            echo "                <div class=\"fields\">
                    ";
            // line 49
            $this->loadTemplate("_includes/fields", "_components/fieldtypes/Matrix/input", 49)->display(array_merge($context, array("namespace" => (((            // line 50
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 50, $this->source); })()) . "[") . (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new Twig_Error_Runtime('Variable "blockId" does not exist.', 50, $this->source); })())) . "][fields]"), "element" =>             // line 51
$context["block"], "fields" => craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(), craft\helpers\Template::attribute($this->env, $this->getSourceContext(),             // line 52
$context["block"], "getType", array(), "method"), "getFieldLayout", array(), "method"), "getFields", array(), "method"), "static" =>             // line 53
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 53, $this->source); })()))));
            // line 55
            echo "                </div>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>
    ";
        // line 59
        if (( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new Twig_Error_Runtime('Variable "static" does not exist.', 59, $this->source); })()) &&  !(isset($context["staticBlocks"]) || array_key_exists("staticBlocks", $context) ? $context["staticBlocks"] : (function () { throw new Twig_Error_Runtime('Variable "staticBlocks" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "        <div class=\"buttons\">
            <div class=\"btngroup\">
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypes" does not exist.', 62, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 63
                echo "                    <div class=\"btn";
                if (craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " add icon";
                }
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array()), "site"), "html", null, true);
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </div>

            <div class=\"btn add icon menubtn hidden\">";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Add a block", "app"), "html", null, true);
            echo "</div>
            <div class=\"menu\">
                <ul>
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) || array_key_exists("blockTypes", $context) ? $context["blockTypes"] : (function () { throw new Twig_Error_Runtime('Variable "blockTypes" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 71
                echo "                        <li><a data-type=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "handle", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->getSourceContext(), $context["blockType"], "name", array()), "site"), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                </ul>
            </div>
        </div>
    ";
        }
        // line 77
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 77,  294 => 73,  283 => 71,  279 => 70,  273 => 67,  269 => 65,  246 => 63,  229 => 62,  225 => 60,  223 => 59,  220 => 58,  204 => 55,  202 => 53,  201 => 52,  200 => 51,  199 => 50,  198 => 49,  195 => 48,  189 => 45,  186 => 44,  182 => 42,  171 => 40,  167 => 39,  160 => 35,  156 => 33,  154 => 32,  145 => 30,  137 => 29,  133 => 28,  129 => 27,  123 => 24,  119 => 23,  114 => 21,  108 => 18,  97 => 16,  88 => 15,  86 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  36 => 6,  34 => 5,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"hidden\" name=\"{{ name }}\" value=\"\">

<div class=\"matrix matrix-field\" id=\"{{ id }}\">
    <div class=\"blocks\">
        {% set totalNewBlocks = 0 %}
        {% for block in blocks %}
            {% set blockId = block.id %}
            {% if not blockId %}
                {% set totalNewBlocks = totalNewBlocks + 1 %}
                {% set blockId = 'new'~totalNewBlocks %}
            {% endif %}

            <div class=\"matrixblock{% if not block.enabled %} disabled{% endif %}\" data-id=\"{{ blockId }}\"{% if block.collapsed %} data-collapsed{% endif %} data-type=\"{{ block.getType().handle }}\">
                {% if not static %}
                    <input type=\"hidden\" name=\"{{ name }}[{{ blockId }}][type]\" value=\"{{ block.getType().handle }}\">
                    <input type=\"hidden\" name=\"{{ name }}[{{ blockId }}][enabled]\" value=\"{% if block.enabled %}1{% endif %}\">
                    <div class=\"titlebar\">
                        <div class=\"blocktype\">{{ block.getType().name|t('site') }}</div>
                        <div class=\"preview\"></div>
                    </div>
                    <div class=\"checkbox\" title=\"{{ 'Select'|t('app') }}\"></div>
                    <div class=\"actions\">
                        <div class=\"status off\" title=\"{{ 'Disabled'|t('app') }}\"></div>
                        <a class=\"settings icon menubtn\" title=\"{{ 'Actions'|t('app') }}\" role=\"button\"></a>
                        <div class=\"menu\">
                            <ul class=\"padded\">
                                <li><a data-icon=\"collapse\" data-action=\"collapse\">{{ \"Collapse\"|t('app') }}</a></li>
                                <li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\">{{ \"Expand\"|t('app') }}</a></li>
                                <li{% if not block.enabled %} class=\"hidden\"{% endif %}><a data-icon=\"disabled\" data-action=\"disable\">{{ \"Disable\"|t('app') }}</a></li>
                                <li{% if block.enabled %} class=\"hidden\"{% endif %}><a data-icon=\"enabled\" data-action=\"enable\">{{ \"Enable\"|t('app') }}</a></li>
                            </ul>
                            {% if not staticBlocks %}
                                <hr class=\"padded\">
                                <ul class=\"padded\">
                                    <li><a class=\"error\" data-icon=\"remove\" data-action=\"delete\">{{ \"Delete\"|t('app') }}</a></li>
                                </ul>
                                <hr class=\"padded\">
                                <ul class=\"padded\">
                                    {% for blockType in blockTypes %}
                                        <li><a data-icon=\"plus\" data-action=\"add\" data-type=\"{{ blockType.handle }}\">{{ \"Add {type} above\"|t('app', { type: blockType.name|t('site') }) }}</a></li>
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </div>
                        <a class=\"move icon\" title=\"{{ 'Reorder'|t('app') }}\" role=\"button\"></a>
                    </div>
                {% endif %}
                <div class=\"fields\">
                    {% include \"_includes/fields\" with {
                        namespace: name~'['~blockId~'][fields]',
                        element: block,
                        fields: block.getType().getFieldLayout().getFields(),
                        static: static
                    } %}
                </div>
            </div>
        {% endfor %}
    </div>
    {% if not static and not staticBlocks %}
        <div class=\"buttons\">
            <div class=\"btngroup\">
                {% for blockType in blockTypes %}
                    <div class=\"btn{% if loop.first %} add icon{% endif %}\" data-type=\"{{ blockType.handle }}\">{{ blockType.name|t('site') }}</div>
                {% endfor %}
            </div>

            <div class=\"btn add icon menubtn hidden\">{{ \"Add a block\"|t('app') }}</div>
            <div class=\"menu\">
                <ul>
                    {% for blockType in blockTypes %}
                        <li><a data-type=\"{{ blockType.handle }}\">{{ blockType.name|t('site') }}</a></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
</div>
", "_components/fieldtypes/Matrix/input", "/Users/matt/Documents/ResponsiveWebDesign/craft/vendor/craftcms/cms/src/templates/_components/fieldtypes/Matrix/input.html");
    }
}
