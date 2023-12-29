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

/* default/template/extension/module/ocdbanner/ocdbanner.twig */
class __TwigTemplate_ab303915a420e1dbd2cbc2457cac13c007f88604badbc0b635881b442f905c94 extends \Twig\Template
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
        if (((array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == 2)) || (array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == 3)))) {
            // line 2
            echo "</div></div></div> 
";
        }
        // line 4
        echo "<div id=\"ocdbanner-";
        echo ($context["module"] ?? null);
        echo "\" class=\"ocdbanner";
        echo ($context["class_fluid"] ?? null);
        echo "\" data-ocdbanner=\"";
        echo ($context["module"] ?? null);
        echo "\"";
        echo ($context["background"] ?? null);
        echo ">
  ";
        // line 5
        if ((array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == 3))) {
            // line 6
            echo "  <div class=\"container\">
  ";
        }
        // line 8
        echo "  ";
        if (((array_key_exists("name_front_show", $context) && (($context["name_front_show"] ?? null) != 0)) && (array_key_exists("name_front", $context) && (($context["name_front"] ?? null) != "")))) {
            // line 9
            echo "  <div class=\"title-module\">";
            echo ($context["name_front"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        $context["group_row"] = 1;
        // line 12
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["group_tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group_tab"]) {
            echo " 
  ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "status", [], "any", true, true, false, 13) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "status", [], "any", false, false, false, 13) != 0))) {
                // line 14
                echo "  ";
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 14) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 14) == "grid"))) {
                    echo "  
  <div class=\"banner-group group-bootstrap\"";
                    // line 15
                    if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 15) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 15) != ""))) {
                        echo " data-group-rows=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 15);
                        echo "\"";
                    }
                    echo ">  
  ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 16
