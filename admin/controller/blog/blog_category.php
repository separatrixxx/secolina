<?php 
class ControllerBlogBlogCategory extends Controller { 
	private $error = array();
 
	public function index() {
		$this->load->language('blog/blog_category');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('blog/blog_category');
		 
		$this->getList();
	}

	public function insert() {
		$this->load->language('blog/blog_category');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('blog/blog_category');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_blog_blog_category->addBlogCategory($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');
			
			$this->response->redirect($this->url->link('blog/blog_category', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getForm();
	}

	public function update() {
		$this->load->language('blog/blog_category');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('blog/blog_category');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_blog_blog_category->editBlogCategory($this->request->get['blog_category_id'], $this->request->post);
			
			$this->session->data['success'] = $this->language->get('text_success');
			
			$this->response->redirect($this->url->link('blog/blog_category', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('blog/blog_category');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('blog/blog_category');
		
		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $blog_category_id) {
				$this->model_blog_blog_category->deleteBlogCategory($blog_category_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('blog/blog_category', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getList();
	}

	private function getList() {
   		$url = "";
		
		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('blog/blog_category', 'user_token=' . $this->session->data['user_token'], true)
   		);
									
		$data['add'] = $this->url->link('blog/blog_category/insert', 'user_token=' . $this->session->data['user_token'], true);
		$data['delete'] = $this->url->link('blog/blog_category/delete', 'user_token=' . $this->session->data['user_token'], true);
		
		
		$data['blog_categories'] = array();
		
		$results = $this->model_blog_blog_category->getBlogCategories(0);

		foreach ($results as $result) {

			$data['blog_categories'][] = array(
				'blog_category_id' => $result['blog_category_id'],
				'name'        => $result['name'],
				'sort_order'  => $result['sort_order'],
				'status'  => $result['status'],
				'selected'    => isset($this->request->post['selected']) && in_array($result['blog_category_id'], $this->request->post['selected']),
				'edit'        => $this->url->link('blog/blog_category/update', 'user_token=' . $this->session->data['user_token'] . '&blog_category_id=' . $result['blog_category_id'] . $url, true)
			);
		}
 
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
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('blog/blog_category_list', $data)); 
	}

	private function getForm() {
		
 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
	
 		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = array();
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('blog/blog_category', 'user_token=' . $this->session->data['user_token'], true)
   		);
		
		if (!isset($this->request->get['blog_category_id'])) {
			$data['action'] = $this->url->link('blog/blog_category/insert', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('blog/blog_category/update', 'user_token=' . $this->session->data['user_token'] . '&blog_category_id=' . $this->request->get['blog_category_id']);
		}
		
		$data['cancel'] = $this->url->link('blog/blog_category', 'user_token=' . $this->session->data['user_token'], true);

		$data['token'] = $this->session->data['user_token'];

		if (isset($this->request->get['blog_category_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
      		$blog_category_info = $this->model_blog_blog_category->getBlogCategory($this->request->get['blog_category_id']);
    	}
		
		$this->load->model('localisation/language');
		
		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['blog_category_description'])) {
			$data['blog_category_description'] = $this->request->post['blog_category_description'];
		} elseif (isset($blog_category_info)) {
			$data['blog_category_description'] = $this->model_blog_blog_category->getBlogCategoryDescriptions($this->request->get['blog_category_id']);
		} else {
			$data['blog_category_description'] = array();
		}

		$blog_categories = $this->model_blog_blog_category->getBlogCategories(0);

		// Remove own id from list
		if (isset($blog_category_info)) {
			foreach ($blog_categories as $key => $blog_category) {
				if ($blog_category['blog_category_id'] == $blog_category_info['blog_category_id']) {
					unset($blog_categories[$key]);
				}
			}
		}

		$data['blog_categories'] = $blog_categories;

		if (isset($this->request->post['parent_id'])) {
			$data['parent_id'] = $this->request->post['parent_id'];
		} elseif (isset($blog_category_info)) {
			$data['parent_id'] = $blog_category_info['parent_id'];
		} else {
			$data['parent_id'] = 0;
		}
						
		$this->load->model('setting/store');

		$data['stores'] = array();
		
		$data['stores'][] = array(
			'store_id' => 0,
			'name'     => $this->language->get('text_default')
		);
		
		$stores = $this->model_setting_store->getStores();

		foreach ($stores as $store) {
			$data['stores'][] = array(
				'store_id' => $store['store_id'],
				'name'     => $store['name']
			);
		}
		
		if (isset($this->request->post['blog_category_store'])) {
			$data['blog_category_store'] = $this->request->post['blog_category_store'];
		} elseif (isset($blog_category_info)) {
			$data['blog_category_store'] = $this->model_blog_blog_category->getBlogCategoryStores($this->request->get['blog_category_id']);
		} else {
			$data['blog_category_store'] = array(0);
		}			
		
		if (isset($this->request->post['blogcategory_seo_url'])) {
			$data['blogcategory_seo_url'] = $this->request->post['blogcategory_seo_url'];
		} elseif (isset($this->request->get['blog_category_id'])) {
			$data['blogcategory_seo_url'] = $this->model_blog_blog_category->getBlogCategorySeoUrls($this->request->get['blog_category_id']);
		} else {
			$data['blogcategory_seo_url'] = array();
		}
				
		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (isset($blog_category_info)) {
			$data['sort_order'] = $blog_category_info['sort_order'];
		} else {
			$data['sort_order'] = 0;
		}
		
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (isset($blog_category_info)) {
			$data['status'] = $blog_category_info['status'];
		} else {
			$data['status'] = 1;
		}
				
		if (isset($this->request->post['blog_category_layout'])) {
			$data['blog_category_layout'] = $this->request->post['blog_category_layout'];
		} elseif (isset($blog_category_info)) {
			$data['blog_category_layout'] = $this->model_blog_blog_category->getBlogCategoryLayouts($this->request->get['blog_category_id']);
		} else {
			$data['blog_category_layout'] = array();
		}

		$this->load->model('design/layout');
		
		$data['layouts'] = $this->model_design_layout->getLayouts();
						
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('blog/blog_category_form', $data)); 
	}

	private function validateForm() {
		if (!$this->user->hasPermission('modify', 'blog/blog_category')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['blog_category_description'] as $language_id => $value) {
			if ((strlen(utf8_decode($value['name'])) < 2) || (strlen(utf8_decode($value['name'])) > 255)) {
				$this->error['name'][$language_id] = $this->language->get('error_name');
			}
		}

		if ($this->request->post['blogcategory_seo_url']) {
			$this->load->model('design/seo_url');
			
			foreach ($this->request->post['blogcategory_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						if (count(array_keys($language, $keyword)) > 1) {
							$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_unique');
						}

						$seo_urls = $this->model_design_seo_url->getSeoUrlsByKeyword($keyword);
	
						foreach ($seo_urls as $seo_url) {
							if (($seo_url['store_id'] == $store_id) && (!isset($this->request->get['blog_category_id']) || ($seo_url['query'] != 'blog_category_id=' . $this->request->get['blog_category_id']))) {		
								$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_keyword');
				
								break;
							}
						}
					}
				}
			}
		}
		
		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}
					
		return !$this->error;
	}

	private function validateDelete() {
		if (!$this->user->hasPermission('modify', 'blog/blog_category')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
 
		return !$this->error;
	}
	
	
	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name'])) {
			$this->load->model('blog/blog_category');

			$filter_data = array(
				'filter_name' => $this->request->get['filter_name']
			);

			$results = $this->model_blog_blog_category->getBlogCategories(0, $filter_data);

			foreach ($results as $result) {
				$json[] = array(
					'category_id' => $result['blog_category_id'],
					'name'        => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
}