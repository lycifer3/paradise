<?php
/**
 * Class PostController
 */
class PostController {
    /**
     *  Init function
     */
    public function init() {
        $CI = get_instance();

        $CI->load->model('events_model', 'events');

        $CI->smarty->assign('controller', $CI->controller);      
        $CI->smarty->assign('action',     $CI->action);       
        $CI->smarty->assign('session',    (object) $CI->session->userdata); 
        $CI->smarty->assign('template',   $CI->controller . "/" . $CI->action . ".tpl");
        $CI->smarty->assign('count',      $CI->events->getCountEvents());

        $CI->smarty->display($CI->layout);
    }
}