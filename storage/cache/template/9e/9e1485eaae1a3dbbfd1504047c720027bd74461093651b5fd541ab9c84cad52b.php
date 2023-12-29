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

/* default/template/checkout/simplecheckout_login.twig */
class __TwigTemplate_f5eb3b738056b7bb06cf33c088c87608021065a8a5a9913ffe0d3a2b68048160 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_login\" ";
        echo ((($context["has_error"] ?? null)) ? ("data-error=\"true\"") : (""));
        echo ">
    <div class=\"simplecheckout-block-content\">
        <div id=\"simple_login_header\"><img style=\"cursor:pointer;\" data-onclick=\"close\" src=\"";
        // line 3
        echo ($context["additional_path"] ?? null);
        echo "catalog/view/image/close.png\"></div>
        ";
        // line 4
        if (($context["error_login"] ?? null)) {
            // line 5
            echo "        <div class=\"alert alert-danger simplecheckout-warning-block\">";
            echo ($context["error_login"] ?? null);
            echo "</div>
        ";
        }
        // line 7
        echo "        <fieldset>
            <div class=\"form-group\">
                <label class=\"control-label\">";
        // line 9
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input class=\"form-control\" data-onkeydown=\"detectEnterAndLogin\" type=\"text\" name=\"email\" value=\"";
        // line 10
        echo ($context["email"] ?? null);
        echo "\" /></label>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\">";
        // line 13
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input class=\"form-control\" data-onkeydown=\"detectEnterAndLogin\" type=\"password\" name=\"password\" value=\"\" /></label>
                <a href=\"";
        // line 15
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
            </div>
            <a id=\"simplecheckout_button_login\" data-onclick=\"login\" class=\"button btn-primary button_oc btn\"><span>";
        // line 17
        echo ($context["button_login"] ?? null);
        echo "</span></a>

\t\t\t\t";
        // line 19
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["SOCNETAUTH2_DATA"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null);
        echo "
            
        </fieldset>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  81 => 17,  74 => 15,  69 => 13,  63 => 10,  59 => 9,  55 => 7,  49 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/simplecheckout_login.twig", "");
    }
}
