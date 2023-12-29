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

/* bigmag/template/common/footer.twig */
class __TwigTemplate_e2ec5fe959a3f74aa0d92a1b453a14f92ac9eeeb2865170e8e18aa0fafd64036 extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"box-footer__contacts\">
      <div class=\"contacts-wrapper\">
        <div class=\"box-footer__phone\">
          <div class=\"phone-title\">";
        // line 6
        echo ($context["text_footer_phone"] ?? null);
        echo "</div>
          <div class=\"phone--link\">
            <span class=\"phone-link__icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17.87 17.87\" width=\"18\" height=\"18\" id=\"phone\" class=\"icon\">
                <path d=\"M5.11 13a16.84 16.84 0 0 0 7.55 4.66c2.33.67 4.11-.33 4.44-1.11a14.1 14.1 0 0 0 .78-2.66c.22-1.44-4.88-3.44-5.66-2-.22.33-.44 1.55-1.66.78a40.26 40.26 0 0 1-5.34-5.35c-.67-1.22.44-1.44.79-1.66C7.33 5 5.33-.11 4.01 0c-.35 0-2.23.67-2.68.78-.77.33-1.77 2.1-1.11 4.44A21.61 21.61 0 0 0 5.11 13z\" fill=\"currentColor\"></path>
              </svg>
            </span>
            <a href=\"tel:";
        // line 13
        echo ($context["phone"] ?? null);
        echo "\" class=\"link-phone call_phone_hoff\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
          </div>
          ";
        // line 15
        if (($context["open"] ?? null)) {
            // line 16
            echo "          <div class=\"footer-open\">";
            echo ($context["open"] ?? null);
            echo "</div>
          ";
        }
        // line 18
        echo "        </div>
        ";
        // line 19
        if (($context["config_social"] ?? null)) {
            // line 20
            echo "        <div class=\"box-social\">
          <div class=\"social-title\">";
            // line 21
            echo ($context["text_social_title"] ?? null);
            echo "</div>
          <div class=\"social-block\">
            <ul class=\"social\">
              ";
            // line 24
            if (($context["config_instagram"] ?? null)) {
                // line 25
                echo "              <li><a href=\"";
                echo ($context["config_instagram"] ?? null);
                echo "\" target=\"_blank\" rel=\"nofollow noopener\" title=\"Instagram\" style=\"background: #f09433; background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );\"><i class=\"fa fa-instagram\"></i></a></li>
              ";
            }
            // line 27
            echo "              ";
            if (($context["config_youtube"] ?? null)) {
                // line 28
                echo "              <li><a href=\"";
                echo ($context["config_youtube"] ?? null);
                echo "\" target=\"_blank\" rel=\"nofollow noopener\" title=\"YouTube\" style=\"background:#ff0000;\"><i class=\"fa fa-youtube\"></i></a></li>
              ";
            }
            // line 30
            echo "              ";
            if (($context["config_vk"] ?? null)) {
                // line 31
                echo "              <li><a href=\"";
                echo ($context["config_vk"] ?? null);
                echo "\" target=\"_blank\" rel=\"nofollow noopener\" title=\"ВКонтакте\" style=\"background:#4a76a8;\"><i class=\"fa fa-vk\"></i></a></li>
              ";
            }
            // line 33
            echo "              ";
            if (($context["config_twitter"] ?? null)) {
                // line 34
                echo "              <li><a href=\"";
                echo ($context["config_twitter"] ?? null);
                echo "\" target=\"_blank\" rel=\"nofollow noopener\" title=\"Twitter\" style=\"background:#1da1f2;\"><i class=\"fa fa-twitter\"></i></a></li>
              ";
            }
            // line 36
            echo "              ";
            if (($context["config_facebook"] ?? null)) {
                // line 37
                echo "              <li><a href=\"";
                echo ($context["config_facebook"] ?? null);
                echo "\" target=\"_blank\" rel=\"nofollow noopener\" title=\"Facebook\" style=\"background:#3b5998;\"><i class=\"fa fa-facebook\"></i></a></li>
              ";
            }
            // line 39
            echo "              ";
            if (($context["config_ok"] ?? null)) {
                // line 40
                echo "              <li><a href=\"";
                echo ($context["config_ok"] ?? null);
                echo "\" target=\"_blank\" rel=\"nofollow noopener\" title=\"Одноклассники\" style=\"background:#ee8208\"><i class=\"fa fa-odnoklassniki\"></i></a></li>
              ";
            }
            // line 42
            echo "              ";
            if (($context["config_telegram"] ?? null)) {
                // line 43
                echo "              <li><a href=\"";
                echo ($context["config_telegram"] ?? null);
                echo "\" target=\"_blank\" rel=\"nofollow noopener\" title=\"Телеграм\" style=\"background:#3390ec\"><i class=\"fa fa-telegram\"></i></a></li>
              ";
            }
            // line 45
            echo "            </ul>
          </div>
        </div>
        ";
        }
        // line 49
        echo "      </div>
    </div>
  </div>
  <div class=\"footer-container\">
    <div class=\"container\">
      <div class=\"row\">
       
      ";
        // line 56
        if (($context["informations"] ?? null)) {
            // line 57
            echo "<div class=\"col-sm-3\">
<div onclick=\"toggleList('informationList')\" class=\"footer-title\">";
            // line 58
            echo ($context["text_information"] ?? null);
            echo "</div>
<ul id=\"informationList\" style=\"display:none;\" class=\"list-unstyled col-fot\">
";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 61
                echo "<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 61);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 61);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "</ul>
</div>
";
        }
        // line 66
        echo "<div class=\"col-sm-3\">