$context["group_tab"], "mode", [], "any", true, true, false, 16) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 16) == "carousel"))) {
                    // line 17
                    echo "  <div class=\"banner-group group-carousel\">
  ";
                } else {
                    // line 19
                    echo "  <div class=\"banner-group group-grid\">
  ";
                }
                // line 21
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group_front", [], "any", true, true, false, 21) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group_front", [], "any", false, false, false, 21) != 0))) {
                    // line 22
                    echo "    <div class=\"title-group\">";
                    echo twig_get_attribute($this->env, $this->source, $context["group_tab"], "title_group", [], "any", false, false, false, 22);
                    echo "</div>
    ";
                }
                // line 24
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 24) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 24) == "grid"))) {
                    // line 25
                    echo "    <div class=\"row\">
      ";
                    // line 26
                    if (( !twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 26) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 26) == "2"))) {
                        // line 27
                        echo "      ";
                        $context["bootstrap_class"] = " col-xs-6 col-sm-6 col-md-6 col-lg-6";
                        // line 28
                        echo "      ";
                    } elseif (( !twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 28) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 28) == "3"))) {
                        // line 29
                        echo "      ";
                        $context["bootstrap_class"] = " col-xs-6 col-sm-4 col-md-4 col-lg-4";
                        // line 30
                        echo "      ";
                    } elseif (( !twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 30) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 30) == "4"))) {
                        // line 31
                        echo "      ";
                        $context["bootstrap_class"] = " col-xs-6 col-sm-4 col-md-3 col-lg-3";
                        // line 32
                        echo "      ";
                    } elseif (( !twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 32) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 32) == "6"))) {
                        // line 33
                        echo "      ";
                        $context["bootstrap_class"] = " col-xs-6 col-sm-2 col-md-2 col-lg-2";
                        // line 34
                        echo "      ";
                    } elseif (( !twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", true, true, false, 34) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "rows", [], "any", false, false, false, 34) == "12"))) {
                        // line 35
                        echo "      ";
                        $context["bootstrap_class"] = " col-xs-6 col-sm-1 col-md-1 col-lg-1";
                        // line 36
                        echo "      ";
                    } else {
                        // line 37
                        echo "      ";
                        $context["bootstrap_class"] = " col-sm-12";
                        // line 38
                        echo "      ";
                    }
                    // line 39
                    echo "    ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 39) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 39) == "carousel"))) {
                    // line 40
                    echo "    <div id=\"group-carousel-";
                    echo ($context["group_row"] ?? null);
                    echo "\" class=\"splide splide-";
                    echo ($context["group_row"] ?? null);
                    echo "\">
      <div class=\"splide__track\">
        <div class=\"splide__list\">    
    ";
                } else {
                    // line 44
                    echo "    <div class=\"respgrid";
                    if (( !twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_width_mobile", [], "any", true, true, false, 44) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_width_mobile", [], "any", false, false, false, 44) != 0))) {
                        echo " respgrid-banner-full";
                    }
                    echo " respgrid-";
                    echo ($context["group_row"] ?? null);
                    echo "\" data-group=\"";
                    echo ($context["group_row"] ?? null);
                    echo "\" data-gutter=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["group_tab"], "gutter", [], "any", false, false, false, 44);
                    echo "\">
    ";
                }
                // line 46
                echo "      ";
                $context["banner_row"] = 1;
                // line 47
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", true, true, false, 47)) {
                    // line 48
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", false, false, false, 48));
                    foreach ($context['_seq'] as $context["key"] => $context["banner_image"]) {
                        // line 49
                        echo "      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "status", [], "any", true, true, false, 49) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "status", [], "any", false, false, false, 49) != 0))) {
                            echo "    
      ";
                            // line 50
                            if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 50) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 50) == "grid"))) {
                                // line 51
                                echo "      <div class=\"item-banner";
                                echo ($context["bootstrap_class"] ?? null);
                                echo "\">
      ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 52
$context["group_tab"], "mode", [], "any", true, true, false, 52) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 52) == "carousel"))) {
                                // line 53
                                echo "      <div class=\"splide__slide item-banner\">
      ";
                            } else {
                                // line 55
                                echo "      ";
                                if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 55) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 55) == "image_image")) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 55) == ""))) {
                                    // line 56
                                    echo "      ";
                                    $context["class_no_image_banner"] = " item-grid-no-image";
                                    // line 57
                                    echo "      ";
                                } else {
                                    // line 58
                                    echo "      ";
                                    $context["class_no_image_banner"] = "";
                                    // line 59
                                    echo "      ";
                                }
                                // line 60
                                echo "      ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_slider", [], "any", false, false, false, 60));
                                foreach ($context['_seq'] as $context["_key"] => $context["slider_item"]) {
                                    // line 61
                                    echo "      ";
                                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["slider_item"], "image_slide", [], "any", false, false, false, 61))) {
                                        // line 62
                                        echo "      ";
                                        $context["class_no_image_banner"] = " item-grid-no-image";
                                        // line 63
                                        echo "      ";
                                    } else {
                                        // line 64
                                        echo "      ";
                                        $context["class_no_image_banner"] = "";
                                        // line 65
                                        echo "      ";
                                    }
                                    // line 66
                                    echo "      ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_item'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 67
                                echo "      <div class=\"item-grid item-grid-";
                                echo ($context["group_row"] ?? null);
                                echo ($context["class_no_image_banner"] ?? null);
                                echo "\" data-colspan=\"";
                                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["group_tab"], "grid_stack", [], "any", false, false, false, 67)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["gs_width"] ?? null) : null);
                                echo "\" data-rowspan=\"";
                                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["group_tab"], "grid_stack", [], "any", false, false, false, 67)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["key"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["gs_height"] ?? null) : null);
                                echo "\">
      ";
                            }
                            // line 69
                            echo "        ";
                            if ((((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 69) == "image_image")) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 69) != "respgrid"))) || (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 69) == "image_image")) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 69) == "respgrid"))) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 69) != "")))) {
                                // line 70
                                echo "        ";
                                if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", true, true, false, 70) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 70) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", true, true, false, 70) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, false, false, 70) == "title_before_image")))) {
                                    // line 71
                                    echo "        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 71) || (twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 71) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_video", [], "any", false, false, false, 71) != 0)))) {
                                        // line 72
                                        echo "        <div class=\"title-banner before-title ";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 72);
                                        echo "\"><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 72);
                                        echo "\" ";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_target", [], "any", false, false, false, 72);
                                        echo ">";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, false, false, 72);
                                        echo "</a></div>
        ";
                                    } else {
                                        // line 74
                                        echo "        <div class=\"title-banner before-title ";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 74);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, false, false, 74);
                                        echo "</div>
        ";
                                    }
                                    // line 76
                                    echo "        ";
                                }
                                // line 77
                                echo "        ";
                                if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 77) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_video", [], "any", false, false, false, 77) != 0))) {
                                    // line 78
                                    echo "        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 78);
                                    echo "\" ";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_target", [], "any", false, false, false, 78);
                                    if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", true, true, false, 78) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 78) != ""))) {
                                        echo " data-animation=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 78);
                                        echo "\"";
                                    }
                                    echo ">
          <img src=\"";
                                    // line 79
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 79);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_img", [], "any", false, false, false, 79);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "alt_image", [], "any", false, false, false, 79);
                                    echo "\" class=\"img-responsive\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_width", [], "any", false, false, false, 79);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_height", [], "any", false, false, false, 79);
                                    echo "\" />
          ";
                                    // line 80
                                    if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", true, true, false, 80) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 80) != 0)) || (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", true, true, false, 80) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", false, false, false, 80) != 0)))) {
                                        // line 81
                                        echo "          <div class=\"block-desc\">
            ";
                                        // line 82
                                        if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", true, true, false, 82) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 82) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", true, true, false, 82) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, false, false, 82) == "title_html_image")))) {
                                            // line 83
                                            echo "            <div class=\"title-banner html-title ";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 83);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, false, false, 83);
                                            echo "</div>
            ";
                                        }
                                        // line 85
                                        echo "            ";
                                        if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", true, true, false, 85) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", false, false, false, 85) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", true, true, false, 85) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, false, false, 85) != "")))) {
                                            // line 86
                                            echo "            <div class=\"banner-desc\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, false, false, 86);
                                            echo "</div>
            ";
                                        }
                                        // line 88
                                        echo "          </div>
          ";
                                    }
                                    // line 90
                                    echo "        </a>
        ";
                                } elseif (twig_get_attribute($this->env, $this->source,                                 // line 91
$context["banner_image"], "link_image", [], "any", false, false, false, 91)) {
                                    // line 92
                                    echo "        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 92);
                                    echo "\" ";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_target", [], "any", false, false, false, 92);
                                    if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", true, true, false, 92) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 92) != ""))) {
                                        echo " data-animation=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 92);
                                        echo "\"";
                                    }
                                    echo "> 
          <img src=\"";
                                    // line 93
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 93);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_img", [], "any", false, false, false, 93);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "alt_image", [], "any", false, false, false, 93);
                                    echo "\" class=\"img-responsive\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_width", [], "any", false, false, false, 93);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_height", [], "any", false, false, false, 93);
                                    echo "\" />
          ";
                                    // line 94
                                    if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", true, true, false, 94) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 94) != 0)) || (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", true, true, false, 94) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", false, false, false, 94) != 0)))) {
                                        // line 95
                                        echo "          <div class=\"block-desc\">
            ";
                                        // line 96
                                        if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", true, true, false, 96) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 96) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", true, true, false, 96) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, false, false, 96) == "title_html_image")))) {
                                            // line 97
                                            echo "            <div class=\"title-banner html-title ";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 97);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, false, false, 97);
                                            echo "</div>
            ";
                                        }
                                        // line 99
                                        echo "            ";
                                        if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", true, true, false, 99) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", false, false, false, 99) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", true, true, false, 99) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, false, false, 99) != "")))) {
                                            // line 100
                                            echo "            <div class=\"banner-desc\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, false, false, 100);
                                            echo "</div>
            ";
                                        }
                                        // line 102
                                        echo "          </div>
          ";
                                    }
                                    // line 104
                                    echo "        </a>
        ";
                                } else {
                                    // line 105
                                    echo "  
        <div class=\"no-link\"";
                                    // line 106
                                    if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", true, true, false, 106) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 106) != ""))) {
                                        echo " data-animation=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "animation", [], "any", false, false, false, 106);
                                        echo "\"";
                                    }
                                    echo ">  
          <img src=\"";
                                    // line 107
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 107);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_img", [], "any", false, false, false, 107);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "alt_image", [], "any", false, false, false, 107);
                                    echo "\" class=\"img-responsive\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_width", [], "any", false, false, false, 107);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_height", [], "any", false, false, false, 107);
                                    echo "\" />
          ";
                                    // line 108
                                    if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", true, true, false, 108) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 108) != 0)) || (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", true, true, false, 108) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", false, false, false, 108) != 0)))) {
                                        // line 109
                                        echo "          <div class=\"block-desc\">
            ";
                                        // line 110
                                        if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", true, true, false, 110) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 110) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", true, true, false, 110) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, false, false, 110) == "title_html_image")))) {
                                            // line 111
                                            echo "            <div class=\"title-banner html-title ";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 111);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, false, false, 111);
                                            echo "</div>
            ";
                                        }
                                        // line 113
                                        echo "            ";
                                        if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", true, true, false, 113) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "desc_show", [], "any", false, false, false, 113) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", true, true, false, 113) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, false, false, 113) != "")))) {
                                            // line 114
                                            echo "            <div class=\"banner-desc\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, false, false, 114);
                                            echo "</div>
            ";
                                        }
                                        // line 116
                                        echo "          </div>
          ";
                                    }
                                    // line 118
                                    echo "        </div>
        ";
                                }
                                // line 120
                                echo "        ";
                                if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", true, true, false, 120) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_show", [], "any", false, false, false, 120) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", true, true, false, 120) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title", [], "any", false, false, false, 120) == "title_after_image")))) {
                                    // line 121
                                    echo "        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 121) || (twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 121) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_video", [], "any", false, false, false, 121) != 0)))) {
                                        // line 122
                                        echo "        <div class=\"title-banner after-title ";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 122);
                                        echo "\"><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_image", [], "any", false, false, false, 122);
                                        echo "\" ";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link_target", [], "any", false, false, false, 122);
                                        echo ">";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, false, false, 122);
                                        echo "</a></div>
        ";
                                    } else {
                                        // line 124
                                        echo "        <div class=\"title-banner after-title ";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "text_align", [], "any", false, false, false, 124);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_image", [], "any", false, false, false, 124);
                                        echo "</div>
        ";
                                    }
                                    // line 126
                                    echo "        ";
                                }
                                // line 127
                                echo "        ";
                            }
                            // line 128
                            echo "        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 128) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 128) == "image_video"))) {
                                // line 129
                                echo "        ";
                                if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", true, true, false, 129) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", false, false, false, 129) == "left"))) {
                                    // line 130
                                    echo "        ";
                                    $context["before_title_class"] = " class=\"title-banner before-title text-left\"";
                                    // line 131
                                    echo "        ";
                                    $context["after_title_class"] = " class=\"title-banner after-title text-left\"";
                                    // line 132
                                    echo "        ";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", true, true, false, 132) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "align_title_video", [], "any", false, false, false, 132) == "center"))) {
                                    // line 133
                                    echo "        ";
                                    $context["before_title_class"] = " class=\"title-banner before-title text-center\"";
                                    // line 134
                                    echo "        ";
                                    $context["after_title_class"] = " class=\"title-banner after-title text-center\"";
                                    // line 135
                                    echo "        ";
                                } else {
                                    // line 136
                                    echo "        ";
                                    $context["before_title_class"] = " class=\"title-banner before-title text-right\"";
                                    // line 137
                                    echo "        ";
                                    $context["after_title_class"] = " class=\"title-banner after-title text-right\"";
                                    // line 138
                                    echo "        ";
                                }
                                // line 139
                                echo "        ";
                                if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video_show", [], "any", true, true, false, 139) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video_show", [], "any", false, false, false, 139) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title_video", [], "any", true, true, false, 139) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title_video", [], "any", false, false, false, 139) == "title_before_image")))) {
                                    // line 140
                                    echo "        <div";
                                    echo ($context["before_title_class"] ?? null);
                                    echo ">";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video", [], "any", false, false, false, 140);
                                    echo "</div>
        ";
                                }
                                // line 142
                                echo "        ";
                                if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_host", [], "any", true, true, false, 142) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_host", [], "any", false, false, false, 142) == "youtube"))) {
                                    // line 143
                                    echo "        ";
                                    $context["video_host"] = " class=\"youtube-host embed-responsive embed-responsive-16by9\"";
                                    // line 144
                                    echo "        ";
                                } else {
                                    // line 145
                                    echo "        ";
                                    $context["video_host"] = " class=\"vimeo-host embed-responsive embed-responsive-16by9\"";
                                    // line 146
                                    echo "        ";
                                }
                                // line 147
                                echo "        <div class=\"iframe-video\">
          <div";
                                // line 148
                                echo ($context["video_host"] ?? null);
                                echo ">
            ";
                                // line 149
                                if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_host", [], "any", true, true, false, 149) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_host", [], "any", false, false, false, 149) == "youtube"))) {
                                    // line 150
                                    echo "            <iframe src=\"//www.youtube.com/embed/";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_id", [], "any", false, false, false, 150);
                                    echo "\" loading=\"lazy\" class=\"embed-responsive-item\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
            ";
                                } else {
                                    // line 152
                                    echo "            <iframe src=\"//player.vimeo.com/video/";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "type_image_video_id", [], "any", false, false, false, 152);
                                    echo "\" loading=\"lazy\" class=\"embed-responsive-item\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
            ";
                                }
                                // line 154
                                echo "          </div>
        </div>
        ";
                                // line 156
                                if (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video_show", [], "any", true, true, false, 156) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video_show", [], "any", false, false, false, 156) != 0)) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title_video", [], "any", true, true, false, 156) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "position_title_video", [], "any", false, false, false, 156) == "title_after_image")))) {
                                    // line 157
                                    echo "        <div";
                                    echo ($context["after_title_class"] ?? null);
                                    echo ">";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title_video", [], "any", false, false, false, 157);
                                    echo "</div>
        ";
                                }
                                // line 159
                                echo "        ";
                            }
                            // line 160
                            echo "        ";
                            if ((((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 160) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 160) == "image_slider")) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 160) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 160) != "respgrid"))) || (((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 160) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 160) == "image_slider")) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 160) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 160) == "respgrid"))) && (($context["class_no_image_banner"] ?? null) == "")))) {
                                // line 161
                                echo "        <div class=\"type-slider\">
          ";
                                // line 162
                                $context["slider_row"] = 1;
                                // line 163
                                echo "          ";
                                if (twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_slider", [], "any", true, true, false, 163)) {
                                    // line 164
                                    echo "          <div id=\"slider-";
                                    echo ($context["group_row"] ?? null);
                                    echo "-";
                                    echo ($context["banner_row"] ?? null);
                                    echo "\" class=\"splide slider-splide-";
                                    echo ($context["group_row"] ?? null);
                                    echo "\">  
            <div class=\"splide__track\">
              <div class=\"splide__list\">
                ";
                                    // line 167
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["banner_image"], "image_slider", [], "any", false, false, false, 167));
                                    foreach ($context['_seq'] as $context["_key"] => $context["slider_item"]) {
                                        echo " 
                ";
                                        // line 168
                                        if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "status", [], "any", true, true, false, 168) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "status", [], "any", false, false, false, 168) != 0))) {
                                            // line 169
                                            echo "                <div class=\"splide__slide item-slide slider-";
                                            echo ($context["module"] ?? null);
                                            echo "-";
                                            echo ($context["group_row"] ?? null);
                                            echo "-";
                                            echo ($context["banner_row"] ?? null);
                                            echo "-";
                                            echo ($context["slider_row"] ?? null);
                                            echo "\">
                  ";
                                            // line 170
                                            if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide", [], "any", false, false, false, 170) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide_video", [], "any", false, false, false, 170) != 0))) {
                                                // line 171
                                                echo "                  <a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide", [], "any", false, false, false, 171);
                                                echo "\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_target_slide", [], "any", false, false, false, 171);
                                                echo ">
                    <img src=\"";
                                                // line 172
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "image_slide", [], "any", false, false, false, 172);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_img", [], "any", false, false, false, 172);
                                                echo "\" alt=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "alt_slide", [], "any", false, false, false, 172);
                                                echo "\" class=\"img-responsive\" />
                    ";
                                                // line 173
                                                if (((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", true, true, false, 173) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", false, false, false, 173) != 0)) || (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", true, true, false, 173) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", false, false, false, 173) != 0)))) {
                                                    // line 174
                                                    echo "                    <div class=\"block-desc\">
                      ";
                                                    // line 175
                                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", true, true, false, 175) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", false, false, false, 175) != 0))) {
                                                        // line 176
                                                        echo "                      <div class=\"slide-title ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", false, false, false, 176);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide", [], "any", false, false, false, 176);
                                                        echo "</div>
                      ";
                                                    }
                                                    // line 178
                                                    echo "                      ";
                                                    if (((twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", true, true, false, 178) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", false, false, false, 178) != 0)) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", true, true, false, 178) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", false, false, false, 178) != "")))) {
                                                        // line 179
                                                        echo "                      <div class=\"slide-desc\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", false, false, false, 179);
                                                        echo "</div>
                      ";
                                                    }
                                                    // line 181
                                                    echo "                    </div>
                    ";
                                                }
                                                // line 183
                                                echo "                  </a>
                  ";
                                            } elseif (twig_get_attribute($this->env, $this->source,                                             // line 184
$context["slider_item"], "link_slide", [], "any", false, false, false, 184)) {
                                                // line 185
                                                echo "                  <a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_slide", [], "any", false, false, false, 185);
                                                echo "\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "link_target_slide", [], "any", false, false, false, 185);
                                                echo ">
                    <img src=\"";
                                                // line 186
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "image_slide", [], "any", false, false, false, 186);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_img", [], "any", false, false, false, 186);
                                                echo "\" alt=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "alt_slide", [], "any", false, false, false, 186);
                                                echo "\" class=\"img-responsive\" />
                    ";
                                                // line 187
                                                if (((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", true, true, false, 187) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", false, false, false, 187) != 0)) || (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", true, true, false, 187) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", false, false, false, 187) != 0)))) {
                                                    // line 188
                                                    echo "                    <div class=\"block-desc\">
                      ";
                                                    // line 189
                                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", true, true, false, 189) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", false, false, false, 189) != 0))) {
                                                        // line 190
                                                        echo "                      <div class=\"slide-title ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", false, false, false, 190);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide", [], "any", false, false, false, 190);
                                                        echo "</div>
                      ";
                                                    }
                                                    // line 192
                                                    echo "                      ";
                                                    if (((twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", true, true, false, 192) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", false, false, false, 192) != 0)) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", true, true, false, 192) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", false, false, false, 192) != "")))) {
                                                        // line 193
                                                        echo "                      <div class=\"slide-desc\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", false, false, false, 193);
                                                        echo "</div>
                      ";
                                                    }
                                                    // line 194
                                                    echo "                    
                    </div>
                    ";
                                                }
                                                // line 197
                                                echo "                  </a>
                  ";
                                            } else {
                                                // line 199
                                                echo "                  <img src=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "image_slide", [], "any", false, false, false, 199);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_img", [], "any", false, false, false, 199);
                                                echo "\" alt=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "alt_slide", [], "any", false, false, false, 199);
                                                echo "\" class=\"img-responsive\" />
                  ";
                                                // line 200
                                                if (((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", true, true, false, 200) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", false, false, false, 200) != 0)) || (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", true, true, false, 200) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", false, false, false, 200) != 0)))) {
                                                    // line 201
                                                    echo "                  <div class=\"block-desc\">
                    ";
                                                    // line 202
                                                    if ((twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", true, true, false, 202) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_show", [], "any", false, false, false, 202) != 0))) {
                                                        // line 203
                                                        echo "                    <div class=\"slide-title ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide_align", [], "any", false, false, false, 203);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "title_slide", [], "any", false, false, false, 203);
                                                        echo "</div>
                    ";
                                                    }
                                                    // line 205
                                                    echo "                    ";
                                                    if (((twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", true, true, false, 205) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide_show", [], "any", false, false, false, 205) != 0)) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", true, true, false, 205) && (twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", false, false, false, 205) != "")))) {
                                                        // line 206
                                                        echo "                    <div class=\"slide-desc\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["slider_item"], "desc_slide", [], "any", false, false, false, 206);
                                                        echo "</div>
                    ";
                                                    }
                                                    // line 208
                                                    echo "                  </div>
                  ";
                                                }
                                                // line 209
                                                echo "  
                  ";
                                            }
                                            // line 211
                                            echo "                  ";
                                            $context["slider_row"] = (($context["slider_row"] ?? null) + 1);
                                            // line 212
                                            echo "                </div>
                ";
                                        }
                                        // line 214
                                        echo "                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_item'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 215
                                    echo "              </div>
            </div>
          </div>
          ";
                                }
                                // line 219
                                echo "        </div>
        ";
                            }
                            // line 221
                            echo "      ";
                            if ((((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 221) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 221) == "grid")) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 221) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 221) == "carousel"))) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 221) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 221) == "respgrid")))) {
                                // line 222
                                echo "      </div>
      ";
                            }
                            // line 223
                            echo "    
      ";
                            // line 224
                            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                            // line 225
                            echo "      ";
                        }
                        // line 226
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['banner_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    echo "      ";
                }
                echo " 
    ";
                // line 228
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 228) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 228) == "grid"))) {
                    // line 229
                    echo "    </div>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 230
$context["group_tab"], "mode", [], "any", true, true, false, 230) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 230) == "carousel"))) {
                    // line 231
                    echo "        </div>
      </div>
    </div>
    ";
                } else {
                    // line 235
                    echo "    </div>
    ";
                }
                // line 237
                echo "  ";
                if ((((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 237) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 237) == "grid")) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 237) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 237) == "carousel"))) || (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 237) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 237) == "respgrid")))) {
                    // line 238
                    echo "  </div> 
  ";
                }
                // line 240
                echo "  ";
                $context["group_row"] = (($context["group_row"] ?? null) + 1);
                // line 241
                echo "  ";
            }
            // line 242
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        $context["group_row"] = 1;
        echo " 
