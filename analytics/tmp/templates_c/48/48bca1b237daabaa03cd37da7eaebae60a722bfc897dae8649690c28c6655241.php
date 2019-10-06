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

/* @Marketplace/plugin-details.twig */
class __TwigTemplate_5766074d4aa81e7e32245241c763e0e0ca88a584773ba7a5444afff7eeb713bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["marketplaceMacro"] = $this->loadTemplate("@Marketplace/macros.twig", "@Marketplace/plugin-details.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    <div class=\"pluginDetails\">
        ";
        // line 6
        if (($context["errorMessage"] ?? $this->getContext($context, "errorMessage"))) {
            // line 7
            echo "            ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")), "html", null, true);
            echo "
        ";
        } elseif (        // line 8
($context["plugin"] ?? $this->getContext($context, "plugin"))) {
            // line 9
            echo "
            ";
            // line 10
            $context["isBundle"] = ($this->getAttribute(($context["plugin"] ?? null), "isBundle", [], "any", true, true) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "isBundle", []));
            // line 11
            echo "
            ";
            // line 12
            if (( !twig_test_empty($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "versions", [])) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "versions", []), (twig_length_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "versions", [])) - 1), [], "array"))) {
                // line 13
                echo "                ";
                $context["latestVersion"] = $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "versions", []), (twig_length_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "versions", [])) - 1), [], "array");
                // line 14
                echo "            ";
            } else {
                // line 15
                echo "                ";
                $context["latestVersion"] = "";
                // line 16
                echo "            ";
            }
            // line 17
            echo "
            <div class=\"row\">
                <div class=\"col s12 m9\">
                    <h2>";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "displayName", []), "html", null, true);
            echo "</h2>
                    <p class=\"description\">
                        ";
            // line 22
            if ($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "featured", [])) {
                // line 23
                echo "                            ";
                echo $context["marketplaceMacro"]->getfeaturedIcon("left");
                echo "
                        ";
            }
            // line 25
            echo "                        ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "description", []), "html", null, true);
            echo "
                    </p>
                    <div class=\"contentDetails\">
                        <div id=\"pluginDetailsTabs\" class=\"row\">
                            <div class=\"col s12\">
                                <ul class=\"tabs\">
                                    <li class=\"tab col s3\"><a href=\"#tabs-description\">";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html", null, true);
            echo "</a></li>

                                    ";
            // line 33
            if ($this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "readmeHtml", []), "faq", [])) {
                // line 34
                echo "                                        <li class=\"tab col s3\"><a href=\"#tabs-faq\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Faq"]), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 36
            echo "
                                    ";
            // line 37
            if ($this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "readmeHtml", []), "documentation", [])) {
                // line 38
                echo "                                        <li class=\"tab col s3\"><a href=\"#tabs-documentation\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Documentation"]), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 40
            echo "
                                    ";
            // line 41
            if (twig_length_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "screenshots", []))) {
                // line 42
                echo "                                        <li class=\"tab col s3\"><a href=\"#tabs-screenshots\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_Screenshots"]), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 44
            echo "
                                    ";
            // line 45
            if ((((($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", true, true) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", [])) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", [])) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", false, true), "reviews", [], "any", false, true), "embedUrl", [], "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", []), "embedUrl", []))) {
                // line 46
                echo "                                        <li class=\"tab col s3\"><a href=\"#tabs-reviews\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_Reviews"]), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 48
            echo "                                </ul>
                            </div>

                            <div id=\"tabs-description\" class=\"tab-content col s12\">
                                ";
            // line 52
            if ((($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")) && ($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "isDownloadable", []) || $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "isInstalled", [])))) {
                // line 53
                echo "                                    ";
                echo $context["marketplaceMacro"]->getmissingRequirementsPleaseUpdateNotice(($context["plugin"] ?? $this->getContext($context, "plugin")));
                echo "

                                    ";
                // line 55
                if (($context["isMultiServerEnvironment"] ?? $this->getContext($context, "isMultiServerEnvironment"))) {
                    // line 56
                    echo "                                        <div class=\"alert alert-warning\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_MultiServerEnvironmentWarning"]), "html", null, true);
                    echo "</div>
                                    ";
                } elseif ( !                // line 57
($context["isAutoUpdateEnabled"] ?? $this->getContext($context, "isAutoUpdateEnabled"))) {
                    // line 58
                    echo "                                        <div class=\"alert alert-warning\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_AutoUpdateDisabledWarning", "'[General]enable_auto_update=1'", "'config/config.ini.php'"]), "html", null, true);
                    echo "</div>
                                    ";
                }
                // line 60
                echo "                                ";
            }
            // line 61
            echo "
                                ";
            // line 62
            if (((($context["hasSomeAdminAccess"] ?? $this->getContext($context, "hasSomeAdminAccess")) && $this->getAttribute(($context["plugin"] ?? null), "isMissingLicense", [], "any", true, true)) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "isMissingLicense", []))) {
                // line 63
                echo "                                    <div class=\"alert alert-danger\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_PluginLicenseMissingDescription"]), "html", null, true);
                echo "</div>
                                ";
            } elseif (((            // line 64
($context["hasSomeAdminAccess"] ?? $this->getContext($context, "hasSomeAdminAccess")) && $this->getAttribute(($context["plugin"] ?? null), "hasExceededLicense", [], "any", true, true)) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "hasExceededLicense", []))) {
                // line 65
                echo "                                    <div class=\"alert alert-warning\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_PluginLicenseExceededDescription"]), "html", null, true);
                echo "</div>
                                ";
            }
            // line 67
            echo "
                                ";
            // line 68
            echo $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "readmeHtml", []), "description", []);
            echo "
                            </div>

                            ";
            // line 71
            if ($this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "readmeHtml", []), "faq", [])) {
                // line 72
                echo "                                <div id=\"tabs-faq\" class=\"tab-content col s12\">
                                    ";
                // line 73
                echo $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "readmeHtml", []), "faq", []);
                echo "
                                </div>
                            ";
            }
            // line 76
            echo "
                            ";
            // line 77
            if ($this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "readmeHtml", []), "documentation", [])) {
                // line 78
                echo "                                <div id=\"tabs-documentation\" class=\"tab-content col s12\">
                                    ";
                // line 79
                echo $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "readmeHtml", []), "documentation", []);
                echo "
                                </div>
                            ";
            }
            // line 82
            echo "
                            ";
            // line 83
            if (twig_length_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "screenshots", []))) {
                // line 84
                echo "                                <div id=\"tabs-screenshots\" class=\"tab-content col s12\">
                                    <div class=\"thumbnails\">
                                        ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "screenshots", []));
                foreach ($context['_seq'] as $context["_key"] => $context["screenshot"]) {
                    // line 87
                    echo "                                            <div class=\"thumbnail\">
                                                <a href=\"";
                    // line 88
                    echo \Piwik\piwik_escape_filter($this->env, $context["screenshot"], "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $context["screenshot"], "html", null, true);
                    echo "?w=400\" width=\"400\" alt=\"\"></a>
                                                <p>
                                                    ";
                    // line 90
                    echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter(twig_last($this->env, twig_split_filter($this->env, $context["screenshot"], "/")), ["_" => " ", ".png" => "", ".jpg" => "", ".jpeg" => ""]), "html", null, true);
                    echo "
                                                </p>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['screenshot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 97
            echo "
                            ";
            // line 98
            if ((((($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", true, true) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", [])) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", [])) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", false, true), "reviews", [], "any", false, true), "embedUrl", [], "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", []), "embedUrl", []))) {
                // line 99
                echo "                                <div id=\"tabs-reviews\" class=\"tab-content col s12\">
                                    <iframe class=\"reviewIframe\"
                                            style=\"";
                // line 101
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", []), "height", [])) {
                    echo "height:";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", []), "height", []), "html", null, true);
                    echo "px;";
                }
                echo "\"
                                            id=\"";
                // line 102
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('md5')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", []), "embedUrl", [])]), "html", null, true);
                echo "\"
                                            src=\"";
                // line 103
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", []), "embedUrl", []);
                echo "\"></iframe>
                                </div>
                            ";
            }
            // line 106
            echo "                        </div>
                    </div>
                </div>
                <div class=\"col s12 m3\">
                    <div class=\"metadata\">
                        <div class=\"actionButton\">
                            ";
            // line 112
            if (( !$this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "isDownloadable", []) ||  !($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")))) {
                // line 113
                echo "                                ";
                if ((((($context["hasSomeAdminAccess"] ?? $this->getContext($context, "hasSomeAdminAccess")) && $this->getAttribute(($context["plugin"] ?? null), "hasExceededLicense", [], "any", true, true)) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "hasExceededLicense", [])) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "consumer", []))) {
                    // line 114
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "consumer", [], "any", false, true), "loginUrl", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "consumer", []), "loginUrl", []))) {
                        // line 115
                        echo "                                        <a class=\"install update\"
                                           target=\"_blank\"
                                           rel=\"noreferrer noopener\"
                                           href=\"";
                        // line 118
                        echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "consumer", [], "any", false, true), "loginUrl", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "consumer", [], "any", false, true), "loginUrl", []), "")) : ("")), "html_attr");
                        echo "\"
                                        >";
                        // line 119
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_UpgradeSubscription"]), "html", null, true);
                        echo "</a>
                                    ";
                    }
                    // line 121
                    echo "
                                ";
                } elseif (((( !$this->getAttribute(                // line 122
($context["plugin"] ?? $this->getContext($context, "plugin")), "isDownloadable", []) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "isPaid", [])) && $this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", true, true)) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []))) {
                    // line 123
                    echo "
                                    ";
                    // line 124
                    if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "variations", []))) {
                        // line 125
                        echo "
                                        <div class=\"input-field variationPicker\">
                                            <select title=\"";
                        // line 127
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_ShownPriceIsExclTax"]), "html_attr");
                        echo " ";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_CurrentNumPiwikUsers", ($context["numUsers"] ?? $this->getContext($context, "numUsers"))]), "html_attr");
                        echo "\">
                                                ";
                        // line 128
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "variations", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                            // line 129
                            echo "                                                    <option value=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["variation"], "addToCartUrl", []), "html", null, true);
                            echo "\"
                                                            title=\"";
                            // line 130
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_PriceExclTax", $this->getAttribute($context["variation"], "price", []), $this->getAttribute($context["variation"], "currency", [])]), "html_attr");
                            echo " ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_CurrentNumPiwikUsers", ($context["numUsers"] ?? $this->getContext($context, "numUsers"))]), "html_attr");
                            echo "\"
                                                            ";
                            // line 131
                            if (($this->getAttribute($context["variation"], "recommended", [], "any", true, true) && $this->getAttribute($context["variation"], "recommended", []))) {
                                echo "selected";
                            }
                            // line 132
                            echo "                                                    >";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["variation"], "name", []), "html", null, true);
                            echo " - ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["variation"], "prettyPrice", []), "html", null, true);
                            echo " / ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["variation"], "period", []), "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        echo "                                            </select>
                                        </div>

                                        <a class=\"install update addToCartLink\" target=\"_blank\"
                                           title=\"";
                        // line 138
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_ClickToCompletePurchase"]), "html_attr");
                        echo "\"
                                           rel=\"noreferrer noopener\"
                                           href=\"";
                        // line 140
                        echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", false, true), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", false, true), "url", []), "")) : ("")), "html_attr");
                        echo "\"
                                        >";
                        // line 141
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_AddToCart"]), "html", null, true);
                        echo "</a>
                                    ";
                    } else {
                        // line 143
                        echo "                                        <a class=\"install update\" target=\"_blank\"
                                           rel=\"noreferrer noopener\"
                                           href=\"";
                        // line 145
                        if ((($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", true, true) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", [])) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "url", []))) {
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "url", []), "html_attr");
                        } else {
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "homepage", []), "html_attr");
                        }
                        echo "\"
                                        >";
                        // line 146
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_MoreDetails"]), "html", null, true);
                        echo "</a>
                                    ";
                    }
                    // line 148
                    echo "                                ";
                }
                // line 149
                echo "                            ";
            } elseif (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
                // line 150
                echo "                                ";
                if ( !($context["isAutoUpdatePossible"] ?? $this->getContext($context, "isAutoUpdatePossible"))) {
                    // line 151
                    echo "                                    <a onclick=\"\$(this).css('display', 'none')\" href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["action" => "download", "pluginName" => $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "name", []), "nonce" => Piwik\Nonce::getNonce($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "name", []))]]), "html", null, true);
                    echo "\"
                                       class=\"download\">";
                    // line 152
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Download"]), "html", null, true);
                    echo "</a>
                                ";
                } elseif (($this->getAttribute(                // line 153
($context["plugin"] ?? $this->getContext($context, "plugin")), "canBeUpdated", []) && (0 == twig_length_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "missingRequirements", []))))) {
                    // line 154
                    echo "                                    <a class=\"install update\"
                                       href=\"";
                    // line 155
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "Marketplace", "action" => "updatePlugin", "pluginName" => $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "name", []), "nonce" => ($context["updateNonce"] ?? $this->getContext($context, "updateNonce"))]]), "html", null, true);
                    echo "\"
                                    >";
                    // line 156
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreUpdater_UpdateTitle"]), "html", null, true);
                    echo "</a>
                                ";
                } elseif ($this->getAttribute(                // line 157
($context["plugin"] ?? $this->getContext($context, "plugin")), "isInstalled", [])) {
                    // line 158
                    echo "                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                ";
                } elseif ((0 < twig_length_filter($this->env, $this->getAttribute(                // line 162
($context["plugin"] ?? $this->getContext($context, "plugin")), "missingRequirements", [])))) {
                    // line 163
                    echo "                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                ";
                } else {
                    // line 168
                    echo "                                    <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "Marketplace", "action" => "installPlugin", "pluginName" => $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "name", []), "nonce" => ($context["installNonce"] ?? $this->getContext($context, "installNonce"))]]), "html", null, true);
                    echo "\"
                                       class=\"install\">";
                    // line 169
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_ActionInstall"]), "html", null, true);
                    echo "</a>
                                ";
                }
                // line 171
                echo "                            ";
            } else {
                // line 172
                echo "                                <br />
                                <br />
                                <br />
                                <br />
                            ";
            }
            // line 177
            echo "                        </div>
                        
                        ";
            // line 179
            if (($this->getAttribute(($context["plugin"] ?? null), "specialOffer", [], "any", true, true) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "specialOffer", []))) {
                echo "<p style=\"color: green;\"><br />";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "specialOffer", []), "html", null, true);
                echo "</p>";
            }
            // line 180
            echo "
                        <p><br /></p>
                        <dl>
                            ";
            // line 183
            if ( !($context["isBundle"] ?? $this->getContext($context, "isBundle"))) {
                // line 184
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Version"]), "html", null, true);
                echo "</dt>
                                <dd>";
                // line 185
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "latestVersion", []), "html", null, true);
                echo "</dd>
                            ";
            }
            // line 187
            echo "
                            <dt>";
            // line 188
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_PluginKeywords"]), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 189
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "keywords", []), ", "), "html", null, true);
            echo "</dd>

                            ";
            // line 191
            if (($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "lastUpdated", []) &&  !($context["isBundle"] ?? $this->getContext($context, "isBundle")))) {
                // line 192
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_LastUpdated"]), "html", null, true);
                echo "</dt>
                                <dd>";
                // line 193
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "lastUpdated", []), "html", null, true);
                echo "</dd>
                            ";
            }
            // line 195
            echo "                            ";
            if ($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "numDownloads", [])) {
                // line 196
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Downloads"]), "html", null, true);
                echo "</dt>
                                <dd title=\"";
                // line 197
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_NumDownloadsLatestVersion", twig_number_format_filter($this->env, $this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "numDownloads", []))]), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "numDownloads", []), "html", null, true);
                echo "</dd>
                            ";
            }
            // line 199
            echo "
                            ";
            // line 200
            if ( !($context["isBundle"] ?? $this->getContext($context, "isBundle"))) {
                // line 201
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_Developer"]), "html", null, true);
                echo "</dt>
                                <dd>";
                // line 202
                echo $context["marketplaceMacro"]->getpluginDeveloper($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "owner", []));
                echo "</dd>
                                ";
                // line 203
                if (((((($context["latestVersion"] ?? $this->getContext($context, "latestVersion")) && $this->getAttribute(($context["latestVersion"] ?? null), "license", [], "any", true, true)) && $this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "license", [])) && $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? null), "license", [], "any", false, true), "name", [], "any", true, true)) && $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "license", []), "name", []))) {
                    // line 204
                    echo "                                    <dt>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_License"]), "html", null, true);
                    echo "</dt>
                                    <dd>
                                        ";
                    // line 206
                    if (($this->getAttribute($this->getAttribute(($context["latestVersion"] ?? null), "license", [], "any", false, true), "url", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "license", []), "url", []))) {
                        // line 207
                        echo "                                            <a rel=\"noreferrer noopener\"
                                               href=\"";
                        // line 208
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "license", []), "url", []), "html", null, true);
                        echo "\"
                                               target=\"_blank\">";
                        // line 209
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "license", []), "name", []), "html", null, true);
                        echo "</a>
                                        ";
                    } else {
                        // line 211
                        echo "                                            ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["latestVersion"] ?? $this->getContext($context, "latestVersion")), "license", []), "name", []), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 213
                    echo "                                    </dd>
                                ";
                }
                // line 215
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_Authors"]), "html", null, true);
                echo "</dt>
                                <dd>";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "authors", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    if ($this->getAttribute($context["author"], "name", [])) {
                        // line 217
                        echo "
                                        ";
                        // line 218
                        ob_start();
                        // line 219
                        echo "                                            ";
                        if ($this->getAttribute($context["author"], "homepage", [])) {
                            // line 220
                            echo "                                                <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "homepage", []), "html", null, true);
                            echo "\">";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", []), "html", null, true);
                            echo "</a>
                                            ";
                        } elseif ($this->getAttribute(                        // line 221
$context["author"], "email", [])) {
                            // line 222
                            echo "                                                <a href=\"mailto:";
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "email", []), "url"), "html", null, true);
                            echo "\">";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", []), "html", null, true);
                            echo "</a>
                                            ";
                        } else {
                            // line 224
                            echo "                                                ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", []), "html", null, true);
                            echo "
                                            ";
                        }
                        // line 226
                        echo "
                                            ";
                        // line 227
                        if (($this->getAttribute($context["loop"], "index", []) < twig_length_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "authors", [])))) {
                            // line 228
                            echo "                                                ,
                                            ";
                        }
                        // line 230
                        echo "                                        ";
                        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                        // line 231
                        echo "
                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "                                </dd>
                            ";
            }
            // line 235
            echo "                            <dt>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Websites"]), "html", null, true);
            echo "</dt>
                            <dd>
                                ";
            // line 237
            if ($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "homepage", [])) {
                // line 238
                echo "                                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "homepage", []), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_PluginWebsite"]), "html", null, true);
                echo "</a>";
            }
            // line 241
            if (((($this->getAttribute(($context["plugin"] ?? null), "changelog", [], "any", true, true) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "changelog", [])) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "changelog", [], "any", false, true), "url", [], "any", true, true)) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "changelog", []), "url", []))) {
                // line 242
                if ($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "homepage", [])) {
                    echo ", ";
                }
                // line 243
                echo "                                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "changelog", []), "url", []), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Changelog"]), "html", null, true);
                echo "</a>";
            }
            // line 246
            if ($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "repositoryUrl", [])) {
                echo ", <a target=\"_blank\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "repositoryUrl", []), "html", null, true);
                echo "\">GitHub</a>";
            }
            // line 247
            echo "                            </dd>

                            ";
            // line 249
            if (($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "activity", []) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "activity", []), "numCommits", []))) {
                // line 250
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Activity"]), "html", null, true);
                echo "</dt>
                                <dd>
                                    ";
                // line 252
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "activity", []), "numCommits", []), "html", null, true);
                echo " commits

                                    ";
                // line 254
                if (($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "activity", []), "numContributors", []) > 1)) {
                    // line 255
                    echo "                                        ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_ByXDevelopers", $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "activity", []), "numContributors", [])]), "html", null, true);
                    echo "
                                    ";
                }
                // line 257
                echo "                                    ";
                if ($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "activity", []), "lastCommitDate", [])) {
                    // line 258
                    echo "                                        ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_LastCommitTime", $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "activity", []), "lastCommitDate", [])]), "html", null, true);
                    echo "
                                    ";
                }
                // line 259
                echo "</dd>
                            ";
            }
            // line 261
            echo "                        </dl>

                        ";
            // line 263
            if ( !twig_test_empty($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "support", []))) {
                // line 264
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "support", []));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 265
                    echo "                                ";
                    if (($this->getAttribute($context["entry"], "name", []) && $this->getAttribute($context["entry"], "value", []))) {
                        // line 266
                        echo "                                    <dt>";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "name", []), "html", null, true);
                        echo "</dt>
                                    <dd>";
                        // line 267
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "value", []), "html", null, true);
                        echo "</dd>
                                ";
                    }
                    // line 269
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 270
                echo "                        ";
            }
            // line 271
            echo "
                        <br />
                    </div>
                </div>
            </div>

            <script type=\"text/javascript\">
                \$(function() {

                    var active = 0;
                    ";
            // line 281
            if (($context["activeTab"] ?? $this->getContext($context, "activeTab"))) {
                // line 282
                echo "                    var \$activeTab = \$('#tabs-";
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, ($context["activeTab"] ?? $this->getContext($context, "activeTab")), "js"), "html", null, true);
                echo "');
                    if (\$activeTab) {
                        active = \$activeTab.index() - 1;
                    }
                    ";
            }
            // line 287
            echo "
                    \$('#pluginDetailsTabs .tabs').tabs();
                    \$('#pluginDetailsTabs .tabs').tabs('select_tab', active >= 0 ? active : 0);

                    \$('.pluginDetails a').each(function (index, a) {
                        var link = \$(a).attr('href');

                        if (link && 0 === link.indexOf('http')) {
                            \$(a).attr('target', '_blank');
                        }
                    });
                });
            </script>

            ";
            // line 301
            if ((((($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", true, true) && $this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", [])) && $this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", [])) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "shop", [], "any", false, true), "reviews", [], "any", false, true), "embedUrl", [], "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", []), "embedUrl", []))) {
                // line 302
                echo "                <script type=\"text/javascript\">
                    \$(function() {
                        var \$iFrames = \$('.pluginDetails iframe.reviewIframe');
                        for (var i = 0; i < \$iFrames.length; i++) {
                            iFrameResize({checkOrigin: ['";
                // line 306
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('domainOnly')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? $this->getContext($context, "plugin")), "shop", []), "reviews", []), "embedUrl", [])]), "html", null, true);
                echo "']}, \$iFrames[i]);
                        }
                    });
                </script>
            ";
            }
            // line 311
            echo "
            <script type=\"text/javascript\">
                \$(function() {
                    var \$variationPicker = \$('.pluginDetails .variationPicker select');
                    if (\$variationPicker.val()) {
                        \$('.addToCartLink').attr('href', \$variationPicker.val());
                    }
                    \$variationPicker.on('change', function () {
                        \$('.addToCartLink').attr('href', \$variationPicker.val())
                    });

                    if (\$variationPicker.length) {
                        \$variationPicker.material_select();
                    }
                });
            </script>
        ";
        }
        // line 328
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "@Marketplace/plugin-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  852 => 328,  833 => 311,  825 => 306,  819 => 302,  817 => 301,  801 => 287,  792 => 282,  790 => 281,  778 => 271,  775 => 270,  769 => 269,  764 => 267,  759 => 266,  756 => 265,  751 => 264,  749 => 263,  745 => 261,  741 => 259,  735 => 258,  732 => 257,  726 => 255,  724 => 254,  719 => 252,  713 => 250,  711 => 249,  707 => 247,  701 => 246,  694 => 243,  690 => 242,  688 => 241,  681 => 238,  679 => 237,  673 => 235,  669 => 233,  658 => 231,  655 => 230,  651 => 228,  649 => 227,  646 => 226,  640 => 224,  632 => 222,  630 => 221,  623 => 220,  620 => 219,  618 => 218,  615 => 217,  604 => 216,  599 => 215,  595 => 213,  589 => 211,  584 => 209,  580 => 208,  577 => 207,  575 => 206,  569 => 204,  567 => 203,  563 => 202,  558 => 201,  556 => 200,  553 => 199,  546 => 197,  541 => 196,  538 => 195,  533 => 193,  528 => 192,  526 => 191,  521 => 189,  517 => 188,  514 => 187,  509 => 185,  504 => 184,  502 => 183,  497 => 180,  491 => 179,  487 => 177,  480 => 172,  477 => 171,  472 => 169,  467 => 168,  460 => 163,  458 => 162,  452 => 158,  450 => 157,  446 => 156,  442 => 155,  439 => 154,  437 => 153,  433 => 152,  428 => 151,  425 => 150,  422 => 149,  419 => 148,  414 => 146,  406 => 145,  402 => 143,  397 => 141,  393 => 140,  388 => 138,  382 => 134,  369 => 132,  365 => 131,  359 => 130,  354 => 129,  350 => 128,  344 => 127,  340 => 125,  338 => 124,  335 => 123,  333 => 122,  330 => 121,  325 => 119,  321 => 118,  316 => 115,  313 => 114,  310 => 113,  308 => 112,  300 => 106,  294 => 103,  290 => 102,  282 => 101,  278 => 99,  276 => 98,  273 => 97,  268 => 94,  258 => 90,  251 => 88,  248 => 87,  244 => 86,  240 => 84,  238 => 83,  235 => 82,  229 => 79,  226 => 78,  224 => 77,  221 => 76,  215 => 73,  212 => 72,  210 => 71,  204 => 68,  201 => 67,  195 => 65,  193 => 64,  188 => 63,  186 => 62,  183 => 61,  180 => 60,  174 => 58,  172 => 57,  167 => 56,  165 => 55,  159 => 53,  157 => 52,  151 => 48,  145 => 46,  143 => 45,  140 => 44,  134 => 42,  132 => 41,  129 => 40,  123 => 38,  121 => 37,  118 => 36,  112 => 34,  110 => 33,  105 => 31,  95 => 25,  89 => 23,  87 => 22,  82 => 20,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  48 => 7,  46 => 6,  42 => 4,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import '@Marketplace/macros.twig' as marketplaceMacro %}

