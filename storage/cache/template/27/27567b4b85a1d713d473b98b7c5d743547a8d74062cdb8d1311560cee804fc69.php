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

/* extension/module/s_testimonial.twig */
class __TwigTemplate_c555a585cb398aa56ac5cd8ed7850364af2b57fa87bc9289ea64ae88511810c0 extends \Twig\Template
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
\t    ";
        // line 6
        if (($context["update"] ?? null)) {
            // line 7
            echo "\t\t<button onclick=\"updateTestimonials(); location.reload();\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-warning\"></i> ";
            echo ($context["button_update"] ?? null);
            echo "</button>
\t\t";
        }
        // line 9
        echo "        <button type=\"submit\" form=\"form-testimonial\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 10
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "\t";
        if (($context["success"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 32
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
\t    <form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-testimonial\" class=\"form-horizontal\">
\t\t  <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-form\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_form"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
          </ul>
\t\t  <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 46
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t    ";
        // line 49
        if (($context["module_s_testimonial_status"] ?? null)) {
            // line 50
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 51
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 53
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 54
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 56
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-link\">";
        // line 60
        echo ($context["entry_link"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_link\" id=\"input-link\" class=\"form-control\">
\t\t\t\t    ";
        // line 63
        if (($context["module_s_testimonial_link"] ?? null)) {
            // line 64
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 65
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 67
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 68
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 70
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-link-order\">";
        // line 74
        echo ($context["entry_link_order"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_link_order\" id=\"input-link-order\" class=\"form-control\">
\t\t\t\t    ";
        // line 77
        if (($context["module_s_testimonial_link_order"] ?? null)) {
            // line 78
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 79
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 81
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 82
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 84
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-guest\">";
        // line 88
        echo ($context["entry_guest"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_guest\" id=\"input-guest\" class=\"form-control\">
\t\t\t\t    ";
        // line 91
        if (($context["module_s_testimonial_guest"] ?? null)) {
            // line 92
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 93
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 95
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 96
            echo ($context["text_disabled"] ?? null);
            echo "  </option>
\t\t\t\t    ";
        }
        // line 98
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-all-store\">";
        // line 102
        echo ($context["entry_all_store"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_all_store\" id=\"input-all-store\" class=\"form-control\">
\t\t\t\t    ";
        // line 105
        if (($context["module_s_testimonial_all_store"] ?? null)) {
            // line 106
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 107
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 109
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 110
            echo ($context["text_disabled"] ?? null);
            echo "  </option>
\t\t\t\t    ";
        }
        // line 112
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-mail\">";
        // line 116
        echo ($context["entry_mail"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_mail\" id=\"input-mail\" class=\"form-control\">
\t\t\t\t    ";
        // line 119
        if (($context["module_s_testimonial_mail"] ?? null)) {
            // line 120
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 121
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 123
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 124
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 126
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-moderation\">";
        // line 130
        echo ($context["entry_moderation"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_moderation\" id=\"input-moderation\" class=\"form-control\">
\t\t\t\t    ";
        // line 133
        if (($context["module_s_testimonial_moderation"] ?? null)) {
            // line 134
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 135
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 137
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 138
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 140
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 144
        echo ($context["entry_language"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_language\" id=\"input-language\" class=\"form-control\">
\t\t\t\t    ";
        // line 147
        if (($context["module_s_testimonial_language"] ?? null)) {
            // line 148
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_language_all"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 149
            echo ($context["text_language_select"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 151
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_language_all"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 152
            echo ($context["text_language_select"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 154
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-date-added\">";
        // line 158
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_date_added\" id=\"input-date-added\" class=\"form-control\">
\t\t\t\t    ";
        // line 161
        if (($context["module_s_testimonial_date_added"] ?? null)) {
            // line 162
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 163
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 165
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 166
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 168
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 172
        echo ($context["entry_limit"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_limit\" value=\"";
        // line 174
        echo ($context["module_s_testimonial_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
\t\t\t\t  ";
        // line 175
        if (($context["error_limit"] ?? null)) {
            // line 176
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_limit"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 178
        echo "\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-field\">";
        // line 181
        echo ($context["entry_field"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_field\" id=\"input-field\" class=\"form-control\">
\t\t\t\t    ";
        // line 184
        if (($context["module_s_testimonial_field"] ?? null)) {
            // line 185
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 186
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 188
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 189
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 191
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-cut\">";
        // line 195
        echo ($context["entry_cut"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_cut\" id=\"input-cut\" class=\"form-control\">
\t\t\t\t    ";
        // line 198
        if (($context["module_s_testimonial_cut"] ?? null)) {
            // line 199
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 200
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 202
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 203
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 205
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-text-limit\">";
        // line 209
        echo ($context["entry_text_limit"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_text_limit\" value=\"";
        // line 211
        echo ($context["module_s_testimonial_text_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_text_limit"] ?? null);
        echo "\" id=\"input-text-limitt\" class=\"form-control\" />
\t\t\t\t  ";
        // line 212
        if (($context["error_text_limit"] ?? null)) {
            // line 213
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_text_limit"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 215
        echo "\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-description\">
\t\t\t  <div class=\"panel-body\">
\t\t\t    <ul class=\"nav nav-tabs\" id=\"language\">
                  ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 222
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 222);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 222);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 222);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 222);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 222);
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                </ul>
\t\t\t    <div class=\"tab-content\">
                  ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 227
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 227);
            echo "\">
\t\t\t\t    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 229
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 229);
            echo "\">";
            echo ($context["entry_title_testimonial"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"module_s_testimonial_description[";
            // line 231
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231);
            echo "][title]\" placeholder=\"";
            echo ($context["entry_title_testimonial"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231);
            echo "\" class=\"form-control\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_s_testimonial_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_s_testimonial_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231)] ?? null) : null), "title", [], "any", false, false, false, 231)) : (""));
            echo "\">
                      </div>
                    </div>
\t\t\t\t    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 235
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 235);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"module_s_testimonial_description[";
            // line 237
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_s_testimonial_description"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_s_testimonial_description"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237)] ?? null) : null), "description", [], "any", false, false, false, 237)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 241
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"module_s_testimonial_description[";
            // line 243
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["module_s_testimonial_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["module_s_testimonial_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243)] ?? null) : null), "meta_description", [], "any", false, false, false, 243)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 247
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 247);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"module_s_testimonial_description[";
            // line 249
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 249);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 249);
            echo "\" class=\"form-control\">";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["module_s_testimonial_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 249)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["module_s_testimonial_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 249)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 249)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t    <div class=\"tab-pane\" id=\"tab-form\">
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-editor\">";
        // line 259
        echo ($context["entry_editor"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_editor\" id=\"input-editor\" class=\"form-control\">
\t\t\t\t    ";
        // line 262
        if (($context["module_s_testimonial_editor"] ?? null)) {
            // line 263
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_wysibb"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 264
            echo ($context["text_no_editor"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 266
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_wysibb"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 267
            echo ($context["text_no_editor"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 269
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-smile-theme\">";
        // line 273
        echo ($context["entry_smile_theme"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_smile_theme\" id=\"input-smile-theme\" class=\"form-control\">
\t\t\t\t    ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["smile_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["smile_theme"]) {
            // line 277
            echo "\t\t\t\t    <option value=\"";
            echo $context["smile_theme"];
            echo "\"";
            if ((($context["module_s_testimonial_smile_theme"] ?? null) == $context["smile_theme"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $context["smile_theme"];
            echo "</option>
\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smile_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-form\">";
        // line 283
        echo ($context["entry_form"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_form\" id=\"input-form\" class=\"form-control\">
\t\t\t\t    ";
        // line 286
        if (($context["module_s_testimonial_form"] ?? null)) {
            // line 287
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_simple"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 288
            echo ($context["text_accordeon"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 290
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_simple"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 291
            echo ($context["text_accordeon"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 293
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-form-position\">";
        // line 297
        echo ($context["entry_form_position"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_form_position\" id=\"input-form-position\" class=\"form-control\">
\t\t\t\t    ";
        // line 300
        if (($context["module_s_testimonial_form_position"] ?? null)) {
            // line 301
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_top"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 302
            echo ($context["text_bottom"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 304
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_top"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 305
            echo ($context["text_bottom"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 307
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 311
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_title\" id=\"input-title\" class=\"form-control\">
\t\t\t\t    ";
        // line 314
        if ((($context["module_s_testimonial_title"] ?? null) == 2)) {
            // line 315
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 316
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 317
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 318
($context["module_s_testimonial_title"] ?? null) == 1)) {
            // line 319
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 320
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 321
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 323
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 324
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 325
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 327
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-city\">";
        // line 331
        echo ($context["entry_city"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_city\" id=\"input-city\" class=\"form-control\">
\t\t\t\t    ";
        // line 334
        if ((($context["module_s_testimonial_city"] ?? null) == 2)) {
            // line 335
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 336
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 337
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 338
($context["module_s_testimonial_city"] ?? null) == 1)) {
            // line 339
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 340
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 341
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 343
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 344
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 345
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 347
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 351
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_name\" id=\"input-name\" class=\"form-control\">
\t\t\t\t    ";
        // line 354
        if ((($context["module_s_testimonial_name"] ?? null) == 2)) {
            // line 355
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 356
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 357
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 358
($context["module_s_testimonial_name"] ?? null) == 1)) {
            // line 359
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 360
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 361
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 363
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 364
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 365
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 367
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 371
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_email\" id=\"input-email\" class=\"form-control\">
\t\t\t\t    ";
        // line 374
        if ((($context["module_s_testimonial_email"] ?? null) == 2)) {
            // line 375
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 376
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 377
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 378
($context["module_s_testimonial_email"] ?? null) == 1)) {
            // line 379
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 380
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 381
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 383
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 384
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 385
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 387
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 391
        echo ($context["entry_text"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_text\" id=\"input-text\" class=\"form-control\">
\t\t\t\t    ";
        // line 394
        if ((($context["module_s_testimonial_text"] ?? null) == 2)) {
            // line 395
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 396
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 397
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 398
($context["module_s_testimonial_text"] ?? null) == 1)) {
            // line 399
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 400
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 401
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 403
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 404
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 405
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 407
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-good\">";
        // line 411
        echo ($context["entry_good"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_good\" id=\"input-good\" class=\"form-control\">
\t\t\t\t    ";
        // line 414
        if ((($context["module_s_testimonial_good"] ?? null) == 2)) {
            // line 415
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 416
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 417
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 418
($context["module_s_testimonial_good"] ?? null) == 1)) {
            // line 419
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 420
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 421
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 423
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 424
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 425
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 427
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-bad\">";
        // line 431
        echo ($context["entry_bad"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_bad\" id=\"input-bad\" class=\"form-control\">
\t\t\t\t    ";
        // line 434
        if ((($context["module_s_testimonial_bad"] ?? null) == 2)) {
            // line 435
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 436
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 437
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 438
($context["module_s_testimonial_bad"] ?? null) == 1)) {
            // line 439
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 440
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 441
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 443
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 444
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 445
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 447
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-rating\">";
        // line 451
        echo ($context["entry_rating"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_rating\" id=\"input-rating\" class=\"form-control\">
\t\t\t\t    ";
        // line 454
        if ((($context["module_s_testimonial_rating"] ?? null) == 2)) {
            // line 455
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 456
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 457
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 458
($context["module_s_testimonial_rating"] ?? null) == 1)) {
            // line 459
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 460
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 461
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 463
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 464
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 465
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 467
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-avatar\">";
        // line 471
        echo ($context["entry_avatar"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_avatar\" id=\"input-avatar\" class=\"form-control\">
\t\t\t\t    ";
        // line 474
        if ((($context["module_s_testimonial_avatar"] ?? null) == 2)) {
            // line 475
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 476
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 477
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } elseif ((        // line 478
($context["module_s_testimonial_avatar"] ?? null) == 1)) {
            // line 479
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 480
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 481
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 483
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 484
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 485
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 487
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 491
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_image\" id=\"input-image\" class=\"form-control\">
\t\t\t\t    ";
        // line 494
        if ((($context["module_s_testimonial_image"] ?? null) == 2)) {
            // line 495
            echo "\t\t\t\t    <option value=\"2\" selected=\"selected\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 496
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 497
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t    \t";
        } elseif ((        // line 498
($context["module_s_testimonial_image"] ?? null) == 1)) {
            // line 499
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            // line 500
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 501
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 503
            echo "\t\t\t\t    <option value=\"2\">";
            echo ($context["text_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"1\">";
            // line 504
            echo ($context["text_no_required"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 505
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 507
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-image-limit\">";
        // line 511
        echo ($context["entry_image_limit"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_image_limit\" value=\"";
        // line 513
        echo ($context["module_s_testimonial_image_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-image-limit\" class=\"form-control\" />
\t\t\t\t  ";
        // line 514
        if (($context["error_image_limit"] ?? null)) {
            // line 515
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_image_limit"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 517
        echo "\t\t\t    </div>
\t\t\t  </div>
\t\t  \t  <div class=\"form-group\">
\t\t  \t    <label class=\"col-sm-2 control-label\" for=\"input-captcha\">";
        // line 520
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_s_testimonial_captcha\" id=\"input-captcha\" class=\"form-control\">
\t\t\t\t    ";
        // line 523
        if (($context["module_s_testimonial_captcha"] ?? null)) {
            // line 524
            echo "\t\t\t\t    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\">";
            // line 525
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 527
            echo "\t\t\t\t    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    <option value=\"0\" selected=\"selected\">";
            // line 528
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 530
        echo "\t\t\t\t  </select>
\t\t\t    </div>
\t\t\t  </div>
\t\t    </div>
\t\t    <div class=\"tab-pane\" id=\"tab-image\">
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-upload-avatar-width\">";
        // line 536
        echo ($context["entry_upload_avatar"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_upload_avatar_width\" value=\"";
        // line 540
        echo ($context["module_s_testimonial_upload_avatar_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-upload-avatar-width\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 541
        if (($context["error_upload_avatar_width"] ?? null)) {
            // line 542
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_upload_avatar_width"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 544
        echo "\t\t\t\t    </div>
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_upload_avatar_height\" value=\"";
        // line 546
        echo ($context["module_s_testimonial_upload_avatar_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 547
        if (($context["error_upload_avatar_height"] ?? null)) {
            // line 548
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_upload_avatar_height"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 550
        echo "\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-upload-image-width\">";
        // line 555
        echo ($context["entry_upload_image"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_upload_image_width\" value=\"";
        // line 559
        echo ($context["module_s_testimonial_upload_image_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-upload-image-width\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 560
        if (($context["error_upload_image_width"] ?? null)) {
            // line 561
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_upload_image_width"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 563
        echo "\t\t\t\t    </div>
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_upload_image_height\" value=\"";
        // line 565
        echo ($context["module_s_testimonial_upload_image_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 566
        if (($context["error_upload_image_height"] ?? null)) {
            // line 567
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_upload_image_height"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 569
        echo "\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-avatar-width\">";
        // line 574
        echo ($context["entry_avatar_size"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_avatar_width\" value=\"";
        // line 578
        echo ($context["module_s_testimonial_avatar_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-avatar-width\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 579
        if (($context["error_avatar_width"] ?? null)) {
            // line 580
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_avatar_width"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 582
        echo "\t\t\t\t    </div>
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_avatar_height\" value=\"";
        // line 584
        echo ($context["module_s_testimonial_avatar_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 585
        if (($context["error_avatar_height"] ?? null)) {
            // line 586
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_avatar_height"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 588
        echo "\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-avatar-popup-width\">";
        // line 593
        echo ($context["entry_avatar_info"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_avatar_info_width\" value=\"";
        // line 597
        echo ($context["module_s_testimonial_avatar_info_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-avatar-popup-width\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 598
        if (($context["error_avatar_info_width"] ?? null)) {
            // line 599
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_avatar_info_width"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 601
        echo "\t\t\t\t    </div>
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_avatar_info_height\" value=\"";
        // line 603
        echo ($context["module_s_testimonial_avatar_info_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 604
        if (($context["error_avatar_info_height"] ?? null)) {
            // line 605
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_avatar_info_height"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 607
        echo "\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t  \t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-thumbnail-width\">";
        // line 612
        echo ($context["entry_thumbnail"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_thumbnail_width\" value=\"";
        // line 616
        echo ($context["module_s_testimonial_thumbnail_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-thumbnail-width\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 617
        if (($context["error_thumbnail_width"] ?? null)) {
            // line 618
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_thumbnail_width"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 620
        echo "\t\t\t\t    </div>
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_thumbnail_height\" value=\"";
        // line 622
        echo ($context["module_s_testimonial_thumbnail_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 623
        if (($context["error_thumbnail_height"] ?? null)) {
            // line 624
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_thumbnail_height"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 626
        echo "\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-thumbnail_info-width\">";
        // line 631
        echo ($context["entry_thumbnail_info"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_thumbnail_info_width\" value=\"";
        // line 635
        echo ($context["module_s_testimonial_thumbnail_info_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-thumbnail_info-width\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 636
        if (($context["error_thumbnail_info_width"] ?? null)) {
            // line 637
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_thumbnail_info_width"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 639
        echo "\t\t\t\t    </div>
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_thumbnail_info_height\" value=\"";
        // line 641
        echo ($context["module_s_testimonial_thumbnail_info_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 642
        if (($context["error_thumbnail_info_height"] ?? null)) {
            // line 643
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_thumbnail_info_height"] ?? null);
            echo "</div>
\t\t\t\t   \t  ";
        }
        // line 645
        echo "\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 650
        echo ($context["entry_thumb"] ?? null);
        echo "</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_thumb_width\" value=\"";
        // line 654
        echo ($context["module_s_testimonial_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 655
        if (($context["error_thumb_width"] ?? null)) {
            // line 656
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_thumb_width"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 658
        echo "\t\t\t\t    </div>
\t\t\t\t    <div class=\"col-sm-6\">
\t\t\t\t\t  <input type=\"text\" name=\"module_s_testimonial_thumb_height\" value=\"";
        // line 660
        echo ($context["module_s_testimonial_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 661
        if (($context["error_thumb_height"] ?? null)) {
            // line 662
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_thumb_height"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 664
        echo "\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t    </div>
\t\t\t<div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 670
        echo ($context["text_keyword"] ?? null);
        echo "</div>            
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 675
        echo ($context["entry_store"] ?? null);
        echo "</td>
\t\t              <td class=\"text-left\">";
        // line 676
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 681
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 682
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 682);
            echo "</td>
                      <td class=\"text-left\">";
            // line 683
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 684
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 684);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 684);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 684);
                echo "\" /></span>
                          <input type=\"text\" name=\"module_s_testimonial_seo_url[";
                // line 685
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 685);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 685);
                echo "]\" value=\"";
                if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["module_s_testimonial_seo_url"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 685)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 685)] ?? null) : null)) {
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["module_s_testimonial_seo_url"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 685)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 685)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                        ";
                // line 687
                if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["error_keyword"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 687)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 687)] ?? null) : null)) {
                    // line 688
                    echo "                        <div class=\"text-danger\">";
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_keyword"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 688)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 688)] ?? null) : null);
                    echo "</div>
                        ";
                }
                // line 689
                echo " 
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 691
            echo "\t\t\t\t\t  </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 694
        echo "                  </tbody>
                </table>
              </div>
            </div>
\t      </div>
\t    </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
    ";
        // line 713
        if (($context["update"] ?? null)) {
            // line 714
            echo "\tfunction updateTestimonials() {
\t    \$.ajax({
\t\t\turl: 'index.php?route=extension/module/s_testimonial/update_testimonials&user_token=";
            // line 716
            echo ($context["user_token"] ?? null);
            echo "',
\t\t});
\t}
\t";
        }
        // line 720
        echo "\t
\t\$('#language a:first').tab('show');
//--></script>
</div>
";
        // line 724
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/s_testimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1911 => 724,  1905 => 720,  1898 => 716,  1894 => 714,  1892 => 713,  1871 => 694,  1863 => 691,  1856 => 689,  1850 => 688,  1848 => 687,  1835 => 685,  1826 => 684,  1822 => 683,  1818 => 682,  1815 => 681,  1811 => 680,  1804 => 676,  1800 => 675,  1792 => 670,  1784 => 664,  1778 => 662,  1776 => 661,  1770 => 660,  1766 => 658,  1760 => 656,  1758 => 655,  1752 => 654,  1745 => 650,  1738 => 645,  1732 => 643,  1730 => 642,  1724 => 641,  1720 => 639,  1714 => 637,  1712 => 636,  1706 => 635,  1699 => 631,  1692 => 626,  1686 => 624,  1684 => 623,  1678 => 622,  1674 => 620,  1668 => 618,  1666 => 617,  1660 => 616,  1653 => 612,  1646 => 607,  1640 => 605,  1638 => 604,  1632 => 603,  1628 => 601,  1622 => 599,  1620 => 598,  1614 => 597,  1607 => 593,  1600 => 588,  1594 => 586,  1592 => 585,  1586 => 584,  1582 => 582,  1576 => 580,  1574 => 579,  1568 => 578,  1561 => 574,  1554 => 569,  1548 => 567,  1546 => 566,  1540 => 565,  1536 => 563,  1530 => 561,  1528 => 560,  1522 => 559,  1515 => 555,  1508 => 550,  1502 => 548,  1500 => 547,  1494 => 546,  1490 => 544,  1484 => 542,  1482 => 541,  1476 => 540,  1469 => 536,  1461 => 530,  1456 => 528,  1451 => 527,  1446 => 525,  1441 => 524,  1439 => 523,  1433 => 520,  1428 => 517,  1422 => 515,  1420 => 514,  1414 => 513,  1409 => 511,  1403 => 507,  1398 => 505,  1394 => 504,  1389 => 503,  1384 => 501,  1380 => 500,  1375 => 499,  1373 => 498,  1369 => 497,  1365 => 496,  1360 => 495,  1358 => 494,  1352 => 491,  1346 => 487,  1341 => 485,  1337 => 484,  1332 => 483,  1327 => 481,  1323 => 480,  1318 => 479,  1316 => 478,  1312 => 477,  1308 => 476,  1303 => 475,  1301 => 474,  1295 => 471,  1289 => 467,  1284 => 465,  1280 => 464,  1275 => 463,  1270 => 461,  1266 => 460,  1261 => 459,  1259 => 458,  1255 => 457,  1251 => 456,  1246 => 455,  1244 => 454,  1238 => 451,  1232 => 447,  1227 => 445,  1223 => 444,  1218 => 443,  1213 => 441,  1209 => 440,  1204 => 439,  1202 => 438,  1198 => 437,  1194 => 436,  1189 => 435,  1187 => 434,  1181 => 431,  1175 => 427,  1170 => 425,  1166 => 424,  1161 => 423,  1156 => 421,  1152 => 420,  1147 => 419,  1145 => 418,  1141 => 417,  1137 => 416,  1132 => 415,  1130 => 414,  1124 => 411,  1118 => 407,  1113 => 405,  1109 => 404,  1104 => 403,  1099 => 401,  1095 => 400,  1090 => 399,  1088 => 398,  1084 => 397,  1080 => 396,  1075 => 395,  1073 => 394,  1067 => 391,  1061 => 387,  1056 => 385,  1052 => 384,  1047 => 383,  1042 => 381,  1038 => 380,  1033 => 379,  1031 => 378,  1027 => 377,  1023 => 376,  1018 => 375,  1016 => 374,  1010 => 371,  1004 => 367,  999 => 365,  995 => 364,  990 => 363,  985 => 361,  981 => 360,  976 => 359,  974 => 358,  970 => 357,  966 => 356,  961 => 355,  959 => 354,  953 => 351,  947 => 347,  942 => 345,  938 => 344,  933 => 343,  928 => 341,  924 => 340,  919 => 339,  917 => 338,  913 => 337,  909 => 336,  904 => 335,  902 => 334,  896 => 331,  890 => 327,  885 => 325,  881 => 324,  876 => 323,  871 => 321,  867 => 320,  862 => 319,  860 => 318,  856 => 317,  852 => 316,  847 => 315,  845 => 314,  839 => 311,  833 => 307,  828 => 305,  823 => 304,  818 => 302,  813 => 301,  811 => 300,  805 => 297,  799 => 293,  794 => 291,  789 => 290,  784 => 288,  779 => 287,  777 => 286,  771 => 283,  765 => 279,  750 => 277,  746 => 276,  740 => 273,  734 => 269,  729 => 267,  724 => 266,  719 => 264,  714 => 263,  712 => 262,  706 => 259,  699 => 254,  682 => 249,  675 => 247,  662 => 243,  655 => 241,  640 => 237,  633 => 235,  620 => 231,  613 => 229,  607 => 227,  603 => 226,  599 => 224,  582 => 222,  578 => 221,  570 => 215,  564 => 213,  562 => 212,  556 => 211,  551 => 209,  545 => 205,  540 => 203,  535 => 202,  530 => 200,  525 => 199,  523 => 198,  517 => 195,  511 => 191,  506 => 189,  501 => 188,  496 => 186,  491 => 185,  489 => 184,  483 => 181,  478 => 178,  472 => 176,  470 => 175,  464 => 174,  459 => 172,  453 => 168,  448 => 166,  443 => 165,  438 => 163,  433 => 162,  431 => 161,  425 => 158,  419 => 154,  414 => 152,  409 => 151,  404 => 149,  399 => 148,  397 => 147,  391 => 144,  385 => 140,  380 => 138,  375 => 137,  370 => 135,  365 => 134,  363 => 133,  357 => 130,  351 => 126,  346 => 124,  341 => 123,  336 => 121,  331 => 120,  329 => 119,  323 => 116,  317 => 112,  312 => 110,  307 => 109,  302 => 107,  297 => 106,  295 => 105,  289 => 102,  283 => 98,  278 => 96,  273 => 95,  268 => 93,  263 => 92,  261 => 91,  255 => 88,  249 => 84,  244 => 82,  239 => 81,  234 => 79,  229 => 78,  227 => 77,  221 => 74,  215 => 70,  210 => 68,  205 => 67,  200 => 65,  195 => 64,  193 => 63,  187 => 60,  181 => 56,  176 => 54,  171 => 53,  166 => 51,  161 => 50,  159 => 49,  153 => 46,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  124 => 35,  118 => 32,  114 => 30,  106 => 26,  103 => 25,  95 => 21,  93 => 20,  87 => 16,  76 => 14,  72 => 13,  67 => 11,  61 => 10,  56 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/s_testimonial.twig", "");
    }
}
