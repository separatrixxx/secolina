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

/* extension/module/blog_latest.twig */
class __TwigTemplate_67e0d7b48ed000d732287f17d229ba6a1013d2a55ae468003a5b5f9a7c852009 extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-blog_latest\" data-toggle=\"tooltip\" title=\"";
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
            echo " 
        <li><a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 18
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo " 
    <div class=\"panel panel-default\">
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog_latest\" class=\"form-horizontal\">
          <div class=\"form-group\">
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
            echo " 
              <div class=\"text-danger\">";
            // line 33
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 34
        echo " 
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 39
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 41
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 46
        echo ($context["entry_columns"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
            <select name=\"columns\" id=\"input-columns\" class=\"form-control\">
            ";
        // line 49
        if ((($context["columns"] ?? null) == "4")) {
            echo " 
            <option value=\"4\" selected=\"selected\">";
            // line 50
            echo ($context["text_4"] ?? null);
            echo "</option>
            ";
        } else {
            // line 51
            echo "   
            <option value=\"4\">";
            // line 52
            echo ($context["text_4"] ?? null);
            echo "</option>
            ";
        }
        // line 53
        echo "  
            ";
        // line 54
        if ((($context["columns"] ?? null) == "3")) {
            echo " 
            <option value=\"3\" selected=\"selected\">";
            // line 55
            echo ($context["text_3"] ?? null);
            echo "</option>
            ";
        } else {
            // line 56
            echo "   
            <option value=\"3\">";
            // line 57
            echo ($context["text_3"] ?? null);
            echo "</option>
            ";
        }
        // line 58
        echo "  
            ";
        // line 59
        if ((($context["columns"] ?? null) == "2")) {
            echo " 
            <option value=\"2\" selected=\"selected\">";
            // line 60
            echo ($context["text_2"] ?? null);
            echo "</option>
            ";
        } else {
            // line 61
            echo "   
            <option value=\"2\">";
            // line 62
            echo ($context["text_2"] ?? null);
            echo "</option>
            ";
        }
        // line 63
        echo "  
            ";
        // line 64
        if ((($context["columns"] ?? null) == "1")) {
            echo " 
            <option value=\"1\" selected=\"selected\">";
            // line 65
            echo ($context["text_1"] ?? null);
            echo "</option>
            ";
        } else {
            // line 66
            echo "   
            <option value=\"1\">";
            // line 67
            echo ($context["text_1"] ?? null);
            echo "</option>
            ";
        }
        // line 68
        echo "  
            </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 74
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
            <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 76
        echo ($context["entry_category"] ?? null);
        echo "\" class=\"form-control\" />
            <div id=\"blog-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blog_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog_category"]) {
            // line 79
            echo "            ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["blog_category"], "blog_category_id", [], "any", false, false, false, 79), ($context["this_blog_category"] ?? null))) {
                // line 80
                echo "            <div id=\"blog-category";
                echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "blog_category_id", [], "any", false, false, false, 80);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "name", [], "any", false, false, false, 80);
                echo "
            <input type=\"hidden\" name=\"this_blog_category[]\" value=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "blog_category_id", [], "any", false, false, false, 81);
                echo "\" />
            </div>
            ";
            }
            // line 84
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            </div>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 90
        echo ($context["entry_carousel"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
             <select name=\"carousel\" id=\"input-carousel\" class=\"form-control\">
                ";
        // line 93
        if (($context["carousel"] ?? null)) {
            echo " 
                <option value=\"1\" selected=\"selected\">";
            // line 94
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 95
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 96
            echo "   
                <option value=\"1\">";
            // line 97
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 98
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 99
        echo "  
              </select>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">
            <span data-toggle=\"tooltip\" title=\"";
        // line 106
        echo ($context["entry_characters_h"] ?? null);
        echo "\">";
        echo ($context["entry_characters"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"characters\" value=\"";
        // line 108
        echo ($context["characters"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_characters"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 113
        echo ($context["entry_thumb"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"thumb\" id=\"input-status\" class=\"form-control\">
                ";
        // line 116
        if (($context["thumb"] ?? null)) {
            echo " 
                <option value=\"1\" selected=\"selected\">";
            // line 117
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 118
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 119
            echo "   
                <option value=\"1\">";
            // line 120
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 121
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 122
        echo "  
              </select>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 128
        echo ($context["entry_thumb_size"] ?? null);
        echo "</label>
            <div class=\"col-sm-5\">
            <input type=\"text\" name=\"width\" value=\"";
        // line 130
        echo ($context["width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
            </div>
            <div class=\"col-sm-5\">
            <input type=\"text\" name=\"height\" value=\"";
        // line 133
        echo ($context["height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 138
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 141
        if (($context["status"] ?? null)) {
            echo " 
                <option value=\"1\" selected=\"selected\">";
            // line 142
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 143
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 144
            echo "   
                <option value=\"1\">";
            // line 145
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 146
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 147
        echo "  
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
// Category
\$('input[name=\\'category\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=blog/blog_category/autocomplete&user_token=";
        // line 162
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',     
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'category\\']').val('');
    
    \$('#blog-category' + item['value']).remove();
    
    \$('#blog-category').append('<div id=\"blog-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"this_blog_category[]\" value=\"' + item['value'] + '\" /></div>'); 
  }
});

\$('#blog-category').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});

</script>
";
        // line 188
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/blog_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 188,  453 => 162,  436 => 147,  431 => 146,  427 => 145,  424 => 144,  419 => 143,  415 => 142,  411 => 141,  405 => 138,  397 => 133,  391 => 130,  386 => 128,  378 => 122,  373 => 121,  369 => 120,  366 => 119,  361 => 118,  357 => 117,  353 => 116,  347 => 113,  337 => 108,  330 => 106,  321 => 99,  316 => 98,  312 => 97,  309 => 96,  304 => 95,  300 => 94,  296 => 93,  290 => 90,  283 => 85,  277 => 84,  271 => 81,  264 => 80,  261 => 79,  257 => 78,  252 => 76,  245 => 74,  237 => 68,  232 => 67,  229 => 66,  224 => 65,  220 => 64,  217 => 63,  212 => 62,  209 => 61,  204 => 60,  200 => 59,  197 => 58,  192 => 57,  189 => 56,  184 => 55,  180 => 54,  177 => 53,  172 => 52,  169 => 51,  164 => 50,  160 => 49,  154 => 46,  144 => 41,  139 => 39,  132 => 34,  127 => 33,  123 => 32,  117 => 31,  112 => 29,  107 => 27,  101 => 24,  96 => 21,  89 => 18,  85 => 17,  78 => 12,  68 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/blog_latest.twig", "");
    }
}
