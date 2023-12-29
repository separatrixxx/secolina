<?php

class ControllerExtensionModuleSuccessRegister extends Controller
{
    public function index()
    {
        $this->load->language('account/success_register');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [
            [
                'text' => $this->language->get('text_home'),
                'href' => $this->url->link('common/home'),
            ],
            [
                'text' => $this->language->get('text_success_register'),
                'href' => $this->url->link('extension/module/success_register'),
            ],
        ];

        $data['text_message'] = sprintf($this->language->get('text_message'), $this->url->link('information/contact'));

        $data['continue'] = $this->url->link('common/home');

        $data['column_left']    = $this->load->controller('common/column_left');
        $data['column_right']   = $this->load->controller('common/column_right');
        $data['content_top']    = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer']         = $this->load->controller('common/footer');
        $data['header']         = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('common/success', $data));
    }
}