";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["group_tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group_tab"]) {
            echo " 
";
            // line 245
            if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "status", [], "any", true, true, false, 245) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "status", [], "any", false, false, false, 245) != 0))) {
                echo "   
";
                // line 246
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 246) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 246) == "respgrid"))) {
                    // line 247
                    echo "<script type=\"text/javascript\">
var settings = {
  gutter: \"";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["group_tab"], "gutter", [], "any", false, false, false, 249);
                    echo "px\",
  itemclass: \"#ocdbanner-";
                    // line 250
                    echo ($context["module"] ?? null);
                    echo " .respgrid-";
                    echo ($context["group_row"] ?? null);
                    echo " .item-grid\",
  breakpoints: {
    \"*\": {
      \"range\": \"*\",
      \"options\": {
        \"column\": 12,
      }
    },    
";
                    // line 258
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "breakpoint", [], "any", false, false, false, 258));
                    foreach ($context['_seq'] as $context["_key"] => $context["breakpoint"]) {
                        // line 259
                        echo "    \"";
                        echo twig_get_attribute($this->env, $this->source, $context["breakpoint"], "name", [], "any", false, false, false, 259);
                        echo "\": {
      \"range\": \"";
                        // line 260
                        echo twig_get_attribute($this->env, $this->source, $context["breakpoint"], "range", [], "any", false, false, false, 260);
                        echo "\",
      \"options\": {
        \"column\": ";
                        // line 262
                        echo twig_get_attribute($this->env, $this->source, $context["breakpoint"], "column", [], "any", false, false, false, 262);
                        echo ",
        \"gutter\": \"";
                        // line 263
                        echo twig_get_attribute($this->env, $this->source, $context["breakpoint"], "gutter", [], "any", false, false, false, 263);
                        echo "px\",
      }
    },
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breakpoint'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 267
                    echo "  }
};
respgrid(\"#ocdbanner-";
                    // line 269
                    echo ($context["module"] ?? null);
                    echo " .respgrid-";
                    echo ($context["group_row"] ?? null);
                    echo "\", settings);
</script>
";
                }
                // line 272
                if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", true, true, false, 272) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "mode", [], "any", false, false, false, 272) == "carousel"))) {
                    // line 273
                    echo "<script type=\"text/javascript\">
