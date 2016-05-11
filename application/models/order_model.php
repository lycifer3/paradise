<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Order_Model
 */
Class Order_Model extends CI_Model {

    const PRODUCT_TYPE = 1;
    const SERVICE_TYPE = 2;

    const CLIENT_STATUS   = 1;
    const EMPLOYEE_STATUS = 1;

    /**
     * Get visit
     * @param $lastId
     * @return mixed
     */
    public function getVisit($lastId) {
        $this->db->from('paradise_visits');
        $this->db->join('paradise_users', 'paradise_users.user_id = paradise_visits.user_id', 'left');
        $this->db->where('paradise_visits.visit_id', $lastId);
        $this->db->where('paradise_users.user_status', self::CLIENT_STATUS);
        $query = $this->db->get();

        return $query->row();
    }

    /**
     * Get product
     * @param $lastId
     * @return mixed
     */
    public function getProducts($lastId) {
        $this->db->from('paradise_shopping');
        $this->db->join('paradise_products', 'paradise_products.product_id = paradise_shopping.item_id', 'left');
        $this->db->where('paradise_shopping.visit_id', $lastId);
        $this->db->where('paradise_shopping.shopping_type', self::PRODUCT_TYPE);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * Get services
     * @param $lastId
     * @return mixed
     */
    public function getServices($lastId) {
        $this->db->from('paradise_shopping');
        $this->db->join('paradise_services', 'paradise_services.service_id = paradise_shopping.item_id', 'left');
        $this->db->where('paradise_shopping.visit_id', $lastId);
        $this->db->where('paradise_shopping.shopping_type', self::SERVICE_TYPE);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * Get masters
     * @param $lastId
     * @return mixed
     */
    public function getMasters($lastId) {
        $this->db->from('paradise_masters');
        $this->db->join('paradise_employee', 'paradise_employee.employee_id = paradise_masters.employee_id', 'left');
        $this->db->where('paradise_masters.visit_id', $lastId);
        $this->db->where('paradise_employee.employee_status', self::EMPLOYEE_STATUS);
        $query = $this->db->get();

        return $query->result();
    }

    public function updateCounts($data, $visitId) {
        foreach ($data['count'] as $key => $value) {
            $this->db->set('product_count', $value);
            $this->db->where('visit_id', $visitId);
            $this->db->where('item_id', $key);
            $this->db->update('paradise_shopping');
        }
    }
}