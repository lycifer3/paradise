<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Dates
 */
class Events extends Paradise_Controller {

    /**
     *  Load model
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('events_model', 'events');
    }

    /**
     * Index action
     */
    public function index() {
        //echo gmdate("Y-m-d\TH:i:s\Z");
        //  die;
    }

    public function save() {
        if($this->input->post()) {
            $this->events->save($this->input->post());
        }
        $this->disableLayout();
    }

    public function delete() {
        if($this->input->post()) {
            $this->events->deleteEvent($this->input->post());
        }
        $this->disableLayout();
    }

    public function update() {
        if($this->input->post()) {
            $this->events->updateEvent($this->input->post());
        }
        $this->disableLayout();
    }
    
    public function source() {
        echo json_encode($this->events->getEvents());
        $this->disableLayout();
    }
}