new Splide(\"#ocdbanner-";
                    // line 274
                    echo ($context["module"] ?? null);
                    echo " .splide-";
                    echo ($context["group_row"] ?? null);
                    echo "\", {
  rewind: true,
  ";
                    // line 276
                    if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_loop", [], "any", true, true, false, 276) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_loop", [], "any", false, false, false, 276) != 0))) {
                        // line 277
                        echo "  type: \"loop\",
  ";
                    }
                    // line 279
                    echo "  ";
                    if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_item", [], "any", false, false, false, 279)) {
                        // line 280
                        echo "  perPage: 3,
  perMove: 1,
  gap: 20,
  breakpoints: {
    ";
                        // line 284
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_item", [], "any", false, false, false, 284));
                        foreach ($context['_seq'] as $context["_key"] => $context["carousel_item"]) {
                            // line 285
                            echo "    \"";
                            echo twig_get_attribute($this->env, $this->source, $context["carousel_item"], "window", [], "any", false, false, false, 285);
                            echo "\": {
      perPage: ";
                            // line 286
                            echo twig_get_attribute($this->env, $this->source, $context["carousel_item"], "item", [], "any", false, false, false, 286);
                            echo ",
      gap: ";
                            // line 287
                            echo twig_get_attribute($this->env, $this->source, $context["carousel_item"], "spaceBetween", [], "any", false, false, false, 287);
                            echo ",
    },
    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 290
                        echo "  },
  ";
                    } else {
                        // line 292
                        echo "  perPage: 3,
  perMove: 1,
  gap: 20,
  breakpoints: {
    \"640\": {
      perPage: 2,
      gap: 20,
    },
    \"320\": {
      perPage: 1,
      gap: 10,
    }
  },
  ";
                    }
                    // line 305
                    echo " 
  ";
                    // line 306
                    if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_autoplay", [], "any", true, true, false, 306) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_autoplay", [], "any", false, false, false, 306) != 0))) {
                        // line 307
                        echo "  autoplay: true,
  ";
                        // line 308
                        if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_autoplay_speed", [], "any", true, true, false, 308) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_autoplay_speed", [], "any", false, false, false, 308) != ""))) {
                            // line 309
                            echo "  interval: ";
                            echo twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_autoplay_speed", [], "any", false, false, false, 309);
                            echo ",
  ";
                        }
                        // line 311
                        echo "  ";
                    } else {
                        // line 312
                        echo "  autoPlay: false,
  ";
                    }
                    // line 314
                    echo "  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_pagination", [], "any", true, true, false, 314) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_pagination", [], "any", false, false, false, 314) == 0))) {
                        // line 315
                        echo "  pagination: false,
  ";
                    }
                    // line 317
                    echo "  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_navigation", [], "any", true, true, false, 317) && (twig_get_attribute($this->env, $this->source, $context["group_tab"], "carousel_navigation", [], "any", false, false, false, 317) == 0))) {
                        // line 318
                        echo "  arrows: false,
  ";
                    }
                    // line 320
                    echo "}).mount();
