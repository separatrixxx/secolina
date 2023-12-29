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

/* default/template/common/simple_footer.twig */
class __TwigTemplate_f33dfe0325c2cea35589183cacfb1f8613a220d8c9d84ea721a1e67c0bb9cf8e extends \Twig\Template
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
        echo "
      ";
        // line 2
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 3
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 5
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/simple_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/simple_footer.twig", "/home/u651415643/domains/sekolina.com/public_html/catalog/view/theme/default/template/common/simple_footer.twig");
    }
}
