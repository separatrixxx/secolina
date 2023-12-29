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

/* bigmag/template/product/product.twig */
class __TwigTemplate_d16a19ebcc8f6dd7743f4c048e6424d35930002c8b73869d86528728a72ef6f7 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
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
  <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <div class=\"row\">
    ";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 19
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        ";
        // line 21
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "        ";
            $context["class"] = "col-lg-6";
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "        ";
            $context["class"] = "col-lg-6";
            // line 25
            echo "        ";
        }
        // line 26
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          ";
        // line 27
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 28
            echo "          <div class=\"thumbnails\">
            ";
            // line 29
            if (($context["thumb"] ?? null)) {
                // line 30
                echo "            <div class=\"image-main\"><a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ((($context["image_title"] ?? null)) ? (($context["image_title"] ?? null)) : (($context["heading_title"] ?? null)));
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ((($context["image_title"] ?? null)) ? (($context["image_title"] ?? null)) : (($context["heading_title"] ?? null)));
                echo "\" alt=\"";
                echo ((($context["image_alt"] ?? null)) ? (($context["image_alt"] ?? null)) : (($context["heading_title"] ?? null)));
                echo "\" class=\"img-responsive\" /></a></div>
            ";
            }
            // line 32
            echo "            ";
            if (($context["images"] ?? null)) {
                // line 33
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 34
                    echo "            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 34);
                    echo "\" title=\"";
                    echo ((($context["image_title"] ?? null)) ? (($context["image_title"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\"> <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 34);
                    echo "\" title=\"";
                    echo ((($context["image_title"] ?? null)) ? (($context["image_title"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\" alt=\"";
                    echo ((($context["image_alt"] ?? null)) ? (($context["image_alt"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\" /></a></div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "            ";
            }
            // line 37
            echo "          </div>
          ";
        }
        // line 38
        echo "   
        </div>
        ";
        // line 40
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 41
            echo "        ";
            $context["class"] = "col-lg-6";
            // line 42
            echo "        ";
        } else {
            // line 43
            echo "        ";
            $context["class"] = "col-lg-6";
            // line 44
            echo "        ";
        }
        // line 45
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <div class=\"product-body\">
            ";
        // line 47
        if (($context["review_status"] ?? null)) {
            echo " 
            <div class=\"product-sticker form-group\">
              ";
            // line 49
            if ((($context["rating"] ?? null) > 1)) {
                echo "           \t\t\t
              <div class=\"rating\">
                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 52
                    echo "                ";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 53
                        echo "                <span class=\"star-empty\"></span>
                ";
                    } else {
                        // line 55
                        echo "                <span class=\"star\"></span>
                ";
                    }
                    // line 57
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click');  \$('html, body').animate({ scrollTop: \$('a[href=\\'#tab-review\\']').offset().top - 5}, 250); return false;\">";
                echo ($context["reviews"] ?? null);
                echo "</a>
              </div>
              ";
            } else {
                // line 61
                echo "              <div class=\"rating\">
                ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 63
                    echo "                ";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 64
                        echo "                <span class=\"star-empty\"></span>
                ";
                    } else {
                        // line 66
                        echo "                <span class=\"star\"></span>
                ";
                    }
                    // line 68
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                <div class=\"write-review\">
                  <span>";
                // line 70
                echo ($context["text_review_write"] ?? null);
                echo "</span>
                  <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click');  \$('html, body').animate({ scrollTop: \$('a[href=\\'#tab-review\\']').offset().top - 5}, 250); return false;\"><i class=\"fa fa-comments\" style=\"font-size:inherit;\"></i> ";
                // line 71
                echo ($context["text_write"] ?? null);
                echo "</a>
                </div>
              </div>
              ";
            }
            // line 75
            echo "            </div>
            ";
        }
        // line 77
        echo "            ";
        if (($context["price"] ?? null)) {
            // line 78
            echo "            <div class=\"price product-price\">
              ";
            // line 79
            if ( !($context["special"] ?? null)) {
                // line 80
                echo "              <div class=\"price-main\">";
                echo ($context["price"] ?? null);
                echo "</div>
              ";
            } else {
                // line 82
                echo "              <div class=\"product-price__old\">
                <span class=\"price-old__value\">";
                // line 83
                echo ($context["price"] ?? null);
                echo "</span>
                <span class=\"product-label\">";
                // line 84
                echo (("-" . ($context["percent"] ?? null)) . "%");
                echo "</span>
                ";
                // line 85
                if (($context["economy"] ?? null)) {
                    // line 86
                    echo "                <span class=\"product-label price-economy badge\">";
                    echo ($context["text_sale"] ?? null);
                    echo " ";
                    echo ($context["economy"] ?? null);
                    echo "</span>
                ";
                }
                // line 88
                echo "              </div>
              <div class=\"price-main price-special\">";
                // line 89
                echo ($context["special"] ?? null);
                echo "</div>
              ";
            }
            // line 91
            echo "              ";
            if (($context["tax"] ?? null)) {
                // line 92
                echo "              <div class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>
              ";
            }
            // line 94
            echo "              ";
            if (($context["reward"] ?? null)) {
                // line 95
                echo "              <div class=\"product-reward\">
                <span>";
                // line 96
                echo ($context["text_reward"] ?? null);
                echo "</span>
                ";
                // line 97
                echo ($context["reward"] ?? null);
                echo "
                ";
                // line 98
                if (($context["points"] ?? null)) {
                    // line 99
                    echo "                <span class=\"reward-questions\">?</span>
                <div class=\"price-points dropdown-box\">";
                    // line 100
                    echo ($context["text_points"] ?? null);
                    echo " ";
                    echo ($context["points"] ?? null);
                    echo "</div>
                ";
                }
                // line 102
                echo "              </div>
              ";
            }
            // line 104
            echo "              <div class=\"card-stickers\">
                ";
            // line 105
            if ((($context["quantity"] ?? null) <= 0)) {
                // line 106
                echo "                <div class=\"product-stickers product-stock\">
                  <div class=\"product-label product-stock__wrap nostock\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"icon icon-x\" viewBox=\"0 0 16 16\"><path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z\"/></svg>
                    <span class=\"align-middle\">";
                // line 109
                echo ($context["stock"] ?? null);
                echo "</span>
                  </div>
                </div>
                ";
            } else {
                // line 113
                echo "                <div class=\"product-stickers product-stock\">
                  <div class=\"product-label product-stock__wrap stock-in\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"icon icon-check\" viewBox=\"0 0 16 16\"><path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"></path></svg>
                    <span class=\"align-middle\">";
                // line 116
                echo ($context["text_instock"] ?? null);
                echo " ";
                if (($context["config_stock"] ?? null)) {
                    echo ($context["stock"] ?? null);
                }
                echo "</span>
                  </div>
                </div>
                ";
            }
            // line 120
            echo "              </div>
              ";
            // line 121
            if (($context["discounts"] ?? null)) {
                // line 122
                echo "              <div class=\"product-discount\">
                ";
                // line 123
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 124
                    echo "                <div class=\"price-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 124);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 124);
                    echo "</div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "              </div>
              ";
            }
            // line 128
            echo "            </div>
            ";
        }
        // line 130
        echo "            ";
        if ((($context["price"] ?? null) == false)) {
            // line 131
            echo "            <div class=\"alert-price\">";
            echo ($context["attention"] ?? null);
            echo "</div>
            ";
        }
        // line 133
        echo "            ";
        if ((($context["config_wishlist"] ?? null) || ($context["config_compare"] ?? null))) {
            // line 134
            echo "            <div class=\"btn-group product-add__buttons\">
              <div class=\"form-group\">
                ";
            // line 136
            if (($context["config_wishlist"] ?? null)) {
                // line 137
                echo "                <div class=\"add-btn add-wishlist\" onclick=\"wishlist.add('";
                echo ($context["product_id"] ?? null);
                echo "');\">
                  <span class=\"add-btn__svg\">
                    <svg class=\"svg-icon icon icon-heart\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\"><path d=\"M13.22,2.984c-1.125,0-2.504,0.377-3.53,1.182C8.756,3.441,7.502,2.984,6.28,2.984c-2.6,0-4.714,2.116-4.714,4.716c0,0.32,0.032,0.644,0.098,0.96c0.799,4.202,6.781,7.792,7.46,8.188c0.193,0.111,0.41,0.168,0.627,0.168c0.187,0,0.376-0.041,0.55-0.127c0.011-0.006,1.349-0.689,2.91-1.865c0.021-0.016,0.043-0.031,0.061-0.043c0.021-0.016,0.045-0.033,0.064-0.053c3.012-2.309,4.6-4.805,4.6-7.229C17.935,5.1,15.819,2.984,13.22,2.984z M12.544,13.966c-0.004,0.004-0.018,0.014-0.021,0.018s-0.018,0.012-0.023,0.016c-1.423,1.076-2.674,1.734-2.749,1.771c0,0-6.146-3.576-6.866-7.363C2.837,8.178,2.811,7.942,2.811,7.7c0-1.917,1.554-3.47,3.469-3.47c1.302,0,2.836,0.736,3.431,1.794c0.577-1.121,2.161-1.794,3.509-1.794c1.914,0,3.469,1.553,3.469,3.47C16.688,10.249,14.474,12.495,12.544,13.966z\"></path></svg>
                  </span>
                  <span class=\"align-middle\">";
                // line 141
                echo ($context["button_wishlist"] ?? null);
                echo "</span>
                </div>
                ";
            }
            // line 144
            echo "                ";
            if (($context["config_compare"] ?? null)) {
                // line 145
                echo "                <div class=\"add-btn add-compare\" onclick=\"compare.add('";
                echo ($context["product_id"] ?? null);
                echo "');\">
                  <span class=\"add-btn__svg\">
                    <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line></svg>
                  </span>
                  <span class=\"align-middle\">";
                // line 149
                echo ($context["button_compare"] ?? null);
                echo "</span>
                </div>
                ";
            }
            // line 152
            echo "              </div>
            </div>
            ";
        }
        // line 155
        echo "            <div id=\"product\">
              ";
        // line 156
        if (($context["options"] ?? null)) {
            // line 157
            echo "              <div class=\"heading_title\">";
            echo ($context["text_option"] ?? null);
            echo "</div>
              ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 159
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "select")) {
                    // line 160
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 160)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</label>
                <select name=\"option[";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "\" class=\"form-control\">
                  <option value=\"\">";
                    // line 163
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                  ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 164));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 165
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 165);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 165);
                        echo "
                    ";
                        // line 166
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166)) {
                            // line 167
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 167);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167);
                            echo ")
                    ";
                        }
                        // line 168
                        echo " 
                  </option>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "                </select>
              </div>
              ";
                }
                // line 174
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 174) == "radio")) {
                    // line 175
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 175)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\">";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 176);
                    echo "</label>
                <div id=\"input-option";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "\">
                  ";
                    // line 178
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 178));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 179
                        echo "                  <div class=\"radio\">
                    <label>
                    <input type=\"radio\" name=\"option[";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 181);
                        echo "\" />
                    ";
                        // line 182
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 182)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 182);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 182);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 182);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                        echo "
                    ";
                        // line 184
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184)) {
                            // line 185
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 185);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185);
                            echo ")
                    ";
                        }
                        // line 186
                        echo " </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo " 
                </div>
              </div>
              ";
                }
                // line 192
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 192) == "checkbox")) {
                    // line 193
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 193)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\">";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    echo "</label>
                <div id=\"input-option";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\">
                  ";
                    // line 196
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 196));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 197
                        echo "                  <div class=\"checkbox\">
                    <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 199
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 199);
                        echo "\" />
                    ";
                        // line 200
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 200)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 200);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 200);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 200)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 200);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 200);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 201
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 201);
                        echo "
                    ";
                        // line 202
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 202)) {
                            // line 203
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 203);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 203);
                            echo ")
                    ";
                        }
                        // line 204
                        echo " </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 206
                    echo " 
                </div>
              </div>
              ";
                }
                // line 210
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 210) == "text")) {
                    // line 211
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 211)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 212);
                    echo "</label>
                <input type=\"text\" name=\"option[";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 213);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\" class=\"form-control\" />
              </div>
              ";
                }
                // line 216
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 216) == "textarea")) {
                    // line 217
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 217)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 218);
                    echo "</label>
                <textarea name=\"option[";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 219);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 219);
                    echo "</textarea>
              </div>
              ";
                }
                // line 222
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 222) == "file")) {
                    // line 223
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 223)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\">";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                    echo "</label>
                <button type=\"button\" id=\"button-upload";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                  <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
                    <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"></path>
                    <polyline points=\"17 8 12 3 7 8\"></polyline>
                    <line x1=\"12\" y1=\"3\" x2=\"12\" y2=\"15\"></line>
                  </svg>
                  ";
                    // line 231
                    echo ($context["button_upload"] ?? null);
                    echo "
                </button>
                <input type=\"hidden\" name=\"option[";
                    // line 233
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 233);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 233);
                    echo "\" />
              </div>
              ";
                }
                // line 236
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 236) == "date")) {
                    // line 237
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 237)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 238);
                    echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"option[";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 240);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\">
                      <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                        <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                        <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                        <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                      </svg>
                    </button>
                  </span>
                </div>
              </div>
              ";
                }
                // line 254
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 254) == "datetime")) {
                    // line 255
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 255)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 256);
                    echo "</label>
                <div class=\"input-group datetime\">
                  <input type=\"text\" name=\"option[";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 258);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 258);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 258);
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\">
                      <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                        <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                        <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                        <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                      </svg>
                    </button>
                  </span>
                </div>
              </div>
              ";
                }
                // line 272
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 272) == "time")) {
                    // line 273
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 273)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 274
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 274);
                    echo "</label>
                <div class=\"input-group time\">
                  <input type=\"text\" name=\"option[";
                    // line 276
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 276);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 276);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 276);
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\">
                      <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                        <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                        <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                        <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                      </svg>
                    </button>
                  </span>
                </div>
              </div>
              ";
                }
                // line 290
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "              ";
        }
        // line 292
        echo "              ";
        if (($context["recurrings"] ?? null)) {
            // line 293
            echo "              <hr>
              <div class=\"heading_title\">";
            // line 294
            echo ($context["text_payment_recurring"] ?? null);
            echo "</div>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 297
            echo ($context["text_select"] ?? null);
            echo "</option>
                  ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 299
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 299);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 299);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
              ";
        }
        // line 305
        echo "              <div class=\"form-group\">
                <div class=\"button-group product-button__group\">
                  <div class=\"product-quantity\">
                    <label class=\"control-label\" for=\"input-quantity\">";
        // line 308
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 309
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
                  </div>
                  <div class=\"product-button__cart\">

