<?php

class ControllerProductCategory extends Controller
{
    public function index()
    {
        $this->load->language('product/category');

        $this->load->model('catalog/category');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');

        $this->load->model('catalog/manufacturer');

        $curr_lang =  $this->language->get('code');

        if (isset($this->request->get['filter'])) {
            $filter = $this->request->get['filter'];
        } else {
            $filter = '';
        }
        $data['logged'] = $this->customer->isLogged();

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'p.viewed';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['limit'])) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
        }


		// OCFilter start
    if (isset($this->request->get['filter_ocfilter'])) {
      $filter_ocfilter = $this->request->get['filter_ocfilter'];
    } else {
      $filter_ocfilter = '';
    }
		// OCFilter end
      
        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );


        if (isset($this->request->get['path'])) {
            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $path = '';

            $parts = explode('_', (string)$this->request->get['path']);

            $category_id = (int)array_pop($parts);

            foreach ($parts as $path_id) {
                if (!$path) {
                    $path = (int)$path_id;
                } else {
                    $path .= '_' . (int)$path_id;
                }

                if($this->cache->get('category.index.category_info_path_id'.$path_id."_".$curr_lang)){
                    $category_info = $this->cache->get('category.index.category_info_path_id'.$path_id."_".$curr_lang);
                }else{
                    $category_info = $this->model_catalog_category->getCategory($path_id);
                    $this->cache->set('category.index.category_info_path_id'.$path_id."_".$curr_lang, $category_info);
                }

                if ($category_info) {
                    $data['breadcrumbs'][] = array(
                        'text' => $category_info['name'],
                        'href' => $this->url->link('product/category', 'path=' . $path . $url)
                    );
                    //	print_r($path_id);
                }
            }
        } else {
            $category_id = 0;
        }

        // print_r($this->request->get);
