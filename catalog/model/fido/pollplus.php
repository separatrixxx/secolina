<?php
class ModelFidoPollPlus extends Model {
	public function getPollByModule($module_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND pp.module_id = '" . (int)$module_id . "'");

		return $query->row;
	}

	public function getPollOptions($poll_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_option ppo LEFT JOIN " . DB_PREFIX . "pollplus_option_description ppod ON (ppo.poll_option_id = ppod.poll_option_id) WHERE ppod.language_id = '" . (int)$this->config->get('config_language_id') . "' AND ppo.poll_id = '" . (int)$poll_id . "' ORDER BY ppo.sort_order ASC");

		return $query->rows;
	}

	public function addReaction($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "pollplus_reactions SET poll_id = '" . (int)$data['poll_id'] . "', store_id = '" . (int)$this->config->get('config_store_id') . "', poll_option_id = '" . (int)$data['poll_option_id'] . "'");
	}

	public function getReactions($poll_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' GROUP BY poll_option_id");

		return $query->rows;
	}

	public function getTotalReactions($poll_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->row) {
			return $query->row['total'];
		} else {
			return false;
		}
	}

	public function countOptionReactions($poll_id, $poll_option_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "pollplus_reactions WHERE poll_id = '" . (int)$poll_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND poll_option_id = '" . (int)$poll_option_id . "'");

		if ($query->row) {
			return $query->row['total'];
		} else {
			return false;
		}
	}

	public function getPollInfo($poll_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . $this->config->get('config_language_id') . "' AND pp.poll_id = '" . (int)$poll_id . "'");

		return $query->row;
	}

	public function getOptions($poll_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus_option ppo LEFT JOIN " . DB_PREFIX . "pollplus_option_description ppod ON (ppo.poll_option_id = ppod.poll_option_id) WHERE ppod.language_id = '" . (int)$this->config->get('config_language_id') . "' AND ppo.poll_id = '" . (int)$poll_id . "' ORDER BY ppo.sort_order ASC");

		return $query->rows;
	}

	public function getPolls() {
		$poll_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pollplus pp LEFT JOIN " . DB_PREFIX . "pollplus_description ppd ON (pp.poll_id = ppd.poll_id) WHERE ppd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		if ($query->rows) {
			foreach ($query->rows as $poll) {
				if ($this->getLayoutModule('pollplus.' . $poll['module_id'])) {
					$poll_data[] = $poll;
				}
			}
		}

		return $poll_data;
	}

	public function getLayoutModule($code) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_route lr LEFT JOIN " . DB_PREFIX . "layout_module lm ON (lr.layout_id = lm.layout_id) WHERE lr.store_id = '" . (int)$this->config->get('config_store_id') . "' AND lm.code = '" . $this->db->escape($code) . "'");

		if ($query->rows) {
			return true;
		} else {
			return false;
		}
	}

	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");

		return $query->row;
	}

	public function deactivatePoll($poll_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "pollplus SET status = '0' WHERE poll_id = '" . (int)$poll_id . "'");
	}
}