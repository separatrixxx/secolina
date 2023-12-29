<?php
class ControllerCommonLanguage extends Controller {
	public function index() {
		$this->load->language('common/language');

		$data['action'] = $this->url->link('common/language/language', '', $this->request->server['HTTPS']);

		$data['code'] = $this->session->data['language'];

		$this->load->model('localisation/language');

		$data['languages'] = array();

		$results = $this->model_localisation_language->getLanguages();

		foreach ($results as $result) {
			if ($result['status']) {
				$data['languages'][] = array(
					'name' => $result['name'],
					'code' => $result['code']
				);
			}
		}

		if (!isset($this->request->get['route'])) {
			$data['redirect'] = 'common/home';
		} else {
			$url_data = $this->request->get;

			unset($url_data['_route_']);

			$route = $url_data['route'];

			unset($url_data['route']);

      unset($url_data['site_language']);
      unset($url_data['_route_']);
    

				if( isset( $url_data[$this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp'] ) ) {
					unset( $url_data[$this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp'] );
				}
			

			$url = '';

			if ($url_data) {
				$url = '&' . urldecode(http_build_query($url_data, '', '&'));
			}

			$data['redirect'] = $route . $url;
		}

		return $this->load->view('common/language', $data);
	}

	public function language() {

				if( ! empty( $this->request->post['redirect'] ) ) {
					$this->load->model('extension/module/mega_filter');
				
					$this->request->post['redirect'] = $this->model_extension_module_mega_filter->removeSeoMfpFromUrl( $this->request->post['redirect'], true );
				}
			
		if (isset($this->request->post['code']) && !$this->config->get('mlseo_store_mode')) {
      $lgCodes = array_flip((array) $this->config->get('mlseo_lang_codes'));

      if (!empty($lgCodes[$this->request->post['code']])) {
        $this->config->set('config_language', $this->request->post['code']);
        $this->config->set('config_language_id', $lgCodes[$this->request->post['code']]);
      }
      
			$this->session->data['language'] = $this->request->post['code'];
           
		}

		if (isset($this->request->post['redirect'])) {
			
      if (!empty($this->request->post["code"])) {
        $this->load->model('localisation/language');
        $languagesByCode = $this->model_localisation_language->getLanguages();

        if (isset($languagesByCode[$this->request->post['code']]['language_id'])) {
          $this->config->set('config_language_id', $languagesByCode[$this->request->post['code']]['language_id']);
        }
      }

      if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
        $connection = 'SSL';
      } else {
        $connection = 'NONSSL';
      }

      $redir_route = $this->request->post['redirect'];

      if (substr($redir_route, 0, 1) == '/') {
        $this->response->redirect($this->request->post['redirect']);
      }

      if (substr($redir_route, 0, 4) == 'http') {
        $redir_route = 'common/home';
      }

      if ($redir_params = strstr($redir_route, '&')) {
        $redir_route = str_replace($redir_params, '', $redir_route);
      } else {
        $redir_params = '';
      }

      // handle sub-stores rewriting
      if ($this->config->get('mlseo_store_mode')) {
        // set store currency
        $this->session->data['currency'] = $this->config->get('config_currency');
        unset($this->session->data['shipping_method']);
        unset($this->session->data['shipping_methods']);

        $lang_to_store = $this->config->get('mlseo_lang_to_store');
      }

      if (!empty($lang_to_store)) {
        $this->response->redirect(str_replace(array(rtrim($this->config->get('config_url'), '/'), rtrim($this->config->get('config_ssl'), '/')), $lang_to_store[$this->request->post['code']], $this->url->link($redir_route, str_replace('&amp;', '&', $redir_params), $connection)));
      }

      $this->response->redirect($this->url->link($redir_route, str_replace('&amp;', '&', $redir_params), $connection));
      
		} else {
			$this->response->redirect($this->url->link('common/home'));
		}
	}
}