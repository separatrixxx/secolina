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

/* default/template/extension/module/blog_latest.twig */
class __TwigTemplate_4c1c37bb7953dc11d3a29b5ab87d910700d1a62656847496c70bdf018f6e2775 extends \Twig\Template
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
        echo "<div class=\"blog-module latest blog\">

<div class=\"blog_gr\"><h2>";
        // line 3
        echo ($context["heading_title_latest"] ?? null);
        echo "</h2><a class=\"all\" href=\"";
        echo ($context["blog_show_all"] ?? null);
        echo "\">";
        echo ($context["text_show_all"] ?? null);
        echo "  <i class=\"fa  fa-long-arrow-right\"></i></a></div>
    ";
        // line 4
        if (($context["posts"] ?? null)) {
            echo " 
        <div class=\"blog_grid_holder latest column-";
            // line 5
            echo ($context["columns"] ?? null);
            echo "  carousel-";
            echo ($context["carousel"] ?? null);
            echo "  ";
            echo ($context["module"] ?? null);
            echo "\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
                <div class=\"blog_item\">
                
                <div class=\"summary\">
                
                <div class=\"blog_stats\">
                ";
                // line 12
                if (($context["author_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-user\"></i><b class=\"text\">";
                    echo ($context["text_posted_by"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "author", [], "any", false, false, false, 12);
                    echo "</b></span>";
                }
                echo " 
                ";
                // line 13
                if (($context["date_added_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-clock-o\"><b class=\"text\"></i>";
                    echo ($context["text_posted_on"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added_full", [], "any", false, false, false, 13);
                    echo "</b></span>";
                }
                echo " 
                ";
                // line 14
                if (($context["page_view_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-eye\"></i><b class=\"text\">";
                    echo ($context["text_read"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "count_read", [], "any", false, false, false, 14);
                    echo "</b></span>";
                }
                echo " 
                ";
                // line 15
                if (($context["comments_count_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-comments\"><b class=\"text\"></i>";
                    echo ($context["text_comments"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "comment_total", [], "any", false, false, false, 15);
                    echo "</b></span>";
                }
                echo " 
                </div>
                ";
                // line 17
                if ((twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 17) && ($context["thumb"] ?? null))) {
                    echo " 
                <div class=\"image\">
                <a href=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 19);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 19);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 19);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 19);
                    echo "\" /></a>
                </div>
                ";
                }
                // line 21
                echo " 
                ";
                // line 22
                if (( !($context["characters"] ?? null) == "0")) {
                    // line 23
                    echo "
                <h2 class=\"blog_title\"><a href=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 24);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 24);
                    echo "</a></h2>

                <p>";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 26);
                    echo "</p>
                <p><a href=\"";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 27);
                    echo "\">";
                    echo ($context["text_read_more"] ?? null);
                    echo "  <i class=\"fa fa-long-arrow-right\"></i></a></p>
                ";
                }
                // line 28
                echo " 
                </div>
               </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </div>
    ";
        }
        // line 33
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/blog_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 33,  165 => 32,  156 => 28,  149 => 27,  145 => 26,  138 => 24,  135 => 23,  133 => 22,  130 => 21,  118 => 19,  113 => 17,  102 => 15,  92 => 14,  82 => 13,  72 => 12,  61 => 6,  53 => 5,  49 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/blog_latest.twig", "");
    }
}
