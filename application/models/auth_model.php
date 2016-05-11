<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Auth_Model
 */
Class Auth_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    /**
     * @param $userLogin
     * @param $userPassword
     * @return bool
     */
    public function authenticate($userLogin, $userPassword) {
        $this->db->where('admin_login',    $userLogin);
        $this->db->where('admin_password', md5($userPassword));
        $this->db->where('admin_activity', Admin_Model::ADMIN_ACTIVE);
        $query = $this->db->get('paradise_admin');

        return $query->row();
    }
}    