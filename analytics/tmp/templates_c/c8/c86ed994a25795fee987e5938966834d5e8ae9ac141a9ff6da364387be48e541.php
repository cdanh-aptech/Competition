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

/* dashboard.twig */
class __TwigTemplate_5bdf3354c398a5a340a106be7dbe477443c344234491d266a4e14def9aa9b486 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "dashboard.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'notification' => [$this, 'block_notification'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        ob_start();
        echo ($context["siteName"] ?? $this->getContext($context, "siteName"));
        echo " - ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_WebAnalyticsReports"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        $context["bodyClass"] = call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.bodyClass", "dashboard"]);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <!--[if lt IE 9]>
    <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
    <![endif]-->
";
    }

    // line 13
    public function block_pageDescription($context, array $blocks = [])
    {
        echo "Web Analytics report for ";
        echo \Piwik\piwik_escape_filter($this->env, ($context["siteName"] ?? $this->getContext($context, "siteName")), "html_attr");
        echo " - Matomo";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        // line 18
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.header", "dashboard"]);
        echo "
    ";
        // line 19
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.footer", "dashboard"]);
        echo "
";
    }

    // line 23
    public function block_root($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "dashboard.twig", 24)->display($context);
        // line 25
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "dashboard.twig", 25)->display($context);
        // line 26
        echo "
    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>
        ";
        // line 29
        $this->displayBlock('topcontrols', $context, $blocks);
        // line 31
        echo "
    </div>

    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
        echo "\"/>
    </div>

    ";
        // line 39
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.beforeContent", "dashboard", ($context["currentModule"] ?? $this->getContext($context, "currentModule")), ($context["currentAction"] ?? $this->getContext($context, "currentAction"))]);
        echo "

    <div class=\"page\">

        ";
        // line 43
        if (((isset($context["showMenu"]) || array_key_exists("showMenu", $context)) && ($context["showMenu"] ?? $this->getContext($context, "showMenu")))) {
            // line 44
            echo "            <div id=\"secondNavBar\" class=\"Menu--dashboard z-depth-1\">
                <div piwik-reporting-menu></div>
            </div>
        ";
        }
        // line 48
        echo "
        <div class=\"pageWrap\" ng-cloak>

            <a name=\"main\"></a>
            ";
        // line 52
        $this->displayBlock('notification', $context, $blocks);
        // line 55
        echo "
            <div piwik-popover></div>

            ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
            <div class=\"clear\"></div>
        </div>

    </div>
";
    }

    // line 29
    public function block_topcontrols($context, array $blocks = [])
    {
        // line 30
        echo "        ";
    }

    // line 52
    public function block_notification($context, array $blocks = [])
    {
        // line 53
        echo "                ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "dashboard.twig", 53)->display($context);
        // line 54
        echo "            ";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        // line 59
        echo "            ";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 59,  179 => 58,  175 => 54,  172 => 53,  169 => 52,  165 => 30,  162 => 29,  153 => 60,  151 => 58,  146 => 55,  144 => 52,  138 => 48,  132 => 44,  130 => 43,  123 => 39,  117 => 36,  110 => 31,  108 => 29,  103 => 26,  100 => 25,  97 => 24,  94 => 23,  88 => 20,  84 => 19,  79 => 18,  76 => 17,  68 => 13,  57 => 4,  54 => 3,  50 => 1,  48 => 15,  42 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    {{ parent() }}

    <!--[if lt IE 9]>
    <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
    <![endif]-->
{% endblock %}

{% set title %}{{ siteName|raw }} - {{ 'CoreHome_WebAnalyticsReports'|translate }}{% endset %}

{% block pageDescription %}Web Analytics report for {{ siteName|escape(\"html_attr\") }} - Matomo{% endblock %}

{% set bodyClass = postEvent('Template.bodyClass', 'dashboard') %}

{% block body %}
    {{ postEvent(\"Template.header\", \"dashboard\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"dashboard\") }}
{% endblock %}

{% block root %}
    {% include \"@CoreHome/_warningInvalidHost.twig\" %}
    {% include \"@CoreHome/_topScreen.twig\" %}

    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>
        {% block topcontrols %}
        {% endblock %}

    </div>

    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
    </div>

    {{ postEvent(\"Template.beforeContent\", \"dashboard\", currentModule, currentAction) }}

    <div class=\"page\">

        {% if showMenu is defined and showMenu %}
            <div id=\"secondNavBar\" class=\"Menu--dashboard z-depth-1\">
                <div piwik-reporting-menu></div>
            </div>
        {% endif %}

        <div class=\"pageWrap\" ng-cloak>

            <a name=\"main\"></a>
            {% block notification %}
                {% include \"@CoreHome/_notifications.twig\" %}
            {% endblock %}

            <div piwik-popover></div>

            {% block content %}
            {% endblock %}

            <div class=\"clear\"></div>
        </div>

    </div>
{% endblock %}
", "dashboard.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\Morpheus\\templates\\dashboard.twig");
    }
}
