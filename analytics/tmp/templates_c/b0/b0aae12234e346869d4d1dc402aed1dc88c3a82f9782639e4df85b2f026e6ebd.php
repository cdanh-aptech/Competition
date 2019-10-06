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

/* @Live/getLastVisitsStart.twig */
class __TwigTemplate_27bcd2758a2e74b6fae43113a4e633d908a4628ca8f5a4fac53744858a5829e1 extends \Twig\Template
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
        // line 2
        $context["maxPagesDisplayedByVisitor"] = 100;
        // line 3
        echo "
<ul id=\"visitsLive\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visitors"] ?? $this->getContext($context, "visitors")), "getRows", [], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 6
            echo "        <li id=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "idVisit"], "method"), "html", null, true);
            echo "\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", []), "html", null, true);
            echo "</div>
            <div title=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
            echo "\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">";
            // line 9
            echo $this->getAttribute($context["visitor"], "getColumn", [0 => "serverTimestamp"], "method");
            echo "</span>
                ";
            // line 10
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.visitorLogWidgetViewBeforeVisitInfo", $context["visitor"]]);
            echo "
                ";
            // line 11
            $context["year"] = twig_date_format_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "serverTimestamp"], "method"), "Y");
            // line 12
            echo "                <span class=\"realTimeWidget_datetime\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["visitor"], "getColumn", [0 => "serverDatePretty"], "method"), [($context["year"] ?? $this->getContext($context, "year")) => " "]), "html", null, true);
            echo " - ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "serverTimePretty"], "method"), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["visitor"], "getColumn", [0 => "visitDuration"], "method") > 0)) {
                echo "(";
                echo $this->getAttribute($context["visitor"], "getColumn", [0 => "visitDurationPretty"], "method");
                echo ")";
            }
            echo "</span>
                ";
            // line 13
            if ( !twig_test_empty((($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"), false)) : (false)))) {
                // line 14
                echo "                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ViewVisitorProfile"]), "html", null, true);
                echo " ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"))) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"), "html", null, true);
                }
                echo "\" data-visitor-id=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "visitorId"], "method"), "html", null, true);
                echo "\">
                        <span>";
                // line 15
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method")]);
                echo "</span>
                    </a>
                ";
            }
            // line 18
            echo "
                ";
            // line 19
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderVisitorIcons", $context["visitor"]]);
            echo "
                ";
            // line 20
            if ( !($context["userIsAnonymous"] ?? $this->getContext($context, "userIsAnonymous"))) {
                // line 21
                echo "                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ViewVisitorProfile"]), "html", null, true);
                echo " ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"))) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"), "html", null, true);
                }
                echo "\" data-visitor-id=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "visitorId"], "method"), "html", null, true);
                echo "\">
                    <span class=\"icon-visitor-profile\"></span>
                </a>
                ";
            }
            // line 25
            echo "
                <span class=\"referrer\">
                    ";
            // line 27
            $this->loadTemplate("@Referrers/_visitorDetails.twig", "@Live/getLastVisitsStart.twig", 27)->display(twig_array_merge($context, ["visitInfo" => $context["visitor"]]));
            // line 28
            echo "                 </span>
            </div>
            <div id=\"";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "idVisit"], "method"), "html_attr");
            echo "_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"";
            // line 32
            echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
            echo "\"
                      >";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
            echo ":</span>&nbsp;
                ";
            // line 34
            $context["col"] = 0;
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 36
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index", []) <= ($context["maxPagesDisplayedByVisitor"] ?? $this->getContext($context, "maxPagesDisplayedByVisitor")))) {
                    // line 37
                    echo "
                        ";
                    // line 38
                    if ((($this->getAttribute($context["action"], "type", []) == "ecommerceOrder") || ($this->getAttribute($context["action"], "type", []) == "ecommerceAbandonedCart"))) {
                        // line 39
                        echo "                            ";
                        ob_start();
                        // line 40
                        if (($this->getAttribute($context["action"], "type", []) == "ecommerceOrder")) {
                            // line 41
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_EcommerceOrder"]), "html", null, true);
                        } else {
                            // line 43
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_AbandonedCart"]), "html", null, true);
                        }
                        // line 45
                        echo "
 - ";
                        // line 46
                        if (($this->getAttribute($context["action"], "type", []) == "ecommerceOrder")) {
                            // line 47
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
                            echo ":";
                        } else {
                            // line 49
                            ob_start();
                            // line 50
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
                            $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 52
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_LeftInCart", ($context["revenueLeft"] ?? $this->getContext($context, "revenueLeft"))]), "html", null, true);
                            echo ":";
                        }
                        // line 53
                        echo " ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute($context["action"], "revenue", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
                        // line 55
                        echo "
 - ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                        // line 56
                        echo "
";
                        // line 57
                        if ( !twig_test_empty($this->getAttribute($context["action"], "itemDetails", []))) {
                            // line 58
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "itemDetails", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 59
                                echo "
# ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemSKU", []), "html", null, true);
                                if ( !twig_test_empty($this->getAttribute($context["product"], "itemName", []))) {
                                    echo ": ";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemName", []), "html", null, true);
                                }
                                if ( !twig_test_empty($this->getAttribute($context["product"], "itemCategory", []))) {
                                    echo " (";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemCategory", []), "html", null, true);
                                    echo ")";
                                }
                                echo ", ";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Quantity"]), "html", null, true);
                                echo ": ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                                echo ", ";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Price"]), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute($context["product"], "price", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        }
                        // line 62
                        echo "                            ";
                        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 63
                        echo "                            <span title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"";
                        // line 64
                        echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                        echo "\"/>
                                ";
                        // line 65
                        if (($this->getAttribute($context["action"], "type", []) == "ecommerceOrder")) {
                            // line 66
                            echo "                                    ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute($context["action"], "revenue", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
                            echo "
                                ";
                        }
                        // line 68
                        echo "                            </span>

                        ";
                    } else {
                        // line 71
                        echo "
                            ";
                        // line 72
                        if (($this->getAttribute($context["action"], "url", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "url", [])))) {
                            // line 73
                            echo "                            <a href=\"";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute($context["action"], "url", [])]), "html_attr");
                            echo "\" target=\"_blank\">
                            ";
                        }
                        // line 75
                        echo "                                ";
                        if (($this->getAttribute($context["action"], "type", []) == "action")) {
                            // line 77
                            ob_start();
                            // line 78
                            if ( !twig_test_empty(twig_trim_filter($this->getAttribute($context["action"], "url", [])))) {
                                echo "<span class='tooltip-action-url'>";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "url", []), "html", null, true);
                                echo "</span>";
                            }
                            // line 79
                            echo "
