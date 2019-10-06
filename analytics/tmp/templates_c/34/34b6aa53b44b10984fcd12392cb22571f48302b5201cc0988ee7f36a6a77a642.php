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

/* @CoreHome/_dataTable.twig */
class __TwigTemplate_8f2c87a699e686cf2ee8b8587be23e6d80b10f90ccc9e582a8deb7ff08ef72e6 extends \Twig\Template
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
        if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_visualization_only", [])) {
            // line 2
            echo "    ";
            $this->loadTemplate(($context["visualizationTemplate"] ?? $this->getContext($context, "visualizationTemplate")), "@CoreHome/_dataTable.twig", 2)->display($context);
        } else {
            // line 5
            $context["isDataTableEmpty"] = (twig_test_empty(($context["dataTable"] ?? $this->getContext($context, "dataTable"))) || (((isset($context["dataTableHasNoData"]) || array_key_exists("dataTableHasNoData", $context))) ? (_twig_default_filter(($context["dataTableHasNoData"] ?? $this->getContext($context, "dataTableHasNoData")), false)) : (false)));
            // line 6
            echo "
";
            // line 7
            $context["showCardAsContentBlock"] = (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_as_content_block", []) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_title", [])) &&  !($context["isWidget"] ?? $this->getContext($context, "isWidget")));
            // line 8
            $context["showOnlyTitleWithoutCard"] = (( !($context["showCardAsContentBlock"] ?? $this->getContext($context, "showCardAsContentBlock")) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "title", [])) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_title", []));
            // line 9
            echo "
";
            // line 10
            if (($context["showCardAsContentBlock"] ?? $this->getContext($context, "showCardAsContentBlock"))) {
                // line 11
                echo "<div class=\"card\">
<div class=\"card-content\">
    ";
                // line 13
                if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "title", [])) {
                    // line 14
                    echo "        <h2 class=\"card-title\"
            ";
                    // line 15
                    if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "title_edit_entity_url", [])) {
                        echo "edit-url=\"";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "title_edit_entity_url", []), "html", null, true);
                        echo "\"";
                    }
                    // line 16
                    echo "              piwik-enriched-headline
        >";
                    // line 17
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "title", []), "html", null, true);
                    echo "</h2>
    ";
                }
            } elseif (            // line 19
($context["showOnlyTitleWithoutCard"] ?? $this->getContext($context, "showOnlyTitleWithoutCard"))) {
                // line 20
                echo "    <div>
    <h2>";
                // line 21
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "title", []), "html", null, true);
                echo "</h2>
";
            }
            // line 23
            echo "
