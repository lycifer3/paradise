<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Clients
 */
class Services extends Paradise_Controller {

    /**
     *  Load model
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('service_model', 'service');
    }

    /**
     * pagination
     * @param int $page
     */
    public function index($page = 0) {
        $config['base_url']   = '/services/index';
        $config['total_rows'] = $this->service->getCountServices();

        $this->pagination->initialize($config);

        $this->smarty->assign('pagination', $this->pagination->create_links());
        $this->smarty->assign('services',   $this->service->getServices($page));
    }

    /**
     * add/update services
     * @param null $serviceId
     */
    public function save($serviceId = null) {
        $errors = array();
        $errorFlag = true;
        $data = $this->input->post();

        if($this->input->post()) {
            $requiredFields = array(
                'service_name'  => 'название',
                'service_price' => 'цена'
            );

            foreach($requiredFields as $fieldKey => $field) {
                if(empty($data[$fieldKey])) {
                    $errors[]  = 'Не введено поле ' . $field;
                    $errorFlag = false;
                }
            }

            if($errorFlag) {
                $this->service->save($data, $serviceId);
                redirect('services');
            }
        }

        if(!empty($serviceId)) {
            $this->smarty->assign('service', $this->service->getService($serviceId));
        }

        $this->smarty->assign('errors', $errors);
        $this->smarty->assign('post',   $data);
    }

    public function view($serviceId = null) {
        if(!empty($serviceId)) {
            $this->smarty->assign('service', $this->service->getService($serviceId));
        }
    }

    /**
     * delete service
     * @param $serviceId
     */
    public function delete($serviceId) {
        if(!empty($serviceId)) {
            $this->service->deleteService($serviceId);
            redirect('services');
        }
    }
}



