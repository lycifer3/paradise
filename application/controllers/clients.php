<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Clients
 */
class Clients extends Paradise_Controller {

    /**
     *  Load model
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model',    'user');
        $this->load->model('visit_model',   'visit');
        $this->load->model('order_model',   'order');
        $this->load->model('history_model', 'history');
    }

    /**
     * Index action
     */
    public function index($page = 0) {
        $config['base_url']   = '/clients/index';
        $config['total_rows'] = $this->user->getCountUsers();

        $this->pagination->initialize($config);

        $this->smarty->assign('pagination', $this->pagination->create_links());
        $this->smarty->assign('users', $this->user->getUsers($page));
    }

    /**
     * Add/edit user
     * @param null $userId
     */
    public function save($userId = null) {
        $errors    = array();
        $errorFlag = true;
        $data      = $this->input->post();

        if($this->input->post()) {
            $requiredFields = array(
                'user_name' => 'Имя'
            );

            foreach($requiredFields as $fieldKey => $field) {
                if(empty($data[$fieldKey])) {
                    $errors[]  = 'Не введено поле ' . $field;
                    $errorFlag = false;
                }
            }

            if (empty($errors) AND $_FILES['userFile']['size'] > 0) {
                $this->load->library('PhpUpload');

                $this->phpupload->setFile($_FILES['userFile'])
                     ->setFileExtensions(array('jpg', 'jpeg', 'png'))
                     ->setFileRename(TRUE)
                     ->setMaxSize(10)
                     ->addThumbnail('/images/clients/', 100,  115, 'small', 'adaptive')
                     ->addThumbnail('/images/clients/', 300, 200,  'big',   'adaptive')
                     ->upload();

                $fileErrors = $this->phpupload->getErrors();
                $data['user_avatar'] = $this->phpupload->getFileName();

                if(count($fileErrors)) {
                    $errors = $fileErrors;
                    $errorFlag = false;
                }
            }

            if($errorFlag) {
                $this->user->save($data, $userId);
                redirect('clients');
            }
        }

        if(!empty($userId)) {
            $this->smarty->assign('user',   $this->user->getUser($userId));
        }

        $this->smarty->assign('errors', $errors);
        $this->smarty->assign('post',   $data);

    }

    /**
     * delete client
     * @param null $userId
     */
    public function delete($userId = null) {
        if(!empty($userId)) {
            $this->user->deleteUser($userId);
            redirect('clients');
        }
    }

    /**
     * View client
     * @param $userId
     */
    public function view($userId = null) {
        if(!empty($userId)) {
        $this->smarty->assign('user',   $this->user->getUser($userId));
        }
    }

    /**
     *
     */
    public function history($page = 0) {
        $config['base_url']   = '/clients/history';
        $config['total_rows'] = $this->history->getCountVisits();

        $this->pagination->initialize($config);

        $this->smarty->assign('pagination', $this->pagination->create_links());
        $this->smarty->assign('visits', $this->history->getVisits($page));
    }

    /**
     * Add visit
     */
    public function visit() {
        $errors    = array();
        $errorFlag = true;
        $data = $this->input->post();

        if($this->input->post()) {
            $requiredFields = array(
                'visit_date'    => 'дата',
                'visit_client'  => 'клиент',
                'visit_master'  => 'мастер',
            );

            foreach($requiredFields as $fieldKey => $field) {
                if(empty($data[$fieldKey])) {
                    $errors[] = 'Не выбрано поле ' . $field;
                    $errorFlag = false;
                }
            }

            if($errorFlag) {
                $lastId = $this->visit->addVisit($data);
                redirect('/clients/order/' . $lastId );
            }
        }


        $this->smarty->assign('errors',     $errors);
        $this->smarty->assign('post',       $data);
        $this->smarty->assign('users',      $this->visit->getUsers());
        $this->smarty->assign('products',   $this->visit->getProducts());
        $this->smarty->assign('services',   $this->visit->getServices());
        $this->smarty->assign('employees',  $this->visit->getEmployees());
    }

    public function order($visitId = null) {
        if(!empty($visitId)) {
            $this->smarty->assign('visit',    $this->order->getVisit($visitId));
            $this->smarty->assign('products', $this->order->getProducts($visitId));
            $this->smarty->assign('masters',  $this->order->getMasters($visitId));
            $this->smarty->assign('services', $this->order->getServices($visitId));
        }

        if($this->input->post()) {
            $this->order->updateCounts($this->input->post(), $visitId);
            redirect('/clients/history');
        }
    }
}