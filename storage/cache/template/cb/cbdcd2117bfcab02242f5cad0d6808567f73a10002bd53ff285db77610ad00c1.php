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

/* default/template/extension/module/cheaper30.twig */
class __TwigTemplate_56904eb4cc25b995990e69e38eb7bca52fbac71daa6e5df1ba90ef54cb23a71b extends \Twig\Template
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
        if ( !($context["type_view"] ?? null)) {
            echo "<div class=\"close-cheaper\" onclick=\"return closedivshadow";
            echo ($context["module_id"] ?? null);
            echo "(); return false;\"><svg class=\"svg-icon-cheaper\"><use xlink:href=\"/catalog/view/javascript/cheaper30/icons.svg#svg-close\"/></svg></div>";
        }
        // line 2
        echo "<div class=\"option-div option-div";
        echo ($context["module_id"] ?? null);
        echo "\">
  <div class=\"row\">
\t<div class=\"col-sm-12 col-xs-12\"><h3 class=\"text-left\">";
        // line 4
        echo ($context["text_cheaper_h1"] ?? null);
        echo "</h3></div>
\t";
        // line 5
        if (($context["product_id"] ?? null)) {
            // line 6
            echo "\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-3 col-xm-12\">
\t\t\t<div class=\"image\">
\t\t\t\t";
            // line 8
            if (($context["image"] ?? null)) {
                echo "<a href=\"";
                echo ($context["href"] ?? null);
                echo "\" title=\"\"><img src=\"";
                echo ($context["image"] ?? null);
                echo "\" alt=\"\" title=\"\" id=\"images\" class=\"img-responsive\" /></a>";
            }
            // line 9
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-9 col-xm-12 border-right\">
\t\t\t<h4 class=\"text-left\">";
            // line 12
            echo ($context["text_cheaper_h4"] ?? null);
            echo "</h4>
\t\t\t<br />
\t\t\t<h3>";
            // line 14
            echo ($context["name"] ?? null);
            echo "</h3>
\t\t\t";
            // line 15
            if (($context["price"] ?? null)) {
                // line 16
                echo "\t\t\t<span class=\"price\">
\t\t\t  <ul class=\"list-unstyled text-left\">
\t\t\t\t";
                // line 18
                if ((($context["special"] ?? null) == false)) {
                    // line 19
                    echo "\t\t\t\t<li>
\t\t\t\t  <h2>";
                    // line 20
                    echo ($context["price"] ?? null);
                    echo "</h2>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t<li>
\t\t\t\t  <h2>";
                    // line 24
                    echo ($context["special"] ?? null);
                    echo "</h2><span style=\"text-decoration: line-through;\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t</li>
\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 28
                    echo "\t\t\t\t<li>";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</li>
\t\t\t\t";
                }
                // line 30
                echo "\t\t\t  </ul>
\t\t\t</span>
\t\t\t";
            }
            // line 33
            echo "\t\t\t<input type=\"hidden\" id=\"price\" value=\"";
            echo ($context["pr"] ?? null);
            echo "\" />
\t\t</div>
\t";
        } else {
            // line 36
            echo "\t<div class=\"col-sm-12 col-xs-12\">
\t\t<h4 class=\"text-left\">";
            // line 37
            echo ($context["text_cheaper_h4"] ?? null);
            echo "</h4>
\t</div>
\t";
        }
        // line 40
        echo "</div>
<form class=\"\" action=\"\" method=\"post\" id=\"cheaperForm";
        // line 41
        echo ($context["module_id"] ?? null);
        echo "\">
\t<div class=\"option-div product\">
\t\t<div class=\"clearfix\"></div>
\t\t<div class=\"forming_quick col\">
\t\t  <div class=\"row\">
\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"input_date\" id=\"input_date\" value=\"";
        // line 46
        echo ($context["date"] ?? null);
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"input_product_id\" id=\"input_product_id\" value=\"";
        // line 47
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t";
        // line 48
        if (($context["fields"] ?? null)) {
            // line 49
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 50
                echo "\t\t\t\t\t<div class=\"col-sm-12 form-group col-block\">
\t\t\t\t\t\t<div class=\"input-group";
                // line 51
                if (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 51) == "radio") || (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 51) == "checked"))) {
                    echo " border-block-module";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 52) == "text")) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 53)) {
                        echo "<span class=\"input-group-addon input_field";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 53);
                        echo "\"><i class=\"fa fa-";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 53);
                        echo "\"></i></span>";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 54) == "date")) {
                        echo " date";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 54) == "time")) {
                        echo " time";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 54) == "datetime")) {
                        echo " datetime";
                    }
                    echo " form-required-module\" name=\"input_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 54);
                    echo "]\" id=\"input_field";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 54);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 54);
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 54)) {
                        echo ($context["text_cheaper30_required"] ?? null);
                    }
                    echo "\" value=\"\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 54) == "date")) {
                        echo " data-date-format=\"DD/MM/YYYY\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 54) == "time")) {
                        echo " data-time-format=\"HH/MM\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 54) == "datetime")) {
                        echo " data-datetime-format=\"DD/MM/YYYY HH/MM\"";
                    }
                    echo " />
