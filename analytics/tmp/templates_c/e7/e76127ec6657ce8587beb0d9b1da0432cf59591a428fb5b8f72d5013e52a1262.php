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

/* @CoreAdminHome/home.twig */
class __TwigTemplate_09e21748c594fd9b8ad40250b5f648ea87d17793b4003289c4e6619ce9483ac3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/home.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_MenuGeneralSettings"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        <div piwik-content-block content-title=\"Need help?\">
            <div>
                There are different ways you can get help. There is free support via the Matomo Community and paid support
                provided by the Matomo team and partners of Matomo. Or maybe do you have a bug to report or want to suggest a new
                feature?
                <br />
                <br />
                <a href=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "Feedback", "action" => "index"]]), "html", null, true);
        echo "\">Learn more</a>
            </div>
        </div>
    ";
        $context["feedbackHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
    ";
        // line 19
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            // line 20
            echo "        <div class=\"row\">
            <div class=\"col s12 ";
            // line 21
            if (($context["isFeedbackEnabled"] ?? $this->getContext($context, "isFeedbackEnabled"))) {
                echo "m4";
            } else {
                echo "m6";
            }
            echo "\">
                <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>
            </div>
            ";
            // line 24
            if ((($context["hasDiagnostics"] ?? $this->getContext($context, "hasDiagnostics")) || ($context["hasTrackingFailures"] ?? $this->getContext($context, "hasTrackingFailures")))) {
                // line 25
                echo "                <div class=\"col s12 ";
                if (($context["isFeedbackEnabled"] ?? $this->getContext($context, "isFeedbackEnabled"))) {
                    echo "m4";
                } else {
                    echo "m6";
                }
                echo "\">
                    ";
                // line 26
                if (($context["hasDiagnostics"] ?? $this->getContext($context, "hasDiagnostics"))) {
                    // line 27
                    echo "                    <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
                    ";
                }
                // line 29
                echo "                    ";
                if (($context["hasTrackingFailures"] ?? $this->getContext($context, "hasTrackingFailures"))) {
                    // line 30
                    echo "                    <div piwik-widget-loader='{\"module\":\"CoreAdminHome\",\"action\":\"getTrackingFailures\"}'></div>
                    ";
                }
                // line 32
                echo "                </div>
            ";
            }
            // line 34
            echo "            ";
            if (($context["isFeedbackEnabled"] ?? $this->getContext($context, "isFeedbackEnabled"))) {
                // line 35
                echo "                <div class=\"col s12 m4\">
                    ";
                // line 36
                echo ($context["feedbackHelp"] ?? $this->getContext($context, "feedbackHelp"));
                echo "
                </div>
            ";
            }
            // line 39
            echo "        </div>
    ";
        } elseif (        // line 40
($context["isFeedbackEnabled"] ?? $this->getContext($context, "isFeedbackEnabled"))) {
            // line 41
            echo "        ";
            echo ($context["feedbackHelp"] ?? $this->getContext($context, "feedbackHelp"));
            echo "
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (((($context["hasPremiumFeatures"] ?? $this->getContext($context, "hasPremiumFeatures")) && ($context["isMarketplaceEnabled"] ?? $this->getContext($context, "isMarketplaceEnabled"))) && ($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled")))) {
            // line 45
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
    ";
        }
        // line 47
        echo "    ";
        if (((($context["hasNewPlugins"] ?? $this->getContext($context, "hasNewPlugins")) && ($context["isMarketplaceEnabled"] ?? $this->getContext($context, "isMarketplaceEnabled"))) && ($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled")))) {
            // line 48
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.adminHome"]);
        echo "

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    ";
        // line 64
        if ((($context["hasDonateForm"] ?? $this->getContext($context, "hasDonateForm")) || ($context["hasPiwikBlog"] ?? $this->getContext($context, "hasPiwikBlog")))) {
            // line 65
            echo "        <div class=\"row\">
            ";
            // line 66
            if (($context["hasDonateForm"] ?? $this->getContext($context, "hasDonateForm"))) {
                // line 67
                echo "                <div class=\"col s12 ";
                if (($context["hasPiwikBlog"] ?? $this->getContext($context, "hasPiwikBlog"))) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            ";
            }
            // line 71
            echo "            ";
            if ((($context["hasPiwikBlog"] ?? $this->getContext($context, "hasPiwikBlog")) && ($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled")))) {
                // line 72
                echo "                <div class=\"col s12 ";
                if (($context["hasDonateForm"] ?? $this->getContext($context, "hasDonateForm"))) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            ";
            }
            // line 76
            echo "        </div>
    ";
        }
        // line 78
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 78,  200 => 76,  190 => 72,  187 => 71,  177 => 67,  175 => 66,  172 => 65,  170 => 64,  154 => 51,  151 => 50,  147 => 48,  144 => 47,  140 => 45,  138 => 44,  135 => 43,  129 => 41,  127 => 40,  124 => 39,  118 => 36,  115 => 35,  112 => 34,  108 => 32,  104 => 30,  101 => 29,  97 => 27,  95 => 26,  86 => 25,  84 => 24,  74 => 21,  71 => 20,  69 => 19,  66 => 18,  59 => 14,  50 => 7,  47 => 6,  44 => 5,  40 => 1,  36 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}
    {% set feedbackHelp %}
        <div piwik-content-block content-title=\"Need help?\">
            <div>
                There are different ways you can get help. There is free support via the Matomo Community and paid support
                provided by the Matomo team and partners of Matomo. Or maybe do you have a bug to report or want to suggest a new
                feature?
                <br />
                <br />
                <a href=\"{{ linkTo({'module': 'Feedback', 'action': 'index'}) }}\">Learn more</a>
            </div>
        </div>
    {% endset %}

    {% if isSuperUser %}
        <div class=\"row\">
            <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>
            </div>
            {% if hasDiagnostics or hasTrackingFailures %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasDiagnostics %}
                    <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
                    {% endif %}
                    {% if hasTrackingFailures %}
                    <div piwik-widget-loader='{\"module\":\"CoreAdminHome\",\"action\":\"getTrackingFailures\"}'></div>
                    {% endif %}
                </div>
            {% endif %}
            {% if isFeedbackEnabled %}
                <div class=\"col s12 m4\">
                    {{ feedbackHelp|raw }}
                </div>
            {% endif %}
        </div>
    {% elseif isFeedbackEnabled %}
        {{ feedbackHelp|raw }}
    {% endif %}

    {% if hasPremiumFeatures and isMarketplaceEnabled and isInternetEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
    {% endif %}
    {% if hasNewPlugins and isMarketplaceEnabled and isInternetEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    {% endif %}

    {{ postEvent('Template.adminHome') }}

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    {% if hasDonateForm or hasPiwikBlog %}
        <div class=\"row\">
            {% if hasDonateForm %}
                <div class=\"col s12 {% if hasPiwikBlog %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            {% endif %}
            {% if hasPiwikBlog and isInternetEnabled %}
                <div class=\"col s12 {% if hasDonateForm %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            {% endif %}
        </div>
    {% endif %}

{% endblock %}
", "@CoreAdminHome/home.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\CoreAdminHome\\templates\\home.twig");
    }
}
