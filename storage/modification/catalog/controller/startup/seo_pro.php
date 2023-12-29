<?php
class ControllerStartupSeoPro extends Controller {
	private $cache_data = null;

				private $mfilter_cache_data = null;
				private $mfilter_seo_config;
			

	private $config_store_id;

	private $config_language_id;

	public function __construct($registry) {
		parent::__construct($registry);

				$this->mfilter_seo_config = $this->config->get( 'mega_filter_seo' );
			

				$this->mfilter_seo_config = $this->config->get( 'mega_filter_seo' );
			
		$this->config_store_id = $this->config->get('config_store_id');
		$this->config_language_id = $this->config->get('config_language_id');
		$this->cache_data = $this->cache->get('seo_pro.'.(int)$this->config->get('config_store_id').".".(int)$this->config->get('config_language_id'));

				if( ! empty( $this->mfilter_seo_config['enabled'] ) || ! empty( $this->mfilter_seo_config['aliases_enabled'] ) ) {
					$this->mfilter_cache_data = $this->cache->get('seopro_mfp_'.$this->config->get('config_store_id'));
					
					if( ! $this->mfilter_cache_data ) {
						$mfilter_query = $this->db->query( "SELECT * FROM `" . DB_PREFIX . "mfilter_url_alias` WHERE `store_id` = " . (int)$this->config->get('config_store_id'));
					
						foreach ($mfilter_query->rows as $row) {
							$this->mfilter_cache_data[mb_strtolower($row['alias'].'::'.$row['path'],'utf8')][$row['language_id']] = $row['mfp'];
						}

						$this->cache->set('seopro_mfp_'.$this->config->get('config_store_id'), $this->mfilter_cache_data);
					}
				}
			
		if (!$this->cache_data) {
			$query = $this->db->query("SELECT LOWER(`keyword`) as 'keyword', `query` FROM " . DB_PREFIX . "seo_url WHERE store_id='".(int)$this->config_store_id."' AND language_id = '".(int)$this->config_language_id."' ORDER BY seo_url_id");
			$this->cache_data = array();
			foreach ($query->rows as $row) {
				if (isset($this->cache_data['keywords'][$row['keyword']])){
					$this->cache_data['keywords'][$row['query']] = $this->cache_data['keywords'][$row['keyword']];
					continue;
				}
				$this->cache_data['keywords'][$row['keyword']] = $row['query'];
				$this->cache_data['queries'][$row['query']] = $row['keyword'];
			}
			$this->cache->set('seo_pro.'.(int)$this->config_store_id.".".(int)$this->config_language_id, $this->cache_data);
		}
	}

	public function index() {

		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		} else {
			return;
		}

