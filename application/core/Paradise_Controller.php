<?php

/**
 * Class Abstract_Controller
 */
class Paradise_Controller extends CI_Controller {

    public $smarty;
    public $controller;
    public $action;
    public $domain;
    public $layout;

    /**
     *  Init layout, variables, third party
     */
    public function __construct() {
        parent::__construct();
        $CI = get_instance();

        $this->_init();
        $this->_loadThirdParty();
        $this->_isLoggedIn();
        
        $CI->smarty->assign('domain', site_url());
    }

    /**
     *  Init function
     */
    private function _init() {
        $this->layout     = 'layout.tpl';
        $this->controller = $this->router->fetch_class();
        $this->action     = $this->router->fetch_method();      
    }

    /**
     *  Load Smarty
     */
    private function _loadThirdParty() {
        $this->load->library('SmartyLoader');
        $this->smarty = $this->smartyloader;                 
    }

    private function _isLoggedIn() {
        if($this->controller != 'auth' AND !$this->session->userdata('adminId')) {
            redirect('auth');
        }
    }

    /**
     * Disable layout for ajax
     */
    public function disableLayout() {
        $this->layout = 'empty.tpl';
    }
}