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

/* bigmag/template/information/contact.twig */
class __TwigTemplate_49199d7bebf2280d33fcdaa5e5c642605559bf66eddaebe3968acffb6474e23c extends \Twig\Template
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
        echo "
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>

\t\t";
        // line 9
        if (($context["error_warning"] ?? null)) {
            // line 10
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t";
        }
        // line 12
        echo "\t\t
  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      <div class=\"contacts-item form-group\">
        <div class=\"row\">
          ";
        // line 27
        if (($context["image"] ?? null)) {
            // line 28
            echo "          <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
          ";
        }
        // line 30
        echo "          <div class=\"col-sm-3\">
            <label>";
        // line 31
        echo ($context["store"] ?? null);
        echo "</label><br />
            <address>
              ";
        // line 33
        echo ($context["address"] ?? null);
        echo "
            </address>
            ";
        // line 35
        if (($context["geocode"] ?? null)) {
            // line 36
            echo "            <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
            ";
        }
        // line 38
        echo "          </div>
          <div class=\"col-sm-3\"><label>";
        // line 39
        echo ($context["text_telephone"] ?? null);
        echo "</label><br>
            ";
        // line 40
        echo ($context["telephone"] ?? null);
        echo "<br />
            <br />
            ";
        // line 42
        if (($context["fax"] ?? null)) {
            // line 43
            echo "            <label>";
            echo ($context["text_fax"] ?? null);
            echo "</label><br>
            ";
            // line 44
            echo ($context["fax"] ?? null);
            echo "
            ";
        }
        // line 46
        echo "          </div>
          <div class=\"col-sm-3\">
            ";
        // line 48
        if (($context["open"] ?? null)) {
            // line 49
            echo "            <label>";
            echo ($context["text_open"] ?? null);
            echo "</label><br />
            ";
            // line 50
            echo ($context["open"] ?? null);
            echo "<br />
            <br />
            ";
        }
        // line 53
        echo "          </div>
\t\t      <div class=\"col-sm-3\">
            ";
        // line 55
        if (($context["comment"] ?? null)) {
            // line 56
            echo "            <label>";
            echo ($context["text_comment"] ?? null);
            echo "</label><br />
            ";
            // line 57
            echo ($context["comment"] ?? null);
            echo "
            ";
        }
        // line 59
        echo "          </div>
        </div>
      </div>
      ";
        // line 62
        if (($context["locations"] ?? null)) {
            // line 63
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 66
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 68);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 68);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 70);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 74);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 74);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 74);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 76
                echo "                <div class=\"col-sm-3\">
                  <label>";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 77);
                echo "</label><br />
                  <address>
                    ";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 79);
                echo "
                  </address>
                  ";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 82));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 84
                echo "                </div>
                <div class=\"col-sm-3\"> <label>";
                // line 85
                echo ($context["text_telephone"] ?? null);
                echo "</label><br>
                  ";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 86);
                echo "<br />
                  <br />
                  ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                  <label>";
                    echo ($context["text_fax"] ?? null);
                    echo "</label><br>
                  ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 90);
                    echo "
                  ";
                }
                // line 92
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "                  <label>";
                    echo ($context["text_open"] ?? null);
                    echo "</label><br />
                  ";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 96);
                    echo "<br />
                  <br />
                  ";
                }
                // line 99
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "                  <label>";
                    echo ($context["text_comment"] ?? null);
                    echo "</label><br />
                  ";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 101);
                    echo "
                  ";
                }
                // line 103
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "      </div>
      ";
        }
        // line 111
        echo "      
      ";
        // line 112
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 114
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 117
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bigmag/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 117,  355 => 114,  350 => 112,  347 => 111,  343 => 109,  332 => 103,  327 => 101,  322 => 100,  319 => 99,  313 => 96,  308 => 95,  306 => 94,  302 => 92,  297 => 90,  292 => 89,  290 => 88,  285 => 86,  281 => 85,  278 => 84,  268 => 82,  266 => 81,  261 => 79,  256 => 77,  253 => 76,  243 => 74,  241 => 73,  235 => 70,  228 => 68,  224 => 66,  220 => 65,  214 => 63,  212 => 62,  207 => 59,  202 => 57,  197 => 56,  195 => 55,  191 => 53,  185 => 50,  180 => 49,  178 => 48,  174 => 46,  169 => 44,  164 => 43,  162 => 42,  157 => 40,  153 => 39,  150 => 38,  140 => 36,  138 => 35,  133 => 33,  128 => 31,  125 => 30,  115 => 28,  113 => 27,  106 => 23,  102 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  77 => 14,  73 => 13,  70 => 12,  64 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bigmag/template/information/contact.twig", "");
    }
}
