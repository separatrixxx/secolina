<?php
class ModelFidoPollPlus extends Model {
	public function createPolls() {
		$create_pollplus = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pollplus` (`poll_id` int(11) NOT NULL auto_increment, `module_id` int(11) NOT NULL, `status` int(1) NOT NULL default '0', `date_added` datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (`poll_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_pollplus);

		$create_pollplus_description = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pollplus_description` (`poll_id` int(11) NOT NULL, `language_id` int(11) NOT NULL, `question` varchar(255) NOT NULL default '', PRIMARY KEY  (`poll_id`,`language_id`), KEY `question` (`question`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_pollplus_description);

		$create_pollplus_option = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pollplus_option` (`poll_option_id` int(11) NOT NULL auto_increment, `poll_id` int(11) NOT NULL, `sort_order` int(1) NOT NULL default '1', `date_added` datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (`poll_option_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_pollplus_option);

		$create_pollplus_option_description = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pollplus_option_description` (`poll_option_id` int(11) NOT NULL, `language_id` int(11) NOT NULL, `poll_id` int(11) NOT NULL, `title` varchar(255) NOT NULL default '', PRIMARY KEY  (`poll_option_id`,`language_id`), KEY `title` (`title`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_pollplus_option_description);

		$create_pollplus_reactions = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pollplus_reactions` (`poll_reaction_id` int(11) NOT NULL auto_increment, `poll_id` int(11) NOT NULL, `store_id` int(11) NOT NULL, `poll_option_id` int(11) NOT NULL, PRIMARY KEY  (`poll_reaction_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_pollplus_reactions);
	}

	public function dropPolls() {
		$drop_pollplus = "DROP TABLE IF EXISTS `" . DB_PREFIX . "pollplus`;";
		$this->db->query($drop_pollplus);

		$drop_pollplus_description = "DROP TABLE IF EXISTS `" . DB_PREFIX . "pollplus_description`;";
		$this->db->query($drop_pollplus_description);

		$drop_pollplus_option = "DROP TABLE IF EXISTS `" . DB_PREFIX . "pollplus_option`;";
		$this->db->query($drop_pollplus_option);

		$drop_pollplus_option_description = "DROP TABLE IF EXISTS `" . DB_PREFIX . "pollplus_option_description`;";
		$this->db->query($drop_pollplus_option_description);

		$drop_pollplus_reactions = "DROP TABLE IF EXISTS `" . DB_PREFIX . "pollplus_reactions`;";
		$this->db->query($drop_pollplus_reactions);
	}

	public function addModule($code, $data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "module` SET `name` = '" . $this->db->escape($data['name']) . "', `code` = '" . $this->db->escape($code) . "', `setting` = '" . $this->db->escape(json_encode($data)) . "'");

		$module_id = $this->db->getLastId();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");

		$settings = json_decode($query->row['setting'], true);

		$settings['module_id'] = $module_id;

		$this->db->query("UPDATE " . DB_PREFIX . "module SET setting = '" . $this->db->escape(json_encode($settings)) . "' WHERE module_id = '" . (int)$module_id . "'");

		return $module_id;
	}

