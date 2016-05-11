<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Auth
 */
class Auth extends Paradise_Controller {

    /**
     *  Load model
     */
    public function __construct() {
        parent::__construct();
        $this->layout = 'login.tpl';
        $this->load->model('auth_model', 'auth');
    }

    /**
     * Index action
     */
    public function index() {
        $error = false;

        if($this->session->userdata('adminId')) {
            redirect('index');
        }

        if($this->input->post()) {
            $admin = $this->auth->authenticate($this->input->post('user_login'), $this->input->post('user_password'));
            if(!empty($admin)) {
                $this->session->set_userdata('adminId', $admin->admin_id);
                redirect('index');
            } else {
                $error = true;
            }
        }

        $this->smarty->assign('error', $error);
    }

    /**
     *  Admin Log out
     */
    public function logout() {
        $this->session->unset_userdata('adminId');
        redirect('auth');
    }
}
