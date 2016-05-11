<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Visit_Model
 */
Class Visit_Model extends CI_Model {
    const STATUS_ACTIVE = 1;
    const TYPE_PRODUCT  = 1;
    const TYPE_SERVICE  = 2;

    /**
     * add visit
     * @param array $data
     */
    public function addVisit($data = array()) {
        $this->db->set('visit_date',     date('Y-m-d', strtotime($data['visit_date'])));
        $this->db->set('visit_discount', $data['visit_discount']);
        $this->db->set('user_id',        $data['visit_client']);
        $this->db->insert('paradise_visits');

        $lastId = $this->db->insert_id();

        foreach($data['visit_product'] as $productId) {
            $this->db->set('shopping_type', self::TYPE_PRODUCT);
            $this->db->set('visit_id',      $lastId);
            $this->db->set('item_id', $productId);
            $this->db->insert('paradise_shopping');
        }

        foreach($data['visit_service'] as $serviceId) {
            $this->db->set('shopping_type', self::TYPE_SERVICE);
            $this->db->set('visit_id', $lastId);
            $this->db->set('item_id', $serviceId);
            $this->db->insert('paradise_shopping');
        }

        foreach($data['visit_master'] as $masterId) {
            $this->db->set('visit_id', $lastId);
            $this->db->set('employee_id', $masterId);
            $this->db->insert('paradise_masters');
        }

        return $lastId;
    }

    /**
     * get users
     * @return mixed
     */
    public function getUsers() {
        $this->db->where('user_status', self::STATUS_ACTIVE);
        $query = $this->db->get('paradise_users');

        return $query->result();
    }

    /**
     * get products
     * @return mixed
     */
    public function getProducts() {
        $this->db->where('product_status', self::STATUS_ACTIVE);
        $query = $this->db->get('paradise_products');

        return $query->result();
    }

    /**
     * get services
     * @return mixed
     */
    public function getServices() {
        $this->db->where('service_status', self::STATUS_ACTIVE);
        $query = $this->db->get('paradise_services');

        return $query->result();
    }

    /**
     * get employees
     * @return mixed
     */
    public function getEmployees() {
        $this->db->where('employee_status', self::STATUS_ACTIVE);
        $query = $this->db->get('paradise_employee');

        return $query->result();
    }
}