\t\t\t\t\t";
        // line 313
        if (($context["buyoneclick_status_product"] ?? null)) {
            // line 314
            echo "\t\t\t\t\t<button type=\"button\" data-loading-text=\"";
            echo ($context["buyoneclick_text_loading"] ?? null);
            echo "\" class=\"btn btn-border btn-lg boc_order_btn\" ";
            if ((((((($context["buyoneclick_ya_status"] ?? null) && array_key_exists("buyoneclick_ya_counter", $context)) && (($context["buyoneclick_ya_counter"] ?? null) != "")) && array_key_exists("buyoneclick_ya_identificator", $context)) && (($context["buyoneclick_ya_identificator"] ?? null) != "")) || ((((($context["buyoneclick_google_status"] ?? null) && array_key_exists("buyoneclick_google_category_btn", $context)) && (($context["buyoneclick_google_category_btn"] ?? null) != "")) && array_key_exists("buyoneclick_google_action_btn", $context)) && (($context["buyoneclick_google_action_btn"] ?? null) != "")))) {
                echo " onClick=\"clickAnalytics(); return true;\" ";
            }
            echo " data-target=\"#boc_order\" data-product=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" data-product_id=\"";
            echo ($context["product_id"] ?? null);
            echo "\">";
            echo ($context["buyoneclick_name"] ?? null);
            echo "</button>
\t\t\t\t\t";
        }
        // line 316
        echo "\t\t\t\t
                    <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 317
        echo ($context["text_loading"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\"><i class=\"fa fa-cart-plus cr-k\"></i><span class=\"bt\">";
        echo ($context["button_cart"] ?? null);
        echo "</span></button>\t\t
                    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 318
        echo ($context["product_id"] ?? null);
        echo "\" />
                  </div>
                </div>
              </div>
              ";
        // line 322
        if ((($context["minimum"] ?? null) > 1)) {
            // line 323
            echo "              <div class=\"alert-minimum\">
                <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
                  <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                  <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                  <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                </svg>
                ";
            // line 329
            echo ($context["text_minimum"] ?? null);
            echo "
              </div>
              ";
        }
        // line 332
        echo "              <div class=\"product-body__list\">
                ";
        // line 333
        if (($context["manufacturer"] ?? null)) {
            // line 334
            echo "                <div class=\"product-items product-manufacturer\"><span>";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span> <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></div>
                ";
        }
        // line 336
        echo "                <div class=\"product-items product-model\"><span>";
        echo ($context["text_model"] ?? null);
        echo "</span> ";
        echo ($context["model"] ?? null);
        echo "</div>
                ";
        // line 337
        if (($context["sku"] ?? null)) {
            echo "  
                <div class=\"product-items product-sku\"><span>";
            // line 338
            echo ($context["text_sku"] ?? null);
            echo "</span> ";
            echo ($context["sku"] ?? null);
            echo "</div>
                ";
        }
        // line 340
        echo "                ";
        if ((($context["weight"] ?? null) > 0)) {
            echo " 
                <div class=\"product-items product-weight\"><span>";
            // line 341
            echo ($context["text_weight"] ?? null);
            echo "</span> ";
            echo ($context["weight"] ?? null);
            echo "</div>
                ";
        }
        // line 343
        echo "                <hr>
                ";
        // line 344
        echo ($context["description"] ?? null);
        echo "
              </div>

            </div>
          </div>
        </div>
      </div>
      <br />
      

";
        // line 354
        $context["attribute_tab_exists"] = (array_key_exists("attribute_groups", $context) && (twig_length_filter($this->env, ($context["attribute_groups"] ?? null)) > 0));
        // line 355
        $context["review_tab_exists"] = (array_key_exists("review_status", $context) && ($context["review_status"] ?? null));
        // line 356
        echo "
";
        // line 357
        if ((($context["attribute_tab_exists"] ?? null) && ($context["review_tab_exists"] ?? null))) {
            // line 358
            echo "  ";
            $context["active_tab"] = "tab-specification";
        } elseif (        // line 359
($context["review_tab_exists"] ?? null)) {
            // line 360
            echo "  ";
            $context["active_tab"] = "tab-review";
        }
        // line 362
        echo "
<!-- Navigation Tabs -->
<ul class=\"nav nav-tabs\">
  ";
        // line 365
        if (($context["attribute_tab_exists"] ?? null)) {
            // line 366
            echo "    <li class=\"";
            if ((($context["active_tab"] ?? null) == "tab-specification")) {
                echo "active";
            }
            echo "\">
      <a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 367
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
    </li>
  ";
        }
        // line 370
        echo "  ";
        if (($context["review_tab_exists"] ?? null)) {
            // line 371
            echo "    <li class=\"";
            if ((($context["active_tab"] ?? null) == "tab-review")) {
                echo "active";
            }
            echo "\">
      <a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 372
            echo ($context["tab_review"] ?? null);
            echo "</a>
    </li>
  ";
        }
        // line 375
        echo "</ul>

<div class=\"tab-content\">
  ";
        // line 378
        if (($context["attribute_tab_exists"] ?? null)) {
            // line 379
            echo "    <div class=\"tab-pane ";
            if ((($context["active_tab"] ?? null) == "tab-specification")) {
                echo "active";
            }
            echo "\" id=\"tab-specification\">
      <table class=\"table table-bordered\">
        ";
            // line 381
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 382
                echo "          <thead>
            <tr>
              <td colspan=\"2\"><strong>";
                // line 384
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 384);
                echo "</strong></td>
            </tr>
          </thead>
          <tbody>
            ";
                // line 388
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 388));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 389
                    echo "              <tr>
                <td class=\"td-att\">";
                    // line 390
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 390);
                    echo "</td>
                <td>";
                    // line 391
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 391);
                    echo "</td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 394
                echo "          </tbody>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            echo "      </table>
    </div>
  ";
        }
        // line 399
        echo "
  ";
        // line 400
        if (($context["review_tab_exists"] ?? null)) {
            // line 401
            echo "    <div class=\"tab-pane ";
            if ((($context["active_tab"] ?? null) == "tab-review")) {
                echo "active";
            }
            echo "\" id=\"tab-review\">
      <form class=\"form-horizontal\" id=\"form-review\">
        <div id=\"review\"></div>
        <h2>";
            // line 404
            echo ($context["text_write"] ?? null);
            echo "</h2>
        ";
            // line 405
            if (($context["review_guest"] ?? null)) {
                // line 406
                echo "          <div class=\"form-group required\">
            <div class=\"col-sm-12\">
              <div class=\"stars-rating\">
                <input name=\"rating\" id=\"s_rating\" value=\"0\" type=\"hidden\">
                <div class=\"wrap\" data-rate=\"0\">
                  <span data-toggle=\"tooltip\" title=\"";
                // line 411
                echo ($context["text_awful"] ?? null);
                echo "\" data-rate=\"1\"></span>
                  <span data-toggle=\"tooltip\" title=\"";
                // line 412
                echo ($context["text_bad"] ?? null);
                echo "\" data-rate=\"2\"></span>
                  <span data-toggle=\"tooltip\" title=\"";
                // line 413
                echo ($context["text_normal"] ?? null);
                echo "\" data-rate=\"3\"></span>
                  <span data-toggle=\"tooltip\" title=\"";
                // line 414
                echo ($context["text_good"] ?? null);
                echo "\" data-rate=\"4\"></span>
                  <span data-toggle=\"tooltip\" title=\"";
                // line 415
                echo ($context["text_excellent"] ?? null);
                echo "\" data-rate=\"5\"></span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group required\">
            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-name\">";
                // line 422
                echo ($context["entry_name"] ?? null);
                echo "</label>
              <input type=\"text\" name=\"name\" value=\"";
                // line 423
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-review\">";
                // line 428
                echo ($context["entry_review"] ?? null);
                echo "</label>
              <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
            </div>
          </div>
          ";
                // line 432
                echo ($context["captcha"] ?? null);
                echo "
          <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
              <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 435
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
            </div>
          </div>
        ";
            } else {
                // line 439
                echo "          ";
                echo ($context["text_login"] ?? null);
                echo "
        ";
            }
            // line 441
            echo "      </form>
    </div>
  ";
        }
        // line 444
        echo "</div>


      ";
        // line 447
        if (($context["products"] ?? null)) {
            // line 448
            echo "      <div class=\"heading_title\">";
            echo ($context["text_related"] ?? null);
            echo "</div>
      <div class=\"row related\">
        ";
            // line 450
            $context["i"] = 0;
            // line 451
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 452
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 453
                    echo "        ";
                    $context["class"] = "product-layout product-grid col-sm-6 col-md-6  col-lg-4 col-6";
                    // line 454
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 455
                    echo "        ";
                    $context["class"] = "product-layout product-grid col-sm-4 col-md-4 col-lg-3 col-6";
                    // line 456
                    echo "        ";
                } else {
                    // line 457
                    echo "        ";
                    $context["class"] = "product-layout product-grid col-sm-4 col-md-4 col-lg-3 col-6";
                    // line 458
                    echo "        ";
                }
                // line 459
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb\">
            <div class=\"image hoverimg\" data-sw=\"";
                // line 461
                echo twig_get_attribute($this->env, $this->source, $context["product"], "swap", [], "any", false, false, false, 461);
                echo "\">
              <a href=\"";
                // line 462
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 462);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 462);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 462);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 462);
                echo "\" class=\"img-responsive\" /></a>              
              ";
                // line 463
                if (($context["config_wishlist"] ?? null)) {
                    // line 464
                    echo "              <button type=\"button\" class=\"btn wishlist-btn\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 464);
                    echo "');\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 16 16\" class=\"icon icon-heart\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"></path></svg></button>
              ";
                }
                // line 466
                echo "            </div>
            <div class=\"caption\">
              <a href=\"";
                // line 468
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 468);
                echo "\" class=\"product-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 468);
                echo "</a>
              <div class=\"button-group__flex\">
                <div class=\"rating\">
                  ";
                // line 471
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 472
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 472) < $context["i"])) {
                        // line 473
                        echo "                  <span class=\"star-empty\"></span>
                  ";
                    } else {
                        // line 475
                        echo "                  <span class=\"star\"></span>
                  ";
                    }
                    // line 477
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                  <div class=\"reviews-count\">";
                // line 478
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 478);
                echo "</div>
                </div>
              </div>
              <div class=\"card-action\">
                ";
                // line 482
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 482)) {
                    // line 483
                    echo "                <div class=\"price\">
                  ";
                    // line 484
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 484)) {
                        // line 485
                        echo "                  <span class=\"price-main\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 485);
                        echo "</span>
                  ";
                    } else {
                        // line 486
                        echo "                
                  <span class=\"price-old\">";
                        // line 487
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 487);
                        echo "</span>
                  <span class=\"price-main price-new\">";
                        // line 488
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 488);
                        echo "</span>               
                  ";
                    }
                    // line 490
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 490)) {
                        // line 491
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 491);
                        echo "</span>
                  ";
                    }
                    // line 492
                    echo " 
                </div>
                ";
                }
                // line 495
                echo "