\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 56) == "textarea")) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 57)) {
                        echo "<span class=\"input-group-addon input_field";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 57);
                        echo "\"><i class=\"fa fa-";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 57);
                        echo "\"></i></span>";
                    }
                    // line 58
                    echo "\t\t\t\t\t\t\t\t<textarea type=\"text\" class=\"form-control form-required-module\" name=\"input_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 58);
                    echo "]\" id=\"input_field";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 58);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 58);
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 58)) {
                        echo ($context["text_cheaper30_required"] ?? null);
                    }
                    echo "\"></textarea>
\t\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 60) == "select")) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "query_value", [], "any", false, false, false, 61)) {
                        // line 62
                        echo "\t\t\t\t\t\t\t\t<div class=\"margin-bottom-module\"><i class=\"fa fa-";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 62);
                        echo "\"></i>&nbsp;&nbsp;<strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 62);
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 62)) {
                            echo ($context["text_cheaper30_required"] ?? null);
                        }
                        echo "</strong></div>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<select name=\"input_field[";
                        // line 64
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 64);
                        echo "][]\" class=\"form-control form-required-module\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"> ";
                        // line 65
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        // line 66
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "query_value", [], "any", false, false, false, 66));
                        foreach ($context['_seq'] as $context["_key"] => $context["select_value"]) {
                            // line 67
                            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $context["select_value"];
                            echo "\"> ";
                            echo $context["select_value"];
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 73) == "radio")) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "query_value", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "\t\t\t\t\t\t\t\t<div class=\"margin-bottom-module\"><i class=\"fa fa-";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 75);
                        echo "\"></i>&nbsp;&nbsp;<strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 75);
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 75)) {
                            echo ($context["text_cheaper30_required"] ?? null);
                        }
                        echo "</strong></div>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
                        // line 77
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "query_value", [], "any", false, false, false, 77));
                        foreach ($context['_seq'] as $context["_key"] => $context["select_value"]) {
                            // line 78
                            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"text-left margin-right-module\" data-class=\"checked-check";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 78);
                            echo "\"><input type=\"radio\" name=\"input_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 78);
                            echo "][]\" value=\"";
                            echo $context["select_value"];
                            echo "\" class=\"form-required-module\"> ";
                            echo $context["select_value"];
                            echo "</label>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t\t";
                }
                // line 83
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 83) == "checked")) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "query_value", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t<div class=\"margin-bottom-module\"><i class=\"fa fa-";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 85);
                        echo "\"></i>&nbsp;&nbsp;<strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 85);
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 85)) {
                            echo ($context["text_cheaper30_required"] ?? null);
                        }
                        echo "</strong></div>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
                        // line 87
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "query_value", [], "any", false, false, false, 87));
                        foreach ($context['_seq'] as $context["_key"] => $context["select_value"]) {
                            // line 88
                            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"text-left margin-right-module\" data-class=\"checked-check";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 88);
                            echo "\"><input type=\"checkbox\" name=\"input_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 88);
                            echo "][]\" value=\"";
                            echo $context["select_value"];
                            echo "\" class=\"form-required-module\"> ";
                            echo $context["select_value"];
                            echo "</label>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 93
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 93) == "file")) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t<div class=\"margin-bottom-module\"><i class=\"fa fa-";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 94);
                    echo "\"></i>&nbsp;&nbsp;<strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 94);
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 94)) {
                        echo ($context["text_cheaper30_required"] ?? null);
                    }
                    echo "</strong></div>
\t\t\t\t\t\t\t\t<button type=\"button\" data-module_id=\"";
                    // line 95
                    echo ($context["module_id"] ?? null);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block button-upload\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"input_field[";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 96);
                    echo "][file]\" value=\"\" id=\"input-file";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"visibility_cheaper form-required-module\" />
