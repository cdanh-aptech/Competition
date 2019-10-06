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

/* @ClassicCounter/svg.twig */
class __TwigTemplate_c7f71476c956e2c5d0ab48daa5ff8520e9d04c52384034a119f81e7303034abc extends \Twig\Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
     version=\"1.1\"
     baseProfile=\"full\"
     viewBox=\"-1 -1 ";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, (($context["length"] ?? $this->getContext($context, "length")) * 12), "html", null, true);
        echo " 20\">
  ";
        // line 5
        if (($context["errorMessage"] ?? $this->getContext($context, "errorMessage"))) {
            // line 6
            echo "    <title>";
            echo \Piwik\piwik_escape_filter($this->env, ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")), "html", null, true);
            echo "</title>
  ";
        } else {
            // line 8
            echo "    <title>";
            echo \Piwik\piwik_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
            echo "</title>
  ";
        }
        // line 10
        echo "    <style>
        svg {
          background-color: ";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, ("#" . $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "backgroundColor", [])), "html", null, true);
        echo ";
        }

        polygon {
            fill-opacity: 0.75;
            fill-rule: evenodd;
          stroke: ";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, ("#" . $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "backgroundColor", [])), "html", null, true);
        echo ";
            stroke-width: 0.25;
            stroke-opacity: 1.0;
            stroke-linecap: butt;
            stroke-linejoin: miter;
        }

        .on {
          fill: ";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, ("#" . $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "foregroundColor", [])), "html", null, true);
        echo ";
        }

        use {
          fill: ";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, ("#" . $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "lightColor", [])), "html", null, true);
        echo ";
        }
    </style>
    <defs id=\"defs\">
        <polygon id=\"a\" points=\" 1, 1  2, 0  8, 0  9, 1  8, 2  2, 2\"></polygon><!-- top -->
        <polygon id=\"b\" points=\" 9, 1 10, 2 10, 8  9, 9  8, 8  8, 2\"></polygon><!-- right top -->
        <polygon id=\"c\" points=\" 9, 9 10,10 10,16  9,17  8,16  8,10\"></polygon><!-- right bottom -->
        <polygon id=\"d\" points=\" 9,17  8,18  2,18  1,17  2,16  8,16\"></polygon><!-- bottom -->
        <polygon id=\"e\" points=\" 1,17  0,16  0,10  1, 9  2,10  2,16\"></polygon><!-- left bottom -->
        <polygon id=\"f\" points=\" 1, 9  0, 8  0, 2  1, 1  2, 2  2, 8\"></polygon><!-- left top -->
        <polygon id=\"g\" points=\" 1, 9  2, 8  8, 8  9, 9  8,10  2,10\"></polygon><!-- center -->

    </defs>
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["digits"] ?? $this->getContext($context, "digits")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["digit"]) {
            // line 44
            echo "        <g transform=\"translate(";
            echo \Piwik\piwik_escape_filter($this->env, ($this->getAttribute($context["loop"], "index0", []) * 12), "html", null, true);
            echo ",0)\">
            <use xlink:href=\"#a\"";
            // line 45
            echo (($this->getAttribute($context["digit"], 0, [], "array")) ? (" class=\"on\"") : (""));
            echo "/>
            <use xlink:href=\"#b\"";
            // line 46
            echo (($this->getAttribute($context["digit"], 1, [], "array")) ? (" class=\"on\"") : (""));
            echo "/>
            <use xlink:href=\"#c\"";
            // line 47
            echo (($this->getAttribute($context["digit"], 2, [], "array")) ? (" class=\"on\"") : (""));
            echo "/>
            <use xlink:href=\"#d\"";
            // line 48
            echo (($this->getAttribute($context["digit"], 3, [], "array")) ? (" class=\"on\"") : (""));
            echo "/>
            <use xlink:href=\"#e\"";
            // line 49
            echo (($this->getAttribute($context["digit"], 4, [], "array")) ? (" class=\"on\"") : (""));
            echo "/>
            <use xlink:href=\"#f\"";
            // line 50
            echo (($this->getAttribute($context["digit"], 5, [], "array")) ? (" class=\"on\"") : (""));
            echo "/>
            <use xlink:href=\"#g\"";
            // line 51
            echo (($this->getAttribute($context["digit"], 6, [], "array")) ? (" class=\"on\"") : (""));
            echo "/>
        </g>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['digit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</svg>
";
    }

    public function getTemplateName()
    {
        return "@ClassicCounter/svg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 54,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  117 => 44,  100 => 43,  84 => 30,  77 => 26,  66 => 18,  57 => 12,  53 => 10,  47 => 8,  41 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
     version=\"1.1\"
     baseProfile=\"full\"
     viewBox=\"-1 -1 {{ length*12 }} 20\">
  {% if errorMessage %}
    <title>{{ errorMessage }}</title>
  {% else %}
    <title>{{ number }}</title>
  {% endif %}
    <style>
        svg {
          background-color: {{'#' ~ colors.backgroundColor}};
        }

        polygon {
            fill-opacity: 0.75;
            fill-rule: evenodd;
          stroke: {{'#' ~ colors.backgroundColor}};
            stroke-width: 0.25;
            stroke-opacity: 1.0;
            stroke-linecap: butt;
            stroke-linejoin: miter;
        }

        .on {
          fill: {{'#' ~ colors.foregroundColor}};
        }

        use {
          fill: {{'#' ~ colors.lightColor}};
        }
    </style>
    <defs id=\"defs\">
        <polygon id=\"a\" points=\" 1, 1  2, 0  8, 0  9, 1  8, 2  2, 2\"></polygon><!-- top -->
        <polygon id=\"b\" points=\" 9, 1 10, 2 10, 8  9, 9  8, 8  8, 2\"></polygon><!-- right top -->
        <polygon id=\"c\" points=\" 9, 9 10,10 10,16  9,17  8,16  8,10\"></polygon><!-- right bottom -->
        <polygon id=\"d\" points=\" 9,17  8,18  2,18  1,17  2,16  8,16\"></polygon><!-- bottom -->
        <polygon id=\"e\" points=\" 1,17  0,16  0,10  1, 9  2,10  2,16\"></polygon><!-- left bottom -->
        <polygon id=\"f\" points=\" 1, 9  0, 8  0, 2  1, 1  2, 2  2, 8\"></polygon><!-- left top -->
        <polygon id=\"g\" points=\" 1, 9  2, 8  8, 8  9, 9  8,10  2,10\"></polygon><!-- center -->

    </defs>
    {% for digit in digits %}
        <g transform=\"translate({{ loop.index0*12 }},0)\">
            <use xlink:href=\"#a\"{{ digit[0] ? \" class=\\\"on\\\"\":\"\" }}/>
            <use xlink:href=\"#b\"{{ digit[1] ? \" class=\\\"on\\\"\":\"\" }}/>
            <use xlink:href=\"#c\"{{ digit[2] ? \" class=\\\"on\\\"\":\"\" }}/>
            <use xlink:href=\"#d\"{{ digit[3] ? \" class=\\\"on\\\"\":\"\" }}/>
            <use xlink:href=\"#e\"{{ digit[4] ? \" class=\\\"on\\\"\":\"\" }}/>
            <use xlink:href=\"#f\"{{ digit[5] ? \" class=\\\"on\\\"\":\"\" }}/>
            <use xlink:href=\"#g\"{{ digit[6] ? \" class=\\\"on\\\"\":\"\" }}/>
        </g>
    {% endfor %}
</svg>
", "@ClassicCounter/svg.twig", "D:\\APTECH\\PHP\\Website\\Competition\\analytics\\plugins\\ClassicCounter\\templates\\svg.twig");
    }
}
