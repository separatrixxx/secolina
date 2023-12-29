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

/* default/template/checkout/simplecheckout_customer.twig */
class __TwigTemplate_2751f2f18ca6dfc0793428df57b9782746aa211da3001f6ada679d9929c26953 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_customer\" ";
        echo ((($context["hide"] ?? null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo (((($context["display_error"] ?? null) && ($context["has_error"] ?? null))) ? ("data-error=\"true\"") : (""));
        echo ">
  ";
        // line 2
        if ((($context["display_header"] ?? null) || ($context["display_login"] ?? null))) {
            // line 3
            echo "  <div class=\"checkout-heading panel-heading\"><span>";
            echo ($context["text_checkout_customer"] ?? null);
            echo "</span>";
            if (($context["display_login"] ?? null)) {
                echo "<span class=\"checkout-heading-button\"><a href=\"javascript:void(0)\" data-onclick=\"openLoginBox\">";
                echo ($context["text_checkout_customer_login"] ?? null);
                echo "</a></span>";
            }
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"simplecheckout-block-content\">

\t\t\t
\t\t\t\t";
        // line 8
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["SOCNETAUTH2_DATA"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null);
        echo "
\t\t\t  
            
    ";
        // line 11
        if (($context["display_registered"] ?? null)) {
            // line 12
            echo "      <div class=\"alert alert-success\">";
            echo ($context["text_account_created"] ?? null);
            echo "</div>
    ";
        }
        // line 14
        echo "    ";
        if (($context["display_you_will_registered"] ?? null)) {
            // line 15
            echo "      <div class=\"you-will-be-registered\">";
            echo ($context["text_you_will_be_registered"] ?? null);
            echo "</div>
    ";
        }
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 18
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 20,  91 => 18,  86 => 17,  80 => 15,  77 => 14,  71 => 12,  69 => 11,  63 => 8,  58 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/simplecheckout_customer.twig", "");
    }
}
