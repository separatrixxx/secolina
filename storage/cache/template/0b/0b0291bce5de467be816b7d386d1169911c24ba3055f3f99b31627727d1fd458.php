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

/* default/template/checkout/simplecheckout_comment.twig */
class __TwigTemplate_516be6b642e4169b87a55c382925a6b46f041a7054dd17c0ada65e29da7beac8 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_comment\">
    ";
        // line 2
        if (($context["display_header"] ?? null)) {
            // line 3
            echo "      <div class=\"checkout-heading panel-heading\">";
            echo ($context["label"] ?? null);
            echo "</div>
    ";
        }
        // line 5
        echo "    <div class=\"simplecheckout-block-content\">
      <textarea class=\"form-control\" name=\"comment\" id=\"comment\" placeholder=\"";
        // line 6
        echo ($context["placeholder"] ?? null);
        echo "\" data-reload-payment-form=\"true\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/simplecheckout_comment.twig", "");
    }
}
