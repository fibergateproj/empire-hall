<?php
class ControllerExtensionModuleInstagram extends Controller {
    private $error = array();

    public function index() {

        $this->load->language('extension/module/instagram');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/module');

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('instagram', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_description'] = $this->language->get('text_description');
        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_name'] = $this->language->get('text_name');
        $data['text_title'] = $this->language->get('text_title');
        $data['text_qty'] = $this->language->get('text_qty');

        $data['entry_status'] = $this->language->get('entry_status');
        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_title'] = $this->language->get('entry_title');
        $data['entry_user_id'] = $this->language->get('entry_user_id');
        $data['entry_token'] = $this->language->get('entry_token');
        $data['entry_qty'] = $this->language->get('entry_qty');
        $data['entry_width'] = $this->language->get('entry_width');
        $data['entry_height'] = $this->language->get('entry_height');
        $data['entry_hashtag'] = $this->language->get('entry_hashtag');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        // Errors
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        if (isset($this->error['title'])) {
            $data['error_title'] = $this->error['title'];
        } else {
            $data['error_title'] = '';
        }

        if (isset($this->error['user_id'])) {
            $data['error_user_id'] = $this->error['user_id'];
        } else {
            $data['error_user_id'] = '';
        }

        if (isset($this->error['token'])) {
            $data['error_token'] = $this->error['token'];
        } else {
            $data['error_token'] = '';
        }

        if (isset($this->error['qty'])) {
            $data['error_qty'] = $this->error['qty'];
        } else {
            $data['error_qty'] = '';
        }

        if (isset($this->error['width'])) {
            $data['error_width'] = $this->error['width'];
        } else {
            $data['error_width'] = '';
        }

        if (isset($this->error['height'])) {
            $data['error_height'] = $this->error['height'];
        } else {
            $data['error_height'] = '';
        }

        //
        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'], true)
            );
        } else {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            );
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

        $data['cancel'] = $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        //

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['title'])) {
            $data['title'] = $this->request->post['title'];
        } elseif (!empty($module_info)) {
            $data['title'] = $module_info['title'];
        } else {
            $data['title'] = '';
        }

        if (isset($this->request->post['hashtag'])) {
            $data['hashtag'] = $this->request->post['hashtag'];
        } elseif (!empty($module_info)) {
            $data['hashtag'] = $module_info['hashtag'];
        } else {
            $data['hashtag'] = '';
        }


        if (isset($this->request->post['user_id'])) {
            $data['user_id'] = $this->request->post['user_id'];
        } elseif (!empty($module_info)) {
            $data['user_id'] = $module_info['user_id'];
        } else {
            $data['user_id'] = '';
        }

        if (isset($this->request->post['token'])) {
            $data['token'] = $this->request->post['token'];
        } elseif (!empty($module_info)) {
            $data['token'] = $module_info['token'];
        } else {
            $data['token'] = '';
        }

        if (isset($this->request->post['qty'])) {
            $data['qty'] = $this->request->post['qty'];
        } elseif (!empty($module_info)) {
            $data['qty'] = $module_info['qty'];
        } else {
            $data['qty'] = '';
        }

        if (isset($this->request->post['width'])) {
            $data['width'] = $this->request->post['width'];
        } elseif (!empty($module_info)) {
            $data['width'] = $module_info['width'];
        } else {
            $data['width'] = '';
        }

        if (isset($this->request->post['height'])) {
            $data['height'] = $this->request->post['height'];
        } elseif (!empty($module_info)) {
            $data['height'] = $module_info['height'];
        } else {
            $data['height'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/instagram', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/instagram')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        $names = $this->request->post['title'];

        foreach ($names as $language_name) {

            if ((utf8_strlen($language_name) < 3) || (utf8_strlen($language_name) > 64)) {
                $this->error['title'] = $this->language->get('error_title');
            }
        }

        if ((utf8_strlen($language_name) < 3) || (utf8_strlen($language_name) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if ((utf8_strlen($this->request->post['user_id']) < 3) || (utf8_strlen($this->request->post['user_id']) > 64)) {
            $this->error['user_id'] = $this->language->get('error_user_id');
        }

        if (!$this->request->post['token']){
            $this->error['token'] = $this->language->get('error_token');
        }

        if ((utf8_strlen($this->request->post['qty']) < 1) || (utf8_strlen($this->request->post['qty']) > 3)) {
            $this->error['qty'] = $this->language->get('error_qty');
        }

        if (!$this->request->post['width']) {
            $this->error['width'] = $this->language->get('error_width');
        }

        if (!$this->request->post['height']) {
            $this->error['height'] = $this->language->get('error_height');
        }

        return !$this->error;
    }
}