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

/* default/template/common/buyoneclick.twig */
class __TwigTemplate_c9abba8a14ba4aedf91abc92c1560b900707913d6c3498aaeae282f4a87d2903 extends \Twig\Template
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
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button class=\"close\" type=\"button\" data-dismiss=\"modal\">×</button>
      <h2 id=\"boc_order_title\" class=\"modal-title\">";
        // line 5
        echo ($context["buyoneclick_title"] ?? null);
        echo "</h2>
    </div>
    <div class=\"modal-body\">
      <form id=\"boc_form\" action=\"\" role=\"form\">
        <fieldset>
          ";
        // line 10
        if (($context["buyoneclick_exan_status"] ?? null)) {
            // line 11
            echo "          <div id=\"source\" style=\"display:none\">
            <input id=\"sb_first_typ\" class=\"hidden\" type=\"text\" name=\"sb_first_typ\" value=\"\">
            <input id=\"sb_first_src\" class=\"hidden\" type=\"text\" name=\"sb_first_src\" value=\"\">
            <input id=\"sb_first_mdm\" class=\"hidden\" type=\"text\" name=\"sb_first_mdm\" value=\"\">
            <input id=\"sb_first_cmp\" class=\"hidden\" type=\"text\" name=\"sb_first_cmp\" value=\"\">
            <input id=\"sb_first_cnt\" class=\"hidden\" type=\"text\" name=\"sb_first_cnt\" value=\"\">
            <input id=\"sb_first_trm\" class=\"hidden\" type=\"text\" name=\"sb_first_trm\" value=\"\">
            <input id=\"sb_current_typ\" class=\"hidden\" type=\"text\" name=\"sb_current_typ\" value=\"\">
            <input id=\"sb_current_src\" class=\"hidden\" type=\"text\" name=\"sb_current_src\" value=\"\">
            <input id=\"sb_current_mdm\" class=\"hidden\" type=\"text\" name=\"sb_current_mdm\" value=\"\">
            <input id=\"sb_current_cmp\" class=\"hidden\" type=\"text\" name=\"sb_current_cmp\" value=\"\">
            <input id=\"sb_current_cnt\" class=\"hidden\" type=\"text\" name=\"sb_current_cnt\" value=\"\">
            <input id=\"sb_current_trm\" class=\"hidden\" type=\"text\" name=\"sb_current_trm\" value=\"\">
            <input id=\"sb_first_add_fd\" class=\"hidden\" type=\"text\" name=\"sb_first_add_fd\" value=\"\">
            <input id=\"sb_first_add_ep\" class=\"hidden\" type=\"text\" name=\"sb_first_add_ep\" value=\"\">
            <input id=\"sb_first_add_rf\" class=\"hidden\" type=\"text\" name=\"sb_first_add_rf\" value=\"\">
            <input id=\"sb_current_add_fd\" class=\"hidden\" type=\"text\" name=\"sb_current_add_fd\" value=\"\">
            <input id=\"sb_current_add_ep\" class=\"hidden\" type=\"text\" name=\"sb_current_add_ep\" value=\"\">
            <input id=\"sb_current_add_rf\" class=\"hidden\" type=\"text\" name=\"sb_current_add_rf\" value=\"\">
            <input id=\"sb_session_pgs\" class=\"hidden\" type=\"text\" name=\"sb_session_pgs\" value=\"\">
            <input id=\"sb_session_cpg\" class=\"hidden\" type=\"text\" name=\"sb_session_cpg\" value=\"\">
            <input id=\"sb_udata_vst\" class=\"hidden\" type=\"text\" name=\"sb_udata_vst\" value=\"\">
            <input id=\"sb_udata_uip\" class=\"hidden\" type=\"text\" name=\"sb_udata_uip\" value=\"\">
            <input id=\"sb_udata_uag\" class=\"hidden\" type=\"text\" name=\"sb_udata_uag\" value=\"\">
            <input id=\"sb_promo_code\" class=\"hidden\" type=\"text\" name=\"sb_promo_code\" value=\"\">
          </div>
          ";
        }
        // line 38
        echo "          <div id=\"boc_product_field\" class=\"col-pd-15 col-mb-10\">
            <div class=\"row boc_product_info\">
              ";
        // line 40
        if (($context["product"] ?? null)) {
            // line 41
            echo "              <div class=\"col-xs-12 col-sm-3\">
                <img src=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 42);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 42);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 42);
            echo "\" class=\"img-responsive\" />
              </div>
              <div class=\"col-xs-12 col-sm-9\">
                <div class=\"caption\">
                  <h4>";
            // line 46
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 46);
            echo "</h4>
                  ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "option", [], "any", false, false, false, 47)) {
                // line 48
                echo "                  <div class=\"product_options\">
                    ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "option", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 50
                    echo "                    - <small>
                    ";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 51);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 51);
                    echo "
                    ";
                    // line 52
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "value_price", [], "any", false, false, false, 52)) {
                        echo " (";
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value_price_prefix", [], "any", false, false, false, 52);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value_price", [], "any", false, false, false, 52);
                        echo " ";
                        echo ")";
                        echo " ";
                    }
                    // line 53
                    echo "                    </small>
                    <br />
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                  </div>
                  ";
            }
            // line 58
            echo "                  <p>x ";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 58);
            echo " = ";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "total", [], "any", false, false, false, 58);
            echo "</p>
                </div>
              </div>
              ";
        } else {
            // line 62
            echo "              <div class=\"col-xs-12\">
                <p class=\"text-center\">";
            // line 63
            echo ($context["text_empty"] ?? null);
            echo "</p>
              </div>
              ";
        }
        // line 66
        echo "            </div>
            ";
        // line 67
        if ((($context["stock"] ?? null) != "")) {
            // line 68
            echo "            <div class=\"row\">
              <div class=\"col-xs-12\">
                <div class=\"text-left text-danger\"><i class=\"fa fa-exclamation-circle\"></i> <strong>";
            // line 70
            echo ($context["stock"] ?? null);
            echo "</strong></p></div>
              </div>
              ";
        }
        // line 73
        echo "            </div>
            <div class=\"clearfix\"></div>
            <div class=\"col-pd-15\">
              <hr />
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"col-pd-15\">
              <div style=\"display:none\">
                <input id=\"boc_product_id\" type=\"text\" name=\"boc_product_id\">
              </div>
              ";
        // line 83
        if (($context["buyoneclick_field1_status"] ?? null)) {
            // line 84
            echo "              <div class=\"col-mb-10 ";
            echo ((($context["buyoneclick_field1_required"] ?? null)) ? (" has-warning") : (""));
            echo "\">
                <input id=\"boc_name\" class=\"form-control ";
            // line 85
            echo ((($context["buyoneclick_field1_required"] ?? null)) ? (" required") : (""));
            echo "\" type=\"text\" name=\"boc_name\" placeholder=\"";
            echo ($context["buyoneclick_field1_title"] ?? null);
            echo "\" value=\"";
            if ((array_key_exists("customer_info", $context) && ((twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 85) != "") || (twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 85) != "")))) {
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "firstname", [], "any", false, false, false, 85);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "lastname", [], "any", false, false, false, 85);
            }
            echo "\" >
              </div>
              ";
        }
        // line 88
        echo "              ";
        if (($context["buyoneclick_field2_status"] ?? null)) {
            // line 89
            echo "              <div class=\"col-mb-10 ";
            echo ((($context["buyoneclick_field2_required"] ?? null)) ? (" has-warning") : (""));
            echo "\">
                <input id=\"boc_phone\" class=\"form-control ";
            // line 90
            echo ((($context["buyoneclick_field2_required"] ?? null)) ? (" required") : (""));
            echo "\" type=\"tel\" name=\"boc_phone\" placeholder=\"";
            if (($context["buyoneclick_validation_type"] ?? null)) {
                echo ($context["buyoneclick_validation_type"] ?? null);
            } else {
                echo ($context["buyoneclick_field2_title"] ?? null);
            }
            echo "\" ";
            if (($context["buyoneclick_validation_type"] ?? null)) {
                echo " data-pattern=\"true\"";
            } else {
                echo " data-pattern=\"false\"";
                echo " ";
            }
            echo " value=\"";
            if ((array_key_exists("customer_info", $context) && (twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 90) != ""))) {
                echo twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "telephone", [], "any", false, false, false, 90);
                echo " ";
            }
            echo "\" >
              </div>
              ";
        }
        // line 93
        echo "              ";
        if (($context["buyoneclick_field3_status"] ?? null)) {
            // line 94
            echo "              <div class=\"col-mb-10 ";
            echo ((($context["buyoneclick_field3_required"] ?? null)) ? (" has-warning") : (""));
            echo "\">
                <input id=\"boc_email\" class=\"form-control ";
            // line 95
            echo ((($context["buyoneclick_field3_required"] ?? null)) ? (" required") : (""));
            echo "\" type=\"email\" name=\"boc_email\" placeholder=\"";
            echo ($context["buyoneclick_field3_title"] ?? null);
            echo "\" value=\"";
            echo (((($context["customer_info"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "email", [], "any", false, false, false, 95) != ""))) ? (twig_get_attribute($this->env, $this->source, ($context["customer_info"] ?? null), "email", [], "any", false, false, false, 95)) : (""));
            echo "\" >
              </div>
              ";
        }
        // line 98
        echo "              ";
        if (($context["buyoneclick_field4_status"] ?? null)) {
            // line 99
            echo "              <div class=\"col-mb-10 ";
            echo ((($context["buyoneclick_field4_required"] ?? null)) ? (" has-warning") : (""));
            echo "\">
                <textarea id=\"boc_message\" class=\"form-control ";
            // line 100
            echo ((($context["buyoneclick_field4_required"] ?? null)) ? (" required") : (""));
            echo "\" name=\"boc_message\" rows=\"3\" placeholder=\"";
            echo ($context["buyoneclick_field4_title"] ?? null);
            echo "\" ></textarea>
              </div>
              ";
        }
        // line 103
        echo "              ";
        if (($context["buyoneclick_agree_status"] ?? null)) {
            // line 104
            echo "              <div class=\"col-mb-10 checkbox\">
                <label>
                  <input id=\"boc_agree\" type=\"checkbox\" name=\"boc_agree\" class=\"required\" value=\"1\"> ";
            // line 106
            echo ($context["buyoneclick_text_agree"] ?? null);
            echo "
                </label>
              </div>
              ";
        }
        // line 110
        echo "            </div>
            <div class=\"clearfix\"></div>
            <div class=\"col-pd-15\">
              <hr />
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"col-pd-15\">
              <button type=\"submit\" id=\"boc_submit\" class=\"btn btn-lg btn-block btn-primary\" style=\"max-width:250px; margin:0 auto;\" onClick=\"clickAnalyticsSend(); return true;\">";
        // line 117
        echo ($context["buyoneclick_button_order"] ?? null);
        echo "</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/buyoneclick.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 117,  294 => 110,  287 => 106,  283 => 104,  280 => 103,  272 => 100,  267 => 99,  264 => 98,  254 => 95,  249 => 94,  246 => 93,  222 => 90,  217 => 89,  214 => 88,  200 => 85,  195 => 84,  193 => 83,  181 => 73,  175 => 70,  171 => 68,  169 => 67,  166 => 66,  160 => 63,  157 => 62,  147 => 58,  143 => 56,  135 => 53,  124 => 52,  118 => 51,  115 => 50,  111 => 49,  108 => 48,  106 => 47,  102 => 46,  91 => 42,  88 => 41,  86 => 40,  82 => 38,  53 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/buyoneclick.twig", "");
    }
}
