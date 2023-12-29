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

/* default/template/blog/blog.twig */
class __TwigTemplate_5b5ea983528d701b94d1a780d216322724252c8bf073620c25152a3cd82c2a40 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo " 
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "     
    <div id=\"content\" class=\"";
        // line 17
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo " 
    <div class=\"blog blog_post\">
    
    ";
        // line 20
        if ((($context["main_thumb"] ?? null) && ($context["blogsetting_post_thumb"] ?? null))) {
            echo " 
    <div class=\"main_thumb\"><img src=\"";
            // line 21
            echo ($context["blogsetting_post_thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" /></div>
    ";
        }
        // line 22
        echo " 
    
  <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <div class=\"blog_stats\">
  ";
        // line 26
        if (($context["post_author_status"] ?? null)) {
            echo " <span><i class=\"fa fa-user\"></i><b class=\"text\">";
            echo ($context["text_posted_by"] ?? null);
            echo "</b> <b class=\"hl\">";
            echo ($context["author"] ?? null);
            echo "</b></span>";
        }
        echo " 
  ";
        // line 27
        if (($context["post_date_added_status"] ?? null)) {
            echo " <span><i class=\"fa fa-clock-o\"></i><b class=\"text\">";
            echo ($context["text_posted_on"] ?? null);
            echo "</b> <b class=\"hl\">";
            echo ($context["date_added_full"] ?? null);
            echo "</b></span>";
        }
        echo " 
  ";
        // line 28
        if (($context["post_page_view_status"] ?? null)) {
            echo " <span><i class=\"fa fa-eye\"></i><b class=\"text\">";
            echo ($context["text_read"] ?? null);
            echo "</b> <b class=\"hl\">";
            echo ($context["new_read_counter_value"] ?? null);
            echo "</b></span>";
        }
        echo " 
  ";
        // line 29
        if (($context["post_comments_count_status"] ?? null)) {
            echo " <span><i class=\"fa fa-comments\"></i><b class=\"text\">";
            echo ($context["text_comments"] ?? null);
            echo " :</b> <b class=\"hl\">";
            echo ($context["comment_total"] ?? null);
            echo "</b></span>";
        }
        echo " 
  </div>
    
  <div class=\"main_description\">
  ";
        // line 33
        echo ($context["description"] ?? null);
        echo " 
  </div>
    
  ";
        // line 36
        if (($context["tags"] ?? null)) {
            echo " 
  <p class=\"tags\">
    ";
            // line 38
            echo ($context["text_tags"] ?? null);
            echo " 
  ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 40
                echo "  ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 41
                    echo "  <a href=\"";
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["tag"] ?? null) : null);
                    echo "</a>, 
  ";
                } else {
                    // line 42
                    echo "   
  <a href=\"";
                    // line 43
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tags"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["i"]] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["tags"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["i"]] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["tag"] ?? null) : null);
                    echo "</a>
  ";
                }
                // line 44
                echo " 
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo " 
  </p>
  ";
        }
        // line 47
        echo "  
  
  ";
        // line 49
        if (($context["share_status"] ?? null)) {
            echo " 
  <div class=\"share\">
    <div class=\"addthis_toolbox addthis_default_style\">
    <a class=\"addthis_button_facebook\"><i class=\"fa fa-facebook\"></i></a>
      <a class=\"addthis_button_twitter\"><i class=\"fa fa-twitter\"></i></a>
      <a class=\"addthis_button_google_plusone_share\"><i class=\"fa fa-google-plus\"></i></a>
    <a class=\"addthis_button_compact\"><i class=\"fa fa-navicon\"></i></a>
    </div>
    <script src=\"//s7.addthis.com/js/300/addthis_widget.js\"></script>
  </div>
  ";
        }
        // line 59
        echo " 
  
    <!-- Related Products -->
    ";
        // line 62
        if (($context["products"] ?? null)) {
            echo " 
      <h3><i class=\"fa fa-list\"></i>";
            // line 63
            echo ($context["text_related_products"] ?? null);
            echo "</h3>
      <div class=\"row goods goods-grid row-cols-xxxl-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-sm-2\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 66
                echo "        <div class=\"product-layout product-list col-6 blog\">
          <div class=\"product-thumb\">
            ";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "            <div class=\"price-absolute product-grid__absolute\">
              <span class=\"sticky-label percent-label\">";
                    // line 70
                    echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 70)) . "%");
                    echo "</span>
            </div>
            ";
                }
                // line 73
                echo "            <div class=\"image\">
              <a href=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 74);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "\" class=\"img-responsive\" /></a>              
              ";
                // line 75
                if (($context["config_wishlist"] ?? null)) {
                    // line 76
                    echo "              <button type=\"button\" class=\"btn wishlist-btn\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 76);
                    echo "');\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 16 16\" class=\"icon icon-heart\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"></path></svg></button>
              ";
                }
                // line 78
                echo "              ";
                if (($context["config_compare"] ?? null)) {
                    // line 79
                    echo "              <button type=\"button\" class=\"btn compare-btn\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 79);
                    echo "');\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line></svg></button>
              ";
                }
                // line 81
                echo "            </div>
            <div class=\"caption\">
              <div class=\"caption-form\">
                <a href=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 84);
                echo "\" class=\"product-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
                echo "</a>
                <div class=\"button-group__flex\">
                  <div class=\"rating\">
                    ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 88
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 88) < $context["i"])) {
                        // line 89
                        echo "                    <span class=\"star-empty\"></span>
                    ";
                    } else {
                        // line 91
                        echo "                    <span class=\"star\"></span>
                    ";
                    }
                    // line 93
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                    <div class=\"reviews-count\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 94);
                echo "</div>
                  </div>
                </div>
                ";
                // line 97
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97) && twig_get_attribute($this->env, $this->source, $context["product"], "economy", [], "any", false, false, false, 97))) {
                    // line 98
                    echo "                <div class=\"price-stock\">
                  <span class=\"economy-value\">";
                    // line 99
                    echo ($context["text_sale"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "economy", [], "any", false, false, false, 99);
                    echo "</span>
                </div>
                ";
                }
                // line 102
                echo "              </div>
              <div class=\"card-action\">
                ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "                <div class=\"price\">
                  ";
                    // line 106
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 106)) {
                        // line 107
                        echo "                  <span class=\"price-main\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 107);
                        echo "</span>
                  ";
                    } else {
                        // line 108
                        echo "                
                  <span class=\"price-old\">";
                        // line 109
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109);
                        echo "</span>
                  <span class=\"price-main price-new\">";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 110);
                        echo "</span>
                  ";
                    }
                    // line 112
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 112)) {
                        // line 113
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 113);
                        echo "</span>
                  ";
                    }
                    // line 114
                    echo " 
                </div>
                ";
                }
                // line 117
                echo "                <div class=\"button-group__btn1\">

