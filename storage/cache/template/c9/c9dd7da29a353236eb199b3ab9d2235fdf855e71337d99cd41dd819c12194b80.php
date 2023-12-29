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

/* default/template/extension/module/sm_testimonial.twig */
class __TwigTemplate_ea45ac3d84405e909c9f195e8f86fe87922afef323ebf0b60e97cfa0635c0085 extends \Twig\Template
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
        echo "<h3>";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"row\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 4
            echo "  <div class=\"col-lg-2 col-md-2 col-sm-6 col-xs-12 rew\">
    <div class=\"testimonial-thumb\">
\t  ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "avatar", [], "any", false, false, false, 6)) {
                // line 7
                echo "      <p class=\"image\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "avatar", [], "any", false, false, false, 7);
                echo "\" alt=\"\" class=\"img-responsive\" /></p>
      ";
            }
            // line 9
            echo "\t  <div class=\"caption\">
\t    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "title", [], "any", false, false, false, 10)) {
                // line 11
                echo "        <h4>";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "title", [], "any", false, false, false, 11);
                echo "</h4>
\t    ";
            }
            // line 13
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "good", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t    <p><strong>";
                echo ($context["entry_good"] ?? null);
                echo "</strong><br/>";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "good", [], "any", false, false, false, 14);
                echo "</p>
\t    ";
            }
            // line 16
            echo "\t    ";
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "bad", [], "any", false, false, false, 16)) {
                // line 17
                echo "\t    <p><strong>";
                echo ($context["entry_bad"] ?? null);
                echo "</strong><br/>";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "bad", [], "any", false, false, false, 17);
                echo "</p>
\t    ";
            }
            // line 19
            echo "\t    ";
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "text", [], "any", false, false, false, 19)) {
                // line 20
                echo "\t    <p><strong>";
                echo ($context["entry_text"] ?? null);
                echo "</strong><br/>";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "text", [], "any", false, false, false, 20);
                echo "</p>
\t    ";
            }
            // line 22
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "rating", [], "any", false, false, false, 22)) {
                // line 23
                echo "        <p class=\"rating\">
          ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 25
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["testimonial"], "rating", [], "any", false, false, false, 25) < $context["i"])) {
                        // line 26
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 28
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 30
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "        </p>
\t    ";
            }
            // line 33
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 33) || twig_get_attribute($this->env, $this->source, $context["testimonial"], "city", [], "any", false, false, false, 33)) || twig_get_attribute($this->env, $this->source, $context["testimonial"], "date_added", [], "any", false, false, false, 33))) {
                // line 34
                echo "        <p>
          ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "\t\t  <i>";
                    echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 36);
                    echo "</i>
\t\t  ";
                }
                // line 38
                echo "\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "city", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "\t\t  <i>";
                    echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "city", [], "any", false, false, false, 39);
                    echo "</i>
\t\t  ";
                }
                // line 41
                echo "\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "date_added", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "\t\t  <i>";
                    echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "date_added", [], "any", false, false, false, 42);
                    echo "</i>
\t\t  ";
                }
                // line 44
                echo "        </p>
\t    ";
            }
            // line 46
            echo "\t    ";
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 46)) {
                // line 47
                echo "\t    <p><strong>";
                echo ($context["entry_image"] ?? null);
                echo "</strong></p>
\t    <p class=\"sm-thumbnail sm-thumbnail";
                // line 48
                echo ($context["module"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "testimonial_id", [], "any", false, false, false, 48);
                echo "\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    echo "<a data-thumbnail=\"";
                    echo ($context["module"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "testimonial_id", [], "any", false, false, false, 48);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "thumb", [], "any", false, false, false, 48);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "thumbnail", [], "any", false, false, false, 48);
                    echo "\" class=\"img-thumbnail\"></a>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</p>
\t    ";
            }
            // line 50
            echo "\t  </div>
\t  ";
            // line 51
            if (($context["readmore"] ?? null)) {
                // line 52
                echo "\t  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "href", [], "any", false, false, false, 52);
                echo "\" class=\"btn btn-primary btn-sm\">";
                echo ($context["button_readmore"] ?? null);
                echo "</a>
\t  ";
            }
            // line 54
            echo "    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</div>
";
        // line 58
        if (($context["show_all"] ?? null)) {
            // line 59
            echo "<div class=\"row\">
  <div class=\"col-md-12 rew\">
    <div class=\"button-group pull-right\">
      <a class=\"btn btn-primary\" href=\"";
            // line 62
            echo ($context["show_all_url"] ?? null);
            echo "\">";
            echo ($context["button_show_all"] ?? null);
            echo "</a>
    </div>
  </div>
</div>
";
        }
        // line 67
        if (($context["image"] ?? null)) {
            // line 68
            echo "<script type=\"text/javascript\"><!--
\t\$('.sm-thumbnail a').on('click', function() {
\t\t\$('.sm-thumbnail' + \$(this).data('thumbnail')).magnificPopup({
\t\t\ttype:'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t    enabled:true
\t\t\t}
\t\t});
\t});
--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/sm_testimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 68,  241 => 67,  231 => 62,  226 => 59,  224 => 58,  221 => 57,  213 => 54,  205 => 52,  203 => 51,  200 => 50,  178 => 48,  173 => 47,  170 => 46,  166 => 44,  160 => 42,  157 => 41,  151 => 39,  148 => 38,  142 => 36,  140 => 35,  137 => 34,  134 => 33,  130 => 31,  124 => 30,  120 => 28,  116 => 26,  113 => 25,  109 => 24,  106 => 23,  103 => 22,  95 => 20,  92 => 19,  84 => 17,  81 => 16,  73 => 14,  70 => 13,  64 => 11,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/sm_testimonial.twig", "");
    }
}