</script>
";
                }
                // line 323
                $context["banner_row"] = 1;
                echo " 
";
                // line 324
                if (twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", true, true, false, 324)) {
                    echo " 
";
                    // line 325
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group_tab"], "banner_image", [], "any", false, false, false, 325));
                    foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                        echo " 
";
                        // line 326
                        if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", true, true, false, 326) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "type", [], "any", false, false, false, 326) == "image_slider"))) {
                            // line 327
                            echo "<script type=\"text/javascript\">
new Splide(\"#ocdbanner-";
                            // line 328
                            echo ($context["module"] ?? null);
                            echo " #slider-";
                            echo ($context["group_row"] ?? null);
                            echo "-";
                            echo ($context["banner_row"] ?? null);
                            echo "\", {
  rewind: true,
  ";
                            // line 330
                            if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_mode", [], "any", true, true, false, 330) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_mode", [], "any", false, false, false, 330) == "fade"))) {
                                // line 331
                                echo "  type: \"fade\",
  ";
                                // line 332
                                if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_loop", [], "any", true, true, false, 332) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_loop", [], "any", false, false, false, 332) == 1))) {
                                    // line 333
                                    echo "  rewind: true,
  ";
                                }
                                // line 334
                                echo " 
  ";
                            } else {
                                // line 336
                                echo "  ";
                                if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_loop", [], "any", true, true, false, 336) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_loop", [], "any", false, false, false, 336) == 1))) {
                                    // line 337
                                    echo "  type: \"loop\",
  ";
                                }
                                // line 339
                                echo "  ";
                            }
                            // line 340
                            echo "  perPage: 1,
  ";
                            // line 341
                            if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay", [], "any", true, true, false, 341) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay", [], "any", false, false, false, 341) != 0))) {
                                // line 342
                                echo "  autoplay: true,
  ";
                                // line 343
                                if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay_speed", [], "any", true, true, false, 343) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay_speed", [], "any", false, false, false, 343) != ""))) {
                                    // line 344
                                    echo "  interval: ";
                                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_autoplay_speed", [], "any", false, false, false, 344);
                                    echo ",
  ";
                                }
                                // line 346
                                echo "  ";
                            } else {
                                // line 347
                                echo "  autoPlay: false,
  ";
                            }
                            // line 349
                            echo "  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_pagination", [], "any", true, true, false, 349) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_pagination", [], "any", false, false, false, 349) == 0))) {
                                // line 350
                                echo "  pagination: false,
  ";
                            }
                            // line 352
                            echo "  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_navigation", [], "any", true, true, false, 352) && (twig_get_attribute($this->env, $this->source, $context["banner_image"], "slider_navigation", [], "any", false, false, false, 352) == 0))) {
                                // line 353
                                echo "  arrows: false,
  ";
                            }
                            // line 355
                            echo "}).mount();
