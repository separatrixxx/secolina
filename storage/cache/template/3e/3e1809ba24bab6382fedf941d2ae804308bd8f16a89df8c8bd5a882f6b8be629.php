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

/* bigmag/template/product/category.twig */
class __TwigTemplate_cdd6cd2307fd2a781e98c133cb2f6832886513b599a7dec5ab534883328fec1f extends \Twig\Template
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
<div id=\"product-category\" class=\"container\">
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
  <div class=\"main-title\">
    <img src=\"";
        // line 9
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ((($context["image_alt"] ?? null)) ? (($context["image_alt"] ?? null)) : (($context["heading_title"] ?? null)));
        echo "\" title=\"";
        echo ((($context["image_title"] ?? null)) ? (($context["image_title"] ?? null)) : (($context["heading_title"] ?? null)));
        echo "\" class=\"img-thumbnail i-categ\" />
    <h1 class=\"main-title__h1\">";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  </div>
  ";
        // line 12
        if (($context["categories"] ?? null)) {
            // line 13
            echo "  <div class=\"refine-block\">
    <div class=\"row\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "      <div class=\"category-layout col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2\">
        <div class=\"refine-item\">
          <a href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 18);
                echo "\" class=\"refine-link refine-link__transition\">
            <div class=\"refine-img\">
              <div class=\"refine-img_wrap refine-img_width\">
                <div class=\"refine-img_img absolute-block\">
                  <img src=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 22);
                echo "\" class=\"max-size\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                echo "\">
                </div>
              </div>
            </div>
            <div class=\"background-overlay\"></div>
          </a>
          <div class=\"refine-name\">
            <div class=\"refine-name__info refine-name__transition\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                echo "</div>
          </div>
        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </div>
  </div>
  ";
        }
        // line 37
        echo "  <div class=\"row\">
    ";
        // line 38
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 39
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 40
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 41
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 42
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 43
            echo "    ";
        } else {
            // line 44
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 45
            echo "    ";
        }
        // line 46
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 47
        echo ($context["content_top"] ?? null);
        echo "     
      ";
        // line 48
        if (($context["products"] ?? null)) {
            // line 49
            echo "      <div class=\"form-group\">
        <div class=\"toolbar-select\">
          <div class=\"toolbar-select__left\">
            <div class=\"toolbar-select__control toolbar-select--sort text-left\">
              <div class=\"form-inline\">
                <label class=\"input-label\" for=\"input-sort\">";
            // line 54
            echo ($context["text_sort"] ?? null);
            echo "</label>
                <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 57
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 57) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 58
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 58);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 58);
                    echo "</option>
                  ";
                } else {
                    // line 60
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 60);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 60);
                    echo "</option>
                  ";
                }
                // line 62
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </select>
              </div>
            </div>
            <div class=\"toolbar-select__control toolbar-select--limit text-left\">
              <div class=\"form-inline\">
                <label class=\"input-label\" for=\"input-limit\">";
            // line 68
            echo ($context["text_limit"] ?? null);
            echo "</label>
                <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 71
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 71) == ($context["limit"] ?? null))) {
                    // line 72
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 72);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 72);
                    echo "</option>
                  ";
                } else {
                    // line 74
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 74);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 74);
                    echo "</option>
                  ";
                }
                // line 76
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                </select>
              </div>
            </div>
          </div>
          <div class=\"toolbar-select__control toolbar-select--switch text-right\">
            <div class=\"btn-group\">
              ";
            // line 83
            if (($context["config_compare"] ?? null)) {
                // line 84
                echo "              <a href=\"";
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"btn btn-default\">";
                echo ($context["text_compare"] ?? null);
                echo "</a>
              ";
            }
            // line 86
            echo "              <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 87
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row goods goods-grid row-cols-xxxl-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-sm-2\">
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 94
                echo "        <div class=\"product-layout product-list col-6\">
          <div class=\"product-thumb\">
            ";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "            <div class=\"price-absolute product-grid__absolute\">
              <span class=\"sticky-label percent-label\">";
                    // line 98
                    echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 98)) . "%");
                    echo "</span>
            </div>
            ";
                }
                // line 101
                echo "            <div class=\"image hoverimg\" data-sw=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "swap", [], "any", false, false, false, 101);
                echo "\">
              <a href=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 102);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 102);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
                echo "\" class=\"img-responsive\" /></a>              
              ";
                // line 103
                if (($context["config_wishlist"] ?? null)) {
                    // line 104
                    echo "              <button type=\"button\" class=\"btn wishlist-btn\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
                    echo "');\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 16 16\" class=\"icon icon-heart\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"></path></svg></button>
              ";
                }
                // line 106
                echo "              ";
                if (($context["config_compare"] ?? null)) {
                    // line 107
                    echo "              <button type=\"button\" class=\"btn compare-btn\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 107);
                    echo "');\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line></svg></button>
              ";
                }
                // line 109
                echo "            </div>
            <div class=\"caption\">
              <div class=\"caption-form\">
                <a href=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 112);
                echo "\" class=\"product-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "</a>
                <div class=\"button-group__flex\">
                  <div class=\"rating\">
                    ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 116
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 116) < $context["i"])) {
                        // line 117
                        echo "                    <span class=\"star-empty\"></span>
                    ";
                    } else {
                        // line 119
                        echo "                    <span class=\"star\"></span>
                    ";
                    }
                    // line 121
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                    <div class=\"reviews-count\">";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 122);
                echo "</div>
                  </div>
                </div>
                ";
                // line 125
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 125) && twig_get_attribute($this->env, $this->source, $context["product"], "economy", [], "any", false, false, false, 125))) {
                    // line 126
                    echo "                <div class=\"price-stock\">
                  <span class=\"economy-value\">";
                    // line 127
                    echo ($context["text_sale"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "economy", [], "any", false, false, false, 127);
                    echo "</span>
                </div>
                ";
                }
                // line 130
                echo "              </div>
              <div class=\"card-action\">
                ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "                <div class=\"price\">
                  ";
                    // line 134
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 134)) {
                        // line 135
                        echo "                  <span class=\"price-main\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 135);
                        echo "</span>
                  ";
                    } else {
                        // line 136
                        echo "                
                  <span class=\"price-old\">";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137);
                        echo "</span>
                  <span class=\"price-main price-new\">";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 138);
                        echo "</span>
                  ";
                    }
                    // line 140
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 140)) {
                        // line 141
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 141);
                        echo "</span>
                  ";
                    }
                    // line 142
                    echo " 
                </div>
                ";
                }
                // line 145
                echo "                <div class=\"button-group__btn1\">

