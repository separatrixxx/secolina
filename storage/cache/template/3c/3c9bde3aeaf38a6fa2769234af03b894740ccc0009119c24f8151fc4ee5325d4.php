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

/* extension/module/socnetauth2.twig */
class __TwigTemplate_8520238808028f521fc7d3cf9ac398e1647ced50368d00417d9aa4260d4b7f94 extends \Twig\Template
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
<div id=\"content\"> <!-- div id=\"content\" -->
  <div class=\"page-header\"><!-- div class=\"page-header\" -->
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
\t  
        <a href=\"javascript: \$('#stay_field').attr('value', '0'); \$('#form').submit();\" 
\t\tdata-toggle=\"tooltip\" 
\t\ttitle=\"";
        // line 9
        echo ($context["button_save_and_go"] ?? null);
        echo "\" 
\t\tclass=\"btn btn-primary\"><i class=\"fa fa-save\"></i></a>
\t\t
        <a href=\"javascript: set_tab(); \$('#stay_field').attr('value', '1'); \$('#form').submit();\" 
\t\tdata-toggle=\"tooltip\"  
\t\ttitle=\"";
        // line 14
        echo ($context["button_save_and_stay"] ?? null);
        echo "\" 
\t\tclass=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t
        <a href=\"";
        // line 17
        echo ($context["cancel"] ?? null);
        echo "\" 
\t\tdata-toggle=\"tooltip\" 
\t\ttitle=\"";
        // line 19
        echo ($context["button_cancel"] ?? null);
        echo "\" 
\t\tclass=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t  </div>
\t\t 
      <h1>";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 26
            echo "        <li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </ul>
    </div>
  </div><!-- div class=\"page-header\" -->

\t  <style>
\t  .clist 
\t  {
\t\tborder-top:  1px #ccc solid;
\t\tborder-left:  1px #ccc solid;
\t  }
\t  
\t  .clist td
\t  {
\t\tpadding: 5px;
\t\tborder-right: 1px #ccc solid;
\t\tborder-bottom: 1px #ccc solid;
\t  }
\t  
\t  .plus
\t  {
\t\tbackground: green;
\t\ttext-align: center;
\t  }
\t  
\t  .minus
\t  {
\t\tbackground: #F58C6C;
\t\ttext-align: center;
\t  }
\t  
\t  .vopros
\t  {
\t\ttext-align: center;
\t  }
\t  </style>
  <div class=\"container-fluid\"><!-- div class=\"container-fluid\" -->
  
\t";
        // line 65
        if (($context["error_warning"] ?? null)) {
            // line 66
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
\t
    ";
        }
        // line 71
        echo "\t
\t";
        // line 72
        if (($context["success"] ?? null)) {
            echo "\t
    <div class=\"alert alert-success\"><i class=\"fa fa-info-circle\"></i> ";
            // line 73
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
\t";
        }
        // line 77
        echo "
\t
    <div class=\"panel panel-default\"> <!--  class=\"panel panel-default\" -->
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 81
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\"> <!--  class=\"panel-body\" -->
\t  
\t<ul class=\"nav nav-tabs\">
\t
            <li class=\"active\" style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-general\" data-toggle=\"tab\" id=\"link-tab-general\" >";
        // line 88
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-design\" data-toggle=\"tab\" id=\"link-tab-design\" >";
        // line 90
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-vkontakte\" data-toggle=\"tab\" id=\"link-tab-vkontakte\" >";
        // line 92
        echo ($context["tab_vkontakte"] ?? null);
        echo "</a></li>
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-facebook\" data-toggle=\"tab\" id=\"link-tab-facebook\" >";
        // line 94
        echo ($context["tab_facebook"] ?? null);
        echo "</a></li>
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-twitter\" data-toggle=\"tab\" id=\"link-tab-twitter\" >";
        // line 96
        echo ($context["tab_twitter"] ?? null);
        echo "</a></li>
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-odnoklassniki\" data-toggle=\"tab\" id=\"link-tab-odnoklassniki\" >";
        // line 98
        echo ($context["tab_odnoklassniki"] ?? null);
        echo "</a></li>
\t\t\t
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-gmail\" data-toggle=\"tab\" id=\"link-tab-gmail\" >";
        // line 101
        echo ($context["tab_gmail"] ?? null);
        echo "</a></li>
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-mailru\" data-toggle=\"tab\" id=\"link-tab-mailru\" >";
        // line 103
        echo ($context["tab_mailru"] ?? null);
        echo "</a></li>
\t\t\t
\t\t\t <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-yandex\" data-toggle=\"tab\" id=\"link-tab-yandex\" >";
        // line 106
        echo ($context["tab_yandex"] ?? null);
        echo "</a></li>
             <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-steam\" data-toggle=\"tab\" id=\"link-tab-steam\" >";
        // line 108
        echo ($context["tab_steam"] ?? null);
        echo "</a></li>
            
\t\t\t<li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-telegram\" data-toggle=\"tab\" id=\"link-tab-telegram\" >";
        // line 111
        echo ($context["tab_telegram"] ?? null);
        echo "</a></li>
\t\t\t
\t\t\t<li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-tinkoff\" data-toggle=\"tab\" id=\"link-tab-tinkoff\"  class=\"nav-link\">";
        // line 114
        echo ($context["tab_tinkoff"] ?? null);
        echo "</a></li>
\t\t\t
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-dobor\" data-toggle=\"tab\" id=\"link-tab-dobor\" >";
        // line 117
        echo ($context["tab_dobor"] ?? null);
        echo "</a></li>
\t\t\t
            <li id=\"link-tab-widget\" 
\t\t\t><a href=\"#tab-widget\" data-toggle=\"tab\">";
        // line 120
        echo ($context["tab_widget"] ?? null);
        echo "</a></li>
            
            <li style=\"cursor: pointer;\" 
\t\t\t><a href=\"#tab-support\" data-toggle=\"tab\" id=\"link-tab-support\" >";
        // line 123
        echo ($context["tab_support"] ?? null);
        echo "</a></li>
\t\t\t
      </ul>

    <form action=\"";
        // line 127
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\"
\t class=\"form-horizontal\"
\t>
\t<input type=\"hidden\" name=\"stay\" id=\"stay_field\" value=\"1\">
\t\t<input type=\"hidden\" id=\"hiddentab\" name=\"tab\" value=\"";
        // line 131
        echo ($context["tab"] ?? null);
        echo "\">
\t  
\t\t<input type=\"hidden\" id=\"hiddentab2\" name=\"tab2\" value=\"";
        // line 133
        echo ($context["tab2"] ?? null);
        echo "\">
\t  
<div class=\"tab-content\"><!--  class=\"tab-content\" -->
\t  
\t\t
      
