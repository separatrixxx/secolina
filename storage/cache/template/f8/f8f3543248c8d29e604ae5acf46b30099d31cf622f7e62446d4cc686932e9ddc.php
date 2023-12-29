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

/* extension/module/owlcarousel.twig */
class __TwigTemplate_1f9753022a99813327094d393e8de705f27fa05b898e04093d8b0872457ae688 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
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
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-owlcarousel\" class=\"form-horizontal\">
        
        <div class=\"tab-pane\">
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
              <li><a href=\"#language";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 35);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 35);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 35);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 35);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo " 
          </ul>
          
          <div class=\"tab-content\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
              <div class=\"tab-pane\" id=\"language";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41);
            echo "\">
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"title-language";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"owlcarousel_module[title][";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "]\" id=\"title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "title", [], "any", false, false, false, 45)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "title", [], "any", false, false, false, 45)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null)) : (""));
            echo "\" class=\"form-control\" />
                  </div>
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo " 
          </div>
        </div>
        
        <div id=\"tab-module\" class=\"vtabs-content\">
          <h4>";
        // line 54
        echo ($context["entry_tab_options"] ?? null);
        echo "</h4>

          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 57
        echo ($context["entry_main"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 58
        echo ($context["entry_product"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 59
        echo ($context["entry_additional"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-display\" data-toggle=\"tab\">";
        // line 60
        echo ($context["entry_display"] ?? null);
        echo "</a></li>
          </ul>

          <div class=\"tab-content\">

            <div class=\"tab-pane active\" id=\"tab-settings\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\">";
        // line 67
        echo ($context["entry_add_block_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[name]\" value=\"";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "name", [], "any", false, false, false, 69);
        echo "\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 74
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"owlcarousel_module[status]\" class=\"form-control\">
                    ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "status", [], "any", false, false, false, 77)) {
            echo " 
                      <option value=\"1\" selected=\"selected\">";
            // line 78
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 79
            echo ($context["text_disabled"] ?? null);
            echo " </option>
                    ";
        } else {
            // line 81
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo " </option>
                      <option value=\"0\" selected=\"selected\">";
            // line 82
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 84
        echo "                    </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 89
        echo ($context["entry_add_class_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[add_class_name]\" value=\"";
        // line 91
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "add_class_name", [], "any", false, false, false, 91);
        echo "\" class=\"form-control\" />
                </div>
              </div>

            </div>

            <div class=\"tab-pane\" id=\"tab-product\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 99
        echo ($context["entry_source"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                   <select name=\"owlcarousel_module[category_id]\" id=\"select\" onchange=\"showhide();\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "category_id", [], "any", false, false, false, 102) == "0")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_all_product"] ?? null);
        echo "</option>
                    <option value=\"featured\" ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "category_id", [], "any", false, false, false, 103) == "featured")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_featured"] ?? null);
        echo "</option>
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rootcats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rootcat"]) {
            echo " 
                      ";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, $context["rootcat"], "category_id", [], "any", false, false, false, 105) == twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "category_id", [], "any", false, false, false, 105))) {
                echo " 
                       <option value=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["rootcat"], "category_id", [], "any", false, false, false, 106);
                echo " \" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["rootcat"], "name", [], "any", false, false, false, 106);
                echo "</option>
                      ";
            } else {
                // line 108
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["rootcat"], "category_id", [], "any", false, false, false, 108);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["rootcat"], "name", [], "any", false, false, false, 108);
                echo " </option>
                      ";
            }
            // line 110
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rootcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                  </select>
                </div>
              </div>
              
              ";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "category_id", [], "any", false, false, false, 115) == "featured")) {
            // line 116
            echo "                ";
            $context["featured_style"] = "block";
            // line 117
            echo "              ";
        } else {
            // line 118
            echo "                ";
            $context["featured_style"] = "none";
            // line 119
            echo "              ";
        }
        // line 120
        echo "
              <div class=\"form-group\" id=\"rowfeatured\" style=\"display:";
        // line 121
        echo ($context["featured_style"] ?? null);
        echo ";\">
                <label class=\"col-sm-2 control-label\">";
        // line 122
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 124
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <br/>
                  <div class=\"scrollbox well well-sm\" id=\"featured-product\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 127
        $context["class"] = "odd";
        // line 128
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 
                        ";
            // line 129
            $context["class"] = (("even") ? ("odd") : ("even"));
            // line 130
            echo "                        <div id=\"featured-product";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 130);
            echo " \" class=\"";
            echo ($context["class"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
            echo " <i class=\"fa fa-minus-circle\"></i>
                              <input type=\"hidden\" value=\"";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 131);
            echo "\" />
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo " 
                  </div>
                  <input type=\"hidden\" name=\"owlcarousel_module[featured]\" value=\"";
        // line 135
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "featured", [], "any", false, false, false, 135);
        echo "\" />
                </div>
              </div>

              ";
        // line 139
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "category_id", [], "any", false, false, false, 139) == "featured")) {
            // line 140
            echo "                ";
            $context["featured_style"] = "none";
            // line 141
            echo "              ";
        } else {
            // line 142
            echo "                ";
            $context["featured_style"] = "block";
            // line 143
            echo "              ";
        }
        // line 144
        echo "
              <div class=\"form-group\" id=\"catonly\" style=\"display:";
        // line 145
        echo ($context["featured_style"] ?? null);
        echo ";\">
                <label class=\"col-sm-2 control-label\">";
        // line 146
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10 scrollbox\" id=\"featured-product\">
                 <select name=\"owlcarousel_module[manufacturer_id]\" id=\"select\" class=\"form-control\">
                    <option value=\"0\" <";
        // line 149
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "manufacturer_id", [], "any", false, false, false, 149), "0")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_all_manufacturers"] ?? null);
        echo "</option>
                    ";
        // line 150
        if (($context["manufacturers"] ?? null)) {
            // line 151
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                echo " 
                        ";
                // line 152
                if ((twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 152) == twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "manufacturer_id", [], "any", false, false, false, 152))) {
                    echo " 
                          <option value=\"";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 153);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 153);
                    echo "</option>
                        ";
                } else {
                    // line 155
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 155);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 155);
                    echo "</option>
                        ";
                }
                // line 157
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                    ";
        }
        echo " 
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 164
        echo ($context["entry_sort"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"owlcarousel_module[sort]\" class=\"form-control\">
                    ";
        // line 167
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "sort", [], "any", false, false, false, 167) == "p.date_added")) {
            // line 168
            echo "                      <option value=\"p.date_added\" selected=\"selected\">";
            echo ($context["text_sort_date_added"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 170
            echo "                      <option value=\"p.date_added\">";
            echo ($context["text_sort_date_added"] ?? null);
            echo "</option>
                    ";
        }
        // line 172
        echo "
                    ";
        // line 173
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "sort", [], "any", false, false, false, 173) == "rating")) {
            // line 174
            echo "                      <option value=\"rating\" selected=\"selected\">";
            echo ($context["text_sort_rating"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 176
            echo "                      <option value=\"rating\">";
            echo ($context["text_sort_rating"] ?? null);
            echo "</option>
                    ";
        }
        // line 178
        echo "
                    ";
        // line 179
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "sort", [], "any", false, false, false, 179) == "p.viewed")) {
            // line 180
            echo "                      <option value=\"p.viewed\" selected=\"selected\">";
            echo ($context["text_sort_viewed"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 182
            echo "                      <option value=\"p.viewed\">";
            echo ($context["text_sort_viewed"] ?? null);
            echo "</option>
                    ";
        }
        // line 184
        echo "
                    ";
        // line 185
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "sort", [], "any", false, false, false, 185) == "p.sort_order")) {
            echo " 
                      <option value=\"p.sort_order\" selected=\"selected\">";
            // line 186
            echo ($context["text_sort_order"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 188
            echo "                      <option value=\"p.sort_order\">";
            echo ($context["text_sort_order"] ?? null);
            echo "</option>
                    ";
        }
        // line 190
        echo "
                    ";
        // line 191
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "sort", [], "any", false, false, false, 191) == "topsellers")) {
            // line 192
            echo "                      <option value=\"topsellers\" selected=\"selected\">";
            echo ($context["text_sort_bestseller"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 194
            echo "                      <option value=\"topsellers\">";
            echo ($context["text_sort_bestseller"] ?? null);
            echo "</option>
                    ";
        }
        // line 196
        echo "
                    ";
        // line 197
        if ((twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "sort", [], "any", false, false, false, 197) == "special")) {
            // line 198
            echo "                      <option value=\"special\" selected=\"selected\">";
            echo ($context["text_sort_special"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 200
            echo "                      <option value=\"special\">";
            echo ($context["text_sort_special"] ?? null);
            echo "</option>
                    ";
        }
        // line 202
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 207
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-5\">
                  <input type=\"text\" name=\"owlcarousel_module[image_width]\" value=\"";
        // line 209
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "image_width", [], "any", false, false, false, 209);
        echo "\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-5\">
                  <input type=\"text\" name=\"owlcarousel_module[image_height]\" value=\"";
        // line 212
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "image_height", [], "any", false, false, false, 212);
        echo "\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"count\"><span data-toggle=\"tooltip\" title=\"";
        // line 217
        echo ($context["help_count"] ?? null);
        echo "\">";
        echo ($context["entry_count"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[count]\" value=\"";
        // line 219
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "count", [], "any", false, false, false, 219);
        echo "\" class=\"form-control\" id=\"count\" />
                </div>
              </div>

              <div class=\"form-group\">
                 <label class=\"col-sm-2 control-label\" for=\"visible\"><span data-toggle=\"tooltip\" title=\"";
        // line 224
        echo ($context["help_visible"] ?? null);
        echo "\">";
        echo ($context["entry_visible"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[visible]\" value=\"";
        // line 226
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "visible", [], "any", false, false, false, 226);
        echo "\" class=\"form-control\" id=\"visible\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"visible_1000\"><span data-toggle=\"tooltip\" title=\"";
        // line 231
        echo ($context["help_visible_1000"] ?? null);
        echo "\">";
        echo ($context["entry_visible_1000"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[visible_1000]\" value=\"";
        // line 233
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "visible_1000", [], "any", false, false, false, 233);
        echo "\" class=\"form-control\" id=\"visible_1000\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"visible_900\"><span data-toggle=\"tooltip\" title=\"";
        // line 238
        echo ($context["help_visible_900"] ?? null);
        echo "\">";
        echo ($context["entry_visible_900"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[visible_900]\" value=\"";
        // line 240
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "visible_900", [], "any", false, false, false, 240);
        echo "\" class=\"form-control\" id=\"visible_900\" />
                </div>
              </div>

              <div class=\"form-group\">
                 <label class=\"col-sm-2 control-label\" for=\"visible_600\"><span data-toggle=\"tooltip\" title=\"";
        // line 245
        echo ($context["help_visible_600"] ?? null);
        echo "\">";
        echo ($context["entry_visible_600"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[visible_600]\" value=\"";
        // line 247
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "visible_600", [], "any", false, false, false, 247);
        echo "\" class=\"form-control\" id=\"visible_600\" />
                </div>
              </div>

              <div class=\"form-group\">
               <label class=\"col-sm-2 control-label\" for=\"visible_479\"><span data-toggle=\"tooltip\" title=\"";
        // line 252
        echo ($context["help_visible_600"] ?? null);
        echo "\">";
        echo ($context["entry_visible_479"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                 <input type=\"text\" name=\"owlcarousel_module[visible_479]\" value=\"";
        // line 254
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "visible_479", [], "any", false, false, false, 254);
        echo "\" class=\"form-control\" id=\"visible_479\" />
                </div>
              </div>
            </div>

            <div class=\"tab-pane\" id=\"tab-additional\">
              <div class=\"form-group\">
               <label class=\"col-sm-2 control-label\" for=\"slide_speed\"><span data-toggle=\"tooltip\" title=\"";
        // line 261
        echo ($context["help_slide_speed"] ?? null);
        echo "\">";
        echo ($context["entry_slide_speed"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[slide_speed]\" value=\"";
        // line 263
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "slide_speed", [], "any", false, false, false, 263);
        echo "\" class=\"form-control\" id=\"slide_speed\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"pagination_speed\"><span data-toggle=\"tooltip\" title=\"";
        // line 268
        echo ($context["help_pagination_speed"] ?? null);
        echo "\">";
        echo ($context["entry_pagination_speed"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[pagination_speed]\" value=\"";
        // line 270
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "pagination_speed", [], "any", false, false, false, 270);
        echo "\" class=\"form-control\" id=\"pagination_speed\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"autoscroll\"><span data-toggle=\"tooltip\" title=\"";
        // line 275
        echo ($context["help_autoscroll"] ?? null);
        echo "\">";
        echo ($context["entry_autoscroll"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[autoscroll]\" value=\"";
        // line 277
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "autoscroll", [], "any", false, false, false, 277);
        echo "\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"item_prev_next\"><span data-toggle=\"tooltip\" title=\"";
        // line 282
        echo ($context["help_item_prev_next"] ?? null);
        echo "\">";
        echo ($context["entry_item_prev_next"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"owlcarousel_module[item_prev_next]\" value=\"";
        // line 284
        echo twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "item_prev_next", [], "any", false, false, false, 284);
        echo "\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 289
        echo ($context["entry_per_page"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_per_page\">
                    <input id=\"yes_per_page\" type=\"radio\" name=\"owlcarousel_module[show_per_page]\" value=\"1\" ";
        // line 292
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_per_page", [], "any", false, false, false, 292) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_per_page", [], "any", false, false, false, 292) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " />
                    ";
        // line 293
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>

                  <label class=\"radio-inline\" for=\"no_per_page\">
                    <input id=\"no_per_page\" type=\"radio\" name=\"owlcarousel_module[show_per_page]\" value=\"0\" ";
        // line 297
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_per_page", [], "any", false, false, false, 297) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_per_page", [], "any", false, false, false, 297) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " />
                    ";
        // line 298
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 304
        echo ($context["entry_random_item"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_random_item\">
                    <input id=\"yes_random_item\" type=\"radio\" name=\"owlcarousel_module[show_random_item]\" value=\"1\" ";
        // line 307
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_random_item", [], "any", false, false, false, 307) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_random_item", [], "any", false, false, false, 307) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " 
                    />";
        // line 308
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>

                  <label class=\"radio-inline\" for=\"no_random_item\">
                    <input id=\"no_random_item\" type=\"radio\" name=\"owlcarousel_module[show_random_item]\" value=\"0\" ";
        // line 312
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_random_item", [], "any", false, false, false, 312) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_random_item", [], "any", false, false, false, 312) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " 
                    /> ";
        // line 313
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 319
        echo ($context["help_current_category"] ?? null);
        echo "\">";
        echo ($context["entry_current_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_current_category\">
                    <input id=\"yes_current_category\" type=\"radio\" name=\"owlcarousel_module[show_current_category]\" value=\"1\" ";
        // line 322
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_current_category", [], "any", false, false, false, 322) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_current_category", [], "any", false, false, false, 322) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " 
                    />";
        // line 323
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>

                  <label class=\"radio-inline\" for=\"no_current_category\">
                    <input id=\"no_current_category\" type=\"radio\" name=\"owlcarousel_module[show_current_category]\" value=\"0\" ";
        // line 327
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_current_category", [], "any", false, false, false, 327) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_current_category", [], "any", false, false, false, 327) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " 
                    /> ";
        // line 328
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
            </div>

            <div class=\"tab-pane\" id=\"tab-display\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 336
        echo ($context["entry_show_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_title\">
                    <input id=\"yes_title\" type=\"radio\" name=\"owlcarousel_module[show_title]\" value=\"1\" ";
        // line 339
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_title", [], "any", false, false, false, 339) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_title", [], "any", false, false, false, 339) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_title\">
                    <input id=\"no_title\" type=\"radio\" name=\"owlcarousel_module[show_title]\" value=\"0\" ";
        // line 342
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_title", [], "any", false, false, false, 342) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_title", [], "any", false, false, false, 342) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 348
        echo ($context["entry_show_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_name\">
                    <input id=\"yes_name\" type=\"radio\" name=\"owlcarousel_module[show_name]\" value=\"1\" ";
        // line 351
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_name", [], "any", false, false, false, 351) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_name", [], "any", false, false, false, 351) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_name\">
                  <input id=\"no_name\" type=\"radio\" name=\"owlcarousel_module[show_name]\" value=\"0\" ";
        // line 354
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_name", [], "any", false, false, false, 354) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_name", [], "any", false, false, false, 354) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 360
        echo ($context["entry_show_desc"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_desc\">
                    <input id=\"yes_desc\" type=\"radio\" name=\"owlcarousel_module[show_desc]\" value=\"1\" ";
        // line 363
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_desc", [], "any", false, false, false, 363) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_desc", [], "any", false, false, false, 363) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_desc\">
                  <input id=\"no_desc\" type=\"radio\" name=\"owlcarousel_module[show_desc]\" value=\"0\" ";
        // line 366
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_desc", [], "any", false, false, false, 366) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_desc", [], "any", false, false, false, 366) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 372
        echo ($context["entry_show_price"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_price\">
                    <input id=\"yes_price\" type=\"radio\" name=\"owlcarousel_module[show_price]\" value=\"1\" ";
        // line 375
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_price", [], "any", false, false, false, 375) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_price", [], "any", false, false, false, 375) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_price\">
                  <input id=\"no_price\" type=\"radio\" name=\"owlcarousel_module[show_price]\" value=\"0\" ";
        // line 378
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_price", [], "any", false, false, false, 378) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_price", [], "any", false, false, false, 378) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 384
        echo ($context["entry_show_rate"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_rate\">
                    <input id=\"yes_rate\" type=\"radio\" name=\"owlcarousel_module[show_rate]\" value=\"1\" ";
        // line 387
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_rate", [], "any", false, false, false, 387) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_rate", [], "any", false, false, false, 387) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo "/> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_rate\">
                  <input id=\"no_rate\" type=\"radio\" name=\"owlcarousel_module[show_rate]\" value=\"0\" ";
        // line 390
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_rate", [], "any", false, false, false, 390) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_rate", [], "any", false, false, false, 390) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 396
        echo ($context["entry_show_cart"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_cart\">
                    <input id=\"yes_show_cart\" type=\"radio\" name=\"owlcarousel_module[show_cart]\" value=\"1\" ";
        // line 399
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_cart", [], "any", false, false, false, 399) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_cart", [], "any", false, false, false, 399) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_cart\">
                  <input id=\"no_show_cart\" type=\"radio\" name=\"owlcarousel_module[show_cart]\" value=\"0\" ";
        // line 402
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_cart", [], "any", false, false, false, 402) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_cart", [], "any", false, false, false, 402) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 408
        echo ($context["entry_show_wishlist"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_wishlist\">
                    <input id=\"yes_show_wishlist\" type=\"radio\" name=\"owlcarousel_module[show_wishlist]\" value=\"1\" ";
        // line 411
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_wishlist", [], "any", false, false, false, 411) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_wishlist", [], "any", false, false, false, 411) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_wishlist\">
                  <input id=\"no_show_wishlist\" type=\"radio\" name=\"owlcarousel_module[show_wishlist]\" value=\"0\" ";
        // line 414
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_wishlist", [], "any", false, false, false, 414) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_wishlist", [], "any", false, false, false, 414) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 420
        echo ($context["entry_show_compare"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_compare\">
                    <input id=\"yes_show_compare\" type=\"radio\" name=\"owlcarousel_module[show_compare]\" value=\"1\" ";
        // line 423
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_compare", [], "any", false, false, false, 423) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_compare", [], "any", false, false, false, 423) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_compare\">
                  <input id=\"no_show_compare\" type=\"radio\" name=\"owlcarousel_module[show_compare]\" value=\"0\" ";
        // line 426
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_compare", [], "any", false, false, false, 426) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_compare", [], "any", false, false, false, 426) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 432
        echo ($context["entry_show_page"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_page\">
                    <input id=\"yes_show_page\" type=\"radio\" name=\"owlcarousel_module[show_page]\" value=\"1\" ";
        // line 435
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_page", [], "any", false, false, false, 435) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_page", [], "any", false, false, false, 435) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_page\">
                  <input id=\"no_show_page\" type=\"radio\" name=\"owlcarousel_module[show_page]\" value=\"0\" ";
        // line 438
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_page", [], "any", false, false, false, 438) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_page", [], "any", false, false, false, 438) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 444
        echo ($context["entry_show_nav"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_page\">
                    <input id=\"yes_show_nav\" type=\"radio\" name=\"owlcarousel_module[show_nav]\" value=\"1\" ";
        // line 447
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_nav", [], "any", false, false, false, 447) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_nav", [], "any", false, false, false, 447) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_nav\">
                  <input id=\"no_show_nav\" type=\"radio\" name=\"owlcarousel_module[show_nav]\" value=\"0\" ";
        // line 450
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_nav", [], "any", false, false, false, 450) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_nav", [], "any", false, false, false, 450) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 456
        echo ($context["entry_show_lazy_load"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_lazy_load\">
                    <input id=\"yes_show_lazy_load\" type=\"radio\" name=\"owlcarousel_module[show_lazy_load]\" value=\"1\" ";
        // line 459
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_lazy_load", [], "any", false, false, false, 459) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_lazy_load", [], "any", false, false, false, 459) == "1"))) {
            echo " checked=\"checked\"  ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_lazy_load\">
                  <input id=\"no_show_lazy_load\" type=\"radio\" name=\"owlcarousel_module[show_lazy_load]\" value=\"0\" ";
        // line 462
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_lazy_load", [], "any", false, false, false, 462) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_lazy_load", [], "any", false, false, false, 462) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 468
        echo ($context["entry_show_mouse_drag"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_mouse_drag\">
                    <input id=\"yes_show_mouse_drag\" type=\"radio\" name=\"owlcarousel_module[show_mouse_drag]\" value=\"1\" ";
        // line 471
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_mouse_drag", [], "any", false, false, false, 471) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_mouse_drag", [], "any", false, false, false, 471) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_mouse_drag\">
                  <input id=\"no_show_mouse_drag\" type=\"radio\" name=\"owlcarousel_module[show_mouse_drag]\" value=\"0\" ";
        // line 474
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_mouse_drag", [], "any", false, false, false, 474) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_mouse_drag", [], "any", false, false, false, 474) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 480
        echo ($context["entry_show_touch_drag"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_touch_drag\">
                    <input id=\"yes_show_touch_drag\" type=\"radio\" name=\"owlcarousel_module[show_touch_drag]\" value=\"1\" ";
        // line 483
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_touch_drag", [], "any", false, false, false, 483) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_touch_drag", [], "any", false, false, false, 483) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_touch_drag\">
                  <input id=\"no_show_touch_drag\" type=\"radio\" name=\"owlcarousel_module[show_touch_drag]\" value=\"0\" ";
        // line 486
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_touch_drag", [], "any", false, false, false, 486) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_touch_drag", [], "any", false, false, false, 486) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 492
        echo ($context["entry_stop_on_hover"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_stop_on_hover\">
                    <input id=\"yes_show_stop_on_hover\" type=\"radio\" name=\"owlcarousel_module[show_stop_on_hover]\" value=\"1\" ";
        // line 495
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_stop_on_hover", [], "any", false, false, false, 495) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_stop_on_hover", [], "any", false, false, false, 495) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_stop_on_hover\">
                  <input id=\"no_show_stop_on_hover\" type=\"radio\" name=\"owlcarousel_module[show_stop_on_hover]\" value=\"0\" ";
        // line 498
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_stop_on_hover", [], "any", false, false, false, 498) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_stop_on_hover", [], "any", false, false, false, 498) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 504
        echo ($context["entry_show_tabs"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\" for=\"yes_show_tabs\">
                    <input id=\"yes_show_tabs\" type=\"radio\" name=\"owlcarousel_module[show_tabs]\" value=\"1\" ";
        // line 507
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_tabs", [], "any", false, false, false, 507) || (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_tabs", [], "any", false, false, false, 507) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\" for=\"no_show_tabs\">
                  <input id=\"no_show_tabs\" type=\"radio\" name=\"owlcarousel_module[show_tabs]\" value=\"0\" ";
        // line 510
        if (( !twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_tabs", [], "any", false, false, false, 510) && (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "show_tabs", [], "any", false, false, false, 510) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                  <div id=\"other_modules\">
                    ";
        // line 513
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["other_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            echo " 
                      <div>
                        <label><input type=\"checkbox\" value=\"1\" name=\"owlcarousel_module[display_with][";
            // line 515
            echo twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 515);
            echo "]\" ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "display_with", [], "any", false, false, false, 515), "other", [], "any", false, false, false, 515), "id", [], "any", false, false, false, 515)) ? ("checked=\"checked\"") : (""));
            echo " />&nbsp; ";
            echo twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 515);
            echo "</label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
        echo " 
                  </div>
                </div>
              </div>
              
            </div>

          </div>

        </div>

        </form>

      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">
function showhide() {
  var \$select = \$('#select');
  var selectedValue = \$select.val();
  \$(\"#rowfeatured\")[selectedValue == 'featured' ? 'show' : 'hide'] ();
  \$(\"#catonly\")[selectedValue == 'featured' ? 'hide' : 'show'] ();

}
</script>

<script type=\"text/javascript\">

\$('#featured-product div img').on('click', function() {
  var modid = \$(\".selected\").attr('modid');
  \$(this).parent().remove();

  \$('#featured-product'+ modid +' div:odd').attr('class', 'odd');
  \$('#featured-product'+ modid +' div:even').attr('class', 'even');

  data = \$.map(\$('#featured-product'+ modid +' input'), function(element){
    return \$(element).attr('value');
  });

  \$('input[name=\\'owlcarousel_module[' + modid + '][featured]\\']').attr('value', data.join());
});


\$('#module-add').before('<a href=\"#tab-module\" modid =\" id=\"module\">";
        // line 562
        echo ($context["add_tab_module"] ?? null);
        echo "&nbsp;<img src=\"view/image/delete.png\" alt=\"\" onclick=\"\$(\\'.vtabs a:first\\').trigger(\\'click\\'); \$(\\'#module\\').remove(); \$(\\'#tab-module\\').remove(); return false;\" /></a>');

\$('.vtabs a').tabs();
\$('#module').trigger('click');

//-->
</script>

<script type=\"text/javascript\">
<!--
\$('input[name=\\'product\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 575
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  select: function(item) {
      \$('#featured-product' + item.value).remove();

      \$('#featured-product').append('<div id=\"featured-product' +  item.value + '\">' + item.label + ' <i class=\"fa fa-minus-circle\"></i><input type=\"hidden\" value=\"' + item.value + '\" /></div>');

      \$('#featured-product div:odd').attr('class', 'odd');
      \$('#featured-product div:even').attr('class', 'even');

      var data = \$.map(\$('#featured-product input'), function(element){
        return \$(element).attr('value');
      });

      \$('input[name=\\'owlcarousel_module[featured]\\']').attr('value', data.join());
  }
});

\$('.scrollbox').on('click', '.fa-minus-circle', function() {
  \$(this).parent().remove();

  \$('#featured-product div:odd').attr('class', 'odd');
  \$('#featured-product div:even').attr('class', 'even');

  var data = \$.map(\$('#featured-product input'), function(element){
    return \$(element).attr('value');
  });

  \$('input[name=\\'owlcarousel_module[featured]\\']').attr('value', data.join());
});
//-->
</script>



<script type=\"text/javascript\">
<!--
\$('#language a:first').tab('show');
//-->
</script>

<script type=\"text/javascript\"><!--
\$(function(){
  function display_other_modules() {
    if (~~\$('input[name*=show_tabs]:checked').val()) {
      \$('#other_modules').show();
    } else {
      \$('#other_modules').hide();
    }
  }

  \$('input[name*=show_tabs]').on('change', display_other_modules);

  display_other_modules();
});
//--></script>

";
        // line 642
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/owlcarousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 642,  1388 => 575,  1372 => 562,  1325 => 517,  1312 => 515,  1305 => 513,  1295 => 510,  1285 => 507,  1279 => 504,  1266 => 498,  1256 => 495,  1250 => 492,  1237 => 486,  1227 => 483,  1221 => 480,  1208 => 474,  1198 => 471,  1192 => 468,  1179 => 462,  1169 => 459,  1163 => 456,  1150 => 450,  1140 => 447,  1134 => 444,  1121 => 438,  1111 => 435,  1105 => 432,  1092 => 426,  1082 => 423,  1076 => 420,  1063 => 414,  1053 => 411,  1047 => 408,  1034 => 402,  1024 => 399,  1018 => 396,  1005 => 390,  995 => 387,  989 => 384,  976 => 378,  966 => 375,  960 => 372,  947 => 366,  937 => 363,  931 => 360,  918 => 354,  908 => 351,  902 => 348,  889 => 342,  879 => 339,  873 => 336,  862 => 328,  856 => 327,  849 => 323,  843 => 322,  835 => 319,  826 => 313,  820 => 312,  813 => 308,  807 => 307,  801 => 304,  792 => 298,  786 => 297,  779 => 293,  773 => 292,  767 => 289,  759 => 284,  752 => 282,  744 => 277,  737 => 275,  729 => 270,  722 => 268,  714 => 263,  707 => 261,  697 => 254,  690 => 252,  682 => 247,  675 => 245,  667 => 240,  660 => 238,  652 => 233,  645 => 231,  637 => 226,  630 => 224,  622 => 219,  615 => 217,  607 => 212,  601 => 209,  596 => 207,  589 => 202,  583 => 200,  577 => 198,  575 => 197,  572 => 196,  566 => 194,  560 => 192,  558 => 191,  555 => 190,  549 => 188,  544 => 186,  540 => 185,  537 => 184,  531 => 182,  525 => 180,  523 => 179,  520 => 178,  514 => 176,  508 => 174,  506 => 173,  503 => 172,  497 => 170,  491 => 168,  489 => 167,  483 => 164,  473 => 158,  467 => 157,  459 => 155,  452 => 153,  448 => 152,  441 => 151,  439 => 150,  431 => 149,  425 => 146,  421 => 145,  418 => 144,  415 => 143,  412 => 142,  409 => 141,  406 => 140,  404 => 139,  397 => 135,  393 => 133,  384 => 131,  375 => 130,  373 => 129,  366 => 128,  364 => 127,  358 => 124,  353 => 122,  349 => 121,  346 => 120,  343 => 119,  340 => 118,  337 => 117,  334 => 116,  332 => 115,  326 => 111,  320 => 110,  312 => 108,  305 => 106,  301 => 105,  295 => 104,  287 => 103,  279 => 102,  273 => 99,  262 => 91,  257 => 89,  250 => 84,  245 => 82,  240 => 81,  235 => 79,  231 => 78,  227 => 77,  221 => 74,  213 => 69,  208 => 67,  198 => 60,  194 => 59,  190 => 58,  186 => 57,  180 => 54,  173 => 49,  158 => 45,  151 => 43,  146 => 41,  140 => 40,  134 => 36,  118 => 35,  112 => 34,  105 => 30,  98 => 26,  93 => 23,  85 => 19,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/owlcarousel.twig", "");
    }
}