\t\t\t\t";
                // line 119
                if (($context["buyoneclick_status_module"] ?? null)) {
                    // line 120
                    echo "\t\t\t\t<button type=\"button\" data-loading-text=\"";
                    echo ($context["buyoneclick_text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block boc_order_category_btn\" ";
                    if ((((((($context["buyoneclick_ya_status"] ?? null) && array_key_exists("buyoneclick_ya_counter", $context)) && (($context["buyoneclick_ya_counter"] ?? null) != "")) && array_key_exists("buyoneclick_ya_identificator", $context)) && (($context["buyoneclick_ya_identificator"] ?? null) != "")) || ((((($context["buyoneclick_google_status"] ?? null) && array_key_exists("buyoneclick_google_category_btn", $context)) && (($context["buyoneclick_google_category_btn"] ?? null) != "")) && array_key_exists("buyoneclick_google_action_btn", $context)) && (($context["buyoneclick_google_action_btn"] ?? null) != "")))) {
                        echo " onClick=\"clickAnalytics(); return true;\" ";
                    }
                    echo " data-target=\"#boc_order\" data-product=\"";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["product"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["name"] ?? null) : null);
                    echo "\" data-product_id=\"";
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["product"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["product_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["buyoneclick_name"] ?? null);
                    echo "</button>
\t\t\t\t";
                }
                // line 122
                echo "\t\t\t
                <div class=\"button-group__btn\">
                  <button type=\"button\" class=\"btn\" data-toggle=\"tooltip\" title=\"";
                // line 124
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 124);
                echo "');\"><i class=\"fa fa-cart-plus cr-k\"></i><span class=\"bt\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                </div>
              </div>
              </div>

            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo " 
      </div>
    ";
        }
        // line 134
        echo "    
   <!-- Related Products End -->
     
     
     
  ";
        // line 139
        if (($context["related_blogs"] ?? null)) {
            echo " 
    <h3><i class=\"fa fa-list\"></i>";
            // line 140
            echo ($context["text_related_blog"] ?? null);
            echo "</h3>
    <div class=\"blog_grid_holder related column-";
            // line 141
            echo ($context["rel_per_row"] ?? null);
            echo "\">
      ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
            <div class=\"blog_item\">
                <div class=\"summary\">
                <h2 class=\"blog_title\"><a href=\"";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 145);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 145);
                echo "</a></h2>
                <div class=\"blog_stats\">
                ";
                // line 147
                if (($context["author_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-user\"></i><b class=\"text\">";
                    echo ($context["text_posted_by"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "author", [], "any", false, false, false, 147);
                    echo "</b></span>";
                }
                echo " 
                ";
                // line 148
                if (($context["date_added_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-clock-o\"><b class=\"text\"></i>";
                    echo ($context["text_posted_on"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added_full", [], "any", false, false, false, 148);
                    echo "</b></span>";
                }
                echo " 
        ";
                // line 149
                if (($context["page_view_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-eye\"></i><b class=\"text\">";
                    echo ($context["text_read"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "count_read", [], "any", false, false, false, 149);
                    echo "</b></span>";
                }
                echo " 
        ";
                // line 150
                if (($context["comments_count_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-comments\"><b class=\"text\"></i>";
                    echo ($context["text_comments"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "comment_total", [], "any", false, false, false, 150);
                    echo "</b></span>";
                }
                echo " 
                </div>
                ";
                // line 152
                if ((twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 152) && ($context["rel_thumb_status"] ?? null))) {
                    echo " 
                <div class=\"image\">
                  <a href=\"";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 154);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 154);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 154);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 154);
                    echo "\" /></a>
                </div>
                ";
                }
                // line 156
                echo " 
                <p>";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "short_description", [], "any", false, false, false, 157);
                echo "</p>
                <p><a href=\"";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 158);
                echo "\">";
                echo ($context["text_read_more"] ?? null);
                echo "  <i class=\"fa fa-long-arrow-right\"></i></a></p>
                </div>
               </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "          
    </div>
  ";
        }
        // line 163
        echo "   
   <!-- Related Blog End -->
   
     <!-- Comment Area start -->
      ";
        // line 167
        if (($context["allow_comment"] ?? null)) {
            echo " 
        <h3><i class=\"fa fa-comments\"></i>";
            // line 168
            echo ($context["text_comments"] ?? null);
            echo "</h3>
              <form id=\"comment_form\">
                <div id=\"comment\"></div>
                <h3><i class=\"fa fa-pencil\"></i>";
            // line 171
            echo ($context["text_write_comment"] ?? null);
            echo "</h3>
                <div class=\"row\">
        <div class=\"form-group col-sm-6 required\">
                <label class=\"control-label\" for=\"input-name\">";
            // line 174
            echo ($context["entry_name"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />
                </div>
                <div class=\"form-group col-sm-6 required\">
                <label class=\"control-label\" for=\"input-email\">";
            // line 178
            echo ($context["entry_email"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"email\" value=\"\" id=\"input-email\" class=\"form-control\" />
                </div>
                </div>
                
                <div class=\"row\">
                <div class=\"form-group col-sm-12 required\">
                <label class=\"control-label\" for=\"input-review\">";
            // line 185
            echo ($context["entry_comment"] ?? null);
            echo "</label>
                <textarea name=\"comment\" rows=\"5\" id=\"input-comment\" class=\"form-control\"></textarea>
                </div>
                </div>
                
                
                <div class=\"row\">
                <div class=\"col-sm-12\">
                  <div class=\"form-group required\">
                  <label class=\"control-label\" for=\"input-captcha_comment\">";
            // line 194
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
                    <div class=\"input-group\">
                    <span class=\"input-group-addon captcha_wrap\" style=\"background:#ffffff;padding:0 10px;\"><img src=\"index.php?route=blog/blog/captcha\" alt=\"\" id=\"captcha_comment\" /></span>
                    <input type=\"text\" name=\"captcha_comment\" value=\"\" id=\"input-captcha_comment\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                </div>
                
                <div class=\"row\">
                <div class=\"form-group col-sm-12 text-right\">
                <button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
            // line 205
            echo ($context["button_send"] ?? null);
            echo "</button>
                </div>
                </div>
                
                </div>
        </form>
      ";
        }
        // line 211
        echo " 
      </div>
      ";
        // line 213
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 214
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--

\$('#comment').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();
  \$(\"html,body\").animate({scrollTop:((\$(\"#comment\").offset().top)-50)},500);
    \$('#comment').fadeOut(50);

    \$('#comment').load(this.href);

    \$('#comment').fadeIn(500);
  
});

\$('#comment').load('index.php?route=blog/blog/comment&blog_id=";
        // line 229
        echo ($context["blog_id"] ?? null);
        echo "');
//--></script>

<script type=\"text/javascript\"><!--

\$('#button-comment').on('click', function() {
  \$.ajax({
    url: 'index.php?route=blog/blog/write&blog_id=";
        // line 236
        echo ($context["blog_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#comment_form\").serialize(),
    
    complete: function() {
      \$('#button-comment').button('reset');
      \$('#captcha_comment').attr('src', 'index.php?route=blog/blog/captcha&date='+new Date().getTime());
      \$('input[name=\\'captcha_comment\\']').val('');
    },
    success: function(json) {
      \$('.alert-success, .alert-danger').remove();
      
      if (json['error']) {
        \$('#comment').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }
      
      if (json['success']) {
        \$('#comment').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
        
        \$('input[name=\\'name\\']').val('');
        \$('input[name=\\'email\\']').val('');
        \$('textarea[name=\\'comment\\']').val('');
        \$('input[name=\\'captcha_comment\\']').val('');
      }
    }
  });
});    
</script>
<div class=\"wrapper wrapper-shift\">
";
        // line 266
        echo ($context["footer"] ?? null);
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/blog/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 266,  679 => 236,  669 => 229,  651 => 214,  647 => 213,  643 => 211,  633 => 205,  619 => 194,  607 => 185,  597 => 178,  590 => 174,  584 => 171,  578 => 168,  574 => 167,  568 => 163,  563 => 161,  551 => 158,  547 => 157,  544 => 156,  532 => 154,  527 => 152,  516 => 150,  506 => 149,  496 => 148,  486 => 147,  479 => 145,  471 => 142,  467 => 141,  463 => 140,  459 => 139,  452 => 134,  447 => 132,  426 => 124,  422 => 122,  406 => 120,  404 => 119,  400 => 117,  395 => 114,  387 => 113,  384 => 112,  379 => 110,  375 => 109,  372 => 108,  366 => 107,  364 => 106,  361 => 105,  359 => 104,  355 => 102,  347 => 99,  344 => 98,  342 => 97,  336 => 94,  328 => 93,  324 => 91,  320 => 89,  317 => 88,  313 => 87,  305 => 84,  300 => 81,  292 => 79,  289 => 78,  281 => 76,  279 => 75,  269 => 74,  266 => 73,  260 => 70,  257 => 69,  255 => 68,  251 => 66,  247 => 65,  242 => 63,  238 => 62,  233 => 59,  219 => 49,  215 => 47,  210 => 45,  203 => 44,  196 => 43,  193 => 42,  185 => 41,  182 => 40,  178 => 39,  174 => 38,  169 => 36,  163 => 33,  150 => 29,  140 => 28,  130 => 27,  120 => 26,  115 => 24,  111 => 22,  102 => 21,  98 => 20,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  67 => 9,  63 => 8,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/blog.twig", "");
    }
}