\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t";
        }
        // line 102
        echo "\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"col-sm-12 captcha-module";
        // line 103
        echo ($context["module_id"] ?? null);
        echo "\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t";
        // line 105
        if ((($context["captch"] ?? null) == "default")) {
            // line 106
            echo "\t\t\t\t\t\t<div class=\"form-group required marg-bottom-0\">
\t\t\t\t\t\t\t<label class=\"control-label display-block-module\">";
            // line 107
            echo ($context["entry_valid_default_legend"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div id=\"captchaimage";
            // line 109
            echo ($context["module_id"] ?? null);
            echo "\" class=\"input-group-btn captchaimage\"><a id=\"refreshimg\" title=\"Click to refresh image\"><img src=\"index.php?route=";
            echo ($context["extension"] ?? null);
            echo "module/cheaper30/image/";
            echo ($context["time"] ?? null);
            echo "&module_id=";
            echo ($context["module_id"] ?? null);
            echo "\" width=\"132\" height=\"46\" alt=\"Captcha image\"></a></div>
\t\t\t\t\t\t\t\t<input type=\"text\" maxlength=\"6\" name=\"captcha\" id=\"captcha\" class=\"form-control\" style=\"height: 46px;\" />
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submit\" id=\"submit\" value=\"Check\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 115
            echo "\t\t\t\t\t\t";
            echo ($context["captcha"] ?? null);
            echo "
\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "text", [], "any", false, false, false, 120) && (twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "text", [], "any", false, false, false, 120) != ""))) {
            // line 121
            echo "\t\t\t\t<div class=\"col-xs-12 col-sm-12 checkbox person";
            if ((twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "format", [], "any", false, false, false, 121) == "text")) {
                echo " text_person";
            }
            echo "\">
\t\t\t\t\t";
            // line 122
            if ((twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "format", [], "any", false, false, false, 122) && (twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "format", [], "any", false, false, false, 122) == "checkbox"))) {
                // line 123
                echo "\t\t\t\t\t  <div class=\"table\">
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t  <input type=\"checkbox\" name=\"input_zachita\" id=\"zachita\" value=\"1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label for=\"zachita\" class=\"table-cell-form-control\"><span class=\"text_p\">";
                // line 127
                echo twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "text", [], "any", false, false, false, 127);
                echo "</span></label>
\t\t\t\t\t  </div>
\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "format", [], "any", false, false, false, 130) && (twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "format", [], "any", false, false, false, 130) == "text"))) {
                // line 131
                echo "\t\t\t\t\t  ";
                echo twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "text", [], "any", false, false, false, 131);
                echo "
\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 135
        echo "\t\t\t<div class=\"col-lg-12 button-cheaper\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary col-xm-12 margin-bottom-xm\"><i class=\"fa fa-envelope-o\"></i>&nbsp;&nbsp;<span> ";
        // line 136
        echo ($context["text_send_cheaper30_module"] ?? null);
        echo "</span></button>
\t\t\t\t";
        // line 137
        if ( !($context["type_view"] ?? null)) {
            echo "<button type=\"button\" class=\"btn btn-white pull-right col-xm-12\" onclick=\"return closedivshadow";
            echo ($context["module_id"] ?? null);
            echo "(); return false;\"><i class=\"fa fa-sign-out\"></i><span>&nbsp;&nbsp;";
            echo ($context["text_close_cheaper30_module"] ?? null);
            echo "</span></button>";
        }
        // line 138
        echo "            </div><div class=\"clearfix\"></div>
