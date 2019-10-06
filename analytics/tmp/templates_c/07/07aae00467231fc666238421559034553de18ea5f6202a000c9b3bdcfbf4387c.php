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

/* @Marketplace/overview.twig */
class __TwigTemplate_18ff65cb39588f4439999f5929e945543c224c002525d7354336eeb951a4f270 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Marketplace/overview.twig", 1);
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
        // line 2
        $context["pluginsMacro"] = $this->loadTemplate("@CorePluginsAdmin/macros.twig", "@Marketplace/overview.twig", 2);
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_Marketplace"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "
    <div class=\"marketplace\" piwik-marketplace>

        <div piwik-content-intro>
            <h2 piwik-enriched-headline feature-name=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Marketplace"]), "html", null, true);
        echo "\"
            >";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
        echo "</h2>
            <p>
                ";
        // line 14
        if ( !($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            // line 15
            echo "                    ";
            if (($context["showThemes"] ?? $this->getContext($context, "showThemes"))) {
                // line 16
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_NotAllowedToBrowseMarketplaceThemes"]), "html", null, true);
                echo "
                    ";
            } else {
                // line 18
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_NotAllowedToBrowseMarketplacePlugins"]), "html", null, true);
                echo "
                    ";
            }
            // line 20
            echo "                ";
        } elseif (($context["showThemes"] ?? $this->getContext($context, "showThemes"))) {
            // line 21
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_ThemesDescription"]), "html", null, true);
            echo "
                    ";
            // line 22
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_InstallingNewPluginViaMarketplaceOrUpload", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Themes"]), "<a href=\"#\" class=\"uploadPlugin\">", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Theme"]), "</a>"]);
            echo "
                ";
        } else {
            // line 24
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_PluginsExtendPiwik"]), "html", null, true);
            echo "
                    ";
            // line 25
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_InstallingNewPluginViaMarketplaceOrUpload", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Plugins"]), "<a href=\"#\" class=\"uploadPlugin\">", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Plugin"]), "</a>"]);
            echo "
                ";
        }
        // line 27
        echo "            </p>

            ";
        // line 29
        $this->loadTemplate("@Marketplace/licenseform.twig", "@Marketplace/overview.twig", 29)->display($context);
        // line 30
        echo "
            ";
        // line 31
        $this->loadTemplate("@Marketplace/uploadPluginDialog.twig", "@Marketplace/overview.twig", 31)->display($context);
        // line 32
        echo "
            <div class=\"row marketplaceActions\" ng-controller=\"PiwikMarketplaceController as marketplace\">
                <div piwik-field uicontrol=\"select\" name=\"plugin_type\"
                     class=\"col s12 m6 l4\"
                     ng-model=\"marketplace.pluginType\"
                     ng-change=\"marketplace.changePluginType()\"
                     data-title=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Show"]), "html_attr");
        echo "\"
                     value=\"";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, ($context["pluginType"] ?? $this->getContext($context, "pluginType")), "html", null, true);
        echo "\"
                     full-width=\"true\"
                     options=\"";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["pluginTypeOptions"] ?? $this->getContext($context, "pluginTypeOptions"))), "html", null, true);
        echo "\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"plugin_sort\"
                     data-title=\"";
        // line 45
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Sort"]), "html_attr");
        echo "\"
                     value=\"";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, ($context["sort"] ?? $this->getContext($context, "sort")), "html", null, true);
        echo "\"
                     ng-model=\"marketplace.pluginSort\"
                     ng-change=\"marketplace.changePluginSort()\"
                     class=\"col s12 m6 l4\"
                     full-width=\"true\"
                     options=\"";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["pluginSortOptions"] ?? $this->getContext($context, "pluginSortOptions"))), "html", null, true);
        echo "\">
                </div>

                ";
        // line 55
        echo "                ";
        if (((twig_length_filter($this->env, ($context["pluginsToShow"] ?? $this->getContext($context, "pluginsToShow"))) > 20) || ($context["query"] ?? $this->getContext($context, "query")))) {
            // line 56
            echo "                    <div class=\"col s12 m12 l4 \">
                        <form action=\"";
            // line 57
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["sort" => ""]]), "html", null, true);
            echo "\" method=\"post\" class=\"plugin-search\">
                            <div piwik-field uicontrol=\"text\" name=\"query\"
                                 data-title=\"";
            // line 59
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Search"]), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["numAvailablePlugins"] ?? $this->getContext($context, "numAvailablePlugins")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, lcfirst(call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Plugins"])), "html", null, true);
            echo "...\"
                                 value=\"";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, ($context["query"] ?? $this->getContext($context, "query")), "html", null, true);
            echo "\"
                                 full-width=\"true\">
                            </div>
                            <span class=\"icon-search\" onclick=\"\$('form.plugin-search').submit();\"></span>
                        </form>
                    </div>
                ";
        }
        // line 67
        echo "            </div>
        </div>

        ";
        // line 70
        $this->loadTemplate("@Marketplace/plugin-list.twig", "@Marketplace/overview.twig", 70)->display($context);
        // line 71
        echo "
        <div class=\"footer-message center\">
            ";
        // line 73
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_DevelopersLearnHowToDevelopPlugins", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/develop\">", "</a>"]);
        echo "
            <br />
            <br />
            <br />
            <a rel=\"noreferrer noopener\" href=\"https://shop.matomo.org/faq/\" target=\"_blank\">FAQ</a> |
            <a rel=\"noreferrer noopener\" href=\"https://shop.matomo.org/terms-conditions/\" target=\"_blank\">Terms</a> |
            <a rel=\"noreferrer noopener\" href=\"https://matomo.org/privacy-policy/\" target=\"_blank\">Privacy</a> |
            <a rel=\"noreferrer noopener\" href=\"https://matomo.org/contact/\" target=\"_blank\">Contact</a>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@Marketplace/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 73,  193 => 71,  191 => 70,  186 => 67,  176 => 60,  168 => 59,  163 => 57,  160 => 56,  157 => 55,  151 => 51,  143 => 46,  139 => 45,  132 => 41,  127 => 39,  123 => 38,  115 => 32,  113 => 31,  110 => 30,  108 => 29,  104 => 27,  99 => 25,  94 => 24,  89 => 22,  84 => 21,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  64 => 14,  59 => 12,  55 => 11,  49 => 7,  46 => 6,  42 => 1,  38 => 4,  36 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin.twig\" %}
{% import '@CorePluginsAdmin/macros.twig' as pluginsMacro %}

