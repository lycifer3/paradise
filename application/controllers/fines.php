<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Fines
 */
class Fines extends Paradise_Controller {
    /**
     * function construct
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('bonus_model', 'bonus');
    }

    public function index($page = 0) {
        $config['base_url']   = '/fines/index';
        $config['total_rows'] = $this->bonus->getCountFines();

        $this->pagination->initialize($config);

        $this->smarty->assign('pagination', $this->pagination->create_links());
        $this->smarty->assign('fines',    $this->bonus->getFines($page));
    }
}
