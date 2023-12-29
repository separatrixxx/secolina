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

/* bigmag/template/product/manufacturer_info.twig */
class __TwigTemplate_05d8a9739289218d92a8cae6863af3cae09833cadd97a6a2578aab8f6db56aaa extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
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
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>

        ";
        // line 19
        if (($context["description"] ?? null)) {
            echo "<div class=\"seo_brand_desc\" style=\"padding-bottom:25px\">";
            echo ($context["description"] ?? null);
            echo "</div>";
        }
        // line 20
        echo "      
      ";
        // line 21
        if (($context["products"] ?? null)) {
            // line 22
            echo "      <div class=\"form-group\">
        <div class=\"toolbar-select\">
          <div class=\"toolbar-select__left\">
            <div class=\"toolbar-select__control toolbar-select--sort text-left\">
              <div class=\"form-inline\">
                <label class=\"input-label\" for=\"input-sort\">";
            // line 27
            echo ($context["text_sort"] ?? null);
            echo "</label>
                <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 30
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 30) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 31
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 31);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 31);
                    echo "</option>
                  ";
                } else {
                    // line 33
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 33);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 33);
                    echo "</option>
                  ";
                }
                // line 35
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </select>
              </div>
            </div>
            <div class=\"toolbar-select__control toolbar-select--limit text-left\">
              <div class=\"form-inline\">
                <label class=\"input-label\" for=\"input-limit\">";
            // line 41
            echo ($context["text_limit"] ?? null);
            echo "</label>
                <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 44
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 44) == ($context["limit"] ?? null))) {
                    // line 45
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 45);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 45);
                    echo "</option>
                  ";
                } else {
                    // line 47
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 47);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 47);
                    echo "</option>
                  ";
                }
                // line 49
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </select>
              </div>
            </div>
          </div>
          <div class=\"toolbar-select__control toolbar-select--switch text-right\">
            <div class=\"btn-group\">
              ";
            // line 56
            if (($context["config_compare"] ?? null)) {
                // line 57
                echo "              <a href=\"";
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"btn btn-default\">";
                echo ($context["text_compare"] ?? null);
                echo "</a>
              ";
            }
            // line 59
            echo "              <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 60
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row goods goods-grid row-cols-xxxl-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-sm-2\">
        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "        <div class=\"product-layout product-list col-6\">
          <div class=\"product-thumb\">
            ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "            <div class=\"price-absolute product-grid__absolute\">
              <span class=\"sticky-label percent-label\">";
                    // line 71
                    echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 71)) . "%");
                    echo "</span>
            </div>
            ";
                }
                // line 74
                echo "            <div class=\"image\">
              <a href=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "\" class=\"img-responsive\" /></a>              
              ";
                // line 76
                if (($context["config_wishlist"] ?? null)) {
                    // line 77
                    echo "              <button type=\"button\" class=\"btn wishlist-btn\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 77);
                    echo "');\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 16 16\" class=\"icon icon-heart\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"></path></svg></button>
              ";
                }
                // line 79
                echo "            </div>
            <div class=\"caption\">
              <a href=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 81);
                echo "\" class=\"product-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                echo "</a>
              <div class=\"button-group__flex\">
                <div class=\"rating\">
                  ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 85
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 85) < $context["i"])) {
                        // line 86
                        echo "                  <span class=\"star-empty\"></span>
                  ";
                    } else {
                        // line 88
                        echo "                  <span class=\"star\"></span>
                  ";
                    }
                    // line 90
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                  <div class=\"reviews-count\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 91);
                echo "</div>
                </div>
              </div>
              ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94) && twig_get_attribute($this->env, $this->source, $context["product"], "economy", [], "any", false, false, false, 94))) {
                    // line 95
                    echo "              <div class=\"price-stock\">
                <span class=\"economy-value\">";
                    // line 96
                    echo ($context["text_sale"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "economy", [], "any", false, false, false, 96);
                    echo "</span>
              </div>
              ";
                }
                // line 99
                echo "              <div class=\"card-action\">
                ";
                // line 100
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "                <div class=\"price\">
                  ";
                    // line 102
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102)) {
                        // line 103
                        echo "                  <span class=\"price-main\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                        echo "</span>
                  ";
                    } else {
                        // line 104
                        echo "                
                  <span class=\"price-old\">";
                        // line 105
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105);
                        echo "</span>
                  <span class=\"price-main price-new\">";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 106);
                        echo "</span>               
                  ";
                    }
                    // line 108
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 108)) {
                        // line 109
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 109);
                        echo "</span>
                  ";
                    }
                    // line 110
                    echo " 
                </div>
                ";
                }
                // line 113
                echo "
