<?php
class ControllerExtensionModuleBanner extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');


        $curr_lang =  $this->language->get('code');

		$data['banners'] = array();

        if($this->cache->get('banner.banner_'.$setting['banner_id']."_".$curr_lang)){
            $results = $this->cache->get('banner.banner_'.$setting['banner_id']."_".$curr_lang);
        }else{
            $results = $this->model_design_banner->getBanner($setting['banner_id']);
            $this->cache->set('banner.banner_'.$setting['banner_id']."_".$curr_lang, $results);
        }


		/** EET Module */
		$ee_position = 1;
		$data['ee_tracking'] = $this->config->get('module_ee_tracking_status');
		if ($data['ee_tracking'] && $results) {
			$data['ee_promotion'] = $this->config->get('module_ee_tracking_promotion_status');
			$data['ee_promotion_log'] = $this->config->get('module_ee_tracking_log') ? $this->config->get('module_ee_tracking_promotion_log') : false;
			$data['ee_ga_callback'] = $this->config->get('module_ee_tracking_advanced_settings') ? $this->config->get('module_ee_tracking_ga_callback') : 0;
			$data['ee_generate_cid'] = $this->config->get('module_ee_tracking_advanced_settings') ? $this->config->get('module_ee_tracking_generate_cid') : 0;
			$data['ee_data'] = json_encode(array('banner_id' => $setting['banner_id']));
		}
		/** EET Module */
            
		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
                $image_sm = $result['image_sm'];
                if (empty($image_sm) || !is_file(DIR_IMAGE . $result['image_sm'])){
                    $image_sm = $result['image'];
                }

                $image_md = $result['image_md'];
                if (empty($image_md) || !is_file(DIR_IMAGE . $result['image_md'])){
                    $image_md = $result['image'];
                }

                $image_lg = $result['image_lg'];
                if (empty($image_lg) || !is_file(DIR_IMAGE . $result['image_lg'])){
                    $image_lg = $result['image'];
                }

				$data['banners'][] = array(
					'ee_banner_id' => $result['banner_id'],
					'ee_position' => isset($ee_position) ? $ee_position++ : '',
					'title' => $result['title'],
					'description' => html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'),
					'link'  => $result['link'],
				//	'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
					'image' =>  HTTPS_SERVER . 'image/' . $result['image'],
                    'image_sm' => HTTPS_SERVER . '/image/' . $image_sm,
                    'image_md' => HTTPS_SERVER . '/image/' . $image_md,
                    'image_lg' => HTTPS_SERVER . '/image/' . $image_lg
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/banner', $data);
	}
}