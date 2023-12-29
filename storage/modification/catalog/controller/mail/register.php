<?php
class ControllerMailRegister extends Controller {
	public function index(&$route, &$args, &$output) {
		$this->load->language('mail/register');

		$data['text_welcome'] = sprintf($this->language->get('text_welcome'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
		$data['text_login'] = $this->language->get('text_login');
		$data['text_approval'] = $this->language->get('text_approval');
		$data['text_service'] = $this->language->get('text_service');
		$data['text_thanks'] = $this->language->get('text_thanks');
        $data['href_to_confirmation'] = html_entity_decode($this->url->link('extension/module/register/confirm', 'confirmation_code='.$args[0]['confirmation_code'].'&id='.$output));

        $arrayToReplace = [
            'href_to_confirmation' => html_entity_decode($this->url->link('extension/module/register/confirm', 'confirmation_code='.$args[0]['confirmation_code'].'&id='.$output)),
            'firstname' => $args[0]['firstname'],
            'lastname' => $args[0]['lastname'],
            'email' => $args[0]['email'],
            'telephone' => $args[0]['telephone'],
            'password' => $args[0]['password'],
            'store' => html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'),
        ];

        $this->load->model('setting/setting');
        $language_id = $this->config->get('config_language_id');
        $setting = $this->model_setting_setting->getSetting('module_register_email_confirmation');
        $twig = null;
        if (isset($setting['module_register_email_confirmation_email_contents'][$language_id]) &&
            !empty ($setting['module_register_email_confirmation_email_contents'][$language_id])
        ) {
            $start = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">';
            $finish = '</html>';
            $head = '';
            if (isset($setting['module_register_email_confirmation_email_head'][$language_id]) &&
                !empty ($setting['module_register_email_confirmation_email_head'][$language_id])
            ) {
                $head = $setting['module_register_email_confirmation_email_head'];
            }
            $twig = $start.$head.'<body>'.$setting['module_register_email_confirmation_email_contents'][$language_id].'</body>'.$finish;
            foreach ($arrayToReplace as $key => $value) {
                $twig = str_replace('{ '.$key.' }', $value, $twig);
            }
        }

		$this->load->model('account/customer_group');
			
		if (isset($args[0]['customer_group_id'])) {
			$customer_group_id = $args[0]['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		$clientGroupApproved = isset($setting['module_register_email_confirmation_customer_group_id']) && in_array($customer_group_id, $setting['module_register_email_confirmation_customer_group_id']);
					
		$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);
		
		if ($customer_group_info) {
			$data['approval'] = $customer_group_info['approval'];
		} else {
			$data['approval'] = '';
		}
			
		$data['login'] = $this->url->link('account/login', '', true);		
		$data['store'] = html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8');

		$mail = new Mail($this->config->get('config_mail_engine'));
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		$mail->setTo($args[0]['email']);
		$mail->setFrom($this->config->get('config_email'));
		$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
		$mail->setSubject(sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8')));
		
        if (!is_null($twig) && $clientGroupApproved) {
            $mail->setHtml(html_entity_decode($twig));
        } else {
            $mail->setText($this->load->view('mail/register', $data));

			
            /* start socnetauth2 metka */
			if( $this->config->get('module_socnetauth2_status') &&
				$this->config->get('module_socnetauth2_newcustomer_mail_type') == 'custom' &&
				!empty($args[0]['is_sna'])
			)
			{
				$this->load->model('extension/module/socnetauth2'); 
				$res_array = $this->model_extension_module_socnetauth2->getNewCustomerMessage(
					$args[0]['customer_id'], 
					sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8')), 
					$this->load->view('mail/register', $data), 
					$args[0]
				); 
				
				$mail->setSubject($res_array[0]);
				$mail->setText($res_array[1]);
			}
			/* end socnetauth2 metka */
			
            
        }

		$mail->send(); 
	}
	
	public function alert(&$route, &$args, &$output) {
		// Send to main admin email if new account email is enabled
		if (in_array('account', (array)$this->config->get('config_mail_alert'))) {
			$this->load->language('mail/register');
			
			$data['text_signup'] = $this->language->get('text_signup');
			$data['text_firstname'] = $this->language->get('text_firstname');
			$data['text_lastname'] = $this->language->get('text_lastname');
			$data['text_customer_group'] = $this->language->get('text_customer_group');
			$data['text_email'] = $this->language->get('text_email');
			$data['text_telephone'] = $this->language->get('text_telephone');
			
			$data['firstname'] = $args[0]['firstname'];
			$data['lastname'] = $args[0]['lastname'];
			
			$this->load->model('account/customer_group');
			
			if (isset($args[0]['customer_group_id'])) {
				$customer_group_id = $args[0]['customer_group_id'];
			} else {
				$customer_group_id = $this->config->get('config_customer_group_id');
			}

		$clientGroupApproved = isset($setting['module_register_email_confirmation_customer_group_id']) && in_array($customer_group_id, $setting['module_register_email_confirmation_customer_group_id']);
			
			$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);
			
			if ($customer_group_info) {
				$data['customer_group'] = $customer_group_info['name'];
			} else {
				$data['customer_group'] = '';
			}
			
			$data['email'] = $args[0]['email'];
			$data['telephone'] = $args[0]['telephone'];

			$mail = new Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($this->config->get('config_email'));
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($this->language->get('text_new_customer'), ENT_QUOTES, 'UTF-8'));
			$mail->setText($this->load->view('mail/register_alert', $data));
			$mail->send();

			// Send to additional alert emails if new account email is enabled
			$emails = explode(',', $this->config->get('config_mail_alert_email'));

			foreach ($emails as $email) {
				if (utf8_strlen($email) > 0 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$mail->setTo($email);
					$mail->send();
				}
			}
		}	
	}
}		