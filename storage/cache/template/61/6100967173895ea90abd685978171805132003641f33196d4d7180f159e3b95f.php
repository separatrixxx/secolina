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

/* bigmag/template/extension/module/slideshow.twig */
class __TwigTemplate_9196b5b29e0bb92c40334a1f1c45db2c39b02179c753de93e6a67908a7ac65a5 extends \Twig\Template
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
        echo "<div class=\"swiper-viewport swiper-slideshow\">
  <div id=\"slideshow";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
\t  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide text-center\">
\t    ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6)) {
                // line 7
                echo "\t    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" /></a>
\t    ";
            } else {
                // line 9
                echo "\t    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive\" />
\t    ";
            }
            // line 11
            echo "\t  </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</div>
    <div class=\"swiper-pagination slideshow";
        // line 14
        echo ($context["module"] ?? null);
        echo "\"></div>
\t<button type=\"button\" class=\"slider-btn swiper-prev slider-btn--prev slider-center\" aria-label=\"Previous\"><svg viewBox=\"0 0 16 16\" class=\"arrow-chevron\"><path d=\"M9.057 8L5.53 4.471a.667.667 0 1 1 .942-.942l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 1 1-.942-.942L9.057 8z\" fill=\"currentColor\"></path></svg></button>
\t<button type=\"button\" class=\"slider-btn swiper-next slider-btn--next slider-center\" aria-label=\"Next\"><svg viewBox=\"0 0 16 16\" class=\"arrow-chevron\"><path d=\"M9.057 8L5.53 4.471a.667.667 0 1 1 .942-.942l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 1 1-.942-.942L9.057 8z\" fill=\"currentColor\"></path></svg></button>
  </div>  
</div>
<script><!--
\$('#slideshow";
        // line 20
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 23
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.swiper-next',
    prevButton: '.swiper-prev',
\tautoplay: 5000,
    autoplayDisableOnInteraction: true
});
--></script>";
    }

    public function getTemplateName()
    {
        return "bigmag/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  91 => 20,  82 => 14,  79 => 13,  72 => 11,  64 => 9,  54 => 7,  52 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bigmag/template/extension/module/slideshow.twig", "");
    }
}
