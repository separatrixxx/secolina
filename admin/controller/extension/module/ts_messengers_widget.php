<?php

class ControllerExtensionModuleTSMessengersWidget extends Controller
{
    private $error = array();


    public function index()
    {
        $this->load->language('extension/module/ts_messengers_widget');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addStyle('view/stylesheet/t-solutions/css/main.css');
        $this->document->addStyle('view/stylesheet/t-solutions/css/mw_icons.css');
        $this->document->addScript('view/javascript/t-solutions/minicolor/jquery.minicolors.min.js');
        $this->document->addStyle('view/javascript/t-solutions/minicolor/jquery.minicolors.css');
        $this->document->addStyle('view/stylesheet/t-solutions/fontawesome/css/all.css');
        $this->document->addStyle('view/javascript/font-awesome/css/font-awesome.min.css');

        $this->document->addStyle('view/javascript/t-solutions/codemirror/theme/css/codemirror.css');
        $this->document->addStyle('view/javascript/t-solutions/codemirror/theme/css/monokai.css');
        $this->document->addStyle('view/stylesheet/t-solutions/css/main.css');
        $this->document->addScript('view/javascript/t-solutions/codemirror/theme/js/codemirror.js');
        $this->document->addScript('view/javascript/t-solutions/codemirror/theme/js/css.js');
        $this->document->addScript('view/javascript/t-solutions/codemirror/addon/selection/active-line.js');
        $this->document->addScript('view/javascript/t-solutions/codemirror/addon/edit/closebrackets.js');
        $this->document->addScript('view/javascript/t-solutions/codemirror/addon/edit/matchbrackets.js');
        $this->document->addScript('view/javascript/t-solutions/codemirror/addon/dialog/dialog.js');
        $this->document->addScript('view/stylesheet/t-solutions/fontawesome/js/fontawesome.min.js');

        $data['version'] = "1.8";

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_ts_messengers_widget', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->cssSettings($this->request->post);
            $this->response->redirect($this->url->link('extension/module/ts_messengers_widget', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->session->data['warning'])) {
            $data['warning'] = $this->session->data['warning'];
            unset($this->session->data['warning']);
        } else {
            $data['warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/ts_messengers_widget', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/module/ts_messengers_widget', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['module_ts_messengers_widget_status'])) {
            $data['module_ts_messengers_widget_status'] = $this->request->post['module_ts_messengers_widget_status'];
        } else {
            $data['module_ts_messengers_widget_status'] = $this->config->get('module_ts_messengers_widget_status');
        }

        if (isset($this->request->post['module_ts_messengers_widget_settings'])) {
            $data['module_ts_messengers_widget_settings'] = $this->request->post['module_ts_messengers_widget_settings'];
        } else {
            $data['module_ts_messengers_widget_settings'] = $this->config->get('module_ts_messengers_widget_settings');
        }

        if (isset($this->request->post['module_ts_messengers_widget_data'])) {
            $data['module_ts_messengers_widget_data'] = $this->request->post['module_ts_messengers_widget_data'];
        } else {
            $data['module_ts_messengers_widget_data'] = $this->config->get('module_ts_messengers_widget_data');
        }

        if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
            $data['image_path'] = HTTPS_CATALOG . 'image/catalog/ts-messengers/';
        } else {
            $data['image_path'] = HTTP_CATALOG . 'image/catalog/ts-messengers/';
        }

        $data['path'] = DIR_IMAGE . 'catalog/ts-messengers';

        $data['images'] = array();

        foreach (glob($data['path'] . '/*.svg') as $file) {
            $data['images'][] = $data['image_path'] . basename($file);
        }

        $this->load->model('tool/image');

        if (empty($data['module_ts_messengers_widget_settings']['animation_1'])) {
            $data['module_ts_messengers_widget_settings']['animation_1'] = '';
        }

        if (empty($data['module_ts_messengers_widget_settings']['animation_2'])) {
            $data['module_ts_messengers_widget_settings']['animation_2'] = '';
        }

        if (empty($data['module_ts_messengers_widget_settings']['animation_3'])) {
            $data['module_ts_messengers_widget_settings']['animation_3'] = '';
        }

        if (empty($data['module_ts_messengers_widget_settings']['fogging'])) {
            $data['module_ts_messengers_widget_settings']['fogging'] = '';
        }

        if (empty($data['module_ts_messengers_widget_settings']['no_bg'])) {
            $data['module_ts_messengers_widget_settings']['no_bg'] = '';
        }

        if (isset($data['module_ts_messengers_widget_data'])) {
            foreach ($data['module_ts_messengers_widget_data'] as $key => $ts_messenger) {
                if (empty($ts_messenger['link_status'])) {
                    $data['module_ts_messengers_widget_data'][$key]['link_status'] = '';
                }
            }
        }

        if (isset($this->request->post['module_ts_messengers_widget_settings']['image']) && is_file(DIR_IMAGE . $this->request->post['module_ts_messengers_widget_settings']['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($this->request->post['module_ts_messengers_widget_settings']['image'], 75, 75);
        } elseif (!empty($data['module_ts_messengers_widget_settings']['image']) && is_file(DIR_IMAGE . $data['module_ts_messengers_widget_settings']['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($data['module_ts_messengers_widget_settings']['image'], 75, 75);
        } else {
            $data['thumb'] = $this->model_tool_image->resize('no_image.png', 75, 75);
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 75, 75);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/ts_messengers_widget', $data));
    }

    public function cssSettings($edit = array())
    {

        if (empty($edit)) {
            $css_data = $this->config->get('module_ts_messengers_widget_settings');
        } else {
            $css_data = $this->request->post['module_ts_messengers_widget_settings'];
        }

        if (empty($edit)) {
            $messengers_data = $this->config->get('module_ts_messengers_widget_data');
        } else {
            $messengers_data = $this->request->post['module_ts_messengers_widget_data'];
        }

        $css = '';

        $css .= ".ts-mw-icon {";

        if (isset($css_data['back_color']) && !empty($css_data['back_color'])) {
            $css .= "background:" . $css_data['back_color'] . ";";
        }

        if (isset($css_data['icon_color']) && !empty($css_data['icon_color'])) {
            $css .= "color:" . $css_data['icon_color'] . ";";
        }

        if (isset($css_data['animation_2']) && !empty($css_data['animation_2'])) {
            $css .= "background: transparent;";
        }

        $css .= "}" . PHP_EOL;

        if (isset($css_data['animation_2']) && !empty($css_data['animation_2'])) {
            $css .= ".ts-mw-button.open .ts-mw-icon.mw-animation-2 {background:" . $css_data['back_color'] . ";}" . PHP_EOL;
            $css .= ".ts-mw-button.open .ts-mw-icon.mw-animation-2 .slides {display: none;}" . PHP_EOL;
            $css .= ".ts-mw-button .ts-mw-icon .slides + i {display: none;}.ts-mw-button.open .ts-mw-icon .slides + i {display: flex;}" . PHP_EOL;
        }

        if (isset($css_data['animation_3']) && !empty($css_data['animation_3'])) {
            $css .= ".ts-mw-pulse:before, .ts-mw-pulse:after {border: 1px solid " . $css_data['back_color'] . ";}" . PHP_EOL;
        }

        $css .= ".ts-mw-button {";

        if (isset($css_data['position']) && !empty($css_data['position']) && ($css_data['padding']) && !empty($css_data['padding'])) {
            $css .= $css_data['position'] . ":" . $css_data['padding'] . "px;";
        }

        if (isset($css_data['padding_bottom']) && !empty($css_data['padding_bottom'])) {
            $css .= "bottom:" . $css_data['padding_bottom'] . "px;";
        }

        $css .= "}" . PHP_EOL;

        $css .= ".ts-mw-block {";

        if (isset($css_data['position']) && !empty($css_data['position'])) {
            $css .= $css_data['position'] . ":" . "5px;";
        }

        if (isset($css_data['desc_size']) && !empty($css_data['desc_size'])) {
            $css .= "bottom:" . $css_data['desc_size'] . "px;";
        }

        $css .= "}" . PHP_EOL;

        if (isset($css_data['text_color']) && !empty($css_data['text_color'])) {
            $css .= ".ts-mw-li a {color:" . $css_data['text_color'] . "!important;}" . PHP_EOL;
        }

        if (isset($css_data['text_hover_color']) && !empty($css_data['text_hover_color'])) {
            $css .= ".ts-mw-li a:hover {color:" . $css_data['text_hover_color'] . "!important;}" . PHP_EOL;
        }

        if (isset($css_data['desc_size']) && !empty($css_data['desc_size'])) {
            $css .= ".ts-mw-button, .ts-mw-icon, .ts-mw-icon i, .ts-mw-icon .slides img, .ts-mw-block.mw-no-bg img, .ts-mw-pulse {width:" . $css_data['desc_size'] . "px;" . "height:" . $css_data['desc_size'] . "px;}" . PHP_EOL;
        }

        if (isset($css_data['fogging']) && !empty($css_data['fogging'])) {
            $css .= ".ts-mw-substrate {background:" . $css_data['fogging_color'] . ";}" . PHP_EOL;
        }

        if ($css_data['show_animation'] == '1') {
            $css .= ".ts-mw-block {-webkit-transform: translateY(50px);-moz-transform: translateY(50px);-ms-transform: translateY(50px);-o-transform: translateY(50px);transform: translateY(50px);}" . PHP_EOL;
            $css .= ".ts-mw-button.open .ts-mw-block {-webkit-transform: translateY(0);-moz-transform: translateY(0);-ms-transform: translateY(0);-o-transform: translateY(0);transform: translateY(0);}" . PHP_EOL;
        } elseif ($css_data['show_animation'] == '2' && empty($css_data['no_bg'])) {
            $css .= ".ts-mw-block {transform: scale(0);transition: 0.3s;}" . PHP_EOL;
            $css .= ".ts-mw-button.open .ts-mw-block {transform: scale(1);transition: 0.3s;}" . PHP_EOL;
        } elseif ($css_data['show_animation'] == '2' && $css_data['no_bg'] == 'on') {
            $css .= ".ts-mw-block .ts-mw-list li img {transform: scale(0);transition: 0.3s;}" . PHP_EOL;
            $css .= ".ts-mw-button.open .ts-mw-block .ts-mw-list li img {transform: scale(1);transition: 0.3s;}" . PHP_EOL;
        }

        if (isset($messengers_data['ts_jivosite']['link']) && !empty($messengers_data['ts_jivosite']['link']) && isset($messengers_data['ts_jivosite']['link_status']) && !empty($messengers_data['ts_jivosite']['link_status'])) {
            $css .= "#jvlabelWrap, jdiv.leaf_a06._bottom_ce9, jdiv.leaf_e8d._bottom_6ae, .__jivoMobileButton {display: none !important;}" . PHP_EOL;
        }

        if (isset($css_data['adaptation']) && !empty($css_data['adaptation']) && $css_data['adaptation'] != 'Без адаптации') {
            $css .= "#uptocall-mini, .fly_callback, .fly-block__callback, #callphone, .animate_btn_1, .animate_btn_2, .animate_btn_3, .animate_btn_4, .callphone, .call-order .container-circle, .call-order .close_phswipe, #bingc-phone-button, .callback-bt, .btn-floating-callback, #us_fixed_contact_button, #fm_fixed_contact_button, .popup-phone-wrapper {display:none !important;}" . PHP_EOL;
        }

        if ($css_data['main_tips'] == '1') {
            $css .= ".ts-mw-tips {border: 1px solid " . $css_data['tips_back_color'] . ";" . "bottom: " . $css_data['desc_size'] . "px;" . $css_data['position'] . ":" . $css_data['padding'] . "px;}" . PHP_EOL;
            $css .= ".ts-mw-tips-text {background: " . $css_data['tips_back_color'] . ";" . "color:" . $css_data['tips_text_color'] . "}" . PHP_EOL;
            $css .= ".ts-mw-tips-close {color:" . $css_data['tips_text_color'] . "}" . PHP_EOL;
            if ($css_data['main_tips_type'] == 'hover') {
                $css .= ".ts-mw-button:hover .ts-mw-tips {opacity: 1;visibility: visible;}" . PHP_EOL;
            }
        }

        if ($css_data['hide'] == 2) {
            $css .= "@media only screen and (min-width: 769px) {.ts-mw-button {display: none;}}" . PHP_EOL;
        }

        $css .= "@media only screen and (max-width: 768px) {" . PHP_EOL;

        if ($css_data['hide'] == 1) {
            $css .= ".ts-mw-button {display: none;}" . PHP_EOL;
        }

        if (isset($css_data['mobile_size']) && !empty($css_data['mobile_size'])) {
            $css .= ".ts-mw-button, .ts-mw-icon, .ts-mw-icon i, .ts-mw-icon .slides img, .ts-mw-block.mw-no-bg img, .ts-mw-pulse {width:" . $css_data['mobile_size'] . "px;" . "height:" . $css_data['mobile_size'] . "px;}" . PHP_EOL;
            $css .= ".ts-mw-block {bottom:" . $css_data['mobile_size'] . "px;}" . PHP_EOL;
        }

        $css .= ".ts-mw-button {";

        if (isset($css_data['position']) && !empty($css_data['position']) && ($css_data['padding_mobile']) && !empty($css_data['padding_mobile'])) {
            $css .= $css_data['position'] . ":" . $css_data['padding_mobile'] . "px;";
        }

        if (isset($css_data['padding_bottom_mobile']) && !empty($css_data['padding_bottom_mobile'])) {
            $css .= "bottom:" . $css_data['padding_bottom_mobile'] . "px;";
        }

        $css .= "}" . PHP_EOL;

        if ($css_data['main_tips'] == '1') {
            $css .= ".ts-mw-tips {bottom:" . $css_data['mobile_size'] . "px;" . $css_data['position'] . ":" . $css_data['padding_mobile'] . "px;}" . PHP_EOL;
            if ($css_data['main_tips_type'] == 'hover') {
                $css .= ".ts-mw-tips {display: none;}" . PHP_EOL;
            }
        }

        $css .= "}" . PHP_EOL;

        $css .= html_entity_decode($css_data['customcss'], ENT_QUOTES, 'UTF-8');

        file_put_contents(DIR_CATALOG . 'view/theme/default/stylesheet/t-solutions/ts_messengers_widget_settings.css', $css);

    }

    public function install()
    {

        $this->load->language('extension/module/ts_messengers_widget');
        $this->load->model('setting/setting');

        $default_settings = array(
            'module_ts_messengers_widget_settings' => array(
                'position' => 'right',
                'padding' => '20',
                'padding_bottom' => '20',
                'padding_mobile' => '20',
                'hide' => '0',
                'padding_bottom_mobile' => '20',
                'back_color' => 'rgba(37, 167, 242, 1)',
                'icon_color' => 'rgba(255, 255, 255, 1)',
                'text_color' => 'rgba(0, 0, 0, 1)',
                'text_hover_color' => 'rgba(37, 167, 242, 1)',
                'tips_back_color' => 'rgba(37, 167, 242, 1)',
                'tips_text_color' => 'rgba(255, 255, 255, 1)',
                'desc_size' => '55',
                'mobile_size' => '55',
                'animation_1' => 'on',
                'animation_2' => '',
                'animation_3' => 'on',
                'fogging' => 'on',
                'fogging_color' => 'rgba(0, 0, 0, 0.1)',
                'slide_speed' => '3000',
                'main_icon' => 'fa fa-comments',
                'no_bg' => '',
                'show_animation' => '1',
                'tips' => '0',
                'main_tips' => '0',
                'main_tips_type' => 'hover',
                'delay_time' => '5000',
                'image' => '',
                'adaptation' => 'Без адаптации',
                'customcss' => ''
            ),
            'module_ts_messengers_widget_data' => array(
                'ts_tg' => array(
                    'link' => 'tg_nickname',
                    'ru-ru' => array(
                        'link_text' => 'Telegram'
                    ),
                    'sort_order' => '0',
                    'link_status' => '1'
                ),
                'ts_viber' => array(
                    'link' => '799999999',
                    'ru-ru' => array(
                        'link_text' => 'Viber'
                    ),
                    'sort_order' => '1',
                    'link_status' => '0'
                ),
                'ts_whatsapp' => array(
                    'link' => '799999999',
                    'ru-ru' => array(
                        'link_text' => 'Whatsapp'
                    ),
                    'sort_order' => '2',
                    'link_status' => '0'
                ),
                'ts_messenger' => array(
                    'link' => 'messenger',
                    'ru-ru' => array(
                        'link_text' => 'Messenger'
                    ),
                    'sort_order' => '3',
                    'link_status' => '0'
                ),
                'ts_skype' => array(
                    'link' => 'Skype.skype',
                    'ru-ru' => array(
                        'link_text' => 'Skype'
                    ),
                    'sort_order' => '4',
                    'link_status' => '0'
                ),
                'ts_mail' => array(
                    'link' => $this->config->get('config_email'),
                    'ru-ru' => array(
                        'link_text' => 'Mail'
                    ),
                    'sort_order' => '5',
                    'link_status' => '1'
                ),
                'ts_vk' => array(
                    'link' => 'vk',
                    'ru-ru' => array(
                        'link_text' => 'VK'
                    ),
                    'sort_order' => '6',
                    'link_status' => '0'
                ),
                'ts_instagram' => array(
                    'link_status' => '0'
                ),
                'phone1' => array(
                    'link_status' => '0'
                ),
                'phone2' => array(
                    'link_status' => '0'
                ),
                'phone3' => array(
                    'link_status' => '0'
                ),
                'ts_viber_b' => array(
                    'link_status' => '0'
                ),
                'ts_viber_group' => array(
                    'link_status' => '0'
                ),
                'ts_custom_callback' => array(
                    'link_status' => '0'
                ),
                'ts_faq' => array(
                    'link_status' => '0'
                ),
                'ts_jivosite' => array(
                    'link_status' => '0'
                ),
                'ts_ydialog' => array(
                    'link_status' => '0'
                ),
                'ts_talkme' => array(
                    'link_status' => '0'
                ),
            )
        );
        $this->model_setting_setting->editSetting('module_ts_messengers_widget', $default_settings);
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/module/ts_messengers_widget')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (isset($this->error) && $this->error) {
            $this->session->data['warning'] = $this->language->get('error_check_all');
        }
        return !$this->error;
    }

}