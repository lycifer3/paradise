<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Search
 */
Class Search extends Paradise_Controller {
    /**
     * function construct
     */
    function __construct() {
        parent::__construct();
        $this->load->model('search_model', 'search');
    }

    public function index() {
        $users = array();

        if($this->input->post() AND $this->input->post('search') != '') {
              $users = $this->search->findUsers($this->input->post('search'));
        }

        $this->smarty->assign('users', $users);
    }
}