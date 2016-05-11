<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Product_Model
 */
Class Service_Model extends CI_Model {

    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    /**
     * add/update services
     * @param array $data
     * @param $serviceId
     */
    public function save($data = array(), $serviceId) {
        $data['service_date'] = date('Y-m-d H:i:s', time());

        if(empty($serviceId)) {
            $this->db->insert('paradise_services', $data);
        } else {
            $this->db->where('service_id', $serviceId);
            $this->db->update('paradise_services', $data);
        }
    }

    /**
     * get services
     * @param $from
     * @return mixed
     */
    public function getServices($from) {
        $this->load->config('pagination');
        $this->db->where('service_status', self::STATUS_ACTIVE);
        $this->db->limit($this->pagination->per_page, $from);
        $query = $this->db->get('paradise_services');

        return $query->result();
    }

    /**
     * get count services
     * @return mixed
     */
    public function getCountServices() {
        $query = $this->db->get('paradise_services');

        return $query->num_rows();
    }

    /**
     * get service
     * @param $serviceId
     * @return mixed
     */
    public function getService($serviceId) {
        $this->db->where('service_id', $serviceId);
        $query = $this->db->get('paradise_services');

        return $query->row();
    }

    /**
     * delete service
     * @param $serviceId
     */
    public function deleteService($serviceId) {
        $this->db->set('service_status', self::STATUS_INACTIVE);
        $this->db->where('service_id', $serviceId);
        $this->db->update('paradise_services');
    }
}