\t\t  </div>
\t\t</div>
\t</div>
\t<div id=\"temp_image\" class=\"temp_image\">
\t\t<img data-src=\"catalog/view/javascript/cheaper30/success_module.gif\" class=\"temp_image_success\" />
\t</div>
</form>
</div>
<script src=\"catalog/view/javascript/cheaper30/jsdelivr/jquery.validate.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/cheaper30/jsdelivr/additional-methods.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/cheaper30/jsdelivr/jquery.mask.phone.js\" type=\"text/javascript\"></script>
<script><!-- 
\$('.divshadow').addClass('divshadow";
        // line 155
        echo ($context["module_id"] ?? null);
        echo "');
var divshadow";
        // line 156
        echo ($context["module_id"] ?? null);
        echo " = '.divshadow.divshadow";
        echo ($context["module_id"] ?? null);
        echo "';
";
        // line 157
        if (($context["type_view"] ?? null)) {
            // line 158
            echo "\tvar divshadow";
            echo ($context["module_id"] ?? null);
            echo " = '.divshadowmodule.divshadowmodule";
            echo ($context["module_id"] ?? null);
            echo "';
\t\$('.option-div";
            // line 159
            echo ($context["module_id"] ?? null);
            echo "').wrap('<div class=\"divshadowmodule divshadowmodule";
            echo ($context["module_id"] ?? null);
            echo "\"></div>');
";
        }
        // line 161
        if (((($context["position"] ?? null) == "content_top") || (($context["position"] ?? null) == "content_bottom"))) {
            // line 162
            echo "\t\$(divshadow";
            echo ($context["module_id"] ?? null);
            echo " + ' .col-block').removeAttr('class').addClass('col-sm-6 form-group col-block');
";
        }
        // line 164
        echo "\$(divshadow";
        echo ($context["module_id"] ?? null);
        echo " + ' .option-div').removeAttr('id');
\$(divshadow";
        // line 165
        echo ($context["module_id"] ?? null);
        echo ").addClass('";
        echo ($context["theme"] ?? null);
        echo "');
function quick_pay_button";
        // line 166
        echo ($context["module_id"] ?? null);
        echo "(){
\tvar date = \$('#input_date').val();
\tvar product_id = \$('#input_product_id').val();
\tvar price = \$('#price').val();
\tdata = \$('.option-div";
        // line 170
        echo ($context["module_id"] ?? null);
        echo " .forming_quick input[type=\\'text\\'], .option-div";
        echo ($context["module_id"] ?? null);
        echo " .forming_quick textarea, .option-div";
        echo ($context["module_id"] ?? null);
        echo " .forming_quick input[type=\\'radio\\']:checked, .option-div";
        echo ($context["module_id"] ?? null);
        echo " .forming_quick input[type=\\'checkbox\\']:checked, .option-div";
        echo ($context["module_id"] ?? null);
        echo " .forming_quick select, .option-div";
        echo ($context["module_id"] ?? null);
        echo " .forming_quick input[type=\\'hidden\\']');
\t\$.ajax({
\t\turl: 'index.php?route=";
        // line 172
        echo ($context["extension"] ?? null);
        echo "module/cheaper30/quick',
\t\ttype: 'post',
\t\tdata: data.serialize() + '&date=' + date + '&prod_id=' + product_id + '&price=' + price + '&module_id=";
        // line 174
        echo ($context["module_id"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tbeforeSend: function(){
\t\t\t\$(divshadow";
        // line 177
        echo ($context["module_id"] ?? null);
        echo ").addClass('loading');
\t\t},
\t\tcomplete: function(json){
\t\t\t\$(divshadow";
        // line 180
        echo ($context["module_id"] ?? null);
        echo ").removeClass('loading');
\t\t\t";
        // line 181
        if ((($context["captch"] ?? null) == "default")) {
            // line 182
            echo "\t\t\t\tcaptchaimage";
            echo ($context["module_id"] ?? null);
            echo "();
\t\t\t";
        } else {
            // line 184
            echo "\t\t\t\tcaptchaThirdimage";
            echo ($context["module_id"] ?? null);
            echo "();
\t\t\t";
        }
        // line 186
        echo "\t\t},
\t\tsuccess: function(json){
\t\t\t
\t\t\t\$(divshadow";
        // line 189
        echo ($context["module_id"] ?? null);
        echo " + ' > .option-div').append('<div id=\"window-cheaper\"";
        if ( !($context["type_view"] ?? null)) {
            echo " class=\"popup_module\"";
        }
        echo "></div>');
\t\t\t
\t\t\tif (json['message']){
\t\t\t\t\$('#window-cheaper').append('<img src=\"\" class=\"hide_cheaper real_image_success img-responsive\" />');
\t\t\t\t\$('#window-cheaper img.real_image_success').attr('src', \$('#temp_image img.temp_image_success').attr('data-src')).removeClass('hide_cheaper');
\t\t\t
\t\t\t\tsetTimeout(function(){
\t\t\t\t\t";
        // line 196
        if ( !($context["type_view"] ?? null)) {
            // line 197
            echo "\t\t\t\t\t\t\$(divshadow";
            echo ($context["module_id"] ?? null);
            echo " + ' .option-div').css('height', '160px');
\t\t\t\t\t\t\$(divshadow";
            // line 198
            echo ($context["module_id"] ?? null);
            echo " + ' .option-div > .row, ' + divshadow";
            echo ($context["module_id"] ?? null);
            echo " + ' form').remove();
\t\t\t\t\t\tcentering(divshadow";
            // line 199
            echo ($context["module_id"] ?? null);
            echo ");
\t\t\t\t\t";
        }
        // line 201
        echo "\t\t\t\t},1000);
\t\t\t\tif (json['message']['success_send']){
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\$('#window-cheaper').addClass('gif-background after-background";
        // line 204
        if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
            echo " column-module";
        }
        echo "');
\t\t\t\t\t},1000);
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\$('#window-cheaper').removeClass('gif-background');
\t\t\t\t\t\t\$('#window-cheaper .text-msg').addClass('text-anim');
\t\t\t\t\t\t
\t\t\t\t\t},3500);
\t\t\t\t\t\$(divshadow";
        // line 211
        echo ($context["module_id"] ?? null);
        echo " + ' > .option-div #window-cheaper').append('<span class=\"text-msg\">' + json['message']['success_send'] + '</span>');
\t\t\t\t}
\t\t\t\tif (json['message']['error_send']){
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\$('#window-cheaper .text-msg').addClass('text-anim');
\t\t\t\t\t},1000);
\t\t\t\t\t\$(divshadow";
        // line 217
        echo ($context["module_id"] ?? null);
        echo " + ' > .option-div #window-cheaper').append('<span class=\"text-msg\">' + json['message']['error_send'] + '</span>');
\t\t\t\t}
\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\$(divshadow";
        // line 220
        echo ($context["module_id"] ?? null);
        echo " + ' #window-cheaper').remove();
\t\t\t\t\t";
        // line 221
        if (((($context["captch"] ?? null) == "basic") || (($context["captch"] ?? null) == "basic_captcha"))) {
            echo "captchaThirdimage";
            echo ($context["module_id"] ?? null);
            echo "();";
        }
        // line 222
        echo "\t\t\t\t\treturn closedivshadow";
        echo ($context["module_id"] ?? null);
        echo "(); return false;
\t\t\t\t},5000);
\t\t\t}
\t\t\tif (json['error']){
\t\t\t\t\$('.captcha-module";
        // line 226
        echo ($context["module_id"] ?? null);
        echo "  > div').after('<label class=\"error-module\">' + json['error'] + '</label>');
\t\t\t}
\t\t}
\t});
\treturn false;
}
setTimeout(function(){
\t\$('.header-popup').addClass('show').addClass('animated').addClass('flipInX');
}, 1000);
//--></script>
<script>
\tfunction closedivshadow";
        // line 237
        echo ($context["module_id"] ?? null);
        echo "(){
\t\t\$('body .divshadow').removeClass('animated').removeClass('bounceIn').addClass('animated bounceOut');
\t\tsetTimeout(function(){
\t\t\t\$('body .divshadow').empty();
\t\t\t\$('body .divshadow, body .modal-bg-cheaper').removeClass('show');
\t\t\t\$('.modal-bg').removeClass('show');
\t\t\t\$('body .divshadow').removeClass('cheaper30').removeClass('loading col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 divshadow";
        // line 243
        echo ($context["module_id"] ?? null);
        echo "');
\t\t},700);
\t}
\t\$('body .divshadow .close').click(function() {
\t\tclosedivshadow";
        // line 247
        echo ($context["module_id"] ?? null);
        echo "();
\t});
\tlocalStorage.setItem('swalCheaper', '1');
\t\$(document).keydown(function(e) {
\t\tvar container = \$('body .divshadow.show');
\t\tvar containerfind = \$('body').find('.divshadow.show').html();
\t\tif (containerfind != null && e.keyCode === 27) {
\t\t\tclosedivshadow";
        // line 254
        echo ($context["module_id"] ?? null);
        echo "();
\t\t\treturn false;
\t\t}
\t});
\t\$(document).ready(function() {
\t\t\$('body .divshadow').addClass('cheaper30').addClass('col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10');
\t\tcentering('.divshadow');
\t});
\t\$('body').on('click', '.modal-bg-cheaper', function(){
\t\tclosedivshadow";
        // line 263
        echo ($context["module_id"] ?? null);
        echo "(); return false;
\t});
</script>
";
        // line 266
        if (($context["bootstrap"] ?? null)) {
            echo "<link href=\"catalog/view/javascript/cheaper30/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />";
        }
        // line 267
        if (($context["font"] ?? null)) {
            echo "<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />";
        }
        // line 268
        echo "<script>
";
        // line 269
        if (($context["fields"] ?? null)) {
            // line 270
            echo "\t\$('#cheaperForm";
            echo ($context["module_id"] ?? null);
            echo "').validate({
\t\trules: {
\t\t\t";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["field"]) {
                // line 273
                echo "\t\t\t\t'input_field[";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 273);
                echo "]";
                echo (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 273) == "file")) ? ("[file]") : (""));
                echo (((((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 273) == "checked") || (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 273) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 273) == "select"))) ? ("[]") : (""));
                echo "': {
\t\t\t\t\t\trequired: ";
                // line 274
                if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 274)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo ",
\t\t\t\t";
                // line 275
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 275) != "phoneUS")) {
                    // line 276
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 276) && twig_get_attribute($this->env, $this->source, $context["field"], "valid", [], "any", false, false, false, 276))) {
                        // line 277
                        echo "\t\t\t\t\t\t";
                        if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["field"], "valid", [], "any", false, false, false, 277))) {
                            // line 278
                            echo "\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 278);
                            echo ": [";
                            echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["field"], "valid", [], "any", false, false, false, 278), ",");
                            echo "],