</script>
";
                        }
                        // line 357
                        echo " 
";
                        // line 358
                        $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                        echo " 
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 360
                echo "  
";
                // line 361
                $context["group_row"] = (($context["group_row"] ?? null) + 1);
                echo " 
";
            }
            // line 362
            echo " 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "  ";
        if ((array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == 3))) {
            // line 365
            echo "  </div>
  ";
        }
        // line 367
        echo "</div>
";
        // line 368
        if (((array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == 2)) || (array_key_exists("width_container", $context) && (($context["width_container"] ?? null) == 3)))) {
            echo "  
<div><div class=\"container\"><div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocdbanner/ocdbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1182 => 368,  1179 => 367,  1175 => 365,  1172 => 364,  1165 => 362,  1160 => 361,  1157 => 360,  1148 => 358,  1145 => 357,  1140 => 355,  1136 => 353,  1133 => 352,  1129 => 350,  1126 => 349,  1122 => 347,  1119 => 346,  1113 => 344,  1111 => 343,  1108 => 342,  1106 => 341,  1103 => 340,  1100 => 339,  1096 => 337,  1093 => 336,  1089 => 334,  1085 => 333,  1083 => 332,  1080 => 331,  1078 => 330,  1069 => 328,  1066 => 327,  1064 => 326,  1058 => 325,  1054 => 324,  1050 => 323,  1045 => 320,  1041 => 318,  1038 => 317,  1034 => 315,  1031 => 314,  1027 => 312,  1024 => 311,  1018 => 309,  1016 => 308,  1013 => 307,  1011 => 306,  1008 => 305,  992 => 292,  988 => 290,  979 => 287,  975 => 286,  970 => 285,  966 => 284,  960 => 280,  957 => 279,  953 => 277,  951 => 276,  944 => 274,  941 => 273,  939 => 272,  931 => 269,  927 => 267,  917 => 263,  913 => 262,  908 => 260,  903 => 259,  899 => 258,  886 => 250,  882 => 249,  878 => 247,  876 => 246,  872 => 245,  866 => 244,  862 => 243,  856 => 242,  853 => 241,  850 => 240,  846 => 238,  843 => 237,  839 => 235,  833 => 231,  831 => 230,  828 => 229,  826 => 228,  821 => 227,  815 => 226,  812 => 225,  810 => 224,  807 => 223,  803 => 222,  800 => 221,  796 => 219,  790 => 215,  784 => 214,  780 => 212,  777 => 211,  773 => 209,  769 => 208,  763 => 206,  760 => 205,  752 => 203,  750 => 202,  747 => 201,  745 => 200,  736 => 199,  732 => 197,  727 => 194,  721 => 193,  718 => 192,  710 => 190,  708 => 189,  705 => 188,  703 => 187,  695 => 186,  688 => 185,  686 => 184,  683 => 183,  679 => 181,  673 => 179,  670 => 178,  662 => 176,  660 => 175,  657 => 174,  655 => 173,  647 => 172,  640 => 171,  638 => 170,  627 => 169,  625 => 168,  619 => 167,  608 => 164,  605 => 163,  603 => 162,  600 => 161,  597 => 160,  594 => 159,  586 => 157,  584 => 156,  580 => 154,  574 => 152,  568 => 150,  566 => 149,  562 => 148,  559 => 147,  556 => 146,  553 => 145,  550 => 144,  547 => 143,  544 => 142,  536 => 140,  533 => 139,  530 => 138,  527 => 137,  524 => 136,  521 => 135,  518 => 134,  515 => 133,  512 => 132,  509 => 131,  506 => 130,  503 => 129,  500 => 128,  497 => 127,  494 => 126,  486 => 124,  474 => 122,  471 => 121,  468 => 120,  464 => 118,  460 => 116,  454 => 114,  451 => 113,  443 => 111,  441 => 110,  438 => 109,  436 => 108,  424 => 107,  416 => 106,  413 => 105,  409 => 104,  405 => 102,  399 => 100,  396 => 99,  388 => 97,  386 => 96,  383 => 95,  381 => 94,  369 => 93,  357 => 92,  355 => 91,  352 => 90,  348 => 88,  342 => 86,  339 => 85,  331 => 83,  329 => 82,  326 => 81,  324 => 80,  312 => 79,  300 => 78,  297 => 77,  294 => 76,  286 => 74,  274 => 72,  271 => 71,  268 => 70,  265 => 69,  254 => 67,  248 => 66,  245 => 65,  242 => 64,  239 => 63,  236 => 62,  233 => 61,  228 => 60,  225 => 59,  222 => 58,  219 => 57,  216 => 56,  213 => 55,  209 => 53,  207 => 52,  202 => 51,  200 => 50,  195 => 49,  190 => 48,  187 => 47,  184 => 46,  170 => 44,  160 => 40,  157 => 39,  154 => 38,  151 => 37,  148 => 36,  145 => 35,  142 => 34,  139 => 33,  136 => 32,  133 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  119 => 26,  116 => 25,  113 => 24,  107 => 22,  104 => 21,  100 => 19,  96 => 17,  94 => 16,  86 => 15,  81 => 14,  79 => 13,  72 => 12,  69 => 11,  63 => 9,  60 => 8,  56 => 6,  54 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/ocdbanner/ocdbanner.twig", "");
    }
}
