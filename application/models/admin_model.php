<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Admin_Model
 */
Class Admin_Model extends CI_Model {

    const ADMIN_ACTIVE   = 1;
    const ADMIN_UNACTIVE = 0;

    /**
     * @param $userId
     * @return mixed
     */
    public function getAdmin($userId) {
        $this->db->where('admin_ud',    $userId);
        $query = $this->db->get('paradise_admin');

        return $query->result();
    }
}    