<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Product_Model
 */
Class Product_Model extends CI_Model {
    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    /**
     * Add products
     * @param $data
     */
    public function save($data = array(), $productId = null) {
        $data['product_date'] = date('Y-m-d H:i:s', time());
        if(empty($productId)) {
        $this->db->insert('paradise_products', $data);
        } else {
            $this->db->where('product_id', $productId);
            $this->db->update('paradise_products', $data);
        }
    }

    /**
     * get products for pagination
     * @param $from
     * @return mixed
     */
    public function getProducts($from) {
        $this->load->config('pagination');
        $this->db->where('product_status', self::STATUS_ACTIVE);
        $this->db->limit($this->pagination->per_page, $from);
        $query = $this->db->get('paradise_products');

        return $query->result();
    }

    /**
     * get count products
     * @return mixed
     */
    public function getCountProducts() {
        $query = $this->db->get('paradise_products');

        return $query->num_rows();
    }

    /**
     * get product
     * @param $productId
     * @return mixed
     */
    public function getProduct($productId) {
        $this->db->where('product_id', $productId);
        $query = $this->db->get('paradise_products');

        return $query->row();
    }

    /**
     * delete product
     * @param $productId
     */
    public function deleteProduct($productId) {
        $this->db->set('product_status', self::STATUS_INACTIVE);
        $this->db->where('product_id', $productId);
        $this->db->update('paradise_products');
    }
}