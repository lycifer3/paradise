<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class History_Model
 */
Class History_Model extends CI_Model {
    const CLIENT_STATUS   = 1;

    /**
     * Get visits
     * @return mixed
     */
    public function getVisits($from) {
        $this->db->from('paradise_visits');
        $this->db->join('paradise_users', 'paradise_users.user_id = paradise_visits.user_id');
        $this->db->where('paradise_users.user_status', self::CLIENT_STATUS);
        $this->db->limit($this->pagination->per_page, $from);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * Get count visits
     * @return mixed
     */
    public function getCountVisits() {
        $query = $this->db->get('paradise_visits');

        return $query->num_rows();
    }
}