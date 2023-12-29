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

/* default/template/extension/module/owlcarousel.twig */
class __TwigTemplate_19e3e43b8542252b2f882e4377233c5ae547bb66906f2572e369cfc19325ffb2 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["modules"] ?? null)) > 1)) {
            // line 2
            echo "    <ul class=\"nav nav-tabs\" id=\"nav-owl-";
            echo ($context["module"] ?? null);
            echo "\">
    \t";
            // line 3
            $context["is_first_tab"] = "true";
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 5
                echo "            <li class=\"tab-o\"><a href=\"#tab-owl-";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "module", [], "any", false, false, false, 5);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "heading_title", [], "any", false, false, false, 5);
                echo "</a></li>
            ";
                // line 6
                $context["is_first_tab"] = "false";
                // line 7
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
    </ul>
";
        }
        // line 9
        echo " 

";
        // line 11
        if ((twig_length_filter($this->env, ($context["modules"] ?? null)) > 1)) {
            // line 12
            echo "<div id=\"products-tabs-content\" class=\"tab-content\">
";
        }
        // line 13
        echo " 

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " 
    ";
            // line 16
            $context["is_first_tab"] = "true";
            // line 17
            echo "
    <div class=\"tab-pane\" id=\"tab-owl-";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["m"], "module", [], "any", false, false, false, 18);
            echo "\">
        ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_title", [], "any", false, false, false, 19) == "1")) {
                echo " 
            <h2 class=\"heading_title\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["m"], "heading_title", [], "any", false, false, false, 20);
                echo "</h2>
        ";
            }
            // line 22
            echo "        <div class=\"row product-layout ";
            echo twig_get_attribute($this->env, $this->source, $context["m"], "add_class_name", [], "any", false, false, false, 22);
            echo "\">
            <div id=\"owl-";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["m"], "module", [], "any", false, false, false, 23);
            echo "\" class=\"owl-carousel\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["m"], "products", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
                    <div class=\"col-lg-12 item\">
                        <div class=\"product-thumb transition\">
                            ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                                <div class=\"image\">
                                    <a href=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                    echo "\"><img ";
                    if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_lazy_load", [], "any", false, false, false, 29) == "1")) {
                        echo "data-";
                    }
                    echo "src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_lazy_load", [], "any", false, false, false, 29) == "1")) {
                        echo "class=\"lazyOwl\"";
                    }
                    echo " /></a>
                                </div>
                                ";
                    // line 31
                    if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_wishlist", [], "any", false, false, false, 31) == "1")) {
                        // line 32
                        echo "                                    <button class=\"wish\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 32);
                        echo "');\">
                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 16 16\" class=\"icon icon-heart\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"></path></svg>
                                </button>
                                ";
                    }
                    // line 36
                    echo "
                                ";
                    // line 37
                    if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_compare", [], "any", false, false, false, 37) == "1")) {
                        // line 38
                        echo "                                    <button class=\"comp\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_compare"] ?? null);
                        echo "\" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
                        echo "');\">
                                    <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line></svg>
                                </button>
                                ";
                    }
                    // line 42
                    echo "                            ";
                }
                // line 43
                echo "
                            <div class=\"caption\">
                                ";
                // line 45
                if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_name", [], "any", false, false, false, 45) == "1")) {
                    // line 46
                    echo "                                    <h3><a class=\"product-name\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                    echo "</a></h3>
                                ";
                }
                // line 48
                echo "
                                ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_desc", [], "any", false, false, false, 49) == "1")) {
                    // line 50
                    echo "                                    <p>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 50);
                    echo "</p>
                                ";
                }
                // line 51
                echo " 

                                <div class=\"button-group__flex\">
          <div class=\"rating\">
            ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 56) < $context["i"])) {
                        // line 57
                        echo "            <span class=\"star-empty\"></span>
            ";
                    } else {
                        // line 59
                        echo "            <span class=\"star\"></span>
            ";
                    }
                    // line 61
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
            <div class=\"reviews-count\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 62);
                echo "</div>
          </div>
        </div>

                                ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_price", [], "any", false, false, false, 66) == "1")) {
                    // line 67
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67)) {
                        // line 68
                        echo "                                        <p class=\"price-main\">
                                            ";
                        // line 69
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 69)) {
                            // line 70
                            echo "                                                ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 70);
                            echo "
                                            ";
                        } else {
                            // line 72
                            echo "                                                <span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 72);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72);
                            echo "</span>
                                            ";
                        }
                        // line 74
                        echo "                                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 74)) {
                            // line 75
                            echo "                                                <span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 75);
                            echo "</span>
                                            ";
                        }
                        // line 77
                        echo "                                        </p>
                                    ";
                    }
                    // line 79
                    echo "                                ";
                }
                // line 80
                echo "
                                <div class=\"button-group__btn1\">