\t\t\t\t";
                // line 496
                if (($context["buyoneclick_status_module"] ?? null)) {
                    // line 497
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
                // line 499
                echo "\t\t\t
                <div class=\"button-group__btn\">
                  <button type=\"button\" class=\"btn\" onclick=\"cart.add('";
                // line 501
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 501);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 501);
                echo "');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
                // line 507
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 508
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
      </div>
      ";
        }
        // line 511
        echo "      ";
        if (($context["tags"] ?? null)) {
            // line 512
            echo "      <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 514
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 514);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 514);
                    echo "</a>,
        ";
                } else {
                    // line 515
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["tags"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 515);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tags"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 515);
                    echo "</a> ";
                }
                // line 516
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
      </p>
      ";
        }
        // line 519
        echo ($context["microdatapro"] ?? null);
        echo " ";
        $context["microdatapro_main_flag"] = 1;
        echo " ";
        // line 520
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 522
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('#modal-cart, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

            \$('#optionsModal').modal('show')

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\thtml = '<div id=\"modal-cart\" class=\"modal fade\">';
\t\t\t\thtml += '  <div class=\"modal-dialog modal-cart__dialog\">';
\t\t\t\thtml += '    <div class=\"modal-content modal-cart__content\">';
\t\t\t\thtml += '      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>';
\t\t\t\thtml += '      <div class=\"modal-cart__header\">';
\t\t\t\thtml += '        <div class=\"modal-cart__title\">' + json.title + '</div>';
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '      <div class=\"modal-cart__body\">'
\t\t\t\thtml += '        <div class=\"modal-cart__img\">';
\t\t\t\thtml += '          <img src=\"' + json.img + '\" title=\"' + json.name + '\" alt=\"' + json.name + '\">';
\t\t\t\thtml += '        </div>';
\t\t\t\thtml += '\t     <div class=\"modal-cart__name\"><span class=\"modal-cart__name--value\">' + json.name + '</span><span class=\"modal-sku\">' + json.sku + '</span>' + json.stock + '<span class=\"text-dost\">";
        // line 597
        echo ($context["text_dost"] ?? null);
        echo "</span></div>';
        html += '      </div>';
\t\t\t\thtml += '      <div class=\"modal-cart__footer\">';
\t\t\t\thtml += '        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">' + json.continue_shopping + '</button>' + json.checkout + '';
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '    </div>';
\t\t\t\thtml += '  </div>';
\t\t\t\thtml += '</div>';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#modal-cart').modal('show');

\t\t\t\t// Need to set timeout otherwise it wont update the total
\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\$('.header-cart > a').html('<svg class=\"svg-icon icon icon-cart\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\"><path fill=\"#000\" d=\"M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z\"></path><path fill=\"#000\" d=\"M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z\"></path><path fill=\"#000\" d=\"M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z\"></path></svg>' + json['total'] + '');
\t\t\t\t\t\$('.mobile-menu__cart span').html(json['countProducts']);
\t\t\t\t}, 100);\t\t\t\t\t
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 625
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 630
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 636
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 703
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 707
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(\".stars-rating span\").click(function() {
    var t = \$(this).attr(\"data-rate\");
    \$(\".stars-rating .wrap\").attr(\"data-rate\", t),
    \$(\"#s_rating\").val(t)
})
//--></script> 
";
        // line 751
        if ( !array_key_exists("microdatapro_main_flag", $context)) {
            echo ($context["microdatapro"] ?? null);
        }
        echo " ";
        // line 752
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "bigmag/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1810 => 752,  1805 => 751,  1758 => 707,  1751 => 703,  1681 => 636,  1672 => 630,  1664 => 625,  1633 => 597,  1555 => 522,  1549 => 520,  1544 => 519,  1534 => 516,  1527 => 515,  1517 => 514,  1513 => 513,  1508 => 512,  1505 => 511,  1495 => 508,  1493 => 507,  1480 => 501,  1476 => 499,  1460 => 497,  1458 => 496,  1455 => 495,  1450 => 492,  1442 => 491,  1439 => 490,  1434 => 488,  1430 => 487,  1427 => 486,  1421 => 485,  1419 => 484,  1416 => 483,  1414 => 482,  1407 => 478,  1399 => 477,  1395 => 475,  1391 => 473,  1388 => 472,  1384 => 471,  1376 => 468,  1372 => 466,  1364 => 464,  1362 => 463,  1352 => 462,  1348 => 461,  1342 => 459,  1339 => 458,  1336 => 457,  1333 => 456,  1330 => 455,  1327 => 454,  1324 => 453,  1321 => 452,  1316 => 451,  1314 => 450,  1308 => 448,  1306 => 447,  1301 => 444,  1296 => 441,  1290 => 439,  1281 => 435,  1275 => 432,  1268 => 428,  1260 => 423,  1256 => 422,  1246 => 415,  1242 => 414,  1238 => 413,  1234 => 412,  1230 => 411,  1223 => 406,  1221 => 405,  1217 => 404,  1208 => 401,  1206 => 400,  1203 => 399,  1198 => 396,  1191 => 394,  1182 => 391,  1178 => 390,  1175 => 389,  1171 => 388,  1164 => 384,  1160 => 382,  1156 => 381,  1148 => 379,  1146 => 378,  1141 => 375,  1135 => 372,  1128 => 371,  1125 => 370,  1119 => 367,  1112 => 366,  1110 => 365,  1105 => 362,  1101 => 360,  1099 => 359,  1096 => 358,  1094 => 357,  1091 => 356,  1089 => 355,  1087 => 354,  1074 => 344,  1071 => 343,  1064 => 341,  1059 => 340,  1052 => 338,  1048 => 337,  1041 => 336,  1031 => 334,  1029 => 333,  1026 => 332,  1020 => 329,  1012 => 323,  1010 => 322,  1003 => 318,  995 => 317,  992 => 316,  976 => 314,  974 => 313,  967 => 309,  963 => 308,  958 => 305,  952 => 301,  941 => 299,  937 => 298,  933 => 297,  927 => 294,  924 => 293,  921 => 292,  918 => 291,  912 => 290,  891 => 276,  884 => 274,  877 => 273,  874 => 272,  853 => 258,  846 => 256,  839 => 255,  836 => 254,  815 => 240,  808 => 238,  801 => 237,  798 => 236,  790 => 233,  785 => 231,  774 => 225,  770 => 224,  763 => 223,  760 => 222,  748 => 219,  742 => 218,  735 => 217,  732 => 216,  720 => 213,  714 => 212,  707 => 211,  704 => 210,  698 => 206,  690 => 204,  683 => 203,  681 => 202,  676 => 201,  660 => 200,  654 => 199,  650 => 197,  646 => 196,  642 => 195,  638 => 194,  631 => 193,  628 => 192,  622 => 188,  614 => 186,  607 => 185,  605 => 184,  601 => 183,  583 => 182,  577 => 181,  573 => 179,  569 => 178,  565 => 177,  561 => 176,  554 => 175,  551 => 174,  546 => 171,  538 => 168,  531 => 167,  529 => 166,  522 => 165,  518 => 164,  514 => 163,  508 => 162,  502 => 161,  495 => 160,  492 => 159,  488 => 158,  483 => 157,  481 => 156,  478 => 155,  473 => 152,  467 => 149,  459 => 145,  456 => 144,  450 => 141,  442 => 137,  440 => 136,  436 => 134,  433 => 133,  427 => 131,  424 => 130,  420 => 128,  416 => 126,  405 => 124,  401 => 123,  398 => 122,  396 => 121,  393 => 120,  382 => 116,  377 => 113,  370 => 109,  365 => 106,  363 => 105,  360 => 104,  356 => 102,  349 => 100,  346 => 99,  344 => 98,  340 => 97,  336 => 96,  333 => 95,  330 => 94,  322 => 92,  319 => 91,  314 => 89,  311 => 88,  303 => 86,  301 => 85,  297 => 84,  293 => 83,  290 => 82,  284 => 80,  282 => 79,  279 => 78,  276 => 77,  272 => 75,  265 => 71,  261 => 70,  258 => 69,  252 => 68,  248 => 66,  244 => 64,  241 => 63,  237 => 62,  234 => 61,  227 => 58,  221 => 57,  217 => 55,  213 => 53,  210 => 52,  206 => 51,  201 => 49,  196 => 47,  190 => 45,  187 => 44,  184 => 43,  181 => 42,  178 => 41,  176 => 40,  172 => 38,  168 => 37,  165 => 36,  148 => 34,  143 => 33,  140 => 32,  126 => 30,  124 => 29,  121 => 28,  119 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  95 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  70 => 11,  66 => 10,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bigmag/template/product/product.twig", "");
    }
}
