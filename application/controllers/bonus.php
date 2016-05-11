<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Bonus
 */
class Bonus extends Paradise_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('bonus_model', 'bonus');
    }

    public function index($page = 0) {
        $config['base_url']   = '/bonus/index';
        $config['total_rows'] = $this->bonus->getCountBonuses();

        $this->pagination->initialize($config);

        $this->smarty->assign('pagination', $this->pagination->create_links());
        $this->smarty->assign('bonuses',    $this->bonus->getBonuses($page));
    }

    public function add($bonusType = null) {
        $data = $this->input->post();
        $errors = array();
        $errorFlag = true;

        if(!empty($bonusType)) {
            $this->smarty->assign('bonusType', $bonusType);
        }

        if($this->input->post()) {
            $requiredFields = array('bonus_date'     => 'дата',
                                    'employee_id'    => 'сотрудник',
                                    'bonus_reason'   => 'причина',
                                    'bonus_sum'      => 'сумма'
            );

            foreach($requiredFields as $fieldKey => $field) {
                if(empty($data[$fieldKey])) {
                    $errors[]  = 'Не введено поле ' . $field;
                    $errorFlag = false;
                }
            }

            if($errorFlag) {
                $this->bonus->addBonus($data, $bonusType);
                if($bonusType == 2) {
                    redirect('fines');
                } else {
                    redirect('bonus');
                }
            }
        }

        $this->smarty->assign('errors',    $errors);
        $this->smarty->assign('employees', $this->bonus->getEmployees());
    }
}
