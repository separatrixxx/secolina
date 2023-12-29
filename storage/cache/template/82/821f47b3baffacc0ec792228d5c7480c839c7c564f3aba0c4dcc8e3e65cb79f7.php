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

/* marketplace/installer.twig */
class __TwigTemplate_3c51429011ff6f97391b84d8431a362b5675f7572d53832ce516d5ee21c57da4 extends \Twig\Template
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
    <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 16
        echo ($context["text_upload"] ?? null);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
      <form class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 21
        echo ($context["text_upload"] ?? null);
        echo "</legend>

\t\t<div class=\"alert alert-info\">
\t\t<i class=\"fa fa-info-circle\"></i> Перед установкой расширения, рекомендуется прочесть важную информацию в статье 
\t\t<a href=\"https://shop.opencart-russia.ru/o-warez-virus\" class=\"alert-link\" target=\"_blank\">о Варезе и Вирусах</a>!
\t\t</div>
\t\t
\t\t
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"button-upload\"><span data-toggle=\"tooltip\" title=\"";
        // line 30
        echo ($context["help_upload"] ?? null);
        echo "\">";
        echo ($context["entry_upload"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-upload\" data-loading-text=\"";
        // line 32
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>
            </div>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>";
        // line 38
        echo ($context["text_progress"] ?? null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 40
        echo ($context["entry_progress"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"progress\">
                <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
              </div>
              <div id=\"progress-text\"></div>
            </div>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>";
        // line 51
        echo ($context["text_history"] ?? null);
        echo "</legend>
          <div id=\"history\"></div>
        </fieldset>
      </form>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 64
        echo ($context["user_token"] ?? null);
        echo "');
  
\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t// Reset everything
\t\t\t\$('.alert-dismissible').remove();
\t\t\t\$('#progress-bar').css('width', '0%');
\t\t\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\t\t\$('#progress-text').html('');

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=marketplace/installer/upload&user_token=";
        // line 88
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}
\t\t\t
\t\t\t\t\tif (json['text']) {
\t\t\t\t\t\t\$('#progress-bar').css('width', '20%');
\t\t\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t\t\t}
\t\t\t
\t\t\t\t\tif (json['next']) {
\t\t\t\t\t\tnext(json['next'], 1);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

function next(url, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t\t
\t\t\t\t\$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 142
        echo ($context["user_token"] ?? null);
        echo "');
\t\t\t}
\t\t\t
\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}
\t\t\t
\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

// Uninstall
\$('#history').on('click', '.btn-danger', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/install/uninstall&user_token=";
        // line 166
        echo ($context["user_token"] ?? null);
        echo "&extension_install_id=' + \$(this).attr('value'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 180
        echo ($context["user_token"] ?? null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script></div>
";
        // line 189
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "marketplace/installer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 189,  274 => 180,  257 => 166,  230 => 142,  173 => 88,  146 => 64,  130 => 51,  116 => 40,  111 => 38,  100 => 32,  93 => 30,  81 => 21,  73 => 16,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/installer.twig", "");
    }
}