\t\t\t\t\t\t";
                        } else {
                            // line 280
                            echo "\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 280);
                            echo ": ";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "valid", [], "any", false, false, false, 280);
                            echo ",
\t\t\t\t\t\t";
                        }
                        // line 282
                        echo "\t\t\t\t\t";
                    }
                    // line 283
                    echo "\t\t\t\t";
                }
                // line 284
                echo "\t\t\t\t";
                if (((((((twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 284) == "email") || (twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 284) == "url")) || (twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 284) == "date")) || (twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 284) == "dateISO")) || (twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 284) == "number")) || (twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 284) == "phoneUS"))) {
                    // line 285
                    echo "\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 285);
                    echo ": true,
\t\t\t\t";
                }
                // line 287
                echo "\t\t\t\trequire_from_group: [1, \".form-required-module\"]
\t\t\t\t},
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "format", [], "any", false, false, false, 290) && (twig_get_attribute($this->env, $this->source, ($context["protection"] ?? null), "format", [], "any", false, false, false, 290) == "checkbox"))) {
                // line 291
                echo "\t\t\t\tinput_zachita: {
\t\t\t\t\trequired: true,
\t\t\t\t},
\t\t\t";
            }
            // line 295
            echo "\t\t\t";
            if ((($context["captch"] ?? null) == "default")) {
                // line 296
                echo "\t\t\t\tcaptcha:{
\t\t\t\t\trequired: true,
\t\t\t\t\tremote: 'index.php?route=";
                // line 298
                echo ($context["extension"] ?? null);
                echo "module/cheaper30/process&module_id=";
                echo ($context["module_id"] ?? null);
                echo "'
\t\t\t\t}
\t\t\t";
            }
            // line 301
            echo "\t\t},
