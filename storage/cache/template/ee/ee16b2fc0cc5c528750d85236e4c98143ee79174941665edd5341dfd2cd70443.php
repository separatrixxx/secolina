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

/* default/template/extension/module/mfilter.twig */
class __TwigTemplate_f1a8fe9447e694780eea03d58219f896bbff5da584a35a34ab04cd95411627d6 extends \Twig\Template
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
        if ( !twig_test_empty(($context["hide_container"] ?? null))) {
            // line 2
            echo "\t<div style=\"display: none;\">
";
        }
        // line 4
        echo "
<div class=\"box mfilter-box mfilter-box-";
        // line 5
        echo ($context["_idx"] ?? null);
        echo ($context["theme"] ?? null);
        echo " mfilter-";
        echo ($context["_position"] ?? null);
        echo ($context["class_hide_container"] ?? null);
        echo ((( !twig_test_empty(($context["_displayOptionsAs"] ?? null)) && (($context["_displayOptionsAs"] ?? null) == "modern_horizontal"))) ? (" mfilter-hide") : (""));
        echo " mfilter-direction-";
        echo ($context["direction"] ?? null);
        echo "\" id=\"mfilter-box-";
        echo ($context["_idx"] ?? null);
        echo "\">
\t";
        // line 6
        if (($context["heading_title"] ?? null)) {
            // line 7
            echo "\t\t<h3 class=\"box-heading\">";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
\t";
        }
        // line 9
        echo "\t<div class=\"box-content mfilter-content";
        echo ($context["class_calculate_number_of_products"] ?? null);
        echo "\">
\t\t";
        // line 10
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["buttons"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["top"] ?? null) : null);
        echo "
\t\t<ul>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
        foreach ($context['_seq'] as $context["key_group"] => $context["gfilter"]) {
            // line 13
            echo "\t\t\t
\t\t\t\t";
            // line 14
            $context["gfilters"] = [];
            // line 15
            echo "\t\t\t\t";
            $context["gkey"] = "";
            // line 16
            echo "\t\t\t\t
\t\t\t\t";
            // line 17
            if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["gfilter"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["type"] ?? null) : null) == "attribute_group")) {
                // line 18
                echo "\t\t\t\t\t";
                $context["gkey"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["gfilter"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["group_key"] ?? null) : null);
                // line 19
                echo "\t\t\t\t\t";
                $context["gfilters"] = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["gfilter"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["attributes"] ?? null) : null);
                // line 20
                echo "\t\t\t\t";
            } else {
                // line 21
                echo "\t\t\t\t\t";
                $context["gfilters"] = [0 => $context["gfilter"]];
                // line 22
                echo "\t\t\t\t";
            }
            // line 23
            echo "\t\t\t
\t\t\t";
            // line 24
            if ((((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["gfilter"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["type"] ?? null) : null) == "attribute_group") &&  !(null === (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["gfilter"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null)))) {
                // line 25
                echo "\t\t\t\t<li class=\"mfilter-gheader\" data-group-key=\"";
                echo ($context["gkey"] ?? null);
                echo "\">";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["gfilter"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                echo "</li>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gfilters"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 28
                echo "\t\t\t\t";
                $context["base_type"] = ((twig_test_empty((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["filter"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["base_type"] ?? null) : null))) ? ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["filter"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["type"] ?? null) : null)) : ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["filter"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["base_type"] ?? null) : null)));
                echo "\t
\t\t\t\t";
                // line 29
                $context["base_id"] = ((twig_test_empty((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["filter"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["id"] ?? null) : null))) ? ("") : ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["filter"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["id"] ?? null) : null)));
                echo "\t
\t\t\t\t";
                // line 30
                $context["display_list_of_items"] = ((twig_test_empty((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["filter"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["display_list_of_items"] ?? null) : null))) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["mfp_options"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["display_list_of_items"] ?? null) : null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["type"] ?? null) : null)) : ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["filter"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["display_list_of_items"] ?? null) : null)));
                echo "\t
\t\t\t\t\t
\t\t\t\t";
                // line 32
                if (twig_in_filter((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["filter"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["type"] ?? null) : null), ($context["filter_types"] ?? null))) {
                    // line 33
                    echo "\t\t\t\t\t";
                    $context["display_list_of_items"] = "-1";
                    // line 34
                    echo "\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t
\t\t\t\t\t<li
\t\t\t\t\t\tdata-type=\"";
                // line 37
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["filter"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["type"] ?? null) : null);
                echo "\"
\t\t\t\t\t\tdata-base-type=\"";
                // line 38
                echo ($context["base_type"] ?? null);
                echo "\"
\t\t\t\t\t\tdata-id=\"";
                // line 39
                echo ($context["base_id"] ?? null);
                echo "\"
\t\t\t\t\t\tdata-group-key=\"";
                // line 40
                echo ($context["gkey"] ?? null);
                echo "\"
\t\t\t\t\t\tdata-seo-name=\"";
                // line 41
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["filter"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["seo_name"] ?? null) : null);
                echo "\"
\t\t\t\t\t\tdata-inline-horizontal=\"";
                // line 42
                echo ((($context["_horizontalInline"] ?? null)) ? ("1") : ("0"));
                echo "\"
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 44
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["filter"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["auto_levels"] ?? null) : null)) {
                    // line 45
                    echo "\t\t\t\t\t\t\tdata-auto-levels=\"";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["filter"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["auto_levels"] ?? null) : null);
                    echo "\"
\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 48
                $context["display_live_filter"] = (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["settings"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["display_live_filter"] ?? null) : null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["enabled"] ?? null) : null)) ? ("1") : ("-1"));
                // line 49
                echo "\t\t\t\t\t\t";
                if ( !twig_test_empty((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["filter"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["display_live_filter"] ?? null) : null))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    $context["display_live_filter"] = (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["filter"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["display_live_filter"] ?? null) : null);
                    // line 51
                    echo "\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\tdata-display-live-filter=\"";
                echo ((((($context["display_live_filter"] ?? null) == "1") &&  !twig_test_empty((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["settings"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["display_live_filter"] ?? null) : null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["items"] ?? null) : null)))) ? ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["settings"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["display_live_filter"] ?? null) : null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["items"] ?? null) : null)) : (0));
                echo "\"
\t\t
\t\t\t\t\t\t";
                // line 54
                if (((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["filter"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["type"] ?? null) : null) == "levels")) {
                    // line 55
                    echo "\t\t\t\t\t\t\tdata-labels=\"";
                    echo twig_join_filter((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["filter"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["labels"] ?? null) : null), "||");
                    echo "\"
\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t
\t\t\t\t\t\tdata-display-list-of-items=\"";
                // line 58
                echo ($context["display_list_of_items"] ?? null);
                echo "\"
\t\t\t\t\t\tclass=\"mfilter-filter-item mfilter-";
                // line 59
                echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["filter"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["type"] ?? null) : null);
                echo " mfilter-";
                echo ($context["base_type"] ?? null);
                echo (((($context["base_type"] ?? null) == "attribute")) ? (" mfilter-attributes") : ((((($context["base_type"] ?? null) == "option")) ? (" mfilter-options") : ((((($context["base_type"] ?? null) == "filter")) ? (" mfilter-filters") : (""))))));
                echo "\"
\t\t\t\t\t\t>
\t\t\t\t\t\t";
                // line 61
                if (((((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["filter"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["collapsed"] ?? null) : null) != "hide_header") &&  !twig_test_empty((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["filter"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["name"] ?? null) : null))) && ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["filter"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["hide_header"] ?? null) : null) == 0))) {
                    // line 62
                    echo "\t\t\t\t\t\t\t<div class=\"mfilter-heading 
\t\t\t\t\t\t\t\t";
                    // line 63
                    if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["filter"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["collapsed"] ?? null) : null)) {
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["filter"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["collapsed"] ?? null) : null) == "1") || (($context["is_mobile"] ?? null) && ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["filter"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["collapsed"] ?? null) : null) == "mobile"))) || ( !($context["is_mobile"] ?? null) && ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["filter"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["collapsed"] ?? null) : null) == "pc")))) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_empty((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["params"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[(($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["filter"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["seo_name"] ?? null) : null)] ?? null) : null))) {
                                // line 66
                                echo "\t\t\t\t\t\t\t\t\t\t\t mfilter-collapsed
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 68
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 69
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 70
                    echo "\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t<div class=\"mfilter-heading-content\">
\t\t\t\t\t\t\t\t\t<div class=\"mfilter-heading-text\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 74
                    if (((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["filter"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["select_deselect_all"] ?? null) : null) && ((((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["filter"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["type"] ?? null) : null) == "checkbox") || ((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["filter"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["type"] ?? null) : null) == "image")) || ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["filter"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["type"] ?? null) : null) == "image_list_checkbox")))) {
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (((((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["filter"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["select_deselect_all"] ?? null) : null) == "1") || (($context["is_mobile"] ?? null) && ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["filter"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["select_deselect_all"] ?? null) : null) == "mobile"))) || ( !($context["is_mobile"] ?? null) && ((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["filter"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["select_deselect_all"] ?? null) : null) == "pc")))) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"mfp-no-event\" data-toggle=\"tooltip\" title=\"";
                            echo ($context["text_select_deselect_all"] ?? null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["filter"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["name"] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    // line 81
                    if ( !twig_test_empty((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["filter"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["tooltip"] ?? null) : null))) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question pull-right\" data-mf-toggle=\"tooltip\" data-html=\"1\" title=\"";
                        echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["filter"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["tooltip"] ?? null) : null);
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<i class=\"mfilter-head-icon\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 89
                echo "
\t\t\t\t\t\t<div class=\"mfilter-content-opts\"  
\t\t\t\t\t\t\t\t";
                // line 91
                if (((((((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["filter"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["collapsed"] ?? null) : null) == "1") || (($context["is_mobile"] ?? null) && ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["filter"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["collapsed"] ?? null) : null) == "mobile"))) || ( !($context["is_mobile"] ?? null) && ((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["filter"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["collapsed"] ?? null) : null) == "pc"))) && ((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["filter"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["collapsed"] ?? null) : null) != "hide_header")) && (($context["_position"] ?? null) != "content_top"))) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_test_empty((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["params"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[(($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["filter"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["seo_name"] ?? null) : null)] ?? null) : null))) {
                        // line 93
                        echo "\t\t\t\t\t\t\t\t\t\tstyle=\"display:none\"
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div class=\"mfilter-opts-container\">
\t\t\t\t\t\t\t\t<div class=\"mfilter-content-wrapper";
                // line 98
                echo (((($context["display_list_of_items"] ?? null) == "scroll")) ? (" mfilter-iscroll scroll-content scroll-wrapper") : (""));
                echo "\"";
                echo ((((($context["display_list_of_items"] ?? null) == "scroll") && ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["filter"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["type"] ?? null) : null) != "tree"))) ? (((((" data-max-height=\"" . (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["mfp_options"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["display_list_of_items"] ?? null) : null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["max_height"] ?? null) : null)) . "\" style=\"max-height:") . (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["mfp_options"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["display_list_of_items"] ?? null) : null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["max_height"] ?? null) : null)) . "px\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t<div class=\"mfilter-options\">
