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

/* extension/module/sm_testimonial.twig */
class __TwigTemplate_02531d99cb5c68f7a49b57ffd80346c177335be0654553eca150735ba01d6388 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-testimonial\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-testimonial\" class=\"form-horizontal\">
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 38
        echo ($context["entry_title_testimonial"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "\t\t\t  <div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t  <img src=\"language/";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            echo "\" />
\t\t\t\t</span>
\t\t\t\t<input type=\"text\" name=\"title_testimonial[";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "]\" placeholder=\"";
            echo ($context["entry_title_testimonial"] ?? null);
            echo "\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title_testimonial"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["title_testimonial"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null)) : (""));
            echo "\" class=\"form-control\" />
\t\t\t  </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 51
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"title\" id=\"input-title\" class=\"form-control\">
                ";
        // line 54
        if (($context["title"] ?? null)) {
            // line 55
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 56
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 58
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 59
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 61
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-city\">";
        // line 65
        echo ($context["entry_city"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"city\" id=\"input-city\" class=\"form-control\">
                ";
        // line 68
        if (($context["city"] ?? null)) {
            // line 69
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 70
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 72
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 73
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 75
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name-status\">";
        // line 79
        echo ($context["entry_name_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"name_status\" id=\"input-name-status\" class=\"form-control\">
                ";
        // line 82
        if (($context["name_status"] ?? null)) {
            // line 83
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 84
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 86
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 89
        echo "              </select>
            </div> 
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 93
        echo ($context["entry_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"text\" id=\"input-text\" class=\"form-control\">
                ";
        // line 96
        if (($context["text"] ?? null)) {
            // line 97
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 98
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 100
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 101
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 103
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-good\">";
        // line 107
        echo ($context["entry_good"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"good\" id=\"input-good\" class=\"form-control\">
                ";
        // line 110
        if (($context["good"] ?? null)) {
            // line 111
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 112
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 114
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 115
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 117
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-bad\">";
        // line 121
        echo ($context["entry_bad"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"bad\" id=\"input-bad\" class=\"form-control\">
                ";
        // line 124
        if (($context["bad"] ?? null)) {
            // line 125
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 126
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 128
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 129
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 131
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-rating\">";
        // line 135
        echo ($context["entry_rating"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"rating\" id=\"input-rating\" class=\"form-control\">
                ";
        // line 138
        if (($context["rating"] ?? null)) {
            // line 139
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 140
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 142
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 143
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 145
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-added\">";
        // line 149
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"date_added\" id=\"input-date-added\" class=\"form-control\">
                ";
        // line 152
        if (($context["date_added"] ?? null)) {
            // line 153
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 154
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 156
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 157
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 159
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-avatar\">";
        // line 163
        echo ($context["entry_avatar"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"avatar\" id=\"input-avatar\" class=\"form-control\">
                ";
        // line 166
        if (($context["avatar"] ?? null)) {
            // line 167
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 168
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 170
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 171
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 173
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-avatar-width\">";
        // line 177
        echo ($context["entry_avatar_size"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t  <input type=\"text\" name=\"avatar_width\" value=\"";
        // line 181
        echo ($context["avatar_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-avatar-width\" class=\"form-control\" />
\t\t\t\t  ";
        // line 182
        if (($context["error_avatar_width"] ?? null)) {
            // line 183
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_avatar_width"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 185
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t  <input type=\"text\" name=\"avatar_height\" value=\"";
        // line 187
        echo ($context["avatar_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  ";
        // line 188
        if (($context["error_avatar_height"] ?? null)) {
            // line 189
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_avatar_height"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 191
        echo "\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 196
        echo ($context["entry_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"image\" id=\"input-image\" class=\"form-control\">
                ";
        // line 199
        if (($context["image"] ?? null)) {
            // line 200
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 201
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 203
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 204
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 206
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-thumbnail-width\">";
        // line 210
        echo ($context["entry_thumbnail"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t  <input type=\"text\" name=\"thumbnail_width\" value=\"";
        // line 214
        echo ($context["thumbnail_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-thumbnail-width\" class=\"form-control\" />
\t\t\t\t  ";
        // line 215
        if (($context["error_thumbnail_width"] ?? null)) {
            // line 216
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_thumbnail_width"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 218
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t  <input type=\"text\" name=\"thumbnail_height\" value=\"";
        // line 220
        echo ($context["thumbnail_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  ";
        // line 221
        if (($context["error_thumbnail_height"] ?? null)) {
            // line 222
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_thumbnail_height"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 224
        echo "\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-image-limit\">";
        // line 229
        echo ($context["entry_image_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"image_limit\" value=\"";
        // line 231
        echo ($context["image_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_image_limit"] ?? null);
        echo "\" id=\"input-image-limit\" class=\"form-control\" />
\t\t\t  ";
        // line 232
        if (($context["error_image_limit"] ?? null)) {
            // line 233
            echo "              <div class=\"text-danger\">";
            echo ($context["error_image_limit"] ?? null);
            echo "</div>
              ";
        }
        // line 235
        echo "            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 238
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 240
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
\t\t\t  ";
        // line 241
        if (($context["error_limit"] ?? null)) {
            // line 242
            echo "              <div class=\"text-danger\">";
            echo ($context["error_limit"] ?? null);
            echo "</div>
              ";
        }
        // line 244
        echo "            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-readmore\">";
        // line 247
        echo ($context["entry_readmore"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"readmore\" id=\"input-readmore\" class=\"form-control\">
                ";
        // line 250
        if (($context["readmore"] ?? null)) {
            // line 251
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 252
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 254
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 255
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 257
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-all\">";
        // line 261
        echo ($context["entry_show_all"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"show_all\" id=\"input-show-all\" class=\"form-control\">
                ";
        // line 264
        if (($context["show_all"] ?? null)) {
            // line 265
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 266
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 268
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 269
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 271
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort\">";
        // line 275
        echo ($context["entry_sort"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"sort\" id=\"input-sort\" class=\"form-control\">
                ";
        // line 278
        if ((($context["sort"] ?? null) == "st.date_added")) {
            // line 279
            echo "                <option value=\"st.date_added\" selected=\"selected\">";
            echo ($context["text_date_added"] ?? null);
            echo "</option>
                <option value=\"st.rating\">";
            // line 280
            echo ($context["text_rating"] ?? null);
            echo "</option>
                ";
        } else {
            // line 282
            echo "                <option value=\"st.date_added\">";
            echo ($context["text_date_added"] ?? null);
            echo "</option>
                <option value=\"st.rating\" selected=\"selected\">";
            // line 283
            echo ($context["text_rating"] ?? null);
            echo "</option>
                ";
        }
        // line 285
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-carousel\">";
        // line 289
        echo ($context["entry_carousel"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"carousel\" id=\"input-carousel\" class=\"form-control\">
                ";
        // line 292
        if (($context["carousel"] ?? null)) {
            // line 293
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 294
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 296
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 297
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 299
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-carousel-item\">";
        // line 303
        echo ($context["entry_carousel_item"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"carousel_item\" value=\"";
        // line 305
        echo ($context["carousel_item"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_carousel_item"] ?? null);
        echo "\" id=\"input-carousel-item\" class=\"form-control\" />
\t\t\t  ";
        // line 306
        if (($context["error_carousel_item"] ?? null)) {
            // line 307
            echo "              <div class=\"text-danger\">";
            echo ($context["error_carousel_item"] ?? null);
            echo "</div>
              ";
        }
        // line 309
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 312
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 315
        if (($context["status"] ?? null)) {
            // line 316
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 317
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 319
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 320
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 322
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 330
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/sm_testimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  849 => 330,  839 => 322,  834 => 320,  829 => 319,  824 => 317,  819 => 316,  817 => 315,  811 => 312,  806 => 309,  800 => 307,  798 => 306,  792 => 305,  787 => 303,  781 => 299,  776 => 297,  771 => 296,  766 => 294,  761 => 293,  759 => 292,  753 => 289,  747 => 285,  742 => 283,  737 => 282,  732 => 280,  727 => 279,  725 => 278,  719 => 275,  713 => 271,  708 => 269,  703 => 268,  698 => 266,  693 => 265,  691 => 264,  685 => 261,  679 => 257,  674 => 255,  669 => 254,  664 => 252,  659 => 251,  657 => 250,  651 => 247,  646 => 244,  640 => 242,  638 => 241,  632 => 240,  627 => 238,  622 => 235,  616 => 233,  614 => 232,  608 => 231,  603 => 229,  596 => 224,  590 => 222,  588 => 221,  582 => 220,  578 => 218,  572 => 216,  570 => 215,  564 => 214,  557 => 210,  551 => 206,  546 => 204,  541 => 203,  536 => 201,  531 => 200,  529 => 199,  523 => 196,  516 => 191,  510 => 189,  508 => 188,  502 => 187,  498 => 185,  492 => 183,  490 => 182,  484 => 181,  477 => 177,  471 => 173,  466 => 171,  461 => 170,  456 => 168,  451 => 167,  449 => 166,  443 => 163,  437 => 159,  432 => 157,  427 => 156,  422 => 154,  417 => 153,  415 => 152,  409 => 149,  403 => 145,  398 => 143,  393 => 142,  388 => 140,  383 => 139,  381 => 138,  375 => 135,  369 => 131,  364 => 129,  359 => 128,  354 => 126,  349 => 125,  347 => 124,  341 => 121,  335 => 117,  330 => 115,  325 => 114,  320 => 112,  315 => 111,  313 => 110,  307 => 107,  301 => 103,  296 => 101,  291 => 100,  286 => 98,  281 => 97,  279 => 96,  273 => 93,  267 => 89,  262 => 87,  257 => 86,  252 => 84,  247 => 83,  245 => 82,  239 => 79,  233 => 75,  228 => 73,  223 => 72,  218 => 70,  213 => 69,  211 => 68,  205 => 65,  199 => 61,  194 => 59,  189 => 58,  184 => 56,  179 => 55,  177 => 54,  171 => 51,  166 => 48,  153 => 45,  144 => 43,  140 => 41,  136 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/sm_testimonial.twig", "");
    }
}
