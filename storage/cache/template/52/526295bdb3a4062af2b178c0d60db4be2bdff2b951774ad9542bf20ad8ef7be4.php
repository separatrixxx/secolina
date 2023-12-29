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

/* default/template/checkout/simplecheckout.twig */
class __TwigTemplate_c40f3425d1205e8beaee3e38581b8c090907d556998bff5d450563c233837594 extends \Twig\Template
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
        if ((( !($context["ajax"] ?? null) &&  !($context["popup"] ?? null)) &&  !($context["as_module"] ?? null))) {
            // line 2
            $context["simple_page"] = "simplecheckout";
            // line 3
            $context["heading_title"] = (($context["heading_title"] ?? null) . ((($context["display_weight"] ?? null)) ? ((("&nbsp;(<span id=\"weight\">" . ($context["weight"] ?? null)) . "</span>)")) : ("")));
            // line 4
            $this->loadTemplate(($context["simple_header"] ?? null), "default/template/checkout/simplecheckout.twig", 4)->display($context);
            // line 5
            echo "<style>
    ";
            // line 6
            if (($context["left_column_width"] ?? null)) {
                // line 7
                echo "        @media only screen and (min-width:1024px) {
            .simplecheckout-left-column {
                width: ";
                // line 9
                echo ($context["left_column_width"] ?? null);
                echo "%;
            }
        }
    ";
            }
            // line 13
            echo "    ";
            if (($context["right_column_width"] ?? null)) {
                // line 14
                echo "        @media only screen and (min-width:1024px) {
            .simplecheckout-right-column {
                width: ";
                // line 16
                echo ($context["right_column_width"] ?? null);
                echo "%;
            }
        }
    ";
            }
            // line 20
            echo "    ";
            if (($context["customer_with_payment_address"] ?? null)) {
                // line 21
                echo "        #simplecheckout_customer {
            margin-bottom: 0;
        }
        #simplecheckout_customer .simplecheckout-block-content {
            border-bottom-width: 0;
            padding-bottom: 0;
        }
        #simplecheckout_payment_address div.checkout-heading {
            display: none;
        }
        #simplecheckout_payment_address .simplecheckout-block-content {
            border-top-width: 0;
            padding-top: 0;
        }
    ";
            }
            // line 36
            echo "    ";
            if (($context["customer_with_shipping_address"] ?? null)) {
                // line 37
                echo "        #simplecheckout_customer {
            margin-bottom: 0;
        }
        #simplecheckout_customer .simplecheckout-block-content {
            border-bottom-width: 0;
            padding-bottom: 0;
        }
        #simplecheckout_shipping_address div.checkout-heading {
            display: none;
        }
        #simplecheckout_shipping_address .simplecheckout-block-content {
            border-top-width: 0;
            padding-top: 0;
        }
    ";
            }
            // line 52
            echo "</style>