		// Decode URL
		if (!isset($this->request->get['_route_'])) {
			$this->validate();
		} else {
			$route_ = $route = $this->request->get['_route_'];
			unset($this->request->get['_route_']);
			$parts = explode('/', trim(utf8_strtolower($route), '/'));

				$mfp_parts = explode('/', trim(isset($_GET['_route_'])?$_GET['_route_']:(isset($route_)?$route_:$route), '/'));

				if( ! empty( $this->mfilter_seo_config['enabled'] ) ) {
					if( class_exists( 'VQMod' ) ) {
						require_once VQMod::modCheck( modification( DIR_SYSTEM . 'library/mfilter_core.php' ) );
					} else {
						require_once modification( DIR_SYSTEM . 'library/mfilter_core.php' );
					}
				
					if( class_exists( 'MegaFilterCore' ) ) {
						$parts = MegaFilterCore::prepareSeoParts( $this, $mfp_parts );
					}
				}
			
			list($last_part) = explode('.', array_pop($parts));
			array_push($parts, $last_part);

			$rows = array();
			
				$mfp_parts = array();
				$mfp_key = $mfp_key2 = 0;
				
				foreach ($parts as $keyword) {
					$mfp_keyword = isset( $org_parts[$mfp_key2] ) ? $org_parts[$mfp_key2] : $keyword;
					$mfp_key2++;
					
					if( ! empty( $this->mfilter_seo_config['enabled'] ) ) {
						if( class_exists( 'MegaFilterCore' ) && MegaFilterCore::prepareSeoPart( $this, $mfp_keyword ) ) {
							continue;
						} else {
							$mfp_parts[] = $keyword;
						}
					} else {
						$mfp_parts[] = $keyword;
					}
				
					$mfp_key++;
			
				if (isset($this->cache_data['keywords'][$keyword])) {
					$rows[] = array('keyword' => $keyword, 'query' => $this->cache_data['keywords'][$keyword]);
				} elseif ($keyword!='') {
					$query_multilang = $this->db->query("SELECT `query` FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $keyword ."'");
					if ($query_multilang->row) $rows[] = array('keyword' => $keyword, 'query' => $query_multilang->row['query']);
				}
			}

			if (isset($this->cache_data['keywords'][$route])){
				$keyword = $route;
				$parts = array($keyword);
				$rows = array(array('keyword' => $keyword, 'query' => $this->cache_data['keywords'][$keyword]));
			}


				$parts = $mfp_parts;
				
				if( null !== ( $mfp_last_part = array_pop( $mfp_parts ) ) ) {
					$mfp_parts[] = $mfp_last_part;
					$mfp_path = implode( '/', array_slice( $parts, 0, -1 ) );
					$mfp_path = class_exists( 'MegaFilterCore' ) ? MegaFilterCore::preparePath( $this, $mfp_path ) : $mfp_path;
					$mfp_cache_key = $mfp_last_part . '::' . $mfp_path;
				
					if( isset( $this->mfilter_cache_data[$mfp_cache_key][$this->config->get('config_language_id')] ) ) {
						$this->request->get[($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp')] = $this->mfilter_cache_data[$mfp_cache_key][$this->config->get('config_language_id')];
						$rows[] = array('keyword' => $keyword, 'query' => ($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp').'='.$this->mfilter_cache_data[$mfp_cache_key][$this->config->get('config_language_id')]);
						$this->request->request['mfp_seo_alias'] = $mfp_last_part;
					}
				}
			
			if (count($rows) == sizeof($parts)) {
				$queries = array();
				foreach ($rows as $row) {
					$queries[utf8_strtolower($row['keyword'])] = $row['query'];
				}

				reset($parts);
				foreach ($parts as $part) {
					if(!isset($queries[$part])) return false;
					$url = explode('=', $queries[$part], 2);

					if ($url[0] == 'category_id') {
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					} elseif (count($url) > 1) {
						$this->request->get[$url[0]] = $url[1];
					}
				}
			} else {
				$this->request->get['route'] = 'error/not_found';
			}

			if (isset($this->request->get['product_id'])) {
				$this->request->get['route'] = 'product/product';
				if (!isset($this->request->get['path'])) {
					$path = $this->getPathByProduct($this->request->get['product_id']);
					if ($path) $this->request->get['path'] = $path;
				}
			
				} elseif (isset($this->request->get['testimonial_id'])) {
					$this->request->get['route'] = 'information/testimonial/info';
				} elseif (isset($this->request->get['path'])) {
			
				
				if( empty( $this->request->get['route'] ) || strpos( $this->request->get['route'], 'extension/module/mega_filter' ) === false ) {
					if( isset( $queries[$parts[0]] ) && strpos( $queries[$parts[0]], '/' ) !== false ) {
						$this->request->get['route'] = $queries[$parts[0]];
					} else {
						if( $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp') ) {
							preg_match( '/path\[([^]]*)\]/', $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp'), $mf_matches );

							if( empty( $mf_matches[1] ) ) {
								preg_match( '#path,([^/]+)#', $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp'), $mf_matches );
							}

							if( ! empty( $mf_matches[1] ) && isset( $this->request->get['manufacturer_id'] ) ) {
								$this->request->get['route'] = 'product/manufacturer/info';
							} else {
								$this->request->get['route'] = 'product/category';
							}
						} else {
							$this->request->get['route'] = 'product/category';
						}
					}
				}
			
			} elseif (isset($this->request->get['manufacturer_id'])) {
				$this->request->get['route'] = 'product/manufacturer/info';
			} elseif (isset($this->request->get['information_id'])) {
				$this->request->get['route'] = 'information/information';

			} elseif (isset($this->request->get['blog_id'])&&isset($this->request->get['page'])) {
				$this->request->get['route'] = 'blog/blog/comment';
			} elseif (isset($this->request->get['blog_id'])) {
				$this->request->get['route'] = 'blog/blog';
			} elseif (isset($this->request->get['blog_category_id'])) {
				$this->request->get['route'] = 'blog/category';
				$this->request->get['blogpath'] = $this->request->get['blog_category_id'];
				unset($this->request->get['blog_category_id']);
			
			} elseif(isset($this->cache_data['queries'][$route_])) {
					header($this->request->server['SERVER_PROTOCOL'] . ' 301 Moved Permanently');
					$this->response->redirect($this->cache_data['queries'][$route_]);
			} else {
				if (isset($queries[$parts[0]])) {
					$this->request->get['route'] = $queries[$parts[0]];
				}
			}

			$this->validate();

			if (isset($this->request->get['route'])) {
				return new Action($this->request->get['route']);
			}
		}
	}

	public function rewrite($link) {
		if ($this->config_store_id != $this->config->get('config_store_id') || $this->config_language_id != $this->config->get('config_language_id')) {
			$this->__construct($this->registry);
		}

		if (!$this->config->get('config_seo_url')) return $link;

		$seo_url = '';

		$component = parse_url(str_replace('&amp;', '&', $link));

		$data = array();
		parse_str($component['query'], $data);

		$route = $data['route'];
		unset($data['route']);

		switch ($route) {

			case 'blog/blog':
				if (isset($data['blog_id'])) {
					// Whitelist GET parameters
					$tmp = $data;
					$data = array();
					if ($this->config->get('config_seo_url_include_path')) {
						$data['blog_category_id'] = $this->getPathByBlog($tmp['blog_id']);
						if (!$data['blog_category_id']) return $link;
					}

					$allowed_parameters = array(
						'blog_id', 'tracking',
						// Compatibility with "OCJ Merchandising Reports" module.
						// Save and pass-thru module specific GET parameters.
						'uri', 'list_type',
						// Compatibility with Google Analytics
						'gclid', 'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content',
						'type', 'source', 'block', 'position', 'keyword',
						// Compatibility with Yandex Metrics, Yandex Market
						'yclid', 'ymclid', 'openstat', 'frommarket',
						'openstat_service', 'openstat_campaign', 'openstat_ad', 'openstat_source',
						// Compatibility with Themeforest Rgen templates (popup with product preview)
						'urltype'
						);
					foreach($allowed_parameters as $ap) {
						if (isset($tmp[$ap])) {
							$data[$ap] = $tmp[$ap];
						}
					}
				}
				break;

			case 'blog/category':
				if (isset($data['blog_category_id'])) {
					$category = explode('_', $data['blog_category_id']);
					$category = end($category);
					$data['blog_category_id'] = $this->getPathByBlogCategory($category);
					if (!$data['blog_category_id']) return $link;

					$allowed_parameters = array(
						'blogpath', 'blog_category_id', 'tracking',
						// Compatibility with "OCJ Merchandising Reports" module.
						// Save and pass-thru module specific GET parameters.
						'uri', 'list_type',
						// Compatibility with Google Analytics
						'gclid', 'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content',
						'type', 'source', 'block', 'position', 'keyword',
						// Compatibility with Yandex Metrics, Yandex Market
						'yclid', 'ymclid', 'openstat', 'frommarket',
						'openstat_service', 'openstat_campaign', 'openstat_ad', 'openstat_source',
						// Compatibility with Themeforest Rgen templates (popup with product preview)
						'urltype'
						);
					foreach($allowed_parameters as $ap) {
						if (isset($tmp[$ap])) {
							$data[$ap] = $tmp[$ap];
						}
					}
				}
				break;
			
			case 'product/product':
				if (isset($data['product_id'])) {
					$explode = explode('/',$data['product_id']);
					if (!empty($explode)) $data['product_id'] = $explode[0];
					$tmp = $data;
					$data = array();
					if ($this->config->get('config_seo_url_include_path')) {
						$data['path'] = $this->getPathByProduct($tmp['product_id']);
						if (!$data['path']) return $link;
					}
					$data['product_id'] = $tmp['product_id'];
					$allowed_parameters = array(
						'product_id', 'tracking',
						'uri', 'list_type',
						'gclid', 'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content',
						'type', 'source', 'block', 'position', 'keyword',
						'yclid', 'ymclid', 'openstat', 'frommarket',
						'openstat_service', 'openstat_campaign', 'openstat_ad', 'openstat_source'
						);
					foreach($allowed_parameters as $ap) {
						if (isset($tmp[$ap])) {
							$data[$ap] = $tmp[$ap];
						}
					}
				}
				break;

			case 'product/category':
				if (isset($data['path'])) {
					$category = explode('_', $data['path']);
					$category = end($category);
					$data['path'] = $this->getPathByCategory($category);
					if (!$data['path']) return $link;
				}
				break;


				case 'blog/blog/comment':
			
			case 'product/product/review':
			case 'information/information/info':
			case 'information/information/agree':
			case 'checkout/cart/remove':
			case 'common/cart/info':
				return $link;
				break;

			default:
				break;
		}

		if ($component['scheme'] == 'https') {
			$link = $this->config->get('config_ssl');
		} else {
			$link = $this->config->get('config_url');
		}

		$link .= 'index.php?route=' . $route;

		if (count($data)) {
			$link .= '&amp;' . urldecode(http_build_query($data, '', '&amp;'));
		}

		$queries = array();
		if(!in_array($route, array('product/search'))) {
			foreach($data as $key => $value) {
				switch($key) {

				case 'testimonial_id':
			
					case 'product_id':
					case 'manufacturer_id':
					case 'category_id':
					case 'information_id':
					case 'order_id':

				case 'blog_id':
			
						$queries[] = $key . '=' . $value;
						unset($data[$key]);
						$postfix = 1;
						break;


				case 'blog_category_id':
				case 'blogpath':
					$category_path = explode('_', $value);
					$category_id = end($category_path);
					$categories = $this->getPathByBlogCategory($category_id);
					$categories = explode('_', $categories);
					foreach ($categories as $category) {
						$queries[] = 'blog_category_id=' . $category;
					}
					unset($data[$key]);
					break;
			
					case 'path':
						$categories = explode('_', $value);
						foreach($categories as $category) {
							$queries[] = 'category_id=' . $category;
						}
						unset($data[$key]);
						break;

					default:
						break;
				}
			}
		}

		if(empty($queries)) {
			$queries[] = $route;
		}

		$rows = array();
		foreach($queries as $query) {
			if(isset($this->cache_data['queries'][$query])) {
				$rows[] = array('query' => $query, 'keyword' => $this->cache_data['queries'][$query]);
			}
		}

		if(count($rows) == count($queries)) {
			$aliases = array();
			foreach($rows as $row) {
				$aliases[$row['query']] = $row['keyword'];
			}
			foreach($queries as $query) {
				$seo_url .= '/' . rawurlencode($aliases[$query]);
			}
		}

		if ($seo_url == '') return $link;

		$seo_url = trim($seo_url, '/');

		if ($component['scheme'] == 'https') {
			$seo_url = $this->config->get('config_ssl') . $seo_url;
		} else {
			$seo_url = $this->config->get('config_url') . $seo_url;
		}

		if (isset($postfix)) {
			$seo_url .= trim($this->config->get('config_seo_url_postfix'));
		} else {
			$seo_url .= '/';
		}

		if(substr($seo_url, -2) == '//') {
			$seo_url = substr($seo_url, 0, -1);
		}

		if (count($data)) {
			$seo_url .= '?' . urldecode(http_build_query($data, '', '&amp;'));
		}

		return $seo_url;
	}


			private function getPathByBlog($blog_id) {
				$blog_id = (int)$blog_id;
				if ($blog_id < 1) return false;

				static $path = null;
				if (!is_array($path)) {
					$path = $this->cache->get('blog.seopath');
					if (!is_array($path)) $path = array();
				}

				if (!isset($path[$blog_id])) {
					$query = $this->db->query("SELECT blog_category_id FROM " . DB_PREFIX . "blog_to_category WHERE blog_id = '" . $blog_id . "' LIMIT 1");

					$path[$blog_id] = $this->getPathByBlogCategory($query->num_rows ? (int)$query->row['blog_category_id'] : 0);

					$this->cache->set('blog.seopath', $path);
				}

				return $path[$blog_id];
			}

			private function getPathByBlogCategory($category_id) {
				$category_id = (int)$category_id;
				if ($category_id < 1) return false;

				static $path = null;
				if (!is_array($path)) {
					$path = $this->cache->get('blog_category.seopath');
					if (!is_array($path)) $path = array();
				}

				if (!isset($path[$category_id])) {
					$max_level = 10;

					$sql = "SELECT CONCAT_WS('_'";
					for ($i = $max_level-1; $i >= 0; --$i) {
						$sql .= ",t$i.blog_category_id";
					}
					$sql .= ") AS blogpath FROM " . DB_PREFIX . "blog_category t0";
					for ($i = 1; $i < $max_level; ++$i) {
						$sql .= " LEFT JOIN " . DB_PREFIX . "blog_category t$i ON (t$i.blog_category_id = t" . ($i-1) . ".parent_id)";
					}
					$sql .= " WHERE t0.blog_category_id = '" . $category_id . "'";

					$query = $this->db->query($sql);

					$path[$category_id] = $query->num_rows ? $query->row['blogpath'] : false;

					$this->cache->set('blog_category.seopath', $path);
				}

				return $path[$category_id];
			}
			
	private function getPathByProduct($product_id) {
		$product_id = (int)$product_id;
		if ($product_id < 1) return false;

		static $path = null;
		if (!isset($path)) {
			$path = $this->cache->get('product.seopath');
			if (!isset($path)) $path = array();
		}

		if (!isset($path[$product_id])) {
			$query = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . $product_id . "' ORDER BY main_category DESC LIMIT 1");

			$path[$product_id] = $this->getPathByCategory($query->num_rows ? (int)$query->row['category_id'] : 0);

			$this->cache->set('product.seopath', $path);
		}

		return $path[$product_id];
	}

	private function getPathByCategory($category_id) {
		$category_id = (int)$category_id;
		if ($category_id < 1) return false;

		static $path = null;
		if (!isset($path)) {
			$path = $this->cache->get('category.seopath');
			if (!isset($path)) $path = array();
		}

		if (!isset($path[$category_id])) {
			$max_level = 10;

			$sql = "SELECT CONCAT_WS('_'";
			for ($i = $max_level-1; $i >= 0; --$i) {
				$sql .= ",t$i.category_id";
			}
			$sql .= ") AS path FROM " . DB_PREFIX . "category t0";
			for ($i = 1; $i < $max_level; ++$i) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "category t$i ON (t$i.category_id = t" . ($i-1) . ".parent_id)";
			}
			$sql .= " WHERE t0.category_id = '" . $category_id . "'";

			$query = $this->db->query($sql);

			$path[$category_id] = $query->num_rows ? $query->row['path'] : false;

			$this->cache->set('category.seopath', $path);
		}

		return $path[$category_id];
	}

	private function validate() {

				if( isset( $this->request->get['route'] ) && strpos( $this->request->get['route'], 'extension/module/mega_filter' ) !== false ) {
					return;
				}
				
				if( isset( $this->request->get[($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp')] ) ) {
					return;
				}
			
		if (isset($this->request->get['route']) && $this->request->get['route'] == 'error/not_found') {
			return;
		}
		if (ltrim($this->request->server['REQUEST_URI'], '/') =='sitemap.xml') {
			$this->request->get['route'] = 'extension/feed/google_sitemap';
			return;
		}

		if(empty($this->request->get['route'])) {
			$this->request->get['route'] = 'common/home';
		}

		if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			return;
		}

		if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
			$config_ssl = substr($this->config->get('config_ssl'), 0, $this->strpos_offset('/', $this->config->get('config_ssl'), 3) + 1);
			$url = str_replace('&amp;', '&', $config_ssl . ltrim($this->request->server['REQUEST_URI'], '/'));
			$seo = str_replace('&amp;', '&', $this->url->link($this->request->get['route'], $this->getQueryString(array('route')), true));
		} else {
			$config_url = substr($this->config->get('config_url'), 0, $this->strpos_offset('/', $this->config->get('config_url'), 3) + 1);
			$url = str_replace('&amp;', '&', $config_url . ltrim($this->request->server['REQUEST_URI'], '/'));
			$seo = str_replace('&amp;', '&', $this->url->link($this->request->get['route'], $this->getQueryString(array('route')), false));
		}

		if (rawurldecode($url) != rawurldecode($seo) && strpos($url,($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp').'=')===false) {
			header($this->request->server['SERVER_PROTOCOL'] . ' 301 Moved Permanently');

			$this->response->redirect($seo);
		}
	}

	private function strpos_offset($needle, $haystack, $occurrence) {
		// explode the haystack
		$arr = explode($needle, $haystack);
		// check the needle is not out of bounds
		switch($occurrence) {
			case $occurrence == 0:
				return false;
			case $occurrence > max(array_keys($arr)):
				return false;
			default:
				return strlen(implode($needle, array_slice($arr, 0, $occurrence)));
		}
	}

	private function getQueryString($exclude = array()) {
		if (!is_array($exclude)) {
			$exclude = array();
			}

		return urldecode(http_build_query(array_diff_key($this->request->get, array_flip($exclude))));
		}
	}
?>
