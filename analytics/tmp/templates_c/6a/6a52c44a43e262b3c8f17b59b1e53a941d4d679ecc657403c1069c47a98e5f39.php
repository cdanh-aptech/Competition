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

/* @CoreHome/_dataTableCell.twig */
class __TwigTemplate_25f9e3ec8c2113821556077295557fa728f6a18f2ad5b58c9764fc2321bf6bfd extends \Twig\Template
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
        ob_start();
        // line 2
        $context["tooltipIndex"] = (($context["column"] ?? $this->getContext($context, "column")) . "_tooltip");
        // line 3
        if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => ($context["tooltipIndex"] ?? $this->getContext($context, "tooltipIndex"))], "method")) {
            echo "<span class=\"cell-tooltip\" data-tooltip=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => ($context["tooltipIndex"] ?? $this->getContext($context, "tooltipIndex"))], "method"), "html", null, true);
            echo "\">";
        }
        // line 4
        if ((( !$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getIdSubDataTable", [], "method") && (($context["column"] ?? $this->getContext($context, "column")) == "label")) && $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "url"], "method"))) {
            // line 5
            echo "    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='";
            // line 7
            if (!twig_in_filter(twig_slice($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "url"], "method"), 0, 4), [0 => "http", 1 => "ftp:"])) {
                echo "http://";
            }
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "url"], "method")]);
            echo "'>
    ";
            // line 8
            if ( !$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "logo"], "method")) {
                // line 9
                echo "        <img class=\"link\" width=\"10\" height=\"9\"
             src=\"plugins/Morpheus/images/link.png\"/>
    ";
            }
        }
        // line 13
        echo "
