<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Events_Model
 */
Class Events_Model extends CI_Model {

    const BIRTHDAY_TITLE = "День рождения ";
    const EVENT_TYPE     = 'event';
    const BIRTHDAY_TYPE  = 'birthday';

    /**
     * @param $data
     */
    public function save($data) {
        $this->db->set('event_name', $data['eventTitle']);
        $this->db->set('event_date', $data['eventDate']);
        $this->db->insert('paradise_events');
    }

    /**
     * @param $data
     */
    public function updateEvent($data) {
        $this->db->where('event_id', $data['eventId']);
        $this->db->set('event_date', $data['eventDate']);
        $this->db->update('paradise_events');
    }

    /**
     * Delete event
     * @param $data
     */
    public function deleteEvent($data) {
        $this->db->where('event_id', $data['eventId']);
        $this->db->delete('paradise_events');
    }

    /**
     * Return all events
     * @return array
     */
    public function getEvents() {
        $allEvents = array();

        $query = $this->db->get('paradise_events');
        $result = $query->result();

        $iterator = 0;
        foreach ($result as $event) {
            $allEvents[$iterator]['id']    = $event->event_id;
            $allEvents[$iterator]['title'] = $event->event_name;
            $allEvents[$iterator]['start'] = $event->event_date;
            $allEvents[$iterator]['type']  = self::EVENT_TYPE;
            $iterator++;
        }

        $query = $this->db->get('paradise_users');
        $result = $query->result();

        foreach ($result as $user) {
            $allEvents[$iterator]['title'] = self::BIRTHDAY_TITLE .
                                             $user->user_surname  .
                                             ' '                  .
                                             $user->user_name;
            $allEvents[$iterator]['start'] = date("Y-") . date("m-d", strtotime($user->user_birthday));
            $allEvents[$iterator]['type']  = self::BIRTHDAY_TYPE;
            $iterator++;
        }

        $query = $this->db->get('paradise_employee');
        $result = $query->result();

        foreach ($result as $employee) {
            $allEvents[$iterator]['title'] = self::BIRTHDAY_TITLE . $employee->employee_surname . ' ' . $employee->employee_name;
            $allEvents[$iterator]['start'] = date("Y-") . date("m-d", strtotime($employee->employee_birthday));
            $allEvents[$iterator]['type']  = self::BIRTHDAY_TYPE;
            $iterator++;
        }

        return $allEvents;
    }

    public function getCountEvents() {
        $countEvents = 0;
        $this->db->like('event_date', date('Y-m-d'), 'both');
        $query = $this->db->get('paradise_events');
        $countEvents += $query->num_rows();

        $this->db->like('user_birthday', date('m-d'), 'both');
        $query = $this->db->get('paradise_users');
        $countEvents += $query->num_rows();

        $this->db->like('employee_birthday', date('m-d'), 'both');
        $query = $this->db->get('paradise_employee');
        $countEvents += $query->num_rows();

        return $countEvents;
    }
}