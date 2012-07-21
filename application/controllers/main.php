<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

		$this->load->database();
		
		$this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
	
	public function index()
	{
		$crud = new grocery_CRUD();
		
		$this->grocery_crud->set_table('business');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);
	}
	
	public function businesses()
	{
		$crud = new grocery_CRUD();
		
		$this->grocery_crud->set_table('business');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);
	}
	
	public function categories()
	{
		$crud = new grocery_CRUD();
		
		$this->grocery_crud->set_table('category');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);
	}
	
	function _example_output($output = null)
    {
        $this->load->view('dbadmin.php',$output);    
    }
}
