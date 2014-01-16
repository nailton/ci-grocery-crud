<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Pagamentos
*/
class Pagamentos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();      

    /* Standard Libraries of codeigniter are required */
    $this->load->database();
    $this->load->helper('url');
    /* ------------------ */ 

    $this->load->library('grocery_CRUD');
  }

    public function index()
    {
      $crud = new grocery_CRUD();
      // $this->_example_output($output);
      $crud->set_theme('datatables');

       $crud->set_table('payments');
    $output = $crud->render();

    $this->_example_output($output);
        // echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
                // die();
    }

  public function exibe()
  {
    $this->grocery_crud->set_table('payments');
    $output = $this->grocery_crud->render();

    $this->_example_output($output);
  }

  function _example_output($output=null)
  {
    $this->load->view('our_template.php', $output);
  }

}