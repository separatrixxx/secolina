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

/* extension/module/ocdbanner/ocdbanner.twig */
class __TwigTemplate_4ea7ac8edd9fb3bfd217806d890e40be5af43a8dd87de06b39b0d2e46d6a6d63 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"container-fluid container-breadcrumb\">
    <ul class=\"breadcrumb\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
  </div>
  <div class=\"container-module\">
    <div class=\"page-header\">
      <div class=\"container-fluid\">
        <div class=\"pull-right\">
          ";
        // line 14
        if (($context["ocdbanner_license"] ?? null)) {
            // line 15
            echo "          ";
            if (($context["get_id"] ?? null)) {
                // line 16
                echo "          <button onclick=\"\$('#content #apply').attr('value', '1'); \$('#' + \$('#content form').attr('id')).submit();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_apply"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
\t\t      ";
            }
            // line 18
            echo "          <button type=\"submit\" form=\"form-ocdbanner\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          ";
        } else {
            // line 20
            echo "          <button type=\"submit\" form=\"form-ocdbanner-license\" class=\"btn btn-primary\">";
            echo ($context["button_license"] ?? null);
            echo "</button>
          ";
        }
        // line 22
        echo "          <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        </div>
        <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
      </div>
    </div>
    <div class=\"container-fluid\">
      ";
        // line 28
        if (($context["error_warning"] ?? null)) {
            // line 29
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 33
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 34
            echo "      <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 38
        echo "      ";
        if (($context["ocdbanner_license"] ?? null)) {
            // line 39
            echo "      <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocdbanner\" class=\"form-horizontal\">
        <input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
        <input type=\"hidden\" name=\"module_id\" value=\"";
            // line 41
            echo ((array_key_exists("module_id", $context)) ? (($context["module_id"] ?? null)) : (""));
            echo "\" id=\"input-id\" class=\"form-control\" />
        <ul id=\"general-tabs\" class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-setting-module\" data-toggle=\"tab\">";
            // line 43
            echo ($context["tab_setting_module"] ?? null);
            echo "</a></li>
          <li><a href=\"#tab-banners\" data-toggle=\"tab\">";
            // line 44
            echo ($context["tab_setting_banners"] ?? null);
            echo "</a></li>
          <li><a href=\"#tab-access-module\" data-toggle=\"tab\">";
            // line 45
            echo ($context["tab_access_module"] ?? null);
            echo "</a></li>
          <li><a href=\"#tab-css\" data-toggle=\"tab\">";
            // line 46
            echo ($context["tab_css"] ?? null);
            echo "</a></li>
          <li class=\"nav-support\"><a href=\"#tab-support\" data-toggle=\"tab\">";
            // line 47
            echo ($context["tab_support"] ?? null);
            echo "</a></li>
        </ul>                                                                      
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-setting-module\">
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 52
            echo ($context["entry_name"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
            // line 54
            echo ($context["name"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
                ";
            // line 55
            if (($context["error_name"] ?? null)) {
                // line 56
                echo "                <div class=\"text-danger\">";
                echo ($context["error_name"] ?? null);
                echo "</div>
                ";
            }
            // line 58
            echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-name-front\">";
            // line 61
            echo ($context["entry_name_front"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 64
                echo "                <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                  <span class=\"input-group-addon\"><img src=\"language/";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 65);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 65);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 65);
                echo "\" /></span>
                  <input type=\"text\" name=\"name_front[";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
                echo "]\" value=\"";
                echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["name_front"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["name_front"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) : (""));
                echo "\" placeholder=\"";
                echo ($context["help_name_front_placeholder"] ?? null);
                echo "\" id=\"input-name-front-lang";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
                echo "\" class=\"form-control\" />
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                      
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
            // line 72
            echo ($context["entry_name_front_show"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <label class=\"radio-inline\">
                  ";
            // line 75
            if (($context["name_front_show"] ?? null)) {
                // line 76
                echo "                  <input type=\"radio\" name=\"name_front_show\" value=\"1\" checked=\"checked\" />
                  ";
                // line 77
                echo ($context["text_yes"] ?? null);
                echo "
                  ";
            } else {
                // line 79
                echo "                  <input type=\"radio\" name=\"name_front_show\" value=\"1\" />
                  ";
                // line 80
                echo ($context["text_yes"] ?? null);
                echo "
                  ";
            }
            // line 82
            echo "                </label>
                <label class=\"radio-inline\">
                  ";
            // line 84
            if ( !($context["name_front_show"] ?? null)) {
                // line 85
                echo "                  <input type=\"radio\" name=\"name_front_show\" value=\"0\" checked=\"checked\" />
                  ";
                // line 86
                echo ($context["text_no"] ?? null);
                echo "
                  ";
            } else {
                // line 88
                echo "                  <input type=\"radio\" name=\"name_front_show\" value=\"0\" />
                  ";
                // line 89
                echo ($context["text_no"] ?? null);
                echo "
                  ";
            }
            // line 91
            echo "                </label>
              </div>
            </div>   
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-width-container\">";
            // line 95
            echo ($context["entry_width_container"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"alert alert-info\">
                  <svg class=\"alert-icon-img\" width=\"36\" height=\"36\" viewBox=\"0 0 36 36\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18 0.5C8.33502 0.5 0.5 8.33502 0.5 18C0.5 27.665 8.33502 35.5 18 35.5C27.665 35.5 35.5 27.665 35.5 18C35.5 13.3587 33.6563 8.90752 30.3744 5.62563C27.0925 2.34374 22.6413 0.5 18 0.5ZM18 32C10.268 32 4 25.732 4 18C4 10.268 10.268 4 18 4C25.732 4 32 10.268 32 18C32 21.713 30.525 25.274 27.8995 27.8995C25.274 30.525 21.713 32 18 32ZM18.875 10.2959C19.3582 10.2959 19.75 10.6877 19.75 11.1709V12.9209C19.75 13.4042 19.3582 13.7959 18.875 13.7959H17.125C16.6418 13.7959 16.25 13.4042 16.25 12.9209V11.1709C16.25 10.6877 16.6418 10.2959 17.125 10.2959H18.875ZM18.875 15.5459C19.3582 15.5459 19.75 15.6301 19.75 16.3303V23.5349C20.2149 23.6643 20.6785 23.7769 21.081 23.8655C21.3254 23.9193 21.5017 24.1342 21.5017 24.3845V25.1791C21.5017 25.469 21.2667 25.7041 20.9767 25.7041H15.025C14.7351 25.7041 14.5 25.469 14.5 25.1791V24.3845C14.5 24.1342 14.6763 23.9193 14.9207 23.8655C15.3227 23.777 15.7857 23.6646 16.25 23.5353V17.7147C15.7857 17.5854 15.3227 17.473 14.9207 17.3845C14.6763 17.3307 14.5 17.1158 14.5 16.8655V16.0709C14.5 15.781 14.7351 15.5459 15.025 15.5459L18.875 15.5459Z\"></path></svg>
                  ";
            // line 99
            echo ($context["help_width_container"] ?? null);
            echo "
                </div>
                <select name=\"width_container\" id=\"input-width-container\" class=\"form-control\">
                  <option value=\"1\" ";
            // line 102
            if ((array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == "1"))) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">";
            echo ($context["text_fixed"] ?? null);
            echo "</option>                     
                  <option value=\"2\" ";
            // line 103
            if ((array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == "2"))) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">";
            echo ($context["text_full"] ?? null);
            echo "</option>                     
                  <option value=\"3\" ";
            // line 104
            if ((array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == "3"))) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">";
            echo ($context["text_fullbg_fixedcontent"] ?? null);
            echo "</option>                     
                </select>
              </div>
            </div>
            <div class=\"image-bg\" style=\"display:none\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image-bg\">";
            // line 110
            echo ($context["entry_thumb_bg"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">                                                                                                                                                        
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <select name=\"bg_mode\" id=\"bg-mode\" class=\"form-control\">
                        <option value=\"bg_image\" ";
            // line 115
            if ((array_key_exists("bg_mode", $context) && (($context["bg_mode"] ?? null) == "bg_image"))) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">";
            echo ($context["entry_bg_image"] ?? null);
            echo "</option>                     
                        <option value=\"bg_color\" ";
            // line 116
            if ((array_key_exists("bg_mode", $context) && (($context["bg_mode"] ?? null) == "bg_color"))) {
                echo " ";
                echo "selected=\"selected\"";
                echo " ";
            }
            echo ">";
            echo ($context["entry_bg_color"] ?? null);
            echo "</option>   
                      </select>
                    </div>
                    <div class=\"col-sm-12 mode-bg-image\">
                      <a href=\"\" id=\"thumb-image-bg\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 120
            echo ($context["thumb_bg"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"image_bg\" value=\"";
            // line 121
            echo ((array_key_exists("image_bg", $context)) ? (($context["image_bg"] ?? null)) : (""));
            echo "\" id=\"input-image-bg\" />
                    </div>
                    <div class=\"col-sm-2 mode-bg-color\" style=\"display:none\">
                      <input type=\"text\" name=\"color_bg\" value=\"";
            // line 124
            echo ((array_key_exists("color_bg", $context)) ? (($context["color_bg"] ?? null)) : (""));
            echo "\" id=\"input-color-bg\" class=\"form-control colorpicker\" />  
                    </div>
                  </div>
                </div>
              </div>
            </div>                          
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
            // line 131
            echo ($context["entry_mobiledetect"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-2\">
                    <div class=\"device-info\">";
            // line 135
            echo ($context["entry_device_desktop"] ?? null);
            echo "</div>
                    <div class=\"checkbox-device\">
                      ";
            // line 137
            if ( !($context["device_pc"] ?? null)) {
                // line 138
                echo "                      <input type=\"radio\" name=\"device_pc\" value=\"0\" checked=\"checked\" id=\"device-pc-no\" class=\"btn-switch__radio btn-switch__radio_no\" />
                      ";
            } else {
                // line 140
                echo "                      <input type=\"radio\" name=\"device_pc\" value=\"0\" id=\"device-pc-no\" class=\"btn-switch__radio btn-switch__radio_no\" />
                      ";
            }
            // line 142
            echo "                      ";
            if (($context["device_pc"] ?? null)) {
                // line 143
                echo "                      <input type=\"radio\" name=\"device_pc\" value=\"1\" checked=\"checked\" id=\"device-pc-yes\" class=\"btn-switch__radio btn-switch__radio_yes\" /> 
                      ";
            } else {
                // line 145
                echo "                      <input type=\"radio\" name=\"device_pc\" value=\"1\" id=\"device-pc-yes\" class=\"btn-switch__radio btn-switch__radio_yes\" />
                      ";
            }
            // line 147
            echo "                      <label for=\"device-pc-yes\" class=\"btn-switch__label btn-switch__label_yes\"></label>
                      <label for=\"device-pc-no\" class=\"btn-switch__label btn-switch__label_no\"></label>
                    </div>
                  </div>
                  <div class=\"col-sm-2\">
                    <div class=\"device-info\">";
            // line 152
            echo ($context["entry_device_tablet"] ?? null);
            echo "</div>
                    <div class=\"checkbox-device\">
                      ";
            // line 154
            if ( !($context["device_tablet"] ?? null)) {
                // line 155
                echo "                      <input type=\"radio\" name=\"device_tablet\" value=\"0\" checked=\"checked\" id=\"device-tablet-no\" class=\"btn-switch__radio btn-switch__radio_no\" />
                      ";
            } else {
                // line 157
                echo "                      <input type=\"radio\" name=\"device_tablet\" value=\"0\" id=\"device-tablet-no\" class=\"btn-switch__radio btn-switch__radio_no\" />
                      ";
            }
            // line 159
            echo "                      ";
            if (($context["device_tablet"] ?? null)) {
                // line 160
                echo "                      <input type=\"radio\" name=\"device_tablet\" value=\"1\" checked=\"checked\" id=\"device-tablet-yes\" class=\"btn-switch__radio btn-switch__radio_yes\" /> 
                      ";
            } else {
                // line 162
                echo "                      <input type=\"radio\" name=\"device_tablet\" value=\"1\" id=\"device-tablet-yes\" class=\"btn-switch__radio btn-switch__radio_yes\" />
                      ";
            }
            // line 164
            echo "                      <label for=\"device-tablet-yes\" class=\"btn-switch__label btn-switch__label_yes\"></label>
                      <label for=\"device-tablet-no\" class=\"btn-switch__label btn-switch__label_no\"></label>
                    </div>
                  </div>
                  <div class=\"col-sm-2\">
                    <div class=\"device-info\">";
            // line 169
            echo ($context["entry_device_mobile"] ?? null);
            echo "</div>
                    <div class=\"checkbox-device\">
                      ";
            // line 171
            if ( !($context["device_mobile"] ?? null)) {
                // line 172
                echo "                      <input type=\"radio\" name=\"device_mobile\" value=\"0\" checked=\"checked\" id=\"device-mobile-no\" class=\"btn-switch__radio btn-switch__radio_no\" />
                      ";
            } else {
                // line 174
                echo "                      <input type=\"radio\" name=\"device_mobile\" value=\"0\" id=\"device-mobile-no\" class=\"btn-switch__radio btn-switch__radio_no\" />
                      ";
            }
            // line 176
            echo "                      ";
            if (($context["device_mobile"] ?? null)) {
                // line 177
                echo "                      <input type=\"radio\" name=\"device_mobile\" value=\"1\" checked=\"checked\" id=\"device-mobile-yes\" class=\"btn-switch__radio btn-switch__radio_yes\" /> 
                      ";
            } else {
                // line 179
                echo "                      <input type=\"radio\" name=\"device_mobile\" value=\"1\" id=\"device-mobile-yes\" class=\"btn-switch__radio btn-switch__radio_yes\" />
                      ";
            }
            // line 181
            echo "                      <label for=\"device-mobile-yes\" class=\"btn-switch__label btn-switch__label_yes\"></label>
                      <label for=\"device-mobile-no\" class=\"btn-switch__label btn-switch__label_no\"></label>
                    </div>
                  </div>
                </div>
              </div>                
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-template\"><span data-toggle=\"tooltip\" title=\"";
            // line 189
            echo ($context["help_template"] ?? null);
            echo "\">";
            echo ($context["entry_template"] ?? null);
            echo "</span></label>
              <div class=\"col-sm-10\">
                <div class=\"well well-sm\">
                  <div style=\"padding: 9px 0; display: inline-block;\">";
            // line 192
            echo ($context["text_template"] ?? null);
            echo "</div>
                  <div style=\"width: 300px; display: inline-block;\">
                    <input type=\"text\" name=\"template_module\" value=\"";
            // line 194
            echo ($context["template_module"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_template"] ?? null);
            echo "\" id=\"input-template\" class=\"form-control\" />
                  </div>
                  <div style=\"padding: 9px 0; display: inline-block;\">";
            // line 196
            echo ($context["text_tpl"] ?? null);
            echo "</div>
                  <div class=\"clearfix\"></div>
                </div>
              </div>
            </div>
            ";
            // line 201
            if (($context["get_id"] ?? null)) {
                // line 202
                echo "            <div class=\"form-group short-code\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 203
                echo ($context["help_short_code"] ?? null);
                echo "\">";
                echo ($context["entry_short_code"] ?? null);
                echo "</span></label>
              <div class=\"col-sm-10 short-code-text\">
                <input type=\"hidden\" name=\"short_code\" value=\"";
                // line 205
                echo ($context["short_code"] ?? null);
                echo "\" />
                <strong>";
                // line 206
                echo ($context["short_code"] ?? null);
                echo "</strong>
              </div>
            </div>
            ";
            }
            // line 210
            echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
            // line 211
            echo ($context["entry_status"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                  ";
            // line 214
            if (($context["status"] ?? null)) {
                // line 215
                echo "                  <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                  <option value=\"0\">";
                // line 216
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                  ";
            } else {
                // line 218
                echo "                  <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                  <option value=\"0\" selected=\"selected\">";
                // line 219
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                  ";
            }
            // line 221
            echo "                </select>
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-banners\">
            <div class=\"row\">
              <div class=\"col-sm-2\" id=\"vtabs\">
\t\t\t          <ul class=\"nav nav-pills nav-stacked\" id=\"group\">
\t\t\t            ";
            // line 229
            $context["group_row"] = 0;
            echo " 
\t\t\t\t          ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["group_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group_tab"]) {
                // line 231
                echo "\t\t\t\t          <li>
                    <a href=\"#tab-group";
                // line 232
                echo ($context["group_row"] ?? null);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-group";
                echo ($context["group_row"] ?? null);
                echo "\\']').parent().remove(); \$('#tab-group";
                echo ($context["group_row"] ?? null);
                echo "').remove(); \$('#group a:first').tab('show');\"></i> 
                      ";
                // line 233
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group", [], "any", false, true, false, 233), ($context["config_admin_language"] ?? null), [], "array", true, true, false, 233) && ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group", [], "any", false, false, false, 233)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["config_admin_language"] ?? null)] ?? null) : null) != ""))) {
                    // line 234
                    echo "                      ";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group", [], "any", false, false, false, 234)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["config_admin_language"] ?? null)] ?? null) : null);
                    echo "
                      ";
                } else {
                    // line 236
                    echo "                      ";
                    echo ($context["text_group"] ?? null);
                    echo " - ";
                    echo ($context["group_row"] ?? null);
                    echo " 
                      ";
                }
                // line 238
                echo "                    </a>
                  </li>
\t\t\t\t          ";
                // line 240
                $context["group_row"] = (($context["group_row"] ?? null) + 1);
                echo "                                                                                                                                                                                                                                                                         
\t\t\t\t          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "\t\t\t\t          <li id=\"group-add\"><a onclick=\"addGroup();\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["text_add_group"] ?? null);
            echo "</a></li>
\t\t\t          </ul>
\t\t\t        </div> 
              ";
            // line 245
            $context["group_row"] = 0;
            echo " 
              ";
            // line 246
            $context["carousel_item_row"] = 0;
            // line 247
            echo "              ";
            $context["breakpoint_row"] = 0;
            // line 248
            echo "              ";
            $context["grid_row"] = 0;
            // line 249
            echo "              <div class=\"col-sm-10\">
                <div class=\"tab-content\">
                  ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["group_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group_tab"]) {
                // line 252
                echo "                  <div class=\"tab-pane\" id=\"tab-group";
                echo ($context["group_row"] ?? null);
                echo "\">
                    <ul class=\"nav nav-tabs\" id=\"settings-group";
                // line 253
                echo ($context["group_row"] ?? null);
                echo "\">
                      <li class=\"active\"><a href=\"#tab-general-setting-group";
                // line 254
                echo ($context["group_row"] ?? null);
                echo "\" data-toggle=\"tab\">";
                echo ($context["text_tab_setting"] ?? null);
                echo "</a></li>
                      <li><a href=\"#tab-setting-banners-group";
                // line 255
                echo ($context["group_row"] ?? null);
                echo "\" data-toggle=\"tab\">";
                echo ($context["text_banners"] ?? null);
                echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                      <div class=\"tab-pane active\" id=\"tab-general-setting-group";
                // line 258
                echo ($context["group_row"] ?? null);
                echo "\">
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-group-status-";
                // line 260
                echo ($context["group_row"] ?? null);
                echo "\">";
                echo ($context["entry_status"] ?? null);
                echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"group_tab[";
                // line 262
                echo ($context["group_row"] ?? null);
                echo "][status]\" id=\"input-group-status-";
                echo ($context["group_row"] ?? null);
                echo "\" class=\"form-control\">
                              ";
                // line 263
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "status", [], "any", false, false, false, 263)) {
                    // line 264
                    echo "                              <option value=\"1\" selected=\"selected\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
                              <option value=\"0\">";
                    // line 265
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>
                              ";
                } else {
                    // line 267
                    echo "                              <option value=\"1\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
                              <option value=\"0\" selected=\"selected\">";
                    // line 268
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>
                              ";
                }
                // line 270
                echo "                            </select>
                          </div>
                        </div>                
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
                // line 274
                echo ($context["entry_title_group"] ?? null);
                echo "</label>
                          <div class=\"col-sm-10\">
                            ";
                // line 276
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 277
                    echo "                            <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                              <span class=\"input-group-addon\"><img src=\"language/";
                    // line 278
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 278);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 278);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 278);
                    echo "\" /></span>
                              <input type=\"text\" name=\"group_tab[";
                    // line 279
                    echo ($context["group_row"] ?? null);
                    echo "][title_group][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279);
                    echo "]\" value=\"";
                    echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group", [], "any", false, false, false, 279)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279)] ?? null) : null)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group", [], "any", false, false, false, 279)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279)] ?? null) : null)) : (""));
                    echo "\" id=\"input-name-front-group";
                    echo ($context["group_row"] ?? null);
                    echo "-language";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279);
                    echo "\" class=\"form-control\" />
                            </div>                                                                                                 
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 282
                echo "                          </div>                                                                                                                               
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
                // line 285
                echo ($context["text_title_group_front"] ?? null);
                echo "</label>
                          <div class=\"col-sm-10\">
                            ";
                // line 287
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group_front", [], "any", true, true, false, 287) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group_front", [], "any", false, false, false, 287) == "1"))) {
                    // line 288
                    echo "                            <label class=\"radio-inline\">
                              <input type=\"radio\" name=\"group_tab[";
                    // line 289
                    echo ($context["group_row"] ?? null);
                    echo "][title_group_front]\" value=\"1\" checked=\"checked\" />
                              ";
                    // line 290
                    echo ($context["text_yes"] ?? null);
                    echo "
                            </label>
                            <label class=\"radio-inline\">
                              <input type=\"radio\" name=\"group_tab[";
                    // line 293
                    echo ($context["group_row"] ?? null);
                    echo "][title_group_front]\" value=\"0\" />
                              ";
                    // line 294
                    echo ($context["text_no"] ?? null);
                    echo "
                            </label>
                            ";
                } else {
                    // line 297
                    echo "                            <label class=\"radio-inline\">
                              <input type=\"radio\" name=\"group_tab[";
                    // line 298
                    echo ($context["group_row"] ?? null);
                    echo "][title_group_front]\" value=\"1\" />
                              ";
                    // line 299
                    echo ($context["text_yes"] ?? null);
                    echo "
                            </label>
                            <label class=\"radio-inline\">
                              <input type=\"radio\" name=\"group_tab[";
                    // line 302
                    echo ($context["group_row"] ?? null);
                    echo "][title_group_front]\" value=\"0\" checked=\"checked\" />
                              ";
                    // line 303
                    echo ($context["text_no"] ?? null);
                    echo "
                            </label>
                            ";
                }
                // line 306
                echo "                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-mode-group";
                // line 309
                echo ($context["group_row"] ?? null);
                echo "\"><span data-toggle=\"tooltip\" title=\"";
                echo ($context["help_hidden_setting"] ?? null);
                echo "\">";
                echo ($context["entry_mode"] ?? null);
                echo "</span></label>
                          <div class=\"col-sm-10\">
                            <select name=\"group_tab[";
                // line 311
                echo ($context["group_row"] ?? null);
                echo "][mode]\" id=\"input-mode-group";
                echo ($context["group_row"] ?? null);
                echo "\" class=\"form-control\">
                              <option value=\"grid\" ";
                // line 312
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 312) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 312) == "grid"))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo ($context["text_mode_grid"] ?? null);
                echo "</option>                     
                              <option value=\"carousel\" ";
                // line 313
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 313) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 313) == "carousel"))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo ($context["text_mode_carousel"] ?? null);
                echo "</option>                     
                              <option value=\"respgrid\" ";
                // line 314
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 314) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 314) == "respgrid"))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo ($context["text_mode_resp_grid"] ?? null);
                echo "</option>                     
                            </select>
                          </div>
                        </div>
                        <div class=\"form-group block-rows-group";
                // line 318
                echo ($context["group_row"] ?? null);
                echo "\" style=\"display:none;\">
                          <label class=\"col-sm-2 control-label\" for=\"input-rows-group";
                // line 319
                echo ($context["group_row"] ?? null);
                echo "\">";
                echo ($context["entry_rows"] ?? null);
                echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"group_tab[";
                // line 321
                echo ($context["group_row"] ?? null);
                echo "][rows]\" id=\"input-rows-group";
                echo ($context["group_row"] ?? null);
                echo "\" class=\"form-control\">
                              <option value=\"\">";
                // line 322
                echo ($context["text_select"] ?? null);
                echo "</option>                     
                              <option value=\"1\" ";
                // line 323
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 323) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 323) == "1"))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo ($context["text_one_rows"] ?? null);
                echo "</option>                     
                              <option value=\"2\" ";
                // line 324
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 324) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 324) == "2"))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo ($context["text_two_rows"] ?? null);
                echo "</option>                     
                              <option value=\"3\" ";
                // line 325
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 325) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 325) == "3"))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo ($context["text_three_rows"] ?? null);
                echo "</option>                     
                              <option value=\"4\" ";
                // line 326
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 326) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 326) == "4"))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo ($context["text_four_rows"] ?? null);
                echo "</option>                     
                              <option value=\"6\" ";
                // line 327
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 327) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 327) == "6"))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo ($context["text_six_rows"] ?? null);
                echo "</option>                     
                            </select>
                          </div>
                        </div>
                        <div class=\"block-carousel-group";
                // line 331
                echo ($context["group_row"] ?? null);
                echo "\" style=\"display:none;\">
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                // line 333
                echo ($context["text_carousel_autoplay"] ?? null);
                echo "</label>
                            <div class=\"col-sm-2\">
                              ";
                // line 335
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_autoplay", [], "any", true, true, false, 335) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_autoplay", [], "any", false, false, false, 335) == "1"))) {
                    // line 336
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 337
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_autoplay]\" value=\"1\" checked=\"checked\" />
                                ";
                    // line 338
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 341
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_autoplay]\" value=\"0\" />
                                ";
                    // line 342
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                } else {
                    // line 345
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 346
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_autoplay]\" value=\"1\" />
                                ";
                    // line 347
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 350
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_autoplay]\" value=\"0\" checked=\"checked\" />
                                ";
                    // line 351
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                }
                // line 354
                echo "                            </div>
                            <label class=\"col-sm-4 control-label\" for=\"carousel-autoplay-speed-group";
                // line 355
                echo ($context["group_row"] ?? null);
                echo "\">";
                echo ($context["text_carousel_autoplay_speed"] ?? null);
                echo "</label>
                            <div class=\"col-sm-2\">
                              <input type=\"text\" name=\"group_tab[";
                // line 357
                echo ($context["group_row"] ?? null);
                echo "][carousel_autoplay_speed]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_autoplay_speed", [], "any", false, false, false, 357);
                echo "\" id=\"carousel-autoplay-speed-group";
                echo ($context["group_row"] ?? null);
                echo "\" class=\"form-control\" />
                            </div>
                          </div>                          
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                // line 361
                echo ($context["text_carousel_navigation"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              ";
                // line 363
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_navigation", [], "any", true, true, false, 363) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_navigation", [], "any", false, false, false, 363) == "1"))) {
                    // line 364
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 365
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_navigation]\" value=\"1\" checked=\"checked\" />
                                ";
                    // line 366
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 369
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_navigation]\" value=\"0\" />
                                ";
                    // line 370
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                } else {
                    // line 373
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 374
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_navigation]\" value=\"1\" />
                                ";
                    // line 375
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 378
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_navigation]\" value=\"0\" checked=\"checked\" />
                                ";
                    // line 379
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                }
                // line 382
                echo "                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                // line 385
                echo ($context["text_carousel_pagination"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              ";
                // line 387
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_pagination", [], "any", true, true, false, 387) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_pagination", [], "any", false, false, false, 387) == "1"))) {
                    // line 388
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 389
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_pagination]\" value=\"1\" checked=\"checked\" />
                                ";
                    // line 390
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 393
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_pagination]\" value=\"0\" />
                                ";
                    // line 394
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                } else {
                    // line 397
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 398
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_pagination]\" value=\"1\" />
                                ";
                    // line 399
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 402
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_pagination]\" value=\"0\" checked=\"checked\" />
                                ";
                    // line 403
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                }
                // line 406
                echo "                            </div>
                          </div>                           
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                // line 409
                echo ($context["text_carousel_loop"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              ";
                // line 411
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_loop", [], "any", true, true, false, 411) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_loop", [], "any", false, false, false, 411) == "1"))) {
                    // line 412
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 413
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_loop]\" value=\"1\" checked=\"checked\" />
                                ";
                    // line 414
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 417
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_loop]\" value=\"0\" />
                                ";
                    // line 418
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                } else {
                    // line 421
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 422
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_loop]\" value=\"1\" />
                                ";
                    // line 423
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 426
                    echo ($context["group_row"] ?? null);
                    echo "][carousel_loop]\" value=\"0\" checked=\"checked\" />
                                ";
                    // line 427
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                }
                // line 430
                echo "                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                // line 433
                echo ($context["entry_limit_carousel"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"alert alert-info\">
                                <svg class=\"alert-icon-img\" width=\"36\" height=\"36\" viewBox=\"0 0 36 36\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18 0.5C8.33502 0.5 0.5 8.33502 0.5 18C0.5 27.665 8.33502 35.5 18 35.5C27.665 35.5 35.5 27.665 35.5 18C35.5 13.3587 33.6563 8.90752 30.3744 5.62563C27.0925 2.34374 22.6413 0.5 18 0.5ZM18 32C10.268 32 4 25.732 4 18C4 10.268 10.268 4 18 4C25.732 4 32 10.268 32 18C32 21.713 30.525 25.274 27.8995 27.8995C25.274 30.525 21.713 32 18 32ZM18.875 10.2959C19.3582 10.2959 19.75 10.6877 19.75 11.1709V12.9209C19.75 13.4042 19.3582 13.7959 18.875 13.7959H17.125C16.6418 13.7959 16.25 13.4042 16.25 12.9209V11.1709C16.25 10.6877 16.6418 10.2959 17.125 10.2959H18.875ZM18.875 15.5459C19.3582 15.5459 19.75 15.6301 19.75 16.3303V23.5349C20.2149 23.6643 20.6785 23.7769 21.081 23.8655C21.3254 23.9193 21.5017 24.1342 21.5017 24.3845V25.1791C21.5017 25.469 21.2667 25.7041 20.9767 25.7041H15.025C14.7351 25.7041 14.5 25.469 14.5 25.1791V24.3845C14.5 24.1342 14.6763 23.9193 14.9207 23.8655C15.3227 23.777 15.7857 23.6646 16.25 23.5353V17.7147C15.7857 17.5854 15.3227 17.473 14.9207 17.3845C14.6763 17.3307 14.5 17.1158 14.5 16.8655V16.0709C14.5 15.781 14.7351 15.5459 15.025 15.5459L18.875 15.5459Z\"></path></svg>
                                ";
                // line 437
                echo ($context["help_limit_carousel"] ?? null);
                echo "
                              </div>
                              <div class=\"table-responsive\">
                                <table id=\"carousel-items-group";
                // line 440
                echo ($context["group_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                                  <thead>
                                    <tr>
                                      <td class=\"text-left\">";
                // line 443
                echo ($context["entry_window"] ?? null);
                echo "</td>
                                      <td class=\"text-left\">";
                // line 444
                echo ($context["entry_window_prod_show"] ?? null);
                echo "</td>
                                      <td class=\"text-left\">";
                // line 445
                echo ($context["text_between"] ?? null);
                echo "</td>
                                      <td></td>              
                                    </tr>                                
                                  </thead>
                                  <tbody>
                                    ";
                // line 450
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_item", [], "any", true, true, false, 450)) {
                    echo " 
                                    ";
                    // line 451
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_item", [], "any", false, false, false, 451));
                    foreach ($context['_seq'] as $context["_key"] => $context["carousel_item"]) {
                        echo "                                                                                    
                                    <tr id=\"carousel-item-row-group";
                        // line 452
                        echo ($context["group_row"] ?? null);
                        echo "-";
                        echo ($context["carousel_item_row"] ?? null);
                        echo "\">
                                      <td class=\"text-left\">
                                        <input type=\"text\" name=\"group_tab[";
                        // line 454
                        echo ($context["group_row"] ?? null);
                        echo "][carousel_item][";
                        echo ($context["carousel_item_row"] ?? null);
                        echo "][window]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["carousel_item"], "window", [], "any", true, true, false, 454)) ? (twig_get_attribute($this->env, $this->source, $context["carousel_item"], "window", [], "any", false, false, false, 454)) : (""));
                        echo "\" placeholder=\"";
                        echo ($context["entry_window"] ?? null);
                        echo "\" class=\"form-control\" />
                                      </td> 
                                      <td class=\"text-left\">
                                        <input type=\"text\" name=\"group_tab[";
                        // line 457
                        echo ($context["group_row"] ?? null);
                        echo "][carousel_item][";
                        echo ($context["carousel_item_row"] ?? null);
                        echo "][item]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["carousel_item"], "item", [], "any", true, true, false, 457)) ? (twig_get_attribute($this->env, $this->source, $context["carousel_item"], "item", [], "any", false, false, false, 457)) : (""));
                        echo "\" placeholder=\"";
                        echo ($context["text_quantity_prod"] ?? null);
                        echo "\" class=\"form-control\" />
                                      </td>
                                      <td class=\"text-left\">                                                                                      
                                        <input type=\"text\" name=\"group_tab[";
                        // line 460
                        echo ($context["group_row"] ?? null);
                        echo "][carousel_item][";
                        echo ($context["carousel_item_row"] ?? null);
                        echo "][spaceBetween]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["carousel_item"], "spaceBetween", [], "any", true, true, false, 460)) ? (twig_get_attribute($this->env, $this->source, $context["carousel_item"], "spaceBetween", [], "any", false, false, false, 460)) : (""));
                        echo "\" class=\"form-control\" />
                                      </td>
                                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#carousel-item-row-group";
                        // line 462
                        echo ($context["group_row"] ?? null);
                        echo "-";
                        echo ($context["carousel_item_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
                        // line 464
                        $context["carousel_item_row"] = (($context["carousel_item_row"] ?? null) + 1);
                        // line 465
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 466
                    echo "                                    ";
                }
                // line 467
                echo "                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <td colspan=\"3\"></td>
                                      <td class=\"text-left\"><button type=\"button\" onclick=\"addCarouselItem('";
                // line 471
                echo ($context["group_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>                          
                        </div>
                        <div class=\"block-grid-gutter block-grid-gutter-group";
                // line 479
                echo ($context["group_row"] ?? null);
                echo "\" style=\"display:none;\">
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                // line 481
                echo ($context["entry_grid"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <a onClick=\"addGridElement(";
                // line 483
                echo ($context["group_row"] ?? null);
                echo "); \$('.grid-stack-not-el-";
                echo ($context["group_row"] ?? null);
                echo "').addClass('hidden');\" class=\"btn btn-success\">";
                echo ($context["text_grid_element"] ?? null);
                echo "</a>
                              <div class=\"grid-block grid-setting-";
                // line 484
                echo ($context["group_row"] ?? null);
                echo "\">
                                <div class=\"grid-stack-not-el grid-stack-not-el-";
                // line 485
                echo ($context["group_row"] ?? null);
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "grid_stack", [], "any", false, false, false, 485)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["text_grid_not_element"] ?? null);
                echo "</div>
                                <div class=\"grid-stack grid-stack-group";
                // line 486
                echo ($context["group_row"] ?? null);
                echo "\">
                                  ";
                // line 487
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "grid_stack", [], "any", true, true, false, 487)) {
                    // line 488
                    echo "                                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "grid_stack", [], "any", false, false, false, 488));
                    foreach ($context['_seq'] as $context["_key"] => $context["grid_stack"]) {
                        // line 489
                        echo "                                  <div class=\"grid-stack-item grid-stack-item-group";
                        echo ($context["group_row"] ?? null);
                        echo " grid-stack-item-";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_id", [], "any", false, false, false, 489);
                        echo "\" gs-x=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_x", [], "any", false, false, false, 489);
                        echo "\" gs-y=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_y", [], "any", false, false, false, 489);
                        echo "\" gs-w=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_width", [], "any", false, false, false, 489);
                        echo "\" gs-h=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_height", [], "any", false, false, false, 489);
                        echo "\" gs-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_id", [], "any", false, false, false, 489);
                        echo "\">
                                    <input type=\"hidden\" name=\"group_tab[";
                        // line 490
                        echo ($context["group_row"] ?? null);
                        echo "][grid_stack][";
                        echo ($context["grid_row"] ?? null);
                        echo "][gs_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_id", [], "any", false, false, false, 490);
                        echo "\" id=\"gs_id_";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_id", [], "any", false, false, false, 490);
                        echo "\" class=\"form-control\" />
                                    <input type=\"hidden\" name=\"group_tab[";
                        // line 491
                        echo ($context["group_row"] ?? null);
                        echo "][grid_stack][";
                        echo ($context["grid_row"] ?? null);
                        echo "][gs_x]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_x", [], "any", false, false, false, 491);
                        echo "\" id=\"gs_x_";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_id", [], "any", false, false, false, 491);
                        echo "\" class=\"form-control\" />
                                    <input type=\"hidden\" name=\"group_tab[";
                        // line 492
                        echo ($context["group_row"] ?? null);
                        echo "][grid_stack][";
                        echo ($context["grid_row"] ?? null);
                        echo "][gs_y]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_y", [], "any", false, false, false, 492);
                        echo "\" id=\"gs_y_";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_id", [], "any", false, false, false, 492);
                        echo "\" class=\"form-control\" />
                                    <input type=\"hidden\" name=\"group_tab[";
                        // line 493
                        echo ($context["group_row"] ?? null);
                        echo "][grid_stack][";
                        echo ($context["grid_row"] ?? null);
                        echo "][gs_width]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_width", [], "any", false, false, false, 493);
                        echo "\" id=\"gs_width_";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_id", [], "any", false, false, false, 493);
                        echo "\" class=\"form-control\" />
                                    <input type=\"hidden\" name=\"group_tab[";
                        // line 494
                        echo ($context["group_row"] ?? null);
                        echo "][grid_stack][";
                        echo ($context["grid_row"] ?? null);
                        echo "][gs_height]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_height", [], "any", false, false, false, 494);
                        echo "\" id=\"gs_height_";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_stack"], "gs_id", [], "any", false, false, false, 494);
                        echo "\" class=\"form-control\" />
                                    <div class=\"grid-stack-item-content\">
                                      <i class=\"fa fa-trash-o fa-trash";
                        // line 496
                        echo ($context["group_row"] ?? null);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" onclick=\"grid";
                        echo ($context["group_row"] ?? null);
                        echo ".removeWidget(this.parentNode.parentNode)\"></i>
                                    </div>
                                  </div>
                                  ";
                        // line 499
                        $context["grid_row"] = (($context["grid_row"] ?? null) + 1);
                        // line 500
                        echo "                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_stack'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 501
                    echo "                                  ";
                }
                // line 502
                echo "                                </div>
                              </div>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                // line 507
                echo ($context["entry_grid_gutter"] ?? null);
                echo "</label>
                            <div class=\"col-sm-1\">
                              <input type=\"text\" name=\"group_tab[";
                // line 509
                echo ($context["group_row"] ?? null);
                echo "][gutter]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "gutter", [], "any", true, true, false, 509)) ? (twig_get_attribute($this->env, $this->source, $context["group_tab"], "gutter", [], "any", false, false, false, 509)) : (""));
                echo "\" class=\"form-control\" />
                            </div>
                            <div class=\"text-px\">";
                // line 511
                echo ($context["text_px"] ?? null);
                echo "</div>                       
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label breakpoints-label\"><span>";
                // line 514
                echo ($context["entry_breakpoints"] ?? null);
                echo "</span><a href=\"#pojasnenie-custom-grid\" data-toggle=\"modal\" class=\"help-breakpoints\" target=\"_blank\">";
                echo ($context["help_breakpoints"] ?? null);
                echo "</a></label>
                            <div class=\"col-sm-10\">
                              <div class=\"table-responsive\">
                                <table id=\"grid-breakpoints-group";
                // line 517
                echo ($context["group_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                                  <thead>
                                    <tr>
                                      <td class=\"text-left\"><span data-toggle=\"tooltip\" title=\"";
                // line 520
                echo ($context["help_breakpoints_name"] ?? null);
                echo "\">";
                echo ($context["text_breakpoints_name"] ?? null);
                echo "</span></td>
                                      <td class=\"text-left\"><span data-toggle=\"tooltip\" title=\"";
                // line 521
                echo ($context["help_grid_range"] ?? null);
                echo "\">";
                echo ($context["text_grid_range"] ?? null);
                echo "</span></td>
                                      <td class=\"text-left\">";
                // line 522
                echo ($context["text_grid_column"] ?? null);
                echo "</td>
                                      <td class=\"text-left\">";
                // line 523
                echo ($context["text_gutter_column"] ?? null);
                echo "</td>
                                      <td></td>              
                                    </tr>                                
                                  </thead>
                                  <tbody>
                                    ";
                // line 528
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "breakpoint", [], "any", true, true, false, 528)) {
                    // line 529
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "breakpoint", [], "any", false, false, false, 529));
                    foreach ($context['_seq'] as $context["_key"] => $context["grid_breakpoint"]) {
                        // line 530
                        echo "                                    <tr id=\"grid-breakpoint-group";
                        echo ($context["group_row"] ?? null);
                        echo "-breakpoint";
                        echo ($context["breakpoint_row"] ?? null);
                        echo "\">
                                      <td class=\"text-left\">                                                                                
                                        <input type=\"text\" name=\"group_tab[";
                        // line 532
                        echo ($context["group_row"] ?? null);
                        echo "][breakpoint][";
                        echo ($context["breakpoint_row"] ?? null);
                        echo "][name]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["grid_breakpoint"], "name", [], "any", true, true, false, 532)) ? (twig_get_attribute($this->env, $this->source, $context["grid_breakpoint"], "name", [], "any", false, false, false, 532)) : (""));
                        echo "\" class=\"form-control\" />
                                      </td>
                                      <td class=\"text-left\">
                                        <input type=\"text\" name=\"group_tab[";
                        // line 535
                        echo ($context["group_row"] ?? null);
                        echo "][breakpoint][";
                        echo ($context["breakpoint_row"] ?? null);
                        echo "][range]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["grid_breakpoint"], "range", [], "any", true, true, false, 535)) ? (twig_get_attribute($this->env, $this->source, $context["grid_breakpoint"], "range", [], "any", false, false, false, 535)) : (""));
                        echo "\" class=\"form-control\" />
                                      </td>
                                      <td class=\"text-left\">
                                        <input type=\"text\" name=\"group_tab[";
                        // line 538
                        echo ($context["group_row"] ?? null);
                        echo "][breakpoint][";
                        echo ($context["breakpoint_row"] ?? null);
                        echo "][column]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["grid_breakpoint"], "column", [], "any", true, true, false, 538)) ? (twig_get_attribute($this->env, $this->source, $context["grid_breakpoint"], "column", [], "any", false, false, false, 538)) : (""));
                        echo "\" class=\"form-control\" />
                                      </td>
                                      <td class=\"text-left\">                                                                                      
                                        <input type=\"text\" name=\"group_tab[";
                        // line 541
                        echo ($context["group_row"] ?? null);
                        echo "][breakpoint][";
                        echo ($context["breakpoint_row"] ?? null);
                        echo "][gutter]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["grid_breakpoint"], "gutter", [], "any", true, true, false, 541)) ? (twig_get_attribute($this->env, $this->source, $context["grid_breakpoint"], "gutter", [], "any", false, false, false, 541)) : (""));
                        echo "\" class=\"form-control\" />
                                      </td>
                                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#grid-breakpoint-group";
                        // line 543
                        echo ($context["group_row"] ?? null);
                        echo "-breakpoint";
                        echo ($context["breakpoint_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
                        // line 545
                        $context["breakpoint_row"] = (($context["breakpoint_row"] ?? null) + 1);
                        // line 546
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_breakpoint'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 547
                    echo "                                    ";
                }
                // line 548
                echo "                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <td colspan=\"4\"></td>
                                      <td class=\"text-left\"><button type=\"button\" onclick=\"addGridBreakpoints('";
                // line 552
                echo ($context["group_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 560
                echo ($context["help_width_mobile_image"] ?? null);
                echo "\">";
                echo ($context["entry_width_mobile_image"] ?? null);
                echo "</span></label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group\">
                                <input type=\"text\" name=\"group_tab[";
                // line 563
                echo ($context["group_row"] ?? null);
                echo "][max_width_image_mobile]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "max_width_image_mobile", [], "any", true, true, false, 563)) ? (twig_get_attribute($this->env, $this->source, $context["group_tab"], "max_width_image_mobile", [], "any", false, false, false, 563)) : (""));
                echo "\" class=\"form-control\" />
                                <div class=\"input-group-addon\">";
                // line 564
                echo ($context["text_px"] ?? null);
                echo "</div>
                              </div>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 569
                echo ($context["help_banner_width_mobile"] ?? null);
                echo "\">";
                echo ($context["entry_viewport"] ?? null);
                echo "</span></label>
                            <div class=\"col-sm-10\">
                              ";
                // line 571
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_width_mobile", [], "any", true, true, false, 571) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_width_mobile", [], "any", false, false, false, 571) == "1"))) {
                    // line 572
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 573
                    echo ($context["group_row"] ?? null);
                    echo "][banner_width_mobile]\" value=\"1\" checked=\"checked\" />
                                ";
                    // line 574
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 577
                    echo ($context["group_row"] ?? null);
                    echo "][banner_width_mobile]\" value=\"0\" />
                                ";
                    // line 578
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                } else {
                    // line 581
                    echo "                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 582
                    echo ($context["group_row"] ?? null);
                    echo "][banner_width_mobile]\" value=\"1\" />
                                ";
                    // line 583
                    echo ($context["text_yes"] ?? null);
                    echo "
                              </label>
                              <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"group_tab[";
                    // line 586
                    echo ($context["group_row"] ?? null);
                    echo "][banner_width_mobile]\" value=\"0\" checked=\"checked\" />
                                ";
                    // line 587
                    echo ($context["text_no"] ?? null);
                    echo "
                              </label>
                              ";
                }
                // line 590
                echo "                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"tab-pane\" id=\"tab-setting-banners-group";
                // line 594
                echo ($context["group_row"] ?? null);
                echo "\">
                        <div class=\"form-group block-image-sizes block-image-sizes-group";
                // line 595
                echo ($context["group_row"] ?? null);
                echo "\" style=\"display:none;\">
                          <label class=\"col-sm-3 control-label\">";
                // line 596
                echo ($context["entry_dimension"] ?? null);
                echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"row\">
                              <div class=\"col-sm-6 image-sizes\">
                                <div class=\"input-group\">
                                  <div class=\"input-group-addon\">";
                // line 601
                echo ($context["entry_width"] ?? null);
                echo "</div>
                                  <input type=\"text\" name=\"group_tab[";
                // line 602
                echo ($context["group_row"] ?? null);
                echo "][width_image]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "width_image", [], "any", true, true, false, 602)) ? (twig_get_attribute($this->env, $this->source, $context["group_tab"], "width_image", [], "any", false, false, false, 602)) : (""));
                echo "\" id=\"input-width-group";
                echo ($context["group_row"] ?? null);
                echo "\" class=\"form-control\" />
                                  <div class=\"input-group-addon\">";
                // line 603
                echo ($context["text_px"] ?? null);
                echo "</div>
                                </div>
                              </div>
                              <div class=\"col-sm-6 image-sizes\">
                                <div class=\"input-group\">
                                  <div class=\"input-group-addon\">";
                // line 608
                echo ($context["entry_height"] ?? null);
                echo "</div>
                                  <input type=\"text\" name=\"group_tab[";
                // line 609
                echo ($context["group_row"] ?? null);
                echo "][height_image]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "height_image", [], "any", true, true, false, 609)) ? (twig_get_attribute($this->env, $this->source, $context["group_tab"], "height_image", [], "any", false, false, false, 609)) : (""));
                echo "\" id=\"input-height-group";
                echo ($context["group_row"] ?? null);
                echo "\" class=\"form-control\" />
                                  <div class=\"input-group-addon\">";
                // line 610
                echo ($context["text_px"] ?? null);
                echo "</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"form-group block-image-sizes block-image-sizes-group";
                // line 616
                echo ($context["group_row"] ?? null);
                echo "\" style=\"display:none;\">
                          <label class=\"col-sm-3 control-label\">";
                // line 617
                echo ($context["entry_dimension_mobile"] ?? null);
                echo "</label>
                          <div class=\"col-sm-9\">
                            <div class=\"row\">
                              <div class=\"col-sm-6 image-sizes\">
                                <div class=\"input-group\">
                                  <div class=\"input-group-addon\">";
                // line 622
                echo ($context["entry_width"] ?? null);
                echo "</div>
                                  <input type=\"text\" name=\"group_tab[";
                // line 623
                echo ($context["group_row"] ?? null);
                echo "][width_image_mobile]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "width_image_mobile", [], "any", true, true, false, 623)) ? (twig_get_attribute($this->env, $this->source, $context["group_tab"], "width_image_mobile", [], "any", false, false, false, 623)) : (""));
                echo "\" id=\"input-width-mobile-group";
                echo ($context["group_row"] ?? null);
                echo "\" class=\"form-control\" />
                                  <div class=\"input-group-addon\">";
                // line 624
                echo ($context["text_px"] ?? null);
                echo "</div>
                                </div>
                              </div>
                              <div class=\"col-sm-6 image-sizes\">
                                <div class=\"input-group\">
                                  <div class=\"input-group-addon\">";
                // line 629
                echo ($context["entry_height"] ?? null);
                echo "</div>
                                  <input type=\"text\" name=\"group_tab[";
                // line 630
                echo ($context["group_row"] ?? null);
                echo "][height_image_mobile]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "height_image_mobile", [], "any", true, true, false, 630)) ? (twig_get_attribute($this->env, $this->source, $context["group_tab"], "height_image_mobile", [], "any", false, false, false, 630)) : (""));
                echo "\" id=\"input-height-mobile-group";
                echo ($context["group_row"] ?? null);
                echo "\" class=\"form-control\" />
                                  <div class=\"input-group-addon\">";
                // line 631
                echo ($context["text_px"] ?? null);
                echo "</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col-sm-3\">  
                            <ul class=\"nav nav-pills nav-stacked\" id=\"banner-image-group";
                // line 639
                echo ($context["group_row"] ?? null);
                echo "\">