{% block content %}

    <div class=\"pluginDetails\">
        {% if errorMessage %}
            {{ errorMessage }}
        {% elseif plugin %}

            {% set isBundle = plugin.isBundle is defined and plugin.isBundle %}

            {% if plugin.versions is not empty and plugin.versions[plugin.versions|length - 1] %}
                {% set latestVersion = plugin.versions[plugin.versions|length - 1] %}
            {% else %}
                {% set latestVersion = '' %}
            {% endif %}

            <div class=\"row\">
                <div class=\"col s12 m9\">
                    <h2>{{ plugin.displayName }}</h2>
                    <p class=\"description\">
                        {% if plugin.featured %}
                            {{ marketplaceMacro.featuredIcon('left') }}
                        {% endif %}
                        {{ plugin.description }}
                    </p>
                    <div class=\"contentDetails\">
                        <div id=\"pluginDetailsTabs\" class=\"row\">
                            <div class=\"col s12\">
                                <ul class=\"tabs\">
                                    <li class=\"tab col s3\"><a href=\"#tabs-description\">{{ 'General_Description'|translate }}</a></li>

                                    {% if latestVersion.readmeHtml.faq %}
                                        <li class=\"tab col s3\"><a href=\"#tabs-faq\">{{ 'General_Faq'|translate }}</a></li>
                                    {% endif %}

                                    {% if latestVersion.readmeHtml.documentation %}
                                        <li class=\"tab col s3\"><a href=\"#tabs-documentation\">{{ 'General_Documentation'|translate }}</a></li>
                                    {% endif %}

                                    {% if plugin.screenshots|length %}
                                        <li class=\"tab col s3\"><a href=\"#tabs-screenshots\">{{ 'Marketplace_Screenshots'|translate }}</a></li>
                                    {% endif %}

                                    {% if plugin.shop is defined and plugin.shop and plugin.shop.reviews and plugin.shop.reviews.embedUrl is defined and plugin.shop.reviews.embedUrl %}
                                        <li class=\"tab col s3\"><a href=\"#tabs-reviews\">{{ 'Marketplace_Reviews'|translate }}</a></li>
                                    {% endif %}
                                </ul>
                            </div>

                            <div id=\"tabs-description\" class=\"tab-content col s12\">
                                {% if isSuperUser and (plugin.isDownloadable or plugin.isInstalled) %}
                                    {{ marketplaceMacro.missingRequirementsPleaseUpdateNotice(plugin) }}

                                    {% if isMultiServerEnvironment %}
                                        <div class=\"alert alert-warning\">{{ 'Marketplace_MultiServerEnvironmentWarning'|translate }}</div>
                                    {% elseif not isAutoUpdateEnabled %}
                                        <div class=\"alert alert-warning\">{{ 'Marketplace_AutoUpdateDisabledWarning'|translate(\"'[General]enable_auto_update=1'\", \"'config/config.ini.php'\") }}</div>
                                    {% endif %}
                                {% endif %}

                                {% if hasSomeAdminAccess and plugin.isMissingLicense is defined and plugin.isMissingLicense %}
                                    <div class=\"alert alert-danger\">{{ 'Marketplace_PluginLicenseMissingDescription'|translate }}</div>
                                {% elseif hasSomeAdminAccess and plugin.hasExceededLicense is defined and plugin.hasExceededLicense %}
                                    <div class=\"alert alert-warning\">{{ 'Marketplace_PluginLicenseExceededDescription'|translate }}</div>
                                {% endif %}

                                {{ latestVersion.readmeHtml.description|raw }}
                            </div>

                            {% if latestVersion.readmeHtml.faq %}
                                <div id=\"tabs-faq\" class=\"tab-content col s12\">
                                    {{ latestVersion.readmeHtml.faq|raw }}
                                </div>
                            {% endif %}

                            {% if latestVersion.readmeHtml.documentation %}
                                <div id=\"tabs-documentation\" class=\"tab-content col s12\">
                                    {{ latestVersion.readmeHtml.documentation|raw }}
                                </div>
                            {% endif %}

                            {% if plugin.screenshots|length %}
                                <div id=\"tabs-screenshots\" class=\"tab-content col s12\">
                                    <div class=\"thumbnails\">
                                        {% for screenshot in plugin.screenshots %}
                                            <div class=\"thumbnail\">
                                                <a href=\"{{ screenshot }}\" target=\"_blank\"><img src=\"{{ screenshot }}?w=400\" width=\"400\" alt=\"\"></a>
                                                <p>
                                                    {{ screenshot|split('/')|last|replace({'_': ' ', '.png': '', '.jpg': '', '.jpeg': ''}) }}
                                                </p>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            {% endif %}

                            {% if plugin.shop is defined and plugin.shop and plugin.shop.reviews and plugin.shop.reviews.embedUrl is defined and plugin.shop.reviews.embedUrl %}
                                <div id=\"tabs-reviews\" class=\"tab-content col s12\">
                                    <iframe class=\"reviewIframe\"
                                            style=\"{% if plugin.shop.reviews.height %}height:{{ plugin.shop.reviews.height }}px;{% endif %}\"
                                            id=\"{{ plugin.shop.reviews.embedUrl|md5 }}\"
                                            src=\"{{ plugin.shop.reviews.embedUrl|raw }}\"></iframe>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"col s12 m3\">
                    <div class=\"metadata\">
                        <div class=\"actionButton\">
                            {% if not plugin.isDownloadable or not isSuperUser %}
                                {% if hasSomeAdminAccess and plugin.hasExceededLicense is defined and plugin.hasExceededLicense and plugin.consumer %}
                                    {% if plugin.consumer.loginUrl is defined and plugin.consumer.loginUrl %}
                                        <a class=\"install update\"
                                           target=\"_blank\"
                                           rel=\"noreferrer noopener\"
                                           href=\"{{ plugin.consumer.loginUrl|default('')|e('html_attr') }}\"
                                        >{{ 'Marketplace_UpgradeSubscription'|translate }}</a>
                                    {% endif %}

                                {% elseif not plugin.isDownloadable and plugin.isPaid and plugin.shop is defined and plugin.shop %}

                                    {% if plugin.shop.variations|length %}

                                        <div class=\"input-field variationPicker\">
                                            <select title=\"{{ 'Marketplace_ShownPriceIsExclTax'|translate|e('html_attr') }} {{ 'Marketplace_CurrentNumPiwikUsers'|translate(numUsers)|e('html_attr') }}\">
                                                {% for variation in plugin.shop.variations %}
                                                    <option value=\"{{ variation.addToCartUrl }}\"
                                                            title=\"{{ 'Marketplace_PriceExclTax'|translate(variation.price, variation.currency)|e('html_attr') }} {{ 'Marketplace_CurrentNumPiwikUsers'|translate(numUsers)|e('html_attr') }}\"
                                                            {% if variation.recommended is defined and variation.recommended %}selected{% endif %}
                                                    >{{ variation.name }} - {{ variation.prettyPrice }} / {{ variation.period }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>

                                        <a class=\"install update addToCartLink\" target=\"_blank\"
                                           title=\"{{ 'Marketplace_ClickToCompletePurchase'|translate|e('html_attr') }}\"
                                           rel=\"noreferrer noopener\"
                                           href=\"{{ plugin.shop.url|default('')|e('html_attr') }}\"
                                        >{{ 'Marketplace_AddToCart'|translate }}</a>
                                    {% else %}
                                        <a class=\"install update\" target=\"_blank\"
                                           rel=\"noreferrer noopener\"
                                           href=\"{% if plugin.shop is defined and plugin.shop and plugin.shop.url %}{{ plugin.shop.url|e('html_attr') }}{% else %}{{ plugin.homepage|e('html_attr') }}{% endif %}\"
                                        >{{ 'General_MoreDetails'|translate }}</a>
                                    {% endif %}
                                {% endif %}
                            {% elseif isSuperUser %}
                                {% if not isAutoUpdatePossible %}
                                    <a onclick=\"\$(this).css('display', 'none')\" href=\"{{ linkTo({'action': 'download', 'pluginName': plugin.name, 'nonce': (plugin.name|nonce)}) }}\"
                                       class=\"download\">{{ 'General_Download'|translate }}</a>
                                {% elseif plugin.canBeUpdated and 0 == plugin.missingRequirements|length %}
                                    <a class=\"install update\"
                                       href=\"{{ linkTo({'module': 'Marketplace', 'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': updateNonce}) }}\"
                                    >{{ 'CoreUpdater_UpdateTitle'|translate }}</a>
                                {% elseif plugin.isInstalled %}
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                {% elseif 0 < plugin.missingRequirements|length %}
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                {% else %}
                                    <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'installPlugin', 'pluginName': plugin.name, 'nonce': installNonce}) }}\"
                                       class=\"install\">{{ 'Marketplace_ActionInstall'|translate }}</a>
                                {% endif %}
                            {% else %}
                                <br />
                                <br />
                                <br />
                                <br />
                            {% endif %}
                        </div>
                        
                        {% if plugin.specialOffer is defined and plugin.specialOffer %}<p style=\"color: green;\"><br />{{ plugin.specialOffer }}</p>{% endif %}

                        <p><br /></p>
                        <dl>
                            {% if not isBundle %}
                                <dt>{{ 'CorePluginsAdmin_Version'|translate }}</dt>
                                <dd>{{ plugin.latestVersion }}</dd>
                            {% endif %}

                            <dt>{{ 'Marketplace_PluginKeywords'|translate }}</dt>
                            <dd>{{ plugin.keywords|join(', ') }}</dd>

                            {% if plugin.lastUpdated and not isBundle %}
                                <dt>{{ 'Marketplace_LastUpdated'|translate }}</dt>
                                <dd>{{ plugin.lastUpdated }}</dd>
                            {% endif %}
                            {% if plugin.numDownloads %}
                                <dt>{{ 'General_Downloads'|translate }}</dt>
                                <dd title=\"{{ 'Marketplace_NumDownloadsLatestVersion'|translate(latestVersion.numDownloads|number_format) }}\">{{ plugin.numDownloads }}</dd>
                            {% endif %}

                            {% if not isBundle %}
                                <dt>{{ 'Marketplace_Developer'|translate }}</dt>
                                <dd>{{ marketplaceMacro.pluginDeveloper(plugin.owner) }}</dd>
                                {% if latestVersion and latestVersion.license is defined and latestVersion.license and latestVersion.license.name is defined and latestVersion.license.name %}
                                    <dt>{{ 'Marketplace_License'|translate }}</dt>
                                    <dd>
                                        {% if latestVersion.license.url is defined and latestVersion.license.url %}
                                            <a rel=\"noreferrer noopener\"
                                               href=\"{{ latestVersion.license.url }}\"
                                               target=\"_blank\">{{ latestVersion.license.name }}</a>
                                        {% else %}
                                            {{ latestVersion.license.name }}
                                        {% endif %}
                                    </dd>
                                {% endif %}
                                <dt>{{ 'Marketplace_Authors'|translate }}</dt>
                                <dd>{% for author in plugin.authors if author.name %}

                                        {% spaceless %}
                                            {% if author.homepage %}
                                                <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ author.homepage }}\">{{ author.name }}</a>
                                            {% elseif author.email %}
                                                <a href=\"mailto:{{ author.email|escape('url') }}\">{{ author.name }}</a>
                                            {% else %}
                                                {{ author.name }}
                                            {% endif %}

                                            {% if loop.index < plugin.authors|length %}
                                                ,
                                            {% endif %}
                                        {% endspaceless %}

                                    {% endfor %}
                                </dd>
                            {% endif %}
                            <dt>{{ 'CorePluginsAdmin_Websites'|translate }}</dt>
                            <dd>
                                {% if plugin.homepage %}
                                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ plugin.homepage }}\">{{ 'Marketplace_PluginWebsite'|translate }}</a>
                                {%- endif -%}

                                {%- if plugin.changelog is defined and plugin.changelog and plugin.changelog.url is defined and plugin.changelog.url -%}
                                    {%- if plugin.homepage %}, {% endif %}
                                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ plugin.changelog.url }}\">{{ 'CorePluginsAdmin_Changelog'|translate }}</a>
                                {%- endif -%}

                                {%- if plugin.repositoryUrl %}, <a target=\"_blank\" href=\"{{ plugin.repositoryUrl }}\">GitHub</a>{% endif %}
                            </dd>

                            {% if plugin.activity and plugin.activity.numCommits %}
                                <dt>{{ 'CorePluginsAdmin_Activity'|translate }}</dt>
                                <dd>
                                    {{ plugin.activity.numCommits }} commits

                                    {% if plugin.activity.numContributors > 1 %}
                                        {{ 'Marketplace_ByXDevelopers'|translate(plugin.activity.numContributors) }}
                                    {% endif %}
                                    {% if plugin.activity.lastCommitDate %}
                                        {{ 'Marketplace_LastCommitTime'|translate(plugin.activity.lastCommitDate) }}
                                    {% endif %}</dd>
                            {% endif %}
                        </dl>

                        {% if plugin.support is not empty %}
                            {% for entry in plugin.support %}
                                {% if entry.name and entry.value %}
                                    <dt>{{ entry.name }}</dt>
                                    <dd>{{ entry.value }}</dd>
                                {% endif %}
                            {% endfor %}
                        {% endif %}

                        <br />
                    </div>
                </div>
            </div>

            <script type=\"text/javascript\">
                \$(function() {

                    var active = 0;
                    {% if activeTab %}
                    var \$activeTab = \$('#tabs-{{ activeTab|e('js') }}');
                    if (\$activeTab) {
                        active = \$activeTab.index() - 1;
                    }
                    {% endif %}

                    \$('#pluginDetailsTabs .tabs').tabs();
                    \$('#pluginDetailsTabs .tabs').tabs('select_tab', active >= 0 ? active : 0);

                    \$('.pluginDetails a').each(function (index, a) {
                        var link = \$(a).attr('href');

                        if (link && 0 === link.indexOf('http')) {
                            \$(a).attr('target', '_blank');
                        }
                    });
                });
            </script>

            {% if plugin.shop is defined and plugin.shop and plugin.shop.reviews and plugin.shop.reviews.embedUrl is defined and plugin.shop.reviews.embedUrl %}
                <script type=\"text/javascript\">
                    \$(function() {
                        var \$iFrames = \$('.pluginDetails iframe.reviewIframe');
                        for (var i = 0; i < \$iFrames.length; i++) {
                            iFrameResize({checkOrigin: ['{{ plugin.shop.reviews.embedUrl|domainOnly }}']}, \$iFrames[i]);
                        }
                    });
                </script>
            {% endif %}

            <script type=\"text/javascript\">
                \$(function() {
                    var \$variationPicker = \$('.pluginDetails .variationPicker select');
                    if (\$variationPicker.val()) {
                        \$('.addToCartLink').attr('href', \$variationPicker.val());
                    }
                    \$variationPicker.on('change', function () {
                        \$('.addToCartLink').attr('href', \$variationPicker.val())
                    });

                    if (\$variationPicker.length) {
                        \$variationPicker.material_select();
                    }
                });
            </script>
        {% endif %}
    </div>


{% endblock %}
", "@Marketplace/plugin-details.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\Marketplace\\templates\\plugin-details.twig");
    }
}