";
                            // line 80
                            if ( !twig_test_empty($this->getAttribute($context["action"], "pageTitle", []))) {
                                echo "<span class='tooltip-action-page-title'>";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "pageTitle", []), "html", null, true);
                                echo "</span>";
                            }
                            // line 81
                            echo "
<span class=\"tooltip-action-server-time\">";
                            // line 82
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                            echo "</span>
    ";
                            // line 83
                            if ($this->getAttribute($context["action"], "timeSpentPretty", [], "any", true, true)) {
                                echo "<span class='tooltip-time-on-page'>";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_TimeOnPage"]), "html", null, true);
                                echo ": ";
                                echo $this->getAttribute($context["action"], "timeSpentPretty", []);
                                echo "</span>";
                            }
                            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 85
                            echo "                                    <img class='iconPadding' src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                            echo "\" title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
                            echo "\"/>
                                ";
                        } elseif ((($this->getAttribute(                        // line 86
$context["action"], "type", []) == "outlink") || ($this->getAttribute($context["action"], "type", []) == "download"))) {
                            // line 87
                            echo "                                    <img class='iconPadding' src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 88
                            if ($this->getAttribute($context["action"], "url", [], "any", true, true)) {
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "url", []), "html", null, true);
                                echo " - ";
                            }
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif (($this->getAttribute(                        // line 89
$context["action"], "type", []) == "search")) {
                            // line 90
                            echo "                                    <img class='iconPadding' src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 91
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_SubmenuSitesearch"]), "html", null, true);
                            echo ": ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "siteSearchKeyword", []), "html", null, true);
                            echo " - ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ( !twig_test_empty((($this->getAttribute(                        // line 92
$context["action"], "eventCategory", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", []), false)) : (false)))) {
                            // line 93
                            echo "                                    <img  class=\"iconPadding\" src='";
                            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                            echo "'
                                        title=\"";
                            // line 94
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Events_Event"]), "html", null, true);
                            echo " ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventCategory", []), "html", null, true);
                            echo " - ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventAction", []), "html", null, true);
                            echo " ";
                            if ($this->getAttribute($context["action"], "eventName", [], "any", true, true)) {
                                echo "- ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventName", []), "html", null, true);
                            }
                            echo " ";
                            if ($this->getAttribute($context["action"], "eventValue", [], "any", true, true)) {
                                echo "- ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventValue", []), "html", null, true);
                            }
                            echo "\"/>
                                ";
                        } elseif (((($this->getAttribute(                        // line 95
$context["action"], "type", []) == "goal") || ($this->getAttribute($context["action"], "type", []) == twig_constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER"))) || ($this->getAttribute(                        // line 96
$context["action"], "type", []) == twig_constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART")))) {
                            // line 97
                            echo "                                    <img class='iconPadding' src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 98
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "goalName", []), "html", null, true);
                            echo " - ";
                            if (($this->getAttribute($context["action"], "revenue", []) > 0)) {
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute($context["action"], "revenue", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
                                echo " - ";
                            }
                            echo " ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                            echo "\"/>
                                ";
                        }
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["action"], "url", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "url", [])))) {
                            // line 101
                            echo "                            </a>
                            ";
                        }
                        // line 103
                        echo "                        ";
                    }
                    // line 104
                    echo "                    ";
                }
                // line 105
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "
                ";
            // line 107
            if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method")) > ($context["maxPagesDisplayedByVisitor"] ?? $this->getContext($context, "maxPagesDisplayedByVisitor")))) {
                // line 108
                echo "                    (";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_MorePagesNotDisplayed"]), "html", null, true);
                echo ")
                ";
            }
            // line 110
            echo "            </div>
        </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</ul>
