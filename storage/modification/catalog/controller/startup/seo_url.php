<?php // ==========================================  seo_url.php v.140618 opencart-russia.ru ===============================
class ControllerStartupSeoUrl extends Controller {
	public function index() {
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

      if ($this->config->get('mlseo_enabled')) {
        // fix &amp; issue
        if (version_compare(VERSION, '2', '<')) {
          $_SERVER['REQUEST_URI'] = str_replace('&amp;', '&', $_SERVER['REQUEST_URI']);
        }

        // consider index.html as homepage too
        if ($_SERVER['REQUEST_URI'] == '/index.html') {
          return new Action('common/home');
        }

        // HTTP redirect
        if ($this->config->get('mlseo_redirect_http') && !empty($_SERVER['HTTP_HOST'])) {
          $isSSL = !empty($_SERVER['HTTPS']);
          $isWWW = strtolower(substr($_SERVER['HTTP_HOST'], 0, 4)) == 'www.';

          $redirLoc = false;

          if ($this->config->get('mlseo_redirect_http') == 1 && ($isSSL || $isWWW)) {
            $redirLoc = 'Location: ' . urldecode('http://'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']);
          } else if ($this->config->get('mlseo_redirect_http') == 2 && ($isSSL || !$isWWW)) {
            $redirLoc = 'Location: ' . urldecode('http://www.'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']);
          } else if ($this->config->get('mlseo_redirect_http') == 3 && (!$isSSL || $isWWW)) {
            $redirLoc = 'Location: ' . urldecode('https://'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']);
          } else if ($this->config->get('mlseo_redirect_http') == 4 && (!$isSSL || !$isWWW)) {
            $redirLoc = 'Location: ' . urldecode('https://www.'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']);
          } else if ($this->config->get('mlseo_redirect_http') == 5 && (!$isSSL)) {
            $redirLoc = 'Location: ' . urldecode('https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          } else if ($this->config->get('mlseo_redirect_http') == 6 && ($isSSL)) {
            $redirLoc = 'Location: ' . urldecode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          } else if ($this->config->get('mlseo_redirect_http') == 7 && (!$isWWW)) {
            $redirLoc = 'Location: ' . urldecode('http'.($isSSL?'s':'').'://www.'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          } else if ($this->config->get('mlseo_redirect_http') == 8 && ($isWWW)) {
            $redirLoc = 'Location: ' . urldecode('http'.($isSSL?'s':'').'://'.str_replace('www.', '', $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI']);
          }

          if ($redirLoc) {
            header('HTTP/1.1 301 Moved Permanently');
            header('CSP-Redir: http (Mode:'.$this->config->get('mlseo_redirect_http').', SSL:'.(int)$isSSL.', WWW:'.(int)$isWWW.')', false);
            header($redirLoc);
            exit;
          }
        }

        // redirection manager
        if (!empty($_SERVER['HTTP_HOST'])) {
          $raw_url = 'http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
          $raw_uri = $_SERVER['REQUEST_URI'];
          $url = urldecode($raw_url);
          $uri = urldecode($raw_uri);

          if ($this->config->get('mlseo_redirect_dynamic') && strpos(parse_url($uri, PHP_URL_QUERY), '_route_=') === 0) {
            $redir_url = $this->config->get('config_url') . str_replace('_route_=', '', parse_url($uri, PHP_URL_QUERY));
            header('HTTP/1.1 301 Moved Permanently');
            header('CSP-Redir: dynamic 1', false);
            header('Location: ' . str_replace('&amp;', '&', $redir_url));
          }

          if ($this->config->get('mlseo_redirect_dynamic') && isset($this->request->get['route']) && $this->request->get['route'] !== 'account/login' && !(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
            $redir_request = $_GET;
            $redir_route = $this->request->get['route'];
            unset($redir_request['route']);
            unset($redir_request['_route_']);

            if (!empty($_SERVER['HTTPS'])) {
              $redir_url = str_replace('&amp;', '&', $this->url->link($redir_route, http_build_query($redir_request, '', '&'), $_SERVER['HTTPS']));
            } else {
              $redir_url = str_replace('&amp;', '&', $this->url->link($redir_route, http_build_query($redir_request, '', '&')));
            }

            $redir_url = trim($redir_url);

            if (rtrim($redir_url, '/') != rtrim($url, '/') && !strpos($redir_url, 'route=')) {
              header('HTTP/1.1 301 Moved Permanently');
              header('CSP-Redir: dynamic 2', false);
              header('Location: ' . $redir_url);
              exit;
            }
          }

          if ($this->config->get('mlseo_redirect')) {
            // regex require to be specifically defined to avoid unexpected match
            //$redirect = $this->db->query("SELECT redirect, language_id FROM " . DB_PREFIX . "url_redirect WHERE query = '" . $this->db->escape($raw_url) . "' OR query = '" . $this->db->escape($raw_uri) . "' OR ('".$this->db->escape($raw_url)."' REGEXP query) OR ('".$this->db->escape($raw_uri)."' REGEXP query) LIMIT 1")->row;
            //$redirect = $this->db->query("SELECT redirect, language_id FROM " . DB_PREFIX . "url_redirect WHERE query = '" . $this->db->escape($raw_url) . "' OR query = '" . $this->db->escape($raw_uri) . "' LIMIT 1")->row;
            //$redirect = $this->db->query("SELECT redirect, language_id FROM " . DB_PREFIX . "url_redirect WHERE query = '" . $this->db->escape(urldecode($raw_url)) . "' OR query = '" . $this->db->escape(urldecode($raw_uri)) . "' LIMIT 1")->row;

            $redirectQuery = $this->db->query("SELECT redirect, language_id FROM " . DB_PREFIX . "url_redirect WHERE
              query = '" . $this->db->escape(urldecode($raw_url)) . "' OR query = '" . $this->db->escape(urldecode($raw_uri)) . "'
              OR (redirect LIKE 'product/product&product_id=%' AND query =  '" . $this->db->escape(urldecode(substr(strrchr($raw_uri, '/'), 0))) . "') LIMIT 1")->rows;

            if (count($redirectQuery) > 1) {
              foreach ($redirectQuery as $k => $redir) {
                if ($redir['language_id'] == $this->config->get('config_language_id')) {
                  $redirect = $redirectQuery[$k];
                }
              }
            } else if (!empty($redirectQuery[0]['redirect'])) {
              $redirect = $redirectQuery[0];
            }


            if (!empty($redirect['redirect'])) {
              $lang = $redirect['language_id'];
              $redirect = $redirect['redirect'];

              if ($lang) {
                $this->load->model('localisation/language');
                $languagesArray = $this->model_localisation_language->getLanguages();

                if(count($languagesArray) > 1) {
                  $languages = array();
                  foreach ($languagesArray as $result) { $languages[$result['language_id']] = $result; }
                  $this->config->set('config_language_id', $languages[$lang]['language_id']);
                  $this->config->set('config_language', $languages[$lang]['code']);
                  $this->session->data['language'] = $languages[$lang]['code'];
                }
              }

              if ((substr($redirect, 0, 1) != '/') && (substr($redirect, 0, 4) != 'http')) {
                if ($params = strstr($redirect, '&')) {
                  $route = str_replace(array($params, 'index.php?route='), '', $redirect);
                } else {
                  $route = str_replace('index.php?route=', '', $redirect);
                  $params = '';
                }

                $redirect = str_replace('&amp;', '&', $this->url->link($route, substr(str_replace('&amp;', '&', $params), 1)));
              }

              if ($redirect != $url) {
                header('HTTP/1.1 301 Moved Permanently');
                header('CSP-Redir: url', false);
                header('Location: ' . $redirect);
                exit;
              }
            }
          }
        }
      }
      

		// Decode URL
		  /*if ($this->config->get('mlseo_flag') && !isset($this->request->get["_route_"]) && !isset($this->request->get["route"])) {
        if ($this->config->get('mlseo_default_lang') == substr($this->session->data['language'], 0, 2) || $this->config->get('mlseo_default_lang') == $this->session->data['language']) {
          if (version_compare(VERSION, '2', '>=')) return new Action('common/home');
          else return $this->forward('common/home');
        } else {

		        if (isset($this->request->get['route']) && $this->request->get['route'] == 'product/search') {
		        	$lm_redirect = 302;
		        } else {
		        	$lm_redirect = 301;
		        }

          if (version_compare(VERSION, '2', '>=')) $this->response->redirect($this->url->link('common/home'));
          else $this->redirect($this->url->link('common/home'));
        }
      }
      */

      if ($this->config->get('advanced_sitemap_rewrite')) {
        $uri = str_replace(array($this->config->get('config_url'), $this->config->get('config_ssl')), '', urldecode('http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));

        // remove language tag
        if (strpos($uri, '/sitemap')!==false) {
          $expl = explode('/', $uri);
          $lang = $expl[0];
          $uri = $expl[1];
        }

        $sitemapFolder = '';
        if ($uri == $sitemapFolder.'sitemap.xml') {
          $this->request->get['route'] = 'feed/advanced_sitemap';
          return new Action($this->request->get['route']);
        } else if (preg_match('/^'.$sitemapFolder.'sitemap(?:-(\w{3,}))?(?:-(\w{2}-\w{2}|[a-z]{2}))?(?:-(\d+))?\.xml$/i', $uri, $advStmpVars)) {
          if (preg_match('/^((\w{2}-\w{2})|\w{2})$/', $advStmpVars[1])) {
            $this->request->get['route'] = 'feed/advanced_sitemap';
            $this->request->get['lang'] = $advStmpVars[1];
          } else {
            $sitemapConf = $this->config->get('advanced_sitemap_cfg');
            if (!empty($sitemapConf['custom_links_include'])) {
              $sitemapTypes = array();
              foreach (explode("\n", $sitemapConf['custom_links_include']) as $k => $v) {
                if (strpos($v, '@')!==false) {
                  $type = trim(explode('@',$v,2)[0]);
                  if (!in_array($type, $sitemapTypes)) {
                    $sitemapTypes[] = $type;
                  }
                }
              }
            }
            if (isset($advStmpVars[1]) && isset($sitemapTypes) && in_array($advStmpVars[1], $sitemapTypes)) {
              $this->request->get['route'] = 'feed/advanced_sitemap/custom';
              $this->request->get['type'] = $advStmpVars[1];
            } else {
              $this->request->get['route'] = !empty($advStmpVars[1]) ? 'feed/advanced_sitemap/'.$advStmpVars[1] : 'feed/advanced_sitemap';
            }
            $this->request->get['lang'] = isset($advStmpVars[2]) ? $advStmpVars[2] : '';
          }

          $this->request->get['page'] = isset($advStmpVars[3]) ? $advStmpVars[3] : 1;

          return new Action($this->request->get['route']);
        } else if (preg_match('/^'.$sitemapFolder.'product-grid(?:-(\d+))?.xml$/', $uri, $advStmpVars)) {
          $this->request->get['route'] = 'feed/advanced_sitemap/product';
          $this->request->get['page'] = isset($advStmpVars[1]) ? $advStmpVars[1] : 1;
          $this->request->get['grid'] = 1;

          return new Action($this->request->get['route']);
        }
      }

      // Friendly urls
      if ($this->config->get('mlseo_friendly') && !empty($this->request->get['_route_'])) {
        if ($this->config->get('mlseo_extension')) {
          $route = rtrim(str_replace($this->config->get('mlseo_extension'), '', $this->request->get['_route_']), '/');
        } else {
          $route = rtrim($this->request->get['_route_'], '/');
        }

        $ml_mode = '';

        if ($this->config->get('mlseo_multistore')) {
          $ml_mode .= " AND (`store_id` = '" . (int)$this->config->get('config_store_id') . "' OR `store_id` = 0)";
        }

        if ($this->config->get('mlseo_ml_mode')) {
          $ml_mode .= " AND (`language_id` = '" . (int)$this->config->get('config_language_id') . "' OR `language_id` = 0)";
        }

        if ($this->config->get('mlseo_multistore') && $this->config->get('mlseo_ml_mode')) {
          $ml_mode .= "ORDER BY store_id DESC, language_id DESC";
        } else if ($this->config->get('mlseo_ml_mode')) {
          $ml_mode .= "ORDER BY language_id DESC";
        } else if ($this->config->get('mlseo_multistore')) {
          $ml_mode .= "ORDER BY store_id DESC";
        }

        $seoUrlTable = version_compare(VERSION, '3', '>=') ? 'seo_url' : 'url_alias';

        $friendly_qry = $this->db->query("SELECT * FROM " . DB_PREFIX . $seoUrlTable . " WHERE query LIKE 'route=%' AND keyword = '" . $this->db->escape($route) . "' " . $ml_mode);

        if (!empty($friendly_qry->row['query'])) {
          $this->request->get['route'] = str_replace('route=', '', $friendly_qry->row['query']);
          return new Action($this->request->get['route']);
        }
      }

      //if (isset($this->request->get['_route_'])) {

      if (!empty($this->request->get['_route_'])) {
        if ($this->config->get('mlseo_extension')) {
          $this->request->get['_route_'] = str_replace($this->config->get('mlseo_extension'), '', $this->request->get['_route_']);
        }
			$parts = explode('/', $this->request->get['_route_']);

			// remove any empty arrays from trailing
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			$mfilterSeoConfig = $this->config->get( 'mega_filter_seo' );

				if( ! empty( $mfilterSeoConfig['enabled'] ) ) {
					if( class_exists( 'VQMod' ) ) {
						require_once VQMod::modCheck( modification( DIR_SYSTEM . 'library/mfilter_core.php' ) );
					} else {
						require_once modification( DIR_SYSTEM . 'library/mfilter_core.php' );
					}
				
					if( class_exists( 'MegaFilterCore' ) ) {

          // Complete seo compat of seo pagination with MFP
          foreach ($parts as $mfpPartKey => $mfpPart) {
            if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_pagination') && preg_match('/page-(\d+)/', $mfpPart, $page)) {
              $this->request->get['page'] = $page[1];
              unset($parts[$mfpPartKey]);
            }
          }
      
						$parts = MegaFilterCore::prepareSeoParts( $this, $parts );
					}
				}
				
				
      // Friendly urls
      /*
      if ($this->config->get('mlseo_friendly') && !empty($parts[0])) {
        $ml_mode = '';

        if ($this->config->get('mlseo_multistore')) {
          $ml_mode .= " AND (`store_id` = '" . (int)$this->config->get('config_store_id') . "' OR `store_id` = 0)";
        }

        if ($this->config->get('mlseo_ml_mode')) {
          $ml_mode .= " AND (`language_id` = '" . (int)$this->config->get('config_language_id') . "' OR `language_id` = 0)";
        }

        if ($this->config->get('mlseo_multistore') && $this->config->get('mlseo_ml_mode')) {
          $ml_mode .= "ORDER BY store_id DESC, language_id DESC";
        } else if ($this->config->get('mlseo_ml_mode')) {
          $ml_mode .= "ORDER BY language_id DESC";
        } else if ($this->config->get('mlseo_multistore')) {
          $ml_mode .= "ORDER BY store_id DESC";
        }

        $seoUrlTable = version_compare(VERSION, '3', '>=') ? 'seo_url' : 'url_alias';
        /*
        $sk_query = $this->db->query("SELECT * FROM " . DB_PREFIX . $seoUrlTable . " WHERE query LIKE '%product/special%'")->row;
        $special_keyword = isset($sk_query['keyword']) ? $sk_query['keyword'] : '';

        if ($special_keyword && strpos($this->request->get['_route_'], $special_keyword) !== false) {
          $special_parts = explode('/', $this->request->get['_route_']);
          $this->request->get['_route_'] = $special_keyword;

          if (!empty($special_parts[1]) && strpos($special_parts[1], 'page-')!==false) {
            $this->request->get['page'] = str_replace('page-','',$special_parts[1]);
          }
        }
        *

        $friendly_qry = $this->db->query("SELECT * FROM " . DB_PREFIX . $seoUrlTable . " WHERE query LIKE 'route=%' AND keyword = '" . $this->db->escape($parts[0]) . "' " . $ml_mode);

        if (!empty($friendly_qry->row['query'])) {
          $this->request->get['route'] = str_replace('route=', '', $friendly_qry->row['query']);
          array_shift($parts);
          //return new Action($this->request->get['route']); // do not return to process other data
        }
      }
      */

      // Absolute url
      if ($this->config->get('mlseo_url_absolute')) {
        $fullUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $fullUrl = str_replace(array($this->config->get('config_url'), $this->config->get('config_ssl')), '', $fullUrl);

        $searchWithWildcard = '';
        if (strpos($fullUrl, '?')) {
          $searchWithWildcard = " OR redirect = '" .  $this->db->escape(strstr($fullUrl, '?', true).'*') . "' ";
        }

        $urlAbsolute = $this->db->query("SELECT query, language_id FROM " . DB_PREFIX . "url_absolute WHERE redirect = '" . $this->db->escape($fullUrl) . "' " . $searchWithWildcard . " LIMIT 1")->row;

        if (!empty($urlAbsolute['query'])) {
           parse_str('route='.$urlAbsolute['query'], $this->request->get);
           $parts = array();
        }
      }

      if ($this->config->get('mlseo_tag') && !empty($parts[0]) && !empty($parts[1]) && $parts[0] === $this->config->get('mlseo_fpp_tag_'.$this->config->get('config_language_id'))) {
        $this->request->get['route'] = 'product/search';
        $this->request->get['tag'] = str_replace('-', ' ', $parts[1]);

        $parts = array();
      }

      if ($this->config->get('mlseo_search') && !empty($parts[0]) && $parts[0] === $this->config->get('mlseo_fpp_search_'.$this->config->get('config_language_id'))) {
        $this->request->get['route'] = 'product/search';

        if (!empty($parts[1])) {
          $this->request->get['search'] = str_replace('-', ' ', urldecode($parts[1]));
          unset($parts[1]);
        }

        unset($parts[0]);
      }

      $seoIsCategory = false;

      $seoSortNames = $this->config->get('mlseo_sortname_'.$this->config->get('config_language_id')) ? $this->config->get('mlseo_sortname_'.$this->config->get('config_language_id')) : 'name|price|rating|model';
      $seoSortOrders = $this->config->get('mlseo_order_'.$this->config->get('config_language_id')) ? $this->config->get('mlseo_order_'.$this->config->get('config_language_id')) : 'asc|desc';
      $seoSortKeyword = $this->config->get('mlseo_sort_'.$this->config->get('config_language_id')) ? $this->config->get('mlseo_sort_'.$this->config->get('config_language_id')) : 'sort';

      $partsIteration = 0;

      foreach ($parts as $part) {
        $partsIteration++;

        if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_sort') && preg_match('~^'.$seoSortKeyword.'-('.$seoSortNames.')-('.$seoSortOrders.')$~', $part, $sortParts)) {
          $sortNames = explode('|', $seoSortNames);
          $sortOrders = explode('|', $seoSortOrders);

          if (count($sortNames) == 4) {
            if (isset($this->request->get['route']) && $this->request->get['route'] == 'product/special') {
              $sortKey = array_search($sortParts[1], array_combine(array('pd.name', 'ps.price', 'rating', 'p.model'), $sortNames));
            } else {
              $sortKey = array_search($sortParts[1], array_combine(array('pd.name', 'p.price', 'rating', 'p.model'), $sortNames));
            }
          }

          if (count($sortOrders) == 2) {
            $sortOrder = array_search($sortParts[2], array_combine(array('ASC', 'DESC'), $sortOrders));
          }

          if (isset($sortKey) && in_array($sortKey, array('pd.name', 'ps.price', 'p.price', 'rating', 'p.model'))) {
            $this->request->get['sort'] = $sortKey;
            $this->request->get['order'] = $sortOrder;

            continue;
          }
        }

        if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_sort') && preg_match('~^'.($this->config->get('mlseo_limit_'.$this->config->get('config_language_id')) ? $this->config->get('mlseo_limit_'.$this->config->get('config_language_id')) : 'limit').'-(\d{1,3})$~', $part, $sortParts)) {
          $this->request->get['limit'] = $sortParts[1];
          continue;
        }

        //if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_pagination') && (!empty($this->request->get['path']) || !empty($this->request->get['search']) || !empty($this->request->get['manufacturer_id']) || (isset($this->request->get['route']) && $this->request->get['route'] == 'product/special')) && preg_match('/page-(\d+)/', $part, $page)) {
        if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_pagination') && preg_match('/^page-(\d+)$/', $part, $page)) {
          $this->request->get['page'] = $page[1];
          continue;
        }

        if (!$this->config->get('mlseo_multistore') && $this->config->get('config_store_id')) {
          $currentSubStore = $this->config->get('config_store_id');
          $this->config->set('config_store_id', 0);
        }
      
					if( ! empty( $mfilterSeoConfig['enabled'] ) && class_exists( 'MegaFilterCore' ) && MegaFilterCore::prepareSeoPart( $this, $part ) ) {
						continue;
					}
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE (keyword = '" . $this->db->escape($part) . "' OR keyword = '" . $this->db->escape($this->request->get['_route_']) . "') AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

        if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_absolute') && $query->num_rows > 1) {
          $currUrlValues = array();

          foreach ($query->rows as $key => $row) {
            // delete duplicate language
            if (in_array($row['query'], $currUrlValues)) {
              unset($query->rows[$key]);
              continue;
            }

            // if absolute enabled and we are not in subcategory and something else than category is found, then show this entry (manufacturer), else remove non-categories entries
            $currUrlValues[] = $row['query'];

            if (!$seoIsCategory && strpos($row['query'], 'category_id=') !== 0) {
              $query->row = $row;
              $query->rows = array($row);
              break;
            } if ($seoIsCategory && strpos($row['query'], 'manufacturer_id=') === 0) {
              unset($query->rows[$key]);
            }
          }

          $query->row = reset($query->rows);
          $query->num_rows = count($query->rows);
        }
      

				$mfilterSeoConfig = $this->config->get('mega_filter_seo');
				
				if( ( ! empty( $mfilterSeoConfig['enabled'] ) || ! empty( $mfilterSeoConfig['aliases_enabled'] ) ) && ! $query->num_rows ) {
					$mfp_path = implode( '/', array_slice( $parts, 0, -1 ) );
					$mfp_path = class_exists( 'MegaFilterCore' ) ? MegaFilterCore::preparePath( $this, $mfp_path ) : $mfp_path;
				
					$mfilter_query = $this->db->query( "
						SELECT 
							* 
						FROM 
							`" . DB_PREFIX . "mfilter_url_alias` 
						WHERE 
							`alias` = '" . $this->db->escape( $part ) . "' AND 
							" . ( empty( $mfilterSeoConfig['redirect_to_correct_lang_by_seo_url'] ) ? "`language_id` = " . (int)$this->config->get('config_language_id') . " AND" : '' ) . "
							`path` = '" . $this->db->escape( $mfp_path ) . "' AND
							`store_id` = " . (int)$this->config->get('config_store_id')
					);
				
					if( $mfilter_query->num_rows ) {
						if( $this->config->get('config_language_id') != $mfilter_query->row['language_id'] && class_exists( 'MegaFilterCore' ) ) {
							MegaFilterCore::redirectToCorrectLang( $this, $mfilter_query->row );
						}
				
						if( $this->rgetMFP($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp') === null ) {
							$this->request->get[($this->config->get('mfilter_url_param')?$this->config->get('mfilter_url_param'):'mfp')] = $mfilter_query->row['mfp'];
						}
						$this->request->request['mfp_seo_alias'] = $part;
				
						continue;
					}
				}
			


        if (!empty($currentSubStore)) {
          $this->config->set('config_store_id', $currentSubStore);
        }

        if ($this->config->get('mlseo_store_mode') && $this->config->get('mlseo_disable_other_store_links') && $this->request->get['route'] != 'journal3/blog') {
          // generate 404 if store mode prefix and not current language
          if ($partsIteration == count($parts)) {
            $hasValidLanguage = false;
            foreach ($query->rows as $checkStoreLang) {
              if (!isset($checkStoreLang['language_id']) || $checkStoreLang['language_id'] == $this->config->get('config_language_id')) {
                $hasValidLanguage = true;
                break;
              }
            }

            if (!$hasValidLanguage) {
              $this->request->get['route'] = '';
              continue;
            }
          }
        }
      
				if ($query->num_rows) {
					$url = explode('=', $query->row['query']);


          if ($url[0] == 'route') {
            $this->request->get['route'] = $url[1];
          }

          if (isset($url[1]) && !in_array($url[0], array('route', 'product_id', 'category_id', 'information_id', 'manufacturer_id', 'blog_article_id'))) {
            $this->request->get[$url[0]] = $url[1];
          }
      

				if ($url[0] == 'testimonial_id') {
					$this->request->get['testimonial_id'] = $url[1];
				}
			
					if ($url[0] == 'product_id') {
						$this->request->get['product_id'] = $url[1];
					}

					if ($url[0] == 'category_id') {

            $seoIsCategory = true;

            if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_absolute') && $query->num_rows > 1) {
              $parent_id = 0;

              if (!empty($this->request->get['path'])) {
                $parent_id = str_replace('_', '', strrchr($this->request->get['path'], '_'));

                if(!$parent_id) {
                  $parent_id = $this->request->get['path'];
                }
              }

              if (version_compare(VERSION, '3', '>=')) {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url u left join " . DB_PREFIX . "category c on c.category_id = REPLACE(u.query, 'category_id=', '') WHERE u.keyword = '" . $this->db->escape($part) . "' AND c.parent_id = '" . $this->db->escape($parent_id) . "'");
              } else {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_alias u left join " . DB_PREFIX . "category c on c.category_id = REPLACE(u.query, 'category_id=', '') WHERE u.keyword = '" . $this->db->escape($part) . "' AND c.parent_id = '" . $this->db->escape($parent_id) . "'");
              }

              if(isset($query->row['query'])) {
                $url = explode('=', $query->row['query']);
              }
            }
      
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					}

					if ($url[0] == 'manufacturer_id') {
						$this->request->get['manufacturer_id'] = $url[1];

              if ($this->config->get('mlseo_fpp_brand_parent') && isset($this->request->get['route']) && $this->request->get['route'] == 'product/manufacturer') {
                unset($this->request->get['route']);
              }
      
					}

					if ($url[0] == 'information_id') {
						$this->request->get['information_id'] = $url[1];
					}

					if (empty($this->request->get['route']) && !strpos($query->row['query'], '=') && $url[0] != 'route' && isset ($query->row['query']) && $query->row['query'] && $url[0] != 'information_id' && $url[0] != 'manufacturer_id' && $url[0] != 'category_id' && $url[0] != 'product_id' && $url[0] != 'testimonial_id') {
						$this->request->get['route'] = $query->row['query'];
					}
				} else {
					$this->request->get['route'] = 'error/not_found';

					break;
				}
			}

			if (!isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';
				
				} elseif (isset($this->request->get['testimonial_id'])) {
					$this->request->get['route'] = 'information/testimonial/info';
				} elseif (isset($this->request->get['path'])) {
			
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';
				}
			}

        if (isset($this->request->get['route']) && $this->config->get('mlseo_redirect_canonical') && !in_array($this->request->get['route'], array('account/login', 'error/not_found', 'product/search', 'journal3/blog/post', 'journal3/blog')) && !isset($this->request->get['mfp']) && !isset($this->request->get['sort']) && !isset($this->request->get['limit']) && !empty($_SERVER['HTTP_HOST']) && !strpos($_SERVER['REQUEST_URI'], '/mfp/') && !strpos($_SERVER['REQUEST_URI'], '/fltr/')) {
          $url = urldecode('http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          $uri = urldecode($_SERVER['REQUEST_URI']);

          $redir_request = $this->request->get; // no use of $_GET here
          $redir_route = $this->request->get['route'];
          unset($redir_request['route'], $redir_request['_route_']);

          if (!empty($_SERVER['HTTPS'])) {
            if ($this->request->get['route'] == 'product/category' && $this->config->get('mlseo_redirect_canonical') == '2' && !empty($redir_request['path'])) {
              $this->load->model('tool/path_manager');

              $cat_id = strstr($redir_request['path'], '_') ? substr(strrchr($redir_request['path'], '_'), 1) : $redir_request['path'];

              unset($redir_request['path']);
              $extra_params = '';
              if($redir_request) {
                $extra_params = '&'.http_build_query($redir_request, '', '&');
              }

              $redir_url = str_replace('&amp;', '&', $this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($cat_id) : $cat_id).$extra_params, $_SERVER['HTTPS']));
            } else {
              $redir_url = str_replace('&amp;', '&', $this->url->link($redir_route, http_build_query($redir_request, '', '&'), $_SERVER['HTTPS']));
            }
          } else {
            if ($this->request->get['route'] == 'product/category' && $this->config->get('mlseo_redirect_canonical') == '2' && !empty($redir_request['path'])) {
              $this->load->model('tool/path_manager');

              $cat_id = strstr($redir_request['path'], '_') ? substr(strrchr($redir_request['path'], '_'), 1) : $redir_request['path'];

              unset($redir_request['path']);
              $extra_params = '';
              if($redir_request) {
                $extra_params = '&'.http_build_query($redir_request, '', '&');
              }

              $redir_url = str_replace('&amp;', '&', $this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($cat_id).$extra_params : $cat_id)));
            } else {
              $redir_url = str_replace('&amp;', '&', $this->url->link($redir_route, http_build_query($redir_request, '', '&')));
            }
          }

          $redir_url = trim($redir_url);

          if (!strpos($redir_url, 'route=') && (($redir_url != str_replace('&amp;', '&', $url)) && (urldecode($redir_url) != str_replace('&amp;', '&', $url)) && (str_replace('&amp;', '&', urldecode($redir_url)) != str_replace('&amp;', '&', $url))) && !isset($redir_request['blogpath'])) {
            header('HTTP/1.1 301 Moved Permanently');
            header('CSP-Redir: canonical', false);
            header('Location: ' . $redir_url);
            exit;
          }
        }
      
		// Redirect 301   
		} elseif (isset($this->request->get['route']) && empty($this->request->post) && !isset($this->request->get['token']) && $this->config->get('config_seo_url')) {
			$arg = '';
			$cat_path = false;
			$route = $this->request->get['route'];

			if ($this->request->get['route'] == 'product/product' && isset($this->request->get['product_id'])) {
				$route = 'product_id=' . (int)$this->request->get['product_id'];
			} elseif ($this->request->get['route'] == 'product/category' && isset($this->request->get['path'])) {
				$categorys_id = explode('_', $this->request->get['path']);
				$cat_path = '';
				foreach ($categorys_id as $category_id) {
					$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE `query` = 'category_id=" . (int)$category_id . "' AND `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "'");   
					if ($query->num_rows && $query->row['keyword'] /**/ ) {
						$cat_path .= '/' . $query->row['keyword'];
					} else {
						$cat_path = false;
						break;
					}
				}
				$arg = trim($cat_path, '/');
				if (isset($this->request->get['page'])) $arg = $arg . '?page=' . (int)$this->request->get['page'];
			} elseif ($this->request->get['route'] == 'product/manufacturer/info' && isset($this->request->get['manufacturer_id'])) {
				$route = 'manufacturer_id=' . (int)$this->request->get['manufacturer_id'];
				if (isset($this->request->get['page'])) $arg = $arg . '?page=' . (int)$this->request->get['page'];
			} elseif ($this->request->get['route'] == 'information/information' && isset($this->request->get['information_id'])) {
				$route = 'information_id=' . (int)$this->request->get['information_id'];
			} elseif (sizeof($this->request->get) > 1) {
				$args = '?' . str_replace("route=" . $this->request->get['route'].'&amp;', "", $this->request->server['QUERY_STRING']);
				$arg = str_replace('&amp;', '&', $args);
			}

			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE `query` = '" . $this->db->escape($route) . "' AND `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

			if (!empty($query->num_rows) && !empty($query->row['keyword']) && $route) {

		        if (isset($this->request->get['route']) && $this->request->get['route'] == 'product/search') {
		        	$lm_redirect = 302;
		        } else {
		        	$lm_redirect = 301;
		        }

				$this->response->redirect($query->row['keyword'] . $arg, $lm_redirect);
			} elseif ($cat_path) {

		        if (isset($this->request->get['route']) && $this->request->get['route'] == 'product/search') {
		        	$lm_redirect = 302;
		        } else {
		        	$lm_redirect = 301;
		        }

				$this->response->redirect($arg, $lm_redirect);
			} elseif ($this->request->get['route'] == 'common/home') {

		        if (isset($this->request->get['route']) && $this->request->get['route'] == 'product/search') {
		        	$lm_redirect = 302;
		        } else {
		        	$lm_redirect = 301;
		        }

				// WTF ?! HTTP_SERVER?! Seriously? F... // $this->response->redirect(HTTP_SERVER . $arg, $lm_redirect);
			}
		}
	}

	public function rewrite($link) {

        if (!empty($this->session->data['language']) && !($this->session->data['language'] == $this->config->get('config_language') || $this->session->data['language'] == substr($this->config->get('config_language'), 0, 2))) {
          $this->load->model('localisation/language');
          $languagesById = $this->model_localisation_language->getLanguages();
          $languages = array();
          foreach ($languagesById as $result) {
            $languages[$result['code']] = $result;
            if (strpos($result['code'], '-')) {
              $languages[substr($result['code'], 0, 2)] = $result;
            }
          }
          $this->config->set('config_language_id', $languages[ $this->session->data['language'] ]['language_id']);
        }

        $lang = isset($this->session->data['language']) ? $this->session->data['language'] : $this->config->get('config_language');

        $ml_mode = $url_append = '';

        if ($this->config->get('mlseo_multistore')) {
          //$ml_mode .= " AND (`store_id` = '" . (int)$this->config->get('config_store_id') . "' OR `store_id` = 0)";
          $ml_mode .= " AND (`store_id` = '" . (int)$this->config->get('config_store_id') . "')";
        }

        if ($this->config->get('mlseo_ml_mode')) {
          $ml_mode .= " AND (`language_id` = '" . (int)$this->config->get('config_language_id') . "' OR `language_id` = 0)";
        }

        if ($this->config->get('mlseo_multistore') && $this->config->get('mlseo_ml_mode')) {
          $ml_mode .= "ORDER BY store_id DESC, language_id DESC";
        } else if ($this->config->get('mlseo_ml_mode')) {
          $ml_mode .= "ORDER BY language_id DESC";
        } else if ($this->config->get('mlseo_multistore')) {
          $ml_mode .= "ORDER BY store_id DESC";
        }
      
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = '';

		$data = array();

		parse_str($url_info['query'], $data);

        // Absolute url
        if ($this->config->get('mlseo_url_absolute')) {
          if ($route = strstr($link, '/index.php?route=')) {
             $route = str_replace(array('/index.php?route=', '&amp;'), array('', '&'), $route);
             $urlAbsolute = $this->db->query("SELECT redirect, language_id FROM " . DB_PREFIX . "url_absolute WHERE query = '" . $this->db->escape($route) . "' AND language_id = '" . (int) $this->config->get('config_language_id') . "'")->row;

             if (!empty($urlAbsolute['redirect'])) {
               $url = '/' . $urlAbsolute['redirect'];
               //$data = array();
               return ${'url_info'}['scheme'] . '://' . ${'url_info'}['host'] . (isset(${'url_info'}['port']) ? ':' . ${'url_info'}['port'] : '') . str_replace('/index.php', '', ${'url_info'}['path']) . $url;
             }
          }
        }

        if ($this->config->get('advanced_sitemap_rewrite') && isset($data['route']) && strpos($data['route'], 'feed/advanced_sitemap') !== false && $data['route'] !== 'feed/advanced_sitemap/cron') {
          $advStmpType = substr(strrchr($data['route'], '/'), 1);
          $sitemapFolder = '';
          if (!in_array($advStmpType, array('xslindex', 'xsl', 'xsl_grid'))) {
            if(isset($data['lang'])){
              $lang = '/'.$data['lang'];
            } else {
              $lang = '';
            }

            if ($advStmpType == 'advanced_sitemap') {
              $url .= $sitemapFolder.'/sitemap';
            } else {
              //$url .= $sitemapFolder.'/sitemap-'.$advStmpType;
              $url .= $lang . $sitemapFolder.'/sitemap-'.$advStmpType;
            }

            if (isset($data['lang'])) {
              $url .= '-'.$data['lang'];
              unset($data['lang']);
            }

            if (isset($data['page'])) {
              $url .= '-'.$data['page'];
              unset($data['page']);
            }

            $url .= '.xml';
            unset(${'data'}['route']);
          }

          $seoPkgNoFlag = 1;
        }

        if (isset($data['route']) && $data['route'] == 'product/product') {
          if ($this->config->get('mlseo_fpp_bypasscat') && isset($data['path'])) {
            unset($data['path']);
          }

          if (isset($data['manufacturer_id']) && $this->config->get('mlseo_fpp_mode') != '3') {
            unset($data['manufacturer_id']);
          }

          if (!isset($data['path']) && !isset($data['manufacturer_id']) && isset($data['product_id'])) {
            $this->load->model('tool/path_manager');
            $data = (array) $this->model_tool_path_manager->getFullProductPath($data['product_id']) + $data;
          }
        }

        $gkd_is_category = (isset($data['route']) && $data['route'] == 'product/category') ? true : false;

        if (!$this->config->get('mlseo_multistore') && $this->config->get('config_store_id')) {
          $currentSubStore = $this->config->get('config_store_id');
          $this->config->set('config_store_id', 0);
        }

		foreach ($data as $key => $value) {
			if (isset($data['route'])) {
				if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id') || ($data['route'] == 'information/testimonial/info' && $key == 'testimonial_id')) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND (`store_id` = '" . (int)$this->config->get('config_store_id') . "') AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {

        if ($data['route'] == 'product/manufacturer/info' && $key == 'manufacturer_id' && $this->config->get('mlseo_fpp_brand_parent')) {
          $this->load->model('tool/path_manager');
          $url .= $this->model_tool_path_manager->getManufacturerKeyword();
        }
      
        if ($this->config->get('mlseo_enabled') && !($data['route'] == 'product/product' && $key == 'manufacturer_id')) $url .= '/' . $query->row['keyword']; else
						$url .= '/' . $query->row['keyword'];

						unset($data[$key]);
					}
				
          } elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_sort') && $data['route'] == 'product/product' && in_array($key, array('limit', 'sort', 'order'))) {
            unset($data[${'key'}]);
            continue;
          } elseif ($this->config->get('mlseo_enabled') && $key == 'route' && $value == 'common/home') {
            $url .= '/';
          } elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_tag') && $key == 'route' && $value == 'product/search' && !empty($data['tag']) && $this->config->get('mlseo_fpp_tag_'.$this->config->get('config_language_id'))) {
            if ($this->config->get('mlseo_ascii_'.$this->config->get('config_language_id'))) {
              include_once(DIR_SYSTEM . 'library/gkd_urlify.php');
              $data['tag'] = URLify::downcode($data['tag'], substr($this->config->get('config_language'), 0, 2));
            }

            $url = '/'.$this->config->get('mlseo_fpp_tag_'.$this->config->get('config_language_id')).'/'.str_replace(' ', '-', $data['tag']);
            unset($data['tag']);
          } elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_search') && $key == 'route' && $value == 'product/search' && $this->config->get('mlseo_fpp_search_'.$this->config->get('config_language_id'))) {
            $url = '/'.$this->config->get('mlseo_fpp_search_'.$this->config->get('config_language_id'));

            if (!empty($data['search'])) {
              $url .= '/'.$data['search'];
              unset($data['search']);
            }
          } elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_pagination') && $key == 'page' && $url && isset($data['route']) && ($data['route'] == 'product/category' || $data['route'] == 'product/search' || $data['route'] == 'product/manufacturer/info' || $data['route'] == 'journal2/blog' || ($data['route'] == 'product/special' && !empty($data['page'])))) {
            $url_append .= '/page-'.$value;
            unset($data['page']);
          } elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_sort') && $key == 'limit') {
            $url .= '/'.($this->config->get('mlseo_limit_'.$this->config->get('config_language_id')) ? $this->config->get('mlseo_limit_'.$this->config->get('config_language_id')) : 'limit').'-'.$value;
            unset($data['limit']);
          } elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_sort') && $key == 'sort') {
            if ($value != 'p.sort_order') {
              $seoSortNames = $this->config->get('mlseo_sortname_'.$this->config->get('config_language_id')) ? $this->config->get('mlseo_sortname_'.$this->config->get('config_language_id')) : 'name|price|rating|model';
              $seoSortOrders = $this->config->get('mlseo_order_'.$this->config->get('config_language_id')) ? $this->config->get('mlseo_order_'.$this->config->get('config_language_id')) : 'asc|desc';
              $seoSortKeyword = $this->config->get('mlseo_sort_'.$this->config->get('config_language_id')) ? $this->config->get('mlseo_sort_'.$this->config->get('config_language_id')) : 'sort';

              $sortNames = explode('|', $seoSortNames);
              $sortOrders = explode('|', $seoSortOrders);

              if (count($sortNames) == 4) {
                if (isset($data['route']) && $data['route'] == 'product/special') {
                  $sortKey = array_search($value, array_combine($sortNames, array('pd.name', 'ps.price', 'rating', 'p.model')));
                } else {
                  $sortKey = array_search($value, array_combine($sortNames, array('pd.name', 'p.price', 'rating', 'p.model')));
                }
              }

              if (isset($data['order']) && count($sortOrders) == 2) {
                $sortOrder = array_search($data['order'], array_combine($sortOrders, array('ASC', 'DESC')));
              }

              if (isset($sortKey)) {
                $url .= '/'.$seoSortKeyword.'-'.$sortKey;

                if (isset($data['order'])) {
                  $url .= '-'.$sortOrder;
                }
              }
            }

            unset($data['sort'], $data['order']);
          } elseif ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_friendly')
              && $value != 'common/home' && is_string($value) && !in_array($key, array('path', 'product_id', 'category_id', 'manufacturer_id', 'information_id', 'journal_blog_post_id', 'journal_blog_category_id', 'blog_id'))
              && !in_array($data['route'], array('offers/salescombopge', 'customerpartner/profile', 'customerpartner/profile/collection', 'news/article', 'news/ncategory'))
            ) {
            if (isset($data['journal_blog_tag'])) { $is_journal3_blog = true; }

            if (version_compare(VERSION, '3', '>=')) {
              $query = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . $value) . "'" . $ml_mode);
            } else {
              $query = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "url_alias WHERE `query` = '" . $this->db->escape($key . '=' . $value) . "'" . $ml_mode);
            }
            if (${'query'}->num_rows) {
              $url .= '/' . $query->row["keyword"];
              //$url .= $query->row['keyword'] ? $this->config->get('mlseo_extension') : '';
              if($key != 'route') unset($data[$key]);
            }
          } elseif ($key == 'path') {
      
					$categories = explode('_', $value);

          $last_cat = count($categories)-1;
          foreach ($categories as $cat_key => $cat_id) {
            if($cat_key != $last_cat && in_array($cat_id, (array) $this->config->get('mlseo_fpp_categories'))) {
              unset($categories[$cat_key]);
            }
          }
      

        if ($this->config->get('mlseo_fpp_directcat')) {
          $categories = array(array_pop($categories));
        } else if (count($categories) < 2) {
          $this->load->model('tool/path_manager');
          $categories = $this->model_tool_path_manager->getFullCategoryPath(array_pop($categories));
          $categories = explode('_', $categories);
        }

        if (isset($data['route']) && $data['route'] == 'product/product' && $this->config->get('mlseo_fpp_mode') == '4') {
          $categories = (array) end($categories);
        }
      

					foreach ($categories as $category) {
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int)$category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($query->num_rows && $query->row['keyword']) {
							$url .= '/' . $query->row['keyword'];
						} else {
							$url = '';

							break;
						}
					}

					unset($data[$key]);
				} elseif ($key == 'route') {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($data['route']) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");
					if ($query->num_rows) /**/ {
						$url .= '/' . $query->row['keyword'];
					}
				}
			}
		}

    if (!empty($currentSubStore)) {
      $this->config->set('config_store_id', $currentSubStore);
    }
      
		if ($url) {

				if( ! isset( $this->model_extension_module_mega_filter ) ) {
					$this->load->model( 'extension/module/mega_filter' );
				}
				
				if( ! defined( 'HTTP_CATALOG' ) ) {
					$mfp_rewrite = $this->registry->get('model_extension_module_mega_filter')->rewrite( $url, $data );
					$url = array_shift( $mfp_rewrite );
					$data = array_shift( $mfp_rewrite );
				}
			
			unset($data['route']);

			$query = '';

			if ($data) {
				foreach ($data as $key => $value) {
					$query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
				}

				if ($query) {
					$query = '?' . str_replace('&', '&amp;', trim($query, '&'));
				}
			}


        if (!empty($url_append)) {
          $url = $url . $url_append;
        }

        $url = rtrim($url, '/');

        if (substr($url, -4) != '.xml' && $url) {
          if (!(!empty($gkd_is_category) && $this->config->get('mlseo_extension_mode') == 'nocat')) {
            $url .= $this->config->get('mlseo_extension');
          }
        }

        if ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_flag') && !($this->config->get('mlseo_flag_default') && ($this->config->get('mlseo_default_lang') == $lang)) && !isset($seoPkgNoFlag)) {
          $customSeoFlag = $this->config->get('mlseo_flag_custom');

          if (!empty($customSeoFlag[$lang])) {
            $lang = $customSeoFlag[$lang];
          } else if ($this->config->get('mlseo_flag_short')) {
            $lang = substr($lang, 0, 2);
          }

          $url = ($this->config->get('mlseo_flag_upper')) ? '/'.strtoupper($lang).$url : '/'.$lang.$url;
        }

        if (($this->config->get('mlseo_fpp_slash') == '1' && !empty($gkd_is_category)) || $this->config->get('mlseo_fpp_slash') == '2') {
          if ((!$this->config->get('mlseo_extension') || ($this->config->get('mlseo_extension') && !strpos($url, $this->config->get('mlseo_extension')))) && !(substr($url, -4) == '.xml')) {
            $url .= '/';
          }
        }
      
			return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
		} else {
			return $link;
		}
	}
}
