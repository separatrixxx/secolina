<?php

class ControllerExtensionModuleRegister extends Controller
{
    public function confirm()
    {
        $confirmationCode = $this->request->get['confirmation_code'];
        $customerId = $this->request->get['id'];

        $this->load->model('account/customer');
        $customer = $this->model_account_customer->getCustomer($customerId);
        if ($customer['confirmation_code'] === $confirmationCode) {
            $this->model_account_customer->activateCustomerById($customerId);

            $this->model_account_customer->deleteLoginAttempts($customer['email']);

            unset($this->session->data['guest']);
            $this->load->language('account/success_register');
            $this->session->data['success'] = $this->language->get('text_success_register');

            $token = token(64);

            $this->model_account_customer->editToken($customer['customer_id'], $token);

            $this->response->redirect($this->url->link('account/login', 'token='.$token));
        } else {
            $this->response->redirect($this->url->link('error/not_found'));
        }
    }
}