<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

				$this->load->model('tool/image');
			

		$data['categories'] = array();

				$data['special'] = $this->url->link('product/special');
			

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1

				if ($category['image']) {
					$category['image'] = $this->model_tool_image->resize($category['image'], 25, 25);
				} else {
					$category['image'] = $this->model_tool_image->resize('placeholder.png', 25, 25);
				}
			
				$data['categories'][] = array(

				'image' => $category['image'],
			
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}


                $blog_title = $this->config->get('blogsetting_home_title');
				if (!empty($blog_title[$this->config->get('config_language_id')])) {
                    $data['categories'][] = array(
                        'name'     => $blog_title[$this->config->get('config_language_id')],
                        'children' => '',
                        'column'   => 1,
                        'href'     => $this->url->link('blog/home', '', true)
                    );
                }
                
		return $this->load->view('common/menu', $data);
	}
}