//        if(isset($this->session->data['path'])){
//            $data['path'] = $this->session->data['path'];
//            $category_id=$this->session->data['path'];
//        }else{
//            $data['path']=157;
//        }
        if($this->cache->get('category.index.category_info'.$category_id."_".$curr_lang)){
            $category_info = $this->cache->get('category.index.category_info'.$category_id."_".$curr_lang);
        }else{
            $category_info = $this->model_catalog_category->getCategory($category_id);
            $this->cache->set('category.index.category_info'.$category_id."_".$curr_lang, $category_info);
        }


        if ($category_info) {

            $this->document->setTitle(empty($category_info['meta_title'])?$category_info['name']:$category_info['meta_title']);
            $this->document->setDescription($category_info['meta_description']);
            $this->document->setKeywords($category_info['meta_keyword']);


            
      //$data['heading_title'] = $category_info['name'];
      
      $data["heading_title"] = !empty($category_info['seo_h1']) && $this->config->get('mlseo_enabled') ? $category_info['seo_h1'] : $category_info['name'];
      
      $data['seo_h1'] = !empty($category_info['seo_h1']) ? $category_info['seo_h1'] : '';
      $data['seo_h2'] = !empty($category_info['seo_h2']) ? $category_info['seo_h2'] : '';
      $data['seo_h3'] = !empty($category_info['seo_h3']) ? $category_info['seo_h3'] : '';
      
      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');
        
        if ($this->config->get('mlseo_microdata')) {
          $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'category', $data));
        }
      }
      
      if ($this->config->get('mlseo_header_lm_category')) {
        $gkd_header_lm_date = strtotime($category_info['date_modified']);
        
        $this->response->addHeader('Last-Modified: '.date('D, d M Y H:i:s', $gkd_header_lm_date).' GMT');
      }
      

            //custom: meta for filter pages by one brand

            $filters = explode(';', $this->request->get['filter_ocfilter']);

            if(count($filters) == 1 && strpos($filters[0], 'm') !== false){
                if(strpos($filters[0], ',') === false){

                    $exclude_categories = $this->config->get('config_exclude_category');

                    if(!in_array($category_id, $exclude_categories)) {

                        $config_brands_h1 = isset($this->config->get('config_brands_h1')[$this->config->get('config_language_id')]) ? $this->config->get('config_brands_h1')[$this->config->get('config_language_id')] : '';
                        if (empty($config_brands_h1)) {
                            $config_brands_h1 = $category_info['name'] . ' ' . $this->model_catalog_manufacturer->getManufacturer(explode(':', $filters[0])[1])['name'];
                        }
                        $config_brands_title = isset($this->config->get('config_brands_title')[$this->config->get('config_language_id')]) ? $this->config->get('config_brands_title')[$this->config->get('config_language_id')] : '';
                        if (empty($config_brands_title)) {
                            $config_brands_title = empty($category_info['meta_title']) ? $category_info['name'] : $category_info['meta_title'];
                        }
                        $config_brands_desc = isset($this->config->get('config_brands_desc')[$this->config->get('config_language_id')]) ? $this->config->get('config_brands_desc')[$this->config->get('config_language_id')] : '';
                        if (empty($config_brands_desc)) {
                            $config_brands_desc = $category_info['meta_description'];
                        }

                        if (isset($this->request->get['filter_ocfilter'])) {
                            $filter_ocfilter = $this->request->get['filter_ocfilter'];
                        } else {
                            $filter_ocfilter = '';
                        }

                        $filter_data = array(
                            'filter_category_id' => $category_id,
                            'filter_filter' => $filter,
                            'sort' => $sort,
                            'order' => $order,
                            'start' => ($page - 1) * $limit,
                            'limit' => $limit
                        );
                        $filter_data['filter_ocfilter'] = $filter_ocfilter;

                        $args = array(
                            'category_name' => $category_info['name'],
                            'brand_name' => $this->model_catalog_manufacturer->getManufacturer(explode(':', $filters[0])[1])['name'],
                            'min_price' => $this->ocfilter->getMinPrice(),
                            'max_price' => $this->ocfilter->getMaxPrice(),
                            'products_count' => $this->model_catalog_product->getTotalProducts($filter_data)
                        );


                        $data['heading_title'] = $this->parseBrandsFilterMeta($config_brands_h1, $args);
                        $this->document->setTitle($this->parseBrandsFilterMeta($config_brands_title, $args));
                        $this->document->setDescription($this->parseBrandsFilterMeta($config_brands_desc, $args));
                    }
                }
            }

            // Set the last category breadcrumb
            $data['breadcrumbs'][] = array(
                'text' => $category_info['name'],
                'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'])
            );

            if ($category_info['image']) {
                $data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
            } else {
                $data['thumb'] = '';
            }

            $this->document->setOGImage($data['thumb']);

            $data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');
            $data['h1'] = $category_info['h1'];
            $data['compare'] = $this->url->link('product/compare');
            $this->document->setOGImage($data['thumb']);

            $url = '';

            // OCFilter start
            if (isset($this->request->get['filter_ocfilter'])) {
                $url .= '&filter_ocfilter=' . $this->request->get['filter_ocfilter'];
            }
            // OCFilter end

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }


            $data['sorts'] = array();

            $data['sorts'][] = array(
                'text' => $this->language->get('text_default'),
                'value' => 'p.viewed-DESC',
                'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.viewed&order=DESC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_price_desc'),
                'value' => 'p.price-DESC',
                'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.price&order=DESC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_price_asc'),
                'value' => 'p.price-ASC',
                'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.price&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_name_desc'),
                'value' => 'pd.name-DESC',
                'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=pd.name&order=DESC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_name_asc'),
                'value' => 'pd.name-ASC',
                'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=pd.name&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_instock'),
                'value' => 'instock-ASC',
                'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=instock' . $url)
            );

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['categories'] = array();

            $results = $this->model_catalog_category->getCategories($category_id);

            foreach ($results as $result) {
                $filter_data = array(
                    'filter_category_id' => $result['category_id'],
                    'filter_sub_category' => true
                );

                $data['categories'][] = array(
                    'name' => $result['name'],
                    'category_id' => $result['category_id'],
                    'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url)
                );
            }
            if ($results) {
                $data['h1_child'] = $results[0]['h1'];
                $category_info_singl = $this->model_catalog_category->getCategory(157);
                //  $data['h1'] = $category_info_singl['h1'];


                if (isset($this->request->post['cat_id'])) {
                    $data['category_id_child'] = $this->request->post['cat_id'];
                } else {
                    $data['category_id_child'] = $results[0]['category_id'];
                }

                $data['description_child'] = html_entity_decode($results[0]['description'], ENT_QUOTES, 'UTF-8');
            }
            $data['products'] = array();

            $filter_data = array(
                'filter_category_id' => $category_id,
                'filter_filter' => $filter,
                'sort' => $sort,
                'order' => $order,
                'start' => ($page - 1) * $limit,
                'limit' => $limit
            );


  		// OCFilter start
  		$filter_data['filter_ocfilter'] = $filter_ocfilter;
  		// OCFilter end
      
            $product_total = $this->model_catalog_product->getTotalProducts($filter_data); 


  		// OCFilter start
  		$filter_data['filter_ocfilter'] = $filter_ocfilter;
  		// OCFilter end
      
            if ($product_total == 1) {
                $data['count_products'] = sprintf($this->language->get('text_one_product'), $product_total);
            } else if ($product_total > 1 && $product_total < 5) {
                $data['count_products'] = sprintf($this->language->get('text_two_product'), $product_total);
            } else {
                $data['count_products'] = sprintf($this->language->get('text_five_product'), $product_total);
            }

            $category_products_cache_id = implode('_', $filter_data);

            if($this->cache->get('category.index.getProducts'.$category_products_cache_id."_".$curr_lang)){
                $results = $this->cache->get('category.index.getProducts'.$category_products_cache_id."_".$curr_lang);
            }else{
                $results = $this->model_catalog_product->getProducts($filter_data);

			/** EET Module */
			if (isset($page) && isset($limit)) {
				$ee_position = ($page - 1) * $limit + 1;
			} else {
				$ee_position = 1;
			}
			$data['ee_tracking'] = $this->config->get('module_ee_tracking_status');
			if ($data['ee_tracking'] && $results) {
				$data['ee_impression'] = $this->config->get('module_ee_tracking_impression_status');
				$data['ee_impression_log'] = $this->config->get('module_ee_tracking_log') ? $this->config->get('module_ee_tracking_impression_log') : false;
				$data['ee_click'] = $this->config->get('module_ee_tracking_click_status');
				$data['ee_cart'] = $this->config->get('module_ee_tracking_cart_status');
				$data['ee_ga_callback'] = $this->config->get('module_ee_tracking_advanced_settings') ? $this->config->get('module_ee_tracking_ga_callback') : 0;
				$data['ee_generate_cid'] = $this->config->get('module_ee_tracking_advanced_settings') ? $this->config->get('module_ee_tracking_generate_cid') : 0;
				$ee_class_array = preg_split('/(?=[A-Z])/', get_class($this));
				$data['ee_type'] = strtolower(array_pop($ee_class_array));
				$ee_data = array('type' => $data['ee_type']);
				$ee_data['position'] = $ee_position;
				foreach ($results as $item) {
					$ee_data['products'][] = $item['product_id'];
				}
				$data['ee_impression_data'] = json_encode($ee_data);
			}
			/** EET Module */
            
                $this->cache->set('category.index.getProducts'.$category_products_cache_id."_".$curr_lang, $results);
            }

            $this->load->model('account/wishlist');

            foreach ($results as $result) {

                $customer_wishlist = $this->model_account_wishlist->getWishlistProductId($result['product_id']);

                if (in_array($result['product_id'], $customer_wishlist)) {
                    $result['is_wishlist'] = true;
                } else {
                    $result['is_wishlist'] = false;
                }

                $filter = array(
                    'product' => $result,
                    'width' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'),
                    'height' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height')
                );

                $data['products'][] = $this->product->getProduct($filter);

            }


      // OCFilter start
			if (isset($this->request->get['filter_ocfilter'])) {
				$url .= '&filter_ocfilter=' . $this->request->get['filter_ocfilter'];
			}
      // OCFilter end
      
            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }


            $url = '';


      // OCFilter start
			if (isset($this->request->get['filter_ocfilter'])) {
				$url .= '&filter_ocfilter=' . $this->request->get['filter_ocfilter'];
			}
      // OCFilter end
      
            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            $data['limits'] = array();

            $limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 60, 90));

            sort($limits);

            foreach ($limits as $value) {
                $data['limits'][] = array(
                    'text' => $value,
                    'value' => $value,
                    'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&limit=' . $value)
                );
            }

            $url = '';


      // OCFilter start
			if (isset($this->request->get['filter_ocfilter'])) {
				$url .= '&filter_ocfilter=' . $this->request->get['filter_ocfilter'];
			}
      // OCFilter end
      
            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $pagination = new PaginationFront();
            $pagination->total = $product_total;
            $pagination->page = $page;
            $pagination->limit = $limit;
            $pagination->prev_txt = $this->language->get('text_pagination_prev');
            $pagination->last_txt = $this->language->get('text_pagination_last');
            $pagination->url = $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&page={page}');

            $data['pagination'] = $pagination->render();

            $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

            // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html

      if ($page > 1 AND $this->config->get('mlseo_pagination_canonical')) {
         $this->load->model('tool/path_manager'); $this->document->addLink($this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($category_info['category_id']) : $category_info['category_id']) . '&page='. $page, true), 'canonical');
      }
      
            if ($page == 1) {
                
        $this->load->model('tool/path_manager');
        if (empty($this->request->get['mfp_seo_alias'])) {
          $this->document->addLink($this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($category_info['category_id']) : $category_info['category_id'])), 'canonical');
        } else {
          $this->document->addLink( rtrim( $this->url->link('product/category', 'path=' . $category_info['category_id'], true), '/' ) . '/' . $this->request->get['mfp_seo_alias'], 'canonical');
        }
        
            } else {
                
        $this->load->model('tool/path_manager');
        if (empty($this->request->get['mfp_seo_alias'])) {
          $this->document->addLink($this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($category_info['category_id']) : $category_info['category_id'])), 'canonical');
        } else {
          $this->document->addLink( rtrim( $this->url->link('product/category', 'path=' . $category_info['category_id'], true), '/' ) . '/' . $this->request->get['mfp_seo_alias'], 'canonical');
        }
        
            }

            if ($page > 1) {
                $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . (($page - 2) ? '&page=' . ($page - 1) : '')), 'prev');
            }

            if ($limit && ceil($product_total / $limit) > $page) {
                $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page=' . ($page + 1)), 'next');
            }

            $data['sort'] = $sort;
            $data['order'] = $order;
            $data['limit'] = $limit;

      // OCFilter Start
      if ($this->ocfilter->getParams()) {
        if (isset($product_total) && !$product_total) {
      	  $this->response->redirect($this->url->link('product/category', 'path=' . $this->request->get['path']));
        }

        $this->document->setTitle($this->ocfilter->getPageMetaTitle($this->document->getTitle()));
			  $this->document->setDescription($this->ocfilter->getPageMetaDescription($this->document->getDescription()));
        $this->document->setKeywords($this->ocfilter->getPageMetaKeywords($this->document->getKeywords()));

        $data['heading_title'] = $this->ocfilter->getPageHeadingTitle($data['heading_title']);
        $data['description'] = $this->ocfilter->getPageDescription();

        if (!trim(strip_tags(html_entity_decode($data['description'], ENT_QUOTES, 'UTF-8')))) {
        	$data['thumb'] = '';
        }

        $breadcrumb = $this->ocfilter->getPageBreadCrumb();

        if ($breadcrumb) {
  			  $data['breadcrumbs'][] = $breadcrumb;
        }

        $this->document->deleteLink('canonical');
      }
      // OCFilter End
      

            $data['continue'] = $this->url->link('common/home');

            $this->load->model('design/layout');
            if (isset ($this->request->get ['route'])) {
                $route = ( string )$this->request->get ['route'];
            } else {
                $route = 'common/home';
            }
            $layout_template = $this->model_design_layout->getLayoutTemplate($route);
            $isLayoutRoute = true;
            if (!$layout_template) {
                $layout_template = 'category';
                $isLayoutRoute = false;
            }
            // get general layout template
            if (!$isLayoutRoute) {
                $layout_id = $this->model_catalog_category->getCategoryLayoutId($category_id);
                if ($layout_id) {
                    $tmp_layout_template = $this->model_design_layout->getGeneralLayoutTemplate($layout_id);
                    if ($tmp_layout_template)
                        $layout_template = $tmp_layout_template;
                }
            }
            if ($layout_template == 'gift') {

                //   $this->session->data['path'] = $this->request->get['path'];
                //   $data['path'] = $this->request->get['path'];

                if($this->cache->get('category.index.getCategory_gift'."_".$curr_lang)){
                    $category_info_singl = $this->cache->get('category.index.getCategory_gift'."_".$curr_lang);
                }else{
                    $category_info_singl = $this->model_catalog_category->getCategory(157);
                    $this->cache->set('category.index.getCategory_gift'."_".$curr_lang, $category_info_singl);
                }

                $data['h1'] = $category_info_singl['h1'];


                $data['products'] = array();
                $filter_data2 = array(
                    'filter_category_id' => $data['category_id_child'],
                    'filter_filter' => '',
                    'sort' => $sort,
                    'order' => $order,
                    'start' => ($page - 1) * $limit,
                    'limit' => $limit
                );
                // print_r($filter_data2);

                $results = $this->model_catalog_product->getProducts($filter_data2);

			/** EET Module */
			if (isset($page) && isset($limit)) {
				$ee_position = ($page - 1) * $limit + 1;
			} else {
				$ee_position = 1;
			}
			$data['ee_tracking'] = $this->config->get('module_ee_tracking_status');
			if ($data['ee_tracking'] && $results) {
				$data['ee_impression'] = $this->config->get('module_ee_tracking_impression_status');
				$data['ee_impression_log'] = $this->config->get('module_ee_tracking_log') ? $this->config->get('module_ee_tracking_impression_log') : false;
				$data['ee_click'] = $this->config->get('module_ee_tracking_click_status');
				$data['ee_cart'] = $this->config->get('module_ee_tracking_cart_status');
				$data['ee_ga_callback'] = $this->config->get('module_ee_tracking_advanced_settings') ? $this->config->get('module_ee_tracking_ga_callback') : 0;
				$data['ee_generate_cid'] = $this->config->get('module_ee_tracking_advanced_settings') ? $this->config->get('module_ee_tracking_generate_cid') : 0;
				$ee_class_array = preg_split('/(?=[A-Z])/', get_class($this));
				$data['ee_type'] = strtolower(array_pop($ee_class_array));
				$ee_data = array('type' => $data['ee_type']);
				$ee_data['position'] = $ee_position;
				foreach ($results as $item) {
					$ee_data['products'][] = $item['product_id'];
				}
				$data['ee_impression_data'] = json_encode($ee_data);
			}
			/** EET Module */
            

                foreach ($results as $result) {


                    $filter = array(
                        'product' => $result,
                        'width' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'),
                        'height' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height')
                    );

                    $product = $this->product->getProduct($filter);
                    if(!empty($product)) {
                        $data['products'][] = $this->product->getProduct($filter);
                    }

                }

            }

            $shema = array();
            foreach($data['products'] as $i => $product){
                $shema[] = array(
                    '@type' => 'ListItem',
                    'position' => $i+1,
                    'image' => $product['image'],
                    'name' => $product['name'],
                    'url' => $product['href'],
                );
            }

            $this->document->addSeoMeta('<script type="application/ld+json">{"@context":"https://schema.org","@type":"ItemList","itemListElement":'.json_encode($shema, JSON_UNESCAPED_UNICODE).'}</script>'.PHP_EOL);

            if (isset($this->request->post['cat_id'])) {
                $layout_template = 'gift_ajax';
            }

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            foreach($data['products'] as $key=>$prod){
                $new_price = number_format($prod['price'], 0, '.', ' ') . " UAH";
                $data['products'][$key]['price'] = $new_price;
            }

            $this->response->setOutput($this->load->view('product/' . $layout_template, $data));
        } else {
            $url = '';

            if (isset($this->request->get['path'])) {
                $url .= '&path=' . $this->request->get['path'];
            }

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('text_error'),
                'href' => $this->url->link('product/category', $url)
            );

            $this->document->setTitle($this->language->get('text_error'));

            $data['continue'] = $this->url->link('common/home');

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        }
    }

    public function ajaxCategory()
    {

        $this->load->language('product/category');

        $this->load->model('catalog/category');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');


        if (isset($this->request->post['cat_id'])) {
            $url = '';
            $path = '';

            $parts = explode('_', (string)$this->request->post['cat_id']);
            $category_id = (int)array_pop($parts);
            foreach ($parts as $path_id) {
                if (!$path) {
                    $path = (int)$path_id;
                } else {
                    $path .= '_' . (int)$path_id;
                }

                $category_info = $this->model_catalog_category->getCategory($path_id);

                if ($category_info) {
                    $data['breadcrumbs'][] = array(
                        'text' => $category_info['name'],
                        'href' => $this->url->link('product/category', 'path=' . $path . $url)
                    );
                }
            }
        } else {
            $category_id = 0;
        }
        $category_info_singl = $this->model_catalog_category->getCategory(157);
        $data['h12'] = $category_info_singl['h1'];

        $category_info = $this->model_catalog_category->getCategory($category_id);

        if ($category_info) {
            $this->document->setTitle($category_info['meta_title']);
            $this->document->setDescription($category_info['meta_description']);
            $this->document->setKeywords($category_info['meta_keyword']);

            
      //$data['heading_title'] = $category_info['name'];
      
      $data["heading_title"] = !empty($category_info['seo_h1']) && $this->config->get('mlseo_enabled') ? $category_info['seo_h1'] : $category_info['name'];
      
      $data['seo_h1'] = !empty($category_info['seo_h1']) ? $category_info['seo_h1'] : '';
      $data['seo_h2'] = !empty($category_info['seo_h2']) ? $category_info['seo_h2'] : '';
      $data['seo_h3'] = !empty($category_info['seo_h3']) ? $category_info['seo_h3'] : '';
      
      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');
        
        if ($this->config->get('mlseo_microdata')) {
          $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'category', $data));
        }
      }
      
      if ($this->config->get('mlseo_header_lm_category')) {
        $gkd_header_lm_date = strtotime($category_info['date_modified']);
        
        $this->response->addHeader('Last-Modified: '.date('D, d M Y H:i:s', $gkd_header_lm_date).' GMT');
      }
      

            // Set the last category breadcrumb
            $data['breadcrumbs'][] = array(
                'text' => $category_info['name'],
                'href' => $this->url->link('product/category', 'path=' . $this->request->post['cat_id'])
            );

            if ($category_info['image']) {
                $data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
            } else {
                $data['thumb'] = '';
            }

            $data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');
            $data['h1'] = $category_info['h1'];
            $data['compare'] = $this->url->link('product/compare');

            $url = '';


            $data['sorts'] = array();


            $data['categories'] = array();

            $results = $this->model_catalog_category->getCategories(157);

            foreach ($results as $result) {
                $filter_data = array(
                    'filter_category_id' => $result['category_id'],
                    'filter_sub_category' => true
                );

                $data['categories'][] = array(
                    'name' => $result['name'],
                    'category_id' => $result['category_id'],
                    'href' => $this->url->link('product/category', 'path=' . $this->request->post['cat_id'] . '_' . $result['category_id'] . $url)
                );
            }
            if ($results) {
                $data['h1_child'] = $results[0]['h1'];
                if (isset($this->request->post['cat_id'])) {
                    $data['category_id_child'] = $this->request->post['cat_id'];
                } else {
                    $data['category_id_child'] = $results[0]['category_id'];
                }

                $data['description_child'] = html_entity_decode($results[0]['description'], ENT_QUOTES, 'UTF-8');
            }

            $page = 1;
            $limit = 10000;

            $data['description_child'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');
            $data['h1_child'] = $category_info['h1'];

            $data['products'] = array();
            $filter_data = array(
                'filter_category_id' => $this->request->post['cat_id'],
                'filter_filter' => '',
                'sort' => '',
                'order' => '',
                'start' => ($page - 1) * $limit,
                'limit' => $limit
            );
            $results = $this->model_catalog_product->getProducts($filter_data);

			/** EET Module */
			if (isset($page) && isset($limit)) {
				$ee_position = ($page - 1) * $limit + 1;
			} else {
				$ee_position = 1;
			}
			$data['ee_tracking'] = $this->config->get('module_ee_tracking_status');
			if ($data['ee_tracking'] && $results) {
				$data['ee_impression'] = $this->config->get('module_ee_tracking_impression_status');
				$data['ee_impression_log'] = $this->config->get('module_ee_tracking_log') ? $this->config->get('module_ee_tracking_impression_log') : false;
				$data['ee_click'] = $this->config->get('module_ee_tracking_click_status');
				$data['ee_cart'] = $this->config->get('module_ee_tracking_cart_status');
				$data['ee_ga_callback'] = $this->config->get('module_ee_tracking_advanced_settings') ? $this->config->get('module_ee_tracking_ga_callback') : 0;
				$data['ee_generate_cid'] = $this->config->get('module_ee_tracking_advanced_settings') ? $this->config->get('module_ee_tracking_generate_cid') : 0;
				$ee_class_array = preg_split('/(?=[A-Z])/', get_class($this));
				$data['ee_type'] = strtolower(array_pop($ee_class_array));
				$ee_data = array('type' => $data['ee_type']);
				$ee_data['position'] = $ee_position;
				foreach ($results as $item) {
					$ee_data['products'][] = $item['product_id'];
				}
				$data['ee_impression_data'] = json_encode($ee_data);
			}
			/** EET Module */
            

            foreach ($results as $result) {

                $filter = array(
                    'product' => $result,
                    'width' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'),
                    'height' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height')
                );

                $product = $this->product->getProduct($filter);
                if(!empty($product)) {
                    $data['products'][] = $this->product->getProduct($filter);
                }

            }
            if ($this->request->post['cat_id']==158){
                $banner_id =12;
            }elseif($this->request->post['cat_id']==159){
                $banner_id =13;
            }else{
                $banner_id = 0;
            }
            $this->load->model('design/banner');
            $results = $this->model_design_banner->getBanner($banner_id);
            if($results){
                foreach ($results as $result) {
                    if (is_file(DIR_IMAGE . $result['image'])) {
                        $data['gift_banners'][] = array(
                            'title' => $result['title'],
                            'description' => html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'),
                            'link'  => $result['link'],
                            'image' =>  HTTPS_SERVER . 'image/' . $result['image'],
                            'title_button' =>  $result['title_button']
                        );
                    }
                }
            }
            $this->response->setOutput($this->load->view('product/gift_ajax', $data));

        }
    }

    private function parseBrandsFilterMeta($field_value, $args){
        $replace  = array();
        if (strpos($field_value, '[category]') !== false)
            $replace['[category]'] = $args['category_name'];
        if (strpos($field_value, '[brand]') !== false)
            $replace['[brand]'] = $args['brand_name'];
        if (strpos($field_value, '[min_price]') !== false)
            $replace['[min_price]'] =  $this->currency->format($args['min_price'], $this->config->get('config_currency'));
        if (strpos($field_value, '[max_price]') !== false)
            $replace['[max_price]'] =   $this->currency->format($args['max_price'], $this->config->get('config_currency'));
        if (strpos($field_value, '[products_count]') !== false)
            $replace['[products_count]'] = $args['products_count'];

        return str_replace(array_keys($replace), array_values($replace), $field_value);
    }

}
