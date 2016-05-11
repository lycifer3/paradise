<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Search_Model extends CI_Model {

    /**
     * User types
     */
    const USER_TYPE     = 1;
    const EMPLOYEE_TYPE = 2;

    /**
     * @param $data
     * @return array
     */
    public function findUsers($data) {
        $data     = trim($data);
        $words    = explode(' ', $data);
        $allUsers = array();

        foreach ($words as $word) {
            $this->db->or_like('user_name', $word, 'both');
            $this->db->or_like('user_surname', $word, 'both');
        }

        $query = $this->db->get('paradise_users');
        $userResults = $query->result();

        foreach ($words as $word) {
            $this->db->or_like('employee_name', $word, 'both');
            $this->db->or_like('employee_surname', $word, 'both');
        }

        $query = $this->db->get('paradise_employee');
        $employeeResults = $query->result();

        $iterator = 0;
        foreach($userResults as $user) {
            $allUsers[$iterator]['userId']      = $user->user_id;
            $allUsers[$iterator]['userName']    = $user->user_name;
            $allUsers[$iterator]['userSurname'] = $user->user_surname;
            $allUsers[$iterator]['userAvatar']  = $user->user_avatar;
            $allUsers[$iterator]['userType']    = self::USER_TYPE;
            $iterator++;
        }

        foreach($employeeResults as $user) {
            $allUsers[$iterator]['userId']      = $user->employee_id;
            $allUsers[$iterator]['userName']    = $user->employee_name;
            $allUsers[$iterator]['userSurname'] = $user->employee_surname;
            $allUsers[$iterator]['userAvatar']  = $user->employee_files;
            $allUsers[$iterator]['userType']    = self::EMPLOYEE_TYPE;
            $iterator++;
        }

        return $allUsers;
    }
}