<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Auth_Model
 */
Class User_Model extends CI_Model {

    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    /**
     * Add/edit user
     * @param array $data
     * @param null $userId
     */
    public function save($data = array(), $userId = null) {
        $data['user_birthday'] = date("Y-m-d", strtotime($data['user_birthday']));

        if(empty($userId)) {
            $this->db->insert('paradise_users', $data);
        } else {
            $this->db->where('user_id', $userId);
            $this->db->update('paradise_users', $data);
        }
    }

    /**
     * Get users
     * @param $from
     * @return mixed
     */
    public function getUsers($from){
        $this->load->config('pagination');
        $this->db->where('user_status', self::STATUS_ACTIVE);
        $this->db->limit($this->pagination->per_page, $from);
        $query = $this->db->get('paradise_users');

        return $query->result();
    }

    /**
     * get count users
     * @return mixed
     */
    public function getCountUsers() {
        $query = $this->db->get('paradise_users');

        return $query->num_rows();
    }

    /**
     * Get one user by id
     * @param $userId
     * @return mixed
     */
    public function getUser($userId){
        $this->db->where('user_id', $userId);
        $query = $this->db->get('paradise_users');

        return $query->row();
    }

    /**
     * Delete user
     * @param $userId
     */
    public function deleteUser($userId){
        $this->db->set('user_status', self::STATUS_INACTIVE);
        $this->db->where('user_id', $userId);
        $this->db->update('paradise_users');
    }
}