{% set title %}{{ 'Marketplace_Marketplace'|translate }}{% endset %}

{% block content %}

    <div class=\"marketplace\" piwik-marketplace>

        <div piwik-content-intro>
            <h2 piwik-enriched-headline feature-name=\"{{ 'CorePluginsAdmin_Marketplace'|translate }}\"
            >{{ title|e('html_attr') }}</h2>
            <p>
                {% if not isSuperUser %}
                    {% if showThemes %}
                        {{ 'Marketplace_NotAllowedToBrowseMarketplaceThemes'|translate }}
                    {% else %}
                        {{ 'Marketplace_NotAllowedToBrowseMarketplacePlugins'|translate }}
                    {% endif %}
                {% elseif showThemes %}
                    {{ 'CorePluginsAdmin_ThemesDescription'|translate }}
                    {{ 'Marketplace_InstallingNewPluginViaMarketplaceOrUpload'|translate(('CorePluginsAdmin_Themes'|translate), '<a href=\"#\" class=\"uploadPlugin\">', ('CorePluginsAdmin_Theme'|translate), '</a>')|raw }}
                {% else %}
                    {{ 'CorePluginsAdmin_PluginsExtendPiwik'|translate }}
                    {{ 'Marketplace_InstallingNewPluginViaMarketplaceOrUpload'|translate(('General_Plugins'|translate), '<a href=\"#\" class=\"uploadPlugin\">', ('General_Plugin'|translate), '</a>')|raw }}
                {% endif %}
            </p>

            {% include '@Marketplace/licenseform.twig' %}

            {% include '@Marketplace/uploadPluginDialog.twig' %}

            <div class=\"row marketplaceActions\" ng-controller=\"PiwikMarketplaceController as marketplace\">
                <div piwik-field uicontrol=\"select\" name=\"plugin_type\"
                     class=\"col s12 m6 l4\"
                     ng-model=\"marketplace.pluginType\"
                     ng-change=\"marketplace.changePluginType()\"
                     data-title=\"{{ 'Show'|translate|e('html_attr') }}\"
                     value=\"{{ pluginType }}\"
                     full-width=\"true\"
                     options=\"{{ pluginTypeOptions|json_encode }}\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"plugin_sort\"
                     data-title=\"{{ 'Sort'|translate|e('html_attr') }}\"
                     value=\"{{ sort }}\"
                     ng-model=\"marketplace.pluginSort\"
                     ng-change=\"marketplace.changePluginSort()\"
                     class=\"col s12 m6 l4\"
                     full-width=\"true\"
                     options=\"{{ pluginSortOptions|json_encode }}\">
                </div>

                {# Hide filters and search for themes because we don't have many of them #}
                {% if (pluginsToShow|length) > 20 or query %}
                    <div class=\"col s12 m12 l4 \">
                        <form action=\"{{ linkTo({'sort': ''}) }}\" method=\"post\" class=\"plugin-search\">
                            <div piwik-field uicontrol=\"text\" name=\"query\"
                                 data-title=\"{{ 'General_Search'|translate }} {{ numAvailablePlugins }} {{ 'General_Plugins'|translate|lcfirst }}...\"
                                 value=\"{{ query }}\"
                                 full-width=\"true\">
                            </div>
                            <span class=\"icon-search\" onclick=\"\$('form.plugin-search').submit();\"></span>
                        </form>
                    </div>
                {% endif %}
            </div>
        </div>

        {% include '@Marketplace/plugin-list.twig' %}

        <div class=\"footer-message center\">
            {{ 'Marketplace_DevelopersLearnHowToDevelopPlugins'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/develop\">', '</a>')|raw }}
            <br />
            <br />
            <br />
            <a rel=\"noreferrer noopener\" href=\"https://shop.matomo.org/faq/\" target=\"_blank\">FAQ</a> |
            <a rel=\"noreferrer noopener\" href=\"https://shop.matomo.org/terms-conditions/\" target=\"_blank\">Terms</a> |
            <a rel=\"noreferrer noopener\" href=\"https://matomo.org/privacy-policy/\" target=\"_blank\">Privacy</a> |
            <a rel=\"noreferrer noopener\" href=\"https://matomo.org/contact/\" target=\"_blank\">Contact</a>
        </div>

    </div>

{% endblock %}
", "@Marketplace/overview.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\Marketplace\\templates\\overview.twig");
    }
}
