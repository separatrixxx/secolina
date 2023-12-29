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

/* bigmag/template/product/search.twig */
class __TwigTemplate_bbdb4f30afd55d0d25611bf9eee76d2cad34444c4c84645f7a44b57c7c70719e extends \Twig\Template
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
<div id=\"product-search\" class=\"container\">
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
  <div class=\"row\">
    ";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <label class=\"control-label\" for=\"input-search\">";
        // line 20
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <div class=\"form-group\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 24
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"form-group\">
            <select name=\"category_id\" class=\"form-control\">
              <option value=\"0\">";
        // line 30
        echo ($context["text_category"] ?? null);
        echo "</option>
              ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 32
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 32) == ($context["category_id"] ?? null))) {
                // line 33
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 33);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 33);
                echo "</option>
              ";
            } else {
                // line 35
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 35);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 35);
                echo "</option>
              ";
            }
            // line 37
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 38
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 38) == ($context["category_id"] ?? null))) {
                    // line 39
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 39);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 39);
                    echo "</option>
              ";
                } else {
                    // line 41
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 41);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 41);
                    echo "</option>
              ";
                }
                // line 43
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 44
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 44) == ($context["category_id"] ?? null))) {
                        // line 45
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 45);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 45);
                        echo "</option>
              ";
                    } else {
                        // line 47
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 47);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 47);
                        echo "</option>
              ";
                    }
                    // line 49
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"form-group\">
            <div class=\"checkbox-form checkbox-sub__category\">
              <label class=\"checkbox-inline\">
              ";
        // line 59
        if (($context["sub_category"] ?? null)) {
            // line 60
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
              ";
        } else {
            // line 62
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
              ";
        }
        // line 64
        echo "              ";
        echo ($context["text_sub_category"] ?? null);
        echo "
              </label>
            </div>
            <div class=\"push10 hidden-lg\"></div>
            <div class=\"checkbox-form checkbox-sub__description\">
              <label class=\"checkbox-inline\">
              ";
        // line 70
        if (($context["description"] ?? null)) {
            // line 71
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
              ";
        } else {
            // line 73
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
              ";
        }
        // line 75
        echo "              ";
        echo ($context["entry_description"] ?? null);
        echo "
              </label>
            </div>
          </div>
        </div>
        <div class=\"col-md-2 text-right\">
          <div class=\"form-group\">
            <input type=\"button\" value=\"";
        // line 82
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
          </div>
        </div>
      </div>
      <div class=\"heading_title\">";
        // line 86
        echo ($context["text_search"] ?? null);
        echo "</div>
      ";
        // line 87
        if (($context["products"] ?? null)) {
            // line 88
            echo "      <div class=\"form-group\">
        <div class=\"toolbar-select\">
          <div class=\"toolbar-select__left\">
            <div class=\"toolbar-select__control toolbar-select--sort text-left\">
              <div class=\"form-inline\">
                <label class=\"input-label\" for=\"input-sort\">";
            // line 93
            echo ($context["text_sort"] ?? null);
            echo "</label>
                <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 96
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 96) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 97
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 97);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 97);
                    echo "</option>
                  ";
                } else {
                    // line 99
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 99);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 99);
                    echo "</option>
                  ";
                }
                // line 101
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                </select>
              </div>
            </div>
            <div class=\"toolbar-select__control toolbar-select--limit text-left\">
              <div class=\"form-inline\">
                <label class=\"input-label\" for=\"input-limit\">";
            // line 107
            echo ($context["text_limit"] ?? null);
            echo "</label>
                <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 110
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 110) == ($context["limit"] ?? null))) {
                    // line 111
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 111);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 111);
                    echo "</option>
                  ";
                } else {
                    // line 113
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 113);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 113);
                    echo "</option>
                  ";
                }
                // line 115
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                </select>
              </div>
            </div>
          </div>
          <div class=\"toolbar-select__control toolbar-select--switch text-right\">
            <div class=\"btn-group\">
              ";
            // line 122
            if (($context["config_compare"] ?? null)) {
                // line 123
                echo "              <a href=\"";
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"btn btn-default\">";
                echo ($context["text_compare"] ?? null);
                echo "</a>
              ";
            }
            // line 125
            echo "              <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 126
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row goods goods-grid row-cols-xxxl-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-sm-2\">
        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 133
                echo "        <div class=\"product-layout product-list col-6\">
          <div class=\"product-thumb\">
            ";
                // line 135
                if (twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 135)) {
                    // line 136
                    echo "            <div class=\"price-absolute product-grid__absolute\">
              <span class=\"sticky-label percent-label\">";
                    // line 137
                    echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 137)) . "%");
                    echo "</span>
            </div>
            ";
                }
                // line 140
                echo "            <div class=\"image hoverimg\" data-sw=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "swap", [], "any", false, false, false, 140);
                echo "\">
              <a href=\"";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 141);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 141);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 141);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 141);
                echo "\" class=\"img-responsive\" /></a>              
              ";
                // line 142
                if (($context["config_wishlist"] ?? null)) {
                    // line 143
                    echo "              <button type=\"button\" class=\"btn wishlist-btn\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 143);
                    echo "');\">
                <svg width=\"24\" height=\"24\" viewBox=\"0 0 16 16\" class=\"icon icon-heart\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path fill-rule=\"evenodd\" d=\"M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"></path>
                </svg>
              </button>
              ";
                }
                // line 149
                echo "
              ";
                // line 150
                if (($context["config_compare"] ?? null)) {
                    // line 151
                    echo "              <button type=\"button\" class=\"btn compare-btn\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 151);
                    echo "');\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line></svg></button>
              ";
                }
                // line 153
                echo "
            </div>
            <div class=\"caption\">
              <a href=\"";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 156);
                echo "\" class=\"product-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 156);
                echo "</a>
              <div class=\"button-group__flex\">
                <div class=\"rating\">
                  ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 160
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 160) < $context["i"])) {
                        // line 161
                        echo "                  <span class=\"star-empty\"></span>
                  ";
                    } else {
                        // line 163
                        echo "                  <span class=\"star\"></span>
                  ";
                    }
                    // line 165
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                  <div class=\"reviews-count\">";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 166);
                echo "</div>
                </div>
              </div>
              ";
                // line 169
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 169) && twig_get_attribute($this->env, $this->source, $context["product"], "economy", [], "any", false, false, false, 169))) {
                    // line 170
                    echo "              <div class=\"price-stock\">
                <span class=\"economy-value\">";
                    // line 171
                    echo ($context["text_sale"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "economy", [], "any", false, false, false, 171);
                    echo "</span>
              </div>
              ";
                }
                // line 174
                echo "              <div class=\"card-action\">
                ";
                // line 175
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "                <div class=\"price\">
                  ";
                    // line 177
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 177)) {
                        // line 178
                        echo "                  <span class=\"price-main\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178);
                        echo "</span>
                  ";
                    } else {
                        // line 179
                        echo "                
                  <span class=\"price-old\">";
                        // line 180
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 180);
                        echo "</span>
                  <span class=\"price-main price-new\">";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 181);
                        echo "</span>               
                  ";
                    }
                    // line 183
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 183)) {
                        // line 184
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 184);
                        echo "</span>
                  ";
                    }
                    // line 185
                    echo " 
                </div>
                ";
                }
                // line 188
                echo "                <div class=\"button-group__btn1\">