\t\t\t\t\t\t\t\t\t\t";
                // line 100
                if ((($context["base_type"] ?? null) == "categories")) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-category mfilter-category-";
                    echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["filter"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["type"] ?? null) : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    if (((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["filter"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["type"] ?? null) : null) == "related")) {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul data-labels=\"";
                        // line 104
                        echo twig_replace_filter(twig_join_filter((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["filter"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["labels"] ?? null) : null), "#|#"), ["\"" => "&quot;"]);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 105
                        $context["values"] = ((twig_test_empty((($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["params"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[(($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["filter"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["seo_name"] ?? null) : null)] ?? null) : null))) ? ([]) : ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["params"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[(($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["filter"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["seo_name"] ?? null) : null)] ?? null) : null)));
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 107
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["filter"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["levels"] ?? null) : null));
                        foreach ($context['_seq'] as $context["level_id"] => $context["level"]) {
                            // line 108
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["values"] = ((twig_test_empty((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["values"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[$context["level_id"]] ?? null) : null))) ? ("") : ((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["values"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[$context["level_id"]] ?? null) : null)));
                            // line 109
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select data-type=\"category-";
                            // line 110
                            echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["filter"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["type"] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                            // line 111
                            echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["level"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["name"] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 112
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["level"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["options"] ?? null) : null));
                            foreach ($context['_seq'] as $context["optKey"] => $context["optVal"]) {
                                // line 113
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo $context["optKey"];
                                echo "\"";
                                echo (((($context["value"] ?? null) == $context["optKey"])) ? (" selected=\"selected\"") : (""));
                                echo ">";
                                echo $context["optVal"];
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['optKey'], $context['optVal'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 115
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['level_id'], $context['level'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 118
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif (((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a =                     // line 119
$context["filter"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["type"] ?? null) : null) == "tree")) {
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"path\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"mfilter-tb\" data-top-url=\"";
                        // line 121
                        echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["filter"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["top_url"] ?? null) : null);
                        echo "\" data-top-path=\"";
                        echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["filter"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["top_path"] ?? null) : null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 122
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["filter"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["categories"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 123
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (( !twig_test_empty((($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["settings"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["hide_inactive_values"] ?? null) : null)) && twig_test_empty((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["category"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["cnt"] ?? null) : null)))) {
                                // line 124
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 126
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mfilter-tb-as-tr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb-as-td\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                                // line 128
                                echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["category"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["id"] ?? null) : null);
                                echo "\" data-parent-id=\"";
                                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["category"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["pid"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["category"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["name"] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb-as-td mfilter-col-count\"><span class=\"mfilter-counter\">";
                                // line 130
                                echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["category"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["cnt"] ?? null) : null);
                                echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 133
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif (((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 =                     // line 135
$context["filter"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["type"] ?? null) : null) == "cat_checkbox")) {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 138
                        $context["tmpCatShown"] = 0;
                        // line 139
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["tmpCatIdx"] = 0;
                        // line 140
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 141
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["filter"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["categories"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 142
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 143
                            if ((($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["category"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["cnt"] ?? null) : null)) {
                                // line 144
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["tmpCatShown"] = (($context["tmpCatShown"] ?? null) + 1);
                                // line 145
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 146
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["tmpCatIdx"] = (($context["tmpCatIdx"] ?? null) + 1);
                            // line 147
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-tb-as-tr";
                            // line 148
                            echo (((($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["category"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["cnt"] ?? null) : null)) ? ("") : (" mfilter-hide"));
                            echo ((((($context["tmpCatShown"] ?? null) == 1) && (($context["tmpCatIdx"] ?? null) > ($context["tmpCatShown"] ?? null)))) ? (" mfilter-first-child") : (""));
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb-as-td mfilter-col-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-cat_checkbox-";
                            // line 151
                            echo ($context["_idx"] ?? null);
                            echo "-";
                            echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["category"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["id"] ?? null) : null);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 153
                            echo ((( !twig_test_empty((($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["params"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["path"] ?? null) : null)) && twig_in_filter((($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["category"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["id"] ?? null) : null), (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = ($context["params"] ?? null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["path"] ?? null) : null)))) ? (" checked=\"checked\"") : (""));
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 154
                            echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["category"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["id"] ?? null) : null);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"mfilter-tb-as-td\" for=\"mfilter-cat_checkbox-";
                            // line 156
                            echo ($context["_idx"] ?? null);
                            echo "-";
                            echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["category"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["id"] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 157
                            echo (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = $context["category"]) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb-as-td mfilter-col-count\"><span class=\"mfilter-counter";
                            // line 159
                            echo ((( !twig_test_empty((($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = ($context["params"] ?? null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["path"] ?? null) : null)) && twig_in_filter((($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["category"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["id"] ?? null) : null), (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["params"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["path"] ?? null) : null)))) ? (" mfilter-close") : (""));
                            echo "\">";
                            echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["category"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["cnt"] ?? null) : null);
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !twig_test_empty((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = $context["filter"]) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["show_button"] ?? null) : null))) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">";
                        // line 166
                        echo ($context["text_button_apply"] ?? null);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 =                 // line 170
$context["filter"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["type"] ?? null) : null) == "search") || ((($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["filter"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["type"] ?? null) : null) == "search_oc"))) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-search";
                    echo (((($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = $context["filter"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["button"] ?? null) : null)) ? (" mfilter-search-button") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-search\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-refresh-delay=\"";
                    // line 176
                    echo (((($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["filter"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["refresh_delay"] ?? null) : null)) ? ((($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["filter"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["refresh_delay"] ?? null) : null)) : ("-1"));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 177
                    echo (((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["params"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["search"] ?? null) : null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36[0] ?? null) : null)) ? ((($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = ($context["params"] ?? null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["search"] ?? null) : null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e[0] ?? null) : null)) : ((((($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = ($context["params"] ?? null)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["search_oc"] ?? null) : null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606[0] ?? null) : null)) ? ((($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = ($context["params"] ?? null)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["search_oc"] ?? null) : null)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e[0] ?? null) : null)) : (""))));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 179
                    if ((($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = $context["filter"]) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["button"] ?? null) : null)) {
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-search_button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"submit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf =                 // line 186
$context["filter"]) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["type"] ?? null) : null) == "price")) {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-price\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-price-inputs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 189
                    echo ($context["getSymbolLeft"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-price-min\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 194
                    echo (((($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = ($context["params"] ?? null)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["price"] ?? null) : null)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b[0] ?? null) : null)) ? ((($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = ($context["params"] ?? null)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["price"] ?? null) : null)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345[0] ?? null) : null)) : (""));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 196
                    echo ($context["getSymbolRight"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 198
                    echo ($context["getSymbolLeft"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-price-max\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 203
                    echo (((($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = ($context["params"] ?? null)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["price"] ?? null) : null)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0[1] ?? null) : null)) ? ((($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = ($context["params"] ?? null)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["price"] ?? null) : null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3[1] ?? null) : null)) : (""));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 205
                    echo ($context["getSymbolRight"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-price-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"mfilter-price-slider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 211
$context["filter"], "type", [], "any", false, false, false, 211) == "slider")) {
                    // line 212
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-slider-inputs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"mfilter-opts-slider-min form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\treadonly=\"readonly\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"mfilter-opts-slider-max form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\treadonly=\"readonly\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-slider-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-slider-slider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-slider-data\" style=\"display: none;\">";
                    // line 231
                    echo (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = $context["filter"]) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["options"] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 233
$context["filter"], "type", [], "any", false, false, false, 233) == "numeric_slider")) {
                    // line 234
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-numeric-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-slider-inputs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"mfilter-opts-slider-min form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 242
                    echo (((($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = ($context["params"] ?? null)) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a[twig_get_attribute($this->env, $this->source, $context["filter"], "seo_name", [], "any", false, false, false, 242)] ?? null) : null)) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c[0] ?? null) : null)) ? ((($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = ($context["params"] ?? null)) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b[twig_get_attribute($this->env, $this->source, $context["filter"], "seo_name", [], "any", false, false, false, 242)] ?? null) : null)) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6[0] ?? null) : null)) : (""));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-value=\"";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "min", [], "any", false, false, false, 243);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"1\" class=\"mf-p-left mf-p-right\">-</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"mfilter-opts-slider-max form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 251
                    echo (((($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = ($context["params"] ?? null)) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f[twig_get_attribute($this->env, $this->source, $context["filter"], "seo_name", [], "any", false, false, false, 251)] ?? null) : null)) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526[1] ?? null) : null)) ? ((($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = (($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = ($context["params"] ?? null)) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74[twig_get_attribute($this->env, $this->source, $context["filter"], "seo_name", [], "any", false, false, false, 251)] ?? null) : null)) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c[1] ?? null) : null)) : (""));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-value=\"";
                    // line 252
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "max", [], "any", false, false, false, 252);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 255
                    if (twig_get_attribute($this->env, $this->source, $context["filter"], "unit", [], "any", false, false, false, 255)) {
                        // line 256
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"1\" class=\"mf-p-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "unit", [], "any", false, false, false, 256);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 258
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-slider-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-slider-slider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff =                 // line 265
$context["filter"]) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["type"] ?? null) : null) == "text")) {
                    // line 266
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-text-inputs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-text-";
                    // line 270
                    echo ($context["_idx"] ?? null);
                    echo "-";
                    echo ($context["base_id"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"text\"\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 272
                    echo (( !twig_test_empty((($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = ($context["params"] ?? null)) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5[(($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = $context["filter"]) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["seo_name"] ?? null) : null)] ?? null) : null)) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918[0] ?? null) : null))) ? (twig_replace_filter((($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = ($context["params"] ?? null)) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16[(($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = $context["filter"]) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0["seo_name"] ?? null) : null)] ?? null) : null)) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20[0] ?? null) : null), ["\"" => "&quot;"])) : (""));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"";
                    // line 273
                    echo (($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = $context["filter"]) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["seo_name"] ?? null) : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 =                 // line 277
