<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @CoreVisualizations/_dataTableViz_sparklines.twig */
class __TwigTemplate_6a2b68017b50596c53c14d67d5d6a30ecadd854bd6894d4c7fc0ad3d82938159 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["macros"] = $this->loadTemplate("@CoreVisualizations/macros.twig", "@CoreVisualizations/_dataTableViz_sparklines.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 4
            echo "    <div class=\"card\"><div class=\"card-content\">
";
        }
        // line 6
        echo "    ";
        if ( !twig_test_empty(($context["title"] ?? $this->getContext($context, "title")))) {
            echo "<h2 class=\"card-title\"
                                    ";
            // line 7
            if ( !twig_test_empty(($context["titleAttributes"] ?? $this->getContext($context, "titleAttributes")))) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["titleAttributes"] ?? $this->getContext($context, "titleAttributes")));
                foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                    echo \Piwik\piwik_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 8
            echo "                                >";
            echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h2>";
        }
        // line 9
        echo "    ";
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 10
            echo "    <div class=\"row\">
        <div class=\"col m6\">
    ";
        }
        // line 13
        echo "
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sparklines"] ?? $this->getContext($context, "sparklines")));
        foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
            // line 15
            echo "                ";
            if (($context["key"] % 2 == 0)) {
                // line 16
                echo "                    ";
                echo $context["macros"]->getsingleSparkline($context["sparkline"], ($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), ($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable")));
                echo "
                ";
            }
            // line 18
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 21
            echo "            <br style=\"clear:left\"/>
        </div>
        <div class=\"col m6\">
    ";
        }
        // line 25
        echo "
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sparklines"] ?? $this->getContext($context, "sparklines")));
        foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
            // line 27
            echo "                ";
            if (($context["key"] % 2 == 1)) {
                // line 28
                echo "                    ";
                echo $context["macros"]->getsingleSparkline($context["sparkline"], ($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), ($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable")));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
            <br style=\"clear:left\"/>

    ";
        // line 34
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 35
            echo "        </div>
    </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable"))) {
            // line 40
            echo "        ";
            $this->loadTemplate("_sparklineFooter.twig", "@CoreVisualizations/_dataTableViz_sparklines.twig", 40)->display($context);
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if ( !twig_test_empty(($context["footerMessage"] ?? $this->getContext($context, "footerMessage")))) {
            // line 44
            echo "        <div class='datatableFooterMessage'>";
            echo ($context["footerMessage"] ?? $this->getContext($context, "footerMessage"));
            echo "</div>
    ";
        }
        // line 46
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 47
            echo "        </div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_sparklines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 47,  162 => 46,  156 => 44,  154 => 43,  151 => 42,  148 => 41,  145 => 40,  143 => 39,  140 => 38,  135 => 35,  133 => 34,  128 => 31,  122 => 30,  116 => 28,  113 => 27,  109 => 26,  106 => 25,  100 => 21,  98 => 20,  95 => 19,  89 => 18,  83 => 16,  80 => 15,  76 => 14,  73 => 13,  68 => 10,  65 => 9,  60 => 8,  46 => 7,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import '@CoreVisualizations/macros.twig' as macros %}

{% if not isWidget %}
    <div class=\"card\"><div class=\"card-content\">
{% endif %}
    {% if title is not empty %}<h2 class=\"card-title\"
                                    {% if titleAttributes is not empty %}{% for attribute, value in titleAttributes %}{{ attribute }}=\"{{ value }}\"{% endfor %}{% endif %}
                                >{{ title }}</h2>{% endif %}
    {% if not isWidget %}
    <div class=\"row\">
        <div class=\"col m6\">
    {% endif %}

            {% for key, sparkline in sparklines %}
                {% if key is even %}
                    {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                {% endif %}
            {% endfor %}

    {% if not isWidget %}
            <br style=\"clear:left\"/>
        </div>
        <div class=\"col m6\">
    {% endif %}

            {% for key, sparkline in sparklines %}
                {% if key is odd %}
                    {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                {% endif %}
            {% endfor %}

            <br style=\"clear:left\"/>

    {% if not isWidget %}
        </div>
    </div>
    {% endif %}

    {%  if areSparklinesLinkable %}
        {% include \"_sparklineFooter.twig\" %}
    {% endif %}

    {% if footerMessage is not empty %}
        <div class='datatableFooterMessage'>{{ footerMessage | raw }}</div>
    {% endif %}
{% if not isWidget %}
        </div></div>
{% endif %}", "@CoreVisualizations/_dataTableViz_sparklines.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\CoreVisualizations\\templates\\_dataTableViz_sparklines.twig");
    }
}