\t\t\t\t";
                // line 190
                if (($context["buyoneclick_status_category"] ?? null)) {
                    // line 191
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
                // line 193
                echo "\t\t\t
                <div class=\"button-group__btn\">
                  <button type=\"button\" class=\"btn\" data-toggle=\"tooltip\" title=\"";
                // line 195
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 195);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 195);
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
            // line 203
            echo " 
      </div>
      <div class=\"buttons\">
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 207
            echo ($context["pagination"] ?? null);
            echo "</div>
        </div>
      </div>
      ";
        } else {
            // line 211
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 213
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 215
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script><!--
  \$('#button-search').bind('click', function() {
  \turl = '";
        // line 220
        echo ($context["csp_search_url"] ?? null);
        echo "';
  
  \tvar search = \$('#content input[name=\\'search\\']').prop('value');
  
  \tif (search) {
  \t\t
      if (url.indexOf('?') > -1) {
        url += '&search=' + encodeURIComponent(search);
      } else {
        url += '?search=' + encodeURIComponent(search);
      }
      
  \t}
  
  \tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');
  
  \tif (category_id > 0) {
  \t\turl += '&category_id=' + encodeURIComponent(category_id);
  \t}
  
  \tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');
  
  \tif (sub_category) {
  \t\turl += '&sub_category=true';
  \t}
  
  \tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');
  
  \tif (filter_description) {
  \t\turl += '&description=true';
  \t}
  
  \tlocation = url;
  });
  
  \$('#content input[name=\\'search\\']').bind('keydown', function(e) {
  \tif (e.keyCode == 13) {
  \t\t\$('#button-search').trigger('click');
  \t}
  });
  
  \$('select[name=\\'category_id\\']').on('change', function() {
  \tif (this.value == '0') {
  \t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
  \t} else {
  \t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
  \t}
  });
  
  \$('select[name=\\'category_id\\']').trigger('change');
  -->
</script>
";
        // line 272
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bigmag/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 272,  627 => 220,  619 => 215,  613 => 213,  607 => 211,  600 => 207,  594 => 203,  573 => 195,  569 => 193,  553 => 191,  551 => 190,  547 => 188,  542 => 185,  534 => 184,  531 => 183,  526 => 181,  522 => 180,  519 => 179,  513 => 178,  511 => 177,  508 => 176,  506 => 175,  503 => 174,  495 => 171,  492 => 170,  490 => 169,  484 => 166,  476 => 165,  472 => 163,  468 => 161,  465 => 160,  461 => 159,  453 => 156,  448 => 153,  440 => 151,  438 => 150,  435 => 149,  423 => 143,  421 => 142,  411 => 141,  406 => 140,  400 => 137,  397 => 136,  395 => 135,  391 => 133,  387 => 132,  378 => 126,  373 => 125,  365 => 123,  363 => 122,  355 => 116,  349 => 115,  341 => 113,  333 => 111,  330 => 110,  326 => 109,  321 => 107,  314 => 102,  308 => 101,  300 => 99,  292 => 97,  289 => 96,  285 => 95,  280 => 93,  273 => 88,  271 => 87,  267 => 86,  260 => 82,  249 => 75,  245 => 73,  241 => 71,  239 => 70,  229 => 64,  225 => 62,  221 => 60,  219 => 59,  210 => 52,  204 => 51,  198 => 50,  192 => 49,  184 => 47,  176 => 45,  173 => 44,  168 => 43,  160 => 41,  152 => 39,  149 => 38,  144 => 37,  136 => 35,  128 => 33,  125 => 32,  121 => 31,  117 => 30,  106 => 24,  99 => 20,  95 => 19,  91 => 18,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bigmag/template/product/search.twig", "");
    }
}
