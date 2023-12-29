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

/* default/template/extension/module/socnetauth2/socnetauth2_confirm_js.twig */
class __TwigTemplate_0339749259f0dd0cdd92896ec1874cab8b4c5ac31628866a5b977c30c63de40e extends \Twig\Template
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
        echo "<div id=\"socnetauth2_confirm_block\" style=\"display: none\"></div>
<script>

setTimeout(() => { 
\tif (typeof jQuery !== 'undefined' )
\t\tjContainer = jQuery;
\telse if (typeof jq !== 'undefined' )
\t\tjContainer = jq;
\telse
\t\tjContainer = \$;

\tjContainer(document).ready(function() {
\t\t\tvar r = Math.random();
\t\t\tjContainer.ajax({
\t\t\t\turl: 'index.php?route=extension/module/socnetauth2/getConfirmCode&r='+r,
\t\t\t\tdataType: 'html',
\t\t\t\tdata: {
\t\t\t\t\t'lastlink': '',
\t\t\t\t\t'lastroute': 'common/home'
\t\t\t\t},
\t\t\t\tsuccess: function(html) {
\t\t\t\t
\t\t\t\t\tif( html )
\t\t\t\t\t{
\t\t\t\t\t\tjContainer('#socnetauth2_confirm_block').html(html);
\t\t\t\t\t\tjContainer('#socnetauth2_confirm_block').show();
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{ 
\t\t\t\t\t\tjContainer('#socnetauth2_confirm_block').hide();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t});
}, 1000);
</script>


";
        // line 42
        if (($context["telegram_code"] ?? null)) {
            // line 43
            echo "<script>
function showTelegramWindow(ID) {
 var element = \$(\"#sna_telegram_popup_block\").detach(); 
 \$(\"#sna_telegram_popup\"+ID).append(element); 
 \$(\".sna_telegram_popup\").hide();
 \$(\"#sna_telegram_popup\"+ID).show();
} 
</script>
<div style=\"display: none;\">
<div id=\"sna_telegram_popup_block\">
";
            // line 53
            echo ($context["telegram_code"] ?? null);
            echo "
</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/socnetauth2/socnetauth2_confirm_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 53,  82 => 43,  80 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/socnetauth2/socnetauth2_confirm_js.twig", "");
    }
}
