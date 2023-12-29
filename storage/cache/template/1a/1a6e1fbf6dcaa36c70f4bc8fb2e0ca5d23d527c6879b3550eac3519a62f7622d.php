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

/* bigmag/template/common/header.twig */
class __TwigTemplate_9ffb979336d2b80a116c2493a6f4f23f403cf14a14fa573942a6bd47fdffc4cb extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html ";
        // line 4
        echo ($context["tc_og_prefix"] ?? null);
        echo " ";
        echo " dir=\"";
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\">
  <![endif]-->
  <!--[if IE 9 ]>
  <html ";
        // line 7
        echo ($context["tc_og_prefix"] ?? null);
        echo " ";
        echo " dir=\"";
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\">
    <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->
    <html ";
        // line 10
        echo ($context["tc_og_prefix"] ?? null);
        echo " ";
        echo " dir=\"";
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
      <!--<![endif]-->
      <head prefix=\"og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# product:http://ogp.me/ns/product#\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">

        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 20
        echo ($context["title"] ?? null);
        echo "</title>
        <base href=\"";
        // line 21
        echo ($context["base"] ?? null);
        echo "\" />
        ";
        // line 22
        if (($context["description"] ?? null)) {
            // line 23
            echo "        <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
        ";
        }
        // line 25
        echo "        ";
        if (($context["keywords"] ?? null)) {
            // line 26
            echo "        <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
        ";
        }
        // line 28
        echo "        <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
        <link href=\"catalog/view/theme/bigmag/css/bootstrap/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
        <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
        <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap\" rel=\"stylesheet\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 36
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 36);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 36);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 36);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        <link href=\"catalog/view/theme/bigmag/css/style.min.css\" rel=\"stylesheet\">
<script src=\"catalog/view/javascript/madeshop.js\"></script>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            echo "        <script src=\"";
            echo $context["script"];
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        <script src=\"catalog/view/theme/bigmag/js/common.min.js\"></script>

        ";
        // line 45
        echo ($context["mlseo_meta"] ?? null);
        echo "
      
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 48);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 48);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 51
            echo "        ";
            echo $context["analytic"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "      
\t\t\t\t";
        // line 54
        if (($context["mfp_robots_value"] ?? null)) {
            echo " <meta name=\"robots\" content=\"";
            echo ($context["mfp_robots_value"] ?? null);
            echo "\" />";
        }
        // line 55
        echo "
\t\t\t\t";
        // line 56
        if (((($context["buyoneclick_status_product"] ?? null) || ($context["buyoneclick_status_category"] ?? null)) || ($context["buyoneclick_status_module"] ?? null))) {
            // line 57
            echo "\t\t\t\t\t<script src=\"catalog/view/javascript/buyoneclick.js\" type=\"text/javascript\"></script>
\t\t\t\t\t<script>
\t\t\t\t\t\tfunction clickAnalytics(){
\t\t\t\t\t\t\tconsole.log('clickAnalytics');
\t\t\t\t\t\t\t";
            // line 61
            if (((((($context["buyoneclick_ya_status"] ?? null) && array_key_exists("buyoneclick_ya_counter", $context)) && (($context["buyoneclick_ya_counter"] ?? null) != "")) && array_key_exists("buyoneclick_ya_identificator", $context)) && (($context["buyoneclick_ya_identificator"] ?? null) != ""))) {
                // line 62
                echo "\t\t\t\t\t\t\t\tyaCounter";
                echo ($context["buyoneclick_ya_counter"] ?? null);
                echo ".reachGoal('";
                echo ($context["buyoneclick_ya_identificator"] ?? null);
                echo "');
\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t";
            if (((((($context["buyoneclick_google_status"] ?? null) && array_key_exists("buyoneclick_google_category_btn", $context)) && (($context["buyoneclick_google_category_btn"] ?? null) != "")) && array_key_exists("buyoneclick_google_action_btn", $context)) && (($context["buyoneclick_google_action_btn"] ?? null) != ""))) {
                // line 65
                echo "\t\t\t\t\t\t\t\tga('send', 'event', '";
                echo ($context["buyoneclick_google_category_btn"] ?? null);
                echo "', '";
                echo ($context["buyoneclick_google_action_btn"] ?? null);
                echo "');
\t\t\t\t\t\t\t\tgtag('event', '";
                // line 66
                echo ($context["buyoneclick_google_action_btn"] ?? null);
                echo "', {'event_category': '";
                echo ($context["buyoneclick_google_category_btn"] ?? null);
                echo "'});
\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tfunction clickAnalyticsSend(){
\t\t\t\t\t\t\tconsole.log('clickAnalyticsSend');
\t\t\t\t\t\t\t";
            // line 72
            if (((((($context["buyoneclick_ya_status"] ?? null) && array_key_exists("buyoneclick_ya_counter", $context)) && (($context["buyoneclick_ya_counter"] ?? null) != "")) && array_key_exists("buyoneclick_ya_identificator_send", $context)) && (($context["buyoneclick_ya_identificator_send"] ?? null) != ""))) {
                // line 73
                echo "\t\t\t\t\t\t\t\tyaCounter";
                echo ($context["buyoneclick_ya_counter"] ?? null);
                echo ".reachGoal('";
                echo ($context["buyoneclick_ya_identificator_send"] ?? null);
                echo "');
\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t";
            if (((((($context["buyoneclick_google_status"] ?? null) && array_key_exists("buyoneclick_google_category_send", $context)) && (($context["buyoneclick_google_category_send"] ?? null) != "")) && array_key_exists("buyoneclick_google_action_send", $context)) && (($context["buyoneclick_google_action_send"] ?? null) != ""))) {
                // line 76
                echo "\t\t\t\t\t\t\t\tga('send', 'event', '";
                echo ($context["buyoneclick_google_category_send"] ?? null);
                echo "', '";
                echo ($context["buyoneclick_google_action_send"] ?? null);
                echo "');
\t\t\t\t\t\t\t\tgtag('event', '";
                // line 77
                echo ($context["buyoneclick_google_action_send"] ?? null);
                echo "', {'event_category': '";
                echo ($context["buyoneclick_google_category_send"] ?? null);
                echo "'});
\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tfunction clickAnalyticsSuccess(){
\t\t\t\t\t\t\tconsole.log('clickAnalyticsSuccess');
\t\t\t\t\t\t\t";
            // line 83
            if (((((($context["buyoneclick_ya_status"] ?? null) && array_key_exists("buyoneclick_ya_counter", $context)) && (($context["buyoneclick_ya_counter"] ?? null) != "")) && array_key_exists("buyoneclick_ya_identificator_success", $context)) && (($context["buyoneclick_ya_identificator_success"] ?? null) != ""))) {
                // line 84
                echo "\t\t\t\t\t\t\t\tyaCounter";
                echo ($context["buyoneclick_ya_counter"] ?? null);
                echo ".reachGoal('";
                echo ($context["buyoneclick_ya_identificator_success"] ?? null);
                echo "');
\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t";
            if (((((($context["buyoneclick_google_status"] ?? null) && array_key_exists("buyoneclick_google_category_success", $context)) && (($context["buyoneclick_google_category_success"] ?? null) != "")) && array_key_exists("buyoneclick_google_action_success", $context)) && (($context["buyoneclick_google_action_success"] ?? null) != ""))) {
                // line 87
                echo "\t\t\t\t\t\t\t\tga('send', 'event', '";
                echo ($context["buyoneclick_google_category_success"] ?? null);
                echo "', '";
                echo ($context["buyoneclick_google_action_success"] ?? null);
                echo "');
\t\t\t\t\t\t\t\tgtag('event', '";
                // line 88
                echo ($context["buyoneclick_google_action_success"] ?? null);
                echo "', {'event_category': '";
                echo ($context["buyoneclick_google_category_success"] ?? null);
                echo "'});
\t\t\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t\t\t";
            // line 93
            if (($context["buyoneclick_validation_type"] ?? null)) {
                // line 94
                echo "\t\t\t\t\t\t\t<script src=\"catalog/view/javascript/jquery.mask.min.js\" type=\"text/javascript\"></script>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\$('#boc_phone').mask('";
                // line 97
                echo ($context["buyoneclick_validation_type"] ?? null);
                echo "');
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t\t\t";
            if (($context["buyoneclick_exan_status"] ?? null)) {
                // line 102
                echo "\t\t\t\t\t\t\t<script src=\"catalog/view/javascript/sourcebuster.min.js\" type=\"text/javascript\"></script>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\tsbjs.init({
\t\t\t\t\t\t\t\t\tcallback: placeData
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tfunction placeData(sb) {
\t\t\t\t\t\t\t\t\t\$sb_first_typ\t\t= sb.first.typ;
\t\t\t\t\t\t\t\t\t\$sb_first_src\t\t= sb.first.src;
\t\t\t\t\t\t\t\t\t\$sb_first_mdm\t\t= sb.first.mdm;
\t\t\t\t\t\t\t\t\t\$sb_first_cmp\t\t= sb.first.cmp;
\t\t\t\t\t\t\t\t\t\$sb_first_cnt\t\t= sb.first.cnt;
\t\t\t\t\t\t\t\t\t\$sb_first_trm\t\t= sb.first.trm;

\t\t\t\t\t\t\t\t\t\$sb_curr_typ\t\t= sb.current.typ;
\t\t\t\t\t\t\t\t\t\$sb_curr_src\t\t= sb.current.src;
\t\t\t\t\t\t\t\t\t\$sb_curr_mdm\t\t= sb.current.mdm;
\t\t\t\t\t\t\t\t\t\$sb_curr_cmp\t\t= sb.current.cmp;
\t\t\t\t\t\t\t\t\t\$sb_curr_cnt\t\t= sb.current.cnt;
\t\t\t\t\t\t\t\t\t\$sb_curr_trm\t\t= sb.current.trm;

\t\t\t\t\t\t\t\t\t\$sb_first_add_fd\t= sb.first_add.fd;
\t\t\t\t\t\t\t\t\t\$sb_first_add_ep\t= sb.first_add.ep;
\t\t\t\t\t\t\t\t\t\$sb_first_add_rf\t= sb.first_add.rf;

\t\t\t\t\t\t\t\t\t\$sb_curr_add_fd\t\t= sb.current_add.fd;
\t\t\t\t\t\t\t\t\t\$sb_curr_add_ep\t\t= sb.current_add.ep;
\t\t\t\t\t\t\t\t\t\$sb_curr_add_rf\t\t= sb.current_add.rf;

\t\t\t\t\t\t\t\t\t\$sb_session_pgs\t\t= sb.session.pgs;
\t\t\t\t\t\t\t\t\t\$sb_session_cpg\t\t= sb.session.cpg;

\t\t\t\t\t\t\t\t\t\$sb_udata_vst\t\t= sb.udata.vst;
\t\t\t\t\t\t\t\t\t\$sb_udata_uip\t\t= sb.udata.uip;
\t\t\t\t\t\t\t\t\t\$sb_udata_uag\t\t= sb.udata.uag;

\t\t\t\t\t\t\t\t\t\$sb_promo_code\t\t= sb.promo.code;
\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t\tfunction valueData() {
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_typ').value\t= \$sb_first_typ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_src').value\t= \$sb_first_src;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_mdm').value\t= \$sb_first_mdm;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_cmp').value\t= \$sb_first_cmp;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_cnt').value\t= \$sb_first_cnt;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_trm').value\t= \$sb_first_trm;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_typ').value\t = \$sb_curr_typ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_src').value\t = \$sb_curr_src;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_mdm').value\t = \$sb_curr_mdm;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_cmp').value\t = \$sb_curr_cmp;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_cnt').value\t = \$sb_curr_cnt;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_trm').value\t = \$sb_curr_trm;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_add_fd').value\t= \$sb_first_add_fd;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_add_ep').value\t= \$sb_first_add_ep;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_add_rf').value\t= \$sb_first_add_rf;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_add_fd').value = \$sb_curr_add_fd;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_add_ep').value = \$sb_curr_add_ep;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_add_rf').value = \$sb_curr_add_rf;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_session_pgs').value\t = \$sb_session_pgs;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_session_cpg').value\t = \$sb_session_cpg;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_udata_vst').value\t= \$sb_udata_vst;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_udata_uip').value\t= \$sb_udata_uip;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_udata_uag').value\t= \$sb_udata_uag;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_promo_code').value\t = \$sb_promo_code;
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t\t";
            if (($context["buyoneclick_style_status"] ?? null)) {
                // line 176
                echo "\t\t\t\t\t\t\t<link href=\"catalog/view/theme/default/stylesheet/buyoneclick.css\" rel=\"stylesheet\">
\t\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t\t<style type=\"text/css\">
\t\t\t\t\t\t\t@keyframes lds-rolling {
\t\t\t\t\t\t\t\t0% {
\t\t\t\t\t\t\t\t\t-webkit-transform: translate(-50%, -50%) rotate(0deg);
\t\t\t\t\t\t\t\t\ttransform: translate(-50%, -50%) rotate(0deg);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\t\t-webkit-transform: translate(-50%, -50%) rotate(360deg);
\t\t\t\t\t\t\t\t\ttransform: translate(-50%, -50%) rotate(360deg);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@-webkit-keyframes lds-rolling {
\t\t\t\t\t\t\t\t0% {
\t\t\t\t\t\t\t\t\t-webkit-transform: translate(-50%, -50%) rotate(0deg);
\t\t\t\t\t\t\t\t\ttransform: translate(-50%, -50%) rotate(0deg);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\t\t-webkit-transform: translate(-50%, -50%) rotate(360deg);
\t\t\t\t\t\t\t\t\ttransform: translate(-50%, -50%) rotate(360deg);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling {
\t\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling div, .lds-rolling div:after {
\t\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\t\twidth: 160px;
\t\t\t\t\t\t\t\theight: 160px;
\t\t\t\t\t\t\t\tborder: 20px solid #bbcedd;
\t\t\t\t\t\t\t\tborder-top-color: transparent;
\t\t\t\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling div {
\t\t\t\t\t\t\t\t-webkit-animation: lds-rolling 1s linear infinite;
\t\t\t\t\t\t\t\tanimation: lds-rolling 1s linear infinite;
\t\t\t\t\t\t\t\ttop: 100px;
\t\t\t\t\t\t\t\tleft: 100px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling div:after {
\t\t\t\t\t\t\t\t-webkit-transform: rotate(90deg);
\t\t\t\t\t\t\t\ttransform: rotate(90deg);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling {
\t\t\t\t\t\t\t\twidth: 200px !important;
\t\t\t\t\t\t\t\theight: 200px !important;
\t\t\t\t\t\t\t\t-webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
\t\t\t\t\t\t\t\ttransform: translate(-100px, -100px) scale(1) translate(100px, 100px);
\t\t\t\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.col-pd-15 {
\t\t\t\t\t\t\t\tpadding-left:15px;
\t\t\t\t\t\t\t\tpadding-right:15px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.col-mb-10 {
\t\t\t\t\t\t\t\tmargin-bottom:10px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t#boc_order hr {
\t\t\t\t\t\t\t\tmargin-top:0px;
\t\t\t\t\t\t\t\tmargin-bottom:15px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.boc_product_info > div {
\t\t\t\t\t\t\t\tline-height: 120px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.boc_product_info > div > img {
\t\t\t\t\t\t\t\tmax-height: 120px;
\t\t\t\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.boc_product_info > div > img, .boc_product_info > div > div, .boc_product_info > div > p {
\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\tline-height: normal;
\t\t\t\t\t\t\t\tvertical-align: middle;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t#boc_order .checkbox {
\t\t\t\t\t\t\t\tmargin-top: 0;
\t\t\t\t\t\t\t\tpadding: 0 10px;
\t\t\t\t\t\t\t\tborder: 1px solid transparent;
\t\t\t\t\t\t\t\tborder-radius: 6px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t#boc_order .checkbox.has-error {
\t\t\t\t\t\t\t\tborder-color: #a94442;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@media (max-width: 767px) {
\t\t\t\t\t\t\t\t.boc_product_info > div {
\t\t\t\t\t\t\t\t\tline-height:normal;
\t\t\t\t\t\t\t\t\ttext-align:center;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t</style>
\t\t\t\t";
        }
        // line 268
        echo "\t\t\t

\t\t\t\t";
        // line 270
        if (($context["custom_js"] ?? null)) {
            // line 271
            echo "\t\t\t\t";
            echo ($context["custom_js"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 273
        echo "\t\t\t

\t\t\t\t";
        // line 275
        if (($context["custom_css"] ?? null)) {
            // line 276
            echo "\t\t\t\t<style>";
            echo ($context["custom_css"] ?? null);
            echo "</style>
\t\t\t\t";
        }
        // line 278
        echo "\t\t\t
";
        // line 279
        echo ($context["tc_og"] ?? null);
        echo " ";
        // line 280
        echo "
\t\t\t\t";
        // line 281
        echo ($context["cheaper30script"] ?? null);
        echo "
            
\t\t\t\t</head>
\t\t\t
      <body>

\t\t\t
\t\t\t\t";
        // line 288
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["SOCNETAUTH2_DATA_DOBOR"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null);
        echo "
\t\t\t  
            
        
        <div class=\"content-container\">
          <div class=\"menu-fixed\">
            <nav id=\"menu\" class=\"sidebar\">
              <div class=\"logo\">       
                ";
        // line 296
        if (($context["logo"] ?? null)) {
            // line 297
            echo "                <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"logo-img\" style=\"max-width: 232px;\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" style=\"max-width: 232px;\" /></a>
                ";
        } else {
            // line 299
            echo "                <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"logo-text\">";
            echo ($context["name"] ?? null);
            echo "</a>
                ";
        }
        // line 300
        echo "\t  
              </div>
              ";
        // line 302
        echo ($context["language"] ?? null);
        echo "
              ";
        // line 303
        echo ($context["menu"] ?? null);
        echo "
            </nav>
          </div>

          
          <div class=\"wrapper wrapper-shift\">
            <div class=\"menu-page__header\">
              <div class=\"container\">
                <header class=\"header\">
                  <div class=\"logo mobile-logo hidden-lg\">
                    <div class=\"mobile-toggle\">
                      <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
                        <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
                        <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
                        <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
                      </svg>
                    </div>
                    ";
        // line 320
        if (($context["logo"] ?? null)) {
            // line 321
            echo "                    <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"logo-img\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
                    ";
        } else {
            // line 323
            echo "                    <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"logo-text\">";
            echo ($context["name"] ?? null);
            echo "</a>
                    ";
        }
        // line 324
        echo "\t  
                  </div>

                  <div class=\"lang-m\">";
        // line 327
        echo ($context["language"] ?? null);
        echo "</div>

                  <div class=\"header-top__container\">
                    ";
        // line 330
        if (($context["informations"] ?? null)) {
            // line 331
            echo "                    <div class=\"header-information\">
                      ";
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 333
                echo "                      <a href=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["information"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["href"] ?? null) : null);
                echo "\" rel=\"nofollow\" class=\"header-information__liks header-link\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["information"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null);
                echo "</a>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo "\t\t
                    </div>
                    ";
        }
        // line 337
        echo "                    <div class=\"header-tel\">
                      <div class=\"header-write__email relative\">
                        <svg class=\"svg-icon icon icon-mail\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\"><path fill=\"#000\" d=\"M16.999,4.975L16.999,4.975C16.999,4.975,16.999,4.975,16.999,4.975c-0.419-0.4-0.979-0.654-1.604-0.654H4.606c-0.584,0-1.104,0.236-1.514,0.593C3.076,4.928,3.05,4.925,3.037,4.943C3.034,4.945,3.035,4.95,3.032,4.953C2.574,5.379,2.276,5.975,2.276,6.649v6.702c0,1.285,1.045,2.329,2.33,2.329h10.79c1.285,0,2.328-1.044,2.328-2.329V6.649C17.724,5.989,17.441,5.399,16.999,4.975z M15.396,5.356c0.098,0,0.183,0.035,0.273,0.055l-5.668,4.735L4.382,5.401c0.075-0.014,0.145-0.045,0.224-0.045H15.396z M16.688,13.351c0,0.712-0.581,1.294-1.293,1.294H4.606c-0.714,0-1.294-0.582-1.294-1.294V6.649c0-0.235,0.081-0.445,0.192-0.636l6.162,5.205c0.096,0.081,0.215,0.122,0.334,0.122c0.118,0,0.235-0.041,0.333-0.12l6.189-5.171c0.099,0.181,0.168,0.38,0.168,0.6V13.351z\"></path></svg>
                        <a href=\"mailto:";
        // line 340
        echo ($context["email"] ?? null);
        echo "\" class=\"header-link\">";
        echo ($context["email"] ?? null);
        echo "</a>
                      </div>
                      <div class=\"header-info__phone\">
                        <div class=\"header-phone\">
                          <a href=\"tel:";
        // line 344
        echo ($context["tel"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
                        </div>
                        ";
        // line 346
        if (($context["open"] ?? null)) {
            // line 347
            echo "                        <div class=\"header-open\">";
            echo ($context["open"] ?? null);
            echo "</div>
                        ";
        }
        // line 349
        echo "                      </div>
                    </div>
                  </div>
                  <div class=\"mobile-menu hidden-sm hidden-md hidden-lg\">
                    <div class=\"mobile-menu__user\">
                      <div class=\"mobile-menu__us\">
                        <span class=\"mobile-block mobile-us__link relative\">
                          <svg class=\"svg-icon icon icon-info\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\">
                            <path fill=\"#000\" d=\"M10.032,8.367c-1.112,0-2.016,0.905-2.016,2.018c0,1.111,0.904,2.014,2.016,2.014c1.111,0,2.014-0.902,2.014-2.014C12.046,9.271,11.143,8.367,10.032,8.367z M10.032,11.336c-0.525,0-0.953-0.427-0.953-0.951c0-0.526,0.427-0.955,0.953-0.955c0.524,0,0.951,0.429,0.951,0.955C10.982,10.909,10.556,11.336,10.032,11.336z\"></path>
                            <path fill=\"#000\" d=\"M17.279,8.257h-0.785c-0.107-0.322-0.237-0.635-0.391-0.938l0.555-0.556c0.208-0.208,0.208-0.544,0-0.751l-2.254-2.257c-0.199-0.2-0.552-0.2-0.752,0l-0.556,0.557c-0.304-0.153-0.617-0.284-0.939-0.392V3.135c0-0.294-0.236-0.532-0.531-0.532H8.435c-0.293,0-0.531,0.237-0.531,0.532v0.784C7.582,4.027,7.269,4.158,6.966,4.311L6.409,3.754c-0.1-0.1-0.234-0.155-0.376-0.155c-0.141,0-0.275,0.055-0.375,0.155L3.403,6.011c-0.208,0.207-0.208,0.543,0,0.751l0.556,0.556C3.804,7.622,3.673,7.935,3.567,8.257H2.782c-0.294,0-0.531,0.238-0.531,0.531v3.19c0,0.295,0.237,0.531,0.531,0.531h0.787c0.105,0.318,0.236,0.631,0.391,0.938l-0.556,0.559c-0.208,0.207-0.208,0.545,0,0.752l2.254,2.254c0.208,0.207,0.544,0.207,0.751,0l0.558-0.559c0.303,0.154,0.616,0.285,0.938,0.391v0.787c0,0.293,0.238,0.531,0.531,0.531h3.191c0.295,0,0.531-0.238,0.531-0.531v-0.787c0.322-0.105,0.636-0.236,0.938-0.391l0.56,0.559c0.208,0.205,0.546,0.207,0.752,0l2.252-2.254c0.208-0.207,0.208-0.545,0.002-0.752l-0.559-0.559c0.153-0.303,0.285-0.615,0.389-0.938h0.789c0.295,0,0.532-0.236,0.532-0.531v-3.19C17.812,8.495,17.574,8.257,17.279,8.257z M16.747,11.447h-0.653c-0.241,0-0.453,0.164-0.514,0.398c-0.129,0.496-0.329,0.977-0.594,1.426c-0.121,0.209-0.089,0.473,0.083,0.645l0.463,0.465l-1.502,1.504l-0.465-0.463c-0.174-0.174-0.438-0.207-0.646-0.082c-0.447,0.262-0.927,0.463-1.427,0.594c-0.234,0.061-0.397,0.271-0.397,0.514V17.1H8.967v-0.652c0-0.242-0.164-0.453-0.397-0.514c-0.5-0.131-0.98-0.332-1.428-0.594c-0.207-0.123-0.472-0.09-0.646,0.082l-0.463,0.463L4.53,14.381l0.461-0.463c0.169-0.172,0.204-0.434,0.083-0.643c-0.266-0.461-0.467-0.939-0.596-1.43c-0.06-0.234-0.272-0.398-0.514-0.398H3.313V9.319h0.652c0.241,0,0.454-0.162,0.514-0.397c0.131-0.498,0.33-0.979,0.595-1.43c0.122-0.208,0.088-0.473-0.083-0.645L4.53,6.386l1.503-1.504l0.46,0.462c0.173,0.172,0.437,0.204,0.646,0.083c0.45-0.265,0.931-0.464,1.433-0.597c0.233-0.062,0.396-0.274,0.396-0.514V3.667h2.128v0.649c0,0.24,0.161,0.452,0.396,0.514c0.502,0.133,0.982,0.333,1.433,0.597c0.211,0.12,0.475,0.089,0.646-0.083l0.459-0.462l1.504,1.504l-0.463,0.463c-0.17,0.171-0.202,0.438-0.081,0.646c0.263,0.448,0.463,0.928,0.594,1.427c0.061,0.235,0.272,0.397,0.514,0.397h0.651V11.447z\"></path>
                          </svg>
                        </span>
                        <div id=\"mobile-us\" class=\"nav-dropdown__menu\">
                          <div class=\"modal-header\">
                            <div class=\"modal-title\">";
        // line 363
        echo ($context["text_info"] ?? null);
        echo "</div>
                            <button id=\"mobile-us__close\" type=\"button\" class=\"mobile-close\" aria-label=\"close\">
                              <svg class=\"svg-icon icon icon-close\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\">
                                <path fill=\"#000\" d=\"M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z\"></path>
                              </svg>
                            </button>
                          </div>
                          <div class=\"nav-dropdown__content\">
                            ";
        // line 371
        if (($context["informations"] ?? null)) {
            // line 372
            echo "                            <ul class=\"list-unstyled mobile-information\">
                              <li class=\"mobile-info__title\"><strong>";
            // line 373
            echo ($context["text_info"] ?? null);
            echo "</strong></li>
                              ";
            // line 374
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 375
                echo "                              <li class=\"mobile-info__item\">\t\t\t\t
                                <a href=\"";
                // line 376
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 376);
                echo "\" class=\"mobile-info__link link-bottom\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 376);
                echo "</a>\t\t\t\t\t\t
                              </li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 378
            echo "\t
                            </ul>
                            ";
        }
        // line 381
        echo "                            <ul class=\"list-unstyled mobile-phone\">
                              <li class=\"mobile-info__title\"><strong>";
        // line 382
        echo ($context["text_phone"] ?? null);
        echo "</strong></li>
                              <li class=\"mobile-info__item\"><a href=\"tel:";
        // line 383
        echo ($context["tel"] ?? null);
        echo "\" class=\"mobile-info__link\">";
        echo ($context["telephone"] ?? null);
        echo "</a></li>
                            </ul>
                            <ul class=\"list-unstyled mobile-address\">
                              <li class=\"mobile-info__title\"><strong>";
        // line 386
        echo ($context["text_address"] ?? null);
        echo "</strong></li>
                              <li class=\"mobile-info__item\"><span class=\"mobile-info__link\">";
        // line 387
        echo ($context["address"] ?? null);
        echo "</span></li>
                            </ul>
                            ";
        // line 389
        if (($context["open"] ?? null)) {
            // line 390
            echo "                            <ul class=\"list-unstyled mobile-job\">
                              <li class=\"mobile-info__title\"><strong>";
            // line 391
            echo ($context["text_job"] ?? null);
            echo "</strong></li>
                              <li class=\"mobile-info__item\"><span class=\"mobile-info__link\">";
            // line 392
            echo ($context["open"] ?? null);
            echo "</span></li>
                            </ul>
                            ";
        }
        // line 395
        echo "                            <div class=\"mobile-menu__wishlist\">
                              <a href=\"";
        // line 396
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"mobile-wishlist__link wishlist-link relative wishlist-total\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"mobile-menu__login\">
                        <a href=\"";
        // line 402
        echo ($context["login"] ?? null);
        echo "\" class=\"mobile-block mobile-user__link relative\" aria-label=\"login\">
                          <svg class=\"svg-icon icon icon-user\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\">
                            <path fill=\"#000\" d=\"M10,10.9c2.373,0,4.303-1.932,4.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696,4.223,5.696,6.594C5.696,8.969,7.627,10.9,10,10.9z M10,3.331c1.801,0,3.266,1.463,3.266,3.263c0,1.802-1.465,3.267-3.266,3.267c-1.8,0-3.265-1.465-3.265-3.267C6.735,4.794,8.2,3.331,10,3.331z\"></path>
                            <path fill=\"#000\" d=\"M10,12.503c-4.418,0-7.878,2.058-7.878,4.685c0,0.288,0.231,0.52,0.52,0.52c0.287,0,0.519-0.231,0.519-0.52c0-1.976,3.132-3.646,6.84-3.646c3.707,0,6.838,1.671,6.838,3.646c0,0.288,0.234,0.52,0.521,0.52s0.52-0.231,0.52-0.52C17.879,14.561,14.418,12.503,10,12.503z\"></path>
                          </svg>
                        </a>
                      </div>
                      <div class=\"mobile-menu__compare\">
                        <a href=\"";
        // line 410
        echo ($context["compare"] ?? null);
        echo "\" class=\"mobile-block mobile-compare__link relative\" aria-label=\"compare\">
                          <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line></svg>
                          <span class=\"count\">";
        // line 412
        echo ($context["compare_count"] ?? null);
        echo "</span>
                        </a>
                      </div>
                      <div class=\"mobile-menu__cart\">
                        <a href=\"";
        // line 416
        echo ($context["shopping_cart"] ?? null);
        echo "\" class=\"mobile-block mobile-cart__link relative\" aria-label=\"cart\">
                          <svg class=\"svg-icon icon icon-cart\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\">
                            <path fill=\"#000\" d=\"M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z\"></path>
                            <path fill=\"#000\" d=\"M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z\"></path>
                            <path fill=\"#000\" d=\"M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z\"></path>
                          </svg>
                          <span class=\"count\">";
        // line 422
        echo ($context["cart_count"] ?? null);
        echo "</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </header>
                <div class=\"box-search\">
                  <div class=\"header-search\">";
        // line 429
        echo ($context["search"] ?? null);
        echo "</div>
                  
                  
                  <div class=\"box-cart\">

                  

                    ";
        // line 436
        if (($context["config_account"] ?? null)) {
            // line 437
            echo "                    ";
            if (($context["logged"] ?? null)) {
                // line 438
                echo "                    <div class=\"for-user user-profile\">
                      <a href=\"";
                // line 439
                echo ($context["account"] ?? null);
                echo "\" class=\"profile-link relative\">
                        <svg class=\"svg-icon icon icon-user\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\">
                          <path fill=\"#000\" d=\"M10,10.9c2.373,0,4.303-1.932,4.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696,4.223,5.696,6.594C5.696,8.969,7.627,10.9,10,10.9z M10,3.331c1.801,0,3.266,1.463,3.266,3.263c0,1.802-1.465,3.267-3.266,3.267c-1.8,0-3.265-1.465-3.265-3.267C6.735,4.794,8.2,3.331,10,3.331z\"></path>
                          <path fill=\"#000\" d=\"M10,12.503c-4.418,0-7.878,2.058-7.878,4.685c0,0.288,0.231,0.52,0.52,0.52c0.287,0,0.519-0.231,0.519-0.52c0-1.976,3.132-3.646,6.84-3.646c3.707,0,6.838,1.671,6.838,3.646c0,0.288,0.234,0.52,0.521,0.52s0.52-0.231,0.52-0.52C17.879,14.561,14.418,12.503,10,12.503z\"></path>
                        </svg>
                        ";
                // line 444
                echo ($context["firstname"] ?? null);
                echo "
                      </a>
                    </div>
                    ";
            } else {
                // line 448
                echo "                    <div class=\"for-user user-profile\">
                      <a href=\"";
                // line 449
                echo ($context["login"] ?? null);
                echo "\" class=\"profile-link relative\">
                        <svg class=\"svg-icon icon icon-user\" width=\"24\" height=\"24\" viewBox=\"0 0 20 20\">
                          <path fill=\"#000\" d=\"M10,10.9c2.373,0,4.303-1.932,4.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696,4.223,5.696,6.594C5.696,8.969,7.627,10.9,10,10.9z M10,3.331c1.801,0,3.266,1.463,3.266,3.263c0,1.802-1.465,3.267-3.266,3.267c-1.8,0-3.265-1.465-3.265-3.267C6.735,4.794,8.2,3.331,10,3.331z\"></path>
                          <path fill=\"#000\" d=\"M10,12.503c-4.418,0-7.878,2.058-7.878,4.685c0,0.288,0.231,0.52,0.52,0.52c0.287,0,0.519-0.231,0.519-0.52c0-1.976,3.132-3.646,6.84-3.646c3.707,0,6.838,1.671,6.838,3.646c0,0.288,0.234,0.52,0.521,0.52s0.52-0.231,0.52-0.52C17.879,14.561,14.418,12.503,10,12.503z\"></path>
                        </svg>
                        ";
                // line 454
                echo ($context["text_login"] ?? null);
                echo "
                      </a>
                    </div>
                    ";
            }
            // line 458
            echo "                    ";
        }
        // line 459
        echo "                    ";
        if (($context["config_wishlist"] ?? null)) {
            // line 460
            echo "                    <div class=\"for-user wishlist-profile\">
                      <a href=\"";
            // line 461
            echo ($context["wishlist"] ?? null);
            echo "\" class=\"header-wishlist wishlist-link wishlist-total\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a>
                    </div>
                    ";
        }
        // line 464
        echo "                    <div class=\"for-user compare-profile\">
                      <a href=\"";
        // line 465
        echo ($context["compare"] ?? null);
        echo "\" class=\"header-compare compare-link compare-total\">
                        <svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\"><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line></svg>

                        ";
        // line 468
        echo ($context["text_compare"] ?? null);
        echo "
                      </a>
                    </div>
                    ";
        // line 471
        echo ($context["cart"] ?? null);
        echo "
                  </div>
                </div>
              </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "bigmag/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  925 => 471,  919 => 468,  913 => 465,  910 => 464,  902 => 461,  899 => 460,  896 => 459,  893 => 458,  886 => 454,  878 => 449,  875 => 448,  868 => 444,  860 => 439,  857 => 438,  854 => 437,  852 => 436,  842 => 429,  832 => 422,  823 => 416,  816 => 412,  811 => 410,  800 => 402,  789 => 396,  786 => 395,  780 => 392,  776 => 391,  773 => 390,  771 => 389,  766 => 387,  762 => 386,  754 => 383,  750 => 382,  747 => 381,  742 => 378,  731 => 376,  728 => 375,  724 => 374,  720 => 373,  717 => 372,  715 => 371,  704 => 363,  688 => 349,  682 => 347,  680 => 346,  673 => 344,  664 => 340,  659 => 337,  654 => 334,  643 => 333,  639 => 332,  636 => 331,  634 => 330,  628 => 327,  623 => 324,  615 => 323,  603 => 321,  601 => 320,  581 => 303,  577 => 302,  573 => 300,  565 => 299,  553 => 297,  551 => 296,  540 => 288,  530 => 281,  527 => 280,  524 => 279,  521 => 278,  515 => 276,  513 => 275,  509 => 273,  503 => 271,  501 => 270,  497 => 268,  405 => 178,  401 => 176,  398 => 175,  323 => 102,  320 => 101,  313 => 97,  308 => 94,  306 => 93,  301 => 90,  294 => 88,  287 => 87,  284 => 86,  276 => 84,  274 => 83,  268 => 79,  261 => 77,  254 => 76,  251 => 75,  243 => 73,  241 => 72,  235 => 68,  228 => 66,  221 => 65,  218 => 64,  210 => 62,  208 => 61,  202 => 57,  200 => 56,  197 => 55,  191 => 54,  188 => 53,  179 => 51,  174 => 50,  163 => 48,  159 => 47,  154 => 45,  150 => 43,  141 => 41,  137 => 40,  133 => 38,  120 => 36,  116 => 35,  107 => 28,  101 => 26,  98 => 25,  92 => 23,  90 => 22,  86 => 21,  82 => 20,  64 => 10,  53 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bigmag/template/common/header.twig", "");
    }
}
