<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Umustsee extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{	
		parent:: __construct();
		$this->load->helper('url');
		$this->load->database();
	}
	public function index()
	{
			  // loading the required files
	  $this->load->model('contenu_model', 'contenu');
	  // view data
	  $data['view_name'] = 'infscroll_customlisting';
	  $data['view_data']['contenu'] = $this->contenu->get_contenu();
	  $this->load->view('index', $data);
	}
	public function ajax_contenu_list($offset = null) {
	  $this->load->model('contenu_model', 'contenu');
	  if ($this->contenu->get_contenu(3,$offset)) {
		$data['contenu'] = $this->contenu->get_contenu(3,$offset);
		$this->load->view('ajax_listing',$data);
	  }
	  else {
		echo 'End';
	  }
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */