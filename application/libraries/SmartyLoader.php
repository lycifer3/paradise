<?php

require_once(APPPATH . 'third_party/smarty/Smarty.class.php');

class SmartyLoader extends Smarty 
{

	function __construct()
	{		        
        parent::__construct();
        $this->plugins_dir  = APPPATH . 'third_party/smarty/plugins';
		$this->compile_dir  = APPPATH . 'templates_c';
		$this->template_dir = APPPATH . 'templates';        		                          		
	}
    
}

?>