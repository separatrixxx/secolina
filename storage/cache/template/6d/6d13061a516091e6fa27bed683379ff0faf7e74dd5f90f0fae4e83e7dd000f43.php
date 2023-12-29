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

/* default/template/extension/module/cheaper30scripts.twig */
class __TwigTemplate_0617af5cfd8e4a6bc58a573aa74404c7ef1738c9224bb94527cc447208f5ca2d extends \Twig\Template
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
        echo "<script>
/*\$(document).ready(function() {*/
function hrefButton(_this){
\t";
        // line 4
        if ((($context["route"] ?? null) == "product/product")) {
            // line 5
            echo "\t\tvar href_module = _this.attr('onclick');
\t\tif (href_module.indexOf('&prod_id=";
            // line 6
            echo "{{ product_id }}";
            echo "') == '-1'){
\t\t\thref_module = href_module.replace('extension/module/cheaper30&module_id=','extension/module/cheaper30&prod_id=";
            // line 7
            echo ($context["product_id"] ?? null);
            echo "&module_id=');
\t\t}
\t\t_this.attr('onclick', href_module);
\t";
        }
        // line 11
        echo "}
/*});*/
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/cheaper30scripts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  51 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/cheaper30scripts.twig", "");
    }
}