<script type=\"text/javascript\">
\$(function () {
    \$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
        e.preventDefault();
        broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
        return false;
    }).tooltip({
        track: true,
        content: function() {
            var title = \$(this).attr('title');
            return piwikHelper.escape(title.replace(/\\n/g, '<br />'));
        },
        show: {delay: 100, duration: 0},
        hide: false
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "@Live/getLastVisitsStart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 113,  453 => 110,  447 => 108,  445 => 107,  442 => 106,  428 => 105,  425 => 104,  422 => 103,  418 => 101,  415 => 100,  401 => 98,  396 => 97,  394 => 96,  393 => 95,  375 => 94,  370 => 93,  368 => 92,  360 => 91,  355 => 90,  353 => 89,  345 => 88,  340 => 87,  338 => 86,  331 => 85,  322 => 83,  318 => 82,  315 => 81,  309 => 80,  306 => 79,  300 => 78,  298 => 77,  295 => 75,  289 => 73,  287 => 72,  284 => 71,  279 => 68,  271 => 66,  269 => 65,  265 => 64,  260 => 63,  257 => 62,  231 => 59,  227 => 58,  225 => 57,  222 => 56,  218 => 55,  215 => 53,  211 => 52,  208 => 50,  206 => 49,  202 => 47,  200 => 46,  197 => 45,  194 => 43,  191 => 41,  189 => 40,  186 => 39,  184 => 38,  181 => 37,  178 => 36,  160 => 35,  158 => 34,  154 => 33,  148 => 32,  143 => 30,  139 => 28,  137 => 27,  133 => 25,  119 => 21,  117 => 20,  113 => 19,  110 => 18,  104 => 15,  93 => 14,  91 => 13,  78 => 12,  76 => 11,  72 => 10,  68 => 9,  62 => 8,  58 => 7,  53 => 6,  36 => 5,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# some users view thousands of pages which can crash the browser viewing Live! #}
{% set maxPagesDisplayedByVisitor=100 %}

<ul id=\"visitsLive\">
    {% for visitor in visitors.getRows() %}
        <li id=\"{{ visitor.getColumn('idVisit') }}\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">{{ visitor.idVisit }}</div>
            <div title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">{{ visitor.getColumn('serverTimestamp')|raw }}</span>
                {{ postEvent('Live.visitorLogWidgetViewBeforeVisitInfo', visitor) }}
                {% set year = visitor.getColumn('serverTimestamp')|date('Y') %}
                <span class=\"realTimeWidget_datetime\">{{ visitor.getColumn('serverDatePretty')|replace({(year): ' '}) }} - {{ visitor.getColumn('serverTimePretty') }} {% if visitor.getColumn('visitDuration') > 0 %}({{ visitor.getColumn('visitDurationPretty')|raw }}){% endif %}</span>
                {% if visitor.getColumn('userId')|default(false) is not empty %}
                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId') }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                        <span>{{ visitor.getColumn('userId')|rawSafeDecoded}}</span>
                    </a>
                {% endif %}

                {{ postEvent('Live.renderVisitorIcons', visitor) }}
                {% if not userIsAnonymous %}
                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId') }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                    <span class=\"icon-visitor-profile\"></span>
                </a>
                {% endif %}

                <span class=\"referrer\">
                    {% include \"@Referrers/_visitorDetails.twig\" with {'visitInfo': visitor} %}
                 </span>
            </div>
            <div id=\"{{ visitor.getColumn('idVisit')|e('html_attr') }}_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\"
                      >{{ 'General_Actions'|translate }}:</span>&nbsp;
                {% set col = 0 %}
                {% for action in visitor.getColumn('actionDetails') %}
                    {% if loop.index <= maxPagesDisplayedByVisitor %}

                        {% if action.type == 'ecommerceOrder' or action.type == 'ecommerceAbandonedCart' %}
                            {% set title %}
                                {%- if action.type == 'ecommerceOrder' %}
                                    {{- 'Goals_EcommerceOrder'|translate -}}
                                {% else %}
                                    {{- 'Goals_AbandonedCart'|translate -}}
                                {% endif %}
                                {{- \"\\n - \" -}}
                                {%- if action.type == 'ecommerceOrder' -%}
                                    {{- 'General_ColumnRevenue'|translate -}}:
                                  {%- else -%}
                                    {%- set revenueLeft -%}
                                        {{- 'General_ColumnRevenue'|translate -}}
                                    {%- endset -%}
                                    {{- 'Goals_LeftInCart'|translate(revenueLeft) -}}:
                                {%- endif %} {{ action.revenue|money(idSite)|raw -}}

                                {{- \"\\n - \" -}}{{- action.serverTimePretty -}}
                                {{- \"\\n\" -}}
                                {% if action.itemDetails is not empty -%}
                                    {% for product in action.itemDetails -%}
                                        {{- \"\\n# \" -}}{{ product.itemSKU }}{% if product.itemName is not empty %}: {{ product.itemName }}{% endif %}{% if product.itemCategory is not empty %} ({{ product.itemCategory }}){% endif %}, {{ 'General_Quantity'|translate }}: {{ product.quantity }}, {{ 'General_Price'|translate }}: {{ product.price|money(idSite)|raw }}
                                    {%- endfor %}
                                {%- endif %}
                            {% endset %}
                            <span title=\"{{- title -}}\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"/>
                                {% if action.type == 'ecommerceOrder' %}
                                    {{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }}
                                {% endif %}
                            </span>

                        {% else %}

                            {% if action.url is defined and action.url is not empty %}
                            <a href=\"{{ action.url|safelink|e('html_attr') }}\" target=\"_blank\">
                            {% endif %}
                                {% if action.type == 'action' %}
{# white spacing matters as Chrome tooltip display whitespaces #}
{% set title %}
{% if action.url|trim is not empty %}<span class='tooltip-action-url'>{{ action.url }}</span>{% endif %}

{% if action.pageTitle is not empty %}<span class='tooltip-action-page-title'>{{ action.pageTitle }}</span>{% endif %}

<span class=\"tooltip-action-server-time\">{{ action.serverTimePretty }}</span>
    {% if action.timeSpentPretty is defined %}<span class='tooltip-time-on-page'>{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}</span>{% endif %}
{%- endset %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\" title=\"{{- title|e('html_attr') -}}\"/>
                                {% elseif action.type == 'outlink' or action.type == 'download' %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{% if action.url is defined %}{{ action.url }} - {% endif %}{{ action.serverTimePretty }}\"/>
                                {% elseif action.type == 'search' %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{{ 'Actions_SubmenuSitesearch'|translate }}: {{ action.siteSearchKeyword }} - {{ action.serverTimePretty }}\"/>
                                {% elseif action.eventCategory|default(false) is not empty %}
                                    <img  class=\"iconPadding\" src='{{ action.iconSVG|default(action.icon) }}'
                                        title=\"{{ 'Events_Event'|translate }} {{ action.eventCategory }} - {{ action.eventAction }} {% if action.eventName is defined %}- {{ action.eventName }}{% endif %} {% if action.eventValue is defined %}- {{ action.eventValue }}{% endif %}\"/>
                                {% elseif action.type == 'goal' or action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER') or
                                          action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART') %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{{ action.goalName }} - {% if action.revenue > 0 %}{{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }} - {% endif %} {{ action.serverTimePretty }}\"/>
                                {% endif %}
                            {% if action.url is defined and action.url is not empty %}
                            </a>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endfor %}

                {% if visitor.getColumn('actionDetails')|length > maxPagesDisplayedByVisitor %}
                    ({{ 'Live_MorePagesNotDisplayed'|translate }})
                {% endif %}
            </div>
        </li>
    {% endfor %}
</ul>
<script type=\"text/javascript\">
\$(function () {
    \$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
        e.preventDefault();
        broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
        return false;
    }).tooltip({
        track: true,
        content: function() {
            var title = \$(this).attr('title');
            return piwikHelper.escape(title.replace(/\\n/g, '<br />'));
        },
        show: {delay: 100, duration: 0},
        hide: false
    });
});
</script>
", "@Live/getLastVisitsStart.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\Live\\templates\\getLastVisitsStart.twig");
    }
}
