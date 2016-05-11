<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Employee_Model extends CI_Model {
    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    /**
     * add/update employees
     * @param array $data
     * @param $employeeId
     */
    public function save($data = array(), $employeeId) {
        $data['employee_birthday'] = date("Y-m-d", strtotime($data['employee_birthday']));

        if(empty($employeeId)) {
            $this->db->insert('paradise_employee', $data);
        } else {
            $this->db->where('employee_id', $employeeId);
            $this->db->update('paradise_employee', $data);
        }
    }

    /**
     * add document
     * @param $employeeId
     */
    public function addDocument($data = array(), $employeeId) {
        $this->db->set('employee_id', $employeeId);
        $this->db->insert('paradise_documents', $data);
    }

    /**
     * get employees
     * @param $from
     * @return mixed
     */
    public function getEmployees($from) {
        $this->load->config('pagination');
        $this->db->where('employee_status', self::STATUS_ACTIVE);
        $this->db->limit($this->pagination->per_page, $from);
        $query = $this->db->get('paradise_employee');

        return $query->result();
    }

    /**
     * get count employee
     * @return mixed
     */
    public function getCountEmployee() {
        $query = $this->db->get('paradise_employee');

        return $query->num_rows();
    }

    /**
     * get employee
     * @param $employeeId
     * @return mixed
     */
    public function getEmployee($employeeId) {
        $this->db->where('employee_id', $employeeId);
        $query = $this->db->get('paradise_employee');

        return $query->row();
    }

    public function getDocuments() {
        $query = $this->db->get('paradise_documents');

        return $query->result();
    }

    /**
     * delete employee
     * @param $employeeId
     */
    public function deleteEmployee($employeeId) {
        $this->db->set('employee_status', self::STATUS_INACTIVE);
        $this->db->where('employee_id', $employeeId);
        $this->db->update('paradise_employee');
    }

    public function deleteDocument($documentId) {
        $this->db->where('document_id', $documentId);
        $this->db->delete('paradise_documents');
    }
}