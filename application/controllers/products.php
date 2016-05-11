<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Clients
 */
class Products extends Paradise_Controller {

    /**
     *  Load model
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model', 'product');
    }

    /**
     * pagination
     * @param int $page
     */
    public function index($page = 0) {
        $config['base_url']   = '/products/index';
        $config['total_rows'] = $this->product->getCountProducts();

        $this->pagination->initialize($config);

        $this->smarty->assign('pagination', $this->pagination->create_links());
        $this->smarty->assign('products',      $this->product->getProducts($page));
    }

    /**
     * Add/update product
     * @param null $productId
     */
    public function save($productId = null) {
        $errors    = array();
        $errorFlag = true;
        $data = $this->input->post();

        if($this->input->post()) {
            $requiredFields = array(
                'product_name'            => 'название',
                'product_price_purchases' => 'цена закупки',
                'product_price'           => 'цена продажи'
            );

            foreach($requiredFields as $fieldKey => $field) {
                if(empty($data[$fieldKey])) {
                    $errors[]  = 'Не введено поле ' . $field;
                    $errorFlag = false;
                }
            }

            if (empty($errors) AND $_FILES['productFile']['size'] > 0) {
                $this->load->library('PhpUpload');

                $this->phpupload->setFile($_FILES['productFile'])
                    ->setFileExtensions(array('jpg', 'jpeg', 'png'))
                    ->setFileRename(TRUE)
                    ->setMaxSize(10)
                    ->addThumbnail('/images/products/', 100,  115, 'small', 'adaptive')
                    ->addThumbnail('/images/products/', 300, 200,  'big',   'adaptive')
                    ->upload();

                $fileErrors = $this->phpupload->getErrors();
                $data['product_photo'] = $this->phpupload->getFileName();

                if(count($fileErrors)) {
                    $errors = $fileErrors;
                    $errorFlag = false;
                }
            }

            if($errorFlag) {
                $this->product->save($data, $productId);
                redirect('products');
            }
        }

        if(!empty($productId)) {
            $this->smarty->assign('product', $this->product->getProduct($productId));
        }

        $this->smarty->assign('errors', $errors);
        $this->smarty->assign('post', $data);
    }

    /**
     * view product
     * @param $productId
     */
    public function view($productId = null) {
        if(!empty($productId)) {
            $this->smarty->assign('product', $this->product->getProduct($productId));
        }
    }

    /**
     * delete product
     * @param $productId
     */
    public function delete($productId) {
        if(!empty($productId)) {
            $this->product->deleteProduct($productId);
            redirect('products');
        }
    }
}