<div onclick=\"toggleList('serviceList')\" class=\"footer-title\">";
        // line 67
        echo ($context["text_service"] ?? null);
        echo "</div>
<ul id=\"serviceList\" style=\"display:none;\" class=\"list-unstyled col-fot\">
<li><a href=\"";
        // line 69
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li> <!-- Контакты -->

\t\t\t    ";
        // line 71
        if (array_key_exists("testimonial", $context)) {
            // line 72
            echo "\t\t\t\t<li><a href=\"";
            echo ($context["testimonial"] ?? null);
            echo "\">";
            echo ($context["testimonial_title"] ?? null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 74
        echo "\t\t\t
<li><a href=\"";
        // line 75
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li> <!-- Возврат товара -->
<li><a href=\"";
        // line 76
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li> <!-- Карта сайта -->
</ul>
</div>
<div class=\"col-sm-3\">
<div onclick=\"toggleList('extraList')\" class=\"footer-title\">";
        // line 80
        echo ($context["text_extra"] ?? null);
        echo "</div>
<ul id=\"extraList\" style=\"display:none;\" class=\"list-unstyled col-fot\">
<li><a href=\"";
        // line 82
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li> <!-- Производители -->
<li><a href=\"";
        // line 83
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li> <!-- Подарочные сертификаты -->
<li><a href=\"";
        // line 84
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li> <!-- Акции -->
</ul>
</div>
";
        // line 87
        if (($context["config_account"] ?? null)) {
            // line 88
            echo "<div class=\"col-sm-3\">
<div onclick=\"toggleList('accountList')\" class=\"footer-title\">";
            // line 89
            echo ($context["text_account"] ?? null);
            echo "</div>
<ul id=\"accountList\" style=\"display:none;\" class=\"list-unstyled col-fot\">
<li><a href=\"";
            // line 91
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li> <!-- Личный Кабинет -->
<li><a href=\"";
            // line 92
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li> <!-- История заказов -->
<li><a href=\"";
            // line 93
            echo ($context["newsletter"] ?? null);
            echo "\">";
            echo ($context["text_newsletter"] ?? null);
            echo "</a></li> <!-- Рассылка -->
<li><a href=\"";
            // line 94
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a></li> <!-- Партнерская программа -->
<li><a href=\"";
            // line 95
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li> <!-- Избранное -->
</ul>
</div>
";
        }
        // line 99
        echo "

      </div>
      <div class=\"footer-bottom\">
        <p>";
        // line 103
        echo ($context["powered"] ?? null);
        echo "</p>
      </div>
    </div>
  </div>
";
        // line 107
        echo ($context["microdatapro"] ?? null);
        echo " ";
        $context["microdatapro_main_flag"] = 1;
        echo " ";
        // line 108
        echo "</footer>
";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 110
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</div>
</div>

            ";
        // line 115
        if ((array_key_exists("module_ts_messengers_widget_status", $context) && ($context["module_ts_messengers_widget_status"] ?? null))) {
            // line 116
            echo "                <div class=\"ts-mw-button\" id=\"ts-mw-id\">
                    ";
            // line 117
            if ( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["animation_3"] ?? null) : null))) {
                // line 118
                echo "                        <div class=\"ts-mw-pulse\"></div>
                    ";
            }
            // line 120
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_settings"] ?? null), "main_tips", [], "array", true, true, false, 120) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["main_tips"] ?? null) : null) == "1"))) {
                // line 121
                echo "                        <div class=\"ts-mw-tips\">
                            <div class=\"ts-mw-tips-text\">";
                // line 122
                echo ($context["tip_text"] ?? null);
                echo "</div>
                            ";
                // line 123
                if ((((array_key_exists("manager_image", $context) && (($context["manager_image"] ?? null) != "")) && array_key_exists("manager_text", $context)) && (($context["manager_text"] ?? null) != ""))) {
                    // line 124
                    echo "                            <div class=\"ts-mw-tips-manager\">
                                ";
                    // line 125
                    if ((array_key_exists("manager_image", $context) && (($context["manager_image"] ?? null) != ""))) {
                        // line 126
                        echo "                                    <img src=\"";
                        echo ($context["manager_image"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["manager_text"] ?? null);
                        echo "\">
                                ";
                    }
                    // line 128
                    echo "                                <span>";
                    echo ($context["manager_text"] ?? null);
                    echo "</span>
                            </div>
                            ";
                }
                // line 131
                echo "                            <span class=\"ts-mw-tips-close\" onclick=\"hidetips();\">×</span>
                            <script>function setCookie(e,t,o){var i=new Date;i.setTime(i.getTime()+24*o*60*60*1e3);var n=\"expires=\"+i.toUTCString();document.cookie=e+\"=\"+t+\";\"+n+\";path=/\"}function getCookies(e){for(var t=e+\"=\",o=document.cookie.split(\";\"),i=0;i<o.length;i++){for(var n=o[i];\" \"==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return\"\"}function hidetips(){\$(\".ts-mw-tips\").remove(),setCookie(\"ts_tips_cookie\",\"1\",\"1\")}\$(document).ready(function(){\"\"!=getCookies(\"ts_tips_cookie\")&&\$(\".ts-mw-tips\").remove()});</script>
                        </div>
                    ";
            }
            // line 135
            echo "                    <div class=\"ts-mw-icon";
            if ( !twig_test_empty((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["animation_1"] ?? null) : null))) {
                echo " mw-animation";
            }
            if ( !twig_test_empty((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["animation_2"] ?? null) : null))) {
                echo " mw-animation-2";
            }
            echo "\">
                        ";
            // line 136
            if ( !twig_test_empty((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["animation_2"] ?? null) : null))) {
                // line 137
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messengers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["messenger"]) {
                    // line 138
                    echo "                                <div class=\"slides\"><img src=\"";
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["messenger"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["messenger"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link_text"] ?? null) : null);
                    echo "\"></div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messenger'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                        ";
            } else {
                // line 142
                echo "                            <i class=\"";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["main_icon"] ?? null) : null);
                echo "\" aria-hidden=\"true\"></i>
                        ";
            }
            // line 144
            echo "                    </div>
                    <div class=\"ts-mw-block";
            // line 145
            if ( !twig_test_empty((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["no_bg"] ?? null) : null))) {
                echo " mw-no-bg ";
                if ( !twig_test_empty((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["tips"] ?? null) : null))) {
                    echo " mw-tips tips-";
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["position"] ?? null) : null);
                }
            }
            echo "\">
                        <ul class=\"ts-mw-list\">
                            ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messengers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["messenger"]) {
                // line 148
                echo "                                ";
                if (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["messenger"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["field"] ?? null) : null) == "callback")) {
                    // line 149
                    echo "                                    <li class=\"ts-mw-li ts-callback\"><a href=\"javascript:void(0);\" ";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["messenger"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["link"] ?? null) : null);
                    echo "><span class=\"callback-icon\"><img src=\"";
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["messenger"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["messenger"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["messenger"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce =                 // line 150
$context["messenger"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["field"] ?? null) : null) == "tg")) {
                    // line 151
                    echo "                                    <li class=\"ts-mw-li ts-telegram\"><a href=\"http://t.me/";
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["messenger"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"tg-icon\"><img src=\"";
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["messenger"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["messenger"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["messenger"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 =                 // line 152
$context["messenger"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["field"] ?? null) : null) == "viber")) {
                    // line 153
                    echo "                                    <li class=\"ts-mw-li ts-viber\"><a href=\"viber://chat?number=%2B";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["messenger"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"viber-icon\"><img src=\"";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["messenger"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["messenger"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["messenger"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba =                 // line 154
$context["messenger"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["field"] ?? null) : null) == "viber_b")) {
                    // line 155
                    echo "                                    <li class=\"ts-mw-li ts-viber-b\"><a href=\"viber://pa?chatURI=";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["messenger"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"viber-icon\"><img src=\"";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["messenger"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["messenger"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["messenger"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 =                 // line 156
$context["messenger"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["field"] ?? null) : null) == "viber_group")) {
                    // line 157
                    echo "                                    <li class=\"ts-mw-li ts-viber-g\"><a href=\"https://invite.viber.com/";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["messenger"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"viber-icon\"><img src=\"";
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["messenger"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["messenger"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["messenger"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 =                 // line 158
$context["messenger"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["field"] ?? null) : null) == "whatsapp")) {
                    // line 159
                    echo "                                    <li class=\"ts-mw-li ts-whatsapp\"><a href=\"https://api.whatsapp.com/send?phone=";
                    echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["messenger"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"whatsapp-icon\"><img src=\"";
                    echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["messenger"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["messenger"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["messenger"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b =                 // line 160
$context["messenger"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["field"] ?? null) : null) == "messenger")) {
                    // line 161
                    echo "                                    <li class=\"ts-mw-li ts-messenger\"><a href=\"https://m.me/";
                    echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["messenger"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"messenger-icon\"><img src=\"";
                    echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["messenger"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["messenger"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["messenger"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 =                 // line 162
$context["messenger"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["field"] ?? null) : null) == "skype")) {
                    // line 163
                    echo "                                    <li class=\"ts-mw-li ts-skype\"><a href=\"skype:";
                    echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["messenger"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["link"] ?? null) : null);
                    echo "?chat\" rel=\"nofollow\" target=\"_blank\"><span class=\"skype-icon\"><img src=\"";
                    echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["messenger"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["messenger"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["messenger"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 =                 // line 164
$context["messenger"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["field"] ?? null) : null) == "mail")) {
                    // line 165
                    echo "                                    <li class=\"ts-mw-li ts-mail\"><a href=\"mailto:";
                    echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["messenger"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"mail-icon\"><img src=\"";
                    echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["messenger"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["messenger"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["messenger"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 =                 // line 166
$context["messenger"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["field"] ?? null) : null) == "vk")) {
                    // line 167
                    echo "                                    <li class=\"ts-mw-li ts-vk\"><a href=\"https://vk.me/";
                    echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["messenger"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"vk-icon\"><img src=\"";
                    echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["messenger"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["messenger"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["messenger"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc =                 // line 168
$context["messenger"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["field"] ?? null) : null) == "instagram")) {
                    // line 169
                    echo "                                    <li class=\"ts-mw-li ts-instagram\"><a href=\"https://www.instagram.com/";
                    echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["messenger"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"instagram-icon\"><img src=\"";
                    echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["messenger"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["messenger"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["messenger"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba =                 // line 170
$context["messenger"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["field"] ?? null) : null) == "faq")) {
                    // line 171
                    echo "                                    <li class=\"ts-mw-li ts-faq\"><a href=\"";
                    echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["messenger"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"faq-icon\"><img src=\"";
                    echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["messenger"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["messenger"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["messenger"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a =                 // line 172
$context["messenger"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["field"] ?? null) : null) == "jivosite")) {
                    // line 173
                    echo "                                    <li class=\"ts-mw-li ts-jivosite\"><a href=\"javascript:jivo_api.open();return false;\"><span class=\"jivosite-icon\"><img src=\"";
                    echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["messenger"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["messenger"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["messenger"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a =                 // line 174
$context["messenger"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["field"] ?? null) : null) == "ydialog")) {
                    // line 175
                    echo "                                    <li class=\"ts-mw-li ts-ydialog\"><a onclick=\"\$('.ya-chat-button *')[0].click(),\$('.ya-chat-widget').attr('style', 'display: block !important');\"><span class=\"ydialog-icon\"><img src=\"";
                    echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["messenger"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["messenger"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["messenger"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c =                 // line 176
$context["messenger"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["field"] ?? null) : null) == "talkme")) {
                    // line 177
                    echo "                                    <li class=\"ts-mw-li ts-talkme\"><a onclick=\"TalkMe('openSupport'); return false;\"><span class=\"talkme-icon\"><img src=\"";
                    echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["messenger"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["messenger"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["messenger"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } else {
                    // line 179
                    echo "                                    <li class=\"ts-mw-li ts-phone\"><a href=\"tel:";
                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["messenger"], "link", [], "any", false, false, false, 179), [" " => "", "-" => "", "(" => "", ")" => ""]);
                    echo "\"><span class=\"callback-icon\"><img src=\"";
                    echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["messenger"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["messenger"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["messenger"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                }
                // line 181
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messenger'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                        </ul>
                    </div>
                </div>
            ";
            // line 185
            if ( !twig_test_empty((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["fogging"] ?? null) : null))) {
                // line 186
                echo "                <div class=\"ts-mw-substrate\"></div>
            ";
            }
            // line 188
            echo "<script>
\$('.ts-mw-icon,.ts-mw-li a,.ts-mw-substrate').on('click',function(){\$('#ts-mw-id').toggleClass('open');\$('.ts-mw-substrate').toggleClass('active');});
";
            // line 190
            if (((($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["main_tips_type"] ?? null) : null) ==  !twig_test_empty("delay"))) {
                // line 191
                echo "\$('.ts-mw-tips').delay(";
                echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["delay_time"] ?? null) : null);
                echo ").queue(function(show){\$(this).css({'opacity':'1','visibility':'visible'});show();});
";
            }
            // line 193
            if ( !twig_test_empty((($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["animation_2"] ?? null) : null))) {
                // line 194
                echo "\$(document).ready(function(){var a=-1;setInterval(function(){var e=\$(\".ts-mw-icon div\"),s=e.length-1;a<s?a++:a=0,e.removeClass(\"active\").eq(a).addClass(\"active\")},";
                echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["slide_speed"] ?? null) : null);
                echo "),\$(\".slides\").first().addClass(\"active\")});
";
            }
            // line 196
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_jivosite", [], "array", false, true, false, 196), "link", [], "array", true, true, false, 196) && (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["ts_jivosite"] ?? null) : null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["link"] ?? null) : null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_jivosite", [], "array", false, true, false, 196), "link_status", [], "array", true, true, false, 196)) && ((($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["ts_jivosite"] ?? null) : null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["link_status"] ?? null) : null) == "on"))) {
                // line 197
                echo "\$(document).ready(function() {
    var n = document.getElementsByTagName('script')[0],
    s = document.createElement('script');
    s.async = true;
    s.charset = 'UTF-8';
    s.src = '//code.jivosite.com/widget/";
                // line 202
                echo (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["ts_jivosite"] ?? null) : null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["link"] ?? null) : null);
                echo "';
    n.parentNode.insertBefore(s, n);
});
";
            }
            // line 206
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_ydialog", [], "array", false, true, false, 206), "link", [], "array", true, true, false, 206) && (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["ts_ydialog"] ?? null) : null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["link"] ?? null) : null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_ydialog", [], "array", false, true, false, 206), "link_status", [], "array", true, true, false, 206)) && ((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["ts_ydialog"] ?? null) : null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["link_status"] ?? null) : null) == "on"))) {
                // line 207
                echo "(function () {
window['yandexChatWidgetCallback'] = function() {
    try {
        window.yandexChatWidget = new Ya.ChatWidget({
            guid: '";
                // line 211
                echo (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["ts_ydialog"] ?? null) : null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["link"] ?? null) : null);
                echo "',
            buttonText: false,
            title: 'Чат',
            theme: 'light',
            collapsedDesktop: 'never',
            collapsedTouch: 'always'
        });
    } catch(e) { }
};
var n = document.getElementsByTagName('script')[0],
    s = document.createElement('script');
s.async = true;
s.charset = 'UTF-8';
s.src = 'https://chat.s3.yandex.net/widget.js';
n.parentNode.insertBefore(s, n);
})();
function hideyd() {
    \$('.ya-chat-widget').attr('style', 'display: none !important');
    \$('.ya-chat-header__close').on('click', function () {
        \$('.ya-chat-widget').attr('style', 'display: none !important');
    });
}
setTimeout(function() {hideyd();}, 500);
";
            }
            // line 235
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_talkme", [], "array", false, true, false, 235), "link", [], "array", true, true, false, 235) && (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["ts_talkme"] ?? null) : null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["link"] ?? null) : null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_talkme", [], "array", false, true, false, 235), "link_status", [], "array", true, true, false, 235)) && ((($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["ts_talkme"] ?? null) : null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["link_status"] ?? null) : null) == "on"))) {
                // line 236
                echo "\$(document).ready(function() {
    (function(d, w, m) {
\t\twindow.supportAPIMethod = m;
\t\tvar s = d.createElement('script');
\t\ts.type ='text/javascript'; s.id = 'supportScript'; s.charset = 'utf-8';
\t\ts.async = true;
\t\tvar id = '";
                // line 242
                echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["ts_talkme"] ?? null) : null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["link"] ?? null) : null);
                echo "';
