<?php

class ModelExtensionTotalFilterit extends Model {
    public function getTotal($total) {
        if (!isset($this->session->data['payment_method']['code'])) {
            return;
        } 

        $status = false;
        $title = '';
        $value = '';

        $language = isset($this->session->data['language']) && strlen($this->session->data['language']) < 6 ? $this->session->data['language'] : $this->config->get('config_language');

        $settings = $this->config->get('filterit_payment');

        foreach (array('installed', 'created') as $section) {
            $modules = isset($settings[$section]) ? $settings[$section] : array();

            foreach ($modules as $module_code => $module_info) {
                if ($module_code == $this->session->data['payment_method']['code']) {
                    if ($section == 'created') {
                        $status = true;
                    } else {
                        $status = !empty($module_info['status']['subtotal']);
                    }

                    if (!empty($module_info['subtotal_percent'])) {
                        $value = $module_info['subtotal_percent'];
                    }

                    if (!empty($module_info['subtotal_value'])) {
                        $value = $module_info['subtotal_value'];
                    }

                    if (!empty($module_info['subtotal_texts']) && !empty($module_info['subtotal_texts'][$language])) {
                        $title = $module_info['subtotal_texts'][$language];
                    } elseif (!empty($module_info['subtotal_text'])) {
                        $title = $module_info['subtotal_text'];
                    }
                }
            }
        }

        if (!$status || !$title || !$value) {
            return;
        }

        if (strpos($value, '%')) {
            if (method_exists($this->load, 'library') || get_class($this->load) == 'agooLoader') {
                $this->load->library('simple/filterit');
            } 
              
            $filterit = new Simple\Filterit($this->registry);

            $value = $filterit->calc($value, array(
                'C' => $total['total']
            ));
        } else {
            $value = (float)$value;
        }

        $total['totals'][] = array(
            'code'       => 'filterit',
            'title'      => $title,
            'value'      => $value,
            'sort_order' => $this->config->get('filterit_sort_order')
        );

        $total['total'] += $value;
    }
}