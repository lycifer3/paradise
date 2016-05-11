<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Clients
 */
class Employee extends Paradise_Controller {

    /**
     *  Load model
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('employee_model', 'employee');
    }

    /**
     * Index action
     */
    public function index($page = 0) {
        $config['base_url']   = '/employee/index';
        $config['total_rows'] = $this->employee->getCountEmployee();

        $this->pagination->initialize($config);

        $this->smarty->assign('pagination', $this->pagination->create_links());
        $this->smarty->assign('employees', $this->employee->getEmployees($page));
    }

    /**
     * add/update employees
     * @param null $employeeId
     */
    public function save($employeeId = null) {
        $errors    = array();
        $errorFlag = true;
        $data      = $this->input->post();

        if($this->input->post()) {
            $requiredFields = array(
                'employee_name' => 'Имя'
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
                    ->addThumbnail('/images/employee/', 120, 140, 'small', 'adaptive')
                    ->addThumbnail('/images/employee/', 300, 200, 'big',   'adaptive')
                    ->upload();

                $fileErrors = $this->phpupload->getErrors();
                $data['employee_files'] = $this->phpupload->getFileName();

                if(count($fileErrors)) {
                    $errors = $fileErrors;
                    $errorFlag = false;
                }
            }

            if($errorFlag) {
                $this->employee->save($data, $employeeId);
                redirect('employee');
            }
        }

        if(!empty($employeeId)) {
            $this->smarty->assign('employee', $this->employee->getEmployee($employeeId));
        }

        $this->smarty->assign('errors', $errors);
        $this->smarty->assign('post',   $data);
    }

    /**
     * delete employee
     * @param null $employeeId
     */
    public function delete($employeeId = null) {
        if(!empty($employeeId)) {
            $this->employee->deleteEmployee($employeeId);
            redirect('employee');
        }
    }

    /**
     * view employee
     * @param $employeeId
     */
    public function view($employeeId) {
        $data = $this->input->post();
        $errors = array();
        $errorFlag = true;

        if($this->input->post()) {
            $requiredFields = array('document_name' => 'название документа');

            foreach($requiredFields as $fieldKey => $field) {
                if(empty($data[$fieldKey])) {
                    $errors[] = 'Не введено поле ' . $field;
                    $errorFlag = false;
                }
            }

            if (empty($errors) AND $_FILES['employeeFile']['size'] > 0) {
                $this->load->library('PhpUpload');

                $this->phpupload->setFile($_FILES['employeeFile'])
                    ->setFileExtensions(array('zip', 'rar', 'docx'))
                    ->saveOriginal('/images/employee/documents')
                    ->setFileRename(TRUE)
                    ->setMaxSize(10)
                    ->upload();

                $fileErrors = $this->phpupload->getErrors();
                $data['document_file']      = $this->phpupload->getFileName();
                $data['document_extension'] = $this->phpupload->getFileExtension();

                if(count($fileErrors)) {
                    $errors = $fileErrors;
                    $errorFlag = false;
                }
            }

            if($errorFlag) {
                $this->employee->addDocument($data, $employeeId);
                redirect('/employee/view/' . $employeeId);
            }
        }

        if(!empty($employeeId)) {
            $this->smarty->assign('employee', $this->employee->getEmployee($employeeId));
            $this->smarty->assign('documents', $this->employee->getDocuments());
        }

        $this->smarty->assign('errors', $errors);
    }

    /**
     * delete documents
     * @param null $documentId
     * @param $documentFile
     */
    public function deleteDocument($documentId = null, $documentFile) {
        if(!empty($documentId)) {
            $this->employee->deleteDocument($documentId);
        }

        unlink('images/employee/documents/' . $documentFile);
        redirect('employee');
    }

}