	public function addPoll($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus SET module_id = '" . (int)$data['module_id'] . "', status = '0', date_added = now()");

		$poll_id = $this->db->getLastId();

		foreach ($data['pollplus_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_description SET poll_id = '" . (int)$poll_id . "', language_id = '" . (int)$language_id . "', question = '" . $this->db->escape($value['question']) . "'");
		}

		if (isset($data['poll_option'])) {
			foreach ($data['poll_option'] as $key => $value) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_option SET poll_id = '" . (int)$poll_id . "', sort_order = '" . (int)$value['sort_order'] . "', date_added = now()");

				$poll_option_id = $this->db->getLastId();

				foreach ($value['description'] as $language_id => $option) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_option_description SET poll_option_id = '" . (int)$poll_option_id . "', language_id = '" . (int)$language_id . "', poll_id = '" . (int)$poll_id . "', title = '" . $this->db->escape($option['title']) . "'");
				}
			}
		}
	}

	public function editPoll($poll_id, $data) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "pollplus_description WHERE poll_id = '" . (int)$poll_id . "'");

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_option WHERE poll_id = '" . (int)$poll_id . "'");

		foreach ($query->rows as $result) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "pollplus_option_description WHERE poll_option_id = '" . (int)$result['poll_option_id'] . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "pollplus_option WHERE poll_id = '" . (int)$poll_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "pollplus_option_description WHERE poll_id = '" . (int)$poll_id . "'");

		foreach ($data['pollplus_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_description SET poll_id = '" . (int)$poll_id . "', language_id = '" . (int)$language_id . "', question = '" . $this->db->escape($value['question']) . "'");
		}

		if (isset($data['poll_option'])) {
			foreach ($data['poll_option'] as $key => $value) {
				if ($value['poll_option_id']) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_option SET poll_option_id = '" . (int)$value['poll_option_id'] . "', poll_id = '" . (int)$poll_id . "', sort_order = '" . (int)$value['sort_order'] . "'");

					foreach ($value['description'] as $language_id => $option) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_option_description SET poll_option_id = '" . (int)$value['poll_option_id'] . "', language_id = '" . (int)$language_id . "', poll_id = '" . (int)$poll_id . "', title = '" . $this->db->escape($option['title']) . "'");
					}
				} else {
					$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_option SET poll_id = '" . (int)$poll_id . "', sort_order = '" . (int)$value['sort_order'] . "'");

					$poll_option_id = $this->db->getLastId();

					foreach ($value['description'] as $language_id => $option) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_option_description SET poll_option_id = '" . (int)$poll_option_id . "', language_id = '" . (int)$language_id . "', poll_id = '" . (int)$poll_id . "', title = '" . $this->db->escape($option['title']) . "'");
					}
				}
			}
		}
	}

	public function deletePoll($poll_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "pollplus WHERE poll_id = '" . (int)$poll_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "pollplus_description WHERE poll_id = '" . (int)$poll_id . "'");

		$poll_options = $this->getPollOptions($poll_id);

		foreach ($poll_options as $poll_option) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "pollplus_option_description WHERE poll_option_id = '" . (int)$poll_option['poll_option_id'] . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "pollplus_option WHERE poll_id = '" . (int)$poll_id . "'");
	}

	public function getPollOptions($poll_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_option WHERE poll_id = '" . (int)$poll_id . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getTotalPollOptions($poll_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pollplus_option WHERE poll_id = '" . (int)$poll_id . "'");

		if ($query->row) {
			return $query->row['total'];
		} else {
			return false;
		}
	}

	public function getPollOption($poll_option_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_option WHERE poll_option_id = '" . (int)$poll_option_id . "'");

		return $query->row;
	}

	public function getPollOptionDescriptions($poll_option_id) {
		$poll_option_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_option_description WHERE poll_option_id = '" . (int)$poll_option_id . "'");

		foreach ($query->rows as $result) {
			$poll_option_description_data[$result['language_id']] = array(
				'title' => $result['title']
			);
		}

		return $poll_option_description_data;
	}

	public function getPoll($poll_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "pollplus WHERE poll_id = '" . (int)$poll_id . "'");

		return $query->row;
	}

	public function getPollDescriptions($poll_id) {
		$poll_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_description WHERE poll_id = '" . (int)$poll_id . "'");

		foreach ($query->rows as $result) {
			$poll_description_data[$result['language_id']] = array(
				'question' => $result['question']
			);
		}

		return $poll_description_data;
	}

	public function getPollByModule($module_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND pp.module_id = '" . (int)$module_id . "'");

		return $query->row;
	}

	public function getPollInfo($poll_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . $this->config->get('config_language_id') . "' AND pp.poll_id = '" . (int)$poll_id . "'");

		return $query->row;
	}

	public function activatePoll($poll_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "pollplus SET status = '1' WHERE poll_id = '" . (int)$poll_id . "'");
	}

	public function deactivatePoll($poll_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "pollplus SET status = '0' WHERE poll_id = '" . (int)$poll_id . "'");
	}

	public function getPolls($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

			$sort_data = array(
				'ppd.question',
				'pp.module_id',
				'pp.status'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY pp.module_id, ppd.question";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC";
			} else {
				$sql .= " ASC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}

			$query = $this->db->query($sql);

			return $query->rows;
		} else {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY ppd.question");

			return $query->rows;
		}
	}

	public function getTotalPolls() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pollplus");

		return $query->row['total'];
	}

	public function getPollsByStore($data = array(), $store_id) {
		$polls_by_store = array();

		$this->load->model('extension/module');

		$modules = $this->model_extension_module->getModulesByCode('pollplus');

		foreach ($modules as $module) {
			$module_info = $this->model_extension_module->getModule($module['module_id']);

			if ($module_info['store_id'] == $store_id) {
				if ($data) {
					$sql = "SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND module_id = '" . (int)$module_info['module_id'] . "'";

					$sort_data = array(
						'ppd.question',
						'pp.module_id',
						'pp.status'
					);

					if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
						$sql .= " ORDER BY " . $data['sort'];
					} else {
						$sql .= " ORDER BY pp.module_id, ppd.question";
					}

					if (isset($data['order']) && ($data['order'] == 'DESC')) {
						$sql .= " DESC";
					} else {
						$sql .= " ASC";
					}

					if (isset($data['start']) || isset($data['limit'])) {
						if ($data['start'] < 0) {
							$data['start'] = 0;
						}

						if ($data['limit'] < 1) {
							$data['limit'] = 20;
						}

						$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
					}

					$query = $this->db->query($sql);

					foreach ($query->rows as $poll) {
						$polls_by_store[] = $poll;
					}
				} else {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND module_id = '" . (int)$module_info['module_id'] . "' ORDER BY ppd.question");

					foreach ($query->rows as $poll) {
						$polls_by_store[] = $poll;
					}
				}
			}
		}

		return $polls_by_store;
	}

	public function getTotalPollsByStore($store_id) {
		$total_polls_by_store = 0;

		$this->load->model('extension/module');

		$modules = $this->model_extension_module->getModulesByCode('pollplus');

		foreach ($modules as $module) {
			$module_info = $this->model_extension_module->getModule($module['module_id']);

			if ($module_info['store_id'] == $store_id) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus WHERE module_id = '" . (int)$module_info['module_id'] . "'");

				$total_polls_by_store = $total_polls_by_store + count($query->rows);
			}
		}

		return $total_polls_by_store;
	}

	public function getReactions($poll_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "' GROUP BY poll_option_id");

		return $query->rows;
	}

	public function getReactionsByStore($poll_id, $store_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "' AND store_id = '" . (int)$store_id . "' GROUP BY poll_option_id");

		return $query->rows;
	}

	public function getTotalReactions($poll_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "'");

		if ($query->row) {
			return $query->row['total'];
		} else {
			return false;
		}
	}

	public function getTotalReactionsByStore($poll_id, $store_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "' AND store_id = '" . (int)$store_id . "'");

		if ($query->row) {
			return $query->row['total'];
		} else {
			return false;
		}
	}

	public function getOptions($poll_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_option ppo LEFT JOIN " . DB_PREFIX . "pollplus_option_description ppod ON (ppo.poll_option_id = ppod.poll_option_id) WHERE ppod.language_id = '" . (int)$this->config->get('config_language_id') . "' AND ppo.poll_id = '" . (int)$poll_id . "' ORDER BY ppo.sort_order ASC");

		return $query->rows;
	}

	public function countOptionReactions($poll_id, $poll_option_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "' AND poll_option_id = '" . (int)$poll_option_id . "'");

		if ($query->row) {
			return $query->row['total'];
		} else {
			return false;
		}
	}

	public function countOptionReactionsByStore($poll_id, $poll_option_id, $store_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "' AND poll_option_id = '" . (int)$poll_option_id . "' AND store_id = '" . (int)$store_id . "'");

		if ($query->row) {
			return $query->row['total'];
		} else {
			return false;
		}
	}

	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");

		return $query->row;
	}

	public function getFreeModule() {
		$this->load->model('extension/module');

		$module_id = false;

		$modules = $this->model_extension_module->getModulesByCode('pollplus');

		foreach ($modules as $module) {
			$poll_info = $this->getPollByModule($module['module_id']);

			if (!$poll_info) {
				$module_id = $module['module_id'];

				break;
			}
		}

		return $module_id;
	}

	public function allocateModule($poll_id, $module_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "pollplus SET module_id = '" . (int)$module_id . "' WHERE poll_id = '" . (int)$poll_id . "'");
	}
}