\t\ts.src = 'https://lcab.talk-me.ru/support/support.js?h='+id;
\t\tvar sc = d.getElementsByTagName('script')[0];
\t\tw[m] = w[m] || function l() { (w[m].q = w[m].q || []).push(arguments); };
\t\tif (sc) sc.parentNode.insertBefore(s, sc);
\t\telse d.documentElement.firstChild.appendChild(s);
\t})(document, window, 'TalkMe');
});
";
            }
            // line 251
            echo "</script>
            ";
        }
        // line 253
        echo "            

\t\t\t\t";
        // line 255
        if (((($context["buyoneclick_status_product"] ?? null) || ($context["buyoneclick_status_category"] ?? null)) || ($context["buyoneclick_status_module"] ?? null))) {
            // line 256
            echo "\t\t\t\t\t<div id=\"boc_order\" class=\"modal fade\">
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"boc_success\" class=\"modal fade\">
\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">";
            // line 262
            echo ($context["buyoneclick_success_field"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$('body').on('click', '.boc_order_btn', function(event) {
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/buyoneclick/common/buyoneclick/info',
\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\t\t\$(event.target).button('loading');
\t\t\t\t\t\t\t\t\t\$('#boc_order').empty();
\t\t\t\t\t\t\t\t\t\$('#boc_order').append('<div class=\"lds-rolling\"><div></div></div>');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\t\$(event.target).button('reset');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\t\t\t\t\t\t\$('.form-group').removeClass('has-error');
\t\t\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));
\t\t\t\t\t\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\$(\"#boc_order\").modal('show');
\t\t\t\t\t\t\t\t\t\t\$('#boc_order').empty();
\t\t\t\t\t\t\t\t\t\t\$('#boc_order').html(json['success']);
\t\t\t\t\t\t\t\t\t\t";
            // line 307
            if (($context["buyoneclick_exan_status"] ?? null)) {
                echo " valueData(); ";
            }
            // line 308
            echo "\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \" | \" + xhr.statusText + \" | \" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('body').on('click', '.boc_order_category_btn', function(event) {
\t\t\t\t\t\t\tvar for_post = {};
\t\t\t\t\t\t\tfor_post.product_id = \$(this).attr('data-product_id');
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/buyoneclick/common/buyoneclick/info',
\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\tdata: for_post,
\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\t\t\$(event.target).button('loading');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\t\$(event.target).button('reset');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\t\t\t\t\t\t\$('.form-group').removeClass('has-error');
\t\t\t\t\t\t\t\t\tif (json['redirect']) {
\t\t\t\t\t\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t// console.log(json);
\t\t\t\t\t\t\t\t\t\t\$(\"#boc_order\").modal('show');
\t\t\t\t\t\t\t\t\t\t\$('#boc_order').empty();
\t\t\t\t\t\t\t\t\t\t\$('#boc_order').html(json['success']);
\t\t\t\t\t\t\t\t\t\t";
            // line 339
            if (($context["buyoneclick_exan_status"] ?? null)) {
                echo " valueData(); ";
            }
            // line 340
            echo "\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \" | \" + xhr.statusText + \" | \" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t";
        }
        // line 349
        echo "\t\t\t

\t\t\t\t";
        // line 351
        if (($context["config_counters"] ?? null)) {
            // line 352
            echo "\t\t\t\t";
            echo ($context["config_counters"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 354
        echo "\t\t\t
";
        // line 355
        if ( !array_key_exists("microdatapro_main_flag", $context)) {
            echo ($context["microdatapro"] ?? null);
            echo " ";
            $context["microdatapro_main_flag"] = 1;
        }
        echo " ";
        // line 356
        if ( !array_key_exists("microdatapro_main_flag", $context)) {
            echo ($context["microdatapro"] ?? null);
        }
        echo " ";
        // line 357
        echo "</body></html>";
    }

    public function getTemplateName()
    {
        return "bigmag/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  903 => 357,  898 => 356,  891 => 355,  888 => 354,  882 => 352,  880 => 351,  876 => 349,  865 => 340,  861 => 339,  828 => 308,  824 => 307,  776 => 262,  768 => 256,  766 => 255,  762 => 253,  758 => 251,  746 => 242,  738 => 236,  736 => 235,  709 => 211,  703 => 207,  701 => 206,  694 => 202,  687 => 197,  685 => 196,  679 => 194,  677 => 193,  671 => 191,  669 => 190,  665 => 188,  661 => 186,  659 => 185,  654 => 182,  648 => 181,  636 => 179,  626 => 177,  624 => 176,  615 => 175,  613 => 174,  604 => 173,  602 => 172,  591 => 171,  589 => 170,  578 => 169,  576 => 168,  565 => 167,  563 => 166,  552 => 165,  550 => 164,  539 => 163,  537 => 162,  526 => 161,  524 => 160,  513 => 159,  511 => 158,  500 => 157,  498 => 156,  487 => 155,  485 => 154,  474 => 153,  472 => 152,  461 => 151,  459 => 150,  448 => 149,  445 => 148,  441 => 147,  430 => 145,  427 => 144,  421 => 142,  417 => 140,  406 => 138,  401 => 137,  399 => 136,  389 => 135,  383 => 131,  376 => 128,  368 => 126,  366 => 125,  363 => 124,  361 => 123,  357 => 122,  354 => 121,  351 => 120,  347 => 118,  345 => 117,  342 => 116,  340 => 115,  335 => 112,  326 => 110,  322 => 109,  319 => 108,  314 => 107,  307 => 103,  301 => 99,  292 => 95,  286 => 94,  280 => 93,  274 => 92,  268 => 91,  263 => 89,  260 => 88,  258 => 87,  250 => 84,  244 => 83,  238 => 82,  233 => 80,  224 => 76,  218 => 75,  215 => 74,  207 => 72,  205 => 71,  198 => 69,  193 => 67,  190 => 66,  185 => 63,  174 => 61,  170 => 60,  165 => 58,  162 => 57,  160 => 56,  151 => 49,  145 => 45,  139 => 43,  136 => 42,  130 => 40,  127 => 39,  121 => 37,  118 => 36,  112 => 34,  109 => 33,  103 => 31,  100 => 30,  94 => 28,  91 => 27,  85 => 25,  83 => 24,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  63 => 16,  61 => 15,  54 => 13,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bigmag/template/common/footer.twig", "");
    }
}