\t\t\t\t\t\t                  ";
                // line 640
                $context["banner_row"] = 0;
                // line 641
                echo "                              ";
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", true, true, false, 641)) {
                    // line 642
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", false, false, false, 642));
                    foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                        echo " 
\t\t\t\t\t\t\t                <li class=\"banner-image\"><a href=\"#tab-banner-images-group";
                        // line 643
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\" data-toggle=\"tab\">";
                        echo ($context["entry_banner"] ?? null);
                        echo " - ";
                        echo ($context["banner_row"] ?? null);
                        echo " <i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-banner-images-group";
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\\']').parent().remove(); \$('#tab-banner-images-group";
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "').remove(); \$('#banner-image-group";
                        echo ($context["group_row"] ?? null);
                        echo " a:first').tab('show');\"></i></a></li>
\t\t\t\t\t\t\t                ";
                        // line 644
                        $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                        echo "                                                                                                                                                                                                                                                                        
\t\t\t\t\t\t\t                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 646
                    echo "                              ";
                }
                // line 647
                echo "\t\t\t\t\t\t  \t              <li class=\"banner-image-add\" id=\"banner-image-add-group";
                echo ($context["group_row"] ?? null);
                echo "\"><a onclick=\"addBanner('";
                echo ($context["group_row"] ?? null);
                echo "');\"><i class=\"fa fa-plus-circle\"></i> ";
                echo ($context["text_add_banner"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t                </ul>
                          </div>
                          ";
                // line 650
                $context["banner_row"] = 0;
                // line 651
                echo "                          <div class=\"col-sm-9\">
                            <div class=\"tab-content\">
                              ";
                // line 653
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", true, true, false, 653)) {
                    echo " 
                              ";
                    // line 654
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", false, false, false, 654));
                    foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                        // line 655
                        echo "                              <div class=\"tab-pane\" id=\"tab-banner-images-group";
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\">
                                <div class=\"block-type-banner block-type-banner-group";
                        // line 656
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\">
                                  <div class=\"form-group\">                                                                 
                                    <label class=\"col-sm-2 control-label\" for=\"input-banner-type-group";
                        // line 658
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\">";
                        echo ($context["entry_image_type"] ?? null);
                        echo "</label>
                                    <div class=\"col-sm-10\">
                                      <select name=\"group_tab[";
                        // line 660
                        echo ($context["group_row"] ?? null);
                        echo "][banner_image][";
                        echo ($context["banner_row"] ?? null);
                        echo "][type]\" id=\"input-banner-type-group";
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\" class=\"form-control\">
                                        <option value=\"image_image\" ";
                        // line 661
                        if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 661) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 661) == "image_image"))) {
                            echo " ";
                            echo "selected=\"selected\"";
                            echo " ";
                        }
                        echo ">";
                        echo ($context["entry_type_image_image"] ?? null);
                        echo "</option>                     
                                        <option value=\"image_video\" ";
                        // line 662
                        if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 662) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 662) == "image_video"))) {
                            echo " ";
                            echo "selected=\"selected\"";
                            echo " ";
                        }
                        echo ">";
                        echo ($context["entry_type_image_video"] ?? null);
                        echo "</option>
                                        <option value=\"image_slider\" ";
                        // line 663
                        if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 663) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 663) == "image_slider"))) {
                            echo " ";
                            echo "selected=\"selected\"";
                            echo " ";
                        }
                        echo " class=\"image-slider-group";
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\">";
                        echo ($context["entry_type_image_slider"] ?? null);
                        echo "</option>                     
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"col-sm-2 control-label\" for=\"banner-status-group";
                        // line 669
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\">";
                        echo ($context["entry_status"] ?? null);
                        echo "</label>
                                  <div class=\"col-sm-10\">
                                    <select name=\"group_tab[";
                        // line 671
                        echo ($context["group_row"] ?? null);
                        echo "][banner_image][";
                        echo ($context["banner_row"] ?? null);
                        echo "][status]\" id=\"banner-status-group";
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\" class=\"form-control\">
                                      ";
                        // line 672
                        if (twig_get_attribute($this->env, $this->source, $context["banner_image"], "status", [], "any", false, false, false, 672)) {
                            // line 673
                            echo "                                      <option value=\"1\" selected=\"selected\">";
                            echo ($context["text_enabled"] ?? null);
                            echo "</option>
                                      <option value=\"0\">";
                            // line 674
                            echo ($context["text_disabled"] ?? null);
                            echo "</option>
                                      ";
                        } else {
                            // line 676
                            echo "                                      <option value=\"1\">";
                            echo ($context["text_enabled"] ?? null);
                            echo "</option>
                                      <option value=\"0\" selected=\"selected\">";
                            // line 677
                            echo ($context["text_disabled"] ?? null);
                            echo "</option>
                                      ";
                        }
                        // line 679
                        echo "                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group sort-banner\">
                                  <label class=\"col-sm-2 control-label\" for=\"input-banner-sort-group";
                        // line 683
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\">";
                        echo ($context["entry_sort_order"] ?? null);
                        echo "</label>
                                  <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"group_tab[";
                        // line 685
                        echo ($context["group_row"] ?? null);
                        echo "][banner_image][";
                        echo ($context["banner_row"] ?? null);
                        echo "][sort_order]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "sort_order", [], "any", false, false, false, 685);
                        echo "\" id=\"input-banner-sort-group";
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\" placeholder=\"";
                        echo ($context["entry_sort_order"] ?? null);
                        echo "\" class=\"form-control\" />
                                  </div>
                                </div>
                                <ul class=\"nav nav-tabs\" id=\"language-group";
                        // line 688
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "\">
                                  ";
                        // line 689
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 690
                            echo "                                  <li><a href=\"#tab-images-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 690);
                            echo "\" data-toggle=\"tab\"><img src=\"language/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 690);
                            echo "/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 690);
                            echo ".png\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 690);
                            echo "\" /> ";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 690);
                            echo "</a></li>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 692
                        echo "                                </ul>
                                <div class=\"tab-content\">
                                  ";
                        // line 694
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 695
                            echo "                                  <div class=\"tab-pane\" id=\"tab-images-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 695);
                            echo "\">
                                    <div class=\"block-video block-video-group";
                            // line 696
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 696);
                            echo "\">
                                      <div class=\"form-group\">                                                                 
                                        <label class=\"col-sm-2 control-label\" for=\"input-video-host-group";
                            // line 698
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 698);
                            echo "\">";
                            echo ($context["entry_video_host"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          <select name=\"group_tab[";
                            // line 700
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][type_image_video_host][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 700);
                            echo "]\" id=\"input-video-host-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 700);
                            echo "\" class=\"form-control\">
                                            <option value=\"\">";
                            // line 701
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                                            <option value=\"youtube\" ";
                            // line 702
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_host", [], "any", false, true, false, 702), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 702), [], "array", true, true, false, 702) && ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_host", [], "any", false, false, false, 702)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 702)] ?? null) : null) == "youtube"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["entry_youtube"] ?? null);
                            echo "</option>                     
                                            <option value=\"vimeo\" ";
                            // line 703
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_host", [], "any", false, true, false, 703), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 703), [], "array", true, true, false, 703) && ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_host", [], "any", false, false, false, 703)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 703)] ?? null) : null) == "vimeo"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["entry_vimeo"] ?? null);
                            echo "</option>
                                          </select>
                                        </div>
                                      </div> 
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-link-image-video-group";
                            // line 708
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 708);
                            echo "\">";
                            echo ($context["entry_video_id"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-6\">
                                          <input type=\"text\" name=\"group_tab[";
                            // line 710
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][type_image_video_id][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 710);
                            echo "]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_id", [], "any", false, true, false, 710), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 710), [], "array", true, true, false, 710)) ? ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_id", [], "any", false, false, false, 710)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 710)] ?? null) : null)) : (""));
                            echo "\" id=\"input-link-image-video-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 710);
                            echo "\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-4 example-video\"><a href=\"#modal-video-id\" data-toggle=\"modal\">";
                            // line 712
                            echo ($context["text_example_video"] ?? null);
                            echo "</a></div>
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-title-video-group";
                            // line 715
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 715);
                            echo "\">";
                            echo ($context["entry_title"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          <input type=\"text\" name=\"group_tab[";
                            // line 717
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][title_video][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 717);
                            echo "]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video", [], "any", false, true, false, 717), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 717), [], "array", true, true, false, 717)) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video", [], "any", false, false, false, 717)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 717)] ?? null) : null)) : (""));
                            echo "\" id=\"input-title-video-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 717);
                            echo "\" placeholder=\"";
                            echo ($context["entry_title"] ?? null);
                            echo "\" class=\"form-control\" />
                                        </div> 
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
                            // line 721
                            echo ($context["entry_title_banner"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          ";
                            // line 723
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video_show", [], "any", false, true, false, 723), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 723), [], "array", true, true, false, 723) && ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video_show", [], "any", false, false, false, 723)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 723)] ?? null) : null) == "1"))) {
                                // line 724
                                echo "                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 725
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][title_video_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 725);
                                echo "]\" value=\"1\" checked=\"checked\" />
                                            ";
                                // line 726
                                echo ($context["text_yes"] ?? null);
                                echo "
                                          </label>
                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 729
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][title_video_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 729);
                                echo "]\" value=\"0\" />
                                            ";
                                // line 730
                                echo ($context["text_no"] ?? null);
                                echo "
                                          </label>
                                          ";
                            } else {
                                // line 733
                                echo "                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 734
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][title_video_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 734);
                                echo "]\" value=\"1\" />
                                            ";
                                // line 735
                                echo ($context["text_yes"] ?? null);
                                echo "
                                          </label>
                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 738
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][title_video_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 738);
                                echo "]\" value=\"0\" checked=\"checked\" />
                                            ";
                                // line 739
                                echo ($context["text_no"] ?? null);
                                echo "
                                          </label>
                                          ";
                            }
                            // line 742
                            echo "                                        </div>
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"position-title-video-group";
                            // line 745
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 745);
                            echo "\">";
                            echo ($context["entry_position_desc"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          <select name=\"group_tab[";
                            // line 747
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][position_title_video][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 747);
                            echo "]\" id=\"position-title-video-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 747);
                            echo "\" class=\"form-control\">
                                            <option value=\"\">";
                            // line 748
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                                            <option value=\"title_after_image\" ";
                            // line 749
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title_video", [], "any", false, true, false, 749), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 749), [], "array", true, true, false, 749) && ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title_video", [], "any", false, false, false, 749)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 749)] ?? null) : null) == "title_after_image"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_title_after_image"] ?? null);
                            echo "</option>                     
                                            <option value=\"title_before_image\" ";
                            // line 750
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title_video", [], "any", false, true, false, 750), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 750), [], "array", true, true, false, 750) && ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title_video", [], "any", false, false, false, 750)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 750)] ?? null) : null) == "title_before_image"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_title_before_image"] ?? null);
                            echo "</option>                     
                                          </select>
                                        </div>
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"video-title-align-group";
                            // line 755
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 755);
                            echo "\">";
                            echo ($context["entry_text_align"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          <select name=\"group_tab[";
                            // line 757
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][align_title_video][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 757);
                            echo "]\" id=\"video-title-align-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 757);
                            echo "\" class=\"form-control\">
                                            <option value=\"\">";
                            // line 758
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                                            <option value=\"left\" ";
                            // line 759
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", false, true, false, 759), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 759), [], "array", true, true, false, 759) && ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", false, false, false, 759)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 759)] ?? null) : null) == "left"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_align_left"] ?? null);
                            echo "</option>                     
                                            <option value=\"center\" ";
                            // line 760
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", false, true, false, 760), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 760), [], "array", true, true, false, 760) && ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", false, false, false, 760)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 760)] ?? null) : null) == "center"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_align_center"] ?? null);
                            echo "</option>                     
                                            <option value=\"right\" ";
                            // line 761
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", false, true, false, 761), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 761), [], "array", true, true, false, 761) && ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", false, false, false, 761)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 761)] ?? null) : null) == "right"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_align_right"] ?? null);
                            echo "</option>                     
                                          </select>
                                        </div>
                                      </div>
                                    </div>                                  
                                    <div class=\"block-image block-image-group";
                            // line 766
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 766);
                            echo "\">
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-image-group";
                            // line 768
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 768);
                            echo "\">";
                            echo ($context["entry_thumb"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">                                                                                                                                                        
                                          <a href=\"\" id=\"thumb-image-group";
                            // line 770
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 770);
                            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["banner_image"], "thumb", [], "any", false, false, false, 770)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 770)] ?? null) : null);
                            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                            echo ($context["placeholder"] ?? null);
                            echo "\" /></a>
                                          <input type=\"hidden\" name=\"group_tab[";
                            // line 771
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][image][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 771);
                            echo "]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, true, false, 771), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 771), [], "array", true, true, false, 771)) ? ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 771)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 771)] ?? null) : null)) : (""));
                            echo "\" id=\"input-image-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 771);
                            echo "\" />
                                        </div>
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"animation-group";
                            // line 775
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 775);
                            echo "\">";
                            echo ($context["entry_hover_effects"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-4\">
                                          <select name=\"group_tab[";
                            // line 777
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][animation][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 777);
                            echo "]\" id=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 777);
                            echo "\" class=\"form-control\">
                                            <option value=\"\">";
                            // line 778
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                                            <option value=\"scale\" ";
                            // line 779
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 779), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 779), [], "array", true, true, false, 779) && ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 779)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 779)] ?? null) : null) == "scale"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_scale"] ?? null);
                            echo "</option>                     
                                            <option value=\"grayscale\" ";
                            // line 780
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 780), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 780), [], "array", true, true, false, 780) && ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 780)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 780)] ?? null) : null) == "grayscale"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_grayscale"] ?? null);
                            echo "</option>                     
                                            <option value=\"opacity\" ";
                            // line 781
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 781), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 781), [], "array", true, true, false, 781) && ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 781)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 781)] ?? null) : null) == "opacity"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_opacity"] ?? null);
                            echo "</option>                     
                                            <option value=\"sepia\" ";
                            // line 782
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 782), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 782), [], "array", true, true, false, 782) && ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 782)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 782)] ?? null) : null) == "sepia"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_sepia"] ?? null);
                            echo "</option>                     
                                            <option value=\"apollo\" ";
                            // line 783
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 783), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 783), [], "array", true, true, false, 783) && ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 783)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 783)] ?? null) : null) == "apollo"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo " class=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 783);
                            echo "\">";
                            echo ($context["text_apollo"] ?? null);
                            echo "</option>                     
                                            <option value=\"jazz\" ";
                            // line 784
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 784), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 784), [], "array", true, true, false, 784) && ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 784)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 784)] ?? null) : null) == "jazz"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo " class=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 784);
                            echo "\">";
                            echo ($context["text_jazz"] ?? null);
                            echo "</option>                     
                                            <option value=\"sarah\" ";
                            // line 785
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 785), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 785), [], "array", true, true, false, 785) && ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 785)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 785)] ?? null) : null) == "sarah"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo "  class=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 785);
                            echo "\">";
                            echo ($context["text_sarah"] ?? null);
                            echo "</option>                     
                                            <option value=\"romeo\" ";
                            // line 786
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 786), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 786), [], "array", true, true, false, 786) && ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 786)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 786)] ?? null) : null) == "romeo"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo " class=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 786);
                            echo "\">";
                            echo ($context["text_romeo"] ?? null);
                            echo "</option>                     
                                            <option value=\"bubba\" ";
                            // line 787
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 787), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 787), [], "array", true, true, false, 787) && ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 787)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 787)] ?? null) : null) == "bubba"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo " class=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 787);
                            echo "\">";
                            echo ($context["text_bubba"] ?? null);
                            echo "</option>                     
                                            <option value=\"marley\" ";
                            // line 788
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 788), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 788), [], "array", true, true, false, 788) && ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 788)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 788)] ?? null) : null) == "marley"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo " class=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 788);
                            echo "\">";
                            echo ($context["text_marley"] ?? null);
                            echo "</option>                     
                                            <option value=\"oscar\" ";
                            // line 789
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 789), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 789), [], "array", true, true, false, 789) && ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 789)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 789)] ?? null) : null) == "oscar"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo " class=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 789);
                            echo "\">";
                            echo ($context["text_oscar"] ?? null);
                            echo "</option>                     
                                            <option value=\"sadie\" ";
                            // line 790
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, true, false, 790), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 790), [], "array", true, true, false, 790) && ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 790)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 790)] ?? null) : null) == "sadie"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo " class=\"animation-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 790);
                            echo "\">";
                            echo ($context["text_sadie"] ?? null);
                            echo "</option>                     
                                          </select>
                                        </div>
                                        <div class=\"col-sm-6 example-effect\"><a href=\"//oc-day.ru/examples-of-hover-effects/\" target=\"_blank\">";
                            // line 793
                            echo ($context["text_example_effect"] ?? null);
                            echo "</a></div>
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-title-image-group";
                            // line 796
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 796);
                            echo "\">";
                            echo ($context["entry_title"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          <input type=\"text\" name=\"group_tab[";
                            // line 798
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][title_image][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 798);
                            echo "]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, true, false, 798), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 798), [], "array", true, true, false, 798)) ? ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, false, false, 798)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 798)] ?? null) : null)) : (""));
                            echo "\" id=\"input-title-image-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 798);
                            echo "\" placeholder=\"";
                            echo ($context["entry_title"] ?? null);
                            echo "\" class=\"form-control\" />
                                        </div> 
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-alt-image-group";
                            // line 802
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 802);
                            echo "\">";
                            echo ($context["entry_alt"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          <input type=\"text\" name=\"group_tab[";
                            // line 804
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][alt_image][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 804);
                            echo "]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "alt_image", [], "any", false, true, false, 804), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 804), [], "array", true, true, false, 804)) ? ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "alt_image", [], "any", false, false, false, 804)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 804)] ?? null) : null)) : (""));
                            echo "\" id=\"input-alt-image-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 804);
                            echo "\" placeholder=\"";
                            echo ($context["entry_alt"] ?? null);
                            echo "\" class=\"form-control\" />
                                        </div>
                                      </div>
                                      <div class=\"form-group title-show title-show-group";
                            // line 807
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 807);
                            echo "\">
                                        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                            // line 808
                            echo ($context["help_hidden_setting"] ?? null);
                            echo "\">";
                            echo ($context["entry_title_banner"] ?? null);
                            echo "</span></label>
                                        <div class=\"col-sm-10\">
                                          ";
                            // line 810
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, true, false, 810), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 810), [], "array", true, true, false, 810) && ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 810)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 810)] ?? null) : null) == "1"))) {
                                // line 811
                                echo "                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 812
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][title_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 812);
                                echo "]\" value=\"1\" checked=\"checked\" />
                                            ";
                                // line 813
                                echo ($context["text_yes"] ?? null);
                                echo "
                                          </label>
                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 816
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][title_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 816);
                                echo "]\" value=\"0\" />
                                            ";
                                // line 817
                                echo ($context["text_no"] ?? null);
                                echo "
                                          </label>
                                          ";
                            } else {
                                // line 820
                                echo "                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 821
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][title_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 821);
                                echo "]\" value=\"1\" />
                                            ";
                                // line 822
                                echo ($context["text_yes"] ?? null);
                                echo "
                                          </label>
                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 825
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][title_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 825);
                                echo "]\" value=\"0\" checked=\"checked\" />
                                            ";
                                // line 826
                                echo ($context["text_no"] ?? null);
                                echo "
                                          </label>
                                          ";
                            }
                            // line 829
                            echo "                                        </div>
                                      </div>
                                      <div class=\"block-title-banner block-title-banner-group";
                            // line 831
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 831);
                            echo "\" style=\"display:none;\">
                                        <div class=\"form-group\">
                                          <label class=\"col-sm-2 control-label\" for=\"position-title-image-group";
                            // line 833
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 833);
                            echo "\">";
                            echo ($context["entry_position_desc"] ?? null);
                            echo "</label>
                                          <div class=\"col-sm-10\">
                                            <select name=\"group_tab[";
                            // line 835
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][position_title][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 835);
                            echo "]\" id=\"position-title-image-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 835);
                            echo "\" class=\"form-control\">
                                              <option value=\"\">";
                            // line 836
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                                              <option value=\"title_after_image\" ";
                            // line 837
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, true, false, 837), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 837), [], "array", true, true, false, 837) && ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, false, false, 837)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 837)] ?? null) : null) == "title_after_image"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_title_after_image"] ?? null);
                            echo "</option>                     
                                              <option value=\"title_before_image\" ";
                            // line 838
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, true, false, 838), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 838), [], "array", true, true, false, 838) && ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, false, false, 838)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 838)] ?? null) : null) == "title_before_image"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_title_before_image"] ?? null);
                            echo "</option>                     
                                              <option value=\"title_html_image\" ";
                            // line 839
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, true, false, 839), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 839), [], "array", true, true, false, 839) && ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, false, false, 839)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 839)] ?? null) : null) == "title_html_image"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_title_html_image"] ?? null);
                            echo "</option>                     
                                            </select>
                                          </div>
                                        </div>
                                        <div class=\"form-group\">
                                          <label class=\"col-sm-2 control-label\" for=\"input-text-align-group";
                            // line 844
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 844);
                            echo "\">";
                            echo ($context["entry_text_align"] ?? null);
                            echo "</label>
                                          <div class=\"col-sm-10\">
                                            <select name=\"group_tab[";
                            // line 846
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][text_align][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 846);
                            echo "]\" id=\"input-text-align-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 846);
                            echo "\" class=\"form-control\">
                                              <option value=\"\">";
                            // line 847
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                                              <option value=\"left\" ";
                            // line 848
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, true, false, 848), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 848), [], "array", true, true, false, 848) && ((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 848)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 848)] ?? null) : null) == "left"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_align_left"] ?? null);
                            echo "</option>                     
                                              <option value=\"center\" ";
                            // line 849
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, true, false, 849), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 849), [], "array", true, true, false, 849) && ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 849)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 849)] ?? null) : null) == "center"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_align_center"] ?? null);
                            echo "</option>                     
                                              <option value=\"right\" ";
                            // line 850
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, true, false, 850), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 850), [], "array", true, true, false, 850) && ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 850)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 850)] ?? null) : null) == "right"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_align_right"] ?? null);
                            echo "</option>                     
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class=\"form-group link-image\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-link-image-group";
                            // line 856
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 856);
                            echo "\">";
                            echo ($context["entry_link"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          <input type=\"text\" name=\"group_tab[";
                            // line 858
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][link_image][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 858);
                            echo "]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, true, false, 858), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 858), [], "array", true, true, false, 858)) ? ((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 858)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 858)] ?? null) : null)) : (""));
                            echo "\" id=\"input-link-image-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 858);
                            echo "\" placeholder=\"";
                            echo ($context["entry_link"] ?? null);
                            echo "\" class=\"form-control\" />
                                        </div>
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
                            // line 862
                            echo ($context["entry_link_video"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          ";
                            // line 864
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_video", [], "any", false, true, false, 864), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 864), [], "array", true, true, false, 864) && ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_video", [], "any", false, false, false, 864)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 864)] ?? null) : null) == "1"))) {
                                // line 865
                                echo "                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 866
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][link_video][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 866);
                                echo "]\" value=\"1\" checked=\"checked\" />
                                            ";
                                // line 867
                                echo ($context["text_yes"] ?? null);
                                echo "
                                          </label>
                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 870
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][link_video][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 870);
                                echo "]\" value=\"0\" />
                                            ";
                                // line 871
                                echo ($context["text_no"] ?? null);
                                echo "
                                          </label>
                                          ";
                            } else {
                                // line 874
                                echo "                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 875
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][link_video][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 875);
                                echo "]\" value=\"1\" />
                                            ";
                                // line 876
                                echo ($context["text_yes"] ?? null);
                                echo "
                                          </label>
                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 879
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][link_video][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 879);
                                echo "]\" value=\"0\" checked=\"checked\" />
                                            ";
                                // line 880
                                echo ($context["text_no"] ?? null);
                                echo "
                                          </label>
                                          ";
                            }
                            // line 883
                            echo "                                        </div>
                                      </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-banner-modal-group";
                            // line 886
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 886);
                            echo "\">";
                            echo ($context["entry_modal"] ?? null);
                            echo "</label>
                                        <div class=\"col-sm-10\">
                                          <select name=\"group_tab[";
                            // line 888
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][modal][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 888);
                            echo "]\" id=\"input-banner-modal-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 888);
                            echo "\" class=\"form-control\">
                                            <option value=\"self\" ";
                            // line 889
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "modal", [], "any", false, true, false, 889), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 889), [], "array", true, true, false, 889) && ((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, $context["banner_image"], "modal", [], "any", false, false, false, 889)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 889)] ?? null) : null) == "self"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_self"] ?? null);
                            echo "</option>                     
                                            <option value=\"blank\" ";
                            // line 890
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "modal", [], "any", false, true, false, 890), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 890), [], "array", true, true, false, 890) && ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source, $context["banner_image"], "modal", [], "any", false, false, false, 890)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 890)] ?? null) : null) == "blank"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_target"] ?? null);
                            echo "</option>                     
                                            <option value=\"modal\" ";
                            // line 891
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "modal", [], "any", false, true, false, 891), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 891), [], "array", true, true, false, 891) && ((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "modal", [], "any", false, false, false, 891)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 891)] ?? null) : null) == "modal"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_modal"] ?? null);
                            echo "</option>                     
                                          </select>
                                        </div>
                                      </div>
                                      <div class=\"form-group banner-desc-group";
                            // line 895
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 895);
                            echo "\">
                                        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                            // line 896
                            echo ($context["help_hidden_setting"] ?? null);
                            echo "\">";
                            echo ($context["entry_banner_desc_show"] ?? null);
                            echo "</span></label>
                                        <div class=\"col-sm-10\">
                                          ";
                            // line 898
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", false, true, false, 898), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 898), [], "array", true, true, false, 898) && ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", false, false, false, 898)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 898)] ?? null) : null) == "1"))) {
                                // line 899
                                echo "                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 900
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][desc_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 900);
                                echo "]\" value=\"1\" checked=\"checked\" />
                                            ";
                                // line 901
                                echo ($context["text_yes"] ?? null);
                                echo "
                                          </label>
                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 904
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][desc_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 904);
                                echo "]\" value=\"0\" />
                                            ";
                                // line 905
                                echo ($context["text_no"] ?? null);
                                echo "
                                          </label>
                                          ";
                            } else {
                                // line 908
                                echo "                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 909
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][desc_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 909);
                                echo "]\" value=\"1\" />
                                            ";
                                // line 910
                                echo ($context["text_yes"] ?? null);
                                echo "
                                          </label>
                                          <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"group_tab[";
                                // line 913
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][desc_show][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 913);
                                echo "]\" value=\"0\" checked=\"checked\" />
                                            ";
                                // line 914
                                echo ($context["text_no"] ?? null);
                                echo "
                                          </label>
                                          ";
                            }
                            // line 917
                            echo "                                        </div>
                                      </div>
                                      <div class=\"block-banner-desc-group";
                            // line 919
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 919);
                            echo "\" style=\"display:none;\">
                                        <div class=\"form-group\">
                                          <label class=\"col-sm-2 control-label\" for=\"input-desc-group";
                            // line 921
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 921);
                            echo "\">";
                            echo ($context["text_description"] ?? null);
                            echo "</label>
                                          <div class=\"col-sm-10\">
                                            <textarea class=\"form-control ";
                            // line 923
                            echo ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "editor", [], "any", false, false, false, 923)) ? ("show-editor") : ("hide-editor"));
                            echo "\" name=\"group_tab[";
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][description][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 923);
                            echo "]\" rows=\"5\" placeholder=\"";
                            echo ($context["text_description"] ?? null);
                            echo "\" id=\"input-desc-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 923);
                            echo "\" data-lang=\"";
                            echo ($context["lang"] ?? null);
                            echo "\">";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, true, false, 923), (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["language"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["language_id"] ?? null) : null), [], "array", true, true, false, 923)) ? ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, false, false, 923)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[(($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["language"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["language_id"] ?? null) : null)] ?? null) : null)) : (""));
                            echo "</textarea>
                                            <a class=\"check-ckeditor check-ckeditor-group";
                            // line 924
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 924);
                            echo "\">";
                            echo ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "editor", [], "any", false, false, false, 924)) ? (($context["text_hide_editor"] ?? null)) : (($context["text_show_editor"] ?? null)));
                            echo "</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>                                  
                                    <!-- Setting Slider -->
                                    ";
                            // line 930
                            $context["slider_item_row"] = 0;
                            // line 931
                            echo "                                    <div class=\"block-slider block-slider-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 931);
                            echo "\">
                                      <div class=\"slide-block-button\">
                                        <div class=\"slide-add\">
                                          <a onclick=\"addSliderElement('";
                            // line 934
                            echo ($context["group_row"] ?? null);
                            echo "', '";
                            echo ($context["banner_row"] ?? null);
                            echo "', '";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 934);
                            echo "');\" class=\"btn btn-success\">";
                            echo ($context["entry_add_slide"] ?? null);
                            echo "</a>
