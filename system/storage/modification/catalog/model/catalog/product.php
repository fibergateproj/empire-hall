<?php
class ModelCatalogProduct extends Model {
	public function updateViewed($product_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "product SET viewed = (viewed + 1) WHERE product_id = '" . (int)$product_id . "'");
	}

	
                private static $getCacheInstance = null;
                public function getProduct($product_id) {
                /**
                 * opencart cache code start here
                 */
                  $cache_product_status = false;
                  if($this->config->get('module_oc_cache_status') && (isset($this->config->get('module_oc_cache_product')['status']) && $this->config->get('module_oc_cache_product')['status'])){
                      $cache_product_status = true;
                      $lang_store_id = '.'.(int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id');

                    if (self::$getCacheInstance == null) {
                      self::$getCacheInstance = $this->webkulcache->get_InstanceCache('files');
                    }
                    $CachedString     = self::$getCacheInstance->getItem('product');
                    $product_container = $CachedString->get('product'.$lang_store_id);
                      if(isset($product_container['product'.$lang_store_id][$product_id])){
                        return $product_container['product'.$lang_store_id][$product_id];
                      }
                  }
                /**
                * opencart cache code end here
                */
              
		$query = $this->db->query("SELECT DISTINCT *, pd.name AS name, p.image, md.name AS manufacturer, m.hide_price as hide_price,  pd.description AS description, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special, (SELECT points FROM " . DB_PREFIX . "product_reward pr WHERE pr.product_id = p.product_id AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "') AS reward, (SELECT ss.name FROM " . DB_PREFIX . "stock_status ss WHERE ss.stock_status_id = p.stock_status_id AND ss.language_id = '" . (int)$this->config->get('config_language_id') . "') AS stock_status, (SELECT wcd.unit FROM " . DB_PREFIX . "weight_class_description wcd WHERE p.weight_class_id = wcd.weight_class_id AND wcd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS weight_class, (SELECT lcd.unit FROM " . DB_PREFIX . "length_class_description lcd WHERE p.length_class_id = lcd.length_class_id AND lcd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS length_class, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review r2 WHERE r2.product_id = p.product_id AND r2.status = '1' GROUP BY r2.product_id) AS reviews, p.sort_order FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) LEFT JOIN " . DB_PREFIX . "manufacturer m ON (p.manufacturer_id = m.manufacturer_id)  LEFT JOIN " . DB_PREFIX . "manufacturer_description md ON (md.manufacturer_id = m.manufacturer_id) WHERE p.product_id = '" . (int)$product_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");


    if ($this->config->get('mlseo_enabled') && $query->num_rows && $this->config->get('mlseo_multistore') && $this->config->get('config_store_id')) {
      $this->load->model('tool/seo_package');
      $seoDescription = $this->model_tool_seo_package->getSeoDescription('product', $query->row['product_id']);
      
      if (!empty($seoDescription['meta_title'])) {
        $query->row['meta_title'] = $seoDescription['meta_title'];
      }
      
      if (!empty($seoDescription['meta_description'])) {
        $query->row['meta_description'] = $seoDescription['meta_description'];
      }
      
      if (!empty($seoDescription['meta_keyword'])) {
        $query->row['meta_keyword'] = $seoDescription['meta_keyword'];
      }
      
      if (!empty($seoDescription['image_alt'])) {
        $query->row['image_alt'] = $seoDescription['image_alt'];
      }
      
      if (!empty($seoDescription['image_title'])) {
        $query->row['image_title'] = $seoDescription['image_title'];
      }
      
      if (!empty($seoDescription['name'])) {
        $query->row['name'] = $seoDescription['name'];
      }
      
      if (isset($seoDescription['description']) && trim(strip_tags($seoDescription['description']))) {
        $query->row['description'] = $seoDescription['description'];
      }
      
      if (!empty($seoDescription['seo_h1'])) {
        $query->row['seo_h1'] = $seoDescription['seo_h1'];
      }
      
      if (!empty($seoDescription['seo_h2'])) {
        $query->row['seo_h2'] = $seoDescription['seo_h2'];
      }
      
      if (!empty($seoDescription['seo_h3'])) {
        $query->row['seo_h3'] = $seoDescription['seo_h3'];
      }
    }
      
		if ($query->num_rows) {


			
                /**
                 * opencart cache code start here
                 */
                 $product_array = array(
              
				'product_id'       => $query->row['product_id'],

      'meta_title' => isset($query->row['meta_title']) ? $query->row['meta_title'] : '',
      'seo_h1' => isset($query->row['seo_h1']) ? $query->row['seo_h1'] : '',
      'seo_h2' => isset($query->row['seo_h2']) ? $query->row['seo_h2'] : '',
      'seo_h3' => isset($query->row['seo_h3']) ? $query->row['seo_h3'] : '',
      'image_title' => isset($query->row['image_title']) ? $query->row['image_title'] : '',
      'image_alt' => isset($query->row['image_alt']) ? $query->row['image_alt'] : '',
      'meta_robots' => isset($query->row['meta_robots']) ? $query->row['meta_robots'] : '',
				'name'             => $query->row['name'],
				'cat'             => $query->row,
				'description'      => $query->row['description'],
				'meta_title'       => $query->row['meta_title'],
				'meta_description' => $query->row['meta_description'],
				'meta_keyword'     => $query->row['meta_keyword'],
				'tag'              => $query->row['tag'],
				'model'            => $query->row['model'],
				'sku'              => $query->row['sku'],
				'upc'              => $query->row['upc'],
				'ean'              => $query->row['ean'],
				'jan'              => $query->row['jan'],
				'isbn'             => $query->row['isbn'],
				'mpn'              => $query->row['mpn'],
				'location'         => $query->row['location'],
				'quantity'         => $query->row['quantity'],
				'stock_status_id'  => $query->row['stock_status_id'],
				'stock_status'     => $query->row['stock_status'],
				'image'            => $query->row['image'],
				'video'            => $query->row['video'],
				'manufacturer_id'  => $query->row['manufacturer_id'],
				'manufacturer'     => $query->row['manufacturer'],
				'hide_price'     => $query->row['hide_price'],
				'price'            => ($query->row['discount'] ? $query->row['discount'] : $query->row['price']),
				'special'          => $query->row['special'],
				'reward'           => $query->row['reward'],
				'points'           => $query->row['points'],
				'tax_class_id'     => $query->row['tax_class_id'],
				'date_available'   => $query->row['date_available'],
				'weight'           => $query->row['weight'],
				'weight_class_id'  => $query->row['weight_class_id'],
				'length'           => $query->row['length'],
				'width'            => $query->row['width'],
				'height'           => $query->row['height'],
				'length_class_id'  => $query->row['length_class_id'],
				'subtract'         => $query->row['subtract'],
				'rating'           => round($query->row['rating']),
				'reviews'          => $query->row['reviews'] ? $query->row['reviews'] : 0,
				'minimum'          => $query->row['minimum'],
				'sort_order'       => $query->row['sort_order'],
				'status'           => $query->row['status'],
				'date_added'       => $query->row['date_added'],
				'date_modified'    => $query->row['date_modified'],
				'viewed'           => $query->row['viewed']
			);

                /**
                 * opencart cache code start here
                 */
                 if($cache_product_status && !isset($product_container['product'.$lang_store_id][$product_id])){
                    $product_container['product'.$lang_store_id][$product_id] = $product_array;
                    if($this->config->get('module_oc_cache_product')['expire'])
                      $CachedString->set($product_container)->expiresAfter($this->config->get('module_oc_cache_product')['expire']);
                    else
                      $CachedString->set($product_container);

                    self::$getCacheInstance->save($CachedString);
                    return $product_container['product'.$lang_store_id][$product_id];
                  }else{
                    return $product_array;
                  }
                /**
                * opencart cache code end here
                */
              
		} else {
			return false;
		}
	}

	public function getProducts($data = array()) {
		$sql = "SELECT md.name,cid.name, p.product_id,(SELECT cc.sort_order FROM " . DB_PREFIX . "product_to_category p2c LEFT JOIN " . DB_PREFIX . "category cc ON (cc.category_id = p2c.category_id) WHERE cc.parent_id=20  LIMIT 1  ) as sorti, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special";
		//$sql = "SELECT p.product_id, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {

				$sql .= " FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (cp.category_id = p2c.category_id)";
			} else {
              //  exit();
				$sql .= " FROM " . DB_PREFIX . "product_to_category p2c  LEFT JOIN " . DB_PREFIX . "category cc ON (p2c.category_id = cc.category_id)";

			}

			if (!empty($data['filter_filter'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product_filter pf ON (p2c.product_id = pf.product_id) LEFT JOIN " . DB_PREFIX . "product p ON (pf.product_id = p.product_id)";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product p ON (p2c.product_id = p.product_id)";
			}
		} else {
			$sql .= " FROM " . DB_PREFIX . "product p";
		}

            $sql .= " LEFT JOIN " . DB_PREFIX . "manufacturer_description md ON (p.manufacturer_id = md.manufacturer_id)";
            $sql .= " LEFT JOIN " . DB_PREFIX . "collection_item_products cip ON (p.product_id = cip.product_id) LEFT JOIN " . DB_PREFIX . "collection_item_description cid ON (cid.collection_item_id = cip.collection_item_id)";



		// OCFilter start
		if (!empty($data['filter_ocfilter'])) {
    	$this->load->model('extension/module/ocfilter');

      $ocfilter_product_sql = $this->model_extension_module_ocfilter->getSearchSQL($data['filter_ocfilter']);
		} else {
      $ocfilter_product_sql = false;
    }

    if ($ocfilter_product_sql && $ocfilter_product_sql->join) {
    	$sql .= $ocfilter_product_sql->join;
    }
    // OCFilter end
      
		$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_category_id'])) {
         //
			if (!empty($data['filter_sub_category'])) {

				$sql .= " AND cp.path_id = '" . (int)$data['filter_category_id'] . "'";
			} else {

				$sql .= " AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";
			}

			if (!empty($data['filter_filter'])) {
				$implode = array();

                if(!is_array($data['filter_filter'])){
                    $filters = explode(',', $data['filter_filter']);
                }else{
                    $filters[0] = $data['filter_filter'];
                }

				foreach ($filters as $filter_id) {
					$implode[] = (int)$filter_id;
				}

				$sql .= " AND pf.filter_id IN (" . implode(',', $implode) . ")";
			}
		}

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			if (!empty($data['filter_name'])) {
				$sql .= " OR LCASE(p.model) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.sku) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.upc) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.ean) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.jan) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.isbn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.mpn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(md.name) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "%'";
				$sql .= " OR LCASE(cid.name) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "%'";
			}

			$sql .= ")";
		}


    // OCFilter start
    if (!empty($ocfilter_product_sql) && $ocfilter_product_sql->where) {
    	$sql .= $ocfilter_product_sql->where;
    }
    // OCFilter end
      
		if (!empty($data['filter_manufacturer_id'])) {
			$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = array(
		//	'cc.sort_order',
			'pd.name',
			'p.model',
			'p.quantity',
			'p.price',
			'rating',
			'p.sort_order',
			'p.date_added',
            'instock'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} elseif ($data['sort'] == 'p.price') {
				$sql .= " ORDER BY (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END)";
			} elseif($data['sort'] == 'instock'){
                $sql .= " ORDER BY p.quantity<1";
            } else {
				$sql .= " ORDER BY " . $data['sort'];
			}
		} else {
            	$sql .= " ORDER BY p.sort_order";
			//$sql .= " ORDER BY cc.sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
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
//echo '<pre >';
//			print_r($sql);
//echo '</pre>';
//exit();
		$product_data = array();

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
		}

		return $product_data;
	}

	public function getProductCollections($collection_id, $data = array()) {
	    $sql = "SELECT cip.product_id FROM " . DB_PREFIX . "collection_item_products cip 
	    LEFT JOIN " . DB_PREFIX . "product p ON (cip.product_id = p.product_id) 
	    LEFT JOIN " . DB_PREFIX . "product_description pd ON (pd.product_id = p.product_id) 
	    WHERE p.status = '1'
	    AND cip.collection_item_id = '" . (int)$collection_id . "' 
	    AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        $sql .= " GROUP BY cip.product_id";

        $sort_data = array(
            'pd.name',
            'p.model',
            'p.quantity',
            'p.price',
            'rating',
            'p.sort_order',
            'p.date_added'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
                $sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
            } elseif ($data['sort'] == 'p.price') {
                $sql .= " ORDER BY p.price";
            } else {
                $sql .= " ORDER BY " . $data['sort'];
            }
        } else {
            $sql .= " ORDER BY p.sort_order";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC, LCASE(pd.name) DESC";
        } else {
            $sql .= " ASC, LCASE(pd.name) ASC";
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

        $product_data = array();

        $query = $this->db->query($sql);

        foreach ($query->rows as $result) {
            $product_data[$result['product_id']] = $this->getProduct($result['product_id']);
        }

        return $product_data;
    }

    public function getProductCollectionId($product_id){
        // ???????? ?????????? ?????????????????????? ???? ?????????? ??????????????????
        //  $query = $this->db->query("SELECT *  FROM " . DB_PREFIX . "collection_item_products cip LEFT JOIN  " . DB_PREFIX . "collection_item_description cid on (cip.`collection_item_id` = cid.`collection_item_id`) WHERE cip.`product_id`='".$product_id."'");

        $query = $this->db->query("SELECT cip.`collection_item_id`, cid.`name` as collection_name, cii.`collection_id`,cm.`manufacturer_id` FROM " . DB_PREFIX . "collection_item_products cip LEFT JOIN  " . DB_PREFIX . "collection_item_description cid on (cip.`collection_item_id` = cid.`collection_item_id`) LEFT JOIN  " . DB_PREFIX . "collection_item_to_category cii on (cid.`collection_item_id` = cii.`collection_item_id`)LEFT JOIN  " . DB_PREFIX . "collection cm on (cii.`collection_id` = cm.`collection_id`) WHERE cip.`product_id`='".$product_id."'");
        return $query->row;
    }


	public function getTotalProductCollections($collection_id) {
        $query = $this->db->query("SELECT COUNT(DISTINCT cip.product_id) AS total FROM " . DB_PREFIX . "collection_item_products cip 
	    LEFT JOIN " . DB_PREFIX . "product p ON (cip.product_id = p.product_id) 
	    LEFT JOIN " . DB_PREFIX . "product_description pd ON (pd.product_id = p.product_id) 
	    WHERE cip.collection_item_id = '" . (int)$collection_id . "' 
	    AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

        if (isset($query->row['total'])) {
            return $query->row['total'];
        } else {
            return 0;
        }
    }

	public function getProductSpecials($data = array()) {
		$sql = "SELECT DISTINCT ps.product_id, (SELECT AVG(rating) FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = ps.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating FROM " . DB_PREFIX . "product_special ps LEFT JOIN " . DB_PREFIX . "product p ON (ps.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) GROUP BY ps.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'ps.price',
			'rating',
			'p.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} else {
				$sql .= " ORDER BY " . $data['sort'];
			}
		} else {
			$sql .= " ORDER BY p.sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
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

		$product_data = array();

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
		}

		return $product_data;
	}

	public function getPromoProduct($product_id)
	{
		$query = $this->db->query("SELECT pp.product_id, pp.promo_tags_id, pt.class, ptd.promo_text, pp.date_start, pp.date_end  FROM " . DB_PREFIX . "product_promo pp LEFT JOIN oc_promo_tags pt ON(pt.promo_tags_id=pp.promo_tags_id) LEFT JOIN " . DB_PREFIX . "promo_tags_description ptd ON(ptd.promo_tags_id = pp.promo_tags_id) WHERE pp.product_id = '".(int)$product_id."' AND ptd.language_id = '".$this->config->get('config_language_id')."' ORDER BY pt.sort_order ASC");

		if($query->num_rows) {
			return $query->rows;
		} else {
			return false;
		}
	}

	public function getProductSpecialData($product_id) {
		if ($this->customer->isLogged()) {
			$customer_group_id = $this->customer->getGroupId();
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		$query = $this->db->query("SELECT `price`, `date_end` FROM " . DB_PREFIX . "product_special WHERE product_id = '" . (int)$product_id . "' AND customer_group_id = '" . (int)$customer_group_id . "' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY priority ASC, price ASC LIMIT 1");

		if ($query->num_rows) {
			return $query->row;
		} else {
			return FALSE;
		}
	}

	public function getLatestProducts($limit) {
		$product_data = $this->cache->get('product.latest.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);

		if (!$product_data) {
			$query = $this->db->query("SELECT p.product_id FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.date_added DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}

			$this->cache->set('product.latest.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}

	public function getPopularProducts($limit) {
		$product_data = $this->cache->get('product.popular.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);

		if (!$product_data) {
			$query = $this->db->query("SELECT p.product_id FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.viewed DESC, p.date_added DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}

			$this->cache->set('product.popular.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}

	public function getBestSellerProducts($limit) {
		$product_data = $this->cache->get('product.bestseller.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);

		if (!$product_data) {
			$product_data = array();

			$query = $this->db->query("SELECT op.product_id, SUM(op.quantity) AS total FROM " . DB_PREFIX . "order_product op LEFT JOIN `" . DB_PREFIX . "order` o ON (op.order_id = o.order_id) LEFT JOIN `" . DB_PREFIX . "product` p ON (op.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE o.order_status_id > '0' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' GROUP BY op.product_id ORDER BY total DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}

			$this->cache->set('product.bestseller.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}

	public function getProductAttributes($product_id) {
		$product_attribute_group_data = array();

		$product_attribute_group_query = $this->db->query("SELECT ag.attribute_group_id, agd.name FROM " . DB_PREFIX . "product_attribute pa LEFT JOIN " . DB_PREFIX . "attribute a ON (pa.attribute_id = a.attribute_id) LEFT JOIN " . DB_PREFIX . "attribute_group ag ON (a.attribute_group_id = ag.attribute_group_id) LEFT JOIN " . DB_PREFIX . "attribute_group_description agd ON (ag.attribute_group_id = agd.attribute_group_id) WHERE pa.product_id = '" . (int)$product_id . "' AND agd.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY ag.attribute_group_id ORDER BY ag.sort_order, agd.name");

		foreach ($product_attribute_group_query->rows as $product_attribute_group) {
			$product_attribute_data = array();

			$product_attribute_query = $this->db->query("SELECT a.attribute_id, ad.name, pa.text FROM " . DB_PREFIX . "product_attribute pa LEFT JOIN " . DB_PREFIX . "attribute a ON (pa.attribute_id = a.attribute_id) LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id) WHERE pa.product_id = '" . (int)$product_id . "' AND a.attribute_group_id = '" . (int)$product_attribute_group['attribute_group_id'] . "' AND ad.language_id = '" . (int)$this->config->get('config_language_id') . "' AND pa.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY a.sort_order, ad.name");

			foreach ($product_attribute_query->rows as $product_attribute) {
				$product_attribute_data[] = array(
					'attribute_id' => $product_attribute['attribute_id'],
					'name'         => $product_attribute['name'],
					'text'         => $product_attribute['text']
				);
			}

			$product_attribute_group_data[] = array(
				'attribute_group_id' => $product_attribute_group['attribute_group_id'],
				'name'               => $product_attribute_group['name'],
				'attribute'          => $product_attribute_data
			);
		}

		return $product_attribute_group_data;
	}

	public function getProductOptions($product_id) {

                /*
                * opencart cache code start here
                */
                $cache_product_option_status = false;
                if($this->config->get('module_oc_cache_status') && (isset($this->config->get('module_oc_cache_product')['status']) && $this->config->get('module_oc_cache_product')['status'])){
                      $lang_store_id = '.'.(int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id');
                    $cache_product_option_status = true;
                    if (self::$getCacheInstance == null) {
                        self::$getCacheInstance = $this->webkulcache->get_InstanceCache('files');
                    }
                    $CachedString     = self::$getCacheInstance->getItem('product_options');
                    $product_container= $CachedString->get('product_options'.$lang_store_id);
                    if(isset($product_container['product_options'.$lang_store_id][$product_id])){
                      return $product_container['product_options'.$lang_store_id][$product_id];
                    }
                }
                /*
                * opencart cache code end here
                */
              
		$product_option_data = array();

		$product_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option po LEFT JOIN `" . DB_PREFIX . "option` o ON (po.option_id = o.option_id) LEFT JOIN " . DB_PREFIX . "option_description od ON (o.option_id = od.option_id) WHERE po.product_id = '" . (int)$product_id . "' AND od.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY o.sort_order");

		foreach ($product_option_query->rows as $product_option) {
			$product_option_value_data = array();

			$product_option_value_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value pov LEFT JOIN " . DB_PREFIX . "option_value ov ON (pov.option_value_id = ov.option_value_id) LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (ov.option_value_id = ovd.option_value_id) WHERE pov.product_id = '" . (int)$product_id . "' AND pov.product_option_id = '" . (int)$product_option['product_option_id'] . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY ov.sort_order");

			foreach ($product_option_value_query->rows as $product_option_value) {
				$product_option_value_data[] = array(
					'product_option_value_id' => $product_option_value['product_option_value_id'],
					'option_value_id'         => $product_option_value['option_value_id'],
					'name'                    => $product_option_value['name'],
					'image'                   => $product_option_value['image'],
					'quantity'                => $product_option_value['quantity'],
					'subtract'                => $product_option_value['subtract'],
					'price'                   => $product_option_value['price'],
					'price_prefix'            => $product_option_value['price_prefix'],
					'weight'                  => $product_option_value['weight'],
					'weight_prefix'           => $product_option_value['weight_prefix']
				);
			}

			$product_option_data[] = array(
				'product_option_id'    => $product_option['product_option_id'],
				'product_option_value' => $product_option_value_data,
				'option_id'            => $product_option['option_id'],
				'name'                 => $product_option['name'],
				'type'                 => $product_option['type'],
				'value'                => $product_option['value'],
				'required'             => $product_option['required']
			);
		}


                /**
                 * opencart cache code start here
                 */
                 if($cache_product_option_status){
                    $product_container['product_options'.$lang_store_id][$product_id] = $product_option_data;
                      if($this->config->get('module_oc_cache_product')['expire'])
                          $CachedString->set($product_container)->expiresAfter($this->config->get('module_oc_cache_product')['expire']);
                      else
                          $CachedString->set($product_container);

                      self::$getCacheInstance->save($CachedString);
                  }
                /**
                * opencart cache code end here
                */
              
		return $product_option_data;
	}

	public function getProductDiscounts($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int)$product_id . "' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND quantity > 1 AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY quantity ASC, priority ASC, price ASC");

		return $query->rows;
	}

	public function getProductImages($product_id) {
		
                /**
                * opencart cache code start here
                */
                  if($this->config->get('module_oc_cache_status') && (isset($this->config->get('module_oc_cache_product')['status']) && $this->config->get('module_oc_cache_product')['status'])){
                      $lang_store_id = '.'.(int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id');
                    if (self::$getCacheInstance == null) {
                        self::$getCacheInstance = $this->webkulcache->get_InstanceCache('files');
                    }
                    $CachedString     = self::$getCacheInstance->getItem('product_images');
                    $product_container= $CachedString->get('product_images'.$lang_store_id);
                    if(!isset($product_container['product_images'.$lang_store_id][$product_id])){
                      $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "' ORDER BY sort_order ASC");
                      $product_container['product_images'.$lang_store_id][$product_id] = $query->rows;
                        if($this->config->get('module_oc_cache_product')['expire'])
                          $CachedString->set($product_container)->expiresAfter($this->config->get('module_oc_cache_product')['expire']);
                        else
                          $CachedString->set($product_container);

                        self::$getCacheInstance->save($CachedString);
                    }else{
                      return $product_container['product_images'.$lang_store_id][$product_id];
                    }
                }else{
                  $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "' ORDER BY sort_order ASC");
                }
                /**
                * opencart cache code end here
                */
              

		return $query->rows;
	}

	public function getProductRelated($product_id) {
		$product_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_related pr 
		LEFT JOIN " . DB_PREFIX . "product p ON (pr.related_id = p.product_id) 
		WHERE pr.product_id = '" . (int)$product_id . "' 
		AND p.status = '1' 
		AND p.date_available <= NOW()");

		foreach ($query->rows as $result) {
			$product_data[$result['related_id']] = $this->getProduct($result['related_id']);
		}

		return $product_data;
	}

    public function getProductInspiration($inspiration_id) {
        $product_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "inspiration_related pr LEFT JOIN " . DB_PREFIX . "product p ON (pr.product_id = p.product_id) WHERE pr.inspiration_id = '" . (int)$inspiration_id . "'");

        foreach ($query->rows as $result) {
            $product_data[$result['product_id']] = $this->getProduct($result['product_id']);
        }

        return $product_data;
    }

    public function getProductRelatedCategory($product_id, $category_id) {
        $product_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category ptc 
		LEFT JOIN " . DB_PREFIX . "product p 
		ON (ptc.product_id = p.product_id) 
		WHERE ptc.category_id = '" . (int)$category_id . "' 
		AND p.status = '1' 
		AND p.date_available <= NOW() 
		AND p.product_id <> '" . (int)$product_id . "' LIMIT 10 ");

        foreach ($query->rows as $result) {
            $product_data[$result['product_id']] = $this->getProduct($result['product_id']);
        }

        return $product_data;
    }

	public function getProductLayoutId($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_layout WHERE product_id = '" . (int)$product_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getCategories($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

		return $query->rows;
	}

	public function getTotalProducts($data = array()) {
		$sql = "SELECT COUNT(DISTINCT p.product_id) AS total";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (cp.category_id = p2c.category_id)";
			} else {
				$sql .= " FROM " . DB_PREFIX . "product_to_category p2c";
			}

			if (!empty($data['filter_filter'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product_filter pf ON (p2c.product_id = pf.product_id) LEFT JOIN " . DB_PREFIX . "product p ON (pf.product_id = p.product_id)";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product p ON (p2c.product_id = p.product_id)";
			}
		} else {
			$sql .= " FROM " . DB_PREFIX . "product p";
		}

            $sql .= " LEFT JOIN " . DB_PREFIX . "manufacturer_description md ON (p.manufacturer_id = md.manufacturer_id)";
            $sql .= " LEFT JOIN " . DB_PREFIX . "collection_item_products cip ON (p.product_id = cip.product_id) LEFT JOIN " . DB_PREFIX . "collection_item_description cid ON (cid.collection_item_id = cip.collection_item_id)";



		// OCFilter start
		if (!empty($data['filter_ocfilter'])) {
    	$this->load->model('extension/module/ocfilter');

      $ocfilter_product_sql = $this->model_extension_module_ocfilter->getSearchSQL($data['filter_ocfilter']);
		} else {
      $ocfilter_product_sql = false;
    }

    if ($ocfilter_product_sql && $ocfilter_product_sql->join) {
    	$sql .= $ocfilter_product_sql->join;
    }
    // OCFilter end
      
		$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " AND cp.path_id = '" . (int)$data['filter_category_id'] . "'";
			} else {
				$sql .= " AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";
			}

			if (!empty($data['filter_filter'])) {
				$implode = array();

				$filters = explode(',', $data['filter_filter']);

				foreach ($filters as $filter_id) {
					$implode[] = (int)$filter_id;
				}

				$sql .= " AND pf.filter_id IN (" . implode(',', $implode) . ")";
			}
		}

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			if (!empty($data['filter_name'])) {
				$sql .= " OR LCASE(p.model) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.sku) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.upc) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.ean) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.jan) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.isbn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.mpn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
                $sql .= " OR LCASE(md.name) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "%'";
                $sql .= " OR LCASE(cid.name) LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "%'";
            }

			$sql .= ")";
		}


    // OCFilter start
    if (!empty($ocfilter_product_sql) && $ocfilter_product_sql->where) {
    	$sql .= $ocfilter_product_sql->where;
    }
    // OCFilter end
      
		if (!empty($data['filter_manufacturer_id'])) {
			$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}


	public function getProfile($product_id, $recurring_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "recurring r JOIN " . DB_PREFIX . "product_recurring pr ON (pr.recurring_id = r.recurring_id AND pr.product_id = '" . (int)$product_id . "') WHERE pr.recurring_id = '" . (int)$recurring_id . "' AND status = '1' AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'");

		return $query->row;
	}

	public function getProfiles($product_id) {
		$query = $this->db->query("SELECT rd.* FROM " . DB_PREFIX . "product_recurring pr JOIN " . DB_PREFIX . "recurring_description rd ON (rd.language_id = " . (int)$this->config->get('config_language_id') . " AND rd.recurring_id = pr.recurring_id) JOIN " . DB_PREFIX . "recurring r ON r.recurring_id = rd.recurring_id WHERE pr.product_id = " . (int)$product_id . " AND status = '1' AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getTotalProductSpecials() {
		$query = $this->db->query("SELECT COUNT(DISTINCT ps.product_id) AS total FROM " . DB_PREFIX . "product_special ps LEFT JOIN " . DB_PREFIX . "product p ON (ps.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW()))");

		if (isset($query->row['total'])) {
			return $query->row['total'];
		} else {
			return 0;
		}
	}

	public function getMainCategoryByProduct($product_id){
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category p2c LEFT JOIN " . DB_PREFIX . "category_description cd ON (cd.category_id = p2c.category_id) LEFT JOIN " . DB_PREFIX . "category ct ON (ct.category_id = cd.category_id) WHERE p2c.product_id = '". (int)$product_id."' AND p2c.main_category = '1' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		if($query->num_rows){
			return $query->row;
		} else {
			return false;
		}

	}

	// ???????????? ?????? ?????????????????? ???????????????????? ?????? ???????????? (?????????? ???????? ?????????????????? ???????????????????? ?? ???????????? ????????????)
	public function getProductPromo($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_promo WHERE product_id = '" . (int)$product_id . "' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY promo_tags_id ASC");

		return $query->rows;
	}

	public function getPromo($promo_tags_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "promo_tags pt LEFT JOIN `" . DB_PREFIX . "promo_tags_description` ptd ON (pt.promo_tags_id = ptd.promo_tags_id) WHERE pt.promo_tags_id = '" . (int)$promo_tags_id . "' AND ptd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getPromoTags()
	{
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "promo_tags pt LEFT JOIN `" . DB_PREFIX . "promo_tags_description` ptd ON (pt.promo_tags_id = ptd.promo_tags_id) WHERE ptd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY  pt.`type`, pt.sort_order");

		return $query->rows;
	}
	// --- end Promo ---
}