\t\t\t\t";
                // line 83
                if (($context["buyoneclick_status_module"] ?? null)) {
                    // line 84
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
                // line 86
                echo "\t\t\t
                                <div class=\"button-group__btn\">
                                ";
                // line 88
                if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_cart", [], "any", false, false, false, 88) == "1")) {
                    // line 89
                    echo "                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 89);
                    echo "');\"><i class=\"fa fa-cart-plus cr-k\"></i><span class=\"bt\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
                                ";
                }
                // line 91
                echo "                            </div>
                            </div>

                            </div>

                            
                            
                            
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo " 
            </div>
        </div>

        <script type=\"text/javascript\">
            \$(document).ready(function() {
                function random(owlSelector){
                    owlSelector.children().sort(function(){
                        return Math.round(Math.random()) - 0.5;
                    }).each(function(){
                        \$(this).appendTo(owlSelector);
                    });
                }

                var owl = \$(\"#owl-";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["m"], "module", [], "any", false, false, false, 115);
            echo "\");

                owl.owlCarousel({
                    items : ";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["m"], "visible", [], "any", false, false, false, 118);
            echo ",
                    itemsDesktop : [1000, ";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["m"], "visible_1000", [], "any", false, false, false, 119);
            echo " ],
                    itemsDesktop : [1000, ";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["m"], "visible_1000", [], "any", false, false, false, 120);
            echo " ],
                    itemsDesktopSmall : [900, ";
            // line 121
            echo twig_get_attribute($this->env, $this->source, $context["m"], "visible_900", [], "any", false, false, false, 121);
            echo " ],
                    itemsTablet: [600, ";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["m"], "visible_600", [], "any", false, false, false, 122);
            echo " ],
                    itemsMobile : [479, ";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["m"], "visible_479", [], "any", false, false, false, 123);
            echo " ],

                    ";
            // line 125
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_random_item", [], "any", false, false, false, 125) == "1")) {
                // line 126
                echo "                        beforeInit : function(elem){
                            random(elem);
                        },
                    ";
            }
            // line 129
            echo " 

                    ";
            // line 131
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_nav", [], "any", false, false, false, 131) == "1")) {
                echo " 
                        navigation: true,
                    ";
            }
            // line 133
            echo " 

                    ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, $context["m"], "slide_speed", [], "any", false, false, false, 135)) {
                echo " 
                        slideSpeed: ";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["m"], "slide_speed", [], "any", false, false, false, 136);
                echo ",
                    ";
            }
            // line 137
            echo " 

                    ";
            // line 139
            if (twig_get_attribute($this->env, $this->source, $context["m"], "pagination_speed", [], "any", false, false, false, 139)) {
                // line 140
                echo "                        paginationSpeed: ";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "pagination_speed", [], "any", false, false, false, 140);
                echo ",
                    ";
            }
            // line 141
            echo " 

                    ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["m"], "autoscroll", [], "any", false, false, false, 143)) {
                // line 144
                echo "                        autoPlay: ";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "autoscroll", [], "any", false, false, false, 144);
                echo ",
                    ";
            }
            // line 145
            echo " 

                    ";
            // line 147
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_stop_on_hover", [], "any", false, false, false, 147) == "1")) {
                echo " 
                        stopOnHover: true,
                    ";
            }
            // line 149
            echo " 

                    ";
            // line 151
            if (twig_get_attribute($this->env, $this->source, $context["m"], "rewind_speed", [], "any", false, false, false, 151)) {
                // line 152
                echo "                        rewindSpeed: ";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "rewind_speed", [], "any", false, false, false, 152);
                echo ",
                    ";
            }
            // line 153
            echo " 

                    ";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_lazy_load", [], "any", false, false, false, 155) == "1")) {
                echo " 
                        lazyLoad : true,
                    ";
            }
            // line 158
            echo "
                    ";
            // line 159
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_mouse_drag", [], "any", false, false, false, 159) == "1")) {
                echo " 
                        mouseDrag: true,
                    ";
            }
            // line 162
            echo "
                    ";
            // line 163
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_touch_drag", [], "any", false, false, false, 163) == "1")) {
                echo " 
                        touchDrag: true,
                    ";
            }
            // line 166
            echo "
                    ";
            // line 167
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_page", [], "any", false, false, false, 167) == "1")) {
                echo " 
                        pagination: false,
                    ";
            }
            // line 170
            echo "
                    ";
            // line 171
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "show_per_page", [], "any", false, false, false, 171) == "1")) {
                echo " 
                        scrollPerPage: true,
                    ";
            }
            // line 174
            echo "
                    ";
            // line 175
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "item_prev_next", [], "any", false, false, false, 175) && (twig_get_attribute($this->env, $this->source, $context["m"], "show_per_page", [], "any", false, false, false, 175) == "0"))) {
                echo " 
                        slideItems: ";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["m"], "item_prev_next", [], "any", false, false, false, 176);
                echo ",
                    ";
            }
            // line 177
            echo " 

                    navigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>']
                });
                ";
            // line 181
            if ((twig_length_filter($this->env, ($context["modules"] ?? null)) > 1)) {
                // line 182
                echo "                    \$('#nav-owl-";
                echo ($context["module"] ?? null);
                echo " a:first').tab('show');
                    \$('#nav-owl-";
                // line 183
                echo ($context["module"] ?? null);
                echo " a').click(function (e) {
                        e.preventDefault();\$(this).tab('show');
                    })
                ";
            }
            // line 186
            echo " 
            });
        </script>
    </div>

    ";
            // line 191
            $context["is_first_tab"] = "false";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo " 

