<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Document class
*/
class Document {

				public function mfp_removeLink( $rel ) {foreach( $this->links as $k => $v ) {if( $v['rel'] == $rel ) {unset( $this->links[$k] );}}}
			
	private $title;

	// SEO CMS vars
	private $sc_og_image;
	private $sc_og_description;
	private $sc_og_title;
	private $sc_og_type;
	private $sc_og_url;
	private $sc_robots;
	private $sc_hreflang = array();
	private $sc_removelinks = array();
	//End of SEO CMS vars

	private $description;
	private $keywords;

	private $links = array();
	private $styles = array();
	private $scripts = array();

	/**
     * 
     *
     * @param	string	$title
     */

        private $seo_meta = '';

        public function addSeoMeta($html) {
          $this->seo_meta .= $html;
        }

        public function renderSeoMeta() {
          return $this->seo_meta;
        }
      

					//microdatapro 8.1 start
					private $tc_og;
					private $tc_og_prefix;
					public function setTc_og($data){$this->tc_og = $data;}
					public function getTc_og(){return $this->tc_og;}
					public function setTc_og_prefix($data){$this->tc_og_prefix = $data;}
					public function getTc_og_prefix(){return $this->tc_og_prefix;}
					//microdatapro 8.1 end
				
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
     * 
	 * 
	 * @return	string
     */
	public function getTitle() {
		return $this->title;
	}

	/**
     * 
     *
     * @param	string	$description
     */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
     * 
     *
     * @param	string	$description
	 * 
	 * @return	string
     */
	public function getDescription() {
		return $this->description;
	}

	/**
     * 
     *
     * @param	string	$keywords
     */
	public function setKeywords($keywords) {
		$this->keywords = $keywords;
	}

	/**
     *
	 * 
	 * @return	string
     */
	public function getKeywords() {
		return $this->keywords;
	}
	
	/**
     * 
     *
     * @param	string	$href
	 * @param	string	$rel
     */
	public function addLink($href, $rel) {
		$this->links[$href.$rel] = array(
			'href' => $href,
			'rel'  => $rel
		);
	}

	/**
     * 
	 * 
	 * @return	array
     */

    // SEO CMS functions
	public function setSCRobots($str) {
		$this->sc_robots = $str;
	}
	public function getSCRobots() {
		return $this->sc_robots;
	}
	public function setSCHreflang($hreflang = array()) {
		$this->sc_hreflang = $hreflang;
	}
	public function getSCHreflang() {
		return $this->sc_hreflang;
	}
	public function setSCOgImage($image) {
		$this->sc_og_image = $image;
	}
	public function getSCOgImage() {
		return $this->sc_og_image;
	}
	public function setSCOgType($og_type) {
		$this->sc_og_type = $og_type;
	}
	public function getSCOgType() {
		return $this->sc_og_type;
	}
	public function setSCOgTitle($title) {
		$this->sc_og_title = $title;
	}
	public function getSCOgTitle() {
		return $this->sc_og_title;
	}
	public function setSCOgDescription($description) {
		$this->sc_og_description = $description;
	}
	public function getSCOgDescription() {
		return $this->sc_og_description;
	}
	public function setSCOgUrl($url) {
		$this->sc_og_url = $url;
	}
	public function getSCOgUrl() {
		return $this->sc_og_url;
	}
	public function removeSCLink($href) {
		$this->sc_removelinks[$href] = $href;
	}
	//End of SEO CMS functions

	public function getLinks() {
		
		// SEO CMS code
		if (is_array($this->links) && !empty($this->links)) {
			foreach ($this->links as $links => $linksarray) {
				if (isset($this->sc_removelinks) && !empty($this->sc_removelinks) && isset($this->sc_removelinks[$links])) {
					unset($this->links[$links]);
				}
			}
		}
		//End of SEO CMS code
		return $this->links;

	}

	/**
     * 
     *
     * @param	string	$href
	 * @param	string	$rel
	 * @param	string	$media
     */
	public function addStyle($href, $rel = 'stylesheet', $media = 'screen', $position = 'header') {
		$this->styles[$position][$href] = array(
			'href'  => $href,
			'rel'   => $rel,
			'media' => $media
		);
	}

	/**
     * 
	 * 
	 * @return	array
     */
	public function getStyles($position = 'header') {
		if (isset($this->styles[$position])) {
			return $this->styles[$position];
		} else {
			return array();
		}
	}

	/**
     * 
     *
     * @param	string	$href
	 * @param	string	$position
     */
	public function addScript($href, $position = 'header') {
		$this->scripts[$position][$href] = $href;
	}

	/**
     * 
     *
     * @param	string	$position
	 * 
	 * @return	array
     */
	public function getScripts($position = 'header') {
		if (isset($this->scripts[$position])) {
			return $this->scripts[$position];
		} else {
			return array();
		}
	}
}