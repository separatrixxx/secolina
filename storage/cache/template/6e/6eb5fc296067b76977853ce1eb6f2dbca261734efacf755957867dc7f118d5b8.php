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

/* setting/setting.twig */
class __TwigTemplate_0e7c1e502a9e31d6fb756a2728de40f6c40ec9251e395ed305575dcd7931ea63 extends \Twig\Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"#tab-custom-js\" data-toggle=\"tab\">Свой код JS</a></li>
\t\t\t\t<li><a href=\"#tab-custom-css\" data-toggle=\"tab\">Свой код CSS</a></li>
\t\t\t
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_server"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"#tab-social-media\" data-toggle=\"tab\">Соцсети</a></li>
\t\t\t
          </ul>
          <div class=\"tab-content\">

\t\t\t\t<div class=\"tab-pane\" id=\"tab-custom-js\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\"><span data-toggle=\"tooltip\" title=\"Обратите внимание, что код JavaScript должен быть обернут в тег script\">Свой JavaScript</span></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"config_custom_js\" class=\"form-control\" rows=\"15\" placeholder=\"Вставьте здесь свой код Javascript\">";
        // line 54
        echo ($context["config_custom_js"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-custom-css\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">Свой CSS</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"config_custom_css\" class=\"form-control\" rows=\"15\" placeholder=\"Вставьте здесь свой код CSS\">";
        // line 62
        echo ($context["config_custom_css"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 69
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 71
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 72
        if (($context["error_meta_title"] ?? null)) {
            // line 73
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 74
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 77
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 79
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 83
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 85
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 89
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 93
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 93) == ($context["config_theme"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 94);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 94);
                echo "</option>                    
                    ";
            } else {
                // line 95
                echo "                    
                    <option value=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 96);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 96);
                echo "</option>                    
                    ";
            }
            // line 98
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 104
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 108
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 108) == ($context["config_layout_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 109);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 109);
                echo "</option>                    
                    ";
            } else {
                // line 110
                echo "                    
                    <option value=\"";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 111);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 111);
                echo "</option>                    
                    ";
            }
            // line 113
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 120
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 122
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 123
        if (($context["error_name"] ?? null)) {
            // line 124
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 125
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 128
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 130
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 131
        if (($context["error_owner"] ?? null)) {
            // line 132
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 133
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 136
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 138
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 139
        if (($context["error_address"] ?? null)) {
            // line 140
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 141
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 144
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 146
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 150
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 152
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 153
        if (($context["error_email"] ?? null)) {
            // line 154
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 155
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 158
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 160
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 161
        if (($context["error_telephone"] ?? null)) {
            // line 162
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 163
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 166
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 168
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 172
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 173
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 174
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 178
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 180
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 184
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 186
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 189
        if (($context["locations"] ?? null)) {
            // line 190
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 191
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 193
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 194
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 194), ($context["config_location"] ?? null))) {
                    // line 195
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 195);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 196);
                    echo "
                      ";
                } else {
                    // line 198
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 198);
                    echo "\" />
                      ";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 199);
                    echo "
                      ";
                }
                // line 200
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo " </div>
              </div>
              ";
        }
        // line 204
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 207
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 211
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 211) == ($context["config_country_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 212);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 212);
                echo "</option>                    
                    ";
            } else {
                // line 213
                echo "                    
                    <option value=\"";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 214);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 214);
                echo "</option>                    
                    ";
            }
            // line 216
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 221
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 228
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 232
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 232) == ($context["config_timezone"] ?? null))) {
                // line 233
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 233);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 233);
                echo "</option>
                      ";
            } else {
                // line 235
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 235);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 235);
                echo "</option>
                      ";
            }
            // line 237
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 242
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 246
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 246) == ($context["config_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 247);
                echo "</option>                    
                    ";
            } else {
                // line 248
                echo "                    
                    <option value=\"";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 249);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 249);
                echo "</option>                    
                    ";
            }
            // line 251
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 256
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 260
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 260) == ($context["config_admin_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 261
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 261);
                echo "</option>                    
                    ";
            } else {
                // line 262
                echo "                    
                    <option value=\"";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 263);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 263);
                echo "</option>                    
                    ";
            }
            // line 265
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 270
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 274
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 274) == ($context["config_currency"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 275
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 275);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 275);
                echo "</option>                    
                    ";
            } else {
                // line 276
                echo "                    
                    <option value=\"";
                // line 277
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 277);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 277);
                echo "</option>                    
                    ";
            }
            // line 279
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 284
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 286
        if (($context["config_currency_auto"] ?? null)) {
            // line 287
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 288
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 290
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 291
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 292
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 293
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 294
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 295
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 297
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 298
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 299
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 303
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 307
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 307) == ($context["config_length_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 308);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 308);
                echo "</option>                    
                    ";
            } else {
                // line 309
                echo "                    
                    <option value=\"";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 310);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 310);
                echo "</option>                    
                    ";
            }
            // line 312
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 317
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 321
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 321) == ($context["config_weight_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 322
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 322);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 322);
                echo "</option>                    
                    ";
            } else {
                // line 323
                echo "                    
                    <option value=\"";
                // line 324
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 324);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 324);
                echo "</option>                    
                    ";
            }
            // line 326
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 333
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 335
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 337
        if (($context["config_product_count"] ?? null)) {
            // line 338
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 339
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 341
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 342
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 343
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 344
        if ( !($context["config_product_count"] ?? null)) {
            // line 345
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 346
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 348
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 349
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 350
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 354
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 356
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 357
        if (($context["error_limit_admin"] ?? null)) {
            // line 358
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 359
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 363
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 365
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 367
        if (($context["config_review_status"] ?? null)) {
            // line 368
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 369
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 371
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 372
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 373
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 374
        if ( !($context["config_review_status"] ?? null)) {
            // line 375
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 376
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 378
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 379
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 380
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 384
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 386
        if (($context["config_review_guest"] ?? null)) {
            // line 387
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 388
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 390
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 391
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 392
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 393
        if ( !($context["config_review_guest"] ?? null)) {
            // line 394
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 395
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 397
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 398
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 399
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 404
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 406
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 408
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 409
        if (($context["error_voucher_min"] ?? null)) {
            // line 410
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 411
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 414
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 416
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 417
        if (($context["error_voucher_max"] ?? null)) {
            // line 418
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 419
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 423
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 425
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 427
        if (($context["config_tax"] ?? null)) {
            // line 428
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 429
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 431
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 432
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 433
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 434
        if ( !($context["config_tax"] ?? null)) {
            // line 435
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 436
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 438
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 439
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 440
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 444
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 447
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 448
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 449
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 450
            echo "                      
                      <option value=\"shipping\">";
            // line 451
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 453
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 454
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 455
            echo "                      
                      <option value=\"payment\">";
            // line 456
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 457
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 462
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 465
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 466
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 467
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 468
            echo "                      
                      <option value=\"shipping\">";
            // line 469
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 471
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 472
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 473
            echo "                      
                      <option value=\"payment\">";
            // line 474
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 475
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 481
        echo ($context["text_account"] ?? null);
        echo "</legend>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">Личный кабинет</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 486
        if (($context["config_account"] ?? null)) {
            // line 487
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_account\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t";
            // line 488
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 490
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_account\" value=\"1\" />
\t\t\t\t\t\t";
            // line 491
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 492
        echo " </label>
\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 493
        if ( !($context["config_account"] ?? null)) {
            // line 494
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_account\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t";
            // line 495
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 497
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_account\" value=\"0\" />
\t\t\t\t\t\t";
            // line 498
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 499
        echo " </label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">Закладки</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 505
        if (($context["config_wishlist"] ?? null)) {
            // line 506
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_wishlist\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t";
            // line 507
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 509
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_wishlist\" value=\"1\" />
\t\t\t\t\t\t";
            // line 510
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 511
        echo " </label>
\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 512
        if ( !($context["config_wishlist"] ?? null)) {
            // line 513
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_wishlist\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t";
            // line 514
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 516
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_wishlist\" value=\"0\" />
\t\t\t\t\t\t";
            // line 517
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 518
        echo " </label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">Сравнение</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 524
        if (($context["config_compare"] ?? null)) {
            // line 525
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_compare\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t";
            // line 526
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 528
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_compare\" value=\"1\" />
\t\t\t\t\t\t";
            // line 529
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 530
        echo " </label>
\t\t\t\t\t\t<label class=\"radio-inline\"> ";
        // line 531
        if ( !($context["config_compare"] ?? null)) {
            // line 532
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_compare\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t";
            // line 533
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 535
            echo "\t\t\t\t\t\t<input type=\"radio\" name=\"config_compare\" value=\"0\" />
\t\t\t\t\t\t";
            // line 536
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 537
        echo " </label>
\t\t\t\t\t</div>
                </div>
\t\t\t
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 542
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 544
        if (($context["config_customer_online"] ?? null)) {
            // line 545
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 546
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 548
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 549
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 550
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 551
        if ( !($context["config_customer_online"] ?? null)) {
            // line 552
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 553
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 555
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 556
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 557
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 561
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 563
        if (($context["config_customer_activity"] ?? null)) {
            // line 564
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 565
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 567
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 568
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 569
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 570
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 571
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 572
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 574
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 575
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 576
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 580
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 582
        if (($context["config_customer_search"] ?? null)) {
            // line 583
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 584
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 586
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 587
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 588
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 589
        if ( !($context["config_customer_search"] ?? null)) {
            // line 590
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 591
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 593
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 594
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 595
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 599
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 602
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 603
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 603) == ($context["config_customer_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 604
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 604);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 604);
                echo "</option>                      
                      ";
            } else {
                // line 605
                echo "                      
                      <option value=\"";
                // line 606
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 606);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 606);
                echo "</option>                      
                      ";
            }
            // line 608
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 613
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 614
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 615
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 616
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 616), ($context["config_customer_group_display"] ?? null))) {
                // line 617
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 617);
                echo "\" checked=\"checked\" />
                        ";
                // line 618
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 618);
                echo "
                        ";
            } else {
                // line 620
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 620);
                echo "\" />
                        ";
                // line 621
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 621);
                echo "
                        ";
            }
            // line 622
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 625
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 626
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 627
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 630
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 632
        if (($context["config_customer_price"] ?? null)) {
            // line 633
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 634
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 636
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 637
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 638
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 639
        if ( !($context["config_customer_price"] ?? null)) {
            // line 640
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 641
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 643
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 644
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 645
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 649
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 651
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 652
        if (($context["error_login_attempts"] ?? null)) {
            // line 653
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 654
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 657
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 660
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 661
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 662
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 662) == ($context["config_account_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 663
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 663);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 663);
                echo "</option>                      
                      ";
            } else {
                // line 664
                echo "                      
                      <option value=\"";
                // line 665
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 665);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 665);
                echo "</option>                      
                      ";
            }
            // line 667
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 673
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 675
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 677
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 681
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 683
        if (($context["config_cart_weight"] ?? null)) {
            // line 684
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 685
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 687
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 688
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 689
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 690
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 691
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 692
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 694
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 695
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 696
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 700
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 702
        if (($context["config_checkout_guest"] ?? null)) {
            // line 703
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 704
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 706
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 707
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 708
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 709
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 710
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 711
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 713
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 714
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 715
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 719
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 722
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 723
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 724
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 724) == ($context["config_checkout_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 725
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 725);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 725);
                echo "</option>                      
                      ";
            } else {
                // line 726
                echo "                      
                      <option value=\"";
                // line 727
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 727);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 727);
                echo "</option>                      
                      ";
            }
            // line 729
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 734
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 737
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 738
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 738) == ($context["config_order_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 739
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 739);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 739);
                echo "</option>                      
                      ";
            } else {
                // line 740
                echo "                      
                      <option value=\"";
                // line 741
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 741);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 741);
                echo "</option>                      
                      ";
            }
            // line 743
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 748
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 751
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 752
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 752), ($context["config_processing_status"] ?? null))) {
                // line 753
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 753);
                echo "\" checked=\"checked\" />
                          ";
                // line 754
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 754);
                echo "
                          ";
            } else {
                // line 756
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 756);
                echo "\" />
                          ";
                // line 757
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 757);
                echo "
                          ";
            }
            // line 758
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        echo " </div>
                    ";
        // line 761
        if (($context["error_processing_status"] ?? null)) {
            // line 762
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 763
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 766
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 769
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 770
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 770), ($context["config_complete_status"] ?? null))) {
                // line 771
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 771);
                echo "\" checked=\"checked\" />
                          ";
                // line 772
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 772);
                echo "
                          ";
            } else {
                // line 774
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 774);
                echo "\" />
                          ";
                // line 775
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 775);
                echo "
                          ";
            }
            // line 776
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        echo " </div>
                    ";
        // line 779
        if (($context["error_complete_status"] ?? null)) {
            // line 780
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 781
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 784
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 788
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 788) == ($context["config_fraud_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 789
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 789);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 789);
                echo "</option>                      
                      ";
            } else {
                // line 790
                echo "                      
                      <option value=\"";
                // line 791
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 791);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 791);
                echo "</option>                      
                      ";
            }
            // line 793
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 798
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 801
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 802
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 803
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 803) == ($context["config_api_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 804
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 804);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 804);
                echo "</option>                      
                      ";
            } else {
                // line 805
                echo "                      
                      <option value=\"";
                // line 806
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 806);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 806);
                echo "</option>                      
                      ";
            }
            // line 808
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 814
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 816
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 818
        if (($context["config_stock_display"] ?? null)) {
            // line 819
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 820
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 822
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 823
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 824
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 825
        if ( !($context["config_stock_display"] ?? null)) {
            // line 826
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 827
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 829
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 830
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 831
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 835
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 837
        if (($context["config_stock_warning"] ?? null)) {
            // line 838
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 839
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 841
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 842
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 843
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 844
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 845
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 846
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 848
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 849
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 850
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 854
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 856
        if (($context["config_stock_checkout"] ?? null)) {
            // line 857
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 858
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 860
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 861
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 862
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 863
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 864
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 865
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 867
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 868
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 869
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 874
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 876
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 879
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 880
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 880) == ($context["config_affiliate_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 881
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 881);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 881);
                echo "</option>                      
                      ";
            } else {
                // line 882
                echo "                      
                      <option value=\"";
                // line 883
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 883);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 883);
                echo "</option>                      
                      ";
            }
            // line 885
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 890
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 892
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 893
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 894
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 896
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 897
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 898
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 899
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 900
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 901
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 903
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 904
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 905
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 909
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 911
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 912
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 913
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 915
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 916
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 917
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 918
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 919
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 920
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 922
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 923
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 924
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 928
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 930
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 934
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 937
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 938
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 939
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 939) == ($context["config_affiliate_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 940
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 940);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 940);
                echo "</option>                      
                      ";
            } else {
                // line 941
                echo "                      
                      <option value=\"";
                // line 942
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 942);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 942);
                echo "</option>                      
                      ";
            }
            // line 944
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 950
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 952
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 955
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 956
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 957
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 957) == ($context["config_return_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 958
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 958);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 958);
                echo "</option>                      
                      ";
            } else {
                // line 959
                echo "                      
                      <option value=\"";
                // line 960
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 960);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 960);
                echo "</option>                      
                      ";
            }
            // line 962
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 967
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 970
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 971
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 971) == ($context["config_return_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 972
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 972);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 972);
                echo "</option>                      
                      ";
            } else {
                // line 973
                echo "                      
                      <option value=\"";
                // line 974
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 974);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 974);
                echo "</option>                      
                      ";
            }
            // line 976
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 982
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 984
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 987
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 988
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 989
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 989) == ($context["config_captcha"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 990
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 990);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 990);
                echo "</option>                      
                      ";
            } else {
                // line 991
                echo "                      
                      <option value=\"";
                // line 992
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 992);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 992);
                echo "</option>                      
                      ";
            }
            // line 994
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 999
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1001
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1002
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1003
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1003), ($context["config_captcha_page"] ?? null))) {
                // line 1004
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1004);
                echo "\" checked=\"checked\" />
                          ";
                // line 1005
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1005);
                echo "
                          ";
            } else {
                // line 1007
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1007);
                echo "\" />
                          ";
                // line 1008
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1008);
                echo "
                          ";
            }
            // line 1009
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1011
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1018
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1019
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1020
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1024
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1025
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1026
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>

