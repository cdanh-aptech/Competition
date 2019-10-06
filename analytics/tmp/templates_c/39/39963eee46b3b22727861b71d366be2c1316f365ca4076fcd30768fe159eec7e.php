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

/* @CoreVisualizations/_dataTableViz_htmlTable.twig */
class __TwigTemplate_0130c9335523323fc88ef7447b9748af4f39d95500c34509e9fece27b17084ac extends \Twig\Template
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
        $context["subtablesAreDisabled"] = ((($this->getAttribute(($context["properties"] ?? null), "show_goals_columns", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "show_goals_columns", []), false)) : (false)) && (($this->getAttribute(        // line 2
($context["properties"] ?? null), "disable_subtable_when_show_goals", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "disable_subtable_when_show_goals", []), false)) : (false)));
        // line 3
        $context["showingEmbeddedSubtable"] = ( !twig_test_empty($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_embedded_subtable", [])) && ((        // line 4
(isset($context["idSubtable"]) || array_key_exists("idSubtable", $context))) ? (_twig_default_filter(($context["idSubtable"] ?? $this->getContext($context, "idSubtable")), false)) : (false)));
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 6
            echo "    ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", []), "html", null, true);
            echo "
";
        } else {
            // line 8
            if ( !($context["showingEmbeddedSubtable"] ?? $this->getContext($context, "showingEmbeddedSubtable"))) {
                // line 9
                echo "<table cellspacing=\"0\" class=\"dataTable\">
        ";
                // line 10
                $this->loadTemplate("@CoreHome/_dataTableHead.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 10)->display($context);
                // line 11
                echo "
        <tbody>";
            }
            // line 14
            if ((($context["showingEmbeddedSubtable"] ?? $this->getContext($context, "showingEmbeddedSubtable")) && ($this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getRowsCount", [], "method") == 0))) {
                // line 15
                echo "            ";
                if ((( !(isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context)) ||  !$this->getAttribute(($context["clientSideParameters"] ?? null), "filter_pattern_recursive", [], "any", true, true)) ||  !$this->getAttribute(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters")), "filter_pattern_recursive", []))) {
                    // line 16
                    echo "                <tr class=\"nodata\">
                    <td colspan=\"";
                    // line 17
                    echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "columns_to_display", [])), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_CategoryNoData"]), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 20
                echo "        ";
            } else {
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getRows", [], "method"));
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
                foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
                    // line 22
                    $context["rowHasSubtable"] = (( !($context["subtablesAreDisabled"] ?? $this->getContext($context, "subtablesAreDisabled")) && $this->getAttribute($context["row"], "getIdSubDataTable", [], "method")) &&  !(null === $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "subtable_controller_action", [])));
                    // line 23
                    $context["rowSubtableId"] = (($this->getAttribute($context["row"], "getMetadata", [0 => "idsubdatatable_in_db"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($context["row"], "getMetadata", [0 => "idsubdatatable_in_db"], "method"), $this->getAttribute($context["row"], "getIdSubDataTable", [], "method"))) : ($this->getAttribute($context["row"], "getIdSubDataTable", [], "method")));
                    // line 24
                    $context["isSummaryRow"] = (($context["rowId"] == twig_constant("Piwik\\DataTable::ID_SUMMARY_ROW")) || $this->getAttribute($context["row"], "getMetadata", [0 => "is_summary"], "method"));
                    // line 25
                    $context["shouldHighlightRow"] = (($context["isSummaryRow"] ?? $this->getContext($context, "isSummaryRow")) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "highlight_summary_row", []));
                    // line 28
                    $context["showRow"] = (((($context["subtablesAreDisabled"] ?? $this->getContext($context, "subtablesAreDisabled")) ||  !                    // line 29
($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable"))) ||  !(($this->getAttribute(                    // line 30
($context["properties"] ?? null), "show_expanded", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "show_expanded", []), false)) : (false))) ||  !(($this->getAttribute(                    // line 31
($context["properties"] ?? null), "replace_row_with_subtable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "replace_row_with_subtable", []), false)) : (false)));
                    // line 33
                    if (($context["showRow"] ?? $this->getContext($context, "showRow"))) {
                        // line 34
                        echo "                <tr ";
                        if (($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable"))) {
                            echo "id=\"";
                            echo \Piwik\piwik_escape_filter($this->env, ($context["rowSubtableId"] ?? $this->getContext($context, "rowSubtableId")), "html", null, true);
                            echo "\"";
                        }
                        // line 35
                        echo "                    ";
                        if ( !call_user_func_array($this->env->getTest('false')->getCallable(), [$this->getAttribute($context["row"], "getMetadata", [0 => "segment"], "method")])) {
                            echo " data-segment-filter=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["row"], "getMetadata", [0 => "segment"], "method"), "html_attr");
                            echo "\"";
                        }
                        // line 36
                        echo "                    ";
                        if ( !call_user_func_array($this->env->getTest('false')->getCallable(), [$this->getAttribute($context["row"], "getMetadata", [0 => "url"], "method")])) {
                            echo " data-url-label=\"";
                            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute($context["row"], "getMetadata", [0 => "url"], "method")]);
                            echo "\"";
                        }
                        // line 37
                        echo "                    data-row-metadata=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["row"], "getMetadata", [])), "html_attr");
                        echo "\"
                    class=\"";
                        // line 38
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["row"], "getMetadata", [0 => "css_class"], "method"), "html", null, true);
                        echo " ";
                        if (($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable"))) {
                            echo "subDataTable";
                        }
                        if (($context["shouldHighlightRow"] ?? $this->getContext($context, "shouldHighlightRow"))) {
                            echo " highlight";
                        }
                        if (($context["isSummaryRow"] ?? $this->getContext($context, "isSummaryRow"))) {
                            echo " summaryRow";
                        }
                        echo "\"
                    ";
                        // line 39
                        if (($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable"))) {
                            echo "title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ClickRowToExpandOrContract"]), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                    ";
                        // line 40
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "columns_to_display", []));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                            // line 41
                            echo "                        ";
                            $context["cellAttributes"] = $this->getAttribute(($context["visualization"] ?? $this->getContext($context, "visualization")), "getCellHtmlAttributes", [0 => $context["row"], 1 => $context["column"]], "method");
                            // line 42
                            echo "                        <td ";
                            if ( !twig_test_empty(($context["cellAttributes"] ?? $this->getContext($context, "cellAttributes")))) {
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["cellAttributes"] ?? $this->getContext($context, "cellAttributes")));
                                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html");
                                    echo "=\"";
                                    echo \Piwik\piwik_escape_filter($this->env, $context["value"], "html_attr");
                                    echo "\" ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                            }
                            echo ">
                            ";
                            // line 43
                            $this->loadTemplate("@CoreHome/_dataTableCell.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 43)->display(twig_array_merge($context, ($context["properties"] ?? $this->getContext($context, "properties"))));
                            // line 44
                            echo "                        </td>
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 46
                        echo "                </tr>
                ";
                    }
                    // line 48
                    echo "
                ";
                    // line 50
                    echo "                ";
                    if (((($this->getAttribute(($context["properties"] ?? null), "show_expanded", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "show_expanded", []), false)) : (false)) && ($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable")))) {
                        // line 51
                        echo "                    ";
                        $this->loadTemplate("@CoreVisualizations/_dataTableViz_htmlTable.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 51)->display(twig_array_merge($context, ["dataTable" => $this->getAttribute($context["row"], "getSubtable", [], "method"), "idSubtable" => ($context["rowSubtableId"] ?? $this->getContext($context, "rowSubtableId"))]));
                        // line 52
                        echo "                ";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                if (($this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getTotalsRow", []) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_totals_row", []))) {
                    // line 55
                    echo "                ";
                    $context["row"] = $this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getTotalsRow", []);
                    // line 56
                    echo "                ";
                    $context["rowId"] = "totalsRow";
                    // line 57
                    echo "                <tr class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "css_class"], "method"), "html", null, true);
                    echo " totalsRow\"
                        title=\"Total values for this table\">
                    ";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "columns_to_display", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 60
                        echo "                        <td>
                            ";
                        // line 61
                        $this->loadTemplate("@CoreHome/_dataTableCell.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 61)->display(twig_array_merge($context, ($context["properties"] ?? $this->getContext($context, "properties"))));
                        // line 62
                        echo "                        </td>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                </tr>
            ";
                }
                // line 66
                echo "        ";
            }
            // line 67
            if ( !($context["showingEmbeddedSubtable"] ?? $this->getContext($context, "showingEmbeddedSubtable"))) {
                // line 68
                echo "</tbody>
    </table>";
            }
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_htmlTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 68,  294 => 67,  291 => 66,  287 => 64,  272 => 62,  270 => 61,  267 => 60,  250 => 59,  244 => 57,  241 => 56,  238 => 55,  236 => 54,  221 => 52,  218 => 51,  215 => 50,  212 => 48,  208 => 46,  193 => 44,  191 => 43,  174 => 42,  171 => 41,  154 => 40,  146 => 39,  132 => 38,  127 => 37,  120 => 36,  113 => 35,  106 => 34,  104 => 33,  102 => 31,  101 => 30,  100 => 29,  99 => 28,  97 => 25,  95 => 24,  93 => 23,  91 => 22,  74 => 21,  71 => 20,  63 => 17,  60 => 16,  57 => 15,  55 => 14,  51 => 11,  49 => 10,  46 => 9,  44 => 8,  38 => 6,  36 => 5,  34 => 4,  33 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%- set subtablesAreDisabled = properties.show_goals_columns|default(false)
                           and properties.disable_subtable_when_show_goals|default(false) -%}
{%- set showingEmbeddedSubtable = properties.show_embedded_subtable is not empty
                              and idSubtable|default(false) -%}
{% if error is defined %}
    {{ error.message }}
{% else %}
    {%- if not showingEmbeddedSubtable -%}
    <table cellspacing=\"0\" class=\"dataTable\">
        {% include \"@CoreHome/_dataTableHead.twig\" %}

        <tbody>
    {%- endif -%}
        {% if showingEmbeddedSubtable and dataTable.getRowsCount() == 0 %}
            {% if clientSideParameters is not defined or clientSideParameters.filter_pattern_recursive is not defined or not clientSideParameters.filter_pattern_recursive  %}
                <tr class=\"nodata\">
                    <td colspan=\"{{ properties.columns_to_display|length }}\">{{ 'CoreHome_CategoryNoData'|translate }}</td>
                </tr>
            {% endif %}
        {% else %}
            {%- for rowId, row in dataTable.getRows() -%}
                {%- set rowHasSubtable = not subtablesAreDisabled and row.getIdSubDataTable() and properties.subtable_controller_action is not null -%}
                {%- set rowSubtableId = row.getMetadata('idsubdatatable_in_db')|default(row.getIdSubDataTable()) -%}
                {%- set isSummaryRow = rowId == constant('Piwik\\\\DataTable::ID_SUMMARY_ROW') or row.getMetadata('is_summary') -%}
                {%- set shouldHighlightRow = isSummaryRow and properties.highlight_summary_row -%}

                {# display this row if it doesn't have a subtable or if we don't replace the row with the subtable #}
                {%- set showRow = subtablesAreDisabled
                               or not rowHasSubtable
                               or not properties.show_expanded|default(false)
                               or not properties.replace_row_with_subtable|default(false) -%}

                {% if showRow %}
                <tr {% if rowHasSubtable %}id=\"{{ rowSubtableId }}\"{% endif %}
                    {% if row.getMetadata('segment') is not false %} data-segment-filter=\"{{ row.getMetadata('segment')|e('html_attr') }}\"{% endif %}
                    {% if row.getMetadata('url') is not false %} data-url-label=\"{{ row.getMetadata('url')|rawSafeDecoded }}\"{% endif %}
                    data-row-metadata=\"{{ row.getMetadata|json_encode|e('html_attr') }}\"
                    class=\"{{ row.getMetadata('css_class') }} {% if rowHasSubtable %}subDataTable{% endif %}{% if shouldHighlightRow %} highlight{% endif %}{% if isSummaryRow %} summaryRow{% endif %}\"
                    {% if rowHasSubtable %}title=\"{{ 'CoreHome_ClickRowToExpandOrContract'|translate }}\"{% endif %}>
                    {% for column in properties.columns_to_display %}
                        {% set cellAttributes = visualization.getCellHtmlAttributes(row, column) %}
                        <td {% if cellAttributes is not empty %}{% for name, value in cellAttributes %}{{ name|e('html') }}=\"{{ value|e('html_attr') }}\" {% endfor %}{% endif %}>
                            {% include \"@CoreHome/_dataTableCell.twig\" with properties %}
                        </td>
                    {% endfor %}
                </tr>
                {% endif %}

                {# display subtable if present and showing expanded datatable #}
                {% if properties.show_expanded|default(false) and rowHasSubtable %}
                    {% include \"@CoreVisualizations/_dataTableViz_htmlTable.twig\" with {'dataTable': row.getSubtable(), 'idSubtable': rowSubtableId} %}
                {% endif %}
            {%- endfor -%}
            {% if dataTable.getTotalsRow and properties.show_totals_row %}
                {% set row = dataTable.getTotalsRow %}
                {% set rowId = 'totalsRow' %}
                <tr class=\"{{ row.getMetadata('css_class') }} totalsRow\"
                        title=\"Total values for this table\">
                    {% for column in properties.columns_to_display %}
                        <td>
                            {% include \"@CoreHome/_dataTableCell.twig\" with properties %}
                        </td>
                    {% endfor %}
                </tr>
            {% endif %}
        {% endif %}
    {%- if not showingEmbeddedSubtable -%}
        </tbody>
    </table>
    {%- endif -%}
{% endif %}", "@CoreVisualizations/_dataTableViz_htmlTable.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\CoreVisualizations\\templates\\_dataTableViz_htmlTable.twig");
    }
}
