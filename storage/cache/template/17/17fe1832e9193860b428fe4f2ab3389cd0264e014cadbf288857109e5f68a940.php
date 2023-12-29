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

/* default/template/account/simpleregister.twig */
class __TwigTemplate_f28c23671155ab675b7df0f8159e85bdab234a799596aaed769e23f6526049f2 extends \Twig\Template
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
            $context["simple_page"] = "simpleregister";
            // line 3
            $this->loadTemplate(($context["simple_header"] ?? null), "default/template/account/simpleregister.twig", 3)->display($context);
            // line 4
            echo "<div class=\"simple-content\">
";
        }
        // line 6
        echo "    ";
        if (( !($context["ajax"] ?? null) || (($context["ajax"] ?? null) && ($context["popup"] ?? null)))) {
            // line 7
            echo "    <script type=\"text/javascript\">
        ";
            // line 8
            if (($context["popup"] ?? null)) {
                echo " 
            var simpleScriptsInterval = window.setInterval(function(){
                if (typeof jQuery !== 'undefined' && jQuery.isReady) {
                    window.clearInterval(simpleScriptsInterval);

                    if (typeof Simplepage !== \"function\") {
                        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["simple_scripts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                    // line 15
                    echo "                            \$(\"head\").append('<script src=\"' + '";
                    echo $context["script"];
                    echo "' + '\"></' + 'script>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["simple_styles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                    // line 19
                    echo "                            \$(\"head\").append('<link href=\"' + '";
                    echo $context["style"];
                    echo "' + '\" rel=\"stylesheet\"/>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                         
                    }
                }
            },0);
        ";
            }
            // line 25
            echo "
        var startSimpleInterval = window.setInterval(function(){
            if (typeof jQuery !== 'undefined' && typeof Simplepage === \"function\" && jQuery.isReady) {
                window.clearInterval(startSimpleInterval);
                
                var simplepage = new Simplepage({
                    additionalParams: \"";
            // line 31
            echo ($context["additional_params"] ?? null);
            echo "\",
                    additionalPath: \"";
            // line 32
            echo ($context["additional_path"] ?? null);
            echo "\",
                    mainUrl: \"";
            // line 33
            echo ($context["action"] ?? null);
            echo "\",
                    mainContainer: \"#simplepage_form\",
                    useAutocomplete: ";
            // line 35
            echo ((($context["use_autocomplete"] ?? null)) ? (1) : (0));
            echo ",
                    scrollToError: ";
            // line 36
            echo ((($context["scroll_to_error"] ?? null)) ? (1) : (0));
            echo ",
                    notificationDefault: ";
            // line 37
            echo ((($context["notification_default"] ?? null)) ? (1) : (0));
            echo ",
                    notificationToasts: ";
            // line 38
            echo ((($context["notification_toasts"] ?? null)) ? (1) : (0));
            echo ",
                    notificationCheckForm: ";
            // line 39
            echo ((($context["notification_check_form"] ?? null)) ? (1) : (0));
            echo ",
                    notificationCheckFormText: \"";
            // line 40
            echo ($context["notification_check_form_text"] ?? null);
            echo "\",
                    languageCode: \"";
            // line 41
            echo ($context["language_code"] ?? null);
            echo "\",
                    javascriptCallback: function() { ";
            // line 42
            echo ($context["javascript_callback"] ?? null);
            echo " }
                });

                if (typeof toastr !== 'undefined') {
                    toastr.options.positionClass = \"";
            // line 46
            echo ((($context["notification_position"] ?? null)) ? (($context["notification_position"] ?? null)) : ("toast-top-right"));
            echo "\";
                    toastr.options.timeOut = \"";
            // line 47
            echo ((($context["notification_timeout"] ?? null)) ? (($context["notification_timeout"] ?? null)) : ("5000"));
            echo "\";
                    toastr.options.progressBar = true;
                }

                simplepage.init();
            }
        },0);
    </script>
    ";
        }
        // line 56
        echo "    <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"simplepage_form\">
        <div class=\"simpleregister\" id=\"simpleregister\">
            <p class=\"simpleregister-have-account\">";
        // line 58
        echo ($context["text_account_already"] ?? null);
        echo "</p>

\t\t\t
\t\t\t\t";
        // line 61
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["SOCNETAUTH2_DATA"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null);
        echo "
\t\t\t  
            
            ";
        // line 64
        if (($context["error_warning"] ?? null)) {
            // line 65
            echo "            <div class=\"warning alert alert-danger\">";
            echo ($context["error_warning"] ?? null);
            echo "</div>
            ";
        }
        // line 67
        echo "            <div class=\"simpleregister-block-content\">
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 69
            echo "                  ";
            echo $context["row"];
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hidden_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 72
            echo "                  ";
            echo $context["row"];
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </div>

            ";
        // line 76
        if (($context["display_agreement_checkbox"] ?? null)) {
            // line 77
            echo "                <div class=\"alert alert-danger simpleregister-warning-block\" id=\"agreement_warning\" ";
            if (($context["error_agreement"] ?? null)) {
                echo "data-error=\"true\"";
            } else {
                echo "style=\"display:none;\"";
            }
            echo ">
                    <div class=\"agreement_all\">
                        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["error_warning_agreement"] ?? null));
            foreach ($context['_seq'] as $context["agreement_id"] => $context["warning_agreement"]) {
                // line 80
                echo "                            <div class=\"agreement_";
                echo $context["agreement_id"];
                echo "\">";
                echo $context["warning_agreement"];
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['warning_agreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    </div>                    
                </div>
            ";
        }
        // line 84
        echo "  

            <div class=\"simpleregister-button-block buttons\">
                <div class=\"simpleregister-button-right\">
                    ";
        // line 88
        if (($context["display_agreement_checkbox"] ?? null)) {
            // line 89
            echo "                        <span id=\"agreement_checkbox\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["text_agreements"] ?? null));
            foreach ($context['_seq'] as $context["agreement_id"] => $context["text_agreement"]) {
                // line 91
                echo "                                <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"";
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
            // line 93
            echo "                        </span>
                    ";
        }
        // line 95
        echo "
                    <a class=\"button btn-primary button_oc btn\" data-onclick=\"submit\" id=\"simpleregister_button_confirm\"><span>";
        // line 96
        echo ($context["button_continue"] ?? null);
        echo "</span></a>
                </div>
            </div>
        </div>
        ";
        // line 100
        if (($context["redirect"] ?? null)) {
            // line 101
            echo "            <input type=\"hidden\" id=\"simple_redirect_url\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\">
        ";
        }
        // line 103
        echo "    </form>
";
        // line 104
        if ((( !($context["ajax"] ?? null) &&  !($context["popup"] ?? null)) &&  !($context["as_module"] ?? null))) {
            // line 105
            echo "</div>
";
            // line 106
            $this->loadTemplate(($context["simple_footer"] ?? null), "default/template/account/simpleregister.twig", 106)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "default/template/account/simpleregister.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 106,  317 => 105,  315 => 104,  312 => 103,  306 => 101,  304 => 100,  297 => 96,  294 => 95,  290 => 93,  277 => 91,  273 => 90,  270 => 89,  268 => 88,  262 => 84,  257 => 82,  246 => 80,  242 => 79,  232 => 77,  230 => 76,  226 => 74,  217 => 72,  212 => 71,  203 => 69,  199 => 68,  196 => 67,  190 => 65,  188 => 64,  182 => 61,  176 => 58,  170 => 56,  158 => 47,  154 => 46,  147 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  114 => 33,  110 => 32,  106 => 31,  98 => 25,  91 => 20,  82 => 19,  78 => 18,  75 => 17,  66 => 15,  62 => 14,  53 => 8,  50 => 7,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/simpleregister.twig", "");
    }
}