";
        // line 14
        $context["totals"] = $this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getMetadata", [0 => "totals"], "method");
        // line 15
        if ((twig_in_filter(($context["column"] ?? $this->getContext($context, "column")), $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "report_ratio_columns", [])) && twig_in_filter(($context["column"] ?? $this->getContext($context, "column")), twig_get_array_keys_filter(($context["totals"] ?? $this->getContext($context, "totals")))))) {
            // line 16
            $context["labelColumn"] = twig_first($this->env, ($context["columns_to_display"] ?? $this->getContext($context, "columns_to_display")));
            // line 17
            echo "    ";
            $context["reportTotal"] = $this->getAttribute(($context["totals"] ?? $this->getContext($context, "totals")), ($context["column"] ?? $this->getContext($context, "column")), [], "array");
            // line 18
            echo "    ";
            if ((((isset($context["siteSummary"]) || array_key_exists("siteSummary", $context)) &&  !twig_test_empty(($context["siteSummary"] ?? $this->getContext($context, "siteSummary")))) && $this->getAttribute(($context["siteSummary"] ?? $this->getContext($context, "siteSummary")), "getFirstRow", []))) {
                // line 19
                echo "        ";
                $context["siteTotal"] = $this->getAttribute($this->getAttribute(($context["siteSummary"] ?? $this->getContext($context, "siteSummary")), "getFirstRow", []), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method");
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["siteTotal"] = 0;
                // line 22
                echo "    ";
            }
            // line 23
            echo "    ";
            $context["rowPercentage"] = call_user_func_array($this->env->getFilter('percentage')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method"), ($context["reportTotal"] ?? $this->getContext($context, "reportTotal")), 1]);
            // line 24
            echo "    ";
            $context["metricTitle"] = (($this->getAttribute(($context["translations"] ?? null), ($context["column"] ?? $this->getContext($context, "column")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["translations"] ?? null), ($context["column"] ?? $this->getContext($context, "column")), [], "array"), ($context["column"] ?? $this->getContext($context, "column")))) : (($context["column"] ?? $this->getContext($context, "column"))));
            // line 25
            echo "    ";
            $context["reportLabel"] = call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('truncate')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["labelColumn"] ?? $this->getContext($context, "labelColumn"))], "method"), 40])]);
            // line 26
            echo "
    ";
            // line 27
            $context["reportRatioTooltip"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ReportRatioTooltip", ($context["reportLabel"] ?? $this->getContext($context, "reportLabel")), \Piwik\piwik_escape_filter($this->env, ($context["rowPercentage"] ?? $this->getContext($context, "rowPercentage")), "html_attr"), \Piwik\piwik_escape_filter($this->env, ($context["reportTotal"] ?? $this->getContext($context, "reportTotal")), "html_attr"), \Piwik\piwik_escape_filter($this->env, ($context["metricTitle"] ?? $this->getContext($context, "metricTitle")), "html_attr"), \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["translations"] ?? null), ($context["labelColumn"] ?? $this->getContext($context, "labelColumn")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["translations"] ?? null), ($context["labelColumn"] ?? $this->getContext($context, "labelColumn")), [], "array"), ($context["labelColumn"] ?? $this->getContext($context, "labelColumn")))) : (($context["labelColumn"] ?? $this->getContext($context, "labelColumn")))), "html_attr")]);
            // line 28
            echo "
    ";
            // line 29
            if ((($context["siteTotal"] ?? $this->getContext($context, "siteTotal")) && (($context["siteTotal"] ?? $this->getContext($context, "siteTotal")) > ($context["reportTotal"] ?? $this->getContext($context, "reportTotal"))))) {
                // line 30
                echo "        ";
                $context["totalPercentage"] = call_user_func_array($this->env->getFilter('percentage')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method"), ($context["siteTotal"] ?? $this->getContext($context, "siteTotal")), 1]);
                // line 31
                echo "        ";
                $context["totalRatioTooltip"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_TotalRatioTooltip", ($context["totalPercentage"] ?? $this->getContext($context, "totalPercentage")), call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["siteTotal"] ?? $this->getContext($context, "siteTotal")), 2, 0]), ($context["metricTitle"] ?? $this->getContext($context, "metricTitle"))]);
                // line 32
                echo "    ";
            } else {
                // line 33
                echo "        ";
                $context["totalRatioTooltip"] = "";
                // line 34
                echo "    ";
            }
            // line 35
            echo "
    <span class=\"ratio\"
          title=\"";
            // line 37
            echo ($context["reportRatioTooltip"] ?? $this->getContext($context, "reportRatioTooltip"));
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["totalRatioTooltip"] ?? $this->getContext($context, "totalRatioTooltip")), "html_attr");
            echo "\"
          >&nbsp;";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, ($context["rowPercentage"] ?? $this->getContext($context, "rowPercentage")), "html", null, true);
            echo "</span>";
        }
        // line 40
        $context["dimensions"] = (($this->getAttribute(($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method"), [])) : ([]));
        // line 41
        if (((($context["column"] ?? $this->getContext($context, "column")) == "label") || twig_in_filter(($context["column"] ?? $this->getContext($context, "column")), ($context["dimensions"] ?? $this->getContext($context, "dimensions"))))) {
            // line 42
            echo "    ";
            $context["piwik"] = $this->loadTemplate("macros.twig", "@CoreHome/_dataTableCell.twig", 42);
            // line 43
            echo "
    <span class='label";
            // line 44
            if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "is_aggregate"], "method")) {
                echo " highlighted";
            }
            echo "'
    ";
            // line 45
            if (((isset($context["properties"]) || array_key_exists("properties", $context)) &&  !twig_test_empty($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "tooltip_metadata_name", [])))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "tooltip_metadata_name", [])], "method"), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 46
            if ((($context["column"] ?? $this->getContext($context, "column")) == "label")) {
                echo $context["piwik"]->getlogoHtml($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [], "method"), $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => "label"], "method"));
            }
            // line 47
            echo "        ";
            if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "html_label_prefix"], "method")) {
                echo "<span class='label-prefix'>";
                echo $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "html_label_prefix"], "method");
                echo "&nbsp;</span>";
            }
        }
        // line 48
        echo "<span class=\"value\">";
        // line 49
        if (($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method") || ((($context["column"] ?? $this->getContext($context, "column")) == "label") && ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method") === "0")))) {
            if ((($context["column"] ?? $this->getContext($context, "column")) == "label")) {
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method")]);
            } else {
                if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (("html_column_" . ($context["column"] ?? $this->getContext($context, "column"))) . "_prefix")], "method")) {
                    echo "<span class='column-prefix'>";
                    echo $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (("html_column_" . ($context["column"] ?? $this->getContext($context, "column"))) . "_prefix")], "method");
                    echo "</span>";
                }
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('number')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method"), 2, 0])]);
                if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (("html_column_" . ($context["column"] ?? $this->getContext($context, "column"))) . "_suffix")], "method")) {
                    echo "<span class='column-suffix'>";
                    echo $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (("html_column_" . ($context["column"] ?? $this->getContext($context, "column"))) . "_suffix")], "method");
                    echo "</span>";
                }
            }
        } else {
            // line 50
            echo "-";
        }
        // line 51
        echo "</span>
