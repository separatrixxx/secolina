<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* common/cheaper30.twig */
class __TwigTemplate_51b1a6c0c590dff800f21089b54cff17302696e3c33677df1c8e07ba63f51691 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        echo ($context["text_module_request"] ?? null);
        echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cheaperings"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["cheaper"]) {
            // line 4
            echo "\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["cheaper"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["cheaper"], "name", [], "any", false, false, false, 4);
            echo "&nbsp;&nbsp;<span class=\"label";
            if ((twig_get_attribute($this->env, $this->source, $context["cheaper"], "total", [], "any", false, false, false, 4) > 0)) {
                echo " label-danger ";
            } else {
                echo " label-success ";
            }
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["cheaper"], "total", [], "any", false, false, false, 4);
            echo "</span></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cheaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t</ul>
</li>";
    }

    public function getTemplateName()
    {
        return "common/cheaper30.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/cheaper30.twig", "");
    }
}