\t\t\t\t\t\t                            </div>
                                        <div class=\"slider-setting\">
                                          <a data-target=\"#slider-setting-group";
                            // line 937
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 937);
                            echo "\" data-toggle=\"modal\" class=\"btn btn-setting\">";
                            echo ($context["entry_settings"] ?? null);
                            echo "</a>
\t\t\t\t\t\t                            </div>
                                      </div>
                                      <div id=\"slider-setting-group";
                            // line 940
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 940);
                            echo "\" class=\"modal fade\">
                                        <div class=\"modal-dialog modal-lg\">
                                          <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                              <h4 class=\"modal-title\">";
                            // line 945
                            echo ($context["entry_settings"] ?? null);
                            echo "</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-3 control-label\" for=\"slider-mode-group";
                            // line 949
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 949);
                            echo "\">";
                            echo ($context["entry_slider_mode"] ?? null);
                            echo "</label>
                                                <div class=\"col-sm-9\">
                                                  <select name=\"group_tab[";
                            // line 951
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][slider_mode][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 951);
                            echo "]\" id=\"slider-mode-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 951);
                            echo "\" class=\"form-control\">
                                                    <option value=\"slide\" ";
                            // line 952
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_mode", [], "any", false, true, false, 952), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 952), [], "array", true, true, false, 952) && ((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_mode", [], "any", false, false, false, 952)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 952)] ?? null) : null) == "slide"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_slide"] ?? null);
                            echo "</option>                     
                                                    <option value=\"fade\" ";
                            // line 953
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_mode", [], "any", false, true, false, 953), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 953), [], "array", true, true, false, 953) && ((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_mode", [], "any", false, false, false, 953)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 953)] ?? null) : null) == "fade"))) {
                                echo " ";
                                echo "selected=\"selected\"";
                                echo " ";
                            }
                            echo ">";
                            echo ($context["text_fade"] ?? null);
                            echo "</option>                     
                                                  </select>
                                                </div>
                                              </div> 
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-3 control-label\">";
                            // line 958
                            echo ($context["text_carousel_autoplay"] ?? null);
                            echo "</label>
                                                <div class=\"col-sm-2\">
                                                  ";
                            // line 960
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay", [], "any", false, true, false, 960), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 960), [], "array", true, true, false, 960) && ((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay", [], "any", false, false, false, 960)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 960)] ?? null) : null) == "1"))) {
                                // line 961
                                echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 962
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_autoplay][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 962);
                                echo "]\" value=\"1\" checked=\"checked\" />
                                                    ";
                                // line 963
                                echo ($context["text_yes"] ?? null);
                                echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 966
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_autoplay][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 966);
                                echo "]\" value=\"0\" />
                                                    ";
                                // line 967
                                echo ($context["text_no"] ?? null);
                                echo "
                                                  </label>
                                                  ";
                            } else {
                                // line 970
                                echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 971
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_autoplay][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 971);
                                echo "]\" value=\"1\" />
                                                    ";
                                // line 972
                                echo ($context["text_yes"] ?? null);
                                echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 975
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_autoplay][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 975);
                                echo "]\" value=\"0\" checked=\"checked\" />
                                                    ";
                                // line 976
                                echo ($context["text_no"] ?? null);
                                echo "
                                                  </label>
                                                  ";
                            }
                            // line 979
                            echo "                                                </div>
                                                <label class=\"col-sm-4 control-label\" for=\"slider-autoplay-speed-group";
                            // line 980
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 980);
                            echo "\">";
                            echo ($context["text_carousel_autoplay_speed"] ?? null);
                            echo "</label>
                                                <div class=\"col-sm-3\">
                                                  <input type=\"text\" name=\"group_tab[";
                            // line 982
                            echo ($context["group_row"] ?? null);
                            echo "][banner_image][";
                            echo ($context["banner_row"] ?? null);
                            echo "][slider_autoplay_speed][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 982);
                            echo "]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay_speed", [], "any", false, true, false, 982), (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["language"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["language_id"] ?? null) : null), [], "array", true, true, false, 982)) ? ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay_speed", [], "any", false, false, false, 982)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[(($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["language"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["language_id"] ?? null) : null)] ?? null) : null)) : (""));
                            echo "\" id=\"slider-autoplay-speed-group";
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 982);
                            echo "\" class=\"form-control\" />
                                                </div>                                                                                                                                           
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-3 control-label\">";
                            // line 986
                            echo ($context["text_carousel_navigation"] ?? null);
                            echo "</label>
                                                <div class=\"col-sm-9\">
                                                  ";
                            // line 988
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_navigation", [], "any", false, true, false, 988), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 988), [], "array", true, true, false, 988) && ((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_navigation", [], "any", false, false, false, 988)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 988)] ?? null) : null) == "1"))) {
                                // line 989
                                echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 990
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_navigation][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 990);
                                echo "]\" value=\"1\" checked=\"checked\" />
                                                    ";
                                // line 991
                                echo ($context["text_yes"] ?? null);
                                echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 994
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_navigation][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 994);
                                echo "]\" value=\"0\" />
                                                    ";
                                // line 995
                                echo ($context["text_no"] ?? null);
                                echo "
                                                  </label>
                                                  ";
                            } else {
                                // line 998
                                echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 999
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_navigation][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 999);
                                echo "]\" value=\"1\" />
                                                    ";
                                // line 1000
                                echo ($context["text_yes"] ?? null);
                                echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1003
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_navigation][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1003);
                                echo "]\" value=\"0\" checked=\"checked\" />
                                                    ";
                                // line 1004
                                echo ($context["text_no"] ?? null);
                                echo "
                                                  </label>
                                                  ";
                            }
                            // line 1007
                            echo "                                                </div>
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-3 control-label\">";
                            // line 1010
                            echo ($context["text_carousel_pagination"] ?? null);
                            echo "</label>
                                                <div class=\"col-sm-9\">
                                                  ";
                            // line 1012
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_pagination", [], "any", false, true, false, 1012), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1012), [], "array", true, true, false, 1012) && ((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_pagination", [], "any", false, false, false, 1012)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1012)] ?? null) : null) == "1"))) {
                                // line 1013
                                echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1014
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_pagination][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1014);
                                echo "]\" value=\"1\" checked=\"checked\" />
                                                    ";
                                // line 1015
                                echo ($context["text_yes"] ?? null);
                                echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1018
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_pagination][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1018);
                                echo "]\" value=\"0\" />
                                                    ";
                                // line 1019
                                echo ($context["text_no"] ?? null);
                                echo "
                                                  </label>
                                                  ";
                            } else {
                                // line 1022
                                echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1023
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_pagination][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1023);
                                echo "]\" value=\"1\" />
                                                    ";
                                // line 1024
                                echo ($context["text_yes"] ?? null);
                                echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1027
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_pagination][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1027);
                                echo "]\" value=\"0\" checked=\"checked\" />
                                                    ";
                                // line 1028
                                echo ($context["text_no"] ?? null);
                                echo "
                                                  </label>
                                                  ";
                            }
                            // line 1031
                            echo "                                                </div>
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-3 control-label\">";
                            // line 1034
                            echo ($context["text_carousel_loop"] ?? null);
                            echo "</label>
                                                <div class=\"col-sm-9\">
                                                  ";
                            // line 1036
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_loop", [], "any", false, true, false, 1036), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1036), [], "array", true, true, false, 1036) && ((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_loop", [], "any", false, false, false, 1036)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1036)] ?? null) : null) == "1"))) {
                                // line 1037
                                echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1038
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_loop][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1038);
                                echo "]\" value=\"1\" checked=\"checked\" />
                                                    ";
                                // line 1039
                                echo ($context["text_yes"] ?? null);
                                echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1042
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_loop][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1042);
                                echo "]\" value=\"0\" />
                                                    ";
                                // line 1043
                                echo ($context["text_no"] ?? null);
                                echo "
                                                  </label>
                                                  ";
                            } else {
                                // line 1046
                                echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1047
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_loop][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1047);
                                echo "]\" value=\"1\" />
                                                    ";
                                // line 1048
                                echo ($context["text_yes"] ?? null);
                                echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                // line 1051
                                echo ($context["group_row"] ?? null);
                                echo "][banner_image][";
                                echo ($context["banner_row"] ?? null);
                                echo "][slider_loop][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1051);
                                echo "]\" value=\"0\" checked=\"checked\" />
                                                    ";
                                // line 1052
                                echo ($context["text_no"] ?? null);
                                echo "
                                                  </label>
                                                  ";
                            }
                            // line 1055
                            echo "                                                </div>
                                              </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
                            // line 1059
                            echo ($context["button_close"] ?? null);
                            echo "</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id=\"slider-wrapper-group";
                            // line 1064
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064);
                            echo "\">
                                        ";
                            // line 1065
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_slider", [], "any", false, true, false, 1065), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1065), [], "array", true, true, false, 1065)) {
                                // line 1066
                                echo "                                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_slider", [], "any", false, false, false, 1066)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1066)] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["slider_item"]) {
                                    // line 1067
                                    echo "                                        <div class=\"slider-block slider-block-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1067);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\">
                                          <div class=\"slide-panel-heading\">
                                            <i class=\"fa fa-arrows handle handle-slider\"></i>
                                            <a data-toggle=\"collapse\" href=\"#slide";
                                    // line 1070
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1070);
                                    echo "\">
                                              ";
                                    // line 1071
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide", [], "any", true, true, false, 1071) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide", [], "any", false, false, false, 1071) != ""))) {
                                        // line 1072
                                        echo "                                              ";
                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide", [], "any", false, false, false, 1072);
                                        echo "
                                              ";
                                    } else {
                                        // line 1074
                                        echo "                                              ";
                                        echo ($context["entry_slide"] ?? null);
                                        echo " - ";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo " 
                                              ";
                                    }
                                    // line 1076
                                    echo "                                            </a>
                                            <div class=\"slide-button\">
                                              <i class=\"fa fa-pencil\" data-tooltip=\"tooltip\" title=\"";
                                    // line 1078
                                    echo ($context["button_edit"] ?? null);
                                    echo "\" data-toggle=\"collapse\" data-target=\"#slide";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1078);
                                    echo "\"></i>
                                              <i class=\"fa fa-life-ring hidden\" data-target=\"#modal-decor-slide";
                                    // line 1079
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1079);
                                    echo "\" data-toggle=\"modal\" data-tooltip=\"tooltip\" title=\"";
                                    echo ($context["button_decor"] ?? null);
                                    echo "\"></i>
                                              <label>
                                                ";
                                    // line 1081
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "status", [], "any", true, true, false, 1081) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "status", [], "any", false, false, false, 1081) == "1"))) {
                                        // line 1082
                                        echo "                                                <i onclick=\"\$(this).toggleClass('slide-on slide-off');\" class=\"fa fa-power-off slide-on\" data-tooltip=\"tooltip\" title=\"";
                                        echo ($context["button_status"] ?? null);
                                        echo "\"></i>
                                                <input type=\"checkbox\" name=\"group_tab[";
                                        // line 1083
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1083);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][status]\" value=\"1\" checked=\"checked\" id=\"slide-status-group";
                                        echo ($context["group_row"] ?? null);
                                        echo "-banner";
                                        echo ($context["banner_row"] ?? null);
                                        echo "-language";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1083);
                                        echo "-item";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "\" />
                                                ";
                                    } else {
                                        // line 1085
                                        echo "                                                <i onclick=\"\$(this).toggleClass('slide-on slide-off');\" class=\"fa fa-power-off slide-off\" data-tooltip=\"tooltip\" title=\"";
                                        echo ($context["button_status"] ?? null);
                                        echo "\"></i>
                                                <input type=\"checkbox\" name=\"group_tab[";
                                        // line 1086
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1086);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][status]\" value=\"1\" id=\"islide-status-group";
                                        echo ($context["group_row"] ?? null);
                                        echo "-banner";
                                        echo ($context["banner_row"] ?? null);
                                        echo "-language";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1086);
                                        echo "-item";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "\" />
                                                ";
                                    }
                                    // line 1088
                                    echo "                                              </label>
                                              <i class=\"fa fa-trash-o\" data-toggle=\"tooltip\" title=\"";
                                    // line 1089
                                    echo ($context["button_remove"] ?? null);
                                    echo "\" onclick=\"\$(this).parent().parent().parent().remove();\"></i>
                                            </div>
                                          </div>
                                          <div id=\"modal-decor-slide";
                                    // line 1092
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1092);
                                    echo "\" class=\"modal fade\">
                                            <div class=\"modal-dialog modal-lg\">
                                              <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                  <h4 class=\"modal-title\">";
                                    // line 1097
                                    echo ($context["button_decor"] ?? null);
                                    echo " [";
                                    echo ($context["entry_slide"] ?? null);
                                    echo " - ";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "]</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                  ";
                                    // line 1100
                                    echo ($context["text_decor_development"] ?? null);
                                    echo "
                                                </div>
                                                <div class=\"modal-footer\">
                                                  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
                                    // line 1103
                                    echo ($context["button_close"] ?? null);
                                    echo "</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div id=\"slide";
                                    // line 1108
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1108);
                                    echo "\" class=\"panel-collapse collapse\">
                                            <div class=\"slide-panel-body\">
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-image-slide-group";
                                    // line 1111
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1111);
                                    echo "\">";
                                    echo ($context["entry_thumb"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">                                                                                                                                                        
                                                  <a href=\"\" id=\"thumb-image-slide-group";
                                    // line 1113
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1113);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "thumb_slide", [], "any", false, false, false, 1113);
                                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                                    echo ($context["placeholder"] ?? null);
                                    echo "\" /></a>
                                                  <input type=\"hidden\" name=\"group_tab[";
                                    // line 1114
                                    echo ($context["group_row"] ?? null);
                                    echo "][banner_image][";
                                    echo ($context["banner_row"] ?? null);
                                    echo "][image_slider][";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1114);
                                    echo "][";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "][image_slide]\" value=\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "image_slide", [], "any", true, true, false, 1114)) ? (twig_get_attribute($this->env, $this->source, $context["slider_item"], "image_slide", [], "any", false, false, false, 1114)) : (""));
                                    echo "\" id=\"input-image-slide-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1114);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\" />
                                                </div>
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-slider-item-title-slide-group";
                                    // line 1118
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1118);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\">";
                                    echo ($context["entry_title"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  <input type=\"text\" name=\"group_tab[";
                                    // line 1120
                                    echo ($context["group_row"] ?? null);
                                    echo "][banner_image][";
                                    echo ($context["banner_row"] ?? null);
                                    echo "][image_slider][";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1120);
                                    echo "][";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "][title_slide]\" value=\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide", [], "any", true, true, false, 1120)) ? (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide", [], "any", false, false, false, 1120)) : (""));
                                    echo "\" id=\"input-slider-item-title-slide-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1120);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\" placeholder=\"";
                                    echo ($context["entry_title"] ?? null);
                                    echo "\" class=\"form-control\" />
                                                </div> 
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-slider-item-alt-slide-group";
                                    // line 1124
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1124);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\">";
                                    echo ($context["entry_alt"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  <input type=\"text\" name=\"group_tab[";
                                    // line 1126
                                    echo ($context["group_row"] ?? null);
                                    echo "][banner_image][";
                                    echo ($context["banner_row"] ?? null);
                                    echo "][image_slider][";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1126);
                                    echo "][";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "][alt_slide]\" value=\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "alt_slide", [], "any", true, true, false, 1126)) ? (twig_get_attribute($this->env, $this->source, $context["slider_item"], "alt_slide", [], "any", false, false, false, 1126)) : (""));
                                    echo "\" id=\"input-slider-item-alt-slide-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1126);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\" placeholder=\"";
                                    echo ($context["entry_alt"] ?? null);
                                    echo "\" class=\"form-control\" />
                                                </div> 
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\">";
                                    // line 1130
                                    echo ($context["entry_title_banner"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  ";
                                    // line 1132
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", true, true, false, 1132) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", false, false, false, 1132) == "1"))) {
                                        // line 1133
                                        echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1134
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1134);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][title_slide_show]\" value=\"1\" checked=\"checked\" />
                                                    ";
                                        // line 1135
                                        echo ($context["text_yes"] ?? null);
                                        echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1138
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1138);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][title_slide_show]\" value=\"0\" />
                                                    ";
                                        // line 1139
                                        echo ($context["text_no"] ?? null);
                                        echo "
                                                  </label>
                                                  ";
                                    } else {
                                        // line 1142
                                        echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1143
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1143);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][title_slide_show]\" value=\"1\" />
                                                    ";
                                        // line 1144
                                        echo ($context["text_yes"] ?? null);
                                        echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1147
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1147);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][title_slide_show]\" value=\"0\" checked=\"checked\" />
                                                    ";
                                        // line 1148
                                        echo ($context["text_no"] ?? null);
                                        echo "
                                                  </label>
                                                  ";
                                    }
                                    // line 1151
                                    echo "                                                </div>
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-slide-text-align-group";
                                    // line 1154
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1154);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\">";
                                    echo ($context["entry_text_align"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  <select name=\"group_tab[";
                                    // line 1156
                                    echo ($context["group_row"] ?? null);
                                    echo "][banner_image][";
                                    echo ($context["banner_row"] ?? null);
                                    echo "][image_slider][";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1156);
                                    echo "][";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "][title_slide_align]\" class=\"form-control\">
                                                    <option value=\"\">";
                                    // line 1157
                                    echo ($context["text_select"] ?? null);
                                    echo "</option>
                                                    <option value=\"left\" ";
                                    // line 1158
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", true, true, false, 1158) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", false, false, false, 1158) == "left"))) {
                                        echo " ";
                                        echo "selected=\"selected\"";
                                        echo " ";
                                    }
                                    echo ">";
                                    echo ($context["text_align_left"] ?? null);
                                    echo "</option>                     
                                                    <option value=\"center\" ";
                                    // line 1159
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", true, true, false, 1159) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", false, false, false, 1159) == "center"))) {
                                        echo " ";
                                        echo "selected=\"selected\"";
                                        echo " ";
                                    }
                                    echo ">";
                                    echo ($context["text_align_center"] ?? null);
                                    echo "</option>                     
                                                    <option value=\"right\" ";
                                    // line 1160
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", true, true, false, 1160) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", false, false, false, 1160) == "right"))) {
                                        echo " ";
                                        echo "selected=\"selected\"";
                                        echo " ";
                                    }
                                    echo ">";
                                    echo ($context["text_align_right"] ?? null);
                                    echo "</option>                     
                                                  </select>
                                                </div>
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-slide-link-group";
                                    // line 1165
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1165);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\">";
                                    echo ($context["entry_link"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  <input type=\"text\" name=\"group_tab[";
                                    // line 1167
                                    echo ($context["group_row"] ?? null);
                                    echo "][banner_image][";
                                    echo ($context["banner_row"] ?? null);
                                    echo "][image_slider][";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1167);
                                    echo "][";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "][link_slide]\" value=\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide", [], "any", true, true, false, 1167)) ? (twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide", [], "any", false, false, false, 1167)) : (""));
                                    echo "\" id=\"input-slide-link-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1167);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\" placeholder=\"";
                                    echo ($context["entry_link"] ?? null);
                                    echo "\" class=\"form-control\" />
                                                </div>
                                              </div>  
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\">";
                                    // line 1171
                                    echo ($context["entry_link_video"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  ";
                                    // line 1173
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video", [], "any", true, true, false, 1173) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video", [], "any", false, false, false, 1173) == "1"))) {
                                        // line 1174
                                        echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1175
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1175);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][link_slide_video]\" value=\"1\" checked=\"checked\" />
                                                    ";
                                        // line 1176
                                        echo ($context["text_yes"] ?? null);
                                        echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1179
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1179);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][link_slide_video]\" value=\"0\" />
                                                    ";
                                        // line 1180
                                        echo ($context["text_no"] ?? null);
                                        echo "
                                                  </label>
                                                  ";
                                    } else {
                                        // line 1183
                                        echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1184
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1184);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][link_slide_video]\" value=\"1\" />
                                                    ";
                                        // line 1185
                                        echo ($context["text_yes"] ?? null);
                                        echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1188
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1188);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][link_slide_video]\" value=\"0\" checked=\"checked\" />
                                                    ";
                                        // line 1189
                                        echo ($context["text_no"] ?? null);
                                        echo "
                                                  </label>
                                                  ";
                                    }
                                    // line 1192
                                    echo "                                                </div>
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-slide-link-video-group";
                                    // line 1195
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1195);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\">";
                                    echo ($context["entry_modal"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  <select name=\"group_tab[";
                                    // line 1197
                                    echo ($context["group_row"] ?? null);
                                    echo "][banner_image][";
                                    echo ($context["banner_row"] ?? null);
                                    echo "][image_slider][";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1197);
                                    echo "][";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "][link_slide_video_modal]\" id=\"input-slide-link-video-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1197);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\" class=\"form-control\">
                                                    <option value=\"self\" ";
                                    // line 1198
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video_modal", [], "any", true, true, false, 1198) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video_modal", [], "any", false, false, false, 1198) == "self"))) {
                                        echo " ";
                                        echo "selected=\"selected\"";
                                        echo " ";
                                    }
                                    echo ">";
                                    echo ($context["text_self"] ?? null);
                                    echo "</option>                     
                                                    <option value=\"blank\" ";
                                    // line 1199
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video_modal", [], "any", true, true, false, 1199) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video_modal", [], "any", false, false, false, 1199) == "blank"))) {
                                        echo " ";
                                        echo "selected=\"selected\"";
                                        echo " ";
                                    }
                                    echo ">";
                                    echo ($context["text_target"] ?? null);
                                    echo "</option>                     
                                                    <option value=\"modal\" ";
                                    // line 1200
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video_modal", [], "any", true, true, false, 1200) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video_modal", [], "any", false, false, false, 1200) == "modal"))) {
                                        echo " ";
                                        echo "selected=\"selected\"";
                                        echo " ";
                                    }
                                    echo ">";
                                    echo ($context["text_modal"] ?? null);
                                    echo "</option>                     
                                                  </select>
                                                </div>
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\">";
                                    // line 1205
                                    echo ($context["entry_banner_desc_show"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  ";
                                    // line 1207
                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", true, true, false, 1207) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", false, false, false, 1207) == "1"))) {
                                        // line 1208
                                        echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1209
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1209);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][desc_slide_show]\" value=\"1\" checked=\"checked\" />
                                                    ";
                                        // line 1210
                                        echo ($context["text_yes"] ?? null);
                                        echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1213
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1213);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][desc_slide_show]\" value=\"0\" />
                                                    ";
                                        // line 1214
                                        echo ($context["text_no"] ?? null);
                                        echo "
                                                  </label>
                                                  ";
                                    } else {
                                        // line 1217
                                        echo "                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1218
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1218);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][desc_slide_show]\" value=\"1\" />
                                                    ";
                                        // line 1219
                                        echo ($context["text_yes"] ?? null);
                                        echo "
                                                  </label>
                                                  <label class=\"radio-inline\">
                                                    <input type=\"radio\" name=\"group_tab[";
                                        // line 1222
                                        echo ($context["group_row"] ?? null);
                                        echo "][banner_image][";
                                        echo ($context["banner_row"] ?? null);
                                        echo "][image_slider][";
                                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1222);
                                        echo "][";
                                        echo ($context["slider_item_row"] ?? null);
                                        echo "][desc_slide_show]\" value=\"0\" checked=\"checked\" />
                                                    ";
                                        // line 1223
                                        echo ($context["text_no"] ?? null);
                                        echo "
                                                  </label>
                                                  ";
                                    }
                                    // line 1226
                                    echo "                                                </div>
                                              </div>
                                              <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-slide-desc-group";
                                    // line 1229
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1229);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\">";
                                    echo ($context["text_description"] ?? null);
                                    echo "</label>
                                                <div class=\"col-sm-10\">
                                                  <textarea class=\"form-control ";
                                    // line 1231
                                    echo ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "editor", [], "any", false, false, false, 1231)) ? ("show-editor") : ("hide-editor"));
                                    echo "\" name=\"group_tab[";
                                    echo ($context["group_row"] ?? null);
                                    echo "][banner_image][";
                                    echo ($context["banner_row"] ?? null);
                                    echo "][image_slider][";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1231);
                                    echo "][";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "][desc_slide]\" rows=\"5\" placeholder=\"";
                                    echo ($context["text_description"] ?? null);
                                    echo "\" id=\"input-slide-desc-group";
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1231);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\" data-lang=\"";
                                    echo ($context["lang"] ?? null);
                                    echo "\">";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", true, true, false, 1231)) ? (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", false, false, false, 1231)) : (""));
                                    echo "</textarea>
                                                  <a class=\"check-ckeditor check-ckeditor-group";
                                    // line 1232
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1232);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "\">";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "editor", [], "any", false, false, false, 1232)) ? (($context["text_hide_editor"] ?? null)) : (($context["text_show_editor"] ?? null)));
                                    echo "</a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        ";
                                    // line 1238
                                    $context["slider_item_row"] = (($context["slider_item_row"] ?? null) + 1);
                                    // line 1239
                                    echo "                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_item'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1240
                                echo "                                        ";
                            }
                            // line 1241
                            echo "                                      </div>
                                    </div>
                                    <!-- end Setting Slider -->
                                  </div>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1246
                        echo "                                </div>
                              </div>
                              ";
                        // line 1248
                        $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                        // line 1249
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1250
                    echo "                              ";
                }
                // line 1251
                echo "                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end Banner setting -->
                    </div>
                  </div>
                  ";
                // line 1258
                $context["group_row"] = (($context["group_row"] ?? null) + 1);
                // line 1259
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1260
            echo "                </div>
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-access-module\">
            <div class=\"row\">
              <div class=\"col-sm-2\" id=\"vtabs-access\">
                <ul id=\"access-module\" class=\"nav nav-pills nav-stacked\">
                  <li class=\"active\"><a href=\"#access-store\" data-toggle=\"tab\">";
            // line 1268
            echo ($context["entry_store"] ?? null);
            echo "</a></li>
                  <li><a href=\"#access-customer-groups\" data-toggle=\"tab\">";
            // line 1269
            echo ($context["entry_customer_groups"] ?? null);
            echo "</a></li>
                  <li><a href=\"#access-category\" data-toggle=\"tab\">";
            // line 1270
            echo ($context["entry_category"] ?? null);
            echo "</a></li>
                  <li><a href=\"#access-product\" data-toggle=\"tab\">";
            // line 1271
            echo ($context["entry_product"] ?? null);
            echo "</a></li>
                  <li><a href=\"#access-manufacturer\" data-toggle=\"tab\">";
            // line 1272
            echo ($context["entry_manufacturer"] ?? null);
            echo "</a></li>
                </ul>
              </div>
              <div class=\"col-sm-10\">
                <div class=\"tab-content\">
                  <div class=\"tab-pane active\" id=\"access-store\"> 
                    <div class=\"form-group\">
                      <div class=\"col-sm-12\">
                        <div class=\"well well-sm\" style=\"min-height: 150px; max-height: 500px; overflow: auto; margin-bottom: 10px;\">
                          <div class=\"checkbox\">
                            <label>
                              ";
            // line 1283
            if (twig_in_filter(0, ($context["ocdbanner_store"] ?? null))) {
                // line 1284
                echo "                              <input type=\"checkbox\" name=\"ocdbanner_store[]\" value=\"0\" checked=\"checked\" />
                              ";
                // line 1285
                echo ($context["text_default"] ?? null);
                echo "
                              ";
            } else {
                // line 1287
                echo "                              <input type=\"checkbox\" name=\"ocdbanner_store[]\" value=\"0\" />
                              ";
                // line 1288
                echo ($context["text_default"] ?? null);
                echo "
                              ";
            }
            // line 1290
            echo "                            </label>
                          </div>
                          ";
            // line 1292
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 1293
                echo "                          <div class=\"checkbox\">
                            <label>
                              ";
                // line 1295
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1295), ($context["ocdbanner_store"] ?? null))) {
                    // line 1296
                    echo "                              <input type=\"checkbox\" name=\"ocdbanner_store[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1296);
                    echo "\" checked=\"checked\" />
                              ";
                    // line 1297
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1297);
                    echo "
                              ";
                } else {
                    // line 1299
                    echo "                              <input type=\"checkbox\" name=\"ocdbanner_store[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1299);
                    echo "\" ";
                    if ( !($context["ocdbanner_store"] ?? null)) {
                        echo "checked=\"checked\"";
                    }
                    echo " />
                              ";
                    // line 1300
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1300);
                    echo "
                              ";
                }
                // line 1302
                echo "                            </label>
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1305
            echo "                        </div>
                        <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"select-all\">";
            // line 1306
            echo ($context["text_select_all"] ?? null);
            echo "</a> | <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"unselect-all\">";
            echo ($context["text_unselect_all"] ?? null);
            echo "</a>
                      </div>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"access-customer-groups\"> 
                    <div class=\"form-group\">
                      <div class=\"col-sm-12\">
                        <div class=\"well well-sm\" style=\"min-height: 150px; max-height: 500px; overflow: auto; margin-bottom: 10px;\">
                          ";
            // line 1314
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1315
                echo "                          <div class=\"checkbox\">
                            <label>
                              ";
                // line 1317
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1317), ($context["ocdbanner_customer_group"] ?? null))) {
                    // line 1318
                    echo "                              <input type=\"checkbox\" name=\"ocdbanner_customer_group[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1318);
                    echo "\" checked=\"checked\" />
                              ";
                    // line 1319
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1319);
                    echo "
                              ";
                } else {
                    // line 1321
                    echo "                              <input type=\"checkbox\" name=\"ocdbanner_customer_group[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1321);
                    echo "\" />
                              ";
                    // line 1322
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1322);
                    echo "
                              ";
                }
                // line 1324
                echo "                            </label>
                          </div> 
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1327
            echo "                        </div>
                        <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"select-all\">";
            // line 1328
            echo ($context["text_select_all"] ?? null);
            echo "</a> | <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"unselect-all\">";
            echo ($context["text_unselect_all"] ?? null);
            echo "</a>
                      </div>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"access-category\"> 
                    <div class=\"form-group\">
                      <div class=\"col-sm-12\">
                        <div class=\"well well-sm\" style=\"min-height: 150px; max-height: 500px; overflow: auto; margin-bottom: 10px;\">
                          <table class=\"table table-striped\">
                            ";
            // line 1337
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 1338
                echo "                            <tr>
                              <td class=\"checkbox\">
                                <label>
                                  ";
                // line 1341
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1341), ($context["ocdbanner_category"] ?? null))) {
                    // line 1342
                    echo "                                  <input type=\"checkbox\" name=\"ocdbanner_category[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1342);
                    echo "\" checked=\"checked\" />
                                  ";
                    // line 1343
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1343);
                    echo "
                                  ";
                } else {
                    // line 1345
                    echo "                                  <input type=\"checkbox\" name=\"ocdbanner_category[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1345);
                    echo "\" />
                                  ";
                    // line 1346
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1346);
                    echo "
                                  ";
                }
                // line 1348
                echo "                                </label>
                              </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1352
            echo "                          </table>
                        </div>
                        <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"select-all\">";
            // line 1354
            echo ($context["text_select_all"] ?? null);
            echo "</a> | <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"unselect-all\">";
            echo ($context["text_unselect_all"] ?? null);
            echo "</a>
                      </div>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"access-product\"> 
                    <div class=\"form-group\">
                      <div class=\"col-sm-12\">
                        <input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"";
            // line 1361
            echo ($context["entry_product_placeholder"] ?? null);
            echo "\" id=\"input-product\" class=\"form-control\" />
                        <div id=\"featured-product\" class=\"well well-sm\" style=\"min-height: 150px; max-height: 500px; overflow: auto;\">
                          ";
            // line 1363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 1364
                echo "                          <div id=\"featured-product";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 1364);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1364);
                echo "
                            <input type=\"hidden\" name=\"ocdbanner_product[]\" value=\"";
                // line 1365
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 1365);
                echo "\" />
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1368
            echo "                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"access-manufacturer\"> 
                    <div class=\"form-group\">
                      <div class=\"col-sm-12\">
                        <div class=\"well well-sm\" style=\"min-height: 150px; max-height: 500px; overflow: auto; margin-bottom: 10px;\">
                          <table class=\"table table-striped\">
                            ";
            // line 1377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 1378
                echo "                            <tr>
                              <td class=\"checkbox\">
                                <label>
                                  ";
                // line 1381
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 1381), ($context["ocdbanner_manufacturer"] ?? null))) {
                    // line 1382
                    echo "                                  <input type=\"checkbox\" name=\"ocdbanner_manufacturer[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 1382);
                    echo "\" checked=\"checked\" />
                                  ";
                    // line 1383
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 1383);
                    echo "
                                  ";
                } else {
                    // line 1385
                    echo "                                  <input type=\"checkbox\" name=\"ocdbanner_manufacturer[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 1385);
                    echo "\" />
                                  ";
                    // line 1386
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 1386);
                    echo "
                                  ";
                }
                // line 1388
                echo "                                </label>
                              </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1392
            echo "                          </table>
                        </div>
                        <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"select-all\">";
            // line 1394
            echo ($context["text_select_all"] ?? null);
            echo "</a> | <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"unselect-all\">";
            echo ($context["text_unselect_all"] ?? null);
            echo "</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-css\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-css\">";
            // line 1404
            echo ($context["tab_css"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <textarea class=\"form-control\" name=\"css\" id=\"input-css\">";
            // line 1406
            echo ((array_key_exists("css", $context)) ? (($context["css"] ?? null)) : (""));
            echo "</textarea>
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-support\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
            // line 1412
            echo ($context["entry_license_key"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"ocdbanner_license\" value=\"";
            // line 1414
            echo ($context["ocdbanner_license"] ?? null);
            echo "\" class=\"form-control\" />
              </div>
            </div>
            <fieldset class=\"developer\">
              <legend>";
            // line 1418
            echo ($context["entry_dev_info"] ?? null);
            echo "</legend>
              <div>
                <div class=\"developer-info\">
                  <div class=\"row\">
                    <div class=\"col-sm-3 title\">";
            // line 1422
            echo ($context["entry_dev_name"] ?? null);
            echo "</div>
                    <div class=\"col-sm-6 text\">";
            // line 1423
            echo ($context["text_dev_name"] ?? null);
            echo "</div>
                  </div>
                </div>
                <div class=\"developer-info\">
                  <div class=\"row\">
                    <div class=\"col-sm-3 title\">";
            // line 1428
            echo ($context["entry_dev_mail"] ?? null);
            echo "</div>
                    <div class=\"col-sm-6 text\">";
            // line 1429
            echo ($context["text_dev_mail"] ?? null);
            echo "</div>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </form>
      ";
        } else {
            // line 1438
            echo "      <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocdbanner-license\" class=\"form-horizontal\">
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
            // line 1440
            echo ($context["entry_license_key"] ?? null);
            echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"ocdbanner_license\" value=\"";
            // line 1442
            echo ($context["ocdbanner_license"] ?? null);
            echo "\" class=\"form-control\" />
          </div>
        </div>
      </form>
      ";
        }
        // line 1447
        echo "    </div> 
    <div class=\"powered well well-sm\">";
        // line 1448
        echo ($context["text_powered"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 1451
        if (($context["ocdbanner_license"] ?? null)) {
            // line 1452
            echo "<script type=\"text/javascript\"><!--
var group_row = ";
            // line 1453
            echo ($context["group_row"] ?? null);
            echo ";

function addGroup(){
\thtml  = '<div class=\"tab-pane\" id=\"tab-group' + group_row + '\">';

  html += '  <ul class=\"nav nav-tabs\" id=\"settings-group' + group_row + '\">';
  html += '    <li class=\"active\"><a href=\"#tab-general-setting-group' + group_row + '\" data-toggle=\"tab\">";
            // line 1459
            echo ($context["text_tab_setting"] ?? null);
            echo "</a></li>';
  html += '    <li><a href=\"#tab-setting-banners-group' + group_row + '\" data-toggle=\"tab\">";
            // line 1460
            echo ($context["text_banners"] ?? null);
            echo "</a></li>';
  html += '  </ul>';
  html += '  <div class=\"tab-content\">';
  
  /* === Group Setting === */
  html += '    <div class=\"tab-pane active\" id=\"tab-general-setting-group' + group_row + '\">';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-group-status-' + group_row + '\">";
            // line 1467
            echo ($context["entry_status"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <select name=\"group_tab[' + group_row + '][status]\" id=\"input-group-status-' + group_row + '\" class=\"form-control\">';
  html += '            <option value=\"1\" selected=\"selected\">";
            // line 1470
            echo ($context["text_enabled"] ?? null);
            echo "</option>';
  html += '            <option value=\"0\">";
            // line 1471
            echo ($context["text_disabled"] ?? null);
            echo "</option>';
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\">";
            // line 1476
            echo ($context["entry_title_group"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  ";
            // line 1478
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1479
                echo "  html += '          <div class=\"input-group\" style=\"margin-bottom: 10px;\">';
  html += '            <span class=\"input-group-addon\"><img src=\"language/";
                // line 1480
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1480);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1480);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1480);
                echo "\" /></span>';
  html += '            <input type=\"text\" name=\"group_tab[' + group_row + '][title_group][";
                // line 1481
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1481);
                echo "]\" value=\"\" id=\"input-name-front-group' + group_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1481);
                echo "\" class=\"form-control\" />';
  html += '          </div>';
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1484
            echo "  html += '        </div>';                                                                                                                               
  html += '      </div> '; 
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\">";
            // line 1487
            echo ($context["text_title_group_front"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <label class=\"radio-inline\">';
  html += '            <input type=\"radio\" name=\"group_tab[' + group_row + '][title_group_front]\" value=\"1\" />';
  html += '            ";
            // line 1491
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '          </label>';
  html += '          <label class=\"radio-inline\">';
  html += '            <input type=\"radio\" name=\"group_tab[' + group_row + '][title_group_front]\" value=\"0\" checked=\"checked\" />';
  html += '            ";
            // line 1495
            echo ($context["text_no"] ?? null);
            echo "';
  html += '          </label>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-mode-group' + group_row + '\"><span data-toggle=\"tooltip\" title=\"";
            // line 1500
            echo ($context["help_hidden_setting"] ?? null);
            echo "\">";
            echo ($context["entry_mode"] ?? null);
            echo "</span></label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <select name=\"group_tab[' + group_row + '][mode]\" id=\"input-mode-group' + group_row + '\" class=\"form-control\">';
  html += '            <option value=\"grid\">";
            // line 1503
            echo ($context["text_mode_grid"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"carousel\">";
            // line 1504
            echo ($context["text_mode_carousel"] ?? null);
            echo "</option>';  
  html += '            <option value=\"respgrid\">";
            // line 1505
            echo ($context["text_mode_resp_grid"] ?? null);
            echo "</option>';                     
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';   
  html += '      <div class=\"form-group block-rows-group' + group_row + '\" style=\"display:none;\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-rows-group' + group_row + '\">";
            // line 1510
            echo ($context["entry_rows"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <select name=\"group_tab[' + group_row + '][rows]\" id=\"input-rows-group' + group_row + '\" class=\"form-control\">';
  html += '            <option value=\"\">";
            // line 1513
            echo ($context["text_select"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"1\">";
            // line 1514
            echo ($context["text_one_rows"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"2\">";
            // line 1515
            echo ($context["text_two_rows"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"3\">";
            // line 1516
            echo ($context["text_three_rows"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"4\">";
            // line 1517
            echo ($context["text_four_rows"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"6\">";
            // line 1518
            echo ($context["text_six_rows"] ?? null);
            echo "</option>';                     
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';   
  html += '      <div class=\"block-carousel-group' + group_row + '\" style=\"display:none;\">';  
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\">";
            // line 1524
            echo ($context["text_carousel_autoplay"] ?? null);
            echo "</label>';
  html += '          <div class=\"col-sm-2\">';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][carousel_autoplay]\" value=\"1\" />';
  html += '              ";
            // line 1528
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '            </label>';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][carousel_autoplay]\" value=\"0\" checked=\"checked\" />';
  html += '              ";
            // line 1532
            echo ($context["text_no"] ?? null);
            echo "';
  html += '            </label>';
  html += '          </div>';
  html += '          <label class=\"col-sm-4 control-label\" for=\"carousel-autoplay-speed-group' + group_row + '\">";
            // line 1535
            echo ($context["text_carousel_autoplay_speed"] ?? null);
            echo "</label>';
  html += '          <div class=\"col-sm-2\">';
  html += '            <input type=\"text\" name=\"group_tab[' + group_row + '][carousel_autoplay_speed]\" value=\"\" id=\"carousel-autoplay-speed-group' + group_row + '\" class=\"form-control\" />';
  html += '          </div>';
  html += '        </div>';  
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\">";
            // line 1541
            echo ($context["text_carousel_navigation"] ?? null);
            echo "</label>';
  html += '          <div class=\"col-sm-2\">';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][carousel_navigation]\" value=\"1\" />';
  html += '              ";
            // line 1545
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '            </label>';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][carousel_navigation]\" value=\"0\" checked=\"checked\" />';
  html += '              ";
            // line 1549
            echo ($context["text_no"] ?? null);
            echo "';
  html += '            </label>';
  html += '          </div>';
  html += '        </div>';  
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\">";
            // line 1554
            echo ($context["text_carousel_pagination"] ?? null);
            echo "</label>';
  html += '          <div class=\"col-sm-10\">';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][carousel_pagination]\" value=\"1\" />';
  html += '              ";
            // line 1558
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '            </label>';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][carousel_pagination]\" value=\"0\" checked=\"checked\" />';
  html += '              ";
            // line 1562
            echo ($context["text_no"] ?? null);
            echo "';
  html += '            </label>';
  html += '          </div>';
  html += '        </div>'; 
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\">";
            // line 1567
            echo ($context["text_carousel_loop"] ?? null);
            echo "</label>';
  html += '          <div class=\"col-sm-2\">';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][carousel_loop]\" value=\"1\" />';
  html += '              ";
            // line 1571
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '            </label>';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][carousel_loop]\" value=\"0\" checked=\"checked\" />';
  html += '              ";
            // line 1575
            echo ($context["text_no"] ?? null);
            echo "';
  html += '            </label>';
  html += '          </div>';
  html += '        </div>';  
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\">";
            // line 1580
            echo ($context["entry_limit_carousel"] ?? null);
            echo "</label>';
  html += '          <div class=\"col-sm-10\">';
  html += '            <div class=\"alert alert-info\">';
  html += '              <svg class=\"alert-icon-img\" width=\"36\" height=\"36\" viewBox=\"0 0 36 36\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18 0.5C8.33502 0.5 0.5 8.33502 0.5 18C0.5 27.665 8.33502 35.5 18 35.5C27.665 35.5 35.5 27.665 35.5 18C35.5 13.3587 33.6563 8.90752 30.3744 5.62563C27.0925 2.34374 22.6413 0.5 18 0.5ZM18 32C10.268 32 4 25.732 4 18C4 10.268 10.268 4 18 4C25.732 4 32 10.268 32 18C32 21.713 30.525 25.274 27.8995 27.8995C25.274 30.525 21.713 32 18 32ZM18.875 10.2959C19.3582 10.2959 19.75 10.6877 19.75 11.1709V12.9209C19.75 13.4042 19.3582 13.7959 18.875 13.7959H17.125C16.6418 13.7959 16.25 13.4042 16.25 12.9209V11.1709C16.25 10.6877 16.6418 10.2959 17.125 10.2959H18.875ZM18.875 15.5459C19.3582 15.5459 19.75 15.6301 19.75 16.3303V23.5349C20.2149 23.6643 20.6785 23.7769 21.081 23.8655C21.3254 23.9193 21.5017 24.1342 21.5017 24.3845V25.1791C21.5017 25.469 21.2667 25.7041 20.9767 25.7041H15.025C14.7351 25.7041 14.5 25.469 14.5 25.1791V24.3845C14.5 24.1342 14.6763 23.9193 14.9207 23.8655C15.3227 23.777 15.7857 23.6646 16.25 23.5353V17.7147C15.7857 17.5854 15.3227 17.473 14.9207 17.3845C14.6763 17.3307 14.5 17.1158 14.5 16.8655V16.0709C14.5 15.781 14.7351 15.5459 15.025 15.5459L18.875 15.5459Z\"></path></svg>';
  html += '              ";
            // line 1584
            echo ($context["help_limit_carousel"] ?? null);
            echo "';
  html += '            </div>';
  html += '            <div class=\"table-responsive\">';
  html += '              <table id=\"carousel-items-group' + group_row + '\" class=\"table table-striped table-bordered table-hover\">';
  html += '                <thead>';
  html += '                  <tr>';
  html += '                    <td class=\"text-left\">";
            // line 1590
            echo ($context["entry_window"] ?? null);
            echo "</td>';
  html += '                    <td class=\"text-left\">";
            // line 1591
            echo ($context["entry_window_prod_show"] ?? null);
            echo "</td>';
  html += '                    <td class=\"text-left\">";
            // line 1592
            echo ($context["text_between"] ?? null);
            echo "</td>';
  html += '                    <td></td>';              
  html += '                  </tr>';                                
  html += '                </thead>';
  html += '                <tbody>';
  html += '                </tbody>';
  html += '                <tfoot>';
  html += '                  <tr>';
  html += '                    <td colspan=\"3\"></td>';
  html += '                    <td class=\"text-left\"><button type=\"button\" onclick=\"addCarouselItem(' + group_row + ');\" data-toggle=\"tooltip\" title=\"";
            // line 1601
            echo ($context["button_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
  html += '                  </tr>';
  html += '                </tfoot>';
  html += '              </table>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';  
  html += '      </div>';  
  html += '      <div class=\"block-grid-gutter block-grid-gutter-group' + group_row + '\" style=\"display:none;\">';
                      
  // Grid Stack                    
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\">";
            // line 1613
            echo ($context["entry_grid"] ?? null);
            echo "</label>';
  html += '          <div class=\"col-sm-10\">';
  html += '            <a onClick=\"addGridElement(' + group_row + '); \$(\\'.grid-stack-not-el-' + group_row + '\\').addClass(\\'hidden\\');\" class=\"btn btn-success\">";
            // line 1615
            echo ($context["text_grid_element"] ?? null);
            echo "</a>';
  html += '            <div class=\"grid-block grid-setting-' + group_row + '\">';
  html += '              <div class=\"grid-stack-not-el grid-stack-not-el-' + group_row + '\">";
            // line 1617
            echo ($context["text_grid_not_element"] ?? null);
            echo "</div>';
  html += '              <div class=\"grid-stack grid-stack-group' + group_row + '\">';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';                    
  // end Grid Stack                    
                      
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\">";
            // line 1626
            echo ($context["entry_grid_gutter"] ?? null);
            echo "</label>';
  html += '          <div class=\"col-sm-1\">';
  html += '            <input type=\"text\" name=\"group_tab[' + group_row + '][gutter]\" value=\"\" class=\"form-control\" />';
  html += '          </div>';
  html += '          <div class=\"text-px\">";
            // line 1630
            echo ($context["text_px"] ?? null);
            echo "</div>';                       
  html += '        </div>';
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label breakpoints-label\"><span>";
            // line 1633
            echo ($context["entry_breakpoints"] ?? null);
            echo "</span><a href=\"#pojasnenie-custom-grid\" data-toggle=\"modal\" class=\"help-breakpoints\" target=\"_blank\">";
            echo ($context["help_breakpoints"] ?? null);
            echo "</a></label>';
  html += '          <div class=\"col-sm-10\">';
  html += '            <div class=\"table-responsive\">';
  html += '              <table id=\"grid-breakpoints-group' + group_row + '\" class=\"table table-striped table-bordered table-hover\">';
  html += '                <thead>';
  html += '                  <tr>';
  html += '                    <td class=\"text-left\"><span data-toggle=\"tooltip\" title=\"";
            // line 1639
            echo ($context["help_breakpoints_name"] ?? null);
            echo "\">";
            echo ($context["text_breakpoints_name"] ?? null);
            echo "</span></td>';
  html += '                    <td class=\"text-left\"><span data-toggle=\"tooltip\" title=\"";
            // line 1640
            echo ($context["help_grid_range"] ?? null);
            echo "\">";
            echo ($context["text_grid_range"] ?? null);
            echo "</span></td>';
  html += '                    <td class=\"text-left\">";
            // line 1641
            echo ($context["text_grid_column"] ?? null);
            echo "</td>';
  html += '                    <td class=\"text-left\">";
            // line 1642
            echo ($context["text_gutter_column"] ?? null);
            echo "</td>';
  html += '                    <td></td>';              
  html += '                  </tr>';                                
  html += '                </thead>';
  html += '                <tbody>';
  html += '                </tbody>';
  html += '                <tfoot>';
  html += '                  <tr>';
  html += '                    <td colspan=\"4\"></td>';
  html += '                    <td class=\"text-left\"><button type=\"button\" onclick=\"addGridBreakpoints(' + group_row + ');\" data-toggle=\"tooltip\" title=\"";
            // line 1651
            echo ($context["button_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
  html += '                  </tr>';
  html += '                </tfoot>';
  html += '              </table>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 1659
            echo ($context["help_width_mobile_image"] ?? null);
            echo "\">";
            echo ($context["entry_width_mobile_image"] ?? null);
            echo "</span></label>';
  html += '          <div class=\"col-sm-10\">';
  html += '            <div class=\"input-group\">';
  html += '              <input type=\"text\" name=\"group_tab[' + group_row + '][max_width_image_mobile]\" value=\"\" class=\"form-control\" />';
  html += '              <div class=\"input-group-addon\">";
            // line 1663
            echo ($context["text_px"] ?? null);
            echo "</div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';
  html += '        <div class=\"form-group\">';
  html += '          <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 1668
            echo ($context["help_banner_width_mobile"] ?? null);
            echo "\">";
            echo ($context["entry_viewport"] ?? null);
            echo "</span></label>';
  html += '          <div class=\"col-sm-10\">';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_width_mobile]\" value=\"1\" />';
  html += '              ";
            // line 1672
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '            </label>';
  html += '            <label class=\"radio-inline\">';
  html += '              <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_width_mobile]\" value=\"0\" checked=\"checked\" />';
  html += '              ";
            // line 1676
            echo ($context["text_no"] ?? null);
            echo "';
  html += '            </label>';
  html += '          </div>';
  html += '        </div>';
  html += '      </div>';
  html += '    </div>';
  /* === end Group Setting === */
  
  /* === Banners Setting === */
  html += '    <div class=\"tab-pane\" id=\"tab-setting-banners-group' + group_row + '\">';
  html += '      <div class=\"form-group block-image-sizes block-image-sizes-group' + group_row + '\" style=\"display:none;\">';
  html += '        <label class=\"col-sm-3 control-label\">";
            // line 1687
            echo ($context["entry_dimension"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-9\">';
  html += '          <div class=\"row\">';
  html += '            <div class=\"col-sm-6 image-sizes\">';
  html += '              <div class=\"input-group\">';
  html += '                <div class=\"input-group-addon\">";
            // line 1692
            echo ($context["entry_width"] ?? null);
            echo "</div>';
  html += '                <input type=\"text\" name=\"group_tab[' + group_row + '][width_image]\" value=\"\" id=\"input-width-group' + group_row + '\" class=\"form-control\" />';
  html += '                <div class=\"input-group-addon\">";
            // line 1694
            echo ($context["text_px"] ?? null);
            echo "</div>';
  html += '              </div>';
  html += '            </div>';
  html += '            <div class=\"col-sm-6 image-sizes\">';
  html += '            <div class=\"input-group\">';
  html += '              <div class=\"input-group-addon\">";
            // line 1699
            echo ($context["entry_height"] ?? null);
            echo "</div>';
  html += '              <input type=\"text\" name=\"group_tab[' + group_row + '][height_image]\" value=\"\" id=\"input-height-group' + group_row + '\" class=\"form-control\" />';
  html += '              <div class=\"input-group-addon\">";
            // line 1701
            echo ($context["text_px"] ?? null);
            echo "</div>';
  html += '            </div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group block-image-sizes block-image-sizes-group' + group_row + '\" style=\"display:none;\">';
  html += '        <label class=\"col-sm-3 control-label\">";
            // line 1708
            echo ($context["entry_dimension_mobile"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-9\">';
  html += '          <div class=\"row\">';
  html += '            <div class=\"col-sm-6 image-sizes\">';
  html += '              <div class=\"input-group\">';
  html += '                <div class=\"input-group-addon\">";
            // line 1713
            echo ($context["entry_width"] ?? null);
            echo "</div>';
  html += '                <input type=\"text\" name=\"group_tab[' + group_row + '][width_image_mobile]\" value=\"\" id=\"input-width-mobile-group' + group_row + '\" class=\"form-control\" />';
  html += '                <div class=\"input-group-addon\">";
            // line 1715
            echo ($context["text_px"] ?? null);
            echo "</div>';
  html += '              </div>';
  html += '            </div>';
  html += '            <div class=\"col-sm-6 image-sizes\">';
  html += '              <div class=\"input-group\">';
  html += '                <div class=\"input-group-addon\">";
            // line 1720
            echo ($context["entry_height"] ?? null);
            echo "</div>';
  html += '                <input type=\"text\" name=\"group_tab[' + group_row + '][height_image_mobile]\" value=\"\" id=\"input-height-mobile-group' + group_row + '\" class=\"form-control\" />';
  html += '                <div class=\"input-group-addon\">";
            // line 1722
            echo ($context["text_px"] ?? null);
            echo "</div>';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"row\">';
  html += '        <div class=\"col-sm-3\">';  
  html += '          <ul class=\"nav nav-pills nav-stacked\" id=\"banner-image-group' + group_row + '\">';
\thtml += '    \t\t     <li class=\"banner-image-add\" id=\"banner-image-add-group' + group_row + '\"><a onclick=\"addBanner(' + group_row + ');\"><i class=\"fa fa-plus-circle\"></i> ";
            // line 1731
            echo ($context["text_add_banner"] ?? null);
            echo "</a></li>';
  html += '    \t     </ul>';
  html += '        </div>';  
  html += '        <div class=\"col-sm-9\">';
  html += '          <div class=\"tab-content\">';
  html += '          </div>';
  html += '        </div>';  
  html += '      </div>';
  html += '    </div>';
  /* === END Banners Setting === */
  
  html += '  </div>';  \t
  html += '</div>';

  \$('#tab-banners .tab-content:first').append(html);
\t\t
\t\$('#group-add').before('<li><a href=\"#tab-group' + group_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-group' + group_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-group' + group_row + '\\').remove(); \$(\\'#tab-banners a:first\\').tab(\\'show\\');\"></i> ";
            // line 1747
            echo ($context["text_group"] ?? null);
            echo " - ' + group_row + '</a></li>');

\t\$('#tab-banners a[href=\\'#tab-group' + group_row + '\\']').tab('show'); 
  
  showSettingGroup(group_row);
  
  group_row++;
}
//--></script> 
<script type=\"text/javascript\">
var grid_row = ";
            // line 1757
            echo ($context["grid_row"] ?? null);
            echo ";

";
            // line 1759
            $context["group_row"] = 0;
            echo " 
";
            // line 1760
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["group_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group_tab"]) {
                // line 1761
                echo "/* Grid";
                echo ($context["group_row"] ?? null);
                echo " */
var grid";
                // line 1762
                echo ($context["group_row"] ?? null);
                echo " = GridStack.init({ cellHeight: '75px', cellHeightThrottle: 100, resizable: { handles: 'e, se, s, sw, w' }, }, '.grid-stack.grid-stack-group";
                echo ($context["group_row"] ?? null);
                echo "');
GridAddedChange(grid";
                // line 1763
                echo ($context["group_row"] ?? null);
                echo ");

";
                // line 1765
                $context["group_row"] = (($context["group_row"] ?? null) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1767
            echo "
function GridAddedChange(grid) {
  grid.on('added change removed', function(e, items) {
    var element = items[0].el;

    var id = \$(element).attr('gs-id'); 
    var x = \$(element).attr('gs-x');
    var y = \$(element).attr('gs-y');
    var width = \$(element).attr('gs-w');
    var height = \$(element).attr('gs-h');

    \$(element).children('#gs_id_' + id).val(id);
    \$(element).children('#gs_x_' + id).val(x);
    \$(element).children('#gs_y_' + id).val(y);
    \$(element).children('#gs_width_' + id).val(width);
    \$(element).children('#gs_height_' + id).val(height);
    
    if (grid.getGridItems() < 1) {
      grid.el.previousElementSibling.classList.remove(\"hidden\");
    }
  }); 
}

function addGridElement(group_row) {
  var nestOptions = {
    resizable: {
      handles: 'e, se, s, sw, w'
    },
  };
  
  var grid = GridStack.init(nestOptions, '.grid-stack.grid-stack-group' + group_row);
  GridAddedChange(grid);
   
  var widget_id = (Math.random() * 10000).toFixed();
   
  html  = '<div class=\"grid-stack-item grid-stack-item-group' + group_row + '\">';
  html += '  <input type=\"hidden\" name=\"group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_id]\" value=\"' + widget_id + '\" id=\"gs_id_' + widget_id + '\" class=\"form-control\" />';
  html += '  <input type=\"hidden\" name=\"group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_x]\" value=\"\" id=\"gs_x_' + widget_id + '\" class=\"form-control\" />';
  html += '  <input type=\"hidden\" name=\"group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_y]\" value=\"\" id=\"gs_y_' + widget_id + '\" class=\"form-control\" />';
  html += '  <input type=\"hidden\" name=\"group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_width]\" value=\"\" id=\"gs_width_' + widget_id + '\" class=\"form-control\" />';
  html += '  <input type=\"hidden\" name=\"group_tab[' + group_row + '][grid_stack][' + grid_row + '][gs_height]\" value=\"\" id=\"gs_height_' + widget_id + '\" class=\"form-control\" />';
  html += '  <div class=\"grid-stack-item-content\">';
  html += '    <i class=\"fa fa-trash-o fa-trash' + group_row + '\" data-toggle=\"tooltip\" title=\"";
            // line 1809
            echo ($context["button_remove"] ?? null);
            echo "\"></i>';
  html += '  </div>';
  html += '</div>';

  grid.addWidget(html, {id: widget_id});
  
  \$('.fa-trash' + group_row).on('click', function(){
    grid.removeWidget(this.parentNode.parentNode);
    
    if (grid.getGridItems() < 1) {
      \$('.grid-stack-not-el-' + group_row).removeClass('hidden');
    }
  });
    
  grid_row++;
}
</script>
<script type=\"text/javascript\"><!--
var carousel_item_row = ";
            // line 1827
            echo ($context["carousel_item_row"] ?? null);
            echo ";

function addCarouselItem(group_row) {
  html  = '  <tr id=\"carousel-item-row-group' + group_row + '-' + carousel_item_row + '\">';
  html += '    <td class=\"text-left\">';
  html += '      <input type=\"text\" name=\"group_tab[' + group_row + '][carousel_item][' + carousel_item_row + '][window]\" value=\"\" placeholder=\"";
            // line 1832
            echo ($context["entry_window"] ?? null);
            echo "\" class=\"form-control\" />';
  html += '    </td>';
  html += '    <td class=\"text-left\">';
  html += '      <input type=\"text\" name=\"group_tab[' + group_row + '][carousel_item][' + carousel_item_row + '][item]\" value=\"\" placeholder=\"";
            // line 1835
            echo ($context["text_quantity_prod"] ?? null);
            echo "\" class=\"form-control\" />';
  html += '    </td>';
  html += '    <td class=\"text-left\">';                                                                                      
  html += '      <input type=\"text\" name=\"group_tab[' + group_row + '][carousel_item][' + carousel_item_row + '][spaceBetween]\" value=\"\" class=\"form-control\" />';
  html += '    </td>';
  html += '    <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#carousel-item-row-group' + group_row + '-' + carousel_item_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 1840
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '  </tr>';
                                                                                                              
\t\$('#carousel-items-group' + group_row +' tbody').append(html);
  
  carousel_item_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
var breakpoint_row = ";
            // line 1849
            echo ($context["breakpoint_row"] ?? null);
            echo ";

function addGridBreakpoints(group_row) {
  html  = '  <tr id=\"grid-breakpoint-group' + group_row + '-' + breakpoint_row + '\">';
  html += '    <td class=\"text-left\">';
  html += '      <input type=\"text\" name=\"group_tab[' + group_row + '][breakpoint][' + breakpoint_row + '][name]\" value=\"\" class=\"form-control\" />';
  html += '    </td>';
  html += '    <td class=\"text-left\">';
  html += '      <input type=\"text\" name=\"group_tab[' + group_row + '][breakpoint][' + breakpoint_row + '][range]\" value=\"\" class=\"form-control\" />';
  html += '    </td>'; 
  html += '    <td class=\"text-left\">';
  html += '      <input type=\"text\" name=\"group_tab[' + group_row + '][breakpoint][' + breakpoint_row + '][column]\" value=\"\" class=\"form-control\" />';
  html += '    </td>';
  html += '    <td class=\"text-left\">';                                                                                      
  html += '      <input type=\"text\" name=\"group_tab[' + group_row + '][breakpoint][' + breakpoint_row + '][gutter]\" value=\"\" class=\"form-control\" />';
  html += '    </td>';
  html += '    <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#grid-breakpoint-group' + group_row + '-' + breakpoint_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 1865
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '  </tr>';
                                                                                                              
\t\$('#grid-breakpoints-group' + group_row +' tbody').append(html);
  
  breakpoint_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
function showSettingGroup(group_row) {
  \$('#input-mode-group' + group_row).change(function() {
    var str = '';
    \$('#input-mode-group' + group_row + ' option:selected').each(function() {
\t    str = \$(this).val();
\t  });
\t      
    if (str == 'grid') {
      \$('.block-rows-group' + group_row).show(300);
    } else {
      \$('.block-rows-group' + group_row).hide(300);
\t  }

    if (str == 'carousel') {
      \$('.block-carousel-group' + group_row).show(300);
    } else {
      \$('.block-carousel-group' + group_row).hide(300);
\t  }
    
    if (str == 'respgrid') {
      \$('.block-image-sizes-group' + group_row).hide(300);
      \$('.block-grid-gutter-group' + group_row).show(300);
    } else {
      \$('.block-image-sizes-group' + group_row).show(300);
      \$('.block-grid-gutter-group' + group_row).hide(300);
\t  }
  }).change();
}
//--></script>
<script type=\"text/javascript\"><!--
\$('#group li').each(function(index, element) {
\tshowSettingGroup(index);
  
  \$('#banner-image-group' + index + ' li:first-child a').tab('show');
});
//--></script>
<script type=\"text/javascript\"><!--
function addBanner(group_row) {
  var banner_row = \$('#banner-image-group' + group_row).children().length;

  html  = '<div class=\"tab-pane\" id=\"tab-banner-images-group' + group_row + '-banner' + banner_row + '\">';

  html += '  <div class=\"block-type-banner block-type-banner-group' + group_row + '-banner' + banner_row + '\">';
  html += '    <div class=\"form-group\">';                                                                 
  html += '      <label class=\"col-sm-2 control-label\" for=\"input-banner-type-group' + group_row + '-banner' + banner_row + '\">";
            // line 1918
            echo ($context["entry_image_type"] ?? null);
            echo "</label>';
  html += '      <div class=\"col-sm-10\">';
  html += '        <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][type]\" id=\"input-banner-type-group' + group_row + '-banner' + banner_row + '\" class=\"form-control\">';
  html += '          <option value=\"image_image\">";
            // line 1921
            echo ($context["entry_type_image_image"] ?? null);
            echo "</option>';                     
  html += '          <option value=\"image_video\">";
            // line 1922
            echo ($context["entry_type_image_video"] ?? null);
            echo "</option>';
  html += '          <option value=\"image_slider\" class=\"image-slider-group' + group_row + '-banner' + banner_row + '\">";
            // line 1923
            echo ($context["entry_type_image_slider"] ?? null);
            echo "</option>';                     
  html += '        </select>';
  html += '      </div>';
  html += '    </div>';
  html += '  </div>';    
  html += '  <div class=\"form-group\">';
  html += '    <label class=\"col-sm-2 control-label\" for=\"banner-status-group' + group_row + '-banner' + banner_row + '\">";
            // line 1929
            echo ($context["entry_status"] ?? null);
            echo "</label>';
  html += '    <div class=\"col-sm-10\">';
  html += '      <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][status]\" id=\"banner-status-group' + group_row + '-banner' + banner_row + '\" class=\"form-control\">';
  html += '        <option value=\"1\" selected=\"selected\">";
            // line 1932
            echo ($context["text_enabled"] ?? null);
            echo "</option>';
  html += '        <option value=\"0\">";
            // line 1933
            echo ($context["text_disabled"] ?? null);
            echo "</option>';
  html += '      </select>';
  html += '    </div>';
  html += '  </div>';
  html += '  <div class=\"form-group sort-banner\">';
  html += '    <label class=\"col-sm-2 control-label\" for=\"input-banner-sort-group' + group_row + '-banner' + banner_row + '\">";
            // line 1938
            echo ($context["entry_sort_order"] ?? null);
            echo "</label>';
  html += '    <div class=\"col-sm-10\">';
  html += '      <input type=\"text\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][sort_order]\" value=\"\" id=\"input-banner-sort-group' + group_row + '-banner' + banner_row + '\" placeholder=\"";
            // line 1940
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\" />';
  html += '    </div>';
  html += '  </div>';
  html += '    <ul class=\"nav nav-tabs\" id=\"language-group' + group_row + '-banner' + banner_row + '\">';
  ";
            // line 1944
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1945
                echo "  html += '      <li><a href=\"#tab-images-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1945);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1945);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1945);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1945);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1945);
                echo "</a></li>';
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1947
            echo "  html += '    </ul>';
  html += '    <div class=\"tab-content\">';  
  ";
            // line 1949
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1950
                echo "  html += '      <div class=\"tab-pane\" id=\"tab-images-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1950);
                echo "\">';
  html += '        <div class=\"block-video block-video-group' + group_row + '-banner' + banner_row + '-language";
                // line 1951
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1951);
                echo "\" style=\"display: none;\">';
  html += '          <div class=\"form-group\">';                                                                 
  html += '            <label class=\"col-sm-2 control-label\" for=\"input-video-host-group' + group_row + '-banner' + banner_row + '-language";
                // line 1953
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1953);
                echo "\">";
                echo ($context["entry_video_host"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][type_image_video_host][";
                // line 1955
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1955);
                echo "]\" id=\"input-video-host-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1955);
                echo "\" class=\"form-control\">';
  html += '                <option value=\"\">";
                // line 1956
                echo ($context["text_select"] ?? null);
                echo "</option>';
  html += '                <option value=\"youtube\">";
                // line 1957
                echo ($context["entry_youtube"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"vimeo\">";
                // line 1958
                echo ($context["entry_vimeo"] ?? null);
                echo "</option>';
  html += '              </select>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"input-link-image-video-group' + group_row + '-banner' + banner_row + '-language";
                // line 1963
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1963);
                echo "\">";
                echo ($context["entry_video_id"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-6\">';
  html += '              <input type=\"text\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][type_image_video_id][";
                // line 1965
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1965);
                echo "]\" value=\"\" id=\"input-link-image-video-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1965);
                echo "\" class=\"form-control\" />';
  html += '            </div>';
  html += '            <div class=\"col-sm-4 example-video\"><a href=\"#modal-video-id\" data-toggle=\"modal\">";
                // line 1967
                echo ($context["text_example_video"] ?? null);
                echo "</a></div>'
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"input-title-video-group' + group_row + '-banner' + banner_row + '-language";
                // line 1970
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1970);
                echo "\">";
                echo ($context["entry_title"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <input type=\"text\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][title_video][";
                // line 1972
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1972);
                echo "]\" value=\"\" id=\"input-title-video-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1972);
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />';
  html += '            </div>'; 
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\">";
                // line 1976
                echo ($context["entry_title_banner"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <label class=\"radio-inline\">';
  html += '                <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][title_video_show][";
                // line 1979
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1979);
                echo "]\" value=\"1\" />';
  html += '                ";
                // line 1980
                echo ($context["text_yes"] ?? null);
                echo "';
  html += '              </label>';
  html += '              <label class=\"radio-inline\">';
  html += '                <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][title_video_show][";
                // line 1983
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1983);
                echo "]\" value=\"0\" checked=\"checked\" />';
  html += '                ";
                // line 1984
                echo ($context["text_no"] ?? null);
                echo "';
  html += '              </label>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"position-title-video-group' + group_row + '-banner' + banner_row + '-language";
                // line 1989
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1989);
                echo "\">";
                echo ($context["entry_position_desc"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][position_title_video][";
                // line 1991
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1991);
                echo "]\" id=\"position-title-video-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1991);
                echo "\" class=\"form-control\">';
  html += '                <option value=\"\">";
                // line 1992
                echo ($context["text_select"] ?? null);
                echo "</option>';
  html += '                <option value=\"title_after_image\">";
                // line 1993
                echo ($context["text_title_after_image"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"title_before_image\">";
                // line 1994
                echo ($context["text_title_before_image"] ?? null);
                echo "</option>';                     
  html += '              </select>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"video-title-align-group' + group_row + '-banner' + banner_row + '-language";
                // line 1999
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1999);
                echo "\">";
                echo ($context["entry_text_align"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][align_title_video][";
                // line 2001
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2001);
                echo "]\" id=\"video-title-align-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2001);
                echo "\" class=\"form-control\">';
  html += '                <option value=\"\">";
                // line 2002
                echo ($context["text_select"] ?? null);
                echo "</option>';
  html += '                <option value=\"left\">";
                // line 2003
                echo ($context["text_align_left"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"center\">";
                // line 2004
                echo ($context["text_align_center"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"right\">";
                // line 2005
                echo ($context["text_align_right"] ?? null);
                echo "</option>';                    
  html += '              </select>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';  
  html += '        <div class=\"block-image block-image-group' + group_row + '-banner' + banner_row + '-language";
                // line 2010
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2010);
                echo "\">';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"input-image-group' + group_row + '-banner' + banner_row + '-language";
                // line 2012
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2012);
                echo "\">";
                echo ($context["entry_thumb"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';                                                                                                                                                        
  html += '              <a href=\"\" id=\"thumb-image-group' + group_row + '-banner' + banner_row + '-language";
                // line 2014
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2014);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo ($context["placeholder"] ?? null);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\" /></a>';
  html += '              <input type=\"hidden\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][image][";
                // line 2015
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2015);
                echo "]\" value=\"\" id=\"input-image-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2015);
                echo "\" />';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2019
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2019);
                echo "\">";
                echo ($context["entry_hover_effects"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-4\">';
  html += '              <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][animation][";
                // line 2021
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2021);
                echo "]\" id=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2021);
                echo "\" class=\"form-control\">';
  html += '                <option value=\"\">";
                // line 2022
                echo ($context["text_select"] ?? null);
                echo "</option>';
  html += '                <option value=\"scale\">";
                // line 2023
                echo ($context["text_scale"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"grayscale\">";
                // line 2024
                echo ($context["text_grayscale"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"opacity\">";
                // line 2025
                echo ($context["text_opacity"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"sepia\">";
                // line 2026
                echo ($context["text_sepia"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"apollo\" class=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2027
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2027);
                echo "\">";
                echo ($context["text_apollo"] ?? null);
                echo "</option>';
  html += '                <option value=\"jazz\" class=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2028
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2028);
                echo "\">";
                echo ($context["text_jazz"] ?? null);
                echo "</option>';
  html += '                <option value=\"sarah\" class=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2029
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2029);
                echo "\">";
                echo ($context["text_sarah"] ?? null);
                echo "</option>';
  html += '                <option value=\"romeo\" class=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2030
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2030);
                echo "\">";
                echo ($context["text_romeo"] ?? null);
                echo "</option>';
  html += '                <option value=\"bubba\" class=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2031
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2031);
                echo "\">";
                echo ($context["text_bubba"] ?? null);
                echo "</option>';
  html += '                <option value=\"marley\" class=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2032
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2032);
                echo "\">";
                echo ($context["text_marley"] ?? null);
                echo "</option>';
  html += '                <option value=\"oscar\" class=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2033
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2033);
                echo "\">";
                echo ($context["text_oscar"] ?? null);
                echo "</option>';
  html += '                <option value=\"sadie\" class=\"animation-group' + group_row + '-banner' + banner_row + '-language";
                // line 2034
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2034);
                echo "\">";
                echo ($context["text_sadie"] ?? null);
                echo "</option>';
  html += '              </select>';
  html += '            </div>';
  html += '            <div class=\"col-sm-6 example-effect\"><a href=\"//oc-day.ru/examples-of-hover-effects/\" target=\"_blank\">";
                // line 2037
                echo ($context["text_example_effect"] ?? null);
                echo "</a></div>';
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"input-title-image-group' + group_row + '-banner' + banner_row + '-language";
                // line 2040
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2040);
                echo "\">";
                echo ($context["entry_title"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <input type=\"text\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][title_image][";
                // line 2042
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2042);
                echo "]\" value=\"\" id=\"input-title-image-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2042);
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />';
  html += '            </div>'; 
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"input-alt-image-group' + group_row + '-banner' + banner_row + '-language";
                // line 2046
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2046);
                echo "\">";
                echo ($context["entry_alt"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <input type=\"text\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][alt_image][";
                // line 2048
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2048);
                echo "]\" value=\"\" id=\"input-alt-image-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2048);
                echo "\" placeholder=\"";
                echo ($context["entry_alt"] ?? null);
                echo "\" class=\"form-control\" />';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"form-group title-show title-show-group' + group_row + '-banner' + banner_row + '-language";
                // line 2051
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2051);
                echo "\">';
  html += '            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 2052
                echo ($context["help_hidden_setting"] ?? null);
                echo "\">";
                echo ($context["entry_title_banner"] ?? null);
                echo "</span></label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <label class=\"radio-inline\">';
  html += '                <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][title_show][";
                // line 2055
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2055);
                echo "]\" value=\"1\" />';
  html += '                ";
                // line 2056
                echo ($context["text_yes"] ?? null);
                echo "';
  html += '              </label>';
  html += '              <label class=\"radio-inline\">';
  html += '                <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][title_show][";
                // line 2059
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2059);
                echo "]\" value=\"0\" checked=\"checked\" />';
  html += '                ";
                // line 2060
                echo ($context["text_no"] ?? null);
                echo "';
  html += '              </label>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"block-title-banner block-title-banner-group' + group_row + '-banner' + banner_row + '-language";
                // line 2064
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2064);
                echo "\" style=\"display: none;\">';
  html += '            <div class=\"form-group\">';
  html += '              <label class=\"col-sm-2 control-label\" for=\"position-title-image-group' + group_row + '-banner' + banner_row + '-language";
                // line 2066
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2066);
                echo "\">";
                echo ($context["entry_position_desc"] ?? null);
                echo "</label>';
  html += '              <div class=\"col-sm-10\">';
  html += '                <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][position_title][";
                // line 2068
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2068);
                echo "]\" id=\"position-title-image-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2068);
                echo "\" class=\"form-control\">';
  html += '                  <option value=\"\">";
                // line 2069
                echo ($context["text_select"] ?? null);
                echo "</option>';
  html += '                  <option value=\"title_after_image\">";
                // line 2070
                echo ($context["text_title_after_image"] ?? null);
                echo "</option>';                     
  html += '                  <option value=\"title_before_image\">";
                // line 2071
                echo ($context["text_title_before_image"] ?? null);
                echo "</option>';                     
  html += '                  <option value=\"title_html_image\">";
                // line 2072
                echo ($context["text_title_html_image"] ?? null);
                echo "</option>';                     
  html += '                </select>';
  html += '              </div>';
  html += '            </div>';
  html += '            <div class=\"form-group\">';
  html += '              <label class=\"col-sm-2 control-label\" for=\"input-text-align-group' + group_row + '-banner' + banner_row + '-language";
                // line 2077
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2077);
                echo "\">";
                echo ($context["entry_text_align"] ?? null);
                echo "</label>';
  html += '              <div class=\"col-sm-10\">';
  html += '                <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][text_align][";
                // line 2079
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2079);
                echo "]\" id=\"input-text-align-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2079);
                echo "\" class=\"form-control\">';
  html += '                  <option value=\"\">";
                // line 2080
                echo ($context["text_select"] ?? null);
                echo "</option>';
  html += '                  <option value=\"left\">";
                // line 2081
                echo ($context["text_align_left"] ?? null);
                echo "</option>';                     
  html += '                  <option value=\"center\">";
                // line 2082
                echo ($context["text_align_center"] ?? null);
                echo "</option>';                     
  html += '                  <option value=\"right\">";
                // line 2083
                echo ($context["text_align_right"] ?? null);
                echo "</option>';
  html += '                </select>';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';  
  html += '          <div class=\"form-group link-image\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"input-link-image-group' + group_row + '-banner' + banner_row + '-language";
                // line 2089
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2089);
                echo "\">";
                echo ($context["entry_link"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <input type=\"text\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][link_image][";
                // line 2091
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2091);
                echo "]\" value=\"\" id=\"input-link-image-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2091);
                echo "\" placeholder=\"";
                echo ($context["entry_link"] ?? null);
                echo "\" class=\"form-control\" />';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\">";
                // line 2095
                echo ($context["entry_link_video"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <label class=\"radio-inline\">';
  html += '                <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][link_video][";
                // line 2098
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2098);
                echo "]\" value=\"1\" />';
  html += '                ";
                // line 2099
                echo ($context["text_yes"] ?? null);
                echo "';
  html += '              </label>';
  html += '              <label class=\"radio-inline\">';
  html += '                <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][link_video][";
                // line 2102
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2102);
                echo "]\" value=\"0\" checked=\"checked\" />';
  html += '                ";
                // line 2103
                echo ($context["text_no"] ?? null);
                echo "';
  html += '              </label>';
  html += '            </div>';
  html += '          </div>';  
  html += '          <div class=\"form-group\">';
  html += '            <label class=\"col-sm-2 control-label\" for=\"input-banner-modal-group' + group_row + '-banner' + banner_row + '-language";
                // line 2108
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2108);
                echo "\">";
                echo ($context["entry_modal"] ?? null);
                echo "</label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][modal][";
                // line 2110
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2110);
                echo "]\" id=\"input-banner-modal-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2110);
                echo "\" class=\"form-control\">';
  html += '                <option value=\"self\">";
                // line 2111
                echo ($context["text_self"] ?? null);
                echo "</option>';
  html += '                <option value=\"blank\">";
                // line 2112
                echo ($context["text_target"] ?? null);
                echo "</option>';                     
  html += '                <option value=\"modal\">";
                // line 2113
                echo ($context["text_modal"] ?? null);
                echo "</option>';                     
  html += '              </select>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"form-group banner-desc-group' + group_row + '-banner' + banner_row + '-language";
                // line 2117
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2117);
                echo "\">';
  html += '            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 2118
                echo ($context["help_hidden_setting"] ?? null);
                echo "\">";
                echo ($context["entry_banner_desc_show"] ?? null);
                echo "</span></label>';
  html += '            <div class=\"col-sm-10\">';
  html += '              <label class=\"radio-inline\">';
  html += '                <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][desc_show][";
                // line 2121
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2121);
                echo "]\" value=\"1\" />';
  html += '                ";
                // line 2122
                echo ($context["text_yes"] ?? null);
                echo "';
  html += '              </label>';
  html += '              <label class=\"radio-inline\">';
  html += '                <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][desc_show][";
                // line 2125
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2125);
                echo "]\" value=\"0\" checked=\"checked\" />';
  html += '                ";
                // line 2126
                echo ($context["text_no"] ?? null);
                echo "';
  html += '              </label>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div class=\"block-banner-desc-group' + group_row + '-banner' + banner_row + '-language";
                // line 2130
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2130);
                echo "\" style=\"display: none;\">';
  html += '            <div class=\"form-group\">';
  html += '              <label class=\"col-sm-2 control-label\" for=\"input-desc-group' + group_row + '-banner' + banner_row + '-language";
                // line 2132
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2132);
                echo "\">";
                echo ($context["text_description"] ?? null);
                echo "</label>';
  html += '              <div class=\"col-sm-10\">';
  html += '                <textarea class=\"form-control hide-editor\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][description][";
                // line 2134
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2134);
                echo "]\" rows=\"5\" placeholder=\"";
                echo ($context["text_description"] ?? null);
                echo "\" id=\"input-desc-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2134);
                echo "\" data-lang=\"";
                echo ($context["lang"] ?? null);
                echo "\"></textarea>';
  html += '                <a onclick=\"showEditorBanner(' + group_row +', ' + banner_row +', ";
                // line 2135
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2135);
                echo ");\" class=\"check-ckeditor check-ckeditor-group' + group_row +'-banner' + banner_row +'-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2135);
                echo "\">";
                echo ($context["text_show_editor"] ?? null);
                echo "</a>';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';
  html += '        </div>';   
  
  // Block settings Slider 
  html += '        <div class=\"block-slider block-slider-group' + group_row + '-banner' + banner_row + '-language";
                // line 2142
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2142);
                echo "\">';
  html += '          <div class=\"slide-block-button\">';
  html += '            <div class=\"slide-add\">';
  html += '              <a onclick=\"addSliderElement(' + group_row + ', ' + banner_row + ', ";
                // line 2145
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2145);
                echo ");\" class=\"btn btn-success\">";
                echo ($context["entry_add_slide"] ?? null);
                echo "</a>';             
  html += '            </div>';
  html += '            <div class=\"slider-setting\">';
  html += '              <a data-target=\"#slider-setting-group' + group_row + '-banner' + banner_row + '-language";
                // line 2148
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2148);
                echo "\" data-toggle=\"modal\" class=\"btn btn-setting\">";
                echo ($context["entry_settings"] ?? null);
                echo "</a>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div id=\"slider-setting-group' + group_row + '-banner' + banner_row + '-language";
                // line 2151
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2151);
                echo "\" class=\"modal fade\">';
  html += '            <div class=\"modal-dialog modal-lg\">';
  html += '              <div class=\"modal-content\">';
  html += '                <div class=\"modal-header\">';
  html += '                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>';
  html += '                  <h4 class=\"modal-title\">";
                // line 2156
                echo ($context["entry_settings"] ?? null);
                echo "</h4>';
  html += '                </div>';
  html += '                <div class=\"modal-body\">';
  html += '                  <div class=\"form-group\">';
  html += '                    <label class=\"col-sm-3 control-label\" for=\"slider-mode-group' + group_row + '-banner' + banner_row + '-language";
                // line 2160
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2160);
                echo "\">";
                echo ($context["entry_slider_mode"] ?? null);
                echo "</label>';
  html += '                    <div class=\"col-sm-9\">';
  html += '                      <select name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_mode][";
                // line 2162
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2162);
                echo "]\" id=\"slider-mode-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2162);
                echo "\" class=\"form-control\">';
  html += '                        <option value=\"slide\">";
                // line 2163
                echo ($context["text_slide"] ?? null);
                echo "</option>';                     
  html += '                        <option value=\"fade\">";
                // line 2164
                echo ($context["text_fade"] ?? null);
                echo "</option>';                     
  html += '                      </select>';
  html += '                    </div>';
  html += '                  </div>';
  html += '                  <div class=\"form-group\">';
  html += '                    <label class=\"col-sm-3 control-label\">";
                // line 2169
                echo ($context["text_carousel_autoplay"] ?? null);
                echo "</label>';
  html += '                    <div class=\"col-sm-2\">';
  html += '                      <label class=\"radio-inline\">';
  html += '                        <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_autoplay][";
                // line 2172
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2172);
                echo "]\" value=\"1\" />';
  html += '                        ";
                // line 2173
                echo ($context["text_yes"] ?? null);
                echo "';
  html += '                      </label>';
  html += '                      <label class=\"radio-inline\">';
  html += '                        <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_autoplay][";
                // line 2176
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2176);
                echo "]\" value=\"0\" checked=\"checked\" />';
  html += '                        ";
                // line 2177
                echo ($context["text_no"] ?? null);
                echo "';
  html += '                      </label>';
  html += '                    </div>';
  html += '                    <label class=\"col-sm-4 control-label\" for=\"slider-autoplay-speed-group' + group_row + '-banner' + banner_row + '-language";
                // line 2180
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2180);
                echo "\">";
                echo ($context["text_carousel_autoplay_speed"] ?? null);
                echo "</label>';
  html += '                    <div class=\"col-sm-3\">';
  html += '                      <input type=\"text\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_autoplay_speed][";
                // line 2182
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2182);
                echo "]\" value=\"\" id=\"slider-autoplay-speed-group' + group_row + '-banner' + banner_row + '-language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2182);
                echo "\" class=\"form-control\" />';
  html += '                    </div>';
  html += '                  </div>';
  html += '                  <div class=\"form-group\">';
  html += '                    <label class=\"col-sm-3 control-label\">";
                // line 2186
                echo ($context["text_carousel_navigation"] ?? null);
                echo "</label>';
  html += '                    <div class=\"col-sm-9\">';
  html += '                      <label class=\"radio-inline\">';
  html += '                        <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_navigation][";
                // line 2189
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2189);
                echo "]\" value=\"1\" />';
  html += '                        ";
                // line 2190
                echo ($context["text_yes"] ?? null);
                echo "';
  html += '                      </label>';
  html += '                      <label class=\"radio-inline\">';
  html += '                        <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_navigation][";
                // line 2193
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2193);
                echo "]\" value=\"0\" checked=\"checked\" />';
  html += '                        ";
                // line 2194
                echo ($context["text_no"] ?? null);
                echo "';
  html += '                      </label>';
  html += '                    </div>';
  html += '                  </div>';
  html += '                  <div class=\"form-group\">';
  html += '                    <label class=\"col-sm-3 control-label\">";
                // line 2199
                echo ($context["text_carousel_pagination"] ?? null);
                echo "</label>';
  html += '                    <div class=\"col-sm-9\">';
  html += '                      <label class=\"radio-inline\">';
  html += '                        <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_pagination][";
                // line 2202
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2202);
                echo "]\" value=\"1\" />';
  html += '                        ";
                // line 2203
                echo ($context["text_yes"] ?? null);
                echo "';
  html += '                      </label>';
  html += '                      <label class=\"radio-inline\">';
  html += '                        <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_pagination][";
                // line 2206
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2206);
                echo "]\" value=\"0\" checked=\"checked\" />';
  html += '                        ";
                // line 2207
                echo ($context["text_no"] ?? null);
                echo "';
  html += '                      </label>';
  html += '                    </div>';
  html += '                  </div>';
  html += '                  <div class=\"form-group\">';
  html += '                    <label class=\"col-sm-3 control-label\">";
                // line 2212
                echo ($context["text_carousel_loop"] ?? null);
                echo "</label>';
  html += '                    <div class=\"col-sm-9\">';
  html += '                      <label class=\"radio-inline\">';
  html += '                        <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_loop][";
                // line 2215
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2215);
                echo "]\" value=\"1\" />';
  html += '                        ";
                // line 2216
                echo ($context["text_yes"] ?? null);
                echo "';
  html += '                      </label>';
  html += '                      <label class=\"radio-inline\">';
  html += '                        <input type=\"radio\" name=\"group_tab[' + group_row + '][banner_image][' + banner_row + '][slider_loop][";
                // line 2219
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2219);
                echo "]\" value=\"0\" checked=\"checked\" />';
  html += '                        ";
                // line 2220
                echo ($context["text_no"] ?? null);
                echo "';
  html += '                      </label>';
  html += '                    </div>';
  html += '                  </div>';
  html += '                </div>';
  html += '                <div class=\"modal-footer\">';
  html += '                  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
                // line 2226
                echo ($context["button_close"] ?? null);
                echo "</button>';
  html += '                </div>';
  html += '              </div>';
  html += '            </div>';
  html += '          </div>';
  html += '          <div id=\"slider-wrapper-group' + group_row + '-banner' + banner_row + '-language";
                // line 2231
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2231);
                echo "\">';
  html += '          </div>';
  html += '        </div>'; 
  // end Block settings Slider
  
  html += '      </div>';
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2238
            echo "  html += '    </div>';
  
  html += '</div>';
  
  \$('#tab-setting-banners-group' + group_row + ' .tab-content:first').append(html);
 