\t\t\t<div class=\"tab-pane\" id=\"tab-social-media\">
\t\t\t  <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">Включить соцсети</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1035
        if (($context["config_social"] ?? null)) {
            // line 1036
            echo "                      <input type=\"radio\" name=\"config_social\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1037
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1039
            echo "                      <input type=\"radio\" name=\"config_social\" value=\"1\" />
                      ";
            // line 1040
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1041
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1042
        if ( !($context["config_social"] ?? null)) {
            // line 1043
            echo "                      <input type=\"radio\" name=\"config_social\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1044
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1046
            echo "                      <input type=\"radio\" name=\"config_social\" value=\"0\" />
                      ";
            // line 1047
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1048
        echo " </label>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"facebook\">Ссылка на Facebook</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input class=\"form-control\" id=\"facebook\" type=\"text\" name=\"config_facebook\" placeholder=\"Facebook\" value=\"";
        // line 1054
        echo ($context["config_facebook"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"twitter\">Ссылка на Twitter</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input class=\"form-control\" id=\"twitter\" type=\"text\" name=\"config_twitter\" placeholder=\"Twitter\" value=\"";
        // line 1060
        echo ($context["config_twitter"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"instagram\">Ссылка на Instagram</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input class=\"form-control\" id=\"instagram\" type=\"text\" name=\"config_instagram\" placeholder=\"Instagram\" value=\"";
        // line 1066
        echo ($context["config_instagram"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"vk\">Ссылка на VK</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input class=\"form-control\" id=\"vk\" type=\"text\" name=\"config_vk\" placeholder=\"Вконтакте\" value=\"";
        // line 1072
        echo ($context["config_vk"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"youtube\">Ссылка на Youtube</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input class=\"form-control\" id=\"youtube\" type=\"text\" name=\"config_youtube\" placeholder=\"Youtube\" value=\"";
        // line 1078
        echo ($context["config_youtube"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"ok\">Ссылка на Одноклассники</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input class=\"form-control\" id=\"ok\" type=\"text\" name=\"config_ok\" placeholder=\"Одноклассники\" value=\"";
        // line 1084
        echo ($context["config_ok"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"telegram\">Ссылка на Телеграм</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input class=\"form-control\" id=\"telegram\" type=\"text\" name=\"config_telegram\" placeholder=\"Телеграм\" value=\"";
        // line 1090
        echo ($context["config_telegram"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1097
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1099
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 1102
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1103
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 1104
            echo "                      
                      <option value=\"mail\">";
            // line 1105
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 1107
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1108
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 1109
            echo "                      
                      <option value=\"smtp\">";
            // line 1110
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 1111
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1116
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1118
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1122
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1124
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1128
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1130
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1134
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1136
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1140
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1142
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1146
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1148
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1153
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1155
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1158
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1159
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1159), ($context["config_mail_alert"] ?? null))) {
                // line 1160
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1160);
                echo "\" checked=\"checked\" />
                          ";
                // line 1161
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1161);
                echo "
                          ";
            } else {
                // line 1163
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1163);
                echo "\" />
                          ";
                // line 1164
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1164);
                echo "
                          ";
            }
            // line 1165
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1167
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1171
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1173
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1180
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1182
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1184
        if (($context["config_maintenance"] ?? null)) {
            // line 1185
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1186
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1188
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1189
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1190
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1191
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1192
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1193
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1195
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1196
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1197
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1201
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1203
        if (($context["config_seo_url"] ?? null)) {
            // line 1204
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1205
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1207
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1208
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1209
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1210
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1211
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1212
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1214
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1215
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1216
        echo " </label>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"config_seo_url_type\">";
        // line 1221
        echo ($context["entry_seo_url_type"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                  <select id=\"config_seo_url_type\" class=\"form-control\" name=\"config_seo_url_type\">
                    ";
        // line 1224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seo_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["seo_type"]) {
            // line 1225
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1225) == ($context["config_seo_url_type"] ?? null))) {
                // line 1226
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1226);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "name", [], "any", false, false, false, 1226);
                echo "</option>
                      ";
            } else {
                // line 1228
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1228);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "name", [], "any", false, false, false, 1228);
                echo "</option>
                      ";
            }
            // line 1230
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seo_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1231
        echo "                  </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1235
        echo ($context["entry_seo_url_include_path_help"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url_include_path"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                  ";
        // line 1237
        if (($context["config_seo_url_include_path"] ?? null)) {
            // line 1238
            echo "                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\"/>
                    ";
            // line 1240
            echo ($context["text_yes"] ?? null);
            echo "
                    </label>
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\"/>
                    ";
            // line 1244
            echo ($context["text_no"] ?? null);
            echo "
                    </label>
                  ";
        } else {
            // line 1247
            echo "                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\"/>
                    ";
            // line 1249
            echo ($context["text_yes"] ?? null);
            echo "
                    </label>
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\"/>
                    ";
            // line 1253
            echo ($context["text_no"] ?? null);
            echo "
                    </label>
                  ";
        }
        // line 1256
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"config_seo_url_postfix\"><span data-toggle=\"tooltip\" title=\"";
        // line 1259
        echo ($context["entry_seo_url_postfix_help"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url_postfix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_seo_url_postfix\" value=\"";
        // line 1261
        echo ($context["config_seo_url_postfix"] ?? null);
        echo "\" id=\"config_seo_url_postfix\" class=\"form-control\"/>
                  </div>
                </div>
            
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1266
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1268
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1272
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1274
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1279
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1281
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1283
        if (($context["config_secure"] ?? null)) {
            // line 1284
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1285
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1287
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1288
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1289
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1290
        if ( !($context["config_secure"] ?? null)) {
            // line 1291
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1292
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1294
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1295
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1296
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1300
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1302
        if (($context["config_password"] ?? null)) {
            // line 1303
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1304
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1306
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1307
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1308
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1309
        if ( !($context["config_password"] ?? null)) {
            // line 1310
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1311
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1313
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1314
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1315
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1319
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1321
        if (($context["config_shared"] ?? null)) {
            // line 1322
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1323
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1325
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1326
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1327
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1328
        if ( !($context["config_shared"] ?? null)) {
            // line 1329
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1330
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1332
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1333
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1334
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1338
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1340
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1341
        if (($context["error_encryption"] ?? null)) {
            // line 1342
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1343
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1347
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1349
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1351
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1355
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1357
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1361
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1363
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>

            <fieldset>
\t\t\t\t<legend>";
        // line 1368
        echo ($context["text_counters"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-counters\"><span data-toggle=\"tooltip\" title=\"";
        // line 1370
        echo ($context["help_entry_counters"] ?? null);
        echo "\">";
        echo ($context["entry_counters"] ?? null);
        echo "</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea name=\"config_counters\" rows=\"5\" placeholder=\"";
        // line 1372
        echo ($context["placeholder_entry_counters"] ?? null);
        echo "\" id=\"input-counters\" class=\"form-control\">";
        echo ($context["config_counters"] ?? null);
        echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t  
              </fieldset>
\t\t\t
              </fieldset>
              <fieldset>
                <legend>";
        // line 1379
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1381
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1383
        if (($context["config_error_display"] ?? null)) {
            // line 1384
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1385
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1387
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1388
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1389
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1390
        if ( !($context["config_error_display"] ?? null)) {
            // line 1391
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1392
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1394
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1395
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1396
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1400
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1402
        if (($context["config_error_log"] ?? null)) {
            // line 1403
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1404
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1406
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1407
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1408
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1409
        if ( !($context["config_error_log"] ?? null)) {
            // line 1410
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1411
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1413
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1414
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1415
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1419
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1421
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1422
        if (($context["error_log"] ?? null)) {
            // line 1423
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1424
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1436
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1458
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1467
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1473
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1480
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1495
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4025 => 1495,  4007 => 1480,  3997 => 1473,  3988 => 1467,  3976 => 1458,  3951 => 1436,  3937 => 1424,  3931 => 1423,  3929 => 1422,  3923 => 1421,  3918 => 1419,  3912 => 1415,  3907 => 1414,  3904 => 1413,  3899 => 1411,  3896 => 1410,  3894 => 1409,  3891 => 1408,  3886 => 1407,  3883 => 1406,  3878 => 1404,  3875 => 1403,  3873 => 1402,  3868 => 1400,  3862 => 1396,  3857 => 1395,  3854 => 1394,  3849 => 1392,  3846 => 1391,  3844 => 1390,  3841 => 1389,  3836 => 1388,  3833 => 1387,  3828 => 1385,  3825 => 1384,  3823 => 1383,  3818 => 1381,  3813 => 1379,  3801 => 1372,  3794 => 1370,  3789 => 1368,  3779 => 1363,  3772 => 1361,  3763 => 1357,  3756 => 1355,  3747 => 1351,  3740 => 1349,  3735 => 1347,  3729 => 1343,  3723 => 1342,  3721 => 1341,  3715 => 1340,  3708 => 1338,  3702 => 1334,  3697 => 1333,  3694 => 1332,  3689 => 1330,  3686 => 1329,  3684 => 1328,  3681 => 1327,  3676 => 1326,  3673 => 1325,  3668 => 1323,  3665 => 1322,  3663 => 1321,  3656 => 1319,  3650 => 1315,  3645 => 1314,  3642 => 1313,  3637 => 1311,  3634 => 1310,  3632 => 1309,  3629 => 1308,  3624 => 1307,  3621 => 1306,  3616 => 1304,  3613 => 1303,  3611 => 1302,  3604 => 1300,  3598 => 1296,  3593 => 1295,  3590 => 1294,  3585 => 1292,  3582 => 1291,  3580 => 1290,  3577 => 1289,  3572 => 1288,  3569 => 1287,  3564 => 1285,  3561 => 1284,  3559 => 1283,  3552 => 1281,  3547 => 1279,  3537 => 1274,  3530 => 1272,  3521 => 1268,  3514 => 1266,  3506 => 1261,  3499 => 1259,  3494 => 1256,  3488 => 1253,  3481 => 1249,  3477 => 1247,  3471 => 1244,  3464 => 1240,  3460 => 1238,  3458 => 1237,  3451 => 1235,  3445 => 1231,  3439 => 1230,  3431 => 1228,  3423 => 1226,  3420 => 1225,  3416 => 1224,  3410 => 1221,  3403 => 1216,  3398 => 1215,  3395 => 1214,  3390 => 1212,  3387 => 1211,  3385 => 1210,  3382 => 1209,  3377 => 1208,  3374 => 1207,  3369 => 1205,  3366 => 1204,  3364 => 1203,  3357 => 1201,  3351 => 1197,  3346 => 1196,  3343 => 1195,  3338 => 1193,  3335 => 1192,  3333 => 1191,  3330 => 1190,  3325 => 1189,  3322 => 1188,  3317 => 1186,  3314 => 1185,  3312 => 1184,  3305 => 1182,  3300 => 1180,  3288 => 1173,  3281 => 1171,  3275 => 1167,  3267 => 1165,  3262 => 1164,  3257 => 1163,  3252 => 1161,  3247 => 1160,  3245 => 1159,  3242 => 1158,  3238 => 1157,  3231 => 1155,  3226 => 1153,  3216 => 1148,  3211 => 1146,  3202 => 1142,  3197 => 1140,  3188 => 1136,  3181 => 1134,  3172 => 1130,  3167 => 1128,  3158 => 1124,  3151 => 1122,  3142 => 1118,  3135 => 1116,  3128 => 1111,  3123 => 1110,  3120 => 1109,  3115 => 1108,  3110 => 1107,  3105 => 1105,  3102 => 1104,  3097 => 1103,  3093 => 1102,  3085 => 1099,  3080 => 1097,  3070 => 1090,  3061 => 1084,  3052 => 1078,  3043 => 1072,  3034 => 1066,  3025 => 1060,  3016 => 1054,  3008 => 1048,  3003 => 1047,  3000 => 1046,  2995 => 1044,  2992 => 1043,  2990 => 1042,  2987 => 1041,  2982 => 1040,  2979 => 1039,  2974 => 1037,  2971 => 1036,  2969 => 1035,  2957 => 1026,  2951 => 1025,  2945 => 1024,  2938 => 1020,  2932 => 1019,  2928 => 1018,  2919 => 1011,  2911 => 1009,  2906 => 1008,  2901 => 1007,  2896 => 1005,  2891 => 1004,  2889 => 1003,  2886 => 1002,  2882 => 1001,  2877 => 999,  2865 => 994,  2858 => 992,  2855 => 991,  2848 => 990,  2843 => 989,  2839 => 988,  2835 => 987,  2827 => 984,  2822 => 982,  2809 => 976,  2802 => 974,  2799 => 973,  2792 => 972,  2787 => 971,  2783 => 970,  2775 => 967,  2763 => 962,  2756 => 960,  2753 => 959,  2746 => 958,  2741 => 957,  2737 => 956,  2733 => 955,  2725 => 952,  2720 => 950,  2707 => 944,  2700 => 942,  2697 => 941,  2690 => 940,  2685 => 939,  2681 => 938,  2677 => 937,  2669 => 934,  2660 => 930,  2653 => 928,  2647 => 924,  2642 => 923,  2639 => 922,  2634 => 920,  2631 => 919,  2629 => 918,  2626 => 917,  2621 => 916,  2618 => 915,  2613 => 913,  2610 => 912,  2608 => 911,  2601 => 909,  2595 => 905,  2590 => 904,  2587 => 903,  2582 => 901,  2579 => 900,  2577 => 899,  2574 => 898,  2569 => 897,  2566 => 896,  2561 => 894,  2558 => 893,  2556 => 892,  2549 => 890,  2537 => 885,  2530 => 883,  2527 => 882,  2520 => 881,  2515 => 880,  2511 => 879,  2505 => 876,  2500 => 874,  2493 => 869,  2488 => 868,  2485 => 867,  2480 => 865,  2477 => 864,  2475 => 863,  2472 => 862,  2467 => 861,  2464 => 860,  2459 => 858,  2456 => 857,  2454 => 856,  2447 => 854,  2441 => 850,  2436 => 849,  2433 => 848,  2428 => 846,  2425 => 845,  2423 => 844,  2420 => 843,  2415 => 842,  2412 => 841,  2407 => 839,  2404 => 838,  2402 => 837,  2395 => 835,  2389 => 831,  2384 => 830,  2381 => 829,  2376 => 827,  2373 => 826,  2371 => 825,  2368 => 824,  2363 => 823,  2360 => 822,  2355 => 820,  2352 => 819,  2350 => 818,  2343 => 816,  2338 => 814,  2325 => 808,  2318 => 806,  2315 => 805,  2308 => 804,  2303 => 803,  2299 => 802,  2295 => 801,  2287 => 798,  2275 => 793,  2268 => 791,  2265 => 790,  2258 => 789,  2253 => 788,  2249 => 787,  2241 => 784,  2236 => 781,  2230 => 780,  2228 => 779,  2225 => 778,  2217 => 776,  2212 => 775,  2207 => 774,  2202 => 772,  2197 => 771,  2195 => 770,  2192 => 769,  2188 => 768,  2181 => 766,  2176 => 763,  2170 => 762,  2168 => 761,  2165 => 760,  2157 => 758,  2152 => 757,  2147 => 756,  2142 => 754,  2137 => 753,  2135 => 752,  2132 => 751,  2128 => 750,  2121 => 748,  2109 => 743,  2102 => 741,  2099 => 740,  2092 => 739,  2087 => 738,  2083 => 737,  2075 => 734,  2063 => 729,  2056 => 727,  2053 => 726,  2046 => 725,  2041 => 724,  2037 => 723,  2033 => 722,  2025 => 719,  2019 => 715,  2014 => 714,  2011 => 713,  2006 => 711,  2003 => 710,  2001 => 709,  1998 => 708,  1993 => 707,  1990 => 706,  1985 => 704,  1982 => 703,  1980 => 702,  1973 => 700,  1967 => 696,  1962 => 695,  1959 => 694,  1954 => 692,  1951 => 691,  1949 => 690,  1946 => 689,  1941 => 688,  1938 => 687,  1933 => 685,  1930 => 684,  1928 => 683,  1921 => 681,  1912 => 677,  1905 => 675,  1900 => 673,  1887 => 667,  1880 => 665,  1877 => 664,  1870 => 663,  1865 => 662,  1861 => 661,  1857 => 660,  1849 => 657,  1844 => 654,  1838 => 653,  1836 => 652,  1830 => 651,  1823 => 649,  1817 => 645,  1812 => 644,  1809 => 643,  1804 => 641,  1801 => 640,  1799 => 639,  1796 => 638,  1791 => 637,  1788 => 636,  1783 => 634,  1780 => 633,  1778 => 632,  1771 => 630,  1766 => 627,  1760 => 626,  1757 => 625,  1749 => 622,  1744 => 621,  1739 => 620,  1734 => 618,  1729 => 617,  1727 => 616,  1724 => 615,  1720 => 614,  1714 => 613,  1702 => 608,  1695 => 606,  1692 => 605,  1685 => 604,  1680 => 603,  1676 => 602,  1668 => 599,  1662 => 595,  1657 => 594,  1654 => 593,  1649 => 591,  1646 => 590,  1644 => 589,  1641 => 588,  1636 => 587,  1633 => 586,  1628 => 584,  1625 => 583,  1623 => 582,  1618 => 580,  1612 => 576,  1607 => 575,  1604 => 574,  1599 => 572,  1596 => 571,  1594 => 570,  1591 => 569,  1586 => 568,  1583 => 567,  1578 => 565,  1575 => 564,  1573 => 563,  1566 => 561,  1560 => 557,  1555 => 556,  1552 => 555,  1547 => 553,  1544 => 552,  1542 => 551,  1539 => 550,  1534 => 549,  1531 => 548,  1526 => 546,  1523 => 545,  1521 => 544,  1514 => 542,  1507 => 537,  1502 => 536,  1499 => 535,  1494 => 533,  1491 => 532,  1489 => 531,  1486 => 530,  1481 => 529,  1478 => 528,  1473 => 526,  1470 => 525,  1468 => 524,  1460 => 518,  1455 => 517,  1452 => 516,  1447 => 514,  1444 => 513,  1442 => 512,  1439 => 511,  1434 => 510,  1431 => 509,  1426 => 507,  1423 => 506,  1421 => 505,  1413 => 499,  1408 => 498,  1405 => 497,  1400 => 495,  1397 => 494,  1395 => 493,  1392 => 492,  1387 => 491,  1384 => 490,  1379 => 488,  1376 => 487,  1374 => 486,  1366 => 481,  1358 => 475,  1353 => 474,  1350 => 473,  1345 => 472,  1340 => 471,  1335 => 469,  1332 => 468,  1327 => 467,  1323 => 466,  1319 => 465,  1311 => 462,  1304 => 457,  1299 => 456,  1296 => 455,  1291 => 454,  1286 => 453,  1281 => 451,  1278 => 450,  1273 => 449,  1269 => 448,  1265 => 447,  1257 => 444,  1251 => 440,  1246 => 439,  1243 => 438,  1238 => 436,  1235 => 435,  1233 => 434,  1230 => 433,  1225 => 432,  1222 => 431,  1217 => 429,  1214 => 428,  1212 => 427,  1207 => 425,  1202 => 423,  1196 => 419,  1190 => 418,  1188 => 417,  1182 => 416,  1175 => 414,  1170 => 411,  1164 => 410,  1162 => 409,  1156 => 408,  1149 => 406,  1144 => 404,  1137 => 399,  1132 => 398,  1129 => 397,  1124 => 395,  1121 => 394,  1119 => 393,  1116 => 392,  1111 => 391,  1108 => 390,  1103 => 388,  1100 => 387,  1098 => 386,  1091 => 384,  1085 => 380,  1080 => 379,  1077 => 378,  1072 => 376,  1069 => 375,  1067 => 374,  1064 => 373,  1059 => 372,  1056 => 371,  1051 => 369,  1048 => 368,  1046 => 367,  1039 => 365,  1034 => 363,  1028 => 359,  1022 => 358,  1020 => 357,  1014 => 356,  1007 => 354,  1001 => 350,  996 => 349,  993 => 348,  988 => 346,  985 => 345,  983 => 344,  980 => 343,  975 => 342,  972 => 341,  967 => 339,  964 => 338,  962 => 337,  955 => 335,  950 => 333,  936 => 326,  929 => 324,  926 => 323,  919 => 322,  914 => 321,  910 => 320,  904 => 317,  892 => 312,  885 => 310,  882 => 309,  875 => 308,  870 => 307,  866 => 306,  860 => 303,  854 => 299,  849 => 298,  846 => 297,  841 => 295,  838 => 294,  836 => 293,  833 => 292,  828 => 291,  825 => 290,  820 => 288,  817 => 287,  815 => 286,  808 => 284,  796 => 279,  789 => 277,  786 => 276,  779 => 275,  774 => 274,  770 => 273,  762 => 270,  750 => 265,  743 => 263,  740 => 262,  733 => 261,  728 => 260,  724 => 259,  718 => 256,  706 => 251,  699 => 249,  696 => 248,  689 => 247,  684 => 246,  680 => 245,  674 => 242,  668 => 238,  662 => 237,  654 => 235,  646 => 233,  643 => 232,  639 => 231,  633 => 228,  623 => 221,  611 => 216,  604 => 214,  601 => 213,  594 => 212,  589 => 211,  585 => 210,  579 => 207,  574 => 204,  569 => 202,  561 => 200,  556 => 199,  551 => 198,  546 => 196,  541 => 195,  539 => 194,  536 => 193,  532 => 192,  526 => 191,  523 => 190,  521 => 189,  513 => 186,  506 => 184,  497 => 180,  490 => 178,  483 => 174,  477 => 173,  473 => 172,  464 => 168,  459 => 166,  454 => 163,  448 => 162,  446 => 161,  440 => 160,  435 => 158,  430 => 155,  424 => 154,  422 => 153,  416 => 152,  411 => 150,  402 => 146,  395 => 144,  390 => 141,  384 => 140,  382 => 139,  376 => 138,  371 => 136,  366 => 133,  360 => 132,  358 => 131,  352 => 130,  347 => 128,  342 => 125,  336 => 124,  334 => 123,  328 => 122,  323 => 120,  309 => 113,  302 => 111,  299 => 110,  292 => 109,  287 => 108,  283 => 107,  277 => 104,  264 => 98,  257 => 96,  254 => 95,  247 => 94,  242 => 93,  238 => 92,  232 => 89,  223 => 85,  218 => 83,  209 => 79,  204 => 77,  199 => 74,  193 => 73,  191 => 72,  185 => 71,  180 => 69,  170 => 62,  159 => 54,  145 => 43,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