$context["filter"]) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["type"] ?? null) : null) == "rating")) {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 279
                    $context["k"] = 5;
                    // line 280
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(($context["k"] ?? null), 1));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 281
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-tb-as-tr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb-as-td mfilter-col-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-rating-";
                        // line 284
                        echo ($context["_idx"] ?? null);
                        echo "-";
                        echo $context["i"];
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 286
                        echo ((( !twig_test_empty((($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = ($context["params"] ?? null)) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["rating"] ?? null) : null)) && twig_in_filter($context["i"], (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = ($context["params"] ?? null)) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["rating"] ?? null) : null)))) ? (" checked=\"checked\"") : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 287
                        echo $context["i"];
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"mfilter-tb-as-td\" for=\"mfilter-opts-rating-";
                        // line 289
                        echo ($context["_idx"] ?? null);
                        echo "-";
                        echo $context["i"];
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 290
                        echo $context["i"];
                        echo " <img src=\"catalog/view/theme/default/stylesheet/mf/images/stars-";
                        echo $context["i"];
                        echo ".png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb-as-td mfilter-col-count\"><span class=\"mfilter-counter\">0</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 295
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter((($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb =                 // line 296
$context["filter"]) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb["type"] ?? null) : null), [0 => "stock_status", 1 => "manufacturers", 2 => "checkbox", 3 => "radio", 4 => "image_list_radio", 5 => "image_list_checkbox"])) {
                    // line 297
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["_tmp_type"] = (($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = $context["filter"]) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["type"] ?? null) : null);
                    // line 298
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_in_filter((($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = $context["filter"]) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5["type"] ?? null) : null), [0 => "stock_status", 1 => "manufacturers"])) {
                        // line 299
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["_tmp_type"] = "checkbox";
                        // line 300
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 301
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-options-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 303
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = $context["filter"]) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f["options"] ?? null) : null));
                    foreach ($context['_seq'] as $context["option_id"] => $context["option"]) {
                        // line 304
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo (((($context["_position"] ?? null) == "content_top")) ? ("<div class=\"mfilter-tb\">") : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-tb-as-tr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb-as-td mfilter-col-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-attribs-";
                        // line 308
                        echo ($context["_idx"] ?? null);
                        echo "-";
                        echo ($context["base_id"] ?? null);
                        echo "-";
                        echo (($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = $context["option"]) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["key"] ?? null) : null);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"";
                        // line 309
                        echo (($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = $context["filter"]) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["seo_name"] ?? null) : null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"";
                        // line 310
                        echo (((($context["_tmp_type"] ?? null) == "image_list_checkbox")) ? ("checkbox") : ((((($context["_tmp_type"] ?? null) == "image_list_radio")) ? ("radio") : (($context["_tmp_type"] ?? null)))));
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 311
                        echo ((( !twig_test_empty((($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = ($context["params"] ?? null)) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d[(($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = $context["filter"]) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2["seo_name"] ?? null) : null)] ?? null) : null)) && (twig_in_filter((($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = $context["option"]) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["value"] ?? null) : null), (($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = ($context["params"] ?? null)) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a[(($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = $context["filter"]) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["seo_name"] ?? null) : null)] ?? null) : null)) || twig_in_filter((($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = $context["option"]) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["key"] ?? null) : null), (($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = ($context["params"] ?? null)) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc[(($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = $context["filter"]) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["seo_name"] ?? null) : null)] ?? null) : null))))) ? (" checked=\"checked\"") : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 312
                        echo twig_replace_filter((($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = $context["option"]) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["value"] ?? null) : null), ["\"" => "&quot;"]);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"mfilter-tb-as-td\" for=\"mfilter-opts-attribs-";
                        // line 314
                        echo ($context["_idx"] ?? null);
                        echo "-";
                        echo ($context["base_id"] ?? null);
                        echo "-";
                        echo (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = $context["option"]) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d["key"] ?? null) : null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 315
                        if (twig_in_filter(($context["_tmp_type"] ?? null), [0 => "image_list_radio", 1 => "image_list_checkbox"])) {
                            // line 316
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["w"] = ((twig_test_empty((($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = ($context["settings"] ?? null)) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e["image_size_width"] ?? null) : null))) ? (20) : (twig_number_format_filter($this->env, (($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = ($context["settings"] ?? null)) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81["image_size_width"] ?? null) : null))));
                            // line 317
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["h"] = ((twig_test_empty((($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = ($context["settings"] ?? null)) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d["image_size_height"] ?? null) : null))) ? (20) : (twig_number_format_filter($this->env, (($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 = ($context["settings"] ?? null)) && is_array($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786) || $__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 instanceof ArrayAccess ? ($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786["image_size_height"] ?? null) : null))));
                            // line 318
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo (($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 = $context["option"]) && is_array($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4) || $__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 instanceof ArrayAccess ? ($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4["label"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 320
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo (($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 = $context["option"]) && is_array($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1) || $__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 instanceof ArrayAccess ? ($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1["label"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 322
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb-as-td mfilter-col-count\"><span class=\"mfilter-counter\">0</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 325
                        echo (((($context["_position"] ?? null) == "content_top")) ? ("</div>") : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 327
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc =                 // line 329
$context["filter"]) && is_array($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc) || $__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc instanceof ArrayAccess ? ($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc["type"] ?? null) : null) == "vehicles")) {
                    // line 330
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-select mfilter-vehicles\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 332
                    $context["kk"] = 0;
                    // line 333
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 = $context["filter"]) && is_array($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6) || $__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 instanceof ArrayAccess ? ($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6["options"] ?? null) : null));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 334
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mf_selectpicker\" data-type=\"vehicle-";
                        echo $context["k"];
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 335
                        if ( !twig_test_empty((($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 = (($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 = $context["filter"]) && is_array($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9) || $__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 instanceof ArrayAccess ? ($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9["labels"] ?? null) : null)) && is_array($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181) || $__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 instanceof ArrayAccess ? ($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181[$context["k"]] ?? null) : null))) {
                            // line 336
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                            echo (($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af = (($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab = $context["filter"]) && is_array($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab) || $__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab instanceof ArrayAccess ? ($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab["labels"] ?? null) : null)) && is_array($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af) || $__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af instanceof ArrayAccess ? ($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af[$context["k"]] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 338
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                            echo ($context["text_select"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 340
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["option_id"] => $context["option"]) {
                            // line 341
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-select-";
                            // line 342
                            echo ($context["_idx"] ?? null);
                            echo "-";
                            echo ($context["base_id"] ?? null);
                            echo "-";
                            echo (($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 = $context["option"]) && is_array($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94) || $__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 instanceof ArrayAccess ? ($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94["key"] ?? null) : null);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 343
                            echo twig_replace_filter((($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c = $context["option"]) && is_array($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c) || $__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c instanceof ArrayAccess ? ($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c["value"] ?? null) : null), ["\"" => "&quot;"]);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-name=\"";
                            // line 344
                            echo (($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd = $context["option"]) && is_array($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd) || $__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd instanceof ArrayAccess ? ($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd["name"] ?? null) : null);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-total=\"";
                            // line 345
                            echo (((($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 = $context["option"]) && is_array($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0) || $__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 instanceof ArrayAccess ? ($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0["total"] ?? null) : null)) ? ((($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b = $context["option"]) && is_array($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b) || $__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b instanceof ArrayAccess ? ($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b["total"] ?? null) : null)) : (""));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 346
                            echo (((( !twig_test_empty((($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 = ($context["params"] ?? null)) && is_array($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070) || $__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 instanceof ArrayAccess ? ($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070[(($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf = $context["filter"]) && is_array($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf) || $__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf instanceof ArrayAccess ? ($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf["seo_name"] ?? null) : null)] ?? null) : null)) && (($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e = (($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 = ($context["params"] ?? null)) && is_array($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4) || $__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 instanceof ArrayAccess ? ($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4[(($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 = $context["filter"]) && is_array($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825) || $__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 instanceof ArrayAccess ? ($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825["seo_name"] ?? null) : null)] ?? null) : null)) && is_array($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e) || $__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e instanceof ArrayAccess ? ($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e[($context["kk"] ?? null)] ?? null) : null)) && ((($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 = $context["option"]) && is_array($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308) || $__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 instanceof ArrayAccess ? ($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308["value"] ?? null) : null) == (($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb = (($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 = ($context["params"] ?? null)) && is_array($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7) || $__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 instanceof ArrayAccess ? ($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7[(($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 = $context["filter"]) && is_array($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9) || $__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 instanceof ArrayAccess ? ($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9["seo_name"] ?? null) : null)] ?? null) : null)) && is_array($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb) || $__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb instanceof ArrayAccess ? ($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb[($context["kk"] ?? null)] ?? null) : null)))) ? (" selected=\"selected\"") : (""));
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 347
                            if ( !twig_test_empty((($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 = $context["option"]) && is_array($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446) || $__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 instanceof ArrayAccess ? ($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446["image"] ?? null) : null))) {
                                // line 348
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-image=\"";
                                echo (($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d = $context["option"]) && is_array($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d) || $__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d instanceof ArrayAccess ? ($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d["image"] ?? null) : null);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 350
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            echo (($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e = $context["option"]) && is_array($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e) || $__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e instanceof ArrayAccess ? ($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e["name"] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 352
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 353
                        $context["kk"] = (($context["kk"] ?? null) + 1);
                        // line 354
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 355
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f =                 // line 357
$context["filter"]) && is_array($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f) || $__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f instanceof ArrayAccess ? ($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f["type"] ?? null) : null) == "levels")) {
                    // line 358
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-select mfilter-levels\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 360
                    $context["kk"] = 0;
                    // line 361
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 = $context["filter"]) && is_array($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996) || $__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 instanceof ArrayAccess ? ($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996["options"] ?? null) : null));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 362
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mf_selectpicker\" data-type=\"level-";
                        echo $context["k"];
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 363
                        if ( !twig_test_empty((($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 = (($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae = $context["filter"]) && is_array($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae) || $__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae instanceof ArrayAccess ? ($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae["labels"] ?? null) : null)) && is_array($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330) || $__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 instanceof ArrayAccess ? ($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330[$context["k"]] ?? null) : null))) {
                            // line 364
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                            echo (($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 = (($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 = $context["filter"]) && is_array($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26) || $__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 instanceof ArrayAccess ? ($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26["labels"] ?? null) : null)) && is_array($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409) || $__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 instanceof ArrayAccess ? ($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409[$context["k"]] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 366
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                            echo ($context["text_select"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 368
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["v"]);
                        foreach ($context['_seq'] as $context["option_id"] => $context["option"]) {
                            // line 369
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-select-";
                            // line 370
                            echo ($context["_idx"] ?? null);
                            echo "-";
                            echo ($context["base_id"] ?? null);
                            echo "-";
                            echo (($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d = $context["option"]) && is_array($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d) || $__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d instanceof ArrayAccess ? ($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d["key"] ?? null) : null);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 371
                            echo twig_replace_filter((($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 = $context["option"]) && is_array($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408) || $__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 instanceof ArrayAccess ? ($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408["value"] ?? null) : null), ["\"" => "&quot;"]);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-name=\"";
                            // line 372
                            echo (($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 = $context["option"]) && is_array($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0) || $__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 instanceof ArrayAccess ? ($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0["name"] ?? null) : null);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-total=\"";
                            // line 373
                            echo (((($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b = $context["option"]) && is_array($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b) || $__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b instanceof ArrayAccess ? ($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b["total"] ?? null) : null)) ? ((($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 = $context["option"]) && is_array($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084) || $__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 instanceof ArrayAccess ? ($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084["total"] ?? null) : null)) : (""));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 374
                            echo (((( !twig_test_empty((($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb = ($context["params"] ?? null)) && is_array($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb) || $__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb instanceof ArrayAccess ? ($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb[(($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b = $context["filter"]) && is_array($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b) || $__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b instanceof ArrayAccess ? ($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b["seo_name"] ?? null) : null)] ?? null) : null)) && (($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 = (($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 = ($context["params"] ?? null)) && is_array($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698) || $__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 instanceof ArrayAccess ? ($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698[(($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f = $context["filter"]) && is_array($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f) || $__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f instanceof ArrayAccess ? ($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f["seo_name"] ?? null) : null)] ?? null) : null)) && is_array($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9) || $__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 instanceof ArrayAccess ? ($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9[($context["kk"] ?? null)] ?? null) : null)) && ((($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 = $context["option"]) && is_array($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1) || $__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 instanceof ArrayAccess ? ($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1["value"] ?? null) : null) == (($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a = (($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c = ($context["params"] ?? null)) && is_array($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c) || $__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c instanceof ArrayAccess ? ($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c[(($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 = $context["filter"]) && is_array($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7) || $__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 instanceof ArrayAccess ? ($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7["seo_name"] ?? null) : null)] ?? null) : null)) && is_array($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a) || $__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a instanceof ArrayAccess ? ($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a[($context["kk"] ?? null)] ?? null) : null)))) ? (" selected=\"selected\"") : (""));
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 375
                            if ( !twig_test_empty((($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 = $context["option"]) && is_array($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351) || $__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 instanceof ArrayAccess ? ($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351["image"] ?? null) : null))) {
                                // line 376
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-image=\"";
                                echo (($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 = $context["option"]) && is_array($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15) || $__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 instanceof ArrayAccess ? ($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15["image"] ?? null) : null);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 378
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            echo (($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f = $context["option"]) && is_array($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f) || $__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f instanceof ArrayAccess ? ($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f["name"] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 380
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 381
                        $context["kk"] = (($context["kk"] ?? null) + 1);
                        // line 382
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 383
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40 =                 // line 385
$context["filter"]) && is_array($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40) || $__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40 instanceof ArrayAccess ? ($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40["type"] ?? null) : null) == "select")) {
                    // line 386
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-option mfilter-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 389
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 390
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8 = $context["filter"]) && is_array($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8) || $__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8 instanceof ArrayAccess ? ($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8["options"] ?? null) : null));
                    foreach ($context['_seq'] as $context["option_id"] => $context["option"]) {
                        // line 391
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-select-";
                        // line 392
                        echo ($context["_idx"] ?? null);
                        echo "-";
                        echo ($context["base_id"] ?? null);
                        echo "-";
                        echo (($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316 = $context["option"]) && is_array($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316) || $__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316 instanceof ArrayAccess ? ($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316["key"] ?? null) : null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 393
                        echo twig_replace_filter((($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68 = $context["option"]) && is_array($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68) || $__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68 instanceof ArrayAccess ? ($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68["value"] ?? null) : null), ["\"" => "&quot;"]);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-name=\"";
                        // line 394
                        echo (($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3 = $context["option"]) && is_array($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3) || $__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3 instanceof ArrayAccess ? ($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3["name"] ?? null) : null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 395
                        echo ((( !twig_test_empty((($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267 = ($context["params"] ?? null)) && is_array($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267) || $__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267 instanceof ArrayAccess ? ($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267[(($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d = $context["filter"]) && is_array($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d) || $__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d instanceof ArrayAccess ? ($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d["seo_name"] ?? null) : null)] ?? null) : null)) && twig_in_filter((($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f = $context["option"]) && is_array($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f) || $__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f instanceof ArrayAccess ? ($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f["value"] ?? null) : null), (($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768 = ($context["params"] ?? null)) && is_array($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768) || $__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768 instanceof ArrayAccess ? ($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768[(($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a = $context["filter"]) && is_array($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a) || $__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a instanceof ArrayAccess ? ($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a["seo_name"] ?? null) : null)] ?? null) : null)))) ? (" selected=\"selected\"") : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                        // line 396
                        echo (($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18 = $context["option"]) && is_array($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18) || $__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18 instanceof ArrayAccess ? ($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 398
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter((($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea =                 // line 401
$context["filter"]) && is_array($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea) || $__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea instanceof ArrayAccess ? ($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea["type"] ?? null) : null), [0 => "image", 1 => "image_radio"])) {
                    // line 402
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-options-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mfilter-tb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 405
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052 = $context["filter"]) && is_array($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052) || $__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052 instanceof ArrayAccess ? ($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052["options"] ?? null) : null));
                    foreach ($context['_seq'] as $context["option_id"] => $context["option"]) {
                        // line 406
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mfilter-option mfilter-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"mfilter-opts-attribs-";
                        // line 408
                        echo ($context["_idx"] ?? null);
                        echo "-";
                        echo ($context["base_id"] ?? null);
                        echo "-";
                        echo (($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766 = $context["option"]) && is_array($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766) || $__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766 instanceof ArrayAccess ? ($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766["key"] ?? null) : null);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"";
                        // line 409
                        echo (($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16 = $context["filter"]) && is_array($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16) || $__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16 instanceof ArrayAccess ? ($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16["seo_name"] ?? null) : null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"";
                        // line 410
                        echo ((((($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998 = $context["filter"]) && is_array($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998) || $__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998 instanceof ArrayAccess ? ($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998["type"] ?? null) : null) == "image")) ? ("checkbox") : ("radio"));
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display:none\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 412
                        echo ((( !twig_test_empty((($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d = ($context["params"] ?? null)) && is_array($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d) || $__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d instanceof ArrayAccess ? ($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d[(($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb = $context["filter"]) && is_array($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb) || $__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb instanceof ArrayAccess ? ($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb["seo_name"] ?? null) : null)] ?? null) : null)) && (twig_in_filter((($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584 = $context["option"]) && is_array($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584) || $__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584 instanceof ArrayAccess ? ($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584["value"] ?? null) : null), (($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4 = ($context["params"] ?? null)) && is_array($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4) || $__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4 instanceof ArrayAccess ? ($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4[(($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777 = $context["filter"]) && is_array($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777) || $__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777 instanceof ArrayAccess ? ($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777["seo_name"] ?? null) : null)] ?? null) : null)) || twig_in_filter((($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0 = $context["option"]) && is_array($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0) || $__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0 instanceof ArrayAccess ? ($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0["key"] ?? null) : null), (($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727 = ($context["params"] ?? null)) && is_array($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727) || $__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727 instanceof ArrayAccess ? ($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727[(($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834 = $context["filter"]) && is_array($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834) || $__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834 instanceof ArrayAccess ? ($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834["seo_name"] ?? null) : null)] ?? null) : null))))) ? (" checked=\"checked\"") : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 413
                        echo twig_replace_filter((($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5 = $context["option"]) && is_array($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5) || $__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5 instanceof ArrayAccess ? ($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5["value"] ?? null) : null), ["\"" => "&quot;"]);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"mfilter-opts-attribs-";
                        // line 414
                        echo ($context["_idx"] ?? null);
                        echo "-";
                        echo ($context["base_id"] ?? null);
                        echo "-";
                        echo (($__internal_23461e0e4984a2eb0fed4b90cb0344d8c51f61050ea9af4f7083eb7f2ea90452 = $context["option"]) && is_array($__internal_23461e0e4984a2eb0fed4b90cb0344d8c51f61050ea9af4f7083eb7f2ea90452) || $__internal_23461e0e4984a2eb0fed4b90cb0344d8c51f61050ea9af4f7083eb7f2ea90452 instanceof ArrayAccess ? ($__internal_23461e0e4984a2eb0fed4b90cb0344d8c51f61050ea9af4f7083eb7f2ea90452["key"] ?? null) : null);
                        echo "\" title=\"";
                        echo (($__internal_dbd15bc5fa55fd4d250df7010a0c5825bb9aa7750495542417887f4417c0ac93 = $context["option"]) && is_array($__internal_dbd15bc5fa55fd4d250df7010a0c5825bb9aa7750495542417887f4417c0ac93) || $__internal_dbd15bc5fa55fd4d250df7010a0c5825bb9aa7750495542417887f4417c0ac93 instanceof ArrayAccess ? ($__internal_dbd15bc5fa55fd4d250df7010a0c5825bb9aa7750495542417887f4417c0ac93["name"] ?? null) : null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 415
                        echo (($__internal_fd64a930b0e9c0b02a2d61bbaa0ba6ba24cefb14d851328b69201ef4500dcbe0 = $context["option"]) && is_array($__internal_fd64a930b0e9c0b02a2d61bbaa0ba6ba24cefb14d851328b69201ef4500dcbe0) || $__internal_fd64a930b0e9c0b02a2d61bbaa0ba6ba24cefb14d851328b69201ef4500dcbe0 instanceof ArrayAccess ? ($__internal_fd64a930b0e9c0b02a2d61bbaa0ba6ba24cefb14d851328b69201ef4500dcbe0["label"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 419
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 423
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mfilter-clearfix\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mfilter-clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 433
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key_group'], $context['gfilter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        echo "\t\t</ul>
\t\t";
        // line 435
        echo (($__internal_fec47a4f10ac9f3da75d681d729bf1a57a27b279b5cc771769bb059673cb18b1 = ($context["buttons"] ?? null)) && is_array($__internal_fec47a4f10ac9f3da75d681d729bf1a57a27b279b5cc771769bb059673cb18b1) || $__internal_fec47a4f10ac9f3da75d681d729bf1a57a27b279b5cc771769bb059673cb18b1 instanceof ArrayAccess ? ($__internal_fec47a4f10ac9f3da75d681d729bf1a57a27b279b5cc771769bb059673cb18b1["bottom"] ?? null) : null);
        echo "
\t</div>
</div>
";
        // line 438
        if ( !twig_test_empty(($context["hide_container"] ?? null))) {
            // line 439
            echo "\t</div>
";
        }
        // line 441
        echo "
<script type=\"text/javascript\">
\tMegaFilterLang.text_display = '";
        // line 443
        echo ($context["text_display"] ?? null);
        echo "';
\tMegaFilterLang.text_list\t= '";
        // line 444
        echo ($context["text_list"] ?? null);
        echo "';
\tMegaFilterLang.text_grid\t= '";
        // line 445
        echo ($context["text_grid"] ?? null);
        echo "';
\tMegaFilterLang.text_select\t= '";
        // line 446
        echo ($context["text_select"] ?? null);
        echo "';
\t
\tif( typeof MegaFilterOverrideFn == 'undefined' ) {
\t\tvar MegaFilterOverrideFn = {};
\t}
\t
\tif( typeof MegaFilterCommonData == 'undefined' ) {
\t\tvar MegaFilterCommonData = {};
\t}
\t
\tMegaFilterCommonData.seo = {
\t\t'currentUrl' : '";
        // line 457
        echo ($context["current_url"] ?? null);
        echo "',
\t\t'aliases' : ";
        // line 458
        echo ($context["aliases"] ?? null);
        echo "
\t};
\t
\tMegaFilterCommonData.swipe = {
\t\t'threshold' : ";
        // line 462
        echo twig_number_format_filter($this->env, (($__internal_52e779c9aa70e56e92aba2ce631519b7ea3c549e9a38275eb12d9ae0e739aead = ($context["settings"] ?? null)) && is_array($__internal_52e779c9aa70e56e92aba2ce631519b7ea3c549e9a38275eb12d9ae0e739aead) || $__internal_52e779c9aa70e56e92aba2ce631519b7ea3c549e9a38275eb12d9ae0e739aead instanceof ArrayAccess ? ($__internal_52e779c9aa70e56e92aba2ce631519b7ea3c549e9a38275eb12d9ae0e739aead["swipe_threshold"] ?? null) : null), 0, ".", "");
        echo ",
\t\t'cancel_threshold' : ";
        // line 463
        echo twig_number_format_filter($this->env, (($__internal_84ff5c771dc55fdef1612fefde5f1fe7e33c7ab438f9a3dbd51f0685a49bc4df = ($context["settings"] ?? null)) && is_array($__internal_84ff5c771dc55fdef1612fefde5f1fe7e33c7ab438f9a3dbd51f0685a49bc4df) || $__internal_84ff5c771dc55fdef1612fefde5f1fe7e33c7ab438f9a3dbd51f0685a49bc4df instanceof ArrayAccess ? ($__internal_84ff5c771dc55fdef1612fefde5f1fe7e33c7ab438f9a3dbd51f0685a49bc4df["swipe_cancel_threshold"] ?? null) : null), 0, ".", "");
        echo "
\t};
\t
\tif( typeof MegaFilterOverrideFn['";
        // line 466
        echo ($context["_idx"] ?? null);
        echo "'] == 'undefined' ) {
\t\tMegaFilterOverrideFn['";
        // line 467
        echo ($context["_idx"] ?? null);
        echo "'] = {};
\t}
\t
\t";
        // line 470
        if ( !twig_test_empty((($__internal_f6b0776750f3d220ac01b19f59b2064d7770dad7178265aa7488a2c16630e28c = ($context["settings"] ?? null)) && is_array($__internal_f6b0776750f3d220ac01b19f59b2064d7770dad7178265aa7488a2c16630e28c) || $__internal_f6b0776750f3d220ac01b19f59b2064d7770dad7178265aa7488a2c16630e28c instanceof ArrayAccess ? ($__internal_f6b0776750f3d220ac01b19f59b2064d7770dad7178265aa7488a2c16630e28c["javascript"] ?? null) : null))) {
            // line 471
            echo "\t\t";
            echo (($__internal_056c7499edfd6e62528c71d6d383ff6c68e63569236c9d750707056880be53d0 = ($context["settings"] ?? null)) && is_array($__internal_056c7499edfd6e62528c71d6d383ff6c68e63569236c9d750707056880be53d0) || $__internal_056c7499edfd6e62528c71d6d383ff6c68e63569236c9d750707056880be53d0 instanceof ArrayAccess ? ($__internal_056c7499edfd6e62528c71d6d383ff6c68e63569236c9d750707056880be53d0["javascript"] ?? null) : null);
            echo "
\t";
        }
        // line 473
        echo "
\tjQuery().ready(function(){\t\t\t
\t\tjQuery('#mfilter-box-";
        // line 475
        echo ($context["_idx"] ?? null);
        echo "').each(function(){
\t\t\tvar _t = jQuery(this).addClass('init'),
\t\t\t\t_p = { };
\t\t\t
\t\t\tfor( var i = 0; i < MegaFilterINSTANCES.length; i++ ) {
\t\t\t\tif( _t.attr('id') == MegaFilterINSTANCES[i]._box.attr('id') ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["requestGet"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 486
            echo "\t\t\t\t_p['";
            echo $context["k"];
            echo "'] = '";
            echo $context["v"];
            echo "';
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "\t\t\t
\t\t\tvar mfpModule = new MegaFilter();
\t\t\t
\t\t\tif( typeof MegaFilterOverrideFn['";
        // line 491
        echo ($context["_idx"] ?? null);
        echo "'] != 'undefined' ) {
\t\t\t\tfor( var i in MegaFilterOverrideFn['";
        // line 492
        echo ($context["_idx"] ?? null);
        echo "'] ) {
\t\t\t\t\tmfpModule[i] = MegaFilterOverrideFn['";
        // line 493
        echo ($context["_idx"] ?? null);
        echo "'][i];
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\tMegaFilterINSTANCES.push(mfpModule.init( _t, {
\t\t\t\t'idx'\t\t\t\t\t: '";
        // line 498
        echo ($context["_idx"] ?? null);
        echo "',
\t\t\t\t'route'\t\t\t\t\t: '";
        // line 499
        echo ($context["_route"] ?? null);
        echo "',
\t\t\t\t'routeProduct'\t\t\t: '";
        // line 500
        echo ($context["_routeProduct"] ?? null);
        echo "',
\t\t\t\t'routeHome'\t\t\t\t: '";
        // line 501
        echo ($context["_routeHome"] ?? null);
        echo "',
\t\t\t\t'routeCategory'\t\t\t: '";
        // line 502
        echo ($context["_routeCategory"] ?? null);
        echo "',
\t\t\t\t'routeInformation'\t\t: '";
        // line 503
        echo ($context["_routeInformation"] ?? null);
        echo "',
\t\t\t\t'contentSelector'\t\t: '";
        // line 504
        echo (($__internal_27c099a62e21a1a33c28ee65c6461204b361ffd59fcec961bb43c2de8bb6c9e5 = ($context["settings"] ?? null)) && is_array($__internal_27c099a62e21a1a33c28ee65c6461204b361ffd59fcec961bb43c2de8bb6c9e5) || $__internal_27c099a62e21a1a33c28ee65c6461204b361ffd59fcec961bb43c2de8bb6c9e5 instanceof ArrayAccess ? ($__internal_27c099a62e21a1a33c28ee65c6461204b361ffd59fcec961bb43c2de8bb6c9e5["content_selector"] ?? null) : null);
        echo "',
\t\t\t\t'contentSelectorH1'\t\t: '";
        // line 505
        echo (($__internal_ce4445a8e32fef1da30093bd6c3614f6829c4ab9fe79b1ef2ce54ee9e9c8140b = ($context["settings"] ?? null)) && is_array($__internal_ce4445a8e32fef1da30093bd6c3614f6829c4ab9fe79b1ef2ce54ee9e9c8140b) || $__internal_ce4445a8e32fef1da30093bd6c3614f6829c4ab9fe79b1ef2ce54ee9e9c8140b instanceof ArrayAccess ? ($__internal_ce4445a8e32fef1da30093bd6c3614f6829c4ab9fe79b1ef2ce54ee9e9c8140b["content_selector_h1"] ?? null) : null);
        echo "',
\t\t\t\t'contentSelectorPagination'\t: '";
        // line 506
        echo (($__internal_855c56057f38a150dfda2921516fec2df0048165ef18d66a04709f328e28bfee = ($context["settings"] ?? null)) && is_array($__internal_855c56057f38a150dfda2921516fec2df0048165ef18d66a04709f328e28bfee) || $__internal_855c56057f38a150dfda2921516fec2df0048165ef18d66a04709f328e28bfee instanceof ArrayAccess ? ($__internal_855c56057f38a150dfda2921516fec2df0048165ef18d66a04709f328e28bfee["content_selector_pagination"] ?? null) : null);
        echo "',
\t\t\t\t'contentSelectorProduct': '";
        // line 507
        echo (($__internal_2445eec35658789fc4b26b193fe24ffe662f4971964712f50ad973f1cf8de346 = ($context["settings"] ?? null)) && is_array($__internal_2445eec35658789fc4b26b193fe24ffe662f4971964712f50ad973f1cf8de346) || $__internal_2445eec35658789fc4b26b193fe24ffe662f4971964712f50ad973f1cf8de346 instanceof ArrayAccess ? ($__internal_2445eec35658789fc4b26b193fe24ffe662f4971964712f50ad973f1cf8de346["content_selector_product"] ?? null) : null);
        echo "',
\t\t\t\t'infiniteScroll'\t\t: ";
        // line 508
        echo (($__internal_0909cb78373d32bb2fabb31111cf2b704907ff835998829ebb224041e6c45b34 = ($context["settings"] ?? null)) && is_array($__internal_0909cb78373d32bb2fabb31111cf2b704907ff835998829ebb224041e6c45b34) || $__internal_0909cb78373d32bb2fabb31111cf2b704907ff835998829ebb224041e6c45b34 instanceof ArrayAccess ? ($__internal_0909cb78373d32bb2fabb31111cf2b704907ff835998829ebb224041e6c45b34["infinite_scroll"] ?? null) : null);
        echo ",
\t\t\t\t'refreshResults'\t\t: '";
        // line 509
        echo (($__internal_7324cffb3c8118d48406359e46c8a03024b9a4e0374d69a30e574ed143e0a286 = ($context["settings"] ?? null)) && is_array($__internal_7324cffb3c8118d48406359e46c8a03024b9a4e0374d69a30e574ed143e0a286) || $__internal_7324cffb3c8118d48406359e46c8a03024b9a4e0374d69a30e574ed143e0a286 instanceof ArrayAccess ? ($__internal_7324cffb3c8118d48406359e46c8a03024b9a4e0374d69a30e574ed143e0a286["refresh_results"] ?? null) : null);
        echo "',
\t\t\t\t'refreshDelay'\t\t\t: ";
        // line 510
        echo (($__internal_0e88cee38cd4dd33afa15a9af89a57be3821eef8b1f069d021420ec8b90d555b = ($context["settings"] ?? null)) && is_array($__internal_0e88cee38cd4dd33afa15a9af89a57be3821eef8b1f069d021420ec8b90d555b) || $__internal_0e88cee38cd4dd33afa15a9af89a57be3821eef8b1f069d021420ec8b90d555b instanceof ArrayAccess ? ($__internal_0e88cee38cd4dd33afa15a9af89a57be3821eef8b1f069d021420ec8b90d555b["refresh_delay"] ?? null) : null);
        echo ",
\t\t\t\t'usingButtonWithCountInfo' : ";
        // line 511
        echo (($__internal_9311b0bde180a82210b06f25635a7208ea1d5b5b6b77bd4e3194d54f01e96ff2 = ($context["settings"] ?? null)) && is_array($__internal_9311b0bde180a82210b06f25635a7208ea1d5b5b6b77bd4e3194d54f01e96ff2) || $__internal_9311b0bde180a82210b06f25635a7208ea1d5b5b6b77bd4e3194d54f01e96ff2 instanceof ArrayAccess ? ($__internal_9311b0bde180a82210b06f25635a7208ea1d5b5b6b77bd4e3194d54f01e96ff2["using_button_with_count_info"] ?? null) : null);
        echo ",
\t\t\t\t'autoScroll'\t\t\t: ";
        // line 512
        echo (($__internal_d11be295afc2b72b1e0005bf97c42f77091f6994382af9889c739d7eb8eedac2 = ($context["settings"] ?? null)) && is_array($__internal_d11be295afc2b72b1e0005bf97c42f77091f6994382af9889c739d7eb8eedac2) || $__internal_d11be295afc2b72b1e0005bf97c42f77091f6994382af9889c739d7eb8eedac2 instanceof ArrayAccess ? ($__internal_d11be295afc2b72b1e0005bf97c42f77091f6994382af9889c739d7eb8eedac2["auto_scroll_to_results"] ?? null) : null);
        echo ",
\t\t\t\t'ajaxGetInfoUrl'\t\t: '";
        // line 513
        echo ($context["ajaxGetInfoUrl"] ?? null);
        echo "',
\t\t\t\t'ajaxResultsUrl'\t\t: '";
        // line 514
        echo ($context["ajaxResultsUrl"] ?? null);
        echo "',
\t\t\t\t'ajaxGetCategoryUrl'\t: '";
        // line 515
        echo ($context["ajaxGetCategoryUrl"] ?? null);
        echo "',
\t\t\t\t'priceMin'\t\t\t\t: ";
        // line 516
        echo (($__internal_bfa1f53ee2f2601d162c93a9df6916db17382a8e7793ba748f02c5455bbbaafc = ($context["price"] ?? null)) && is_array($__internal_bfa1f53ee2f2601d162c93a9df6916db17382a8e7793ba748f02c5455bbbaafc) || $__internal_bfa1f53ee2f2601d162c93a9df6916db17382a8e7793ba748f02c5455bbbaafc instanceof ArrayAccess ? ($__internal_bfa1f53ee2f2601d162c93a9df6916db17382a8e7793ba748f02c5455bbbaafc["min"] ?? null) : null);
        echo ", 
\t\t\t\t'priceMax'\t\t\t\t: ";
        // line 517
        echo (($__internal_2fa754ce33b3fc2b993000194080ed2a5d1defe40824bf02c6b8e3f77167a486 = ($context["price"] ?? null)) && is_array($__internal_2fa754ce33b3fc2b993000194080ed2a5d1defe40824bf02c6b8e3f77167a486) || $__internal_2fa754ce33b3fc2b993000194080ed2a5d1defe40824bf02c6b8e3f77167a486 instanceof ArrayAccess ? ($__internal_2fa754ce33b3fc2b993000194080ed2a5d1defe40824bf02c6b8e3f77167a486["max"] ?? null) : null);
        echo ",
\t\t\t\t'mijoshop'\t\t\t\t: ";
        // line 518
        echo (($__internal_a4ee524baf6d8d90f1b72588380ceb54f4b719dfc64cdae40760fd2981879cd7 = ($context["settings"] ?? null)) && is_array($__internal_a4ee524baf6d8d90f1b72588380ceb54f4b719dfc64cdae40760fd2981879cd7) || $__internal_a4ee524baf6d8d90f1b72588380ceb54f4b719dfc64cdae40760fd2981879cd7 instanceof ArrayAccess ? ($__internal_a4ee524baf6d8d90f1b72588380ceb54f4b719dfc64cdae40760fd2981879cd7["mijo_shop"] ?? null) : null);
        echo ",
\t\t\t\t'joo_cart'\t\t\t\t: ";
        // line 519
        echo (($__internal_e0c5671aa0a0c8ec204164b7720186c5ec9bc96c4547eb9c4337fbedfd09d212 = ($context["settings"] ?? null)) && is_array($__internal_e0c5671aa0a0c8ec204164b7720186c5ec9bc96c4547eb9c4337fbedfd09d212) || $__internal_e0c5671aa0a0c8ec204164b7720186c5ec9bc96c4547eb9c4337fbedfd09d212 instanceof ArrayAccess ? ($__internal_e0c5671aa0a0c8ec204164b7720186c5ec9bc96c4547eb9c4337fbedfd09d212["joo_cart"] ?? null) : null);
        echo ",
\t\t\t\t'jcart'\t\t\t\t\t: ";
        // line 520
        echo ($context["jcart"] ?? null);
        echo ",
\t\t\t\t'showNumberOfProducts'\t: ";
        // line 521
        echo (($__internal_8b923871b8c08926feab47de799e8e61c70cd2a28eb34a7168d2fb40f555cd74 = ($context["settings"] ?? null)) && is_array($__internal_8b923871b8c08926feab47de799e8e61c70cd2a28eb34a7168d2fb40f555cd74) || $__internal_8b923871b8c08926feab47de799e8e61c70cd2a28eb34a7168d2fb40f555cd74 instanceof ArrayAccess ? ($__internal_8b923871b8c08926feab47de799e8e61c70cd2a28eb34a7168d2fb40f555cd74["show_number_of_products"] ?? null) : null);
        echo ",
\t\t\t\t'calculateNumberOfProducts' : ";
        // line 522
        echo (($__internal_bfe3abf533217dfbce2eda3f1570ed9f8f02e50cdf085b59040bc879c98c0826 = ($context["settings"] ?? null)) && is_array($__internal_bfe3abf533217dfbce2eda3f1570ed9f8f02e50cdf085b59040bc879c98c0826) || $__internal_bfe3abf533217dfbce2eda3f1570ed9f8f02e50cdf085b59040bc879c98c0826 instanceof ArrayAccess ? ($__internal_bfe3abf533217dfbce2eda3f1570ed9f8f02e50cdf085b59040bc879c98c0826["calculate_number_of_products"] ?? null) : null);
        echo ",
\t\t\t\t'calculateNumberOfProductsForSliders' : ";
        // line 523
        echo (($__internal_7d5376b887d02a2b4d1ff71beb1397a58056e37181b4df0301e73c26225ee22f = ($context["settings"] ?? null)) && is_array($__internal_7d5376b887d02a2b4d1ff71beb1397a58056e37181b4df0301e73c26225ee22f) || $__internal_7d5376b887d02a2b4d1ff71beb1397a58056e37181b4df0301e73c26225ee22f instanceof ArrayAccess ? ($__internal_7d5376b887d02a2b4d1ff71beb1397a58056e37181b4df0301e73c26225ee22f["calculate_number_of_products_for_sliders"] ?? null) : null);
        echo ",
\t\t\t\t'addPixelsFromTop'\t\t: ";
        // line 524
        echo (($__internal_bbff41d3b1ab4bdf3cb5f2f62ece1c207f1d24687db89af55bfa91539c29c4a0 = ($context["settings"] ?? null)) && is_array($__internal_bbff41d3b1ab4bdf3cb5f2f62ece1c207f1d24687db89af55bfa91539c29c4a0) || $__internal_bbff41d3b1ab4bdf3cb5f2f62ece1c207f1d24687db89af55bfa91539c29c4a0 instanceof ArrayAccess ? ($__internal_bbff41d3b1ab4bdf3cb5f2f62ece1c207f1d24687db89af55bfa91539c29c4a0["add_pixels_from_top"] ?? null) : null);
        echo ",
\t\t\t\t'displayListOfItems'\t: {
\t\t\t\t\t'type'\t\t\t\t: '";
        // line 526
        echo (($__internal_3b2378b492d2efb4f7407fc14b7b7292ffe424fdc7d064f25796958b6bb408fa = (($__internal_375990494d428e65ee24b3a017d9fcf0d4cc766da156ac09dbe69a05868dba7d = ($context["mfp_options"] ?? null)) && is_array($__internal_375990494d428e65ee24b3a017d9fcf0d4cc766da156ac09dbe69a05868dba7d) || $__internal_375990494d428e65ee24b3a017d9fcf0d4cc766da156ac09dbe69a05868dba7d instanceof ArrayAccess ? ($__internal_375990494d428e65ee24b3a017d9fcf0d4cc766da156ac09dbe69a05868dba7d["display_list_of_items"] ?? null) : null)) && is_array($__internal_3b2378b492d2efb4f7407fc14b7b7292ffe424fdc7d064f25796958b6bb408fa) || $__internal_3b2378b492d2efb4f7407fc14b7b7292ffe424fdc7d064f25796958b6bb408fa instanceof ArrayAccess ? ($__internal_3b2378b492d2efb4f7407fc14b7b7292ffe424fdc7d064f25796958b6bb408fa["type"] ?? null) : null);
        echo "',
\t\t\t\t\t'limit_of_items'\t: ";
        // line 527
        echo (($__internal_99fcf5862a89531d1ae1ec2acf9a28ff8d4de5b3b3fb67ad13a378c347ac36af = (($__internal_73974dadd3d68b6c8d39d085eacda0edc1e3801b388ee97733918ad259fd7836 = ($context["mfp_options"] ?? null)) && is_array($__internal_73974dadd3d68b6c8d39d085eacda0edc1e3801b388ee97733918ad259fd7836) || $__internal_73974dadd3d68b6c8d39d085eacda0edc1e3801b388ee97733918ad259fd7836 instanceof ArrayAccess ? ($__internal_73974dadd3d68b6c8d39d085eacda0edc1e3801b388ee97733918ad259fd7836["display_list_of_items"] ?? null) : null)) && is_array($__internal_99fcf5862a89531d1ae1ec2acf9a28ff8d4de5b3b3fb67ad13a378c347ac36af) || $__internal_99fcf5862a89531d1ae1ec2acf9a28ff8d4de5b3b3fb67ad13a378c347ac36af instanceof ArrayAccess ? ($__internal_99fcf5862a89531d1ae1ec2acf9a28ff8d4de5b3b3fb67ad13a378c347ac36af["limit_of_items"] ?? null) : null);
        echo ",
\t\t\t\t\t'maxHeight'\t\t\t: ";
        // line 528
        echo (($__internal_e015e935c762d1eb34d91617d7b9bf13fb05dbd6f79ee01962ee639ff8852243 = (($__internal_4651f703e2134fbef38acafb09c6aa5fd50299d35aae16b42fd4eb298587187b = ($context["mfp_options"] ?? null)) && is_array($__internal_4651f703e2134fbef38acafb09c6aa5fd50299d35aae16b42fd4eb298587187b) || $__internal_4651f703e2134fbef38acafb09c6aa5fd50299d35aae16b42fd4eb298587187b instanceof ArrayAccess ? ($__internal_4651f703e2134fbef38acafb09c6aa5fd50299d35aae16b42fd4eb298587187b["display_list_of_items"] ?? null) : null)) && is_array($__internal_e015e935c762d1eb34d91617d7b9bf13fb05dbd6f79ee01962ee639ff8852243) || $__internal_e015e935c762d1eb34d91617d7b9bf13fb05dbd6f79ee01962ee639ff8852243 instanceof ArrayAccess ? ($__internal_e015e935c762d1eb34d91617d7b9bf13fb05dbd6f79ee01962ee639ff8852243["max_height"] ?? null) : null);
        echo ",
\t\t\t\t\t'textMore'\t\t\t: '";
        // line 529
        echo ($context["text_show_more"] ?? null);
        echo "',
\t\t\t\t\t'textLess'\t\t\t: '";
        // line 530
        echo ($context["text_show_less"] ?? null);
        echo "',
\t\t\t\t\t'standardScroll'\t: ";
        // line 531
        echo (((($__internal_fc2a652c3e40d967a0f22894f91a6bfb945804b9e12fadadc200e3c75c78d737 = (($__internal_0c7cc0df46799d84d8971d3bc8a7cf2b59aabdcbb61487ef69c48ed8345ebb19 = ($context["mfp_options"] ?? null)) && is_array($__internal_0c7cc0df46799d84d8971d3bc8a7cf2b59aabdcbb61487ef69c48ed8345ebb19) || $__internal_0c7cc0df46799d84d8971d3bc8a7cf2b59aabdcbb61487ef69c48ed8345ebb19 instanceof ArrayAccess ? ($__internal_0c7cc0df46799d84d8971d3bc8a7cf2b59aabdcbb61487ef69c48ed8345ebb19["display_list_of_items"] ?? null) : null)) && is_array($__internal_fc2a652c3e40d967a0f22894f91a6bfb945804b9e12fadadc200e3c75c78d737) || $__internal_fc2a652c3e40d967a0f22894f91a6bfb945804b9e12fadadc200e3c75c78d737 instanceof ArrayAccess ? ($__internal_fc2a652c3e40d967a0f22894f91a6bfb945804b9e12fadadc200e3c75c78d737["standard_scroll"] ?? null) : null)) ? ("true") : ("false"));
        echo "
\t\t\t\t},
\t\t\t\t'smp'\t\t\t\t\t: {
\t\t\t\t\t'isInstalled'\t\t\t: ";
        // line 534
        echo (($__internal_3bc0bda567b0fe27408a65898ca657043f360853758f94a696553cb5513e66aa = ($context["smp"] ?? null)) && is_array($__internal_3bc0bda567b0fe27408a65898ca657043f360853758f94a696553cb5513e66aa) || $__internal_3bc0bda567b0fe27408a65898ca657043f360853758f94a696553cb5513e66aa instanceof ArrayAccess ? ($__internal_3bc0bda567b0fe27408a65898ca657043f360853758f94a696553cb5513e66aa["isInstalled"] ?? null) : null);
        echo ",
\t\t\t\t\t'disableConvertUrls'\t: ";
        // line 535
        echo (($__internal_9d9bde674c6714579bd5b26b7408eba7b25dc7c4462cb78b6315697e13925377 = ($context["smp"] ?? null)) && is_array($__internal_9d9bde674c6714579bd5b26b7408eba7b25dc7c4462cb78b6315697e13925377) || $__internal_9d9bde674c6714579bd5b26b7408eba7b25dc7c4462cb78b6315697e13925377 instanceof ArrayAccess ? ($__internal_9d9bde674c6714579bd5b26b7408eba7b25dc7c4462cb78b6315697e13925377["disableConvertUrls"] ?? null) : null);
        echo "
\t\t\t\t},
\t\t\t\t'params'\t\t\t\t\t: _p,
\t\t\t\t'inStockDefaultSelected'\t: ";
        // line 538
        echo (($__internal_f472cfad152875f81a10f2f047584dcf30c09fe377f6ebc7d249b78b3d99528e = ($context["settings"] ?? null)) && is_array($__internal_f472cfad152875f81a10f2f047584dcf30c09fe377f6ebc7d249b78b3d99528e) || $__internal_f472cfad152875f81a10f2f047584dcf30c09fe377f6ebc7d249b78b3d99528e instanceof ArrayAccess ? ($__internal_f472cfad152875f81a10f2f047584dcf30c09fe377f6ebc7d249b78b3d99528e["in_stock_default_selected"] ?? null) : null);
        echo ",
\t\t\t\t'inStockDefaultSelectedGlobal' : ";
        // line 539
        echo ($context["inStockDefaultSelectedGlobal"] ?? null);
        echo ",
\t\t\t\t'inStockStatus'\t\t\t\t: '";
        // line 540
        echo (($__internal_29a57f21284aae1cbd0b348d5981ae180af68030b2215406388c355cb80003ef = ($context["settings"] ?? null)) && is_array($__internal_29a57f21284aae1cbd0b348d5981ae180af68030b2215406388c355cb80003ef) || $__internal_29a57f21284aae1cbd0b348d5981ae180af68030b2215406388c355cb80003ef instanceof ArrayAccess ? ($__internal_29a57f21284aae1cbd0b348d5981ae180af68030b2215406388c355cb80003ef["in_stock_status"] ?? null) : null);
        echo "',
\t\t\t\t'inStockStatusSelected'\t\t: '";
        // line 541
        echo (($__internal_8c97554727f3eedb226478b75bfe9932f31c8ad874d5ad127b69c236abafe328 = ($context["settings"] ?? null)) && is_array($__internal_8c97554727f3eedb226478b75bfe9932f31c8ad874d5ad127b69c236abafe328) || $__internal_8c97554727f3eedb226478b75bfe9932f31c8ad874d5ad127b69c236abafe328 instanceof ArrayAccess ? ($__internal_8c97554727f3eedb226478b75bfe9932f31c8ad874d5ad127b69c236abafe328["in_stock_status_selected"] ?? null) : null);
        echo "',
\t\t\t\t'showLoaderOverResults'\t\t: ";
        // line 542
        echo (($__internal_cca8ef3c14e6760ec165bc0bbacc7b3278d9e852ca239c6ceb1017a28896939a = ($context["settings"] ?? null)) && is_array($__internal_cca8ef3c14e6760ec165bc0bbacc7b3278d9e852ca239c6ceb1017a28896939a) || $__internal_cca8ef3c14e6760ec165bc0bbacc7b3278d9e852ca239c6ceb1017a28896939a instanceof ArrayAccess ? ($__internal_cca8ef3c14e6760ec165bc0bbacc7b3278d9e852ca239c6ceb1017a28896939a["show_loader_over_results"] ?? null) : null);
        echo ",
\t\t\t\t'showLoaderOverFilter'\t\t: ";
        // line 543
        echo (($__internal_7ffe925cc1bd4d9434b9827407094b01c6c37cc1ee5786b68df3d58a0a47d93a = ($context["settings"] ?? null)) && is_array($__internal_7ffe925cc1bd4d9434b9827407094b01c6c37cc1ee5786b68df3d58a0a47d93a) || $__internal_7ffe925cc1bd4d9434b9827407094b01c6c37cc1ee5786b68df3d58a0a47d93a instanceof ArrayAccess ? ($__internal_7ffe925cc1bd4d9434b9827407094b01c6c37cc1ee5786b68df3d58a0a47d93a["show_loader_over_filter"] ?? null) : null);
        echo ",
\t\t\t\t'hideInactiveValues'\t\t: ";
        // line 544
        echo (($__internal_6b93b4ec9e6faf4cbd3d30c8d9316a2ed018d7912c2b64067c3318c79ae33726 = ($context["settings"] ?? null)) && is_array($__internal_6b93b4ec9e6faf4cbd3d30c8d9316a2ed018d7912c2b64067c3318c79ae33726) || $__internal_6b93b4ec9e6faf4cbd3d30c8d9316a2ed018d7912c2b64067c3318c79ae33726 instanceof ArrayAccess ? ($__internal_6b93b4ec9e6faf4cbd3d30c8d9316a2ed018d7912c2b64067c3318c79ae33726["hide_inactive_values"] ?? null) : null);
        echo ",
\t\t\t\t'manualInit'\t\t\t\t: '";
        // line 545
        echo (($__internal_7e1ef3d325627655b0393080cb94373d51d27476ccb52680ea9318464336c060 = ($context["settings"] ?? null)) && is_array($__internal_7e1ef3d325627655b0393080cb94373d51d27476ccb52680ea9318464336c060) || $__internal_7e1ef3d325627655b0393080cb94373d51d27476ccb52680ea9318464336c060 instanceof ArrayAccess ? ($__internal_7e1ef3d325627655b0393080cb94373d51d27476ccb52680ea9318464336c060["manual_init"] ?? null) : null);
        echo "',
\t\t\t\t'homePageAJAX'\t\t\t\t: ";
        // line 546
        echo (($__internal_217a9ae4d0c56d7d04bdb4b9be11be81633adea37ccba2b2a82f7cf0dc259cf9 = ($context["settings"] ?? null)) && is_array($__internal_217a9ae4d0c56d7d04bdb4b9be11be81633adea37ccba2b2a82f7cf0dc259cf9) || $__internal_217a9ae4d0c56d7d04bdb4b9be11be81633adea37ccba2b2a82f7cf0dc259cf9 instanceof ArrayAccess ? ($__internal_217a9ae4d0c56d7d04bdb4b9be11be81633adea37ccba2b2a82f7cf0dc259cf9["home_page_ajax"] ?? null) : null);
        echo ",
\t\t\t\t'homePageContentSelector'\t: '";
        // line 547
        echo (($__internal_20d10affd4f734cae45dc9e0ccacf8260669852088580b0d835c74fa569770fb = ($context["settings"] ?? null)) && is_array($__internal_20d10affd4f734cae45dc9e0ccacf8260669852088580b0d835c74fa569770fb) || $__internal_20d10affd4f734cae45dc9e0ccacf8260669852088580b0d835c74fa569770fb instanceof ArrayAccess ? ($__internal_20d10affd4f734cae45dc9e0ccacf8260669852088580b0d835c74fa569770fb["home_page_content_selector"] ?? null) : null);
        echo "',
\t\t\t\t'ajaxPagination'\t\t\t: ";
        // line 548
        echo (($__internal_13084f80a8e81695d9e6891fcf4d7bda01cfb195a813650af9d450c43269112d = ($context["settings"] ?? null)) && is_array($__internal_13084f80a8e81695d9e6891fcf4d7bda01cfb195a813650af9d450c43269112d) || $__internal_13084f80a8e81695d9e6891fcf4d7bda01cfb195a813650af9d450c43269112d instanceof ArrayAccess ? ($__internal_13084f80a8e81695d9e6891fcf4d7bda01cfb195a813650af9d450c43269112d["ajax_pagination"] ?? null) : null);
        echo ",
\t\t\t\t'text'\t\t\t\t\t\t: {
\t\t\t\t\t'loading'\t\t: '";
        // line 550
        echo ($context["text_loading"] ?? null);
        echo "',
\t\t\t\t\t'go_to_top'\t\t: '";
        // line 551
        echo ($context["text_go_to_top"] ?? null);
        echo "',
\t\t\t\t\t'init_filter'\t: '";
        // line 552
        echo ($context["text_init_filter"] ?? null);
        echo "',
\t\t\t\t\t'initializing'\t: '";
        // line 553
        echo ($context["text_initializing"] ?? null);
        echo "'
\t\t\t\t},
\t\t\t\t'color' : {
\t\t\t\t\t'loader_over_results' : '";
        // line 556
        echo (($__internal_89ac624973b379a13d56fb0ada7a037616c4bd76a5b341aecc93fa393cd76b6b = ($context["settings"] ?? null)) && is_array($__internal_89ac624973b379a13d56fb0ada7a037616c4bd76a5b341aecc93fa393cd76b6b) || $__internal_89ac624973b379a13d56fb0ada7a037616c4bd76a5b341aecc93fa393cd76b6b instanceof ArrayAccess ? ($__internal_89ac624973b379a13d56fb0ada7a037616c4bd76a5b341aecc93fa393cd76b6b["color_of_loader_over_results"] ?? null) : null);
        echo "',
\t\t\t\t\t'loader_over_filter' : '";
        // line 557
        echo (($__internal_ceb88e81eadfb398b08ec8b3136fe29049d67e18b80aa5caf7cc6f70e8b3d427 = ($context["settings"] ?? null)) && is_array($__internal_ceb88e81eadfb398b08ec8b3136fe29049d67e18b80aa5caf7cc6f70e8b3d427) || $__internal_ceb88e81eadfb398b08ec8b3136fe29049d67e18b80aa5caf7cc6f70e8b3d427 instanceof ArrayAccess ? ($__internal_ceb88e81eadfb398b08ec8b3136fe29049d67e18b80aa5caf7cc6f70e8b3d427["color_of_loader_over_filter"] ?? null) : null);
        echo "'
\t\t\t\t},
\t\t\t\t'direction'\t\t\t\t: '";
        // line 559
        echo ($context["direction"] ?? null);
        echo "',
\t\t\t\t'seo' : {
\t\t\t\t\t'enabled'\t: ";
        // line 561
        echo (($__internal_0b8e9d938c9d1ab90d0f17fc40c9e5cca7b804cb24bbc22618b3cb7a9c05d13e = ($context["seo"] ?? null)) && is_array($__internal_0b8e9d938c9d1ab90d0f17fc40c9e5cca7b804cb24bbc22618b3cb7a9c05d13e) || $__internal_0b8e9d938c9d1ab90d0f17fc40c9e5cca7b804cb24bbc22618b3cb7a9c05d13e instanceof ArrayAccess ? ($__internal_0b8e9d938c9d1ab90d0f17fc40c9e5cca7b804cb24bbc22618b3cb7a9c05d13e["enabled"] ?? null) : null);
        echo ",
\t\t\t\t\t'aliasesEnabled' : ";
        // line 562
        echo (($__internal_4f64eb7f1ab073ffcb97b3e124d642a29b1a706922f81a5f059d44e1b30b8011 = ($context["seo"] ?? null)) && is_array($__internal_4f64eb7f1ab073ffcb97b3e124d642a29b1a706922f81a5f059d44e1b30b8011) || $__internal_4f64eb7f1ab073ffcb97b3e124d642a29b1a706922f81a5f059d44e1b30b8011 instanceof ArrayAccess ? ($__internal_4f64eb7f1ab073ffcb97b3e124d642a29b1a706922f81a5f059d44e1b30b8011["aliases_enabled"] ?? null) : null);
        echo ",
\t\t\t\t\t'alias'\t\t: '";
        // line 563
        echo ($context["seo_alias"] ?? null);
        echo "',
\t\t\t\t\t'parameter'\t: '";
        // line 564
        echo (($__internal_d0e32b5bd48a81758193171cb84dc21fab5f634893014363dd7486dab96b8a78 = ($context["seo"] ?? null)) && is_array($__internal_d0e32b5bd48a81758193171cb84dc21fab5f634893014363dd7486dab96b8a78) || $__internal_d0e32b5bd48a81758193171cb84dc21fab5f634893014363dd7486dab96b8a78 instanceof ArrayAccess ? ($__internal_d0e32b5bd48a81758193171cb84dc21fab5f634893014363dd7486dab96b8a78["url_parameter"] ?? null) : null);
        echo "',
\t\t\t\t\t'separator'\t: '";
        // line 565
        echo (($__internal_492c8f242aead6a239d75da7c799282d97b5816d6c980bceee5ae0aa29a8588a = ($context["seo"] ?? null)) && is_array($__internal_492c8f242aead6a239d75da7c799282d97b5816d6c980bceee5ae0aa29a8588a) || $__internal_492c8f242aead6a239d75da7c799282d97b5816d6c980bceee5ae0aa29a8588a instanceof ArrayAccess ? ($__internal_492c8f242aead6a239d75da7c799282d97b5816d6c980bceee5ae0aa29a8588a["separator"] ?? null) : null);
        echo "',
\t\t\t\t\t'valuesAreLinks' : ";
        // line 566
        echo (($__internal_5322c1b4f25581b4cb57d21e97a066297deafa08a7d18259a7eb3d97376106be = ($context["seo"] ?? null)) && is_array($__internal_5322c1b4f25581b4cb57d21e97a066297deafa08a7d18259a7eb3d97376106be) || $__internal_5322c1b4f25581b4cb57d21e97a066297deafa08a7d18259a7eb3d97376106be instanceof ArrayAccess ? ($__internal_5322c1b4f25581b4cb57d21e97a066297deafa08a7d18259a7eb3d97376106be["values_are_links"] ?? null) : null);
        echo ",
\t\t\t\t\t'valuesLinksAreClickable' : ";
        // line 567
        echo (($__internal_eea086a54e90b87ee5d91ccaaa9ba1fdd5777121f16ec06e85994fb57fb063d9 = ($context["seo"] ?? null)) && is_array($__internal_eea086a54e90b87ee5d91ccaaa9ba1fdd5777121f16ec06e85994fb57fb063d9) || $__internal_eea086a54e90b87ee5d91ccaaa9ba1fdd5777121f16ec06e85994fb57fb063d9 instanceof ArrayAccess ? ($__internal_eea086a54e90b87ee5d91ccaaa9ba1fdd5777121f16ec06e85994fb57fb063d9["values_links_are_clickable"] ?? null) : null);
        echo ",
\t\t\t\t\t'usePostAjaxRequests' : ";
        // line 568
        echo (($__internal_cf6cfa5873e21544b673e98495e84dc2ebae7ffe3a5f1be250bb103a2a4fae5c = ($context["seo"] ?? null)) && is_array($__internal_cf6cfa5873e21544b673e98495e84dc2ebae7ffe3a5f1be250bb103a2a4fae5c) || $__internal_cf6cfa5873e21544b673e98495e84dc2ebae7ffe3a5f1be250bb103a2a4fae5c instanceof ArrayAccess ? ($__internal_cf6cfa5873e21544b673e98495e84dc2ebae7ffe3a5f1be250bb103a2a4fae5c["use_post_ajax_requests"] ?? null) : null);
        echo ",
\t\t\t\t\t'addSlashAtTheEnd' : ";
        // line 569
        echo (($__internal_e4a22c3176c35012e2f75000170a6ec2dba17cd5b9b30faff0b58cdca7f876a5 = ($context["seo"] ?? null)) && is_array($__internal_e4a22c3176c35012e2f75000170a6ec2dba17cd5b9b30faff0b58cdca7f876a5) || $__internal_e4a22c3176c35012e2f75000170a6ec2dba17cd5b9b30faff0b58cdca7f876a5 instanceof ArrayAccess ? ($__internal_e4a22c3176c35012e2f75000170a6ec2dba17cd5b9b30faff0b58cdca7f876a5["add_slash_at_the_end"] ?? null) : null);
        echo ",
\t\t\t\t\t'metaRobots' : ";
        // line 570
        echo (($__internal_71e86c36b1ba3fa4961272f73e1f65621120d0e0b87b7aa53b4ef307b6a79064 = ($context["seo"] ?? null)) && is_array($__internal_71e86c36b1ba3fa4961272f73e1f65621120d0e0b87b7aa53b4ef307b6a79064) || $__internal_71e86c36b1ba3fa4961272f73e1f65621120d0e0b87b7aa53b4ef307b6a79064 instanceof ArrayAccess ? ($__internal_71e86c36b1ba3fa4961272f73e1f65621120d0e0b87b7aa53b4ef307b6a79064["meta_robots"] ?? null) : null);
        echo ",
\t\t\t\t\t'metaRobotsValue' : '";
        // line 571
        echo (($__internal_52693e34576c5129ffe174b1932fb501397645d13687d372162e8b0cffda0aac = ($context["seo"] ?? null)) && is_array($__internal_52693e34576c5129ffe174b1932fb501397645d13687d372162e8b0cffda0aac) || $__internal_52693e34576c5129ffe174b1932fb501397645d13687d372162e8b0cffda0aac instanceof ArrayAccess ? ($__internal_52693e34576c5129ffe174b1932fb501397645d13687d372162e8b0cffda0aac["meta_robots_value"] ?? null) : null);
        echo "',
\t\t\t\t\t'trans' : ";
        // line 572
        echo (($__internal_61b5776b5699116f413e99ed0f76507eda4b62d4365ab122571461df23e78b52 = ($context["seo"] ?? null)) && is_array($__internal_61b5776b5699116f413e99ed0f76507eda4b62d4365ab122571461df23e78b52) || $__internal_61b5776b5699116f413e99ed0f76507eda4b62d4365ab122571461df23e78b52 instanceof ArrayAccess ? ($__internal_61b5776b5699116f413e99ed0f76507eda4b62d4365ab122571461df23e78b52["trans"] ?? null) : null);
        echo "
\t\t\t\t},
\t\t\t\t'displayAlwaysAsWidget'\t\t: ";
        // line 574
        echo ($context["displayAlwaysAsWidget"] ?? null);
        echo ",
\t\t\t\t'displaySelectedFilters'\t: ";
        // line 575
        echo ($context["displaySelectedFilters"] ?? null);
        echo ",
\t\t\t\t'isMobile' : ";
        // line 576
        echo ((twig_test_empty(($context["is_mobile"] ?? null))) ? ("false") : ("true"));
        echo ",
\t\t\t\t'widget' : {
\t\t\t\t\t'position': '";
        // line 578
        echo ((twig_test_empty(($context["widgetPosition"] ?? null))) ? ("") : (($context["widgetPosition"] ?? null)));
        echo "',
\t\t\t\t\t'marginTop': ";
        // line 579
        echo (($__internal_cb0d530fff889d4e78f106394d8eaa3c100c138fb08e3c26909422e7bd12f484 = ($context["settings"] ?? null)) && is_array($__internal_cb0d530fff889d4e78f106394d8eaa3c100c138fb08e3c26909422e7bd12f484) || $__internal_cb0d530fff889d4e78f106394d8eaa3c100c138fb08e3c26909422e7bd12f484 instanceof ArrayAccess ? ($__internal_cb0d530fff889d4e78f106394d8eaa3c100c138fb08e3c26909422e7bd12f484["widget_margin_top"] ?? null) : null);
        echo ",
\t\t\t\t\t'withSwipe' : ";
        // line 580
        echo ((twig_test_empty(($context["widgetWithSwipe"] ?? null))) ? ("false") : ((("'" . ($context["widgetWithSwipe"] ?? null)) . "'")));
        echo ",
\t\t\t\t\t'button': {
\t\t\t\t\t\t'position': '";
        // line 582
        echo (($__internal_b7f535bf258477308f3fb665e4b0e6e1708e3243ef4c039d5c7328358c186974 = ($context["settings"] ?? null)) && is_array($__internal_b7f535bf258477308f3fb665e4b0e6e1708e3243ef4c039d5c7328358c186974) || $__internal_b7f535bf258477308f3fb665e4b0e6e1708e3243ef4c039d5c7328358c186974 instanceof ArrayAccess ? ($__internal_b7f535bf258477308f3fb665e4b0e6e1708e3243ef4c039d5c7328358c186974["widget_button_position"] ?? null) : null);
        echo "',
\t\t\t\t\t\t'iconPosition': '";
        // line 583
        echo (($__internal_9b023a5b6c265e3f271cabd91979ffdbe3de13a725cd7ba5d8ad75154840550b = ($context["settings"] ?? null)) && is_array($__internal_9b023a5b6c265e3f271cabd91979ffdbe3de13a725cd7ba5d8ad75154840550b) || $__internal_9b023a5b6c265e3f271cabd91979ffdbe3de13a725cd7ba5d8ad75154840550b instanceof ArrayAccess ? ($__internal_9b023a5b6c265e3f271cabd91979ffdbe3de13a725cd7ba5d8ad75154840550b["widget_button_icon_position"] ?? null) : null);
        echo "',
\t\t\t\t\t\t'icon': '";
        // line 584
        echo (($__internal_31269e6b383e042fdd8d040dc61c8c5baaa09e10288c67c795a43529e4e27c7a = ($context["settings"] ?? null)) && is_array($__internal_31269e6b383e042fdd8d040dc61c8c5baaa09e10288c67c795a43529e4e27c7a) || $__internal_31269e6b383e042fdd8d040dc61c8c5baaa09e10288c67c795a43529e4e27c7a instanceof ArrayAccess ? ($__internal_31269e6b383e042fdd8d040dc61c8c5baaa09e10288c67c795a43529e4e27c7a["widget_button_icon"] ?? null) : null);
        echo "',
\t\t\t\t\t\t'iconClose' : '";
        // line 585
        echo (($__internal_1dea26bbc623919d4802143fa23aaba30ef7d698d599e1e755b4a0a960218563 = ($context["settings"] ?? null)) && is_array($__internal_1dea26bbc623919d4802143fa23aaba30ef7d698d599e1e755b4a0a960218563) || $__internal_1dea26bbc623919d4802143fa23aaba30ef7d698d599e1e755b4a0a960218563 instanceof ArrayAccess ? ($__internal_1dea26bbc623919d4802143fa23aaba30ef7d698d599e1e755b4a0a960218563["widget_button_icon_close"] ?? null) : null);
        echo "',
\t\t\t\t\t\t'text': '";
        // line 586
        echo (($__internal_7bbe65e633481106597314cf6d03aecce0b5686e3c6db5f2506fbd187e42e38d = ($context["settings"] ?? null)) && is_array($__internal_7bbe65e633481106597314cf6d03aecce0b5686e3c6db5f2506fbd187e42e38d) || $__internal_7bbe65e633481106597314cf6d03aecce0b5686e3c6db5f2506fbd187e42e38d instanceof ArrayAccess ? ($__internal_7bbe65e633481106597314cf6d03aecce0b5686e3c6db5f2506fbd187e42e38d["widget_button_text"] ?? null) : null);
        echo "',
\t\t\t\t\t\t'textClose' : '";
        // line 587
        echo (($__internal_8ef09683cdae514bbaa3db2778af1e73c5c6aae3a4e69edbbd6304148f48c4f7 = ($context["settings"] ?? null)) && is_array($__internal_8ef09683cdae514bbaa3db2778af1e73c5c6aae3a4e69edbbd6304148f48c4f7) || $__internal_8ef09683cdae514bbaa3db2778af1e73c5c6aae3a4e69edbbd6304148f48c4f7 instanceof ArrayAccess ? ($__internal_8ef09683cdae514bbaa3db2778af1e73c5c6aae3a4e69edbbd6304148f48c4f7["widget_button_text_close"] ?? null) : null);
        echo "',
\t\t\t\t\t\t'showWhenScrolledFromTop' : ";
        // line 588
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "widget_button_show_when_scrolled_from_top", [], "any", false, false, false, 588))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "widget_button_show_when_scrolled_from_top", [], "any", false, false, false, 588)));
        echo "
\t\t\t\t\t},
\t\t\t\t\t'backdrop' : {
\t\t\t\t\t\t'enabled' : ";
        // line 591
        echo ((((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "widget_backdrop", [], "any", false, false, false, 591)) || ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "widget_backdrop", [], "any", false, false, false, 591) == "pc") && ($context["is_mobile"] ?? null))) || ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "widget_backdrop", [], "any", false, false, false, 591) == "mobile") &&  !($context["is_mobile"] ?? null)))) ? ("false") : ("true"));
        echo ",
\t\t\t\t\t\t'clickable' : ";
        // line 592
        echo ((((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "widget_backdrop_clickable", [], "any", false, false, false, 592)) || ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "widget_backdrop_clickable", [], "any", false, false, false, 592) == "pc") && ($context["is_mobile"] ?? null))) || ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "widget_backdrop_clickable", [], "any", false, false, false, 592) == "mobile") &&  !($context["is_mobile"] ?? null)))) ? ("false") : ("true"));
        echo "
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t'theme' : '";
        // line 595
        echo ($context["init_theme"] ?? null);
        echo "',
\t\t\t\t'pinBox' : ";
        // line 596
        echo (($__internal_06cc75899d7a4dff8f45310022b262702e80a221df9b3ebf1d8d7daf44c9db03 = ($context["settings"] ?? null)) && is_array($__internal_06cc75899d7a4dff8f45310022b262702e80a221df9b3ebf1d8d7daf44c9db03) || $__internal_06cc75899d7a4dff8f45310022b262702e80a221df9b3ebf1d8d7daf44c9db03 instanceof ArrayAccess ? ($__internal_06cc75899d7a4dff8f45310022b262702e80a221df9b3ebf1d8d7daf44c9db03["pin_box"] ?? null) : null);
        echo ",
\t\t\t\t'pinContainerSelector' : '";
        // line 597
        echo (($__internal_3c476d3b67357fc5d8de0b50975fd4a7d72f56db3eebb4b968f90c5a692936e5 = ($context["settings"] ?? null)) && is_array($__internal_3c476d3b67357fc5d8de0b50975fd4a7d72f56db3eebb4b968f90c5a692936e5) || $__internal_3c476d3b67357fc5d8de0b50975fd4a7d72f56db3eebb4b968f90c5a692936e5 instanceof ArrayAccess ? ($__internal_3c476d3b67357fc5d8de0b50975fd4a7d72f56db3eebb4b968f90c5a692936e5["pin_container_selector"] ?? null) : null);
        echo "',
\t\t\t\t'increasePrecisionPriceFilter' : ";
        // line 598
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "increase_precision_price_filter", [], "any", false, false, false, 598) == "1")) ? ("true") : ("false"));
        echo ",
\t\t\t\t'data' : {
\t\t\t\t\t'category_id' : ";
        // line 600
        echo ((twig_test_empty((($__internal_5d6ef48933280ee0d91571348f5dec4e8b7262193c3d776eea9bb3447c9b7be6 = ($context["_data"] ?? null)) && is_array($__internal_5d6ef48933280ee0d91571348f5dec4e8b7262193c3d776eea9bb3447c9b7be6) || $__internal_5d6ef48933280ee0d91571348f5dec4e8b7262193c3d776eea9bb3447c9b7be6 instanceof ArrayAccess ? ($__internal_5d6ef48933280ee0d91571348f5dec4e8b7262193c3d776eea9bb3447c9b7be6["filter_category_id"] ?? null) : null))) ? ("null") : ((("'" . (($__internal_d0ccc339ff84b875c8dc9d81d273420e337ff873cacc39e2054c066bb6ac985a = ($context["_data"] ?? null)) && is_array($__internal_d0ccc339ff84b875c8dc9d81d273420e337ff873cacc39e2054c066bb6ac985a) || $__internal_d0ccc339ff84b875c8dc9d81d273420e337ff873cacc39e2054c066bb6ac985a instanceof ArrayAccess ? ($__internal_d0ccc339ff84b875c8dc9d81d273420e337ff873cacc39e2054c066bb6ac985a["filter_category_id"] ?? null) : null)) . "'")));
        echo "
\t\t\t\t}
\t\t\t}));
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/mfilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1698 => 600,  1693 => 598,  1689 => 597,  1685 => 596,  1681 => 595,  1675 => 592,  1671 => 591,  1665 => 588,  1661 => 587,  1657 => 586,  1653 => 585,  1649 => 584,  1645 => 583,  1641 => 582,  1636 => 580,  1632 => 579,  1628 => 578,  1623 => 576,  1619 => 575,  1615 => 574,  1610 => 572,  1606 => 571,  1602 => 570,  1598 => 569,  1594 => 568,  1590 => 567,  1586 => 566,  1582 => 565,  1578 => 564,  1574 => 563,  1570 => 562,  1566 => 561,  1561 => 559,  1556 => 557,  1552 => 556,  1546 => 553,  1542 => 552,  1538 => 551,  1534 => 550,  1529 => 548,  1525 => 547,  1521 => 546,  1517 => 545,  1513 => 544,  1509 => 543,  1505 => 542,  1501 => 541,  1497 => 540,  1493 => 539,  1489 => 538,  1483 => 535,  1479 => 534,  1473 => 531,  1469 => 530,  1465 => 529,  1461 => 528,  1457 => 527,  1453 => 526,  1448 => 524,  1444 => 523,  1440 => 522,  1436 => 521,  1432 => 520,  1428 => 519,  1424 => 518,  1420 => 517,  1416 => 516,  1412 => 515,  1408 => 514,  1404 => 513,  1400 => 512,  1396 => 511,  1392 => 510,  1388 => 509,  1384 => 508,  1380 => 507,  1376 => 506,  1372 => 505,  1368 => 504,  1364 => 503,  1360 => 502,  1356 => 501,  1352 => 500,  1348 => 499,  1344 => 498,  1336 => 493,  1332 => 492,  1328 => 491,  1323 => 488,  1312 => 486,  1308 => 485,  1295 => 475,  1291 => 473,  1285 => 471,  1283 => 470,  1277 => 467,  1273 => 466,  1267 => 463,  1263 => 462,  1256 => 458,  1252 => 457,  1238 => 446,  1234 => 445,  1230 => 444,  1226 => 443,  1222 => 441,  1218 => 439,  1216 => 438,  1210 => 435,  1207 => 434,  1201 => 433,  1186 => 423,  1180 => 419,  1170 => 415,  1160 => 414,  1156 => 413,  1152 => 412,  1147 => 410,  1143 => 409,  1135 => 408,  1131 => 406,  1127 => 405,  1122 => 402,  1120 => 401,  1115 => 398,  1107 => 396,  1103 => 395,  1099 => 394,  1095 => 393,  1087 => 392,  1084 => 391,  1080 => 390,  1076 => 389,  1071 => 386,  1069 => 385,  1065 => 383,  1059 => 382,  1057 => 381,  1054 => 380,  1045 => 378,  1039 => 376,  1037 => 375,  1033 => 374,  1029 => 373,  1025 => 372,  1021 => 371,  1013 => 370,  1010 => 369,  1005 => 368,  999 => 366,  993 => 364,  991 => 363,  986 => 362,  981 => 361,  979 => 360,  975 => 358,  973 => 357,  969 => 355,  963 => 354,  961 => 353,  958 => 352,  949 => 350,  943 => 348,  941 => 347,  937 => 346,  933 => 345,  929 => 344,  925 => 343,  917 => 342,  914 => 341,  909 => 340,  903 => 338,  897 => 336,  895 => 335,  890 => 334,  885 => 333,  883 => 332,  879 => 330,  877 => 329,  873 => 327,  865 => 325,  860 => 322,  854 => 320,  848 => 318,  845 => 317,  842 => 316,  840 => 315,  832 => 314,  827 => 312,  823 => 311,  819 => 310,  815 => 309,  807 => 308,  799 => 304,  795 => 303,  791 => 301,  788 => 300,  785 => 299,  782 => 298,  779 => 297,  777 => 296,  774 => 295,  761 => 290,  755 => 289,  750 => 287,  746 => 286,  739 => 284,  734 => 281,  729 => 280,  727 => 279,  724 => 278,  722 => 277,  715 => 273,  711 => 272,  704 => 270,  698 => 266,  696 => 265,  687 => 258,  681 => 256,  679 => 255,  673 => 252,  669 => 251,  658 => 243,  654 => 242,  644 => 234,  642 => 233,  637 => 231,  616 => 212,  614 => 211,  605 => 205,  600 => 203,  592 => 198,  587 => 196,  582 => 194,  574 => 189,  570 => 187,  568 => 186,  565 => 185,  558 => 180,  556 => 179,  551 => 177,  547 => 176,  538 => 171,  536 => 170,  533 => 169,  527 => 166,  524 => 165,  521 => 164,  517 => 162,  506 => 159,  501 => 157,  495 => 156,  490 => 154,  486 => 153,  479 => 151,  472 => 148,  469 => 147,  466 => 146,  463 => 145,  460 => 144,  458 => 143,  455 => 142,  451 => 141,  448 => 140,  445 => 139,  443 => 138,  439 => 136,  437 => 135,  434 => 134,  428 => 133,  422 => 130,  413 => 128,  409 => 126,  405 => 124,  402 => 123,  398 => 122,  392 => 121,  389 => 120,  387 => 119,  384 => 118,  376 => 115,  363 => 113,  359 => 112,  355 => 111,  351 => 110,  348 => 109,  345 => 108,  341 => 107,  338 => 106,  336 => 105,  332 => 104,  329 => 103,  327 => 102,  322 => 101,  320 => 100,  313 => 98,  309 => 96,  306 => 95,  302 => 93,  299 => 92,  297 => 91,  293 => 89,  286 => 84,  280 => 82,  278 => 81,  272 => 79,  269 => 78,  263 => 76,  260 => 75,  258 => 74,  252 => 70,  249 => 69,  246 => 68,  242 => 66,  239 => 65,  236 => 64,  234 => 63,  231 => 62,  229 => 61,  221 => 59,  217 => 58,  214 => 57,  208 => 55,  206 => 54,  200 => 52,  197 => 51,  194 => 50,  191 => 49,  189 => 48,  186 => 47,  180 => 45,  178 => 44,  173 => 42,  169 => 41,  165 => 40,  161 => 39,  157 => 38,  153 => 37,  149 => 35,  146 => 34,  143 => 33,  141 => 32,  136 => 30,  132 => 29,  127 => 28,  122 => 27,  114 => 25,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  89 => 16,  86 => 15,  84 => 14,  81 => 13,  77 => 12,  72 => 10,  67 => 9,  61 => 7,  59 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/mfilter.twig", "");
    }
}