";
            // line 24
            $context["showCardTableIsEmpty"] = (( !$this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_as_content_block", []) && ($context["isDataTableEmpty"] ?? $this->getContext($context, "isDataTableEmpty"))) &&  !($context["isWidget"] ?? $this->getContext($context, "isWidget")));
            // line 25
            if (($context["showCardTableIsEmpty"] ?? $this->getContext($context, "showCardTableIsEmpty"))) {
                // line 26
                echo "    <div class=\"card\">
    <div class=\"card-content\">
";
            }
            // line 29
            echo "
";
            // line 30
            $context["summaryRowId"] = twig_constant("Piwik\\DataTable::ID_SUMMARY_ROW");
            // line 31
            $context["isSubtable"] = ($this->getAttribute(($context["javascriptVariablesToSet"] ?? null), "idSubtable", [], "any", true, true) && ($this->getAttribute(($context["javascriptVariablesToSet"] ?? $this->getContext($context, "javascriptVariablesToSet")), "idSubtable", []) != 0));
            // line 32
            echo "<div class=\"dataTable ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["visualizationCssClass"] ?? $this->getContext($context, "visualizationCssClass")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["properties"] ?? null), "datatable_css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "datatable_css_class", []), "")) : ("")), "html", null, true);
            echo " ";
            if (($context["isSubtable"] ?? $this->getContext($context, "isSubtable"))) {
                echo "subDataTable";
            }
            echo "\"
     data-table-type=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "datatable_js_type", []), "html", null, true);
            echo "\"
     data-report=\"";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "report_id", []), "html", null, true);
            echo "\"
     data-report-metadata=\"";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["reportMetdadata"] ?? $this->getContext($context, "reportMetdadata"))), "html_attr");
            echo "\"
     data-props=\"";
            // line 36
            if (twig_test_empty(($context["clientSideProperties"] ?? $this->getContext($context, "clientSideProperties")))) {
                echo "{}";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["clientSideProperties"] ?? $this->getContext($context, "clientSideProperties"))), "html", null, true);
            }
            echo "\"
     data-params=\"";
            // line 37
            if (twig_test_empty(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters")))) {
                echo "{}";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters"))), "html", null, true);
            }
            echo "\">

    ";
            // line 39
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "description", [])) {
                // line 40
                echo "        <div class=\"card-description\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "description", []), "html", null, true);
                echo "</div>
    ";
            }
            // line 42
            echo "
    <div class=\"reportDocumentation\">
        ";
            // line 44
            if ( !twig_test_empty((($this->getAttribute(($context["properties"] ?? null), "documentation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "documentation", []))) : ("")))) {
                echo "<p ng-bind-html=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "documentation", [])), "html_attr");
                echo "\"></p>";
            }
            // line 45
            echo "        ";
            if (((isset($context["reportLastUpdatedMessage"]) || array_key_exists("reportLastUpdatedMessage", $context)) && ($context["reportLastUpdatedMessage"] ?? $this->getContext($context, "reportLastUpdatedMessage")))) {
                echo "<span class='helpDate'>";
                echo ($context["reportLastUpdatedMessage"] ?? $this->getContext($context, "reportLastUpdatedMessage"));
                echo "</span>";
            }
            // line 46
            echo "    </div>

    <div class=\"dataTableWrapper\">
        ";
            // line 49
            if ((isset($context["error"]) || array_key_exists("error", $context))) {
                // line 50
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", []), "html", null, true);
                echo "
        ";
            } else {
                // line 52
                echo "            ";
                if (($this->getAttribute(($context["properties"] ?? null), "show_header_message", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_header_message", [])))) {
                    // line 53
                    echo "                <div class='datatableHeaderMessage'>";
                    echo $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_header_message", []);
                    echo "</div>
            ";
                }
                // line 55
                echo "
            ";
                // line 56
                if (($context["isDataTableEmpty"] ?? $this->getContext($context, "isDataTableEmpty"))) {
                    // line 57
                    echo "                <div class=\"pk-emptyDataTable\">
                ";
                    // line 58
                    if (((isset($context["showReportDataWasPurgedMessage"]) || array_key_exists("showReportDataWasPurgedMessage", $context)) && ($context["showReportDataWasPurgedMessage"] ?? $this->getContext($context, "showReportDataWasPurgedMessage")))) {
                        // line 59
                        echo "                    ";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_DataForThisReportHasBeenPurged", ($context["deleteReportsOlderThan"] ?? $this->getContext($context, "deleteReportsOlderThan"))]), "html", null, true);
                        echo "
                ";
                    } elseif ($this->getAttribute(                    // line 60
($context["properties"] ?? $this->getContext($context, "properties")), "no_data_message", [])) {
                        // line 61
                        echo "                    ";
                        echo $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "no_data_message", []);
                        echo "
                ";
                    } else {
                        // line 63
                        echo "                    ";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ThereIsNoDataForThisReport"]), "html", null, true);
                        echo "
                ";
                    }
                    // line 65
                    echo "                </div>
            ";
                } else {
                    // line 67
                    echo "                ";
                    $this->loadTemplate(($context["visualizationTemplate"] ?? $this->getContext($context, "visualizationTemplate")), "@CoreHome/_dataTable.twig", 67)->display($context);
                    // line 68
                    echo "            ";
                }
                // line 69
                echo "
            ";
                // line 70
                if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_footer", [])) {
                    // line 71
                    echo "                ";
                    $this->loadTemplate("@CoreHome/_dataTableFooter.twig", "@CoreHome/_dataTable.twig", 71)->display($context);
                    // line 72
                    echo "            ";
                }
                // line 73
                echo "
            ";
                // line 74
                $this->loadTemplate("@CoreHome/_dataTableJS.twig", "@CoreHome/_dataTable.twig", 74)->display($context);
                // line 75
                echo "        ";
            }
            // line 76
            echo "    </div>
</div>

";
            // line 79
            if (( !twig_test_empty(($context["notifications"] ?? $this->getContext($context, "notifications"))) && twig_length_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications"))))) {
                // line 80
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? $this->getContext($context, "notifications")));
                foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                    // line 81
                    echo "
        ";
                    // line 82
                    echo call_user_func_array($this->env->getFilter('notification')->getCallable(), [$this->getAttribute($context["n"], "message", []), ["id" => $context["notificationId"], "type" => $this->getAttribute($context["n"], "type", []), "title" => $this->getAttribute($context["n"], "title", []), "noclear" => $this->getAttribute($context["n"], "hasNoClear", []), "context" => $this->getAttribute($context["n"], "context", []), "raw" => $this->getAttribute($context["n"], "raw", [])], false]);
                    echo "

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 86
            echo "
";
            // line 87
            if (($context["showCardTableIsEmpty"] ?? $this->getContext($context, "showCardTableIsEmpty"))) {
                // line 88
                echo "    </div></div>
";
            }
            // line 90
            echo "
";
            // line 91
            if (($context["showCardAsContentBlock"] ?? $this->getContext($context, "showCardAsContentBlock"))) {
                // line 92
                echo "    </div></div>
";
            } elseif (            // line 93
($context["showOnlyTitleWithoutCard"] ?? $this->getContext($context, "showOnlyTitleWithoutCard"))) {
                // line 94
                echo "    </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 94,  289 => 93,  286 => 92,  284 => 91,  281 => 90,  277 => 88,  275 => 87,  272 => 86,  262 => 82,  259 => 81,  254 => 80,  252 => 79,  247 => 76,  244 => 75,  242 => 74,  239 => 73,  236 => 72,  233 => 71,  231 => 70,  228 => 69,  225 => 68,  222 => 67,  218 => 65,  212 => 63,  206 => 61,  204 => 60,  199 => 59,  197 => 58,  194 => 57,  192 => 56,  189 => 55,  183 => 53,  180 => 52,  174 => 50,  172 => 49,  167 => 46,  160 => 45,  154 => 44,  150 => 42,  144 => 40,  142 => 39,  133 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  102 => 32,  100 => 31,  98 => 30,  95 => 29,  90 => 26,  88 => 25,  86 => 24,  83 => 23,  78 => 21,  75 => 20,  73 => 19,  68 => 17,  65 => 16,  59 => 15,  56 => 14,  54 => 13,  50 => 11,  48 => 10,  45 => 9,  43 => 8,  41 => 7,  38 => 6,  36 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if properties.show_visualization_only %}
    {% include visualizationTemplate %}
{%- else -%}

{% set isDataTableEmpty = (dataTable is empty or dataTableHasNoData|default(false)) %}

{% set showCardAsContentBlock = (properties.show_as_content_block and properties.show_title and not isWidget) %}
{% set showOnlyTitleWithoutCard = not showCardAsContentBlock and properties.title and properties.show_title %}

{% if showCardAsContentBlock  %}
<div class=\"card\">
<div class=\"card-content\">
    {% if properties.title %}
        <h2 class=\"card-title\"
            {% if properties.title_edit_entity_url %}edit-url=\"{{ properties.title_edit_entity_url }}\"{% endif %}
              piwik-enriched-headline
        >{{ properties.title }}</h2>
    {% endif %}
{% elseif showOnlyTitleWithoutCard %}
    <div>
    <h2>{{ properties.title }}</h2>
{% endif %}

{% set showCardTableIsEmpty = not properties.show_as_content_block and isDataTableEmpty and not isWidget %}
{% if showCardTableIsEmpty %}
    <div class=\"card\">
    <div class=\"card-content\">
{% endif %}

{% set summaryRowId = constant('Piwik\\\\DataTable::ID_SUMMARY_ROW') %}{# ID_SUMMARY_ROW #}
{% set isSubtable = javascriptVariablesToSet.idSubtable is defined and javascriptVariablesToSet.idSubtable != 0 %}
<div class=\"dataTable {{ visualizationCssClass }} {{ properties.datatable_css_class|default('') }} {% if isSubtable %}subDataTable{% endif %}\"
     data-table-type=\"{{ properties.datatable_js_type }}\"
     data-report=\"{{ properties.report_id }}\"
     data-report-metadata=\"{{ reportMetdadata|json_encode|e('html_attr') }}\"
     data-props=\"{% if clientSideProperties is empty %}{}{% else %}{{ clientSideProperties|json_encode }}{% endif %}\"
     data-params=\"{% if clientSideParameters is empty %}{}{% else %}{{ clientSideParameters|json_encode }}{% endif %}\">

    {% if properties.description %}
        <div class=\"card-description\">{{ properties.description }}</div>
    {% endif %}

    <div class=\"reportDocumentation\">
        {% if properties.documentation|default is not empty %}<p ng-bind-html=\"{{ properties.documentation|json_encode|e('html_attr') }}\"></p>{% endif %}
        {% if reportLastUpdatedMessage is defined and reportLastUpdatedMessage %}<span class='helpDate'>{{ reportLastUpdatedMessage|raw }}</span>{% endif %}
    </div>

    <div class=\"dataTableWrapper\">
        {% if error is defined %}
            {{ error.message }}
        {% else %}
            {% if properties.show_header_message is defined and properties.show_header_message is not empty %}
                <div class='datatableHeaderMessage'>{{ properties.show_header_message | raw }}</div>
            {% endif %}

            {% if isDataTableEmpty %}
                <div class=\"pk-emptyDataTable\">
                {% if showReportDataWasPurgedMessage is defined and showReportDataWasPurgedMessage %}
                    {{ 'CoreHome_DataForThisReportHasBeenPurged'|translate(deleteReportsOlderThan) }}
                {% elseif properties.no_data_message %}
                    {{ properties.no_data_message|raw }}
                {% else %}
                    {{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}
                {% endif %}
                </div>
            {% else %}
                {% include visualizationTemplate %}
            {% endif %}

            {% if properties.show_footer %}
                {% include \"@CoreHome/_dataTableFooter.twig\" %}
            {% endif %}

            {% include \"@CoreHome/_dataTableJS.twig\" %}
        {% endif %}
    </div>
</div>

{% if notifications is not empty and notifications|length %}
    {% for notificationId, n in notifications %}

        {{ n.message|notification({'id': notificationId, 'type': n.type, 'title': n.title, 'noclear': n.hasNoClear, 'context': n.context, 'raw': n.raw}, false) }}

    {% endfor %}
{% endif %}

{% if showCardTableIsEmpty %}
    </div></div>
{% endif %}

{% if showCardAsContentBlock %}
    </div></div>
{% elseif showOnlyTitleWithoutCard %}
    </div>
{% endif %}

{%- endif %}", "@CoreHome/_dataTable.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\CoreHome\\templates\\_dataTable.twig");
    }
}
