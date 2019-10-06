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

/* @CoreVisualizations/macros.twig */
class __TwigTemplate_3775936504e78fc9381acb40a7ce48036e39052f7ab269eb3ed67ad06a76e465 extends \Twig\Template
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
    }

    // line 1
    public function getsingleSparkline($__sparkline__ = null, $__allMetricsDocumentation__ = null, $__areSparklinesLinkable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "sparkline" => $__sparkline__,
            "allMetricsDocumentation" => $__allMetricsDocumentation__,
            "areSparklinesLinkable" => $__areSparklinesLinkable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "
    <div class=\"sparkline ";
            // line 3
            if (((isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context)) &&  !($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable")))) {
                echo "notLinkable";
            }
            echo "\">
        ";
            // line 4
            if ($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "url", [])) {
                echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [$this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "url", [])]);
            }
            // line 5
            echo "\t<div>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "metrics", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
                // line 7
                echo "            <span ";
                if (($this->getAttribute(($context["allMetricsDocumentation"] ?? null), $this->getAttribute($context["metric"], "column", []), [], "array", true, true) && $this->getAttribute(($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), $this->getAttribute($context["metric"], "column", []), [], "array"))) {
                    echo "title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), $this->getAttribute($context["metric"], "column", []), [], "array"), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 8
                if (twig_in_filter("%s", $this->getAttribute($context["metric"], "description", []))) {
                    // line 9
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), [$this->getAttribute($context["metric"], "description", []), (("<strong>" . $this->getAttribute($context["metric"], "value", [])) . "</strong>")]);
                } else {
                    // line 11
                    echo "                <strong>";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["metric"], "value", []), "html", null, true);
                    echo "</strong> ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["metric"], "description", []), "html", null, true);
                }
                // line 12
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ", ";
                }
                // line 13
                echo "            </span>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
            if ($this->getAttribute(($context["sparkline"] ?? null), "evolution", [], "any", true, true)) {
                // line 16
                echo "
            ";
                // line 17
                $context["evolutionPretty"] = $this->getAttribute($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "evolution", []), "percent", []);
                // line 18
                echo "
            ";
                // line 19
                if (($this->getAttribute($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "evolution", []), "percent", []) < 0)) {
                    // line 20
                    echo "                ";
                    $context["evolutionClass"] = "negative-evolution";
                    // line 21
                    echo "                ";
                    $context["evolutionIcon"] = "arrow_down.png";
                    // line 22
                    echo "            ";
                } elseif (($this->getAttribute($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "evolution", []), "percent", []) == 0)) {
                    // line 23
                    echo "                ";
                    $context["evolutionClass"] = "neutral-evolution";
                    // line 24
                    echo "                ";
                    $context["evolutionIcon"] = "stop.png";
                    // line 25
                    echo "            ";
                } else {
                    // line 26
                    echo "                ";
                    $context["evolutionClass"] = "positive-evolution";
                    // line 27
                    echo "                ";
                    $context["evolutionIcon"] = "arrow_up.png";
                    // line 28
                    echo "                ";
                    $context["evolutionPretty"] = ("+" . $this->getAttribute($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "evolution", []), "percent", []));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            <span class=\"metricEvolution\" title=\"";
                // line 31
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "evolution", []), "tooltip", []), "html", null, true);
                echo "\"><img
                        style=\"padding-right:4px\" src=\"plugins/MultiSites/images/";
                // line 32
                echo \Piwik\piwik_escape_filter($this->env, ($context["evolutionIcon"] ?? $this->getContext($context, "evolutionIcon")), "html", null, true);
                echo "\"/>
                <strong class=\"";
                // line 33
                echo \Piwik\piwik_escape_filter($this->env, ($context["evolutionClass"] ?? $this->getContext($context, "evolutionClass")), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, ($context["evolutionPretty"] ?? $this->getContext($context, "evolutionPretty")), "html", null, true);
                echo "</strong></span>
        ";
            }
            // line 35
            echo "\t</div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 35,  172 => 33,  168 => 32,  164 => 31,  161 => 30,  158 => 29,  155 => 28,  152 => 27,  149 => 26,  146 => 25,  143 => 24,  140 => 23,  137 => 22,  134 => 21,  131 => 20,  129 => 19,  126 => 18,  124 => 17,  121 => 16,  118 => 15,  103 => 13,  99 => 12,  93 => 11,  90 => 9,  88 => 8,  79 => 7,  62 => 6,  59 => 5,  55 => 4,  49 => 3,  46 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) %}

    <div class=\"sparkline {% if areSparklinesLinkable is defined and not areSparklinesLinkable %}notLinkable{% endif %}\">
        {% if sparkline.url %}{{ sparkline(sparkline.url)|raw }}{% endif %}
\t<div>
        {% for metric in sparkline.metrics %}
            <span {% if allMetricsDocumentation[metric.column] is defined and allMetricsDocumentation[metric.column] %}title=\"{{ allMetricsDocumentation[metric.column] }}\"{% endif %}>
            {% if '%s' in metric.description -%}
                {{ metric.description|translate(\"<strong>\"~metric.value~\"</strong>\")|raw }}
            {%- else %}
                <strong>{{ metric.value }}</strong> {{ metric.description }}
            {%- endif %}{% if not loop.last %}, {% endif %}
            </span>
        {% endfor %}
        {% if sparkline.evolution is defined %}

            {% set evolutionPretty = sparkline.evolution.percent %}

            {% if sparkline.evolution.percent < 0 %}
                {% set evolutionClass = 'negative-evolution' %}
                {% set evolutionIcon  = 'arrow_down.png' %}
            {% elseif sparkline.evolution.percent == 0 %}
                {% set evolutionClass = 'neutral-evolution' %}
                {% set evolutionIcon  = 'stop.png' %}
            {% else %}
                {% set evolutionClass  = 'positive-evolution' %}
                {% set evolutionIcon   = 'arrow_up.png' %}
                {% set evolutionPretty = '+' ~ sparkline.evolution.percent %}
            {% endif %}

            <span class=\"metricEvolution\" title=\"{{ sparkline.evolution.tooltip }}\"><img
                        style=\"padding-right:4px\" src=\"plugins/MultiSites/images/{{ evolutionIcon }}\"/>
                <strong class=\"{{ evolutionClass }}\">{{ evolutionPretty }}</strong></span>
        {% endif %}
\t</div>
    </div>
{% endmacro %}
", "@CoreVisualizations/macros.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\CoreVisualizations\\templates\\macros.twig");
    }
}