";
        // line 194
        if ((twig_length_filter($this->env, ($context["modules"] ?? null)) > 1)) {
            // line 195
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/owlcarousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 195,  554 => 194,  550 => 192,  544 => 191,  537 => 186,  530 => 183,  525 => 182,  523 => 181,  517 => 177,  512 => 176,  508 => 175,  505 => 174,  499 => 171,  496 => 170,  490 => 167,  487 => 166,  481 => 163,  478 => 162,  472 => 159,  469 => 158,  463 => 155,  459 => 153,  453 => 152,  451 => 151,  447 => 149,  441 => 147,  437 => 145,  431 => 144,  429 => 143,  425 => 141,  419 => 140,  417 => 139,  413 => 137,  408 => 136,  404 => 135,  400 => 133,  394 => 131,  390 => 129,  384 => 126,  382 => 125,  377 => 123,  373 => 122,  369 => 121,  365 => 120,  361 => 119,  357 => 118,  351 => 115,  335 => 101,  319 => 91,  309 => 89,  307 => 88,  303 => 86,  287 => 84,  285 => 83,  280 => 80,  277 => 79,  273 => 77,  265 => 75,  262 => 74,  254 => 72,  248 => 70,  246 => 69,  243 => 68,  240 => 67,  238 => 66,  231 => 62,  223 => 61,  219 => 59,  215 => 57,  212 => 56,  208 => 55,  202 => 51,  196 => 50,  194 => 49,  191 => 48,  183 => 46,  181 => 45,  177 => 43,  174 => 42,  164 => 38,  162 => 37,  159 => 36,  149 => 32,  147 => 31,  130 => 29,  127 => 28,  125 => 27,  117 => 24,  113 => 23,  108 => 22,  103 => 20,  99 => 19,  95 => 18,  92 => 17,  90 => 16,  84 => 15,  80 => 13,  76 => 12,  74 => 11,  70 => 9,  60 => 7,  58 => 6,  51 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/owlcarousel.twig", "");
    }
}