";
        // line 52
        if ((($context["column"] ?? $this->getContext($context, "column")) == "label")) {
            if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "html_label_suffix"], "method")) {
                echo "<span class='label-suffix'>";
                echo $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "html_label_suffix"], "method");
                echo "</span>";
            }
            echo "</span>";
        }
        // line 53
        if ((( !$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getIdSubDataTable", [], "method") && (($context["column"] ?? $this->getContext($context, "column")) == "label")) && $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "url"], "method"))) {
            // line 54
            echo "    </a>
";
        }
        // line 56
        if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => ($context["tooltipIndex"] ?? $this->getContext($context, "tooltipIndex"))], "method")) {
            echo "</span>";
        }
        // line 57
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableCell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 57,  213 => 56,  209 => 54,  207 => 53,  198 => 52,  195 => 51,  192 => 50,  174 => 49,  172 => 48,  164 => 47,  160 => 46,  152 => 45,  146 => 44,  143 => 43,  140 => 42,  138 => 41,  136 => 40,  132 => 38,  126 => 37,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  107 => 30,  105 => 29,  102 => 28,  100 => 27,  97 => 26,  94 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  61 => 13,  55 => 9,  53 => 8,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
{% set tooltipIndex = column ~ '_tooltip' %}
{% if row.getMetadata(tooltipIndex) %}<span class=\"cell-tooltip\" data-tooltip=\"{{ row.getMetadata(tooltipIndex) }}\">{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='{% if row.getMetadata('url')|slice(0,4) not in ['http','ftp:'] %}http://{% endif %}{{ row.getMetadata('url')|rawSafeDecoded }}'>
    {% if not row.getMetadata('logo') %}
        <img class=\"link\" width=\"10\" height=\"9\"
             src=\"plugins/Morpheus/images/link.png\"/>
    {% endif %}
{% endif %}

{% set totals = dataTable.getMetadata('totals') %}
{% if column in properties.report_ratio_columns and column in totals|keys -%}
    {% set labelColumn   = columns_to_display|first %}
    {% set reportTotal   = totals[column] %}
    {% if siteSummary is defined and siteSummary is not empty and siteSummary.getFirstRow %}
        {% set siteTotal = siteSummary.getFirstRow.getColumn(column) %}
    {% else %}
        {% set siteTotal = 0 %}
    {% endif %}
    {% set rowPercentage = row.getColumn(column)|percentage(reportTotal, 1) %}
    {% set metricTitle   = translations[column]|default(column) %}
    {% set reportLabel   = row.getColumn(labelColumn)|truncate(40)|rawSafeDecoded %}

    {% set reportRatioTooltip = 'General_ReportRatioTooltip'|translate(reportLabel, rowPercentage|e('html_attr'), reportTotal|e('html_attr'), metricTitle|e('html_attr'), translations[labelColumn]|default(labelColumn)|e('html_attr')) %}

    {% if siteTotal and siteTotal > reportTotal %}
        {% set totalPercentage   = row.getColumn(column)|percentage(siteTotal, 1) %}
        {% set totalRatioTooltip = 'General_TotalRatioTooltip'|translate(totalPercentage, siteTotal|number(2,0), metricTitle) %}
    {% else %}
        {% set totalRatioTooltip = '' %}
    {% endif %}

    <span class=\"ratio\"
          title=\"{{ reportRatioTooltip|raw }} {{ totalRatioTooltip|e('html_attr') }}\"
          >&nbsp;{{ rowPercentage }}</span>
{%- endif %}
{% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}
{% if column=='label' or column in dimensions %}
    {% import 'macros.twig' as piwik %}

    <span class='label{% if row.getMetadata('is_aggregate') %} highlighted{% endif %}'
    {% if properties is defined and properties.tooltip_metadata_name is not empty %}title=\"{{ row.getMetadata(properties.tooltip_metadata_name) }}\"{% endif %}>
        {% if column=='label' %}{{ piwik.logoHtml(row.getMetadata(), row.getColumn('label')) }}{% endif %}
        {% if row.getMetadata('html_label_prefix') %}<span class='label-prefix'>{{ row.getMetadata('html_label_prefix') | raw }}&nbsp;</span>{% endif -%}
{% endif %}<span class=\"value\">
    {%- if row.getColumn(column) or (column=='label' and row.getColumn(column) is same as(\"0\")) %}{% if column=='label' %}{{- row.getColumn(column)|rawSafeDecoded -}}{% else %}{% if row.getMetadata('html_column_' ~ column ~ '_prefix') %}<span class='column-prefix'>{{ row.getMetadata('html_column_' ~ column ~ '_prefix') | raw }}</span>{% endif -%}{{- row.getColumn(column)|number(2,0)|rawSafeDecoded -}}{% if row.getMetadata('html_column_' ~ column ~ '_suffix') %}<span class='column-suffix'>{{ row.getMetadata('html_column_' ~ column ~ '_suffix') | raw }}</span>{% endif -%}{% endif %}
    {%- else -%}-
    {%- endif -%}</span>
{% if column=='label' %}{%- if row.getMetadata('html_label_suffix') %}<span class='label-suffix'>{{ row.getMetadata('html_label_suffix') | raw }}</span>{% endif -%}</span>{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    </a>
{% endif %}
{% if row.getMetadata(tooltipIndex) %}</span>{% endif %}

{% endspaceless %}
", "@CoreHome/_dataTableCell.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\CoreHome\\templates\\_dataTableCell.twig");
    }
}