\t\t\t\t";
                // line 114
                if (($context["buyoneclick_status_category"] ?? null)) {
                    // line 115
                    echo "\t\t\t\t<button type=\"button\" data-loading-text=\"";
                    echo ($context["buyoneclick_text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block boc_order_category_btn\" ";
                    if ((((((($context["buyoneclick_ya_status"] ?? null) && array_key_exists("buyoneclick_ya_counter", $context)) && (($context["buyoneclick_ya_counter"] ?? null) != "")) && array_key_exists("buyoneclick_ya_identificator", $context)) && (($context["buyoneclick_ya_identificator"] ?? null) != "")) || ((((($context["buyoneclick_google_status"] ?? null) && array_key_exists("buyoneclick_google_category_btn", $context)) && (($context["buyoneclick_google_category_btn"] ?? null) != "")) && array_key_exists("buyoneclick_google_action_btn", $context)) && (($context["buyoneclick_google_action_btn"] ?? null) != "")))) {
                        echo " onClick=\"clickAnalytics(); return true;\" ";
                    }
                    echo " data-target=\"#boc_order\" data-product=\"";
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null);
                    echo "\" data-product_id=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["product_id"] ?? null) : null);
                    echo "\">";
                    echo ($context["buyoneclick_name"] ?? null);
                    echo "</button>
\t\t\t\t";
                }
                // line 117
                echo "\t\t\t
                <div class=\"button-group__btn\">
                  <button type=\"button\" class=\"btn\" onclick=\"cart.add('";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 119);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 119);
                echo "');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
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
            // line 125
            echo " 
      </div>
      <div class=\"buttons\">
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 129
            echo ($context["pagination"] ?? null);
            echo "</div>
        </div>
      </div>
      ";
        } else {
            // line 133
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 135
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 138
        echo ($context["microdatapro"] ?? null);
        echo " ";
        $context["microdatapro_main_flag"] = 1;
        echo " ";
        // line 139
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 140
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 142
        if ( !array_key_exists("microdatapro_main_flag", $context)) {
            echo ($context["microdatapro"] ?? null);
        }
        echo " ";
        // line 143
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bigmag/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 143,  446 => 142,  441 => 140,  436 => 139,  431 => 138,  423 => 135,  417 => 133,  410 => 129,  404 => 125,  387 => 119,  383 => 117,  367 => 115,  365 => 114,  362 => 113,  357 => 110,  349 => 109,  346 => 108,  341 => 106,  337 => 105,  334 => 104,  328 => 103,  326 => 102,  323 => 101,  321 => 100,  318 => 99,  310 => 96,  307 => 95,  305 => 94,  299 => 91,  291 => 90,  287 => 88,  283 => 86,  280 => 85,  276 => 84,  268 => 81,  264 => 79,  256 => 77,  254 => 76,  244 => 75,  241 => 74,  235 => 71,  232 => 70,  230 => 69,  226 => 67,  222 => 66,  213 => 60,  208 => 59,  200 => 57,  198 => 56,  190 => 50,  184 => 49,  176 => 47,  168 => 45,  165 => 44,  161 => 43,  156 => 41,  149 => 36,  143 => 35,  135 => 33,  127 => 31,  124 => 30,  120 => 29,  115 => 27,  108 => 22,  106 => 21,  103 => 20,  97 => 19,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bigmag/template/product/manufacturer_info.twig", "");
    }
}