<div class=\"simple-content\">
";
        }
        // line 55
        echo "    ";
        if (( !($context["ajax"] ?? null) || (($context["ajax"] ?? null) && ($context["popup"] ?? null)))) {
            // line 56
            echo "    <script type=\"text/javascript\">
        ";
            // line 57
            if (($context["popup"] ?? null)) {
                echo " 
            var simpleScriptsInterval = window.setInterval(function(){
                if (typeof jQuery !== 'undefined' && jQuery.isReady) {
                    window.clearInterval(simpleScriptsInterval);

                    if (typeof Simplecheckout !== \"function\") {
                        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["simple_scripts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                    // line 64
                    echo "                            \$(\"head\").append('<script src=\"' + '";
                    echo $context["script"];
                    echo "' + '\"></' + 'script>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
                        ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["simple_styles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                    // line 68
                    echo "                            \$(\"head\").append('<link href=\"' + '";
                    echo $context["style"];
                    echo "' + '\" rel=\"stylesheet\"/>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                         
                    }
                }
            },0);
        ";
            }
            // line 74
            echo "
        var startSimpleInterval_";
            // line 75
            echo ($context["group"] ?? null);
            echo " = window.setInterval(function(){
            if (typeof jQuery !== 'undefined' && typeof Simplecheckout === \"function\" && jQuery.isReady) {
                window.clearInterval(startSimpleInterval_";
            // line 77
            echo ($context["group"] ?? null);
            echo ");

                var simplecheckout_";
            // line 79
            echo ($context["group"] ?? null);
            echo " = new Simplecheckout({
                    mainRoute: \"checkout/simplecheckout\",
                    additionalParams: \"";
            // line 81
            echo ($context["additional_params"] ?? null);
            echo "\",
                    additionalPath: \"";
            // line 82
            echo ($context["additional_path"] ?? null);
            echo "\",
                    mainUrl: \"";
            // line 83
            echo ($context["action"] ?? null);
            echo "\",
                    mainContainer: \"#simplecheckout_form_";
            // line 84
            echo ($context["group"] ?? null);
            echo "\",
                    currentTheme: \"";
            // line 85
            echo ($context["current_theme"] ?? null);
            echo "\",
                    loginBoxBefore: \"";
            // line 86
            echo (((($context["login_type"] ?? null) == "flat")) ? ("#simplecheckout_customer .simplecheckout-block-content:first") : (""));
            echo "\",
                    displayProceedText: ";
            // line 87
            echo ((($context["display_proceed_text"] ?? null)) ? (1) : (0));
            echo ",
                    scrollToError: ";
            // line 88
            echo ((($context["scroll_to_error"] ?? null)) ? (1) : (0));
            echo ",
                    scrollToPaymentForm: ";
            // line 89
            echo ((($context["scroll_to_payment_form"] ?? null)) ? (1) : (0));
            echo ",
                    notificationDefault: ";
            // line 90
            echo ((($context["notification_default"] ?? null)) ? (1) : (0));
            echo ",
                    notificationToasts: ";
            // line 91
            echo ((($context["notification_toasts"] ?? null)) ? (1) : (0));
            echo ",
                    notificationCheckForm: ";
            // line 92
            echo ((($context["notification_check_form"] ?? null)) ? (1) : (0));
            echo ",
                    notificationCheckFormText: \"";
            // line 93
            echo ($context["notification_check_form_text"] ?? null);
            echo "\",
                    useAutocomplete: ";
            // line 94
            echo ((($context["use_autocomplete"] ?? null)) ? (1) : (0));
            echo ",
                    useStorage: ";
            // line 95
            echo ((($context["use_storage"] ?? null)) ? (1) : (0));
            echo ",
                    popup: ";
            // line 96
            echo (((($context["popup"] ?? null) || ($context["as_module"] ?? null))) ? (1) : (0));
            echo ",
                    agreementCheckboxStep: ";
            // line 97
            echo ((($context["agreement_checkbox_step"] ?? null)) ? (($context["agreement_checkbox_step"] ?? null)) : ("'0'"));
            echo ",
                    enableAutoReloaingOfPaymentFrom: ";
            // line 98
            echo ((($context["enable_reloading_of_payment_form"] ?? null)) ? (1) : (0));
            echo ",
                    javascriptCallback: function() {try{ ";
            // line 99
            echo ($context["javascript_callback"] ?? null);
            echo " } catch (e) {console.log(e)}},
                    stepButtons: ";
            // line 100
            echo ($context["step_buttons"] ?? null);
            echo ",
                    menuType: ";
            // line 101
            echo ((($context["menu_type"] ?? null)) ? (($context["menu_type"] ?? null)) : ("1"));
            echo ",
                    languageCode: \"";
            // line 102
            echo ($context["language_code"] ?? null);
            echo "\"
                });

                if (typeof toastr !== 'undefined') {
                    toastr.options.positionClass = \"";
            // line 106
            echo ((($context["notification_position"] ?? null)) ? (($context["notification_position"] ?? null)) : ("toast-top-right"));
            echo "\";
                    toastr.options.timeOut = \"";
            // line 107
            echo ((($context["notification_timeout"] ?? null)) ? (($context["notification_timeout"] ?? null)) : ("5000"));
            echo "\";
                    toastr.options.progressBar = true;
                }

                \$(document).ajaxComplete(function(e, xhr, settings) {
                    if (settings.url.indexOf(\"route=module/cart&remove\") > 0 || (settings.url.indexOf(\"route=module/cart\") > 0 && settings.type == \"POST\") || settings.url.indexOf(\"route=checkout/cart/add\") > 0 || settings.url.indexOf(\"route=checkout/cart/remove\") > 0) {
                        window.resetSimpleQuantity = true;
                        simplecheckout_";
            // line 114
            echo ($context["group"] ?? null);
            echo ".reloadAll();
                    }
                });

                \$(document).ajaxSend(function(e, xhr, settings) {
                    if (settings.url.indexOf(\"checkout/simplecheckout&group\") > 0 && typeof window.resetSimpleQuantity !== \"undefined\" && window.resetSimpleQuantity) {
                        settings.data = settings.data.replace(/quantity.+?&/g,\"\");
                        window.resetSimpleQuantity = false;
                    }
                });

                simplecheckout_";
            // line 125
            echo ($context["group"] ?? null);
            echo ".init();
                
            }
        },0);
    </script>
    ";
        }
        // line 131
        echo "    <div id=\"simplecheckout_form_";
        echo ($context["group"] ?? null);
        echo "\" ";
        echo (((($context["display_error"] ?? null) && ($context["has_error"] ?? null))) ? ("data-error=\"true\"") : (""));
        echo " ";
        echo ((($context["logged"] ?? null)) ? ("data-logged=\"true\"") : (""));
        echo ">
        <div class=\"simplecheckout\">
            ";
        // line 133
        if ( !($context["cart_empty"] ?? null)) {
            // line 134
            echo "                ";
            if ((($context["steps_count"] ?? null) > 1)) {
                // line 135
                echo "                    ";
                if ((($context["menu_type"] ?? null) == "2")) {
                    // line 136
                    echo "                        <div id=\"simplecheckout_step_menu\" class=\"simplecheckout-vertical-menu simplecheckout-top-menu\">
                            ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ($context["steps_count"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 138
                        echo "                                <div class=\"checkout-heading simple-step-vertical\" style=\"display:none\" data-onclick=\"gotoStep\" data-step=\"";
                        echo $context["i"];
                        echo "\"><h4 class=\"panel-title\">";
                        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["step_names"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["i"] - 1)] ?? null) : null);
                        echo "</h4></div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                        </div>
                    ";
                } else {
                    // line 142
                    echo "                        <div id=\"simplecheckout_step_menu\">
                            ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ($context["steps_count"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 144
                        echo "                                <span class=\"simple-step\" data-onclick=\"gotoStep\" data-step=\"";
                        echo $context["i"];
                        echo "\">";
                        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["step_names"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["i"] - 1)] ?? null) : null);
                        echo "</span>";
                        if (($context["i"] < ($context["steps_count"] ?? null))) {
                            echo "<span class=\"simple-step-delimiter\" data-step=\"";
                            echo ($context["i"] + 1);
                            echo "\"><img src=\"";
                            echo ($context["additional_path"] ?? null);
                            echo "catalog/view/image/next_gray.png\"></span>";
                        }
                        // line 145
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                        </div>
                    ";
                }
                // line 148
                echo "                ";
            }
            // line 149
            echo "
                ";
            // line 150
            if (((($context["steps_count"] ?? null) > 1) && (($context["menu_type"] ?? null) == "2"))) {
                // line 151
                echo "                    <div class=\"simplecheckout-steps-wrapper\">
                ";
            }
            // line 153
            echo "
                ";
            // line 154
            if (( !twig_test_empty(($context["errors"] ?? null)) && ($context["display_error"] ?? null))) {
                // line 155
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 156
                    echo "                        <div class=\"alert alert-danger simplecheckout-warning-block\" data-error=\"true\">
                            ";
                    // line 157
                    echo $context["error"];
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                 
                ";
            }
            // line 161
            echo "
                ";
            // line 163
            $context["replace"] = ["{three_column}" => "<div class=\"simplecheckout-three-column\">", "{/three_column}" => "</div>", "{left_column}" => "<div class=\"simplecheckout-left-column\">", "{/left_column}" => "</div>", "{right_column}" => "<div class=\"simplecheckout-right-column\">", "{/right_column}" => "</div>", "{step}" => "<div class=\"simplecheckout-step\">", "{/step}" => "</div>", "{clear_both}" => "<div style=\"width:100%;clear:both;height:1px\"></div>", "{customer}" => (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =             // line 173
($context["simple_blocks"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["customer"] ?? null) : null), "{payment_address}" => (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 =             // line 174
($context["simple_blocks"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["payment_address"] ?? null) : null), "{shipping_address}" => (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 =             // line 175
($context["simple_blocks"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["shipping_address"] ?? null) : null), "{cart}" => (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 =             // line 176
($context["simple_blocks"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["cart"] ?? null) : null), "{shipping}" => (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e =             // line 177
($context["simple_blocks"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["shipping"] ?? null) : null), "{payment}" => (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 =             // line 178
($context["simple_blocks"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["payment"] ?? null) : null), "{agreement}" => (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 =             // line 179
($context["simple_blocks"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["agreement"] ?? null) : null), "{help}" => (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 =             // line 180
($context["simple_blocks"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["help"] ?? null) : null), "{summary}" => (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 =             // line 181
($context["simple_blocks"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["summary"] ?? null) : null), "{comment}" => (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae =             // line 182
($context["simple_blocks"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["comment"] ?? null) : null), "{payment_form}" => (("<div class=\"simplecheckout-block\" id=\"simplecheckout_payment_form\">" . (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f =             // line 183
($context["simple_blocks"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["payment_form"] ?? null) : null)) . "</div>")];
            // line 186
            echo "
                ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["simple_blocks"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 188
                echo "                    ";
                $context["key_clear"] = $context["key"];
                // line 189
                echo "                    ";
                $context["key"] = (("{" . $context["key"]) . "}");
                // line 190
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["replace"] ?? null), $context["key"], [], "array", true, true, false, 190)) {
                    // line 191
                    echo "                        ";
                    $context["replace"] = twig_array_merge(($context["replace"] ?? null), [$context["key"] => (((("<div class=\"simplecheckout-block\" id=\"" . ($context["key_clear"] ?? null)) . "\">") . $context["value"]) . "</div>")]);
                    // line 192
                    echo "                    ";
                }
                // line 193
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "
                ";
            // line 195
            echo twig_replace_filter(($context["simple_template"] ?? null), ($context["replace"] ?? null));
            echo "
                
                <div id=\"simplecheckout_bottom\" style=\"width:100%;height:1px;clear:both;\"></div>
                <div class=\"simplecheckout-proceed-payment\" id=\"simplecheckout_proceed_payment\" style=\"display:none;\">";
            // line 198
            echo ($context["text_proceed_payment"] ?? null);
            echo "</div>
                
                ";
            // line 200
            if (($context["display_agreement_checkbox"] ?? null)) {
                // line 201
                echo "                    <div class=\"alert alert-danger simplecheckout-warning-block\" id=\"agreement_warning\" ";
                if ((($context["display_error"] ?? null) && ($context["has_error"] ?? null))) {
                    echo "data-error=\"true\"";
                } else {
                    echo "style=\"display:none;\"";
                }
                echo ">
                        <div class=\"agreement_all\">
                            ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["error_warning_agreement"] ?? null));
                foreach ($context['_seq'] as $context["agreement_id"] => $context["warning_agreement"]) {
                    // line 204
                    echo "                                <div class=\"agreement_";
                    echo $context["agreement_id"];
                    echo "\">";
                    echo $context["warning_agreement"];
                    echo "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['warning_agreement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "                        </div>                    
                    </div>
                ";
            }
            // line 208
            echo "  

                <div class=\"simplecheckout-button-block buttons\" id=\"buttons\">
                    <div class=\"simplecheckout-button-right\">
                        ";
            // line 212
            if (($context["display_agreement_checkbox"] ?? null)) {
                // line 213
                echo "                            <span id=\"agreement_checkbox\">
                                ";
                // line 214
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["text_agreements"] ?? null));
                foreach ($context['_seq'] as $context["agreement_id"] => $context["text_agreement"]) {
                    // line 215
                    echo "                                    <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"";
                    echo $context["agreement_id"];
                    echo "\" ";
                    echo ((twig_in_filter($context["agreement_id"], ($context["agreements"] ?? null))) ? ("checked=\"checked\"") : (""));
                    echo " />";
                    echo $context["text_agreement"];
                    echo "</label></div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['text_agreement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "                            </span>
                        ";
            }
            // line 218
            echo "                
                        ";
            // line 219
            if ((($context["steps_count"] ?? null) > 1)) {
                // line 220
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"nextStep\" id=\"simplecheckout_button_next\"><span>";
                echo ($context["button_next"] ?? null);
                echo "</span></a>
                        ";
            }
            // line 222
            echo "                        <a class=\"button btn-primary button_oc btn\" ";
            echo ((($context["block_order"] ?? null)) ? ("disabled") : (""));
            echo " data-onclick=\"createOrder\" id=\"simplecheckout_button_confirm\"><span>";
            echo ($context["button_order"] ?? null);
            echo "</span></a>
                    </div>
                    <div class=\"simplecheckout-button-left\">
                        ";
            // line 225
            if (($context["display_back_button"] ?? null)) {
                // line 226
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"backHistory\" id=\"simplecheckout_button_back\"><span>";
                echo ($context["button_back"] ?? null);
                echo "</span></a>
                        ";
            }
            // line 228
            echo "                        ";
            if ((($context["steps_count"] ?? null) > 1)) {
                // line 229
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"previousStep\" id=\"simplecheckout_button_prev\"><span>";
                echo ($context["button_prev"] ?? null);
                echo "</span></a>
                        ";
            }
            // line 231
            echo "                    </div>
                </div>    

                ";
            // line 234
            if (((($context["steps_count"] ?? null) > 1) && (($context["menu_type"] ?? null) == "2"))) {
                // line 235
                echo "                    </div>
                ";
            }
            // line 237
            echo "                
                ";
            // line 238
            if (((($context["steps_count"] ?? null) > 1) && (($context["menu_type"] ?? null) == "2"))) {
                // line 239
                echo "                    <div id=\"simplecheckout_step_menu\" class=\"simplecheckout-vertical-menu simplecheckout-bottom-menu\">
                        ";
                // line 240
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["steps_count"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 241
                    echo "                            <div class=\"checkout-heading simple-step-vertical\" style=\"display:none\" data-onclick=\"gotoStep\" data-step=\"";
                    echo $context["i"];
                    echo "\"><h4 class=\"panel-title\">";
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["step_names"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["i"] - 1)] ?? null) : null);
                    echo "</h4></div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                echo "                    </div>
                ";
            }
            // line 244
            echo "           
            
            ";
        } else {
            // line 247
            echo "                <div class=\"content\">";
            echo ($context["text_error"] ?? null);
            echo "</div>
                <div style=\"display:none;\" id=\"simplecheckout_cart_total\">";
            // line 248
            echo ($context["cart_total"] ?? null);
            echo "</div>
                ";
            // line 249
            if (($context["display_weight"] ?? null)) {
                // line 250
                echo "                    <div style=\"display:none;\" id=\"simplecheckout_cart_weight\">";
                echo ($context["weight"] ?? null);
                echo "</div>
                ";
            }
            // line 252
            echo "                ";
            if (( !($context["popup"] ?? null) &&  !($context["as_module"] ?? null))) {
                // line 253
                echo "                    <div class=\"simplecheckout-button-block buttons\">
                        <div class=\"simplecheckout-button-right right\"><a href=\"";
                // line 254
                echo ($context["continue"] ?? null);
                echo "\" class=\"button btn-primary button_oc btn\"><span>";
                echo ($context["button_continue"] ?? null);
                echo "</span></a></div>
                    </div>
                ";
            }
            // line 257
            echo "            ";
        }
        // line 258
        echo "        </div>
    </div>
";
        // line 260
        if ((( !($context["ajax"] ?? null) &&  !($context["popup"] ?? null)) &&  !($context["as_module"] ?? null))) {
            // line 261
            echo "</div>
";
            // line 262
            $this->loadTemplate(($context["simple_footer"] ?? null), "default/template/checkout/simplecheckout.twig", 262)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 262,  667 => 261,  665 => 260,  661 => 258,  658 => 257,  650 => 254,  647 => 253,  644 => 252,  638 => 250,  636 => 249,  632 => 248,  627 => 247,  622 => 244,  618 => 243,  607 => 241,  603 => 240,  600 => 239,  598 => 238,  595 => 237,  591 => 235,  589 => 234,  584 => 231,  578 => 229,  575 => 228,  569 => 226,  567 => 225,  558 => 222,  552 => 220,  550 => 219,  547 => 218,  543 => 217,  530 => 215,  526 => 214,  523 => 213,  521 => 212,  515 => 208,  510 => 206,  499 => 204,  495 => 203,  485 => 201,  483 => 200,  478 => 198,  472 => 195,  469 => 194,  463 => 193,  460 => 192,  457 => 191,  454 => 190,  451 => 189,  448 => 188,  444 => 187,  441 => 186,  439 => 183,  438 => 182,  437 => 181,  436 => 180,  435 => 179,  434 => 178,  433 => 177,  432 => 176,  431 => 175,  430 => 174,  429 => 173,  428 => 163,  425 => 161,  421 => 159,  412 => 157,  409 => 156,  404 => 155,  402 => 154,  399 => 153,  395 => 151,  393 => 150,  390 => 149,  387 => 148,  383 => 146,  377 => 145,  364 => 144,  360 => 143,  357 => 142,  353 => 140,  342 => 138,  338 => 137,  335 => 136,  332 => 135,  329 => 134,  327 => 133,  317 => 131,  308 => 125,  294 => 114,  284 => 107,  280 => 106,  273 => 102,  269 => 101,  265 => 100,  261 => 99,  257 => 98,  253 => 97,  249 => 96,  245 => 95,  241 => 94,  237 => 93,  233 => 92,  229 => 91,  225 => 90,  221 => 89,  217 => 88,  213 => 87,  209 => 86,  205 => 85,  201 => 84,  197 => 83,  193 => 82,  189 => 81,  184 => 79,  179 => 77,  174 => 75,  171 => 74,  164 => 69,  155 => 68,  151 => 67,  148 => 66,  139 => 64,  135 => 63,  126 => 57,  123 => 56,  120 => 55,  115 => 52,  98 => 37,  95 => 36,  78 => 21,  75 => 20,  68 => 16,  64 => 14,  61 => 13,  54 => 9,  50 => 7,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/simplecheckout.twig", "");
    }
}