\t\$('#banner-image-add-group' + group_row).before('<li class=\"banner-image\"><a href=\"#tab-banner-images-group' + group_row + '-banner' + banner_row + '\" data-toggle=\"tab\">";
            // line 2244
            echo ($context["entry_banner"] ?? null);
            echo " - ' + banner_row + ' <i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-banner-images-group' + group_row + '-banner' + banner_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-banner-images-group' + group_row + '-banner' + banner_row + '\\').remove(); \$(\\'#banner-image-group' + group_row + ' a:first\\').tab(\\'show\\');\"></i></a></li>');
                                 
  \$('#tab-group' + group_row + ' a[href=\\'#tab-banner-images-group' + group_row + '-banner' + banner_row + '\\']').tab('show');
  
  \$('#language-group' + group_row + '-banner' + banner_row + ' li:first-child a').tab('show');

  showSettingBanner(group_row, banner_row);
  
  sortSlider(group_row, banner_row);
  
  banner_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
var languages = Array();
";
            // line 2259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2260
                echo "languages.push('";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2260);
                echo " ');
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2262
            echo "
function showSettingBanner(group_row, banner_row) {
  \$('#input-mode-group' + group_row).change(function () {
    var str = '';
    \$('#input-mode-group' + group_row + ' option:selected').each(function() {
\t    str = \$(this).val();
\t  });
  
    if (str == 'carousel') {
      \$('.image-slider-group' + group_row + '-banner' + banner_row).hide();
    } else {
      \$('.image-slider-group' + group_row + '-banner' + banner_row).show();
\t  }
  
    if (str == 'respgrid') {
      \$('.block-respgrid-group' + group_row + '-banner' + banner_row).show();
      \$.each(languages, function(index, value) {
        \$('.animation-group' + group_row + '-banner' + banner_row + '-language' + value).hide();
      });
    } else {
      \$('.block-respgrid-group' + group_row + '-banner' + banner_row).hide();
      \$.each(languages, function(index, value) {
        \$('.animation-group' + group_row + '-banner' + banner_row + '-language' + value).show();
      });
\t  }
  }).change();
  
  \$.each(languages, function(index, value) {
    \$('#input-banner-type-group' + group_row + '-banner' + banner_row).change(function () {
      var str = '';
      \$('#input-banner-type-group' + group_row + '-banner' + banner_row + ' option:selected').each(function() {
        str = \$(this).val();
      });
  
      if (str == 'image_image') {
        \$('.block-image-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        \$('.block-image-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
  
      if (str == 'image_video') {
        \$('.block-video-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        \$('.block-video-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
  
      if (str == 'image_slider') {
        \$('.block-slider-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        \$('.block-slider-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
    }).change();
      
    \$('.title-show-group' + group_row + '-banner' + banner_row + '-language' + value + ' input').change(function () {
      var str = '';
      \$('.title-show-group' + group_row + '-banner' + banner_row + '-language' + value + ' input:checked').each(function() {
        str = \$(this).val();
      });

      if (str == '1') {
        \$('.block-title-banner-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        \$('.block-title-banner-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
    }).change();
            
    \$('.banner-desc-group' + group_row + '-banner' + banner_row + '-language' + value + ' input').change(function () {
      var str = '';
      \$('.banner-desc-group' + group_row + '-banner' + banner_row + '-language' + value + ' input:checked').each(function() {
        str = \$(this).val();
      });

      if (str == '1') {
        \$('.block-banner-desc-group' + group_row + '-banner' + banner_row + '-language' + value).show(300);
      } else {
        \$('.block-banner-desc-group' + group_row + '-banner' + banner_row + '-language' + value).hide(300);
      }
    }).change();
  });
}

function sortSlider(group_row, banner_row) {
  \$.each(languages, function(index, value) {
    var el_Sortable = document.getElementById('slider-wrapper-group' + group_row + '-banner' + banner_row + '-language' + value);
    
    if (el_Sortable !== null) {
      new Sortable(el_Sortable, {
        handle: \".handle-slider\",
        animation: 150
      });
    }
  });
}
//--></script>
<script type=\"text/javascript\"><!--
\$('#group li').each(function(index_group, element) {
  \$('#banner-image-group' + index_group + ' li').each(function(index_banner, element) {
    \$('#language-group' + index_group + '-banner' + index_banner + ' li:first-child a').tab('show');
    
    showSettingBanner(index_group, index_banner);
    sortSlider(index_group, index_banner);
  });                 
});
//--></script>
<script type=\"text/javascript\"><!--
function addSliderElement(group_row, banner_row, language_id) {
  var slider_item_row = \$('#slider-wrapper-group' + group_row +'-banner' + banner_row +'-language' + language_id).children().length;

  html  = '<div class=\"slider-block slider-block-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\">';
   
  html += '  <div class=\"slide-panel-heading\">';
  html += '    <i class=\"fa fa-arrows handle handle-slider\"></i>';  
  html += '    <a data-toggle=\"collapse\" href=\"#slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '\">";
            // line 2374
            echo ($context["entry_slide"] ?? null);
            echo " - ' + slider_item_row + '</a>';
  html += '    <div class=\"slide-button\">';
  html += '      <i class=\"fa fa-pencil\" data-tooltip=\"tooltip\" title=\"";
            // line 2376
            echo ($context["button_edit"] ?? null);
            echo "\" data-toggle=\"collapse\" data-target=\"#slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '\"></i>';
  html += '      <i class=\"fa fa-life-ring hidden\" data-target=\"#modal-decor-slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '\" data-toggle=\"modal\" data-tooltip=\"tooltip\" title=\"";
            // line 2377
            echo ($context["button_decor"] ?? null);
            echo "\"></i>';
  html += '      <label>';
  html += '        <i onclick=\"\$(this).toggleClass(\\'slide-on slide-off\\');\" class=\"fa fa-power-off slide-on\" data-tooltip=\"tooltip\" title=\"";
            // line 2379
            echo ($context["button_status"] ?? null);
            echo "\"></i>';
  html += '        <input type=\"checkbox\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][status]\" value=\"1\" checked=\"checked\" id=\"slide-status-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\" />';
  html += '      </label>';
  html += '      <i class=\"fa fa-trash-o\" data-toggle=\"tooltip\" title=\"";
            // line 2382
            echo ($context["button_remove"] ?? null);
            echo "\" onclick=\"\$(this).parent().parent().parent().remove();\"></i>';
  html += '    </div>';
  html += '  </div>';  
  html += '  <div id=\"modal-decor-slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '\" class=\"modal fade\">';
  html += '    <div class=\"modal-dialog modal-lg\">';
  html += '      <div class=\"modal-content\">';
  html += '        <div class=\"modal-header\">';
  html += '          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>';
  html += '          <h4 class=\"modal-title\">";
            // line 2390
            echo ($context["button_decor"] ?? null);
            echo " [";
            echo ($context["entry_slide"] ?? null);
            echo " - ' + slider_item_row +']</h4>';
  html += '        </div>';
  html += '        <div class=\"modal-body\">';
  html += '          ";
            // line 2393
            echo ($context["text_decor_development"] ?? null);
            echo "';
  html += '        </div>';
  html += '        <div class=\"modal-footer\">';
  html += '          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 2396
            echo ($context["button_close"] ?? null);
            echo "</button>';
  html += '        </div>';
  html += '      </div>';
  html += '    </div>';
  html += '  </div>';
  html += '  <div id=\"slide' + slider_item_row +'-group' + group_row +'-banner' + banner_row +'-language' + language_id + '\" class=\"panel-collapse collapse\">';
  html += '    <div class=\"slide-panel-body\">';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-image-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '\">";
            // line 2404
            echo ($context["entry_thumb"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';                                                                                                                                                        
  html += '          <a href=\"\" id=\"thumb-image-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 2406
            echo ($context["placeholder"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>';
  html += '          <input type=\"hidden\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][image_slide]\" value=\"\" id=\"input-image-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\" />';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-slider-item-title-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\">";
            // line 2411
            echo ($context["entry_title"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <input type=\"text\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][title_slide]\" value=\"\" id=\"input-slider-item-title-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\" placeholder=\"";
            // line 2413
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" />';
  html += '        </div>'; 
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-slider-item-alt-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\">";
            // line 2417
            echo ($context["entry_alt"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <input type=\"text\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][alt_slide]\" value=\"\" id=\"input-slider-item-alt-slide-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\" placeholder=\"";
            // line 2419
            echo ($context["entry_alt"] ?? null);
            echo "\" class=\"form-control\" />';
  html += '        </div>'; 
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\">";
            // line 2423
            echo ($context["entry_title_banner"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <label class=\"radio-inline\">';
  html += '            <input type=\"radio\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][title_slide_show]\" value=\"1\" />';
  html += '            ";
            // line 2427
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '          </label>';
  html += '          <label class=\"radio-inline\">';
  html += '            <input type=\"radio\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][title_slide_show]\" value=\"0\" checked=\"checked\" />';
  html += '            ";
            // line 2431
            echo ($context["text_no"] ?? null);
            echo "';
  html += '          </label>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-slide-text-align-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\">";
            // line 2436
            echo ($context["entry_text_align"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <select name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][title_slide_align]\" class=\"form-control\">';
  html += '            <option value=\"\">";
            // line 2439
            echo ($context["text_select"] ?? null);
            echo "</option>';
  html += '            <option value=\"left\">";
            // line 2440
            echo ($context["text_align_left"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"center\">";
            // line 2441
            echo ($context["text_align_center"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"right\">";
            // line 2442
            echo ($context["text_align_right"] ?? null);
            echo "</option>';                     
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-slide-link-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\">";
            // line 2447
            echo ($context["entry_link"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <input type=\"text\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][link_slide]\" value=\"\" id=\"input-slide-link-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\" placeholder=\"";
            // line 2449
            echo ($context["entry_link"] ?? null);
            echo "\" class=\"form-control\" />';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\">";
            // line 2453
            echo ($context["entry_link_video"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <label class=\"radio-inline\">';
  html += '            <input type=\"radio\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][link_slide_video]\" value=\"1\" />';
  html += '            ";
            // line 2457
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '          </label>';
  html += '          <label class=\"radio-inline\">';
  html += '            <input type=\"radio\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][link_slide_video]\" value=\"0\" checked=\"checked\" />';
  html += '            ";
            // line 2461
            echo ($context["text_no"] ?? null);
            echo "';
  html += '          </label>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-slide-link-video-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\">";
            // line 2466
            echo ($context["entry_modal"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <select name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][link_slide_video_modal]\" id=\"input-slide-link-video-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\" class=\"form-control\">';
  html += '            <option value=\"self\">";
            // line 2469
            echo ($context["text_self"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"blank\">";
            // line 2470
            echo ($context["text_target"] ?? null);
            echo "</option>';                     
  html += '            <option value=\"modal\">";
            // line 2471
            echo ($context["text_modal"] ?? null);
            echo "</option>';                     
  html += '          </select>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\">";
            // line 2476
            echo ($context["entry_banner_desc_show"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <label class=\"radio-inline\">';
  html += '            <input type=\"radio\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][desc_slide_show]\" value=\"1\" />';
  html += '            ";
            // line 2480
            echo ($context["text_yes"] ?? null);
            echo "';
  html += '          </label>';
  html += '          <label class=\"radio-inline\">';
  html += '            <input type=\"radio\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][desc_slide_show]\" value=\"0\" checked=\"checked\" />';
  html += '            ";
            // line 2484
            echo ($context["text_no"] ?? null);
            echo "';
  html += '          </label>';
  html += '        </div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-2 control-label\" for=\"input-slide-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\">";
            // line 2489
            echo ($context["text_description"] ?? null);
            echo "</label>';
  html += '        <div class=\"col-sm-10\">';
  html += '          <textarea class=\"form-control hide-editor\" name=\"group_tab[' + group_row +'][banner_image][' + banner_row +'][image_slider][' + language_id + '][' + slider_item_row +'][desc_slide]\" rows=\"5\" placeholder=\"";
            // line 2491
            echo ($context["text_description"] ?? null);
            echo "\" id=\"input-slide-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\" data-lang=\"";
            echo ($context["lang"] ?? null);
            echo "\"></textarea>';
  html += '          <a onclick=\"showEditorSlide(' + group_row +', ' + banner_row +', ' + language_id + ', ' + slider_item_row +');\" class=\"check-ckeditor check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row +'\">";
            // line 2492
            echo ($context["text_show_editor"] ?? null);
            echo "</a>';
  html += '        </div>';
  html += '      </div>';
  html += '    </div>';
  html += '  </div>';

  html += '</div>';
  
  \$('#slider-wrapper-group' + group_row +'-banner' + banner_row +'-language' + language_id).append(html);
  
  //console.log(\$('#slider-wrapper-group' + group_row +'-banner' + banner_row +'-language' + language_id).children().length);

  slider_item_row++;
}
//--></script>
<script type=\"text/javascript\"><!--
function showEditorSlide(group_row, banner_row, language_id, slider_item_row) {
  var textarea = \$('#input-slide-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row); 
  
  ";
            // line 2511
            if (($context["ckeditor"] ?? null)) {
                // line 2512
                echo "  if (CKEDITOR.instances[\$(textarea).attr('id')]) {
\t\tCKEDITOR.instances[\$(textarea).attr('id')].destroy(true);
\t\t\$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row).text('";
                // line 2514
                echo ($context["text_show_editor"] ?? null);
                echo "');
\t} else {
\t\tckeditorInit('input-slide-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row + '', getURLVar('token'));
    \$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row).text('";
                // line 2517
                echo ($context["text_hide_editor"] ?? null);
                echo "');
  }
  ";
            } else {
                // line 2520
                echo "  if(\$(textarea).hasClass('summernote')) {
    \$(textarea).removeClass('summernote show-editor').summernote('destroy');
    \$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row).text('";
                // line 2522
                echo ($context["text_show_editor"] ?? null);
                echo "');
  } else {
    \$(textarea).addClass('summernote show-editor').summernote({height: 200, lang:'";
                // line 2524
                echo ($context["lang"] ?? null);
                echo "'});
    \$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id + '-item' + slider_item_row).text('";
                // line 2525
                echo ($context["text_hide_editor"] ?? null);
                echo "');
  }
  ";
            }
            // line 2528
            echo "}
//--></script>
<script type=\"text/javascript\"><!--
";
            // line 2531
            $context["group_row"] = 0;
            // line 2532
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["group_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group_tab"]) {
                // line 2533
                $context["banner_row"] = 0;
                // line 2534
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", false, false, false, 2534));
                foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                    // line 2535
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 2536
                        echo "if (\$('#input-desc-group";
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "-language";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2536);
                        echo "').hasClass('show-editor')) {
  ckeditorInit('input-desc-group";
                        // line 2537
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "-language";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2537);
                        echo "', getURLVar('token'));
}

\$('.check-ckeditor-group";
                        // line 2540
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "-language";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2540);
                        echo "').click(function(){
  var textarea = \$('#input-desc-group";
                        // line 2541
                        echo ($context["group_row"] ?? null);
                        echo "-banner";
                        echo ($context["banner_row"] ?? null);
                        echo "-language";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2541);
                        echo "');

  ";
                        // line 2543
                        if (($context["ckeditor"] ?? null)) {
                            // line 2544
                            echo "  if (CKEDITOR.instances[\$(textarea).attr('id')]) {
\t\tCKEDITOR.instances[\$(textarea).attr('id')].destroy(true);
\t\t\$(this).text('";
                            // line 2546
                            echo ($context["text_show_editor"] ?? null);
                            echo "');
\t} else {
\t\tckeditorInit('input-desc-group";
                            // line 2548
                            echo ($context["group_row"] ?? null);
                            echo "-banner";
                            echo ($context["banner_row"] ?? null);
                            echo "-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2548);
                            echo "', getURLVar('token'));
    \$(this).text('";
                            // line 2549
                            echo ($context["text_hide_editor"] ?? null);
                            echo "');
  }
  ";
                        } else {
                            // line 2552
                            echo "  if(\$(textarea).hasClass('summernote')) {
    \$(textarea).removeClass('summernote show-editor').summernote('destroy');
    \$(this).text('";
                            // line 2554
                            echo ($context["text_show_editor"] ?? null);
                            echo "');
  } else {
    \$(textarea).addClass('summernote show-editor').summernote({height: 200, lang:'";
                            // line 2556
                            echo ($context["lang"] ?? null);
                            echo "'});
    \$(this).text('";
                            // line 2557
                            echo ($context["text_hide_editor"] ?? null);
                            echo "');
  } 
  ";
                        }
                        // line 2559
                        echo " 
});

// START Visual Editor Slide
";
                        // line 2563
                        $context["slider_item_row"] = 0;
                        echo " 
";
                        // line 2564
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_slider", [], "any", false, true, false, 2564), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2564), [], "array", true, true, false, 2564)) {
                            echo " 
";
                            // line 2565
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_slider", [], "any", false, false, false, 2565)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2565)] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["slider_item"]) {
                                echo " 
if (\$('#input-slide-desc-group";
                                // line 2566
                                echo ($context["group_row"] ?? null);
                                echo "-banner";
                                echo ($context["banner_row"] ?? null);
                                echo "-language";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2566);
                                echo "-item";
                                echo ($context["slider_item_row"] ?? null);
                                echo "').hasClass('show-editor')) {
  ckeditorInit('input-slide-desc-group";
                                // line 2567
                                echo ($context["group_row"] ?? null);
                                echo "-banner";
                                echo ($context["banner_row"] ?? null);
                                echo "-language";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2567);
                                echo "-item";
                                echo ($context["slider_item_row"] ?? null);
                                echo "', getURLVar('token'));
}

\$('.check-ckeditor-group";
                                // line 2570
                                echo ($context["group_row"] ?? null);
                                echo "-banner";
                                echo ($context["banner_row"] ?? null);
                                echo "-language";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2570);
                                echo "-item";
                                echo ($context["slider_item_row"] ?? null);
                                echo "').click(function(){
  var textarea = \$('#input-slide-desc-group";
                                // line 2571
                                echo ($context["group_row"] ?? null);
                                echo "-banner";
                                echo ($context["banner_row"] ?? null);
                                echo "-language";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2571);
                                echo "-item";
                                echo ($context["slider_item_row"] ?? null);
                                echo "');
  
  ";
                                // line 2573
                                if (($context["ckeditor"] ?? null)) {
                                    // line 2574
                                    echo "  if (CKEDITOR.instances[\$(textarea).attr('id')]) {
\t\tCKEDITOR.instances[\$(textarea).attr('id')].destroy(true);
\t\t\$(this).text('";
                                    // line 2576
                                    echo ($context["text_show_editor"] ?? null);
                                    echo "');
\t} else {
\t\tckeditorInit('input-slide-desc-group";
                                    // line 2578
                                    echo ($context["group_row"] ?? null);
                                    echo "-banner";
                                    echo ($context["banner_row"] ?? null);
                                    echo "-language";
                                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2578);
                                    echo "-item";
                                    echo ($context["slider_item_row"] ?? null);
                                    echo "', getURLVar('token'));
    \$(this).text('";
                                    // line 2579
                                    echo ($context["text_hide_editor"] ?? null);
                                    echo "');
  }
  ";
                                } else {
                                    // line 2582
                                    echo "  if(\$(textarea).hasClass('summernote')) {
    \$(textarea).removeClass('summernote show-editor').summernote('destroy');
    \$(this).text('";
                                    // line 2584
                                    echo ($context["text_show_editor"] ?? null);
                                    echo "');
  } else {
    \$(textarea).addClass('summernote show-editor').summernote({height: 200, lang:'";
                                    // line 2586
                                    echo ($context["lang"] ?? null);
                                    echo "'});
    \$(this).text('";
                                    // line 2587
                                    echo ($context["text_hide_editor"] ?? null);
                                    echo "');
  }
  ";
                                }
                                // line 2590
                                echo "});
";
                                // line 2591
                                $context["slider_item_row"] = (($context["slider_item_row"] ?? null) + 1);
                                echo " 
";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 2592
                            echo " 
";
                        }
                        // line 2593
                        echo " 
// END Visual Editor Slide

";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 2596
                    echo " 
";
                    // line 2597
                    $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                    echo " 
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2598
                echo " 
";
                // line 2599
                $context["group_row"] = (($context["group_row"] ?? null) + 1);
                echo " 
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2601
            echo "//--></script>
<script type=\"text/javascript\"><!--
function showEditorBanner(group_row, banner_row, language_id) {
  var textarea = \$('#input-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id); 
  
  ";
            // line 2606
            if (($context["ckeditor"] ?? null)) {
                // line 2607
                echo "  if (CKEDITOR.instances[\$(textarea).attr('id')]) {
\t\tCKEDITOR.instances[\$(textarea).attr('id')].destroy(true);
\t\t\$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id).text('";
                // line 2609
                echo ($context["text_show_editor"] ?? null);
                echo "');
\t} else {
\t\tckeditorInit('input-desc-group' + group_row +'-banner' + banner_row +'-language' + language_id + '', getURLVar('token'));
    \$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id).text('";
                // line 2612
                echo ($context["text_hide_editor"] ?? null);
                echo "');
  }
  ";
            } else {
                // line 2615
                echo "  if(\$(textarea).hasClass('summernote')) {
    \$(textarea).removeClass('summernote show-editor').summernote('destroy');
    \$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id).text('";
                // line 2617
                echo ($context["text_show_editor"] ?? null);
                echo "');
  } else {
    \$(textarea).addClass('summernote show-editor').summernote({height: 200, lang:'";
                // line 2619
                echo ($context["lang"] ?? null);
                echo "'});
    \$('.check-ckeditor-group' + group_row +'-banner' + banner_row +'-language' + language_id).text('";
                // line 2620
                echo ($context["text_hide_editor"] ?? null);
                echo "');
  }
  ";
            }
            // line 2623
            echo "}
//--></script>
<script type=\"text/javascript\"><!--
\$('#input-width-container').change(function() {
  var str = '';
  
  \$('#input-width-container option:selected').each(function() {
    str = \$(this).val();
  });
\t      
  if (str == '3') {
    \$('.image-bg').show(300);
  } else {
    \$('.image-bg').hide(300);
  }
}).change();

\$('#bg-mode').change(function() {
  var str = '';
  
  \$('#bg-mode option:selected').each(function() {
    str = \$(this).val();
  });
\t      
  if (str == 'bg_color') {
    \$('.mode-bg-image').hide();
    \$('.mode-bg-color').show(300);
  } else {
    \$('.mode-bg-color').hide();
    \$('.mode-bg-image').show(300);
  }
}).change();

\$('#group a:first').tab('show');

\$(function () {   
  \$('[data-tooltip=\"tooltip\"]').tooltip()
});  

\$(document).ready(function() {
  var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('input-css'), {
    lineNumbers: true,               
    mode: 'css', 
    theme: 'dracula',        
  });
    
  \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function(e){
    myCodeMirror.refresh();   
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'product_name\\']').autocomplete({
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&";
            // line 2678
            echo ($context["token_text"] ?? null);
            echo "=";
            echo ($context["token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(item) {
\t\t\$('input[name=\\'product_name\\']').val('');
\t\t
\t\t\$('#featured-product' + item['value']).remove();
\t\t
\t\t\$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"ocdbanner_product[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});
\t
\$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
<script type=\"text/javascript\">
\$('.colorpicker').each(function(index) {
  \$(this).attr('id', 'colorpicker_'+index);
\t
  var colorpicker = new Array();
\t
  colorpicker[index] = \$('#colorpicker_'+index).val();
\t
  \$('#colorpicker_'+index).css('border-left-color', colorpicker[index]);

\t\$('#colorpicker_'+index).colpick({
\t  layout:'rgbhex',
\t\tsubmit:0,
\t\tcolor: colorpicker[index],
\t\tonChange:function(hsb,hex,rgb,el,bySetColor) {
\t\t  if(!bySetColor) {
\t\t\t  \$(el).val('#'+hex);
\t\t\t  \$('#colorpicker_'+index).val('#'+hex );
\t\t\t}
\t\t\t\$(el).css('border-left-color','#'+hex);
\t\t\t\$(this+' .colpick_current_color').css('background-color', colorpicker[index] );
\t\t\t\$('.colpick_current_color').css('display', 'visible' );

\t\t}
\t}).keyup(function(){
\t  \$(this).colpickSetColor(this.value);
\t});
});
</script>
<div id=\"pojasnenie-custom-grid\" class=\"modal fade\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"fa fa-close\"></i></button>
        <h4>";
            // line 2737
            echo ($context["text_pojasnenie_header"] ?? null);
            echo "</h4>
      </div>
      <div class=\"modal-body\">";
            // line 2739
            echo ($context["text_pojasnenie_custom_grid"] ?? null);
            echo "</div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 2741
            echo ($context["button_close"] ?? null);
            echo "</button>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-video-id\" class=\"modal fade\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"fa fa-close\"></i></button>
        <h4>";
            // line 2751
            echo ($context["text_video_id_header"] ?? null);
            echo "</h4>
      </div>
      <div class=\"modal-body\">";
            // line 2753
            echo ($context["text_video_id"] ?? null);
            echo "</div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 2755
            echo ($context["button_close"] ?? null);
            echo "</button>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 2761
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/ocdbanner/ocdbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  7445 => 2761,  7436 => 2755,  7431 => 2753,  7426 => 2751,  7413 => 2741,  7408 => 2739,  7403 => 2737,  7339 => 2678,  7282 => 2623,  7276 => 2620,  7272 => 2619,  7267 => 2617,  7263 => 2615,  7257 => 2612,  7251 => 2609,  7247 => 2607,  7245 => 2606,  7238 => 2601,  7230 => 2599,  7227 => 2598,  7219 => 2597,  7216 => 2596,  7207 => 2593,  7203 => 2592,  7195 => 2591,  7192 => 2590,  7186 => 2587,  7182 => 2586,  7177 => 2584,  7173 => 2582,  7167 => 2579,  7157 => 2578,  7152 => 2576,  7148 => 2574,  7146 => 2573,  7135 => 2571,  7125 => 2570,  7113 => 2567,  7103 => 2566,  7097 => 2565,  7093 => 2564,  7089 => 2563,  7083 => 2559,  7077 => 2557,  7073 => 2556,  7068 => 2554,  7064 => 2552,  7058 => 2549,  7050 => 2548,  7045 => 2546,  7041 => 2544,  7039 => 2543,  7030 => 2541,  7022 => 2540,  7012 => 2537,  7003 => 2536,  6999 => 2535,  6995 => 2534,  6993 => 2533,  6989 => 2532,  6987 => 2531,  6982 => 2528,  6976 => 2525,  6972 => 2524,  6967 => 2522,  6963 => 2520,  6957 => 2517,  6951 => 2514,  6947 => 2512,  6945 => 2511,  6923 => 2492,  6917 => 2491,  6912 => 2489,  6904 => 2484,  6897 => 2480,  6890 => 2476,  6882 => 2471,  6878 => 2470,  6874 => 2469,  6868 => 2466,  6860 => 2461,  6853 => 2457,  6846 => 2453,  6839 => 2449,  6834 => 2447,  6826 => 2442,  6822 => 2441,  6818 => 2440,  6814 => 2439,  6808 => 2436,  6800 => 2431,  6793 => 2427,  6786 => 2423,  6779 => 2419,  6774 => 2417,  6767 => 2413,  6762 => 2411,  6752 => 2406,  6747 => 2404,  6736 => 2396,  6730 => 2393,  6722 => 2390,  6711 => 2382,  6705 => 2379,  6700 => 2377,  6696 => 2376,  6691 => 2374,  6577 => 2262,  6568 => 2260,  6564 => 2259,  6546 => 2244,  6538 => 2238,  6525 => 2231,  6517 => 2226,  6508 => 2220,  6504 => 2219,  6498 => 2216,  6494 => 2215,  6488 => 2212,  6480 => 2207,  6476 => 2206,  6470 => 2203,  6466 => 2202,  6460 => 2199,  6452 => 2194,  6448 => 2193,  6442 => 2190,  6438 => 2189,  6432 => 2186,  6423 => 2182,  6416 => 2180,  6410 => 2177,  6406 => 2176,  6400 => 2173,  6396 => 2172,  6390 => 2169,  6382 => 2164,  6378 => 2163,  6372 => 2162,  6365 => 2160,  6358 => 2156,  6350 => 2151,  6342 => 2148,  6334 => 2145,  6328 => 2142,  6314 => 2135,  6304 => 2134,  6297 => 2132,  6292 => 2130,  6285 => 2126,  6281 => 2125,  6275 => 2122,  6271 => 2121,  6263 => 2118,  6259 => 2117,  6252 => 2113,  6248 => 2112,  6244 => 2111,  6238 => 2110,  6231 => 2108,  6223 => 2103,  6219 => 2102,  6213 => 2099,  6209 => 2098,  6203 => 2095,  6192 => 2091,  6185 => 2089,  6176 => 2083,  6172 => 2082,  6168 => 2081,  6164 => 2080,  6158 => 2079,  6151 => 2077,  6143 => 2072,  6139 => 2071,  6135 => 2070,  6131 => 2069,  6125 => 2068,  6118 => 2066,  6113 => 2064,  6106 => 2060,  6102 => 2059,  6096 => 2056,  6092 => 2055,  6084 => 2052,  6080 => 2051,  6070 => 2048,  6063 => 2046,  6052 => 2042,  6045 => 2040,  6039 => 2037,  6031 => 2034,  6025 => 2033,  6019 => 2032,  6013 => 2031,  6007 => 2030,  6001 => 2029,  5995 => 2028,  5989 => 2027,  5985 => 2026,  5981 => 2025,  5977 => 2024,  5973 => 2023,  5969 => 2022,  5963 => 2021,  5956 => 2019,  5947 => 2015,  5939 => 2014,  5932 => 2012,  5927 => 2010,  5919 => 2005,  5915 => 2004,  5911 => 2003,  5907 => 2002,  5901 => 2001,  5894 => 1999,  5886 => 1994,  5882 => 1993,  5878 => 1992,  5872 => 1991,  5865 => 1989,  5857 => 1984,  5853 => 1983,  5847 => 1980,  5843 => 1979,  5837 => 1976,  5826 => 1972,  5819 => 1970,  5813 => 1967,  5806 => 1965,  5799 => 1963,  5791 => 1958,  5787 => 1957,  5783 => 1956,  5777 => 1955,  5770 => 1953,  5765 => 1951,  5760 => 1950,  5756 => 1949,  5752 => 1947,  5735 => 1945,  5731 => 1944,  5724 => 1940,  5719 => 1938,  5711 => 1933,  5707 => 1932,  5701 => 1929,  5692 => 1923,  5688 => 1922,  5684 => 1921,  5678 => 1918,  5622 => 1865,  5603 => 1849,  5591 => 1840,  5583 => 1835,  5577 => 1832,  5569 => 1827,  5548 => 1809,  5504 => 1767,  5498 => 1765,  5493 => 1763,  5487 => 1762,  5482 => 1761,  5478 => 1760,  5474 => 1759,  5469 => 1757,  5456 => 1747,  5437 => 1731,  5425 => 1722,  5420 => 1720,  5412 => 1715,  5407 => 1713,  5399 => 1708,  5389 => 1701,  5384 => 1699,  5376 => 1694,  5371 => 1692,  5363 => 1687,  5349 => 1676,  5342 => 1672,  5333 => 1668,  5325 => 1663,  5316 => 1659,  5305 => 1651,  5293 => 1642,  5289 => 1641,  5283 => 1640,  5277 => 1639,  5266 => 1633,  5260 => 1630,  5253 => 1626,  5241 => 1617,  5236 => 1615,  5231 => 1613,  5216 => 1601,  5204 => 1592,  5200 => 1591,  5196 => 1590,  5187 => 1584,  5180 => 1580,  5172 => 1575,  5165 => 1571,  5158 => 1567,  5150 => 1562,  5143 => 1558,  5136 => 1554,  5128 => 1549,  5121 => 1545,  5114 => 1541,  5105 => 1535,  5099 => 1532,  5092 => 1528,  5085 => 1524,  5076 => 1518,  5072 => 1517,  5068 => 1516,  5064 => 1515,  5060 => 1514,  5056 => 1513,  5050 => 1510,  5042 => 1505,  5038 => 1504,  5034 => 1503,  5026 => 1500,  5018 => 1495,  5011 => 1491,  5004 => 1487,  4999 => 1484,  4988 => 1481,  4980 => 1480,  4977 => 1479,  4973 => 1478,  4968 => 1476,  4960 => 1471,  4956 => 1470,  4950 => 1467,  4940 => 1460,  4936 => 1459,  4927 => 1453,  4924 => 1452,  4922 => 1451,  4916 => 1448,  4913 => 1447,  4905 => 1442,  4900 => 1440,  4894 => 1438,  4882 => 1429,  4878 => 1428,  4870 => 1423,  4866 => 1422,  4859 => 1418,  4852 => 1414,  4847 => 1412,  4838 => 1406,  4833 => 1404,  4818 => 1394,  4814 => 1392,  4805 => 1388,  4800 => 1386,  4795 => 1385,  4790 => 1383,  4785 => 1382,  4783 => 1381,  4778 => 1378,  4774 => 1377,  4763 => 1368,  4754 => 1365,  4747 => 1364,  4743 => 1363,  4738 => 1361,  4726 => 1354,  4722 => 1352,  4713 => 1348,  4708 => 1346,  4703 => 1345,  4698 => 1343,  4693 => 1342,  4691 => 1341,  4686 => 1338,  4682 => 1337,  4668 => 1328,  4665 => 1327,  4657 => 1324,  4652 => 1322,  4647 => 1321,  4642 => 1319,  4637 => 1318,  4635 => 1317,  4631 => 1315,  4627 => 1314,  4614 => 1306,  4611 => 1305,  4603 => 1302,  4598 => 1300,  4589 => 1299,  4584 => 1297,  4579 => 1296,  4577 => 1295,  4573 => 1293,  4569 => 1292,  4565 => 1290,  4560 => 1288,  4557 => 1287,  4552 => 1285,  4549 => 1284,  4547 => 1283,  4533 => 1272,  4529 => 1271,  4525 => 1270,  4521 => 1269,  4517 => 1268,  4507 => 1260,  4501 => 1259,  4499 => 1258,  4490 => 1251,  4487 => 1250,  4481 => 1249,  4479 => 1248,  4475 => 1246,  4465 => 1241,  4462 => 1240,  4456 => 1239,  4454 => 1238,  4437 => 1232,  4411 => 1231,  4398 => 1229,  4393 => 1226,  4387 => 1223,  4377 => 1222,  4371 => 1219,  4361 => 1218,  4358 => 1217,  4352 => 1214,  4342 => 1213,  4336 => 1210,  4326 => 1209,  4323 => 1208,  4321 => 1207,  4316 => 1205,  4302 => 1200,  4292 => 1199,  4282 => 1198,  4264 => 1197,  4251 => 1195,  4246 => 1192,  4240 => 1189,  4230 => 1188,  4224 => 1185,  4214 => 1184,  4211 => 1183,  4205 => 1180,  4195 => 1179,  4189 => 1176,  4179 => 1175,  4176 => 1174,  4174 => 1173,  4169 => 1171,  4144 => 1167,  4131 => 1165,  4117 => 1160,  4107 => 1159,  4097 => 1158,  4093 => 1157,  4083 => 1156,  4070 => 1154,  4065 => 1151,  4059 => 1148,  4049 => 1147,  4043 => 1144,  4033 => 1143,  4030 => 1142,  4024 => 1139,  4014 => 1138,  4008 => 1135,  3998 => 1134,  3995 => 1133,  3993 => 1132,  3988 => 1130,  3963 => 1126,  3950 => 1124,  3925 => 1120,  3912 => 1118,  3889 => 1114,  3875 => 1113,  3864 => 1111,  3852 => 1108,  3844 => 1103,  3838 => 1100,  3828 => 1097,  3814 => 1092,  3808 => 1089,  3805 => 1088,  3786 => 1086,  3781 => 1085,  3762 => 1083,  3757 => 1082,  3755 => 1081,  3742 => 1079,  3730 => 1078,  3726 => 1076,  3718 => 1074,  3712 => 1072,  3710 => 1071,  3700 => 1070,  3687 => 1067,  3682 => 1066,  3680 => 1065,  3672 => 1064,  3664 => 1059,  3658 => 1055,  3652 => 1052,  3644 => 1051,  3638 => 1048,  3630 => 1047,  3627 => 1046,  3621 => 1043,  3613 => 1042,  3607 => 1039,  3599 => 1038,  3596 => 1037,  3594 => 1036,  3589 => 1034,  3584 => 1031,  3578 => 1028,  3570 => 1027,  3564 => 1024,  3556 => 1023,  3553 => 1022,  3547 => 1019,  3539 => 1018,  3533 => 1015,  3525 => 1014,  3522 => 1013,  3520 => 1012,  3515 => 1010,  3510 => 1007,  3504 => 1004,  3496 => 1003,  3490 => 1000,  3482 => 999,  3479 => 998,  3473 => 995,  3465 => 994,  3459 => 991,  3451 => 990,  3448 => 989,  3446 => 988,  3441 => 986,  3422 => 982,  3411 => 980,  3408 => 979,  3402 => 976,  3394 => 975,  3388 => 972,  3380 => 971,  3377 => 970,  3371 => 967,  3363 => 966,  3357 => 963,  3349 => 962,  3346 => 961,  3344 => 960,  3339 => 958,  3325 => 953,  3315 => 952,  3301 => 951,  3290 => 949,  3283 => 945,  3271 => 940,  3259 => 937,  3247 => 934,  3236 => 931,  3234 => 930,  3219 => 924,  3197 => 923,  3186 => 921,  3177 => 919,  3173 => 917,  3167 => 914,  3159 => 913,  3153 => 910,  3145 => 909,  3142 => 908,  3136 => 905,  3128 => 904,  3122 => 901,  3114 => 900,  3111 => 899,  3109 => 898,  3102 => 896,  3094 => 895,  3081 => 891,  3071 => 890,  3061 => 889,  3047 => 888,  3036 => 886,  3031 => 883,  3025 => 880,  3017 => 879,  3011 => 876,  3003 => 875,  3000 => 874,  2994 => 871,  2986 => 870,  2980 => 867,  2972 => 866,  2969 => 865,  2967 => 864,  2962 => 862,  2941 => 858,  2930 => 856,  2915 => 850,  2905 => 849,  2895 => 848,  2891 => 847,  2877 => 846,  2866 => 844,  2852 => 839,  2842 => 838,  2832 => 837,  2828 => 836,  2814 => 835,  2803 => 833,  2794 => 831,  2790 => 829,  2784 => 826,  2776 => 825,  2770 => 822,  2762 => 821,  2759 => 820,  2753 => 817,  2745 => 816,  2739 => 813,  2731 => 812,  2728 => 811,  2726 => 810,  2719 => 808,  2711 => 807,  2691 => 804,  2680 => 802,  2659 => 798,  2648 => 796,  2642 => 793,  2624 => 790,  2608 => 789,  2592 => 788,  2576 => 787,  2560 => 786,  2544 => 785,  2528 => 784,  2512 => 783,  2502 => 782,  2492 => 781,  2482 => 780,  2472 => 779,  2468 => 778,  2454 => 777,  2443 => 775,  2424 => 771,  2412 => 770,  2401 => 768,  2392 => 766,  2378 => 761,  2368 => 760,  2358 => 759,  2354 => 758,  2340 => 757,  2329 => 755,  2315 => 750,  2305 => 749,  2301 => 748,  2287 => 747,  2276 => 745,  2271 => 742,  2265 => 739,  2257 => 738,  2251 => 735,  2243 => 734,  2240 => 733,  2234 => 730,  2226 => 729,  2220 => 726,  2212 => 725,  2209 => 724,  2207 => 723,  2202 => 721,  2181 => 717,  2170 => 715,  2164 => 712,  2147 => 710,  2136 => 708,  2122 => 703,  2112 => 702,  2108 => 701,  2094 => 700,  2083 => 698,  2074 => 696,  2065 => 695,  2061 => 694,  2057 => 692,  2036 => 690,  2032 => 689,  2026 => 688,  2010 => 685,  2001 => 683,  1995 => 679,  1990 => 677,  1985 => 676,  1980 => 674,  1975 => 673,  1973 => 672,  1963 => 671,  1954 => 669,  1935 => 663,  1925 => 662,  1915 => 661,  1905 => 660,  1896 => 658,  1889 => 656,  1882 => 655,  1878 => 654,  1874 => 653,  1870 => 651,  1868 => 650,  1857 => 647,  1854 => 646,  1846 => 644,  1826 => 643,  1819 => 642,  1816 => 641,  1814 => 640,  1810 => 639,  1799 => 631,  1791 => 630,  1787 => 629,  1779 => 624,  1771 => 623,  1767 => 622,  1759 => 617,  1755 => 616,  1746 => 610,  1738 => 609,  1734 => 608,  1726 => 603,  1718 => 602,  1714 => 601,  1706 => 596,  1702 => 595,  1698 => 594,  1692 => 590,  1686 => 587,  1682 => 586,  1676 => 583,  1672 => 582,  1669 => 581,  1663 => 578,  1659 => 577,  1653 => 574,  1649 => 573,  1646 => 572,  1644 => 571,  1637 => 569,  1629 => 564,  1623 => 563,  1615 => 560,  1602 => 552,  1596 => 548,  1593 => 547,  1587 => 546,  1585 => 545,  1576 => 543,  1567 => 541,  1557 => 538,  1547 => 535,  1537 => 532,  1529 => 530,  1524 => 529,  1522 => 528,  1514 => 523,  1510 => 522,  1504 => 521,  1498 => 520,  1492 => 517,  1484 => 514,  1478 => 511,  1471 => 509,  1466 => 507,  1459 => 502,  1456 => 501,  1450 => 500,  1448 => 499,  1438 => 496,  1427 => 494,  1417 => 493,  1407 => 492,  1397 => 491,  1387 => 490,  1370 => 489,  1365 => 488,  1363 => 487,  1359 => 486,  1350 => 485,  1346 => 484,  1338 => 483,  1333 => 481,  1328 => 479,  1315 => 471,  1309 => 467,  1306 => 466,  1300 => 465,  1298 => 464,  1289 => 462,  1280 => 460,  1268 => 457,  1256 => 454,  1249 => 452,  1243 => 451,  1239 => 450,  1231 => 445,  1227 => 444,  1223 => 443,  1217 => 440,  1211 => 437,  1204 => 433,  1199 => 430,  1193 => 427,  1189 => 426,  1183 => 423,  1179 => 422,  1176 => 421,  1170 => 418,  1166 => 417,  1160 => 414,  1156 => 413,  1153 => 412,  1151 => 411,  1146 => 409,  1141 => 406,  1135 => 403,  1131 => 402,  1125 => 399,  1121 => 398,  1118 => 397,  1112 => 394,  1108 => 393,  1102 => 390,  1098 => 389,  1095 => 388,  1093 => 387,  1088 => 385,  1083 => 382,  1077 => 379,  1073 => 378,  1067 => 375,  1063 => 374,  1060 => 373,  1054 => 370,  1050 => 369,  1044 => 366,  1040 => 365,  1037 => 364,  1035 => 363,  1030 => 361,  1019 => 357,  1012 => 355,  1009 => 354,  1003 => 351,  999 => 350,  993 => 347,  989 => 346,  986 => 345,  980 => 342,  976 => 341,  970 => 338,  966 => 337,  963 => 336,  961 => 335,  956 => 333,  951 => 331,  938 => 327,  928 => 326,  918 => 325,  908 => 324,  898 => 323,  894 => 322,  888 => 321,  881 => 319,  877 => 318,  864 => 314,  854 => 313,  844 => 312,  838 => 311,  829 => 309,  824 => 306,  818 => 303,  814 => 302,  808 => 299,  804 => 298,  801 => 297,  795 => 294,  791 => 293,  785 => 290,  781 => 289,  778 => 288,  776 => 287,  771 => 285,  766 => 282,  749 => 279,  741 => 278,  738 => 277,  734 => 276,  729 => 274,  723 => 270,  718 => 268,  713 => 267,  708 => 265,  703 => 264,  701 => 263,  695 => 262,  688 => 260,  683 => 258,  675 => 255,  669 => 254,  665 => 253,  660 => 252,  656 => 251,  652 => 249,  649 => 248,  646 => 247,  644 => 246,  640 => 245,  633 => 242,  625 => 240,  621 => 238,  613 => 236,  607 => 234,  605 => 233,  597 => 232,  594 => 231,  590 => 230,  586 => 229,  576 => 221,  571 => 219,  566 => 218,  561 => 216,  556 => 215,  554 => 214,  548 => 211,  545 => 210,  538 => 206,  534 => 205,  527 => 203,  524 => 202,  522 => 201,  514 => 196,  507 => 194,  502 => 192,  494 => 189,  484 => 181,  480 => 179,  476 => 177,  473 => 176,  469 => 174,  465 => 172,  463 => 171,  458 => 169,  451 => 164,  447 => 162,  443 => 160,  440 => 159,  436 => 157,  432 => 155,  430 => 154,  425 => 152,  418 => 147,  414 => 145,  410 => 143,  407 => 142,  403 => 140,  399 => 138,  397 => 137,  392 => 135,  385 => 131,  375 => 124,  369 => 121,  363 => 120,  350 => 116,  340 => 115,  332 => 110,  317 => 104,  307 => 103,  297 => 102,  291 => 99,  284 => 95,  278 => 91,  273 => 89,  270 => 88,  265 => 86,  262 => 85,  260 => 84,  256 => 82,  251 => 80,  248 => 79,  243 => 77,  240 => 76,  238 => 75,  232 => 72,  226 => 68,  211 => 66,  203 => 65,  200 => 64,  196 => 63,  191 => 61,  186 => 58,  180 => 56,  178 => 55,  172 => 54,  167 => 52,  159 => 47,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  138 => 41,  132 => 39,  129 => 38,  121 => 34,  118 => 33,  110 => 29,  108 => 28,  99 => 24,  91 => 22,  85 => 20,  79 => 18,  73 => 16,  70 => 15,  68 => 14,  60 => 8,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocdbanner/ocdbanner.twig", "");
    }
}