\t  
\t  <div id=\"tab-general\" class=\"tab-pane active\">
\t  
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 144
        echo ($context["entry_version"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\" style=\"padding-top: 9px;\">
\t\t\t\t";
        // line 147
        echo ($context["version"] ?? null);
        echo "
\t\t\t</div>
\t\t\t
        </div>
\t  
\t  
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 155
        echo ($context["entry_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_status\" class=\"form-control\" >
\t\t\t\t\t\t\t
\t\t\t\t\t";
        // line 160
        if (($context["socnetauth2_status"] ?? null)) {
            echo "\t
\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 161
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 162
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 164
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 165
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 167
        echo "                </select>
\t\t\t</div>
\t\t\t
        </div>
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 174
        echo ($context["entry_protokol"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_protokol\" class=\"form-control\">
\t\t\t\t\t<option value=\"http\"
\t\t\t\t\t";
        // line 179
        if ((($context["socnetauth2_protokol"] ?? null) == "http")) {
            echo "  selected ";
        }
        // line 180
        echo "\t\t\t\t\t>http://</option>
\t\t\t\t\t<option value=\"https\"
\t\t\t\t\t";
        // line 182
        if ((($context["socnetauth2_protokol"] ?? null) == "https")) {
            echo "  selected ";
        }
        // line 183
        echo "\t\t\t\t\t>https://</option>
\t\t\t\t\t<option value=\"detect\"
\t\t\t\t\t";
        // line 185
        if ((($context["socnetauth2_protokol"] ?? null) == "detect")) {
            echo "  selected ";
        }
        // line 186
        echo "\t\t\t\t\t>";
        echo ($context["entry_protokol_detect"] ?? null);
        echo "</option> 
\t\t\t\t</select>
\t\t\t</div>
        </div>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 192
        echo ($context["entry_save_to_addr"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_save_to_addr\" class=\"form-control\">
\t\t\t\t\t<option value=\"customer_only\"
\t\t\t\t\t";
        // line 197
        if ((($context["socnetauth2_save_to_addr"] ?? null) == "customer_only")) {
            echo "   selected ";
        }
        // line 198
        echo "\t\t\t\t\t>";
        echo ($context["text_customer_only"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"customer_addr\"
\t\t\t\t\t";
        // line 200
        if ((($context["socnetauth2_save_to_addr"] ?? null) == "customer_addr")) {
            echo "   selected ";
        }
        // line 201
        echo "\t\t\t\t\t>";
        echo ($context["text_customer_addr"] ?? null);
        echo "</option>
\t\t\t\t</select>
\t\t\t</div>
        </div>
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 208
        echo ($context["entry_save_fullname_to_firstname"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_save_fullname_to_firstname\" class=\"form-control\"> 
\t\t\t\t  ";
        // line 212
        if (($context["socnetauth2_save_fullname_to_firstname"] ?? null)) {
            // line 213
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 214
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 216
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 217
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 219
        echo "\t\t\t\t</select>
\t\t\t</div>
        </div>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 224
        echo ($context["entry_default_email"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"socnetauth2_default_email\" class=\"form-control\"  
\t\t\t\t\tvalue=\"";
        // line 228
        echo ($context["socnetauth2_default_email"] ?? null);
        echo "\" />
\t\t\t\t<div>";
        // line 229
        echo ($context["entry_default_email_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t 
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 235
        echo ($context["entry_default_country"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_default_country\" class=\"form-control\">
\t\t\t\t\t<option value=\"0\">";
        // line 239
        echo ($context["text_no_country"] ?? null);
        echo "</option>
\t\t\t\t\t";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 241
            echo "\t\t\t\t\t";
            if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["country"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["country_id"] ?? null) : null) == ($context["socnetauth2_default_country"] ?? null))) {
                // line 242
                echo "\t\t\t\t\t<option value=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["country"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["country_id"] ?? null) : null);
                echo "\" selected=\"selected\"
\t\t\t\t\t\t>";
                // line 243
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["country"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 245
                echo "\t\t\t\t\t<option value=\"";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["country"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["country_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["country"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t";
            }
            // line 247
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "\t\t\t\t</select>
\t\t\t\t";
        // line 249
        echo ($context["entry_default_country_notice"] ?? null);
        echo "
\t\t\t\t
\t\t\t</div>
        </div> 
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 256
        echo ($context["entry_shop_folder"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t";
        // line 259
        if (($context["stores"] ?? null)) {
            echo " 
\t\t\t\t\t<style>
\t\t\t\t\t.text-left { padding: 5px; }
\t\t\t\t\t</style>
\t\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-left\"><b>";
            // line 265
            echo ($context["entry_shop_folders_col_storename"] ?? null);
            echo "</b></td>
\t\t\t\t\t\t<td class=\"text-left\"><b>";
            // line 266
            echo ($context["entry_shop_folders_col_storefolder"] ?? null);
            echo "</b></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-left\">";
            // line 269
            echo ($context["config_name"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" name=\"socnetauth2_shop_folder\" class=\"form-control\"  
\t\t\t\t\t\t\t\tvalue=\"";
            // line 271
            echo ($context["socnetauth2_shop_folder"] ?? null);
            echo "\" /></td>
\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                echo " 
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 275
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["store"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" 
\t\t\t\t\t\t\tname=\"socnetauth2_shop_folders[";
                // line 277
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["store"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["store_id"] ?? null) : null);
                echo "]\" class=\"form-control\"  
\t\t\t\t\t\t\t\tvalue=\"";
                // line 278
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["store"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["folder"] ?? null) : null);
                echo "\" /></td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "\t\t\t\t\t</table>
\t\t\t\t";
        } else {
            // line 283
            echo "\t\t\t\t\t<input type=\"text\" name=\"socnetauth2_shop_folder\" class=\"form-control\"  
\t\t\t\t\t\t\tvalue=\"";
            // line 284
            echo ($context["socnetauth2_shop_folder"] ?? null);
            echo "\" />
\t\t\t\t";
        }
        // line 286
        echo "\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_shop_folder_in_img\" value=\"1\"
\t\t\t\tid=\"socnetauth2_shop_folder_in_img\" 
\t\t\t\t";
        // line 289
        if (($context["socnetauth2_shop_folder_in_img"] ?? null)) {
            echo " checked ";
        }
        echo " 
\t\t\t\t><label for=\"socnetauth2_shop_folder_in_img\"
\t\t\t\t>";
        // line 291
        echo ($context["entry_shop_folder_in_img"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<br>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_shop_folder_in_redirect\" value=\"1\"
\t\t\t\tid=\"socnetauth2_shop_folder_in_redirect\" 
\t\t\t\t";
        // line 296
        if (($context["socnetauth2_shop_folder_in_redirect"] ?? null)) {
            echo " checked ";
        }
        echo "  
\t\t\t\t><label for=\"socnetauth2_shop_folder_in_redirect\"
\t\t\t\t>";
        // line 298
        echo ($context["entry_shop_folder_in_redirect"] ?? null);
        echo "</label>
\t\t\t\t<br>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_shop_folder_in_url\" value=\"1\"
\t\t\t\tid=\"socnetauth2_shop_folder_in_url\" 
\t\t\t\t";
        // line 303
        if (($context["socnetauth2_shop_folder_in_url"] ?? null)) {
            echo " checked ";
        }
        echo "   
\t\t\t\t><label for=\"socnetauth2_shop_folder_in_url\"
\t\t\t\t>";
        // line 305
        echo ($context["entry_shop_folder_in_url"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 313
        echo ($context["entry_redirect_url"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<table style=\"width: 100%;\">  
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"width: 20%;\">";
        // line 318
        echo ($context["entry_redirect_url_account"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td style=\"width: 40%;\"><select  class=\"form-control\" name=\"socnetauth2_redirect_url_account\"
\t\t\t\t\t\t\tonchange=\"if( this.value == 'set' ) \$('#block_redirect_url_account').show(); else \$('#block_redirect_url_account').hide();\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<option value=\"default\"
\t\t\t\t\t\t\t\t\t";
        // line 323
        if ((($context["socnetauth2_redirect_url_account"] ?? null) == "default")) {
            echo " selected ";
        }
        // line 324
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["entry_redirect_url_account_default"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"set\"
\t\t\t\t\t\t\t\t\t";
        // line 326
        if ((($context["socnetauth2_redirect_url_account"] ?? null) == "set")) {
            echo " selected ";
        }
        // line 327
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["entry_redirect_url_set"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 10px;\">
\t\t\t\t\t\t\t<div id=\"block_redirect_url_account\" ";
        // line 331
        if ((($context["socnetauth2_redirect_url_account"] ?? null) == "default")) {
            echo "style=\"display: none;\"";
        }
        echo ">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"socnetauth2_redirect_url_account_set\" class=\"form-control\"  
\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 334
        echo ($context["socnetauth2_redirect_url_account_set"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 339
        echo ($context["entry_redirect_url_checkout"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td><select  class=\"form-control\" name=\"socnetauth2_redirect_url_checkout\"
\t\t\t\t\t\t\tonchange=\"if( this.value == 'set' ) \$('#block_redirect_url_checkout').show(); else \$('#block_redirect_url_checkout').hide();\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<option value=\"default\"
\t\t\t\t\t\t\t\t\t";
        // line 344
        if ((($context["socnetauth2_redirect_url_checkout"] ?? null) == "default")) {
            echo " selected ";
        }
        // line 345
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["entry_redirect_url_checkout_default"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"set\"
\t\t\t\t\t\t\t\t\t";
        // line 347
        if ((($context["socnetauth2_redirect_url_checkout"] ?? null) == "set")) {
            echo " selected ";
        }
        // line 348
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["entry_redirect_url_set"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 10px;\">
\t\t\t\t\t\t\t<div id=\"block_redirect_url_checkout\" ";
        // line 352
        if ((($context["socnetauth2_redirect_url_checkout"] ?? null) == "default")) {
            echo "style=\"display: none;\"";
        }
        echo ">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"socnetauth2_redirect_url_checkout_set\" class=\"form-control\"  
\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 355
        echo ($context["socnetauth2_redirect_url_checkout_set"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 360
        echo ($context["entry_redirect_url_reg"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td><select  class=\"form-control\" name=\"socnetauth2_redirect_url_reg\"
\t\t\t\t\t\t\tonchange=\"if( this.value == 'set' ) \$('#block_redirect_url_reg').show(); else \$('#block_redirect_url_reg').hide();\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<option value=\"default\"
\t\t\t\t\t\t\t\t\t";
        // line 365
        if ((($context["socnetauth2_redirect_url_reg"] ?? null) == "default")) {
            echo " selected ";
        }
        // line 366
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["entry_redirect_url_reg_default"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"set\"
\t\t\t\t\t\t\t\t\t";
        // line 368
        if ((($context["socnetauth2_redirect_url_reg"] ?? null) == "set")) {
            echo " selected ";
        }
        // line 369
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["entry_redirect_url_set"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 10px;\">
\t\t\t\t\t\t\t<div id=\"block_redirect_url_reg\" ";
        // line 373
        if ((($context["socnetauth2_redirect_url_reg"] ?? null) == "default")) {
            echo "style=\"display: none;\"";
        }
        echo ">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"socnetauth2_redirect_url_reg_set\" class=\"form-control\"  
\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 376
        echo ($context["socnetauth2_redirect_url_reg_set"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t
\t\t\t\t
\t\t\t</div>
        </div>
\t\t
\t\t
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 389
        echo ($context["entry_add_param"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_add_param\" class=\"form-control\" > 
\t\t\t\t  ";
        // line 393
        if (($context["socnetauth2_add_param"] ?? null)) {
            // line 394
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 395
            echo ($context["text_disabled"] ?? null);
            echo "</option> 
\t\t\t\t  ";
        } else {
            // line 397
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 398
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 400
        echo "                </select>
\t\t\t\t<div>";
        // line 401
        echo ($context["entry_add_param_notice"] ?? null);
        echo "</div>
\t\t\t</div> 
        </div>
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 407
        echo ($context["entry_email_auth"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<table width=100%>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"padding-right: 10px;\">
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_email_auth\" value=\"none\" 
\t\t\t\t\t   id=\"socnetauth2_email_auth_none\"
\t\t\t\t\t\t\t";
        // line 415
        if ((($context["socnetauth2_email_auth"] ?? null) == "none")) {
            echo "  checked ";
        }
        // line 416
        echo "\t\t\t\t\t   >
\t\t\t\t\t </td>
\t\t\t\t\t <td>
\t\t\t\t\t\t<label for=\"socnetauth2_email_auth_none\">
\t\t\t\t\t\t\t";
        // line 420
        echo ($context["entry_email_auth_none"] ?? null);
        echo "
\t\t\t\t\t   </label>
\t\t\t\t\t </td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"padding-right: 10px;\">
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_email_auth\" value=\"confirm\" 
\t\t\t\t\t   id=\"socnetauth2_email_auth_confirm\"
\t\t\t\t\t\t\t";
        // line 428
        if ((($context["socnetauth2_email_auth"] ?? null) == "confirm")) {
            echo "  checked ";
        }
        // line 429
        echo "\t\t\t\t\t   >
\t\t\t\t\t </td>
\t\t\t\t\t <td>
\t\t\t\t\t   <label for=\"socnetauth2_email_auth_confirm\">
\t\t\t\t\t\t";
        // line 433
        echo ($context["entry_email_auth_confirm"] ?? null);
        echo "
\t\t\t\t\t   </label>
\t\t\t\t\t </td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"padding-right: 10px;\">
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_email_auth\" value=\"noconfirm\" 
\t\t\t\t\t   id=\"socnetauth2_email_auth_noconfirm\"
\t\t\t\t\t\t\t";
        // line 441
        if ((($context["socnetauth2_email_auth"] ?? null) == "noconfirm")) {
            echo " checked ";
        }
        // line 442
        echo "\t\t\t\t\t   >
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t   <label for=\"socnetauth2_email_auth_noconfirm\">
\t\t\t\t\t\t";
        // line 446
        echo ($context["entry_email_auth_noconfirm"] ?? null);
        echo "
\t\t\t\t\t   </label>
\t\t\t\t\t</td>
\t\t\t\t </tr>
\t\t\t\t </table>
\t\t\t</div>
        </div>
\t\t 
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 456
        echo ($context["entry_show_source_in_order"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_show_source_in_order\" class=\"form-control\" >
                  ";
        // line 460
        if (($context["socnetauth2_show_source_in_order"] ?? null)) {
            // line 461
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 462
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 464
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 465
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 467
        echo "                </select>
\t\t\t</div>
        </div>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 472
        echo ($context["entry_show_source_in_customer"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_show_source_in_customer\" class=\"form-control\" >
                ";
        // line 476
        if (($context["socnetauth2_show_source_in_customer"] ?? null)) {
            // line 477
            echo "\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 478
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 480
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 481
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 483
        echo "                </select>
\t\t\t</div>
        </div> 
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 488
        echo ($context["entry_addpass"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_addpass\" class=\"form-control\" >
                 ";
        // line 492
        if (($context["socnetauth2_addpass"] ?? null)) {
            // line 493
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 494
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 496
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 497
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 499
        echo "                </select>
\t\t\t\t<p>";
        // line 500
        echo ($context["entry_addpass_notice"] ?? null);
        echo "</p>
\t\t\t</div>
        </div>
\t\t";
        // line 504
        echo "\t\t\t
\t\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 508
        echo ($context["entry_newcustomer_mail_type"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_newcustomer_mail_type\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'custom' ) \$('#block_newcustomer_mail_custom').show(); else \$('#block_newcustomer_mail_custom').hide();\"
\t\t\t\t>
\t\t\t\t\t";
        // line 514
        if ((($context["socnetauth2_newcustomer_mail_type"] ?? null) == "common")) {
            echo " 
\t\t\t\t\t<option value=\"common\" selected=\"selected\">";
            // line 515
            echo ($context["entry_newcustomer_mail_type_common"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"custom\" >";
            // line 516
            echo ($context["entry_newcustomer_mail_type_custom"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 518
            echo "\t\t\t\t\t<option value=\"common\">";
            echo ($context["entry_newcustomer_mail_type_common"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"custom\" selected=\"selected\" >";
            // line 519
            echo ($context["entry_newcustomer_mail_type_custom"] ?? null);
            echo "</option>
                  ";
        }
        // line 521
        echo "                </select> 
\t\t\t</div>
        </div>
\t\t
\t\t<div id=\"block_newcustomer_mail_custom\" 
\t\t";
        // line 526
        if ((($context["socnetauth2_newcustomer_mail_type"] ?? null) == "custom")) {
            echo " ";
        } else {
            echo " style=\"display: none;\" ";
        }
        // line 527
        echo "\t\t>
\t\t\t <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t";
        // line 530
        echo ($context["entry_newcustomer_mail_subject"] ?? null);
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\t\t\tname=\"socnetauth2_newcustomer_mail_subject[";
            // line 537
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["language"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\t\t\tvalue=\"";
            // line 538
            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["socnetauth2_newcustomer_mail_subject"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[(($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img  src=\"";
            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["language"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["language"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["name"] ?? null) : null);
            echo "\"  />
\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 541
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t\t <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t";
        // line 546
        echo ($context["entry_newcustomer_mail_text"] ?? null);
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t";
        // line 549
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "\t
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<textarea  class=\"form-control\" cols=\"70\" rows=\"7\"
\t\t\t\t\t\t\t\tname=\"socnetauth2_newcustomer_mail_text[";
            // line 552
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["language"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["language_id"] ?? null) : null);
            echo "]\"
\t\t\t\t\t\t\t\t>";
            // line 553
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["socnetauth2_newcustomer_mail_text"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[(($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["language"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["language_id"] ?? null) : null)] ?? null) : null);
            echo "</textarea>&nbsp;<img  src=\"";
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["language"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
            echo "\"  />
\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 556
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t 
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 562
        echo ($context["entry_vkontakte_retargeting"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\" style=\"padding-top: 9px;\">
\t\t\t\t<a href=\"";
        // line 565
        echo ($context["vkontakte_retargeting"] ?? null);
        echo "\">";
        echo ($context["text_download_link"] ?? null);
        echo "</a>
\t\t\t</div>
        </div>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 570
        echo ($context["entry_facebook_retargeting"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\" style=\"padding-top: 9px;\">
\t\t\t\t<a href=\"";
        // line 573
        echo ($context["facebook_retargeting"] ?? null);
        echo "\">";
        echo ($context["text_download_link"] ?? null);
        echo "</a>
\t\t\t</div>
        </div>
\t\t
\t  </div>
\t  
\t  
\t  
\t  <div id=\"tab-vkontakte\" class=\"tab-pane\">
\t  
\t  <p>Инструкция по интергации с ВКонтакте по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/vkontakte\" target=_blank
\t\t>https://ocart.ru/socnetauth2/vkontakte</a>
\t\t</p>
\t  
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 590
        echo ($context["entry_vkontakte_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_vkontakte_status\" class=\"form-control\">
                 ";
        // line 594
        if (($context["socnetauth2_vkontakte_status"] ?? null)) {
            // line 595
            echo "\t\t\t\t <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 596
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 598
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 599
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 601
        echo "                </select>
\t\t\t</div>
        </div> 
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 606
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_vkontakte_debug\" class=\"form-control\">
                  ";
        // line 610
        if (($context["socnetauth2_vkontakte_debug"] ?? null)) {
            // line 611
            echo "\t\t\t\t <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 612
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 614
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 615
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 617
        echo "                </select>
\t\t\t\t<div>";
        // line 618
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div> 
\t\t
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 625
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 628
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 629
            echo "\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_vkontakte_title[";
            // line 631
            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["language"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 632
            echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["socnetauth2_vkontakte_title"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[(($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["language"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 633
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["language"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["language"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 641
        echo ($context["entry_vkontakte_agent"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_vkontakte_agent\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'extension' ) { \$('#block_vkontakte_agent_extension').show(); } else { \$('#block_vkontakte_agent_extension').hide(); }\"
\t\t\t\t>
\t\t\t\t\t<option value=\"extension\" 
\t\t\t\t\t";
        // line 648
        if ((($context["socnetauth2_vkontakte_agent"] ?? null) == "extension")) {
            // line 649
            echo "\t\t\t\t\t\tselected=\"extension\"
\t\t\t\t\t  ";
        }
        // line 651
        echo "\t\t\t\t\t>";
        echo ($context["entry_vkontakte_agent_extension"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"loginza\" 
\t\t\t\t\t";
        // line 653
        if ((($context["socnetauth2_vkontakte_agent"] ?? null) == "loginza")) {
            // line 654
            echo "\t\t\t\t\t\tselected=\"loginza\"
\t\t\t\t\t  ";
        }
        // line 656
        echo "\t\t\t\t\t>";
        echo ($context["entry_vkontakte_agent_loginza"] ?? null);
        echo "</option>
                </select>
\t\t\t\t<div>";
        // line 658
        echo ($context["entry_vkontakte_agent_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 664
        echo ($context["entry_vkontakte_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_vkontakte_customer_group_id\" class=\"form-control\" >
                    ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 669
            echo "                    ";
            if (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["customer_group"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["customer_group_id"] ?? null) : null) == ($context["socnetauth2_vkontakte_customer_group_id"] ?? null))) {
                // line 670
                echo "                    <option value=\"";
                echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["customer_group"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["customer_group"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 672
                echo "                    <option value=\"";
                echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["customer_group"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["customer_group"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 674
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t
\t\t<div id=\"block_vkontakte_agent_extension\"
\t\t";
        // line 680
        if ((($context["socnetauth2_vkontakte_agent"] ?? null) == "loginza")) {
            // line 681
            echo "\t\tstyle=\"display: none;\" ";
        }
        // line 682
        echo "\t\t> 
\t\t
\t\t";
        // line 685
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 687
        echo ($context["entry_redirect_url_vkontakte"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t ";
        // line 692
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 693
            echo "\t\t\t\t\t<td width=20%>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_vkontakte_redirect_type\" value=\"new\"
\t\t\t\t\t\t\t";
            // line 695
            if ((($context["socnetauth2_vkontakte_redirect_type"] ?? null) == "new")) {
                echo " checked ";
            }
            // line 696
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_vkontakte_redirect_type_new\"
\t\t\t\t\t\t><label for=\"socnetauth2_vkontakte_redirect_type_new\"
\t\t\t\t\t\t>";
            // line 698
            echo ($context["entry_redirect_url_new"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t ";
        }
        // line 701
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 702
        if ( !($context["is_show_old_redirect"] ?? null)) {
            // line 703
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"socnetauth2_vkontakte_redirect_type\" value=\"new\"  >
\t\t\t\t\t\t";
        }
        // line 705
        echo "\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 706
        echo ($context["vkontakte_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 708
        echo ($context["entry_redirect_url_vkontakte_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 711
        echo ($context["vkontakte_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 712
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        // line 716
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 717
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_vkontakte_redirect_type\" value=\"old\"
\t\t\t\t\t\t\t";
            // line 720
            if ((($context["socnetauth2_vkontakte_redirect_type"] ?? null) == "old")) {
                echo " checked ";
            }
            // line 721
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_vkontakte_redirect_type_old\"
\t\t\t\t\t\t><label for=\"socnetauth2_vkontakte_redirect_type_old\"
\t\t\t\t\t\t>";
            // line 723
            echo ($context["entry_redirect_url_old"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 727
            echo ($context["vkontakte_redirect_url_old"] ?? null);
            echo "\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t</td>
\t\t\t\t\t<td> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
            // line 731
            echo ($context["vkontakte_redirect_url_old"] ?? null);
            echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
            // line 732
            echo ($context["text_copy"] ?? null);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        }
        // line 737
        echo "\t\t\t\t</table> 
\t\t\t</div>
        </div>
\t\t
\t\t";
        // line 742
        echo "\t\t
\t\t
\t\t<table id=\"vkontakte_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 747
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 748
        echo ($context["entry_vkontakte_appid"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 749
        echo ($context["entry_vkontakte_appsecret"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"vkontakte_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 756
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_vkontakte_appid\"  
\t\t\t\tvalue=\"";
        // line 760
        echo ($context["socnetauth2_vkontakte_appid"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_vkontakte_appsecret\"  
\t\t\t\tvalue=\"";
        // line 765
        echo ($context["socnetauth2_vkontakte_appsecret"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          ";
        // line 769
        $context["vkontakte_req_row"] = 0;
        // line 770
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_vkontakte_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 771
            echo "          <tbody id=\"vkontakte_req-row";
            echo ($context["vkontakte_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_vkontakte_req[";
            // line 774
            echo ($context["vkontakte_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 775
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["req"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_vkontakte_req[";
            // line 779
            echo ($context["vkontakte_req_row"] ?? null);
            echo "][appid]\"  
\t\t\t\tvalue=\"";
            // line 780
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["req"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["appid"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_vkontakte_req[";
            // line 784
            echo ($context["vkontakte_req_row"] ?? null);
            echo "][appsecret]\"  
\t\t\t\tvalue=\"";
            // line 785
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["req"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["appsecret"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#vkontakte_req-row";
            // line 787
            echo ($context["vkontakte_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
          ";
            // line 790
            $context["vkontakte_req_row"] = (($context["vkontakte_req_row"] ?? null) + 1);
            // line 791
            echo "\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 792
        echo "          <tfoot>
            <tr>
              <td colspan=\"3\"></td>
              <td class=\"left\"><a onclick=\"addVkontakteReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 796
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar vkontakte_req_row = ";
        // line 801
        echo ($context["vkontakte_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addVkontakteReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"vkontakte_req-row'+vkontakte_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_vkontakte_req['+vkontakte_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_vkontakte_req['+vkontakte_req_row+'][appid]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_vkontakte_req['+vkontakte_req_row+'][appsecret]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#vkontakte_req-row'+vkontakte_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 820
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#vkontakte_req tfoot').before(html);
\t\t\t
\t\t\tvkontakte_req_row++;
\t\t}
\t\t</script>
\t\t</div>
\t\t
\t\t
\t  </div>
\t  <div id=\"tab-facebook\" class=\"tab-pane\">
\t  <p>Инструкция по интергации с Facebook по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/facebook\" target=_blank
\t\t>https://ocart.ru/socnetauth2/facebook</a>
\t\t</p>
\t  
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 842
        echo ($context["entry_facebook_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_facebook_status\" class=\"form-control\">
                    ";
        // line 846
        if (($context["socnetauth2_facebook_status"] ?? null)) {
            // line 847
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 848
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 850
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 851
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 853
        echo "                </select>
\t\t\t</div>
        </div>
\t\t";
        // line 857
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 859
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_facebook_debug\" class=\"form-control\"> 
                    ";
        // line 863
        if (($context["socnetauth2_facebook_debug"] ?? null)) {
            // line 864
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 865
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 867
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 868
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 870
        echo "                </select>
\t\t\t\t<div>";
        // line 871
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t";
        // line 875
        echo "\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 878
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 881
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 882
            echo "\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_facebook_title[";
            // line 884
            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["language"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 885
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["socnetauth2_facebook_title"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[(($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["language"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 886
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["language"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["language"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 889
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 895
        echo ($context["entry_facebook_agent"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_facebook_agent\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'extension' ) { \$('#block_facebook_agent_extension').show(); \$('#block_facebook_agent_notice').show(); } else { \$('#block_facebook_agent_extension').hide(); \$('#block_facebook_agent_notice').hide(); }\"
\t\t\t\t>
\t\t\t\t\t<option value=\"extension\" 
\t\t\t\t\t  ";
        // line 902
        if ((($context["socnetauth2_facebook_agent"] ?? null) == "extension")) {
            // line 903
            echo "\t\t\t\t\t\tselected=\"extension\"
\t\t\t\t\t  ";
        }
        // line 905
        echo "\t\t\t\t\t>";
        echo ($context["entry_facebook_agent_extension"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"loginza\" 
\t\t\t\t\t  ";
        // line 907
        if ((($context["socnetauth2_facebook_agent"] ?? null) == "loginza")) {
            // line 908
            echo "\t\t\t\t\t\tselected=\"loginza\"
\t\t\t\t\t  ";
        }
        // line 910
        echo "\t\t\t\t\t>";
        echo ($context["entry_facebook_agent_loginza"] ?? null);
        echo "</option>
                </select>
\t\t\t\t<div
\t\t\t\tid=\"block_facebook_agent_notice\"
\t\t\t\t\t  ";
        // line 914
        if ((($context["socnetauth2_facebook_agent"] ?? null) == "loginza")) {
            // line 915
            echo "\t\tstyle=\"display: none;\" ";
        }
        // line 916
        echo "\t\t\t\t>";
        echo ($context["entry_facebook_agent_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t 
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 922
        echo ($context["entry_facebook_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_facebook_customer_group_id\" class=\"form-control\" >
                    ";
        // line 926
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 927
            echo "                    ";
            if (((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["customer_group"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["customer_group_id"] ?? null) : null) == ($context["socnetauth2_facebook_customer_group_id"] ?? null))) {
                // line 928
                echo "                    <option value=\"";
                echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["customer_group"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["customer_group"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 930
                echo "                    <option value=\"";
                echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["customer_group"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["customer_group"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 932
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 933
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t\t
\t\t<div id=\"block_facebook_agent_extension\"
\t\t";
        // line 938
        if ((($context["socnetauth2_facebook_agent"] ?? null) == "loginza")) {
            echo " style=\"display: none;\" ";
        }
        // line 939
        echo "\t\t> 
\t\t
\t\t";
        // line 941
        echo " 
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 944
        echo ($context["entry_redirect_url_facebook"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t ";
        // line 949
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 950
            echo "\t\t\t\t\t<td width=20%>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_facebook_redirect_type\" value=\"new\"
\t\t\t\t\t\t\t";
            // line 952
            if ((($context["socnetauth2_facebook_redirect_type"] ?? null) == "new")) {
                echo " checked ";
            }
            // line 953
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_facebook_redirect_type_new\"
\t\t\t\t\t\t><label for=\"socnetauth2_facebook_redirect_type_new\"
\t\t\t\t\t\t>";
            // line 955
            echo ($context["entry_redirect_url_new"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t ";
        }
        // line 958
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 959
        if ( !($context["is_show_old_redirect"] ?? null)) {
            // line 960
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"socnetauth2_facebook_redirect_type\" value=\"new\"  >
\t\t\t\t\t\t";
        }
        // line 962
        echo "\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 963
        echo ($context["facebook_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 965
        echo ($context["entry_redirect_url_facebook_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 968
        echo ($context["facebook_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 969
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        // line 973
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 974
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_facebook_redirect_type\" value=\"old\"
\t\t\t\t\t\t\t";
            // line 977
            if ((($context["socnetauth2_facebook_redirect_type"] ?? null) == "old")) {
                echo " checked ";
            }
            // line 978
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_facebook_redirect_type_old\"
\t\t\t\t\t\t><label for=\"socnetauth2_facebook_redirect_type_old\"
\t\t\t\t\t\t>";
            // line 980
            echo ($context["entry_redirect_url_old"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 984
            echo ($context["facebook_redirect_url_old"] ?? null);
            echo "\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t</td>
\t\t\t\t\t<td> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
            // line 988
            echo ($context["facebook_redirect_url_old"] ?? null);
            echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
            // line 989
            echo ($context["text_copy"] ?? null);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        }
        // line 994
        echo "\t\t\t\t</table> 
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t";
        // line 1000
        echo "\t\t
\t\t<table id=\"facebook_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 1004
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1005
        echo ($context["entry_facebook_appid"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1006
        echo ($context["entry_facebook_appsecret"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"facebook_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 1013
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_facebook_appid\"  
\t\t\t\tvalue=\"";
        // line 1017
        echo ($context["socnetauth2_facebook_appid"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_facebook_appsecret\"  
\t\t\t\tvalue=\"";
        // line 1022
        echo ($context["socnetauth2_facebook_appsecret"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          ";
        // line 1026
        $context["facebook_req_row"] = 0;
        // line 1027
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_facebook_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 1028
            echo "          <tbody id=\"facebook_req-row";
            echo ($context["facebook_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_facebook_req[";
            // line 1031
            echo ($context["facebook_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 1032
            echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["req"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_facebook_req[";
            // line 1036
            echo ($context["facebook_req_row"] ?? null);
            echo "][appid]\"  
\t\t\t\tvalue=\"";
            // line 1037
            echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["req"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["appid"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_facebook_req[";
            // line 1041
            echo ($context["facebook_req_row"] ?? null);
            echo "][appsecret]\"  
\t\t\t\tvalue=\"";
            // line 1042
            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["req"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["appsecret"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#facebook_req-row";
            // line 1044
            echo ($context["facebook_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
          ";
            // line 1047
            $context["facebook_req_row"] = (($context["facebook_req_row"] ?? null) + 1);
            // line 1048
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1049
        echo "          <tfoot>
            <tr>
              <td colspan=\"3\"></td>
              <td class=\"left\"><a onclick=\"addfacebookReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 1053
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar facebook_req_row = ";
        // line 1058
        echo ($context["facebook_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addfacebookReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"facebook_req-row'+facebook_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_facebook_req['+facebook_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_facebook_req['+facebook_req_row+'][appid]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_facebook_req['+facebook_req_row+'][appsecret]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#facebook_req-row'+facebook_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 1077
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#facebook_req tfoot').before(html);
\t\t\t
\t\t\tfacebook_req_row++;
\t\t}
\t\t</script>
\t\t</div>
\t  </div>
\t  <div id=\"tab-twitter\" class=\"tab-pane\">
\t  <p>Инструкция по интергации с Twitter по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/twitter\" target=_blank
\t\t>https://ocart.ru/socnetauth2/twitter</a>
\t\t</p>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1096
        echo ($context["entry_twitter_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t
\t\t\t\t<select name=\"socnetauth2_twitter_status\" class=\"form-control\">
                    ";
        // line 1101
        if (($context["socnetauth2_twitter_status"] ?? null)) {
            // line 1102
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 1103
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 1105
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 1106
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 1108
        echo "                </select>
\t\t\t</div>
        </div>
\t\t";
        // line 1112
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1114
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_twitter_debug\" class=\"form-control\">
                    ";
        // line 1118
        if (($context["socnetauth2_twitter_debug"] ?? null)) {
            // line 1119
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 1120
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 1122
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 1123
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 1125
        echo "                </select>
\t\t\t\t<div>";
        // line 1126
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t";
        // line 1130
        echo "\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1133
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 1136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1137
            echo "\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_twitter_title[";
            // line 1139
            echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["language"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 1140
            echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["socnetauth2_twitter_title"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[(($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["language"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 1141
            echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["language"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["language"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1144
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1150
        echo ($context["entry_twitter_agent"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_twitter_agent\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'extension' ) { \$('#block_twitter_agent_extension').show(); \$('#block_twitter_agent_notice').show(); } else { \$('#block_twitter_agent_extension').hide(); \$('#block_twitter_agent_notice').hide(); }\"
\t\t\t\t>
\t\t\t\t\t<option value=\"extension\" 
\t\t\t\t\t";
        // line 1157
        if ((($context["socnetauth2_twitter_agent"] ?? null) == "extension")) {
            // line 1158
            echo "\t\t\t\t\t\tselected=\"extension\"
\t\t\t\t\t  ";
        }
        // line 1160
        echo "\t\t\t\t\t>";
        echo ($context["entry_twitter_agent_extension"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"loginza\" 
\t\t\t\t\t";
        // line 1162
        if ((($context["socnetauth2_twitter_agent"] ?? null) == "loginza")) {
            // line 1163
            echo "\t\t\t\t\t\tselected=\"loginza\"
\t\t\t\t\t  ";
        }
        // line 1165
        echo "\t\t\t\t\t>";
        echo ($context["entry_twitter_agent_loginza"] ?? null);
        echo "</option>
                </select>
\t\t\t\t<div
\t\t\t\tid=\"block_twitter_agent_notice\"
\t\t\t\t\t";
        // line 1169
        if ((($context["socnetauth2_twitter_agent"] ?? null) == "loginza")) {
            // line 1170
            echo "\t\t\t\t\tstyle=\"display: none;\" ";
        }
        // line 1171
        echo "\t\t\t\t>";
        echo ($context["entry_twitter_agent_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div> 
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1176
        echo ($context["entry_twitter_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_twitter_customer_group_id\" class=\"form-control\" >
                    ";
        // line 1180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1181
            echo "                    ";
            if (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["customer_group"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["customer_group_id"] ?? null) : null) == ($context["socnetauth2_twitter_customer_group_id"] ?? null))) {
                // line 1182
                echo "                    <option value=\"";
                echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["customer_group"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["customer_group"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 1184
                echo "                    <option value=\"";
                echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["customer_group"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["customer_group"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 1186
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1187
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t
\t\t<div id=\"block_twitter_agent_extension\"
\t\t";
        // line 1192
        if ((($context["socnetauth2_twitter_agent"] ?? null) == "loginza")) {
            echo " style=\"display: none;\" ";
        }
        // line 1193
        echo "\t\t> 
\t\t
\t\t";
        // line 1196
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1198
        echo ($context["entry_redirect_url_twitter"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t ";
        // line 1203
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 1204
            echo "\t\t\t\t\t<td width=20%>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_twitter_redirect_type\" value=\"new\"
\t\t\t\t\t\t\t";
            // line 1206
            if ((($context["socnetauth2_twitter_redirect_type"] ?? null) == "new")) {
                echo " checked ";
            }
            // line 1207
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_twitter_redirect_type_new\"
\t\t\t\t\t\t><label for=\"socnetauth2_twitter_redirect_type_new\"
\t\t\t\t\t\t>";
            // line 1209
            echo ($context["entry_redirect_url_new"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t ";
        }
        // line 1212
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 1213
        if ( !($context["is_show_old_redirect"] ?? null)) {
            // line 1214
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"socnetauth2_twitter_redirect_type\" value=\"new\"  >
\t\t\t\t\t\t";
        }
        // line 1216
        echo "\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 1217
        echo ($context["twitter_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 1219
        echo ($context["entry_redirect_url_twitter_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 1222
        echo ($context["twitter_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 1223
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        // line 1227
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 1228
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_twitter_redirect_type\" value=\"old\"
\t\t\t\t\t\t\t";
            // line 1231
            if ((($context["socnetauth2_twitter_redirect_type"] ?? null) == "old")) {
                echo " checked ";
            }
            // line 1232
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_twitter_redirect_type_old\"
\t\t\t\t\t\t><label for=\"socnetauth2_twitter_redirect_type_old\"
\t\t\t\t\t\t>";
            // line 1234
            echo ($context["entry_redirect_url_old"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 1238
            echo ($context["twitter_redirect_url_old"] ?? null);
            echo "\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t</td>
\t\t\t\t\t<td> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
            // line 1242
            echo ($context["twitter_redirect_url_old"] ?? null);
            echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
            // line 1243
            echo ($context["text_copy"] ?? null);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        }
        // line 1248
        echo "\t\t\t\t</table> 
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t";
        // line 1254
        echo "\t\t<table id=\"twitter_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 1257
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1258
        echo ($context["entry_twitter_consumer_key"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1259
        echo ($context["entry_twitter_consumer_secret"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"twitter_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 1266
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_twitter_consumer_key\"  
\t\t\t\tvalue=\"";
        // line 1270
        echo ($context["socnetauth2_twitter_consumer_key"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_twitter_consumer_secret\"  
\t\t\t\tvalue=\"";
        // line 1275
        echo ($context["socnetauth2_twitter_consumer_secret"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          ";
        // line 1279
        $context["twitter_req_row"] = 0;
        // line 1280
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_twitter_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 1281
            echo "          <tbody id=\"twitter_req-row";
            echo ($context["twitter_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_twitter_req[";
            // line 1284
            echo ($context["twitter_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 1285
            echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["req"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_twitter_req[";
            // line 1289
            echo ($context["twitter_req_row"] ?? null);
            echo "][consumer_key]\"  
\t\t\t\tvalue=\"";
            // line 1290
            echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["req"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["consumer_key"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_twitter_req[";
            // line 1294
            echo ($context["twitter_req_row"] ?? null);
            echo "][consumer_secret]\"  
\t\t\t\tvalue=\"";
            // line 1295
            echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["req"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["consumer_secret"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#twitter_req-row";
            // line 1297
            echo ($context["twitter_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
          ";
            // line 1300
            $context["twitter_req_row"] = (($context["twitter_req_row"] ?? null) + 1);
            // line 1301
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1302
        echo "          <tfoot>
            <tr>
              <td colspan=\"3\"></td>
              <td class=\"left\"><a onclick=\"addtwitterReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 1306
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar twitter_req_row = ";
        // line 1311
        echo ($context["twitter_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addtwitterReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"twitter_req-row'+twitter_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_twitter_req['+twitter_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_twitter_req['+twitter_req_row+'][consumer_key]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_twitter_req['+twitter_req_row+'][consumer_secret]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#twitter_req-row'+twitter_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 1330
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#twitter_req tfoot').before(html);
\t\t\t
\t\t\ttwitter_req_row++;
\t\t}
\t\t</script>
\t\t</div>
\t\t
\t\t
\t  </div>
\t  <div id=\"tab-odnoklassniki\" class=\"tab-pane\">
\t  <p>Инструкция по интергации с Одноклассники по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/odnoklassniki\" target=_blank
\t\t>https://ocart.ru/socnetauth2/odnoklassniki</a>
\t\t</p>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1351
        echo ($context["entry_odnoklassniki_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t
\t\t\t\t<select name=\"socnetauth2_odnoklassniki_status\" class=\"form-control\">
                    ";
        // line 1356
        if (($context["socnetauth2_odnoklassniki_status"] ?? null)) {
            // line 1357
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 1358
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 1360
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 1361
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 1363
        echo "                </select>
\t\t\t</div>
        </div>
\t\t";
        // line 1367
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1369
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_odnoklassniki_debug\" class=\"form-control\">
                    ";
        // line 1373
        if (($context["socnetauth2_odnoklassniki_debug"] ?? null)) {
            // line 1374
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 1375
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 1377
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 1378
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 1380
        echo "                </select>
\t\t\t\t<div>";
        // line 1381
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t";
        // line 1385
        echo "\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1388
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 1391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1392
            echo "\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_odnoklassniki_title[";
            // line 1394
            echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["language"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 1395
            echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["socnetauth2_odnoklassniki_title"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[(($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["language"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 1396
            echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["language"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["language"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1399
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1404
        echo ($context["entry_odnoklassniki_agent"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_odnoklassniki_agent\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'extension' ) { \$('#block_odnoklassniki_agent_extension').show(); \$('#block_odnoklassniki_agent_notice').show(); } else { \$('#block_odnoklassniki_agent_extension').hide(); \$('#block_odnoklassniki_agent_notice').hide(); }\"
\t\t\t\t>
\t\t\t\t\t<option value=\"extension\" 
\t\t\t\t\t";
        // line 1411
        if ((($context["socnetauth2_odnoklassniki_agent"] ?? null) == "extension")) {
            // line 1412
            echo "\t\t\t\t\t\tselected=\"extension\"
\t\t\t\t\t  ";
        }
        // line 1414
        echo "\t\t\t\t\t>";
        echo ($context["entry_odnoklassniki_agent_extension"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"loginza\" 
\t\t\t\t\t";
        // line 1416
        if ((($context["socnetauth2_odnoklassniki_agent"] ?? null) == "loginza")) {
            // line 1417
            echo "\t\t\t\t\t\tselected=\"loginza\"
\t\t\t\t\t  ";
        }
        // line 1419
        echo "\t\t\t\t\t>";
        echo ($context["entry_odnoklassniki_agent_loginza"] ?? null);
        echo "</option>
                </select>
\t\t\t\t<div
\t\t\t\tid=\"block_odnoklassniki_agent_notice\"
\t\t\t\t\t";
        // line 1423
        if ((($context["socnetauth2_odnoklassniki_agent"] ?? null) == "loginza")) {
            // line 1424
            echo "\t\tstyle=\"display: none;\" ";
        }
        // line 1425
        echo "\t\t\t\t>";
        echo ($context["entry_odnoklassniki_agent_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div> 
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1430
        echo ($context["entry_odnoklassniki_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_odnoklassniki_customer_group_id\" class=\"form-control\" >
                    ";
        // line 1434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1435
            echo "                    ";
            if (((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["customer_group"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["customer_group_id"] ?? null) : null) == ($context["socnetauth2_odnoklassniki_customer_group_id"] ?? null))) {
                // line 1436
                echo "                    <option value=\"";
                echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["customer_group"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["customer_group"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 1438
                echo "                    <option value=\"";
                echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["customer_group"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["customer_group"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 1440
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1441
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t
\t\t<div id=\"block_odnoklassniki_agent_extension\"
\t\t";
        // line 1446
        if ((($context["socnetauth2_odnoklassniki_agent"] ?? null) == "loginza")) {
            echo " style=\"display: none;\" ";
        }
        // line 1447
        echo "\t\t> 
\t\t
\t\t";
        // line 1450
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1452
        echo ($context["entry_redirect_url_odnoklassniki"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t ";
        // line 1457
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 1458
            echo "\t\t\t\t\t<td width=20%>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_odnoklassniki_redirect_type\" value=\"new\"
\t\t\t\t\t\t\t";
            // line 1460
            if ((($context["socnetauth2_odnoklassniki_redirect_type"] ?? null) == "new")) {
                echo " checked ";
            }
            // line 1461
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_odnoklassniki_redirect_type_new\"
\t\t\t\t\t\t><label for=\"socnetauth2_odnoklassniki_redirect_type_new\"
\t\t\t\t\t\t>";
            // line 1463
            echo ($context["entry_redirect_url_new"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t ";
        }
        // line 1466
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 1467
        if ( !($context["is_show_old_redirect"] ?? null)) {
            // line 1468
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"socnetauth2_odnoklassniki_redirect_type\" value=\"new\"  >
\t\t\t\t\t\t";
        }
        // line 1470
        echo "\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 1471
        echo ($context["odnoklassniki_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 1473
        echo ($context["entry_redirect_url_odnoklassniki_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 1476
        echo ($context["odnoklassniki_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 1477
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        // line 1481
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 1482
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_odnoklassniki_redirect_type\" value=\"old\"
\t\t\t\t\t\t\t";
            // line 1485
            if ((($context["socnetauth2_odnoklassniki_redirect_type"] ?? null) == "old")) {
                echo " checked ";
            }
            // line 1486
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_odnoklassniki_redirect_type_old\"
\t\t\t\t\t\t><label for=\"socnetauth2_odnoklassniki_redirect_type_old\"
\t\t\t\t\t\t>";
            // line 1488
            echo ($context["entry_redirect_url_old"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 1492
            echo ($context["odnoklassniki_redirect_url_old"] ?? null);
            echo "\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t</td>
\t\t\t\t\t<td> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
            // line 1496
            echo ($context["odnoklassniki_redirect_url_old"] ?? null);
            echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
            // line 1497
            echo ($context["text_copy"] ?? null);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        }
        // line 1502
        echo "\t\t\t\t</table> 
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t";
        // line 1508
        echo "\t\t<table id=\"odnoklassniki_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 1511
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1512
        echo ($context["entry_odnoklassniki_application_id"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1513
        echo ($context["entry_odnoklassniki_public_key"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1514
        echo ($context["entry_odnoklassniki_secret_key"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"odnoklassniki_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 1521
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_odnoklassniki_application_id\"  
\t\t\t\tvalue=\"";
        // line 1525
        echo ($context["socnetauth2_odnoklassniki_application_id"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_odnoklassniki_public_key\"  
\t\t\t\tvalue=\"";
        // line 1530
        echo ($context["socnetauth2_odnoklassniki_public_key"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_odnoklassniki_secret_key\"  
\t\t\t\tvalue=\"";
        // line 1535
        echo ($context["socnetauth2_odnoklassniki_secret_key"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          ";
        // line 1539
        $context["odnoklassniki_req_row"] = 0;
        // line 1540
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_odnoklassniki_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 1541
            echo "          <tbody id=\"odnoklassniki_req-row";
            echo ($context["odnoklassniki_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_odnoklassniki_req[";
            // line 1544
            echo ($context["odnoklassniki_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 1545
            echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["req"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_odnoklassniki_req[";
            // line 1549
            echo ($context["odnoklassniki_req_row"] ?? null);
            echo "][application_id]\"  
\t\t\t\tvalue=\"";
            // line 1550
            echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["req"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["application_id"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_odnoklassniki_req[";
            // line 1554
            echo ($context["odnoklassniki_req_row"] ?? null);
            echo "][public_key]\"  
\t\t\t\tvalue=\"";
            // line 1555
            echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["req"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["public_key"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_odnoklassniki_req[";
            // line 1559
            echo ($context["odnoklassniki_req_row"] ?? null);
            echo "][secret_key]\"  
\t\t\t\tvalue=\"";
            // line 1560
            echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["req"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["secret_key"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#odnoklassniki_req-row";
            // line 1562
            echo ($context["odnoklassniki_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
          ";
            // line 1565
            $context["odnoklassniki_req_row"] = (($context["odnoklassniki_req_row"] ?? null) + 1);
            // line 1566
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1567
        echo "          <tfoot>
            <tr>
              <td colspan=\"4\"></td>
              <td class=\"left\"><a onclick=\"addodnoklassnikiReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 1571
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar odnoklassniki_req_row = ";
        // line 1576
        echo ($context["odnoklassniki_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addodnoklassnikiReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"odnoklassniki_req-row'+odnoklassniki_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_odnoklassniki_req['+odnoklassniki_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_odnoklassniki_req['+odnoklassniki_req_row+'][application_id]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_odnoklassniki_req['+odnoklassniki_req_row+'][public_key]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_odnoklassniki_req['+odnoklassniki_req_row+'][secret_key]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#odnoklassniki_req-row'+odnoklassniki_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 1599
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#odnoklassniki_req tfoot').before(html);
\t\t\t
\t\t\todnoklassniki_req_row++;
\t\t}
\t\t</script>
\t\t</div>
\t  </div>
\t  
\t  
\t  
\t  ";
        // line 1615
        echo "\t  <div id=\"tab-gmail\" class=\"tab-pane\">
\t  <p>Инструкция по интергации с Gmail.com по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/gmail\" target=_blank
\t\t>https://ocart.ru/socnetauth2/gmail</a>
\t\t</p>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1622
        echo ($context["entry_gmail_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t  <select name=\"socnetauth2_gmail_status\" class=\"form-control\">
                    ";
        // line 1626
        if (($context["socnetauth2_gmail_status"] ?? null)) {
            // line 1627
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 1628
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 1630
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 1631
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 1633
        echo "                </select>
\t\t\t</div>
        </div>
\t\t";
        // line 1637
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1639
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_gmail_debug\" class=\"form-control\">
                    ";
        // line 1643
        if (($context["socnetauth2_gmail_debug"] ?? null)) {
            // line 1644
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 1645
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 1647
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 1648
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 1650
        echo "                </select>
\t\t\t\t<div>";
        // line 1651
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t";
        // line 1655
        echo "\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1658
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 1661
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1662
            echo "\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_gmail_title[";
            // line 1664
            echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["language"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 1665
            echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["socnetauth2_gmail_title"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[(($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["language"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 1666
            echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["language"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["language"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1669
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1675
        echo ($context["entry_gmail_agent"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_gmail_agent\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'extension' ) { \$('#block_gmail_agent_extension').show(); } else { \$('#block_gmail_agent_extension').hide(); }\"
\t\t\t\t>
\t\t\t\t\t<option value=\"extension\" 
\t\t\t\t\t";
        // line 1682
        if ((($context["socnetauth2_gmail_agent"] ?? null) == "extension")) {
            // line 1683
            echo "\t\t\t\t\t\tselected=\"extension\"
\t\t\t\t\t  ";
        }
        // line 1685
        echo "\t\t\t\t\t>";
        echo ($context["entry_gmail_agent_extension"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"loginza\" 
\t\t\t\t\t";
        // line 1687
        if ((($context["socnetauth2_gmail_agent"] ?? null) == "loginza")) {
            // line 1688
            echo "\t\t\t\t\t\tselected=\"loginza\"
\t\t\t\t\t  ";
        }
        // line 1690
        echo "\t\t\t\t\t>";
        echo ($context["entry_gmail_agent_loginza"] ?? null);
        echo "</option>
                </select>
\t\t\t\t<div>";
        // line 1692
        echo ($context["entry_gmail_agent_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t 
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1698
        echo ($context["entry_gmail_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_gmail_customer_group_id\" class=\"form-control\" >
                    ";
        // line 1702
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1703
            echo "                    ";
            if (((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["customer_group"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["customer_group_id"] ?? null) : null) == ($context["socnetauth2_gmail_customer_group_id"] ?? null))) {
                // line 1704
                echo "                    <option value=\"";
                echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["customer_group"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["customer_group"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 1706
                echo "                    <option value=\"";
                echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["customer_group"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["customer_group"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 1708
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1709
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t
\t\t<div id=\"block_gmail_agent_extension\"
\t\t";
        // line 1714
        if ((($context["socnetauth2_gmail_agent"] ?? null) == "loginza")) {
            echo " style=\"display: none;\" ";
        }
        // line 1715
        echo "\t\t> 
\t\t
\t\t";
        // line 1718
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1720
        echo ($context["entry_redirect_url_gmail"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t ";
        // line 1725
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 1726
            echo "\t\t\t\t\t<td width=20%>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_gmail_redirect_type\" value=\"new\"
\t\t\t\t\t\t\t";
            // line 1728
            if ((($context["socnetauth2_gmail_redirect_type"] ?? null) == "new")) {
                echo " checked ";
            }
            // line 1729
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_gmail_redirect_type_new\"
\t\t\t\t\t\t><label for=\"socnetauth2_gmail_redirect_type_new\"
\t\t\t\t\t\t>";
            // line 1731
            echo ($context["entry_redirect_url_new"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t ";
        }
        // line 1734
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 1735
        if ( !($context["is_show_old_redirect"] ?? null)) {
            // line 1736
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"socnetauth2_gmail_redirect_type\" value=\"new\"  >
\t\t\t\t\t\t";
        }
        // line 1738
        echo "\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 1739
        echo ($context["gmail_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 1741
        echo ($context["entry_redirect_url_gmail_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 1744
        echo ($context["gmail_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 1745
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        // line 1749
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 1750
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_gmail_redirect_type\" value=\"old\"
\t\t\t\t\t\t\t";
            // line 1753
            if ((($context["socnetauth2_gmail_redirect_type"] ?? null) == "old")) {
                echo " checked ";
            }
            // line 1754
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_gmail_redirect_type_old\"
\t\t\t\t\t\t><label for=\"socnetauth2_gmail_redirect_type_old\"
\t\t\t\t\t\t>";
            // line 1756
            echo ($context["entry_redirect_url_old"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 1760
            echo ($context["gmail_redirect_url_old"] ?? null);
            echo "\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t</td>
\t\t\t\t\t<td> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
            // line 1764
            echo ($context["gmail_redirect_url_old"] ?? null);
            echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
            // line 1765
            echo ($context["text_copy"] ?? null);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        }
        // line 1770
        echo "\t\t\t\t</table> 
\t\t\t</div>
        </div>
\t\t
\t\t";
        // line 1775
        echo "\t\t<table id=\"gmail_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 1778
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1779
        echo ($context["entry_gmail_client_id"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 1780
        echo ($context["entry_gmail_client_secret"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"gmail_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 1787
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_gmail_client_id\"  
\t\t\t\tvalue=\"";
        // line 1791
        echo ($context["socnetauth2_gmail_client_id"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_gmail_client_secret\"  
\t\t\t\tvalue=\"";
        // line 1796
        echo ($context["socnetauth2_gmail_client_secret"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          ";
        // line 1800
        $context["gmail_req_row"] = 0;
        // line 1801
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_gmail_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 1802
            echo "          <tbody id=\"gmail_req-row";
            echo ($context["gmail_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_gmail_req[";
            // line 1805
            echo ($context["gmail_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 1806
            echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["req"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_gmail_req[";
            // line 1810
            echo ($context["gmail_req_row"] ?? null);
            echo "][client_id]\"  
\t\t\t\tvalue=\"";
            // line 1811
            echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["req"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["client_id"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_gmail_req[";
            // line 1815
            echo ($context["gmail_req_row"] ?? null);
            echo "][client_secret]\"  
\t\t\t\tvalue=\"";
            // line 1816
            echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["req"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["client_secret"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#gmail_req-row";
            // line 1818
            echo ($context["gmail_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
          ";
            // line 1821
            $context["gmail_req_row"] = (($context["gmail_req_row"] ?? null) + 1);
            // line 1822
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1823
        echo "          <tfoot>
            <tr>
              <td colspan=\"3\"></td>
              <td class=\"left\"><a onclick=\"addgmailReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 1827
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar gmail_req_row = ";
        // line 1832
        echo ($context["gmail_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addgmailReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"gmail_req-row'+gmail_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_gmail_req['+gmail_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_gmail_req['+gmail_req_row+'][client_id]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_gmail_req['+gmail_req_row+'][client_secret]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#gmail_req-row'+gmail_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 1851
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#gmail_req tfoot').before(html);
\t\t\t
\t\t\tgmail_req_row++;
\t\t}
\t\t</script>
\t\t</div>
\t  </div>
\t  
\t  
\t  <div id=\"tab-mailru\" class=\"tab-pane\">
\t  <p>Инструкция по интергации с Mail.ru по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/mailru\" target=_blank
\t\t>https://ocart.ru/socnetauth2/mailru</a>
\t\t</p>
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1872
        echo ($context["entry_mailru_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t  <select name=\"socnetauth2_mailru_status\" class=\"form-control\">
                    ";
        // line 1876
        if (($context["socnetauth2_mailru_status"] ?? null)) {
            // line 1877
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 1878
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 1880
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 1881
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 1883
        echo "                </select>
\t\t\t</div>
        </div>
\t\t";
        // line 1887
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1889
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_mailru_debug\" class=\"form-control\">
                    ";
        // line 1893
        if (($context["socnetauth2_mailru_debug"] ?? null)) {
            // line 1894
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 1895
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 1897
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 1898
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 1900
        echo "                </select>
\t\t\t\t<div>";
        // line 1901
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t";
        // line 1905
        echo "\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1908
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 1911
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1912
            echo "\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_mailru_title[";
            // line 1914
            echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["language"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 1915
            echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["socnetauth2_mailru_title"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[(($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["language"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 1916
            echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["language"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["language"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1919
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1924
        echo ($context["entry_mailru_agent"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_mailru_agent\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'extension' ) { \$('#block_mailru_agent_extension').show(); } else { \$('#block_mailru_agent_extension').hide(); }\"
\t\t\t\t>
\t\t\t\t\t<option value=\"extension\" 
\t\t\t\t\t";
        // line 1931
        if ((($context["socnetauth2_mailru_agent"] ?? null) == "extension")) {
            // line 1932
            echo "\t\t\t\t\t\tselected=\"extension\"
\t\t\t\t\t  ";
        }
        // line 1934
        echo "\t\t\t\t\t>";
        echo ($context["entry_mailru_agent_extension"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"loginza\" 
\t\t\t\t\t";
        // line 1936
        if ((($context["socnetauth2_mailru_agent"] ?? null) == "loginza")) {
            // line 1937
            echo "\t\t\t\t\t\tselected=\"loginza\"
\t\t\t\t\t  ";
        }
        // line 1939
        echo "\t\t\t\t\t>";
        echo ($context["entry_mailru_agent_loginza"] ?? null);
        echo "</option>
                </select>
\t\t\t\t<div>";
        // line 1941
        echo ($context["entry_mailru_agent_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div> 
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1946
        echo ($context["entry_mailru_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_mailru_customer_group_id\" class=\"form-control\" >
                    ";
        // line 1950
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1951
            echo "                    ";
            if (((($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["customer_group"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["customer_group_id"] ?? null) : null) == ($context["socnetauth2_mailru_customer_group_id"] ?? null))) {
                // line 1952
                echo "                    <option value=\"";
                echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["customer_group"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["customer_group"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 1954
                echo "                    <option value=\"";
                echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["customer_group"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = $context["customer_group"]) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 1956
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1957
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1962
        echo ($context["entry_mailru_api_version"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_mailru_api_version\" class=\"form-control\" >
\t\t\t\t\t<option value=\"new\" 
\t\t\t\t\t";
        // line 1967
        if ((($context["socnetauth2_mailru_api_version"] ?? null) == "new")) {
            echo " 
\t\t\t\t\t\tselected=\"new\"
\t\t\t\t\t  ";
        }
        // line 1970
        echo "\t\t\t\t\t>";
        echo ($context["entry_mailru_api_version_new"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"old\" 
\t\t\t\t\t";
        // line 1972
        if ((($context["socnetauth2_mailru_api_version"] ?? null) == "old")) {
            echo "  
\t\t\t\t\t\tselected=\"old\"
\t\t\t\t\t  ";
        }
        // line 1975
        echo "\t\t\t\t\t>";
        echo ($context["entry_mailru_api_version_old"] ?? null);
        echo "</option>
                  </select>
\t\t\t\t  <div>";
        // line 1977
        echo ($context["entry_mailru_api_version_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t<div id=\"block_mailru_agent_extension\"
\t\t";
        // line 1981
        if ((($context["socnetauth2_mailru_agent"] ?? null) == "loginza")) {
            echo " style=\"display: none;\" ";
        }
        // line 1982
        echo "\t\t> 
\t\t
\t\t";
        // line 1985
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 1987
        echo ($context["entry_redirect_url_mailru"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t ";
        // line 1992
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 1993
            echo "\t\t\t\t\t<td width=20%>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_mailru_redirect_type\" value=\"new\"
\t\t\t\t\t\t\t";
            // line 1995
            if ((($context["socnetauth2_mailru_redirect_type"] ?? null) == "new")) {
                echo " checked ";
            }
            // line 1996
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_mailru_redirect_type_new\"
\t\t\t\t\t\t><label for=\"socnetauth2_mailru_redirect_type_new\"
\t\t\t\t\t\t>";
            // line 1998
            echo ($context["entry_redirect_url_new"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t ";
        }
        // line 2001
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 2002
        if ( !($context["is_show_old_redirect"] ?? null)) {
            // line 2003
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"socnetauth2_mailru_redirect_type\" value=\"new\"  >
\t\t\t\t\t\t";
        }
        // line 2005
        echo "\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 2006
        echo ($context["mailru_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 2008
        echo ($context["entry_redirect_url_mailru_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 2011
        echo ($context["mailru_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 2012
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        // line 2016
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 2017
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_mailru_redirect_type\" value=\"old\"
\t\t\t\t\t\t\t";
            // line 2020
            if ((($context["socnetauth2_mailru_redirect_type"] ?? null) == "old")) {
                echo " checked ";
            }
            // line 2021
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_mailru_redirect_type_old\"
\t\t\t\t\t\t><label for=\"socnetauth2_mailru_redirect_type_old\"
\t\t\t\t\t\t>";
            // line 2023
            echo ($context["entry_redirect_url_old"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 2027
            echo ($context["mailru_redirect_url_old"] ?? null);
            echo "\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t</td>
\t\t\t\t\t<td> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
            // line 2031
            echo ($context["mailru_redirect_url_old"] ?? null);
            echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
            // line 2032
            echo ($context["text_copy"] ?? null);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        }
        // line 2037
        echo "\t\t\t\t</table> 
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t";
        // line 2043
        echo "\t\t<table id=\"mailru_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 2046
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2047
        echo ($context["entry_mailru_id"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2048
        echo ($context["entry_mailru_private"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2049
        echo ($context["entry_mailru_secret"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"mailru_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 2056
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_mailru_id\"  
\t\t\t\tvalue=\"";
        // line 2060
        echo ($context["socnetauth2_mailru_id"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_mailru_private\"  
\t\t\t\tvalue=\"";
        // line 2065
        echo ($context["socnetauth2_mailru_private"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_mailru_secret\"  
\t\t\t\tvalue=\"";
        // line 2070
        echo ($context["socnetauth2_mailru_secret"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          ";
        // line 2074
        $context["mailru_req_row"] = 0;
        // line 2075
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_mailru_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 2076
            echo "          <tbody id=\"mailru_req-row";
            echo ($context["mailru_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_mailru_req[";
            // line 2079
            echo ($context["mailru_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 2080
            echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["req"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_mailru_req[";
            // line 2084
            echo ($context["mailru_req_row"] ?? null);
            echo "][mailru_id]\"  
\t\t\t\tvalue=\"";
            // line 2085
            echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["req"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["mailru_id"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_mailru_req[";
            // line 2089
            echo ($context["mailru_req_row"] ?? null);
            echo "][mailru_private]\"  
\t\t\t\tvalue=\"";
            // line 2090
            echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["req"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["mailru_private"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_mailru_req[";
            // line 2094
            echo ($context["mailru_req_row"] ?? null);
            echo "][mailru_secret]\"  
\t\t\t\tvalue=\"";
            // line 2095
            echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["req"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["mailru_secret"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#mailru_req-row";
            // line 2097
            echo ($context["mailru_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
          ";
            // line 2100
            $context["mailru_req_row"] = (($context["mailru_req_row"] ?? null) + 1);
            // line 2101
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2102
        echo "          <tfoot>
            <tr>
              <td colspan=\"4\"></td>
              <td class=\"left\"><a onclick=\"addmailruReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 2106
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar mailru_req_row = ";
        // line 2111
        echo ($context["mailru_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addmailruReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"mailru_req-row'+mailru_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_mailru_req['+mailru_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_mailru_req['+mailru_req_row+'][mailru_id]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_mailru_req['+mailru_req_row+'][mailru_private]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_mailru_req['+mailru_req_row+'][mailru_secret]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#mailru_req-row'+mailru_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 2134
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#mailru_req tfoot').before(html);
\t\t\t
\t\t\tmailru_req_row++;
\t\t}
\t\t</script>
\t\t</div>
\t\t
\t  </div>
\t  ";
        // line 2148
        echo "\t  
\t";
        // line 2150
        echo "\t  <div id=\"tab-yandex\" class=\"tab-pane\">
\t  <p>Инструкция по интергации с Яндексом по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/yandex\" target=_blank
\t\t>https://ocart.ru/socnetauth2/yandex</a>
\t\t</p>
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2157
        echo ($context["entry_yandex_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t  <select name=\"socnetauth2_yandex_status\" class=\"form-control\">
                    ";
        // line 2161
        if (($context["socnetauth2_yandex_status"] ?? null)) {
            // line 2162
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 2163
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 2165
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 2166
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 2168
        echo "                </select>
\t\t\t</div>
        </div>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2173
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_yandex_debug\" class=\"form-control\">
                    ";
        // line 2177
        if (($context["socnetauth2_yandex_debug"] ?? null)) {
            // line 2178
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 2179
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 2181
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 2182
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 2184
        echo "                </select>
\t\t\t\t<div>";
        // line 2185
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2191
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 2194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2195
            echo "\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_yandex_title[";
            // line 2197
            echo (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = $context["language"]) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 2198
            echo (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["socnetauth2_yandex_title"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24[(($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["language"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 2199
            echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = $context["language"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["language"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2202
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2208
        echo ($context["entry_yandex_agent"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_yandex_agent\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'extension' ) { \$('.block_yandex_agent_extension').show(); } else { \$('.block_yandex_agent_extension').hide(); }\"
\t\t\t\t>
\t\t\t\t\t<option value=\"extension\" 
\t\t\t\t\t";
        // line 2215
        if ((($context["socnetauth2_yandex_agent"] ?? null) == "extension")) {
            // line 2216
            echo "\t\t\t\t\t\tselected=\"extension\"
\t\t\t\t\t  ";
        }
        // line 2218
        echo "\t\t\t\t\t>";
        echo ($context["entry_yandex_agent_extension"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"loginza\" 
\t\t\t\t\t";
        // line 2220
        if ((($context["socnetauth2_yandex_agent"] ?? null) == "loginza")) {
            // line 2221
            echo "\t\t\t\t\t\tselected=\"loginza\"
\t\t\t\t\t  ";
        }
        // line 2223
        echo "\t\t\t\t\t>";
        echo ($context["entry_yandex_agent_loginza"] ?? null);
        echo "</option>
                </select>
\t\t\t\t<div>";
        // line 2225
        echo ($context["entry_yandex_agent_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t
\t\t<div id=\"block_yandex_agent_extension\"
\t\t\t\t\t";
        // line 2230
        if ((($context["socnetauth2_yandex_agent"] ?? null) == "loginza")) {
            // line 2231
            echo "\t\t\t\t\tstyle=\"display: none;\" ";
        }
        // line 2232
        echo "\t\t>
\t\t 
\t    <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2236
        echo ($context["entry_yandex_rights"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t   <div><input type=\"checkbox\" name=\"socnetauth2_yandex_rights_email\"
\t\t\t\t\t\t\t 
\t\t\t   value=\"1\" ";
        // line 2241
        if (($context["socnetauth2_yandex_rights_email"] ?? null)) {
            echo " checked ";
        }
        echo " 
\t\t\t   id=\"socnetauth2_yandex_rights_email\"
\t\t\t   ><label for=\"socnetauth2_yandex_rights_email\"
\t\t\t   >";
        // line 2244
        echo ($context["entry_yandex_rights_email"] ?? null);
        echo "</label></div>
\t\t\t   
\t\t\t   <div><input type=\"checkbox\" name=\"socnetauth2_yandex_rights_info\"
\t\t\t   value=\"1\" 
\t\t\t   ";
        // line 2248
        if (($context["socnetauth2_yandex_rights_info"] ?? null)) {
            echo "checked ";
        }
        echo " 
\t\t\t   id=\"socnetauth2_yandex_rights_info\"
\t\t\t   ><label for=\"socnetauth2_yandex_rights_info\"
\t\t\t   >";
        // line 2251
        echo ($context["entry_yandex_rights_info"] ?? null);
        echo "</label></div>
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t</div>
\t\t
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2260
        echo ($context["entry_yandex_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_yandex_customer_group_id\" class=\"form-control\" >
                    ";
        // line 2264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2265
            echo "                    ";
            if (((($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["customer_group"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["customer_group_id"] ?? null) : null) == ($context["socnetauth2_yandex_customer_group_id"] ?? null))) {
                // line 2266
                echo "                    <option value=\"";
                echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = $context["customer_group"]) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = $context["customer_group"]) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 2268
                echo "                    <option value=\"";
                echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = $context["customer_group"]) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = $context["customer_group"]) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 2270
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2271
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t<div class=\"block_yandex_agent_extension\"
\t\t";
        // line 2275
        if ((($context["socnetauth2_yandex_agent"] ?? null) == "loginza")) {
            echo " style=\"display: none;\" ";
        }
        // line 2276
        echo "\t\t> 
\t\t
\t\t";
        // line 2279
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2281
        echo ($context["entry_redirect_url_yandex"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t ";
        // line 2286
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 2287
            echo "\t\t\t\t\t<td width=20%>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_yandex_redirect_type\" value=\"new\"
\t\t\t\t\t\t\t";
            // line 2289
            if ((($context["socnetauth2_yandex_redirect_type"] ?? null) == "new")) {
                echo " checked ";
            }
            // line 2290
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_yandex_redirect_type_new\"
\t\t\t\t\t\t><label for=\"socnetauth2_yandex_redirect_type_new\"
\t\t\t\t\t\t>";
            // line 2292
            echo ($context["entry_redirect_url_new"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t ";
        }
        // line 2295
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 2296
        if ( !($context["is_show_old_redirect"] ?? null)) {
            // line 2297
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"socnetauth2_yandex_redirect_type\" value=\"new\"  >
\t\t\t\t\t\t";
        }
        // line 2299
        echo "\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 2300
        echo ($context["yandex_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 2302
        echo ($context["entry_redirect_url_yandex_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 2305
        echo ($context["yandex_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 2306
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        // line 2310
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 2311
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_yandex_redirect_type\" value=\"old\"
\t\t\t\t\t\t\t";
            // line 2314
            if ((($context["socnetauth2_yandex_redirect_type"] ?? null) == "old")) {
                echo " checked ";
            }
            // line 2315
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_yandex_redirect_type_old\"
\t\t\t\t\t\t><label for=\"socnetauth2_yandex_redirect_type_old\"
\t\t\t\t\t\t>";
            // line 2317
            echo ($context["entry_redirect_url_old"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 2321
            echo ($context["yandex_redirect_url_old"] ?? null);
            echo "\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t</td>
\t\t\t\t\t<td> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
            // line 2325
            echo ($context["yandex_redirect_url_old"] ?? null);
            echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
            // line 2326
            echo ($context["text_copy"] ?? null);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        }
        // line 2331
        echo "\t\t\t\t</table> 
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t";
        // line 2337
        echo "\t\t<table id=\"yandex_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 2340
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2341
        echo ($context["entry_yandex_client_id"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2342
        echo ($context["entry_yandex_client_secret"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"yandex_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 2349
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_yandex_client_id\"  
\t\t\t\tvalue=\"";
        // line 2353
        echo ($context["socnetauth2_yandex_client_id"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_yandex_client_secret\"  
\t\t\t\tvalue=\"";
        // line 2358
        echo ($context["socnetauth2_yandex_client_secret"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          ";
        // line 2362
        $context["yandex_req_row"] = 0;
        // line 2363
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_yandex_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 2364
            echo "          <tbody id=\"yandex_req-row";
            echo ($context["yandex_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_yandex_req[";
            // line 2367
            echo ($context["yandex_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 2368
            echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = $context["req"]) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_yandex_req[";
            // line 2372
            echo ($context["yandex_req_row"] ?? null);
            echo "][client_id]\"  
\t\t\t\tvalue=\"";
            // line 2373
            echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["req"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["client_id"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_yandex_req[";
            // line 2377
            echo ($context["yandex_req_row"] ?? null);
            echo "][client_secret]\"  
\t\t\t\tvalue=\"";
            // line 2378
            echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["req"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["client_secret"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#yandex_req-row";
            // line 2380
            echo ($context["yandex_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
          ";
            // line 2383
            $context["yandex_req_row"] = (($context["yandex_req_row"] ?? null) + 1);
            // line 2384
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2385
        echo "          <tfoot>
            <tr>
              <td colspan=\"3\"></td>
              <td class=\"left\"><a onclick=\"addyandexReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 2389
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar yandex_req_row = ";
        // line 2394
        echo ($context["yandex_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addyandexReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"yandex_req-row'+yandex_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_yandex_req['+yandex_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_yandex_req['+yandex_req_row+'][client_id]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_yandex_req['+yandex_req_row+'][client_secret]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#yandex_req-row'+yandex_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 2413
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#yandex_req tfoot').before(html);
\t\t\t
\t\t\tyandex_req_row++;
\t\t}
\t\t</script>
\t\t</div>
\t  </div>
\t

\t  <div id=\"tab-steam\" class=\"tab-pane\">
\t  <p>Инструкция по интергации со Steam по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/steam\" target=_blank
\t\t>https://ocart.ru/socnetauth2/steam</a>
\t\t</p>
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2434
        echo ($context["entry_steam_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t  <select name=\"socnetauth2_steam_status\" class=\"form-control\"> 
                    ";
        // line 2438
        if (($context["socnetauth2_steam_status"] ?? null)) {
            // line 2439
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 2440
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 2442
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 2443
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 2445
        echo "                </select>
\t\t\t</div>
        </div>
\t\t";
        // line 2449
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2451
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_steam_debug\" class=\"form-control\"> 
                    ";
        // line 2455
        if (($context["socnetauth2_steam_debug"] ?? null)) {
            // line 2456
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 2457
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 2459
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 2460
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 2462
        echo "                </select>
\t\t\t\t<div>";
        // line 2463
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2469
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 2472
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2473
            echo "\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_steam_title[";
            // line 2475
            echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = $context["language"]) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 2476
            echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = ($context["socnetauth2_steam_title"] ?? null)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb[(($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = $context["language"]) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 2477
            echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = $context["language"]) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = $context["language"]) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2480
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2486
        echo ($context["entry_steam_agent"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_steam_agent\" class=\"form-control\"
\t\t\t\tonchange=\"if( this.value == 'extension' ) { \$('#block_steam_agent_extension').show(); } else { \$('#block_steam_agent_extension').hide(); }\"
\t\t\t\t>
\t\t\t\t\t<option value=\"extension\" 
\t\t\t\t\t";
        // line 2493
        if ((($context["socnetauth2_steam_agent"] ?? null) == "extension")) {
            // line 2494
            echo "\t\t\t\t\t\tselected=\"extension\"
\t\t\t\t\t  ";
        }
        // line 2496
        echo "\t\t\t\t\t>";
        echo ($context["entry_steam_agent_extension"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"loginza\" 
\t\t\t\t\t";
        // line 2498
        if ((($context["socnetauth2_steam_agent"] ?? null) == "loginza")) {
            // line 2499
            echo "\t\t\t\t\t\tselected=\"loginza\"
\t\t\t\t\t  ";
        }
        // line 2501
        echo "\t\t\t\t\t>";
        echo ($context["entry_steam_agent_loginza"] ?? null);
        echo "</option>
                </select>
\t\t\t\t<div>";
        // line 2503
        echo ($context["entry_steam_agent_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div> 
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2508
        echo ($context["entry_steam_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_steam_customer_group_id\" class=\"form-control\" >
                    ";
        // line 2512
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2513
            echo "                    ";
            if (((($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = $context["customer_group"]) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["customer_group_id"] ?? null) : null) == ($context["socnetauth2_steam_customer_group_id"] ?? null))) {
                // line 2514
                echo "                    <option value=\"";
                echo (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = $context["customer_group"]) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = $context["customer_group"]) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 2516
                echo "                    <option value=\"";
                echo (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = $context["customer_group"]) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = $context["customer_group"]) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 2518
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2519
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t
\t\t<div id=\"block_steam_agent_extension\"
\t\t";
        // line 2524
        if ((($context["socnetauth2_steam_agent"] ?? null) == "loginza")) {
            echo " style=\"display: none;\" ";
        }
        // line 2525
        echo "\t\t> 
\t\t
\t\t";
        // line 2528
        echo "\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2530
        echo ($context["entry_redirect_url_steam"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t ";
        // line 2535
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 2536
            echo "\t\t\t\t\t<td width=20%>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_steam_redirect_type\" value=\"new\"
\t\t\t\t\t\t\t";
            // line 2538
            if ((($context["socnetauth2_steam_redirect_type"] ?? null) == "new")) {
                echo " checked ";
            }
            // line 2539
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_steam_redirect_type_new\"
\t\t\t\t\t\t><label for=\"socnetauth2_steam_redirect_type_new\"
\t\t\t\t\t\t>";
            // line 2541
            echo ($context["entry_redirect_url_new"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t ";
        }
        // line 2544
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 2545
        if ( !($context["is_show_old_redirect"] ?? null)) {
            // line 2546
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"socnetauth2_steam_redirect_type\" value=\"new\"  >
\t\t\t\t\t\t";
        }
        // line 2548
        echo "\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 2549
        echo ($context["steam_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 2551
        echo ($context["entry_redirect_url_steam_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 2554
        echo ($context["steam_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 2555
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        // line 2559
        if (($context["is_show_old_redirect"] ?? null)) {
            // line 2560
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"socnetauth2_steam_redirect_type\" value=\"old\"
\t\t\t\t\t\t\t";
            // line 2563
            if ((($context["socnetauth2_steam_redirect_type"] ?? null) == "old")) {
                echo " checked ";
            }
            // line 2564
            echo "\t\t\t\t\t\t\tid=\"socnetauth2_steam_redirect_type_old\"
\t\t\t\t\t\t><label for=\"socnetauth2_steam_redirect_type_old\"
\t\t\t\t\t\t>";
            // line 2566
            echo ($context["entry_redirect_url_old"] ?? null);
            echo "</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 2570
            echo ($context["steam_redirect_url_old"] ?? null);
            echo "\">
\t\t\t\t\t\t</div> 
\t\t\t\t\t</td>
\t\t\t\t\t<td> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
            // line 2574
            echo ($context["steam_redirect_url_old"] ?? null);
            echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
            // line 2575
            echo ($context["text_copy"] ?? null);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t\t ";
        }
        // line 2580
        echo "\t\t\t\t</table> 
\t\t\t</div>
        </div>
\t\t
\t\t";
        // line 2585
        echo "\t\t<table id=\"steam_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 2588
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2589
        echo ($context["entry_steam_api_key"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"steam_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 2596
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_steam_api_key\"  
\t\t\t\tvalue=\"";
        // line 2600
        echo ($context["socnetauth2_steam_api_key"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          ";
        // line 2604
        $context["steam_req_row"] = 0;
        // line 2605
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_steam_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 2606
            echo "          <tbody id=\"steam_req-row";
            echo ($context["steam_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_steam_req[";
            // line 2609
            echo ($context["steam_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 2610
            echo (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = $context["req"]) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_steam_req[";
            // line 2614
            echo ($context["steam_req_row"] ?? null);
            echo "][api_key]\"  
\t\t\t\tvalue=\"";
            // line 2615
            echo (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = $context["req"]) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["api_key"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#steam_req-row";
            // line 2617
            echo ($context["steam_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
          ";
            // line 2620
            $context["steam_req_row"] = (($context["steam_req_row"] ?? null) + 1);
            // line 2621
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2622
        echo "          <tfoot>
            <tr>
              <td colspan=\"2\"></td>
              <td class=\"left\"><a onclick=\"addsteamReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 2626
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar steam_req_row = ";
        // line 2631
        echo ($context["steam_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addsteamReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"steam_req-row'+steam_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_steam_req['+steam_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_steam_req['+steam_req_row+'][api_key]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#steam_req-row'+steam_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 2646
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t\$('#steam_req tfoot').before(html);
\t\t\t
\t\t\tsteam_req_row++;
\t\t}
\t\t</script>
\t\t</div>
\t  </div>
\t
\t  
\t  <div id=\"tab-telegram\" class=\"tab-pane\">
\t  <input type=\"hidden\" name=\"socnetauth2_telegram_agent\" 
\t  value=\"extension\">
\t  <p>Инструкция по интергации с Телеграм по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/telegram\" target=_blank
\t\t>https://ocart.ru/socnetauth2/telegram</a>
\t\t</p>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2668
        echo ($context["entry_telegram_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t  <select name=\"socnetauth2_telegram_status\" class=\"form-control\"> 
\t\t\t\t  ";
        // line 2672
        if (($context["socnetauth2_telegram_status"] ?? null)) {
            // line 2673
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 2674
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 2676
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 2677
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 2679
        echo "                </select>
\t\t\t</div>
        </div>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2684
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_telegram_debug\" class=\"form-control\">
\t\t\t\t  ";
        // line 2688
        if (($context["socnetauth2_telegram_debug"] ?? null)) {
            echo " 
\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 2689
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 2690
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 2692
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 2693
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 2695
        echo "                </select>
\t\t\t\t<div>";
        // line 2696
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2701
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 2704
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t<p>
\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\tname=\"socnetauth2_telegram_title[";
            // line 2707
            echo (($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = $context["language"]) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\tvalue=\"";
            // line 2708
            echo (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = ($context["socnetauth2_telegram_title"] ?? null)) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a[(($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = $context["language"]) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\tsrc=\"";
            // line 2709
            echo (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = $context["language"]) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = $context["language"]) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2712
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2717
        echo ($context["entry_telegram_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_telegram_customer_group_id\" class=\"form-control\" >
\t\t\t\t\t";
        // line 2721
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            echo "  
                    ";
            // line 2722
            if (((($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = $context["customer_group"]) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["customer_group_id"] ?? null) : null) == ($context["socnetauth2_telegram_customer_group_id"] ?? null))) {
                echo " 
                    <option value=\"";
                // line 2723
                echo (($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = $context["customer_group"]) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = $context["customer_group"]) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 2725
                echo "                    <option value=\"";
                echo (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = $context["customer_group"]) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = $context["customer_group"]) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 2727
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2728
        echo "                  </select>
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2735
        echo ($context["entry_redirect_url_telegram"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 2742
        echo ($context["telegram_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 2744
        echo ($context["entry_redirect_url_telegram_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 2747
        echo ($context["telegram_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 2748
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t</table> 
\t\t\t</div>
        </div> 
\t\t
\t\t<table id=\"telegram_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 2759
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2760
        echo ($context["entry_telegram_bot_username"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2761
        echo ($context["entry_telegram_bot_token"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"telegram_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 2768
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_telegram_bot_username\"  
\t\t\t\tvalue=\"";
        // line 2772
        echo ($context["socnetauth2_telegram_bot_username"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_telegram_bot_token\"  
\t\t\t\tvalue=\"";
        // line 2777
        echo ($context["socnetauth2_telegram_bot_token"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          </tbody>
          ";
        // line 2782
        $context["telegram_req_row"] = 0;
        // line 2783
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_telegram_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            echo "   
          <tbody id=\"telegram_req-row";
            // line 2784
            echo ($context["telegram_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_telegram_req[";
            // line 2787
            echo ($context["telegram_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 2788
            echo (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = $context["req"]) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_telegram_req[";
            // line 2792
            echo ($context["telegram_req_row"] ?? null);
            echo "][bot_username]\"  
\t\t\t\tvalue=\"";
            // line 2793
            echo (($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = $context["req"]) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["bot_username"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_telegram_req[";
            // line 2797
            echo ($context["telegram_req_row"] ?? null);
            echo "][bot_token]\"  
\t\t\t\tvalue=\"";
            // line 2798
            echo (($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = $context["req"]) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20["bot_token"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#telegram_req-row";
            // line 2800
            echo ($context["telegram_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
\t\t  ";
            // line 2803
            $context["telegram_req_row"] = (($context["telegram_req_row"] ?? null) + 1);
            // line 2804
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2805
        echo "          <tfoot>
            <tr>
              <td colspan=\"3\"></td>
              <td class=\"left\"><a onclick=\"addTelegramReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 2809
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar telegram_req_row = ";
        // line 2814
        echo ($context["telegram_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addTelegramReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"telegram_req-row'+telegram_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_telegram_req['+telegram_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_telegram_req['+telegram_req_row+'][bot_username]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_telegram_req['+telegram_req_row+'][bot_token]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#telegram_req-row'+telegram_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 2833
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#telegram_req tfoot').before(html);
\t\t\t
\t\t\ttelegram_req_row++;
\t\t}
\t\t</script>
\t  </div>
\t  
\t  <div id=\"tab-tinkoff\" class=\"tab-pane\">
\t  <input type=\"hidden\" name=\"socnetauth2_tinkoff_agent\" 
\t  value=\"extension\">
\t  <p>Инструкция по интергации с Tinkoff ID по ссылке:<br>
\t\t<a href=\"https://ocart.ru/socnetauth2/tinkoff\" target=_blank
\t\t>https://ocart.ru/socnetauth2/tinkoff</a>
\t\t</p>
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2854
        echo ($context["entry_tinkoff_status"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t  <select name=\"socnetauth2_tinkoff_status\" class=\"form-control\"> 
\t\t\t\t  ";
        // line 2858
        if (($context["socnetauth2_tinkoff_status"] ?? null)) {
            // line 2859
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 2860
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 2862
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 2863
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 2865
        echo "                </select>
\t\t\t</div>
        </div> 
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2870
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_tinkoff_debug\" class=\"form-control\">
\t\t\t\t  ";
        // line 2874
        if (($context["socnetauth2_tinkoff_debug"] ?? null)) {
            // line 2875
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" >";
            // line 2876
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 2878
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 2879
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 2881
        echo "                </select>
\t\t\t\t<div>";
        // line 2882
        echo ($context["text_debug_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2887
        echo ($context["entry_socnet_title"] ?? null);
        echo "
\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t
\t\t\t\t";
        // line 2891
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2892
            echo "\t\t\t\t<p>
\t\t\t\t<input type=\"text\"  class=\"form-control\"  name=\"socnetauth2_tinkoff_title[";
            // line 2893
            echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = $context["language"]) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\tvalue=\"";
            // line 2894
            echo (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = ($context["socnetauth2_tinkoff_title"] ?? null)) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0[(($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = $context["language"]) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\tsrc=\"";
            // line 2895
            echo (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = $context["language"]) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = $context["language"]) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2898
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2904
        echo ($context["entry_tinkoff_customer_group_id"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select name=\"socnetauth2_tinkoff_customer_group_id\" class=\"form-control\" > 
                    ";
        // line 2908
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2909
            echo "                    ";
            if (((($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = $context["customer_group"]) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["customer_group_id"] ?? null) : null) == ($context["socnetauth2_tinkoff_customer_group_id"] ?? null))) {
                // line 2910
                echo "                    <option value=\"";
                echo (($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = $context["customer_group"]) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = $context["customer_group"]) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["name"] ?? null) : null);
                echo "</option>
                    ";
            } else {
                // line 2912
                echo "                    <option value=\"";
                echo (($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = $context["customer_group"]) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = $context["customer_group"]) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f["name"] ?? null) : null);
                echo "</option>
                    ";
            }
            // line 2914
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                  </select>
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 2922
        echo ($context["entry_redirect_url_tinkoff"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\"> 
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 2929
        echo ($context["tinkoff_redirect_url_new"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>";
        // line 2931
        echo ($context["entry_redirect_url_tinkoff_notice"] ?? null);
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=20%> 
\t\t\t\t\t\t<a onclick=\"copyToClipboard('";
        // line 2934
        echo ($context["tinkoff_redirect_url_new"] ?? null);
        echo "');\"
\t\t\t\t\t\t\tclass=\"btn btn-primary\">";
        // line 2935
        echo ($context["text_copy"] ?? null);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t</table> 
\t\t\t</div>
        </div> 
\t\t
\t\t<table id=\"tinkoff_req\" class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"left\">";
        // line 2946
        echo ($context["col_domain"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2947
        echo ($context["entry_tinkoff_client_id"] ?? null);
        echo "</td>
              <td class=\"left\">";
        // line 2948
        echo ($context["entry_tinkoff_client_secret"] ?? null);
        echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody id=\"tinkoff_req-row\">
            <tr>
              <td class=\"left\">
\t\t\t\t  ";
        // line 2955
        echo ($context["text_default_domain"] ?? null);
        echo "
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_tinkoff_client_id\"  
\t\t\t\tvalue=\"";
        // line 2959
        echo ($context["socnetauth2_tinkoff_client_id"] ?? null);
        echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_tinkoff_client_secret\"  
\t\t\t\tvalue=\"";
        // line 2964
        echo ($context["socnetauth2_tinkoff_client_secret"] ?? null);
        echo "\" />
\t\t\t  </td>
\t\t\t  <td></td>
\t\t\t</tr>
          </tbody>
\t\t  ";
        // line 2969
        $context["tinkoff_req_row"] = 0;
        // line 2970
        echo "\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_tinkoff_req"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            echo " 
          <tbody id=\"tinkoff_req-row";
            // line 2971
            echo ($context["tinkoff_req_row"] ?? null);
            echo "\">
            <tr>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"socnetauth2_tinkoff_req[";
            // line 2974
            echo ($context["tinkoff_req_row"] ?? null);
            echo "][domain]\"  
\t\t\t\tvalue=\"";
            // line 2975
            echo (($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = $context["req"]) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["domain"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_tinkoff_req[";
            // line 2979
            echo ($context["tinkoff_req_row"] ?? null);
            echo "][bot_username]\"  
\t\t\t\tvalue=\"";
            // line 2980
            echo (($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = $context["req"]) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["bot_username"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
              <td class=\"left\">
\t\t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_tinkoff_req[";
            // line 2984
            echo ($context["tinkoff_req_row"] ?? null);
            echo "][bot_token]\"  
\t\t\t\tvalue=\"";
            // line 2985
            echo (($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = $context["req"]) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d["bot_token"] ?? null) : null);
            echo "\" />
\t\t\t  </td>
\t\t\t  <td><a onclick=\"\$('#tinkoff_req-row";
            // line 2987
            echo ($context["tinkoff_req_row"] ?? null);
            echo "').remove();\" class=\"btn btn-primary\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t</tr> 
          </tbody>
\t\t  ";
            // line 2990
            $context["tinkoff_req_row"] = (($context["tinkoff_req_row"] ?? null) + 1);
            // line 2991
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2992
        echo "          <tfoot>
            <tr>
              <td colspan=\"3\"></td>
              <td class=\"left\"><a onclick=\"addTinkoffReq();\" class=\"btn btn-primary\"
\t\t\t  >";
        // line 2996
        echo ($context["button_add"] ?? null);
        echo "</a></td>
            </tr>
          </tfoot>
        </table>
\t\t<script>
\t\tvar tinkoff_req_row = ";
        // line 3001
        echo ($context["tinkoff_req_row"] ?? null);
        echo ";
\t\t
\t\tfunction addTinkoffReq()
\t\t{
\t\t\thtml = '';
\t\t\t
\t\t\thtml += '<tbody id=\"tinkoff_req-row'+tinkoff_req_row+'\">';
\t\t\thtml += '<tr>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" name=\"socnetauth2_tinkoff_req['+tinkoff_req_row+'][domain]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += ' name=\"socnetauth2_tinkoff_req['+tinkoff_req_row+'][client_id]\"  />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\">';
\t\t\thtml += '<input type=\"text\" class=\"form-control\" ';
\t\t\thtml += 'name=\"socnetauth2_tinkoff_req['+tinkoff_req_row+'][client_secret]\"   />';
\t\t\thtml += '</td>';
\t\t\thtml += '<td class=\"left\"><a onclick=\"\$(\\'#tinkoff_req-row'+tinkoff_req_row+'\\').remove();\" class=\"btn btn-primary\">";
        // line 3020
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\t\t\thtml += '</tr> ';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t
\t\t\t\$('#tinkoff_req tfoot').before(html);
\t\t\t
\t\t\ttinkoff_req_row++;
\t\t}
\t\t</script>
\t  </div>
\t  <div id=\"tab-dobor\" class=\"tab-pane\">
\t  
        <p><b>";
        // line 3033
        echo ($context["entry_confirm_data"] ?? null);
        echo "</b></p>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3037
        echo ($context["entry_dobortype"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t
\t\t\t\t<select  class=\"form-control\" name=\"socnetauth2_dobortype\">
\t\t\t\t\t<option value=\"one\"
                    ";
        // line 3043
        if ((($context["socnetauth2_dobortype"] ?? null) == "one")) {
            echo "selected ";
        }
        // line 3044
        echo "\t\t\t\t\t>";
        echo ($context["entry_dobortype_one"] ?? null);
        echo "</option>
\t\t\t\t\t<option value=\"every\"
                    ";
        // line 3046
        if ((($context["socnetauth2_dobortype"] ?? null) == "every")) {
            echo " selected ";
        }
        // line 3047
        echo "\t\t\t\t\t>";
        echo ($context["entry_dobortype_every"] ?? null);
        echo "</option>
\t\t\t\t</select>
\t\t\t</div>
        </div>
\t\t
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3055
        echo ($context["entry_dobor_pages"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<table >  
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td >";
        // line 3060
        echo ($context["entry_redirect_url_account"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td style=\"padding-left: 10px;\"><select  class=\"form-control\" 
\t\t\t\t\t\t\tname=\"socnetauth2_dobor_page_account\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<option value=\"1\"
\t\t\t\t\t\t\t\t\t";
        // line 3065
        if (($context["socnetauth2_dobor_page_account"] ?? null)) {
            echo " selected ";
        }
        // line 3066
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\"
\t\t\t\t\t\t\t\t\t";
        // line 3068
        if (($context["socnetauth2_dobor_page_account"] ?? null)) {
        } else {
            echo " selected ";
        }
        // line 3069
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td >";
        // line 3074
        echo ($context["entry_redirect_url_reg"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td style=\"padding-left: 10px;\" ><select  class=\"form-control\" 
\t\t\t\t\t\t\tname=\"socnetauth2_dobor_page_reg\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<option value=\"1\"
\t\t\t\t\t\t\t\t\t";
        // line 3079
        if (($context["socnetauth2_dobor_page_reg"] ?? null)) {
            echo " selected ";
        }
        // line 3080
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\"
\t\t\t\t\t\t\t\t\t";
        // line 3082
        if (($context["socnetauth2_dobor_page_reg"] ?? null)) {
            echo " ";
        } else {
            echo " selected ";
        }
        // line 3083
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td >";
        // line 3088
        echo ($context["entry_redirect_url_checkout"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td  style=\"padding-left: 10px;\"><select  class=\"form-control\" 
\t\t\t\t\t\t\tname=\"socnetauth2_dobor_page_checkout\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<option value=\"1\"
\t\t\t\t\t\t\t\t\t";
        // line 3093
        if (($context["socnetauth2_dobor_page_checkout"] ?? null)) {
            echo " selected ";
        }
        // line 3094
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\"
\t\t\t\t\t\t\t\t\t";
        // line 3096
        if (($context["socnetauth2_dobor_page_checkout"] ?? null)) {
            echo " ";
        } else {
            echo "  selected ";
        }
        // line 3097
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3107
        echo ($context["entry_is_close_disabled"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\" style=\"padding: 20px;\">
\t\t\t\t<input type=\"checkbox\" class=\"form-control\" 
\t\t\t\tname=\"socnetauth2_is_close_disabled\"  
\t\t\t\tvalue=\"1\" 
\t\t\t   ";
        // line 3113
        if (($context["socnetauth2_is_close_disabled"] ?? null)) {
            echo " checked ";
        }
        // line 3114
        echo "\t\t\t\t/>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3120
        echo ($context["entry_confirm_firstname"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_firstname_status\">
                    ";
        // line 3124
        if ((($context["socnetauth2_confirm_firstname_status"] ?? null) == 1)) {
            // line 3125
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3126
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3127
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } elseif ((        // line 3128
($context["socnetauth2_confirm_firstname_status"] ?? null) == 2)) {
            // line 3129
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3130
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3131
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3133
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3134
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3135
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3137
        echo "                </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_firstname_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_firstname_required\"
\t\t\t   ";
        // line 3140
        if (($context["socnetauth2_confirm_firstname_required"] ?? null)) {
            // line 3141
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3143
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_firstname_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_firstname_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_firstname_hideifhas\"
\t\t\t\t ";
        // line 3147
        if (($context["socnetauth2_confirm_firstname_hideifhas"] ?? null)) {
            // line 3148
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3150
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_firstname_hideifhas\"
\t\t\t\t>";
        // line 3151
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3158
        echo ($context["entry_confirm_lastname"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_lastname_status\">
\t\t\t\t\t";
        // line 3162
        if ((($context["socnetauth2_confirm_lastname_status"] ?? null) == 1)) {
            // line 3163
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3164
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3165
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } elseif ((        // line 3166
($context["socnetauth2_confirm_lastname_status"] ?? null) == 2)) {
            // line 3167
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3168
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3169
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3171
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3172
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3173
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3175
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_lastname_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_lastname_required\"
\t\t\t   ";
        // line 3178
        if (($context["socnetauth2_confirm_lastname_required"] ?? null)) {
            // line 3179
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3181
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_lastname_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_lastname_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_lastname_hideifhas\"
\t\t\t\t ";
        // line 3186
        if (($context["socnetauth2_confirm_lastname_hideifhas"] ?? null)) {
            // line 3187
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3189
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_lastname_hideifhas\"
\t\t\t\t>";
        // line 3190
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3197
        echo ($context["entry_confirm_email"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_email_status\">
\t\t\t\t\t";
        // line 3201
        if ((($context["socnetauth2_confirm_email_status"] ?? null) == 1)) {
            // line 3202
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3203
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3204
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } elseif ((        // line 3205
($context["socnetauth2_confirm_email_status"] ?? null) == 2)) {
            // line 3206
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3207
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3208
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3210
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3211
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3212
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3214
        echo "                </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_email_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_email_required\"
\t\t\t   ";
        // line 3217
        if (($context["socnetauth2_confirm_email_required"] ?? null)) {
            // line 3218
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3220
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_email_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_email_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_email_hideifhas\"
\t\t\t\t ";
        // line 3223
        if (($context["socnetauth2_confirm_email_hideifhas"] ?? null)) {
            // line 3224
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3226
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_email_hideifhas\"
\t\t\t\t>";
        // line 3227
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3234
        echo ($context["entry_confirm_phone"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_telephone_status\">
                 ";
        // line 3238
        if ((($context["socnetauth2_confirm_telephone_status"] ?? null) == 1)) {
            // line 3239
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3240
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3241
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 3242
($context["socnetauth2_confirm_telephone_status"] ?? null) == 2)) {
            // line 3243
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3244
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3245
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3247
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3248
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3249
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3251
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_telephone_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_telephone_required\"
\t\t\t   ";
        // line 3254
        if (($context["socnetauth2_confirm_telephone_required"] ?? null)) {
            // line 3255
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3257
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_telephone_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_telephone_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_telephone_hideifhas\"
\t\t\t\t ";
        // line 3261
        if (($context["socnetauth2_confirm_telephone_hideifhas"] ?? null)) {
            // line 3262
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3264
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_telephone_hideifhas\"
\t\t\t\t>";
        // line 3265
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_telephone_isuniq\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_telephone_isuniq\"
\t\t\t\t ";
        // line 3270
        if (($context["socnetauth2_confirm_telephone_isuniq"] ?? null)) {
            echo " 
\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3273
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_telephone_isuniq\">";
        echo ($context["text_uniq_field"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t</div>
        </div>
\t\t
\t\t";
        // line 3279
        echo "\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3281
        echo ($context["entry_telephone_mask"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\"  class=\"form-control\"
\t\t\t\tname=\"socnetauth2_telephone_mask\" 
\t\t\t\tvalue=\"";
        // line 3286
        echo ($context["socnetauth2_telephone_mask"] ?? null);
        echo "\" >
\t\t\t\t<div>";
        // line 3287
        echo ($context["entry_telephone_mask_notice"] ?? null);
        echo "</div>
\t\t\t</div>
        </div>
\t\t";
        // line 3291
        echo "\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3293
        echo ($context["entry_confirm_company"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_company_status\">
                 ";
        // line 3297
        if ((($context["socnetauth2_confirm_company_status"] ?? null) == 1)) {
            // line 3298
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3299
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3300
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 3301
($context["socnetauth2_confirm_company_status"] ?? null) == 2)) {
            // line 3302
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3303
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3304
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3306
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3307
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3308
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3310
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_company_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_company_required\"
\t\t\t   ";
        // line 3313
        if (($context["socnetauth2_confirm_company_required"] ?? null)) {
            // line 3314
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3316
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_company_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_company_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_company_hideifhas\"
\t\t\t\t ";
        // line 3320
        if (($context["socnetauth2_confirm_company_hideifhas"] ?? null)) {
            // line 3321
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3323
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_company_hideifhas\"
\t\t\t\t>";
        // line 3324
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3330
        echo ($context["entry_confirm_username"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_username_status\"> 
\t\t\t\t";
        // line 3334
        if ((($context["socnetauth2_confirm_username_status"] ?? null) == 1)) {
            // line 3335
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3336
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3337
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 3338
($context["socnetauth2_confirm_username_status"] ?? null) == 2)) {
            echo " 
\t\t\t\t\t<option value=\"0\">";
            // line 3339
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3340
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3341
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3343
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3344
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3345
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3347
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_username_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_username_required\"
\t\t\t\t";
        // line 3350
        if (($context["socnetauth2_confirm_username_required"] ?? null)) {
            echo " 
\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3353
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_username_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t 
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_username_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_username_hideifhas\"
\t\t\t\t";
        // line 3357
        if (($context["socnetauth2_confirm_username_hideifhas"] ?? null)) {
            echo "  
\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3360
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_username_hideifhas\">";
        echo ($context["text_hideifhas"] ?? null);
        echo "</label> 
\t\t\t\t
\t\t\t</div>
        </div>
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3366
        echo ($context["entry_confirm_postcode"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_postcode_status\">
                 ";
        // line 3370
        if ((($context["socnetauth2_confirm_postcode_status"] ?? null) == 1)) {
            // line 3371
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3372
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3373
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 3374
($context["socnetauth2_confirm_postcode_status"] ?? null) == 2)) {
            // line 3375
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3376
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3377
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3379
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3380
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3381
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3383
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_postcode_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_postcode_required\"
\t\t\t   ";
        // line 3386
        if (($context["socnetauth2_confirm_postcode_required"] ?? null)) {
            // line 3387
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3389
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_postcode_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_postcode_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_postcode_hideifhas\"
\t\t\t\t ";
        // line 3394
        if (($context["socnetauth2_confirm_postcode_hideifhas"] ?? null)) {
            // line 3395
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3397
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_postcode_hideifhas\"
\t\t\t\t>";
        // line 3398
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3404
        echo ($context["entry_confirm_country"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_country_status\">
                 ";
        // line 3408
        if ((($context["socnetauth2_confirm_country_status"] ?? null) == 1)) {
            // line 3409
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3410
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3411
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 3412
($context["socnetauth2_confirm_country_status"] ?? null) == 2)) {
            // line 3413
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3414
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3415
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3417
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3418
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3419
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3421
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_country_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_country_required\"
\t\t\t   ";
        // line 3424
        if (($context["socnetauth2_confirm_country_required"] ?? null)) {
            // line 3425
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3427
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_country_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_country_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_country_hideifhas\"
\t\t\t\t ";
        // line 3431
        if (($context["socnetauth2_confirm_country_hideifhas"] ?? null)) {
            // line 3432
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3434
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_country_hideifhas\"
\t\t\t\t>";
        // line 3435
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3441
        echo ($context["entry_confirm_zone"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_zone_status\">
                 ";
        // line 3445
        if ((($context["socnetauth2_confirm_zone_status"] ?? null) == 1)) {
            // line 3446
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3447
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3448
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 3449
($context["socnetauth2_confirm_zone_status"] ?? null) == 2)) {
            // line 3450
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3451
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3452
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3454
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3455
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3456
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3458
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_zone_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_zone_required\"
\t\t\t   ";
        // line 3461
        if (($context["socnetauth2_confirm_zone_required"] ?? null)) {
            // line 3462
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3464
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_zone_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_zone_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_zone_hideifhas\"
\t\t\t\t ";
        // line 3468
        if (($context["socnetauth2_confirm_zone_hideifhas"] ?? null)) {
            // line 3469
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3471
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_zone_hideifhas\"
\t\t\t\t>";
        // line 3472
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3478
        echo ($context["entry_confirm_city"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_city_status\">
                 ";
        // line 3482
        if ((($context["socnetauth2_confirm_city_status"] ?? null) == 1)) {
            // line 3483
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3484
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3485
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 3486
($context["socnetauth2_confirm_city_status"] ?? null) == 2)) {
            // line 3487
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3488
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3489
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3491
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3492
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3493
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3495
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_city_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_city_required\"
\t\t\t   ";
        // line 3498
        if (($context["socnetauth2_confirm_city_required"] ?? null)) {
            // line 3499
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3501
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_city_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_city_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_city_hideifhas\"
\t\t\t\t ";
        // line 3505
        if (($context["socnetauth2_confirm_city_hideifhas"] ?? null)) {
            // line 3506
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3508
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_city_hideifhas\"
\t\t\t\t>";
        // line 3509
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3515
        echo ($context["entry_confirm_address_1"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_address_1_status\">
                 ";
        // line 3519
        if ((($context["socnetauth2_confirm_address_1_status"] ?? null) == 1)) {
            // line 3520
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3521
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" >";
            // line 3522
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 3523
($context["socnetauth2_confirm_address_1_status"] ?? null) == 2)) {
            // line 3524
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" >";
            // line 3525
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\" selected=\"selected\" >";
            // line 3526
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3528
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_confirm_disable"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3529
            echo ($context["text_confirm_none"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"2\">";
            // line 3530
            echo ($context["text_confirm_allways"] ?? null);
            echo "</option>
\t\t\t\t  ";
        }
        // line 3532
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_address_1_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_address_1_required\"
\t\t\t   ";
        // line 3535
        if (($context["socnetauth2_confirm_address_1_required"] ?? null)) {
            // line 3536
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3538
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_address_1_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_address_1_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_address_1_hideifhas\"
\t\t\t\t ";
        // line 3542
        if (($context["socnetauth2_confirm_address_1_hideifhas"] ?? null)) {
            // line 3543
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3545
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_address_1_hideifhas\"
\t\t\t\t>";
        // line 3546
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t";
        // line 3551
        echo "\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3553
        echo ($context["entry_confirm_group"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_group_status\">
                 ";
        // line 3557
        if ((($context["socnetauth2_confirm_group_status"] ?? null) == 1)) {
            // line 3558
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3559
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 3561
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3562
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t  
\t\t\t\t  ";
        }
        // line 3565
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_group_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_group_required\"
\t\t\t   ";
        // line 3568
        if (($context["socnetauth2_confirm_group_required"] ?? null)) {
            // line 3569
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3571
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_group_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_group_hideifhas\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_group_hideifhas\"
\t\t\t\t ";
        // line 3575
        if (($context["socnetauth2_confirm_group_hideifhas"] ?? null)) {
            // line 3576
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3578
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_group_hideifhas\"
\t\t\t\t>";
        // line 3579
        echo ($context["text_hideifhas"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t";
        // line 3583
        echo "\t\t
\t\t";
        // line 3585
        echo "\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3587
        echo ($context["entry_agree"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_agree_status\">
\t\t\t\t\t<option value=\"0\">";
        // line 3591
        echo ($context["entry_agree_no"] ?? null);
        echo "</option>
\t\t\t\t\t
                 ";
        // line 3593
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["inf"]) {
            // line 3594
            echo "\t\t\t\t\t<option value=\"";
            echo (($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = $context["inf"]) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2["information_id"] ?? null) : null);
            echo "\" 
\t\t\t\t\t";
            // line 3595
            if (((($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = $context["inf"]) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["information_id"] ?? null) : null) == ($context["socnetauth2_confirm_agree_status"] ?? null))) {
                echo " 
\t\t\t\t\tselected=\"selected\" ";
            }
            // line 3597
            echo "\t\t\t\t\t>";
            echo (($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = $context["inf"]) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a["title"] ?? null) : null);
            echo "</option>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3599
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_agree_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_agree_required\"
\t\t\t   ";
        // line 3602
        if (($context["socnetauth2_confirm_agree_required"] ?? null)) {
            // line 3603
            echo "\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3605
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_agree_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t";
        // line 3609
        echo "\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3611
        echo ($context["entry_agree2"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_agree2_status\">
\t\t\t\t\t<option value=\"0\">";
        // line 3615
        echo ($context["entry_agree_no"] ?? null);
        echo "</option>
                 ";
        // line 3616
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["inf"]) {
            // line 3617
            echo "\t\t\t\t\t<option value=\"";
            echo (($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = $context["inf"]) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["information_id"] ?? null) : null);
            echo "\" 
\t\t\t\t\t
\t\t\t\t\t";
            // line 3619
            if (((($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = $context["inf"]) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["information_id"] ?? null) : null) == ($context["socnetauth2_confirm_agree2_status"] ?? null))) {
                echo "  
\t\t\t\t\t selected=\"selected\" ";
            }
            // line 3621
            echo "\t\t\t\t\t>";
            echo (($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = $context["inf"]) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["title"] ?? null) : null);
            echo "</option>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3623
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_agree2_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_agree2_required\"
\t\t\t   ";
        // line 3626
        if (($context["socnetauth2_confirm_agree2_required"] ?? null)) {
            echo " 
\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3629
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_agree2_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3635
        echo ($context["entry_agree3"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_agree3_status\">
\t\t\t\t\t<option value=\"0\">";
        // line 3639
        echo ($context["entry_agree_no"] ?? null);
        echo "</option>
\t\t\t\t\t
                 ";
        // line 3641
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["inf"]) {
            // line 3642
            echo "\t\t\t\t\t<option value=\"";
            echo (($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = $context["inf"]) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["information_id"] ?? null) : null);
            echo "\" 
\t\t\t\t\t";
            // line 3643
            if (((($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = $context["inf"]) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["information_id"] ?? null) : null) == ($context["socnetauth2_confirm_agree3_status"] ?? null))) {
                echo "  
\t\t\t\t\t  selected=\"selected\" ";
            }
            // line 3645
            echo "\t\t\t\t\t>";
            echo (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = $context["inf"]) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d["title"] ?? null) : null);
            echo "</option>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3647
        echo "                 </select>
\t\t\t\t<input type=\"checkbox\" name=\"socnetauth2_confirm_agree3_required\" value=\"1\"
\t\t\t\tid=\"socnetauth2_confirm_agree3_required\"
\t\t\t   ";
        // line 3650
        if (($context["socnetauth2_confirm_agree3_required"] ?? null)) {
            echo "  
\t\t\t\tchecked
\t\t\t\t";
        }
        // line 3653
        echo "\t\t\t\t><label for=\"socnetauth2_confirm_agree3_required\">";
        echo ($context["text_required"] ?? null);
        echo "</label>
\t\t\t</div>
        </div>
\t\t
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3659
        echo ($context["entry_confirm_newsletter"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t\t<select  class=\"form-control\" name=\"socnetauth2_confirm_newsletter\">
\t\t\t\t\t";
        // line 3663
        if (($context["socnetauth2_confirm_newsletter"] ?? null)) {
            // line 3664
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\" selected=\"selected\" >";
            // line 3665
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t    ";
        } else {
            // line 3667
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"1\">";
            // line 3668
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 3670
        echo "                 </select>
\t\t\t</div>
        </div>
\t\t
\t  </div>
\t  <!-- /////////////////////////////////////////////////////////////////////////////// -->
\t  <div id=\"tab-widget\" class=\"tab-pane\">
\t  
\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t";
        // line 3680
        echo ($context["entry_widget_name"] ?? null);
        echo "
\t\t\t</label>
            <div class=\"col-sm-10\">
\t\t\t
\t  \t\t";
        // line 3684
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3685
            echo "\t\t\t<p>
\t\t\t<input type=\"text\"  class=\"form-control\"  name=\"socnetauth2_widget_name[";
            // line 3686
            echo (($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = $context["language"]) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e["language_id"] ?? null) : null);
            echo "]\" 
\t\t\tvalue=\"";
            // line 3687
            echo (($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = ($context["socnetauth2_widget_name"] ?? null)) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81[(($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = $context["language"]) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\tsrc=\"";
            // line 3688
            echo (($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 = $context["language"]) && is_array($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786) || $__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 instanceof ArrayAccess ? ($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 = $context["language"]) && is_array($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4) || $__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 instanceof ArrayAccess ? ($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3691
        echo "\t\t\t</div>
        </div>
\t\t
\t  </div>
\t  <!-- /////////////////////////////////////////////////////////////////////////////// -->
\t  
\t  <div id=\"tab-design\" class=\"tab-pane\">
\t\t<div class=\"row\">
\t\t
\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li ";
        // line 3702
        if ((($context["tab2"] ?? null) == "general")) {
            echo "class=\"active\" ";
        }
        echo " style=\"cursor: pointer;\">
\t\t\t\t\t\t<a onclick=\"\$('#hiddentab2').val('general'); \$('.design_options').hide(); \$('#tab-design-general').show();\" data-toggle=\"tab\" 
\t\t\t\t\t\taria-expanded=\"true\"> ";
        // line 3704
        echo ($context["tab_design_general"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li  ";
        // line 3706
        if ((($context["tab2"] ?? null) == "account")) {
            echo "class=\"active\" ";
        }
        echo " style=\"cursor: pointer;\">
\t\t\t\t\t\t<a onclick=\"\$('#hiddentab2').val('account'); \$('.design_options').hide(); \$('#tab-design-account').show();\" data-toggle=\"tab\" 
\t\t\t\t\t\taria-expanded=\"true\"> ";
        // line 3708
        echo ($context["tab_design_account"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li  ";
        // line 3710
        if ((($context["tab2"] ?? null) == "checkout")) {
            echo "class=\"active\" ";
        }
        echo " style=\"cursor: pointer;\">
\t\t\t\t\t\t<a onclick=\"\$('#hiddentab2').val('checkout'); \$('.design_options').hide(); \$('#tab-design-checkout').show();\" data-toggle=\"tab\" 
\t\t\t\t\t\taria-expanded=\"true\"> ";
        // line 3712
        echo ($context["tab_design_checkout"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li  ";
        // line 3714
        if ((($context["tab2"] ?? null) == "reg")) {
            echo "class=\"active\" ";
        }
        echo " style=\"cursor: pointer;\">
\t\t\t\t\t\t<a onclick=\"\$('#hiddentab2').val('reg'); \$('.design_options').hide(); \$('#tab-design-reg').show();\"
\t\t\t\t\t\tdata-toggle=\"tab\" 
\t\t\t\t\t\taria-expanded=\"true\">";
        // line 3717
        echo ($context["tab_design_reg"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li  ";
        // line 3719
        if ((($context["tab2"] ?? null) == "icons")) {
            echo "class=\"active\" ";
        }
        echo " style=\"cursor: pointer; display: none;\">
\t\t\t\t\t\t<a onclick=\"\$('#hiddentab2').val('icons'); \$('.design_options').hide(); \$('#tab-design-icons').show();\"
\t\t\t\t\t\tdata-toggle=\"tab\" 
\t\t\t\t\t\taria-expanded=\"true\">";
        // line 3722
        echo ($context["tab_design_icons"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li  ";
        // line 3725
        if ((($context["tab2"] ?? null) == "widget")) {
            echo "class=\"active\" ";
        }
        echo " style=\"cursor: pointer;\">
\t\t\t\t\t\t<a onclick=\"\$('#hiddentab2').val('widget'); \$('.design_options').hide(); \$('#tab-design-widget').show();\"
\t\t\t\t\t\tdata-toggle=\"tab\" 
\t\t\t\t\t\taria-expanded=\"true\">";
        // line 3728
        echo ($context["tab_design_widget"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li  ";
        // line 3731
        if ((($context["tab2"] ?? null) == "popup")) {
            echo "class=\"active\" ";
        }
        echo " style=\"cursor: pointer;\">
\t\t\t\t\t\t<a onclick=\"\$('#hiddentab2').val('popup'); \$('.design_options').hide(); \$('#tab-design-popup').show();\"
\t\t\t\t\t\tdata-toggle=\"tab\" 
\t\t\t\t\t\taria-expanded=\"true\">";
        // line 3734
        echo ($context["tab_design_popup"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li  ";
        // line 3737
        if ((($context["tab2"] ?? null) == "confirm")) {
            echo "class=\"active\" ";
        }
        echo " style=\"cursor: pointer;\">
\t\t\t\t\t\t<a onclick=\"\$('#hiddentab2').val('confirm'); \$('.design_options').hide(); \$('#tab-design-confirm').show();\"
\t\t\t\t\t\tdata-toggle=\"tab\" 
\t\t\t\t\t\taria-expanded=\"true\">";
        // line 3740
        echo ($context["tab_design_confirm"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-sm-10\">
\t\t\t
\t\t\t\t<div id=\"tab-design-general\" class=\"design_options\"
\t\t\t\t ";
        // line 3748
        if ((($context["tab2"] ?? null) != "general")) {
            echo " style=\"display: none;\" ";
        }
        // line 3749
        echo "\t\t\t\t>
\t\t\t\t\t<h2>";
        // line 3750
        echo ($context["tab_design_general"] ?? null);
        echo "</h2>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3755
        echo ($context["entry_design_notice"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 3758
        echo ($context["entry_design_notice_text"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3765
        echo ($context["entry_design_general_css"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=10
\t\t\t\t\t\t\tname=\"socnetauth2_design_general_css\"
\t\t\t\t\t\t\t>";
        // line 3770
        echo ($context["socnetauth2_design_general_css"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3775
        echo ($context["entry_telegram_html"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_telegram_html\"
\t\t\t\t\t\t\t>";
        // line 3780
        echo ($context["socnetauth2_telegram_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3785
        echo ($context["entry_telegram_code"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\"> 
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3 
\t\t\t\t\t\t\tname=\"socnetauth2_telegram_code\"
\t\t\t\t\t\t\t>";
        // line 3790
        echo ($context["socnetauth2_telegram_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3795
        echo ($context["entry_socnets_icons"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t.table_icons { border-top: 1px #ccc solid; border-left: 1px #ccc solid; width: 100%; }
\t\t\t\t\t\t\t.table_icons td { padding: 10px; border-bottom: 1px #ccc solid; border-right: 1px #ccc solid;  }
\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t<table class=\"table_icons\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><b>";
        // line 3804
        echo ($context["entry_socnets_icons_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td><b>";
        // line 3805
        echo ($context["entry_socnets_icons_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td><b>";
        // line 3806
        echo ($context["entry_socnets_icons_image"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 3808
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socnetauth2_socnets_icons"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            echo " 
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 3810
            echo (($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 = $context["item"]) && is_array($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1) || $__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 instanceof ArrayAccess ? ($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1["name"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"socnetauth2_socnets_icons[";
            // line 3811
            echo (($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc = $context["item"]) && is_array($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc) || $__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc instanceof ArrayAccess ? ($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc["key"] ?? null) : null);
            echo "][sort_order]\" 
\t\t\t\t\t\t\t\t\t\t class=\"form-control\" value=\"";
            // line 3812
            echo (($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 = $context["item"]) && is_array($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6) || $__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 instanceof ArrayAccess ? ($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6["sort_order"] ?? null) : null);
            echo "\" /></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div id=\"icon_";
            // line 3814
            echo (($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 = $context["item"]) && is_array($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181) || $__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 instanceof ArrayAccess ? ($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181["key"] ?? null) : null);
            echo "\" >
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"  
\t\t\t\t\t\t\t\t\t\t\t\tid=\"thumb_";
            // line 3817
            echo (($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 = $context["item"]) && is_array($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9) || $__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 instanceof ArrayAccess ? ($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9["key"] ?? null) : null);
            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"image\" 
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\"
\t\t\t\t\t\t\t\t\t\t\t><img src=\"";
            // line 3820
            echo (($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af = $context["item"]) && is_array($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af) || $__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af instanceof ArrayAccess ? ($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af["thumb"] ?? null) : null);
            echo "\" 
\t\t\t\t\t\t\t\t\t\t\talt=\"\" title=\"\" 
\t\t\t\t\t\t\t\t\t\t\tdata-placeholder=\"";
            // line 3822
            echo (($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab = $context["item"]) && is_array($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab) || $__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab instanceof ArrayAccess ? ($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab["thumb"] ?? null) : null);
            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t></a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" 
\t\t\t\t\t\t\t\t\t\t\tname=\"socnetauth2_socnets_icons[";
            // line 3826
            echo (($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 = $context["item"]) && is_array($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94) || $__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 instanceof ArrayAccess ? ($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94["key"] ?? null) : null);
            echo "][image]\" 
\t\t\t\t\t\t\t\t\t\t\tid=\"image_";
            // line 3827
            echo (($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c = $context["item"]) && is_array($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c) || $__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c instanceof ArrayAccess ? ($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c["key"] ?? null) : null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 3828
            echo (($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd = $context["item"]) && is_array($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd) || $__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd instanceof ArrayAccess ? ($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd["image"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3834
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div id=\"tab-design-account\" class=\"design_options\"
\t\t\t\t ";
        // line 3842
        if ((($context["tab2"] ?? null) != "account")) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t<h2>";
        // line 3843
        echo ($context["tab_design_account"] ?? null);
        echo "</h2>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3847
        echo ($context["entry_status"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"socnetauth2_design_account_status\" class=\"form-control\" >
\t\t\t\t\t\t\t  ";
        // line 3851
        if (($context["socnetauth2_design_account_status"] ?? null)) {
            // line 3852
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" >";
            // line 3853
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        } else {
            // line 3855
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 3856
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        }
        // line 3858
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\" style=\"display: none;\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3863
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_design_account_html\"
\t\t\t\t\t\t\t>";
        // line 3868
        echo ($context["socnetauth2_design_account_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 3871
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"block_account_bline\"
\t\t\t\t\t\t";
        // line 3875
        if ((($context["socnetauth2_account_format"] ?? null) == "bline")) {
        } else {
            echo " style=\"display: none;\" ";
        }
        echo " 
\t\t\t\t\t>
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 3879
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_account_bline_html\"
\t\t\t\t\t\t\t\t>";
        // line 3884
        echo ($context["socnetauth2_design_account_bline_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 3887
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 3892
        echo ($context["entry_design_row_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_account_bline_row_html\"
\t\t\t\t\t\t\t\t>";
        // line 3897
        echo ($context["socnetauth2_design_account_bline_row_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 3900
        echo ($context["entry_design_html_row_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"block_account_kvadrat\"
\t\t\t\t\t\t";
        // line 3905
        if ((($context["socnetauth2_account_format"] ?? null) == "kvadrat")) {
        } else {
            echo " style=\"display: none;\" ";
        }
        echo "  
\t\t\t\t\t>
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 3909
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_account_kvadrat_html\"
\t\t\t\t\t\t\t\t>";
        // line 3914
        echo ($context["socnetauth2_design_account_kvadrat_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 3917
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 3922
        echo ($context["entry_design_row_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_account_kvadrat_row_html\"
\t\t\t\t\t\t\t\t>";
        // line 3927
        echo ($context["socnetauth2_design_account_kvadrat_row_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 3930
        echo ($context["entry_design_html_row_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3936
        echo ($context["entry_design_css"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_design_account_css\"
\t\t\t\t\t\t\t>";
        // line 3941
        echo ($context["socnetauth2_design_account_css"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3946
        echo ($context["entry_design_header"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 3949
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3950
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_account_header[";
            // line 3952
            echo (($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 = $context["language"]) && is_array($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0) || $__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 instanceof ArrayAccess ? ($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\t\t\tvalue=\"";
            // line 3953
            echo (($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b = ($context["socnetauth2_design_account_header"] ?? null)) && is_array($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b) || $__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b instanceof ArrayAccess ? ($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b[(($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 = $context["language"]) && is_array($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070) || $__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 instanceof ArrayAccess ? ($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" 
\t\t\t\t\t\t\t\t>&nbsp;<img 
\t\t\t\t\t\t\t\tsrc=\"";
            // line 3955
            echo (($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf = $context["language"]) && is_array($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf) || $__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf instanceof ArrayAccess ? ($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf["image"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3958
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t";
        // line 3962
        echo ($context["entry_account_imagesize"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\"> 
\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"socnetauth2_account_imagesize_width\" value=\"";
        // line 3967
        echo ($context["socnetauth2_account_imagesize_width"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t    class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"socnetauth2_account_imagesize_height\" value=\"";
        // line 3971
        echo ($context["socnetauth2_account_imagesize_height"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t  class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 3979
        echo ($context["entry_design_format"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<table class=\"format_table\" cellpadding=0 cellspacing=0 width=100%>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=50%><input type=\"radio\" name=\"socnetauth2_account_format\" value=\"bline\"
\t\t\t\t\t\t\t\t ";
        // line 3985
        if ((($context["socnetauth2_account_format"] ?? null) == "bline")) {
            echo " 
\t\t\t\t\t\t\t\t checked  
\t\t\t\t\t\t\t\t ";
        }
        // line 3987
        echo "  
\t\t\t\t\t\t\t\tonclick=\"showHideDesignBlock('bline', 'account');\"
\t\t\t\t\t\t\t\tid=\"socnetauth2_account_format_bline\"
\t\t\t\t\t\t\t\t><label for=\"socnetauth2_account_format_bline\">";
        // line 3990
        echo ($context["text_format_bline"] ?? null);
        echo "</label></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td width=50%><input type=\"radio\" name=\"socnetauth2_account_format\" value=\"kvadrat\"
\t\t\t\t\t\t\t\t";
        // line 3993
        if ((($context["socnetauth2_account_format"] ?? null) == "kvadrat")) {
            echo " 
\t\t\t\t\t\t\t\t checked  
\t\t\t\t\t\t\t\t ";
        }
        // line 3995
        echo "  
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\tid=\"socnetauth2_account_format_kvadrat\"
\t\t\t\t\t\t\t\tonclick=\"showHideDesignBlock('kvadrat', 'account');\"
\t\t\t\t\t\t\t\t><label for=\"socnetauth2_account_format_kvadrat\"
\t\t\t\t\t\t\t\t>";
        // line 4000
        echo ($context["text_format_kvadrat"] ?? null);
        echo "</label></td> 
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td valign=top><img src=\"view/image/socnetauth2/bline.png\" style=\"border: 1px #ededed solid;\"></td>
\t\t\t\t\t\t\t\t<td valign=top><img src=\"view/image/socnetauth2/kvadrat.png\" style=\"border: 1px #ededed solid;\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-design-checkout\" class=\"design_options\"
\t\t\t\t ";
        // line 4016
        if ((($context["tab2"] ?? null) != "checkout")) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t
\t\t\t\t\t<h2>";
        // line 4018
        echo ($context["tab_design_checkout"] ?? null);
        echo "</h2>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4022
        echo ($context["entry_status"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"socnetauth2_design_checkout_status\" class=\"form-control\" >
\t\t\t\t\t\t\t  ";
        // line 4026
        if (($context["socnetauth2_design_checkout_status"] ?? null)) {
            // line 4027
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" >";
            // line 4028
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        } else {
            // line 4030
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 4031
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        }
        // line 4033
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\" style=\"display: none;\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4038
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_design_checkout_html\"
\t\t\t\t\t\t\t>";
        // line 4043
        echo ($context["socnetauth2_design_checkout_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 4046
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div id=\"block_checkout_bline\"
\t\t\t\t\t\t";
        // line 4051
        if ((($context["socnetauth2_checkout_format"] ?? null) == "bline")) {
            echo " ";
        } else {
            echo " style=\"display: none;\" 
\t\t\t\t\t\t\t\t ";
        }
        // line 4052
        echo "   
\t\t\t\t\t>
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4056
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_checkout_bline_html\"
\t\t\t\t\t\t\t\t>";
        // line 4061
        echo ($context["socnetauth2_design_checkout_bline_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4064
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4069
        echo ($context["entry_design_row_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_checkout_bline_row_html\"
\t\t\t\t\t\t\t\t>";
        // line 4074
        echo ($context["socnetauth2_design_checkout_bline_row_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4077
        echo ($context["entry_design_html_row_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"block_checkout_kvadrat\" 
\t\t\t\t\t\t";
        // line 4082
        if ((($context["socnetauth2_checkout_format"] ?? null) == "kvadrat")) {
            echo " ";
        } else {
            echo " style=\"display: none;\" 
\t\t\t\t\t\t\t\t ";
        }
        // line 4083
        echo "   
\t\t\t\t\t>
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4087
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_checkout_kvadrat_html\"
\t\t\t\t\t\t\t\t>";
        // line 4092
        echo ($context["socnetauth2_design_checkout_kvadrat_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4095
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4100
        echo ($context["entry_design_row_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_checkout_kvadrat_row_html\"
\t\t\t\t\t\t\t\t>";
        // line 4105
        echo ($context["socnetauth2_design_checkout_kvadrat_row_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4108
        echo ($context["entry_design_html_row_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4114
        echo ($context["entry_design_css"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_design_checkout_css\"
\t\t\t\t\t\t\t>";
        // line 4119
        echo ($context["socnetauth2_design_checkout_css"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4124
        echo ($context["entry_design_header"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 4127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4128
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_checkout_header[";
            // line 4130
            echo (($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e = $context["language"]) && is_array($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e) || $__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e instanceof ArrayAccess ? ($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\t\t\tvalue=\"";
            // line 4131
            echo (($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 = ($context["socnetauth2_design_checkout_header"] ?? null)) && is_array($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4) || $__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 instanceof ArrayAccess ? ($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4[(($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 = $context["language"]) && is_array($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825) || $__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 instanceof ArrayAccess ? ($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\t\t\tsrc=\"";
            // line 4132
            echo (($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 = $context["language"]) && is_array($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308) || $__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 instanceof ArrayAccess ? ($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb = $context["language"]) && is_array($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb) || $__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb instanceof ArrayAccess ? ($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4135
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t";
        // line 4140
        echo ($context["entry_checkout_imagesize"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\"> 
\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"socnetauth2_checkout_imagesize_width\" value=\"";
        // line 4145
        echo ($context["socnetauth2_checkout_imagesize_width"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t    class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"socnetauth2_checkout_imagesize_height\" value=\"";
        // line 4149
        echo ($context["socnetauth2_checkout_imagesize_height"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t  class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4157
        echo ($context["entry_design_format"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<table class=\"format_table\" cellpadding=0 cellspacing=0 width=100%>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td width=50%><input type=\"radio\" name=\"socnetauth2_checkout_format\" value=\"bline\" 
\t\t\t\t\t\t\t\t";
        // line 4165
        if ((($context["socnetauth2_checkout_format"] ?? null) == "bline")) {
            echo " checked ";
        }
        echo " 
\t\t\t\t\t\t\t\tid=\"socnetauth2_checkout_format_bline\"
\t\t\t\t\t\t\t\tonclick=\"showHideDesignBlock('bline', 'checkout');\"
\t\t\t\t\t\t\t\t><label for=\"socnetauth2_checkout_format_bline\">";
        // line 4168
        echo ($context["text_format_bline"] ?? null);
        echo "</label></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td width=50%><input type=\"radio\" name=\"socnetauth2_checkout_format\" value=\"kvadrat\"
\t\t\t\t\t\t\t\tonclick=\"showHideDesignBlock('kvadrat', 'checkout');\"
\t\t\t\t\t\t\t\t";
        // line 4172
        if ((($context["socnetauth2_checkout_format"] ?? null) == "kvadrat")) {
            echo " checked ";
        }
        echo " 
\t\t\t\t\t\t\t\tid=\"socnetauth2_checkout_format_kvadrat\"
\t\t\t\t\t\t\t\t><label for=\"socnetauth2_checkout_format_kvadrat\"
\t\t\t\t\t\t\t\t>";
        // line 4175
        echo ($context["text_format_kvadrat"] ?? null);
        echo "</label></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td valign=top><img src=\"view/image/socnetauth2/bline.png\" style=\"border: 1px #ededed solid;\"></td>
\t\t\t\t\t\t\t\t<td valign=top><img src=\"view/image/socnetauth2/kvadrat.png\" style=\"border: 1px #ededed solid;\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-design-reg\" class=\"design_options\"
\t\t\t\t";
        // line 4189
        if ((($context["tab2"] ?? null) != "reg")) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t<h2>";
        // line 4190
        echo ($context["tab_design_reg"] ?? null);
        echo "</h2>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4194
        echo ($context["entry_status"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"socnetauth2_design_reg_status\" class=\"form-control\" >
\t\t\t\t\t\t\t  ";
        // line 4198
        if (($context["socnetauth2_design_reg_status"] ?? null)) {
            // line 4199
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" >";
            // line 4200
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        } else {
            // line 4202
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 4203
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        }
        // line 4205
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\" style=\"display: none;\" >
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4210
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_design_reg_html\"
\t\t\t\t\t\t\t>";
        // line 4215
        echo ($context["socnetauth2_design_reg_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 4218
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"block_reg_bline\" 
\t\t\t\t\t\t";
        // line 4222
        if ((($context["socnetauth2_reg_format"] ?? null) == "bline")) {
            echo " ";
        } else {
            echo " style=\"display: none;\" 
\t\t\t\t\t\t\t\t ";
        }
        // line 4223
        echo "   
\t\t\t\t\t>
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4227
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_reg_bline_html\"
\t\t\t\t\t\t\t\t>";
        // line 4232
        echo ($context["socnetauth2_design_reg_bline_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4235
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4240
        echo ($context["entry_design_row_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_reg_bline_row_html\"
\t\t\t\t\t\t\t\t>";
        // line 4245
        echo ($context["socnetauth2_design_reg_bline_row_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4248
        echo ($context["entry_design_html_row_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"block_reg_kvadrat\" 
\t\t\t\t\t\t";
        // line 4253
        if ((($context["socnetauth2_reg_format"] ?? null) == "kvadrat")) {
            echo " ";
        } else {
            echo " style=\"display: none;\" 
\t\t\t\t\t\t\t\t ";
        }
        // line 4254
        echo "   
\t\t\t\t\t>
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4258
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_reg_kvadrat_html\"
\t\t\t\t\t\t\t\t>";
        // line 4263
        echo ($context["socnetauth2_design_reg_kvadrat_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4266
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4271
        echo ($context["entry_design_row_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_reg_kvadrat_row_html\"
\t\t\t\t\t\t\t\t>";
        // line 4276
        echo ($context["socnetauth2_design_reg_kvadrat_row_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4279
        echo ($context["entry_design_html_row_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4286
        echo ($context["entry_design_css"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_design_reg_css\"
\t\t\t\t\t\t\t>";
        // line 4291
        echo ($context["socnetauth2_design_reg_css"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4296
        echo ($context["entry_design_header"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 4299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4300
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_reg_header[";
            // line 4302
            echo (($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 = $context["language"]) && is_array($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7) || $__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 instanceof ArrayAccess ? ($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\t\t\tvalue=\"";
            // line 4303
            echo (($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 = ($context["socnetauth2_design_reg_header"] ?? null)) && is_array($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9) || $__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 instanceof ArrayAccess ? ($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9[(($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 = $context["language"]) && is_array($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446) || $__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 instanceof ArrayAccess ? ($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\t\t\tsrc=\"";
            // line 4304
            echo (($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d = $context["language"]) && is_array($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d) || $__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d instanceof ArrayAccess ? ($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e = $context["language"]) && is_array($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e) || $__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e instanceof ArrayAccess ? ($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4307
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t";
        // line 4312
        echo ($context["entry_reg_imagesize"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\"> 
\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"socnetauth2_reg_imagesize_width\" value=\"";
        // line 4317
        echo ($context["socnetauth2_reg_imagesize_width"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t    class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"socnetauth2_reg_imagesize_height\" value=\"";
        // line 4321
        echo ($context["socnetauth2_reg_imagesize_height"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t  class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4329
        echo ($context["entry_design_format"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<table class=\"format_table\" cellpadding=0 cellspacing=0 width=100%>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td width=50%><input type=\"radio\" name=\"socnetauth2_reg_format\" value=\"bline\"
\t\t\t\t\t\t\t\t";
        // line 4337
        if ((($context["socnetauth2_reg_format"] ?? null) == "bline")) {
            echo " checked ";
        }
        echo "  
\t\t\t\t\t\t\t\tonclick=\"showHideDesignBlock('bline', 'reg');\"
\t\t\t\t\t\t\t\tid=\"socnetauth2_reg_format_bline\"
\t\t\t\t\t\t\t\t><label for=\"socnetauth2_reg_format_bline\">";
        // line 4340
        echo ($context["text_format_bline"] ?? null);
        echo "</label></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td width=50%><input type=\"radio\" name=\"socnetauth2_reg_format\" value=\"kvadrat\"
\t\t\t\t\t\t\t\t";
        // line 4343
        if ((($context["socnetauth2_reg_format"] ?? null) == "kvadrat")) {
            echo " checked ";
        }
        echo " 
\t\t\t\t\t\t\t\tonclick=\"showHideDesignBlock('kvadrat', 'reg');\"
\t\t\t\t\t\t\t\tid=\"socnetauth2_reg_format_kvadrat\"
\t\t\t\t\t\t\t\t><label for=\"socnetauth2_reg_format_kvadrat\"
\t\t\t\t\t\t\t\t>";
        // line 4347
        echo ($context["text_format_kvadrat"] ?? null);
        echo "</label></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td valign=top><img src=\"view/image/socnetauth2/bline.png\" style=\"border: 1px #ededed solid;\"></td>
\t\t\t\t\t\t\t\t<td valign=top><img src=\"view/image/socnetauth2/kvadrat.png\" style=\"border: 1px #ededed solid;\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-design-icons\" class=\"design_options\"
\t\t\t\t";
        // line 4361
        if ((($context["tab2"] ?? null) != "icons")) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t<h2>";
        // line 4362
        echo ($context["tab_design_icons"] ?? null);
        echo "</h2>
\t\t\t\t\t<div>";
        // line 4363
        echo ($context["text_count_icons"] ?? null);
        echo " <select id=\"count_icons\"
\t\t\t\t\tonchange=\"\$('.count_icons_blocks').hide(); \$('#count_icons_block'+this.value).show();\"
\t\t\t\t\t>
\t\t\t\t\t";
        // line 4366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4367
            echo "\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\"
\t\t\t\t\t\t";
            // line 4368
            if (($context["i"] == ($context["count_icons"] ?? null))) {
                echo " selected ";
            }
            // line 4369
            echo "\t\t\t\t\t\t>";
            echo $context["i"];
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4371
        echo "\t\t\t\t\t</select> ";
        echo ($context["text_current_count_icons"] ?? null);
        echo ($context["count_icons"] ?? null);
        echo "</div><br>
\t\t\t\t\t<div>";
        // line 4372
        echo ($context["text_count_icons_notice"] ?? null);
        echo "</div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 4374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4375
            echo "\t\t\t\t\t<div id=\"count_icons_block";
            echo $context["i"];
            echo "\" class=\"count_icons_blocks\"
\t\t\t\t\t";
            // line 4376
            if (($context["i"] != ($context["count_icons"] ?? null))) {
                echo " style=\"display: none;\" ";
            }
            // line 4377
            echo "\t\t\t\t\t>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
            // line 4380
            echo (($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f = ($context["entry_bline_html"] ?? null)) && is_array($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f) || $__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f instanceof ArrayAccess ? ($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f[$context["i"]] ?? null) : null);
            echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=";
            // line 4383
            echo ($context["i"] + 6);
            echo "
\t\t\t\t\t\t\tname=\"socnetauth2_bline_html[";
            // line 4384
            echo $context["i"];
            echo "]\"
\t\t\t\t\t\t\t>";
            // line 4385
            echo (($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 = ($context["socnetauth2_bline_html"] ?? null)) && is_array($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996) || $__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 instanceof ArrayAccess ? ($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996[$context["i"]] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
            // line 4390
            echo (($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 = ($context["entry_lline_html"] ?? null)) && is_array($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330) || $__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 instanceof ArrayAccess ? ($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330[$context["i"]] ?? null) : null);
            echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=";
            // line 4393
            echo ($context["i"] + 6);
            echo "
\t\t\t\t\t\t\tname=\"socnetauth2_lline_html[";
            // line 4394
            echo $context["i"];
            echo "]\"
\t\t\t\t\t\t\t>";
            // line 4395
            echo (($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae = ($context["socnetauth2_lline_html"] ?? null)) && is_array($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae) || $__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae instanceof ArrayAccess ? ($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae[$context["i"]] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
            // line 4400
            echo (($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 = ($context["entry_kvadrat_html"] ?? null)) && is_array($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409) || $__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 instanceof ArrayAccess ? ($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409[$context["i"]] ?? null) : null);
            echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=";
            // line 4403
            echo ($context["i"] + 6);
            echo "
\t\t\t\t\t\t\tname=\"socnetauth2_kvadrat_html[";
            // line 4404
            echo $context["i"];
            echo "]\"
\t\t\t\t\t\t\t>";
            // line 4405
            echo (($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 = ($context["socnetauth2_kvadrat_html"] ?? null)) && is_array($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26) || $__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 instanceof ArrayAccess ? ($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26[$context["i"]] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4411
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"tab-design-widget\" class=\"design_options\"
\t\t\t\t";
        // line 4414
        if ((($context["tab2"] ?? null) != "widget")) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t<h2>";
        // line 4415
        echo ($context["tab_design_widget"] ?? null);
        echo "</h2>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4419
        echo ($context["entry_widget_notice"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 4422
        echo ($context["entry_widget_notice_text"] ?? null);
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4428
        echo ($context["entry_status"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"socnetauth2_design_widget_status\" class=\"form-control\" >
\t\t\t\t\t\t\t ";
        // line 4432
        if (($context["socnetauth2_design_widget_status"] ?? null)) {
            // line 4433
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" >";
            // line 4434
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        } else {
            // line 4436
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 4437
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        }
        // line 4439
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4445
        echo ($context["entry_widget_after"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select  class=\"form-control\" name=\"socnetauth2_widget_after\">
\t\t\t\t\t\t\t\t<option value=\"hide\"
\t\t\t\t\t\t\t\t";
        // line 4450
        if ((($context["socnetauth2_widget_after"] ?? null) == "hide")) {
            echo " selected ";
        }
        // line 4451
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["text_widget_after_hide"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"show\"
\t\t\t\t\t\t\t\t";
        // line 4453
        if ((($context["socnetauth2_widget_after"] ?? null) == "show")) {
            echo " selected ";
        }
        // line 4454
        echo "\t\t\t\t\t\t\t\t>";
        echo ($context["text_widget_after_show"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4461
        echo ($context["entry_design_widget_name"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 4464
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4465
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\t\t\tname=\"socnetauth2_widget_name[";
            // line 4467
            echo (($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d = $context["language"]) && is_array($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d) || $__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d instanceof ArrayAccess ? ($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\t\t\tvalue=\"";
            // line 4468
            echo (($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 = ($context["socnetauth2_widget_name"] ?? null)) && is_array($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408) || $__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 instanceof ArrayAccess ? ($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408[(($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 = $context["language"]) && is_array($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0) || $__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 instanceof ArrayAccess ? ($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" >&nbsp;<img 
\t\t\t\t\t\t\t\tsrc=\"";
            // line 4469
            echo (($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b = $context["language"]) && is_array($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b) || $__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b instanceof ArrayAccess ? ($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b["image"] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 = $context["language"]) && is_array($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084) || $__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 instanceof ArrayAccess ? ($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084["name"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4472
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t";
        // line 4477
        echo ($context["entry_reg_imagesize"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\"> 
\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"socnetauth2_widget_imagesize_width\" value=\"";
        // line 4482
        echo ($context["socnetauth2_widget_imagesize_width"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t    class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"socnetauth2_widget_imagesize_height\" value=\"";
        // line 4486
        echo ($context["socnetauth2_widget_imagesize_height"] ?? null);
        echo "\" 
\t\t\t\t\t\t\t\t  class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4496
        echo ($context["entry_design_header"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 4499
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4500
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" 
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_widget_header[";
            // line 4502
            echo (($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb = $context["language"]) && is_array($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb) || $__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb instanceof ArrayAccess ? ($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb["language_id"] ?? null) : null);
            echo "]\" 
\t\t\t\t\t\t\t\tvalue=\"";
            // line 4503
            echo (($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b = ($context["socnetauth2_design_widget_header"] ?? null)) && is_array($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b) || $__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b instanceof ArrayAccess ? ($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b[(($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 = $context["language"]) && is_array($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9) || $__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 instanceof ArrayAccess ? ($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" 
\t\t\t\t\t\t\t\t>&nbsp;<img 
\t\t\t\t\t\t\t\tsrc=\"";
            // line 4505
            echo (($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 = $context["language"]) && is_array($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698) || $__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 instanceof ArrayAccess ? ($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698["image"] ?? null) : null);
            echo "\" align=\"top\" />
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4508
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t 
\t\t\t\t\t<div id=\"block_widget_bline\" 
\t\t\t\t\t\t";
        // line 4512
        if ((($context["socnetauth2_widget_format"] ?? null) == "bline")) {
            echo " ";
        } else {
            echo " style=\"display: none;\" 
\t\t\t\t\t\t\t\t ";
        }
        // line 4513
        echo "   
\t\t\t\t\t>
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4517
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_widget_bline_html\"
\t\t\t\t\t\t\t\t>";
        // line 4522
        echo ($context["socnetauth2_design_widget_bline_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4525
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4530
        echo ($context["entry_design_row_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_widget_bline_row_html\"
\t\t\t\t\t\t\t\t>";
        // line 4535
        echo ($context["socnetauth2_design_widget_bline_row_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4538
        echo ($context["entry_design_html_row_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"block_widget_kvadrat\" 
\t\t\t\t\t\t";
        // line 4544
        if ((($context["socnetauth2_widget_format"] ?? null) == "kvadrat")) {
            echo " ";
        } else {
            echo " style=\"display: none;\" 
\t\t\t\t\t\t\t\t ";
        }
        // line 4545
        echo "   
\t\t\t\t\t>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4550
        echo ($context["entry_design_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_widget_kvadrat_html\"
\t\t\t\t\t\t\t\t>";
        // line 4555
        echo ($context["socnetauth2_design_widget_kvadrat_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4558
        echo ($context["entry_design_html_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t\t";
        // line 4563
        echo ($context["entry_design_row_html"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\t\tname=\"socnetauth2_design_widget_kvadrat_row_html\"
\t\t\t\t\t\t\t\t>";
        // line 4568
        echo ($context["socnetauth2_design_widget_kvadrat_row_html"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 4571
        echo ($context["entry_design_html_row_tags"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div> 
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4579
        echo ($context["entry_design_css"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_design_widget_css\"
\t\t\t\t\t\t\t>";
        // line 4584
        echo ($context["socnetauth2_design_widget_css"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4590
        echo ($context["entry_widget_css_socnetauthbox"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_widget_css_socnetauthbox\"
\t\t\t\t\t\t\t>";
        // line 4595
        echo ($context["socnetauth2_widget_css_socnetauthbox"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4600
        echo ($context["entry_widget_css_socnetauthbox_socnetauthhead"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_widget_css_socnetauthbox_socnetauthhead\"
\t\t\t\t\t\t\t>";
        // line 4605
        echo ($context["socnetauth2_widget_css_socnetauthbox_socnetauthhead"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4610
        echo ($context["entry_widget_css_socnetauthbox_h3"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_widget_css_socnetauthbox_h3\"
\t\t\t\t\t\t\t>";
        // line 4615
        echo ($context["socnetauth2_widget_css_socnetauthbox_h3"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4620
        echo ($context["entry_widget_css_socnetauthbox_socnetauthbody"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_widget_css_socnetauthbox_socnetauthbody\"
\t\t\t\t\t\t\t>";
        // line 4625
        echo ($context["socnetauth2_widget_css_socnetauthbox_socnetauthbody"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4630
        echo ($context["entry_widget_css_socnetauthbox_socnetauthform"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_widget_css_socnetauthbox_socnetauthform\"
\t\t\t\t\t\t\t>";
        // line 4635
        echo ($context["socnetauth2_widget_css_socnetauthbox_socnetauthform"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4640
        echo ($context["entry_widget_css_socnetauthbox_socnetauthform_td"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=3
\t\t\t\t\t\t\tname=\"socnetauth2_widget_css_socnetauthbox_socnetauthform_td\"
\t\t\t\t\t\t\t>";
        // line 4645
        echo ($context["socnetauth2_widget_css_socnetauthbox_socnetauthform_td"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4651
        echo ($context["entry_design_widget_format"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<table class=\"format_table\" cellpadding=0 cellspacing=0 width=100%>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td width=33%><input type=\"radio\" name=\"socnetauth2_widget_format\"
\t\t\t\t\t\t\t\tonclick=\"showHideDesignBlock('bline', 'widget');\"
\t\t\t\t\t\t\t\tvalue=\"bline\"
\t\t\t\t\t\t\t\t";
        // line 4661
        if ((($context["socnetauth2_widget_format"] ?? null) == "bline")) {
            echo " checked ";
        }
        // line 4662
        echo "\t\t\t\t\t\t\t\tid=\"socnetauth2_widget_format_bline\"
\t\t\t\t\t\t\t\t><label for=\"socnetauth2_widget_format_bline\">";
        // line 4663
        echo ($context["text_format_bline"] ?? null);
        echo "</label></td>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t<td width=33%><input type=\"radio\" name=\"socnetauth2_widget_format\" 
\t\t\t\t\t\t\t\tonclick=\"showHideDesignBlock('kvadrat', 'widget');\"
\t\t\t\t\t\t\t\tvalue=\"kvadrat\"
\t\t\t\t\t\t\t\t";
        // line 4668
        if ((($context["socnetauth2_widget_format"] ?? null) == "kvadrat")) {
            echo " checked ";
        }
        echo " 
\t\t\t\t\t\t\t\tid=\"socnetauth2_widget_format_kvadrat\"
\t\t\t\t\t\t\t\t><label for=\"socnetauth2_widget_format_kvadrat\"
\t\t\t\t\t\t\t\t>";
        // line 4671
        echo ($context["text_format_kvadrat"] ?? null);
        echo "</label></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td valign=top><img src=\"view/image/socnetauth2/bline.png\" style=\"border: 1px #ededed solid;\"></td>
\t\t\t\t\t\t\t\t<td valign=top><img src=\"view/image/socnetauth2/kvadrat.png\" style=\"border: 1px #ededed solid;\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"tab-design-popup\" class=\"design_options\"
\t\t\t\t";
        // line 4685
        if ((($context["tab2"] ?? null) != "popup")) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t\t<h2>";
        // line 4686
        echo ($context["tab_design_popup"] ?? null);
        echo "</h2>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4690
        echo ($context["entry_popup_notice"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 4693
        echo ($context["entry_popup_notice_text"] ?? null);
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4699
        echo ($context["entry_mobile_control"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"socnetauth2_mobile_control\" class=\"form-control\" >
\t\t\t\t\t\t\t  ";
        // line 4703
        if (($context["socnetauth2_mobile_control"] ?? null)) {
            // line 4704
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" >";
            // line 4705
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        } else {
            // line 4707
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 4708
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        }
        // line 4710
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"tab-design-confirm\" class=\"design_options\"
\t\t\t\t";
        // line 4716
        if ((($context["tab2"] ?? null) != "confirm")) {
            echo " style=\"display: none;\" ";
        }
        echo ">
\t\t\t\t
\t\t\t\t\t<h2>";
        // line 4718
        echo ($context["tab_design_confirm"] ?? null);
        echo "</h2>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access-secret\">
\t\t\t\t\t\t\t";
        // line 4722
        echo ($context["entry_is_noiframe"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"socnetauth2_is_noiframe\" class=\"form-control\" >
\t\t\t\t\t\t\t  ";
        // line 4726
        if (($context["socnetauth2_is_noiframe"] ?? null)) {
            // line 4727
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" >";
            // line 4728
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        } else {
            // line 4730
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" >";
            // line 4731
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t  ";
        }
        // line 4733
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div>";
        // line 4734
        echo ($context["entry_is_noiframe_notice"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t  </div>
\t  
\t  
\t  
\t  
\t  <div id=\"tab-support\" class=\"tab-pane\">
\t  
\t\t\t
\t\t\t";
        // line 4748
        echo ($context["text_contact"] ?? null);
        echo "
\t  </div>
      </form>
    </div>
  </div>
</div>
\t  
\t<script>
\t\tfunction set_tab()
\t\t{
\t\t\tif( \$('#link-tab-general').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-general';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-vkontakte').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-vkontakte';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-facebook').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-facebook';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-twitter').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-twitter';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-odnoklassniki').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-odnoklassniki';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-dobor').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-dobor';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-widget').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-widget';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-popup').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-popup';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-design').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-design';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-support').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-support';
\t\t\t}
\t\t\t
\t\t\t/* start metka: a1 */
\t\t\tif( \$('#link-tab-gmail').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-gmail';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-mailru').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-mailru';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-steam').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-steam';
\t\t\t}
\t\t\tif( \$('#link-tab-yandex').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-yandex';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-telegram').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-telegram';
\t\t\t}
\t\t\t
\t\t\tif( \$('#link-tab-tinkoff').attr('aria-expanded') == 'true' )
\t\t\t{
\t\t\t\tdocument.getElementById('hiddentab').value = 'link-tab-tinkoff';
\t\t\t}
\t\t}
\t\t
\t\t\$('#";
        // line 4839
        echo ($context["tab"] ?? null);
        echo "').click();
\t\t


\tfunction showHideDesignBlock(format, str) // 'bline', 'account'
\t{
\t\tif( format == 'bline' )
\t\t{\t
\t\t\t\$('#block_'+str+'_bline').show();
\t\t\t\$('#block_'+str+'_kvadrat').hide();
\t\t}
\t\telse
\t\t{
\t\t\t\$('#block_'+str+'_bline').hide();
\t\t\t\$('#block_'+str+'_kvadrat').show();
\t\t}
\t\t
\t}
\t
\t/* start 0305 */
\t\tfunction copyToClipboard(text) {
\t\t\tvar \$temp = \$(\"<input>\")
\t\t\t\$(\"body\").append(\$temp);
\t\t\t\$temp.val(text).select();
\t\t\tdocument.execCommand(\"copy\");
\t\t\t\$temp.remove();
\t\t}
\t/* end 0305 */\t
\t</script>
";
        // line 4868
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/socnetauth2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9690 => 4868,  9658 => 4839,  9564 => 4748,  9547 => 4734,  9544 => 4733,  9539 => 4731,  9534 => 4730,  9529 => 4728,  9524 => 4727,  9522 => 4726,  9515 => 4722,  9508 => 4718,  9501 => 4716,  9493 => 4710,  9488 => 4708,  9483 => 4707,  9478 => 4705,  9473 => 4704,  9471 => 4703,  9464 => 4699,  9455 => 4693,  9449 => 4690,  9442 => 4686,  9436 => 4685,  9419 => 4671,  9411 => 4668,  9403 => 4663,  9400 => 4662,  9396 => 4661,  9383 => 4651,  9374 => 4645,  9366 => 4640,  9358 => 4635,  9350 => 4630,  9342 => 4625,  9334 => 4620,  9326 => 4615,  9318 => 4610,  9310 => 4605,  9302 => 4600,  9294 => 4595,  9286 => 4590,  9277 => 4584,  9269 => 4579,  9258 => 4571,  9252 => 4568,  9244 => 4563,  9236 => 4558,  9230 => 4555,  9222 => 4550,  9215 => 4545,  9208 => 4544,  9199 => 4538,  9193 => 4535,  9185 => 4530,  9177 => 4525,  9171 => 4522,  9163 => 4517,  9157 => 4513,  9150 => 4512,  9144 => 4508,  9135 => 4505,  9130 => 4503,  9126 => 4502,  9122 => 4500,  9118 => 4499,  9112 => 4496,  9099 => 4486,  9092 => 4482,  9084 => 4477,  9077 => 4472,  9066 => 4469,  9062 => 4468,  9058 => 4467,  9054 => 4465,  9050 => 4464,  9044 => 4461,  9033 => 4454,  9029 => 4453,  9023 => 4451,  9019 => 4450,  9011 => 4445,  9003 => 4439,  8998 => 4437,  8993 => 4436,  8988 => 4434,  8983 => 4433,  8981 => 4432,  8974 => 4428,  8965 => 4422,  8959 => 4419,  8952 => 4415,  8946 => 4414,  8941 => 4411,  8929 => 4405,  8925 => 4404,  8921 => 4403,  8915 => 4400,  8907 => 4395,  8903 => 4394,  8899 => 4393,  8893 => 4390,  8885 => 4385,  8881 => 4384,  8877 => 4383,  8871 => 4380,  8866 => 4377,  8862 => 4376,  8857 => 4375,  8853 => 4374,  8848 => 4372,  8842 => 4371,  8833 => 4369,  8829 => 4368,  8824 => 4367,  8820 => 4366,  8814 => 4363,  8810 => 4362,  8804 => 4361,  8787 => 4347,  8778 => 4343,  8772 => 4340,  8764 => 4337,  8753 => 4329,  8742 => 4321,  8735 => 4317,  8727 => 4312,  8720 => 4307,  8709 => 4304,  8705 => 4303,  8701 => 4302,  8697 => 4300,  8693 => 4299,  8687 => 4296,  8679 => 4291,  8671 => 4286,  8661 => 4279,  8655 => 4276,  8647 => 4271,  8639 => 4266,  8633 => 4263,  8625 => 4258,  8619 => 4254,  8612 => 4253,  8604 => 4248,  8598 => 4245,  8590 => 4240,  8582 => 4235,  8576 => 4232,  8568 => 4227,  8562 => 4223,  8555 => 4222,  8548 => 4218,  8542 => 4215,  8534 => 4210,  8527 => 4205,  8522 => 4203,  8517 => 4202,  8512 => 4200,  8507 => 4199,  8505 => 4198,  8498 => 4194,  8491 => 4190,  8485 => 4189,  8468 => 4175,  8460 => 4172,  8453 => 4168,  8445 => 4165,  8434 => 4157,  8423 => 4149,  8416 => 4145,  8408 => 4140,  8401 => 4135,  8390 => 4132,  8386 => 4131,  8382 => 4130,  8378 => 4128,  8374 => 4127,  8368 => 4124,  8360 => 4119,  8352 => 4114,  8343 => 4108,  8337 => 4105,  8329 => 4100,  8321 => 4095,  8315 => 4092,  8307 => 4087,  8301 => 4083,  8294 => 4082,  8286 => 4077,  8280 => 4074,  8272 => 4069,  8264 => 4064,  8258 => 4061,  8250 => 4056,  8244 => 4052,  8237 => 4051,  8229 => 4046,  8223 => 4043,  8215 => 4038,  8208 => 4033,  8203 => 4031,  8198 => 4030,  8193 => 4028,  8188 => 4027,  8186 => 4026,  8179 => 4022,  8172 => 4018,  8165 => 4016,  8146 => 4000,  8139 => 3995,  8133 => 3993,  8127 => 3990,  8122 => 3987,  8116 => 3985,  8107 => 3979,  8096 => 3971,  8089 => 3967,  8081 => 3962,  8075 => 3958,  8066 => 3955,  8061 => 3953,  8057 => 3952,  8053 => 3950,  8049 => 3949,  8043 => 3946,  8035 => 3941,  8027 => 3936,  8018 => 3930,  8012 => 3927,  8004 => 3922,  7996 => 3917,  7990 => 3914,  7982 => 3909,  7972 => 3905,  7964 => 3900,  7958 => 3897,  7950 => 3892,  7942 => 3887,  7936 => 3884,  7928 => 3879,  7918 => 3875,  7911 => 3871,  7905 => 3868,  7897 => 3863,  7890 => 3858,  7885 => 3856,  7880 => 3855,  7875 => 3853,  7870 => 3852,  7868 => 3851,  7861 => 3847,  7854 => 3843,  7848 => 3842,  7838 => 3834,  7826 => 3828,  7822 => 3827,  7818 => 3826,  7811 => 3822,  7806 => 3820,  7800 => 3817,  7794 => 3814,  7789 => 3812,  7785 => 3811,  7781 => 3810,  7774 => 3808,  7769 => 3806,  7765 => 3805,  7761 => 3804,  7749 => 3795,  7741 => 3790,  7733 => 3785,  7725 => 3780,  7717 => 3775,  7709 => 3770,  7701 => 3765,  7691 => 3758,  7685 => 3755,  7677 => 3750,  7674 => 3749,  7670 => 3748,  7659 => 3740,  7651 => 3737,  7645 => 3734,  7637 => 3731,  7631 => 3728,  7623 => 3725,  7617 => 3722,  7609 => 3719,  7604 => 3717,  7596 => 3714,  7591 => 3712,  7584 => 3710,  7579 => 3708,  7572 => 3706,  7567 => 3704,  7560 => 3702,  7547 => 3691,  7536 => 3688,  7532 => 3687,  7528 => 3686,  7525 => 3685,  7521 => 3684,  7514 => 3680,  7502 => 3670,  7497 => 3668,  7492 => 3667,  7487 => 3665,  7482 => 3664,  7480 => 3663,  7473 => 3659,  7463 => 3653,  7457 => 3650,  7452 => 3647,  7443 => 3645,  7438 => 3643,  7433 => 3642,  7429 => 3641,  7424 => 3639,  7417 => 3635,  7407 => 3629,  7401 => 3626,  7396 => 3623,  7387 => 3621,  7382 => 3619,  7376 => 3617,  7372 => 3616,  7368 => 3615,  7361 => 3611,  7357 => 3609,  7350 => 3605,  7346 => 3603,  7344 => 3602,  7339 => 3599,  7330 => 3597,  7325 => 3595,  7320 => 3594,  7316 => 3593,  7311 => 3591,  7304 => 3587,  7300 => 3585,  7297 => 3583,  7291 => 3579,  7288 => 3578,  7284 => 3576,  7282 => 3575,  7274 => 3571,  7270 => 3569,  7268 => 3568,  7263 => 3565,  7257 => 3562,  7252 => 3561,  7247 => 3559,  7242 => 3558,  7240 => 3557,  7233 => 3553,  7229 => 3551,  7222 => 3546,  7219 => 3545,  7215 => 3543,  7213 => 3542,  7205 => 3538,  7201 => 3536,  7199 => 3535,  7194 => 3532,  7189 => 3530,  7185 => 3529,  7180 => 3528,  7175 => 3526,  7171 => 3525,  7166 => 3524,  7164 => 3523,  7160 => 3522,  7156 => 3521,  7151 => 3520,  7149 => 3519,  7142 => 3515,  7133 => 3509,  7130 => 3508,  7126 => 3506,  7124 => 3505,  7116 => 3501,  7112 => 3499,  7110 => 3498,  7105 => 3495,  7100 => 3493,  7096 => 3492,  7091 => 3491,  7086 => 3489,  7082 => 3488,  7077 => 3487,  7075 => 3486,  7071 => 3485,  7067 => 3484,  7062 => 3483,  7060 => 3482,  7053 => 3478,  7044 => 3472,  7041 => 3471,  7037 => 3469,  7035 => 3468,  7027 => 3464,  7023 => 3462,  7021 => 3461,  7016 => 3458,  7011 => 3456,  7007 => 3455,  7002 => 3454,  6997 => 3452,  6993 => 3451,  6988 => 3450,  6986 => 3449,  6982 => 3448,  6978 => 3447,  6973 => 3446,  6971 => 3445,  6964 => 3441,  6955 => 3435,  6952 => 3434,  6948 => 3432,  6946 => 3431,  6938 => 3427,  6934 => 3425,  6932 => 3424,  6927 => 3421,  6922 => 3419,  6918 => 3418,  6913 => 3417,  6908 => 3415,  6904 => 3414,  6899 => 3413,  6897 => 3412,  6893 => 3411,  6889 => 3410,  6884 => 3409,  6882 => 3408,  6875 => 3404,  6866 => 3398,  6863 => 3397,  6859 => 3395,  6857 => 3394,  6848 => 3389,  6844 => 3387,  6842 => 3386,  6837 => 3383,  6832 => 3381,  6828 => 3380,  6823 => 3379,  6818 => 3377,  6814 => 3376,  6809 => 3375,  6807 => 3374,  6803 => 3373,  6799 => 3372,  6794 => 3371,  6792 => 3370,  6785 => 3366,  6775 => 3360,  6769 => 3357,  6761 => 3353,  6755 => 3350,  6750 => 3347,  6745 => 3345,  6741 => 3344,  6736 => 3343,  6731 => 3341,  6727 => 3340,  6723 => 3339,  6719 => 3338,  6715 => 3337,  6711 => 3336,  6706 => 3335,  6704 => 3334,  6697 => 3330,  6688 => 3324,  6685 => 3323,  6681 => 3321,  6679 => 3320,  6671 => 3316,  6667 => 3314,  6665 => 3313,  6660 => 3310,  6655 => 3308,  6651 => 3307,  6646 => 3306,  6641 => 3304,  6637 => 3303,  6632 => 3302,  6630 => 3301,  6626 => 3300,  6622 => 3299,  6617 => 3298,  6615 => 3297,  6608 => 3293,  6604 => 3291,  6598 => 3287,  6594 => 3286,  6586 => 3281,  6582 => 3279,  6573 => 3273,  6567 => 3270,  6559 => 3265,  6556 => 3264,  6552 => 3262,  6550 => 3261,  6542 => 3257,  6538 => 3255,  6536 => 3254,  6531 => 3251,  6526 => 3249,  6522 => 3248,  6517 => 3247,  6512 => 3245,  6508 => 3244,  6503 => 3243,  6501 => 3242,  6497 => 3241,  6493 => 3240,  6488 => 3239,  6486 => 3238,  6479 => 3234,  6469 => 3227,  6466 => 3226,  6462 => 3224,  6460 => 3223,  6453 => 3220,  6449 => 3218,  6447 => 3217,  6442 => 3214,  6437 => 3212,  6433 => 3211,  6428 => 3210,  6423 => 3208,  6419 => 3207,  6414 => 3206,  6412 => 3205,  6408 => 3204,  6404 => 3203,  6399 => 3202,  6397 => 3201,  6390 => 3197,  6380 => 3190,  6377 => 3189,  6373 => 3187,  6371 => 3186,  6362 => 3181,  6358 => 3179,  6356 => 3178,  6351 => 3175,  6346 => 3173,  6342 => 3172,  6337 => 3171,  6332 => 3169,  6328 => 3168,  6323 => 3167,  6321 => 3166,  6317 => 3165,  6313 => 3164,  6308 => 3163,  6306 => 3162,  6299 => 3158,  6289 => 3151,  6286 => 3150,  6282 => 3148,  6280 => 3147,  6272 => 3143,  6268 => 3141,  6266 => 3140,  6261 => 3137,  6256 => 3135,  6252 => 3134,  6247 => 3133,  6242 => 3131,  6238 => 3130,  6233 => 3129,  6231 => 3128,  6227 => 3127,  6223 => 3126,  6218 => 3125,  6216 => 3124,  6209 => 3120,  6201 => 3114,  6197 => 3113,  6188 => 3107,  6174 => 3097,  6168 => 3096,  6162 => 3094,  6158 => 3093,  6150 => 3088,  6141 => 3083,  6135 => 3082,  6129 => 3080,  6125 => 3079,  6117 => 3074,  6108 => 3069,  6103 => 3068,  6097 => 3066,  6093 => 3065,  6085 => 3060,  6077 => 3055,  6065 => 3047,  6061 => 3046,  6055 => 3044,  6051 => 3043,  6042 => 3037,  6035 => 3033,  6019 => 3020,  5997 => 3001,  5989 => 2996,  5983 => 2992,  5977 => 2991,  5975 => 2990,  5967 => 2987,  5962 => 2985,  5958 => 2984,  5951 => 2980,  5947 => 2979,  5940 => 2975,  5936 => 2974,  5930 => 2971,  5923 => 2970,  5921 => 2969,  5913 => 2964,  5905 => 2959,  5898 => 2955,  5888 => 2948,  5884 => 2947,  5880 => 2946,  5866 => 2935,  5862 => 2934,  5856 => 2931,  5851 => 2929,  5841 => 2922,  5826 => 2914,  5818 => 2912,  5810 => 2910,  5807 => 2909,  5803 => 2908,  5796 => 2904,  5788 => 2898,  5777 => 2895,  5773 => 2894,  5769 => 2893,  5766 => 2892,  5762 => 2891,  5755 => 2887,  5747 => 2882,  5744 => 2881,  5739 => 2879,  5734 => 2878,  5729 => 2876,  5724 => 2875,  5722 => 2874,  5715 => 2870,  5708 => 2865,  5703 => 2863,  5698 => 2862,  5693 => 2860,  5688 => 2859,  5686 => 2858,  5679 => 2854,  5655 => 2833,  5633 => 2814,  5625 => 2809,  5619 => 2805,  5613 => 2804,  5611 => 2803,  5603 => 2800,  5598 => 2798,  5594 => 2797,  5587 => 2793,  5583 => 2792,  5576 => 2788,  5572 => 2787,  5566 => 2784,  5559 => 2783,  5557 => 2782,  5549 => 2777,  5541 => 2772,  5534 => 2768,  5524 => 2761,  5520 => 2760,  5516 => 2759,  5502 => 2748,  5498 => 2747,  5492 => 2744,  5487 => 2742,  5477 => 2735,  5468 => 2728,  5462 => 2727,  5454 => 2725,  5447 => 2723,  5443 => 2722,  5437 => 2721,  5430 => 2717,  5423 => 2712,  5412 => 2709,  5408 => 2708,  5404 => 2707,  5396 => 2704,  5390 => 2701,  5382 => 2696,  5379 => 2695,  5374 => 2693,  5369 => 2692,  5364 => 2690,  5360 => 2689,  5356 => 2688,  5349 => 2684,  5342 => 2679,  5337 => 2677,  5332 => 2676,  5327 => 2674,  5322 => 2673,  5320 => 2672,  5313 => 2668,  5288 => 2646,  5270 => 2631,  5262 => 2626,  5256 => 2622,  5250 => 2621,  5248 => 2620,  5240 => 2617,  5235 => 2615,  5231 => 2614,  5224 => 2610,  5220 => 2609,  5213 => 2606,  5208 => 2605,  5206 => 2604,  5199 => 2600,  5192 => 2596,  5182 => 2589,  5178 => 2588,  5173 => 2585,  5167 => 2580,  5159 => 2575,  5155 => 2574,  5148 => 2570,  5141 => 2566,  5137 => 2564,  5133 => 2563,  5128 => 2560,  5126 => 2559,  5119 => 2555,  5115 => 2554,  5109 => 2551,  5104 => 2549,  5101 => 2548,  5097 => 2546,  5095 => 2545,  5092 => 2544,  5086 => 2541,  5082 => 2539,  5078 => 2538,  5074 => 2536,  5072 => 2535,  5064 => 2530,  5060 => 2528,  5056 => 2525,  5052 => 2524,  5045 => 2519,  5039 => 2518,  5031 => 2516,  5023 => 2514,  5020 => 2513,  5016 => 2512,  5009 => 2508,  5001 => 2503,  4995 => 2501,  4991 => 2499,  4989 => 2498,  4983 => 2496,  4979 => 2494,  4977 => 2493,  4967 => 2486,  4959 => 2480,  4948 => 2477,  4944 => 2476,  4940 => 2475,  4936 => 2473,  4932 => 2472,  4926 => 2469,  4917 => 2463,  4914 => 2462,  4909 => 2460,  4904 => 2459,  4899 => 2457,  4894 => 2456,  4892 => 2455,  4885 => 2451,  4881 => 2449,  4876 => 2445,  4871 => 2443,  4866 => 2442,  4861 => 2440,  4856 => 2439,  4854 => 2438,  4847 => 2434,  4823 => 2413,  4801 => 2394,  4793 => 2389,  4787 => 2385,  4781 => 2384,  4779 => 2383,  4771 => 2380,  4766 => 2378,  4762 => 2377,  4755 => 2373,  4751 => 2372,  4744 => 2368,  4740 => 2367,  4733 => 2364,  4728 => 2363,  4726 => 2362,  4719 => 2358,  4711 => 2353,  4704 => 2349,  4694 => 2342,  4690 => 2341,  4686 => 2340,  4681 => 2337,  4674 => 2331,  4666 => 2326,  4662 => 2325,  4655 => 2321,  4648 => 2317,  4644 => 2315,  4640 => 2314,  4635 => 2311,  4633 => 2310,  4626 => 2306,  4622 => 2305,  4616 => 2302,  4611 => 2300,  4608 => 2299,  4604 => 2297,  4602 => 2296,  4599 => 2295,  4593 => 2292,  4589 => 2290,  4585 => 2289,  4581 => 2287,  4579 => 2286,  4571 => 2281,  4567 => 2279,  4563 => 2276,  4559 => 2275,  4553 => 2271,  4547 => 2270,  4539 => 2268,  4531 => 2266,  4528 => 2265,  4524 => 2264,  4517 => 2260,  4505 => 2251,  4497 => 2248,  4490 => 2244,  4482 => 2241,  4474 => 2236,  4468 => 2232,  4465 => 2231,  4463 => 2230,  4455 => 2225,  4449 => 2223,  4445 => 2221,  4443 => 2220,  4437 => 2218,  4433 => 2216,  4431 => 2215,  4421 => 2208,  4413 => 2202,  4402 => 2199,  4398 => 2198,  4394 => 2197,  4390 => 2195,  4386 => 2194,  4380 => 2191,  4371 => 2185,  4368 => 2184,  4363 => 2182,  4358 => 2181,  4353 => 2179,  4348 => 2178,  4346 => 2177,  4339 => 2173,  4332 => 2168,  4327 => 2166,  4322 => 2165,  4317 => 2163,  4312 => 2162,  4310 => 2161,  4303 => 2157,  4294 => 2150,  4291 => 2148,  4275 => 2134,  4249 => 2111,  4241 => 2106,  4235 => 2102,  4229 => 2101,  4227 => 2100,  4219 => 2097,  4214 => 2095,  4210 => 2094,  4203 => 2090,  4199 => 2089,  4192 => 2085,  4188 => 2084,  4181 => 2080,  4177 => 2079,  4170 => 2076,  4165 => 2075,  4163 => 2074,  4156 => 2070,  4148 => 2065,  4140 => 2060,  4133 => 2056,  4123 => 2049,  4119 => 2048,  4115 => 2047,  4111 => 2046,  4106 => 2043,  4099 => 2037,  4091 => 2032,  4087 => 2031,  4080 => 2027,  4073 => 2023,  4069 => 2021,  4065 => 2020,  4060 => 2017,  4058 => 2016,  4051 => 2012,  4047 => 2011,  4041 => 2008,  4036 => 2006,  4033 => 2005,  4029 => 2003,  4027 => 2002,  4024 => 2001,  4018 => 1998,  4014 => 1996,  4010 => 1995,  4006 => 1993,  4004 => 1992,  3996 => 1987,  3992 => 1985,  3988 => 1982,  3984 => 1981,  3977 => 1977,  3971 => 1975,  3965 => 1972,  3959 => 1970,  3953 => 1967,  3945 => 1962,  3938 => 1957,  3932 => 1956,  3924 => 1954,  3916 => 1952,  3913 => 1951,  3909 => 1950,  3902 => 1946,  3894 => 1941,  3888 => 1939,  3884 => 1937,  3882 => 1936,  3876 => 1934,  3872 => 1932,  3870 => 1931,  3860 => 1924,  3853 => 1919,  3842 => 1916,  3838 => 1915,  3834 => 1914,  3830 => 1912,  3826 => 1911,  3820 => 1908,  3815 => 1905,  3809 => 1901,  3806 => 1900,  3801 => 1898,  3796 => 1897,  3791 => 1895,  3786 => 1894,  3784 => 1893,  3777 => 1889,  3773 => 1887,  3768 => 1883,  3763 => 1881,  3758 => 1880,  3753 => 1878,  3748 => 1877,  3746 => 1876,  3739 => 1872,  3715 => 1851,  3693 => 1832,  3685 => 1827,  3679 => 1823,  3673 => 1822,  3671 => 1821,  3663 => 1818,  3658 => 1816,  3654 => 1815,  3647 => 1811,  3643 => 1810,  3636 => 1806,  3632 => 1805,  3625 => 1802,  3620 => 1801,  3618 => 1800,  3611 => 1796,  3603 => 1791,  3596 => 1787,  3586 => 1780,  3582 => 1779,  3578 => 1778,  3573 => 1775,  3567 => 1770,  3559 => 1765,  3555 => 1764,  3548 => 1760,  3541 => 1756,  3537 => 1754,  3533 => 1753,  3528 => 1750,  3526 => 1749,  3519 => 1745,  3515 => 1744,  3509 => 1741,  3504 => 1739,  3501 => 1738,  3497 => 1736,  3495 => 1735,  3492 => 1734,  3486 => 1731,  3482 => 1729,  3478 => 1728,  3474 => 1726,  3472 => 1725,  3464 => 1720,  3460 => 1718,  3456 => 1715,  3452 => 1714,  3445 => 1709,  3439 => 1708,  3431 => 1706,  3423 => 1704,  3420 => 1703,  3416 => 1702,  3409 => 1698,  3400 => 1692,  3394 => 1690,  3390 => 1688,  3388 => 1687,  3382 => 1685,  3378 => 1683,  3376 => 1682,  3366 => 1675,  3358 => 1669,  3347 => 1666,  3343 => 1665,  3339 => 1664,  3335 => 1662,  3331 => 1661,  3325 => 1658,  3320 => 1655,  3314 => 1651,  3311 => 1650,  3306 => 1648,  3301 => 1647,  3296 => 1645,  3291 => 1644,  3289 => 1643,  3282 => 1639,  3278 => 1637,  3273 => 1633,  3268 => 1631,  3263 => 1630,  3258 => 1628,  3253 => 1627,  3251 => 1626,  3244 => 1622,  3235 => 1615,  3217 => 1599,  3191 => 1576,  3183 => 1571,  3177 => 1567,  3171 => 1566,  3169 => 1565,  3161 => 1562,  3156 => 1560,  3152 => 1559,  3145 => 1555,  3141 => 1554,  3134 => 1550,  3130 => 1549,  3123 => 1545,  3119 => 1544,  3112 => 1541,  3107 => 1540,  3105 => 1539,  3098 => 1535,  3090 => 1530,  3082 => 1525,  3075 => 1521,  3065 => 1514,  3061 => 1513,  3057 => 1512,  3053 => 1511,  3048 => 1508,  3041 => 1502,  3033 => 1497,  3029 => 1496,  3022 => 1492,  3015 => 1488,  3011 => 1486,  3007 => 1485,  3002 => 1482,  3000 => 1481,  2993 => 1477,  2989 => 1476,  2983 => 1473,  2978 => 1471,  2975 => 1470,  2971 => 1468,  2969 => 1467,  2966 => 1466,  2960 => 1463,  2956 => 1461,  2952 => 1460,  2948 => 1458,  2946 => 1457,  2938 => 1452,  2934 => 1450,  2930 => 1447,  2926 => 1446,  2919 => 1441,  2913 => 1440,  2905 => 1438,  2897 => 1436,  2894 => 1435,  2890 => 1434,  2883 => 1430,  2874 => 1425,  2871 => 1424,  2869 => 1423,  2861 => 1419,  2857 => 1417,  2855 => 1416,  2849 => 1414,  2845 => 1412,  2843 => 1411,  2833 => 1404,  2826 => 1399,  2815 => 1396,  2811 => 1395,  2807 => 1394,  2803 => 1392,  2799 => 1391,  2793 => 1388,  2788 => 1385,  2782 => 1381,  2779 => 1380,  2774 => 1378,  2769 => 1377,  2764 => 1375,  2759 => 1374,  2757 => 1373,  2750 => 1369,  2746 => 1367,  2741 => 1363,  2736 => 1361,  2731 => 1360,  2726 => 1358,  2721 => 1357,  2719 => 1356,  2711 => 1351,  2687 => 1330,  2665 => 1311,  2657 => 1306,  2651 => 1302,  2645 => 1301,  2643 => 1300,  2635 => 1297,  2630 => 1295,  2626 => 1294,  2619 => 1290,  2615 => 1289,  2608 => 1285,  2604 => 1284,  2597 => 1281,  2592 => 1280,  2590 => 1279,  2583 => 1275,  2575 => 1270,  2568 => 1266,  2558 => 1259,  2554 => 1258,  2550 => 1257,  2545 => 1254,  2538 => 1248,  2530 => 1243,  2526 => 1242,  2519 => 1238,  2512 => 1234,  2508 => 1232,  2504 => 1231,  2499 => 1228,  2497 => 1227,  2490 => 1223,  2486 => 1222,  2480 => 1219,  2475 => 1217,  2472 => 1216,  2468 => 1214,  2466 => 1213,  2463 => 1212,  2457 => 1209,  2453 => 1207,  2449 => 1206,  2445 => 1204,  2443 => 1203,  2435 => 1198,  2431 => 1196,  2427 => 1193,  2423 => 1192,  2416 => 1187,  2410 => 1186,  2402 => 1184,  2394 => 1182,  2391 => 1181,  2387 => 1180,  2380 => 1176,  2371 => 1171,  2368 => 1170,  2366 => 1169,  2358 => 1165,  2354 => 1163,  2352 => 1162,  2346 => 1160,  2342 => 1158,  2340 => 1157,  2330 => 1150,  2322 => 1144,  2311 => 1141,  2307 => 1140,  2303 => 1139,  2299 => 1137,  2295 => 1136,  2289 => 1133,  2284 => 1130,  2278 => 1126,  2275 => 1125,  2270 => 1123,  2265 => 1122,  2260 => 1120,  2255 => 1119,  2253 => 1118,  2246 => 1114,  2242 => 1112,  2237 => 1108,  2232 => 1106,  2227 => 1105,  2222 => 1103,  2217 => 1102,  2215 => 1101,  2207 => 1096,  2185 => 1077,  2163 => 1058,  2155 => 1053,  2149 => 1049,  2143 => 1048,  2141 => 1047,  2133 => 1044,  2128 => 1042,  2124 => 1041,  2117 => 1037,  2113 => 1036,  2106 => 1032,  2102 => 1031,  2095 => 1028,  2090 => 1027,  2088 => 1026,  2081 => 1022,  2073 => 1017,  2066 => 1013,  2056 => 1006,  2052 => 1005,  2048 => 1004,  2042 => 1000,  2035 => 994,  2027 => 989,  2023 => 988,  2016 => 984,  2009 => 980,  2005 => 978,  2001 => 977,  1996 => 974,  1994 => 973,  1987 => 969,  1983 => 968,  1977 => 965,  1972 => 963,  1969 => 962,  1965 => 960,  1963 => 959,  1960 => 958,  1954 => 955,  1950 => 953,  1946 => 952,  1942 => 950,  1940 => 949,  1932 => 944,  1927 => 941,  1923 => 939,  1919 => 938,  1912 => 933,  1906 => 932,  1898 => 930,  1890 => 928,  1887 => 927,  1883 => 926,  1876 => 922,  1866 => 916,  1863 => 915,  1861 => 914,  1853 => 910,  1849 => 908,  1847 => 907,  1841 => 905,  1837 => 903,  1835 => 902,  1825 => 895,  1817 => 889,  1806 => 886,  1802 => 885,  1798 => 884,  1794 => 882,  1790 => 881,  1784 => 878,  1779 => 875,  1773 => 871,  1770 => 870,  1765 => 868,  1760 => 867,  1755 => 865,  1750 => 864,  1748 => 863,  1741 => 859,  1737 => 857,  1732 => 853,  1727 => 851,  1722 => 850,  1717 => 848,  1712 => 847,  1710 => 846,  1703 => 842,  1678 => 820,  1656 => 801,  1648 => 796,  1642 => 792,  1636 => 791,  1634 => 790,  1626 => 787,  1621 => 785,  1617 => 784,  1610 => 780,  1606 => 779,  1599 => 775,  1595 => 774,  1588 => 771,  1583 => 770,  1581 => 769,  1574 => 765,  1566 => 760,  1559 => 756,  1549 => 749,  1545 => 748,  1541 => 747,  1534 => 742,  1528 => 737,  1520 => 732,  1516 => 731,  1509 => 727,  1502 => 723,  1498 => 721,  1494 => 720,  1489 => 717,  1487 => 716,  1480 => 712,  1476 => 711,  1470 => 708,  1465 => 706,  1462 => 705,  1458 => 703,  1456 => 702,  1453 => 701,  1447 => 698,  1443 => 696,  1439 => 695,  1435 => 693,  1433 => 692,  1425 => 687,  1421 => 685,  1417 => 682,  1414 => 681,  1412 => 680,  1405 => 675,  1399 => 674,  1391 => 672,  1383 => 670,  1380 => 669,  1376 => 668,  1369 => 664,  1360 => 658,  1354 => 656,  1350 => 654,  1348 => 653,  1342 => 651,  1338 => 649,  1336 => 648,  1326 => 641,  1319 => 636,  1308 => 633,  1304 => 632,  1300 => 631,  1296 => 629,  1292 => 628,  1286 => 625,  1276 => 618,  1273 => 617,  1268 => 615,  1263 => 614,  1258 => 612,  1253 => 611,  1251 => 610,  1244 => 606,  1237 => 601,  1232 => 599,  1227 => 598,  1222 => 596,  1217 => 595,  1215 => 594,  1208 => 590,  1186 => 573,  1180 => 570,  1170 => 565,  1164 => 562,  1156 => 556,  1143 => 553,  1139 => 552,  1131 => 549,  1125 => 546,  1118 => 541,  1105 => 538,  1101 => 537,  1093 => 534,  1086 => 530,  1081 => 527,  1075 => 526,  1068 => 521,  1063 => 519,  1058 => 518,  1053 => 516,  1049 => 515,  1045 => 514,  1036 => 508,  1030 => 504,  1024 => 500,  1021 => 499,  1016 => 497,  1011 => 496,  1006 => 494,  1001 => 493,  999 => 492,  992 => 488,  985 => 483,  980 => 481,  975 => 480,  970 => 478,  965 => 477,  963 => 476,  956 => 472,  949 => 467,  944 => 465,  939 => 464,  934 => 462,  929 => 461,  927 => 460,  920 => 456,  907 => 446,  901 => 442,  897 => 441,  886 => 433,  880 => 429,  876 => 428,  865 => 420,  859 => 416,  855 => 415,  844 => 407,  835 => 401,  832 => 400,  827 => 398,  822 => 397,  817 => 395,  812 => 394,  810 => 393,  803 => 389,  787 => 376,  779 => 373,  771 => 369,  767 => 368,  761 => 366,  757 => 365,  749 => 360,  741 => 355,  733 => 352,  725 => 348,  721 => 347,  715 => 345,  711 => 344,  703 => 339,  695 => 334,  687 => 331,  679 => 327,  675 => 326,  669 => 324,  665 => 323,  657 => 318,  649 => 313,  638 => 305,  631 => 303,  623 => 298,  616 => 296,  608 => 291,  601 => 289,  596 => 286,  591 => 284,  588 => 283,  584 => 281,  575 => 278,  571 => 277,  566 => 275,  559 => 273,  554 => 271,  549 => 269,  543 => 266,  539 => 265,  530 => 259,  524 => 256,  514 => 249,  511 => 248,  505 => 247,  497 => 245,  492 => 243,  487 => 242,  484 => 241,  480 => 240,  476 => 239,  469 => 235,  460 => 229,  456 => 228,  449 => 224,  442 => 219,  437 => 217,  432 => 216,  427 => 214,  422 => 213,  420 => 212,  413 => 208,  402 => 201,  398 => 200,  392 => 198,  388 => 197,  380 => 192,  370 => 186,  366 => 185,  362 => 183,  358 => 182,  354 => 180,  350 => 179,  342 => 174,  333 => 167,  328 => 165,  323 => 164,  318 => 162,  314 => 161,  310 => 160,  302 => 155,  291 => 147,  285 => 144,  271 => 133,  266 => 131,  259 => 127,  252 => 123,  246 => 120,  240 => 117,  234 => 114,  228 => 111,  222 => 108,  217 => 106,  211 => 103,  206 => 101,  200 => 98,  195 => 96,  190 => 94,  185 => 92,  180 => 90,  175 => 88,  165 => 81,  159 => 77,  152 => 73,  148 => 72,  145 => 71,  136 => 66,  134 => 65,  95 => 28,  84 => 26,  80 => 25,  75 => 23,  68 => 19,  63 => 17,  57 => 14,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/socnetauth2.twig", "");
    }
}
