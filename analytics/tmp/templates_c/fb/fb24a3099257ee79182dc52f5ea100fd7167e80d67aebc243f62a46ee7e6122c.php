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

/* @Widgetize/index.twig */
class __TwigTemplate_cb212138118f77e2c58b1556387ebea3329f364340b2867a8e77d2447ebc9783 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Widgetize/index.twig", 1);
        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Widgets"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@Widgetize/index.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@Widgetize/index.twig", 7)->display($context);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        // line 11
        echo "
<div>

<div class=\"widgetize\" ng-controller=\"ExportWidgetController as exportWidget\">
<div piwik-content-intro>
    <h2 piwik-enriched-headline>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
        echo "</h2>
    <p>With Matomo, you can <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/embed-piwik-report/\">export your Web Analytics reports</a> on your blog, website, or intranet dashboard... in one click.</p>
</div>
<div piwik-content-block content-title=\"Authentication\">
    <p>
        If you want your widgets to be viewable by everybody, you first have to set the 'view' permissions
        to the anonymous user in the <a href='index.php?module=UsersManager' rel='noreferrer noopener' target='_blank'>Users Management section</a>.
        <br/>Alternatively, if you are publishing widgets on a password protected or private page,
        you don't necessarily have to allow 'anonymous' to view your reports. In this case, you can add the secret token_auth parameter (found in the
        <a href='";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "API", "action" => "listAllAPI"]]), "html", null, true);
        echo "' rel='noreferrer noopener' target='_blank'>API page</a>) in the widget URL.
    </p>
</div>
<div piwik-content-block content-title=\"Widgetize dashboards\">
    <p>You can also display the full Matomo dashboard in your application or website in an IFRAME
        (<a ng-href='";
        // line 30
        echo "{{ exportWidget.dashboardUrl }}";
        echo "' rel='noreferrer noopener' target='_blank' >see example</a>).
        The date parameter can be set to a specific calendar date, \"today\", or \"yesterday\". The period parameter can be set to \"day\", \"week\", \"month\", or
        \"year\".
        The language parameter can be set to the language code of a translation, such as language=fr.
        For example, for idSite=1 and date=yesterday, you can write:

        <br />

        <pre piwik-select-on-focus ng-bind=\"exportWidget.dashboardCode\"> </pre>

        <br />
        You can also widgetize the all websites dashboard in an IFRAME
        (<a ng-href='";
        // line 42
        echo "{{ exportWidget.allWebsitesDashboardUrl }}";
        echo "' rel='noreferrer noopener' target='_blank' id='linkAllWebsitesDashboardUrl'>see example</a>)

        <br />

        <pre piwik-select-on-focus ng-bind=\"exportWidget.allWebsitesDashboardCode\"> </pre>
    </p>
</div>
<div piwik-content-block content-title=\"Widgetize reports\">
    <p>Select a report, and copy paste in your page the embed code below the widget:

    <div piwik-widget-preview></div>

    <br class=\"clearfix\" />

</div>
</div>
</div>

";
        // line 60
        $this->loadTemplate("@Dashboard/_widgetFactoryTemplate.twig", "@Widgetize/index.twig", 60)->display($context);
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Widgetize/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 61,  122 => 60,  101 => 42,  86 => 30,  78 => 25,  66 => 16,  59 => 11,  56 => 10,  51 => 7,  48 => 6,  45 => 5,  41 => 1,  37 => 3,  22 => 1,);
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

{% set title %}{{ 'General_Widgets'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
{% endblock %}

{% block content %}

<div>

<div class=\"widgetize\" ng-controller=\"ExportWidgetController as exportWidget\">
<div piwik-content-intro>
    <h2 piwik-enriched-headline>{{ title|e('html_attr') }}</h2>
    <p>With Matomo, you can <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/embed-piwik-report/\">export your Web Analytics reports</a> on your blog, website, or intranet dashboard... in one click.</p>
</div>
<div piwik-content-block content-title=\"Authentication\">
    <p>
        If you want your widgets to be viewable by everybody, you first have to set the 'view' permissions
        to the anonymous user in the <a href='index.php?module=UsersManager' rel='noreferrer noopener' target='_blank'>Users Management section</a>.
        <br/>Alternatively, if you are publishing widgets on a password protected or private page,
        you don't necessarily have to allow 'anonymous' to view your reports. In this case, you can add the secret token_auth parameter (found in the
        <a href='{{ linkTo({'module':'API','action':'listAllAPI'}) }}' rel='noreferrer noopener' target='_blank'>API page</a>) in the widget URL.
    </p>
</div>
<div piwik-content-block content-title=\"Widgetize dashboards\">
    <p>You can also display the full Matomo dashboard in your application or website in an IFRAME
        (<a ng-href='{{ '{{ exportWidget.dashboardUrl }}'|raw }}' rel='noreferrer noopener' target='_blank' >see example</a>).
        The date parameter can be set to a specific calendar date, \"today\", or \"yesterday\". The period parameter can be set to \"day\", \"week\", \"month\", or
        \"year\".
        The language parameter can be set to the language code of a translation, such as language=fr.
        For example, for idSite=1 and date=yesterday, you can write:

        <br />

        <pre piwik-select-on-focus ng-bind=\"exportWidget.dashboardCode\"> </pre>

        <br />
        You can also widgetize the all websites dashboard in an IFRAME
        (<a ng-href='{{ '{{ exportWidget.allWebsitesDashboardUrl }}'|raw }}' rel='noreferrer noopener' target='_blank' id='linkAllWebsitesDashboardUrl'>see example</a>)

        <br />

        <pre piwik-select-on-focus ng-bind=\"exportWidget.allWebsitesDashboardCode\"> </pre>
    </p>
</div>
<div piwik-content-block content-title=\"Widgetize reports\">
    <p>Select a report, and copy paste in your page the embed code below the widget:

    <div piwik-widget-preview></div>

    <br class=\"clearfix\" />

</div>
</div>
</div>

{% include \"@Dashboard/_widgetFactoryTemplate.twig\" %}

{% endblock %}
", "@Widgetize/index.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\Widgetize\\templates\\index.twig");
    }
}
