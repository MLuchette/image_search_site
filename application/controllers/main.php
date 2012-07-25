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
		$this->grocery_crud->display_as('categoryID','Category');
		$this->grocery_crud->set_relation('categoryID','category','category');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);
		
		
	}
	
	public function businesses()
	{
		$crud = new grocery_CRUD();
		$this->grocery_crud->set_table('business');
		$this->grocery_crud->display_as('categoryID','Category');
		$this->grocery_crud->set_relation('categoryID','category','category');
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
	
	function editImages()
	{
		$this->load->library('Image_CRUD');
		$image_crud = new Image_CRUD();
	
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_3')
		->set_relation_field('category_id')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads');
			
		$output = $image_crud->render();
	
		$this->images($output);
	}
	
	function _example_output($output = null)
    {
		
        $this->load->view('dbadmin.php',$output);    
    }
	
	function images($output = null)
	{
		$this->load->view('images.php',$output);	
	}
}