\t\tmessages: {
\t\t\tinput_zachita: {
\t\t\t\trequired: \"";
            // line 304
            echo ($context["text_error_zachita"] ?? null);
            echo "\",
\t\t\t}
\t\t},
\t\tsubmitHandler: function() {
\t\t\treturn quick_pay_button";
            // line 308
            echo ($context["module_id"] ?? null);
            echo "();
\t\t\treturn false;
\t\t},
\t\t
\t\t
\t});
\t";
            // line 314
            if (($context["localization_scripts"] ?? null)) {
                // line 315
                echo "\t\t\$.getScript('";
                echo ($context["localization_scripts"] ?? null);
                echo "');
\t";
            }
        }
        // line 318
        echo "\$.validator.addMethod( \"require_from_group\", function( value, element, options ) {
\tvar \$fields = \$( options[ 1 ], element.form ),
\t\t\$fieldsFirst = \$fields.eq( 0 ),
\t\tvalidator = \$fieldsFirst.data( \"valid_req_grp\" ) ? \$fieldsFirst.data( \"valid_req_grp\" ) : \$.extend( {}, this ),
\t\tisValid = \$fields.filter( function() {
\t\t\treturn validator.elementValue( this );
\t\t} ).length >= options[ 0 ];

\t// Store the cloned validator for future validation
\t\$fieldsFirst.data( \"valid_req_grp\", validator );

\t// If element isn't being validated, run each require_from_group field's validation rules
\tif ( !\$( element ).data( \"being_validated\" ) ) {
\t\t\$fields.data( \"being_validated\", true );
\t\t\$fields.each( function() {
\t\t\tvalidator.element( this );
\t\t} );
\t\t\$fields.data( \"being_validated\", false );
\t}
\treturn isValid;
}, \$.validator.format( '";
        // line 338
        echo ($context["error_require_from_group"] ?? null);
        echo "' ) );
\$('.date').datetimepicker({
\tlanguage: '";
        // line 340
        echo ($context["lan"] ?? null);
        echo "',
\tpickTime: false
});
\$('.time').datetimepicker({
\tlanguage: '";
        // line 344
        echo ($context["lan"] ?? null);
        echo "',
\tpickDate: false
});
\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 348
        echo ($context["lan"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
\$('button.button-upload').on('click', function() {
\tvar node = this;
\t\$('#form-upload').remove();
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\tif (typeof timer != 'undefined'){
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
\t\t\t\t\t\t\$(node).parent().find('input').after('<label class=\"error-module\">' + json['error'] + '</label>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$(node).parent().parent().find('.error-module').remove();
\t\t\t\t\t\t\$(node).parent().find('input').after('<label class=\"success-module\">' + json['success'] + '</label>');
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
function captchaimage";
        // line 398
        echo ($context["module_id"] ?? null);
        echo "(){
\t\$.post('index.php?route=";
        // line 399
        echo ($context["extension"] ?? null);
        echo "module/cheaper30/newsession&module_id=";
        echo ($context["module_id"] ?? null);
        echo "').done(function(){
\t\t\$(\"#captchaimage";
        // line 400
        echo ($context["module_id"] ?? null);
        echo "\").load('index.php?route=";
        echo ($context["extension"] ?? null);
        echo "module/cheaper30/refreshimage&module_id=";
        echo ($context["module_id"] ?? null);
        echo "',function(){
\t\t\t\$('#captcha').val('');
\t\t\t\$('body #captchaimage";
        // line 402
        echo ($context["module_id"] ?? null);
        echo " #refreshimg').click(function(){
\t\t\t\tcaptchaimage";
        // line 403
        echo ($context["module_id"] ?? null);
        echo "();
\t\t\t\treturn false;
\t\t\t});
\t\t});
\t});
}
function captchaThirdimage";
        // line 409
        echo ($context["module_id"] ?? null);
        echo "(){
\tvar html_captcha = '";
        // line 410
        echo ($context["captcha"] ?? null);
        echo "';
\t\$.ajax({
\t\ttype: 'get',
\t\turl: 'index.php?route=";
        // line 413
        echo ($context["extension"] ?? null);
        echo "module/cheaper30/loadcaptcha&module_id=";
        echo ($context["module_id"] ?? null);
        echo "',
\t\tdata: '',
\t\tdataType: 'html',
\t\tcache: false,
\t\tsuccess: function(html_captcha){
\t\t\t\$('.captcha-module";
        // line 418
        echo ($context["module_id"] ?? null);
        echo " > .input-group').empty().append(html_captcha);
\t\t\trestructureCaptcha";
        // line 419
        echo ($context["module_id"] ?? null);
        echo "();
\t\t\t\$(\".captcha-module";
        // line 420
        echo ($context["module_id"] ?? null);
        echo " img\").prop(\"src\", \"index.php?route=extension/captcha/basic_captcha/captcha/?\" + new Date().valueOf());
\t\t},
\t});
}
function restructureCaptcha";
        // line 424
        echo ($context["module_id"] ?? null);
        echo "(){
\t";
        // line 425
        if (((($context["captch"] ?? null) == "google") || (($context["captch"] ?? null) == "google_captcha"))) {
            // line 426
            echo "\t\t\$('.captcha-module";
            echo ($context["module_id"] ?? null);
            echo " .col-sm-2').addClass('hide');
\t\t\$('.captcha-module";
            // line 427
            echo ($context["module_id"] ?? null);
            echo " .col-sm-10').removeClass('col-sm-10').addClass('col-sm-12');
\t";
        }
        // line 429
        echo "\t";
        if (((($context["captch"] ?? null) == "basic") || (($context["captch"] ?? null) == "basic_captcha"))) {
            // line 430
            echo "\t\t\$('.captcha-module";
            echo ($context["module_id"] ?? null);
            echo " .col-sm-2').removeClass('col-sm-2').addClass('display-block-module');
\t\t\$('.captcha-module";
            // line 431
            echo ($context["module_id"] ?? null);
            echo " .col-sm-10').removeClass('col-sm-10').addClass('input-group');
\t\t\$('.captcha-module";
            // line 432
            echo ($context["module_id"] ?? null);
            echo " img').wrap('<div class=\"input-group-btn\"></div>');
\t\t\$('.captcha-module";
            // line 433
            echo ($context["module_id"] ?? null);
            echo " .form-group .input-group').append(\$('.captcha-module";
            echo ($context["module_id"] ?? null);
            echo " .input-group .form-control'));
\t\t\$('.captcha-module";
            // line 434
            echo ($context["module_id"] ?? null);
            echo " .form-group').addClass('marg-bottom-0');
\t";
        }
        // line 436
        echo "\t";
        if ((($context["captch"] ?? null) == "default")) {
            // line 437
            echo "\t\tcaptchaimage";
            echo ($context["module_id"] ?? null);
            echo "();
\t";
        }
        // line 439
        echo "\t\$('.captcha-module";
        echo ($context["module_id"] ?? null);
        echo " label.control-label').removeClass('control-label');
}
setTimeout(function(){
\trestructureCaptcha";
        // line 442
        echo ($context["module_id"] ?? null);
        echo "();
},0);
if (!\$('.person').text().replace(/\\s/g, '')){
\t\$('.person').remove();
}
setTimeout(function(){
\t\$('.bootstrap-datetimepicker-widget').attr('style', 'z-index: 2147483647 !important');
},1000);
";
        // line 450
        if (($context["config_language"] ?? null)) {
            // line 451
            echo "\t";
            if (($context["fields"] ?? null)) {
                // line 452
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 453
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "regex", [], "any", false, false, false, 453) == "phoneUS")) {
                        // line 454
                        echo "\t\t\t\t\$('#cheaperForm";
                        echo ($context["module_id"] ?? null);
                        echo " input[name=\\'input_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 454);
                        echo "]\\']').mask('";
                        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["field"], "valid", [], "any", false, false, false, 454)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["config_language"] ?? null)] ?? null) : null);
                        echo "',{autoclear: false});
\t\t\t";
                    }
                    // line 456
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 457
                echo "\t";
            }
        }
        // line 459
        echo "</script>
<style>
";
        // line 461
        if (($context["style"] ?? null)) {
            echo ($context["style"] ?? null);
        }
        // line 462
        echo "</style>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/cheaper30.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1191 => 462,  1187 => 461,  1183 => 459,  1179 => 457,  1173 => 456,  1163 => 454,  1160 => 453,  1155 => 452,  1152 => 451,  1150 => 450,  1139 => 442,  1132 => 439,  1126 => 437,  1123 => 436,  1118 => 434,  1112 => 433,  1108 => 432,  1104 => 431,  1099 => 430,  1096 => 429,  1091 => 427,  1086 => 426,  1084 => 425,  1080 => 424,  1073 => 420,  1069 => 419,  1065 => 418,  1055 => 413,  1049 => 410,  1045 => 409,  1036 => 403,  1032 => 402,  1023 => 400,  1017 => 399,  1013 => 398,  960 => 348,  953 => 344,  946 => 340,  941 => 338,  919 => 318,  912 => 315,  910 => 314,  901 => 308,  894 => 304,  889 => 301,  881 => 298,  877 => 296,  874 => 295,  868 => 291,  865 => 290,  857 => 287,  851 => 285,  848 => 284,  845 => 283,  842 => 282,  834 => 280,  826 => 278,  823 => 277,  820 => 276,  818 => 275,  810 => 274,  802 => 273,  798 => 272,  792 => 270,  790 => 269,  787 => 268,  783 => 267,  779 => 266,  773 => 263,  761 => 254,  751 => 247,  744 => 243,  735 => 237,  721 => 226,  713 => 222,  707 => 221,  703 => 220,  697 => 217,  688 => 211,  676 => 204,  671 => 201,  666 => 199,  660 => 198,  655 => 197,  653 => 196,  639 => 189,  634 => 186,  628 => 184,  622 => 182,  620 => 181,  616 => 180,  610 => 177,  604 => 174,  599 => 172,  584 => 170,  577 => 166,  571 => 165,  566 => 164,  560 => 162,  558 => 161,  551 => 159,  544 => 158,  542 => 157,  536 => 156,  532 => 155,  513 => 138,  505 => 137,  501 => 136,  498 => 135,  494 => 133,  488 => 131,  485 => 130,  479 => 127,  473 => 123,  471 => 122,  464 => 121,  462 => 120,  457 => 117,  451 => 115,  436 => 109,  431 => 107,  428 => 106,  426 => 105,  421 => 103,  418 => 102,  415 => 101,  407 => 98,  400 => 96,  392 => 95,  382 => 94,  379 => 93,  375 => 91,  372 => 90,  357 => 88,  353 => 87,  342 => 85,  339 => 84,  336 => 83,  333 => 82,  329 => 80,  314 => 78,  310 => 77,  299 => 75,  296 => 74,  293 => 73,  290 => 72,  285 => 69,  274 => 67,  270 => 66,  266 => 65,  262 => 64,  251 => 62,  248 => 61,  245 => 60,  232 => 58,  223 => 57,  220 => 56,  187 => 54,  178 => 53,  176 => 52,  170 => 51,  167 => 50,  162 => 49,  160 => 48,  156 => 47,  152 => 46,  144 => 41,  141 => 40,  135 => 37,  132 => 36,  125 => 33,  120 => 30,  112 => 28,  109 => 27,  101 => 24,  98 => 23,  92 => 20,  89 => 19,  87 => 18,  83 => 16,  81 => 15,  77 => 14,  72 => 12,  67 => 9,  59 => 8,  55 => 6,  53 => 5,  49 => 4,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/cheaper30.twig", "");
    }
}