\t\t\t\t";
                // line 147
                if (($context["buyoneclick_status_category"] ?? null)) {
                    // line 148
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
                // line 150
                echo "\t\t\t
                <div class=\"button-group__btn\">
                  <button type=\"button\" class=\"btn\" data-toggle=\"tooltip\" title=\"";
                // line 152
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 152);
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
            // line 160
            echo " 
      </div>
      ";
            // line 162
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 163
                echo "      <div class=\"description-bottom\">
        <div class=\"row\">
          ";
                // line 165
                if (($context["thumb"] ?? null)) {
                    // line 166
                    echo "          <div class=\"col-sm-2\"><img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"";
                    echo ((($context["image_alt"] ?? null)) ? (($context["image_alt"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\" title=\"";
                    echo ((($context["image_title"] ?? null)) ? (($context["image_title"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\" class=\"img-thumbnail hidden\" /></div>
          ";
                }
                // line 168
                echo "          ";
                if (($context["description"] ?? null)) {
                    // line 169
                    echo "          <div class=\"col-sm-12\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
          ";
                }
                // line 171
                echo "        </div>
      </div>
      ";
            }
            // line 174
            echo "      <div class=\"buttons\">
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 176
            echo ($context["pagination"] ?? null);
            echo "</div>
        </div>
      </div>
      ";
        }
        // line 179
        echo "\t  
      ";
        // line 180
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 181
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 183
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 186
        echo ($context["microdatapro"] ?? null);
        echo " ";
        $context["microdatapro_main_flag"] = 1;
        echo " ";
        // line 187
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 189
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 192
        if ( !array_key_exists("microdatapro_main_flag", $context)) {
            echo ($context["microdatapro"] ?? null);
        }
        echo " ";
        // line 193
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bigmag/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 193,  563 => 192,  557 => 189,  551 => 187,  546 => 186,  538 => 183,  532 => 181,  530 => 180,  527 => 179,  520 => 176,  516 => 174,  511 => 171,  505 => 169,  502 => 168,  492 => 166,  490 => 165,  486 => 163,  484 => 162,  480 => 160,  459 => 152,  455 => 150,  439 => 148,  437 => 147,  433 => 145,  428 => 142,  420 => 141,  417 => 140,  412 => 138,  408 => 137,  405 => 136,  399 => 135,  397 => 134,  394 => 133,  392 => 132,  388 => 130,  380 => 127,  377 => 126,  375 => 125,  369 => 122,  361 => 121,  357 => 119,  353 => 117,  350 => 116,  346 => 115,  338 => 112,  333 => 109,  325 => 107,  322 => 106,  314 => 104,  312 => 103,  302 => 102,  297 => 101,  291 => 98,  288 => 97,  286 => 96,  282 => 94,  278 => 93,  269 => 87,  264 => 86,  256 => 84,  254 => 83,  246 => 77,  240 => 76,  232 => 74,  224 => 72,  221 => 71,  217 => 70,  212 => 68,  205 => 63,  199 => 62,  191 => 60,  183 => 58,  180 => 57,  176 => 56,  171 => 54,  164 => 49,  162 => 48,  158 => 47,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  135 => 40,  133 => 39,  129 => 38,  126 => 37,  121 => 34,  110 => 29,  96 => 22,  89 => 18,  85 => 16,  81 => 15,  77 => 13,  75 => 12,  70 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bigmag/template/product/category.twig", "");
    }
}
