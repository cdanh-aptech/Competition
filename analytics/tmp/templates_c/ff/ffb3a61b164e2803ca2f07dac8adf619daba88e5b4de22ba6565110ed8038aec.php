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

/* @CoreHome/getDonateForm.twig */
class __TwigTemplate_07c9c0fba5ba2301f85ec6fb25f1f9e218bf65b98d1d45166b8de5cac502565a extends \Twig\Template
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
        $this->loadTemplate("@CoreHome/_donate.twig", "@CoreHome/getDonateForm.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@CoreHome/getDonateForm.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include \"@CoreHome/_donate.twig\" %}", "@CoreHome/getDonateForm.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\CoreHome\\templates\\getDonateForm.twig");
    }
}
