<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Bonus_Model
 */
Class Bonus_Model extends CI_Model {
    const BONUS_TYPE = 1;
    const FINE_TYPE  = 2;

    /**
     * Get employee
     * @return mixed
     */
    public function getEmployees() {
        $query = $this->db->get('paradise_employee');

        return $query->result();
    }

    /**
     * Add bonus
     * @param array $data
     * @param $bonusType
     */
    public function addBonus($data = array(), $bonusType) {
        $data['bonus_date'] = date("Y-m-d", strtotime($data['bonus_date']));
        $this->db->set('bonus_type', $bonusType);
        $this->db->insert('paradise_bonuses', $data);
    }

    /**
     * Get bonuses
     * @param $from
     * @return mixed
     */
    public function getBonuses($from) {
        $this->load->config('pagination');
        $this->db->from('paradise_bonuses');
        $this->db->join('paradise_employee', 'paradise_employee.employee_id = paradise_bonuses.employee_id');
        $this->db->where('bonus_type', self::BONUS_TYPE);
        $this->db->limit($this->pagination->per_page, $from);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * Get count bonuses
     * @return mixed
     */
    public function getCountBonuses() {
        $this->db->where('bonus_type', self::BONUS_TYPE);
        $query = $this->db->get('paradise_bonuses');

        return $query->num_rows();
    }

    /**
     * Get fines
     * @param $from
     * @return mixed
     */
    public function getFines($from) {
        $this->load->config('pagination');
        $this->db->from('paradise_bonuses');
        $this->db->join('paradise_employee', 'paradise_employee.employee_id = paradise_bonuses.employee_id');
        $this->db->where('bonus_type', self::FINE_TYPE);
        $this->db->limit($this->pagination->per_page, $from);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * Get count fines
     * @return mixed
     */
    public function getCountFines() {
        $this->db->where('bonus_type', self::FINE_TYPE);
        $query = $this->db->get('paradise_bonuses');

        return $query->num_rows();
    }
}