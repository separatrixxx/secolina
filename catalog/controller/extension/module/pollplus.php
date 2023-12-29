<?php
class ControllerExtensionModulePollPlus extends Controller {
	private $error = array();

	public function index($setting) {
		$this->load->language('extension/module/pollplus');
		$this->load->model('fido/pollplus');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_no_votes'] = $this->language->get('text_no_votes');
		$data['text_view_results'] = $this->language->get('text_view_results');

		$data['button_vote'] = $this->language->get('button_vote');

		if (isset($setting['module_id'])) {
			$poll_info = $this->model_fido_pollplus->getPollByModule($setting['module_id']);
		} elseif (isset($this->request->get['poll_id'])) {
			$poll_info = $this->model_fido_pollplus->getPollInfo($this->request->get['poll_id']);
		} else {
			$poll_info = array();
		}

		$answered = false;

		if ($poll_info) {
			if (isset($this->request->cookie['poll_answered_' . $poll_info['poll_id']])) {
				$answered = true;
			}

			$total_reactions = $this->model_fido_pollplus->getTotalReactions($poll_info['poll_id']);

			$data['total_reactions'] = $total_reactions;

			$data['options'] = array();

			$options = $this->model_fido_pollplus->getPollOptions($poll_info['poll_id']);

			if (count($options) < 2) {
				$this->model_fido_pollplus->deactivatePoll($poll_info['poll_id']);

				$poll_info['status'] = 0;
			}

			foreach ($options as $option) {
				$reactions = $this->model_fido_pollplus->countOptionReactions($poll_info['poll_id'], $option['poll_option_id']);

				if ($total_reactions) {
					$percent = round(100 * ($reactions / $total_reactions));
				} else {
					$percent = 0;
				}

				$data['options'][] = array(
					'poll_option_id'  => $option['poll_option_id'],
					'title'           => $option['title'],
					'reactions'       => number_format($reactions),
					'percent'         => $percent
				);
			}

			$data['poll_id'] = $poll_info['poll_id'];
			$data['question'] = $poll_info['question'];
			$data['active'] = $poll_info['status'];

			$data['results'] = $this->url->link('information/pollplus', 'poll_id=' . $poll_info['poll_id']);
		}

		$data['answered'] = $answered;

		if (isset($this->request->get['poll_id'])) {
			$data['get_poll'] = $this->request->get['poll_id'];
		} else {
			$data['get_poll'] = 0;
		}

		if ($poll_info) {
			return $this->load->view('extension/module/pollplus', $data);
		}
	}

	public function vote() {
		$this->load->language('extension/module/pollplus');
		$this->load->model('fido/pollplus');

		$json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if (!isset($this->request->post['poll_option_id'])) {
				$json['error']['warning_' . $this->request->post['poll_id']] = $this->language->get('error_option');
			}

			if (!isset($json['error'])) {
				$this->model_fido_pollplus->addReaction($this->request->post);

				// Set a cookie:
				setcookie('poll_answered_' . $this->request->post['poll_id'], $this->request->post['poll_id'], time()+60*60*24*7, '/', $this->request->server['HTTP_HOST']); // Can only vote once a week

				$total_reactions = $this->model_fido_pollplus->getTotalReactions($this->request->post['poll_id']);

				$options = $this->model_fido_pollplus->getPollOptions($this->request->post['poll_id']);

				$html = '';

				foreach ($options as $option) {
					$reactions = $this->model_fido_pollplus->countOptionReactions($this->request->post['poll_id'], $option['poll_option_id']);

					if ($total_reactions) {
						$percent = round(100 * ($reactions / $total_reactions));
					} else {
						$percent = 0;
					}

					$html .= '<i>' . $option['title'] . '</i>';
					$html .= '<div class="progress" style="margin-bottom: 5px;">';
					$html .= '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: ' . $percent . '%;">' . $percent . '%</div>';
					$html .= '</div>';
				}

				$json['success']['results_' . $this->request->post['poll_id']] = $html;

				if ($this->request->get['get_poll']) {
					$json['success']['get_poll'] = $this->request->get['get_poll'];
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}